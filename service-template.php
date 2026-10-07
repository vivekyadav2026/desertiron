<?php 
require_once 'header.php'; 
require_once 'services-data.php';

$service_slug = $slug ?? 'architectural-work';
$data = $services_data[$service_slug][$lang] ?? $services_data[$service_slug]['en'];

$service_title = $data['title'] ?? 'Service Name';
$service_overview = '<p class="mb-4">' . ($data['overview'] ?? '') . '</p><p>' . ($data['overview_2'] ?? '') . '</p>';
$service_features = $data['features'] ?? [];
$service_process = $data['steps'] ?? [];
$service_faqs = $data['faqs'] ?? [];
$service_specs = $data['specs'] ?? [];

$img_map = [
    'architectural-work' => 'architectural_work.jpg',
    'civil-construction' => 'civil_construction.jpg',
    'pre-engineered-buildings' => 'peb_warehouse.jpg',
    'structural-steel' => 'structural_steel.jpg',
    'roof-wall-panels' => 'roof_wall_panels.jpg',
    'call-off-services' => 'call_off_services.jpg',
    'trading' => 'trading_warehouse.jpg',
    'technical-staffing' => 'technical_staffing.jpg',
    'shutdown-maintenance' => 'shutdown_maintenance.jpg',
];

$hero_img = 'public/images/' . ($img_map[$service_slug] ?? 'civil_construction.jpg');
?>

<!-- Hero Section -->
<section class="relative min-h-[45vh] md:min-h-[50vh] flex items-center bg-charcoal overflow-hidden pt-24 pb-12">
    <div class="absolute inset-0 z-0">
        <img src="<?= $hero_img ?>" alt="<?= $service_title ?>" class="w-full h-full object-cover opacity-75">
        <div class="absolute inset-0 bg-gradient-to-t from-charcoal/90 via-charcoal/40 to-charcoal/20"></div>
    </div>
    
    <div class="container mx-auto px-4 md:px-6 max-w-7xl relative z-10">
        <div class="flex items-center gap-4 mb-5">
            <div class="w-12 h-[3px] bg-saudi"></div>
            <span class="text-gray-300 text-xs md:text-sm font-bold uppercase tracking-widest drop-shadow-sm">
                <a href="services.php" class="text-white hover:text-saudi transition-colors">Our Services</a> 
                <span class="mx-2 text-gray-500">/</span> 
                <?= $service_title ?>
            </span>
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl text-white font-bold leading-tight drop-shadow-lg <?= $headingFontClass ?>">
            <?= $service_title ?>
        </h1>
    </div>
</section>

<!-- Main Service Details Section -->
<div class="bg-offwhite py-12 md:py-16 lg:py-24">
    <div class="container mx-auto px-4 md:px-6 max-w-7xl">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            
            <!-- Main Content Column -->
            <div class="lg:col-span-8 space-y-10 md:space-y-12">
                
                <!-- Overview -->
                <section >
                    <h2 class="text-2xl md:text-3xl text-charcoal font-bold mb-4 <?= $headingFontClass ?>"><?= $lang === 'ar' ? '???? ????' : 'Overview' ?></h2>
                    <div class="text-gray-700 leading-relaxed text-base md:text-lg font-light">
                        <?= $service_overview ?>
                    </div>
                </section>
                
                <!-- What We Deliver (1 col mobile, 2 col sm+) -->
                <?php if(!empty($service_features)): ?>
                <section>
                    <h2 class="text-2xl md:text-3xl text-charcoal font-bold mb-6 <?= $headingFontClass ?>"><?= $lang === 'ar' ? '???? ????' : 'What We Deliver' ?></h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <?php foreach($service_features as $feat): ?>
                        <div class="bg-white p-5 rounded-sm shadow-sm border border-gray-200 flex items-start gap-3.5 group hover:border-saudi transition-colors duration-300">
                            <div class="mt-0.5 text-saudi shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <p class="text-gray-800 font-medium text-sm md:text-base leading-snug"><?= $feat ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </section>
                <?php endif; ?>
                
                <!-- Our Process -->
                <?php if(!empty($service_process)): ?>
                <section>
                    <h2 class="text-2xl md:text-3xl text-charcoal font-bold mb-6 <?= $headingFontClass ?>"><?= $lang === 'ar' ? '???????' : 'Our Process' ?></h2>
                    <div class="space-y-3">
                        <?php foreach($service_process as $idx => $step): ?>
                        <div class="flex gap-4 group">
                            <div class="flex flex-col items-center">
                                <div class="w-9 h-9 rounded bg-charcoal text-white flex items-center justify-center font-bold text-xs shrink-0 group-hover:bg-saudi transition-colors"><?= $idx + 1 ?></div>
                                <?php if($idx < count($service_process) - 1): ?>
                                <div class="w-px h-full bg-gray-200 my-1"></div>
                                <?php endif; ?>
                            </div>
                            <div class="pb-4 pt-1">
                                <h4 class="text-base md:text-lg text-gray-800 font-medium mb-0 <?= $headingFontClass ?>"><?= $step ?></h4>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </section>
                <?php endif; ?>
                
                <!-- FAQ Accordion (48px header tap height) -->
                <?php if(!empty($service_faqs)): ?>
                <section>
                    <h2 class="text-2xl md:text-3xl text-charcoal font-bold mb-6 <?= $headingFontClass ?>"><?= $lang === 'ar' ? '??????? ???????' : 'Frequently Asked Questions' ?></h2>
                    <div class="space-y-3">
                        <?php foreach($service_faqs as $idx => $faq): ?>
                        <div class="bg-white border border-gray-200 rounded-sm shadow-sm">
                            <button class="w-full text-start px-5 py-4 min-h-[48px] font-medium text-sm md:text-base text-charcoal flex justify-between items-center focus:outline-none hover:text-saudi transition-colors" onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180');">
                                <span class="pe-4"><?= $faq['q'] ?></span>
                                <svg class="w-5 h-5 text-gray-400 shrink-0 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </button>
                            <div class="hidden px-5 pb-5 text-gray-600 text-sm leading-relaxed border-t border-gray-100 pt-4">
                                <?= $faq['a'] ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </section>
                <?php endif; ?>

            </div>
            
            <!-- Sidebar (Mobile stack) -->
            <div class="lg:col-span-4 space-y-6">
                
                <!-- Quote Box -->
                <div class="bg-charcoal text-white p-6 md:p-8 rounded-sm shadow-xl">
                    <h3 class="text-xl md:text-2xl font-bold mb-3 <?= $headingFontClass ?>"><?= $lang === 'ar' ? '?? ??? ????? ??????' : 'Ready to get started?' ?></h3>
                    <p class="text-gray-300 mb-6 text-sm leading-relaxed font-light"><?= $lang === 'ar' ? '???? ????? ??????? ????? ??????? ??????? ?????? ??????? ??? ??? ??? ????.' : 'Contact our engineering team to discuss your project requirements and receive a detailed technical proposal.' ?></p>
                    <a href="quote.php" class="block text-center bg-saudi text-white py-3.5 rounded-sm font-bold hover:bg-white hover:text-saudi transition-colors text-xs uppercase tracking-widest shadow-md min-h-[44px] flex items-center justify-center"><?= t('get_quote') ?></a>
                </div>
                
                <!-- Technical Specs (Stacked Key-Value Cards on Mobile) -->
                <?php if(!empty($service_specs)): ?>
                <div class="bg-white p-6 rounded-sm shadow-sm border border-gray-200">
                    <h3 class="text-sm text-charcoal font-bold mb-4 uppercase tracking-widest <?= $headingFontClass ?>"><?= $lang === 'ar' ? '???????? ???????' : 'Technical Specs' ?></h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-3">
                        <?php foreach($service_specs as $key => $val): ?>
                        <div class="bg-offwhite p-3.5 rounded-sm border border-gray-100">
                            <span class="text-gray-800 font-bold text-[10px] uppercase tracking-wider block mb-1"><?= $key ?></span>
                            <span class="text-gray-700 text-xs md:text-sm font-medium"><?= $val ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Related Services -->
                <div class="bg-white p-6 rounded-sm shadow-sm border border-gray-200">
                    <h3 class="text-sm text-charcoal font-bold mb-4 uppercase tracking-widest <?= $headingFontClass ?>"><?= $lang === 'ar' ? '????? ????' : 'Other Services' ?></h3>
                    <div class="space-y-2">
                        <a href="structural-steel.php" class="block text-gray-700 hover:text-saudi transition-colors text-xs md:text-sm font-medium border-b border-gray-100 pb-2.5 py-1">Structural Steel Buildings</a>
                        <a href="civil-construction.php" class="block text-gray-700 hover:text-saudi transition-colors text-xs md:text-sm font-medium border-b border-gray-100 pb-2.5 py-1">Civil Construction</a>
                        <a href="pre-engineered-buildings.php" class="block text-gray-700 hover:text-saudi transition-colors text-xs md:text-sm font-medium border-b border-gray-100 pb-2.5 py-1">Pre-Engineered Buildings (PEB)</a>
                        <a href="shutdown-maintenance.php" class="block text-gray-700 hover:text-saudi transition-colors text-xs md:text-sm font-medium py-1">Shutdown & Maintenance</a>
                    </div>
                </div>
                
            </div>

        </div>
    </div>
</div>

<!-- Mobile Sticky Quick-Action Bar (Fixed at bottom on screens < 768px) -->
<div class="md:hidden fixed bottom-0 left-0 right-0 z-40 bg-charcoal/95  p-3 border-t border-saudi/40 flex gap-3 shadow-2xl safe-pb">
    <a href="tel:+966599510213" class="flex-1 bg-white/10 text-white text-center py-2.5 rounded-sm font-bold text-xs uppercase tracking-widest flex items-center justify-center gap-2 border border-white/20 min-h-[44px]">
        <svg class="w-4 h-4 text-saudi" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
        Call Us
    </a>
    <a href="quote.php" class="flex-1 bg-saudi text-white text-center py-2.5 rounded-sm font-bold text-xs uppercase tracking-widest flex items-center justify-center gap-2 shadow-md min-h-[44px]">
        Get Quote &rarr;
    </a>
</div>

<?php require_once 'footer.php'; ?>