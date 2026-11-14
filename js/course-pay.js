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
    // Step 2 and Step 3 sell this month's live cohort (Mastery src/lib/cohorts.ts) plus the recorded Step 2/3 course.
    'step2-live': { eyebrow: 'Step 2 CK Live Crash Course', item: 'Step 2 Live Crash Course', sub: 'This month’s cohort + recorded course · instant Mastery access', price: 49900 },
    'step3-live': { eyebrow: 'Step 3 Live Crash Course', item: 'Step 3 Live Crash Course', sub: 'This month’s cohort + recorded course · instant Mastery access', price: 49900 },
    cdbu1brx0peuyo75xzpwjcota: { eyebrow: 'Step 1 Live Crash Course', item: 'Step 1 Live Crash Course', sub: 'One-time payment · instant Mastery access', price: 49900 }
  };
  // [ISO code, dial code, name]. The first block is the countries most of our students call from.
  var COUNTRIES = 'US 1 United States|CA 1 Canada|PK 92 Pakistan|IN 91 India|GB 44 United Kingdom|AE 971 United Arab Emirates|SA 966 Saudi Arabia|EG 20 Egypt|NG 234 Nigeria|BD 880 Bangladesh|NP 977 Nepal|LK 94 Sri Lanka|AF 93 Afghanistan|AL 355 Albania|DZ 213 Algeria|AR 54 Argentina|AM 374 Armenia|AU 61 Australia|AT 43 Austria|AZ 994 Azerbaijan|BH 973 Bahrain|BY 375 Belarus|BE 32 Belgium|BZ 501 Belize|BO 591 Bolivia|BA 387 Bosnia and Herzegovina|BR 55 Brazil|BG 359 Bulgaria|KH 855 Cambodia|CM 237 Cameroon|CL 56 Chile|CN 86 China|CO 57 Colombia|CR 506 Costa Rica|HR 385 Croatia|CU 53 Cuba|CY 357 Cyprus|CZ 420 Czechia|DK 45 Denmark|DO 1 Dominican Republic|EC 593 Ecuador|SV 503 El Salvador|EE 372 Estonia|ET 251 Ethiopia|FI 358 Finland|FR 33 France|GE 995 Georgia|DE 49 Germany|GH 233 Ghana|GR 30 Greece|GT 502 Guatemala|GY 592 Guyana|HT 509 Haiti|HN 504 Honduras|HK 852 Hong Kong|HU 36 Hungary|IS 354 Iceland|ID 62 Indonesia|IR 98 Iran|IQ 964 Iraq|IE 353 Ireland|IL 972 Israel|IT 39 Italy|JM 1 Jamaica|JP 81 Japan|JO 962 Jordan|KZ 7 Kazakhstan|KE 254 Kenya|KW 965 Kuwait|KG 996 Kyrgyzstan|LV 371 Latvia|LB 961 Lebanon|LY 218 Libya|LT 370 Lithuania|LU 352 Luxembourg|MY 60 Malaysia|MV 960 Maldives|MT 356 Malta|MU 230 Mauritius|MX 52 Mexico|MD 373 Moldova|MN 976 Mongolia|MA 212 Morocco|MM 95 Myanmar|NL 31 Netherlands|NZ 64 New Zealand|NI 505 Nicaragua|MK 389 North Macedonia|NO 47 Norway|OM 968 Oman|PS 970 Palestine|PA 507 Panama|PY 595 Paraguay|PE 51 Peru|PH 63 Philippines|PL 48 Poland|PT 351 Portugal|PR 1 Puerto Rico|QA 974 Qatar|RO 40 Romania|RU 7 Russia|RW 250 Rwanda|RS 381 Serbia|SG 65 Singapore|SK 421 Slovakia|SI 386 Slovenia|SO 252 Somalia|ZA 27 South Africa|KR 82 South Korea|ES 34 Spain|SD 249 Sudan|SE 46 Sweden|CH 41 Switzerland|SY 963 Syria|TW 886 Taiwan|TJ 992 Tajikistan|TZ 255 Tanzania|TH 66 Thailand|TT 1 Trinidad and Tobago|TN 216 Tunisia|TR 90 Turkey|TM 993 Turkmenistan|UG 256 Uganda|UA 380 Ukraine|UY 598 Uruguay|UZ 998 Uzbekistan|VE 58 Venezuela|VN 84 Vietnam|YE 967 Yemen|ZM 260 Zambia|ZW 263 Zimbabwe'.split('|').map(function (c) { var p = c.split(' '); return [p[0], p[1], p.slice(2).join(' ')]; });
  var CARD_STYLE = {
    base: { fontFamily: 'Geist, Inter, system-ui, sans-serif', fontSize: '15px', color: '#14151c', '::placeholder': { color: '#9a9ca8' } },
    invalid: { color: '#a01517', iconColor: '#a01517' }
  };

  function $(id) { return document.getElementById(id); }

  // WhatsApp number in two parts: country code picker + the local number.
  var countrySel = $('cpCountry'), countryShow = $('cpCountryShow');
  function flag(iso) { return iso.replace(/./g, function (ch) { return String.fromCodePoint(127397 + ch.charCodeAt(0)); }); }
  COUNTRIES.forEach(function (c, i) {
    var o = document.createElement('option');
    o.value = c[0];
    o.textContent = flag(c[0]) + ' ' + c[2] + ' (+' + c[1] + ')';
    countrySel.appendChild(o);
    if (i === 11) { var sep = document.createElement('option'); sep.disabled = true; sep.textContent = '──────────'; countrySel.appendChild(sep); }
  });
  function dialCode() { for (var i = 0; i < COUNTRIES.length; i++) if (COUNTRIES[i][0] === countrySel.value) return COUNTRIES[i][1]; return '1'; }
  function showCountry() { countryShow.textContent = flag(countrySel.value) + ' +' + dialCode(); }
  (function guessCountry() {
    var region = '';
    try { region = (new Intl.Locale(navigator.language)).maximize().region || ''; } catch (e) { region = (navigator.language.split('-')[1] || ''); }
    var tz = '';
    try { tz = Intl.DateTimeFormat().resolvedOptions().timeZone || ''; } catch (e) { /* ignore */ }
    var byZone = { 'Asia/Karachi': 'PK', 'Asia/Kolkata': 'IN', 'Asia/Calcutta': 'IN', 'Asia/Dubai': 'AE', 'Asia/Riyadh': 'SA', 'Africa/Cairo': 'EG', 'Africa/Lagos': 'NG', 'Asia/Dhaka': 'BD', 'Asia/Kathmandu': 'NP', 'Europe/London': 'GB' };
    var pick = byZone[tz] || region.toUpperCase() || 'US';
    countrySel.value = COUNTRIES.some(function (c) { return c[0] === pick; }) ? pick : 'US';
    showCountry();
  })();
  countrySel.addEventListener('change', function () { showCountry(); $('cpPhone').focus(); });
  // Full international number, e.g. "+92 3001234567". A number typed with its own "+" is kept as typed.
  function fullPhone() {
    var raw = $('cpPhone').value.trim();
    if (raw.charAt(0) === '+') return '+' + raw.replace(/\D/g, '');
    return '+' + dialCode() + ' ' + raw.replace(/\D/g, '').replace(/^0+/, '');
  }
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
      if (q.product !== courseId) return quote;
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
      [phone, phone.value.replace(/\D/g, '').replace(/^0+/, '').length >= 6, 'Please enter your WhatsApp number.']
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
      var billing = { name: $('cpName').value.trim(), email: $('cpEmail').value.trim(), phone: fullPhone() };
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
  // Old buy forms name the recorded Step 2/3 course; they now sell the Step 2 cohort.
  var FORM_PRODUCT = { cmtb3d8b90n2oqyu2t9a69zlc: 'step2-live' };
  // Step 3 pages link to this Stripe payment link; clicks open the popup instead.
  var STEP3_LINK = 'buy.stripe.com/eVq9AUe5sfTDbx6604es03c';
  function courseOf(f) {
    if (!f || !/\/api\/checkout\/single-course/.test(f.getAttribute('action') || '')) return null;
    var input = f.querySelector('input[name="courseId"]');
    var id = input ? (FORM_PRODUCT[input.value] || input.value) : '';
    return Object.prototype.hasOwnProperty.call(COURSES, id) ? id : null;
  }
  document.addEventListener('click', function (e) {
    var a = e.target.closest && e.target.closest('a[href*="' + STEP3_LINK + '"]');
    if (!a || e.defaultPrevented || e.button !== 0 || e.metaKey || e.ctrlKey || e.shiftKey) return;
    e.preventDefault();
    var code = '';
    try { code = new URL(a.href).searchParams.get('prefilled_promo_code') || ''; } catch (err) { /* no code */ }
    openDialog('step3-live', code.toUpperCase() || linkPromo);
  });
  document.addEventListener('submit', function (e) {
    var id = courseOf(e.target);
    if (!id || e.defaultPrevented) return;
    e.preventDefault();
    var p = e.target.querySelector('input[name="promo"]');
    openDialog(id, (p && p.value.trim().toUpperCase()) || linkPromo);
  });

  var onPage = Array.prototype.some.call(document.forms, function (f) { return !!courseOf(f); }) || !!document.querySelector('a[href*="' + STEP3_LINK + '"]');
  if (onPage) {
    if ('requestIdleCallback' in window) window.requestIdleCallback(function () { prepare().catch(function () {}); }, { timeout: 2500 });
    else setTimeout(function () { prepare().catch(function () {}); }, 1200);
  }
})();
