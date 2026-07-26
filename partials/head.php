<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!-- Google tag (gtag.js) — GA4, migrated from old site -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1MMVZ5WKY2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-1MMVZ5WKY2');
</script>
<title><?php echo $pageTitle; ?></title>
<meta name="description" content="<?php echo $pageDescription; ?>" />
<link rel="canonical" href="<?php echo $canonical; ?>" />
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php echo $pageTitle; ?>" />
<meta property="og:description" content="<?php echo $pageDescription; ?>" />
<meta property="og:url" content="<?php echo $canonical; ?>" />
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Geist:wght@300;400;500;600;700&family=Source+Serif+4:ital,opsz,wght@0,8..60,400;0,8..60,600;1,8..60,400&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet" media="print" onload="this.media='all'" />
<noscript><link href="https://fonts.googleapis.com/css2?family=Geist:wght@300;400;500;600;700&family=Source+Serif+4:ital,opsz,wght@0,8..60,400;0,8..60,600;1,8..60,400&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet" /></noscript>
<?php if (!empty($preloadImage)): ?>
<link rel="preload" as="image" href="<?php echo $preloadImage; ?>" type="image/webp" fetchpriority="high" />
<?php endif; ?>
<link rel="icon" type="image/svg+xml" href="/assets/usmle-design-system/assets/emblem.svg" />
<?php
// Append the file's last-modified time as ?v= so browsers/CDNs fetch a fresh
// copy whenever a CSS/JS file changes, instead of serving a stale cached one.
function asset_url($path) {
    $file = $_SERVER['DOCUMENT_ROOT'] . $path;
    $ver = is_file($file) ? filemtime($file) : null;
    return $ver ? $path . '?v=' . $ver : $path;
}
?>
<link rel="stylesheet" href="<?php echo asset_url('/assets/usmle-design-system/styles.css'); ?>" />
<?php if (!empty($stylesheets)) foreach ($stylesheets as $css): ?>
<link rel="stylesheet" href="<?php echo asset_url($css); ?>" />
<?php endforeach; ?>
<script src="https://unpkg.com/lucide@0.469.0/dist/umd/lucide.min.js" defer></script>
<?php if (!empty($scripts)) foreach ($scripts as $js): ?>
<script src="<?php echo asset_url($js); ?>" defer></script>
<?php endforeach; ?>
<script src="<?php echo asset_url('/js/mobile-nav.js'); ?>" defer></script>
<script src="<?php echo asset_url('/js/uw-track.js'); ?>" defer></script>
</head>
<body class="<?php echo isset($bodyClass) ? $bodyClass : ''; ?>">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/nav.php'; ?>
