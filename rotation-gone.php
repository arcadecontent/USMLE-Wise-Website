<?php
/**
 * Retired rotation page, served by routes.php for any /rotation-<slug> the CRM
 * feed does not list, under a 410 Gone so search engines drop the URL.
 *
 * The CRM is the single source of truth: removing a placement at
 * team.manikmadaan.com/admin/rotations removes it from the catalogue, the
 * sitemap, and this URL in one step. No static rotation page is left that
 * could keep a removed placement alive.
 *
 * routes.php sets $rotGoneOutage when the CRM feed and every fallback failed.
 * That is an outage, not a removal, so it sends 503 instead and this page says
 * "temporarily unavailable" rather than inviting Google to de-index the lot.
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/data/rotations.php';

$rgOutage      = !empty($rotGoneOutage);
$rgPayload     = usmlewise_rotations_payload();
$rgCount       = count($rgPayload['rotations']);
$rgSpecialties = count($rgPayload['filters']['specialties'] ?? []);

$pageTitle = $rgOutage
    ? "Rotations Temporarily Unavailable | USMLE Wise"
    : "Rotation No Longer Available | USMLE Wise";
$pageDescription = $rgOutage
    ? "Our rotation catalogue could not be loaded. Please try again in a few minutes."
    : "This clinical rotation placement has been retired. Browse our current U.S. rotation placements for IMGs.";
$canonical = "https://usmlewise.com/" . ($rotGoneSlug ?? 'rotations');
$bodyClass = "msp";
$stylesheets = [
    "/styles/blog.css"
];
$scripts = [];
$metaRobots = "noindex, follow";

include $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';
?>
<main>
      <section class="msp-section" style="text-align:center; padding-block: clamp(80px, 12vw, 160px);">
        <div class="msp-wrap">
<?php if ($rgOutage): ?>
          <h1 class="msp-h1">Rotations are temporarily unavailable</h1>
          <p class="msp-lede" style="margin-inline: auto;">
            We could not load our placement catalogue just now. The problem is on
            our side and is usually brief, so please try again in a few minutes.
          </p>
          <div class="msp-cta-row" style="justify-content: center; margin-inline: auto;">
            <a class="btn btn--primary" href="/rotations">Browse All Rotations</a>
            <a class="btn btn--outline" href="https://wa.me/19192015700" target="_blank" rel="noopener noreferrer">Text Us on WhatsApp</a>
          </div>
<?php else: ?>
          <h1 class="msp-h1">This rotation is no longer available</h1>
          <p class="msp-lede" style="margin-inline: auto;">
            This placement has been retired, so it is no longer part of our
            catalogue.
<?php if ($rgCount > 0): ?>
            We currently have <?php echo number_format($rgCount); ?> placements open<?php
            if ($rgSpecialties > 0): ?> across <?php echo number_format($rgSpecialties); ?> specialties<?php
            endif; ?>, and our team can match you to the closest fit.
<?php endif; ?>
          </p>
          <div class="msp-cta-row" style="justify-content: center; margin-inline: auto;">
            <a class="btn btn--primary" href="/rotations">Browse All Rotations</a>
            <a class="btn btn--outline" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Book a Free Guidance Call</a>
          </div>
<?php endif; ?>
        </div>
      </section>
    </main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
