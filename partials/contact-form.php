<?php
/*
 * Reusable contact form → WiseCRM. Include anywhere:
 *   <?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/contact-form.php'; ?>
 *
 * Requires the Cloudflare Turnstile script + /js/contact-form.js, both loaded
 * globally in partials/head.php.
 *
 * Set your Turnstile SITE key via the TURNSTILE_SITE_KEY env var, or edit the
 * fallback below. The default is Cloudflare's TEST key (always passes) so the
 * widget renders during setup — REPLACE it with your real site key for live use.
 */
$uw_turnstile_site_key = getenv('TURNSTILE_SITE_KEY') ?: '1x00000000000000000000AA';
// Print the scoped styles only once per page even if the partial is included twice.
$uw_contact_styles_printed = isset($uw_contact_styles_printed) ? $uw_contact_styles_printed : false;
?>
<?php if (!$uw_contact_styles_printed): $uw_contact_styles_printed = true; ?>
<style>
  .uw-contact{background:var(--uw-bg,#f7f8fb);border-top:1px solid var(--uw-border,#e6e8ee);padding:clamp(40px,5vw,64px) clamp(20px,5vw,48px)}
  .uw-contact__inner{max-width:720px;margin:0 auto}
  .uw-contact__intro{text-align:center;margin-bottom:clamp(20px,3vw,28px)}
  .uw-contact__title{font-family:var(--font-display,inherit);font-size:clamp(24px,3vw,30px);color:var(--uw-ink-900,#0f1233);margin:0 0 8px}
  .uw-contact__sub{font-size:15px;line-height:1.55;color:var(--uw-ink-600,#4a4e6b);margin:0;max-width:52ch;margin-inline:auto}
  .uw-contact__form{display:flex;flex-direction:column;gap:16px;background:var(--uw-surface,#fff);border:1px solid var(--uw-border,#e6e8ee);border-radius:var(--r-lg,14px);padding:clamp(20px,4vw,32px)}
  .uw-contact__row{display:grid;grid-template-columns:1fr 1fr;gap:16px}
  @media (max-width:560px){.uw-contact__row{grid-template-columns:1fr}}
  .uw-field{display:flex;flex-direction:column;gap:6px;font-size:13px;color:var(--uw-ink-700,#33375a);font-weight:500}
  .uw-field small{color:var(--uw-ink-400,#9195b0);font-weight:400}
  .uw-field input,.uw-field textarea{font-family:var(--font-sans,inherit);font-size:14px;padding:11px 13px;border:1px solid var(--uw-border-strong,#cdd0dc);border-radius:var(--r-md,10px);background:var(--uw-surface,#fff);color:var(--uw-ink-900,#0f1233);outline:none}
  .uw-field textarea{resize:vertical}
  .uw-field input:focus,.uw-field textarea:focus{border-color:var(--uw-blue-500,#2b6cff)}
  .uw-hp{position:absolute;left:-9999px;width:1px;height:1px;overflow:hidden}
  .uw-contact__status{margin:0;font-size:13.5px;min-height:1.2em}
  .uw-contact__status[data-uw-state="error"]{color:var(--uw-red-600,#c0392b)}
  .uw-contact__status[data-uw-state="success"]{color:var(--uw-success-700,#1a7f4b)}
  .uw-contact__status[data-uw-state="pending"]{color:var(--uw-ink-500,#6b6f8c)}
</style>
<?php endif; ?>
<section class="uw-contact" id="contact" aria-labelledby="uw-contact-title">
  <div class="uw-contact__inner">
    <div class="uw-contact__intro">
      <h2 id="uw-contact-title" class="uw-contact__title">Get in touch</h2>
      <p class="uw-contact__sub">Questions about coaching, research, or the Match? Send us a message and our team will get back to you.</p>
    </div>
    <form class="uw-contact__form" data-uw-contact-form novalidate>
      <div class="uw-contact__row">
        <label class="uw-field"><span>Full name</span><input type="text" name="name" maxlength="200" placeholder="Your name" required></label>
        <label class="uw-field"><span>Email</span><input type="email" name="email" maxlength="200" placeholder="you@email.com" required></label>
      </div>
      <div class="uw-contact__row">
        <label class="uw-field"><span>Phone <small>(optional)</small></span><input type="tel" name="phone" maxlength="50" placeholder="+1 …"></label>
        <label class="uw-field"><span>Subject <small>(optional)</small></span><input type="text" name="subject" maxlength="200" placeholder="What's this about?"></label>
      </div>
      <label class="uw-field"><span>Message</span><textarea name="message" rows="4" maxlength="5000" placeholder="Tell us where you are in your prep…" required></textarea></label>

      <!-- Honeypot: keep hidden and empty. Do not remove. -->
      <div class="uw-hp" aria-hidden="true"><label>Leave this empty<input type="text" name="website" tabindex="-1" autocomplete="off"></label></div>

      <div class="cf-turnstile" data-sitekey="<?php echo htmlspecialchars($uw_turnstile_site_key, ENT_QUOTES); ?>"></div>

      <button type="submit" class="btn btn--primary btn--lg">Send message</button>
      <p class="uw-contact__status" data-uw-status role="status" aria-live="polite"></p>
    </form>
  </div>
</section>
