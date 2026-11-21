<?php
/**
 * Single article, served by routes.php at /blog/<slug> for blog posts and at
 * /research-awards/<slug> for award write-ups. Finds the post in
 * data/posts.php by its slug; 404s if there is no match.
 *
 * Optional post fields read here (all have safe fallbacks, so a post without
 * them renders exactly as before):
 *   meta_title        plain-text <title> (the site suffix is added when it fits)
 *   meta_description  plain-text meta description (falls back to `excerpt`)
 *   updated           ISO date of the last material edit (shown, and sent to
 *                     search engines as dateModified)
 *   wiki_links        list of '/wiki/<section>/<slug>' paths; the published
 *                     ones render as a "Related guides" block under the post
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/data/posts.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/data/team.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/data/wiki.php';

// Derive the requested slug from the URL (routes.php has already validated the
// shape), noting which of the two prefixes was used so a request under the
// wrong one can be redirected rather than serving the article at two URLs.
$reqPath  = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '';
$slugPath = strtolower(trim(rawurldecode($reqPath), '/'));
$slugPath = preg_replace('#\.(html|php)$#', '', $slugPath);
$requestedUnder = '';
if (preg_match('#^(blog|research-awards)/#', $slugPath, $prefixMatch)) {
    $requestedUnder = $prefixMatch[1];
    $slugPath = substr($slugPath, strlen($requestedUnder) + 1);
}

// Find the matching post.
$post = null;
foreach ($blogPosts as $p) {
    if ($p['slug'] === $slugPath) { $post = $p; break; }
}
// Not a blog post: it may be a research award from the CRM. Only consulted
// when nothing matched, so ordinary blog pages never trigger a CRM fetch.
if ($post === null) {
    foreach (usmlewise_crm_award_posts() as $p) {
        if ($p['slug'] === $slugPath) { $post = $p; break; }
    }
}
if ($post === null) {
    http_response_code(404);
    require $_SERVER['DOCUMENT_ROOT'] . '/404.php';
    exit;
}

// Award write-ups belong under /research-awards/ and blog posts under /blog/.
// Moving the awards off the blog left old /blog/<award-slug> links in the wild,
// so point them (and crawlers) at the canonical home instead of 404ing.
$canonicalPath = usmlewise_post_url($post);
if ($requestedUnder !== '' && '/' . $requestedUnder . '/' . $slugPath !== $canonicalPath) {
    header('Location: ' . $canonicalPath, true, 301);
    exit;
}

$fmtDate = function ($iso) {
    $ts = strtotime($iso);
    return $ts ? date('j M Y', $ts) : $iso;
};

$isAward   = usmlewise_post_is_award($post);
$canonical = 'https://usmlewise.com' . $canonicalPath;

// ---- Title and description ----
// A hand-written meta_title wins; the site suffix is added only while the whole
// title stays within 60 characters. Awards (CRM-authored) and posts without a
// meta_title keep the previous behaviour.
$metaTitle = trim((string) ($post['meta_title'] ?? ''));
if ($isAward || $metaTitle === '') {
    $pageTitle = htmlspecialchars($post['title']) . ($isAward ? ' | USMLE Wise Research Awards' : ' | USMLE Wise Blog');
} else {
    $withSite  = $metaTitle . ' | USMLE Wise';
    $pageTitle = htmlspecialchars(mb_strlen($withSite) <= 60 ? $withSite : $metaTitle, ENT_QUOTES, 'UTF-8');
}
$metaDescription = trim((string) ($post['meta_description'] ?? ''));
$pageDescription = $metaDescription !== ''
    ? htmlspecialchars($metaDescription, ENT_QUOTES, 'UTF-8')
    : htmlspecialchars($post['excerpt'], ENT_QUOTES, 'UTF-8', false); // excerpts are typed in the CRM; head.php prints this raw

// ---- Dates, byline, social tags ----
$datePublished = (string) ($post['date'] ?? '');
$dateModified  = trim((string) ($post['updated'] ?? '')) !== '' ? (string) $post['updated'] : $datePublished;
$showUpdated   = $dateModified !== '' && $dateModified !== $datePublished;

$authorName   = trim((string) ($post['author'] ?? '')) !== '' ? trim((string) $post['author']) : 'USMLE Wise Team';
$authorSlug   = null;
$authorRole   = '';
foreach (usmlewise_team_members() as $teamSlug => $teamMember) {
    $teamName = trim(html_entity_decode(strip_tags((string) ($teamMember['name'] ?? '')), ENT_QUOTES, 'UTF-8'));
    if ($teamName !== '' && strcasecmp($teamName, $authorName) === 0) {
        $authorSlug = $teamSlug;
        $authorRole = trim(html_entity_decode(strip_tags((string) ($teamMember['role'] ?? '')), ENT_QUOTES, 'UTF-8'));
        break;
    }
}

$bodyClass   = 'msp';
$stylesheets = ['/styles/blog.css', '/styles/blog-post.css'];
$scripts     = ['/js/blog.js'];
$ogType      = 'article';
$ogPublished = $datePublished;
$ogModified  = $dateModified;
if (!empty($post['image'])) {
    $preloadImage = $post['image'];
    $ogImage      = $post['image'];
}

// ---- Structured data ----
$plain = static function (string $s): string {
    return trim(html_entity_decode(strip_tags($s), ENT_QUOTES, 'UTF-8'));
};
$absUrl = static function (string $u): string {
    return ($u !== '' && $u[0] === '/') ? 'https://usmlewise.com' . $u : $u;
};
$ldDescription = $metaDescription !== '' ? $metaDescription : $plain((string) ($post['excerpt'] ?? ''));
$ldAuthor = $authorSlug !== null
    ? array_filter([
        '@type'    => 'Person',
        'name'     => $authorName,
        'url'      => 'https://usmlewise.com/team/' . $authorSlug,
        'jobTitle' => $authorRole,
    ])
    : ['@type' => 'Organization', 'name' => $authorName, 'url' => 'https://usmlewise.com'];
$ldPost = array_filter([
    '@type'            => $isAward ? 'Article' : 'BlogPosting',
    'headline'         => $plain((string) $post['title']),
    'description'      => $ldDescription,
    'mainEntityOfPage' => $canonical,
    'datePublished'    => $datePublished,
    'dateModified'     => $dateModified,
    'image'            => !empty($post['image']) ? $absUrl((string) $post['image']) : '',
    'author'           => $ldAuthor,
    'publisher'        => [
        '@type' => 'Organization',
        'name'  => 'USMLE Wise',
        'url'   => 'https://usmlewise.com',
        'logo'  => ['@type' => 'ImageObject', 'url' => 'https://usmlewise.com/assets/usmle-design-system/assets/Logo-Horizontal.svg'],
    ],
]);
$ld = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        $ldPost,
        [
            '@type'           => 'BreadcrumbList',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => 'https://usmlewise.com/'],
                ['@type' => 'ListItem', 'position' => 2, 'name' => $isAward ? 'Research Awards' : 'Blog', 'item' => 'https://usmlewise.com' . ($isAward ? '/research-awards' : '/blog')],
                ['@type' => 'ListItem', 'position' => 3, 'name' => $plain((string) $post['title']), 'item' => $canonical],
            ],
        ],
    ],
];

// ---- Related reading ----
// Published wiki guides the post points at (a draft is never shown), then up to
// three other posts: same category first, newest first.
$relatedGuides = [];
foreach ((array) ($post['wiki_links'] ?? []) as $guidePath) {
    if (is_string($guidePath) && preg_match('#\A/wiki/([a-z0-9-]+/[a-z0-9-]+)\z#', $guidePath, $gm)) {
        $guide = usmlewise_wiki_all()[$gm[1]] ?? null;
        if ($guide !== null && $guide['status'] === 'published') {
            $relatedGuides[] = $guide;
        }
    }
}
$relatedPosts = [];
if (!$isAward) {
    $sameCategory = [];
    $otherPosts   = [];
    foreach (usmlewise_blog_feed_posts($blogPosts) as $candidate) {
        if ($candidate['slug'] === $post['slug']) {
            continue;
        }
        if (($candidate['category'] ?? '') === ($post['category'] ?? '')) {
            $sameCategory[] = $candidate;
        } else {
            $otherPosts[] = $candidate;
        }
    }
    $relatedPosts = array_slice(array_merge($sameCategory, $otherPosts), 0, 3);
}

include $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';
?>
<main>
  <script type="application/ld+json"><?php echo json_encode($ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG); ?></script>

  <article class="post">
    <header class="post-hero">
      <div class="msp-wrap">
        <a class="post-back" href="<?php echo $isAward ? '/research-awards' : '/blog'; ?>">
          <i data-lucide="arrow-left" width="14" height="14"></i>
          <?php echo $isAward ? 'All research awards' : 'All articles'; ?>
        </a>
        <div class="post-hero__inner reveal">
          <h1 class="post-hero__title"><?php echo htmlspecialchars($post['title']); ?></h1>
          <div class="post-hero__meta">
            <span class="post-hero__byline">By <?php if ($authorSlug !== null): ?><a href="/team/<?php echo htmlspecialchars($authorSlug); ?>"><?php echo htmlspecialchars($authorName); ?></a><?php if ($authorRole !== ''): ?>, <?php echo htmlspecialchars($authorRole); ?><?php endif; ?><?php else: ?><?php echo htmlspecialchars($authorName); ?><?php endif; ?></span>
            <?php if ($datePublished !== ''): ?>
            <span class="post-hero__dot" aria-hidden="true">&middot;</span>
            <time datetime="<?php echo htmlspecialchars($datePublished); ?>"><?php echo $fmtDate($datePublished); ?></time>
            <?php endif; ?>
            <?php if ($showUpdated): ?>
            <span class="post-hero__dot" aria-hidden="true">&middot;</span>
            <span>Updated <time datetime="<?php echo htmlspecialchars($dateModified); ?>"><?php echo $fmtDate($dateModified); ?></time></span>
            <?php endif; ?>
            <?php if (!empty($post['read']) && is_numeric($post['read'])): ?>
            <span class="post-hero__dot" aria-hidden="true">&middot;</span>
            <span><?php echo (int) $post['read']; ?> min read</span>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </header>

    <div class="msp-wrap">
      <div class="post-cover reveal blog-cover--<?php echo htmlspecialchars($post['category']); ?>"
           <?php if (!empty($post['image'])): ?>style="background-image:url('<?php echo htmlspecialchars($post['image']); ?>')"<?php endif; ?>></div>
    </div>

    <div class="msp-wrap">
      <div class="post-body reveal">
        <?php echo $post['body']; ?>
      </div>
    </div>
  </article>

  <?php if ($relatedGuides || $relatedPosts): ?>
  <!-- ============== RELATED READING ============== -->
  <section class="post-related" aria-label="Related reading">
    <div class="msp-wrap">
      <div class="post-related__inner">
        <?php if ($relatedGuides): ?>
        <h2 class="post-related__title">Related guides</h2>
        <ul class="post-related__list">
          <?php foreach ($relatedGuides as $guide): ?>
          <li>
            <a href="<?php echo htmlspecialchars(usmlewise_wiki_url($guide)); ?>">
              <span class="post-related__name"><?php echo htmlspecialchars((string) $guide['title']); ?></span>
              <?php if (!empty($guide['description'])): ?><span class="post-related__desc"><?php echo htmlspecialchars((string) $guide['description']); ?></span><?php endif; ?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
        <?php endif; ?>
        <?php if ($relatedPosts): ?>
        <h2 class="post-related__title">More from the blog</h2>
        <ul class="post-related__list">
          <?php foreach ($relatedPosts as $related): ?>
          <li>
            <a href="<?php echo htmlspecialchars(usmlewise_post_url($related)); ?>">
              <span class="post-related__name"><?php echo htmlspecialchars((string) $related['title']); ?></span>
              <?php if (!empty($related['date'])): ?><span class="post-related__desc"><?php echo $fmtDate($related['date']); ?></span><?php endif; ?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- ============== CTA ============== -->
  <section class="blog-cta">
    <div class="msp-wrap">
      <div class="blog-cta__panel reveal">
        <h2 class="blog-cta__title">Turn this into a plan for your Match.</h2>
        <p class="blog-cta__sub">
          Book a free guidance call and we’ll map your path to residency: Step scores, research, rotations, and application.
        </p>
        <a class="btn btn--primary btn--lg" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">
          Book a Guidance Call
        </a>
      </div>
    </div>
  </section>

</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
