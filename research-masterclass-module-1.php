<?php
// Free Module 1 of the Research Masterclass: a self-contained interactive
// workbook (its own styles and script), served as-is apart from the tracking
// snippet injected into its <head> below.
header('Content-Type: text/html; charset=utf-8');

$uw_html = file_get_contents(__DIR__ . '/assets/research-masterclass/module-1.html');

// Meta Pixel, gated on the same advertising consent as every main-site page
// (partials/head.php): consent.js first because it defines uwConsent, then the
// shared partials/meta-pixel.php so the pixel IDs still live in one place.
// This page can't include partials/head.php itself (that would wrap the
// workbook in the site chrome), and asset_url() is defined there, so the
// cache-busting version is added inline.
$uw_ver = function ($path) {
    $file = __DIR__ . $path;
    return $path . (is_file($file) ? '?v=' . filemtime($file) : '');
};
ob_start();
?>
<link rel="stylesheet" href="<?php echo $uw_ver('/styles/consent.css'); ?>" />
<script src="<?php echo $uw_ver('/js/consent.js'); ?>"></script>
<script>
  /* If consent.js could not load, fail closed: nothing tracks. */
  window.uwConsent = window.uwConsent || { onGrant: function () {}, onRevoke: function () {}, has: function () { return false; }, open: function () {}, status: function () { return null; } };
</script>
<?php
$uw_pixel_consent_gated = true;
include __DIR__ . '/partials/meta-pixel.php';
$uw_inject = ob_get_clean();

// Insert just before </head>. If the workbook is ever restructured and has no
// </head>, serve it unchanged rather than break it.
$uw_pos = stripos($uw_html, '</head>');
if ($uw_pos !== false) {
    $uw_html = substr_replace($uw_html, $uw_inject, $uw_pos, 0);
}
echo $uw_html;
