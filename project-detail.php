<?php
$page_title = "Project Details | Desert Iron";
require_once 'header.php';
require_once 'components.php';
?>

<section class="relative pt-32 pb-48 bg-charcoal overflow-hidden">
    <img src="public/images/hero_riyadh_steel.jpg" class="absolute inset-0 w-full h-full object-cover opacity-30">
    <div class="container mx-auto px-4 relative z-10">
        <span class="text-saudi font-bold uppercase tracking-widest text-sm mb-4 block">Industrial</span>
        <h1 class="text-4xl md:text-5xl text-white <?= $headingFontClass ?> mb-4">Jubail Petrochemical Plant Expansion</h1>
    </div>
</section>

<section class="py-16 bg-white -mt-24 relative z-20">
    <div class="container mx-auto px-4">
        <div class="bg-white rounded-lg shadow-xl border border-gray-100 p-8 grid grid-cols-1 lg:grid-cols-3 gap-12">
            
            <div class="lg:col-span-2 space-y-6">
                <h2 class="text-2xl text-charcoal <?= $headingFontClass ?> mb-4">Project Overview</h2>
                <p class="text-steel leading-relaxed">The Jubail Petrochemical Plant Expansion required precision engineering and heavy structural steel fabrication. Desert Iron was tasked with erecting the primary pipe racks, massive equipment support structures, and the main compressor building under strict safety regulations and tight timelines.</p>
                <p class="text-steel leading-relaxed">Our execution involved over 5,000 tons of structural steel, completely modeled in Level 400 BIM to ensure zero clashes during on-site assembly.</p>
                
                <h3 class="text-xl text-charcoal <?= $headingFontClass ?> mt-8 mb-4">Gallery</h3>
                <div class="grid grid-cols-2 gap-4">
                    <img src="public/images/structural_steel.jpg" class="rounded w-full h-48 object-cover">
                    <img src="public/images/civil_construction.jpg" class="rounded w-full h-48 object-cover">
                </div>
            </div>
            
            <div class="space-y-6 bg-offwhite p-6 rounded border border-gray-200 h-fit">
                <div>
                    <span class="block text-sm text-steel mb-1">Client</span>
                    <strong class="text-charcoal">SABIC (Placeholder)</strong>
                </div>
                <div>
                    <span class="block text-sm text-steel mb-1">Location</span>
                    <strong class="text-charcoal">Jubail Industrial City, KSA</strong>
                </div>
                <div>
                    <span class="block text-sm text-steel mb-1">Scope of Work</span>
                    <strong class="text-charcoal">Structural Steel, Erection, Cladding</strong>
                </div>
                <div>
                    <span class="block text-sm text-steel mb-1">Duration</span>
                    <strong class="text-charcoal">14 Months</strong>
                </div>
                <div>
                    <span class="block text-sm text-steel mb-1">Status</span>
                    <strong class="text-saudi">Completed (2025)</strong>
                </div>
            </div>
            
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>
