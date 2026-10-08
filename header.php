<?php
require_once 'i18n.php';
$headingFontClass = $lang === 'ar' ? 'font-arabic font-bold' : 'font-heading font-semibold';
$bodyFontClass = $lang === 'ar' ? 'font-arabic' : 'font-sans';
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>" dir="<?= $dir ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title><?= isset($page_title) ? $page_title : 'Desert Iron | Structural Steel & Construction' ?></title>
    
    <!-- Favicons & Touch Icons -->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="icon" type="image/svg+xml" href="public/images/favicon.svg">
    <link rel="icon" type="image/png" sizes="32x32" href="public/images/favicon-32x32.png">
    <link rel="apple-touch-icon" sizes="180x180" href="public/images/apple-touch-icon.png">
    <meta name="theme-color" content="#1F2A27">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&family=Montserrat:wght@500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- AOS Library for Scroll Reveal -->
    

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        charcoal: '#1F2A27',
                        steel: '#6B7280',
                        saudi: '#006B3F',
                        sand: '#D8C9A7',
                        offwhite: '#F5F5F2',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Montserrat', 'sans-serif'],
                        arabic: ['IBM Plex Sans Arabic', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        /* CSS Clamp Fluid Typography & Touch UX */
        html { scroll-behavior: smooth; overflow-x: hidden; }
        body { overflow-x: hidden; width: 100%; max-width: 100%; }
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        .safe-pb { padding-bottom: env(safe-area-inset-bottom, 1rem); }
        .safe-mb { margin-bottom: env(safe-area-inset-bottom, 1rem); }
        
        /* Prevent iOS Zoom on Inputs */
        input, select, textarea { font-size: 16px !important; }

        /* Scroll Reveal & Motion Animations */
        .reveal-on-scroll {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity 0.6s cubic-bezier(0.16, 1, 0.3, 1), transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
            will-change: opacity, transform;
        }
        .reveal-on-scroll.is-visible {
            opacity: 1;
            transform: translateY(0);
        }
        .reveal-scale {
            opacity: 0;
            transform: scale(0.96) translateY(12px);
            transition: opacity 0.5s cubic-bezier(0.16, 1, 0.3, 1), transform 0.5s cubic-bezier(0.16, 1, 0.3, 1);
            will-change: opacity, transform;
        }
        .reveal-scale.is-visible {
            opacity: 1;
            transform: scale(1) translateY(0);
        }

        /* Hero & Hover Animations */
        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-16px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(16px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes pulseGlow {
            0%, 100% { box-shadow: 0 0 0 0 rgba(0, 107, 63, 0.4); }
            50% { box-shadow: 0 0 0 10px rgba(0, 107, 63, 0); }
        }

        .animate-fade-down { animation: fadeInDown 0.7s cubic-bezier(0.16, 1, 0.3, 1) forwards; }
        .animate-fade-up { animation: fadeInUp 0.7s cubic-bezier(0.16, 1, 0.3, 1) forwards; }
        .animate-pulse-glow { animation: pulseGlow 2.5s infinite; }

        .hover-lift {
            transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.3s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.3s ease;
        }
        .hover-lift:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 32px -8px rgba(0, 0, 0, 0.15);
        }

        /* Interactive Card & Link Hover Effects */
        .grid > a, .grid > div.bg-white {
            transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.35s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.3s ease;
        }
        .grid > a:hover, .grid > div.bg-white:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 32px -8px rgba(0, 107, 63, 0.12);
            border-color: rgba(0, 107, 63, 0.5) !important;
        }

        /* Button Cursor Hover Shine Effect */
        a.bg-saudi, button.bg-saudi, a.bg-charcoal, button.bg-charcoal {
            position: relative;
            overflow: hidden;
            transition: transform 0.25s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.25s cubic-bezier(0.16, 1, 0.3, 1), background-color 0.25s ease;
        }
        a.bg-saudi:hover, button.bg-saudi:hover, a.bg-charcoal:hover, button.bg-charcoal:hover {
            transform: translateY(-2px) scale(1.02);
            box-shadow: 0 8px 20px -4px rgba(0, 107, 63, 0.35);
        }
        a.bg-saudi:active, button.bg-saudi:active {
            transform: translateY(0) scale(0.98);
        }

        /* Button Sweep Highlight */
        a.bg-saudi::after, button.bg-saudi::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -60%;
            width: 50%;
            height: 200%;
            background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,0.25) 50%, rgba(255,255,255,0) 100%);
            transform: rotate(25deg);
            transition: all 0.65s ease;
            pointer-events: none;
        }
        a.bg-saudi:hover::after, button.bg-saudi:hover::after {
            left: 130%;
        }

        /* Nav Link Hover Animated Underline */
        nav a:not(.bg-saudi) {
            position: relative;
        }
        nav a:not(.bg-saudi)::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #006B3F;
            transition: width 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }
        nav a:not(.bg-saudi):hover::after {
            width: 100%;
        }

        @media (prefers-reduced-motion: reduce) {
            .reveal-on-scroll, .reveal-scale, .grid > a, .grid > div.bg-white {
                opacity: 1 !important;
                transform: none !important;
                transition: none !important;
            }
        }
    </style>
</head>
<body class="bg-offwhite text-charcoal <?= $bodyFontClass ?> antialiased selection:bg-saudi selection:text-white flex flex-col min-h-screen">

    <!-- Accessibility Skip Link -->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-2 focus:start-2 focus:z-[100] focus:bg-saudi focus:text-white focus:px-4 focus:py-2 focus:rounded-sm focus:shadow-xl font-bold text-xs uppercase tracking-widest">
        Skip to main content
    </a>

    <!-- Top Corporate Bar (Hidden on Mobile for Compact Efficiency) -->
    <div class="bg-charcoal border-b border-gray-800 text-gray-400 text-xs py-2 hidden md:block">
        <div class="container mx-auto px-4 lg:px-6 max-w-7xl flex justify-between items-center">
            <div class="flex items-center gap-6">
                <a href="tel:+966599510213" class="flex items-center gap-2 hover:text-white transition-colors">
                    <svg class="w-3.5 h-3.5 text-saudi" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    <span dir="ltr">+966 59 951 0213</span>
                </a>
                <a href="mailto:sales@desertiron.com" class="flex items-center gap-2 hover:text-white transition-colors">
                    <svg class="w-3.5 h-3.5 text-saudi" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    sales@desertiron.com
                </a>
            </div>
            <div class="flex items-center gap-4">
                <span class="flex items-center gap-2">
                    <svg class="w-3.5 h-3.5 text-saudi" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                    Dammam, Saudi Arabia
                </span>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <header class="bg-charcoal text-white sticky top-0 z-50 shadow-md h-16 md:h-20 flex items-center transition-all duration-300 border-b border-gray-800/80">
        <div class="container mx-auto px-4 lg:px-6 max-w-7xl flex justify-between items-center w-full">
            
            <!-- Official Logo (Prominent & High-Contrast on Mobile & Desktop) -->
            <a href="index.php" class="flex items-center gap-3 group shrink-0 py-1 min-h-[44px]">
                <img src="public/images/logo-white.png" alt="Desert Iron Steel & Construction" class="h-10 sm:h-12 md:h-14 w-auto max-w-[180px] sm:max-w-[220px] object-contain transition-transform group-hover:scale-105 filter drop-shadow-md">
            </a>

            <!-- Desktop Navigation Links (>= 1024px) -->
            <nav class="hidden lg:flex items-center gap-6 xl:gap-8 font-medium text-sm text-gray-300">
                <a href="index.php" class="hover:text-white transition-colors py-2"><?= t('home') ?></a>
                <a href="about.php" class="hover:text-white transition-colors py-2"><?= t('about') ?></a>
                
                <!-- Services Desktop Mega Dropdown -->
                <div class="group relative py-2">
                    <a href="services.php" class="hover:text-white transition-colors flex items-center gap-1 cursor-pointer">
                        <?= t('services') ?> 
                        <svg class="w-4 h-4 text-gray-500 group-hover:text-saudi transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </a>
                    <div class="absolute top-full <?= $lang === 'ar' ? 'right-0' : 'left-0' ?> w-72 bg-white text-charcoal shadow-2xl rounded-sm opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 py-2 border-t-2 border-saudi flex flex-col mt-2">
                        <a href="structural-steel.php" class="px-5 py-2.5 hover:bg-offwhite hover:text-saudi text-sm border-b border-gray-100 font-medium">Structural Steel Fabrication & Erection</a>
                        <a href="pre-engineered-buildings.php" class="px-5 py-2.5 hover:bg-offwhite hover:text-saudi text-sm border-b border-gray-100 font-medium">Pre-Engineered Buildings (PEB)</a>
                        <a href="industrial-construction.php" class="px-5 py-2.5 hover:bg-offwhite hover:text-saudi text-sm border-b border-gray-100 font-medium">Industrial Construction</a>
                        <a href="pipeline-piping.php" class="px-5 py-2.5 hover:bg-offwhite hover:text-saudi text-sm border-b border-gray-100 font-medium">Pipeline & Industrial Piping</a>
                        <a href="roof-wall-cladding.php" class="px-5 py-2.5 hover:bg-offwhite hover:text-saudi text-sm border-b border-gray-100 font-medium">Roof & Wall Cladding</a>
                        <a href="standing-seam-roofing.php" class="px-5 py-2.5 hover:bg-offwhite hover:text-saudi text-sm border-b border-gray-100 font-medium">Standing Seam Roofing Systems</a>
                        <a href="misc-metal-works.php" class="px-5 py-2.5 hover:bg-offwhite hover:text-saudi text-sm border-b border-gray-100 font-medium">Miscellaneous Metal Works</a>
                        <a href="fireproofing-works.php" class="px-5 py-2.5 hover:bg-offwhite hover:text-saudi text-sm border-b border-gray-100 font-medium">Fireproofing Works</a>
                        <a href="civil-works.php" class="px-5 py-2.5 hover:bg-offwhite hover:text-saudi text-sm font-medium border-b border-gray-100">Civil Works</a>
                        <a href="fit-out-works.php" class="px-5 py-2.5 hover:bg-offwhite hover:text-saudi text-sm font-medium">Fit-Out Works</a>
                        <div class="bg-gray-50 mt-1 pt-1 border-t border-gray-200">
                            <a href="services.php" class="block px-5 py-3 hover:text-saudi text-xs font-bold uppercase tracking-widest text-saudi">View All Services &rarr;</a>
                        </div>
                    </div>
                </div>

                <a href="industries.php" class="hover:text-white transition-colors py-2"><?= isset($translations[$lang]['industries']) ? $translations[$lang]['industries'] : 'Industries' ?></a>
                <a href="projects.php" class="hover:text-white transition-colors py-2"><?= t('projects') ?></a>
                <a href="news.php" class="hover:text-white transition-colors py-2"><?= isset($translations[$lang]['news']) ? $translations[$lang]['news'] : 'Insights / News' ?></a>
                <a href="contact.php" class="hover:text-white transition-colors py-2"><?= t('contact') ?></a>
            </nav>

            <!-- Desktop Right Actions -->
            <div class="hidden lg:flex items-center gap-5">
                <a href="?lang=<?= t('switch_lang_code') ?>" class="text-gray-300 hover:text-saudi transition-colors font-arabic font-medium text-sm flex items-center gap-1.5 border-e border-gray-700 pe-5 min-h-[44px]">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path></svg>
                    <?= t('switch_lang') ?>
                </a>
                <a href="quote.php" class="bg-saudi text-white px-6 py-2.5 rounded-lg font-bold text-xs uppercase tracking-widest hover:bg-emerald-700 transition-colors shadow-md min-h-[44px] flex items-center">
                    <?= t('get_quote') ?>
                </a>
            </div>

            <!-- Mobile Header Actions (Prominent Logo Support & Hamburger) -->
            <div class="flex items-center gap-3 lg:hidden">
                <a href="?lang=<?= t('switch_lang_code') ?>" class="text-xs font-bold text-saudi bg-saudi/20 border border-saudi/40 px-3 py-2 rounded-md min-h-[44px] min-w-[44px] flex items-center justify-center shadow-xs">
                    <?= t('switch_lang') ?>
                </a>
                <button id="mobile-drawer-toggle" aria-label="Open Navigation Menu" aria-expanded="false" aria-controls="mobile-drawer" class="w-11 h-11 flex items-center justify-center text-white hover:text-saudi focus:outline-none rounded-lg border border-gray-700 bg-charcoal shadow-md">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
            </div>

        </div>
    </header>

    <!-- Upgraded Mobile Full-Screen Slide-in Drawer -->
    <div id="mobile-drawer" class="fixed inset-0 z-[100] bg-charcoal/95 backdrop-blur-xl text-white hidden flex-col transition-all duration-300" aria-hidden="true">
        
        <!-- Drawer Top Header -->
        <div class="flex items-center justify-between px-5 h-16 border-b border-gray-800/80 shrink-0 bg-charcoal">
            <a href="index.php" class="flex items-center gap-2">
                <img src="public/images/logo-white.png" alt="Desert Iron" class="h-9 w-auto max-w-[170px] object-contain drop-shadow-md">
            </a>
            <div class="flex items-center gap-2">
                <a href="?lang=<?= t('switch_lang_code') ?>" class="text-xs font-bold text-saudi bg-saudi/20 border border-saudi/40 px-3 py-1.5 rounded-md">
                    <?= t('switch_lang') ?>
                </a>
                <button id="mobile-drawer-close" aria-label="Close Navigation Menu" class="w-10 h-10 flex items-center justify-center text-gray-300 hover:text-white hover:bg-saudi focus:outline-none rounded-full border border-gray-700 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>
        </div>

        <!-- Scrollable Drawer Body with Rich Menu Cards -->
        <div class="flex-1 overflow-y-auto px-5 py-5 space-y-1.5 text-base font-medium">
            
            <a href="index.php" class="flex items-center justify-between p-3 rounded-lg border border-gray-800/80 hover:bg-white/5 hover:border-saudi transition-all">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded bg-saudi/20 text-saudi flex items-center justify-center text-xs font-bold">01</div>
                    <span><?= t('home') ?></span>
                </div>
                <span class="text-xs text-gray-500">&rarr;</span>
            </a>
            
            <a href="about.php" class="flex items-center justify-between p-3 rounded-lg border border-gray-800/80 hover:bg-white/5 hover:border-saudi transition-all">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded bg-saudi/20 text-saudi flex items-center justify-center text-xs font-bold">02</div>
                    <span><?= t('about') ?></span>
                </div>
                <span class="text-xs text-gray-500">&rarr;</span>
            </a>

            <!-- Mobile Services Accordion Dropdown -->
            <div class="rounded-lg border border-gray-800/80 p-3 bg-white/[0.02]">
                <button onclick="document.getElementById('mobile-services-list').classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180');" class="w-full flex items-center justify-between text-start font-medium hover:text-saudi focus:outline-none min-h-[36px]">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded bg-saudi/20 text-saudi flex items-center justify-center text-xs font-bold">03</div>
                        <span class="font-bold text-white"><?= t('services') ?> (10)</span>
                    </div>
                    <svg class="w-4 h-4 text-saudi transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div id="mobile-services-list" class="hidden border-s-2 border-saudi ms-4 ps-3 pt-3 pb-1 space-y-2 text-sm text-gray-300 mt-2">
                    <a href="structural-steel.php" class="block py-1.5 hover:text-saudi">Structural Steel Fabrication & Erection</a>
                    <a href="pre-engineered-buildings.php" class="block py-1.5 hover:text-saudi">Pre-Engineered Buildings (PEB)</a>
                    <a href="industrial-construction.php" class="block py-1.5 hover:text-saudi">Industrial Construction</a>
                    <a href="pipeline-piping.php" class="block py-1.5 hover:text-saudi">Pipeline & Industrial Piping</a>
                    <a href="roof-wall-cladding.php" class="block py-1.5 hover:text-saudi">Roof & Wall Cladding</a>
                    <a href="standing-seam-roofing.php" class="block py-1.5 hover:text-saudi">Standing Seam Roofing Systems</a>
                    <a href="misc-metal-works.php" class="block py-1.5 hover:text-saudi">Miscellaneous Metal Works</a>
                    <a href="fireproofing-works.php" class="block py-1.5 hover:text-saudi">Fireproofing Works</a>
                    <a href="civil-works.php" class="block py-1.5 hover:text-saudi">Civil Works</a>
                    <a href="fit-out-works.php" class="block py-1.5 hover:text-saudi">Fit-Out Works</a>
                </div>
            </div>

            <a href="industries.php" class="flex items-center justify-between p-3 rounded-lg border border-gray-800/80 hover:bg-white/5 hover:border-saudi transition-all">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded bg-saudi/20 text-saudi flex items-center justify-center text-xs font-bold">04</div>
                    <span><?= isset($translations[$lang]['industries']) ? $translations[$lang]['industries'] : 'Industries' ?></span>
                </div>
                <span class="text-xs text-gray-500">&rarr;</span>
            </a>

            <a href="projects.php" class="flex items-center justify-between p-3 rounded-lg border border-gray-800/80 hover:bg-white/5 hover:border-saudi transition-all">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded bg-saudi/20 text-saudi flex items-center justify-center text-xs font-bold">05</div>
                    <span><?= t('projects') ?></span>
                </div>
                <span class="text-xs text-gray-500">&rarr;</span>
            </a>

            <a href="news.php" class="flex items-center justify-between p-3 rounded-lg border border-gray-800/80 hover:bg-white/5 hover:border-saudi transition-all">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded bg-saudi/20 text-saudi flex items-center justify-center text-xs font-bold">06</div>
                    <span><?= isset($translations[$lang]['news']) ? $translations[$lang]['news'] : 'Insights / News' ?></span>
                </div>
                <span class="text-xs text-gray-500">&rarr;</span>
            </a>

            <a href="contact.php" class="flex items-center justify-between p-3 rounded-lg border border-gray-800/80 hover:bg-white/5 hover:border-saudi transition-all">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded bg-saudi/20 text-saudi flex items-center justify-center text-xs font-bold">07</div>
                    <span><?= t('contact') ?></span>
                </div>
                <span class="text-xs text-gray-500">&rarr;</span>
            </a>
        </div>

        <!-- Drawer Bottom Actions (Call + Get Quote) -->
        <div class="p-4 border-t border-gray-800 bg-charcoal safe-pb shrink-0 space-y-2.5">
            <div class="grid grid-cols-2 gap-3">
                <a href="tel:+966599510213" class="bg-white/10 text-white text-center py-3 rounded-lg font-bold text-xs uppercase tracking-widest flex items-center justify-center gap-2 border border-white/20 min-h-[44px]">
                    <svg class="w-4 h-4 text-saudi" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    Call Us
                </a>
                <a href="quote.php" class="bg-saudi text-white text-center py-3 rounded-lg font-bold text-xs uppercase tracking-widest flex items-center justify-center shadow-lg hover:bg-emerald-700 transition-colors min-h-[44px]">
                    <?= t('get_quote') ?>
                </a>
            </div>
        </div>
    </div>

    <!-- JavaScript for Mobile Navigation Drawer -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleBtn = document.getElementById('mobile-drawer-toggle');
            const closeBtn = document.getElementById('mobile-drawer-close');
            const drawer = document.getElementById('mobile-drawer');

            function openDrawer() {
                drawer.classList.remove('hidden');
                drawer.classList.add('flex');
                document.body.style.overflow = 'hidden';
                toggleBtn.setAttribute('aria-expanded', 'true');
                drawer.setAttribute('aria-hidden', 'false');
            }

            function closeDrawer() {
                drawer.classList.add('hidden');
                drawer.classList.remove('flex');
                document.body.style.overflow = '';
                toggleBtn.setAttribute('aria-expanded', 'false');
                drawer.setAttribute('aria-hidden', 'true');
            }

            if(toggleBtn) toggleBtn.addEventListener('click', openDrawer);
            if(closeBtn) closeBtn.addEventListener('click', closeDrawer);

            // Close drawer when pressing Escape
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && !drawer.classList.contains('hidden')) {
                    closeDrawer();
                }
            });
        });
    </script>

    <!-- Main Content Container -->
    <main id="main-content" class="flex-grow">