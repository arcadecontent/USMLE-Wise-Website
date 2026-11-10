<?php
/**
 * Interactive tool: IMG readiness self-evaluation.
 * Included by wiki-article.php for the article whose frontmatter says `tool: evaluation`.
 * Behavior lives in js/wiki-tool-evaluation.js. The service catalogue is printed from
 * usmlewise_wiki_services() (data/wiki.php) so the tool and the article call-to-action
 * can never disagree about which services exist or what they say.
 */
require_once __DIR__ . '/../data/wiki.php';
$wkEvalServices = htmlspecialchars(
    json_encode(usmlewise_wiki_services(), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE),
    ENT_QUOTES,
    'UTF-8'
);
?>
<section class="wk-tool wk-eval" data-wk-tool="evaluation" data-services="<?php echo $wkEvalServices; ?>" aria-labelledby="wk-eval-h">
  <h2 id="wk-eval-h" class="wk-tool__h">Evaluate where you stand</h2>
  <p class="wk-tool__lede">About 2 minutes. Answer honestly: nobody sees your answers, and the more accurate they are, the more useful your plan will be.</p>

  <noscript><p class="wk-tool__noscript">This evaluation needs JavaScript. For a static route through the same material, start with the <a href="/wiki/start-here/imgs-roadmap">IMG roadmap</a>.</p></noscript>

  <div data-eval-app></div>

  <p class="wk-tool__note">A planning aid, not a prediction. It cannot tell you whether you will match, and it does not replace advice from an official source or a professional who knows your whole situation. Your answers stay in this page: they are not sent to us, saved, or put in the web address.</p>
</section>
