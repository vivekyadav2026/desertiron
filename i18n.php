<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_GET['lang'])) {
    $lang = $_GET['lang'] === 'ar' ? 'ar' : 'en';
    $_SESSION['lang'] = $lang;
} else {
    $lang = $_SESSION['lang'] ?? 'en';
}

$dir = $lang === 'ar' ? 'rtl' : 'ltr';

$translations = [
    'en' => [
        // Global & Navigation
        'tagline' => 'Building A Stronger Tomorrow',
        'subline' => 'Structural Steel | Engineering | Construction',
        'switch_lang' => 'العربية',
        'switch_lang_code' => 'ar',
        'company' => 'Desert Iron',
        'more' => 'More',
        'vision_2030' => 'Saudi Vision 2030',
        'learn_more' => 'Learn More',

        // Nav Items
        'home' => 'Home',
        'about' => 'About Us',
        'services' => 'Services',
        'products' => 'Products',
        'projects' => 'Projects',
        'industries' => 'Industries',
        'clients' => 'Clients',
        'certifications' => 'Certifications',
        'careers' => 'Careers',
        'news' => 'News',
        'contact' => 'Contact Us',
        'get_quote' => 'Get a Quote',

        // Hero Keys
        'hero_tag' => 'Engineering & Construction',
        'hero_title' => 'Building A Stronger Tomorrow',
        'hero_desc' => 'Leading Saudi Arabia\'s industrial transformation with world-class structural steel, PEB systems, and mega-project execution aligned with Vision 2030.',
        'request_quote' => 'Request a Quote',
        'explore_projects' => 'Explore Projects',
        'hero_line' => 'Building A Stronger Tomorrow',
        'home_hero_sub' => 'Leading force in structural steel fabrication, civil construction, and gigaproject execution in Riyadh and across Saudi Arabia.',
        'our_services' => 'Our Services',
        'scroll_down' => 'Scroll Down',

        // Who We Are
        'who_we_are' => 'Who We Are',
        'who_we_are_sub' => 'Building a Stronger Tomorrow.',
        'who_we_are_desc' => 'Desert Iron is a premier engineering and construction contractor in Saudi Arabia, specializing in heavy structural steel, pre-engineered buildings (PEB), and industrial civil works. Backed by state-of-the-art fabrication facilities in Riyadh, we deliver uncompromised quality and safety.',
        'tag_structural' => 'Structural Steel',
        'tag_engineering' => 'Engineering',
        'tag_construction' => 'Civil Construction',
        'more_about_us' => 'More About Us',

        // Our Capability
        'our_capability' => 'Our Capabilities',
        'cap_steel' => 'Structural Steel Fabrication',
        'cap_civil' => 'Civil & Foundation Works',
        'cap_eng' => 'Engineering & Detailing',

        // Services
        'services_title' => 'Our Services',
        'services_sub' => 'Comprehensive engineering and construction solutions.',
        'srv_1_t' => 'Architectural Work', 'srv_1_d' => 'BIM-integrated architectural planning and SBC 201 compliance.',
        'srv_2_t' => 'Civil Construction', 'srv_2_d' => 'Comprehensive civil works, foundations, and heavy concrete structures.',
        'srv_3_t' => 'Pre-Engineered Buildings (PEB)', 'srv_3_d' => 'Cost-effective, rapid-deployment PEB warehouse systems.',
        'srv_4_t' => 'Structural Steel', 'srv_4_d' => 'High-strength steel structures for heavy industrial mega-projects.',
        'srv_5_t' => 'Roof & Wall Panels', 'srv_5_d' => 'Insulated sandwich panels and corrugated cladding systems.',
        'srv_6_t' => 'Call-off Services', 'srv_6_d' => 'On-demand contracting frameworks and rapid site mobilization.',
        'srv_7_t' => 'Trading & Materials', 'srv_7_d' => 'Supply of certified structural steel, rebars, and industrial components.',
        'srv_8_t' => 'Technical Staffing', 'srv_8_d' => 'Certified welders, QA/QC inspectors, and structural riggers.',
        'srv_9_t' => 'Shutdown & Maintenance', 'srv_9_d' => 'Time-critical plant turnaround and turnaround maintenance.',

        // Stats
        'stats_years' => 'Years of Experience',
        'stats_projects' => 'Projects Delivered',
        'stats_staff' => 'Skilled Workforce',
        'stats_clients' => 'Happy Clients',

        // Why Choose Us
        'why_choose_us' => 'Why Choose Us',
        'why_choose_sub' => 'The pillars of our success and your peace of mind.',
        'why_1' => 'Reliable Execution', 'why_2' => 'Experienced Engineers',
        'why_3' => 'Quality Materials', 'why_4' => 'Efficient Management',
        'why_5' => 'Safety & Compliance', 'why_6' => 'On-time Delivery',
        'why_7' => 'Strong Relationships', 'why_8' => 'Innovative Solutions',

        // Featured Projects
        'feat_proj' => 'Featured Projects',
        'feat_proj_sub' => 'Landmarks of our engineering prowess.',
        'loc' => 'Location', 'client' => 'Client',
        'proj_1' => 'Riyadh Metro Expansion', 'proj_2' => 'NEOM Logistics Center',
        'proj_3' => 'Jubail Petrochemical Plant', 'proj_4' => 'Jeddah Commercial Hub',
        'proj_5' => 'Dammam Warehouse Complex',

        // Logos & CTA
        'trusted_by' => 'Trusted by Industry Leaders',
        'ready_build' => 'Ready to build together?',
        'contact_us_now' => 'Contact Us Now',
    ],
    'ar' => [
        // Global & Navigation
        'tagline' => 'نبني غداً أقوى',
        'subline' => 'الصلب الهيكلي | الهندسة | الإنشاءات',
        'switch_lang' => 'English',
        'switch_lang_code' => 'en',
        'company' => 'صحراء الحديد',
        'more' => 'المزيد',
        'vision_2030' => 'رؤية السعودية 2030',
        'learn_more' => 'اقرأ المزيد',

        // Nav Items
        'home' => 'الرئيسية',
        'about' => 'من نحن',
        'services' => 'خدماتنا',
        'products' => 'منتجاتنا',
        'projects' => 'مشاريعنا',
        'industries' => 'القطاعات',
        'clients' => 'عملاؤنا',
        'certifications' => 'شهاداتنا',
        'careers' => 'الوظائف',
        'news' => 'الأخبار',
        'contact' => 'اتصل بنا',
        'get_quote' => 'طلب سعر',

        // Hero Keys
        'hero_tag' => 'الهندسة والإنشاءات',
        'hero_title' => 'نبني غداً أقوى',
        'hero_desc' => 'نشارك في التحول الصناعي للمملكة العربية السعودية بمنتجات الهياكل الصلبة، والمباني مسبقة الصنع، وتنفيذ المشاريع الكبرى بما يتماشى مع رؤية 2030.',
        'request_quote' => 'طلب عرض سعر',
        'explore_projects' => 'استكشف المشاريع',
        'hero_line' => 'نبني غداً أقوى',
        'home_hero_sub' => 'قوة رائدة في تصنيع الهياكل الفولاذية، والإنشاءات المدنية، وتنفيذ المشاريع العملاقة في الرياض وكافة أنحاء المملكة.',
        'our_services' => 'خدماتنا',
        'scroll_down' => 'تمرير للأسفل',

        // Who We Are
        'who_we_are' => 'من نحن',
        'who_we_are_sub' => 'نبني غداً أقوى.',
        'who_we_are_desc' => 'صحراء الحديد هي مقاول رئيسي للهندسة والإنشاءات في المملكة العربية السعودية، متخصصون في الفولاذ الهيكلي الثقيل، والمباني مسبقة الصنع (PEB)، والأعمال المدنية الصناعية.',
        'tag_structural' => 'الفولاذ الهيكلي',
        'tag_engineering' => 'الهندسة والتصميم',
        'tag_construction' => 'الإنشاءات المدنية',
        'more_about_us' => 'المزيد عنا',

        // Our Capability
        'our_capability' => 'قدراتنا الرئيسية',
        'cap_steel' => 'تصنيع الفولاذ الهيكلي',
        'cap_civil' => 'الأعمال المدنية والأساسات',
        'cap_eng' => 'الهندسة والتفاصيل BIM',

        // Services
        'services_title' => 'خدماتنا',
        'services_sub' => 'حلول هندسية وإنشائية متكاملة.',
        'srv_1_t' => 'الأعمال المعمارية', 'srv_1_d' => 'التخطيط المعماري المدمج مع BIM والامتثال لكود البناء السعودي SBC 201.',
        'srv_2_t' => 'الإنشاءات المدنية', 'srv_2_d' => 'أعمال مدنية شاملة، وأساسات وهياكل خرسانية ثقيلة.',
        'srv_3_t' => 'المباني مسبقة الصنع (PEB)', 'srv_3_d' => 'أنظمة مستودعات سريعة التركيب واقتصادية التكلفة.',
        'srv_4_t' => 'الفولاذ الهيكلي', 'srv_4_d' => 'هياكل فولاذية عالية القوة للمشاريع الصناعية الكبرى.',
        'srv_5_t' => 'ألواح الأسقف والجدران', 'srv_5_d' => 'ألواح ساندوتش المعزولة وأنظمة التكسية المضلعة.',
        'srv_6_t' => 'خدمات الطلب عند الحاجة', 'srv_6_d' => 'عقود إطار تشغيلية واستجابة سريعة.',
        'srv_7_t' => 'التجارة والمواد', 'srv_7_d' => 'توريد حديد التسليح والفولاذ المعتمد.',
        'srv_8_t' => 'الكادر الفني المتخصص', 'srv_8_d' => 'لحامون وفنيو جودة ومراقبون معتمدون.',
        'srv_9_t' => 'الإغلاق والصيانة', 'srv_9_d' => 'صيانة المحطات وعمليات الإيقاف المؤقت.',

        // Stats
        'stats_years' => 'سنوات الخبرة',
        'stats_projects' => 'مشروعاً مكتظاً',
        'stats_staff' => 'قوة عاملة',
        'stats_clients' => 'عميل سعيد',

        // Why Choose Us
        'why_choose_us' => 'لماذا تختارنا',
        'why_choose_sub' => 'ركائز نجاحنا وراحة بالك.',
        'why_1' => 'تنفيذ موثوق', 'why_2' => 'مهندسون ذوو خبرة',
        'why_3' => 'مواد عالية الجودة', 'why_4' => 'إدارة فعالة',
        'why_5' => 'السلامة والامتثال', 'why_6' => 'التسليم في الوقت المحدد',
        'why_7' => 'علاقات قوية', 'why_8' => 'حلول مبتكرة',

        // Featured Projects
        'feat_proj' => 'مشاريع بارزة',
        'feat_proj_sub' => 'معالم هندسية تعكس خبرتنا.',
        'loc' => 'الموقع', 'client' => 'العميل',
        'proj_1' => 'توسعة مترو الرياض', 'proj_2' => 'مركز نيوم اللوجستي',
        'proj_3' => 'مجمع الجبيل للبتروكيماويات', 'proj_4' => 'المركز التجاري بجدة',
        'proj_5' => 'مجمع المستودعات بالدمام',

        // Logos & CTA
        'trusted_by' => 'محط ثقة كبرى الشركات',
        'ready_build' => 'جاهز لبناء مشروعك القادم؟',
        'contact_us_now' => 'تواصل معنا الآن',
    ]
];

function t($key) {
    global $translations, $lang;
    return $translations[$lang][$key] ?? $key;
}