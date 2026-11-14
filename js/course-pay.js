/* On-page course checkout popup (markup and styles: partials/course-pay.php).
   Takes over any Mastery "single-course" buy form for a course listed below and
   opens the popup instead of Stripe's hosted page. Prices, promo codes and
   course access all live on Mastery (src/lib/course-checkout.ts COURSE_PROMOS,
   src/lib/course-popup.ts); this file only displays what Mastery returns.
   A ?promo=CODE link pre-fills and applies a code when the popup opens. */
(function () {
  'use strict';
  var dlg = document.getElementById('cpPay');
  if (!dlg) return;

  var API = 'https://mastery.usmlewise.com/api/course-pay';
  // Publishable keys are public by design; this one belongs to the Stripe account Mastery charges.
  var STRIPE_KEY = 'pk_live_51QP4cwJDyWnuZEnfkf8zIUSEIgSpPgUPMyrg4m8UIeinhWBSeM0Do5lwYvffKwsjVj7DGUeJwLNUPKRiCD5yUd5P00yYL7zDFz';
  var COURSES = {
    cmtb3d8b90n2oqyu2t9a69zlc: { eyebrow: 'Step 2 CK Crash Course', item: 'Step 2 Ultra High-Yield Crash Course', sub: 'One-time payment · instant Mastery access', price: 49900 },
    cdbu1brx0peuyo75xzpwjcota: { eyebrow: 'Step 1 Live Crash Course', item: 'Step 1 Live Crash Course', sub: 'One-time payment · instant Mastery access', price: 49900 }
  };
  var CARD_STYLE = {
    base: { fontFamily: 'Geist, Inter, system-ui, sans-serif', fontSize: '15px', color: '#14151c', '::placeholder': { color: '#9a9ca8' } },
    invalid: { color: '#a01517', iconColor: '#a01517' }
  };

  function $(id) { return document.getElementById(id); }
  var form = $('cpForm'), done = $('cpDone'), errorEl = $('cpError'), submitBtn = $('cpSubmit');
  var promoIn = $('cpPromo'), promoApply = $('cpPromoApply'), promoBox = $('cpPromoBox'), promoOn = $('cpPromoOn'), promoMsg = $('cpPromoMsg');
  var stripe = null, cardNumber = null, ready = null, lastFocus = null, cardErrors = {};
  var courseId = null, quote = null, busy = false;
  var linkPromo = (new URLSearchParams(location.search).get('promo') || '').trim().toUpperCase().slice(0, 80);

  function money(cents) {
    var n = cents / 100;
    return '$' + (n % 1 ? n.toFixed(2) : n.toLocaleString('en-US'));
  }

  function post(path, body) {
    // text/plain keeps this a "simple" request, so the browser skips the CORS preflight.
    return fetch(API + path, { method: 'POST', headers: { 'Content-Type': 'text/plain' }, body: JSON.stringify(body) })
      .then(function (r) {
        return r.json().catch(function () { return {}; }).then(function (d) {
          if (!r.ok) throw new Error(d.error || 'Checkout is unavailable right now. Please try again shortly.');
          return d;
        });
      });
  }

  // Stripe's script and card fields load in the background once the page is
  // idle, so the popup is ready the moment someone clicks.
  function prepare() {
    if (ready) return ready;
    ready = new Promise(function (resolve, reject) {
      if (window.Stripe) return resolve();
      var s = document.createElement('script');
      s.src = 'https://js.stripe.com/v3/';
      s.onload = resolve;
      s.onerror = function () { reject(new Error('Secure checkout could not load. Please check your connection and try again.')); };
      document.head.appendChild(s);
    }).then(function () {
      stripe = window.Stripe(STRIPE_KEY);
      var elements = stripe.elements({ fonts: [{ cssSrc: 'https://fonts.googleapis.com/css2?family=Geist:wght@400;500;600&display=swap' }] });
      cardNumber = elements.create('cardNumber', { style: CARD_STYLE, showIcon: true, disableLink: true, placeholder: '1234 1234 1234 1234' });
      [[cardNumber, '#cpCardNumber'], [elements.create('cardExpiry', { style: CARD_STYLE }), '#cpCardExpiry'], [elements.create('cardCvc', { style: CARD_STYLE }), '#cpCardCvc']].forEach(function (p) {
        p[0].mount(p[1]);
        p[0].on('change', function (ev) {
          cardErrors[p[1]] = ev.error ? ev.error.message : '';
          showError(cardErrors['#cpCardNumber'] || cardErrors['#cpCardExpiry'] || cardErrors['#cpCardCvc'] || '');
        });
      });
    });
    ready.catch(function () { ready = null; });
    return ready;
  }

  function showError(text) { errorEl.textContent = text || ''; }
  function setPromoMsg(text, bad) { promoMsg.textContent = text || ''; promoMsg.classList.toggle('is-bad', !!bad); }
  function setBusy(on) { busy = on; submitBtn.disabled = on; renderPrice(); }

  function renderPrice() {
    var c = COURSES[courseId];
    var amount = quote ? quote.amount : c.price;
    var original = quote ? quote.originalAmount : c.price;
    $('cpPrice').textContent = money(amount);
    var was = $('cpWas');
    was.hidden = !(amount < original);
    was.textContent = money(original);
    var perk = $('cpPerk');
    perk.hidden = !(quote && quote.perk);
    perk.textContent = quote && quote.perk ? 'Your code also includes: ' + quote.perk : '';
    submitBtn.textContent = busy ? 'Processing…' : 'Pay ' + money(amount);
    var applied = !!(quote && quote.code);
    promoBox.hidden = applied;
    promoOn.hidden = !applied;
    if (applied) {
      $('cpPromoCode').textContent = quote.code;
      $('cpPromoSave').textContent = original > amount ? '(you save ' + money(original - amount) + ')' : '';
    }
  }

  function loadQuote(code) {
    return post('/quote', { courseId: courseId, promo: code || '' }).then(function (q) {
      if (q.courseId !== courseId) return quote;
      quote = q;
      renderPrice();
      return q;
    });
  }

  function applyPromo() {
    var code = promoIn.value.trim().toUpperCase();
    if (!code) { setPromoMsg('Enter a promo code first.', true); promoIn.focus(); return Promise.resolve(false); }
    promoApply.disabled = true;
    setPromoMsg('Checking code…');
    return loadQuote(code)
      .then(function () { setPromoMsg(''); return true; })
      .catch(function (err) { setPromoMsg(err.message || 'This promo code is not valid.', true); return false; })
      .then(function (ok) { promoApply.disabled = false; return ok; });
  }

  function removePromo() {
    promoIn.value = '';
    setPromoMsg('');
    quote = quote ? { courseId: courseId, amount: quote.originalAmount, originalAmount: quote.originalAmount, code: '', perk: null } : null;
    renderPrice();
    promoIn.focus();
    loadQuote('').catch(function () {});
  }

  function track(event, data) {
    try { if (window.fbq) window.fbq('track', event, data); } catch (e) { /* tracking never blocks checkout */ }
  }

  function openDialog(id, code) {
    if (!done.hidden && courseId === id) { dlg.hidden = false; document.body.classList.add('cp-open'); return; }
    courseId = id;
    var c = COURSES[id];
    $('cpEyebrow').textContent = c.eyebrow;
    $('cpItem').textContent = c.item;
    $('cpItemSub').textContent = c.sub;
    form.hidden = false;
    done.hidden = true;
    quote = null;
    showError('');
    setPromoMsg('');
    promoIn.value = code || '';
    renderPrice();
    lastFocus = document.activeElement;
    dlg.hidden = false;
    document.body.classList.add('cp-open');
    $('cpName').focus();
    track('InitiateCheckout', { content_name: c.item, currency: 'USD', value: c.price / 100 });
    if (promoIn.value) applyPromo();
    else loadQuote('').catch(function () {});
    prepare().catch(function (err) { showError(err.message + ' You can also message us on WhatsApp at +1 919 201 5700.'); });
  }

  function closeDialog() {
    dlg.hidden = true;
    document.body.classList.remove('cp-open');
    if (lastFocus && lastFocus.focus) lastFocus.focus();
  }

  function validate() {
    var name = $('cpName'), email = $('cpEmail'), phone = $('cpPhone');
    var checks = [
      [name, name.value.trim().length >= 2, 'Please enter your full name.'],
      [email, /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value.trim()), 'Please enter a valid email address.'],
      [phone, phone.value.replace(/\D/g, '').length >= 7, 'Please enter your WhatsApp number, including country code.']
    ];
    for (var i = 0; i < checks.length; i++) {
      checks[i][0].setAttribute('aria-invalid', checks[i][1] ? 'false' : 'true');
      if (!checks[i][1]) { checks[i][0].focus(); return checks[i][2]; }
    }
    return '';
  }

  function finish(intentId, paidCents) {
    var email = $('cpEmail').value.trim();
    form.hidden = true;
    done.hidden = false;
    $('cpDoneText').textContent = 'Your payment is confirmed. We’re emailing your receipt and Mastery login to ' + email + '.';
    track('Purchase', { content_name: COURSES[courseId].item, currency: 'USD', value: paidCents / 100 });
    post('/confirm', { paymentIntentId: intentId })
      .then(function (d) {
        if (!d.paid || d.pending) return;
        $('cpDoneText').textContent = d.newAccount
          ? 'Your payment is confirmed and your course is unlocked. We’ve emailed ' + d.email + ' a link to set your Mastery password and start learning, plus your receipt.'
          : 'Your payment is confirmed and the course is now on your Mastery account (' + d.email + '). Sign in with your usual password. Your receipt is in your inbox.';
        $('cpDoneGo').textContent = d.newAccount ? 'Go to Mastery' : 'Sign in to Mastery';
      })
      .catch(function () { /* access is still granted by Mastery's 15-minute check */ });
  }

  form.addEventListener('submit', function (e) {
    e.preventDefault();
    if (busy) return;
    showError('');
    var problem = validate();
    if (problem) return showError(problem);
    var typed = promoIn.value.trim().toUpperCase();
    var pendingPromo = !promoBox.hidden && typed && !(quote && quote.code === typed)
      ? applyPromo() : Promise.resolve(true);
    pendingPromo.then(function (ok) {
      if (!ok) return showError('Fix or remove the promo code to continue.');
      setBusy(true);
      var billing = { name: $('cpName').value.trim(), email: $('cpEmail').value.trim(), phone: $('cpPhone').value.trim() };
      var paid = 0;
      prepare()
        .then(function () {
          return post('/intent', { courseId: courseId, promo: quote ? quote.code : '', name: billing.name, email: billing.email, phone: billing.phone });
        })
        .then(function (d) {
          paid = d.amount;
          return stripe.confirmCardPayment(d.clientSecret, { payment_method: { card: cardNumber, billing_details: billing } });
        })
        .then(function (res) {
          if (res.error) throw res.error;
          var pi = res.paymentIntent;
          if (pi && (pi.status === 'succeeded' || pi.status === 'processing')) { setBusy(false); finish(pi.id, paid); }
          else throw new Error('The payment was not completed. Please try again.');
        })
        .catch(function (err) { showError((err && err.message) || 'Something went wrong. Please try again.'); setBusy(false); });
    });
  });

  promoApply.addEventListener('click', applyPromo);
  promoIn.addEventListener('keydown', function (e) { if (e.key === 'Enter') { e.preventDefault(); applyPromo(); } });
  promoIn.addEventListener('input', function () { setPromoMsg(''); });
  $('cpPromoRemove').addEventListener('click', removePromo);
  dlg.querySelectorAll('[data-cp-close]').forEach(function (el) { el.addEventListener('click', closeDialog); });
  document.addEventListener('keydown', function (e) { if (e.key === 'Escape' && !dlg.hidden && !busy) closeDialog(); });

  // Take over the page's Mastery buy forms. Runs after each form's own submit
  // handlers, so a form that blocks itself (e.g. a bad code) stays blocked.
  function courseOf(f) {
    if (!f || !/\/api\/checkout\/single-course/.test(f.getAttribute('action') || '')) return null;
    var input = f.querySelector('input[name="courseId"]');
    return input && Object.prototype.hasOwnProperty.call(COURSES, input.value) ? input.value : null;
  }
  document.addEventListener('submit', function (e) {
    var id = courseOf(e.target);
    if (!id || e.defaultPrevented) return;
    e.preventDefault();
    var p = e.target.querySelector('input[name="promo"]');
    openDialog(id, (p && p.value.trim().toUpperCase()) || linkPromo);
  });

  var onPage = Array.prototype.some.call(document.forms, function (f) { return !!courseOf(f); });
  if (onPage) {
    if ('requestIdleCallback' in window) window.requestIdleCallback(function () { prepare().catch(function () {}); }, { timeout: 2500 });
    else setTimeout(function () { prepare().catch(function () {}); }, 1200);
  }
})();
