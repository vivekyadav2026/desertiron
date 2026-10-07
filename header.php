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
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@400;600&family=Inter:wght@400;500&family=Montserrat:wght@600&display=swap" rel="stylesheet">
    
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
</head>
<body class="<?= $fontClass ?> text-charcoal bg-offwhite antialiased relative min-h-screen flex flex-col">

<header class="bg-charcoal text-offwhite sticky top-0 z-50 border-b-4 border-saudi shadow-md">
    <div class="container mx-auto px-4 flex justify-between items-center py-4">
        <!-- Logo -->
        <a href="index.php" class="flex items-center gap-3">
            <div class="w-10 h-10 bg-saudi flex items-center justify-center text-white <?= $headingFontClass ?> text-xl rounded">DI</div>
            <div class="<?= $headingFontClass ?> text-xl tracking-widest text-white uppercase">Desert Iron</div>
        </a>

        <!-- Desktop Nav -->
        <nav class="hidden lg:flex gap-6 items-center font-medium text-sm text-gray-200">
            <a href="index.php" class="hover:text-saudi transition-colors"><?= t('home') ?></a>
            <a href="about.php" class="hover:text-saudi transition-colors"><?= t('about') ?></a>
            <a href="services.php" class="hover:text-saudi transition-colors"><?= t('services') ?></a>
            <a href="projects.php" class="hover:text-saudi transition-colors"><?= t('projects') ?></a>
            <a href="contact.php" class="hover:text-saudi transition-colors"><?= t('contact') ?></a>
        </nav>

        <!-- Right Actions -->
        <div class="flex items-center gap-4">
            <a href="?lang=<?= t('switch_lang_code') ?>" class="text-white hover:text-saudi transition-colors font-arabic font-medium">
                <?= t('switch_lang') ?>
            </a>
            <a href="quote.php" class="hidden md:inline-flex bg-saudi text-white px-5 py-2 rounded font-bold hover:bg-opacity-90 transition-colors <?= $headingFontClass ?>">
                <?= t('get_quote') ?>
            </a>
        </div>
    </div>
</header>