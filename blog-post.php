<?php
/**
 * Single article, served by routes.php at /blog/<slug> for blog posts and at
 * /research-awards/<slug> for award write-ups. Finds the post in
 * data/posts.php by its slug; 404s if there is no match.
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/data/posts.php';

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

$isAward         = usmlewise_post_is_award($post);
$pageTitle       = htmlspecialchars($post['title']) . ($isAward ? ' | USMLE Wise Research Awards' : ' | USMLE Wise Blog');
$pageDescription = $post['excerpt'];
$canonical       = 'https://usmlewise.com' . $canonicalPath;
$bodyClass       = 'msp';
$stylesheets     = ['/styles/blog.css', '/styles/blog-post.css'];
$scripts         = ['/js/blog.js'];
if (!empty($post['image'])) {
    $preloadImage = $post['image'];
}

include $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';
?>
<main>

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
            <time datetime="<?php echo htmlspecialchars($post['date']); ?>"><?php echo $fmtDate($post['date']); ?></time>
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

  <!-- ============== CTA ============== -->
  <section class="blog-cta">
    <div class="msp-wrap">
      <div class="blog-cta__panel reveal">
        <h2 class="blog-cta__title">Turn this into a plan for your Match.</h2>
        <p class="blog-cta__sub">
          Book a free guidance call and we’ll map your path to residency — Step scores, research, rotations, and application.
        </p>
        <a class="btn btn--primary btn--lg" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">
          Book a Guidance Call
        </a>
      </div>
    </div>
  </section>

</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
