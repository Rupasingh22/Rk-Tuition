<?php
/**
 * RKTuition - Dedicated Get Admission Page
 *
 * File: frontend/pages/admission.php
 * Premium, trustworthy enrollment and admission inquiry page for RKTuition.
 * Follows the RKTuition navy and gold design system with accessible client-side validation.
 */

require_once __DIR__ . '/../config/admission.php';

$admissionConfig = getAdmissionConfig();
$currentPage = 'admission';
$basePath = '../';

// Navigation URLs relative to frontend/pages/
$navUrls = [
    'home'      => '../index.php',
    'services'  => '../services.php',
    'class'     => '../classes/sixthToeight.php',
    'notes'     => '../notes/index.php',
    'contact'   => '#contact-guidance',
    'login'     => './login.php',
    'admission' => './admission.php',
];

// Extract class-to-subjects mapping for vanilla JS dynamic form updating
$classSubjectsMap = [];
foreach ($admissionConfig['classes'] as $key => $cls) {
    $classSubjectsMap[$key] = $cls['subjects'];
}
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Apply for academic coaching and mentorship at RKTuition. Comprehensive classes for Grades 6 through 12 in Mathematics, Sciences, and Computer Studies.">
    <title>Get Admission & Academic Enquiry | RKTuition</title>

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

    <!-- JSON DATA EMBED FOR VANILLA JS DYNAMIC FORM -->
    <script id="rk-class-subjects-data" type="application/json">
        <?php echo json_encode($classSubjectsMap, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT); ?>
    </script>

    <main class="flex-grow">

        <!-- ===================================================================
             COMPONENT A: ADMISSION HERO
             =================================================================== -->
        <section class="relative pt-12 pb-20 lg:pt-20 lg:pb-28 overflow-hidden bg-gradient-to-b from-brand-navy via-slate-900 to-brand-navy border-b border-slate-800/80">
            <!-- Subtle Gold Glow Backdrop -->
            <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[650px] h-[350px] bg-brand-gold/10 blur-[130px] rounded-full pointer-events-none" aria-hidden="true"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
                    
                    <!-- Left Hero Content -->
                    <div class="lg:col-span-7 text-center lg:text-left">
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-brand-gold/10 border border-brand-gold/30 text-brand-gold text-xs font-bold uppercase tracking-wider mb-6">
                            <span class="w-2 h-2 rounded-full bg-brand-gold animate-pulse"></span>
                            <span><?php echo htmlspecialchars($admissionConfig['hero']['eyebrow']); ?></span>
                        </div>

                        <h1 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-extrabold text-white tracking-tight leading-[1.15]">
                            <?php echo htmlspecialchars($admissionConfig['hero']['headline']); ?>
                        </h1>

                        <p class="mt-6 text-base sm:text-lg text-slate-300 max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                            <?php echo htmlspecialchars($admissionConfig['hero']['subtext']); ?>
                        </p>

                        <!-- Hero Action Buttons -->
                        <div class="mt-8 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                            <a href="#enquiry-form" 
                               class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-8 py-4 text-base font-bold text-slate-950 bg-gradient-to-r from-amber-400 via-brand-gold to-amber-500 hover:from-amber-300 hover:to-amber-400 rounded-xl shadow-lg shadow-amber-500/20 hover:shadow-xl hover:shadow-amber-500/30 transition-all duration-200 transform hover:-translate-y-0.5 active:translate-y-0 focus:outline-none focus:ring-2 focus:ring-brand-gold focus:ring-offset-2 focus:ring-offset-brand-navy">
                                <span>Start Admission Enquiry</span>
                                <svg class="w-5 h-5 text-slate-950" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3"/></svg>
                            </a>

                            <a href="#admission-process" 
                               class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-7 py-4 text-base font-semibold text-slate-200 hover:text-white bg-slate-800/80 hover:bg-slate-800 border border-slate-700 hover:border-slate-500 rounded-xl transition-all duration-200 shadow-sm">
                                <span>How Admission Works</span>
                            </a>
                        </div>

                        <!-- Highlights strip -->
                        <div class="mt-10 pt-8 border-t border-slate-800/80 grid grid-cols-3 gap-4 text-center lg:text-left">
                            <div>
                                <span class="block text-2xl font-extrabold text-brand-gold">6 – 12</span>
                                <span class="text-xs text-slate-400">All Individual Classes</span>
                            </div>
                            <div>
                                <span class="block text-2xl font-extrabold text-brand-gold">1:15</span>
                                <span class="text-xs text-slate-400">Max Focused Batch Ratio</span>
                            </div>
                            <div>
                                <span class="block text-2xl font-extrabold text-brand-gold">100%</span>
                                <span class="text-xs text-slate-400">Concept-First Focus</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right Visual Card -->
                    <div class="lg:col-span-5 relative">
                        <div class="relative mx-auto max-w-md lg:max-w-none">
                            <div class="absolute -inset-1 rounded-3xl bg-gradient-to-tr from-brand-gold/30 to-amber-500/10 blur-xl opacity-75"></div>
                            
                            <div class="relative rounded-2xl bg-slate-900 border border-slate-800 p-6 shadow-2xl overflow-hidden">
                                <img src="../images/services_hero.jpg" 
                                     alt="RKTuition Academic Mentorship Session" 
                                     class="w-full h-64 object-cover rounded-xl border border-slate-800/80 shadow-inner"
                                     onerror="this.src='https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=800&q=80'">

                                <div class="mt-5 space-y-3">
                                    <div class="flex items-center justify-between text-xs text-slate-400">
                                        <span class="flex items-center gap-1.5 text-emerald-400 font-semibold">
                                            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                                            Admissions Active
                                        </span>
                                        <span>Academic Year 2026–27</span>
                                    </div>

                                    <h2 class="text-lg font-bold text-white">Direct Guidance with Master Faculty</h2>
                                    <p class="text-xs text-slate-300 leading-relaxed">
                                        Every inquiry is evaluated to recommend the most suitable batch timing, curriculum pace, and individual mentoring strategy.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- ===================================================================
             COMPONENT B: 4-STEP ADMISSION PROCESS
             =================================================================== -->
        <section id="admission-process" class="py-20 lg:py-24 bg-brand-navy border-b border-slate-800/80 scroll-mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-800 text-brand-gold text-xs font-bold uppercase tracking-wider mb-4 border border-slate-700">
                        Transparent Enrolment Flow
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Our 4-Step Admission Process
                    </h2>
                    <p class="mt-4 text-base text-slate-400 leading-relaxed">
                        We believe in complete academic transparency. We do not offer automated checkout or guaranteed enrolment—we consult with you to ensure our coaching is the right fit for your student's learning needs.
                    </p>
                </div>

                <!-- Process Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <?php foreach ($admissionConfig['process_steps'] as $step): ?>
                        <div class="relative rounded-2xl bg-slate-900/90 border border-slate-800 p-6 flex flex-col justify-between hover:border-brand-gold/40 transition-all duration-300 group hover:-translate-y-1 shadow-lg shadow-black/20">
                            <div>
                                <div class="flex items-center justify-between mb-5">
                                    <span class="text-3xl font-black text-brand-gold/30 group-hover:text-brand-gold transition-colors font-mono">
                                        <?php echo htmlspecialchars($step['step']); ?>
                                    </span>
                                    <div class="w-10 h-10 rounded-xl bg-slate-800 border border-slate-700/80 flex items-center justify-center text-brand-gold group-hover:bg-brand-gold group-hover:text-slate-950 transition-all">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                        </svg>
                                    </div>
                                </div>

                                <h3 class="text-lg font-bold text-white mb-2">
                                    <?php echo htmlspecialchars($step['title']); ?>
                                </h3>

                                <p class="text-xs text-slate-400 leading-relaxed">
                                    <?php echo htmlspecialchars($step['description']); ?>
                                </p>
                            </div>

                            <div class="mt-6 pt-4 border-t border-slate-800/80 flex items-center text-[11px] text-slate-500 font-medium">
                                <span>Stage <?php echo htmlspecialchars($step['step']); ?> of 04</span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>


        <!-- ===================================================================
             COMPONENT C: ADMISSION ENQUIRY FORM
             =================================================================== -->
        <section id="enquiry-form" class="py-20 lg:py-28 relative overflow-hidden bg-slate-950 border-b border-slate-800/80 scroll-mt-20">
            <!-- Glow background -->
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[500px] bg-brand-gold/5 blur-[160px] rounded-full pointer-events-none" aria-hidden="true"></div>

            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                
                <div class="text-center mb-12">
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-gold/10 text-brand-gold text-xs font-bold uppercase tracking-wider mb-3 border border-brand-gold/20">
                        Student Admission Form
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Reserve Your Initial Consultation
                    </h2>
                    <p class="mt-3 text-sm text-slate-400 max-w-xl mx-auto">
                        Please fill out the form below. Required fields are marked with an asterisk (<span class="text-brand-gold font-bold">*</span>).
                    </p>
                </div>

                <!-- Form Card -->
                <div class="rounded-3xl bg-slate-900/95 border border-slate-800 shadow-2xl p-6 sm:p-10 lg:p-12">
                    
                    <form id="rk-admission-form" novalidate class="space-y-6">

                        <!-- Row 1: Student Name & Parent Name -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="admit-student-name" class="block text-sm font-semibold text-slate-200 mb-2">
                                    Student Full Name <span class="text-brand-gold">*</span>
                                </label>
                                <input type="text" id="admit-student-name" name="student_name" required
                                       placeholder="e.g. Rahul Sharma"
                                       class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-700/80 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-gold focus:border-brand-gold transition-all text-sm">
                                <p id="admit-student-name-error" class="hidden text-xs text-red-400 mt-1.5 font-medium" role="alert"></p>
                            </div>

                            <div>
                                <label for="admit-parent-name" class="block text-sm font-semibold text-slate-200 mb-2">
                                    Parent or Guardian Name <span class="text-slate-500 font-normal text-xs">(If applicable)</span>
                                </label>
                                <input type="text" id="admit-parent-name" name="parent_name"
                                       placeholder="e.g. Mr. Sanjay Sharma"
                                       class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-700/80 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-gold focus:border-brand-gold transition-all text-sm">
                            </div>
                        </div>

                        <!-- Row 2: Phone & Email -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="admit-phone" class="block text-sm font-semibold text-slate-200 mb-2">
                                    Phone Number (WhatsApp Preferred) <span class="text-brand-gold">*</span>
                                </label>
                                <input type="tel" id="admit-phone" name="phone" required
                                       placeholder="e.g. +919153832633"
                                       class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-700/80 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-gold focus:border-brand-gold transition-all text-sm">
                                <p id="admit-phone-error" class="hidden text-xs text-red-400 mt-1.5 font-medium" role="alert"></p>
                            </div>

                            <div>
                                <label for="admit-email" class="block text-sm font-semibold text-slate-200 mb-2">
                                    Email Address <span class="text-slate-500 font-normal text-xs">(Optional)</span>
                                </label>
                                <input type="email" id="admit-email" name="email"
                                       placeholder="e.g. student@example.com"
                                       class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-700/80 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-gold focus:border-brand-gold transition-all text-sm">
                                <p id="admit-email-error" class="hidden text-xs text-red-400 mt-1.5 font-medium" role="alert"></p>
                            </div>
                        </div>

                        <!-- Row 3: Class Dropdown -->
                        <div>
                            <label for="admit-class" class="block text-sm font-semibold text-slate-200 mb-2">
                                Select Student Class <span class="text-brand-gold">*</span>
                            </label>
                            <div class="relative">
                                <select id="admit-class" name="class_level" required
                                        class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-700/80 text-white focus:outline-none focus:ring-2 focus:ring-brand-gold focus:border-brand-gold transition-all appearance-none text-sm cursor-pointer">
                                    <option value="" disabled selected>-- Select Class (Class 6 to Class 12) --</option>
                                    <?php foreach ($admissionConfig['classes'] as $cNum => $cDetails): ?>
                                        <option value="<?php echo htmlspecialchars($cNum); ?>">
                                            <?php echo htmlspecialchars($cDetails['name']); ?> &bull; <?php echo htmlspecialchars($cDetails['stage']); ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-slate-400">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/></svg>
                                </div>
                            </div>
                            <p id="admit-class-error" class="hidden text-xs text-red-400 mt-1.5 font-medium" role="alert"></p>
                        </div>

                        <!-- Row 4: Preferred Subjects (Dynamic Checkboxes) -->
                        <div id="admit-subjects-group">
                            <label class="block text-sm font-semibold text-slate-200 mb-2">
                                Preferred Subjects <span class="text-brand-gold">*</span>
                                <span class="text-slate-400 font-normal text-xs ml-2">(Select all subjects needed)</span>
                            </label>
                            
                            <!-- Dynamic Container updated by admission.js based on Class -->
                            <div id="admit-subjects-container" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-3">
                                <p class="text-xs text-slate-400 italic py-2 col-span-full">
                                    Please select a class above to load configured subjects.
                                </p>
                            </div>
                            <p id="admit-subjects-group-error" class="hidden text-xs text-red-400 mt-1.5 font-medium" role="alert"></p>
                        </div>

                        <!-- Row 5: Preferred Learning Mode -->
                        <div>
                            <label class="block text-sm font-semibold text-slate-200 mb-2">
                                Preferred Learning Mode <span class="text-slate-500 font-normal text-xs">(Optional)</span>
                            </label>
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                                <?php foreach ($admissionConfig['learning_modes'] as $idx => $mode): ?>
                                    <label class="relative flex flex-col p-4 rounded-xl border border-slate-700/80 bg-slate-950/60 hover:bg-slate-950 hover:border-brand-gold/40 cursor-pointer transition-all">
                                        <div class="flex items-center gap-2 mb-1.5">
                                            <input type="radio" name="learning_mode" value="<?php echo htmlspecialchars($mode['id']); ?>" <?php echo $idx === 0 ? 'checked' : ''; ?>
                                                   class="h-4 w-4 text-brand-gold focus:ring-brand-gold bg-slate-900 border-slate-700 accent-amber-400">
                                            <span class="text-sm font-bold text-white"><?php echo htmlspecialchars($mode['label']); ?></span>
                                        </div>
                                        <span class="text-[11px] text-slate-400 leading-snug pl-6">
                                            <?php echo htmlspecialchars($mode['desc']); ?>
                                        </span>
                                    </label>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <!-- Row 6: Message / Learning Requirements -->
                        <div>
                            <label for="admit-message" class="block text-sm font-semibold text-slate-200 mb-2">
                                Message or Specific Learning Requirements <span class="text-slate-500 font-normal text-xs">(Optional)</span>
                            </label>
                            <textarea id="admit-message" name="message" rows="3"
                                      placeholder="Tell us about specific syllabus topics, upcoming exams, or target grades..."
                                      class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-700/80 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-gold focus:border-brand-gold transition-all text-sm"></textarea>
                        </div>

                        <!-- Row 7: Consent Checkbox -->
                        <div class="pt-2">
                            <label class="flex items-start gap-3 cursor-pointer">
                                <input type="checkbox" id="admit-consent" name="consent" required
                                       class="h-4 w-4 mt-0.5 rounded border-slate-700 bg-slate-950 text-brand-gold focus:ring-brand-gold accent-amber-400">
                                <span class="text-xs text-slate-300 leading-relaxed select-none">
                                    I consent to be contacted by RKTuition regarding this admission enquiry via phone, WhatsApp, or email. We respect your privacy and never share your contact details. <span class="text-brand-gold">*</span>
                                </span>
                            </label>
                            <p id="admit-consent-error" class="hidden text-xs text-red-400 mt-1.5 font-medium pl-7" role="alert"></p>
                        </div>

                        <!-- Submit Button -->
                        <div class="pt-4">
                            <button type="submit" id="admit-submit-btn"
                                    class="w-full py-4 px-8 rounded-xl font-bold text-slate-950 bg-gradient-to-r from-amber-400 via-brand-gold to-amber-500 hover:from-amber-300 hover:to-amber-400 shadow-lg shadow-amber-500/20 hover:shadow-xl hover:shadow-amber-500/30 transition-all duration-200 transform hover:-translate-y-0.5 active:translate-y-0 focus:outline-none focus:ring-2 focus:ring-brand-gold focus:ring-offset-2 focus:ring-offset-brand-navy flex items-center justify-center gap-2 text-base">
                                <span>Submit Admission Enquiry</span>
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5"/></svg>
                            </button>
                        </div>

                        <!-- Configurable Notice -->
                        <div class="pt-4 border-t border-slate-800 text-center">
                            <p class="text-xs text-slate-400">
                                Prefer direct communication? Call us at 
                                <a href="tel:<?php echo htmlspecialchars($admissionConfig['contact']['phone_raw']); ?>" class="text-brand-gold font-bold hover:underline">
                                    <?php echo htmlspecialchars($admissionConfig['contact']['phone']); ?>
                                </a>
                                or email 
                                <a href="mailto:<?php echo htmlspecialchars($admissionConfig['contact']['email']); ?>" class="text-brand-gold font-bold hover:underline">
                                    <?php echo htmlspecialchars($admissionConfig['contact']['email']); ?>
                                </a>.
                            </p>
                        </div>

                    </form>

                </div>

            </div>
        </section>


        <!-- ===================================================================
             COMPONENT D: CONTACT & ENQUIRY GUIDANCE
             =================================================================== -->
        <section id="contact-guidance" class="py-20 lg:py-24 bg-brand-navy border-b border-slate-800/80 scroll-mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-14">
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-800 text-brand-gold text-xs font-bold uppercase tracking-wider mb-3 border border-slate-700">
                        Direct Assistance
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Contact & Enquiry Guidance
                    </h2>
                    <p class="mt-3 text-sm text-slate-400">
                        <?php echo htmlspecialchars($admissionConfig['contact']['guidance_note']); ?>
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    
                    <!-- Phone -->
                    <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800 hover:border-slate-700 transition-colors">
                        <div class="w-12 h-12 rounded-xl bg-amber-500/10 text-brand-gold border border-brand-gold/20 flex items-center justify-center mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"/></svg>
                        </div>
                        <h3 class="text-base font-bold text-white mb-1">Admissions Phone</h3>
                        <p class="text-xs text-slate-400 mb-3">Direct call or WhatsApp voice discussion.</p>
                        <a href="tel:<?php echo htmlspecialchars($admissionConfig['contact']['phone_raw']); ?>" class="text-brand-gold font-bold text-sm hover:underline block truncate">
                            <?php echo htmlspecialchars($admissionConfig['contact']['phone']); ?>
                        </a>
                    </div>

                    <!-- Email -->
                    <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800 hover:border-slate-700 transition-colors">
                        <div class="w-12 h-12 rounded-xl bg-amber-500/10 text-brand-gold border border-brand-gold/20 flex items-center justify-center mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/></svg>
                        </div>
                        <h3 class="text-base font-bold text-white mb-1">Official Email</h3>
                        <p class="text-xs text-slate-400 mb-3">Send documents, syllabus or enquiries.</p>
                        <a href="mailto:<?php echo htmlspecialchars($admissionConfig['contact']['email']); ?>" class="text-brand-gold font-bold text-sm hover:underline block truncate">
                            <?php echo htmlspecialchars($admissionConfig['contact']['email']); ?>
                        </a>
                    </div>

                    <!-- Consultation Hours -->
                    <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800 hover:border-slate-700 transition-colors">
                        <div class="w-12 h-12 rounded-xl bg-amber-500/10 text-brand-gold border border-brand-gold/20 flex items-center justify-center mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg>
                        </div>
                        <h3 class="text-base font-bold text-white mb-1">Consultation Hours</h3>
                        <p class="text-xs text-slate-400 mb-2">Available for scheduled parent visits.</p>
                        <span class="text-xs font-semibold text-slate-200 block">
                            <?php echo htmlspecialchars($admissionConfig['contact']['hours']); ?>
                        </span>
                    </div>

                    <!-- Center Location -->
                    <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800 hover:border-slate-700 transition-colors">
                        <div class="w-12 h-12 rounded-xl bg-amber-500/10 text-brand-gold border border-brand-gold/20 flex items-center justify-center mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/></svg>
                        </div>
                        <h3 class="text-base font-bold text-white mb-1">Coaching Center</h3>
                        <p class="text-xs text-slate-400 mb-2"><?php echo htmlspecialchars($admissionConfig['contact']['response_time']); ?></p>
                        <span class="text-xs text-slate-300 block">
                            <?php echo htmlspecialchars($admissionConfig['contact']['location']); ?>
                        </span>
                    </div>

                </div>

            </div>
        </section>


        <!-- ===================================================================
             COMPONENT E: ADMISSION FAQS
             =================================================================== -->
        <section class="py-20 lg:py-24 bg-slate-950 border-b border-slate-800/80">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center mb-14">
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-800 text-brand-gold text-xs font-bold uppercase tracking-wider mb-3 border border-slate-700">
                        Questions & Answers
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Frequently Asked Admission Questions
                    </h2>
                    <p class="mt-3 text-sm text-slate-400">
                        Everything you need to know about our batch structures and enrolment steps.
                    </p>
                </div>

                <div class="space-y-4">
                    <?php foreach ($admissionConfig['faqs'] as $index => $faq): 
                        $faqId = 'admit-faq-' . $index;
                    ?>
                        <div class="rounded-2xl bg-slate-900 border border-slate-800 overflow-hidden transition-all duration-200 hover:border-slate-700">
                            <button type="button" 
                                    class="faq-toggle w-full flex items-center justify-between p-5 sm:p-6 text-left focus:outline-none focus:ring-2 focus:ring-brand-gold/60 focus:ring-inset"
                                    aria-expanded="false" 
                                    aria-controls="<?php echo htmlspecialchars($faqId); ?>">
                                <span class="text-base sm:text-lg font-bold text-white pr-4">
                                    <?php echo htmlspecialchars($faq['q']); ?>
                                </span>
                                <svg class="faq-icon w-5 h-5 text-slate-400 transition-transform duration-200 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </button>
                            <div id="<?php echo htmlspecialchars($faqId); ?>" class="hidden px-5 pb-6 sm:px-6 text-slate-300 text-sm leading-relaxed border-t border-slate-800/60 pt-4">
                                <?php echo htmlspecialchars($faq['a']); ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>


        <!-- ===================================================================
             COMPONENT F: FINAL ADMISSION CTA
             =================================================================== -->
        <section class="py-20 lg:py-28 relative overflow-hidden bg-brand-navy">
            <!-- Background Gradients -->
            <div class="absolute inset-0 bg-gradient-to-b from-slate-950 via-brand-navy to-slate-950 pointer-events-none"></div>
            <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-[650px] h-[350px] bg-brand-gold/10 blur-[130px] rounded-full pointer-events-none" aria-hidden="true"></div>

            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
                <div class="p-8 sm:p-12 lg:p-16 rounded-3xl bg-slate-900/90 border border-slate-800 shadow-2xl relative">
                    
                    <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-brand-gold/10 border border-brand-gold/30 text-brand-gold text-xs font-bold uppercase tracking-wider mb-6">
                        <span class="w-2 h-2 rounded-full bg-brand-gold"></span>
                        <span>Invest in Structured Academic Growth</span>
                    </span>

                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight leading-tight max-w-3xl mx-auto">
                        Ready to Elevate Your Academic Confidence?
                    </h2>

                    <p class="mt-5 text-base sm:text-lg text-slate-300 max-w-2xl mx-auto leading-relaxed">
                        Join our focused batches for Classes 6 to 12. Discuss your requirements with RKTuition and build conceptual clarity that lasts.
                    </p>

                    <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4">
                        <a href="#enquiry-form" 
                           class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-8 py-4 text-base font-bold text-slate-950 bg-gradient-to-r from-amber-400 via-brand-gold to-amber-500 hover:from-amber-300 hover:to-amber-400 rounded-xl shadow-lg shadow-amber-500/20 hover:shadow-xl hover:shadow-amber-500/30 transition-all duration-200 transform hover:-translate-y-0.5 active:translate-y-0 focus:outline-none focus:ring-2 focus:ring-brand-gold focus:ring-offset-2 focus:ring-offset-brand-navy">
                            <span>Submit Your Enquiry</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>

                        <a href="../notes/index.php" 
                           class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-4 text-base font-semibold text-slate-200 hover:text-white bg-slate-800 hover:bg-slate-700/80 border border-slate-700 rounded-xl transition-all duration-200">
                            <span>Browse Free Notes</span>
                        </a>
                    </div>

                    <div class="mt-8 pt-6 border-t border-slate-800 flex flex-col sm:flex-row items-center justify-center gap-4 text-xs text-slate-400">
                        <span>No obligation preliminary discussion</span>
                        <span class="hidden sm:inline text-slate-700">&bull;</span>
                        <span>Individual attention with small batch size</span>
                        <span class="hidden sm:inline text-slate-700">&bull;</span>
                        <span>Transparent syllabus pacing</span>
                    </div>

                </div>
            </div>
        </section>

    </main>

    <!-- SHARED REUSABLE COMPONENT: FOOTER -->
    <?php require_once __DIR__ . '/../components/footer.php'; ?>

    <!-- Main Navigation & Accordion JavaScript -->
    <script src="../js/main.js"></script>
    <!-- Admission Form Logic & Accessible Validation -->
    <script src="../js/admission.js"></script>

</body>
</html>
