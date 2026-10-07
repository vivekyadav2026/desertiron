<?php
$page_title = "About Us | Desert Iron";
require_once 'header.php';
require_once 'components.php';
$t = [
    'en' => [
        'title' => 'About Desert Iron',
        'story_title' => 'Our Story',
        'story_desc' => 'Founded with a resolute vision to build the backbone of Saudi Arabia’s industrial sector, Desert Iron has evolved into a premier structural steel and civil engineering contractor. For over two decades, we have engineered and erected the foundational structures of the Kingdom’s most critical facilities.',
        'vmv_title' => 'Vision, Mission & Values',
        'vision' => 'To be the undisputed leader in structural steel and industrial engineering in the Middle East.',
        'mission' => 'To deliver precision-engineered structures safely, sustainably, and strictly on schedule.',
        'values' => 'Safety First. Uncompromising Quality. Integrity. Innovation.',
        'v2030_title' => 'Aligned with Saudi Vision 2030',
        'v2030_desc' => 'We are proud partners in the Kingdom’s transformation, supporting gigaprojects in NEOM, the Red Sea, and Riyadh with sustainable, world-class construction practices.',
        'timeline' => 'Our Journey',
        'leadership' => 'Leadership Team',
    ],
    'ar' => [
        'title' => 'عن ديزيرت آيرون',
        'story_title' => 'قصتنا',
        'story_desc' => 'تأسست ديزيرت آيرون برؤية حازمة لبناء العمود الفقري للقطاع الصناعي في المملكة العربية السعودية، وقد تطورت لتصبح مقاولاً رائداً في مجال الصلب الهيكلي والهندسة المدنية.',
        'vmv_title' => 'الرؤية والرسالة والقيم',
        'vision' => 'أن نكون الرائد بلا منازع في مجال الصلب الهيكلي والهندسة الصناعية في الشرق الأوسط.',
        'mission' => 'تقديم هياكل هندسية دقيقة بأمان واستدامة وفي الموعد المحدد بدقة.',
        'values' => 'السلامة أولاً. جودة لا هوادة فيها. النزاهة. الابتكار.',
        'v2030_title' => 'متوائمون مع رؤية السعودية 2030',
        'v2030_desc' => 'نحن شركاء فخورون في تحول المملكة، وندعم المشاريع العملاقة في نيوم والبحر الأحمر والرياض بممارسات بناء مستدامة وعالمية المستوى.',
        'timeline' => 'مسيرتنا',
        'leadership' => 'فريق القيادة',
    ]
];
$c = $t[$lang];
?>

<section class="relative pt-32 pb-20 bg-charcoal text-offwhite overflow-hidden">
    <div class="absolute inset-0 bg-[url('public/images/about_us_team.jpg')] bg-cover bg-center opacity-10"></div>
    <div class="container mx-auto px-4 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl <?= $headingFontClass ?> mb-4"><?= $c['title'] ?></h1>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="container mx-auto px-4 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div>
            <?= renderSectionHeading($c['story_title']) ?>
            <p class="text-steel leading-relaxed mb-6 text-lg"><?= $c['story_desc'] ?></p>
        </div>
        <div class="aspect-video bg-gray-200 rounded overflow-hidden shadow-lg">
            <img src="public/images/careers_team.jpg" class="w-full h-full object-cover" alt="Our Story">
        </div>
    </div>
</section>

<section class="py-20 bg-offwhite">
    <div class="container mx-auto px-4">
        <?= renderSectionHeading($c['vmv_title']) ?>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-8 rounded shadow-sm border-t-4 border-saudi"><h3 class="text-xl font-bold mb-4 <?= $headingFontClass ?>">Vision</h3><p class="text-steel"><?= $c['vision'] ?></p></div>
            <div class="bg-white p-8 rounded shadow-sm border-t-4 border-saudi"><h3 class="text-xl font-bold mb-4 <?= $headingFontClass ?>">Mission</h3><p class="text-steel"><?= $c['mission'] ?></p></div>
            <div class="bg-white p-8 rounded shadow-sm border-t-4 border-saudi"><h3 class="text-xl font-bold mb-4 <?= $headingFontClass ?>">Values</h3><p class="text-steel"><?= $c['values'] ?></p></div>
        </div>
    </div>
</section>

<section class="py-16 bg-saudi text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl <?= $headingFontClass ?> mb-4"><?= $c['v2030_title'] ?></h2>
        <p class="max-w-2xl mx-auto opacity-90"><?= $c['v2030_desc'] ?></p>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <?= renderSectionHeading($c['leadership']) ?>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php for($i=1; $i<=3; $i++): ?>
            <div class="text-center group">
                <div class="w-48 h-48 mx-auto bg-gray-200 rounded-full mb-4 overflow-hidden grayscale group-hover:grayscale-0 transition duration-300">
                    <img src="public/images/technical_staffing.jpg" class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl <?= $headingFontClass ?> text-charcoal">Executive Name</h3>
                <p class="text-steel text-sm">Director / Board Member</p>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>
