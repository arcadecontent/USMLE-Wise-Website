<?php
/**
 * Single blog article, served at /blog/<slug> by routes.php.
 * Finds the post in data/posts.php by its slug; 404s if there is no match.
 */

require $_SERVER['DOCUMENT_ROOT'] . '/data/posts.php';

// Derive the requested slug from the URL (routes.php has already validated the shape).
$reqPath  = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '';
$slugPath = strtolower(trim(rawurldecode($reqPath), '/'));
$slugPath = preg_replace('#\.(html|php)$#', '', $slugPath);
$slugPath = preg_replace('#^blog/#', '', $slugPath);

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

$fmtDate = function ($iso) {
    $ts = strtotime($iso);
    return $ts ? date('j M Y', $ts) : $iso;
};

$pageTitle       = htmlspecialchars($post['title']) . ' | USMLE Wise Blog';
$pageDescription = $post['excerpt'];
$canonical       = 'https://usmlewise.com/blog/' . $post['slug'];
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
