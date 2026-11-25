/* ============================================================
   USMLE Wise: Heart Lab (/heart-lab)
   One data model drives everything: each murmur's timing envelope is
   used for the synthesized sound, the phonocardiogram and the valve
   pulse on the 3D heart; each infarct's territory drives the heart's
   colouring, the culprit artery and the 12-lead ECG.
   ============================================================ */
import * as THREE from 'three';
import { OrbitControls } from 'three/addons/controls/OrbitControls.js';

const $ = (s, r = document) => r.querySelector(s);
const $$ = (s, r = document) => Array.from(r.querySelectorAll(s));
const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
const css = (name) => getComputedStyle(document.documentElement).getPropertyValue(name).trim();
const icons = () => { if (window.lucide) window.lucide.createIcons(); };

const C = {
  ink900: css('--uw-ink-900'), ink700: css('--uw-ink-700'), ink500: css('--uw-ink-500'), ink400: css('--uw-ink-400'), ink200: css('--uw-ink-200'),
  blue50: css('--uw-blue-50'), blue100: css('--uw-blue-100'), blue200: css('--uw-blue-200'), blue300: css('--uw-blue-300'),
  blue400: css('--uw-blue-400'), blue500: css('--uw-blue-500'), blue600: css('--uw-blue-600'), blue700: css('--uw-blue-700'), blue900: css('--uw-blue-900'),
  red50: css('--uw-red-50'), red100: css('--uw-red-100'), red200: css('--uw-red-200'), red300: css('--uw-red-300'),
  red400: css('--uw-red-400'), red500: css('--uw-red-500'), red600: css('--uw-red-600'), red700: css('--uw-red-700'),
  surface: css('--uw-surface'), border: css('--uw-border'),
};

/* ============================================================
   1. MURMURS
   Times are fractions of one heartbeat (0.9 s at ~67 bpm):
   S1 at 0.02, S2 at 0.37, systole between, diastole after.
   ============================================================ */
const CYCLE = 0.9;
const S1 = 0.02, S2 = 0.37;

const MURMURS = [
  {
    id: 'NORMAL', name: 'Normal heart sounds', short: 'Normal', group: 'Start here', site: 'mitral', kind: 'normal',
    one: 'S1 is the mitral and tricuspid valves closing. S2 is the aortic and pulmonic valves closing. Everything between them is systole.',
    facts: {
      Timing: '“Lub” (S1) then “dub” (S2). Diastole is the longer gap.',
      Where: 'S1 is loudest at the apex, S2 at the base (A and P areas).',
      'S2 split': 'A2 closes just before P2. Breathing in pulls more blood into the right heart, so P2 comes later and S2 <b>splits</b>. Try Inspiration.',
    },
    points: ['A split that stays wide and does not change with breathing (fixed split) means an ASD.', 'A split that is wide but still moves is RBBB or pulmonic stenosis.', 'A split that appears on breathing out (paradoxical) means A2 is late: severe AS or LBBB.'],
    pearl: 'Listen with the diaphragm for high sounds (S1, S2, most murmurs) and the bell for low ones (S3, S4, mitral stenosis).',
    sound: { segs: [] },
    eff: {},
  },
  {
    id: 'AS', name: 'Aortic stenosis', short: 'Aortic stenosis', group: 'Systolic', site: 'aortic', kind: 'Systolic ejection',
    one: 'A stiff, narrowed aortic valve. Blood squeezes through it in systole, so the murmur rises and falls like a diamond.',
    facts: {
      Timing: 'Crescendo-decrescendo (“diamond”) systolic ejection murmur. A later peak means more severe stenosis.',
      Where: 'Right 2nd intercostal space (aortic area).',
      Radiates: 'To <b>both carotids</b>.',
      'Sounds like': 'Harsh. A2 is soft or absent when severe.',
      Causes: 'Age-related calcification (over 60), bicuspid valve (under 60, Turner syndrome), rheumatic heart disease.',
    },
    points: ['Pulsus parvus et tardus: a weak, late carotid pulse.', 'Severe AS can split S2 paradoxically (A2 comes after P2).', 'Can cause microangiopathic anemia (schistocytes) and GI bleeding from angiodysplasia (Heyde syndrome).'],
    pearl: '<strong>SAD symptoms</strong>Syncope, Angina, Dyspnea on exertion. Once any appear, survival without valve replacement drops to a few years.',
    sound: { segs: [{ t0: 0.07, t1: 0.34, shape: 'diamond', peak: 0.5, amp: 0.95, f: 190, q: 0.7 }], a2: 0.45 },
    eff: { insp: 0.9, grip: 0.55, squat: 1.4, valsalva: 0.55 },
  },
  {
    id: 'PS', name: 'Pulmonic stenosis', short: 'Pulmonic stenosis', group: 'Systolic', site: 'pulmonic', kind: 'Systolic ejection',
    one: 'A narrowed pulmonic valve. Like AS but on the right side, so it gets louder when you breathe in.',
    facts: {
      Timing: 'Crescendo-decrescendo systolic ejection murmur, often after an ejection click.',
      Where: 'Left 2nd intercostal space (pulmonic area).',
      Radiates: 'Toward the left shoulder and neck.',
      'Sounds like': 'Harsh. Wide split S2 because P2 is delayed.',
      Causes: 'Congenital. Noonan syndrome, tetralogy of Fallot, congenital rubella, carcinoid syndrome.',
    },
    points: ['It is the only right-sided sound whose ejection click gets softer with inspiration.', 'Part of tetralogy of Fallot with VSD, overriding aorta and RV hypertrophy.'],
    pearl: '<strong>Right side, louder in</strong>All right-sided murmurs get louder on inspiration (Carvallo sign is the TR version).',
    sound: { segs: [{ t0: 0.09, t1: 0.36, shape: 'diamond', peak: 0.45, amp: 0.75, f: 230, q: 0.8 }], click: 0.085, split: 0.035 },
    eff: { insp: 1.55, grip: 1, squat: 1.2, valsalva: 0.6 },
  },
  {
    id: 'MR', name: 'Mitral regurgitation', short: 'Mitral regurgitation', group: 'Systolic', site: 'mitral', kind: 'Holosystolic',
    one: 'The mitral valve leaks. Blood shoots back into the left atrium for the whole of systole, so the murmur is flat from S1 to S2.',
    facts: {
      Timing: 'Holosystolic (pansystolic), even loudness from S1 to S2.',
      Where: 'Apex (mitral area).',
      Radiates: 'To the <b>left axilla</b>.',
      'Sounds like': 'High-pitched and blowing.',
      Causes: 'Mitral valve prolapse, LV dilation, ischemic papillary muscle dysfunction or rupture after MI, rheumatic fever, infective endocarditis.',
    },
    points: ['Acute MR after an inferior MI (posteromedial papillary muscle rupture) causes sudden pulmonary edema.', 'Chronic MR can cause an S3 from volume overload.'],
    pearl: '<strong>Handgrip makes it louder</strong>Raising afterload pushes more blood backward through the leak. The same is true for AR and VSD.',
    sound: { segs: [{ t0: 0.04, t1: 0.36, shape: 'plateau', amp: 0.7, f: 420, q: 1.0 }] },
    eff: { insp: 0.9, grip: 1.5, squat: 1.3, valsalva: 0.55 },
  },
  {
    id: 'TR', name: 'Tricuspid regurgitation', short: 'Tricuspid regurgitation', group: 'Systolic', site: 'tricuspid', kind: 'Holosystolic',
    one: 'The tricuspid valve leaks. It sounds like MR, but it sits lower on the left sternal border and grows on inspiration.',
    facts: {
      Timing: 'Holosystolic, even loudness.',
      Where: 'Left lower sternal border (tricuspid area).',
      Radiates: 'To the right sternal border.',
      'Sounds like': 'High-pitched and blowing.',
      Causes: 'RV dilation (pulmonary hypertension, left heart failure), IV drug use endocarditis, carcinoid syndrome, Ebstein anomaly (lithium).',
    },
    points: ['Giant v waves in the jugular venous pulse and a pulsatile liver.', 'IV drug users: S. aureus endocarditis on the tricuspid valve, septic emboli to the lungs.'],
    pearl: '<strong>Carvallo sign</strong>TR gets louder with inspiration. MR does not. That one move separates them.',
    sound: { segs: [{ t0: 0.04, t1: 0.36, shape: 'plateau', amp: 0.55, f: 360, q: 1.0 }] },
    eff: { insp: 1.6, grip: 1, squat: 1.2, valsalva: 0.6 },
  },
  {
    id: 'VSD', name: 'Ventricular septal defect', short: 'VSD', group: 'Systolic', site: 'tricuspid', kind: 'Holosystolic',
    one: 'A hole between the ventricles. High-pressure LV blood jets into the RV through all of systole.',
    facts: {
      Timing: 'Holosystolic.',
      Where: 'Left lower sternal border (tricuspid area).',
      Radiates: 'Across the precordium. Often a palpable thrill.',
      'Sounds like': 'Harsh. A <b>smaller</b> hole is <b>louder</b> (faster jet).',
      Causes: 'Most common congenital heart defect. Fetal alcohol syndrome, Down syndrome. Septal rupture 3 to 5 days after an MI.',
    },
    points: ['Untreated large VSD can reverse into Eisenmenger syndrome (cyanosis, clubbing).', 'Many small muscular VSDs close on their own.'],
    pearl: '<strong>Post-MI new murmur</strong>A new holosystolic murmur at the left sternal border days after an anterior MI: septal rupture. Check for a step-up in O2 saturation from RA to RV.',
    sound: { segs: [{ t0: 0.04, t1: 0.36, shape: 'plateau', amp: 0.85, f: 260, q: 0.7 }] },
    eff: { insp: 1, grip: 1.5, squat: 1.3, valsalva: 0.6 },
  },
  {
    id: 'MVP', name: 'Mitral valve prolapse', short: 'Mitral valve prolapse', group: 'Systolic', site: 'mitral', kind: 'Late systolic + click',
    one: 'A floppy mitral leaflet bulges back into the left atrium mid-systole. You hear a click, then a short late murmur.',
    facts: {
      Timing: 'Mid-systolic <b>click</b>, then a late systolic murmur.',
      Where: 'Apex (mitral area).',
      Radiates: 'Usually not far.',
      'Sounds like': 'A sharp click followed by a short blowing murmur.',
      Causes: 'Myxomatous degeneration. Marfan syndrome, Ehlers-Danlos syndrome, polycystic kidney disease (ADPKD).',
    },
    points: ['The most common valve lesion in the general population.', 'Can progress to MR, rarely endocarditis.'],
    pearl: '<strong>The click moves</strong>Anything that makes the LV smaller (Valsalva, standing) brings the click <b>earlier</b> and the murmur longer. Squatting or handgrip pushes it later.',
    sound: { segs: [{ t0: 0.24, t1: 0.36, shape: 'cres', amp: 0.6, f: 400, q: 1.0 }], click: 0.22 },
    eff: { insp: 1, grip: 0.8, squat: 0.75, valsalva: 1.35 },
    clickShift: { grip: 0.04, squat: 0.05, valsalva: -0.08 },
  },
  {
    id: 'HOCM', name: 'Hypertrophic cardiomyopathy (HOCM)', short: 'HOCM', group: 'Systolic', site: 'tricuspid', kind: 'Systolic ejection',
    one: 'A thick septum blocks the LV outflow tract during systole. The less blood in the LV, the worse the block.',
    facts: {
      Timing: 'Crescendo-decrescendo systolic murmur.',
      Where: 'Left lower sternal border, sometimes the apex.',
      Radiates: '<b>Not</b> to the carotids (unlike AS).',
      'Sounds like': 'Harsh. Often an S4.',
      Causes: 'Autosomal dominant mutations in sarcomere proteins (beta-myosin heavy chain, myosin-binding protein C). Friedreich ataxia.',
    },
    points: ['The classic cause of sudden cardiac death in young athletes.', 'Treat with beta-blockers or non-dihydropyridine calcium channel blockers. Avoid dehydration and vasodilators.'],
    pearl: '<strong>The opposite of almost everything</strong>Valsalva and standing make HOCM <b>louder</b>. Squatting, leg raise and handgrip make it softer.',
    sound: { segs: [{ t0: 0.09, t1: 0.35, shape: 'diamond', peak: 0.55, amp: 0.75, f: 210, q: 0.75 }] },
    eff: { insp: 1, grip: 0.55, squat: 0.5, valsalva: 1.7 },
  },
  {
    id: 'ASD', name: 'Atrial septal defect', short: 'ASD', group: 'Systolic', site: 'pulmonic', kind: 'Fixed split S2',
    one: 'A hole between the atria. Extra blood flows through the right heart, so the pulmonic valve always closes late.',
    facts: {
      Timing: 'Soft systolic flow murmur, with a <b>wide, fixed split S2</b>.',
      Where: 'Left upper sternal border (pulmonic area).',
      Radiates: 'No.',
      'Sounds like': 'The split S2 is the finding; the murmur is just extra flow across the pulmonic valve.',
      Causes: 'Ostium secundum (most common), ostium primum (Down syndrome). Fetal alcohol syndrome.',
    },
    points: ['A venous clot can cross to the arterial side: a paradoxical embolism causing stroke.', 'Late cause of Eisenmenger syndrome.'],
    pearl: '<strong>Fixed means fixed</strong>Try Inspiration: the split does not move. A normal split widens on inspiration.',
    sound: { segs: [{ t0: 0.09, t1: 0.33, shape: 'diamond', peak: 0.45, amp: 0.35, f: 240, q: 0.8 }], split: 0.05, fixedSplit: true },
    eff: { insp: 1.1, grip: 1, squat: 1.1, valsalva: 0.8 },
  },
  {
    id: 'AR', name: 'Aortic regurgitation', short: 'Aortic regurgitation', group: 'Diastolic', site: 'erb', kind: 'Early diastolic',
    one: 'The aortic valve leaks. Right after S2, blood falls back into the LV, loudest at first and then fading.',
    facts: {
      Timing: 'Early diastolic decrescendo, starting right after S2.',
      Where: "Left sternal border, 3rd intercostal space (Erb's point). Lean the patient forward, breath held out.",
      Radiates: 'Down the left sternal border toward the apex.',
      'Sounds like': 'High-pitched and blowing.',
      Causes: 'Aortic root dilation (Marfan, syphilis, ankylosing spondylitis), bicuspid valve, endocarditis, rheumatic fever.',
    },
    points: ['Wide pulse pressure: bounding “water-hammer” pulses, head bobbing (de Musset sign), nail-bed pulsation (Quincke sign).', 'Austin Flint murmur: the backflow jet hits the mitral leaflet and makes a mid-diastolic rumble at the apex.'],
    pearl: '<strong>Hyperdynamic pulse</strong>Big stroke volume out, big leak back: systolic pressure rises and diastolic falls. Handgrip makes the murmur louder.',
    sound: { segs: [{ t0: 0.385, t1: 0.82, shape: 'decres', amp: 0.6, f: 520, q: 1.2 }] },
    eff: { insp: 0.9, grip: 1.5, squat: 1.3, valsalva: 0.55 },
  },
  {
    id: 'MS', name: 'Mitral stenosis', short: 'Mitral stenosis', group: 'Diastolic', site: 'mitral', kind: 'Mid-diastolic',
    one: 'A narrowed mitral valve. In diastole it snaps open, then blood rumbles slowly through into the LV.',
    facts: {
      Timing: 'Loud S1, <b>opening snap</b> after S2, then a low mid-diastolic rumble.',
      Where: 'Apex. Use the bell with the patient on their left side.',
      Radiates: 'No.',
      'Sounds like': 'A low rumble. Easy to miss on phone speakers; use headphones.',
      Causes: 'Almost always rheumatic heart disease, years after rheumatic fever.',
    },
    points: ['The left atrium enlarges: atrial fibrillation, mural thrombus, dysphagia (esophagus) and hoarseness (recurrent laryngeal nerve, Ortner syndrome).', 'Worsens in pregnancy and with fast heart rates (less time to fill).'],
    pearl: '<strong>Snap timing tells severity</strong>The shorter the gap between S2 and the opening snap, the higher the left atrial pressure and the worse the stenosis.',
    sound: { segs: [{ t0: 0.47, t1: 0.84, shape: 'rumble', amp: 0.9, f: 90, q: 1.4 }, { t0: 0.86, t1: 0.985, shape: 'cres', amp: 0.55, f: 95, q: 1.4 }], snap: 0.45, s1: 1.25 },
    eff: { insp: 0.9, grip: 1.2, squat: 1.2, valsalva: 0.6 },
  },
  {
    id: 'PDA', name: 'Patent ductus arteriosus', short: 'PDA', group: 'Continuous', site: 'pulmonic', kind: 'Continuous',
    one: 'The fetal ductus between the aorta and pulmonary artery stays open. Aortic pressure is always higher, so blood flows the whole cycle.',
    facts: {
      Timing: 'Continuous “machine-like” murmur, loudest around S2.',
      Where: 'Left infraclavicular area (just below the pulmonic area).',
      Radiates: 'Toward the left clavicle and back.',
      'Sounds like': 'A rumbling machine that never fully stops.',
      Causes: 'Prematurity, congenital rubella, high altitude.',
    },
    points: ['Indomethacin (or ibuprofen) closes it. Prostaglandin E1 keeps it open when a baby needs it (transposition, coarctation).', 'Untreated: Eisenmenger syndrome with cyanosis of the lower limbs only (differential cyanosis).'],
    pearl: '<strong>Come In, Go Out</strong>IndomethaCIN closes the PDA (comes in); PGE keeps it open (gets out).',
    sound: { segs: [{ t0: 0.06, t1: 0.37, shape: 'cres', amp: 0.8, f: 260, q: 0.6 }, { t0: 0.37, t1: 0.9, shape: 'decres', amp: 0.8, f: 260, q: 0.6 }] },
    eff: { insp: 1, grip: 1.3, squat: 1.2, valsalva: 0.7 },
  },
];
const byId = Object.fromEntries(MURMURS.map((m) => [m.id, m]));

const MANEUVERS = {
  rest: { name: 'At rest' },
  insp: { name: 'Inspiration', why: 'more blood returns to the right heart' },
  grip: { name: 'Handgrip', why: 'afterload rises' },
  squat: { name: 'Squatting or leg raise', why: 'preload rises' },
  valsalva: { name: 'Valsalva or standing', why: 'preload falls' },
};

/* Shape functions on x in [0, 1] */
function shapeAt(seg, x) {
  if (x < 0 || x > 1) return 0;
  switch (seg.shape) {
    case 'diamond': { const p = seg.peak ?? 0.45; const v = x < p ? x / p : (1 - x) / (1 - p); return Math.pow(v, 1.15); }
    case 'plateau': return Math.min(1, x / 0.06, (1 - x) / 0.06);
    case 'decres': return Math.min(1, x / 0.04) * Math.pow(1 - x, 1.3);
    case 'cres': return Math.pow(x, 1.4) * Math.min(1, (1 - x) / 0.05);
    case 'rumble': return Math.min(1, x / 0.08) * (0.35 + 0.65 * Math.pow(1 - x, 0.9));
    default: return 0;
  }
}

/* The resolved sound of a murmur under a maneuver: segments + transients */
function resolve(m, man) {
  const k = man === 'rest' ? 1 : (m.eff[man] ?? 1);
  const s = m.sound;
  let split = s.split ?? 0;
  if (man === 'insp' && !s.fixedSplit) split += 0.035; // physiologic split widens on inspiration
  const shift = (m.clickShift && m.clickShift[man]) || 0;
  const segs = s.segs.map((g) => {
    const out = { ...g, amp: Math.min(1.1, g.amp * k) };
    if (m.id === 'MVP') { out.t0 = Math.max(0.12, g.t0 + shift); }
    return out;
  });
  const tr = [
    { t: S1, amp: s.s1 ?? 1, kind: 'S1' },
    { t: S2, amp: s.a2 ?? 0.85, kind: 'S2' },
  ];
  if (split > 0) tr.push({ t: S2 + split, amp: 0.6, kind: 'S2' });
  if (s.click) tr.push({ t: s.click + shift, amp: 0.55, kind: 'click' });
  if (s.snap) tr.push({ t: s.snap, amp: 0.6, kind: 'click' });
  return { segs, tr };
}

function murmurLevel(res, phase) {
  let a = 0;
  for (const g of res.segs) a += g.amp * shapeAt(g, (phase - g.t0) / (g.t1 - g.t0));
  return a;
}

/* ============================================================
   2. AUDIO (Web Audio synthesis)
   ============================================================ */
const AudioEngine = {
  ctx: null, out: null, noise: null, playing: false, startT: 0, nextT: 0, timer: null,
  res: null, cyclesLeft: Infinity, onEnd: null, nodes: [],

  ensure() {
    if (this.ctx) return;
    const Ctx = window.AudioContext || window.webkitAudioContext;
    this.ctx = new Ctx();
    const comp = this.ctx.createDynamicsCompressor();
    comp.threshold.value = -10; comp.ratio.value = 4;
    this.out = this.ctx.createGain(); this.out.gain.value = 0.9;
    this.out.connect(comp); comp.connect(this.ctx.destination);
    const len = this.ctx.sampleRate * 2;
    this.noise = this.ctx.createBuffer(1, len, this.ctx.sampleRate);
    const d = this.noise.getChannelData(0);
    for (let i = 0; i < len; i++) d[i] = Math.random() * 2 - 1;
  },

  play(res, { cycles = Infinity, onEnd = null } = {}) {
    this.ensure();
    this.stop(true);
    this.ctx.resume();
    this.res = res; this.cyclesLeft = cycles; this.onEnd = onEnd;
    this.playing = true;
    this.startT = this.ctx.currentTime + 0.08;
    this.nextT = this.startT;
    this.tick();
  },

  update(res) { this.res = res; }, // takes effect on the next scheduled beat

  tick() {
    if (!this.playing) return;
    while (this.nextT < this.ctx.currentTime + 0.25 && this.cyclesLeft > 0) {
      this.scheduleBeat(this.nextT, this.res);
      this.nextT += CYCLE;
      this.cyclesLeft -= 1;
    }
    if (this.cyclesLeft <= 0 && this.ctx.currentTime > this.nextT) { const cb = this.onEnd; this.stop(); if (cb) cb(); return; }
    this.timer = setTimeout(() => this.tick(), 50);
  },

  scheduleBeat(t0, res) {
    const ctx = this.ctx;
    for (const g of res.segs) {
      const dur = (g.t1 - g.t0) * CYCLE;
      const src = ctx.createBufferSource(); src.buffer = this.noise; src.loop = true;
      const f = ctx.createBiquadFilter();
      f.type = g.f < 130 ? 'lowpass' : 'bandpass'; f.frequency.value = g.f; f.Q.value = g.q;
      const gain = ctx.createGain();
      const n = 64; const curve = new Float32Array(n);
      for (let i = 0; i < n; i++) curve[i] = 0.0001 + g.amp * 0.55 * shapeAt(g, i / (n - 1));
      gain.gain.setValueAtTime(0.0001, t0);
      gain.gain.setValueCurveAtTime(curve, t0 + g.t0 * CYCLE, dur);
      src.connect(f); f.connect(gain); gain.connect(this.out);
      src.start(t0 + g.t0 * CYCLE, Math.random()); src.stop(t0 + g.t1 * CYCLE + 0.02);
      this.track(src);
    }
    for (const tr of res.tr) this.thump(t0 + tr.t * CYCLE, tr);
  },

  thump(t, tr) {
    const ctx = this.ctx;
    if (tr.kind === 'click') {
      const src = ctx.createBufferSource(); src.buffer = this.noise;
      const f = ctx.createBiquadFilter(); f.type = 'bandpass'; f.frequency.value = 900; f.Q.value = 1.2;
      const g = ctx.createGain();
      g.gain.setValueAtTime(0.0001, t); g.gain.exponentialRampToValueAtTime(0.9 * tr.amp, t + 0.003); g.gain.exponentialRampToValueAtTime(0.0001, t + 0.035);
      src.connect(f); f.connect(g); g.connect(this.out); src.start(t, Math.random()); src.stop(t + 0.05);
      this.track(src);
      return;
    }
    const base = tr.kind === 'S1' ? 58 : 74;
    [[base, 1], [base * 2.1, 0.45]].forEach(([freq, mul]) => {
      const o = ctx.createOscillator(); o.type = 'sine';
      o.frequency.setValueAtTime(freq * 1.25, t); o.frequency.exponentialRampToValueAtTime(freq, t + 0.05);
      const g = ctx.createGain();
      const dur = tr.kind === 'S1' ? 0.11 : 0.08;
      g.gain.setValueAtTime(0.0001, t); g.gain.exponentialRampToValueAtTime(0.85 * tr.amp * mul, t + 0.008); g.gain.exponentialRampToValueAtTime(0.0001, t + dur);
      o.connect(g); g.connect(this.out); o.start(t); o.stop(t + dur + 0.02);
      this.track(o);
    });
    const src = ctx.createBufferSource(); src.buffer = this.noise;
    const f = ctx.createBiquadFilter(); f.type = 'lowpass'; f.frequency.value = 260;
    const g = ctx.createGain();
    g.gain.setValueAtTime(0.0001, t); g.gain.exponentialRampToValueAtTime(0.5 * tr.amp, t + 0.006); g.gain.exponentialRampToValueAtTime(0.0001, t + 0.06);
    src.connect(f); f.connect(g); g.connect(this.out); src.start(t, Math.random()); src.stop(t + 0.08);
    this.track(src);
  },

  track(node) { this.nodes.push(node); node.onended = () => { const i = this.nodes.indexOf(node); if (i > -1) this.nodes.splice(i, 1); }; },

  stop(silent) {
    clearTimeout(this.timer);
    this.nodes.forEach((n) => { try { n.stop(); } catch (e) { /* already stopped */ } });
    this.nodes = [];
    const was = this.playing;
    this.playing = false;
    if (was && !silent && this.onStop) this.onStop();
  },

  phase() {
    if (!this.playing) return null;
    const e = this.ctx.currentTime - this.startT;
    if (e < 0) return null;
    return (e / CYCLE) % 1;
  },
  elapsed() { return this.playing ? Math.max(0, this.ctx.currentTime - this.startT) : 0; },
};

/* ============================================================
   3. INFARCTS
   ============================================================ */
const MI = [
  {
    id: 'anterior', view: 'frontleft', name: 'Anterior MI', art: 'LAD', culprit: ['LAD'], occl: ['LAD', 0.25], terr: ['anterior'],
    one: 'The left anterior descending artery (LAD) is blocked. The front wall of the left ventricle and the front of the septum die.',
    facts: {
      Artery: 'Left anterior descending (LAD), the most commonly blocked coronary artery.',
      'ST up': '<b>V1 to V4</b> (V3 and V4 are the anterior leads).',
      Reciprocal: 'ST depression in II, III, aVF.',
      Wall: 'Anterior left ventricle, anterior two-thirds of the septum, often the apex.',
    },
    points: ['Septal rupture (3 to 5 days): new holosystolic murmur, a VSD.', 'LV aneurysm and apical mural thrombus (weeks): stroke risk.', 'Large infarct: cardiogenic shock and heart failure.'],
    pearl: '<strong>Widow-maker</strong>A proximal LAD or left main blockage kills a large share of the LV. This is the MI most likely to cause shock.',
    link: 'VSD',
    st: { V1: 0.15, V2: 0.3, V3: 0.35, V4: 0.3, II: -0.1, III: -0.15, aVF: -0.12 },
  },
  {
    id: 'septal', view: 'front', name: 'Septal MI', art: 'Proximal LAD (septal branches)', culprit: ['LAD'], occl: ['LAD', 0.12], terr: ['septal'],
    one: 'The septal branches of the LAD are blocked. The front of the interventricular septum dies.',
    facts: {
      Artery: 'Proximal LAD and its septal perforator branches.',
      'ST up': '<b>V1 and V2</b>.',
      Reciprocal: 'Usually none.',
      Wall: 'Anterior two-thirds of the interventricular septum.',
    },
    points: ['The bundle branches run in the septum: new RBBB or LBBB, Mobitz II, complete heart block.', 'Septal rupture causing a VSD.'],
    pearl: '<strong>The wiring lives here</strong>A new bundle branch block in a patient with chest pain points to a septal infarct.',
    link: 'VSD',
    st: { V1: 0.25, V2: 0.3, V3: 0.1 },
  },
  {
    id: 'extensive', view: 'frontleft', name: 'Extensive anterior MI', art: 'Proximal LAD or left main', culprit: ['LAD', 'DIAG'], occl: ['LAD', 0.1], terr: ['anterior', 'lateral'],
    one: 'A very proximal block takes out the anterior wall, septum and lateral wall together.',
    facts: {
      Artery: 'Proximal LAD (before the diagonal branches) or the left main.',
      'ST up': '<b>V1 to V6, I and aVL</b>.',
      Reciprocal: 'ST depression in II, III, aVF.',
      Wall: 'Anterior, septal and lateral walls of the LV.',
    },
    points: ['The highest risk of cardiogenic shock, arrhythmia and death.', 'Free-wall rupture and tamponade (5 to 14 days).'],
    pearl: '<strong>More leads, more muscle</strong>The number of leads with ST elevation roughly tracks how much myocardium is at risk.',
    link: null,
    st: { V1: 0.2, V2: 0.3, V3: 0.35, V4: 0.3, V5: 0.22, V6: 0.15, I: 0.15, aVL: 0.2, II: -0.1, III: -0.2, aVF: -0.15 },
  },
  {
    id: 'lateral', view: 'left', name: 'Lateral MI', art: 'Left circumflex (LCx) or a diagonal', culprit: ['LCX', 'OM'], occl: ['LCX', 0.4], terr: ['lateral'],
    one: 'The circumflex artery or a diagonal branch is blocked. The side (lateral) wall of the left ventricle dies.',
    facts: {
      Artery: 'Left circumflex (LCx), or a diagonal branch of the LAD.',
      'ST up': '<b>I, aVL, V5, V6</b>. I and aVL alone are the “high lateral” leads.',
      Reciprocal: 'ST depression in II, III, aVF (III most).',
      Wall: 'Lateral wall of the left ventricle.',
    },
    points: ['The LCx territory is electrically quiet: the ECG can look nearly normal. A common missed MI.', 'Often extends to the posterior wall.'],
    pearl: '<strong>Look at aVL</strong>Any ST depression in III with ST elevation in aVL should make you look hard for a lateral MI.',
    link: null,
    st: { I: 0.2, aVL: 0.25, V5: 0.2, V6: 0.2, III: -0.2, aVF: -0.1, II: -0.05 },
  },
  {
    id: 'inferior', view: 'backbelow', name: 'Inferior MI', art: 'RCA (80–90%)', culprit: ['RCA', 'PDA'], occl: ['RCA', 0.35], terr: ['inferior'],
    one: 'Usually the right coronary artery (RCA) is blocked. The bottom wall of the heart, resting on the diaphragm, dies.',
    facts: {
      Artery: 'Right coronary artery in 80 to 90% (right-dominant hearts); otherwise the LCx.',
      'ST up': '<b>II, III, aVF</b>. ST up in III more than II points to the RCA.',
      Reciprocal: 'ST depression in I and aVL.',
      Wall: 'Inferior (diaphragmatic) wall of the LV.',
    },
    points: ['Bradycardia and AV block: the RCA supplies the SA node (about 60%) and the AV node (about 80%).', 'Posteromedial papillary muscle rupture (2 to 7 days): sudden acute MR and pulmonary edema. It has a single blood supply, from the PDA.', 'RV infarct in up to 40%: check right-sided leads (V4R).'],
    pearl: '<strong>Hear the complication</strong>Papillary muscle rupture after an inferior MI causes a new holosystolic murmur at the apex: acute mitral regurgitation.',
    link: 'MR',
    st: { II: 0.25, III: 0.35, aVF: 0.3, I: -0.1, aVL: -0.25 },
  },
  {
    id: 'posterior', view: 'back', name: 'Posterior MI', art: 'PDA (from RCA) or LCx', culprit: ['PDA', 'LCX'], occl: ['PDA', 0.15], terr: ['posterior'],
    one: 'The back wall of the left ventricle dies. No standard lead faces it, so the front leads see it in mirror image.',
    facts: {
      Artery: 'Posterior descending artery (from the RCA in right-dominant hearts) or the LCx.',
      'ST up': 'In posterior leads <b>V7 to V9</b> only.',
      'V1 to V3': '<b>ST depression</b> with tall R waves and upright T waves.',
      Wall: 'Posterior (basal inferolateral) wall of the LV.',
    },
    points: ['Usually comes with an inferior or lateral MI.', 'Counts as a STEMI: send for reperfusion.'],
    pearl: '<strong>Flip the strip</strong>Turn V1 to V3 upside down: the ST depression becomes elevation and the tall R becomes a Q wave. That mirror is the posterior MI.',
    link: 'MR',
    st: { V1: -0.2, V2: -0.25, V3: -0.2 }, rBoost: { V1: 0.6, V2: 0.6, V3: 0.2 }, tBoost: { V1: 0.25, V2: 0.2 },
  },
  {
    id: 'rv', view: 'frontright', name: 'Right ventricular MI', art: 'Proximal RCA', culprit: ['RCA', 'AM'], occl: ['RCA', 0.12], terr: ['rv', 'inferior'],
    one: 'A block high in the RCA, before its branches to the right ventricle. The RV stops pumping well, usually along with an inferior MI.',
    facts: {
      Artery: 'Proximal RCA, before the acute marginal branches.',
      'ST up': '<b>V4R</b> (right-sided chest leads), with II, III, aVF; sometimes V1.',
      Exam: 'Hypotension, raised JVP, <b>clear lungs</b>, Kussmaul sign.',
      Wall: 'Right ventricular free wall, plus the inferior LV.',
    },
    points: ['Preload dependent: the RV needs volume to fill the LV.', 'Give IV fluids. Avoid nitrates, diuretics and morphine: they drop preload and the blood pressure crashes.'],
    pearl: '<strong>No nitrates</strong>Chest pain, inferior ST elevation and low blood pressure after nitroglycerin: think RV infarct.',
    link: null,
    st: { II: 0.25, III: 0.35, aVF: 0.3, V1: 0.12, I: -0.1, aVL: -0.25 },
  },
];
const miById = Object.fromEntries(MI.map((m) => [m.id, m]));

/* ============================================================
   4. STATE + PANELS
   ============================================================ */
const app = $('#hlApp');
const state = { mode: 'murmur', murmur: 'AS', man: 'rest', mi: 'anterior', site: null };

function factsHTML(facts) {
  return '<dl class="hl-facts">' + Object.entries(facts).map(([k, v]) => `<div class="hl-fact"><dt>${k}</dt><dd>${v}</dd></div>`).join('') + '</dl>';
}

function renderMurmurPanel() {
  const m = byId[state.murmur];
  const p = $('#hlPanel');
  const others = m.id === 'NORMAL' ? '' : MURMURS.filter((x) => x.site === m.site && x.id !== m.id && x.id !== 'NORMAL');
  p.innerHTML = `
    <p class="hl-p__kind${m.kind === 'normal' ? ' hl-p__kind--normal' : ''}">${m.kind === 'normal' ? 'Baseline' : m.kind}</p>
    <h2 class="hl-p__name">${m.name}</h2>
    <p class="hl-p__one">${m.one}</p>
    ${factsHTML(m.facts)}
    <h3 class="hl-p__h">Know for the exam</h3>
    <ul class="hl-p__list">${m.points.map((x) => `<li>${x}</li>`).join('')}</ul>
    <div class="hl-pearl">${m.pearl}</div>
    ${others && others.length ? `<p class="hl-p__one" style="margin:0">Also heard at this spot: ${others.map((o) => `<button class="hl-link" data-go-murmur="${o.id}">${o.short}</button>`).join(', ')}</p>` : ''}
  `;
  p.scrollTop = 0;
}

function renderMiPanel() {
  const m = miById[state.mi];
  const p = $('#hlPanel');
  p.innerHTML = `
    <p class="hl-p__kind">${m.art}</p>
    <h2 class="hl-p__name">${m.name}</h2>
    <p class="hl-p__one">${m.one}</p>
    ${factsHTML(m.facts)}
    <h3 class="hl-p__h">What can go wrong</h3>
    <ul class="hl-p__list">${m.points.map((x) => `<li>${x}</li>`).join('')}</ul>
    <div class="hl-pearl">${m.pearl}</div>
    ${m.link ? `<button class="hl-link" data-go-murmur="${m.link}"><i data-lucide="volume-2" width="16" height="16" aria-hidden="true"></i> Hear the ${byId[m.link].short.toLowerCase()} murmur this can cause</button>` : ''}
  `;
  p.scrollTop = 0;
  icons();
}

function renderMurmurList() {
  const groups = ['Start here', 'Systolic', 'Diastolic', 'Continuous'];
  $('#murmurList').innerHTML = groups.map((g) => `
    <div class="hl-group">
      <p class="hl-group__h">${g}</p>
      <div class="hl-group__items">${MURMURS.filter((m) => m.group === g).map((m) => `<button class="hl-chip" data-murmur="${m.id}" aria-pressed="false">${m.short}</button>`).join('')}</div>
    </div>`).join('');
}

function renderMiList() {
  $('#miList').innerHTML = MI.map((m) => `
    <button class="hl-mi" data-mi="${m.id}" aria-pressed="false">
      <span class="hl-mi__dot" aria-hidden="true"></span>
      <span class="hl-mi__name">${m.name}</span>
      <span class="hl-mi__art">${m.art}</span>
    </button>`).join('');
}

function syncMurmurUI() {
  const m = byId[state.murmur];
  $$('[data-murmur]').forEach((b) => {
    const on = b.dataset.murmur === m.id;
    b.classList.toggle('is-on', on); b.setAttribute('aria-pressed', on);
    b.classList.toggle('is-dim', !!state.site && !on && byId[b.dataset.murmur].site !== state.site && b.dataset.murmur !== 'NORMAL');
  });
  const loud = m.id === 'NORMAL' ? null : m.site;
  $$('.hl-site').forEach((b) => { b.setAttribute('aria-pressed', b.dataset.site === loud); });
  renderManNote();
  renderMurmurPanel();
  Heart.setValve(m.id === 'NORMAL' ? null : m.site);
  drawPCG();
}

function renderManNote() {
  const m = byId[state.murmur];
  const man = state.man;
  const note = $('#manNote');
  if (man === 'rest') { note.innerHTML = 'Press Listen, then switch maneuvers while it plays to hear the change.'; return; }
  const M = MANEUVERS[man];
  let txt;
  if (m.id === 'NORMAL') txt = man === 'insp' ? `${M.name}: P2 moves later, so S2 <b>splits</b> into two sounds.` : `${M.name}: normal S1 and S2 barely change.`;
  else if (m.id === 'ASD' && man === 'insp') txt = `${M.name}: the split S2 <b>stays the same</b>. That is the fixed split of an ASD.`;
  else if (m.id === 'MVP') txt = man === 'valsalva' ? `${M.name}: the LV gets smaller, so the click comes <b>earlier</b> and the murmur gets longer.` : (man === 'insp' ? `${M.name}: little change.` : `${M.name}: the LV gets bigger, so the click comes <b>later</b> and the murmur gets shorter.`);
  else {
    const k = m.eff[man] ?? 1;
    const dir = k > 1.1 ? '<b>louder</b>' : k < 0.9 ? '<b>softer</b>' : 'about the same';
    txt = `${M.name}: ${M.why}, so ${m.short} gets ${dir}.`;
  }
  note.innerHTML = txt;
}

/* ============================================================
   5. PHONOCARDIOGRAM
   ============================================================ */
const pcg = $('#pcgCanvas');
const pctx = pcg.getContext('2d');
function sizeCanvas(cv, cssH) {
  const dpr = Math.min(window.devicePixelRatio || 1, 2);
  const w = cv.clientWidth;
  const h = cssH || cv.clientHeight;
  if (cv.width !== Math.round(w * dpr) || cv.height !== Math.round(h * dpr)) { cv.width = Math.round(w * dpr); cv.height = Math.round(h * dpr); }
  return { w, h, dpr };
}
const hash = (i) => { const s = Math.sin(i * 12.9898) * 43758.5453; return s - Math.floor(s); };

function drawPCG() {
  if (!pcg.clientWidth) return;
  const { w, h, dpr } = sizeCanvas(pcg);
  const ctx = pctx;
  ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
  ctx.clearRect(0, 0, w, h);
  const res = resolve(byId[state.murmur], state.man);
  const mid = h / 2, amp = h * 0.44;
  const cycles = 1; // one beat across the strip, aligned with the S1/systole/S2/diastole labels
  const ph = AudioEngine.playing && !Quiz.active ? AudioEngine.phase() : null;

  // baseline + systole band
  ctx.fillStyle = C.blue50;
  ctx.fillRect((S1 / cycles) * w, 0, ((S2 - S1) / cycles) * w, h);
  ctx.strokeStyle = C.ink200; ctx.lineWidth = 1;
  ctx.beginPath(); ctx.moveTo(0, mid); ctx.lineTo(w, mid); ctx.stroke();

  // murmur: dense vertical hatching
  for (let x = 0; x < w; x += 1.5) {
    const phase = ((x / w) * cycles) % 1;
    const a = murmurLevel(res, phase);
    if (a <= 0.01) continue;
    const r = 0.45 + 0.55 * hash(Math.floor(x * 3));
    const hh = Math.min(1, a) * amp * 0.8 * r;
    ctx.strokeStyle = C.red400;
    ctx.globalAlpha = ph !== null && phase > ph ? 0.35 : 0.9;
    ctx.beginPath(); ctx.moveTo(x, mid - hh); ctx.lineTo(x, mid + hh); ctx.stroke();
  }
  ctx.globalAlpha = 1;

  // transients: sharp oscillations
  for (const tr of res.tr) {
    const x0 = (tr.t / cycles) * w;
    const len = tr.kind === 'click' ? w * 0.012 : w * 0.035;
    ctx.strokeStyle = tr.kind === 'click' ? C.blue600 : C.ink900;
    ctx.lineWidth = tr.kind === 'click' ? 1.6 : 2;
    ctx.globalAlpha = ph !== null && tr.t > ph ? 0.35 : 1;
    ctx.beginPath();
    for (let i = 0; i <= 40; i++) {
      const u = i / 40; const x = x0 + u * len;
      const y = mid - Math.sin(u * Math.PI * 7) * Math.exp(-u * 3.2) * amp * Math.min(1.05, tr.amp);
      i ? ctx.lineTo(x, y) : ctx.moveTo(x, y);
    }
    ctx.stroke();
  }
  ctx.globalAlpha = 1;

  // playhead
  if (ph !== null) {
    const x = (ph / cycles) * w;
    ctx.strokeStyle = C.blue500; ctx.lineWidth = 2;
    ctx.beginPath(); ctx.moveTo(x, 4); ctx.lineTo(x, h - 4); ctx.stroke();
  }
}

/* ============================================================
   6. 3D HEART
   ============================================================ */
const Heart = (() => {
  const host = $('#heartCanvas');
  let renderer, scene, camera, controls, ventricle, colorAttr, terrIdx, baseColors, infarctW, vessels = {}, valves = {}, occlusion;
  let activeValve = null, targetW = null, curW = 0, camTween = null, ok = false;
  let proc = null, hemi = null, rim = null;
  let real = null; // the realistic GLB heart once it has loaded
  let chest = null; // the rib cage scene for Murmurs mode once it has loaded
  let touched = false; // the visitor has turned the view themselves
  const DIST = 10;
  const SHOW_ALL_ARTERIES = new URLSearchParams(location.search).has('arteries'); // dev aid for aligning paths

  // Ventricular surface: theta 0 = anterior, +pi/2 = patient's left; v 0 = base, 1 = apex.
  function surf(theta, v, out = 1) {
    const s = Math.sin(Math.PI * Math.min(Math.max(v, 0), 1));
    const r = Math.pow(Math.max(s, 0), 0.62) * (1.12 - 0.5 * v) * out;
    const lv = 1 + 0.12 * Math.sin(theta);
    return new THREE.Vector3(r * 1.05 * Math.sin(theta) * lv, 1.0 - 2.55 * v, r * 0.86 * Math.cos(theta));
  }
  const wrap = (a) => Math.atan2(Math.sin(a), Math.cos(a));
  const band = (a, lo, hi, soft = 0.12) => {
    const x = wrap(a - (lo + hi) / 2); const half = (hi - lo) / 2;
    const d = Math.abs(x) - half;
    return d <= 0 ? 1 : Math.max(0, 1 - d / soft);
  };
  // Weight of each territory at a surface point.
  function territories(theta, v) {
    const apex = Math.max(0, Math.min(1, (v - 0.78) / 0.12));
    const posteriorSpan = band(theta, 2.2, 3.85); // wraps through pi to about -2.43
    const lower = Math.max(0, Math.min(1, (v - 0.36) / 0.1));
    return {
      anterior: Math.max(band(theta, 0.1, 1.3), apex),
      septal: band(theta, 0.12, 0.55, 0.08) * (v < 0.85 ? 1 : 0.4),
      lateral: band(theta, 1.3, 2.25) * (1 - apex * 0.6),
      inferior: posteriorSpan * lower * (1 - apex * 0.5),
      posterior: posteriorSpan * (1 - lower),
      rv: band(theta, -2.4, 0.12) * (v > 0.06 && v < 0.88 ? 1 : 0.3) * (1 - apex),
    };
  }

  function build() {
    const W = host.clientWidth, H = host.clientHeight;
    renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
    renderer.setPixelRatio(Math.min(window.devicePixelRatio || 1, 2));
    renderer.setSize(W, H);
    renderer.outputColorSpace = THREE.SRGBColorSpace;
    host.appendChild(renderer.domElement);

    scene = new THREE.Scene();
    camera = new THREE.PerspectiveCamera(30, W / H, 0.1, 100);
    camera.position.set(0, 0.5, DIST);

    hemi = new THREE.HemisphereLight(0xffffff, new THREE.Color(C.blue100), 1.25); scene.add(hemi);
    const key = new THREE.DirectionalLight(0xffffff, 1.7); key.position.set(3, 4, 6); scene.add(key);
    rim = new THREE.DirectionalLight(new THREE.Color(C.blue300), 1.2); rim.position.set(-4, 2, -5); scene.add(rim);

    const heart = new THREE.Group();
    proc = heart;
    heart.visible = false; // shown only if the realistic model fails to load
    heart.rotation.set(-0.32, 0, 0.5);
    heart.position.set(-0.15, 0.2, 0);
    scene.add(heart);

    // Ventricles
    const NU = 96, NV = 72;
    const pos = [], idx = [], terr = [];
    for (let j = 0; j <= NV; j++) {
      const v = j / NV;
      for (let i = 0; i <= NU; i++) {
        const theta = -Math.PI + (i / NU) * 2 * Math.PI;
        const p = surf(theta, v);
        pos.push(p.x, p.y, p.z);
        terr.push(territories(theta, v));
      }
    }
    for (let j = 0; j < NV; j++) for (let i = 0; i < NU; i++) {
      const a = j * (NU + 1) + i, b = a + NU + 1;
      idx.push(a, b, a + 1, b, b + 1, a + 1);
    }
    const g = new THREE.BufferGeometry();
    g.setAttribute('position', new THREE.Float32BufferAttribute(pos, 3));
    g.setIndex(idx);
    g.computeVertexNormals();
    const base = new THREE.Color(C.blue50).lerp(new THREE.Color(C.blue100), 0.55);
    baseColors = new Float32Array(pos.length);
    for (let k = 0; k < pos.length / 3; k++) {
      // a faint marbling so the surface reads as muscle, not plastic
      const n = 0.96 + 0.04 * hash(k * 0.37);
      baseColors[k * 3] = base.r * n; baseColors[k * 3 + 1] = base.g * n; baseColors[k * 3 + 2] = base.b * n;
    }
    colorAttr = new THREE.Float32BufferAttribute(baseColors.slice(), 3);
    g.setAttribute('color', colorAttr);
    terrIdx = terr;
    infarctW = new Float32Array(pos.length / 3);
    ventricle = new THREE.Mesh(g, new THREE.MeshStandardMaterial({ vertexColors: true, roughness: 0.55, metalness: 0.0 }));
    heart.add(ventricle);

    const tissue = (hex, rough = 0.6) => new THREE.MeshStandardMaterial({ color: new THREE.Color(hex), roughness: rough });
    // Atria
    const ra = new THREE.Mesh(new THREE.SphereGeometry(1, 48, 32), tissue(C.blue100));
    ra.scale.set(0.55, 0.5, 0.52); ra.position.set(-0.78, 0.78, 0.05); heart.add(ra);
    const la = new THREE.Mesh(new THREE.SphereGeometry(1, 48, 32), tissue(C.blue100));
    la.scale.set(0.62, 0.42, 0.5); la.position.set(0.35, 0.88, -0.55); heart.add(la);
    const laa = new THREE.Mesh(new THREE.SphereGeometry(1, 32, 24), tissue(C.blue100));
    laa.scale.set(0.28, 0.16, 0.2); laa.position.set(0.78, 0.92, 0.12); laa.rotation.z = -0.5; heart.add(laa);

    // Great vessels
    const tube = (pts, r, hex) => {
      const curve = new THREE.CatmullRomCurve3(pts.map((p) => new THREE.Vector3(...p)));
      const m = new THREE.Mesh(new THREE.TubeGeometry(curve, 64, r, 20, false), tissue(hex, 0.5));
      heart.add(m); return m;
    };
    tube([[0.0, 0.7, 0.05], [0.02, 1.4, 0.12], [-0.05, 1.95, 0.0], [0.35, 2.22, -0.3], [0.78, 1.95, -0.55], [0.86, 1.2, -0.62]], 0.21, C.blue200); // aorta
    tube([[0.18, 0.75, 0.5], [0.3, 1.35, 0.55], [0.45, 1.62, 0.2], [0.95, 1.58, -0.1]], 0.18, C.blue300); // pulmonary trunk to left PA
    tube([[0.42, 1.6, 0.25], [-0.2, 1.62, -0.25], [-0.55, 1.55, -0.3]], 0.13, C.blue300); // right PA
    tube([[-0.78, 1.0, -0.05], [-0.8, 1.6, -0.08], [-0.78, 2.05, -0.08]], 0.15, C.blue200); // SVC
    [[0.62, 1.95, -0.42], [0.42, 2.18, -0.28], [0.18, 2.2, -0.15]].forEach(([x, y, z]) => tube([[x, y, z], [x, y + 0.4, z]], 0.07, C.blue200)); // arch branches

    // Coronary arteries, drawn on the surface
    const onSurf = (list, lift = 1.035) => list.map(([t, v]) => surf(t, v, lift));
    const coronary = (key, pts, r = 0.045) => {
      const curve = new THREE.CatmullRomCurve3(pts);
      const mat = new THREE.MeshStandardMaterial({ color: new THREE.Color(C.blue600), roughness: 0.35 });
      const m = new THREE.Mesh(new THREE.TubeGeometry(curve, 120, r, 12, false), mat);
      m.userData = { curve, r };
      heart.add(m); vessels[key] = m;
    };
    const root = new THREE.Vector3(0.05, 0.98, 0.25);
    coronary('LM', [root, surf(0.5, 0.06, 1.05), surf(0.5, 0.11, 1.04)], 0.055);
    coronary('LAD', [surf(0.5, 0.11, 1.04), ...onSurf([[0.42, 0.2], [0.36, 0.35], [0.34, 0.5], [0.38, 0.65], [0.5, 0.8], [0.9, 0.93], [2.2, 0.985]])], 0.05);
    coronary('DIAG', onSurf([[0.36, 0.32], [0.65, 0.42], [0.95, 0.55], [1.15, 0.66]]), 0.032);
    coronary('LCX', [surf(0.5, 0.11, 1.04), ...onSurf([[0.9, 0.13], [1.4, 0.15], [1.9, 0.16], [2.4, 0.17], [2.8, 0.18]])], 0.045);
    coronary('OM', onSurf([[1.5, 0.15], [1.6, 0.3], [1.65, 0.45], [1.7, 0.6]]), 0.032);
    const rroot = new THREE.Vector3(-0.15, 0.92, 0.32);
    coronary('RCA', [rroot, ...onSurf([[-0.35, 0.12], [-0.9, 0.14], [-1.5, 0.15], [-2.0, 0.16], [-2.45, 0.17], [-2.75, 0.18]])], 0.05);
    coronary('AM', onSurf([[-1.3, 0.15], [-1.25, 0.32], [-1.2, 0.5], [-1.15, 0.62]]), 0.032);
    coronary('PDA', onSurf([[-2.75, 0.18], [-2.72, 0.35], [-2.7, 0.52], [-2.68, 0.7], [-2.6, 0.84]]), 0.04);

    // Occlusion marker
    occlusion = new THREE.Mesh(new THREE.SphereGeometry(0.09, 24, 16), new THREE.MeshStandardMaterial({ color: new THREE.Color(C.red600), emissive: new THREE.Color(C.red500), emissiveIntensity: 0.4 }));
    occlusion.visible = false; heart.add(occlusion);

    // Valves (seen through the wall: drawn on top)
    const VALVE_POS = { aortic: [0.02, 0.82, 0.1], pulmonic: [0.18, 0.86, 0.48], mitral: [0.4, 0.58, -0.22], tricuspid: [-0.45, 0.55, 0.12] };
    Object.entries(VALVE_POS).forEach(([k, p]) => {
      const grp = new THREE.Group(); grp.position.set(...p);
      const ring = new THREE.Mesh(new THREE.TorusGeometry(0.13, 0.03, 12, 40), new THREE.MeshBasicMaterial({ color: new THREE.Color(C.blue500), depthTest: false, transparent: true, opacity: 0.9 }));
      const dot = new THREE.Mesh(new THREE.CircleGeometry(0.09, 32), new THREE.MeshBasicMaterial({ color: new THREE.Color(C.blue500), depthTest: false, transparent: true, opacity: 0.0 }));
      const hit = new THREE.Mesh(new THREE.SphereGeometry(0.26, 12, 8), new THREE.MeshBasicMaterial({ visible: false }));
      ring.renderOrder = dot.renderOrder = 10;
      grp.add(ring, dot, hit);
      hit.userData.site = k;
      heart.add(grp);
      valves[k] = { grp, ring, dot, hit };
    });
    // erb's point is where AR is heard; the lesion itself is the aortic valve
    valves.erb = valves.aortic;

    controls = new OrbitControls(camera, renderer.domElement);
    controls.enableZoom = false; controls.enablePan = false;
    controls.enableDamping = true; controls.dampingFactor = 0.08;
    controls.autoRotate = !reduceMotion; controls.autoRotateSpeed = 0.7;
    controls.target.set(0.05, 0.3, 0);
    controls.addEventListener('start', () => { controls.autoRotate = false; camTween = null; touched = true; $('.hl-heart').classList.add('is-touched'); });

    // Tap to pick a valve (murmurs) or a wall (MI)
    const ray = new THREE.Raycaster(); const ndc = new THREE.Vector2(); let down = null;
    renderer.domElement.addEventListener('pointerdown', (e) => { down = [e.clientX, e.clientY]; });
    renderer.domElement.addEventListener('pointerup', (e) => {
      if (!down || Math.hypot(e.clientX - down[0], e.clientY - down[1]) > 6) return;
      const r = renderer.domElement.getBoundingClientRect();
      ndc.set(((e.clientX - r.left) / r.width) * 2 - 1, -((e.clientY - r.top) / r.height) * 2 + 1);
      ray.setFromCamera(ndc, camera);
      if (state.mode === 'murmur') {
        const hits = ray.intersectObjects(chest ? chest.hits : ['aortic', 'pulmonic', 'mitral', 'tricuspid'].map((k) => valves[k].hit));
        if (hits.length) pickSite(hits[0].object.userData.site);
      } else {
        const hit = ray.intersectObject(real ? real.mesh : ventricle)[0];
        if (!hit) return;
        const t = (real ? real.terr : terrIdx)[hit.face.a];
        if (!t) return;
        const order = [['posterior', 'posterior'], ['inferior', 'inferior'], ['lateral', 'lateral'], ['rv', 'rv'], ['septal', 'septal'], ['anterior', 'anterior']];
        let best = null, bw = 0.4;
        order.forEach(([tk, mi]) => { if (t[tk] > bw) { bw = t[tk]; best = mi; } });
        if (best) selectMI(best);
      }
    });

    new ResizeObserver(() => {
      const w = host.clientWidth, h = host.clientHeight;
      if (!w || !h) return;
      renderer.setSize(w, h); camera.aspect = w / h; camera.updateProjectionMatrix();
    }).observe(host);

    ok = true;
    renderer.setAnimationLoop(frame);
    loadReal().catch((e) => { console.warn('Heart Lab: realistic model failed, using the simple one', e); proc.visible = true; setLoading(false); });
  }

  function setLoading(on) { const el = $('#heartLoading'); if (el) el.hidden = !on; }

  /* ---- The realistic heart (CC0 model from grab3d.com, see assets/models/heart-LICENSE.txt) ----
     Measured in the model's own centred units: the ventricular axis runs from the base
     (AV groove) to the apex. Territories, artery paths and valves hang off that axis. */
  const AX_B = new THREE.Vector3(-0.006, 0.012, 0.0);
  const AX_A = new THREE.Vector3(0.042, -0.060, 0.0095);
  const REAL_PATHS = {
    LM: [[0.55, 0.0], [0.42, 0.04]],
    LAD: [[0.42, 0.04], [0.34, 0.12], [0.28, 0.3], [0.27, 0.5], [0.3, 0.68], [0.45, 0.84], [0.9, 0.95]],
    DIAG: [[0.3, 0.22], [0.6, 0.34], [0.9, 0.48], [1.1, 0.62]],
    LCX: [[0.55, 0.15], [0.95, 0.3], [1.3, 0.42], [1.6, 0.47], [1.95, 0.49], [2.45, 0.46], [2.8, 0.42]],
    OM: [[1.5, 0.46], [1.58, 0.58], [1.65, 0.7], [1.72, 0.82]],
    RCA: [[-0.25, -0.03], [-0.7, 0.0], [-1.2, 0.02], [-1.7, 0.04], [-2.2, 0.05], [-2.6, 0.07], [-2.8, 0.08]],
    AM: [[-1.25, 0.02], [-1.2, 0.22], [-1.15, 0.42], [-1.1, 0.6]],
    PDA: [[-2.8, 0.08], [-2.78, 0.25], [-2.75, 0.45], [-2.7, 0.65], [-2.6, 0.82]],
  };
  const REAL_VALVES = { aortic: [0.0, 0.02, 0.008], pulmonic: [0.012, 0.024, 0.017], mitral: [0.012, 0.006, -0.01], tricuspid: [-0.02, 0.004, 0.008] };

  async function loadReal() {
    setLoading(true);
    const [{ GLTFLoader }, { MeshoptDecoder }] = await Promise.all([
      import('three/addons/loaders/GLTFLoader.js'),
      import('three/addons/libs/meshopt_decoder.module.js'),
    ]);
    const gltf = await new GLTFLoader().setMeshoptDecoder(MeshoptDecoder).loadAsync('/assets/models/heart.glb');
    const root = gltf.scene;
    let mesh = null;
    root.traverse((o) => { if (o.isMesh && !mesh) mesh = o; });
    if (!mesh) throw new Error('no mesh in heart.glb');
    root.updateMatrixWorld(true);
    const box = new THREE.Box3().setFromObject(root);
    const centre = box.getCenter(new THREE.Vector3());
    const k = 3.3 / box.getSize(new THREE.Vector3()).y;
    const wrapG = new THREE.Group();
    root.position.sub(centre);
    wrapG.add(root);
    wrapG.scale.setScalar(k);
    wrapG.position.y = 0.1;
    scene.add(wrapG);
    wrapG.updateMatrixWorld(true);

    // The ventricular frame
    const a = AX_A.clone().sub(AX_B); const L = a.length(); a.normalize();
    const z = new THREE.Vector3(0, 0, 1); const zref = z.sub(a.clone().multiplyScalar(z.dot(a))).normalize();
    const x = new THREE.Vector3(1, 0, 0); const xref = x.sub(a.clone().multiplyScalar(x.dot(a))).sub(zref.clone().multiplyScalar(x.dot(zref))).normalize();

    // Territory weights per vertex
    const pos = mesh.geometry.attributes.position;
    const terr = new Array(pos.count);
    const p = new THREE.Vector3(), d = new THREE.Vector3();
    const meshToWrap = new THREE.Matrix4().copy(wrapG.matrixWorld).invert().multiply(mesh.matrixWorld);
    for (let i = 0; i < pos.count; i++) {
      p.fromBufferAttribute(pos, i).applyMatrix4(meshToWrap);
      d.copy(p).sub(AX_B);
      const along = d.dot(a);
      const v = along / L;
      const perp = d.clone().sub(a.clone().multiplyScalar(along));
      const theta = Math.atan2(perp.dot(xref), perp.dot(zref));
      // nothing above the AV groove: the atria, appendage and pulmonary veins stay untouched
      const cut = 0.004 - 0.3 * Math.max(0, p.x);
      const fade = Math.max(0, Math.min(1, (cut - p.y) / 0.008)) * Math.max(0, Math.min(1, (v + 0.03) / 0.08));
      const t = territories(theta, Math.min(1, Math.max(0, v)));
      if (fade < 1) for (const key in t) t[key] *= fade;
      terr[i] = t;
    }
    const inf = new Float32Array(pos.count);
    const infAttr = new THREE.BufferAttribute(inf, 1);
    mesh.geometry.setAttribute('aInf', infAttr);

    // Tint the infarct in the shader, on top of the model's own texture
    const uniforms = { uInfCol: { value: new THREE.Color(C.ink100).lerp(new THREE.Color(C.red100), 0.35) }, uPulse: { value: 0 } };
    mesh.material.onBeforeCompile = (sh) => {
      Object.assign(sh.uniforms, uniforms);
      sh.vertexShader = 'attribute float aInf;\nvarying float vInf;\n' + sh.vertexShader.replace('#include <begin_vertex>', '#include <begin_vertex>\n  vInf = aInf;');
      sh.fragmentShader = 'uniform vec3 uInfCol;\nuniform float uPulse;\nvarying float vInf;\n' + sh.fragmentShader.replace(
        '#include <map_fragment>',
        '#include <map_fragment>\n  float inf = clamp(vInf, 0.0, 1.0);\n  diffuseColor.rgb = mix(diffuseColor.rgb, uInfCol * (0.9 + 0.1 * uPulse), inf * 0.78);'
      );
    };
    mesh.material.needsUpdate = true;

    // Project an artery path onto the surface
    const caster = new THREE.Raycaster();
    const surfPt = (theta, v) => {
      const q = AX_B.clone().add(a.clone().multiplyScalar(v * L));
      const dir = zref.clone().multiplyScalar(Math.cos(theta)).add(xref.clone().multiplyScalar(Math.sin(theta))).normalize();
      const o = wrapG.localToWorld(q.clone().add(dir.clone().multiplyScalar(0.12)));
      const target = wrapG.localToWorld(q.clone());
      caster.set(o, target.sub(o).normalize());
      // skip anything above the AV groove (atria, pulmonary veins) and land on the ventricle
      const hit = caster.intersectObject(mesh, false).find((h) => {
        const lp = wrapG.worldToLocal(h.point.clone());
        return lp.y < 0.008 - 0.3 * Math.max(0, lp.x);
      });
      if (!hit) return null;
      return wrapG.worldToLocal(hit.point.clone().add(caster.ray.direction.clone().multiplyScalar(-0.035)));
    };
    const vesselMeshes = {};
    Object.entries(REAL_PATHS).forEach(([key, list]) => {
      const pts = list.map(([t, v]) => surfPt(t, v)).filter(Boolean);
      if (pts.length < 2) return;
      const curve = new THREE.CatmullRomCurve3(pts);
      const r = (key === 'DIAG' || key === 'OM' || key === 'AM' ? 0.035 : 0.05) / k;
      const m = new THREE.Mesh(new THREE.TubeGeometry(curve, 120, r, 12, false), new THREE.MeshStandardMaterial({ color: new THREE.Color(C.red600), emissive: new THREE.Color(C.red500), emissiveIntensity: 0.45, roughness: 0.35 }));
      m.userData = { curve };
      m.visible = SHOW_ALL_ARTERIES;
      wrapG.add(m);
      vesselMeshes[key] = m;
    });

    // Valves and the occlusion marker move onto the realistic heart
    Object.entries(REAL_VALVES).forEach(([key, pv]) => {
      const g = valves[key].grp;
      g.position.set(...pv); g.scale.setScalar(1 / k);
      wrapG.add(g);
    });
    occlusion.scale.setScalar(1); occlusion.userData.base = 1 / k;
    wrapG.add(occlusion);

    // Neutral light so the tissue keeps its own colour
    hemi.color.set(0xffffff); hemi.groundColor.set(new THREE.Color(C.ink200)); hemi.intensity = 1.6;
    rim.color.set(0xffffff); rim.intensity = 0.8;
    controls.target.set(0, 0.1, 0);

    real = { mesh, terr, inf, infAttr, uniforms, wrapG, k, base: k, vessels: vesselMeshes };
    proc.visible = false;
    setLoading(false);
    // re-apply whatever the visitor already picked while it loaded
    if (state.mode === 'mi') { const m = miById[state.mi]; setInfarct(m.terr); setCulprit(m.culprit, m.occl); }
    // then the chest around it (Murmurs mode); without it Murmurs keeps the heart alone with its rings
    loadChest(GLTFLoader, MeshoptDecoder).catch((e) => console.warn('Heart Lab: rib cage failed, Murmurs mode shows the heart alone', e));
  }
  /* ---- The chest for Murmurs mode (CC0 rib cage, see assets/models/ribcage-LICENSE.txt) ----
     Both models are real size in metres, so the heart sits in the rib cage's own frame
     (bbox-centred, +x = patient's left, +z = anterior) at true scale; the whole chest
     group is then scaled up for the camera. */
  const CHEST_S = 15;              // world units per metre in Murmurs mode
  const CHEST_Y = 0.1 - 0.008 * 15; // puts chest y = 0.008 m on the camera target (y 0.1)
  const CHEST_AZ = 0.22;           // slight left-anterior oblique
  let swayT0 = 0;
  // Heart in the chest frame: the AX_A apex lands on the left 5th ICS near the midclavicular
  // line, the AX_B base on the 3rd costal cartilage (y 0.028), about one third right of the
  // midline; turned 0.12 rad about z, 1.6 cm forward so it sits just behind the sternum.
  const HEART_IN_CHEST = { pos: [0.0036, 0.0165, 0.016], rotZ: 0.12 };
  // Measured by ray scans of ribcage.glb at x = 0.0525 (the MCL): rib 5 crosses at y -0.022..-0.032,
  // rib 6 at -0.044..-0.056, so the 5th intercostal space at the MCL is centred at y -0.038.
  const MCL_ICS5_Y = -0.038;
  const SITE_VALVE = { aortic: 'aortic', pulmonic: 'pulmonic', erb: 'aortic', tricuspid: 'tricuspid', mitral: 'mitral' };
  const SITE_LABEL = { aortic: 'A', pulmonic: 'P', erb: 'E', tricuspid: 'T', mitral: 'M' };

  function placeHeart() {
    if (!real) return;
    const w = real.wrapG;
    if (chest && state.mode === 'murmur') {
      chest.g.add(w);
      w.position.set(...HEART_IN_CHEST.pos); w.rotation.set(0, 0, HEART_IN_CHEST.rotZ);
      real.base = 1;
    } else {
      scene.add(w);
      w.position.set(0, 0.1, 0); w.rotation.set(0, 0, 0);
      real.base = real.k;
    }
    w.scale.setScalar(real.base);
    if (chest) chest.g.visible = state.mode === 'murmur';
  }

  async function loadChest(GLTFLoader, MeshoptDecoder) {
    const [gltf, lm] = await Promise.all([
      new GLTFLoader().setMeshoptDecoder(MeshoptDecoder).loadAsync('/assets/models/ribcage.glb'),
      fetch('/assets/models/ribcage-landmarks.json').then((r) => { if (!r.ok) throw new Error('landmarks ' + r.status); return r.json(); }),
    ]);
    const mono = css('--font-mono') || 'monospace';
    try { await document.fonts.load(`700 44px ${mono}`); } catch (e) { /* the fallback font is fine */ }

    const root = gltf.scene;
    root.updateMatrixWorld(true);
    const centre = new THREE.Box3().setFromObject(root).getCenter(new THREE.Vector3());
    root.position.sub(centre);
    const g = new THREE.Group(); // stays at identity until every point is measured
    g.add(root);
    g.updateMatrixWorld(true);
    const ribs = [];
    root.traverse((o) => { if (o.isMesh) ribs.push(o); });
    ribs.forEach((o) => {
      // own bone texture, translucent so the heart reads through the sternum and cartilage; a
      // depth-only copy drawn first keeps the back ribs from washing through the front ones
      o.material.transparent = true; o.material.opacity = 0.55; o.material.depthWrite = false;
      o.renderOrder = 2;
      const pre = new THREE.Mesh(o.geometry, new THREE.MeshBasicMaterial({ colorWrite: false }));
      pre.renderOrder = 1;
      o.add(pre);
    });
    if (!ribs.length) throw new Error('no mesh in ribcage.glb');

    // ---- the anterior chest surface: a 1 mm depth map of the front-most bone, seen from the front ----
    const GS = 0.001, gx0 = -0.11, gy0 = -0.175, GW = 221, GH = 351;
    const depth = new Float32Array(GW * GH).fill(-1);
    {
      const va = new THREE.Vector3(), vb = new THREE.Vector3(), vc = new THREE.Vector3();
      ribs.forEach((mesh) => {
        const pos = mesh.geometry.attributes.position, index = mesh.geometry.index;
        const n = index ? index.count : pos.count;
        const vert = (i, v) => v.fromBufferAttribute(pos, index ? index.getX(i) : i).applyMatrix4(mesh.matrixWorld);
        for (let t = 0; t < n; t += 3) {
          vert(t, va); vert(t + 1, vb); vert(t + 2, vc);
          const i0 = Math.max(0, Math.ceil((Math.min(va.x, vb.x, vc.x) - gx0) / GS)), i1 = Math.min(GW - 1, Math.floor((Math.max(va.x, vb.x, vc.x) - gx0) / GS));
          const j0 = Math.max(0, Math.ceil((Math.min(va.y, vb.y, vc.y) - gy0) / GS)), j1 = Math.min(GH - 1, Math.floor((Math.max(va.y, vb.y, vc.y) - gy0) / GS));
          const det = (vb.y - vc.y) * (va.x - vc.x) + (vc.x - vb.x) * (va.y - vc.y);
          if (Math.abs(det) < 1e-12) continue;
          for (let j = j0; j <= j1; j++) for (let i = i0; i <= i1; i++) {
            const x = gx0 + i * GS, y = gy0 + j * GS;
            const l1 = ((vb.y - vc.y) * (x - vc.x) + (vc.x - vb.x) * (y - vc.y)) / det;
            const l2 = ((vc.y - va.y) * (x - vc.x) + (va.x - vc.x) * (y - vc.y)) / det;
            const l3 = 1 - l1 - l2;
            if (l1 < 0 || l2 < 0 || l3 < 0) continue;
            const z = l1 * va.z + l2 * vb.z + l3 * vc.z;
            const c = j * GW + i;
            if (z > depth[c]) depth[c] = z;
          }
        }
      });
    }
    const hitZ = (x, y) => {
      const i = Math.round((x - gx0) / GS), j = Math.round((y - gy0) / GS);
      if (i < 0 || j < 0 || i >= GW || j >= GH) return null;
      const z = depth[j * GW + i];
      return z > 0.015 ? z : null;
    };
    // z of the surface at (x, y); in a rib gap, bridge the crests of the ribs above and below
    const crest = (x, y, dir) => {
      for (let s = 0.001; s <= 0.024; s += 0.001) {
        const z = hitZ(x, y + dir * s);
        if (z !== null) {
          const z2 = Math.max(z, hitZ(x, y + dir * (s + 0.003)) ?? z, hitZ(x, y + dir * (s + 0.006)) ?? z);
          return { z: z2, d: s + 0.003 };
        }
      }
      return null;
    };
    const zAt = (x, y) => {
      const z = hitZ(x, y);
      if (z !== null) return z;
      const up = crest(x, y, 1), dn = crest(x, y, -1);
      if (up && dn) return up.z + (dn.z - up.z) * (up.d / (up.d + dn.d));
      return up ? up.z : dn ? dn.z : null;
    };
    // a point on the surface, lifted along the local normal (from the surface gradient)
    const onSurface = (x, y, lift) => {
      const z = zAt(x, y);
      if (z === null) return null;
      const e = 0.005;
      const zx = ((zAt(x + e, y) ?? z) - (zAt(x - e, y) ?? z)) / (2 * e);
      const zy = ((zAt(x, y + e) ?? z) - (zAt(x, y - e) ?? z)) / (2 * e);
      const n = new THREE.Vector3(-zx, -zy, 1).normalize();
      return { p: new THREE.Vector3(x, y, z).addScaledVector(n, lift), n };
    };

    // ---- listening points ----
    const R = lm.ribs;
    const ics = (a, b) => (a + b) / 2;
    const edge = lm.sternumHalfWidth + 0.004;
    const SITE_XY = {
      aortic: [-edge, ics(R[2].rightSternal[1], R[3].rightSternal[1])],   // right 2nd ICS, sternal edge
      pulmonic: [edge, ics(R[2].leftSternal[1], R[3].leftSternal[1])],    // left 2nd ICS, sternal edge
      erb: [edge, ics(R[3].leftSternal[1], R[4].leftSternal[1])],         // left 3rd ICS, sternal edge
      tricuspid: [edge, ics(R[4].leftSternal[1], R[5].leftSternal[1])],   // left 4th ICS, lower left sternal edge
      mitral: [lm.leftMidclavicularX, MCL_ICS5_Y],                          // left 5th ICS, midclavicular line
    };
    const PR = 0.0055; // diaphragm radius, metres
    const LABEL_AT = { aortic: [-1, 0], pulmonic: [1, 0.002], erb: [-1, 0], tricuspid: [1, -0.003], mitral: [1, -0.002] };
    const points = {}, hits = [];
    const ptFace = (col) => new THREE.MeshStandardMaterial({ color: new THREE.Color(col), roughness: 0.35, metalness: 0.15, emissive: new THREE.Color(C.blue300), emissiveIntensity: 0.15 });
    const ptRing = () => new THREE.MeshStandardMaterial({ color: new THREE.Color(C.blue500), roughness: 0.28, metalness: 0.75, emissive: new THREE.Color(C.blue500), emissiveIntensity: 0.2 });
    const zUp = new THREE.Vector3(0, 0, 1);
    const labelTex = (txt, fill) => {
      const cv = document.createElement('canvas'); cv.width = cv.height = 64;
      const x = cv.getContext('2d');
      x.font = `700 44px ${mono}`; x.textAlign = 'center'; x.textBaseline = 'middle'; x.lineJoin = 'round';
      x.lineWidth = 9; x.strokeStyle = C.surface; x.strokeText(txt, 32, 34);
      x.fillStyle = fill; x.fillText(txt, 32, 34);
      const t = new THREE.CanvasTexture(cv); t.colorSpace = THREE.SRGBColorSpace; return t;
    };
    Object.entries(SITE_XY).forEach(([site, [x, y]]) => {
      const s = onSurface(x, y, 0.0028);
      if (!s) throw new Error('no chest surface at ' + site);
      const grp = new THREE.Group();
      grp.position.copy(s.p); grp.quaternion.setFromUnitVectors(zUp, s.n);
      const face = new THREE.Mesh(new THREE.CylinderGeometry(PR * 0.86, PR * 0.86, 0.0012, 40).rotateX(Math.PI / 2), ptFace(C.blue50));
      const ring = new THREE.Mesh(new THREE.TorusGeometry(PR, PR * 0.17, 14, 48), ptRing());
      const hit = new THREE.Mesh(new THREE.SphereGeometry(PR * 1.9, 12, 8), new THREE.MeshBasicMaterial({ visible: false }));
      hit.userData.site = site;
      const pulse = new THREE.Group(); pulse.add(face, ring);
      grp.add(pulse, hit);
      g.add(grp); hits.push(hit);
      const tex = [labelTex(SITE_LABEL[site], C.blue700), labelTex(SITE_LABEL[site], C.red600)];
      const label = new THREE.Sprite(new THREE.SpriteMaterial({ map: tex[0], depthTest: false, depthWrite: false, transparent: true }));
      label.scale.setScalar(0.017); label.renderOrder = 30;
      // beside the disc, on the side that keeps the valve behind it in view
      const [lx, ly] = LABEL_AT[site];
      label.position.copy(s.p).add(new THREE.Vector3(lx * (PR + 0.0075), ly, 0.003));
      g.add(label);
      points[site] = { grp, pulse, face, ring, label, tex, p: s.p.clone() };
    });

    // ---- valves at their true positions behind the chest wall ----
    // x/y from the surface anatomy; z (depth) from where each valve sits in the heart model
    const VALVES = {
      aortic: { at: [lm.sternumHalfWidth, ics(R[3].leftSternal[1], R[4].leftSternal[1]), 0.016], n: [-0.2, 0.5, 0.85], kind: 'semilunar' }, // behind the left sternal edge, 3rd ICS
      pulmonic: { at: [0.02, R[3].leftSternal[1], 0.026], n: [0.2, 0.5, 0.85], kind: 'semilunar' },                               // behind the left 3rd costal cartilage
      mitral: { at: [0.025, R[4].leftSternal[1], 0.002], n: [0.5, -0.4, 0.75], kind: 'mitral' },                                   // behind the left 4th costal cartilage
      tricuspid: { at: [0, ics(R[4].leftSternal[1], R[5].leftSternal[1]), 0.014], n: [0.3, -0.3, 0.9], kind: 'tricuspid' },        // behind the sternum, 4th ICS
    };
    const VR = 0.0052;
    const vmat = (col, op) => new THREE.MeshBasicMaterial({ color: new THREE.Color(col), transparent: true, opacity: op, depthTest: false, depthWrite: false });
    const seam = (curve, m) => new THREE.Mesh(new THREE.TubeGeometry(curve, 16, VR * 0.075, 6, false), m);
    const cvalves = {};
    Object.entries(VALVES).forEach(([key, v]) => {
      const grp = new THREE.Group();
      grp.position.set(...v.at);
      grp.quaternion.setFromUnitVectors(zUp, new THREE.Vector3(...v.n).normalize());
      const disc = new THREE.Group();
      const faceM = vmat(C.blue100, 0.8), rimM = vmat(C.blue500, 0.95), seamM = vmat(C.blue700, 0.95);
      const face = new THREE.Mesh(new THREE.CircleGeometry(VR, 40), faceM);
      const rim = new THREE.Mesh(new THREE.TorusGeometry(VR, VR * 0.16, 8, 48), rimM);
      face.renderOrder = 10; rim.renderOrder = 11;
      disc.add(face, rim);
      const V = (a, r = VR * 0.97) => new THREE.Vector3(Math.cos(a) * r, Math.sin(a) * r, 0);
      const O = new THREE.Vector3();
      let seams = [];
      if (v.kind === 'semilunar') {
        // three cusps meeting in a "Mercedes" star
        seams = [Math.PI / 2, Math.PI / 2 + 2.094, Math.PI / 2 + 4.189].map((a) => new THREE.LineCurve3(O, V(a)));
      } else if (v.kind === 'mitral') {
        // two leaflets: the closure line is a shallow smile
        seams = [new THREE.QuadraticBezierCurve3(V(Math.PI + 0.12), new THREE.Vector3(0, -VR * 0.55, 0), V(-0.12))];
      } else {
        // three leaflets of unequal size, curved commissures
        seams = [1.75, 3.75, 5.6].map((a) => new THREE.QuadraticBezierCurve3(new THREE.Vector3(VR * 0.08, -VR * 0.05, 0), V(a + 0.35, VR * 0.5), V(a)));
      }
      seams.forEach((c) => { const m = seam(c, seamM); m.renderOrder = 12; disc.add(m); });
      grp.add(disc);
      g.add(grp);
      cvalves[key] = { grp, disc, faceM, rimM, seamM };
    });

    // ---- dashed line from each listening point to the valve it reports on ----
    const lines = {};
    Object.entries(points).forEach(([site, pt]) => {
      const to = cvalves[SITE_VALVE[site]].grp.position;
      const geo = new THREE.BufferGeometry().setFromPoints([pt.p, to]);
      const line = new THREE.Line(geo, new THREE.LineDashedMaterial({ color: new THREE.Color(C.blue400), dashSize: 0.0024, gapSize: 0.0018, transparent: true, opacity: 0.85, depthTest: false, depthWrite: false }));
      line.computeLineDistances(); line.renderOrder = 9;
      g.add(line); lines[site] = line;
    });

    // ---- radiation: curves on the chest surface (above the jugular notch they follow the neck) ----
    const notch = lm.jugularNotch;
    const surfaceOrNeck = (x, y, lift) => {
      if (y > notch[1] - 0.004) return new THREE.Vector3(x, y, notch[2] - 0.004 - (y - notch[1]) * 0.35);
      const s = onSurface(x, y, lift);
      return s ? s.p : null;
    };
    const P = (site) => SITE_XY[site];
    const RAD3 = {
      AS: [[P('aortic'), [-0.02, 0.065], [-0.024, 0.092], [-0.026, 0.128]], [P('aortic'), [-0.004, 0.058], [0.012, 0.09], [0.024, 0.128]]], // both carotids
      MR: [[P('mitral'), [0.068, -0.032], [0.082, -0.024], [0.094, -0.014]]],                                                           // to the left axilla along the 5th rib
      TR: [[P('tricuspid'), [0.002, -0.004], [-0.014, -0.01], [-0.026, -0.016]]],                                                       // right lower sternal border
      VSD: [[P('tricuspid'), [0.034, 0.0], [0.05, -0.004], [0.064, -0.008]], [P('tricuspid'), [-0.004, 0.003], [-0.022, 0.002], [-0.038, 0.0]]], // across the precordium
      AR: [[P('erb'), [0.021, 0.004], [0.032, -0.018], [0.046, -0.032]]],                                                               // down the left sternal border to the apex
      PDA: [[P('pulmonic'), [0.03, 0.054], [0.046, 0.063], [0.062, 0.07]]],                                                             // left infraclavicular
      PS: [[P('pulmonic'), [0.022, 0.062], [0.028, 0.078], [0.034, 0.09]]],                                                             // toward the left clavicle
    };
    const radMat = () => new THREE.MeshBasicMaterial({ color: new THREE.Color(C.red500), transparent: true, opacity: 0.7, depthWrite: false });
    const rad = {};
    Object.entries(RAD3).forEach(([id, paths]) => {
      const grp = new THREE.Group(); grp.visible = false;
      const flows = [];
      paths.forEach((ctrl) => {
        // walk the 2D polyline in small steps, skipping the first 8 mm (the diaphragm is there)
        const flat = new THREE.CatmullRomCurve3(ctrl.map(([x, y]) => new THREE.Vector3(x, y, 0)));
        const len = flat.getLength();
        const pts = [];
        for (let i = 0; i <= 14; i++) {
          const q = flat.getPointAt(Math.min(1, 0.009 / len + (i / 14) * (1 - 0.009 / len)));
          const p = surfaceOrNeck(q.x, q.y, 0.0026);
          if (p) pts.push(p);
        }
        if (pts.length < 3) return;
        const curve = new THREE.CatmullRomCurve3(pts);
        const tube = new THREE.Mesh(new THREE.TubeGeometry(curve, 64, 0.0009, 8, false), radMat());
        tube.renderOrder = 5;
        const end = curve.getPointAt(1), tan = curve.getTangentAt(1);
        const head = new THREE.Mesh(new THREE.ConeGeometry(0.0026, 0.0055, 16), radMat());
        head.material.opacity = 0.9;
        head.position.copy(end); head.quaternion.setFromUnitVectors(new THREE.Vector3(0, 1, 0), tan);
        head.renderOrder = 5;
        grp.add(tube, head);
        for (let i = 0; i < 3; i++) {
          const dot = new THREE.Mesh(new THREE.SphereGeometry(0.0016, 12, 8), radMat());
          dot.renderOrder = 6; dot.visible = !reduceMotion;
          grp.add(dot); flows.push({ dot, curve, off: i / 3 });
        }
      });
      g.add(grp);
      rad[id] = { grp, flows };
    });

    g.scale.setScalar(CHEST_S);
    g.position.set(0, CHEST_Y, 0);
    g.visible = false;
    scene.add(g);
    chest = { g, ribs, points, valves: cvalves, lines, rad, hits };
    setMode(state.mode);
  }

  // per-frame: the selected site and its valve turn red and pulse with the murmur's loudness
  function chestFrame(lvl, beat) {
    const m = byId[state.murmur];
    const site = activeValve; // the selected murmur's listening site (null for normal sounds)
    const vk = site ? SITE_VALVE[site] : null;
    const L = reduceMotion ? 0.5 : lvl;
    Object.entries(chest.points).forEach(([k, pt]) => {
      const on = k === site;
      pt.ring.material.color.set(on ? C.red500 : C.blue500);
      pt.ring.material.emissive.set(on ? C.red500 : C.blue500);
      pt.ring.material.emissiveIntensity = on ? 0.2 + 0.45 * L : 0.2;
      pt.face.material.color.set(on ? C.red100 : C.blue50);
      pt.face.material.emissive.set(on ? C.red300 : C.blue300);
      pt.face.material.emissiveIntensity = on ? 0.15 + 0.5 * L : 0.15;
      pt.pulse.scale.setScalar(on ? 1 + 0.22 * L * beat : 1);
      pt.label.material.map = pt.tex[on ? 1 : 0];
      chest.lines[k].material.color.set(on ? C.red500 : C.blue400);
      chest.lines[k].material.opacity = on ? 0.95 : 0.55;
      chest.lines[k].renderOrder = on ? 9.5 : 9;
    });
    Object.entries(chest.valves).forEach(([k, v]) => {
      const on = k === vk;
      v.rimM.color.set(on ? C.red500 : C.blue500);
      v.faceM.color.set(on ? C.red100 : C.blue100);
      v.seamM.color.set(on ? C.red700 : C.blue700);
      v.faceM.opacity = on ? 0.6 + 0.35 * L : 0.75;
      v.disc.scale.setScalar(on ? 1 + 0.3 * L * beat : 1);
    });
    const now = performance.now() / 1000;
    Object.entries(chest.rad).forEach(([id, r]) => {
      r.grp.visible = id === m.id;
      if (!r.grp.visible || reduceMotion) return;
      r.flows.forEach((f) => {
        const t = (now / 1.6 + f.off) % 1;
        f.dot.position.copy(f.curve.getPointAt(t));
        f.dot.material.opacity = Math.sin(Math.PI * t) * 0.9;
      });
    });
  }

  function setInfarct(terrs) { targetW = terrs; curW = 0; }

  function applyInfarct(progress) {
    if (real) {
      const { terr, inf, infAttr } = real;
      for (let i = 0; i < terr.length; i++) {
        let w = 0;
        if (targetW) for (const t of targetW) w = Math.max(w, terr[i][t]);
        // the infarct spreads from its core outward: weaker edges fill in last
        inf[i] = Math.max(0, Math.min(1, (w - (1 - progress) * 0.7) / 0.3)) * Math.min(1, w * 1.4);
      }
      infAttr.needsUpdate = true;
      return;
    }
    const red = new THREE.Color(C.red400), core = new THREE.Color(C.red600);
    const arr = colorAttr.array;
    for (let k = 0; k < terrIdx.length; k++) {
      let w = 0;
      if (targetW) for (const t of targetW) w = Math.max(w, terrIdx[k][t]);
      w *= progress;
      // the infarct grows from its core outward: weaker edges fill in last
      const edge = Math.max(0, Math.min(1, (w - (1 - progress) * 0.6) / 0.4));
      const c = red.clone().lerp(core, edge * 0.6);
      const b = [baseColors[k * 3], baseColors[k * 3 + 1], baseColors[k * 3 + 2]];
      arr[k * 3] = b[0] + (c.r - b[0]) * w; arr[k * 3 + 1] = b[1] + (c.g - b[1]) * w; arr[k * 3 + 2] = b[2] + (c.b - b[2]) * w;
    }
    colorAttr.needsUpdate = true;
  }

  function setCulprit(list, occl) {
    if (real) {
      Object.entries(real.vessels).forEach(([key, m]) => { m.visible = SHOW_ALL_ARTERIES || !!(list && list.includes(key)); });
      const v = occl && real.vessels[occl[0]];
      if (v) { occlusion.position.copy(v.userData.curve.getPointAt(occl[1])); occlusion.visible = true; } else occlusion.visible = false;
      return;
    }
    Object.entries(vessels).forEach(([k, m]) => {
      const on = list && list.includes(k);
      m.material.color.set(on ? C.red600 : C.blue600);
      m.material.emissive = new THREE.Color(on ? C.red500 : 0x000000);
      m.material.emissiveIntensity = on ? 0.25 : 0;
    });
    if (occl) {
      const v = vessels[occl[0]];
      occlusion.position.copy(v.userData.curve.getPointAt(occl[1]));
      occlusion.visible = true;
    } else occlusion.visible = false;
  }

  function setValve(site) { activeValve = site; }
  // Murmurs mode shows the chest (when it loaded); MI mode shows the heart alone, exactly as before
  function setMode(mode) {
    const murmur = mode === 'murmur';
    ['aortic', 'pulmonic', 'mitral', 'tricuspid'].forEach((k) => { valves[k].grp.visible = murmur && !chest; });
    placeHeart();
    if (murmur && chest) view('chest', { auto: true });
  }

  const VIEW_DIRS = { front: [0, 0.05, 1], left: [1, 0.05, 0.1], back: [0, 0.1, -1], below: [0.15, -0.7, 0.7], frontleft: [0.45, 0.08, 0.9], frontright: [-0.6, -0.1, 0.8], backbelow: [0.25, -0.5, -0.85], chest: [Math.sin(CHEST_AZ), 0.05, Math.cos(CHEST_AZ)] };
  function view(name, { auto = false } = {}) {
    const to = new THREE.Vector3(...VIEW_DIRS[name]).normalize().multiplyScalar(DIST);
    controls.autoRotate = false;
    camTween = { from: camera.position.clone(), to, t: 0 };
    if (auto) return;
    touched = true;
    $('.hl-heart').classList.add('is-touched');
  }

  const clock = new THREE.Clock();
  function frame() {
    const dt = clock.getDelta();
    // heartbeat: phase from the audio clock when sound plays, otherwise free-running
    const ap = AudioEngine.phase();
    const phase = ap !== null ? ap : ((performance.now() / 1000) / CYCLE) % 1;
    const sys = phase > 0.04 && phase < 0.36 ? Math.sin(((phase - 0.04) / 0.32) * Math.PI) : 0;
    const atr = phase > 0.86 ? Math.sin(((phase - 0.86) / 0.14) * Math.PI) : 0;
    const beat = reduceMotion ? 0 : 1;
    if (real) real.wrapG.scale.setScalar(real.base * (1 - 0.03 * sys * beat));
    else ventricle.scale.setScalar(1 - 0.045 * sys * beat);
    if (real) real.uniforms.uPulse.value = 0.5 + 0.5 * Math.sin(performance.now() / 260);

    // infarct grows in over ~0.9 s
    if (targetW !== null && curW < 1) { curW = reduceMotion ? 1 : Math.min(1, curW + dt / 0.9); applyInfarct(1 - Math.pow(1 - curW, 3)); }

    // valves: the active one pulses with the murmur's loudness
    const res = resolve(byId[state.murmur], state.man);
    const lvl = ap !== null ? Math.min(1, murmurLevel(res, ap) + (res.tr.some((t) => Math.abs(ap - t.t) < 0.03) ? 0.6 : 0)) : 0.35 + 0.25 * Math.sin(performance.now() / 300);
    ['aortic', 'pulmonic', 'mitral', 'tricuspid'].forEach((k) => {
      const v = valves[k];
      const on = activeValve && valves[activeValve] === v;
      v.ring.material.color.set(on ? C.red500 : C.blue500);
      v.dot.material.color.set(C.red500);
      v.dot.material.opacity = on ? 0.35 + 0.55 * lvl : 0;
      const s = on ? 1 + 0.5 * lvl * beat : 0.8;
      v.ring.scale.setScalar(s); v.dot.scale.setScalar(s);
      v.ring.quaternion.copy(camera.quaternion); v.dot.quaternion.copy(camera.quaternion);
      v.ring.quaternion.premultiply(v.grp.parent.quaternion.clone().invert());
      v.dot.quaternion.premultiply(v.grp.parent.quaternion.clone().invert());
    });

    if (chest && chest.g.visible) chestFrame(lvl, beat);

    if (occlusion.visible) occlusion.scale.setScalar((occlusion.userData.base || 1) * (1 + 0.25 * Math.sin(performance.now() / 180) * beat));

    if (camTween) {
      camTween.t = Math.min(1, camTween.t + dt / 0.9);
      const e = 1 - Math.pow(1 - camTween.t, 3);
      camera.position.lerpVectors(camTween.from, camTween.to, e).setLength(DIST);
      if (camTween.t >= 1) { camTween = null; swayT0 = performance.now(); }
    } else if (chest && chest.g.visible && !touched && !reduceMotion) {
      // a slow sway around the left-anterior oblique view keeps the chest alive without hiding the front
      const az = CHEST_AZ + 0.16 * Math.sin((performance.now() - swayT0) / 2600);
      camera.position.set(Math.sin(az), 0.05, Math.cos(az)).setLength(DIST);
    }
    controls.update();
    renderer.render(scene, camera);
  }

  function init() {
    try { build(); } catch (e) { $('#heartFallback').hidden = false; console.warn('Heart Lab: 3D unavailable', e); }
  }
  const safe = (fn) => (...a) => (ok ? fn(...a) : undefined);
  return { init, setInfarct: safe(setInfarct), setCulprit: safe(setCulprit), setValve: safe(setValve), setMode: safe(setMode), view: safe(view) };
})();

/* ============================================================
   7. 12-LEAD ECG
   ============================================================ */
const LEADS = {
  I: { p: 0.12, q: -0.05, r: 0.7, s: -0.1, t: 0.25 },
  II: { p: 0.15, q: -0.05, r: 1.1, s: -0.15, t: 0.3 },
  III: { p: 0.05, q: -0.05, r: 0.5, s: -0.15, t: 0.12 },
  aVR: { p: -0.12, q: 0, r: 0.1, s: -0.8, t: -0.25 },
  aVL: { p: 0.05, q: -0.05, r: 0.4, s: -0.2, t: 0.1 },
  aVF: { p: 0.1, q: -0.05, r: 0.8, s: -0.15, t: 0.2 },
  V1: { p: 0.08, q: 0, r: 0.2, s: -0.9, t: 0.05 },
  V2: { p: 0.1, q: 0, r: 0.4, s: -1.2, t: 0.35 },
  V3: { p: 0.1, q: 0, r: 0.7, s: -0.7, t: 0.4 },
  V4: { p: 0.1, q: -0.05, r: 1.2, s: -0.4, t: 0.4 },
  V5: { p: 0.1, q: -0.08, r: 1.3, s: -0.2, t: 0.3 },
  V6: { p: 0.1, q: -0.08, r: 1.0, s: -0.1, t: 0.25 },
};
const GRID = [['I', 'aVR', 'V1', 'V4'], ['II', 'aVL', 'V2', 'V5'], ['III', 'aVF', 'V3', 'V6']];
const gauss = (x, mu, sd) => Math.exp(-((x - mu) ** 2) / (2 * sd * sd));
const smooth = (a, b, x) => { const t = Math.max(0, Math.min(1, (x - a) / (b - a))); return t * t * (3 - 2 * t); };

function ecgValue(lead, tau, mi) {
  const L = LEADS[lead];
  const st = (mi && mi.st[lead]) || 0;
  const r = L.r + ((mi && mi.rBoost && mi.rBoost[lead]) || 0);
  let tAmp = L.t + ((mi && mi.tBoost && mi.tBoost[lead]) || 0);
  if (st > 0) tAmp += st * 0.7; // hyperacute T merging with the raised ST
  let y = L.p * gauss(tau, 0.1, 0.022)
    + L.q * gauss(tau, 0.205, 0.008)
    + r * gauss(tau, 0.222, 0.009)
    + L.s * gauss(tau, 0.242, 0.01)
    + tAmp * gauss(tau, 0.42, 0.05);
  // ST shift: from the J point, convex when elevated, flowing into T
  y += st * smooth(0.245, 0.27, tau) * (1 - smooth(0.42, 0.52, tau)) * (st > 0 ? 1 + 0.25 * Math.sin(Math.PI * smooth(0.26, 0.44, tau)) : 1);
  return y;
}

const ecg = $('#ecgCanvas');
let ecgAnim = null;
function drawECG(progress = 1) {
  if (!ecg.clientWidth) return;
  const mi = miById[state.mi];
  const cssW = ecg.clientWidth;
  const mm = cssW / 250; // 4 columns x 2.5 s x 25 mm/s
  const rowH = 30 * mm;
  const cssH = rowH * 4;
  ecg.style.height = cssH + 'px';
  const { w, h, dpr } = sizeCanvas(ecg, cssH);
  const ctx = ecg.getContext('2d');
  ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
  ctx.clearRect(0, 0, w, h);

  // lead tints
  GRID.forEach((row, ri) => row.forEach((lead, ci) => {
    const st = mi.st[lead] || 0;
    if (!st) return;
    ctx.fillStyle = st > 0 ? C.red50 : C.blue50;
    ctx.fillRect(ci * 62.5 * mm, ri * rowH, 62.5 * mm, rowH);
  }));

  // paper
  for (let x = 0; x <= 250; x++) {
    ctx.strokeStyle = x % 5 ? C.red100 : C.red200; ctx.lineWidth = x % 5 ? 0.5 : 0.9;
    ctx.beginPath(); ctx.moveTo(x * mm, 0); ctx.lineTo(x * mm, h); ctx.stroke();
  }
  for (let y = 0; y <= 120; y++) {
    ctx.strokeStyle = y % 5 ? C.red100 : C.red200; ctx.lineWidth = y % 5 ? 0.5 : 0.9;
    ctx.beginPath(); ctx.moveTo(0, y * mm); ctx.lineTo(w, y * mm); ctx.stroke();
  }

  const RR = 0.8;
  const traceTo = progress * 10; // seconds of paper drawn
  const drawTrace = (lead, x0, y0, secs, offset) => {
    ctx.beginPath();
    let started = false;
    for (let i = 0; i <= secs * 250; i++) {
      const s = i / 250;
      if (offset + s > traceTo) break;
      const tau = ((s + offset + 0.35) % RR);
      const v = ecgValue(lead, tau, mi);
      const x = x0 + s * 25 * mm, y = y0 - v * 10 * mm;
      started ? ctx.lineTo(x, y) : (ctx.moveTo(x, y), started = true);
    }
    ctx.strokeStyle = C.ink900; ctx.lineWidth = 1.5; ctx.lineJoin = 'round'; ctx.stroke();
  };

  GRID.forEach((row, ri) => row.forEach((lead, ci) => {
    const x0 = ci * 62.5 * mm, y0 = ri * rowH + rowH * 0.58;
    drawTrace(lead, x0 + 1, y0, 2.5, ci * 2.5);
    const st = mi.st[lead] || 0;
    ctx.font = `${st ? 600 : 500} ${Math.max(11, 3.2 * mm)}px "JetBrains Mono", monospace`;
    ctx.fillStyle = st > 0 ? C.red700 : st < 0 ? C.blue700 : C.ink700;
    ctx.fillText(lead + (st > 0 ? ' ↑' : st < 0 ? ' ↓' : ''), x0 + 2 * mm, ri * rowH + 5 * mm);
    if (ci) { ctx.strokeStyle = C.ink400; ctx.lineWidth = 1; ctx.beginPath(); ctx.moveTo(x0, y0 - 4 * mm); ctx.lineTo(x0, y0 + 4 * mm); ctx.stroke(); }
  }));
  // rhythm strip
  drawTrace('II', 1, 3 * rowH + rowH * 0.58, 10, 0);
  ctx.font = `500 ${Math.max(11, 3.2 * mm)}px "JetBrains Mono", monospace`;
  ctx.fillStyle = C.ink700; ctx.fillText('II (rhythm)', 2 * mm, 3 * rowH + 5 * mm);
}

function animateECG() {
  cancelAnimationFrame(ecgAnim);
  if (reduceMotion) { drawECG(1); return; }
  const t0 = performance.now();
  const step = (now) => {
    const p = Math.min(1, (now - t0) / 1100);
    drawECG(1 - Math.pow(1 - p, 2));
    if (p < 1) ecgAnim = requestAnimationFrame(step);
  };
  ecgAnim = requestAnimationFrame(step);
}

/* ============================================================
   8. ACTIONS
   ============================================================ */
function selectMurmur(id, { play = false } = {}) {
  state.murmur = id;
  if (state.mode !== 'murmur') setMode('murmur');
  syncMurmurUI();
  if (AudioEngine.playing && !Quiz.active) AudioEngine.update(resolve(byId[id], state.man));
  if (play) startListening();
}

function pickSite(site) {
  state.site = site;
  const here = MURMURS.filter((m) => m.site === site && m.id !== 'NORMAL');
  if (site === 'aortic' && !here.length) return;
  const keep = here.find((m) => m.id === state.murmur);
  selectMurmur(keep ? keep.id : (here[0] || byId.AS).id);
}

function selectMI(id) {
  state.mi = id;
  const m = miById[id];
  $$('[data-mi]').forEach((b) => { const on = b.dataset.mi === id; b.classList.toggle('is-on', on); b.setAttribute('aria-pressed', on); });
  renderMiPanel();
  Heart.setInfarct(m.terr);
  Heart.setCulprit(m.culprit, m.occl);
  Heart.view(m.view);
  renderLegend();
  animateECG();
}

function renderLegend() {
  const L = $('#heartLegend');
  if (state.mode === 'mi') {
    const m = miById[state.mi];
    L.innerHTML = `<span class="hl-leg hl-leg--infarct"><i></i>Dying muscle (turns pale)</span><span class="hl-leg hl-leg--culprit"><i></i>Blocked artery: ${m.art}</span>`;
  } else {
    L.innerHTML = `<span class="hl-leg hl-leg--cap">Murmur Man: tap a listening point</span><span class="hl-leg hl-leg--site"><i></i>Listening point</span><span class="hl-leg hl-leg--valve"><i></i>Valve</span><span class="hl-leg hl-leg--spread"><i></i>Spreads to</span>`;
  }
}

function setMode(mode) {
  state.mode = mode;
  app.dataset.mode = mode;
  $$('[data-mode-btn]').forEach((b) => b.setAttribute('aria-selected', b.dataset.modeBtn === mode));
  $$('[data-show]').forEach((el) => { el.hidden = el.dataset.show !== mode; });
  if (mode === 'mi') {
    stopListening();
    Heart.setMode('mi');
    selectMI(state.mi);
  } else {
    Heart.setMode('murmur');
    Heart.setInfarct(null); Heart.setCulprit(null, null);
    Heart.setInfarct([]);
    renderLegend();
    syncMurmurUI();
  }
}

/* Listen */
const playBtn = $('#playBtn');
function setPlayBtn(on) {
  playBtn.setAttribute('aria-pressed', on);
  playBtn.innerHTML = `<i data-lucide="${on ? 'square' : 'play'}" width="18" height="18" aria-hidden="true"></i><span>${on ? 'Stop' : 'Listen'}</span>`;
  icons();
}
let pcgLoop = null;
function startListening() {
  Quiz.reset();
  AudioEngine.play(resolve(byId[state.murmur], state.man));
  setPlayBtn(true);
  cancelAnimationFrame(pcgLoop);
  const loop = () => { drawPCG(); if (AudioEngine.playing && !Quiz.active) pcgLoop = requestAnimationFrame(loop); else drawPCG(); };
  loop();
}
function stopListening() { AudioEngine.stop(true); setPlayBtn(false); drawPCG(); }
AudioEngine.onStop = () => setPlayBtn(false);

/* ============================================================
   9. QUIZ
   ============================================================ */
const Quiz = {
  active: false, answer: null, right: 0, total: 0, locked: false,
  pool: MURMURS.filter((m) => m.id !== 'NORMAL'),
  newRound() {
    const pick = this.pool[Math.floor(Math.random() * this.pool.length)];
    this.answer = pick.id; this.locked = false;
    const opts = [pick];
    while (opts.length < 4) { const o = this.pool[Math.floor(Math.random() * this.pool.length)]; if (!opts.includes(o)) opts.push(o); }
    opts.sort(() => Math.random() - 0.5);
    $('#quizOpts').innerHTML = opts.map((o) => `<button class="hl-quiz__opt" data-answer="${o.id}">${o.name}</button>`).join('');
    $('#quizFb').textContent = 'Listen, then choose.';
  },
  play() {
    if (!this.answer || this.locked) this.newRound();
    stopListening();
    this.active = true;
    const btn = $('#quizPlay');
    btn.setAttribute('aria-pressed', 'true');
    btn.querySelector('span').textContent = 'Playing…';
    AudioEngine.play(resolve(byId[this.answer], 'rest'), { cycles: 4, onEnd: () => this.done() });
  },
  done() {
    this.active = false;
    const btn = $('#quizPlay');
    btn.setAttribute('aria-pressed', 'false');
    btn.querySelector('span').textContent = this.locked ? 'Next mystery murmur' : 'Play it again';
  },
  reset() { if (this.active) { AudioEngine.stop(true); this.done(); } },
  choose(id) {
    if (this.locked || !this.answer) return;
    this.locked = true; this.total += 1;
    const right = id === this.answer; if (right) this.right += 1;
    $$('.hl-quiz__opt').forEach((b) => { b.disabled = true; if (b.dataset.answer === this.answer) b.classList.add('is-right'); else if (b.dataset.answer === id) b.classList.add('is-wrong'); });
    const m = byId[this.answer];
    $('#quizFb').innerHTML = `${right ? '<b>Right.</b>' : `<b>Not quite.</b> It was ${m.name}.`} ${m.facts.Timing.replace(/<[^>]+>/g, '')} <button class="hl-link" data-go-murmur="${m.id}">See it on Murmur Man</button>`;
    $('#quizScore').textContent = `${this.right} of ${this.total} right`;
    if (!this.active) this.done();
  },
};

/* ============================================================
   10. WIRING
   ============================================================ */
function init() {
  renderMurmurList();
  renderMiList();
  Heart.init();
  renderLegend();
  syncMurmurUI();
  icons();

  document.addEventListener('click', (e) => {
    const t = e.target.closest('button, [data-site]');
    if (!t) return;
    if (t.dataset.modeBtn) setMode(t.dataset.modeBtn);
    else if (t.dataset.murmur) { state.site = null; selectMurmur(t.dataset.murmur); }
    else if (t.dataset.goMurmur) { state.site = null; selectMurmur(t.dataset.goMurmur, { play: true }); $('#hlStage').scrollIntoView({ behavior: reduceMotion ? 'auto' : 'smooth', block: 'start' }); }
    else if (t.dataset.mi) selectMI(t.dataset.mi);
    else if (t.dataset.view) Heart.view(t.dataset.view);
    else if (t.dataset.site) pickSite(t.dataset.site);
    else if (t.dataset.man) {
      state.man = t.dataset.man;
      $$('[data-man]').forEach((b) => { const on = b.dataset.man === state.man; b.classList.toggle('is-on', on); b.setAttribute('aria-pressed', on); });
      renderManNote(); drawPCG();
      if (AudioEngine.playing && !Quiz.active) AudioEngine.update(resolve(byId[state.murmur], state.man));
    } else if (t.id === 'playBtn') { AudioEngine.playing && !Quiz.active ? stopListening() : startListening(); }
    else if (t.id === 'quizPlay') Quiz.play();
    else if (t.dataset.answer) Quiz.choose(t.dataset.answer);
  });
  // mode tabs: arrow keys
  $('.hl-modes').addEventListener('keydown', (e) => {
    if (e.key !== 'ArrowLeft' && e.key !== 'ArrowRight') return;
    const next = state.mode === 'murmur' ? 'mi' : 'murmur';
    setMode(next); $(`[data-mode-btn="${next}"]`).focus();
  });

  let rt;
  window.addEventListener('resize', () => { clearTimeout(rt); rt = setTimeout(() => { drawPCG(); if (state.mode === 'mi') drawECG(1); }, 120); });
  document.addEventListener('visibilitychange', () => { if (document.hidden && AudioEngine.playing) { stopListening(); Quiz.reset(); } });
  Quiz.newRound();
}

init();
