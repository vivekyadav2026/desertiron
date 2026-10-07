<?php
$page_title = "Our Projects | Desert Iron";
require_once 'header.php';
require_once 'components.php';
$categories = ['All', 'Industrial', 'Commercial', 'Infrastructure', 'Warehousing'];
?>
<section class="relative pt-32 pb-20 bg-charcoal text-offwhite">
    <div class="container mx-auto px-4 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl <?= $headingFontClass ?> mb-4"><?= $lang==='ar' ? 'مشاريعنا' : 'Our Projects' ?></h1>
        <p class="text-steel"><?= $lang==='ar' ? 'اكتشف محفظة مشاريعنا الناجحة.' : 'Explore our portfolio of successful executions.' ?></p>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <!-- Filters -->
        <div class="flex flex-wrap justify-center gap-4 mb-12">
            <?php foreach($categories as $cat): ?>
            <button class="filter-btn px-6 py-2 rounded border border-gray-200 bg-offwhite text-charcoal hover:bg-saudi hover:text-white transition font-medium" data-filter="<?= strtolower($cat) ?>"><?= $cat ?></button>
            <?php endforeach; ?>
        </div>
        
        <!-- Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="projects-grid">
            <?php
            $projects = [
                ['title' => 'Jubail Petrochemical Plant', 'cat' => 'industrial', 'loc' => 'Jubail'],
                ['title' => 'Riyadh Metro Hub', 'cat' => 'infrastructure', 'loc' => 'Riyadh'],
                ['title' => 'NEOM Logistics Center', 'cat' => 'warehousing', 'loc' => 'Tabuk'],
                ['title' => 'Jeddah Commercial Tower', 'cat' => 'commercial', 'loc' => 'Jeddah'],
                ['title' => 'Dammam Storage Facility', 'cat' => 'warehousing', 'loc' => 'Dammam'],
                ['title' => 'Yanbu Refinery Expansion', 'cat' => 'industrial', 'loc' => 'Yanbu'],
            ];
            foreach($projects as $i => $p):
            ?>
            <a href="project-detail.php?id=<?= $i ?>" class="project-item block group relative overflow-hidden rounded bg-charcoal aspect-[4/3]" data-category="<?= $p['cat'] ?>">
                <img src="public/images/hero_riyadh_steel.jpg" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-charcoal via-charcoal/40 to-transparent opacity-90"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <span class="text-saudi text-xs font-bold uppercase tracking-wider mb-2 block bg-white/10 w-max px-2 py-1 rounded"><?= ucfirst($p['cat']) ?></span>
                    <h3 class="text-offwhite text-xl mb-1 <?= $headingFontClass ?>"><?= $p['title'] ?></h3>
                    <p class="text-steel text-sm"><?= $p['loc'] ?>, KSA</p>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const btns = document.querySelectorAll('.filter-btn');
        const items = document.querySelectorAll('.project-item');
        
        btns.forEach(btn => {
            btn.addEventListener('click', () => {
                btns.forEach(b => { b.classList.remove('bg-saudi', 'text-white'); b.classList.add('bg-offwhite', 'text-charcoal'); });
                btn.classList.remove('bg-offwhite', 'text-charcoal');
                btn.classList.add('bg-saudi', 'text-white');
                
                const filter = btn.getAttribute('data-filter');
                items.forEach(item => {
                    if(filter === 'all' || item.getAttribute('data-category') === filter) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
        
        // set default active
        btns[0].click();
    });
</script>

<?php require_once 'footer.php'; ?>
