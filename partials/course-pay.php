<?php
/*
 * On-page course checkout popup (like Research Wise): our own name / email /
 * WhatsApp / promo fields above Stripe's card fields. Payment, pricing, promo
 * codes and course access all run on Mastery (src/lib/course-popup.ts); this
 * page never decides a price. It takes over any Mastery "single-course" buy
 * form on the page for a course listed in js/course-pay.js. If the script
 * fails to load, those forms still go to Stripe Checkout as before.
 */
?>
<div class="cp" id="cpPay" role="dialog" aria-modal="true" aria-labelledby="cpTitle" hidden>
  <div class="cp__backdrop" data-cp-close></div>
  <div class="cp__panel">
    <div class="cp__head">
      <div>
        <span class="cp__eyebrow" id="cpEyebrow">USMLE Wise</span>
        <h2 id="cpTitle" class="cp__title">Enroll now</h2>
      </div>
      <button type="button" class="cp__close" data-cp-close aria-label="Close">&times;</button>
    </div>

    <form id="cpForm" novalidate>
      <div class="cp__summary">
        <div><strong id="cpItem">Course</strong><span id="cpItemSub">One-time payment &middot; instant Mastery access</span></div>
        <div class="cp__price"><s id="cpWas" hidden></s><b id="cpPrice"></b></div>
      </div>
      <p class="cp__perk" id="cpPerk" hidden></p>

      <div class="cp-field">
        <label for="cpName">Full name</label>
        <input id="cpName" name="name" type="text" autocomplete="name" required>
      </div>
      <div class="cp-field">
        <label for="cpEmail">Email</label>
        <input id="cpEmail" name="email" type="email" autocomplete="email" inputmode="email" required>
        <small>Your receipt and Mastery login are sent here. Already a student? Use your Mastery email.</small>
      </div>
      <div class="cp-field">
        <label for="cpPhone">WhatsApp number</label>
        <div class="cp-phone">
          <div class="cp-cc">
            <span class="cp-cc__show" id="cpCountryShow" aria-hidden="true">🇺🇸 +1</span>
            <select id="cpCountry" aria-label="Country code" autocomplete="tel-country-code"></select>
          </div>
          <input id="cpPhone" name="phone" type="tel" autocomplete="tel-national" inputmode="tel" placeholder="Phone number" required>
        </div>
      </div>

      <div class="cp-field">
        <label for="cpPromo">Promo code <span class="cp__opt">(optional)</span></label>
        <div class="cp-promo" id="cpPromoBox">
          <input id="cpPromo" type="text" maxlength="80" autocomplete="off" spellcheck="false" placeholder="Enter promo code" aria-describedby="cpPromoMsg">
          <button type="button" id="cpPromoApply">Apply</button>
        </div>
        <div class="cp-promo-on" id="cpPromoOn" hidden>
          <span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg> <b id="cpPromoCode"></b> applied <span id="cpPromoSave"></span></span>
          <button type="button" id="cpPromoRemove">Remove</button>
        </div>
        <small id="cpPromoMsg" class="cp-promo-msg" aria-live="polite"></small>
      </div>

      <div class="cp-field">
        <span class="cp-label" id="cpCardNumberLabel">Card number</span>
        <div id="cpCardNumber" class="cp-sel" aria-labelledby="cpCardNumberLabel"></div>
      </div>
      <div class="cp-row">
        <div class="cp-field">
          <span class="cp-label" id="cpCardExpiryLabel">Expiry date</span>
          <div id="cpCardExpiry" class="cp-sel" aria-labelledby="cpCardExpiryLabel"></div>
        </div>
        <div class="cp-field">
          <span class="cp-label" id="cpCardCvcLabel">Security code</span>
          <div id="cpCardCvc" class="cp-sel" aria-labelledby="cpCardCvcLabel"></div>
        </div>
      </div>
      <p class="cp__error" id="cpError" role="alert" aria-live="polite"></p>
      <button class="btn btn--primary cp__submit" id="cpSubmit" type="submit">Pay</button>
      <p class="cp__secure"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="4" y="11" width="16" height="10" rx="2"/><path d="M8 11V7a4 4 0 0 1 8 0v4"/></svg> Secure payment by Stripe. Your card details never touch our servers.</p>
    </form>

    <div class="cp__done" id="cpDone" hidden>
      <div class="cp__tick" aria-hidden="true">&#10003;</div>
      <h3>You're enrolled. Thank you!</h3>
      <p id="cpDoneText">Your payment is confirmed. We've emailed your receipt and your Mastery login.</p>
      <a class="btn btn--primary" id="cpDoneGo" href="https://mastery.usmlewise.com/login" target="_blank" rel="noopener">Go to Mastery</a>
      <p class="cp__fine">Can't find the email? Check spam, or message us on <a href="https://wa.me/19192015700" target="_blank" rel="noopener">WhatsApp</a>.</p>
    </div>
  </div>
</div>
<style>
  /* The popup stays light in dark mode so it matches Stripe's card field. */
  .cp{position:fixed;inset:0;z-index:1000;display:flex;align-items:center;justify-content:center;padding:16px;color-scheme:light}
  .cp[hidden]{display:none}
  .cp__backdrop{position:absolute;inset:0;background:rgba(20,21,28,.55)}
  .cp__panel{position:relative;width:100%;max-width:480px;max-height:calc(100vh - 32px);overflow:auto;background:#fff;color:#14151c;border-radius:16px;padding:24px;box-shadow:0 24px 60px rgba(20,21,28,.3);font-family:var(--font-sans);text-align:left}
  .cp__head{display:flex;align-items:flex-start;justify-content:space-between;gap:12px;margin-bottom:16px}
  .cp__eyebrow{font-family:var(--font-mono);font-size:12px;letter-spacing:.08em;text-transform:uppercase;color:#e32124}
  .cp__title{font-family:var(--font-display);font-size:28px;line-height:1.15;margin:4px 0 0;color:#14151c;font-weight:400}
  .cp__close{border:0;background:#f5f5f7;color:#14151c;width:36px;height:36px;border-radius:50%;font-size:22px;line-height:1;cursor:pointer;flex:none}
  .cp__summary{display:flex;align-items:center;justify-content:space-between;gap:12px;background:#f5f5f7;border-radius:10px;padding:12px 14px;margin-bottom:12px}
  .cp__summary strong{display:block;font-size:15px;color:#14151c}
  .cp__summary span{font-size:13px;color:#6d7080}
  .cp__price{display:flex;align-items:baseline;gap:8px;flex:none}
  .cp__price b{font-family:var(--font-display);font-size:26px;font-weight:600;color:#14151c}
  .cp__price s{font-size:15px;color:#9a9ca8}
  .cp__perk{margin:0 0 12px;padding:10px 12px;border-radius:8px;background:#e8f5ee;color:#1f6b45;font-size:13.5px;font-weight:600}
  .cp-field{margin-bottom:12px}
  .cp-field label,.cp-label{display:block;font-size:14px;font-weight:500;color:#32343f;margin-bottom:6px}
  .cp__opt{font-weight:400;color:#6d7080}
  .cp-field input{width:100%;box-sizing:border-box;font:inherit;font-size:15px;color:#14151c;background:#fff;border:1px solid #d4d4cf;border-radius:8px;padding:11px 12px;transition:border-color .15s,box-shadow .15s}
  .cp-field input::placeholder{color:#9a9ca8}
  .cp-field input:focus{outline:none;border-color:#2c3386;box-shadow:0 0 0 3px rgba(44,51,134,.18)}
  .cp-field input[aria-invalid="true"]{border-color:#e32124;box-shadow:0 0 0 3px rgba(227,33,36,.12)}
  .cp-field small{display:block;margin-top:5px;font-size:12.5px;color:#6d7080}
  .cp-promo{display:flex;gap:8px}
  .cp-promo[hidden]{display:none}
  .cp-promo input{flex:1;min-width:0;text-transform:uppercase}
  .cp-promo input::placeholder{text-transform:none}
  .cp-promo button,.cp-promo-on button{flex:none;font:inherit;font-size:14px;font-weight:600;border-radius:8px;cursor:pointer}
  .cp-promo button{border:1px solid #2c3386;background:#2c3386;color:#fff;padding:0 18px}
  .cp-promo button[disabled]{opacity:.6;cursor:progress}
  .cp-promo-on{display:flex;align-items:center;justify-content:space-between;gap:10px;border:1px solid #9fd4b5;background:#e8f5ee;border-radius:8px;padding:8px 8px 8px 12px;font-size:14px;color:#1f6b45}
  .cp-promo-on[hidden]{display:none}
  .cp-promo-on > span{display:inline-flex;align-items:center;gap:6px}
  .cp-promo-on button{border:0;background:transparent;color:#1f6b45;text-decoration:underline;padding:4px 6px}
  .cp-field small.cp-promo-msg:empty{display:none}
  .cp-field small.cp-promo-msg.is-bad{color:#a01517}
  .cp-sel{box-sizing:border-box;min-height:45px;background:#fff;border:1px solid #d4d4cf;border-radius:8px;padding:12px;transition:border-color .15s,box-shadow .15s}
  .cp-sel.StripeElement--focus{border-color:#2c3386;box-shadow:0 0 0 3px rgba(44,51,134,.18)}
  .cp-sel.StripeElement--invalid{border-color:#e32124;box-shadow:0 0 0 3px rgba(227,33,36,.12)}
  .cp-row{display:grid;grid-template-columns:1fr 1fr;gap:12px}
  .cp-phone{display:flex;gap:8px}
  .cp-phone input{flex:1;min-width:0}
  .cp-cc{position:relative;flex:none;width:112px;box-sizing:border-box;border:1px solid #d4d4cf;border-radius:8px;background:#fff;transition:border-color .15s,box-shadow .15s}
  .cp-cc:focus-within{border-color:#2c3386;box-shadow:0 0 0 3px rgba(44,51,134,.18)}
  .cp-cc__show{display:flex;align-items:center;height:100%;padding:0 26px 0 12px;font-size:15px;color:#14151c;white-space:nowrap;pointer-events:none}
  .cp-cc::after{content:"";position:absolute;right:11px;top:50%;width:7px;height:7px;margin-top:-6px;border-right:1.5px solid #6d7080;border-bottom:1.5px solid #6d7080;transform:rotate(45deg);pointer-events:none}
  .cp-cc select{position:absolute;inset:0;width:100%;height:100%;opacity:0;cursor:pointer;font-size:16px}
  .cp__error{margin:4px 0 10px;font-size:14px;color:#a01517}
  .cp__error:empty{display:none}
  .cp__submit{width:100%;justify-content:center;font-size:16px;padding:14px 18px;margin-top:4px}
  .cp__submit[disabled]{opacity:.65;cursor:progress}
  .cp__secure{display:flex;align-items:center;justify-content:center;gap:6px;margin:12px 0 0;font-size:12.5px;color:#6d7080;text-align:center}
  .cp__done{text-align:center;padding:8px 4px 4px}
  .cp__tick{width:56px;height:56px;border-radius:50%;background:#2f8a5a;color:#fff;font-size:30px;line-height:56px;margin:0 auto 12px}
  .cp__done h3{font-family:var(--font-display);font-size:26px;margin:0 0 8px;color:#14151c}
  .cp__done p{color:#32343f;margin:0 0 16px}
  .cp__fine{font-size:14px;margin-top:14px!important}
  .cp__fine a{color:#2c3386;font-weight:600}
  body.cp-open{overflow:hidden}
  @media (max-width:480px){.cp{padding:0;align-items:flex-end}.cp__panel{border-radius:16px 16px 0 0;max-height:94vh;padding:20px 16px}}
</style>
<script src="/js/course-pay.js?v=<?php echo @filemtime($_SERVER['DOCUMENT_ROOT'] . '/js/course-pay.js') ?: '1'; ?>" defer></script>
