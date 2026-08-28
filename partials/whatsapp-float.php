<?php
/*
  WhatsApp contact button, visible on every page at every scroll position.
  Desktop/tablet: a floating circle fixed to the bottom-right corner.
  Mobile (<=640px): a full-width bar fixed to the bottom of the viewport
  reading "Questions? Text us on WhatsApp" — same link, same markup, just
  restyled per breakpoint so there's one source of truth for the href/message.

  Included from partials/footer.php (covers every page built on the shared
  partials) and directly before </body> on the standalone landing/enrollment
  pages that carry their own markup. Self-contained on purpose: match-membership
  and match-members do not load the design-system stylesheet, so the CSS ships
  with the partial rather than living in styles.css.

  Optional per-page override, set before the include:
      $whatsappMessage = 'I am interested in Match Mentorship';

  Clicks are already picked up as a Lead by partials/meta-pixel.php, which
  watches every outbound wa.me/ link on the page.
*/
$uw_wa_number  = '19192015700';
$uw_wa_message = isset($whatsappMessage) && $whatsappMessage !== ''
    ? $whatsappMessage
    : 'Hi USMLE Wise, I have a question about your programs.';
$uw_wa_href = 'https://wa.me/' . $uw_wa_number . '?text=' . rawurlencode($uw_wa_message);
?>
<a class="uw-wa-float"
   href="<?php echo htmlspecialchars($uw_wa_href, ENT_QUOTES); ?>"
   target="_blank"
   rel="noopener noreferrer"
   aria-label="Chat with USMLE Wise on WhatsApp">
  <span class="uw-wa-float__label" aria-hidden="true">Chat with us</span>
  <span class="uw-wa-float__icon">
    <svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false">
      <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
    </svg>
  </span>
  <span class="uw-wa-float__bar-text">Questions? <strong>Text us on WhatsApp</strong></span>
</a>
<style>
/* Sits above page content but below the mobile nav overlay (140/150) and the
   video/image lightboxes (200/1000), so it never covers an open menu or modal. */
.uw-wa-float {
  position: fixed;
  right: 24px;
  bottom: 24px;
  right: calc(24px + env(safe-area-inset-right, 0px));
  bottom: calc(24px + env(safe-area-inset-bottom, 0px));
  z-index: 90;
  display: inline-flex;
  align-items: center;
  gap: 0;
  height: 56px;
  padding: 0;
  border-radius: 999px;
  background: #25d366;
  color: #fff;
  text-decoration: none;
  box-shadow: 0 6px 20px rgba(18, 140, 84, 0.35), 0 2px 6px rgba(0, 0, 0, 0.12);
  transition: transform 0.22s cubic-bezier(0.4, 0, 0.2, 1),
              box-shadow 0.22s ease,
              background-color 0.22s ease,
              padding 0.22s cubic-bezier(0.4, 0, 0.2, 1);
  -webkit-tap-highlight-color: transparent;
}

.uw-wa-float__icon {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 56px;
  height: 56px;
  flex-shrink: 0;
}
.uw-wa-float__icon svg { display: block; }

/* Label is collapsed to zero width and expands on hover/focus, so the resting
   state stays a clean circle. Desktop/tablet only — the mobile breakpoint
   below hides it in favor of the always-visible bar text. */
.uw-wa-float__label {
  max-width: 0;
  overflow: hidden;
  white-space: nowrap;
  opacity: 0;
  font-family: 'Geist', system-ui, -apple-system, 'Segoe UI', sans-serif;
  font-size: 15px;
  font-weight: 600;
  letter-spacing: -0.01em;
  transition: max-width 0.22s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.18s ease;
}

/* Persistent text for the mobile full-width bar. Hidden on desktop/tablet,
   where the hover-expand __label above is used instead. */
.uw-wa-float__bar-text {
  display: none;
  font-family: 'Geist', system-ui, -apple-system, 'Segoe UI', sans-serif;
  font-size: 15px;
  font-weight: 400;
  letter-spacing: -0.01em;
}
.uw-wa-float__bar-text strong { font-weight: 700; }

/* The design system's global `a:not(.btn):hover { color: var(--uw-blue-500); }`
   (assets/usmle-design-system/styles.css, plus its [data-theme="dark"] twin)
   has higher specificity than a plain `.uw-wa-float:hover`, so it wins on
   every page that loads styles.css and turns the label and icon (fill is
   currentColor) blue on hover. !important is the reliable way to pin this
   self-contained widget's color against a global rule with higher specificity. */
.uw-wa-float:link,
.uw-wa-float:visited,
.uw-wa-float:hover,
.uw-wa-float:focus,
.uw-wa-float:focus-visible,
.uw-wa-float:active {
  color: #fff !important;
  text-decoration: none;
}

.uw-wa-float:hover,
.uw-wa-float:focus-visible {
  background: #1eb75a;
  transform: translateY(-2px);
  box-shadow: 0 10px 28px rgba(18, 140, 84, 0.42), 0 3px 8px rgba(0, 0, 0, 0.14);
}
.uw-wa-float:hover .uw-wa-float__label,
.uw-wa-float:focus-visible .uw-wa-float__label {
  max-width: 160px;
  opacity: 1;
  padding-left: 20px;
}
.uw-wa-float:focus-visible {
  outline: 3px solid rgba(37, 211, 102, 0.45);
  outline-offset: 3px;
}
.uw-wa-float:active { transform: translateY(0); }

/* Mobile: swap the floating circle for a full-width bar pinned to the bottom
   of the viewport. Same link/markup, just restyled — padding-bottom on body
   keeps the bar from covering the last bit of page content underneath it. */
@media (max-width: 640px) {
  body {
    padding-bottom: calc(56px + env(safe-area-inset-bottom, 0px));
  }
  .uw-wa-float {
    left: 0;
    right: 0;
    bottom: 0;
    bottom: env(safe-area-inset-bottom, 0px);
    width: 100%;
    height: auto;
    min-height: 56px;
    padding: 14px 20px calc(14px + env(safe-area-inset-bottom, 0px));
    border-radius: 0;
    justify-content: center;
    gap: 10px;
    box-shadow: 0 -4px 16px rgba(0, 0, 0, 0.12);
  }
  .uw-wa-float:hover,
  .uw-wa-float:focus-visible {
    transform: none;
  }
  .uw-wa-float__icon { width: 22px; height: 22px; }
  .uw-wa-float__icon svg { width: 22px; height: 22px; }
  /* No hover on touch, so the desktop hover-expand label never shows here. */
  .uw-wa-float__label { display: none; }
  .uw-wa-float__bar-text { display: inline; }
}

@media (prefers-reduced-motion: reduce) {
  .uw-wa-float,
  .uw-wa-float__label { transition: none; }
  .uw-wa-float:hover,
  .uw-wa-float:focus-visible { transform: none; }
}

@media print {
  .uw-wa-float { display: none; }
}
</style>
