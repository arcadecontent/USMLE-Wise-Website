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
    'step2-live': { eyebrow: 'Step 2 Live Crash Course', item: 'Step 2 Live Crash Course', sub: 'This month’s cohort + recorded course', price: 49900 },
    'step3-live': { eyebrow: 'Step 3 Live Crash Course', item: 'Step 3 Live Crash Course', sub: 'This month’s cohort + recorded course', price: 49900 },
    // Step 1 sells the Step 1 cohort on sale now (Mastery src/lib/step1-cohorts.ts), with the 90-day QBank.
    'step1-live': { eyebrow: 'Step 1 Live Crash Course', item: 'Step 1 Live Crash Course', sub: 'Next live cohort + 90-day QBank', price: 49900 },
    // Research Wise live registration closed 2026-11-15; the page sells the recordings course instead.
    'research-wise-recordings': { eyebrow: 'Research Wise', item: 'Session recordings & resources', sub: 'All 3 sessions + notes', price: 2000 },
    // Since 2026-11-16 each session is sold on its own ($20 each). The buyer ticks one or more days
    // (data-cp-days="1" on a button pre-ticks that day); one payment unlocks every chosen day.
    'research-wise-days': {
      eyebrow: 'Research Wise', item: 'Session recordings', sub: 'Recording + notes, $20 each', price: 2000, noPromo: true,
      days: [
        { n: 1, title: 'Case reports & case series', when: 'Sun, Nov 15' },
        { n: 2, title: 'Original studies', when: 'Sun, Nov 22' },
        { n: 3, title: 'Systematic reviews & meta-analyses', when: 'Sun, Nov 29' }
      ]
    }
  };
  // [ISO code, dial code, name]. The first block is the countries most of our students call from.
  var COUNTRIES = 'US 1 United States|CA 1 Canada|PK 92 Pakistan|IN 91 India|GB 44 United Kingdom|AE 971 United Arab Emirates|SA 966 Saudi Arabia|EG 20 Egypt|NG 234 Nigeria|BD 880 Bangladesh|NP 977 Nepal|LK 94 Sri Lanka|AF 93 Afghanistan|AL 355 Albania|DZ 213 Algeria|AR 54 Argentina|AM 374 Armenia|AU 61 Australia|AT 43 Austria|AZ 994 Azerbaijan|BH 973 Bahrain|BY 375 Belarus|BE 32 Belgium|BZ 501 Belize|BO 591 Bolivia|BA 387 Bosnia and Herzegovina|BR 55 Brazil|BG 359 Bulgaria|KH 855 Cambodia|CM 237 Cameroon|CL 56 Chile|CN 86 China|CO 57 Colombia|CR 506 Costa Rica|HR 385 Croatia|CU 53 Cuba|CY 357 Cyprus|CZ 420 Czechia|DK 45 Denmark|DO 1 Dominican Republic|EC 593 Ecuador|SV 503 El Salvador|EE 372 Estonia|ET 251 Ethiopia|FI 358 Finland|FR 33 France|GE 995 Georgia|DE 49 Germany|GH 233 Ghana|GR 30 Greece|GT 502 Guatemala|GY 592 Guyana|HT 509 Haiti|HN 504 Honduras|HK 852 Hong Kong|HU 36 Hungary|IS 354 Iceland|ID 62 Indonesia|IR 98 Iran|IQ 964 Iraq|IE 353 Ireland|IL 972 Israel|IT 39 Italy|JM 1 Jamaica|JP 81 Japan|JO 962 Jordan|KZ 7 Kazakhstan|KE 254 Kenya|KW 965 Kuwait|KG 996 Kyrgyzstan|LV 371 Latvia|LB 961 Lebanon|LY 218 Libya|LT 370 Lithuania|LU 352 Luxembourg|MY 60 Malaysia|MV 960 Maldives|MT 356 Malta|MU 230 Mauritius|MX 52 Mexico|MD 373 Moldova|MN 976 Mongolia|MA 212 Morocco|MM 95 Myanmar|NL 31 Netherlands|NZ 64 New Zealand|NI 505 Nicaragua|MK 389 North Macedonia|NO 47 Norway|OM 968 Oman|PS 970 Palestine|PA 507 Panama|PY 595 Paraguay|PE 51 Peru|PH 63 Philippines|PL 48 Poland|PT 351 Portugal|PR 1 Puerto Rico|QA 974 Qatar|RO 40 Romania|RU 7 Russia|RW 250 Rwanda|RS 381 Serbia|SG 65 Singapore|SK 421 Slovakia|SI 386 Slovenia|SO 252 Somalia|ZA 27 South Africa|KR 82 South Korea|ES 34 Spain|SD 249 Sudan|SE 46 Sweden|CH 41 Switzerland|SY 963 Syria|TW 886 Taiwan|TJ 992 Tajikistan|TZ 255 Tanzania|TH 66 Thailand|TT 1 Trinidad and Tobago|TN 216 Tunisia|TR 90 Turkey|TM 993 Turkmenistan|UG 256 Uganda|UA 380 Ukraine|UY 598 Uruguay|UZ 998 Uzbekistan|VE 58 Venezuela|VN 84 Vietnam|YE 967 Yemen|ZM 260 Zambia|ZW 263 Zimbabwe'.split('|').map(function (c) { var p = c.split(' '); return [p[0], p[1], p.slice(2).join(' ')]; });
  var CARD_STYLE = {
    base: { fontFamily: 'Geist, Inter, system-ui, sans-serif', fontSize: '15px', color: '#14151c', '::placeholder': { color: '#9a9ca8' } },
    invalid: { color: '#a01517', iconColor: '#a01517' }
  };

  function $(id) { return document.getElementById(id); }

  // WhatsApp number in two parts: country code picker + the local number.
  var country = 'US';
  var ccBtn = $('cpCountryBtn'), ccShow = $('cpCountryShow'), ccMenu = $('cpCountryMenu'), ccSearch = $('cpCountrySearch'), ccList = $('cpCountryList');
  var ccShown = [], ccActive = 0;
  function flag(iso) { return iso.replace(/./g, function (ch) { return String.fromCodePoint(127397 + ch.charCodeAt(0)); }); }
  function findCountry(iso) { for (var i = 0; i < COUNTRIES.length; i++) if (COUNTRIES[i][0] === iso) return COUNTRIES[i]; return null; }
  function dialCode() { var c = findCountry(country); return c ? c[1] : '1'; }
  function setCountry(iso) { if (findCountry(iso)) country = iso; ccShow.textContent = flag(country) + ' +' + dialCode(); }

  // Searchable list: matches country name, 2-letter code, or dialling code ("92", "+92").
  function renderCountries() {
    var q = ccSearch.value.trim().toLowerCase();
    var digits = q.replace(/^\+/, '');
    var byCode = /^\d+$/.test(digits);
    ccShown = !q ? COUNTRIES.slice() : COUNTRIES.filter(function (c) {
      if (byCode) return c[1].indexOf(digits) === 0;
      var name = c[2].toLowerCase();
      return name.indexOf(q) === 0 || name.indexOf(' ' + q) !== -1 || c[0].toLowerCase() === q;
    });
    if (byCode) ccShown.sort(function (a, b) { return (a[1] === digits ? 0 : 1) - (b[1] === digits ? 0 : 1); });
    ccList.innerHTML = '';
    if (!ccShown.length) {
      var none = document.createElement('li'); none.className = 'cp-cc__empty'; none.textContent = 'No country found'; ccList.appendChild(none);
    }
    ccShown.forEach(function (c, i) {
      var li = document.createElement('li');
      li.id = 'cpCc-' + c[0];
      li.setAttribute('role', 'option');
      li.setAttribute('aria-selected', c[0] === country ? 'true' : 'false');
      li.appendChild(document.createTextNode(flag(c[0]) + ' ' + c[2]));
      var b = document.createElement('b'); b.textContent = '+' + c[1]; li.appendChild(b);
      li.addEventListener('mousedown', function (e) { e.preventDefault(); chooseCountry(c[0]); });
      li.addEventListener('mousemove', function () { if (ccActive !== i) markActive(i); });
      ccList.appendChild(li);
      // A divider after the most common countries, only on the full list.
      if (!q && i === 11) { var sep = document.createElement('li'); sep.className = 'cp-cc__sep'; sep.setAttribute('aria-hidden', 'true'); ccList.appendChild(sep); }
    });
    var sel = q ? 0 : Math.max(0, ccShown.findIndex(function (c) { return c[0] === country; }));
    markActive(sel);
  }
  function markActive(i) {
    ccActive = i;
    Array.prototype.forEach.call(ccList.querySelectorAll('[role="option"]'), function (li, n) { li.classList.toggle('is-active', n === i); });
    var c = ccShown[i];
    var li = c && $('cpCc-' + c[0]);
    if (li) { ccSearch.setAttribute('aria-activedescendant', li.id); li.scrollIntoView({ block: 'nearest' }); }
    else ccSearch.removeAttribute('aria-activedescendant');
  }
  function openCountries() {
    ccMenu.hidden = false;
    ccBtn.setAttribute('aria-expanded', 'true');
    ccSearch.value = '';
    renderCountries();
    ccSearch.focus();
  }
  function closeCountries(refocus) {
    if (ccMenu.hidden) return;
    ccMenu.hidden = true;
    ccBtn.setAttribute('aria-expanded', 'false');
    if (refocus) ccBtn.focus();
  }
  function chooseCountry(iso) { setCountry(iso); closeCountries(false); $('cpPhone').focus(); }
  ccBtn.addEventListener('click', function () { if (ccMenu.hidden) openCountries(); else closeCountries(true); });
  ccSearch.addEventListener('input', renderCountries);
  ccSearch.addEventListener('keydown', function (e) {
    if (e.key === 'ArrowDown') { e.preventDefault(); if (ccShown.length) markActive(Math.min(ccShown.length - 1, ccActive + 1)); }
    else if (e.key === 'ArrowUp') { e.preventDefault(); if (ccShown.length) markActive(Math.max(0, ccActive - 1)); }
    else if (e.key === 'Enter') { e.preventDefault(); if (ccShown[ccActive]) chooseCountry(ccShown[ccActive][0]); }
    else if (e.key === 'Escape') { e.preventDefault(); e.stopPropagation(); closeCountries(true); }
    else if (e.key === 'Tab') closeCountries(false);
  });
  document.addEventListener('mousedown', function (e) { if (!ccMenu.hidden && !ccMenu.parentNode.contains(e.target)) closeCountries(false); });
  (function guessCountry() {
    var region = '';
    try { region = (new Intl.Locale(navigator.language)).maximize().region || ''; } catch (e) { region = (navigator.language.split('-')[1] || ''); }
    var tz = '';
    try { tz = Intl.DateTimeFormat().resolvedOptions().timeZone || ''; } catch (e) { /* ignore */ }
    var byZone = { 'Asia/Karachi': 'PK', 'Asia/Kolkata': 'IN', 'Asia/Calcutta': 'IN', 'Asia/Dubai': 'AE', 'Asia/Riyadh': 'SA', 'Africa/Cairo': 'EG', 'Africa/Lagos': 'NG', 'Asia/Dhaka': 'BD', 'Asia/Kathmandu': 'NP', 'Europe/London': 'GB' };
    setCountry(byZone[tz] || region.toUpperCase() || 'US');
  })();
  // Full international number, e.g. "+92 3001234567". A number typed with its own "+" is kept as typed.
  function fullPhone() {
    var raw = $('cpPhone').value.trim();
    if (raw.charAt(0) === '+') return '+' + raw.replace(/\D/g, '');
    return '+' + dialCode() + ' ' + raw.replace(/\D/g, '').replace(/^0+/, '');
  }
  var form = $('cpForm'), done = $('cpDone'), errorEl = $('cpError'), submitBtn = $('cpSubmit');
  var promoIn = $('cpPromo'), promoApply = $('cpPromoApply'), promoBox = $('cpPromoBox'), promoOn = $('cpPromoOn'), promoMsg = $('cpPromoMsg');
  var stripe = null, cardNumber = null, ready = null, lastFocus = null, cardErrors = {};
  var courseId = null, quote = null, busy = false, days = [];
  var daysBox = $('cpDays'), daysList = $('cpDaysList'), promoField = $('cpPromoField');
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

  // Day products: the price of each ticked day (from Mastery's quote once it has loaded).
  function dayPrice(n) {
    var it = quote && quote.items && quote.items.filter(function (x) { return x.day === n; })[0];
    return it ? it.amount : COURSES[courseId].price;
  }
  function daysLabel() {
    var names = days.map(function (n) { return 'Day ' + n; });
    return names.length > 1 ? names.slice(0, -1).join(', ') + ' & ' + names[names.length - 1] : (names[0] || 'No day chosen');
  }
  function renderPrice() {
    var c = COURSES[courseId];
    var amount = quote ? quote.amount : c.price;
    var original = quote ? quote.originalAmount : c.price;
    if (c.days) {
      amount = original = days.reduce(function (sum, n) { return sum + dayPrice(n); }, 0);
      $('cpItem').textContent = days.length ? daysLabel() + (days.length > 1 ? ' recordings' : ' recording') : 'Choose a recording';
      Array.prototype.forEach.call(daysList.querySelectorAll('[data-cp-price]'), function (el) { el.textContent = money(dayPrice(+el.getAttribute('data-cp-price'))); });
    }
    $('cpPrice').textContent = money(amount);
    var was = $('cpWas');
    was.hidden = !(amount < original);
    was.textContent = money(original);
    var perk = $('cpPerk');
    perk.hidden = !(quote && quote.perk);
    perk.textContent = quote && quote.perk ? 'Your code also includes: ' + quote.perk : '';
    submitBtn.textContent = busy ? 'Processing…' : (c.days && !days.length ? 'Choose a recording' : 'Pay ' + money(amount));
    var applied = !!(quote && quote.code);
    promoField.hidden = !!c.noPromo;
    promoBox.hidden = applied;
    promoOn.hidden = !applied;
    if (applied) {
      $('cpPromoCode').textContent = quote.code;
      $('cpPromoSave').textContent = original > amount ? '(you save ' + money(original - amount) + ')' : '';
    }
  }

  // Each course's base price and its valid codes (as SHA-256 of "<courseId>:<CODE>")
  // are fetched once, in the background when the page loads. Applying a code is
  // then a local lookup with no server round trip. The server still prices the
  // actual charge from the code when the payment starts.
  var bases = {};
  function loadBase(id) {
    if (!bases[id]) {
      bases[id] = post('/quote', { courseId: id, promo: '' });
      bases[id].catch(function () { delete bases[id]; });
    }
    return bases[id];
  }
  function baseQuote(b) { return { product: b.product, courseId: b.courseId, amount: b.amount, originalAmount: b.originalAmount, code: '', perk: null, items: b.items }; }
  function sha256(text) {
    var bytes = new TextEncoder().encode(text);
    return crypto.subtle.digest('SHA-256', bytes).then(function (buf) {
      return Array.prototype.map.call(new Uint8Array(buf), function (b) { return ('0' + b.toString(16)).slice(-2); }).join('');
    });
  }
  // Resolves to the quote for this code, or null when the code is not valid.
  function lookupPromo(id, code) {
    return loadBase(id).then(function (b) {
      if (!b.promos || !window.crypto || !crypto.subtle) {
        // Older browsers: ask the server instead.
        return post('/quote', { courseId: id, promo: code }).catch(function () { return null; });
      }
      return sha256(b.courseId + ':' + code).then(function (h) {
        var hit = b.promos[h];
        return hit ? { product: b.product, courseId: b.courseId, amount: hit.amount, originalAmount: b.originalAmount, code: code, perk: hit.perk } : null;
      });
    });
  }

  function applyPromo(quiet) {
    var code = promoIn.value.trim().toUpperCase();
    var id = courseId;
    if (!code) { if (!quiet) { setPromoMsg('Enter a promo code first.', true); promoIn.focus(); } return Promise.resolve(false); }
    return lookupPromo(id, code).then(function (q) {
      if (id !== courseId || promoIn.value.trim().toUpperCase() !== code) return false;
      if (!q) { if (!quiet) setPromoMsg('This promo code is not valid for this course.', true); return false; }
      quote = q;
      setPromoMsg('');
      renderPrice();
      return true;
    }).catch(function () {
      if (!quiet) setPromoMsg('Could not check the code. Please try again.', true);
      return false;
    });
  }

  function removePromo() {
    promoIn.value = '';
    setPromoMsg('');
    if (quote) quote = { product: quote.product, courseId: quote.courseId, amount: quote.originalAmount, originalAmount: quote.originalAmount, code: '', perk: null };
    renderPrice();
    promoIn.focus();
  }

  function track(event, data) {
    try { if (window.fbq) window.fbq('track', event, data); } catch (e) { /* tracking never blocks checkout */ }
  }

  function renderDays(c) {
    daysBox.hidden = !c.days;
    daysList.innerHTML = '';
    if (!c.days) return;
    c.days.forEach(function (d) {
      var label = document.createElement('label');
      label.className = 'cp-day';
      var box = document.createElement('input');
      box.type = 'checkbox';
      box.value = d.n;
      box.checked = days.indexOf(d.n) !== -1;
      box.addEventListener('change', function () {
        days = c.days.map(function (x) { return x.n; }).filter(function (n) { return n === d.n ? box.checked : days.indexOf(n) !== -1; });
        showError('');
        renderPrice();
      });
      var text = document.createElement('span');
      var b = document.createElement('b'); b.textContent = 'Day ' + d.n + ': ' + d.title;
      var small = document.createElement('small'); small.textContent = d.when + ' · recording + notes';
      text.appendChild(b); text.appendChild(small);
      var price = document.createElement('em'); price.setAttribute('data-cp-price', d.n);
      label.appendChild(box); label.appendChild(text); label.appendChild(price);
      daysList.appendChild(label);
    });
  }

  function openDialog(id, code, preDays) {
    var c = COURSES[id];
    if (!done.hidden && courseId === id) { dlg.hidden = false; document.body.classList.add('cp-open'); return; }
    // Nothing is pre-ticked unless the button names a day (data-cp-days). Reopening keeps earlier ticks.
    if (c.days) {
      var keep = courseId === id ? days.slice() : [];
      (preDays || []).forEach(function (n) { if (keep.indexOf(n) === -1) keep.push(n); });
      days = c.days.map(function (d) { return d.n; }).filter(function (n) { return keep.indexOf(n) !== -1; });
    } else days = [];
    courseId = id;
    $('cpEyebrow').textContent = c.eyebrow;
    $('cpItem').textContent = c.item;
    $('cpItemSub').textContent = c.sub;
    form.hidden = false;
    done.hidden = true;
    $('cpDoneGroup').hidden = true;
    quote = null;
    renderDays(c);
    showError('');
    setPromoMsg('');
    promoIn.value = c.noPromo ? '' : (code || '');
    renderPrice();
    lastFocus = document.activeElement;
    dlg.hidden = false;
    document.body.classList.add('cp-open');
    $('cpName').focus();
    track('InitiateCheckout', { content_name: c.item, currency: 'USD', value: (c.days ? c.price * days.length : c.price) / 100 });
    var opening = id;
    loadBase(id).then(function (b) {
      if (courseId !== opening) return;
      if (!quote) { quote = baseQuote(b); renderPrice(); }
      if (promoIn.value) applyPromo();
    }).catch(function () {});
    prepare().catch(function (err) { showError(err.message + ' You can also message us on WhatsApp at +1 919 201 5700.'); });
  }

  function closeDialog() {
    closeCountries(false);
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

  // "Mastery" means nothing to most buyers, so the popup says "our learning platform" (plain text: a link distracts from paying).
  var PLATFORM = 'our learning platform';
  function doneText(before, linkText, after) {
    $('cpDoneText').textContent = before + linkText + after;
  }

  function finish(intentId, paidCents) {
    var email = $('cpEmail').value.trim();
    form.hidden = true;
    done.hidden = false;
    doneText('Your payment is confirmed. We’re emailing your receipt and your login for ', PLATFORM, ' to ' + email + '.');
    track('Purchase', { content_name: COURSES[courseId].days ? 'Research Wise ' + daysLabel() : COURSES[courseId].item, currency: 'USD', value: paidCents / 100 });
    post('/confirm', { paymentIntentId: intentId })
      .then(function (d) {
        if (!d.paid || d.pending) return;
        if (d.newAccount) doneText('Your payment is confirmed and your course is unlocked on ', PLATFORM, '. We’ve emailed ' + d.email + ' a link to set your password and start learning, plus your receipt.');
        else doneText('Your payment is confirmed and the course is now in your account on ', PLATFORM, ' (' + d.email + '). Sign in with your usual password. Your receipt is in your inbox.');
        $('cpDoneGo').textContent = d.newAccount ? 'Open our learning platform' : 'Sign in to our learning platform';
        if (d.groupUrl) { var g = $('cpDoneGroup'); g.href = d.groupUrl; g.hidden = false; }
      })
      .catch(function () { /* access is still granted by Mastery's 15-minute check */ });
  }

  form.addEventListener('submit', function (e) {
    e.preventDefault();
    if (busy) return;
    showError('');
    if (COURSES[courseId].days && !days.length) return showError('Choose at least one recording.');
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
          var body = { courseId: courseId, promo: quote ? quote.code : '', name: billing.name, email: billing.email, phone: billing.phone };
          if (COURSES[courseId].days) body.days = days.slice();
          return post('/intent', body);
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

  promoApply.addEventListener('click', function () { applyPromo(false); });
  promoIn.addEventListener('keydown', function (e) { if (e.key === 'Enter') { e.preventDefault(); applyPromo(); } });
  promoIn.addEventListener('input', function () { setPromoMsg(''); applyPromo(true); });
  $('cpPromoRemove').addEventListener('click', removePromo);
  dlg.querySelectorAll('[data-cp-close]').forEach(function (el) { el.addEventListener('click', closeDialog); });
  document.addEventListener('keydown', function (e) { if (e.key === 'Escape' && !dlg.hidden && !busy && ccMenu.hidden) closeDialog(); });

  // Take over the page's Mastery buy forms. Runs after each form's own submit
  // handlers, so a form that blocks itself (e.g. a bad code) stays blocked.
  // Old buy forms name the recorded Step 2/3 course; they now sell the Step 2 cohort.
  // Step 1 forms name the first (November 2026) cohort; they now sell the Step 1 cohort on sale.
  var FORM_PRODUCT = { cmtb3d8b90n2oqyu2t9a69zlc: 'step2-live', cdbu1brx0peuyo75xzpwjcota: 'step1-live' };
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
  // Any link or button with data-cp-course="<product>" opens the popup for that product.
  // Runs in the capture phase so a page's own "#anchor" scroll handler never swallows the click.
  document.addEventListener('click', function (e) {
    var a = e.target.closest && e.target.closest('[data-cp-course]');
    if (!a || e.button !== 0 || e.metaKey || e.ctrlKey || e.shiftKey) return;
    var id = a.getAttribute('data-cp-course');
    if (!Object.prototype.hasOwnProperty.call(COURSES, id)) return;
    e.preventDefault();
    e.stopPropagation();
    var pre = (a.getAttribute('data-cp-days') || '').split(',').map(Number).filter(function (n) { return n > 0; });
    openDialog(id, linkPromo, pre);
  }, true);
  document.addEventListener('submit', function (e) {
    var id = courseOf(e.target);
    if (!id || e.defaultPrevented) return;
    e.preventDefault();
    var p = e.target.querySelector('input[name="promo"]');
    openDialog(id, (p && p.value.trim().toUpperCase()) || linkPromo);
  });

  function productOnPage(id) {
    if (document.querySelector('[data-cp-course="' + id + '"]')) return true;
    if (id === 'step3-live') return !!document.querySelector('a[href*="' + STEP3_LINK + '"]');
    return Array.prototype.some.call(document.forms, function (f) { return courseOf(f) === id; });
  }
  var onPage = Array.prototype.some.call(document.forms, function (f) { return !!courseOf(f); }) || !!document.querySelector('a[href*="' + STEP3_LINK + '"]') || !!document.querySelector('[data-cp-course]');
  if (onPage) {
    // Prices and codes load right away (tiny request); Stripe loads when the page is idle.
    Object.keys(COURSES).forEach(function (id) { if (productOnPage(id)) loadBase(id).catch(function () {}); });
    if ('requestIdleCallback' in window) window.requestIdleCallback(function () { prepare().catch(function () {}); }, { timeout: 2500 });
    else setTimeout(function () { prepare().catch(function () {}); }, 1200);
  }
})();
