<?php
$page_title = 'Our Services | Desert Iron';
require_once 'header.php';

$services = [
    [
        'title' => 'Structural Steel Buildings',
        'title_ar' => '??????? ????????? ????????',
        'slug' => 'structural-steel',
        'img' => 'structural_steel.jpg',
        'desc' => 'High-strength, precision-engineered steel structures for heavy industrial and commercial applications.'
    ],
    [
        'title' => 'Civil Construction',
        'title_ar' => '?????? ??????',
        'slug' => 'civil-construction',
        'img' => 'civil_construction.jpg',
        'desc' => 'Comprehensive civil works, from massive foundational concrete pouring to complete site development.'
    ],
    [
        'title' => 'Pre-Engineered Buildings',
        'title_ar' => '??????? ????? ???????',
        'slug' => 'pre-engineered-buildings',
        'img' => 'peb_warehouse.jpg',
        'desc' => 'Cost-effective, rapid-deployment PEB solutions optimized for warehouses and logistics hubs.'
    ],
    [
        'title' => 'Architectural Work',
        'title_ar' => '??????? ????????? ????????',
        'slug' => 'architectural-work',
        'img' => 'architectural_work.jpg',
        'desc' => 'BIM-integrated architectural planning and geotechnical coordination aligned with SBC 201.'
    ],
    [
        'title' => 'Roof & Wall Panels',
        'title_ar' => '????? ?????? ????????',
        'slug' => 'roof-wall-panels',
        'img' => 'roof_wall_panels.jpg',
        'desc' => 'Advanced cladding systems, including sandwich panels and corrugated sheets for thermal efficiency.'
    ],
    [
        'title' => 'Call-off Services',
        'title_ar' => '????? ????????? ????????',
        'slug' => 'call-off-services',
        'img' => 'call_off_services.jpg',
        'desc' => 'On-demand contracting frameworks providing rapid mobilization for critical facility operations.'
    ],
    [
        'title' => 'Trading',
        'title_ar' => '??????? ????????',
        'slug' => 'trading',
        'img' => 'trading_warehouse.jpg',
        'desc' => 'Procurement and supply of premium structural materials, rebars, and fastening systems.'
    ],
    [
        'title' => 'Technical Staffing',
        'title_ar' => '????? ??????? ??????',
        'slug' => 'technical-staffing',
        'img' => 'technical_staffing.jpg',
        'desc' => 'Deployment of certified welders, QA/QC inspectors, and project managers for mega-projects.'
    ],
    [
        'title' => 'Shutdown & Maintenance',
        'title_ar' => '??????? ?????? ???????',
        'slug' => 'shutdown-maintenance',
        'img' => 'shutdown_maintenance.jpg',
        'desc' => 'Time-critical plant turnaround services ensuring maximum safety and minimal operational downtime.'
    ]
];
?>

<!-- Cinematic Hero Banner -->
<section class="relative min-h-[40vh] flex items-center bg-charcoal overflow-hidden pt-16 pb-8">
    <div class="absolute inset-0 z-0">
        <img src="public/images/civil_construction.jpg" alt="Desert Iron Services" class="w-full h-full object-cover opacity-30">
        <!-- Proper Gradient Overlay for 100% Text Visibility -->
        <div class="absolute inset-0 bg-gradient-to-t from-charcoal via-charcoal/50 to-charcoal/30"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10 text-center" >
        <div class="flex items-center justify-center gap-4 mb-4">
            <div class="w-8 h-[2px] bg-saudi"></div>
            <span class="text-saudi text-xs font-bold uppercase tracking-widest">Our Expertise</span>
            <div class="w-8 h-[2px] bg-saudi"></div>
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl text-white font-bold mb-4 leading-tight <?= $headingFontClass ?>">
            <?= $lang === 'ar' ? '??????? ????????' : 'Comprehensive Services' ?>
        </h1>
        <p class="text-gray-300 max-w-2xl mx-auto text-sm md:text-base font-light leading-relaxed">
            <?= $lang === 'ar' ? '???? ?????? ?????? ??????? ???????? ???????? ?????????? ?? ??????? ???????? ??? ????? ????? ???????? ???????? ????? ?????? ??????.' : 'Delivering end-to-end engineering solutions for industrial and commercial mega-projects, from architectural design to steel fabrication and safe field execution.' ?>
        </p>
    </div>
</section>

<!-- Services Grid Section -->
<section class="py-12 md:py-20 bg-offwhite">
    <div class="container mx-auto px-4 max-w-7xl">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
            
            <?php foreach($services as $idx => $service): ?>
            <a href="<?= $service['slug'] ?>.php" class="group block relative rounded-sm overflow-hidden bg-white shadow-sm border border-gray-100 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                
                <!-- Image Box -->
                <div class="relative h-56 overflow-hidden">
                    <img src="public/images/<?= $service['img'] ?>" alt="<?= $service['title'] ?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-charcoal/80 to-transparent"></div>
                    
                    <div class="absolute bottom-4 left-4 right-4 flex justify-between items-end">
                        <h3 class="text-white text-lg md:text-xl font-bold <?= $headingFontClass ?> leading-tight">
                            <?= $lang === 'ar' ? $service['title_ar'] : $service['title'] ?>
                        </h3>
                        <div class="w-8 h-8 rounded-full bg-saudi/90 text-white flex items-center justify-center shrink-0 opacity-0 group-hover:opacity-100 transition-opacity transform translate-y-2 group-hover:translate-y-0">
                            <svg class="w-4 h-4 <?= $lang === 'ar' ? 'rotate-180' : '' ?>" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </div>
                </div>
                
                <!-- Content Box -->
                <div class="p-5">
                    <p class="text-gray-600 text-sm font-light leading-relaxed">
                        <?= $service['desc'] ?>
                    </p>
                    <div class="mt-4 flex items-center text-xs font-bold text-saudi uppercase tracking-widest group-hover:text-charcoal transition-colors">
                        <?= $lang === 'ar' ? '????? ??????' : 'Explore Service' ?> 
                        <span class="inline-block transition-transform group-hover:translate-x-1 mx-2">&rarr;</span>
                    </div>
                </div>
                
            </a>
            <?php endforeach; ?>
            
        </div>
    </div>
</section>

<!-- Bottom CTA -->
<section class="py-16 bg-charcoal relative overflow-hidden">
    <!-- Subtle Pattern -->
    <div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: radial-gradient(circle at 100% 0%, #ffffff 2px, transparent 2px); background-size: 32px 32px;"></div>
    
    <div class="container mx-auto px-4 relative z-10 max-w-4xl text-center">
        <h2 class="text-3xl text-white font-bold mb-4 <?= $headingFontClass ?>">
            <?= $lang === 'ar' ? '???? ???? ?????? ???????' : 'Ready to start your next project?' ?>
        </h2>
        <p class="text-gray-300 text-sm mb-8 font-light">
            <?= $lang === 'ar' ? '????? ?? ???? ??????? ????? ??????? ???????? ??????? ??????? ??? ?????.' : 'Connect with our expert engineering team to discuss technical details and get a tailored proposal.' ?>
        </p>
        <a href="quote.php" class="inline-flex items-center gap-2 bg-saudi text-white px-8 py-3 rounded-sm font-bold uppercase tracking-widest text-sm shadow-lg hover:bg-white hover:text-saudi transition-colors">
            <?= t('get_quote') ?>
        </a>
    </div>
</section>

<?php require_once 'footer.php'; ?>
