<?php
$pageTitle = "Rotations List | USMLE Wise";
$pageDescription = "Browse all U.S. clinical rotation placements for IMGs. Filter by specialty, state, price, and setting to find hands-on experience with hospital letterhead LORs.";
$canonical = "https://usmlewise.com/clinical-rotations";
$bodyClass = "msp";
$stylesheets = [
    "/styles/rotations.css"
];
$scripts = [
    "/js/rotations.js"
];

// The whole page is the browse section (cards + filters), rendered from CRM
// data; see partials/rotations-browse.php, shared with /rotations.
$rotBrowseTitle = "Rotations List";
$rotBrowseSub   = "Browse all our IMG-friendly placements with hospital letterhead LORs, monthly starts, and full clinical exposure. Filter by specialty, state, price, and setting.";

include $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';
?>
<main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/rotations-browse.php'; ?>
    </main>

    <!-- ============== FOOTER ============== -->

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
