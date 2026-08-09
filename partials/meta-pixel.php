<?php
// Meta (Facebook) Pixel — dataset "Solutions Engineering Team Meta Pixel",
// ID 1530314334871974. This is the pixel that belongs to the ad account which
// actually runs the Match ads (Solutions Engineering Team, 726533136594018, in
// the Research Catalyst portfolio), which is why the site reports into it
// rather than into a pixel owned by a personal ad account.
// Lives in one file so the ID only ever has to change in one place. Included
// from partials/head.php and from the few pages that carry their own <head>.
$UW_META_PIXEL_ID = '1530314334871974';

// Pages that already track their own conversions (match-membership) set this
// to false before including, so the generic CTA handler below does not fire a
// second Lead on top of theirs.
$uw_pixel_cta_events = isset($uw_pixel_cta_events) ? $uw_pixel_cta_events : true;
?>
<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '<?php echo $UW_META_PIXEL_ID; ?>');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=<?php echo $UW_META_PIXEL_ID; ?>&ev=PageView&noscript=1"
alt="" /></noscript>
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
