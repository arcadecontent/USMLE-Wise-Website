<?php
/**
 * Front controller, required at the top of index.php.
 *
 * Production runs nginx (CloudPanel), which ignores .htaccess and funnels
 * every URL that is not a real file into index.php. This file resolves the
 * request: serve the matching page, 301 legacy WordPress/HTML URLs to their
 * new home, or 404. The .htaccess is kept for Apache environments; the rule
 * set here must stay in sync with it.
 */

(function (): void {
    $reqPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
    $path = trim(rawurldecode($reqPath), '/');
    if ($path === '') {
        return; // homepage — let index.php render
    }

    $qs = $_SERVER['QUERY_STRING'] ?? '';
    $redirect = function (string $to) use ($qs): void {
        if ($qs !== '') {
            $to .= (strpos($to, '?') !== false ? '&' : '?') . $qs;
        }
        header('Location: ' . $to, true, 301);
        exit;
    };

    $slug = strtolower($path);
    $hadExtension = false;
    if (preg_match('#^(.+)\.(html|php)$#', $slug, $m)) {
        $slug = $m[1];
        $hadExtension = true;
    }
    if ($slug === 'index') {
        $redirect('/');
    }

    $isPage = function (string $s): bool {
        return preg_match('/\A[a-z0-9-]+\z/', $s) === 1
            && !in_array($s, ['index', 'router', 'routes', '404'], true)
            && is_file(__DIR__ . '/' . $s . '.php');
    };

    // Existing page: canonicalize (.html/.php suffix or trailing slash) or serve.
    if ($isPage($slug)) {
        if ($hadExtension || $reqPath !== '/' . $slug) {
            $redirect('/' . $slug);
        }
        require __DIR__ . '/' . $slug . '.php';
        exit;
    }

    // Legacy URLs -> new pages. Keys are old slugs (no leading/trailing slash).
    $legacy = [
        // Nested/alternate slugs from the previous static-site era
        'coaching/step-1-crash-course'  => '/step-1-high-yield-crash-course',
        'coaching-step-1-crash-course'  => '/step-1-high-yield-crash-course',
        'coaching-step1-crash-course'   => '/step-1-high-yield-crash-course',
        'coaching/step-1-mastery'       => '/coaching-step1-mastery',
        'coaching-step-1-mastery'       => '/coaching-step1-mastery',
        'coaching/step-1-review'        => '/coaching-step1-review',
        'coaching-step-1-review'        => '/coaching-step1-review',
        'coaching/nbme-style-coaching'  => '/coaching-step23-mastery',
        'coaching-nbme-style-coaching'  => '/coaching-step23-mastery',
        'coaching/tutoring'             => '/coaching-tutoring',
        'match/lor-editing'             => '/match-lor',
        'match-lor-editing'             => '/match-lor',
        'match/personal-statement'      => '/match-ps3x',
        'match-personal-statement'      => '/match-ps3x',
        'match/interview-prep'          => '/match-interview',
        'match-interview-prep'          => '/match-interview',
        'match/eras-cv'                 => '/match-eras-cv',
        'research/catalyst'             => '/research-catalyst',
        'research/original-research'    => '/research-original',
        'research-original-research'    => '/research-original',
        'research/review-paper'         => '/research-review',
        'research-review-paper'         => '/research-review',
        'research/masterclass'          => '/research-masterclass',
        'research/junior-scientist'     => '/research-junior-scientist',
        'rotations/browse'              => '/clinical-rotations',
        'case-studies/ahmed'            => '/case-study-ahmed',
        'faq'                           => '/qa',
        'privacy-policy'                => '/policy',

        // Old WordPress site — coaching
        'crash-course'                    => '/step-1-high-yield-crash-course',
        'crash-course-step-1'             => '/step-1-high-yield-crash-course',
        'step-1-crash-course'             => '/step-1-high-yield-crash-course',
        'crash-course-test'               => '/step-1-high-yield-crash-course',
        'manik-test-crash-course'         => '/step-1-high-yield-crash-course',
        'step-1-course'                   => '/coaching-step1-mastery',
        'usmle-mastery'                   => '/coaching-step1-mastery',
        'usmle-step-1-mastery'            => '/coaching-step1-mastery',
        'usmle-step-2-crash-course'       => '/coaching-step23-mastery',
        'step-2-crash-course'             => '/coaching-step23-mastery',
        'usmle-step-exam-readiness'       => '/coaching',
        'usmle-exam-n-1-coaching'         => '/coaching',
        'usmlewise-60-minute-strategy-session' => '/coaching',
        'book-your-free-stratergy-call'   => '/coaching',
        'guidance-call'                   => '/coaching',
        'usmlewise-hybrid-mentorship-program' => '/coaching',
        'eb-all-courses'                  => '/coaching',
        'eb-courses'                      => '/coaching',
        'eb-my-courses'                   => '/coaching',
        'eb-single-course'                => '/coaching',
        'my-courses-new'                  => '/coaching',
        'online-courses'                  => '/coaching',
        'online-courses-2'                => '/coaching',
        'enroll'                          => '/coaching',

        // Old WordPress site — research
        'usmle-xponential-catalyst'       => '/research-catalyst',
        'usmle-xponential-catalyst-premium-package' => '/research-catalyst',
        'xponential-advantage'            => '/research-catalyst',
        'rc-level-1'                      => '/research-catalyst',
        'acc-research'                    => '/research',
        'research-programs'               => '/research',
        'research-course'                 => '/research-masterclass',
        'cdc-wonder-masterclass'          => '/research-masterclass',
        'beginner-research'               => '/research-masterclass',
        'research-workshop-beginner'      => '/research-masterclass',
        'guided-research-program'         => '/research-junior-scientist',
        'junior-scientist-program'        => '/research-junior-scientist',
        'letter-to-editor-series'         => '/research-review',
        'fastrack-narrative'              => '/research-review',
        'ma'                              => '/research-review',
        'narrative-review-cohort-1'       => '/research-review',
        'polio-project'                   => '/research',
        'polio-project-2'                 => '/research',
        'post-webinar-polio'              => '/research',
        'research-webinar-polio'          => '/research',
        'rapid-research'                  => '/research',
        'rapid-research-for-the-match'    => '/research',
        'rapid-research-masterclass'      => '/research',
        'match-worthy-research'           => '/research',
        'crist-project'                   => '/research',
        'signature-scholar-program'       => '/research',
        'webinar-research'                => '/research',

        // Old WordPress site — match
        'match-package'                   => '/match',
        'soap-support'                    => '/match',
        'match-membership'                => '/match',
        'match-membership-2'              => '/match',
        'membership-match'                => '/match',
        'lor'                             => '/match-lor',
        'eras-cv'                         => '/match-eras-cv',
        'eras-cv-feedback'                => '/match-eras-cv',
        'cv-building'                     => '/match-eras-cv',
        'webinar-how-to-craft-a-match-worthy-cv' => '/match-eras-cv',
        'personal-statement'              => '/match-ps3x',
        'ps3x-masterclass'                => '/match-ps3x',
        'ps-masterclass'                  => '/match-ps3x',
        'ps-chechlist'                    => '/match-ps3x',
        'interview-preparation'           => '/match-interview',
        'interview-prep-2'                => '/match-interview',
        'interview-buddy'                 => '/match-interview',
        'interview-prep-post-webinar'     => '/match-interview',
        'buddy'                           => '/match-interview',

        // Old WordPress site — rotations, social proof, legal
        'available-rotations'             => '/clinical-rotations',
        'observers-edge'                  => '/clinical-rotations',
        'clients'                         => '/testimonials',
        'clients-2'                       => '/testimonials',
        'case-report-dr-kaushik'          => '/testimonials',
        'cookie-policy'                   => '/policy',
        'privacy-policy-2'                => '/policy',
        'terms-of-service'                => '/policy',
        'refund_returns'                  => '/policy',

        // Old WordPress site — everything else lands on home
        'about'                => '/', 'about-us'            => '/',
        'home'                 => '/', 'services'            => '/',
        'services-offered'     => '/', 'blog-home'           => '/',
        'free-resources'       => '/', 'contact'             => '/',
        'csv-converter'        => '/', 'track-your-usmle-study-progress-daily' => '/',
        'divine-intervention'  => '/', 'draft-29'            => '/',
        'user-account'         => '/', 'user-account-new'    => '/',
        'medical-school-webinar' => '/', 'webinar'           => '/',
        'webinar-2'            => '/', 'webinars'            => '/',
        'step-2-webinar'       => '/', 'step-2-webinar-dr-manik' => '/',
        'unsubscribe'          => '/', 'unsubscribe-2'       => '/',
        'thank-you-for-purchase' => '/', 'cart'              => '/',
        'checkout'             => '/', 'my-account'          => '/',
        'shop'                 => '/', 'clinical-trial-portal' => '/',
        'fda-assistant'        => '/', 'fsmb-guide'          => '/',
        'fsmbguide'            => '/', 'us-visa'             => '/',
        'visa-masterclass'     => '/', 'past-webinars'       => '/',
        'post'                 => '/', 'post-payment-webinar' => '/',
        'masterclass-2026-webinar' => '/', 'webinar-guide-call' => '/',
        'social-media-internship' => '/', 'team-tasks'       => '/',
        'testing'              => '/', 'whatsapp'            => '/',
    ];
    if (isset($legacy[$slug])) {
        $redirect($legacy[$slug]);
    }

    // Prefix rules
    if (strpos($slug, 'payment-confirmation') === 0) {
        $redirect('/');
    }
    if (strpos($slug, 'blog/') === 0) {
        $rest = substr($slug, strlen('blog/'));
        if ($rest !== '' && preg_match('/\A[a-z0-9-]+\z/', $rest)) {
            // Canonicalize (.html/.php suffix or trailing slash), then serve.
            if ($hadExtension || $reqPath !== '/blog/' . $rest) {
                $redirect('/blog/' . $rest);
            }
            require __DIR__ . '/blog-post.php';
            exit;
        }
        $redirect('/blog');
    }
    if (strpos($slug, 'rotations/') === 0) {
        $rest = substr($slug, strlen('rotations/'));
        $redirect($isPage('rotation-' . $rest) ? '/rotation-' . $rest : '/clinical-rotations');
    }
    if (strpos($slug, 'product/') === 0) {
        $p = substr($slug, strlen('product/'));
        $productMap = [
            '/step-1-high-yield-crash-course' => ['crash-course', 'step-1'],
            '/coaching'                    => ['nbme', 'coaching'],
            '/match-eras-cv'               => ['eras-cv'],
            '/match-lor'                   => ['lor'],
            '/match-ps3x'                  => ['personal-statement', 'psx3', 'ps3x', 'psx'],
            '/match-interview'             => ['interview', 'iv-prep'],
            '/research-catalyst'           => ['catalyst'],
            '/research'                    => ['meta-analysis', 'narrative', 'review', 'abstract', 'research', 'systematic', 'scholar'],
            '/clinical-rotations'          => ['rotation', 'usce'],
            '/match'                       => ['match'],
        ];
        foreach ($productMap as $target => $needles) {
            foreach ($needles as $needle) {
                if (strpos($p, $needle) !== false) {
                    $redirect($target);
                }
            }
        }
        $redirect('/');
    }

    http_response_code(404);
    require __DIR__ . '/404.php';
    exit;
})();
