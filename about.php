<?php
$page_title = 'About Us | Desert Iron';
require_once 'header.php';
?>

<!-- 1. Hero Section -->
<section class="relative min-h-[45vh] flex items-center bg-charcoal overflow-hidden pt-24 pb-12">
    <div class="absolute inset-0 z-0">
        <img src="public/images/about_us_team.jpg" alt="About Desert Iron" class="w-full h-full object-cover opacity-75">
        <div class="absolute inset-0 bg-gradient-to-t from-charcoal/90 via-charcoal/40 to-charcoal/20"></div>
    </div>
    
    <div class="container mx-auto px-4 lg:px-6 relative z-10 text-center max-w-4xl">
        <div class="flex items-center justify-center gap-3 mb-4">
            <div class="w-8 h-[2px] bg-saudi"></div>
            <span class="text-white opacity-90 text-xs font-bold uppercase tracking-widest">
                <?= $lang === 'ar' ? '????? ???????' : 'Our Legacy & Vision' ?>
            </span>
            <div class="w-8 h-[2px] bg-saudi"></div>
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl text-white font-bold mb-4 leading-tight <?= $headingFontClass ?>">
            <?= $lang === 'ar' ? '???? ????? ?????.' : 'Building Tomorrow, Today.' ?>
        </h1>
        <p class="text-gray-300 text-sm sm:text-lg font-light leading-relaxed">
            <?= $lang === 'ar' ? '?????? ????? ?? ??? ????? ?? ???? ??????? ?????????? ?? ??????? ??????? ????????? ?????? ?? ??????? ????????? ????????? ????????.' : 'Desert Iron is a premier engineering and construction contractor in Saudi Arabia, specializing in heavy structural steel, PEB systems, and gigaproject execution.' ?>
        </p>
    </div>
</section>

<!-- 2. Story Section (Stacked Mobile, 2 Col Desktop) -->
<section class="py-12 md:py-16 lg:py-24 bg-white">
    <div class="container mx-auto px-4 lg:px-6 max-w-7xl">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
            
            <div class="lg:col-span-6 space-y-6">
                <span class="text-xs uppercase tracking-widest text-saudi font-bold block">Company Overview</span>
                <h2 class="text-3xl sm:text-4xl text-charcoal font-bold <?= $headingFontClass ?> leading-tight">
                    <?= $lang === 'ar' ? '????? ?????? ????? ?? ???????' : 'Engineering Excellence Across Saudi Arabia' ?>
                </h2>
                <p class="text-gray-600 text-base leading-relaxed font-light">
                    <?= $lang === 'ar' ? '??? ??????? ?? ??????? ????? ?????? ?????? ??????? ???????? ?????????????? ????????? ??????? ???????? ??????? ????? ?????? ??????? ??????? ????????.' : 'Established in Riyadh, Desert Iron operates one of the most advanced structural steel fabrication plants in the region. We combine cutting-edge BIM modeling, SBC 201 code compliance, and rigorous QA/QC inspection to deliver mega-projects on schedule.' ?>
                </p>
                <div class="pt-2">
                    <a href="quote.php" class="inline-flex bg-saudi text-white px-8 py-3.5 rounded-sm font-bold text-xs uppercase tracking-widest hover:bg-charcoal transition-colors shadow-md min-h-[44px] items-center">
                        <?= t('request_quote') ?>
                    </a>
                </div>
            </div>
            
            <div class="lg:col-span-6">
                <img src="public/images/hero_riyadh_steel.jpg" alt="Steel Fabrication Plant" class="w-full aspect-[4/3] object-cover rounded-sm shadow-xl border border-gray-100">
            </div>

        </div>
    </div>
</section>

<!-- 3. Vision & Mission Cards -->
<section class="py-12 md:py-16 bg-offwhite border-y border-gray-200">
    <div class="container mx-auto px-4 lg:px-6 max-w-7xl">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <!-- Vision -->
            <div class="bg-white p-8 rounded-sm shadow-sm border border-gray-200 hover:border-saudi transition-colors">
                <div class="w-12 h-12 bg-saudi/10 text-saudi rounded-sm flex items-center justify-center font-bold text-lg mb-6">01</div>
                <h3 class="text-2xl font-bold text-charcoal mb-3 <?= $headingFontClass ?>">
                    <?= $lang === 'ar' ? '??????' : 'Our Vision' ?>
                </h3>
                <p class="text-gray-600 text-sm md:text-base leading-relaxed font-light">
                    <?= $lang === 'ar' ? '?? ???? ??????? ?????? ????? ?? ???? ??????? ?????????? ????????? ?? ????? ??????? ????????? ??????? ?? ????? ???? ??????? 2030.' : 'To be the most trusted structural steel and contracting partner in the Middle East, setting the benchmark for safety, precision, and Vision 2030 localization.' ?>
                </p>
            </div>

            <!-- Mission -->
            <div class="bg-white p-8 rounded-sm shadow-sm border border-gray-200 hover:border-saudi transition-colors">
                <div class="w-12 h-12 bg-saudi/10 text-saudi rounded-sm flex items-center justify-center font-bold text-lg mb-6">02</div>
                <h3 class="text-2xl font-bold text-charcoal mb-3 <?= $headingFontClass ?>">
                    <?= $lang === 'ar' ? '???????' : 'Our Mission' ?>
                </h3>
                <p class="text-gray-600 text-sm md:text-base leading-relaxed font-light">
                    <?= $lang === 'ar' ? '????? ???? ?????? ??????? ?????? ???? ?????? ?????? ?????? ??? ???? ?????? ???????? ???????? ????????.' : 'To deliver state-of-the-art engineering, precision steel fabrication, and safe field execution that empowers sustainable industrial growth for our clients.' ?>
                </p>
            </div>

        </div>
    </div>
</section>

<!-- 4. Core Values Grid -->
<section class="py-12 md:py-16 lg:py-24 bg-white">
    <div class="container mx-auto px-4 lg:px-6 max-w-7xl">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <h2 class="text-xs uppercase tracking-widest text-saudi font-bold mb-3">Pillars of Excellence</h2>
            <h3 class="text-3xl sm:text-4xl text-charcoal font-bold <?= $headingFontClass ?>">Our Core Values</h3>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <div class="bg-offwhite p-6 rounded-sm border border-gray-200 shadow-sm text-center">
                <div class="w-12 h-12 bg-saudi text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold">1</div>
                <h4 class="text-lg font-bold text-charcoal mb-2 <?= $headingFontClass ?>">Safety First</h4>
                <p class="text-gray-600 text-xs font-light leading-relaxed">Zero-LTI safety commitment across all active fabrication plants and job sites.</p>
            </div>

            <div class="bg-offwhite p-6 rounded-sm border border-gray-200 shadow-sm text-center">
                <div class="w-12 h-12 bg-saudi text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold">2</div>
                <h4 class="text-lg font-bold text-charcoal mb-2 <?= $headingFontClass ?>">SBC Code Compliance</h4>
                <p class="text-gray-600 text-xs font-light leading-relaxed">Full technical compliance with Saudi Building Code (SBC 201) and ISO standards.</p>
            </div>

            <div class="bg-offwhite p-6 rounded-sm border border-gray-200 shadow-sm text-center">
                <div class="w-12 h-12 bg-saudi text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold">3</div>
                <h4 class="text-lg font-bold text-charcoal mb-2 <?= $headingFontClass ?>">Precision Detailing</h4>
                <p class="text-gray-600 text-xs font-light leading-relaxed">Advanced 3D BIM modeling and millimeter-perfect CNC steel processing.</p>
            </div>

            <div class="bg-offwhite p-6 rounded-sm border border-gray-200 shadow-sm text-center">
                <div class="w-12 h-12 bg-saudi text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold">4</div>
                <h4 class="text-lg font-bold text-charcoal mb-2 <?= $headingFontClass ?>">On-Time Delivery</h4>
                <p class="text-gray-600 text-xs font-light leading-relaxed">Fast mobilization and guaranteed schedule adherence for industrial projects.</p>
            </div>

        </div>
    </div>
</section>

<!-- 5. Final CTA -->
<section class="py-12 md:py-16 bg-gradient-to-r from-charcoal via-[#14231f] to-charcoal text-center relative overflow-hidden border-t border-saudi/30">
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#006B3F_1px,transparent_1px)] [background-size:16px_16px] pointer-events-none"></div>
    <div class="container mx-auto px-4 max-w-4xl relative z-10">
        <span class="inline-block px-3 py-1 bg-saudi/20 border border-saudi/40 text-emerald-300 rounded text-xs font-bold uppercase tracking-wider mb-3">
            <?= $lang === 'ar' ? 'استشارة مجانية وعروض أسعار' : 'Free Consultation & Engineering Quote' ?>
        </span>
        <h2 class="text-2xl sm:text-4xl text-white font-bold <?= $headingFontClass ?> mb-4 leading-tight">
            <?= $lang === 'ar' ? 'جاهز لبناء مشروعك القادم؟' : 'Partner with Saudi Arabia\'s Steel Leaders' ?>
        </h2>
        <p class="text-gray-300 text-sm md:text-base max-w-xl mx-auto mb-8 font-light leading-relaxed">
            <?= $lang === 'ar' ? 'تواصل مع فريق مبيعات الهندسة للحصول على استشارة متخصصة وعروض أسعار منافسة.' : 'Connect with our engineering estimation team in Riyadh for structural steel fabrication and construction contracting.' ?>
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="quote.php" class="w-full sm:w-auto bg-saudi text-white px-8 py-3.5 rounded-lg font-bold text-xs uppercase tracking-widest hover:bg-emerald-700 transition-all duration-300 shadow-xl min-h-[44px] flex items-center justify-center space-x-2">
                <span><?= t('get_quote') ?></span>
                <svg class="w-4 h-4 <?= $lang === 'ar' ? 'rotate-180' : '' ?>" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
            <a href="tel:+966599510213" class="w-full sm:w-auto bg-white/10 border border-white/30 text-white px-8 py-3.5 rounded-lg font-bold text-xs uppercase tracking-widest hover:bg-white hover:text-charcoal transition-all duration-300 min-h-[44px] flex items-center justify-center space-x-2">
                <svg class="w-4 h-4 text-saudi" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                <span>+966 59 951 0213</span>
            </a>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>
