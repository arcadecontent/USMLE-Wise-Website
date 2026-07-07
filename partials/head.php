<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php echo $pageTitle; ?></title>
<meta name="description" content="<?php echo $pageDescription; ?>" />
<link rel="canonical" href="<?php echo $canonical; ?>" />
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php echo $pageTitle; ?>" />
<meta property="og:description" content="<?php echo $pageDescription; ?>" />
<meta property="og:url" content="<?php echo $canonical; ?>" />
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Geist:wght@300;400;500;600;700&family=Source+Serif+4:ital,opsz,wght@0,8..60,400;0,8..60,600;1,8..60,400&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet" />
<link rel="icon" type="image/svg+xml" href="/assets/usmle-design-system/assets/emblem.svg" />
<link rel="stylesheet" href="/assets/usmle-design-system/styles.css" />
<?php if (!empty($stylesheets)) foreach ($stylesheets as $css): ?>
<link rel="stylesheet" href="<?php echo $css; ?>" />
<?php endforeach; ?>
<script src="https://unpkg.com/lucide@0.469.0/dist/umd/lucide.min.js" defer></script>
<?php if (!empty($scripts)) foreach ($scripts as $js): ?>
<script src="<?php echo $js; ?>" defer></script>
<?php endforeach; ?>
<script src="/js/mobile-nav.js" defer></script>
</head>
<body class="<?php echo isset($bodyClass) ? $bodyClass : ''; ?>">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/nav.php'; ?>
