<?php
// Ensure this file is called with $slug defined.
if(!isset($slug) || !isset($services_data[$slug])) {
    die("Service not found.");
}
$sd = $services_data[$slug][$lang];
$page_title = $sd['meta_title'];
$page_meta_desc = $sd['meta_desc'];

require_once 'header.php';
require_once 'components.php';

// JSON-LD Schema
$schema = [
    "@context" => "https://schema.org",
    "@type" => "Service",
    "name" => $sd['title'],
    "description" => $sd['meta_desc'],
    "provider" => [
        "@type" => "LocalBusiness",
        "name" => "Desert Iron",
        "address" => ["@type" => "PostalAddress", "addressCountry" => "SA", "addressLocality" => "Riyadh"]
    ],
    "areaServed" => "SA"
];
?>
<script type="application/ld+json">
<?= json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
</script>

<!-- Hero Banner -->
<section class="relative pt-32 pb-20 bg-charcoal text-offwhite overflow-hidden">
    <?php
    $srv_map = ['architectural-work'=>'architectural_work','civil-construction'=>'civil_construction','pre-engineered-buildings'=>'peb_warehouse','structural-steel'=>'structural_steel','roof-wall-panels'=>'roof_wall_panels','call-off-services'=>'call_off_services','trading'=>'trading_warehouse','technical-staffing'=>'technical_staffing','shutdown-maintenance'=>'shutdown_maintenance'];
    $bg_img = 'public/images/' . ($srv_map[$slug] ?? 'hero_riyadh_steel') . '.jpg';
    ?>
    <div class="absolute inset-0 bg-[url('<?= $bg_img ?>')] bg-cover bg-center opacity-30"></div>
    <div class="container mx-auto px-4 relative z-10">
        <?= renderBreadcrumb([t('home') => 'index.php', t('services') => 'services.php', $sd['title'] => '#']) ?>
        <h1 class="text-4xl md:text-5xl <?= $headingFontClass ?> mb-4"><?= $sd['title'] ?></h1>
    </div>
</section>

<!-- Main Content Grid -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            
            <!-- Left Column (Content) -->
            <div class="lg:col-span-2 space-y-12">
                
                <!-- Overview -->
                <div>
                    <h2 class="text-2xl text-charcoal <?= $headingFontClass ?> mb-4"><?= $lang==='ar' ? 'نظرة عامة' : 'Overview' ?></h2>
                    <div class="w-12 h-1 bg-saudi mb-6"></div>
                    <p class="text-steel text-lg mb-4 leading-relaxed"><?= $sd['overview'] ?></p>
                    <p class="text-steel leading-relaxed"><?= $sd['overview_2'] ?></p>
                </div>

                <!-- What We Deliver (Features) -->
                <div>
                    <h2 class="text-2xl text-charcoal <?= $headingFontClass ?> mb-4"><?= $lang==='ar' ? 'ما نقدمه' : 'What We Deliver' ?></h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-6">
                        <?php foreach($sd['features'] as $feature): ?>
                        <div class="flex items-start gap-3 p-4 bg-offwhite border border-gray-100 rounded">
                            <svg class="w-6 h-6 text-saudi shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                            <span class="text-charcoal font-medium"><?= $feature ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Our Process (5 Steps) -->
                <div>
                    <h2 class="text-2xl text-charcoal <?= $headingFontClass ?> mb-6"><?= $lang==='ar' ? 'عملية التنفيذ' : 'Our Process' ?></h2>
                    <div class="space-y-4">
                        <?php foreach($sd['steps'] as $index => $step): ?>
                        <div class="flex items-center gap-4 bg-white border border-gray-200 p-4 rounded shadow-sm relative overflow-hidden">
                            <div class="absolute left-0 top-0 bottom-0 w-1 bg-saudi"></div>
                            <div class="w-10 h-10 shrink-0 bg-charcoal text-white rounded-full flex items-center justify-center font-bold">
                                <?= $index + 1 ?>
                            </div>
                            <div class="text-charcoal font-medium text-lg"><?= $step ?></div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Technical Specs Table -->
                <div>
                    <h2 class="text-2xl text-charcoal <?= $headingFontClass ?> mb-6"><?= $lang==='ar' ? 'المواصفات الفنية' : 'Technical Capabilities' ?></h2>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse border border-gray-200">
                            <tbody>
                                <?php foreach($sd['specs'] as $key => $val): ?>
                                <tr class="border-b border-gray-200 hover:bg-offwhite transition-colors">
                                    <th class="py-4 px-6 bg-gray-50 text-charcoal font-bold border-r border-gray-200 w-1/3"><?= $key ?></th>
                                    <td class="py-4 px-6 text-steel"><?= $val ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- FAQs -->
                <?php if(!empty($sd['faqs'])): ?>
                <div>
                    <h2 class="text-2xl text-charcoal <?= $headingFontClass ?> mb-6"><?= $lang==='ar' ? 'الأسئلة الشائعة' : 'Frequently Asked Questions' ?></h2>
                    <div class="space-y-3">
                        <?php foreach($sd['faqs'] as $i => $faq): ?>
                        <details class="group border border-gray-200 rounded bg-white [&_summary::-webkit-details-marker]:hidden">
                            <summary class="flex cursor-pointer items-center justify-between gap-1.5 p-4 text-charcoal font-medium">
                                <?= $faq['q'] ?>
                                <span class="transition duration-300 group-open:-rotate-180">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" /></svg>
                                </span>
                            </summary>
                            <div class="border-t border-gray-200 p-4 text-steel">
                                <p><?= $faq['a'] ?></p>
                            </div>
                        </details>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>
                
            </div>
            
            <!-- Right Column (Sidebar) -->
            <div class="space-y-8">
                
                <!-- Request Quote Card -->
                <div class="bg-offwhite border-t-4 border-saudi p-6 rounded shadow-sm">
                    <h3 class="text-xl text-charcoal <?= $headingFontClass ?> mb-2"><?= t('get_quote') ?></h3>
                    <p class="text-steel text-sm mb-6"><?= $lang==='ar' ? 'تواصل معنا اليوم لمناقشة متطلبات مشروعك.' : 'Contact us today to discuss your project requirements.' ?></p>
                    <form class="space-y-4">
                        <input type="text" placeholder="<?= $lang==='ar' ? 'الاسم' : 'Full Name' ?>" class="w-full border border-gray-300 p-3 rounded text-sm outline-none focus:border-saudi">
                        <input type="email" placeholder="<?= $lang==='ar' ? 'البريد الإلكتروني' : 'Email' ?>" class="w-full border border-gray-300 p-3 rounded text-sm outline-none focus:border-saudi">
                        <textarea rows="3" placeholder="<?= $lang==='ar' ? 'رسالتك' : 'Your Message' ?>" class="w-full border border-gray-300 p-3 rounded text-sm outline-none focus:border-saudi"></textarea>
                        <button type="button" class="w-full bg-saudi text-white py-3 rounded font-bold hover:bg-opacity-90 transition <?= $headingFontClass ?>">
                            <?= $lang==='ar' ? 'إرسال الطلب' : 'Submit Request' ?>
                        </button>
                    </form>
                </div>

                <!-- Related Services -->
                <div class="bg-charcoal text-offwhite p-6 rounded shadow-sm">
                    <h3 class="text-xl <?= $headingFontClass ?> mb-4"><?= t('services') ?></h3>
                    <ul class="space-y-2">
                        <?php foreach($services_data as $s_slug => $s_data): if($s_slug === $slug) continue; ?>
                        <li>
                            <a href="<?= $s_slug ?>.php" class="text-sm text-steel hover:text-saudi transition-colors flex items-center gap-2">
                                <span class="w-1.5 h-1.5 bg-saudi rounded-full"></span>
                                <?= $s_data[$lang]['title'] ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
</section>

<!-- Related Projects Grid (Reusing CTA Band for now as requested by user to keep it simple, or insert project cards) -->
<section class="py-16 bg-offwhite border-t border-gray-200">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl text-charcoal <?= $headingFontClass ?> mb-8 text-center"><?= $lang==='ar' ? 'مشاريع ذات صلة' : 'Related Projects' ?></h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?= renderProjectCard('Project Image', 'Industrial Facility', 'Jubail') ?>
            <?= renderProjectCard('Project Image', 'Commercial Tower', 'Riyadh') ?>
            <?= renderProjectCard('Project Image', 'Logistics Hub', 'Dammam') ?>
        </div>
    </div>
</section>

<?= renderCTABand($lang==='ar' ? 'هل أنت مستعد لبدء مشروعك؟' : 'Ready to start your project?', t('contact')) ?>

<?php require_once 'footer.php'; ?>
