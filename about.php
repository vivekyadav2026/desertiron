<?php
$page_title = 'About Us | Desert Iron';
require_once 'header.php';
require_once 'components.php';
?>

<!-- 1. Page Hero -->
<section class="relative min-h-[60vh] flex items-center bg-charcoal overflow-hidden pt-20">
    <div class="absolute inset-0 z-0">
        <img src="public/images/about_us_team.jpg" alt="About Desert Iron" class="w-full h-full object-cover opacity-30">
        <div class="absolute inset-0 bg-gradient-to-t from-charcoal via-transparent to-charcoal/50"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10 text-center max-w-4xl" data-aos="fade-up" data-aos-duration="1000">
        <div class="flex items-center justify-center gap-4 mb-6">
            <div class="w-8 h-[2px] bg-saudi"></div>
            <span class="text-saudi text-xs font-bold uppercase tracking-widest">Our Story</span>
            <div class="w-8 h-[2px] bg-saudi"></div>
        </div>
        <h1 class="text-5xl md:text-6xl text-white font-bold mb-6 leading-tight <?= $headingFontClass ?>">
            <?= $lang === 'ar' ? '???? ????? ?????.' : 'Building Tomorrow, Today.' ?>
        </h1>
        <p class="text-gray-300 text-lg md:text-xl font-light leading-relaxed">
            <?= $lang === 'ar' ? '?????? ????? ?? ??? ????? ?? ???? ??????? ?????????? ?? ??????? ??????? ????????? ?????? ?? ??????? ????????? ????????? ????????.' : 'Desert Iron is a leading force in Saudi Arabia’s engineering and construction sector, specializing in world-class structural steel and gigaproject execution.' ?>
        </p>
    </div>
</section>

<!-- 2. Who We Are (Cinematic Split) -->
<section class="py-24 md:py-32 bg-offwhite overflow-hidden">
    <div class="container mx-auto px-4 max-w-7xl">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">
            <div data-aos="fade-right">
                <h2 class="text-3xl md:text-4xl text-charcoal font-light mb-8 leading-tight <?= $headingFontClass ?>">
                    <?= $lang === 'ar' ? '??? ?? ?????? ???????.' : 'A Legacy of <br><span class="font-bold">Engineering Excellence.</span>' ?>
                </h2>
                <p class="text-steel leading-relaxed mb-6 font-light text-lg">
                    <?= $lang === 'ar' ? '??? ???????? ????? ??? ?????? ????? ??????? ???????? ?????? ????????. ??? ?? ???? ??????? ????? ?? ???? ?????? ?????? ???? ?????? ????? ??????? ???????? ?? ???????.' : 'Since our inception, Desert Iron has been synonymous with uncompromising quality and engineering precision. We don’t just build structures; we architect innovative solutions that meet the demands of the Kingdom’s rapid industrial growth.' ?>
                </p>
                <p class="text-steel leading-relaxed mb-10 font-light text-lg">
                    <?= $lang === 'ar' ? '?? ???? ?????? ??????? ??????? ????? ????????? ???? ?????? ???????? ??????? ????? ??? ????? ??????.' : 'Through our veteran engineering team and state-of-the-art technology, we consistently deliver highly complex projects safely, on time, and beyond expectations.' ?>
                </p>
                
                <div class="grid grid-cols-2 gap-8 border-t border-gray-200 pt-10">
                    <div>
                        <div class="text-4xl text-saudi font-bold mb-2 <?= $headingFontClass ?>">20+</div>
                        <div class="text-charcoal font-medium text-xs uppercase tracking-widest">Years Experience</div>
                    </div>
                    <div>
                        <div class="text-4xl text-saudi font-bold mb-2 <?= $headingFontClass ?>">300+</div>
                        <div class="text-charcoal font-medium text-xs uppercase tracking-widest">Projects Completed</div>
                    </div>
                </div>
            </div>
            
            <div class="relative mt-12 lg:mt-0" data-aos="fade-left">
                <img src="public/images/technical_staffing.jpg" alt="Engineering Team" class="w-full aspect-[4/5] object-cover rounded-sm shadow-xl">
                <!-- Overlapping Image -->
                <div class="absolute -bottom-12 -start-12 w-2/3 hidden md:block">
                    <img src="public/images/architectural_work.jpg" alt="Design" class="w-full aspect-[4/3] object-cover rounded-sm shadow-2xl border-4 border-offwhite">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. Vision & Mission -->
<section class="py-24 md:py-32 bg-white">
    <div class="container mx-auto px-4 max-w-7xl">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12">
            
            <!-- Vision -->
            <div class="p-10 lg:p-16 bg-offwhite rounded-sm relative overflow-hidden group hover:bg-saudi transition-colors duration-500 shadow-sm border border-gray-100" data-aos="fade-up">
                <div class="absolute top-0 right-0 p-8 opacity-[0.03] group-hover:opacity-20 transition-opacity">
                    <svg class="w-32 h-32 text-charcoal group-hover:text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/></svg>
                </div>
                <h3 class="text-3xl text-charcoal group-hover:text-white font-light mb-6 <?= $headingFontClass ?> transition-colors">Our Vision</h3>
                <div class="w-12 h-[2px] bg-saudi group-hover:bg-white mb-8 transition-colors"></div>
                <p class="text-steel group-hover:text-gray-100 text-lg leading-relaxed font-light transition-colors relative z-10">
                    <?= $lang === 'ar' ? '?? ???? ?????? ????? ?? ??????? ??????? ????????? ??? ???? ???? ????????? ??? ?????? ?????? ??????? ?? ???? 2030.' : 'To be the region’s premier choice for innovative engineering, leading the construction sector toward a sustainable future in alignment with Vision 2030.' ?>
                </p>
            </div>
            
            <!-- Mission -->
            <div class="p-10 lg:p-16 bg-charcoal rounded-sm relative overflow-hidden group hover:bg-saudi transition-colors duration-500 shadow-xl" data-aos="fade-up" data-aos-delay="100">
                <div class="absolute top-0 right-0 p-8 opacity-[0.03] group-hover:opacity-20 transition-opacity">
                    <svg class="w-32 h-32 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zm0 16H5V5h14v14z"/><path d="M7 10h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg>
                </div>
                <h3 class="text-3xl text-white font-light mb-6 <?= $headingFontClass ?>">Our Mission</h3>
                <div class="w-12 h-[2px] bg-saudi group-hover:bg-white mb-8 transition-colors"></div>
                <p class="text-gray-300 group-hover:text-gray-100 text-lg leading-relaxed font-light transition-colors relative z-10">
                    <?= $lang === 'ar' ? '????? ????? ??????? ?????? ??????? ????? ???? ????????? ?? ???? ???????? ??????? ???????? ?????.' : 'To deliver world-class structural steel and exceptional construction solutions through continuous innovation, safe execution, and unwavering commitment to client success.' ?>
                </p>
            </div>

        </div>
    </div>
</section>

<!-- 4. Core Values -->
<section class="py-24 md:py-32 bg-offwhite">
    <div class="container mx-auto px-4 max-w-7xl">
        <div class="text-center max-w-2xl mx-auto mb-20" data-aos="fade-up">
            <h2 class="text-xs uppercase tracking-widest text-saudi font-bold mb-4">What Drives Us</h2>
            <h3 class="text-4xl text-charcoal <?= $headingFontClass ?> font-light leading-tight">Our Core Values</h3>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php 
            $values = [
                ['Quality First', 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z'],
                ['Safety Always', 'M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z'],
                ['Integrity', 'M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3'],
                ['Innovation', 'M13 10V3L4 14h7v7l9-11h-7z']
            ];
            foreach($values as $i => $val):
            ?>
            <div class="bg-white p-8 rounded-sm shadow-sm border border-gray-100 hover:-translate-y-2 transition-transform duration-300" data-aos="fade-up" data-aos-delay="<?= ($i%4)*100 ?>">
                <div class="w-12 h-12 bg-saudi/10 rounded flex items-center justify-center text-saudi mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= $val[1] ?>"></path></svg>
                </div>
                <h4 class="text-xl text-charcoal font-semibold mb-3 <?= $headingFontClass ?>"><?= $val[0] ?></h4>
                <p class="text-steel font-light text-sm leading-relaxed">
                    Upholding the highest standards in every aspect of our operations to ensure sustainable, long-term success.
                </p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 5. Vision 2030 Alignment -->
<section class="py-32 bg-charcoal relative overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="public/images/civil_construction.jpg" class="w-full h-full object-cover opacity-20" alt="Vision 2030">
        <div class="absolute inset-0 <?= $lang === 'ar' ? 'bg-gradient-to-l' : 'bg-gradient-to-r' ?> from-charcoal via-charcoal/90 to-transparent"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10 max-w-7xl">
        <div class="max-w-2xl" data-aos="fade-right">
            <div class="w-16 h-1 bg-saudi mb-6"></div>
            <h2 class="text-4xl text-white font-light mb-8 <?= $headingFontClass ?>">Aligned with <br><span class="font-bold">Saudi Vision 2030</span></h2>
            <p class="text-gray-300 text-lg font-light leading-relaxed mb-10">
                As Saudi Arabia undergoes an unprecedented industrial and infrastructural transformation, Desert Iron stands at the forefront of this evolution. We are committed to localizing expertise, driving sustainable construction practices, and contributing to the ambitious gigaprojects that are reshaping the Kingdom.
            </p>
            <a href="projects.php" class="inline-flex items-center gap-2 text-saudi font-bold uppercase tracking-widest text-sm hover:text-white transition-colors">
                Explore our Gigaprojects &rarr;
            </a>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>