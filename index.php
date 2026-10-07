<?php 
require_once 'header.php'; 
require_once 'components.php'; 
?>

<!-- 1. Hero Section (Transparent Text) -->
<section class="relative h-screen bg-charcoal flex items-center overflow-hidden">
    <!-- Inline Style for Animation -->
    <style>
        @keyframes slowZoom {
            0% { transform: scale(1); }
            100% { transform: scale(1.15); }
        }
        .animate-slow-zoom {
            animation: slowZoom 20s ease-in-out infinite alternate;
        }
    </style>

    <!-- Cinematic Background -->
    <div class="absolute inset-0 z-0 overflow-hidden bg-black">
        <img src="public/images/hero_riyadh_steel.jpg" class="w-full h-full object-cover animate-slow-zoom opacity-70" alt="Desert Iron Hero">
        <!-- Smooth gradient overlay covering the whole screen for text readability -->
        <div class="absolute inset-0 <?= $lang === 'ar' ? 'bg-gradient-to-l' : 'bg-gradient-to-r' ?> from-charcoal/90 via-charcoal/30 to-transparent"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-charcoal via-transparent to-transparent opacity-80"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <!-- Content completely transparent, no background box -->
        <div class="max-w-3xl pt-16" data-aos="fade-up" data-aos-duration="1000">
            <div class="flex items-center gap-4 mb-6">
                <div class="w-12 h-[2px] bg-saudi"></div>
                <span class="text-saudi text-sm font-bold uppercase tracking-widest drop-shadow-md">Vision 2030 Aligned</span>
            </div>
            
            <h1 class="text-5xl md:text-6xl lg:text-7xl text-white font-bold mb-6 leading-[1.1] <?= $headingFontClass ?> drop-shadow-lg">
                <?= t('hero_line') ?>
            </h1>
            
            <p class="text-gray-200 text-lg md:text-xl mb-12 leading-relaxed font-light drop-shadow-md max-w-2xl">
                <?= t('home_hero_sub') ?>
            </p>
            
            <div class="flex flex-wrap items-center gap-6">
                <a href="quote.php" class="bg-saudi text-white px-8 py-4 font-bold hover:bg-white hover:text-saudi transition-colors tracking-wide text-sm rounded-sm shadow-xl">
                    <?= t('get_quote') ?>
                </a>
                <a href="projects.php" class="text-white hover:text-saudi font-medium flex items-center gap-2 transition-colors text-sm uppercase tracking-wider group drop-shadow-md">
                    Explore Projects 
                    <svg class="w-5 h-5 group-hover:translate-x-2 transition-transform <?= $lang === 'ar' ? 'rotate-180 group-hover:-translate-x-2' : '' ?>" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
        </div>
    </div>
    
    <!-- Vertical Scroll Text -->
    <div class="absolute bottom-12 end-8 hidden xl:flex flex-col items-center gap-4 text-white/50 z-10">
        <span class="text-xs uppercase tracking-widest" style="writing-mode: vertical-rl;">Scroll Down</span>
        <div class="w-px h-16 bg-white/40 animate-pulse"></div>
    </div>
</section>

<!-- 2. Who We Are -->
<section class="py-16 bg-offwhite">
    <div class="container mx-auto px-4 max-w-7xl">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <div class="lg:col-span-5" data-aos="fade-right">
                <h2 class="text-xs uppercase tracking-widest text-saudi font-bold mb-4">Who We Are</h2>
                <h3 class="text-4xl text-charcoal <?= $headingFontClass ?> mb-6 font-light leading-tight">Building a Stronger Tomorrow.</h3>
                <p class="text-steel text-lg leading-relaxed mb-8 font-light"><?= t('who_we_are_desc') ?></p>
                <a href="about.php" class="inline-flex items-center gap-2 text-charcoal font-medium hover:text-saudi transition-colors border-b border-charcoal hover:border-saudi pb-1">
                    <?= t('more_about_us') ?>
                    <svg class="w-4 h-4 <?= $lang === 'ar' ? 'rotate-180' : '' ?>" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
            <div class="lg:col-span-7 relative" data-aos="fade-left" data-aos-delay="200">
                <img src="public/images/about_us_team.jpg" alt="Who We Are" class="w-full aspect-[16/10] object-cover rounded-sm shadow-xl">
            </div>
        </div>
    </div>
</section>

<!-- 3. Our Capability -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 max-w-7xl">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
            <div class="relative z-10" data-aos="fade-up">
                <img src="public/images/structural_steel.jpg" alt="Our Capability" class="w-full aspect-[4/5] object-cover rounded-sm shadow-md">
            </div>
            <div>
                <h2 class="text-xs uppercase tracking-widest text-saudi font-bold mb-4" data-aos="fade-up">Capabilities</h2>
                <h3 class="text-4xl text-charcoal <?= $headingFontClass ?> mb-8 font-light leading-tight" data-aos="fade-up" data-aos-delay="100"><?= t('our_capability') ?></h3>
                <p class="text-steel leading-relaxed mb-8 text-lg font-light" data-aos="fade-up" data-aos-delay="200">
                    <?= $lang === 'ar' ? '????? ?????? ????? ????? ?? ???? ????? ????? ????? ?? ???????? ?????? ?????? ??? ?? ??????? ???? ????? ?????? ?????? ????? ??? ????? ???? ???????? ????????.' : 'Desert Iron operates one of the most advanced fabrication facilities in the Kingdom. Backed by a massive fleet of heavy equipment and a specialized engineering workforce, we have the capacity to execute multiple gigaprojects simultaneously.' ?>
                </p>
                <div class="space-y-10">
                    <?php $caps = [['cap_steel', '95%'], ['cap_civil', '85%'], ['cap_eng', '90%']]; 
                    foreach($caps as $i => $cap): ?>
                    <div data-aos="fade-up" data-aos-delay="<?= 300 + ($i*100) ?>">
                        <div class="flex justify-between mb-3">
                            <span class="text-charcoal font-medium uppercase tracking-wide text-sm"><?= t($cap[0]) ?></span>
                            <span class="text-steel text-sm"><?= $cap[1] ?></span>
                        </div>
                        <div class="w-full bg-offwhite h-1.5 rounded-full overflow-hidden">
                            <div class="bg-charcoal h-1.5" style="width: <?= $cap[1] ?>;"></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. Services -->
<section class="py-16 bg-offwhite">
    <div class="container mx-auto px-4 max-w-7xl">
        <div class="text-center max-w-2xl mx-auto mb-10" data-aos="fade-up">
            <h2 class="text-xs uppercase tracking-widest text-saudi font-bold mb-4">Expertise</h2>
            <h3 class="text-4xl text-charcoal <?= $headingFontClass ?> font-light leading-tight">Our Services</h3>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-16">
            <?php 
            $srv_imgs = ['architectural_work','civil_construction','peb_warehouse','structural_steel','roof_wall_panels','call_off_services','trading_warehouse','technical_staffing','shutdown_maintenance'];
            for($i=1; $i<=9; $i++): 
            ?>
            <a href="service-detail.php?id=<?= $i ?>" class="group block" data-aos="fade-up" data-aos-delay="<?= ($i%3)*100 ?>">
                <div class="aspect-[4/3] overflow-hidden rounded-sm mb-6 bg-gray-200 relative shadow-sm">
                    <img src="public/images/<?= $srv_imgs[$i-1] ?>.jpg" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" alt="Service" loading="lazy">
                </div>
                <h3 class="text-xl text-charcoal mb-3 <?= $headingFontClass ?> font-medium group-hover:text-saudi transition-colors"><?= t('srv_'.$i.'_t') ?></h3>
                <p class="text-steel text-sm font-light leading-relaxed"><?= t('srv_'.$i.'_d') ?></p>
            </a>
            <?php endfor; ?>
        </div>
    </div>
</section>

<!-- 5. Featured Projects -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 max-w-7xl">
        <div class="text-center max-w-2xl mx-auto mb-10" data-aos="fade-up">
            <h2 class="text-xs uppercase tracking-widest text-saudi font-bold mb-4">Portfolio</h2>
            <h3 class="text-4xl text-charcoal <?= $headingFontClass ?> font-light leading-tight">Featured Projects</h3>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php 
            $proj_imgs = ['shutdown_maintenance.jpg', 'civil_construction.jpg', 'peb_warehouse.jpg', 'contact_hq.jpg', 'trading_warehouse.jpg'];
            for($i=1; $i<=5; $i++): 
                $p_img = 'public/images/' . $proj_imgs[$i-1];
            ?>
            <a href="project-detail.php?id=<?= $i ?>" class="group relative overflow-hidden rounded-sm bg-charcoal aspect-[4/3] <?= $i==1 || $i==4 ? 'md:col-span-2 lg:col-span-1' : '' ?> block shadow-sm hover:shadow-xl transition-all duration-300" data-aos="zoom-in-up" data-aos-delay="<?= ($i%3)*100 ?>">
                <img src="<?= $p_img ?>" alt="Project <?= $i ?>" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-charcoal/90 via-charcoal/20 to-transparent z-0"></div>
                
                <div class="absolute bottom-0 start-0 end-0 p-8 flex flex-col justify-end z-10">
                    <span class="text-saudi text-xs font-bold uppercase tracking-widest mb-3"><?= t('client') ?>: Desert Iron</span>
                    <h3 class="text-white text-2xl font-light mb-2 <?= $headingFontClass ?> leading-tight text-start">
                        <?= t('proj_'.$i) ?>
                    </h3>
                </div>
            </a>
            <?php endfor; ?>
        </div>
    </div>
</section>

<!-- Final CTA -->
<section class="py-16 bg-charcoal text-center" data-aos="fade-in">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl text-white font-light <?= $headingFontClass ?> mb-8"><?= t('ready_build') ?></h2>
        <a href="contact.php" class="inline-flex items-center justify-center bg-saudi text-white px-10 py-4 rounded-sm font-medium hover:bg-white hover:text-saudi transition-colors tracking-wide"><?= t('contact_us_now') ?></a>
    </div>
</section>

<?php require_once 'footer.php'; ?>