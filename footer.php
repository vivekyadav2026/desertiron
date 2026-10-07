    </main>

    <!-- Global Footer -->
    <footer class="bg-[#0f1412] text-gray-300 pt-16 pb-8 border-t border-saudi/30 relative z-10 overflow-hidden">
        <!-- Subtle Grid Background -->
        <div class="absolute inset-0 opacity-[0.02] pointer-events-none z-0" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 32px 32px;"></div>

        <div class="container mx-auto px-4 lg:px-6 max-w-7xl relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-12 lg:gap-8 mb-16">
                
                <!-- Column 1: Brand & About (Takes 5 cols) -->
                <div class="lg:col-span-5 lg:pe-8">
                    <a href="index.php" class="flex items-center gap-3 mb-6 group inline-flex">
                        <img src="public/images/logo-white.png" alt="Desert Iron" class="h-10 md:h-12 w-auto object-contain transition-transform group-hover:scale-105">
                    </a>
                    <p class="text-sm leading-relaxed mb-8 font-light text-gray-400 max-w-md">
                        <?= $lang === 'ar' ? '?????? ????? ?? ??? ????? ?? ???? ??????? ?????????? ?? ??????? ??????? ????????? ?????? ?? ??????? ????????? ????????? ???????? ??? ???? 2030.' : 'A leading force in Saudi Arabia\'s engineering and construction sector, specializing in world-class structural steel and gigaproject execution aligned with Vision 2030.' ?>
                    </p>
                    
                    <!-- Clean Vector Social Icons -->
                    <div class="flex items-center gap-3">
                        <!-- LinkedIn -->
                        <a href="https://linkedin.com" target="_blank" aria-label="LinkedIn" class="w-10 h-10 rounded-full border border-gray-700 flex items-center justify-center hover:bg-saudi hover:border-saudi transition-all duration-300 group">
                            <svg class="w-4 h-4 text-gray-400 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.46 10.9v8.37H9.25V10.9H6.46M7.86 6.74a1.45 1.45 0 1 0 0 2.9 1.45 1.45 0 0 0 0-2.9z"/>
                            </svg>
                        </a>
                        <!-- X / Twitter -->
                        <a href="https://twitter.com" target="_blank" aria-label="X / Twitter" class="w-10 h-10 rounded-full border border-gray-700 flex items-center justify-center hover:bg-saudi hover:border-saudi transition-all duration-300 group">
                            <svg class="w-4 h-4 text-gray-400 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                            </svg>
                        </a>
                        <!-- Facebook -->
                        <a href="https://facebook.com" target="_blank" aria-label="Facebook" class="w-10 h-10 rounded-full border border-gray-700 flex items-center justify-center hover:bg-saudi hover:border-saudi transition-all duration-300 group">
                            <svg class="w-4 h-4 text-gray-400 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H7.5v-3H10V9.5C10 7.01 11.49 5.65 13.75 5.65c1.08 0 2.25.19 2.25.19v2.47h-1.27c-1.23 0-1.61.77-1.61 1.56V12h2.78l-.45 3h-2.33v6.8c4.56-.93 8-4.96 8-9.8z"/>
                            </svg>
                        </a>
                        <!-- Instagram -->
                        <a href="https://instagram.com" target="_blank" aria-label="Instagram" class="w-10 h-10 rounded-full border border-gray-700 flex items-center justify-center hover:bg-saudi hover:border-saudi transition-all duration-300 group">
                            <svg class="w-4 h-4 text-gray-400 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Column 2: Expertise (Services) -->
                <div class="lg:col-span-3">
                    <h4 class="text-white <?= $headingFontClass ?> font-bold mb-6 uppercase tracking-widest text-xs"><?= t('services') ?></h4>
                    <ul class="space-y-3 text-sm font-light">
                        <li><a href="structural-steel.php" class="hover:text-white transition-colors">Structural Steel Buildings</a></li>
                        <li><a href="civil-construction.php" class="hover:text-white transition-colors">Civil Construction</a></li>
                        <li><a href="pre-engineered-buildings.php" class="hover:text-white transition-colors">Pre-Engineered Buildings (PEB)</a></li>
                        <li><a href="architectural-work.php" class="hover:text-white transition-colors">Architectural Design</a></li>
                        <li class="pt-2"><a href="services.php" class="text-saudi hover:text-white transition-colors font-medium border-b border-saudi pb-0.5 inline-block">View all services &rarr;</a></li>
                    </ul>
                </div>
                
                <!-- Column 3: Contact -->
                <div class="lg:col-span-4">
                    <h4 class="text-white <?= $headingFontClass ?> font-bold mb-6 uppercase tracking-widest text-xs"><?= t('contact') ?></h4>
                    <ul class="space-y-4 text-sm font-light mb-8 text-gray-400">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-saudi shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                            <span>Industrial Gate City,<br>Riyadh, Saudi Arabia</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-saudi shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            <a href="mailto:sales@desrtiron.com" class="hover:text-white transition-colors">sales@desrtiron.com</a>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-saudi shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            <a href="tel:+966599510213" class="hover:text-white transition-colors">+966 59 951 0213</a>
                        </li>
                    </ul>
                    <a href="quote.php" class="inline-flex border border-saudi text-saudi px-8 py-2.5 rounded-sm font-bold text-xs uppercase tracking-widest hover:bg-saudi hover:text-white transition-colors">
                        <?= t('get_quote') ?>
                    </a>
                </div>
            </div>
            
            <!-- Bottom Copyright Bar -->
            <div class="border-t border-white/5 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xs font-light">
                <div class="flex items-center gap-2">
                    &copy; <?= date('Y') ?> Desert Iron. All rights reserved. 
                    <span class="mx-2 text-gray-700 hidden md:inline">|</span> 
                    <a href="privacy.php" class="hover:text-white transition-colors hidden md:inline">Privacy Policy</a>
                </div>
                <div class="flex items-center gap-2 text-gray-400 uppercase tracking-widest font-medium">
                    <svg class="w-4 h-4 text-saudi" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                    </svg>
                    <?= t('vision_2030') ?> Aligned
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp CTA Button -->
    <?php
    $wa_msg = $lang === 'ar' 
        ? 'مرحباً%20صحراء%20الحديد،%20أود%20الاستفسار%20عن%20خدمات%20الهياكل%20الحديدية%20والإنشاءات.' 
        : 'Hello%20Desert%20Iron,%20I%20would%20like%20to%20inquire%20about%20your%20structural%20steel%20and%20construction%20services.';
    ?>
    <div class="fixed bottom-20 md:bottom-6 <?= $lang === 'ar' ? 'left-6' : 'right-6' ?> z-[90] flex items-center gap-3 group">
        <!-- Floating Tooltip Label -->
        <span class="hidden md:inline-block bg-charcoal text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none whitespace-nowrap border border-saudi/40">
            <?= $lang === 'ar' ? 'راسلنا على واتساب' : 'Chat with us on WhatsApp' ?>
        </span>
        <!-- Pulsing Ring Wrapper -->
        <a href="https://wa.me/966599510213?text=<?= $wa_msg ?>" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp Chat" class="relative bg-[#25D366] text-white w-14 h-14 rounded-full flex items-center justify-center shadow-xl hover:bg-[#20bd5a] hover:scale-110 transition-all duration-300 min-h-[44px]">
            <span class="absolute -inset-1 rounded-full bg-[#25D366] opacity-40 animate-ping pointer-events-none"></span>
            <svg class="w-8 h-8 relative z-10" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51h-.571c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.093 3.2 5.066 4.482.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
            </svg>
        </a>
    </div>

    <!-- Cookie Banner -->
    <div id='cookie-banner' class='fixed bottom-0 left-0 right-0 bg-charcoal text-offwhite p-4 flex flex-col md:flex-row items-center justify-between z-[100] shadow-[0_-4px_20px_rgba(0,0,0,0.2)] border-t border-saudi'>
        <p class='text-sm mb-4 md:mb-0'>We use cookies to ensure you get the best experience on our website. <a href='privacy.php' class='underline text-saudi'>Learn more</a></p>
        <button onclick='acceptCookies()' class='bg-saudi text-white px-8 py-2 rounded text-sm font-bold transition hover:bg-opacity-90 min-h-[44px]'>Accept</button>
    </div>

    <script>
        function acceptCookies() {
            localStorage.setItem('cookieAccepted', 'true');
            document.getElementById('cookie-banner').style.display = 'none';
        }
        if (localStorage.getItem('cookieAccepted') === 'true') {
            document.getElementById('cookie-banner').style.display = 'none';
        }

        document.addEventListener('DOMContentLoaded', () => {
            // Lazy Load Images
            document.querySelectorAll('img:not([loading])').forEach(img => {
                img.setAttribute('loading', 'lazy');
            });

            // Automatically target cards, headings, and sections for scroll animation
            const animateTargets = document.querySelectorAll('section h2, section h3, .grid > div, .grid > a, article, .hover-lift');
            animateTargets.forEach((el, index) => {
                if (!el.classList.contains('reveal-on-scroll') && !el.classList.contains('reveal-scale')) {
                    el.classList.add('reveal-on-scroll');
                    const delay = (index % 4) * 80;
                    el.style.transitionDelay = delay + 'ms';
                }
            });

            // IntersectionObserver for Scroll Animations
            if ('IntersectionObserver' in window) {
                const observer = new IntersectionObserver((entries, obs) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('is-visible');
                            obs.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.1 });

                document.querySelectorAll('.reveal-on-scroll, .reveal-scale').forEach(el => {
                    observer.observe(el);
                });
            } else {
                // Fallback for legacy browsers
                document.querySelectorAll('.reveal-on-scroll, .reveal-scale').forEach(el => {
                    el.classList.add('is-visible');
                });
            }
        });
    </script>
</body>
</html>