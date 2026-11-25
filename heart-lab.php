<?php
/**
 * Heart Lab, served at /heart-lab: a free interactive cardiology tool.
 * Murmurs mode: Murmur Man auscultation figure, synthesized heart sounds,
 * a live phonocardiogram and bedside maneuvers. MI mode: a 3D heart whose
 * infarct territory, culprit artery and 12-lead ECG change together.
 * All data and behaviour live in js/heart-lab.js; this file is the markup.
 */
$pageTitle       = 'Heart Lab: Murmur Man, Heart Sounds and MI Territories on a 3D Heart | USMLE Wise';
$pageDescription = 'Free interactive cardiology lab for USMLE: hear every board murmur, see where it sits and radiates on Murmur Man, test maneuvers, and see each MI on a 3D heart with its 12-lead ECG.';
$canonical       = 'https://usmlewise.com/heart-lab';
$metaRobots      = 'noindex, nofollow'; // preview only until approved
$bodyClass       = 'msp hl';
$stylesheets     = ['/styles/blog.css', '/styles/heart-lab.css']; // blog.css carries the shared nav and footer styles
$scripts         = ['/js/blog.js'];

include $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';
?>
<script type="importmap">
{ "imports": {
  "three": "https://cdn.jsdelivr.net/npm/three@0.170.0/build/three.module.js",
  "three/addons/": "https://cdn.jsdelivr.net/npm/three@0.170.0/examples/jsm/"
} }
</script>
<script type="module" src="<?php echo asset_url('/js/heart-lab.js'); ?>"></script>

<main class="hl-main" id="hlApp" data-mode="murmur">

  <section class="hl-stage-wrap" aria-labelledby="hlTitle">
    <div class="hl-shell">

      <header class="hl-head">
        <div class="hl-head__text">
          <h1 class="hl-title" id="hlTitle">Heart <em>Lab</em></h1>
          <p class="hl-lede" data-show="murmur">Tap a spot on Murmur Man or a murmur below. Listen, watch the sound trace, then try the bedside maneuvers.</p>
          <p class="hl-lede" data-show="mi" hidden>Pick an infarct. The dying wall turns pale on the heart, the blocked artery lights up red, and the 12-lead ECG redraws.</p>
        </div>
        <div class="hl-modes" role="tablist" aria-label="Lab">
          <button class="hl-mode" role="tab" id="tabMurmur" aria-selected="true" aria-controls="hlStage" data-mode-btn="murmur">
            <i data-lucide="stethoscope" width="16" height="16" aria-hidden="true"></i> Murmurs
          </button>
          <button class="hl-mode" role="tab" id="tabMi" aria-selected="false" aria-controls="hlStage" data-mode-btn="mi">
            <i data-lucide="heart-pulse" width="16" height="16" aria-hidden="true"></i> Heart attacks (MI)
          </button>
        </div>
      </header>

      <div class="hl-stage" id="hlStage">

        <!-- Left: Murmur Man (murmurs) or the infarct picker (MI) -->
        <div class="hl-left">
          <div data-show="murmur">
            <figure class="hl-man" aria-label="Murmur Man: the five listening areas on the chest">
              <svg viewBox="0 0 240 300" class="hl-man__svg" id="manSvg" role="group" aria-label="Listening areas">
                <defs>
                  <marker id="hlArrow" viewBox="0 0 10 10" refX="7" refY="5" markerWidth="5" markerHeight="5" orient="auto-start-reverse">
                    <path d="M0 0 L10 5 L0 10 z" class="hl-man__arrowhead" />
                  </marker>
                </defs>
                <!-- head and neck -->
                <ellipse cx="120" cy="38" rx="25" ry="29" class="hl-man__skin" />
                <path d="M106 62 L104 82 M134 62 L136 82" class="hl-man__line" />
                <!-- torso -->
                <path d="M104 80 C 80 84, 44 88, 30 104 C 22 116, 22 150, 24 190 L 26 296 L 214 296 L 216 190 C 218 150, 218 116, 210 104 C 196 88, 160 84, 136 80 Z" class="hl-man__skin" />
                <!-- clavicles -->
                <path d="M114 96 C 96 92, 70 92, 46 100 M126 96 C 144 92, 170 92, 194 100" class="hl-man__line" />
                <!-- sternum -->
                <path d="M114 98 L 126 98 L 124 196 L 120 210 L 116 196 Z" class="hl-man__bone" />
                <!-- ribs (hint) -->
                <path d="M112 122 C 92 120, 70 124, 52 134 M128 122 C 148 120, 170 124, 188 134
                         M112 146 C 92 144, 70 148, 54 160 M128 146 C 148 144, 170 148, 186 160
                         M114 170 C 94 170, 74 176, 60 188 M126 170 C 146 170, 166 176, 180 188
                         M116 192 C 98 194, 82 202, 70 214 M124 192 C 142 194, 158 202, 170 214" class="hl-man__rib" />
                <!-- side labels: the patient faces you, so their left is on your right -->
                <text x="30" y="286" class="hl-man__side">R</text>
                <text x="203" y="286" class="hl-man__side">L</text>

                <!-- radiation paths (drawn when a murmur radiates) -->
                <g id="manRadiation" class="hl-man__rad"></g>

                <!-- listening areas -->
                <g class="hl-man__pts">
                  <g class="hl-pt" data-site="aortic" tabindex="0" role="button" aria-label="Aortic area, right second intercostal space">
                    <circle cx="100" cy="122" r="13" class="hl-pt__hit" /><circle cx="100" cy="122" r="7" class="hl-pt__dot" />
                    <text x="80" y="126" class="hl-pt__lab" text-anchor="end">A</text>
                  </g>
                  <g class="hl-pt" data-site="pulmonic" tabindex="0" role="button" aria-label="Pulmonic area, left second intercostal space">
                    <circle cx="140" cy="122" r="13" class="hl-pt__hit" /><circle cx="140" cy="122" r="7" class="hl-pt__dot" />
                    <text x="160" y="126" class="hl-pt__lab">P</text>
                  </g>
                  <g class="hl-pt" data-site="erb" tabindex="0" role="button" aria-label="Erb's point, left third intercostal space">
                    <circle cx="140" cy="148" r="13" class="hl-pt__hit" /><circle cx="140" cy="148" r="7" class="hl-pt__dot" />
                    <text x="160" y="152" class="hl-pt__lab">E</text>
                  </g>
                  <g class="hl-pt" data-site="tricuspid" tabindex="0" role="button" aria-label="Tricuspid area, left lower sternal border">
                    <circle cx="134" cy="184" r="13" class="hl-pt__hit" /><circle cx="134" cy="184" r="7" class="hl-pt__dot" />
                    <text x="134" y="210" class="hl-pt__lab" text-anchor="middle">T</text>
                  </g>
                  <g class="hl-pt" data-site="mitral" tabindex="0" role="button" aria-label="Mitral area, the apex">
                    <circle cx="172" cy="196" r="13" class="hl-pt__hit" /><circle cx="172" cy="196" r="7" class="hl-pt__dot" />
                    <text x="192" y="200" class="hl-pt__lab">M</text>
                  </g>
                </g>
              </svg>
              <figcaption class="hl-man__cap" id="manCap">A · P · E · T · M: Aortic, Pulmonic, Erb's, Tricuspid, Mitral</figcaption>
            </figure>

            <div class="hl-list" id="murmurList" aria-label="Murmurs"></div>
          </div>

          <div data-show="mi" hidden>
            <div class="hl-list hl-list--mi" id="miList" aria-label="Infarcts"></div>
          </div>
        </div>

        <!-- Centre: the 3D heart -->
        <div class="hl-heart">
          <div class="hl-heart__canvas" id="heartCanvas" aria-label="3D heart. Drag to rotate." role="img"></div>
          <div class="hl-heart__legend" id="heartLegend" aria-live="polite"></div>
          <div class="hl-heart__views" aria-label="Heart view">
            <button class="hl-chip" data-view="front">Front</button>
            <button class="hl-chip" data-view="left">Left side</button>
            <button class="hl-chip" data-view="back">Back</button>
            <button class="hl-chip" data-view="below">From below</button>
          </div>
          <p class="hl-heart__hint"><i data-lucide="move-3d" width="14" height="14" aria-hidden="true"></i> Drag to turn the heart</p>
          <p class="hl-heart__loading" id="heartLoading" hidden>Loading the 3D heart…</p>
          <p class="hl-heart__fallback" id="heartFallback" hidden>The 3D heart needs WebGL, which this browser has turned off. Everything else still works.</p>
        </div>

        <!-- Right: the explanation -->
        <article class="hl-panel" id="hlPanel" aria-live="polite"></article>

        <!-- Bottom: phonocardiogram (murmurs) -->
        <div class="hl-strip" data-show="murmur">
          <div class="hl-strip__bar">
            <button class="hl-play" id="playBtn" aria-pressed="false">
              <i data-lucide="play" width="18" height="18" aria-hidden="true"></i><span>Listen</span>
            </button>
            <div class="hl-mans" role="group" aria-label="Bedside maneuvers">
              <span class="hl-mans__lab">Maneuver</span>
              <button class="hl-chip is-on" data-man="rest" aria-pressed="true">At rest</button>
              <button class="hl-chip" data-man="insp" aria-pressed="false">Inspiration</button>
              <button class="hl-chip" data-man="grip" aria-pressed="false">Handgrip</button>
              <button class="hl-chip" data-man="squat" aria-pressed="false">Squat / leg raise</button>
              <button class="hl-chip" data-man="valsalva" aria-pressed="false">Valsalva / stand</button>
            </div>
          </div>
          <div class="hl-pcg">
            <canvas id="pcgCanvas" aria-label="Phonocardiogram: the murmur's loudness across one heartbeat"></canvas>
            <div class="hl-pcg__marks" aria-hidden="true"><span>S1</span><span>systole</span><span>S2</span><span>diastole</span></div>
          </div>
          <p class="hl-strip__note" id="manNote" aria-live="polite"></p>
        </div>
      </div>

      <!-- MI: 12-lead ECG -->
      <div class="hl-ecg" data-show="mi" hidden>
        <div class="hl-ecg__head">
          <h2 class="hl-h2">12-lead ECG</h2>
          <p class="hl-ecg__key"><span class="hl-key hl-key--up"></span> ST elevation <span class="hl-key hl-key--down"></span> ST depression (reciprocal) · 25 mm/s · 10 mm/mV</p>
        </div>
        <div class="hl-ecg__paper"><canvas id="ecgCanvas" aria-label="12-lead ECG for the selected infarct"></canvas></div>
      </div>
    </div>
  </section>

  <!-- Quiz -->
  <section class="hl-quiz" aria-labelledby="quizTitle">
    <div class="hl-shell hl-quiz__inner">
      <div class="hl-quiz__text">
        <h2 class="hl-h2" id="quizTitle">Name that murmur</h2>
        <p class="hl-body">Play a murmur you can't see, then pick what it is. Use headphones; the low rumbles disappear on phone speakers.</p>
        <p class="hl-quiz__score" id="quizScore" aria-live="polite">0 of 0 right</p>
      </div>
      <div class="hl-quiz__play">
        <button class="hl-play hl-play--big" id="quizPlay"><i data-lucide="play" width="20" height="20" aria-hidden="true"></i><span>Play a mystery murmur</span></button>
        <div class="hl-quiz__opts" id="quizOpts" role="group" aria-label="Answers"></div>
        <p class="hl-quiz__fb" id="quizFb" aria-live="assertive"></p>
      </div>
    </div>
  </section>

  <!-- Maneuver rules -->
  <section class="hl-rules" aria-labelledby="rulesTitle">
    <div class="hl-shell">
      <h2 class="hl-h2" id="rulesTitle">What each maneuver does</h2>
      <p class="hl-body hl-rules__lede">Maneuvers change how much blood fills the heart (preload) or how hard it pushes against the arteries (afterload). Most murmurs get louder with more blood. Two famously go the other way: HOCM and mitral valve prolapse.</p>
      <div class="hl-table-wrap">
        <table class="hl-table">
          <thead><tr><th scope="col">Maneuver</th><th scope="col">What changes</th><th scope="col">Louder</th><th scope="col">Softer</th></tr></thead>
          <tbody>
            <tr><th scope="row">Inspiration</th><td>More blood returns to the right heart</td><td>Right-sided murmurs (TR, PS, TS, PR)</td><td>Left-sided murmurs, a little</td></tr>
            <tr><th scope="row">Handgrip</th><td>Afterload rises</td><td>MR, AR, VSD (blood flows backward more)</td><td>AS (less forward gradient), HOCM</td></tr>
            <tr><th scope="row">Squat or passive leg raise</th><td>Preload and afterload rise</td><td>Almost all, including AS</td><td>HOCM; MVP click moves later</td></tr>
            <tr><th scope="row">Valsalva or standing up</th><td>Preload falls</td><td>HOCM; MVP click moves earlier</td><td>Almost all others</td></tr>
          </tbody>
        </table>
      </div>
      <p class="hl-fine">Heart sounds on this page are synthesized for teaching, built from each murmur's timing and pitch. They are not patient recordings. The 3D heart is a free public-domain model from <a class="hl-fine__link" href="https://grab3d.com/models/anatomy/human-heart/" rel="noopener" target="_blank">Grab3D</a>, made with AI-assisted modelling. The infarct territories and the highlighted artery paths are drawn on it approximately, and coronary anatomy varies between people.</p>
    </div>
  </section>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
