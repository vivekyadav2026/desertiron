<?php
$page_title = "Request a Quote | Desert Iron";
require_once 'header.php';
require_once 'components.php';
?>

<section class="pt-32 pb-20 bg-charcoal text-offwhite">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl <?= $headingFontClass ?> mb-4"><?= $lang==='ar' ? 'اطلب تسعيرة' : 'Request a Quote' ?></h1>
        <p class="text-steel">Complete the steps below to receive a detailed estimate for your project.</p>
    </div>
</section>

<section class="py-16 bg-offwhite min-h-[60vh]">
    <div class="container mx-auto px-4 max-w-3xl">
        
        <!-- Progress Bar -->
        <div class="flex justify-between items-center mb-8 relative">
            <div class="absolute left-0 top-1/2 -translate-y-1/2 w-full h-1 bg-gray-300 z-0 rounded"></div>
            <div id="progress-line" class="absolute left-0 top-1/2 -translate-y-1/2 w-1/3 h-1 bg-saudi z-0 rounded transition-all duration-300"></div>
            
            <div class="w-10 h-10 rounded-full bg-saudi text-white flex items-center justify-center relative z-10 font-bold step-indicator" id="ind-1">1</div>
            <div class="w-10 h-10 rounded-full bg-gray-300 text-charcoal flex items-center justify-center relative z-10 font-bold step-indicator" id="ind-2">2</div>
            <div class="w-10 h-10 rounded-full bg-gray-300 text-charcoal flex items-center justify-center relative z-10 font-bold step-indicator" id="ind-3">3</div>
        </div>
        
        <div class="bg-white p-8 rounded shadow-lg border border-gray-100">
            <form id="quote-form" onsubmit="event.preventDefault(); alert('Quote Request Submitted!');">
                
                <!-- Step 1 -->
                <div class="step-container" id="step-1">
                    <h2 class="text-2xl text-charcoal <?= $headingFontClass ?> mb-6">Contact Details</h2>
                    <div class="space-y-4">
                        <div><label class="block text-sm mb-1 text-charcoal font-medium">Full Name *</label><input type="text" class="w-full border p-3 rounded" required></div>
                        <div><label class="block text-sm mb-1 text-charcoal font-medium">Company *</label><input type="text" class="w-full border p-3 rounded" required></div>
                        <div><label class="block text-sm mb-1 text-charcoal font-medium">Email *</label><input type="email" class="w-full border p-3 rounded" required></div>
                        <div><label class="block text-sm mb-1 text-charcoal font-medium">Phone *</label><input type="tel" class="w-full border p-3 rounded" required></div>
                    </div>
                    <div class="mt-8 text-right">
                        <button type="button" onclick="goToStep(2)" class="bg-saudi text-white px-6 py-2 rounded font-bold hover:bg-opacity-90">Next Step &rarr;</button>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="step-container hidden" id="step-2">
                    <h2 class="text-2xl text-charcoal <?= $headingFontClass ?> mb-6">Service Required</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <label class="border p-4 rounded cursor-pointer hover:border-saudi flex items-center gap-3">
                            <input type="radio" name="service" class="w-5 h-5 text-saudi"> <span>Structural Steel</span>
                        </label>
                        <label class="border p-4 rounded cursor-pointer hover:border-saudi flex items-center gap-3">
                            <input type="radio" name="service" class="w-5 h-5 text-saudi"> <span>PEB Systems</span>
                        </label>
                        <label class="border p-4 rounded cursor-pointer hover:border-saudi flex items-center gap-3">
                            <input type="radio" name="service" class="w-5 h-5 text-saudi"> <span>Civil Construction</span>
                        </label>
                        <label class="border p-4 rounded cursor-pointer hover:border-saudi flex items-center gap-3">
                            <input type="radio" name="service" class="w-5 h-5 text-saudi"> <span>Other</span>
                        </label>
                    </div>
                    <div class="mt-8 flex justify-between">
                        <button type="button" onclick="goToStep(1)" class="bg-gray-200 text-charcoal px-6 py-2 rounded font-bold hover:bg-gray-300">&larr; Back</button>
                        <button type="button" onclick="goToStep(3)" class="bg-saudi text-white px-6 py-2 rounded font-bold hover:bg-opacity-90">Next Step &rarr;</button>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="step-container hidden" id="step-3">
                    <h2 class="text-2xl text-charcoal <?= $headingFontClass ?> mb-6">Project Details & Uploads</h2>
                    <div class="space-y-4">
                        <div><label class="block text-sm mb-1 text-charcoal font-medium">Project Scope / Details</label>
                        <textarea rows="4" class="w-full border p-3 rounded" placeholder="Briefly describe your requirements..."></textarea></div>
                        
                        <div><label class="block text-sm mb-1 text-charcoal font-medium">Upload Drawings/BOQ (PDF, ZIP)</label>
                        <div class="border-2 border-dashed p-8 rounded text-center bg-offwhite text-steel">Drag & Drop files here or <span class="text-saudi font-bold underline cursor-pointer">Browse</span></div></div>
                    </div>
                    <div class="mt-8 flex justify-between">
                        <button type="button" onclick="goToStep(2)" class="bg-gray-200 text-charcoal px-6 py-2 rounded font-bold hover:bg-gray-300">&larr; Back</button>
                        <button type="submit" class="bg-saudi text-white px-8 py-2 rounded font-bold hover:bg-opacity-90">Submit Request</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</section>

<script>
    function goToStep(step) {
        // Hide all
        document.querySelectorAll('.step-container').forEach(el => el.classList.add('hidden'));
        // Show target
        document.getElementById('step-' + step).classList.remove('hidden');
        
        // Update indicators
        for(let i=1; i<=3; i++) {
            const ind = document.getElementById('ind-' + i);
            if(i <= step) {
                ind.classList.remove('bg-gray-300', 'text-charcoal');
                ind.classList.add('bg-saudi', 'text-white');
            } else {
                ind.classList.remove('bg-saudi', 'text-white');
                ind.classList.add('bg-gray-300', 'text-charcoal');
            }
        }
        
        // Update bar
        const percentages = {1: '33%', 2: '66%', 3: '100%'};
        document.getElementById('progress-line').style.width = percentages[step];
    }
</script>

<?php require_once 'footer.php'; ?>
