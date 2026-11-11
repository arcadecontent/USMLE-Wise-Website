/* Promo preview for the Step 2 checkout forms. The real price and codes live in
   Mastery (src/lib/course-checkout.ts COURSE_PROMOS + the course price in the
   database). Update both together.

   Markup it drives (all ids optional except the first three):
     #s2-checkout (form) #s2-promo (input) #s2-promo-result (message)
     #s2-price         the displayed price: updated when a valid code is typed
     #s2-promo-apply   an "Apply" button: validates and shows the message */
(function () {
  'use strict';
  var form = document.getElementById('s2-checkout');
  if (!form) return;
  var input = document.getElementById('s2-promo');
  var result = document.getElementById('s2-promo-result');
  var priceEl = document.getElementById('s2-price');
  var applyBtn = document.getElementById('s2-promo-apply');
  var basePrice = priceEl ? priceEl.textContent : '';
  var PROMOS = {
    STEP100: { total: 399, msg: 'STEP100: $100 off. Total: $399.00 USD. Verified at checkout.' },
    STEP50: { total: 249.5, msg: 'STEP50: 50% off. Total: $249.50 USD. Verified at checkout.' }
  };
  function money(n) { return '$' + (n % 1 ? n.toFixed(2) : String(n)); }
  function update(explicit) {
    var code = input.value.trim().toUpperCase();
    input.setCustomValidity('');
    result.classList.remove('is-ok', 'is-bad');
    if (priceEl) priceEl.textContent = PROMOS[code] ? money(PROMOS[code].total) : basePrice;
    if (!code) {
      result.textContent = explicit ? 'Enter a promo code.' : 'One-time payment: $499.00 USD.';
      if (explicit) result.classList.add('is-bad');
    } else if (PROMOS[code]) {
      result.textContent = PROMOS[code].msg;
      result.classList.add('is-ok');
    } else {
      result.textContent = 'This promo code is not valid. Check the code or clear it to continue.';
      result.classList.add('is-bad');
      input.setCustomValidity('Enter a valid promo code or clear this field.');
    }
  }
  input.addEventListener('input', function () { update(false); });
  if (applyBtn) {
    applyBtn.addEventListener('click', function () { input.value = input.value.trim().toUpperCase(); update(true); });
    input.addEventListener('keydown', function (e) { if (e.key === 'Enter') { e.preventDefault(); applyBtn.click(); } });
  }
  form.addEventListener('submit', function () {
    input.value = input.value.trim().toUpperCase();
  });
})();
