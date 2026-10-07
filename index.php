<?php
$page_title = 'Desert Iron | Structural Steel, Engineering & Construction';
require_once 'header.php';
?>

<!-- 1. Cinematic Hero Banner -->
<section class="relative min-h-[75vh] flex items-center justify-center bg-charcoal overflow-hidden pt-24 pb-12">
    <!-- Background Image with Dark Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="public/images/hero_riyadh_steel.jpg" alt="Desert Iron Steel Erection" class="w-full h-full object-cover opacity-75">
        <div class="absolute inset-0 bg-gradient-to-t from-charcoal/90 via-charcoal/40 to-charcoal/30"></div>
    </div>
    
    <div class="container mx-auto px-4 lg:px-6 max-w-7xl relative z-10 text-center">
        <div class="max-w-3xl mx-auto">
            
            <!-- Tag Badge -->
            <div class="inline-flex items-center gap-2 bg-saudi/20 border border-saudi/40 px-4 py-1.5 rounded-full mb-4">
                <span class="w-2 h-2 rounded-full bg-saudi animate-ping"></span>
                <span class="text-saudi text-xs font-bold uppercase tracking-widest">
                    <?= t('subline') ?>
                </span>
            </div>
            
            <!-- Main Headline -->
            <h1 class="text-3xl sm:text-5xl lg:text-6xl text-white font-bold mb-4 leading-tight drop-shadow-lg <?= $headingFontClass ?>">
                <?= t('hero_title') ?>
            </h1>
            
            <!-- Description -->
            <p class="text-gray-200 text-sm sm:text-base md:text-lg leading-relaxed mb-6 font-light max-w-2xl mx-auto">
                <?= t('hero_desc') ?>
            </p>
            
            <!-- CTAs -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="quote.php" class="w-full sm:w-auto bg-saudi text-white px-8 py-3.5 rounded-sm font-bold text-xs uppercase tracking-widest hover:bg-white hover:text-saudi transition-all duration-300 shadow-xl min-h-[44px] flex items-center justify-center">
                    <?= t('request_quote') ?>
                </a>
                <a href="projects.php" class="w-full sm:w-auto bg-charcoal/80 border border-white/40 text-white px-8 py-3.5 rounded-sm font-bold text-xs uppercase tracking-widest hover:bg-white hover:text-charcoal hover:border-white transition-all duration-300 min-h-[44px] flex items-center justify-center">
                    <?= t('explore_projects') ?>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- 2. Who We Are -->
<section class="py-10 md:py-12 lg:py-14 bg-offwhite">
    <div class="container mx-auto px-4 lg:px-6 max-w-7xl">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-10 items-center">
            <div class="lg:col-span-5">
                <h2 class="text-xs uppercase tracking-widest text-saudi font-bold mb-2"><?= t('who_we_are') ?></h2>
                <h3 class="text-2xl sm:text-3xl lg:text-4xl text-charcoal <?= $headingFontClass ?> mb-4 font-bold leading-tight"><?= t('who_we_are_sub') ?></h3>
                <p class="text-gray-600 text-sm md:text-base leading-relaxed mb-6 font-light"><?= t('who_we_are_desc') ?></p>
                <a href="about.php" class="inline-flex items-center gap-2 text-charcoal font-bold text-sm uppercase tracking-wider hover:text-saudi transition-colors border-b-2 border-charcoal hover:border-saudi pb-1 min-h-[44px]">
                    <?= t('more_about_us') ?>
                    <svg class="w-4 h-4 <?= $lang === 'ar' ? 'rotate-180' : '' ?>" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
            <div class="lg:col-span-7 relative">
                <img src="public/images/about_us_team.jpg" alt="Who We Are" class="w-full aspect-[16/10] object-cover rounded-sm shadow-md">
            </div>
        </div>
    </div>
</section>

<!-- 3. Our Capability -->
<section class="py-10 md:py-12 lg:py-14 bg-white">
    <div class="container mx-auto px-4 lg:px-6 max-w-7xl">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-center">
            <div class="relative">
                <img src="public/images/structural_steel.jpg" alt="Our Capability" class="w-full aspect-[4/3] md:aspect-[4/3] object-cover rounded-sm shadow-md">
            </div>
            <div>
                <h2 class="text-xs uppercase tracking-widest text-saudi font-bold mb-2"><?= $lang === 'ar' ? 'قدراتنا' : 'Capabilities' ?></h2>
                <h3 class="text-2xl sm:text-3xl lg:text-4xl text-charcoal <?= $headingFontClass ?> mb-4 font-bold leading-tight"><?= t('our_capability') ?></h3>
                <p class="text-gray-600 leading-relaxed mb-6 text-sm md:text-base font-light">
                    <?= $lang === 'ar' ? 'تمتلك صحراء الحديد واحدة من أكثر مرافق التصنيع تقدماً في المملكة. بدعم من أسطول ضخم من المعدات الثقيلة وكادر هندسي متخصص، نمتلك القدرة على تنفيذ مشاريع عملاقة متعددة في وقت واحد.' : 'Desert Iron operates one of the most advanced fabrication facilities in the Kingdom. Backed by a massive fleet of heavy equipment and a specialized engineering workforce, we have the capacity to execute multiple gigaprojects simultaneously.' ?>
                </p>
                
                <div class="space-y-4">
                    <?php 
                    $caps = [['cap_steel', '95%'], ['cap_civil', '85%'], ['cap_eng', '90%']]; 
                    foreach($caps as $i => $cap): 
                    ?>
                    <div>
                        <div class="flex justify-between mb-1.5">
                            <span class="text-charcoal font-bold uppercase tracking-wider text-xs"><?= t($cap[0]) ?></span>
                            <span class="text-saudi font-bold text-xs"><?= $cap[1] ?></span>
                        </div>
                        <div class="w-full bg-offwhite h-2 rounded-full overflow-hidden border border-gray-100">
                            <div class="bg-saudi h-2 rounded-full" style="width: <?= $cap[1] ?>;"></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. Services Grid -->
<section class="py-10 md:py-12 lg:py-14 bg-offwhite">
    <div class="container mx-auto px-4 lg:px-6 max-w-7xl">
        <div class="text-center max-w-2xl mx-auto mb-8">
            <h2 class="text-xs uppercase tracking-widest text-saudi font-bold mb-2"><?= $lang === 'ar' ? 'خبراتنا' : 'Expertise' ?></h2>
            <h3 class="text-2xl sm:text-3xl lg:text-4xl text-charcoal <?= $headingFontClass ?> font-bold leading-tight"><?= t('services_title') ?></h3>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-6">
            <?php 
            $srv_items = [
                ['img' => 'architectural_work', 'slug' => 'architectural-work.php'],
                ['img' => 'civil_construction', 'slug' => 'civil-construction.php'],
                ['img' => 'peb_warehouse', 'slug' => 'pre-engineered-buildings.php'],
                ['img' => 'structural_steel', 'slug' => 'structural-steel.php'],
                ['img' => 'roof_wall_panels', 'slug' => 'roof-wall-panels.php'],
                ['img' => 'call_off_services', 'slug' => 'call-off-services.php'],
                ['img' => 'trading_warehouse', 'slug' => 'trading.php'],
                ['img' => 'technical_staffing', 'slug' => 'technical-staffing.php'],
                ['img' => 'shutdown_maintenance', 'slug' => 'shutdown-maintenance.php']
            ];
            foreach($srv_items as $i => $item): 
                $idx = $i + 1;
            ?>
            <a href="<?= $item['slug'] ?>" class="group block bg-white rounded-sm shadow-sm border border-gray-200 overflow-hidden hover:border-saudi hover:shadow-md transition-all duration-300">
                <div class="aspect-[16/10] overflow-hidden bg-gray-200 relative">
                    <img src="public/images/<?= $item['img'] ?>.jpg" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" alt="Service" loading="lazy">
                </div>
                <div class="p-5">
                    <h3 class="text-base md:text-lg text-charcoal mb-1.5 <?= $headingFontClass ?> font-bold group-hover:text-saudi transition-colors"><?= t('srv_'.$idx.'_t') ?></h3>
                    <p class="text-gray-600 text-xs md:text-sm font-light leading-relaxed"><?= t('srv_'.$idx.'_d') ?></p>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 5. Featured Projects Grid -->
<section class="py-10 md:py-12 lg:py-14 bg-white">
    <div class="container mx-auto px-4 lg:px-6 max-w-7xl">
        <div class="text-center max-w-2xl mx-auto mb-8">
            <h2 class="text-xs uppercase tracking-widest text-saudi font-bold mb-2"><?= $lang === 'ar' ? 'سجل مشاريعنا' : 'Portfolio' ?></h2>
            <h3 class="text-2xl sm:text-3xl lg:text-4xl text-charcoal <?= $headingFontClass ?> font-bold leading-tight"><?= t('feat_proj') ?></h3>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
            <?php 
            $proj_imgs = ['shutdown_maintenance.jpg', 'civil_construction.jpg', 'peb_warehouse.jpg', 'contact_hq.jpg', 'trading_warehouse.jpg'];
            for($i=1; $i<=5; $i++): 
                $p_img = 'public/images/' . $proj_imgs[$i-1];
            ?>
            <a href="quote.php" class="group relative overflow-hidden rounded-sm bg-charcoal aspect-[4/3] <?= $i==1 || $i==4 ? 'sm:col-span-2 lg:col-span-1' : '' ?> block shadow-sm hover:shadow-md transition-all duration-300">
                <img src="<?= $p_img ?>" alt="Project <?= $i ?>" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-charcoal/90 via-charcoal/30 to-transparent z-0"></div>
                
                <div class="absolute bottom-0 start-0 end-0 p-5 flex flex-col justify-end z-10">
                    <span class="text-saudi text-xs font-bold uppercase tracking-widest mb-1.5"><?= t('client') ?>: Desert Iron</span>
                    <h3 class="text-white text-lg font-bold <?= $headingFontClass ?> leading-tight text-start">
                        <?= t('proj_'.$i) ?>
                    </h3>
                </div>
            </a>
            <?php endfor; ?>
        </div>
    </div>
</section>

<!-- 6. Final CTA Banner -->
<section class="py-10 md:py-12 bg-charcoal text-center relative overflow-hidden">
    <div class="container mx-auto px-4 max-w-4xl relative z-10">
        <h2 class="text-2xl sm:text-3xl md:text-4xl text-white font-bold <?= $headingFontClass ?> mb-4"><?= t('ready_build') ?></h2>
        <a href="contact.php" class="inline-flex items-center justify-center bg-saudi text-white px-8 py-3 rounded-sm font-bold text-xs uppercase tracking-widest hover:bg-white hover:text-saudi transition-colors tracking-wide min-h-[44px] shadow-md"><?= t('contact_us_now') ?></a>
    </div>
</section>

<?php require_once 'footer.php'; ?>