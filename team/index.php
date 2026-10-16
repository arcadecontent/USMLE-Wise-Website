<?php
$pageTitle = "Our Team | USMLE Wise";
$pageDescription = "Meet the physicians and researchers behind USMLE Wise — co-founders Dr. Manik Madaan and Dr. Kaushik Sreeram, and the research team guiding students to publication.";
$canonical = "https://usmlewise.com/team";
$bodyClass = "msp";
$stylesheets = [
    "/styles/match.css",
    "/styles/team.css"
];
$scripts = [
    "/js/research-catalyst.js"
];

require_once $_SERVER['DOCUMENT_ROOT'] . '/data/team.php';
$teamAll = usmlewise_team_members();
$teamLeadership = array_filter($teamAll, fn($m) => $m['group'] === 'leadership');
$teamResearch   = array_filter($teamAll, fn($m) => $m['group'] === 'research');

include $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';
?>
<main>

<!-- ============== HERO ============== -->
<section class="msp-hero" aria-labelledby="heroTitle">
  <div class="msp-wrap msp-hero__grid">
    <div class="msp-hero__copy reveal">
      <h1 id="heroTitle" class="msp-h1">Doctors who've done it,<br><span class="msp-h1__accent">now guiding you through it.</span></h1>
      <p class="msp-lede">USMLE Wise is led by physicians who went through the USMLE and Match themselves, backed by a research faculty with real publication records behind every mentor.</p>
    </div>
  </div>
</section>

<!-- ============== LEADERSHIP ============== -->
<section class="msp-section" id="leadership" aria-labelledby="leadershipTitle">
  <div class="msp-wrap">
    <div class="msp-head reveal">
      <span class="msp-eyebrow">Founders &amp; Leadership</span>
      <h2 id="leadershipTitle" class="msp-h2">Built by doctors who've been through it.</h2>
    </div>

    <div class="team-spot-list reveal">
      <?php $i = 0; foreach ($teamLeadership as $slug => $m): ?>
      <a class="team-spot<?php echo ($i % 2 === 1) ? ' team-spot--flip' : ''; ?>" href="/team/<?php echo $slug; ?>">
        <div class="team-spot__photo">
          <img src="<?php echo $m['photo']; ?>" alt="<?php echo htmlspecialchars(strip_tags($m['name']), ENT_QUOTES); ?>" loading="lazy" decoding="async" />
        </div>
        <div class="team-spot__body">
          <span class="team-spot__role"><?php echo $m['role']; ?></span>
          <h3 class="team-spot__name"><?php echo $m['name']; ?></h3>
          <span class="team-spot__sub"><?php echo $m['sub']; ?></span>
          <p class="team-spot__bio"><?php echo $m['card_bio'] ?? $m['bio'][0]; ?></p>
        </div>
      </a>
      <?php $i++; endforeach; ?>
    </div>
  </div>
</section>

<!-- ============== RESEARCH TEAM ============== -->
<section class="msp-section" id="research-team" aria-labelledby="researchTeamTitle" style="background:var(--uw-surface-sunk)">
  <div class="msp-wrap">
    <div class="msp-head reveal">
      <span class="msp-eyebrow">Research Team</span>
      <h2 id="researchTeamTitle" class="msp-h2">The team behind every published paper.</h2>
      <p class="msp-sub">Mentors from our other programs will join this page as their profiles are finalized.</p>
    </div>

    <div class="team-roster reveal">
      <?php foreach ($teamResearch as $slug => $m): ?>
      <a class="team-card" href="/team/<?php echo $slug; ?>">
        <div class="team-card__photo">
          <img src="<?php echo $m['photo']; ?>" alt="<?php echo htmlspecialchars(strip_tags($m['name']), ENT_QUOTES); ?>" loading="lazy" decoding="async" />
        </div>
        <div class="team-card__body">
          <div class="team-card__name"><?php echo $m['name']; ?></div>
          <div class="team-card__role"><?php echo $m['role']; ?></div>
          <p class="team-card__line"><?php echo $m['card_line']; ?></p>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============== FINAL CTA ============== -->
<section class="team-cta-wrap">
  <div class="msp-wrap">
    <div class="rc-cta team-cta-card reveal">
      <h2 class="rc-cta__head">Ready to talk to someone<br>who's done this before?</h2>
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
