<?php
/**
 * RKTuition - Footer Component
 *
 * Reusable, responsive, and accessible footer for RKTuition educational platform.
 *
 * Configurable Variables (optional before including this file):
 * - $basePath (string): relative path to frontend root (e.g., './' or '../')
 * - $navUrls  (array) : custom overrides for navigation URLs
 */

$basePath = $basePath ?? '';

// Default navigation URLs (easily customizable via $navUrls)
$defaultUrls = [
    'home'            => $basePath . 'index.php',
    'services'        => $basePath . 'services.php',
    'class'           => $basePath . 'classes/sixthToeight.php',
    'notes'           => $basePath . 'notes/index.php',
    'tuition'         => $basePath . 'pages/tuition.php',
    'contact'         => $basePath . 'pages/contact.php',
    'login'           => $basePath . 'pages/login.php',
    'admission'       => $basePath . 'pages/admission.php',
    'study_resources' => $basePath . 'notes/index.php',
    'learning_support'=> $basePath . 'pages/contact.php',
    'privacy_policy'  => '#privacy-policy',
    'terms_conditions'=> '#terms-conditions',
];

$urls = isset($navUrls) && is_array($navUrls) ? array_merge($defaultUrls, $navUrls) : $defaultUrls;
?>

<!-- Footer Section -->
<footer class="bg-slate-950 text-slate-300 border-t border-slate-800/80 relative" role="contentinfo">
    
    <!-- Top Gold Accent Line -->
    <div class="h-1 w-full bg-gradient-to-r from-transparent via-brand-gold/60 to-transparent"></div>

    <!-- Main Footer Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-12">
            
            <!-- 1. Brand Section (Col 1-4 on Large Screens) -->
            <div class="lg:col-span-4 flex flex-col space-y-4">
                <!-- Brand Identity -->
                <a href="<?php echo htmlspecialchars($urls['home']); ?>" class="flex items-center gap-3 group inline-block" aria-label="RKTuition Home">
                    <div class="w-10 h-10 rounded-xl bg-slate-900 border border-brand-gold/40 flex items-center justify-center text-brand-gold shadow-md shadow-brand-gold/10 group-hover:border-brand-gold transition-colors">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
                            <path d="M6 12v5c3 3 9 3 12 0v-5"/>
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-2xl font-extrabold tracking-tight text-white font-sans">
                            RK<span class="text-brand-gold">Tuition</span>
                        </span>
                    </div>
                </a>

                <!-- Educational Tagline -->
                <p class="text-brand-gold text-sm font-semibold tracking-wide">
                    Empowering Minds, Inspiring Excellence, Shaping Bright Futures.
                </p>

                <!-- Learning Philosophy -->
                <p class="text-slate-400 text-sm leading-relaxed pr-0 lg:pr-4">
                    At RKTuition, our educational philosophy centers on concept clarity, disciplined study routines, and personalized academic mentorship. We empower students to bridge knowledge gaps, master challenging curricula, and achieve sustained academic success.
                </p>

                <!-- Trust / Accreditations Badge -->
                <div class="pt-2 flex items-center gap-3 text-xs text-slate-400">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-slate-900/90 border border-slate-800 text-slate-300">
                        <svg class="w-3.5 h-3.5 text-brand-gold" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Verified Educational Curriculum</span>
                    </span>
                </div>
            </div>

            <!-- 2. Quick Links (Col 5-6 on Large Screens) -->
            <div class="lg:col-span-2">
                <h3 class="text-sm font-bold uppercase tracking-wider text-white mb-5 flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-brand-gold"></span>
                    <span>Quick Links</span>
                </h3>
                <ul class="space-y-3 text-sm">
                    <li>
                        <a href="<?php echo htmlspecialchars($urls['home']); ?>" class="text-slate-400 hover:text-brand-gold transition-all duration-200 inline-flex items-center gap-2 group">
                            <svg class="w-3.5 h-3.5 text-slate-600 group-hover:text-brand-gold group-hover:translate-x-0.5 transition-all" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/></svg>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo htmlspecialchars($urls['services']); ?>" class="text-slate-400 hover:text-brand-gold transition-all duration-200 inline-flex items-center gap-2 group">
                            <svg class="w-3.5 h-3.5 text-slate-600 group-hover:text-brand-gold group-hover:translate-x-0.5 transition-all" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/></svg>
                            <span>Services</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo htmlspecialchars($urls['class']); ?>" class="text-slate-400 hover:text-brand-gold transition-all duration-200 inline-flex items-center gap-2 group">
                            <svg class="w-3.5 h-3.5 text-slate-600 group-hover:text-brand-gold group-hover:translate-x-0.5 transition-all" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/></svg>
                            <span>Class</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo htmlspecialchars($urls['notes']); ?>" class="text-slate-400 hover:text-brand-gold transition-all duration-200 inline-flex items-center gap-2 group">
                            <svg class="w-3.5 h-3.5 text-slate-600 group-hover:text-brand-gold group-hover:translate-x-0.5 transition-all" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/></svg>
                            <span>Notes</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo htmlspecialchars($urls['tuition']); ?>" class="text-slate-400 hover:text-brand-gold transition-all duration-200 inline-flex items-center gap-2 group">
                            <svg class="w-3.5 h-3.5 text-slate-600 group-hover:text-brand-gold group-hover:translate-x-0.5 transition-all" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/></svg>
                            <span>Tuition</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo htmlspecialchars($urls['contact']); ?>" class="text-slate-400 hover:text-brand-gold transition-all duration-200 inline-flex items-center gap-2 group">
                            <svg class="w-3.5 h-3.5 text-slate-600 group-hover:text-brand-gold group-hover:translate-x-0.5 transition-all" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/></svg>
                            <span>Contact</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- 3. Student Links (Col 7-8 on Large Screens) -->
            <div class="lg:col-span-2">
                <h3 class="text-sm font-bold uppercase tracking-wider text-white mb-5 flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-brand-gold"></span>
                    <span>Student Links</span>
                </h3>
                <ul class="space-y-3 text-sm">
                    <li>
                        <a href="<?php echo htmlspecialchars($urls['login']); ?>" class="text-slate-400 hover:text-brand-gold transition-all duration-200 inline-flex items-center gap-2 group">
                            <svg class="w-3.5 h-3.5 text-slate-600 group-hover:text-brand-gold group-hover:translate-x-0.5 transition-all" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/></svg>
                            <span>Login Portal</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo htmlspecialchars($urls['admission']); ?>" class="text-brand-gold hover:text-amber-300 font-medium transition-all duration-200 inline-flex items-center gap-2 group">
                            <svg class="w-3.5 h-3.5 text-brand-gold group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/></svg>
                            <span>Get Admission</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo htmlspecialchars($urls['study_resources']); ?>" class="text-slate-400 hover:text-brand-gold transition-all duration-200 inline-flex items-center gap-2 group">
                            <svg class="w-3.5 h-3.5 text-slate-600 group-hover:text-brand-gold group-hover:translate-x-0.5 transition-all" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/></svg>
                            <span>Study Resources</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo htmlspecialchars($urls['learning_support']); ?>" class="text-slate-400 hover:text-brand-gold transition-all duration-200 inline-flex items-center gap-2 group">
                            <svg class="w-3.5 h-3.5 text-slate-600 group-hover:text-brand-gold group-hover:translate-x-0.5 transition-all" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/></svg>
                            <span>Learning Support</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- 4. Contact Information (Col 9-12 on Large Screens) -->
            <div class="lg:col-span-4">
                <h3 class="text-sm font-bold uppercase tracking-wider text-white mb-5 flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-brand-gold"></span>
                    <span>Contact Information</span>
                </h3>
                <div class="space-y-4 text-sm">
                    <!-- Phone Placeholder -->
                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-lg bg-slate-900 border border-slate-800 flex items-center justify-center text-brand-gold shrink-0 mt-0.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"/>
                            </svg>
                        </div>
                        <div>
                            <span class="block text-xs uppercase tracking-wider text-slate-500 font-semibold">Admissions Hotline</span>
                            <span class="text-slate-300 font-medium">+91 9153832633</span>
                        </div>
                    </div>

                    <!-- Email Placeholder -->
                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-lg bg-slate-900 border border-slate-800 flex items-center justify-center text-brand-gold shrink-0 mt-0.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/>
                            </svg>
                        </div>
                        <div>
                            <span class="block text-xs uppercase tracking-wider text-slate-500 font-semibold">Email Desk</span>
                            <span class="text-slate-300 font-medium">rupasingh10456@gmail.com</span>
                        </div>
                    </div>

                    <!-- Address Placeholder -->
                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-lg bg-slate-900 border border-slate-800 flex items-center justify-center text-brand-gold shrink-0 mt-0.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/>
                            </svg>
                        </div>
                        <div>
                            <span class="block text-xs uppercase tracking-wider text-slate-500 font-semibold">Campus Address</span>
                            <span class="text-slate-300 leading-snug">Shree Sidhivinayak Meera , Aeronest society , Pune - 411001</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- 5. Bottom Bar -->
        <div class="mt-12 pt-8 border-t border-slate-900 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
            <!-- Copyright Notice with Dynamic PHP Year -->
            <p class="text-center sm:text-left">
                &copy; <?php echo date('Y'); ?> <span class="text-slate-400 font-semibold">RKTuition</span>. All rights reserved.
            </p>

            <!-- Placeholder Legal Links -->
            <div class="flex items-center space-x-6">
                <a href="<?php echo htmlspecialchars($urls['privacy_policy']); ?>" class="hover:text-slate-300 transition-colors">Privacy Policy</a>
                <span class="text-slate-800" aria-hidden="true">&bull;</span>
                <a href="<?php echo htmlspecialchars($urls['terms_conditions']); ?>" class="hover:text-slate-300 transition-colors">Terms & Conditions</a>
            </div>
        </div>
    </div>
</footer>
