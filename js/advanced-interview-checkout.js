(function () {
  'use strict';
  var form = document.getElementById('ai-checkout');
  if (!form) return;
  var input = document.getElementById('ai-promo');
  var result = document.getElementById('ai-promo-result');
  input.addEventListener('input', function () {
    var code = input.value.trim().toUpperCase();
    input.setCustomValidity('');
    if (!code) result.textContent = 'One-time payment: $399.00 USD.';
    else if (code === 'MATCH100') result.textContent = 'MATCH100: $100 off. Total: $299.00 USD. Verified at checkout.';
    else if (code === 'MATCH50') result.textContent = 'MATCH50: 50% off. Total: $199.50 USD. Verified at checkout.';
    else {
      result.textContent = 'This promo code is not valid. Check the code or clear it to continue.';
      input.setCustomValidity('Enter a valid promo code or clear this field.');
    }
  });
  form.addEventListener('submit', function () {
    input.value = input.value.trim().toUpperCase();
  });
})();
