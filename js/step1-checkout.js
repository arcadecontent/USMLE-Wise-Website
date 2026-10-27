/* Preview only: the real price and codes live in Mastery (src/lib/course-checkout.ts
   COURSE_PROMOS + the course price in the database). Update both together. */
(function () {
  'use strict';
  var form = document.getElementById('s1-checkout');
  if (!form) return;
  var PRICE = 499, VALUE = 1397;
  var PROMOS = { STEP100: { off: 100, label: '$100 off' }, STEP50: { off: 200, label: '$200 off' } };
  var input = document.getElementById('ccPromo');
  var apply = document.getElementById('s1-promo-apply');
  var result = document.getElementById('s1-promo-result');
  var price = document.getElementById('s1-price');
  var was = document.getElementById('s1-price-was');
  var save = document.getElementById('s1-save');
  var applied = document.getElementById('s1-promo-applied');
  var appliedCode = document.getElementById('s1-promo-code');
  var remove = document.getElementById('s1-promo-remove');
  var money = function (n) { return '$' + n.toLocaleString('en-US'); };

  function show(promo, code) {
    var total = PRICE - (promo ? promo.off : 0);
    price.textContent = money(total);
    was.hidden = !promo;
    save.textContent = money(VALUE - total);
    applied.style.display = promo ? 'flex' : 'none';
    if (promo) appliedCode.textContent = code;
  }
  function check() {
    var code = input.value.trim().toUpperCase();
    var promo = Object.prototype.hasOwnProperty.call(PROMOS, code) ? PROMOS[code] : null;
    input.setCustomValidity('');
    result.textContent = '';
    if (code && !promo) {
      result.textContent = 'This promo code is not valid. Check the code or clear it to continue.';
      input.setCustomValidity('Enter a valid promo code or clear this field.');
    }
    show(promo, code);
    return promo;
  }
  input.addEventListener('input', function () {
    // Typing changes the code: drop the shown discount or error until Apply is pressed again.
    input.setCustomValidity('');
    result.textContent = '';
    show(null);
  });
  input.addEventListener('keydown', function (e) {
    if (e.key === 'Enter') { e.preventDefault(); apply.click(); }
  });
  apply.addEventListener('click', function () {
    if (!check() && input.value.trim()) input.reportValidity();
  });
  remove.addEventListener('click', function () {
    input.value = '';
    check();
    input.focus();
  });
  form.addEventListener('submit', function (e) {
    input.value = input.value.trim().toUpperCase();
    check();
    if (!input.checkValidity()) { e.preventDefault(); input.reportValidity(); }
  });
})();
