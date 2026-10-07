<?php
session_start();

if (isset($_GET['lang']) && in_array($_GET['lang'], ['en', 'ar'])) {
    $_SESSION['lang'] = $_GET['lang'];
}
$lang = $_SESSION['lang'] ?? 'en';
$dir = $lang === 'ar' ? 'rtl' : 'ltr';

$fontClass = $lang === 'ar' ? 'font-arabic' : 'font-sans';
$headingFontClass = $lang === 'ar' ? 'font-arabic font-bold' : 'font-heading';

$translations = [
    'en' => [
        // Global
        'tagline' => 'Building a Stronger Tomorrow',
        'subline' => 'Structural Steel | Engineering | Construction',
        'switch_lang' => 'عربي',
        'switch_lang_code' => 'ar',
        'company' => 'Company',
        'more' => 'More',
        'vision_2030' => 'Proudly aligned with Saudi Vision 2030.',
        'learn_more' => 'Learn More',
        
        // Navigation
        'home' => 'Home', 'about' => 'About Us', 'services' => 'Services', 'products' => 'Products',
        'projects' => 'Projects', 'industries' => 'Industries', 'clients' => 'Our Clients',
        'certifications' => 'Certifications', 'careers' => 'Careers', 'news' => 'News/Insights',
        'contact' => 'Contact', 'get_quote' => 'Get a Quote',
        
        // 1. Hero
        'hero_line' => 'Engineered Structures for a Stronger Saudi Arabia',
        'home_hero_sub' => 'Unlocking the potential of industrial and commercial spaces with world-class steel fabrication and civil engineering.',
        'our_services' => 'Our Services',
        'scroll_down' => 'Scroll Down',

        // 2. Who We Are
        'who_we_are' => 'Who We Are',
        'who_we_are_sub' => 'Driving industrial growth across the Kingdom.',
        'who_we_are_desc' => 'Desert Iron is a premier engineering and structural steel contractor based in Riyadh. We are dedicated to shaping the nation\'s infrastructure with precision, unmatched strength, and a relentless commitment to excellence. From heavy industrial frameworks to iconic commercial structures, our teams deliver complex engineering feats that stand the test of time.',
        'tag_structural' => 'Structural Steel',
        'tag_engineering' => 'Engineering',
        'tag_construction' => 'Construction',
        'more_about_us' => 'More About Us',

        // 3. Our Capability
        'our_capability' => 'Our Capability',
        'cap_steel' => 'Steel Fabrication',
        'cap_civil' => 'Civil Works & Construction',
        'cap_eng' => 'Engineering & Design',

        // 4. Services
        'services_title' => 'Our Services',
        'services_sub' => 'Comprehensive solutions from design to erection.',
        'srv_1_t' => 'Structural Steel Fabrication', 'srv_1_d' => 'High-grade steel processing tailored for industrial scale.',
        'srv_2_t' => 'Pre-Engineered Buildings (PEB)', 'srv_2_d' => 'Fast, cost-effective, and fully customized steel structures.',
        'srv_3_t' => 'Engineering & Design', 'srv_3_d' => 'Advanced modeling and structural detailing software.',
        'srv_4_t' => 'Civil & Construction', 'srv_4_d' => 'Comprehensive site preparation, foundation, and concrete works.',
        'srv_5_t' => 'Erection & Installation', 'srv_5_d' => 'Safe, efficient, and precise on-site assembly by certified teams.',
        'srv_6_t' => 'Roof & Wall Cladding', 'srv_6_d' => 'Durable and aesthetic exterior enclosures for facilities.',
        'srv_7_t' => 'Sandblasting & Painting', 'srv_7_d' => 'Surface preparation and protective coatings for extreme conditions.',
        'srv_8_t' => 'Quality Testing & NDT', 'srv_8_d' => 'Rigorous non-destructive testing ensuring material integrity.',
        'srv_9_t' => 'Project Management', 'srv_9_d' => 'End-to-end execution, ensuring delivery on time and budget.',

        // 5. Stats
        'stats_years' => 'Years of Experience',
        'stats_projects' => 'Projects Delivered',
        'stats_staff' => 'Skilled Workforce',
        'stats_clients' => 'Happy Clients',

        // 6. Why Choose Us
        'why_choose_us' => 'Why Choose Us',
        'why_choose_sub' => 'The pillars of our success and your peace of mind.',
        'why_1' => 'Reliable Execution', 'why_2' => 'Experienced Engineers',
        'why_3' => 'Quality Materials', 'why_4' => 'Efficient Management',
        'why_5' => 'Safety & Compliance', 'why_6' => 'On-time Delivery',
        'why_7' => 'Strong Relationships', 'why_8' => 'Innovative Solutions',

        // 7. Industries We Serve
        'ind_title' => 'Industries We Serve',
        'ind_1' => 'Commercial', 'ind_2' => 'Industrial', 'ind_3' => 'Oil & Gas',
        'ind_4' => 'Infrastructure', 'ind_5' => 'Logistics', 'ind_6' => 'Defense',

        // 8. Featured Projects
        'feat_proj' => 'Featured Projects',
        'feat_proj_sub' => 'Landmarks of our engineering prowess.',
        'loc' => 'Location', 'client' => 'Client',
        'proj_1' => 'Riyadh Metro Expansion', 'proj_2' => 'NEOM Logistics Center',
        'proj_3' => 'Jubail Petrochemical Plant', 'proj_4' => 'Jeddah Commercial Hub',
        'proj_5' => 'Dammam Warehouse Complex',

        // 9. Logos
        'trusted_by' => 'Trusted by Industry Leaders',

        // 10. Final CTA
        'ready_build' => 'Ready to build together?',
        'contact_us_now' => 'Contact Us Now',
    ],
    'ar' => [
        // Global
        'tagline' => 'نبني غداً أقوى',
        'subline' => 'الصلب الهيكلي | الهندسة | البناء',
        'switch_lang' => 'EN',
        'switch_lang_code' => 'en',
        'company' => 'الشركة',
        'more' => 'المزيد',
        'vision_2030' => 'نفخر بمواءمة رؤيتنا مع رؤية السعودية 2030.',
        'learn_more' => 'اعرف المزيد',

        // Navigation
        'home' => 'الرئيسية', 'about' => 'من نحن', 'services' => 'خدماتنا', 'products' => 'منتجاتنا',
        'projects' => 'مشاريعنا', 'industries' => 'قطاعاتنا', 'clients' => 'عملاؤنا',
        'certifications' => 'الشهادات', 'careers' => 'الوظائف', 'news' => 'الأخبار',
        'contact' => 'اتصل بنا', 'get_quote' => 'اطلب تسعيرة',

        // 1. Hero
        'hero_line' => 'هياكل هندسية لسعودية أقوى',
        'home_hero_sub' => 'نطلق العنان لإمكانيات المساحات الصناعية والتجارية من خلال تصنيع الصلب والهندسة المدنية ذات المستوى العالمي.',
        'our_services' => 'خدماتنا',
        'scroll_down' => 'مرر لأسفل',

        // 2. Who We Are
        'who_we_are' => 'من نحن',
        'who_we_are_sub' => 'نقود النمو الصناعي في جميع أنحاء المملكة.',
        'who_we_are_desc' => 'تعتبر شركة ديزيرت آيرون من أبرز المقاولين في مجال الهندسة والصلب الهيكلي ومقرها الرياض. نحن ملتزمون بتشكيل البنية التحتية للمملكة بدقة وقوة لا تضاهى والتزام لا يتزعزع بالتميز. من الأطر الصناعية الثقيلة إلى الهياكل التجارية البارزة، تقدم فرقنا إنجازات هندسية معقدة تصمد أمام اختبار الزمن.',
        'tag_structural' => 'الصلب الهيكلي',
        'tag_engineering' => 'الهندسة',
        'tag_construction' => 'البناء والتشييد',
        'more_about_us' => 'المزيد عنا',

        // 3. Our Capability
        'our_capability' => 'قدراتنا',
        'cap_steel' => 'تصنيع الصلب',
        'cap_civil' => 'الأعمال المدنية والبناء',
        'cap_eng' => 'الهندسة والتصميم',

        // 4. Services
        'services_title' => 'خدماتنا',
        'services_sub' => 'حلول شاملة من التصميم إلى التركيب.',
        'srv_1_t' => 'تصنيع الصلب الهيكلي', 'srv_1_d' => 'معالجة الصلب عالي الجودة والمصمم على نطاق صناعي.',
        'srv_2_t' => 'المباني سابقة الهندسة (PEB)', 'srv_2_d' => 'هياكل حديدية سريعة واقتصادية ومخصصة بالكامل.',
        'srv_3_t' => 'الهندسة والتصميم', 'srv_3_d' => 'نمذجة متقدمة وتفاصيل إنشائية باستخدام أحدث البرامج.',
        'srv_4_t' => 'الأعمال المدنية والبناء', 'srv_4_d' => 'تجهيز شامل للموقع وأعمال الأساسات والخرسانة.',
        'srv_5_t' => 'التركيب والتجميع', 'srv_5_d' => 'تجميع دقيق وفعال وآمن في الموقع من قبل فرق معتمدة.',
        'srv_6_t' => 'تكسية الأسطح والجدران', 'srv_6_d' => 'تكسية خارجية متينة وجمالية لجميع المرافق.',
        'srv_7_t' => 'السفع الرملي والطلاء', 'srv_7_d' => 'تجهيز الأسطح وطلاءات الحماية في الظروف القاسية.',
        'srv_8_t' => 'اختبار الجودة (NDT)', 'srv_8_d' => 'اختبارات صارمة لضمان سلامة المواد الهيكلية.',
        'srv_9_t' => 'إدارة المشاريع', 'srv_9_d' => 'إدارة تنفيذية شاملة لضمان التسليم في الوقت المحدد وضمن الميزانية.',

        // 5. Stats
        'stats_years' => 'سنوات الخبرة',
        'stats_projects' => 'مشاريع منجزة',
        'stats_staff' => 'كوادر مؤهلة',
        'stats_clients' => 'عملاء راضون',

        // 6. Why Choose Us
        'why_choose_us' => 'لماذا تختارنا؟',
        'why_choose_sub' => 'ركائز نجاحنا وراحة بالك.',
        'why_1' => 'تنفيذ موثوق', 'why_2' => 'مهندسون ذوو خبرة',
        'why_3' => 'مواد عالية الجودة', 'why_4' => 'إدارة مشاريع فعالة',
        'why_5' => 'السلامة والامتثال', 'why_6' => 'التسليم في الوقت المحدد',
        'why_7' => 'علاقات عملاء قوية', 'why_8' => 'حلول مبتكرة',

        // 7. Industries We Serve
        'ind_title' => 'قطاعات نخدمها',
        'ind_1' => 'التجاري', 'ind_2' => 'الصناعي', 'ind_3' => 'النفط والغاز',
        'ind_4' => 'البنية التحتية', 'ind_5' => 'الخدمات اللوجستية', 'ind_6' => 'الدفاع',

        // 8. Featured Projects
        'feat_proj' => 'أبرز مشاريعنا',
        'feat_proj_sub' => 'معالم تشهد ببراعتنا الهندسية.',
        'loc' => 'الموقع', 'client' => 'العميل',
        'proj_1' => 'توسعة مترو الرياض', 'proj_2' => 'مركز نيوم اللوجستي',
        'proj_3' => 'مصنع الجبيل للبتروكيماويات', 'proj_4' => 'مركز جدة التجاري',
        'proj_5' => 'مجمع مستودعات الدمام',

        // 9. Logos
        'trusted_by' => 'موثوقون من قبل قادة الصناعة',

        // 10. Final CTA
        'ready_build' => 'هل أنت مستعد للبناء معاً؟',
        'contact_us_now' => 'اتصل بنا الآن',
    ]
];

function t($key) {
    global $translations, $lang;
    return $translations[$lang][$key] ?? $key;
}
?>
