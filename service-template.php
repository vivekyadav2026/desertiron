<?php 
require_once 'header.php'; 
require_once 'services-data.php';

$service_slug = $slug ?? 'architectural-work';
$data = $services_data[$service_slug][$lang] ?? $services_data[$service_slug]['en'];

$service_title = $data['title'] ?? 'Service Name';
$service_overview = '<p class="mb-3">' . ($data['overview'] ?? '') . '</p><p>' . ($data['overview_2'] ?? '') . '</p>';
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
<section class="relative min-h-[50vh] flex items-center bg-charcoal overflow-hidden pt-24 pb-12">
    <div class="absolute inset-0 z-0">
        <img src="<?= $hero_img ?>" alt="<?= $service_title ?>" class="w-full h-full object-cover opacity-50">
        <div class="absolute inset-0 bg-gradient-to-t from-charcoal/95 via-charcoal/60 to-charcoal/30"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10" data-aos="fade-up">
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

<div class="bg-offwhite py-8 md:py-10">
    <div class="container mx-auto px-4 max-w-7xl">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10">
            
            <!-- Main Content Column -->
            <div class="lg:col-span-8 space-y-8">
                
                <!-- Overview -->
                <section data-aos="fade-up">
                    <h2 class="text-2xl text-charcoal font-semibold mb-3 <?= $headingFontClass ?>"><?= $lang === 'ar' ? '???? ????' : 'Overview' ?></h2>
                    <div class="text-gray-700 leading-relaxed text-sm md:text-base">
                        <?= $service_overview ?>
                    </div>
                </section>
                
                <!-- What We Deliver -->
                <?php if(!empty($service_features)): ?>
                <section data-aos="fade-up">
                    <h2 class="text-2xl text-charcoal font-semibold mb-4 <?= $headingFontClass ?>"><?= $lang === 'ar' ? '???? ????' : 'What We Deliver' ?></h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <?php foreach($service_features as $feat): ?>
                        <div class="bg-white p-4 rounded-sm shadow-sm border border-gray-100 flex items-start gap-3 hover:border-saudi transition-colors duration-300">
                            <div class="mt-0.5 text-saudi shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <p class="text-gray-800 font-medium text-sm leading-snug"><?= $feat ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </section>
                <?php endif; ?>
                
                <!-- Our Process -->
                <?php if(!empty($service_process)): ?>
                <section data-aos="fade-up">
                    <h2 class="text-2xl text-charcoal font-semibold mb-4 <?= $headingFontClass ?>"><?= $lang === 'ar' ? '???????' : 'Our Process' ?></h2>
                    <div class="flex flex-col">
                        <?php foreach($service_process as $idx => $step): ?>
                        <div class="flex gap-4 group">
                            <div class="flex flex-col items-center">
                                <div class="w-8 h-8 rounded bg-charcoal text-white flex items-center justify-center font-bold text-xs shrink-0 group-hover:bg-saudi transition-colors"><?= $idx + 1 ?></div>
                                <?php if($idx < count($service_process) - 1): ?>
                                <div class="w-px h-full bg-gray-200 my-1"></div>
                                <?php endif; ?>
                            </div>
                            <div class="pb-4 pt-1.5">
                                <h4 class="text-sm md:text-base text-gray-800 font-medium mb-0 <?= $headingFontClass ?>"><?= $step ?></h4>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </section>
                <?php endif; ?>
                
                <!-- FAQ -->
                <?php if(!empty($service_faqs)): ?>
                <section data-aos="fade-up">
                    <h2 class="text-2xl text-charcoal font-semibold mb-4 <?= $headingFontClass ?>"><?= $lang === 'ar' ? '??????? ???????' : 'Frequently Asked Questions' ?></h2>
                    <div class="space-y-2">
                        <?php foreach($service_faqs as $idx => $faq): ?>
                        <div class="bg-white border border-gray-200 rounded-sm shadow-sm">
                            <button class="w-full text-left px-5 py-3 font-medium text-sm text-charcoal flex justify-between items-center focus:outline-none hover:text-saudi transition-colors" onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180');">
                                <?= $faq['q'] ?>
                                <svg class="w-4 h-4 text-gray-400 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </button>
                            <div class="hidden px-5 pb-4 text-gray-600 text-sm leading-relaxed border-t border-gray-100 pt-3">
                                <?= $faq['a'] ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </section>
                <?php endif; ?>

            </div>
            
            <!-- Sidebar -->
            <div class="lg:col-span-4 space-y-6">
                
                <!-- Quote Box -->
                <div class="bg-charcoal text-white p-5 rounded-sm shadow-xl" data-aos="fade-left">
                    <h3 class="text-lg font-medium mb-2 <?= $headingFontClass ?>"><?= $lang === 'ar' ? '?? ??? ????? ??????' : 'Ready to get started?' ?></h3>
                    <p class="text-gray-300 mb-4 text-xs leading-relaxed"><?= $lang === 'ar' ? '???? ????? ??????? ????? ??????? ??????? ?????? ??????? ??? ??? ??? ????.' : 'Contact our engineering team to discuss your project requirements.' ?></p>
                    <a href="quote.php" class="block text-center bg-saudi text-white py-2.5 rounded-sm font-bold hover:bg-white hover:text-saudi transition-colors text-xs uppercase tracking-widest shadow-md"><?= t('get_quote') ?></a>
                </div>
                
                <!-- Technical Specs / Industries -->
                <?php if(!empty($service_specs)): ?>
                <div class="bg-white p-5 rounded-sm shadow-sm border border-gray-200" data-aos="fade-up">
                    <h3 class="text-sm text-charcoal font-bold mb-3 uppercase tracking-widest <?= $headingFontClass ?>"><?= $lang === 'ar' ? '???????? ???????' : 'Technical Specs' ?></h3>
                    <ul class="space-y-2.5">
                        <?php foreach($service_specs as $key => $val): ?>
                        <li class="flex flex-col border-b border-gray-100 pb-2 last:border-0 last:pb-0">
                            <span class="text-gray-800 font-bold text-[10px] uppercase tracking-wider mb-0.5"><?= $key ?></span>
                            <span class="text-gray-600 text-xs"><?= $val ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>

                <!-- Related Services -->
                <div class="bg-white p-5 rounded-sm shadow-sm border border-gray-200" data-aos="fade-up">
                    <h3 class="text-sm text-charcoal font-bold mb-3 uppercase tracking-widest <?= $headingFontClass ?>"><?= $lang === 'ar' ? '????? ????' : 'Other Services' ?></h3>
                    <div class="space-y-2">
                        <a href="structural-steel.php" class="block text-gray-700 hover:text-saudi transition-colors text-xs font-medium border-b border-gray-100 pb-2">Structural Steel Buildings</a>
                        <a href="civil-construction.php" class="block text-gray-700 hover:text-saudi transition-colors text-xs font-medium border-b border-gray-100 pb-2">Civil Construction</a>
                        <a href="pre-engineered-buildings.php" class="block text-gray-700 hover:text-saudi transition-colors text-xs font-medium border-b border-gray-100 pb-2">Pre-Engineered Buildings (PEB)</a>
                        <a href="shutdown-maintenance.php" class="block text-gray-700 hover:text-saudi transition-colors text-xs font-medium">Shutdown & Maintenance</a>
                    </div>
                </div>
                
            </div>

        </div>
    </div>
</div>

<?php require_once 'footer.php'; ?>