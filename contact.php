<?php
$pageTitle = "Contact Us | USMLE Wise";
$pageDescription = "Get in touch with USMLE Wise. Message us on WhatsApp, email support, book a free guidance call, or send a message and our team will get back to you.";
$canonical = "https://usmlewise.com/contact";
$bodyClass = "msp";
$stylesheets = [
    "/styles/match.css",
    "/styles/contact.css"
];
$scripts = [
    "/js/research-catalyst.js",
    "/js/contact-form.js"
];
include $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';
?>
<main>

<!-- ============== HERO ============== -->
<section class="msp-hero" aria-labelledby="heroTitle">
  <div class="msp-wrap msp-hero__grid">
    <div class="msp-hero__copy reveal">
      <span class="msp-eyebrow">Contact</span>
      <h1 id="heroTitle" class="msp-h1">Questions about your prep?<br><span class="msp-h1__accent">We're one message away.</span></h1>
      <p class="msp-lede">Whether you're choosing between programs, checking on an order, or just want to talk through where you are in your prep, our team responds fast. Pick whatever's easiest.</p>
    </div>
  </div>
</section>

<!-- ============== QUICK CONTACT ============== -->
<section class="msp-section" style="padding-block-start:0" aria-labelledby="quickContactTitle">
  <div class="msp-wrap">
    <h2 id="quickContactTitle" style="position:absolute;width:1px;height:1px;overflow:hidden;clip:rect(0,0,0,0)">Ways to reach us</h2>
    <div class="contact-methods reveal">
      <a class="contact-card" href="https://wa.me/19192015700" target="_blank" rel="noopener noreferrer">
        <div class="contact-card__icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
          </svg>
        </div>
        <h3>WhatsApp</h3>
        <p>Fastest way to reach us. Message our team directly for a quick answer.</p>
        <span class="contact-card__value">+1 (919) 201-5700</span>
      </a>
      <a class="contact-card" href="mailto:support@usmlewise.com">
        <div class="contact-card__icon">
          <i data-lucide="mail" width="20" height="20" stroke-width="2"></i>
        </div>
        <h3>Email</h3>
        <p>For anything detailed, or if you'd rather not wait by the phone.</p>
        <span class="contact-card__value">support@usmlewise.com</span>
      </a>
      <a class="contact-card" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">
        <div class="contact-card__icon">
          <i data-lucide="calendar" width="20" height="20" stroke-width="2"></i>
        </div>
        <h3>Book a guidance call</h3>
        <p>30 minutes with our team to map out your path, free of charge.</p>
        <span class="contact-card__value">Free &middot; 30 min</span>
      </a>
    </div>
  </div>
</section>

<!-- ============== CONTACT FORM ============== -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/contact-form.php'; ?>

</main>

<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
