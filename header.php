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
                        sand: '#DBC9A7',
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
                <a href="mailto:sales@desrtiron.com" class="flex items-center gap-2 hover:text-white transition-colors">
                    <svg class="w-3.5 h-3.5 text-saudi" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    sales@desrtiron.com
                </a>
            </div>
            <div class="flex items-center gap-4">
                <span class="flex items-center gap-2">
                    <svg class="w-3.5 h-3.5 text-saudi" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                    Industrial Gate City, Riyadh, KSA
                </span>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <header class="bg-charcoal text-white sticky top-0 z-50 shadow-md h-16 md:h-20 flex items-center transition-all duration-300">
        <div class="container mx-auto px-4 lg:px-6 max-w-7xl flex justify-between items-center w-full">
            
            <!-- Official Logo -->
            <a href="index.php" class="flex items-center gap-3 group shrink-0 min-h-[44px]">
                <img src="public/images/logo-white.png" alt="Desert Iron" class="h-9 md:h-11 w-auto object-contain transition-transform group-hover:scale-105">
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
                    <div class="absolute top-full <?= $lang === 'ar' ? 'right-0' : 'left-0' ?> w-64 bg-white text-charcoal shadow-2xl rounded-sm opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 py-2 border-t-2 border-saudi flex flex-col mt-2">
                        <a href="structural-steel.php" class="px-5 py-2.5 hover:bg-offwhite hover:text-saudi text-sm border-b border-gray-100 font-medium">Structural Steel Buildings</a>
                        <a href="pre-engineered-buildings.php" class="px-5 py-2.5 hover:bg-offwhite hover:text-saudi text-sm border-b border-gray-100 font-medium">Pre-Engineered Buildings (PEB)</a>
                        <a href="civil-construction.php" class="px-5 py-2.5 hover:bg-offwhite hover:text-saudi text-sm border-b border-gray-100 font-medium">Civil Construction</a>
                        <a href="architectural-work.php" class="px-5 py-2.5 hover:bg-offwhite hover:text-saudi text-sm border-b border-gray-100 font-medium">Architectural Work</a>
                        <a href="roof-wall-panels.php" class="px-5 py-2.5 hover:bg-offwhite hover:text-saudi text-sm border-b border-gray-100 font-medium">Roof & Wall Panels</a>
                        <a href="call-off-services.php" class="px-5 py-2.5 hover:bg-offwhite hover:text-saudi text-sm border-b border-gray-100 font-medium">Call-off Services</a>
                        <a href="trading.php" class="px-5 py-2.5 hover:bg-offwhite hover:text-saudi text-sm border-b border-gray-100 font-medium">Trading & Supply</a>
                        <a href="technical-staffing.php" class="px-5 py-2.5 hover:bg-offwhite hover:text-saudi text-sm border-b border-gray-100 font-medium">Technical Staffing</a>
                        <a href="shutdown-maintenance.php" class="px-5 py-2.5 hover:bg-offwhite hover:text-saudi text-sm font-medium">Shutdown & Maintenance</a>
                        <div class="bg-gray-50 mt-1 pt-1 border-t border-gray-200">
                            <a href="services.php" class="block px-5 py-3 hover:text-saudi text-xs font-bold uppercase tracking-widest text-saudi">View All Services &rarr;</a>
                        </div>
                    </div>
                </div>

                <a href="products.php" class="hover:text-white transition-colors py-2"><?= $lang === 'ar' ? '????????' : 'Products' ?></a>
                <a href="contact.php" class="hover:text-white transition-colors py-2"><?= t('contact') ?></a>
            </nav>

            <!-- Desktop Right Actions -->
            <div class="hidden lg:flex items-center gap-5">
                <a href="?lang=<?= t('switch_lang_code') ?>" class="text-gray-300 hover:text-saudi transition-colors font-arabic font-medium text-sm flex items-center gap-1.5 border-e border-gray-700 pe-5 min-h-[44px]">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path></svg>
                    <?= t('switch_lang') ?>
                </a>
                <a href="quote.php" class="bg-saudi text-white px-6 py-2.5 rounded-sm font-bold text-xs uppercase tracking-widest hover:bg-white hover:text-saudi transition-colors shadow-md min-h-[44px] flex items-center">
                    <?= t('get_quote') ?>
                </a>
            </div>

            <!-- Mobile Actions (Hamburger & Lang Switcher) -->
            <div class="flex items-center gap-3 lg:hidden">
                <a href="?lang=<?= t('switch_lang_code') ?>" class="text-xs font-bold text-saudi bg-saudi/10 border border-saudi/20 px-3 py-2 rounded-sm min-h-[44px] min-w-[44px] flex items-center justify-center">
                    <?= t('switch_lang') ?>
                </a>
                <button id="mobile-drawer-toggle" aria-label="Open Navigation Menu" aria-expanded="false" aria-controls="mobile-drawer" class="w-11 h-11 flex items-center justify-center text-white hover:text-saudi focus:outline-none rounded-sm border border-gray-700 bg-charcoal">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
            </div>

        </div>
    </header>

    <!-- Mobile Full-Screen Slide-in Drawer -->
    <div id="mobile-drawer" class="fixed inset-0 z-[100] bg-charcoal text-white hidden flex-col transition-all duration-300" aria-hidden="true">
        
        <!-- Drawer Top Header -->
        <div class="flex items-center justify-between px-5 h-16 border-b border-gray-800 shrink-0">
            <a href="index.php" class="flex items-center gap-2">
                <img src="public/images/logo-white.png" alt="Desert Iron" class="h-8 w-auto">
            </a>
            <button id="mobile-drawer-close" aria-label="Close Navigation Menu" class="w-11 h-11 flex items-center justify-center text-gray-300 hover:text-saudi focus:outline-none rounded-sm border border-gray-800">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>

        <!-- Scrollable Drawer Body -->
        <div class="flex-1 overflow-y-auto px-5 py-6 space-y-2 text-base font-medium">
            <a href="index.php" class="flex items-center justify-between py-3.5 border-b border-gray-800/60 hover:text-saudi transition-colors">
                <span><?= t('home') ?></span>
                <span class="text-xs text-gray-500">&rarr;</span>
            </a>
            
            <a href="about.php" class="flex items-center justify-between py-3.5 border-b border-gray-800/60 hover:text-saudi transition-colors">
                <span><?= t('about') ?></span>
                <span class="text-xs text-gray-500">&rarr;</span>
            </a>

            <!-- Mobile Services Accordion -->
            <div class="border-b border-gray-800/60 py-2">
                <button onclick="document.getElementById('mobile-services-list').classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180');" class="w-full flex items-center justify-between py-2 text-start font-medium hover:text-saudi focus:outline-none min-h-[44px]">
                    <span><?= t('services') ?> (9)</span>
                    <svg class="w-4 h-4 text-saudi transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div id="mobile-services-list" class="hidden ps-4 pt-2 pb-1 space-y-2 text-sm text-gray-300">
                    <a href="structural-steel.php" class="block py-2 border-b border-gray-800/40 hover:text-saudi">Structural Steel Buildings</a>
                    <a href="pre-engineered-buildings.php" class="block py-2 border-b border-gray-800/40 hover:text-saudi">Pre-Engineered Buildings (PEB)</a>
                    <a href="civil-construction.php" class="block py-2 border-b border-gray-800/40 hover:text-saudi">Civil Construction</a>
                    <a href="architectural-work.php" class="block py-2 border-b border-gray-800/40 hover:text-saudi">Architectural Work</a>
                    <a href="roof-wall-panels.php" class="block py-2 border-b border-gray-800/40 hover:text-saudi">Roof & Wall Panels</a>
                    <a href="call-off-services.php" class="block py-2 border-b border-gray-800/40 hover:text-saudi">Call-off Services</a>
                    <a href="trading.php" class="block py-2 border-b border-gray-800/40 hover:text-saudi">Trading & Materials</a>
                    <a href="technical-staffing.php" class="block py-2 border-b border-gray-800/40 hover:text-saudi">Technical Staffing</a>
                    <a href="shutdown-maintenance.php" class="block py-2 hover:text-saudi">Shutdown & Maintenance</a>
                </div>
            </div>

            <a href="products.php" class="flex items-center justify-between py-3.5 border-b border-gray-800/60 hover:text-saudi transition-colors">
                <span><?= $lang === 'ar' ? '????????' : 'Products' ?></span>
                <span class="text-xs text-gray-500">&rarr;</span>
            </a>

            <a href="projects.php" class="flex items-center justify-between py-3.5 border-b border-gray-800/60 hover:text-saudi transition-colors">
                <span><?= t('projects') ?></span>
                <span class="text-xs text-gray-500">&rarr;</span>
            </a>
            <a href="contact.php" class="flex items-center justify-between py-3.5 hover:text-saudi transition-colors">
                <span><?= t('contact') ?></span>
                <span class="text-xs text-gray-500">&rarr;</span>
            </a>
        </div>

        <!-- Drawer Bottom Fixed CTA Button -->
        <div class="p-5 border-t border-gray-800 bg-charcoal safe-pb shrink-0">
            <a href="quote.php" class="block text-center bg-saudi text-white py-3.5 rounded-sm font-bold text-xs uppercase tracking-widest shadow-xl hover:bg-white hover:text-saudi transition-colors min-h-[44px] flex items-center justify-center">
                <?= t('get_quote') ?>
            </a>
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