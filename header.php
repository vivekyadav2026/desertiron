<?php 
require_once 'i18n.php'; 
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>" dir="<?= $dir ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($page_title ?? ("Desert Iron | " . t('tagline'))) ?></title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@300;400;500;600&family=Inter:wght@300;400;500&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        charcoal: '#1F2A27', steel: '#6B7280', saudi: '#006B3F', desert: '#DBC9A7', offwhite: '#F5F5F2',
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
    <style>body { background-color: #F5F5F2; }</style>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="<?= $fontClass ?> text-charcoal bg-offwhite antialiased relative min-h-screen flex flex-col">

<!-- Top Bar -->
<div class="bg-charcoal text-gray-400 text-xs py-2 hidden lg:block border-b border-white/5">
    <div class="container mx-auto px-4 flex justify-between items-center">
        <div class="flex gap-6">
            <a href="tel:+966110000000" class="flex items-center gap-1.5 hover:text-saudi transition-colors"><svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg> +966 11 000 0000</a>
            <a href="mailto:info@desertiron.com.sa" class="flex items-center gap-1.5 hover:text-saudi transition-colors"><svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg> info@desertiron.com.sa</a>
        </div>
        <div class="flex items-center gap-4">
            <span class="flex items-center gap-1.5"><svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg> Industrial Gate City, Riyadh, KSA</span>
        </div>
    </div>
</div>

<!-- Main Header -->
<header class="bg-charcoal/95 backdrop-blur-md text-offwhite sticky top-0 z-50 shadow-md transition-all duration-300">
    <div class="container mx-auto px-4 flex justify-between items-center py-4">
        
        <!-- Logo -->
        <a href="index.php" class="flex items-center gap-3 group">
            <div class="w-10 h-10 bg-saudi flex items-center justify-center text-white <?= $headingFontClass ?> text-xl rounded-sm shadow-md group-hover:scale-105 transition-transform">DI</div>
            <div class="<?= $headingFontClass ?> text-xl tracking-widest text-white uppercase font-semibold group-hover:text-saudi transition-colors">Desert Iron</div>
        </a>

        <!-- Desktop Nav -->
        <nav class="hidden lg:flex gap-6 xl:gap-8 items-center font-medium text-sm text-gray-300">
            <a href="index.php" class="hover:text-white transition-colors py-2"><?= t('home') ?></a>
            <a href="about.php" class="hover:text-white transition-colors py-2"><?= t('about') ?></a>
            
            <!-- Services Dropdown -->
            <div class="group relative py-2">
                <a href="services.php" class="hover:text-white transition-colors flex items-center gap-1 cursor-pointer">
                    <?= t('services') ?> 
                    <svg class="w-4 h-4 text-gray-500 group-hover:text-saudi transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </a>
                <!-- Animated Dropdown -->
                <div class="absolute top-full <?= $lang === 'ar' ? 'right-0' : 'left-0' ?> w-64 bg-white text-charcoal shadow-[0_10px_40px_rgba(0,0,0,0.15)] rounded-sm opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 py-2 border-t-2 border-saudi flex flex-col mt-4 translate-y-2 group-hover:translate-y-0">
                    <a href="architectural-work.php" class="px-5 py-2.5 hover:bg-offwhite hover:text-saudi text-sm transition-colors border-b border-gray-100">Architectural Work</a>
                    <a href="civil-construction.php" class="px-5 py-2.5 hover:bg-offwhite hover:text-saudi text-sm transition-colors border-b border-gray-100">Civil Construction</a>
                    <a href="pre-engineered-buildings.php" class="px-5 py-2.5 hover:bg-offwhite hover:text-saudi text-sm transition-colors border-b border-gray-100">PEB Systems</a>
                    <a href="structural-steel.php" class="px-5 py-2.5 hover:bg-offwhite hover:text-saudi text-sm transition-colors border-b border-gray-100">Structural Steel</a>
                    <a href="roof-wall-panels.php" class="px-5 py-2.5 hover:bg-offwhite hover:text-saudi text-sm transition-colors border-b border-gray-100">Roof & Wall Panels</a>
                    <a href="call-off-services.php" class="px-5 py-2.5 hover:bg-offwhite hover:text-saudi text-sm transition-colors border-b border-gray-100">Call-off Services</a>
                    <a href="trading.php" class="px-5 py-2.5 hover:bg-offwhite hover:text-saudi text-sm transition-colors border-b border-gray-100">Trading</a>
                    <a href="technical-staffing.php" class="px-5 py-2.5 hover:bg-offwhite hover:text-saudi text-sm transition-colors border-b border-gray-100">Technical Staffing</a>
                    <a href="shutdown-maintenance.php" class="px-5 py-2.5 hover:bg-offwhite hover:text-saudi text-sm transition-colors border-b border-gray-100">Shutdown & Maintenance</a>
                    <div class="bg-gray-50 mt-1 pt-1">
                        <a href="services.php" class="block px-5 py-3 hover:text-saudi text-sm font-bold text-saudi transition-colors">View All Services &rarr;</a>
                    </div>
                </div>
            </div>

            <a href="products.php" class="hover:text-white transition-colors py-2"><?= $lang === 'ar' ? '????????' : 'Products' ?></a>
            <!-- <a href="projects.php" class="hover:text-white transition-colors py-2"><?= t('projects') ?></a> -->
            <!-- <a href="industries.php" class="hover:text-white transition-colors py-2"><?= $lang === 'ar' ? '????????' : 'Industries' ?></a> -->
            
            <!-- More Dropdown -->
            <div class="group relative py-2">
                <span class="cursor-pointer hover:text-white transition-colors flex items-center gap-1">
                    <?= $lang === 'ar' ? '??????' : 'More' ?> 
                    <svg class="w-4 h-4 text-gray-500 group-hover:text-saudi transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </span>
                <div class="absolute top-full <?= $lang === 'ar' ? 'right-0' : 'left-0' ?> w-48 bg-white text-charcoal shadow-[0_10px_40px_rgba(0,0,0,0.15)] rounded-sm opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 py-2 border-t-2 border-saudi flex flex-col mt-4 translate-y-2 group-hover:translate-y-0">
                    <a href="clients.php" class="px-5 py-2.5 hover:bg-offwhite hover:text-saudi text-sm transition-colors border-b border-gray-100"><?= $lang === 'ar' ? '???????' : 'Our Clients' ?></a>
                    <a href="certifications.php" class="px-5 py-2.5 hover:bg-offwhite hover:text-saudi text-sm transition-colors border-b border-gray-100"><?= $lang === 'ar' ? '????????' : 'Certifications' ?></a>
                    <a href="careers.php" class="px-5 py-2.5 hover:bg-offwhite hover:text-saudi text-sm transition-colors border-b border-gray-100"><?= $lang === 'ar' ? '???????' : 'Careers' ?></a>
                    <a href="news.php" class="px-5 py-2.5 hover:bg-offwhite hover:text-saudi text-sm transition-colors"><?= $lang === 'ar' ? '???????' : 'News & Insights' ?></a>
                </div>
            </div>

            <a href="contact.php" class="hover:text-white transition-colors py-2"><?= t('contact') ?></a>
        </nav>

        <!-- Right Actions -->
        <div class="flex items-center gap-5">
            <a href="?lang=<?= t('switch_lang_code') ?>" class="text-gray-300 hover:text-saudi transition-colors font-arabic font-medium text-sm flex items-center gap-1.5 border-e border-gray-700 pe-5">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path></svg>
                <?= t('switch_lang') ?>
            </a>
            <a href="quote.php" class="hidden md:inline-flex bg-saudi text-white px-5 py-2.5 rounded-sm font-medium hover:bg-white hover:text-saudi transition-colors shadow-sm text-sm tracking-wide">
                <?= t('get_quote') ?>
            </a>
            
            <!-- Mobile Menu Toggle Button -->
            <button id="mobile-menu-btn" class="lg:hidden text-white hover:text-saudi transition-colors focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </button>
        </div>
    </div>
    
    <!-- Mobile Navigation Menu -->
    <div id="mobile-menu" class="hidden lg:hidden bg-charcoal border-t border-gray-800 absolute w-full left-0 shadow-2xl">
        <div class="flex flex-col px-4 py-4 space-y-1 text-sm font-medium text-gray-300 h-screen overflow-y-auto pb-32">
            <a href="index.php" class="block py-3 border-b border-gray-800 hover:text-saudi transition-colors"><?= t('home') ?></a>
            <a href="about.php" class="block py-3 border-b border-gray-800 hover:text-saudi transition-colors"><?= t('about') ?></a>
            <a href="services.php" class="block py-3 border-b border-gray-800 hover:text-saudi transition-colors"><?= t('services') ?> <span class="text-xs text-gray-500 font-normal">(View All)</span></a>
            <a href="products.php" class="block py-3 border-b border-gray-800 hover:text-saudi transition-colors"><?= $lang === 'ar' ? '????????' : 'Products' ?></a>
            <!-- <a href="projects.php" class="block py-3 border-b border-gray-800 hover:text-saudi transition-colors"><?= t('projects') ?></a> -->
            <!-- <a href="industries.php" class="block py-3 border-b border-gray-800 hover:text-saudi transition-colors"><?= $lang === 'ar' ? '????????' : 'Industries' ?></a> -->
            <a href="contact.php" class="block py-3 hover:text-saudi transition-colors"><?= t('contact') ?></a>
        </div>
    </div>
</header>

<script>
    document.getElementById('mobile-menu-btn').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>