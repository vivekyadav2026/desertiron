<?php 
require_once 'header.php'; 
require_once 'components.php'; 
?>

<!-- 1. Hero Section (Simple) -->
<section class="relative h-[80vh] flex items-center justify-center overflow-hidden">
    <img src="public/images/hero_riyadh_steel.jpg" class="absolute inset-0 w-full h-full object-cover z-0" alt="Construction Hero">
    <div class="absolute inset-0 bg-charcoal bg-opacity-75 z-0"></div>
    
    <div class="container mx-auto px-4 relative z-10 text-center">
        <h1 class="text-5xl md:text-6xl text-white <?= $headingFontClass ?> mb-6 max-w-4xl mx-auto leading-tight">
            <?= t('hero_line') ?>
        </h1>
        <p class="text-gray-300 text-lg md:text-xl mb-10 max-w-2xl mx-auto">
            <?= t('home_hero_sub') ?>
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="quote.php" class="bg-saudi text-white px-8 py-3 rounded font-bold hover:bg-opacity-90 transition <?= $headingFontClass ?>"><?= t('get_quote') ?></a>
            <a href="services.php" class="border-2 border-white text-white px-8 py-3 rounded font-bold hover:bg-white hover:text-charcoal transition <?= $headingFontClass ?>"><?= t('our_services') ?></a>
        </div>
    </div>
</section>

<!-- 2. Who We Are -->
<section class="py-24 bg-white relative">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <?= renderSectionHeading(t('who_we_are'), t('who_we_are_sub')) ?>
                <p class="text-steel text-lg leading-relaxed mb-8"><?= t('who_we_are_desc') ?></p>
                <div class="flex flex-wrap gap-3 mb-8">
                    <span class="px-4 py-2 bg-offwhite border border-steel border-opacity-20 text-charcoal text-sm font-medium rounded"><?= t('tag_structural') ?></span>
                    <span class="px-4 py-2 bg-offwhite border border-steel border-opacity-20 text-charcoal text-sm font-medium rounded"><?= t('tag_engineering') ?></span>
                    <span class="px-4 py-2 bg-offwhite border border-steel border-opacity-20 text-charcoal text-sm font-medium rounded"><?= t('tag_construction') ?></span>
                </div>
                <a href="about.php" class="inline-flex items-center gap-2 text-saudi font-bold hover:text-charcoal transition-colors">
                    <?= t('more_about_us') ?>
                    <svg class="w-5 h-5 <?= $lang === 'ar' ? 'rotate-180' : '' ?>" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
            <div class="relative">
                <div class="aspect-[4/3] rounded overflow-hidden shadow-xl">
                    <img src="public/images/about_us_team.jpg" alt="Construction Site" class="w-full h-full object-cover">
                </div>
                <div class="absolute -bottom-6 <?= $lang === 'ar' ? '-left-6' : '-right-6' ?> w-32 h-32 bg-saudi-pattern bg-saudi rounded z-[-1]"></div>
            </div>
        </div>
    </div>
</section>

<!-- 3. Our Capability (Improved) -->
<section class="py-24 bg-offwhite border-y border-steel border-opacity-10">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            
            <!-- Left: Image & Floating Badge -->
            <div class="relative z-10">
                <img src="public/images/structural_steel.jpg" alt="Our Capability" class="w-full h-[400px] md:h-[500px] object-cover rounded shadow-lg">
                
                <!-- Decorative Green Box -->
                <div class="absolute -bottom-6 -end-6 w-32 h-32 bg-saudi rounded -z-10 hidden md:block"></div>
                
                <!-- Floating Stat Box -->
                <div class="absolute top-8 -start-6 bg-charcoal text-white p-6 rounded shadow-xl hidden md:block border-s-4 border-saudi">
                    <h4 class="text-3xl font-bold <?= $headingFontClass ?> text-saudi mb-1">50,000+</h4>
                    <p class="text-sm text-gray-300 font-medium">Tons Annual Capacity</p>
                </div>
            </div>

            <!-- Right: Content & Bars -->
            <div>
                <h2 class="text-3xl md:text-4xl text-charcoal <?= $headingFontClass ?> mb-4"><?= t('our_capability') ?></h2>
                <div class="w-16 h-1 bg-saudi mb-6"></div>
                <p class="text-steel leading-relaxed mb-10 text-lg">
                    <?= $lang === 'ar' ? '????? ?????? ????? ????? ?? ???? ????? ????? ????? ?? ???????. ???? ??????? ????? ?? ??????? ??????? ??????? ??????? ???????? ????? ?????? ??????? ??? ????? ?????? ?????? ?????? ?? ??? ????? ?????? ?????? ??????.' : 'Desert Iron operates one of the most advanced fabrication facilities in the Kingdom. Backed by a massive fleet of heavy equipment and a specialized engineering workforce, we have the capacity to execute multiple gigaprojects simultaneously with unyielding quality.' ?>
                </p>
                
                <div class="space-y-8" id="capability-bars">
                    <!-- Steel Fabrication -->
                    <div>
                        <div class="flex justify-between mb-2">
                            <span class="font-bold text-charcoal text-lg"><?= t('cap_steel') ?></span>
                            <span class="text-saudi font-bold text-lg">95%</span>
                        </div>
                        <div class="w-full bg-white border border-gray-200 rounded h-3 overflow-hidden">
                            <div class="bg-saudi h-3 rounded capability-bar" data-width="95%" style="width: 0%;"></div>
                        </div>
                    </div>
                    <!-- Civil Works -->
                    <div>
                        <div class="flex justify-between mb-2">
                            <span class="font-bold text-charcoal text-lg"><?= t('cap_civil') ?></span>
                            <span class="text-saudi font-bold text-lg">85%</span>
                        </div>
                        <div class="w-full bg-white border border-gray-200 rounded h-3 overflow-hidden">
                            <div class="bg-saudi h-3 rounded capability-bar" data-width="85%" style="width: 0%;"></div>
                        </div>
                    </div>
                    <!-- Engineering -->
                    <div>
                        <div class="flex justify-between mb-2">
                            <span class="font-bold text-charcoal text-lg"><?= t('cap_eng') ?></span>
                            <span class="text-saudi font-bold text-lg">90%</span>
                        </div>
                        <div class="w-full bg-white border border-gray-200 rounded h-3 overflow-hidden">
                            <div class="bg-saudi h-3 rounded capability-bar" data-width="90%" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. Our Services (9 Cards Grid) -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-4">
        <?= renderSectionHeading(t('services_title'), t('services_sub')) ?>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php 
            $srv_imgs = ['architectural_work','civil_construction','peb_warehouse','structural_steel','roof_wall_panels','call_off_services','trading_warehouse','technical_staffing','shutdown_maintenance'];
            for($i=1; $i<=9; $i++): 
                $srvImg = 'public/images/' . $srv_imgs[$i-1] . '.jpg';
            ?>
            <div class="group border border-gray-200 rounded overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 bg-offwhite flex flex-col">
                <div class="h-48 overflow-hidden relative">
                    <div class="absolute inset-0 bg-charcoal bg-opacity-20 group-hover:bg-opacity-0 transition-all z-10"></div>
                    <img src="<?= $srvImg ?>" alt="Service" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-6 flex-grow flex flex-col">
                    <h3 class="text-xl text-charcoal mb-3 <?= $headingFontClass ?>"><?= t('srv_'.$i.'_t') ?></h3>
                    <p class="text-steel text-sm mb-6 flex-grow"><?= t('srv_'.$i.'_d') ?></p>
                    <a href="service-detail.php?id=<?= $i ?>" class="text-saudi font-bold text-sm hover:text-charcoal transition-colors inline-flex items-center gap-1 mt-auto">
                        <?= t('learn_more') ?>
                        <svg class="w-4 h-4 <?= $lang === 'ar' ? 'rotate-180' : '' ?>" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<!-- 5. Stats Counters -->
<section class="py-16 bg-charcoal text-offwhite relative bg-grid-pattern">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center" id="stats-section">
            <div class="p-4">
                <div class="text-5xl text-saudi mb-2 <?= $headingFontClass ?> flex items-center justify-center">
                    <span class="stat-number" data-target="25">0</span>+
                </div>
                <div class="text-sm uppercase tracking-wider text-steel"><?= t('stats_years') ?></div>
            </div>
            <div class="p-4">
                <div class="text-5xl text-saudi mb-2 <?= $headingFontClass ?> flex items-center justify-center">
                    <span class="stat-number" data-target="300">0</span>+
                </div>
                <div class="text-sm uppercase tracking-wider text-steel"><?= t('stats_projects') ?></div>
            </div>
            <div class="p-4">
                <div class="text-5xl text-saudi mb-2 <?= $headingFontClass ?> flex items-center justify-center">
                    <span class="stat-number" data-target="850">0</span>+
                </div>
                <div class="text-sm uppercase tracking-wider text-steel"><?= t('stats_staff') ?></div>
            </div>
            <div class="p-4">
                <div class="text-5xl text-saudi mb-2 <?= $headingFontClass ?> flex items-center justify-center">
                    <span class="stat-number" data-target="150">0</span>+
                </div>
                <div class="text-sm uppercase tracking-wider text-steel"><?= t('stats_clients') ?></div>
            </div>
        </div>
    </div>
</section>

<!-- 6. Why Choose Us (8 Points) -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-4">
        <?= renderSectionHeading(t('why_choose_us'), t('why_choose_sub')) ?>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php 
            $icons = [
                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />',
                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />',
                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />',
                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />',
                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />',
                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />',
                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />',
                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />'
            ];
            for($i=1; $i<=8; $i++):
            ?>
            <div class="p-6 border border-gray-100 rounded bg-offwhite hover:border-saudi transition-colors group">
                <div class="w-12 h-12 bg-white rounded flex items-center justify-center text-saudi mb-4 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <?= $icons[$i-1] ?>
                    </svg>
                </div>
                <h4 class="text-charcoal font-bold <?= $headingFontClass ?>"><?= t('why_'.$i) ?></h4>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<!-- 7. Industries We Serve -->
<section class="py-20 bg-offwhite border-y border-steel border-opacity-10">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl text-charcoal <?= $headingFontClass ?> mb-4"><?= t('ind_title') ?></h2>
            <div class="w-16 h-1 bg-saudi mx-auto"></div>
        </div>
        
        <div class="flex flex-wrap justify-center gap-4 md:gap-6">
            <?php for($i=1; $i<=6; $i++): ?>
            <div class="bg-white px-6 py-4 rounded shadow-sm border border-gray-200 text-charcoal font-medium hover:bg-saudi hover:text-white transition-colors cursor-pointer">
                <?= t('ind_'.$i) ?>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<!-- 8. Featured Projects (5 Cards) -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-4">
        <?= renderSectionHeading(t('feat_proj'), t('feat_proj_sub')) ?>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php 
$proj_imgs = ['shutdown_maintenance.jpg', 'civil_construction.jpg', 'peb_warehouse.jpg', 'contact_hq.jpg', 'trading_warehouse.jpg'];
for($i=1; $i<=5; $i++): 
    $p_img = 'public/images/' . $proj_imgs[$i-1];
?>
<div class="group relative overflow-hidden rounded bg-charcoal aspect-[4/3] <?= $i==1 || $i==4 ? 'md:col-span-2 lg:col-span-1' : '' ?>">
    <img src="<?= $p_img ?>" alt="Project" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-charcoal via-charcoal/60 to-transparent opacity-90"></div>
                
                <div class="absolute bottom-0 left-0 right-0 p-6 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                    <span class="text-saudi text-xs font-bold uppercase tracking-wider mb-2 block bg-white/10 w-max px-2 py-1 rounded backdrop-blur-sm"><?= t('client') ?>: Desert Iron</span>
                    <h3 class="text-offwhite text-xl mb-1 <?= $headingFontClass ?>"><?= t('proj_'.$i) ?></h3>
                    <p class="text-steel text-sm flex items-center gap-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                        Saudi Arabia
                    </p>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>



<!-- 10. Final CTA -->
<?= renderCTABand(t('ready_build'), t('contact_us_now')) ?>

<!-- Custom Styles & Animations for Homepage -->
<style>
    /* Capability Bar Animation Transition */
    .capability-bar { transition: width 1.5s cubic-bezier(0.4, 0, 0.2, 1); }
    
    /* Marquee Animation */
    .marquee-container { white-space: nowrap; }
    .ltr-marquee { animation: marqueeLtr 25s linear infinite; }
    .rtl-marquee { animation: marqueeRtl 25s linear infinite; }
    
    @keyframes marqueeLtr {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
    @keyframes marqueeRtl {
        0% { transform: translateX(0); }
        100% { transform: translateX(50%); }
    }
</style>

<!-- JS for Scroll Animations -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // 1. Progress Bars Observer
        const bars = document.querySelectorAll('.capability-bar');
        const barObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if(entry.isIntersecting) {
                    const bar = entry.target;
                    bar.style.width = bar.getAttribute('data-width');
                    observer.unobserve(bar);
                }
            });
        }, { threshold: 0.5 });
        
        bars.forEach(bar => barObserver.observe(bar));

        // 2. Stats Counter Observer
        const stats = document.querySelectorAll('.stat-number');
        const statObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if(entry.isIntersecting) {
                    const el = entry.target;
                    const target = parseInt(el.getAttribute('data-target'));
                    let current = 0;
                    const increment = target / 40; // 40 steps
                    const timer = setInterval(() => {
                        current += increment;
                        if(current >= target) {
                            el.innerText = target;
                            clearInterval(timer);
                        } else {
                            el.innerText = Math.floor(current);
                        }
                    }, 40);
                    observer.unobserve(el);
                }
            });
        }, { threshold: 0.5 });

        stats.forEach(stat => statObserver.observe(stat));
    });
</script>

<?php require_once 'footer.php'; ?>

