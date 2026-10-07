<?php $page_title = 'Products | Desert Iron'; require_once 'header.php'; require_once 'components.php'; ?>
<section class="relative pt-32 pb-20 bg-charcoal text-offwhite overflow-hidden">
<div class="container mx-auto px-4 relative z-10 text-center">
<h1 class="text-4xl md:text-5xl <?= $headingFontClass ?> mb-4">Products</h1>
<p class="text-steel max-w-2xl mx-auto">Industrial and commercial steel components, PEB systems, and high-performance panels.</p>
</div>
</section>
<section class="py-20 bg-white min-h-[50vh]">
<div class="container mx-auto px-4">
<?= renderSectionHeading('Products Overview') ?>
<div class='bg-offwhite p-8 rounded border border-gray-200 text-center'><h3 class='text-2xl mb-4 text-charcoal <?= $headingFontClass ?>'>PEB Systems & Structural Components</h3><p class='text-steel mb-6'>Detailed specifications tables and product catalogues are currently being updated.</p><button class='bg-saudi text-white px-6 py-2 rounded font-bold'>Download PDF Catalogue</button></div>
</div>
</section>
<?php require_once 'footer.php'; ?>