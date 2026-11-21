<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!-- Cookie consent (js/consent.js): runs opt-out, no popup; tracking is on by default and the footer Cookie settings link turns it off. Flip OPT_IN in consent.js to restore the banner. -->
<script src="<?php echo asset_url('/js/consent.js'); ?>"></script>
<script>
  /* If consent.js could not load, fail closed: nothing tracks. */
  window.uwConsent = window.uwConsent || { onGrant: function () {}, onRevoke: function () {}, has: function () { return false; }, open: function () {}, status: function () { return null; } };

  /* Google tag (gtag.js), GA4: loaded only once analytics is allowed. */
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  uwConsent.onGrant('analytics', function () {
    var s = document.createElement('script');
    s.async = true;
    s.src = 'https://www.googletagmanager.com/gtag/js?id=G-1MMVZ5WKY2';
    document.head.appendChild(s);
    gtag('js', new Date());
    gtag('config', 'G-1MMVZ5WKY2');
  });
  uwConsent.onRevoke('analytics', function () {
    /* Google's documented switch: gtag.js sends nothing more for this ID. */
    window['ga-disable-G-1MMVZ5WKY2'] = true;
  });

  /* Our own analytics beacon (js/uw-track.js): same rule. */
  uwConsent.onGrant('analytics', function () {
    var s = document.createElement('script');
    s.src = '<?php echo asset_url('/js/uw-track.js'); ?>';
    document.head.appendChild(s);
  });
</script>
<?php $uw_pixel_consent_gated = true; include $_SERVER['DOCUMENT_ROOT'] . '/partials/meta-pixel.php'; ?>
<title><?php echo $pageTitle; ?></title>
<meta name="description" content="<?php echo $pageDescription; ?>" />
<link rel="canonical" href="<?php echo $canonical; ?>" />
<?php if (!empty($metaRobots)): ?>
<meta name="robots" content="<?php echo $metaRobots; ?>" />
<?php endif; ?>
<?php
// Social/preview tags. A page may set $ogType ('article'), $ogImage (a path
// or full URL) and $ogPublished / $ogModified (ISO dates). With no $ogImage,
// a default share image is used if one has been dropped in at
// /assets/og-default.png (or .jpg / .webp); with none, no image tag is sent.
$_ogType  = !empty($ogType) ? $ogType : 'website';
$_ogImage = !empty($ogImage) ? $ogImage : '';
if ($_ogImage === '') {
    foreach (['png', 'jpg', 'webp'] as $_ogExt) {
        if (is_file($_SERVER['DOCUMENT_ROOT'] . '/assets/og-default.' . $_ogExt)) {
            $_ogImage = '/assets/og-default.' . $_ogExt;
            break;
        }
    }
}
if ($_ogImage !== '' && $_ogImage[0] === '/') {
    $_ogImage = 'https://usmlewise.com' . $_ogImage;
}
?>
<meta property="og:type" content="<?php echo htmlspecialchars($_ogType, ENT_QUOTES, 'UTF-8'); ?>" />
<meta property="og:site_name" content="USMLE Wise" />
<meta property="og:title" content="<?php echo $pageTitle; ?>" />
<meta property="og:description" content="<?php echo $pageDescription; ?>" />
<meta property="og:url" content="<?php echo $canonical; ?>" />
<?php if ($_ogImage !== ''): ?>
<meta property="og:image" content="<?php echo htmlspecialchars($_ogImage, ENT_QUOTES, 'UTF-8'); ?>" />
<?php endif; ?>
<?php if ($_ogType === 'article' && !empty($ogPublished)): ?>
<meta property="article:published_time" content="<?php echo htmlspecialchars($ogPublished, ENT_QUOTES, 'UTF-8'); ?>" />
<?php endif; ?>
<?php if ($_ogType === 'article' && !empty($ogModified)): ?>
<meta property="article:modified_time" content="<?php echo htmlspecialchars($ogModified, ENT_QUOTES, 'UTF-8'); ?>" />
<?php endif; ?>
<meta name="twitter:card" content="<?php echo $_ogImage !== '' ? 'summary_large_image' : 'summary'; ?>" />
<meta name="twitter:title" content="<?php echo $pageTitle; ?>" />
<meta name="twitter:description" content="<?php echo $pageDescription; ?>" />
<?php if ($_ogImage !== ''): ?>
<meta name="twitter:image" content="<?php echo htmlspecialchars($_ogImage, ENT_QUOTES, 'UTF-8'); ?>" />
<?php endif; ?>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Geist:wght@300;400;500;600;700&family=Source+Serif+4:ital,opsz,wght@0,8..60,400;0,8..60,600;1,8..60,400&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet" media="print" onload="this.media='all'" />
<noscript><link href="https://fonts.googleapis.com/css2?family=Geist:wght@300;400;500;600;700&family=Source+Serif+4:ital,opsz,wght@0,8..60,400;0,8..60,600;1,8..60,400&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet" /></noscript>
<?php if (!empty($preloadImage)):
    // The type hint must match the file, or the browser may skip the preload.
    $_plExt  = strtolower(pathinfo((string) (parse_url($preloadImage, PHP_URL_PATH) ?: ''), PATHINFO_EXTENSION));
    $_plType = ['webp' => 'image/webp', 'jpg' => 'image/jpeg', 'jpeg' => 'image/jpeg', 'png' => 'image/png', 'avif' => 'image/avif'][$_plExt] ?? '';
?>
<link rel="preload" as="image" href="<?php echo $preloadImage; ?>"<?php if ($_plType !== '') echo ' type="' . $_plType . '"'; ?> fetchpriority="high" />
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
<link rel="stylesheet" href="<?php echo asset_url('/styles/consent.css'); ?>" />
<?php if (!empty($stylesheets)) foreach ($stylesheets as $css): ?>
<link rel="stylesheet" href="<?php echo asset_url($css); ?>" />
<?php endforeach; ?>
<script src="https://unpkg.com/lucide@0.469.0/dist/umd/lucide.min.js" defer></script>
<?php if (!empty($scripts)) foreach ($scripts as $js): ?>
<script src="<?php echo asset_url($js); ?>" defer></script>
<?php endforeach; ?>
<script src="<?php echo asset_url('/js/mobile-nav.js'); ?>" defer></script>
</head>
<body class="<?php echo isset($bodyClass) ? $bodyClass : ''; ?>">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/nav.php'; ?>
