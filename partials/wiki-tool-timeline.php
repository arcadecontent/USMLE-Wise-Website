<?php
/**
 * Interactive tool: IMG application timeline planner.
 * Included by wiki-article.php for the article whose frontmatter says `tool: timeline`.
 * Behavior lives in js/wiki-tool-timeline.js; without JavaScript the noscript block
 * points readers to the static ERAS timeline guide.
 */
?>
<section class="wk-tool" data-wk-tool="timeline" aria-labelledby="wk-tool-h">
  <h2 id="wk-tool-h" class="wk-tool__h">Build your timeline</h2>
  <p class="wk-tool__lede">Answer a few questions. You get a dated checklist, working backward from the residency start you are aiming for, with links to the guide for each step.</p>

  <noscript><p class="wk-tool__noscript">This planner needs JavaScript. For a static version, read the <a href="/wiki/application/eras-timeline">ERAS timeline guide</a>.</p></noscript>

  <form class="wk-tool__form" novalidate>
    <div class="wk-tool__grid">
      <label class="wk-field">
        <span>Residency start you are aiming for</span>
        <select name="start" data-start></select>
      </label>

      <label class="wk-field">
        <span>ECFMG credentials</span>
        <select name="ecfmg">
          <option value="none">Not started</option>
          <option value="started">Started or done</option>
        </select>
      </label>

      <label class="wk-field">
        <span>USMLE Step 1</span>
        <select name="step1">
          <option value="none">Not passed yet</option>
          <option value="passed">Passed</option>
        </select>
      </label>

      <label class="wk-field">
        <span>USMLE Step 2 CK</span>
        <select name="step2">
          <option value="none">Not passed yet</option>
          <option value="passed">Passed</option>
        </select>
      </label>

      <label class="wk-field">
        <span>USMLE Step 3</span>
        <select name="step3">
          <option value="none">Not passed yet</option>
          <option value="passed">Passed</option>
        </select>
      </label>

      <label class="wk-field">
        <span>Do you need a visa to train in the US?</span>
        <select name="visa">
          <option value="visa">Yes</option>
          <option value="none">No (US citizen or permanent resident)</option>
        </select>
      </label>

      <label class="wk-field" data-pref-field>
        <span>Visa you expect to use</span>
        <select name="pref">
          <option value="either">Not sure yet</option>
          <option value="j1">J-1</option>
          <option value="h1b">H-1B</option>
        </select>
      </label>

      <label class="wk-field">
        <span>US clinical experience</span>
        <select name="usce">
          <option value="none">None yet</option>
          <option value="some">Some, want more</option>
          <option value="enough">Enough for my plan</option>
        </select>
      </label>

      <label class="wk-field">
        <span>Letters of recommendation</span>
        <select name="letters">
          <option value="none">None lined up</option>
          <option value="some">Some lined up</option>
          <option value="ready">All lined up</option>
        </select>
      </label>

      <label class="wk-field">
        <span>Research</span>
        <select name="research">
          <option value="none">Nothing to list yet</option>
          <option value="some">I have work to list</option>
        </select>
      </label>
    </div>
  </form>

  <div class="wk-tool__out" data-out aria-live="polite"></div>

  <div class="wk-tool__actions" data-actions hidden>
    <button type="button" class="btn btn--outline" data-copy>Copy a link to this plan</button>
    <button type="button" class="btn btn--outline" data-print>Print</button>
    <span class="wk-tool__copied" data-copied hidden>Link copied</span>
  </div>

  <p class="wk-tool__note">Planning aid, not official dates. The calendar below uses the usual shape of the season, plus planning buffers that are our own assumptions (marked in the list). Confirm each year's real dates with AAMC, NRMP, USMLE and ECFMG.</p>
</section>
