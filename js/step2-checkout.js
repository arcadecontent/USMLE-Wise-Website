(function () {
  'use strict';
  var form = document.getElementById('s2-checkout');
  if (!form) return;
  var input = document.getElementById('s2-promo');
  var result = document.getElementById('s2-promo-result');
  input.addEventListener('input', function () {
    var code = input.value.trim().toUpperCase();
    input.setCustomValidity('');
    if (!code) result.textContent = 'One-time payment: $499.00 USD.';
    else if (code === 'STEP100') result.textContent = 'STEP100: $100 off. Total: $399.00 USD. Verified at checkout.';
    else if (code === 'STEP50') result.textContent = 'STEP50: 50% off. Total: $249.50 USD. Verified at checkout.';
    else {
      result.textContent = 'This promo code is not valid. Check the code or clear it to continue.';
      input.setCustomValidity('Enter a valid promo code or clear this field.');
    }
  });
  form.addEventListener('submit', function () {
    input.value = input.value.trim().toUpperCase();
  });
})();
