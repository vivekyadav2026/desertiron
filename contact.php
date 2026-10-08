<?php
$page_title = "Contact Us | Desert Iron";
require_once 'header.php';
require_once 'components.php';
?>

<!-- Hero Banner -->
<section class="relative pt-28 pb-16 bg-charcoal text-offwhite overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center opacity-70" style="background-image: url('public/images/contact_hq.jpg');"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-charcoal/80 via-charcoal/50 to-charcoal/30"></div>
    <div class="container mx-auto px-4 relative z-10 text-center">
        <span class="inline-block px-3 py-1 bg-black/50 border border-emerald-400/40 text-emerald-300 rounded text-xs font-bold uppercase tracking-wider mb-3 shadow-md">
            <?= $lang==='ar' ? 'تواصل معنا' : 'Get In Touch' ?>
        </span>
        <h1 class="text-3xl md:text-5xl <?= $headingFontClass ?> mb-3 text-white">
            <?= $lang==='ar' ? 'تواصل مع فريقنا' : 'Contact Desert Iron' ?>
        </h1>
        <p class="text-steel max-w-2xl mx-auto text-sm md:text-base">
            <?= $lang==='ar' ? 'نحن هنا للإجابة على استفساراتكم وتوفير استشارات هندسية وعروض أسعار دقيقة لمشاريعكم.' : 'Our engineering and sales team in Riyadh is ready to support your structural steel, PEB, and civil construction projects.' ?>
        </p>
    </div>
</section>

<section class="py-12 md:py-16 bg-offwhite">
    <div class="container mx-auto px-4">
        
        <!-- Contact Cards Row -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <!-- HQ Address -->
            <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm flex items-start space-x-4 <?= $lang === 'ar' ? 'space-x-reverse' : '' ?>">
                <div class="w-12 h-12 rounded-lg bg-saudi/10 text-saudi flex items-center justify-center shrink-0">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                </div>
                <div>
                    <h3 class="font-bold text-charcoal text-lg mb-1"><?= $lang==='ar' ? 'المقر الرئيسي والمصنع' : 'Head Office & Plant' ?></h3>
                    <p class="text-steel text-sm leading-relaxed">
                        Industrial Gate City, Riyadh<br>
                        Kingdom of Saudi Arabia
                    </p>
                </div>
            </div>

            <!-- Direct Phone & WhatsApp -->
            <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm flex items-start space-x-4 <?= $lang === 'ar' ? 'space-x-reverse' : '' ?>">
                <div class="w-12 h-12 rounded-lg bg-saudi/10 text-saudi flex items-center justify-center shrink-0">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                </div>
                <div>
                    <h3 class="font-bold text-charcoal text-lg mb-1"><?= $lang==='ar' ? 'الهاتف والواتساب' : 'Phone & WhatsApp' ?></h3>
                    <p class="text-steel text-sm leading-relaxed">
                        <a href="tel:+966599510213" class="hover:text-saudi transition font-semibold text-charcoal">+966 59 951 0213</a><br>
                        <span class="text-xs text-steel"><?= $lang==='ar' ? 'الأحد - الخميس (8 صباحاً - 5 مساءً)' : 'Sun - Thu (8:00 AM - 5:00 PM)' ?></span>
                    </p>
                </div>
            </div>

            <!-- Email Contacts -->
            <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm flex items-start space-x-4 <?= $lang === 'ar' ? 'space-x-reverse' : '' ?>">
                <div class="w-12 h-12 rounded-lg bg-saudi/10 text-saudi flex items-center justify-center shrink-0">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                </div>
                <div>
                    <h3 class="font-bold text-charcoal text-lg mb-1"><?= $lang==='ar' ? 'البريد الإلكتروني' : 'Email Addresses' ?></h3>
                    <p class="text-steel text-sm leading-relaxed">
                        <a href="mailto:sales@thedesertiron.com" class="hover:text-saudi transition block font-medium">sales@thedesertiron.com</a>
                        <a href="mailto:jaffar@thedesertiron.com" class="hover:text-saudi transition block font-medium">jaffar@thedesertiron.com</a>
                    </p>
                </div>
            </div>
        </div>

        <!-- Main Section: Form & Dept Directory Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
            <!-- Contact Form -->
            <div class="lg:col-span-7 bg-white p-6 md:p-8 rounded-xl border border-gray-200 shadow-sm">
                <h2 class="text-2xl font-bold text-charcoal mb-2 <?= $headingFontClass ?>">
                    <?= $lang==='ar' ? 'أرسل لنا استفسارك' : 'Send Us a Message' ?>
                </h2>
                <p class="text-steel text-sm mb-6">
                    <?= $lang==='ar' ? 'يرجى تعبئة النموذج وسيقوم مهندسو المبيعات بالتواصل معكم خلال 24 ساعة.' : 'Fill out the form below and our engineering estimation team will respond within 24 hours.' ?>
                </p>

                <form action="process-form.php" method="POST" enctype="multipart/form-data" class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-charcoal uppercase tracking-wider mb-1"><?= $lang==='ar' ? 'الاسم الكامل' : 'Full Name' ?> *</label>
                            <input type="text" name="name" required placeholder="<?= $lang==='ar' ? 'مثال: محمد علي' : 'e.g. John Doe' ?>" class="w-full bg-offwhite border border-gray-300 px-4 py-3 rounded-lg text-base focus:outline-none focus:border-saudi focus:ring-1 focus:ring-saudi transition">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-charcoal uppercase tracking-wider mb-1"><?= $lang==='ar' ? 'اسم الشركة' : 'Company Name' ?></label>
                            <input type="text" name="company" placeholder="<?= $lang==='ar' ? 'شركة المقاولات...' : 'Company Ltd.' ?>" class="w-full bg-offwhite border border-gray-300 px-4 py-3 rounded-lg text-base focus:outline-none focus:border-saudi focus:ring-1 focus:ring-saudi transition">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-charcoal uppercase tracking-wider mb-1"><?= $lang==='ar' ? 'البريد الإلكتروني' : 'Email Address' ?> *</label>
                            <input type="email" name="email" required placeholder="name@company.com" class="w-full bg-offwhite border border-gray-300 px-4 py-3 rounded-lg text-base focus:outline-none focus:border-saudi focus:ring-1 focus:ring-saudi transition">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-charcoal uppercase tracking-wider mb-1"><?= $lang==='ar' ? 'رقم الهاتف' : 'Phone Number' ?> *</label>
                            <input type="tel" name="phone" required placeholder="+966 5X XXX XXXX" class="w-full bg-offwhite border border-gray-300 px-4 py-3 rounded-lg text-base focus:outline-none focus:border-saudi focus:ring-1 focus:ring-saudi transition">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-charcoal uppercase tracking-wider mb-1"><?= $lang==='ar' ? 'الخدمة المطلوبة' : 'Service Requirement' ?></label>
                        <select name="service" class="w-full bg-offwhite border border-gray-300 px-4 py-3 rounded-lg text-base focus:outline-none focus:border-saudi focus:ring-1 focus:ring-saudi transition text-charcoal">
                            <option value="structural-steel"><?= $lang==='ar' ? 'تصنيع الفولاذ الهيكلي (Structural Steel)' : 'Structural Steel Fabrication' ?></option>
                            <option value="peb"><?= $lang==='ar' ? 'المباني مسبقة الصنع (PEB)' : 'Pre-Engineered Buildings (PEB)' ?></option>
                            <option value="civil-construction"><?= $lang==='ar' ? 'الإنشاءات المدنية (Civil Construction)' : 'Civil & Foundation Construction' ?></option>
                            <option value="roof-panels"><?= $lang==='ar' ? 'ألواح التكسية والأسقف' : 'Roof & Wall Cladding Panels' ?></option>
                            <option value="technical-staffing"><?= $lang==='ar' ? 'التزويد بالكادر الفني' : 'Technical Staffing & Riggers' ?></option>
                            <option value="general"><?= $lang==='ar' ? 'استفسار عام' : 'General Inquiry' ?></option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-charcoal uppercase tracking-wider mb-1"><?= $lang==='ar' ? 'تفاصيل المشروع / الرسالة' : 'Project Details / Message' ?> *</label>
                        <textarea name="message" rows="4" required placeholder="<?= $lang==='ar' ? 'يرجى ذكر مواصفات المشروع، الكميات التقديرية والموقع...' : 'Specify estimated tonnage, building dimensions, project location, or specific BOQ requirements...' ?>" class="w-full bg-offwhite border border-gray-300 px-4 py-3 rounded-lg text-base focus:outline-none focus:border-saudi focus:ring-1 focus:ring-saudi transition"></textarea>
                    </div>

                    <!-- File Upload Box -->
                    <div>
                        <label class="block text-xs font-semibold text-charcoal uppercase tracking-wider mb-1"><?= $lang==='ar' ? 'إرفاق مخططات / BOQ (اختياري)' : 'Attach Drawings / BOQ (Optional)' ?></label>
                        <div class="border-2 border-dashed border-gray-300 hover:border-saudi rounded-lg p-4 text-center bg-offwhite transition cursor-pointer relative" id="drop-zone">
                            <svg class="w-8 h-8 text-steel mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" /></svg>
                            <span class="text-xs text-steel font-medium block"><?= $lang==='ar' ? 'اسحب الملفات هنا أو اضغط للرفع (PDF, DWG, ZIP)' : 'Drag & drop drawings here or click to browse (PDF, DWG, ZIP)' ?></span>
                            <input type="file" name="attachment" class="absolute inset-0 opacity-0 cursor-pointer">
                        </div>
                    </div>

                    <button type="submit" class="w-full bg-saudi text-white py-3.5 px-6 rounded-lg font-bold hover:bg-emerald-700 transition flex items-center justify-center space-x-2 shadow-md">
                        <span><?= $lang==='ar' ? 'إرسال الطلب' : 'Send Message & RFQ' ?></span>
                        <svg class="w-5 h-5 <?= $lang === 'ar' ? 'rotate-180' : '' ?>" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                    </button>
                </form>
            </div>

            <!-- Department Directory Sidebar -->
            <div class="lg:col-span-5 space-y-6">
                <div class="bg-charcoal text-white p-6 rounded-xl shadow-sm">
                    <h3 class="text-xl font-bold mb-4 border-b border-gray-700 pb-3 <?= $headingFontClass ?>">
                        <?= $lang==='ar' ? 'دليل الأقسام المباشرة' : 'Department Directory' ?>
                    </h3>
                    <div class="space-y-4 text-sm">
                        <!-- Sales -->
                        <div class="border-b border-gray-800 pb-3">
                            <div class="font-semibold text-saudi uppercase text-xs tracking-wider"><?= $lang==='ar' ? 'مبيعات العقود والصلب' : 'Sales & Estimation' ?></div>
                            <div class="text-offwhite font-medium mt-1">Eng. Jaffar / Sales Dept</div>
                            <a href="mailto:sales@thedesertiron.com" class="text-steel hover:text-white transition text-xs block">sales@thedesertiron.com</a>
                            <a href="tel:+966599510213" class="text-steel hover:text-white transition text-xs block">+966 59 951 0213</a>
                        </div>
                        <!-- Engineering -->
                        <div class="border-b border-gray-800 pb-3">
                            <div class="font-semibold text-saudi uppercase text-xs tracking-wider"><?= $lang==='ar' ? 'الهندسة والتصميم' : 'Engineering & Detailing' ?></div>
                            <div class="text-offwhite font-medium mt-1">BIM & Technical Office</div>
                            <a href="mailto:jaffar@thedesertiron.com" class="text-steel hover:text-white transition text-xs block">jaffar@thedesertiron.com</a>
                        </div>
                        <!-- Procurement -->
                        <div>
                            <div class="font-semibold text-saudi uppercase text-xs tracking-wider"><?= $lang==='ar' ? 'المشتريات والمحتوى المحلي' : 'Procurement & Vendor Affairs' ?></div>
                            <div class="text-offwhite font-medium mt-1">Riyadh Industrial Facility</div>
                            <div class="text-steel text-xs">Industrial Gate City, Zone 3, Riyadh</div>
                        </div>
                    </div>
                </div>

                <!-- Interactive Map Container -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden p-2">
                    <div class="p-3 bg-offwhite rounded-t-lg border-b border-gray-200">
                        <span class="text-xs font-bold text-charcoal uppercase tracking-wider flex items-center">
                            <svg class="w-4 h-4 text-saudi mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /></svg>
                            <?= $lang==='ar' ? 'موقعنا - مدينة البوابة الصناعية بالرياض' : 'Factory Location - Riyadh' ?>
                        </span>
                    </div>
                    <div class="h-64 w-full rounded-b-lg overflow-hidden relative">
                        <iframe 
                            class="w-full h-full border-0" 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116024.28723652876!2d46.75!3d24.65!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03890d489399%3A0xba974d1c98e79fd5!2sIndustrial%20City%2C%20Riyadh%20Saudi%20Arabia!5e0!3m2!1sen!2ssa!4v1700000000000!5m2!1sen!2ssa" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

<?php require_once 'footer.php'; ?>
