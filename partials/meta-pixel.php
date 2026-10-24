<?php
// Meta (Facebook) Pixels — one shared file so IDs only ever change in one place.
// Included from partials/head.php and from the few pages that carry their own
// <head>, so every public page reports the same pixels.
//
//   PRIMARY  1854932902054310 — the Nas.io pixel (added 2026-10-24). Nas.io runs
//            the paid campaigns (Step 1 crash course, Match / Advanced
//            Interviewing, etc.) and asked for this one pixel on the whole site
//            so their ads can optimise on real site behaviour.
//   LEGACY   1530314334871974 — "Solutions Engineering Team Meta Pixel", owned by
//            the ad account (726533136594018, Research Catalyst portfolio) that
//            ran the earlier Match ads. Kept firing so its history isn't cut off;
//            remove it from $UW_META_PIXEL_IDS once that account is retired.
//
// fbq supports several init() calls: every track()/trackCustom() on the site
// (PageView here, Lead/ViewContent/InitiateCheckout on the pages) goes to ALL
// pixels listed below, so nothing else has to change when one is added/removed.
$UW_META_PIXEL_IDS = array(
  '1854932902054310', // Nas.io (primary)
  '1530314334871974', // Solutions Engineering Team (legacy)
);
$UW_META_PIXEL_ID = $UW_META_PIXEL_IDS[0]; // kept for anything that reads the old name

// Pages that already track their own conversions (match-membership) set this
// to false before including, so the generic CTA handler below does not fire a
// second Lead on top of theirs.
$uw_pixel_cta_events = isset($uw_pixel_cta_events) ? $uw_pixel_cta_events : true;
?><!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
<?php foreach ($UW_META_PIXEL_IDS as $uw_pid): ?>
fbq('init', '<?php echo $uw_pid; ?>');
<?php endforeach; ?>
fbq('track', 'PageView');
</script>
<noscript><?php foreach ($UW_META_PIXEL_IDS as $uw_pid): ?><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=<?php echo $uw_pid; ?>&ev=PageView&noscript=1"
alt="" /><?php endforeach; ?></noscript>
<!-- End Meta Pixel Code -->
<?php if ($uw_pixel_cta_events): ?>
<script>
/* Lead on the outbound conversion CTAs. The Match pages' on-page form is a
   design-tool stub that only prints a thank-you, so booking a guidance call
   or opening WhatsApp is the real conversion there. Real forms fire their own
   Lead on submit success (js/contact-form.js, step-1 crash course). */
(function () {
  document.addEventListener('click', function (ev) {
    var a = ev.target && ev.target.closest ? ev.target.closest('a') : null;
    if (!a || !window.fbq) return;
    var href = a.getAttribute('href') || '';
    if (href.indexOf('guidance-call') === -1 && href.indexOf('wa.me/') === -1) return;
    try {
      window.fbq('track', 'Lead', {
        // Some pages ship without a <title>, so fall back to the path.
        content_name: document.title || location.pathname,
        content_category: href.indexOf('wa.me/') !== -1 ? 'whatsapp' : 'guidance-call'
      });
    } catch (e) { /* never break a CTA over tracking */ }
  }, true);
})();
</script>
<?php endif; ?>
