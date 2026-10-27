<?php
/**
 * Detail template for /team/<slug>. Not reachable directly — routes.php
 * resolves the slug against data/team.php and requires this file with
 * $teamMember already populated.
 */
if (!isset($teamMember) || !is_array($teamMember)) {
    header('Location: /team', true, 302);
    exit;
}

$tmName = strip_tags($teamMember['name']);
$pageTitle = $tmName . ' | USMLE Wise Team';
$pageDescription = $tmName . ' — ' . strip_tags(str_replace('&middot;', '·', $teamMember['role'])) . ' at USMLE Wise.';
$canonical = 'https://usmlewise.com/team/' . $teamMember['slug'];
$bodyClass = 'msp';
$stylesheets = [
    '/styles/match.css',
    '/styles/team.css',
    '/styles/team-profile.css'
];
$scripts = [
    '/js/research-catalyst.js'
];
include $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';
?>
<main>

<a class="tp-back" href="/team"><i data-lucide="arrow-left" width="14" height="14"></i> Back to Team</a>

<!-- ============== HERO ============== -->
<section class="tp-hero">
  <div class="tp-hero__grid">
    <div class="tp-hero__photo">
      <?php if (!empty($teamMember['photo'])): ?>
      <img src="<?php echo $teamMember['photo']; ?>" alt="<?php echo htmlspecialchars($tmName, ENT_QUOTES); ?>" loading="lazy" decoding="async"<?php if (!empty($teamMember['photo_position'])): ?> style="object-position: <?php echo htmlspecialchars($teamMember['photo_position'], ENT_QUOTES); ?>"<?php endif; ?> />
      <?php else: ?>
      <div class="team-ava <?php echo usmlewise_team_ava_class($teamMember['slug']); ?>"><?php echo usmlewise_team_initials($tmName); ?></div>
      <?php endif; ?>
    </div>
    <div class="tp-hero__copy reveal">
      <span class="tp-hero__role"><?php echo $teamMember['role']; ?></span>
      <h1 class="tp-hero__name"><?php echo $teamMember['name']; ?></h1>
      <?php if (!empty($teamMember['sub'])): ?>
      <p class="tp-hero__sub"><?php echo $teamMember['sub']; ?></p>
      <?php endif; ?>
      <div class="tp-hero__actions">
        <a class="btn btn--primary btn--lg" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Book a Free Guidance Call</a>
        <a class="btn btn--outline btn--lg" href="https://wa.me/19192015700" target="_blank" rel="noopener noreferrer">Text Us on WhatsApp</a>
      </div>
    </div>
  </div>
</section>

<!-- ============== BIO + AFFILIATIONS ============== -->
<section class="tp-body">
  <div class="tp-body__grid">
    <div class="tp-bio reveal">
      <?php foreach ($teamMember['bio'] as $para): ?>
      <p><?php echo $para; ?></p>
      <?php endforeach; ?>
    </div>
    <?php if (!empty($teamMember['affiliations'])): ?>
    <div class="tp-affil reveal">
      <span class="tp-affil__label">Roles &amp; Affiliations</span>
      <ul class="tp-affil__list">
        <?php foreach ($teamMember['affiliations'] as $affil): ?>
        <li>
          <div class="tp-affil__role"><?php echo $affil['role']; ?></div>
          <div class="tp-affil__org"><?php echo $affil['org']; ?></div>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
    <?php endif; ?>
  </div>
</section>

<!-- ============== FINAL CTA ============== -->
<section class="team-cta-wrap">
  <div class="msp-wrap">
    <div class="rc-cta team-cta-card reveal">
      <h2 class="rc-cta__head">Have a question for<br>the team?</h2>
      <p class="rc-cta__sub">Book a free 30-minute call, or message us on WhatsApp with a question.</p>
      <div class="rc-cta__actions">
        <a class="btn btn--primary btn--lg" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Book a Free Guidance Call</a>
        <a class="btn--outline-light btn--lg" href="https://wa.me/19192015700" target="_blank" rel="noopener noreferrer">Text Us on WhatsApp</a>
      </div>
    </div>
  </div>
</section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
