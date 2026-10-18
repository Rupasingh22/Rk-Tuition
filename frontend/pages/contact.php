<?php
/**
 * RKTuition - Modern & Premium Contact & Academic Enquiry Page
 *
 * File: frontend/pages/contact.php
 * Provides clear contact information, class-linked enquiry form with client-side validation,
 * verified communication channels, accessible FAQs, and links to tuition & admission.
 */

require_once __DIR__ . '/../config/contact.php';

$contactConfig = getContactConfig();
$currentPage   = 'contact';
$basePath      = '../';

// Navigation URLs relative to frontend/pages/
$navUrls = [
    'home'      => '../index.php',
    'services'  => '../services.php',
    'class'     => '../classes/sixthToeight.php',
    'notes'     => '../notes/index.php',
    'tuition'   => './tuition.php',
    'contact'   => './contact.php',
    'admission' => './admission.php',
    'login'     => './login.php',
];
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Get in touch with RKTuition. Enquire about Home Tuition, Online Classes, class batches, study notes, and admission guidance for Classes 6 to 12.">
    <title>Contact Us &amp; Academic Enquiries | RKTuition</title>

    <!-- Compiled Tailwind CSS v3 -->
    <link rel="stylesheet" href="../css/output.css">

    <!-- Google Fonts for Modern Typography -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
        }
    </style>
</head>
<body class="bg-brand-navy text-slate-100 min-h-screen flex flex-col antialiased selection:bg-brand-gold selection:text-slate-950">

    <!-- SHARED REUSABLE COMPONENT: HEADER -->
    <?php require_once __DIR__ . '/../components/header.php'; ?>

    <main class="flex-grow">

        <!-- ===================================================================
             SECTION 1: CONTACT HERO
             =================================================================== -->
        <section class="relative pt-12 pb-16 lg:pt-20 lg:pb-24 overflow-hidden bg-gradient-to-b from-brand-navy via-slate-900 to-brand-navy border-b border-slate-800/80">
            <!-- Subtle Gold Glow Backdrop -->
            <div class="absolute top-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[300px] bg-brand-gold/10 blur-[130px] rounded-full pointer-events-none" aria-hidden="true"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
                    
                    <!-- Left Hero Content -->
                    <div class="lg:col-span-7 text-center lg:text-left">
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-brand-gold/10 border border-brand-gold/30 text-brand-gold text-xs font-bold uppercase tracking-wider mb-6">
                            <span class="w-2 h-2 rounded-full bg-brand-gold animate-pulse"></span>
                            <span><?php echo htmlspecialchars($contactConfig['hero']['eyebrow']); ?></span>
                        </div>

                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight leading-[1.2]">
                            <?php echo htmlspecialchars($contactConfig['hero']['headline']); ?>
                        </h1>

                        <p class="mt-6 text-base sm:text-lg text-slate-300 max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                            <?php echo htmlspecialchars($contactConfig['hero']['subtext']); ?>
                        </p>

                        <!-- Primary CTA Button -->
                        <div class="mt-8 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                            <a href="#contact-form-section" 
                               class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-8 py-4 text-base font-bold text-slate-950 bg-gradient-to-r from-amber-400 via-brand-gold to-amber-500 hover:from-amber-300 hover:to-amber-400 rounded-xl shadow-lg shadow-amber-500/20 hover:shadow-xl hover:shadow-amber-500/30 transition-all duration-200 transform hover:-translate-y-0.5 active:translate-y-0 focus:outline-none focus:ring-2 focus:ring-brand-gold focus:ring-offset-2 focus:ring-offset-brand-navy">
                                <span>Send an Enquiry</span>
                                <svg class="w-5 h-5 text-slate-950" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3"/></svg>
                            </a>
                            
                            <a href="./tuition.php" 
                               class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-7 py-4 text-base font-semibold text-slate-300 hover:text-white bg-slate-800/80 hover:bg-slate-800 border border-slate-700 hover:border-slate-500 rounded-xl transition-all duration-200">
                                <span>Explore Tuition Plans</span>
                            </a>
                        </div>
                    </div>

                    <!-- Right Hero Visual -->
                    <div class="lg:col-span-5">
                        <div class="relative mx-auto max-w-md lg:max-w-none">
                            <div class="relative rounded-3xl bg-gradient-to-br from-slate-900 via-brand-navy to-slate-950 p-6 sm:p-8 border border-slate-700/80 shadow-2xl shadow-black/60">
                                <div class="flex items-center justify-between pb-6 border-b border-slate-800">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-xl bg-brand-gold/15 border border-brand-gold/30 flex items-center justify-center text-brand-gold font-black text-sm">
                                            RK
                                        </div>
                                        <div>
                                            <h3 class="text-white font-bold text-sm sm:text-base">Student Advisory Desk</h3>
                                            <p class="text-xs text-slate-400">Classes 6 to 12 Academic Mentorship</p>
                                        </div>
                                    </div>
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-emerald-500/15 text-emerald-400 border border-emerald-500/30">
                                        Active
                                    </span>
                                </div>

                                <div class="py-6 space-y-4">
                                    <div class="flex items-start gap-3.5 p-3.5 rounded-2xl bg-slate-800/50 border border-slate-700/50">
                                        <div class="w-9 h-9 rounded-xl bg-amber-400/10 text-brand-gold flex items-center justify-center flex-shrink-0 mt-0.5">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25"/></svg>
                                        </div>
                                        <div>
                                            <h4 class="text-sm font-semibold text-white">Tuition &amp; Batch Consultation</h4>
                                            <p class="text-xs text-slate-300 mt-0.5 leading-relaxed">Discuss home tuition requirements or online interactive batch availability.</p>
                                        </div>
                                    </div>

                                    <div class="flex items-start gap-3.5 p-3.5 rounded-2xl bg-slate-800/50 border border-slate-700/50">
                                        <div class="w-9 h-9 rounded-xl bg-emerald-500/10 text-emerald-400 flex items-center justify-center flex-shrink-0 mt-0.5">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg>
                                        </div>
                                        <div>
                                            <h4 class="text-sm font-semibold text-white">Transparent Academic Guidance</h4>
                                            <p class="text-xs text-slate-300 mt-0.5 leading-relaxed">Clear pricing details, subject plans, and personalized study roadmaps.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="pt-4 border-t border-slate-800 flex items-center justify-between text-xs text-slate-400">
                                    <span class="flex items-center gap-1.5">
                                        <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" clip-rule="evenodd"/></svg>
                                        <?php echo htmlspecialchars($contactConfig['contact_info']['response_time']); ?>
                                    </span>
                                    <span class="text-brand-gold font-medium">Quick Support</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ===================================================================
             SECTION 2: CONTACT INFORMATION CARDS
             =================================================================== -->
        <section class="py-16 lg:py-20 bg-slate-900 border-b border-slate-800" id="contact-info">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="text-brand-gold font-bold text-xs uppercase tracking-wider">Direct Communication</span>
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-white mt-2">
                        Get in Touch with Our Faculty
                    </h2>
                    <p class="text-sm sm:text-base text-slate-300 mt-3">
                        Choose your preferred channel below. All enquiries are addressed with transparent academic advice and confidentiality.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    
                    <!-- Card 1: Phone -->
                    <div class="relative p-6 rounded-2xl bg-brand-navy border border-slate-800 hover:border-brand-gold/40 transition-all duration-300 flex flex-col justify-between group shadow-lg shadow-black/20">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-amber-400/10 text-brand-gold border border-brand-gold/20 flex items-center justify-center mb-5 group-hover:scale-105 transition-transform">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"/></svg>
                            </div>
                            <h3 class="text-base font-bold text-white">Telephone Support</h3>
                            <p class="text-xs text-slate-400 mt-1">Available for quick queries and tuition advice.</p>
                            
                            <p class="mt-4 text-base font-extrabold text-brand-gold tracking-wide">
                                <?php echo htmlspecialchars($contactConfig['contact_info']['phone']); ?>
                            </p>
                        </div>
                        <div class="mt-6 pt-4 border-t border-slate-800/80">
                            <a href="tel:<?php echo htmlspecialchars($contactConfig['contact_info']['phone_raw']); ?>" 
                               class="inline-flex items-center gap-1.5 text-xs font-semibold text-slate-300 hover:text-white transition-colors">
                                <span>Call Direct</span>
                                <svg class="w-3.5 h-3.5 text-brand-gold" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Card 2: Email -->
                    <div class="relative p-6 rounded-2xl bg-brand-navy border border-slate-800 hover:border-brand-gold/40 transition-all duration-300 flex flex-col justify-between group shadow-lg shadow-black/20">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-blue-500/10 text-blue-400 border border-blue-500/20 flex items-center justify-center mb-5 group-hover:scale-105 transition-transform">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/></svg>
                            </div>
                            <h3 class="text-base font-bold text-white">Email Inquiries</h3>
                            <p class="text-xs text-slate-400 mt-1">Detailed documentation &amp; fee requests.</p>
                            
                            <p class="mt-4 text-sm font-bold text-slate-200 break-all">
                                <?php echo htmlspecialchars($contactConfig['contact_info']['email']); ?>
                            </p>
                        </div>
                        <div class="mt-6 pt-4 border-t border-slate-800/80">
                            <a href="mailto:<?php echo htmlspecialchars($contactConfig['contact_info']['email']); ?>" 
                               class="inline-flex items-center gap-1.5 text-xs font-semibold text-slate-300 hover:text-white transition-colors">
                                <span>Write Email</span>
                                <svg class="w-3.5 h-3.5 text-brand-gold" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Card 3: Operating Hours -->
                    <div class="relative p-6 rounded-2xl bg-brand-navy border border-slate-800 hover:border-brand-gold/40 transition-all duration-300 flex flex-col justify-between group shadow-lg shadow-black/20">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-purple-500/10 text-purple-400 border border-purple-500/20 flex items-center justify-center mb-5 group-hover:scale-105 transition-transform">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg>
                            </div>
                            <h3 class="text-base font-bold text-white">Consultation Hours</h3>
                            <p class="text-xs text-slate-400 mt-1">Office timings for student guidance.</p>
                            
                            <p class="mt-4 text-xs font-semibold text-slate-300 leading-relaxed">
                                <?php echo htmlspecialchars($contactConfig['contact_info']['hours']); ?>
                            </p>
                        </div>
                        <div class="mt-6 pt-4 border-t border-slate-800/80">
                            <span class="inline-flex items-center gap-1.5 text-xs text-emerald-400 font-medium">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                                <span>Monday to Saturday</span>
                            </span>
                        </div>
                    </div>

                    <!-- Card 4: Location / Center -->
                    <div class="relative p-6 rounded-2xl bg-brand-navy border border-slate-800 hover:border-brand-gold/40 transition-all duration-300 flex flex-col justify-between group shadow-lg shadow-black/20">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 flex items-center justify-center mb-5 group-hover:scale-105 transition-transform">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/></svg>
                            </div>
                            <h3 class="text-base font-bold text-white">Academic Center</h3>
                            <p class="text-xs text-slate-400 mt-1">In-person visits by appointment.</p>
                            
                            <p class="mt-4 text-xs text-slate-300 leading-relaxed">
                                <?php echo htmlspecialchars($contactConfig['contact_info']['location']); ?>
                            </p>
                        </div>
                        <div class="mt-6 pt-4 border-t border-slate-800/80">
                            <a href="#how-to-reach" class="inline-flex items-center gap-1.5 text-xs font-semibold text-slate-300 hover:text-white transition-colors">
                                <span>Visit Details</span>
                                <svg class="w-3.5 h-3.5 text-brand-gold" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/></svg>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- ===================================================================
             SECTION 3: CONTACT AND ENQUIRY FORM
             =================================================================== -->
        <section class="py-16 lg:py-24 bg-brand-navy relative" id="contact-form-section">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-2xl mx-auto mb-12">
                    <span class="text-brand-gold font-bold text-xs uppercase tracking-wider">Online Academic Enquiry</span>
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-white mt-2">
                        Send Your Learning Query
                    </h2>
                    <p class="text-sm sm:text-base text-slate-300 mt-3">
                        Fill in your student's details below. If you arrived from the Tuition page, your selected class and subject options are pre-populated.
                    </p>
                </div>

                <!-- FORM CONTAINER -->
                <div class="rounded-3xl bg-slate-900 border border-slate-700/80 shadow-2xl p-6 sm:p-10 relative">
                    
                    <form id="rk-contact-form" novalidate class="space-y-6">
                        
                        <!-- Grid Row 1: Name & Email -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            
                            <!-- Full Name -->
                            <div>
                                <label for="contact-name" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">
                                    Full Name <span class="text-amber-400">*</span>
                                </label>
                                <input type="text" 
                                       id="contact-name" 
                                       name="name" 
                                       placeholder="e.g. Rahul Sharma" 
                                       required
                                       class="w-full px-4 py-3 rounded-xl bg-slate-950/80 border border-slate-700 text-white placeholder-slate-500 text-sm focus:outline-none focus:border-brand-gold focus:ring-1 focus:ring-brand-gold transition-colors">
                                <p id="contact-name-error" class="hidden text-xs text-red-400 mt-1 font-medium"></p>
                            </div>

                            <!-- Email Address -->
                            <div>
                                <label for="contact-email" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">
                                    Email Address <span class="text-amber-400">*</span>
                                </label>
                                <input type="email" 
                                       id="contact-email" 
                                       name="email" 
                                       placeholder="e.g. parent@example.com" 
                                       required
                                       class="w-full px-4 py-3 rounded-xl bg-slate-950/80 border border-slate-700 text-white placeholder-slate-500 text-sm focus:outline-none focus:border-brand-gold focus:ring-1 focus:ring-brand-gold transition-colors">
                                <p id="contact-email-error" class="hidden text-xs text-red-400 mt-1 font-medium"></p>
                            </div>

                        </div>

                        <!-- Grid Row 2: Phone Number & Enquiry Type -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            
                            <!-- Phone Number -->
                            <div>
                                <label for="contact-phone" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">
                                    Phone Number <span class="text-amber-400">*</span>
                                </label>
                                <input type="tel" 
                                       id="contact-phone" 
                                       name="phone" 
                                       placeholder="e.g. 9153832633" 
                                       required
                                       class="w-full px-4 py-3 rounded-xl bg-slate-950/80 border border-slate-700 text-white placeholder-slate-500 text-sm focus:outline-none focus:border-brand-gold focus:ring-1 focus:ring-brand-gold transition-colors">
                                <p id="contact-phone-error" class="hidden text-xs text-red-400 mt-1 font-medium"></p>
                            </div>

                            <!-- Enquiry Type -->
                            <div>
                                <label for="contact-type" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">
                                    Enquiry Type <span class="text-amber-400">*</span>
                                </label>
                                <select id="contact-type" 
                                        name="type" 
                                        required
                                        class="w-full px-4 py-3 rounded-xl bg-slate-950/80 border border-slate-700 text-white text-sm focus:outline-none focus:border-brand-gold focus:ring-1 focus:ring-brand-gold transition-colors">
                                    <option value="">-- Select Enquiry Type --</option>
                                    <?php foreach ($contactConfig['enquiry_types'] as $typeVal => $typeLabel): ?>
                                        <option value="<?php echo htmlspecialchars($typeVal); ?>">
                                            <?php echo htmlspecialchars($typeLabel); ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <p id="contact-type-error" class="hidden text-xs text-red-400 mt-1 font-medium"></p>
                            </div>

                        </div>

                        <!-- Grid Row 3: Class, Subject & Preferred Mode -->
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                            
                            <!-- Class Selection -->
                            <div>
                                <label for="contact-class" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">
                                    Student Class <span class="text-amber-400">*</span>
                                </label>
                                <select id="contact-class" 
                                        name="class" 
                                        required
                                        class="w-full px-4 py-3 rounded-xl bg-slate-950/80 border border-slate-700 text-white text-sm focus:outline-none focus:border-brand-gold focus:ring-1 focus:ring-brand-gold transition-colors">
                                    <option value="">-- Select Class --</option>
                                    <option value="6">Class 6</option>
                                    <option value="7">Class 7</option>
                                    <option value="8">Class 8</option>
                                    <option value="9">Class 9</option>
                                    <option value="10">Class 10</option>
                                    <option value="11">Class 11</option>
                                    <option value="12">Class 12</option>
                                </select>
                                <p id="contact-class-error" class="hidden text-xs text-red-400 mt-1 font-medium"></p>
                            </div>

                            <!-- Subject (Dynamically populated based on class) -->
                            <div>
                                <label for="contact-subject" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">
                                    Subject <span class="text-slate-500 font-normal">(Optional)</span>
                                </label>
                                <select id="contact-subject" 
                                        name="subject" 
                                        class="w-full px-4 py-3 rounded-xl bg-slate-950/80 border border-slate-700 text-white text-sm focus:outline-none focus:border-brand-gold focus:ring-1 focus:ring-brand-gold transition-colors">
                                    <option value="">-- Select Subject (Optional) --</option>
                                </select>
                            </div>

                            <!-- Preferred Mode -->
                            <div>
                                <label for="contact-mode" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">
                                    Tuition Mode <span class="text-slate-500 font-normal">(Optional)</span>
                                </label>
                                <select id="contact-mode" 
                                        name="mode" 
                                        class="w-full px-4 py-3 rounded-xl bg-slate-950/80 border border-slate-700 text-white text-sm focus:outline-none focus:border-brand-gold focus:ring-1 focus:ring-brand-gold transition-colors">
                                    <?php foreach ($contactConfig['tuition_modes'] as $modeKey => $modeTitle): ?>
                                        <option value="<?php echo htmlspecialchars($modeKey); ?>">
                                            <?php echo htmlspecialchars($modeTitle); ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                        </div>

                        <!-- Message Field -->
                        <div>
                            <label for="contact-message" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">
                                Message / Academic Requirement <span class="text-slate-500 font-normal">(Optional)</span>
                            </label>
                            <textarea id="contact-message" 
                                      name="message" 
                                      rows="4" 
                                      placeholder="Share specific learning goals, weak topic areas, or preferred days/timings..."
                                      class="w-full px-4 py-3 rounded-xl bg-slate-950/80 border border-slate-700 text-white placeholder-slate-500 text-sm focus:outline-none focus:border-brand-gold focus:ring-1 focus:ring-brand-gold transition-colors"></textarea>
                        </div>

                        <!-- Consent Checkbox -->
                        <div class="pt-2">
                            <label class="flex items-start gap-3 cursor-pointer select-none">
                                <input type="checkbox" 
                                       id="contact-consent" 
                                       name="consent" 
                                       required
                                       class="mt-1 w-4 h-4 rounded text-brand-gold bg-slate-950 border-slate-700 focus:ring-brand-gold focus:ring-offset-slate-900">
                                <span class="text-xs text-slate-300 leading-relaxed">
                                    I agree to be contacted by RKTuition faculty via telephone or email regarding this academic enquiry. My information will not be shared with third parties. <span class="text-amber-400">*</span>
                                </span>
                            </label>
                            <p id="contact-consent-error" class="hidden text-xs text-red-400 mt-1 font-medium"></p>
                        </div>

                        <!-- Submit Button -->
                        <div class="pt-4 flex flex-col sm:flex-row items-center justify-between gap-4">
                            <button type="submit" 
                                    id="contact-submit-btn"
                                    class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-8 py-4 text-base font-bold text-slate-950 bg-gradient-to-r from-amber-400 via-brand-gold to-amber-500 hover:from-amber-300 hover:to-amber-400 rounded-xl shadow-lg shadow-amber-500/25 transition-all duration-200 transform hover:-translate-y-0.5 active:translate-y-0 focus:outline-none focus:ring-2 focus:ring-brand-gold focus:ring-offset-2 focus:ring-offset-slate-900">
                                <span>Submit Academic Enquiry</span>
                                <svg class="w-5 h-5 text-slate-950" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5"/></svg>
                            </button>

                            <p class="text-xs text-slate-400 text-center sm:text-right">
                                Client-side validated &bull; No spam guaranteed
                            </p>
                        </div>

                    </form>

                </div>

            </div>
        </section>

        <!-- ===================================================================
             SECTION 4: HOW TO REACH US & VISIT GUIDANCE
             =================================================================== -->
        <section class="py-16 lg:py-20 bg-slate-900 border-t border-b border-slate-800" id="how-to-reach">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                    
                    <div class="lg:col-span-6">
                        <span class="text-brand-gold font-bold text-xs uppercase tracking-wider">Access &amp; Consultation</span>
                        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-white mt-2">
                            How to Reach RKTuition
                        </h2>
                        <p class="text-sm sm:text-base text-slate-300 mt-4 leading-relaxed">
                            We welcome parents and students for structured academic discussions, faculty interaction, and personalized curriculum planning. To ensure undivided attention from our lead mentor, in-person center visits are scheduled by prior appointment.
                        </p>

                        <div class="mt-8 space-y-4">
                            <div class="flex items-start gap-4 p-4 rounded-2xl bg-brand-navy border border-slate-800">
                                <div class="w-8 h-8 rounded-lg bg-amber-400/10 text-brand-gold flex items-center justify-center flex-shrink-0 font-bold text-sm">
                                    1
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-white">Online or Phone Pre-Screening</h4>
                                    <p class="text-xs text-slate-300 mt-1 leading-relaxed">Submit your enquiry form or give us a call with your student's current class and academic goals.</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4 p-4 rounded-2xl bg-brand-navy border border-slate-800">
                                <div class="w-8 h-8 rounded-lg bg-amber-400/10 text-brand-gold flex items-center justify-center flex-shrink-0 font-bold text-sm">
                                    2
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-white">Faculty Slot Confirmation</h4>
                                    <p class="text-xs text-slate-300 mt-1 leading-relaxed">Our coordinator confirms an available time slot matching your schedule (in-center or virtual meeting).</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4 p-4 rounded-2xl bg-brand-navy border border-slate-800">
                                <div class="w-8 h-8 rounded-lg bg-amber-400/10 text-brand-gold flex items-center justify-center flex-shrink-0 font-bold text-sm">
                                    3
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-white">Study Plan &amp; Admission Finalization</h4>
                                    <p class="text-xs text-slate-300 mt-1 leading-relaxed">Review the syllabus pacing, tuition mode details, and complete enrollment formalities.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-6">
                        <div class="p-8 rounded-3xl bg-brand-navy border border-slate-800 shadow-xl relative overflow-hidden">
                            <div class="absolute -top-12 -right-12 w-48 h-48 bg-brand-gold/10 blur-3xl rounded-full pointer-events-none"></div>

                            <h3 class="text-xl font-bold text-white mb-4">Verified Office Location</h3>
                            <p class="text-xs text-slate-300 mb-6 leading-relaxed">
                                Our center is located in an accessible hub with dedicated study zones and faculty advisory rooms.
                            </p>

                            <div class="p-5 rounded-2xl bg-slate-950/80 border border-slate-800 space-y-3 text-xs">
                                <div class="flex items-center gap-3">
                                    <span class="w-2 h-2 rounded-full bg-brand-gold"></span>
                                    <span class="text-slate-400">Address:</span>
                                    <span class="text-white font-semibold"><?php echo htmlspecialchars($contactConfig['contact_info']['location']); ?></span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                                    <span class="text-slate-400">Hours:</span>
                                    <span class="text-white font-semibold"><?php echo htmlspecialchars($contactConfig['contact_info']['hours']); ?></span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <span class="w-2 h-2 rounded-full bg-blue-400"></span>
                                    <span class="text-slate-400">Appointment:</span>
                                    <span class="text-white font-semibold">Recommended via Phone / Email</span>
                                </div>
                            </div>

                            <div class="mt-6 flex flex-col sm:flex-row gap-3">
                                <a href="tel:<?php echo htmlspecialchars($contactConfig['contact_info']['phone_raw']); ?>" 
                                   class="flex-1 py-3 px-4 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-200 font-semibold text-xs text-center border border-slate-700 transition-colors">
                                    Call to Book Appointment
                                </a>
                                <a href="./admission.php" 
                                   class="flex-1 py-3 px-4 rounded-xl bg-brand-gold/15 hover:bg-brand-gold/25 text-brand-gold font-bold text-xs text-center border border-brand-gold/30 transition-colors">
                                    Direct Admission Form
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- ===================================================================
             SECTION 5: CONTACT FREQUENTLY ASKED QUESTIONS
             =================================================================== -->
        <section class="py-16 lg:py-24 bg-brand-navy" id="faqs">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-2xl mx-auto mb-12">
                    <span class="text-brand-gold font-bold text-xs uppercase tracking-wider">Quick Answers</span>
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-white mt-2">
                        Frequently Asked Questions
                    </h2>
                    <p class="text-sm sm:text-base text-slate-300 mt-3">
                        Common queries from students and parents regarding tuition enquiries, classes, notes, and admissions.
                    </p>
                </div>

                <div class="space-y-4" id="contact-faq-accordion">
                    <?php foreach ($contactConfig['faqs'] as $idx => $faq): ?>
                        <div class="border border-slate-800 rounded-2xl bg-slate-900/60 overflow-hidden transition-colors">
                            <button type="button" 
                                    class="contact-faq-trigger w-full flex items-center justify-between p-5 text-left text-sm sm:text-base font-bold text-white hover:text-brand-gold transition-colors focus:outline-none"
                                    aria-expanded="false" 
                                    aria-controls="contact-faq-ans-<?php echo $idx; ?>"
                                    id="contact-faq-btn-<?php echo $idx; ?>">
                                <span><?php echo htmlspecialchars($faq['q']); ?></span>
                                <svg class="w-5 h-5 text-brand-gold transition-transform duration-200 flex-shrink-0 ml-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/></svg>
                            </button>
                            <div id="contact-faq-ans-<?php echo $idx; ?>" 
                                 class="contact-faq-content hidden px-5 pb-5 pt-1 text-xs sm:text-sm text-slate-300 leading-relaxed border-t border-slate-800/60"
                                 role="region" 
                                 aria-labelledby="contact-faq-btn-<?php echo $idx; ?>">
                                <p><?php echo htmlspecialchars($faq['a']); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>

        <!-- ===================================================================
             SECTION 6: FINAL CONTACT CALL TO ACTION
             =================================================================== -->
        <section class="py-16 lg:py-24 bg-gradient-to-b from-slate-900 via-brand-navy to-slate-950 relative overflow-hidden border-t border-slate-800">
            <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-amber-500/10 via-transparent to-transparent pointer-events-none"></div>

            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-brand-gold/15 border border-brand-gold/30 text-brand-gold text-xs font-bold uppercase tracking-wider mb-6">
                    Connect With Us
                </span>

                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
                    Start Your Student's Academic Journey Today.
                </h2>

                <p class="mt-4 text-base sm:text-lg text-slate-300 max-w-2xl mx-auto leading-relaxed">
                    Have specific questions about tuition modes, syllabus pacing, or admissions? Our team is here to assist you with honest, verified guidance.
                </p>

                <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
                    <!-- Tuition Link -->
                    <a href="./tuition.php" 
                       class="inline-flex items-center justify-center gap-2 px-7 py-3.5 text-sm sm:text-base font-bold text-slate-950 bg-gradient-to-r from-amber-400 via-brand-gold to-amber-500 hover:from-amber-300 hover:to-amber-400 rounded-xl shadow-lg shadow-amber-500/25 transition-all">
                        <span>View Tuition Plans</span>
                        <svg class="w-4 h-4 text-slate-950" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                    </a>

                    <!-- Classes Link -->
                    <a href="../classes/sixthToeight.php" 
                       class="inline-flex items-center justify-center gap-2 px-6 py-3.5 text-sm sm:text-base font-semibold text-slate-200 hover:text-white bg-slate-800 hover:bg-slate-700 border border-slate-700 rounded-xl transition-colors">
                        <span>Academic Classes</span>
                    </a>

                    <!-- Get Admission Link -->
                    <a href="./admission.php" 
                       class="inline-flex items-center justify-center gap-2 px-6 py-3.5 text-sm sm:text-base font-semibold text-brand-gold hover:text-amber-300 bg-brand-gold/10 hover:bg-brand-gold/20 border border-brand-gold/30 rounded-xl transition-colors">
                        <span>Get Admission</span>
                    </a>
                </div>
            </div>
        </section>

    </main>

    <!-- SHARED REUSABLE COMPONENT: FOOTER -->
    <?php require_once __DIR__ . '/../components/footer.php'; ?>

    <!-- INTERACTIVE CONTACT & CLIENT VALIDATION JS -->
    <script src="../js/contact.js"></script>

    <!-- ACCESSIBLE FAQ ACCORDION SCRIPT -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const triggers = document.querySelectorAll('.contact-faq-trigger');
            triggers.forEach(function (trigger) {
                trigger.addEventListener('click', function () {
                    const isExpanded = this.getAttribute('aria-expanded') === 'true';
                    const targetId = this.getAttribute('aria-controls');
                    const content = document.getElementById(targetId);
                    const icon = this.querySelector('svg');

                    // Close all others
                    triggers.forEach(function (other) {
                        if (other !== trigger) {
                            other.setAttribute('aria-expanded', 'false');
                            const otherContent = document.getElementById(other.getAttribute('aria-controls'));
                            if (otherContent) otherContent.classList.add('hidden');
                            const otherIcon = other.querySelector('svg');
                            if (otherIcon) otherIcon.classList.remove('rotate-180');
                        }
                    });

                    // Toggle current
                    if (isExpanded) {
                        this.setAttribute('aria-expanded', 'false');
                        if (content) content.classList.add('hidden');
                        if (icon) icon.classList.remove('rotate-180');
                    } else {
                        this.setAttribute('aria-expanded', 'true');
                        if (content) content.classList.remove('hidden');
                        if (icon) icon.classList.add('rotate-180');
                    }
                });
            });
        });
    </script>
</body>
</html>
