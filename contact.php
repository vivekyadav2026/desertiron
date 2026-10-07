<?php
$page_title = "Contact Us | Desert Iron";
require_once 'header.php';
require_once 'components.php';
?>

<section class="relative pt-32 pb-20 bg-charcoal text-offwhite overflow-hidden">
    <div class="container mx-auto px-4 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl <?= $headingFontClass ?> mb-4"><?= $lang==='ar' ? 'اتصل بنا' : 'Contact Us' ?></h1>
        <p class="text-steel"><?= $lang==='ar' ? 'فريقنا مستعد لدعم مشروعك القادم.' : 'Our team is ready to support your next project.' ?></p>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="container mx-auto px-4 grid grid-cols-1 lg:grid-cols-2 gap-16">
        
        <!-- Contact Details -->
        <div class="space-y-8">
            <?= renderSectionHeading($lang==='ar' ? 'نبني معاً' : 'Let\'s Build Together', '') ?>
            <p class="text-steel mb-8">Reach out to our Riyadh headquarters for inquiries regarding structural steel, engineering, or general construction contracting.</p>
            
            <div class="flex items-start gap-4">
                <div class="w-12 h-12 bg-offwhite text-saudi flex items-center justify-center rounded shrink-0">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                </div>
                <div>
                    <h4 class="text-charcoal font-bold mb-1">Head Office</h4>
                    <p class="text-steel text-sm">Industrial Gate City, Riyadh<br>Kingdom of Saudi Arabia</p>
                </div>
            </div>
            
            <div class="flex items-start gap-4">
                <div class="w-12 h-12 bg-offwhite text-saudi flex items-center justify-center rounded shrink-0">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                </div>
                <div>
                    <h4 class="text-charcoal font-bold mb-1">Phone</h4>
                    <p class="text-steel text-sm">+966 11 000 0000</p>
                </div>
            </div>
            
            <div class="flex items-start gap-4">
                <div class="w-12 h-12 bg-offwhite text-saudi flex items-center justify-center rounded shrink-0">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                </div>
                <div>
                    <h4 class="text-charcoal font-bold mb-1">Email</h4>
                    <p class="text-steel text-sm">info@desertiron.com.sa</p>
                </div>
            </div>
        </div>
        
        <!-- Standard Form -->
        <div class="bg-offwhite p-8 rounded shadow-sm border border-gray-200">
            <h3 class="text-2xl <?= $headingFontClass ?> text-charcoal mb-6">Send a Message</h3>
            <form class="space-y-4">
                <div class="grid grid-cols-2 gap-4">
                    <input type="text" placeholder="Name" class="w-full border border-gray-300 p-3 rounded outline-none focus:border-saudi">
                    <input type="text" placeholder="Company" class="w-full border border-gray-300 p-3 rounded outline-none focus:border-saudi">
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <input type="email" placeholder="Email" class="w-full border border-gray-300 p-3 rounded outline-none focus:border-saudi">
                    <input type="tel" placeholder="Phone" class="w-full border border-gray-300 p-3 rounded outline-none focus:border-saudi">
                </div>
                <select class="w-full border border-gray-300 p-3 rounded outline-none focus:border-saudi text-gray-500">
                    <option>Select Service</option>
                    <option>Structural Steel</option>
                    <option>Civil Construction</option>
                    <option>PEB</option>
                </select>
                <textarea rows="4" placeholder="Your Message" class="w-full border border-gray-300 p-3 rounded outline-none focus:border-saudi"></textarea>
                <div class="border border-dashed border-gray-300 p-4 rounded text-center bg-white">
                    <span class="text-sm text-steel">Upload File (Optional)</span>
                    <input type="file" class="hidden">
                </div>
                <button type="submit" class="w-full bg-saudi text-white py-3 rounded font-bold hover:bg-opacity-90 transition">Send Message</button>
            </form>
        </div>
        
    </div>
</section>

<!-- Google Map Placeholder -->
<section class="h-96 bg-[url('public/images/contact_hq.jpg')] bg-cover bg-center relative">
    <div class="absolute inset-0 flex items-center justify-center text-steel font-bold text-xl">Google Maps Embed (Riyadh) Placeholder</div>
</section>

<?php require_once 'footer.php'; ?>

