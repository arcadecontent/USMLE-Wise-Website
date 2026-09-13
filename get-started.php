<?php
$styles_v = @filemtime($_SERVER['DOCUMENT_ROOT'] . '/assets/usmle-design-system/styles.css') ?: '1';

// This page fires its own Lead on a successful submit, so the pixel's generic
// "Lead on any wa.me link click" handler must stay off (it would double-count).
$uw_pixel_cta_events = false;

// Country code the WhatsApp number picker starts on (India).
$gs_country = 'IN';

$gs_questions = [
  [
    'name' => 'paid_for',
    'type' => 'checkbox',
    'label' => 'What have you already paid for?',
    'hint' => 'Select all that apply',
    'exclusive' => 'None of these yet',
    'options' => [
      'USMLE registration fee',
      'A question bank (UWorld, Amboss)',
      'A prep course or coaching',
      'A US clinical rotation',
      'None of these yet',
    ],
  ],
  [
    'name' => 'exam_deadline',
    'type' => 'radio',
    'label' => 'When is your exam or application deadline?',
    'hint' => 'Pick one',
    'options' => [
      'Within 3 months',
      '3 to 6 months',
      '6 to 12 months',
      'No date set yet',
    ],
  ],
  [
    'name' => 'help_with',
    'type' => 'checkbox',
    'label' => 'What do you need help with?',
    'hint' => 'Select all that apply',
    'options' => [
      'USMLE exam prep',
      'US clinical rotations (USCE)',
      'Research and publications',
      'ERAS, CV and personal statement',
      'Match strategy and interviews',
      'Not sure yet, I need guidance',
    ],
  ],
  [
    'name' => 'current_stance',
    'type' => 'radio',
    'label' => 'Where do you stand right now?',
    'hint' => 'Pick one',
    'options' => [
      'Committed to USMLE and ready to invest in mentorship',
      'With another coaching program but want better mentorship',
      'Serious about USMLE, comparing options',
      'Still deciding if USMLE is right for me',
      'Only looking for free resources',
    ],
  ],
];

function gs_e($value) {
  return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!-- Google tag (gtag.js) — GA4 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1MMVZ5WKY2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-1MMVZ5WKY2');
</script>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/meta-pixel.php'; ?>
<title>Get Started | USMLE Wise</title>
<meta name="description" content="Tell us where you are in your USMLE journey and our team will guide you on WhatsApp." />
<!-- Form-only ad landing page: kept out of the sitemap and the search index. -->
<meta name="robots" content="noindex, follow" />
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;600;700&family=Source+Serif+4:opsz,wght@8..60,600&display=swap" rel="stylesheet" media="print" onload="this.media='all'" />
<noscript><link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;600;700&family=Source+Serif+4:opsz,wght@8..60,600&display=swap" rel="stylesheet" /></noscript>
<link rel="icon" type="image/svg+xml" href="/assets/usmle-design-system/assets/emblem.svg" />
<link rel="stylesheet" href="/assets/usmle-design-system/styles.css?v=<?php echo $styles_v; ?>" />
<script src="/js/uw-track.js?v=<?php echo @filemtime($_SERVER['DOCUMENT_ROOT'] . '/js/uw-track.js') ?: '1'; ?>" defer></script>
<style>
  [hidden] { display: none !important; }
  html, body { background: var(--uw-bg); }
  .gs { min-height: 100vh; padding: 28px 16px 48px; font-family: var(--font-sans); color: var(--uw-ink-800); -webkit-font-smoothing: antialiased; }
  .gs *, .gs *::before, .gs *::after { box-sizing: border-box; }
  .gs-card { max-width: 560px; margin: 0 auto; background: var(--uw-surface); border: 1px solid var(--uw-border); border-radius: 16px; box-shadow: 0 10px 30px rgba(15, 18, 51, .06); padding: 28px 22px 26px; }
  @media (min-width: 560px) { .gs { padding-top: 48px; } .gs-card { padding: 36px 36px 32px; } }
  .gs-logo { display: block; height: 30px; width: auto; margin: 0 auto; }
  .gs-title { margin: 22px 0 0; text-align: center; font: 600 clamp(24px, 6vw, 30px)/1.2 var(--font-display); letter-spacing: -0.01em; color: var(--uw-ink-900); }
  .gs-sub { margin: 10px auto 0; max-width: 420px; text-align: center; font-size: 15px; line-height: 1.5; color: var(--uw-ink-600); }

  .gs-form { margin-top: 26px; }
  .gs-q { margin: 0 0 22px; padding: 0; border: 0; min-width: 0; }
  .gs-label { display: block; padding: 0; margin: 0 0 8px; font: 600 15px/1.35 var(--font-sans); color: var(--uw-ink-900); }
  .gs-label small { display: block; margin-top: 2px; font-weight: 400; font-size: 13px; color: var(--uw-ink-500); }
  .gs-input { width: 100%; min-width: 0; height: 48px; padding: 0 14px; font: 400 16px var(--font-sans); color: var(--uw-ink-900); background: var(--uw-bg); border: 1px solid var(--uw-border-strong); border-radius: 8px; outline: none; transition: border-color .15s, box-shadow .15s; }
  .gs-input:focus { border-color: var(--uw-blue-500); box-shadow: 0 0 0 3px rgba(44, 51, 134, .15); background: var(--uw-surface); }
  .gs-q.is-invalid .gs-input, .gs-q.is-invalid .gs-cc__btn { border-color: var(--uw-red-500); }
  .gs-err { margin: 6px 0 0; font-size: 13px; color: var(--uw-red-500); }

  /* Phone: searchable country code + number */
  .gs-phone { position: relative; display: flex; gap: 8px; }
  .gs-cc__btn { flex: none; display: inline-flex; align-items: center; gap: 6px; height: 48px; padding: 0 10px 0 12px; font: 500 15px var(--font-sans); color: var(--uw-ink-900); background: var(--uw-bg); border: 1px solid var(--uw-border-strong); border-radius: 8px; cursor: pointer; }
  .gs-cc__btn:focus-visible { outline: none; border-color: var(--uw-blue-500); box-shadow: 0 0 0 3px rgba(44, 51, 134, .15); }
  .gs-cc__flag { font-size: 19px; line-height: 1; }
  .gs-cc__btn svg { color: var(--uw-ink-500); }
  .gs-cc__panel { position: absolute; z-index: 20; top: calc(100% + 6px); left: 0; right: 0; background: var(--uw-surface); border: 1px solid var(--uw-border-strong); border-radius: 12px; box-shadow: 0 16px 40px rgba(15, 18, 51, .16); overflow: hidden; }
  .gs-cc__search { display: block; width: 100%; height: 46px; padding: 0 14px; font: 400 16px var(--font-sans); border: 0; border-bottom: 1px solid var(--uw-border); outline: none; color: var(--uw-ink-900); background: var(--uw-surface); }
  .gs-cc__list { list-style: none; margin: 0; padding: 4px 0; max-height: 260px; overflow-y: auto; overscroll-behavior: contain; }
  .gs-cc__opt { display: flex; align-items: center; gap: 10px; padding: 10px 14px; font-size: 15px; cursor: pointer; color: var(--uw-ink-800); }
  .gs-cc__opt .gs-cc__flag { width: 24px; text-align: center; }
  .gs-cc__opt .gs-cc__name { flex: 1; min-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }
  .gs-cc__opt .gs-cc__code { color: var(--uw-ink-500); font-variant-numeric: tabular-nums; }
  .gs-cc__opt.is-active { background: var(--uw-blue-50, #eef0f8); }
  .gs-cc__opt[aria-selected="true"] { font-weight: 600; color: var(--uw-blue-500); }
  .gs-cc__empty { padding: 14px; font-size: 14px; color: var(--uw-ink-500); }

  /* Tap-to-select answers */
  .gs-pills { display: flex; flex-direction: column; gap: 8px; }
  .gs-pill { position: relative; display: flex; align-items: center; gap: 12px; min-height: 48px; padding: 11px 14px; font-size: 15px; line-height: 1.35; color: var(--uw-ink-800); background: var(--uw-surface); border: 1px solid var(--uw-border-strong); border-radius: 10px; cursor: pointer; -webkit-tap-highlight-color: transparent; transition: border-color .15s, background-color .15s; }
  .gs-pill:hover { border-color: var(--uw-ink-400, #9a9aa3); }
  .gs-pill input { position: absolute; opacity: 0; width: 1px; height: 1px; pointer-events: none; }
  .gs-pill__mark { flex: none; display: inline-flex; align-items: center; justify-content: center; width: 20px; height: 20px; border: 1.5px solid var(--uw-border-strong); border-radius: 5px; background: var(--uw-surface); color: #fff; transition: background-color .15s, border-color .15s; }
  .gs-pill--radio .gs-pill__mark { border-radius: 50%; }
  .gs-pill__mark svg { opacity: 0; }
  .gs-pill.is-on { border-color: var(--uw-blue-500); background: var(--uw-blue-50, #eef0f8); color: var(--uw-ink-900); }
  .gs-pill.is-on .gs-pill__mark { background: var(--uw-blue-500); border-color: var(--uw-blue-500); }
  .gs-pill.is-on .gs-pill__mark svg { opacity: 1; }
  .gs-pill--radio.is-on .gs-pill__mark { box-shadow: inset 0 0 0 3px var(--uw-surface); }
  .gs-pill:focus-within { box-shadow: 0 0 0 3px rgba(44, 51, 134, .15); }

  .gs-captcha { display: flex; justify-content: center; margin: 4px 0 16px; min-height: 65px; }
  .gs-submit { width: 100%; justify-content: center; gap: 10px; }
  .gs-submit[disabled] { opacity: .7; cursor: progress; }
  .gs-status { margin: 12px 0 0; text-align: center; font-size: 14px; min-height: 1.2em; color: var(--uw-ink-600); }
  .gs-status[data-state="error"] { color: var(--uw-red-500); }
  .gs-wa { display: flex; align-items: center; justify-content: center; gap: 8px; margin-top: 12px; padding: 13px 18px; font: 600 15px/1 var(--font-sans); color: #0b1220; background: #25d366; border-radius: 8px; text-decoration: none; }
  .gs-note { margin: 16px 0 0; text-align: center; font-size: 12.5px; color: var(--uw-ink-500); }
  .gs-hp { position: absolute; left: -9999px; width: 1px; height: 1px; overflow: hidden; }
</style>
</head>
<body>
<main class="gs">
  <div class="gs-card">
    <img class="gs-logo" src="/assets/usmle-design-system/assets/Logo-Horizontal.svg" alt="USMLE Wise" width="150" height="30" />
    <h1 class="gs-title">Get your USMLE plan</h1>
    <p class="gs-sub">Answer 6 quick questions. It takes under a minute, then our team continues with you on WhatsApp.</p>

    <form class="gs-form" id="gsForm" novalidate>
      <div class="gs-q" data-q="name">
        <label class="gs-label" for="gsName">Full name</label>
        <input class="gs-input" id="gsName" name="name" type="text" autocomplete="name" maxlength="200" required />
        <p class="gs-err" hidden>Please enter your full name.</p>
      </div>

      <div class="gs-q" data-q="phone">
        <label class="gs-label" for="gsNumber">WhatsApp number</label>
        <div class="gs-phone">
          <button type="button" class="gs-cc__btn" id="gsCcBtn" aria-haspopup="listbox" aria-expanded="false" aria-controls="gsCcPanel">
            <span class="gs-cc__flag" id="gsCcFlag" aria-hidden="true"></span>
            <span id="gsCcDial"></span>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
          </button>
          <input class="gs-input" id="gsNumber" type="tel" inputmode="tel" autocomplete="tel-national" maxlength="20" placeholder="Phone number" required />
          <div class="gs-cc__panel" id="gsCcPanel" hidden>
            <input class="gs-cc__search" id="gsCcSearch" type="search" placeholder="Search country or code" autocomplete="off" aria-label="Search country or code" aria-controls="gsCcList" />
            <ul class="gs-cc__list" id="gsCcList" role="listbox" aria-label="Country code"></ul>
          </div>
        </div>
        <p class="gs-err" hidden>Please enter a valid WhatsApp number.</p>
      </div>

      <?php foreach ($gs_questions as $q): ?>
      <fieldset class="gs-q" data-q="<?php echo gs_e($q['name']); ?>"<?php if (!empty($q['exclusive'])): ?> data-exclusive="<?php echo gs_e($q['exclusive']); ?>"<?php endif; ?>>
        <legend class="gs-label"><?php echo gs_e($q['label']); ?><small><?php echo gs_e($q['hint']); ?></small></legend>
        <div class="gs-pills">
          <?php foreach ($q['options'] as $option): ?>
          <label class="gs-pill gs-pill--<?php echo gs_e($q['type']); ?>">
            <input type="<?php echo gs_e($q['type']); ?>" name="<?php echo gs_e($q['name']); ?>" value="<?php echo gs_e($option); ?>" />
            <span class="gs-pill__mark" aria-hidden="true"><?php if ($q['type'] === 'checkbox'): ?><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg><?php endif; ?></span>
            <span><?php echo gs_e($option); ?></span>
          </label>
          <?php endforeach; ?>
        </div>
        <p class="gs-err" hidden><?php echo $q['type'] === 'checkbox' ? 'Please select at least one option.' : 'Please select an option.'; ?></p>
      </fieldset>
      <?php endforeach; ?>

      <!-- Honeypot: keep hidden and empty. Do not remove. -->
      <div class="gs-hp" aria-hidden="true"><label>Leave this empty<input type="text" name="website" tabindex="-1" autocomplete="off"></label></div>

      <div class="gs-captcha cf-turnstile" data-sitekey="<?php echo gs_e(getenv('TURNSTILE_SITE_KEY') ?: '0x4AAAAAAD6jImzHI3FyAiUO'); ?>"></div>

      <button type="submit" class="btn btn--primary btn--lg gs-submit" id="gsSubmit">Submit &amp; continue on WhatsApp</button>
      <p class="gs-status" id="gsStatus" role="status" aria-live="polite"></p>
      <a class="gs-wa" id="gsWa" href="https://wa.me/19192015700" hidden>
        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.46 1.32 4.97L2 22l5.25-1.38a9.9 9.9 0 0 0 4.79 1.22h.01c5.46 0 9.91-4.45 9.91-9.91C21.96 6.45 17.5 2 12.04 2zm0 18.13h-.01a8.2 8.2 0 0 1-4.19-1.15l-.3-.18-3.11.82.83-3.04-.2-.31a8.16 8.16 0 0 1-1.26-4.36c0-4.54 3.7-8.23 8.24-8.23 4.54 0 8.23 3.7 8.23 8.24 0 4.54-3.69 8.21-8.23 8.21zm4.52-6.16c-.25-.12-1.47-.72-1.69-.8-.23-.09-.39-.13-.56.12-.16.25-.64.8-.79.97-.14.16-.29.19-.54.06-.25-.12-1.05-.39-2-1.23-.74-.66-1.24-1.47-1.38-1.72-.15-.25-.02-.39.11-.51.11-.11.25-.29.37-.44.12-.14.16-.25.25-.41.08-.16.04-.31-.02-.44-.06-.12-.56-1.35-.77-1.85-.2-.48-.41-.42-.56-.42h-.48c-.16 0-.43.06-.65.31-.23.25-.87.85-.87 2.07 0 1.22.89 2.4 1.01 2.56.12.16 1.73 2.65 4.2 3.71.59.25 1.04.4 1.4.52.59.19 1.12.16 1.55.1.47-.07 1.47-.6 1.68-1.19.21-.58.21-1.08.14-1.19-.06-.11-.22-.18-.47-.3z"></path></svg>
        <span id="gsWaText">Send my details on WhatsApp instead</span>
      </a>
      <p class="gs-note">Your details are only used by the USMLE Wise team to guide you.</p>
    </form>
  </div>
</main>

<script>
(function () {
  var ENDPOINT = 'https://team.manikmadaan.com/api/web-form/submit';
  var WA_NUMBER = '19192015700';
  var DEFAULT_COUNTRY = <?php echo json_encode($gs_country); ?>;

  // Every country / territory: ISO code | name | dial code.
  var COUNTRIES = ('AF|Afghanistan|93;AX|Åland Islands|358;AL|Albania|355;DZ|Algeria|213;AS|American Samoa|1684;' +
    'AD|Andorra|376;AO|Angola|244;AI|Anguilla|1264;AG|Antigua and Barbuda|1268;AR|Argentina|54;AM|Armenia|374;' +
    'AW|Aruba|297;AC|Ascension Island|247;AU|Australia|61;AT|Austria|43;AZ|Azerbaijan|994;BS|Bahamas|1242;' +
    'BH|Bahrain|973;BD|Bangladesh|880;BB|Barbados|1246;BY|Belarus|375;BE|Belgium|32;BZ|Belize|501;BJ|Benin|229;' +
    'BM|Bermuda|1441;BT|Bhutan|975;BO|Bolivia|591;BA|Bosnia and Herzegovina|387;BW|Botswana|267;BR|Brazil|55;' +
    'IO|British Indian Ocean Territory|246;VG|British Virgin Islands|1284;BN|Brunei|673;BG|Bulgaria|359;' +
    'BF|Burkina Faso|226;BI|Burundi|257;KH|Cambodia|855;CM|Cameroon|237;CA|Canada|1;CV|Cape Verde|238;' +
    'BQ|Caribbean Netherlands|599;KY|Cayman Islands|1345;CF|Central African Republic|236;TD|Chad|235;CL|Chile|56;' +
    'CN|China|86;CX|Christmas Island|61;CC|Cocos (Keeling) Islands|61;CO|Colombia|57;KM|Comoros|269;' +
    'CG|Congo - Brazzaville|242;CD|Congo - Kinshasa|243;CK|Cook Islands|682;CR|Costa Rica|506;' +
    'CI|Côte d’Ivoire|225;HR|Croatia|385;CU|Cuba|53;CW|Curaçao|599;CY|Cyprus|357;CZ|Czechia|420;DK|Denmark|45;' +
    'DJ|Djibouti|253;DM|Dominica|1767;DO|Dominican Republic|1809;EC|Ecuador|593;EG|Egypt|20;SV|El Salvador|503;' +
    'GQ|Equatorial Guinea|240;ER|Eritrea|291;EE|Estonia|372;SZ|Eswatini|268;ET|Ethiopia|251;' +
    'FK|Falkland Islands|500;FO|Faroe Islands|298;FJ|Fiji|679;FI|Finland|358;FR|France|33;GF|French Guiana|594;' +
    'PF|French Polynesia|689;GA|Gabon|241;GM|Gambia|220;GE|Georgia|995;DE|Germany|49;GH|Ghana|233;' +
    'GI|Gibraltar|350;GR|Greece|30;GL|Greenland|299;GD|Grenada|1473;GP|Guadeloupe|590;GU|Guam|1671;' +
    'GT|Guatemala|502;GG|Guernsey|44;GN|Guinea|224;GW|Guinea-Bissau|245;GY|Guyana|592;HT|Haiti|509;' +
    'HN|Honduras|504;HK|Hong Kong|852;HU|Hungary|36;IS|Iceland|354;IN|India|91;ID|Indonesia|62;IR|Iran|98;' +
    'IQ|Iraq|964;IE|Ireland|353;IM|Isle of Man|44;IL|Israel|972;IT|Italy|39;JM|Jamaica|1876;JP|Japan|81;' +
    'JE|Jersey|44;JO|Jordan|962;KZ|Kazakhstan|7;KE|Kenya|254;KI|Kiribati|686;XK|Kosovo|383;KW|Kuwait|965;' +
    'KG|Kyrgyzstan|996;LA|Laos|856;LV|Latvia|371;LB|Lebanon|961;LS|Lesotho|266;LR|Liberia|231;LY|Libya|218;' +
    'LI|Liechtenstein|423;LT|Lithuania|370;LU|Luxembourg|352;MO|Macao|853;MG|Madagascar|261;MW|Malawi|265;' +
    'MY|Malaysia|60;MV|Maldives|960;ML|Mali|223;MT|Malta|356;MH|Marshall Islands|692;MQ|Martinique|596;' +
    'MR|Mauritania|222;MU|Mauritius|230;YT|Mayotte|262;MX|Mexico|52;FM|Micronesia|691;MD|Moldova|373;' +
    'MC|Monaco|377;MN|Mongolia|976;ME|Montenegro|382;MS|Montserrat|1664;MA|Morocco|212;MZ|Mozambique|258;' +
    'MM|Myanmar|95;NA|Namibia|264;NR|Nauru|674;NP|Nepal|977;NL|Netherlands|31;NC|New Caledonia|687;' +
    'NZ|New Zealand|64;NI|Nicaragua|505;NE|Niger|227;NG|Nigeria|234;NU|Niue|683;NF|Norfolk Island|672;' +
    'KP|North Korea|850;MK|North Macedonia|389;MP|Northern Mariana Islands|1670;NO|Norway|47;OM|Oman|968;' +
    'PK|Pakistan|92;PW|Palau|680;PS|Palestine|970;PA|Panama|507;PG|Papua New Guinea|675;PY|Paraguay|595;' +
    'PE|Peru|51;PH|Philippines|63;PN|Pitcairn Islands|64;PL|Poland|48;PT|Portugal|351;PR|Puerto Rico|1787;' +
    'QA|Qatar|974;RE|Réunion|262;RO|Romania|40;RU|Russia|7;RW|Rwanda|250;WS|Samoa|685;SM|San Marino|378;' +
    'ST|São Tomé and Príncipe|239;SA|Saudi Arabia|966;SN|Senegal|221;RS|Serbia|381;SC|Seychelles|248;' +
    'SL|Sierra Leone|232;SG|Singapore|65;SX|Sint Maarten|1721;SK|Slovakia|421;SI|Slovenia|386;' +
    'SB|Solomon Islands|677;SO|Somalia|252;ZA|South Africa|27;KR|South Korea|82;SS|South Sudan|211;ES|Spain|34;' +
    'LK|Sri Lanka|94;BL|St. Barthélemy|590;SH|St. Helena|290;KN|St. Kitts and Nevis|1869;LC|St. Lucia|1758;' +
    'MF|St. Martin|590;PM|St. Pierre and Miquelon|508;VC|St. Vincent and the Grenadines|1784;SD|Sudan|249;' +
    'SR|Suriname|597;SJ|Svalbard and Jan Mayen|47;SE|Sweden|46;CH|Switzerland|41;SY|Syria|963;TW|Taiwan|886;' +
    'TJ|Tajikistan|992;TZ|Tanzania|255;TH|Thailand|66;TL|Timor-Leste|670;TG|Togo|228;TK|Tokelau|690;TO|Tonga|676;' +
    'TT|Trinidad and Tobago|1868;TN|Tunisia|216;TR|Turkey|90;TM|Turkmenistan|993;TC|Turks and Caicos Islands|1649;' +
    'TV|Tuvalu|688;VI|U.S. Virgin Islands|1340;UG|Uganda|256;UA|Ukraine|380;AE|United Arab Emirates|971;' +
    'GB|United Kingdom|44;US|United States|1;UY|Uruguay|598;UZ|Uzbekistan|998;VU|Vanuatu|678;VA|Vatican City|39;' +
    'VE|Venezuela|58;VN|Vietnam|84;WF|Wallis and Futuna|681;EH|Western Sahara|212;YE|Yemen|967;ZM|Zambia|260;' +
    'ZW|Zimbabwe|263').split(';').map(function (row) {
      var p = row.split('|');
      return { iso: p[0], name: p[1], dial: p[2], key: p[1].toLowerCase() };
    });

  // Shown first when the search box is empty (where most applicants are).
  var POPULAR = ['IN', 'US', 'PK', 'GB', 'CA', 'AE', 'SA', 'EG', 'NG', 'BD'];

  var form = document.getElementById('gsForm');
  var ccBtn = document.getElementById('gsCcBtn');
  var ccFlag = document.getElementById('gsCcFlag');
  var ccDial = document.getElementById('gsCcDial');
  var ccPanel = document.getElementById('gsCcPanel');
  var ccSearch = document.getElementById('gsCcSearch');
  var ccList = document.getElementById('gsCcList');
  var numberInput = document.getElementById('gsNumber');
  var submitBtn = document.getElementById('gsSubmit');
  var statusEl = document.getElementById('gsStatus');
  var waLink = document.getElementById('gsWa');
  var waText = document.getElementById('gsWaText');
  var submitLabel = submitBtn.textContent;

  function byIso(iso) {
    for (var i = 0; i < COUNTRIES.length; i++) if (COUNTRIES[i].iso === iso) return COUNTRIES[i];
    return null;
  }

  function flag(iso) {
    if (!/^[A-Z]{2}$/.test(iso)) return '';
    return String.fromCodePoint(127397 + iso.charCodeAt(0), 127397 + iso.charCodeAt(1));
  }

  // ── Country code picker ──────────────────────────────────────────────
  var selected = byIso(DEFAULT_COUNTRY) || byIso('US');
  var shown = [];
  var active = -1;

  function setCountry(c) {
    selected = c;
    ccFlag.textContent = flag(c.iso);
    ccDial.textContent = '+' + c.dial;
    ccBtn.setAttribute('aria-label', 'Country code: ' + c.name + ' +' + c.dial);
  }

  function filter(query) {
    var q = query.trim().toLowerCase();
    if (!q) {
      var top = POPULAR.map(byIso).filter(Boolean);
      return top.concat(COUNTRIES.filter(function (c) { return POPULAR.indexOf(c.iso) === -1; }));
    }
    var digits = q.replace(/[^0-9]/g, '');
    if (digits && /^[+\s0-9()-]+$/.test(q)) {
      // Shortest code first; where a code is shared (+1, +44) the main country leads.
      var rank = function (c) { var i = POPULAR.indexOf(c.iso); return i === -1 ? 99 : i; };
      return COUNTRIES.filter(function (c) { return c.dial.indexOf(digits) === 0; })
        .sort(function (a, b) {
          return (a.dial.length - b.dial.length) || (rank(a) - rank(b)) || a.name.localeCompare(b.name);
        });
    }
    var exact = [], starts = [], contains = [];
    COUNTRIES.forEach(function (c) {
      if (c.iso.toLowerCase() === q) exact.push(c);
      else if (c.key.indexOf(q) === 0) starts.push(c);
      else if (c.key.indexOf(q) !== -1) contains.push(c);
    });
    return exact.concat(starts, contains);
  }

  function renderList() {
    shown = filter(ccSearch.value);
    ccList.innerHTML = '';
    if (!shown.length) {
      var empty = document.createElement('li');
      empty.className = 'gs-cc__empty';
      empty.textContent = 'No country found';
      ccList.appendChild(empty);
      active = -1;
      return;
    }
    shown.forEach(function (c, i) {
      var li = document.createElement('li');
      li.className = 'gs-cc__opt';
      li.id = 'gsCc-' + i;
      li.setAttribute('role', 'option');
      li.setAttribute('aria-selected', c === selected ? 'true' : 'false');
      li.innerHTML = '<span class="gs-cc__flag" aria-hidden="true"></span><span class="gs-cc__name"></span><span class="gs-cc__code"></span>';
      li.children[0].textContent = flag(c.iso);
      li.children[1].textContent = c.name;
      li.children[2].textContent = '+' + c.dial;
      li.addEventListener('mousedown', function (e) { e.preventDefault(); });
      li.addEventListener('click', function () { choose(c); });
      ccList.appendChild(li);
    });
    setActive(ccSearch.value.trim() ? 0 : Math.max(0, shown.indexOf(selected)));
  }

  function setActive(i) {
    var prev = ccList.querySelector('.is-active');
    if (prev) prev.classList.remove('is-active');
    active = i;
    var el = document.getElementById('gsCc-' + i);
    if (!el) return;
    el.classList.add('is-active');
    ccSearch.setAttribute('aria-activedescendant', el.id);
    var top = el.offsetTop, bottom = top + el.offsetHeight;
    if (top < ccList.scrollTop) ccList.scrollTop = top;
    else if (bottom > ccList.scrollTop + ccList.clientHeight) ccList.scrollTop = bottom - ccList.clientHeight;
  }

  function openPanel() {
    ccPanel.hidden = false;
    ccBtn.setAttribute('aria-expanded', 'true');
    ccSearch.value = '';
    renderList();
    ccSearch.focus();
  }

  function closePanel(focusBack) {
    if (ccPanel.hidden) return;
    ccPanel.hidden = true;
    ccBtn.setAttribute('aria-expanded', 'false');
    if (focusBack) ccBtn.focus();
  }

  function choose(c) {
    setCountry(c);
    closePanel(false);
    numberInput.focus();
  }

  ccBtn.addEventListener('click', function () {
    if (ccPanel.hidden) openPanel(); else closePanel(true);
  });
  ccSearch.addEventListener('input', renderList);
  ccSearch.addEventListener('keydown', function (e) {
    if (e.key === 'ArrowDown') { e.preventDefault(); if (shown.length) setActive(Math.min(active + 1, shown.length - 1)); }
    else if (e.key === 'ArrowUp') { e.preventDefault(); if (shown.length) setActive(Math.max(active - 1, 0)); }
    else if (e.key === 'Enter') { e.preventDefault(); if (shown[active]) choose(shown[active]); }
    else if (e.key === 'Escape') { e.preventDefault(); closePanel(true); }
    else if (e.key === 'Tab') { closePanel(false); }
  });
  document.addEventListener('click', function (e) {
    if (!ccPanel.hidden && !ccPanel.contains(e.target) && !ccBtn.contains(e.target)) closePanel(false);
  });

  setCountry(selected);

  // ── Answers ─────────────────────────────────────────────────────────
  function syncPills(group) {
    group.querySelectorAll('.gs-pill').forEach(function (pill) {
      pill.classList.toggle('is-on', pill.querySelector('input').checked);
    });
  }

  form.querySelectorAll('fieldset.gs-q').forEach(function (group) {
    var exclusive = group.getAttribute('data-exclusive');
    group.addEventListener('change', function (e) {
      var input = e.target;
      // "None of these yet" can't be combined with anything else.
      if (exclusive && input.type === 'checkbox' && input.checked) {
        group.querySelectorAll('input').forEach(function (other) {
          if (other === input) return;
          if (input.value === exclusive || other.value === exclusive) other.checked = false;
        });
      }
      syncPills(group);
      clearError(group);
    });
  });

  function values(name) {
    return Array.prototype.map.call(
      form.querySelectorAll('input[name="' + name + '"]:checked'),
      function (el) { return el.value; }
    );
  }

  // National number digits, dropping a pasted +<code>/00<code> prefix and the
  // leading trunk 0 many people type (e.g. 0300… in Pakistan).
  function nationalDigits() {
    var raw = numberInput.value.trim();
    var digits = raw.replace(/\D/g, '');
    if (/^(\+|00)/.test(raw)) {
      if (raw.indexOf('00') === 0) digits = digits.slice(2);
      if (digits.indexOf(selected.dial) === 0) digits = digits.slice(selected.dial.length);
    }
    return digits.replace(/^0+/, '');
  }

  // ── Validation ──────────────────────────────────────────────────────
  function showError(group) {
    group.classList.add('is-invalid');
    var err = group.querySelector('.gs-err');
    if (err) err.hidden = false;
  }

  function clearError(group) {
    group.classList.remove('is-invalid');
    var err = group.querySelector('.gs-err');
    if (err) err.hidden = true;
  }

  form.querySelector('[data-q="name"] input').addEventListener('input', function () { clearError(this.closest('.gs-q')); });
  numberInput.addEventListener('input', function () { clearError(this.closest('.gs-q')); });

  function collect() {
    var name = form.elements.name.value.trim().replace(/\s+/g, ' ');
    var digits = nationalDigits();
    var data = {
      name: name,
      dial: selected.dial,
      digits: digits,
      paid_for: values('paid_for'),
      exam_deadline: values('exam_deadline')[0] || '',
      help_with: values('help_with'),
      current_stance: values('current_stance')[0] || ''
    };
    var checks = {
      name: name.length >= 2,
      phone: digits.length >= 6 && digits.length <= 14,
      paid_for: data.paid_for.length > 0,
      exam_deadline: !!data.exam_deadline,
      help_with: data.help_with.length > 0,
      current_stance: !!data.current_stance
    };
    var firstBad = null;
    Object.keys(checks).forEach(function (key) {
      var group = form.querySelector('[data-q="' + key + '"]');
      if (checks[key]) { clearError(group); return; }
      showError(group);
      if (!firstBad) firstBad = group;
    });
    if (firstBad) {
      firstBad.scrollIntoView({ behavior: 'smooth', block: 'center' });
      var focusable = firstBad.querySelector('input');
      if (focusable) setTimeout(function () { focusable.focus({ preventScroll: true }); }, 350);
      return null;
    }
    return data;
  }

  function whatsappUrl(d) {
    var text = 'Hi, I have submitted my information on the USMLE Wise form. Here are my details:\n\n' +
      'Name: ' + d.name + '\n' +
      'WhatsApp: +' + d.dial + ' ' + d.digits + '\n' +
      'Already paid for: ' + d.paid_for.join(', ') + '\n' +
      'Exam/application deadline: ' + d.exam_deadline + '\n' +
      'Need help with: ' + d.help_with.join(', ') + '\n' +
      'Where I stand: ' + d.current_stance;
    return 'https://wa.me/' + WA_NUMBER + '?text=' + encodeURIComponent(text);
  }

  function setStatus(msg, state) {
    statusEl.textContent = msg;
    statusEl.setAttribute('data-state', state || '');
  }

  function resetButton() {
    submitBtn.disabled = false;
    submitBtn.textContent = submitLabel;
  }

  // ── Submit ──────────────────────────────────────────────────────────
  var sending = false;

  form.addEventListener('submit', function (e) {
    e.preventDefault();
    if (sending) return;
    var d = collect();
    if (!d) { setStatus('Please answer the highlighted questions.', 'error'); return; }

    var tokenEl = form.querySelector('[name="cf-turnstile-response"]');
    var token = tokenEl ? tokenEl.value : '';
    if (!token && window.turnstile) {
      setStatus('Just a second, we are checking you are not a bot. Please try again.', 'error');
      return;
    }

    var url = whatsappUrl(d);
    waLink.href = url;
    sending = true;
    submitBtn.disabled = true;
    submitBtn.textContent = 'Sending…';
    setStatus('', '');

    fetch(ENDPOINT, {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({
        name: d.name,
        phone: '+' + d.dial + d.digits,
        subject: 'Get Started form',
        form_name: 'get-started',
        paid_for: d.paid_for,
        exam_deadline: d.exam_deadline,
        help_with: d.help_with,
        current_stance: d.current_stance,
        website: form.elements.website.value,
        source_page: window.location.href,
        'cf-turnstile-response': token
      })
    })
      .then(function (r) {
        return r.json().catch(function () { return {}; }).then(function (j) { return { ok: r.ok, j: j }; });
      })
      .then(function (res) {
        if (!(res.ok && res.j.success)) {
          throw new Error((res.j && res.j.error) || 'Something went wrong.');
        }
        try { if (window.fbq) window.fbq('track', 'Lead', { content_name: 'Get Started form' }); } catch (_) {}
        try { if (window.gtag) window.gtag('event', 'generate_lead', { form_name: 'get-started' }); } catch (_) {}
        submitBtn.textContent = 'Opening WhatsApp…';
        setStatus('Thank you! Opening WhatsApp so you can send us your details.', 'success');
        waText.textContent = 'WhatsApp didn’t open? Tap here';
        waLink.hidden = false;
        // A short pause lets the pixel and GA hits leave before the page unloads.
        setTimeout(function () { window.location.href = url; }, 400);
      })
      .catch(function (err) {
        sending = false;
        resetButton();
        if (window.turnstile) { try { window.turnstile.reset(); } catch (_) {} }
        var msg = err && err.message && err.message !== 'Failed to fetch' ? err.message : 'Network error.';
        setStatus(msg + ' Please try again, or send your details to us on WhatsApp.', 'error');
        waText.textContent = 'Send my details on WhatsApp instead';
        waLink.hidden = false;
      });
  });

  // Coming back from WhatsApp with the back button restores this page from
  // cache; make the form usable again instead of stuck on "Opening WhatsApp…".
  window.addEventListener('pageshow', function (e) {
    if (e.persisted) { sending = false; resetButton(); }
  });
})();
</script>
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
</body>
</html>
