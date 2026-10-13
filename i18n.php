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
        'contact' => 'Contact Us',
        'get_quote' => 'Get a Quote',

        // Hero Keys
        'hero_tag' => 'Engineering & Construction',
        'hero_title' => 'Building A Stronger Tomorrow',
        'hero_desc' => 'Delivering structural steel fabrication, pre-engineered buildings (PEB), and turnkey civil construction solutions across Saudi Arabia aligned with Vision 2030.',
        'request_quote' => 'Request a Quote',
        'explore_projects' => 'Explore Projects',
        'hero_line' => 'Building A Stronger Tomorrow',
        'home_hero_sub' => 'Trusted partner in structural steel fabrication, PEB systems, and turnkey civil construction across Saudi Arabia.',
        'our_services' => 'Our Services',
        'scroll_down' => 'Scroll Down',

        // Who We Are
        'who_we_are' => 'Who We Are',
        'who_we_are_sub' => 'Building a Stronger Tomorrow.',
        'who_we_are_desc' => 'Desert Iron is an engineering and construction contractor in Saudi Arabia, specializing in structural steel, pre-engineered buildings (PEB), and industrial civil works. Backed by over 25 years of GCC executive leadership and project experience, we deliver uncompromised quality and safety.',
        'tag_structural' => 'Structural Steel',
        'tag_engineering' => 'Engineering',
        'tag_construction' => 'Civil Construction & Turnkey Solutions',
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
        'srv_2_t' => 'Civil Construction & Turnkey Solutions', 'srv_2_d' => 'From Foundation to Final Handover',
        'srv_3_t' => 'Pre-Engineered Buildings (PEB)', 'srv_3_d' => 'Cost-effective, rapid-deployment PEB warehouse systems.',
        'srv_4_t' => 'Structural Steel', 'srv_4_d' => 'High-strength steel structures for industrial and commercial projects.',
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

        // Industries & Project Applications
        'feat_proj' => 'Industries & Project Applications',
        'feat_proj_sub' => 'Representative imagery illustrating structural steel, logistics, industrial, and commercial building applications.',
        'loc' => 'Location', 'client' => 'Application',
        'proj_1' => 'Major Steel Structures & Industrial Plants', 'proj_2' => 'Logistics & Distribution Centres',
        'proj_3' => 'Industrial & Petrochemical Facilities', 'proj_4' => 'Commercial & Multi-Storey Buildings',
        'proj_5' => 'Pre-Engineered Warehouses & Storage',

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
        'hero_desc' => 'نشارك في التحول الصناعي للمملكة العربية السعودية بحلول الهياكل الفولاذية، والمباني مسبقة الصنع (PEB)، والإنشاءات المدنية المتكاملة بما يتماشى مع رؤية 2030.',
        'request_quote' => 'طلب عرض سعر',
        'explore_projects' => 'استكشف المشاريع',
        'hero_line' => 'نبني غداً أقوى',
        'home_hero_sub' => 'شريك موثوق في تصنيع الهياكل الفولاذية، والإنشاءات المدنية المتكاملة في كافة أنحاء المملكة العربية السعودية.',
        'our_services' => 'خدماتنا',
        'scroll_down' => 'تمرير للأسفل',

        // Who We Are
        'who_we_are' => 'من نحن',
        'who_we_are_sub' => 'نبني غداً أقوى.',
        'who_we_are_desc' => 'صحراء الحديد هي شركة مقاولات هندسية وإنشائية في المملكة العربية السعودية، متخصصة في الفولاذ الهيكلي، والمباني مسبقة الصنع (PEB)، والأعمال المدنية الصناعية والتجارية.',
        'tag_structural' => 'الفولاذ الهيكلي',
        'tag_engineering' => 'الهندسة والتصميم',
        'tag_construction' => 'الإنشاءات المدنية والحلول المتكاملة',
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
        'srv_2_t' => 'الإنشاءات المدنية والحلول المتكاملة (تسليم مفتاح)', 'srv_2_d' => 'من الأساسات إلى التسليم النهائي',
        'srv_3_t' => 'المباني مسبقة الصنع (PEB)', 'srv_3_d' => 'أنظمة مستودعات سريعة التركيب واقتصادية التكلفة.',
        'srv_4_t' => 'الفولاذ الهيكلي', 'srv_4_d' => 'هياكل فولاذية عالية القوة للمشاريع الصناعية والتجارية.',
        'srv_5_t' => 'ألواح الأسقف والجدران', 'srv_5_d' => 'ألواح ساندوتش المعزولة وأنظمة التكسية المضلعة.',
        'srv_6_t' => 'خدمات الطلب عند الحاجة', 'srv_6_d' => 'عقود إطار تشغيلية واستجابة سريعة.',
        'srv_7_t' => 'التجارة والمواد', 'srv_7_d' => 'توريد حديد التسليح والفولاذ المعتمد.',
        'srv_8_t' => 'الكادر الفني المتخصص', 'srv_8_d' => 'لحامون وفنيو جودة ومراقبون معتمدون.',
        'srv_9_t' => 'الإغلاق والصيانة', 'srv_9_d' => 'صيانة المحطات وعمليات الإيقاف المؤقت.',

        // Stats
        'stats_years' => 'سنوات الخبرة',
        'stats_projects' => 'مشروعاً منجزاً',
        'stats_staff' => 'قوة عاملة',
        'stats_clients' => 'عميل سعيد',

        // Why Choose Us
        'why_choose_us' => 'لماذا تختارنا',
        'why_choose_sub' => 'ركائز نجاحنا وراحة بالك.',
        'why_1' => 'تنفيذ موثوق', 'why_2' => 'مهندسون ذوو خبرة',
        'why_3' => 'مواد عالية الجودة', 'why_4' => 'إدارة فعالة',
        'why_5' => 'السلامة والامتثال', 'why_6' => 'التسليم في الوقت المحدد',
        'why_7' => 'علاقات قوية', 'why_8' => 'حلول مبتكرة',

        // Industries & Project Applications
        'feat_proj' => 'القطاعات وتطبيقات المشاريع',
        'feat_proj_sub' => 'صور توضيحية تمثل تطبيقات الهياكل الفولاذية والمراكز اللوجستية والمنشآت الصناعية والمباني التجارية.',
        'loc' => 'الموقع', 'client' => 'التطبيق',
        'proj_1' => 'الهياكل الفولاذية الكبرى والمنشآت الصناعية', 'proj_2' => 'المراكز اللوجستية ومراكز التوزيع',
        'proj_3' => 'المنشآت الصناعية والبتروكيماوية', 'proj_4' => 'المباني التجارية ومتعددة الطوابق',
        'proj_5' => 'المستودعات والمباني مسبقة الصنع (PEB)',

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