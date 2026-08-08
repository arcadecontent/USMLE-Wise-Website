/* USMLE Wise — contact form → WiseCRM intake.
 * Binds every <form data-uw-contact-form> on the page and POSTs it as JSON to the
 * CRM's public endpoint, with the Cloudflare Turnstile token + honeypot field.
 * No dependencies. Turnstile itself is loaded globally (challenges.cloudflare.com). */
(function () {
  var ENDPOINT = 'https://team.manikmadaan.com/api/web-form/submit';

  function val(form, name) {
    var el = form.querySelector('[name="' + name + '"]');
    return el ? el.value : '';
  }

  function bind(form) {
    if (form.__uwBound) return;
    form.__uwBound = true;
    var statusEl = form.querySelector('[data-uw-status]');

    function setStatus(msg, kind) {
      if (!statusEl) return;
      statusEl.textContent = msg;
      statusEl.setAttribute('data-uw-state', kind || '');
    }

    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var btn = form.querySelector('[type="submit"]');
      var payload = {
        name: val(form, 'name'),
        email: val(form, 'email'),
        phone: val(form, 'phone'),
        subject: val(form, 'subject'),
        message: val(form, 'message'),
        website: val(form, 'website'), // honeypot
        source_page: window.location.href,
        'cf-turnstile-response': val(form, 'cf-turnstile-response')
      };
      if (!payload.name || !payload.message || (!payload.email && !payload.phone)) {
        setStatus('Please add your name, a message, and an email or phone.', 'error');
        return;
      }
      if (btn) btn.disabled = true;
      setStatus('Sending…', 'pending');
      fetch(ENDPOINT, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(payload)
      })
        .then(function (r) { return r.json().then(function (j) { return { ok: r.ok, j: j }; }); })
        .then(function (res) {
          if (res.ok && res.j.success) {
            // Tell the Meta pixel a lead came in, so Match ads can optimise for
            // conversions. Guarded because ad blockers often stop fbq loading.
            if (window.fbq) {
              try {
                window.fbq('track', 'Lead', { content_name: document.title || location.pathname });
              } catch (_) {}
            }
            form.reset();
            if (window.turnstile) { try { window.turnstile.reset(); } catch (_) {} }
            setStatus((res.j && res.j.message) || 'Thanks — we’ll be in touch soon.', 'success');
          } else {
            setStatus((res.j && res.j.error) || 'Something went wrong. Please try again.', 'error');
          }
        })
        .catch(function () { setStatus('Network error. Please try again.', 'error'); })
        .finally(function () { if (btn) btn.disabled = false; });
    });
  }

  function init() {
    var forms = document.querySelectorAll('form[data-uw-contact-form]');
    for (var i = 0; i < forms.length; i++) bind(forms[i]);
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
