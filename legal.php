<?php
$pageTitle = "Legal & Policies | USMLE Wise";
$pageDescription = "USMLE Wise legal center — Privacy Policy, Terms & Conditions, Refund & Guarantee Policy, and Disclaimer.";
$canonical = "https://usmlewise.com/legal";
$bodyClass = "msp";
$stylesheets = [
    "/styles/match.css",
    "/styles/legal.css"
];
$scripts = [
    "/js/match.js"
];
include $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';
?>
<main>
      <div class="msp-policy">
        <h1>Legal &amp; Policies</h1>
        <p class="msp-policy__meta">USMLE Wise</p>

        <p class="msp-policy__intro">Everything governing your use of usmlewise.com and our coaching, research, and residency-match services lives here. Pick a document below to read it in full.</p>

        <div class="msp-legal-grid">
          <a class="msp-legal-card" href="/policy">
            <h2>Privacy Policy</h2>
            <p>What information we collect, how we use it, and your rights regarding your data.</p>
          </a>
          <a class="msp-legal-card" href="/terms">
            <h2>Terms &amp; Conditions</h2>
            <p>The rules for using our website and enrolling in our programs, including payment, licensing, and liability terms.</p>
          </a>
          <a class="msp-legal-card" href="/refund-policy">
            <h2>Refund &amp; Guarantee Policy</h2>
            <p>How our pass guarantee, first-session guarantee, and program trial periods work, and how to request a refund.</p>
          </a>
          <a class="msp-legal-card" href="/disclaimer">
            <h2>Disclaimer</h2>
            <p>What our programs do and don&rsquo;t promise, and our relationship (or lack of one) to NBME, ECFMG, and NRMP.</p>
          </a>
          <a class="msp-legal-card" href="/cookie-policy">
            <h2>Cookie Policy</h2>
            <p>Which cookies usmlewise.com sets (just Google Analytics), and how to manage them.</p>
          </a>
        </div>

        <hr />
        <p style="font-size:14px; color: var(--uw-ink-500);">Questions about any of these documents? Email <a href="mailto:admin@usmlewise.com">admin@usmlewise.com</a>.</p>
      </div>
    </main>

    <!-- ============== FOOTER ============== -->

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
