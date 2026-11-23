<?php
/**
 * Interactive tool: Step 3 readiness checker.
 * Included by wiki-article.php for the article whose frontmatter says `tool: step-3-readiness`.
 * Behavior lives in js/wiki-tool-step-3-readiness.js (all rules are in its RULES object).
 * Only the two services the tool can ever suggest are printed from usmlewise_wiki_services()
 * (data/wiki.php), so the tool and the rest of the wiki cannot disagree about which services
 * exist, where they live or what they say.
 */
require_once __DIR__ . '/../data/wiki.php';
$wkS3rServices = htmlspecialchars(
    json_encode(
        array_intersect_key(usmlewise_wiki_services(), array_flip(['step-3-crash-course', 'coaching'])),
        JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE
    ),
    ENT_QUOTES,
    'UTF-8'
);
?>
<section class="wk-tool wk-eval wk-s3r" data-wk-tool="step-3-readiness" data-services="<?php echo $wkS3rServices; ?>" aria-labelledby="wk-s3r-h">
  <h2 id="wk-s3r-h" class="wk-tool__h">Check your Step 3 readiness</h2>
  <p class="wk-tool__lede">About 3 minutes. Answer honestly: nobody sees your answers. You get one of three results and a short list of what to fix. It does not predict a score or your chance of passing.</p>

  <noscript><p class="wk-tool__noscript">This checker needs JavaScript. For a static route through the same material, read the <a href="/wiki/exams/step-3-study-schedule">Step 3 study plan</a> and the <a href="/wiki/exams/nbme-self-assessments">NBME self-assessments guide</a>.</p></noscript>

  <div data-s3r-app></div>

  <p class="wk-tool__note">A readiness check, not a prediction. It cannot tell you your score or whether you will pass, and it does not replace the official USMLE Bulletin or advice from someone who knows your whole situation. Your answers stay in this page: they are not sent to us, saved, or put in the web address.</p>
</section>
