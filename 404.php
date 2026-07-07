<?php
$pageTitle = "Page Not Found | USMLE Wise";
$pageDescription = "The page you are looking for could not be found.";
$canonical = "https://usmlewise.com/404";
$bodyClass = "msp";
$stylesheets = [];
$scripts = [];
include $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';
?>
<section class="msp-section" style="text-align:center; padding-block: clamp(80px, 12vw, 160px);">
  <div class="msp-wrap">
    <h1 class="msp-h1">Page not found</h1>
    <p class="msp-lede" style="margin-inline: auto;">The page you requested does not exist or may have moved.</p>
    <div class="msp-cta-row" style="justify-content: center; margin-inline: auto;">
      <a class="btn btn--primary" href="/">Back to Home</a>
      <a class="btn btn--outline" href="/faq">FAQ</a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
