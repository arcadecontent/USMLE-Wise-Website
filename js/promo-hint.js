/* "Get $100 off with code STEP100" in a crash course offer card.
   Clicking the code types it into that card's promo box and presses Apply, so
   the price preview updates and the code travels to checkout. The box and its
   Apply handling belong to each page (js/step2-checkout.js on Step 2, the
   inline script on Step 3); this only drives them. */
(function () {
  'use strict';
  document.addEventListener('click', function (e) {
    var btn = e.target.closest && e.target.closest('[data-promo-code]');
    if (!btn) return;
    var card = btn.closest('.s1-offer__pay');
    var input = card && card.querySelector('.s1-promo__input');
    if (!input) return;
    input.value = btn.getAttribute('data-promo-code');
    input.dispatchEvent(new Event('input', { bubbles: true }));
    var apply = card.querySelector('.s1-promo__apply');
    if (apply) apply.click();
  });
})();
