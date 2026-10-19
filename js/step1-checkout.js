/* Preview only: the real price and codes live in Mastery (src/lib/course-checkout.ts
   COURSE_PROMOS + the course price in the database). Update both together. */
(function () {
  'use strict';
  var form = document.getElementById('s1-checkout');
  if (!form) return;
  var input = document.getElementById('ccPromo');
  var apply = document.getElementById('s1-promo-apply');
  var result = document.getElementById('s1-promo-result');
  function check() {
    var code = input.value.trim().toUpperCase();
    input.setCustomValidity('');
    if (!code) result.textContent = '';
    else if (code === 'STEP100') result.textContent = 'STEP100 applied: $100 off. Total $399.00 USD, confirmed at checkout.';
    else {
      result.textContent = 'This promo code is not valid. Check the code or clear it to continue.';
      input.setCustomValidity('Enter a valid promo code or clear this field.');
    }
  }
  input.addEventListener('input', function () { if (result.textContent) check(); });
  apply.addEventListener('click', function () { check(); if (!input.checkValidity()) input.reportValidity(); });
  form.addEventListener('submit', function (e) {
    input.value = input.value.trim().toUpperCase();
    check();
    if (!input.checkValidity()) { e.preventDefault(); input.reportValidity(); }
  });
})();
