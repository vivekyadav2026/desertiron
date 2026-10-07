    </main>

    <!-- Global Footer -->
    <footer class="bg-charcoal text-steel py-12 border-t border-gray-800 mt-20">
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            
            <!-- Column 1: Company -->
            <div>
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-8 h-8 bg-saudi flex items-center justify-center text-offwhite <?= $headingFontClass ?> text-sm rounded">DI</div>
                    <div class="text-offwhite <?= $headingFontClass ?> tracking-widest uppercase">Desert Iron</div>
                </div>
                <ul class="space-y-3 text-sm">
                    <li><a href="about.php" class="hover:text-desert transition-colors"><?= t('about') ?></a></li>
                    <li><a href="careers.php" class="hover:text-desert transition-colors"><?= t('careers') ?></a></li>
                    <li><a href="news.php" class="hover:text-desert transition-colors"><?= t('news') ?></a></li>
                    <li><a href="certifications.php" class="hover:text-desert transition-colors"><?= t('certifications') ?></a></li>
                    <li><a href="clients.php" class="hover:text-desert transition-colors"><?= t('clients') ?></a></li>
                </ul>
            </div>
            
            <!-- Column 2: Services -->
            <div>
                <h4 class="text-offwhite <?= $headingFontClass ?> mb-6 text-lg"><?= t('services') ?></h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="structural-steel.php" class="hover:text-desert transition-colors">Structural Steel</a></li>
                    <li><a href="pre-engineered-buildings.php" class="hover:text-desert transition-colors">PEB Systems</a></li>
                    <li><a href="architectural-work.php" class="hover:text-desert transition-colors">Engineering & Design</a></li>
                    <li><a href="services.php" class="hover:text-desert transition-colors text-saudi">View all services &rarr;</a></li>
                </ul>
            </div>

            <!-- Column 3: Industries -->
            <div>
                <h4 class="text-offwhite <?= $headingFontClass ?> mb-6 text-lg"><?= t('industries') ?></h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="industries.php#commercial" class="hover:text-desert transition-colors">Commercial</a></li>
                    <li><a href="industries.php#industrial" class="hover:text-desert transition-colors">Industrial & Warehousing</a></li>
                    <li><a href="industries.php#oilgas" class="hover:text-desert transition-colors">Oil & Gas</a></li>
                    <li><a href="industries.php#infrastructure" class="hover:text-desert transition-colors">Infrastructure</a></li>
                </ul>
            </div>
            
            <!-- Column 4: Contact -->
            <div>
                <h4 class="text-offwhite <?= $headingFontClass ?> mb-6 text-lg"><?= t('contact') ?></h4>
                <ul class="space-y-3 text-sm">
                    <li>Riyadh, Saudi Arabia</li>
                    <li>info@desertiron.com.sa</li>
                    <li>+966 11 000 0000</li>
                    <li><a href="quote.php" class="text-saudi hover:text-white transition-colors">Request a Quote</a></li>
                </ul>
                
                <!-- Social Icons -->
                <div class="flex gap-4 mt-6">
                    <!-- LinkedIn -->
                    <a href="#" class="text-steel hover:text-saudi"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg></a>
                    <!-- X / Twitter -->
                    <a href="#" class="text-steel hover:text-saudi"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg></a>
                    <!-- Instagram -->
                    <a href="#" class="text-steel hover:text-saudi"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></a>
                    <!-- Facebook -->
                    <a href="#" class="text-steel hover:text-saudi"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg></a>
                </div>
            </div>
        </div>
        
        <div class="container mx-auto px-4 mt-12 pt-8 border-t border-gray-800 flex flex-col md:flex-row justify-between items-center text-xs gap-4">
            <div>&copy; <?= date('Y') ?> Desert Iron. All rights reserved.</div>
            <div class="flex items-center gap-2 text-desert font-medium">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                </svg>
                <?= t('vision_2030') ?>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/966000000000" target="_blank" class="fixed bottom-6 <?= $lang === 'ar' ? 'left-6' : 'right-6' ?> bg-saudi text-white w-14 h-14 rounded-full flex items-center justify-center shadow-lg hover:bg-opacity-90 hover:scale-110 transition-all duration-300 z-50">
        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51h-.571c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.093 3.2 5.066 4.482.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
        </svg>
    </a>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Cookie Banner -->
    <div id='cookie-banner' class='fixed bottom-0 left-0 right-0 bg-charcoal text-offwhite p-4 flex flex-col md:flex-row items-center justify-between z-[100] shadow-[0_-4px_20px_rgba(0,0,0,0.2)] border-t border-saudi'>
        <p class='text-sm mb-4 md:mb-0'>We use cookies to ensure you get the best experience on our website. <a href='privacy.php' class='underline text-saudi'>Learn more</a></p>
        <button onclick='document.getElementById("cookie-banner").style.display="none"' class='bg-saudi text-white px-8 py-2 rounded text-sm font-bold transition hover:bg-opacity-90'>Accept</button>
    </div>

    <!-- Final Pass Scripts: Scroll Animations, Lazy Loading, Forms -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // 1. Scroll Animations (Fade/Slide up)
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('opacity-100', 'translate-y-0');
                        entry.target.classList.remove('opacity-0', 'translate-y-8');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });
            
            // Apply to all sections except Hero (.pt-32)
            document.querySelectorAll('section:not(.pt-32)').forEach(sec => {
                sec.classList.add('transition-all', 'duration-1000', 'opacity-0', 'translate-y-8');
                observer.observe(sec);
            });

            // 2. Lazy Load Images (Lighthouse optimization)
            document.querySelectorAll('img:not([loading])').forEach(img => {
                img.setAttribute('loading', 'lazy');
            });
            
            // 3. Connect standard forms to placeholder endpoint
            document.querySelectorAll('form:not(#quote-form)').forEach(f => {
                f.setAttribute('action', 'process-form.php');
                f.setAttribute('method', 'POST');
            });
        });
    </script>

</body>
</html>

