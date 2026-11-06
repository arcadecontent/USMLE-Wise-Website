<?php
/**
 * Wiki search box. Progressive enhancement: js/wiki.js fetches
 * /wiki/search-index.json on first focus and renders matches below the input.
 * Without JS the form falls back to a Google site search.
 * Optional: $wikiSearchSize = 'lg' for the hub hero.
 */
$wikiSearchSize = $wikiSearchSize ?? '';
?>
<form class="wk-search<?php echo $wikiSearchSize ? ' wk-search--' . $wikiSearchSize : ''; ?>" role="search" action="https://www.google.com/search" method="get" data-wiki-search>
  <input type="hidden" name="as_sitesearch" value="usmlewise.com/wiki" />
  <label class="wk-search__label" for="wk-search-input<?php echo $wikiSearchSize; ?>">Search the wiki</label>
  <i data-lucide="search" width="18" height="18" class="wk-search__icon" aria-hidden="true"></i>
  <input id="wk-search-input<?php echo $wikiSearchSize; ?>" class="wk-search__input" type="search" name="q" placeholder="Search Step 1, ERAS, J-1, observerships..." autocomplete="off" />
  <div class="wk-search__results" data-wiki-results hidden></div>
</form>
