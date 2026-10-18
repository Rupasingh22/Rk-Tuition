<?php
/**
 * RKTuition - Dedicated Tuition Pricing & Learning Plans Page
 *
 * File: frontend/pages/tuition.php
 * Displays comprehensive Home Tuition and Online Classes options across Classes 6 to 12.
 * Includes interactive class switching, mode filtering, transparent pricing displays,
 * plan comparisons, inclusions, timeline, and accessible FAQs.
 */

require_once __DIR__ . '/../config/tuition.php';

$tuitionConfig = getTuitionConfig();
$currentPage = 'tuition';
$basePath    = '../';

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
    <meta name="description" content="Explore RKTuition's Home Tuition and Live Online Classes pricing for Classes 6 to 12. Transparent subject plans in Mathematics, Sciences, and Computer Studies.">
    <title>Tuition Plans &amp; Subject Pricing | RKTuition</title>

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

    <!-- JSON DATA EMBED FOR VANILLA JS DYNAMIC FILTERING -->
    <script id="rk-tuition-config-data" type="application/json">
        <?php echo json_encode($tuitionConfig, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT); ?>
    </script>

    <main class="flex-grow">

        <!-- ===================================================================
             SECTION 1: PREMIUM TUITION HERO
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
                            <span><?php echo htmlspecialchars($tuitionConfig['hero']['eyebrow']); ?></span>
                        </div>

                        <h1 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-extrabold text-white tracking-tight leading-[1.15]">
                            <?php echo htmlspecialchars($tuitionConfig['hero']['headline']); ?>
                        </h1>

                        <p class="mt-6 text-base sm:text-lg text-slate-300 max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                            <?php echo htmlspecialchars($tuitionConfig['hero']['subtext']); ?>
                        </p>

                        <!-- Actions -->
                        <div class="mt-8 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                            <!-- Primary CTA: Explore Tuition Plans -->
                            <a href="#choose-mode" 
                               class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-8 py-4 text-base font-bold text-slate-950 bg-gradient-to-r from-amber-400 via-brand-gold to-amber-500 hover:from-amber-300 hover:to-amber-400 rounded-xl shadow-lg shadow-amber-500/20 hover:shadow-xl hover:shadow-amber-500/30 transition-all duration-200 transform hover:-translate-y-0.5 active:translate-y-0 focus:outline-none focus:ring-2 focus:ring-brand-gold focus:ring-offset-2 focus:ring-offset-brand-navy">
                                <span>Explore Tuition Plans</span>
                                <svg class="w-5 h-5 text-slate-950" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3"/></svg>
                            </a>

                            <!-- Secondary CTA: Enquire About Tuition -->
                            <a href="./contact.php?type=Tuition" 
                               class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-4 text-base font-semibold text-slate-200 hover:text-white bg-slate-800/80 hover:bg-slate-800 border border-slate-700 hover:border-slate-500 rounded-xl transition-all duration-200 shadow-sm">
                                <span>Enquire About Tuition</span>
                                <svg class="w-4 h-4 text-brand-gold" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/></svg>
                            </a>
                        </div>

                        <!-- Highlights Strip -->
                        <div class="mt-10 pt-8 border-t border-slate-800/80 grid grid-cols-3 gap-4 text-center lg:text-left">
                            <div>
                                <span class="block text-2xl font-extrabold text-brand-gold">Home &bull; Online</span>
                                <span class="text-xs text-slate-400">Two Flexible Formats</span>
                            </div>
                            <div>
                                <span class="block text-2xl font-extrabold text-brand-gold">Classes 6–12</span>
                                <span class="text-xs text-slate-400">All Individual Grades</span>
                            </div>
                            <div>
                                <span class="block text-2xl font-extrabold text-brand-gold">Transparent</span>
                                <span class="text-xs text-slate-400">No Hidden Costs</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right Visual Card -->
                    <div class="lg:col-span-5 relative">
                        <div class="relative mx-auto max-w-md lg:max-w-none">
                            <div class="absolute -inset-1 rounded-3xl bg-gradient-to-tr from-brand-gold/30 to-amber-500/10 blur-xl opacity-75"></div>
                            
                            <div class="relative rounded-2xl bg-slate-900 border border-slate-800 p-6 shadow-2xl overflow-hidden">
                                <img src="../images/services_hero.jpg" 
                                     alt="RKTuition Dedicated Academic Tuition" 
                                     class="w-full h-64 object-cover rounded-xl border border-slate-800/80 shadow-inner"
                                     onerror="this.src='https://images.unsplash.com/photo-1577896851231-70ef18881754?auto=format&fit=crop&w=800&q=80'">

                                <div class="mt-5 space-y-3">
                                    <div class="flex items-center justify-between text-xs text-slate-400">
                                        <span class="flex items-center gap-1.5 text-emerald-400 font-semibold">
                                            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                                            New Batches Enrolling
                                        </span>
                                        <span>2026–27 Academic Session</span>
                                    </div>

                                    <h2 class="text-lg font-bold text-white">Targeted Mentorship That Works</h2>
                                    <p class="text-xs text-slate-300 leading-relaxed">
                                        Whether studying at your residence or digitally, our instructors tailor homework reviews and problem sets to match your exact school syllabus.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- ===================================================================
             SECTION 2: CHOOSE YOUR LEARNING MODE
             =================================================================== -->
        <section id="choose-mode" class="py-20 lg:py-24 bg-brand-navy border-b border-slate-800/80 scroll-mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-800 text-brand-gold text-xs font-bold uppercase tracking-wider mb-4 border border-slate-700">
                        Delivery Options
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Choose Your Learning Mode
                    </h2>
                    <p class="mt-4 text-base text-slate-400 leading-relaxed">
                        Select between individualized in-person guidance at home or high-engagement live online sessions with interactive whiteboards.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 max-w-5xl mx-auto">
                    
                    <!-- Mode 1: Home Tuition -->
                    <?php $homeMode = $tuitionConfig['modes']['home']; ?>
                    <div class="rounded-3xl bg-slate-900 border border-slate-800 p-8 sm:p-10 flex flex-col justify-between hover:border-amber-400/50 transition-all duration-300 group shadow-xl">
                        <div>
                            <div class="flex items-center justify-between mb-6">
                                <span class="text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-full bg-amber-400/10 text-amber-400 border border-amber-400/20">
                                    <?php echo htmlspecialchars($homeMode['badge']); ?>
                                </span>
                                <div class="w-12 h-12 rounded-2xl bg-slate-800 border border-slate-700 flex items-center justify-center text-amber-400 group-hover:bg-amber-400 group-hover:text-slate-950 transition-colors">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/></svg>
                                </div>
                            </div>

                            <h3 class="text-2xl font-bold text-white mb-2"><?php echo htmlspecialchars($homeMode['name']); ?></h3>
                            <p class="text-xs text-brand-gold font-semibold uppercase tracking-wider mb-4"><?php echo htmlspecialchars($homeMode['tagline']); ?></p>

                            <p class="text-sm text-slate-300 leading-relaxed mb-6">
                                <?php echo htmlspecialchars($homeMode['description']); ?>
                            </p>

                            <ul class="space-y-3 mb-8">
                                <?php foreach ($homeMode['features'] as $feat): ?>
                                    <li class="flex items-center gap-3 text-xs sm:text-sm text-slate-300">
                                        <svg class="w-4 h-4 text-brand-gold flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg>
                                        <span><?php echo htmlspecialchars($feat); ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div>
                            <p class="text-[11px] text-slate-500 italic mb-4">
                                <?php echo htmlspecialchars($homeMode['availability_note']); ?>
                            </p>
                            <button type="button" id="view-home-pricing-btn"
                                    class="w-full py-3.5 px-6 rounded-xl bg-slate-800 hover:bg-amber-400 hover:text-slate-950 text-white font-bold text-sm transition-all duration-200 border border-slate-700 hover:border-amber-400 flex items-center justify-center gap-2">
                                <span>View Home Tuition Pricing</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3"/></svg>
                            </button>
                        </div>
                    </div>

                    <!-- Mode 2: Online Classes -->
                    <?php $onlineMode = $tuitionConfig['modes']['online']; ?>
                    <div class="rounded-3xl bg-slate-900 border border-slate-800 p-8 sm:p-10 flex flex-col justify-between hover:border-sky-400/50 transition-all duration-300 group shadow-xl">
                        <div>
                            <div class="flex items-center justify-between mb-6">
                                <span class="text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-full bg-sky-400/10 text-sky-400 border border-sky-400/20">
                                    <?php echo htmlspecialchars($onlineMode['badge']); ?>
                                </span>
                                <div class="w-12 h-12 rounded-2xl bg-slate-800 border border-slate-700 flex items-center justify-center text-sky-400 group-hover:bg-sky-400 group-hover:text-slate-950 transition-colors">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25"/></svg>
                                </div>
                            </div>

                            <h3 class="text-2xl font-bold text-white mb-2"><?php echo htmlspecialchars($onlineMode['name']); ?></h3>
                            <p class="text-xs text-sky-400 font-semibold uppercase tracking-wider mb-4"><?php echo htmlspecialchars($onlineMode['tagline']); ?></p>

                            <p class="text-sm text-slate-300 leading-relaxed mb-6">
                                <?php echo htmlspecialchars($onlineMode['description']); ?>
                            </p>

                            <ul class="space-y-3 mb-8">
                                <?php foreach ($onlineMode['features'] as $feat): ?>
                                    <li class="flex items-center gap-3 text-xs sm:text-sm text-slate-300">
                                        <svg class="w-4 h-4 text-sky-400 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg>
                                        <span><?php echo htmlspecialchars($feat); ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div>
                            <p class="text-[11px] text-slate-500 italic mb-4">
                                <?php echo htmlspecialchars($onlineMode['availability_note']); ?>
                            </p>
                            <button type="button" id="view-online-pricing-btn"
                                    class="w-full py-3.5 px-6 rounded-xl bg-slate-800 hover:bg-sky-500 hover:text-slate-950 text-white font-bold text-sm transition-all duration-200 border border-slate-700 hover:border-sky-500 flex items-center justify-center gap-2">
                                <span>View Online Class Pricing</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3"/></svg>
                            </button>
                        </div>
                    </div>

                </div>

            </div>
        </section>


        <!-- ===================================================================
             SECTION 3: SELECT YOUR CLASS (CLASSES 6 TO 12)
             =================================================================== -->
        <section id="class-selector" class="py-20 lg:py-24 bg-slate-950 border-b border-slate-800/80 scroll-mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-14">
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-800 text-brand-gold text-xs font-bold uppercase tracking-wider mb-3 border border-slate-700">
                        Interactive Grade Selection
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Select Your Class (Class 6 to 12)
                    </h2>
                    <p class="mt-4 text-base text-slate-400">
                        Click any class below to dynamically update available subjects and pricing options in real time.
                    </p>
                </div>

                <!-- 7 Distinct Class Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-7 gap-4">
                    <?php foreach ($tuitionConfig['classes'] as $cNum => $cData): 
                        $isDefault = ($cNum === '10');
                    ?>
                        <div class="tuition-class-card p-5 rounded-2xl bg-slate-900 border <?php echo $isDefault ? 'border-brand-gold ring-2 ring-brand-gold bg-slate-800/90' : 'border-slate-800'; ?> hover:border-brand-gold/60 transition-all duration-200 cursor-pointer flex flex-col justify-between group shadow-lg"
                             data-class="<?php echo htmlspecialchars($cNum); ?>"
                             role="button"
                             tabindex="0"
                             aria-pressed="<?php echo $isDefault ? 'true' : 'false'; ?>">
                            
                            <div>
                                <div class="flex items-center justify-between mb-3">
                                    <div class="w-10 h-10 rounded-xl bg-slate-800 border border-slate-700 flex items-center justify-center text-sm font-black text-brand-gold group-hover:bg-brand-gold group-hover:text-slate-950 transition-colors">
                                        <?php echo htmlspecialchars($cNum); ?>
                                    </div>
                                    <span class="text-[9px] font-bold uppercase px-2 py-0.5 rounded bg-brand-gold/10 text-brand-gold border border-brand-gold/20">
                                        Grade
                                    </span>
                                </div>

                                <h3 class="text-base font-bold text-white mb-1 group-hover:text-brand-gold transition-colors">
                                    <?php echo htmlspecialchars($cData['name']); ?>
                                </h3>

                                <p class="text-[11px] text-slate-400 line-clamp-2 leading-snug mb-3">
                                    <?php echo htmlspecialchars($cData['stage']); ?>
                                </p>

                                <div class="text-[10px] text-slate-500 font-medium mb-4">
                                    <?php echo count($cData['subjects']); ?> Configured Subjects
                                </div>
                            </div>

                            <button type="button" 
                                    class="tuition-class-btn w-full py-2 rounded-lg text-xs font-semibold transition-all <?php echo $isDefault ? 'bg-brand-gold text-slate-950 font-bold' : 'bg-slate-800 text-slate-300 hover:text-white hover:bg-slate-700'; ?>">
                                <?php echo $isDefault ? 'Selected' : 'Select Class'; ?>
                            </button>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Active Indicator & Filter Tabs -->
                <div class="mt-12 flex flex-col md:flex-row items-center justify-between gap-4 p-4 rounded-2xl bg-slate-900 border border-slate-800">
                    <div class="flex items-center gap-2">
                        <span class="text-xs text-slate-400">Currently Configured:</span>
                        <span id="active-tuition-class-label" class="font-bold text-brand-gold text-sm bg-slate-800 px-3 py-1 rounded-lg border border-slate-700">
                            Class 10
                        </span>
                    </div>

                    <!-- Learning Mode Filter Tabs -->
                    <div class="flex items-center gap-1.5 bg-slate-950 p-1.5 rounded-xl border border-slate-800" role="tablist" aria-label="Tuition Mode Filter">
                        <button type="button" data-mode="all" role="tab" aria-selected="true"
                                class="tuition-mode-tab px-4 py-2 rounded-lg text-xs font-bold transition-all bg-brand-gold text-slate-950 shadow-md">
                            All Modes
                        </button>
                        <button type="button" data-mode="home" role="tab" aria-selected="false"
                                class="tuition-mode-tab px-4 py-2 rounded-lg text-xs font-semibold transition-all bg-slate-900 text-slate-300 hover:text-white">
                            Home Tuition Only
                        </button>
                        <button type="button" data-mode="online" role="tab" aria-selected="false"
                                class="tuition-mode-tab px-4 py-2 rounded-lg text-xs font-semibold transition-all bg-slate-900 text-slate-300 hover:text-white">
                            Online Classes Only
                        </button>
                    </div>
                </div>

            </div>
        </section>


        <!-- ===================================================================
             SECTION 4: SUBJECT-WISE PRICING (DYNAMIC VIA JS)
             =================================================================== -->
        <section id="subject-pricing-section" class="py-20 lg:py-24 bg-brand-navy border-b border-slate-800/80 scroll-mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-14">
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-800 text-brand-gold text-xs font-bold uppercase tracking-wider mb-3 border border-slate-700">
                        Transparent Rates
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Subject-Wise Tuition Pricing
                    </h2>
                    <p class="mt-4 text-base text-slate-400">
                        Review individual rates for Home Tuition and Online Classes. Where fees are personalized based on batch schedules, we display <strong class="text-brand-gold">Contact for Pricing</strong>.
                    </p>
                </div>

                <!-- Dynamic Pricing Cards Grid (Populated by tuition.js) -->
                <div id="pricing-cards-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
                    <!-- Populated dynamically -->
                </div>

            </div>
        </section>


        <!-- ===================================================================
             SECTION 5: INDIVIDUAL AND MULTIPLE-SUBJECT PLANS
             =================================================================== -->
        <section id="tuition-plans-section" class="py-20 lg:py-24 bg-slate-950 border-b border-slate-800/80 scroll-mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-14">
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-800 text-brand-gold text-xs font-bold uppercase tracking-wider mb-3 border border-slate-700">
                        Course Packages
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Single vs. Multiple-Subject Plans
                    </h2>
                    <p class="mt-4 text-base text-slate-400">
                        Tailor tuition hours according to single-subject requirements or balanced multiple-subject combinations.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <?php foreach ($tuitionConfig['plans'] as $p): ?>
                        <div class="rounded-3xl bg-slate-900 border border-slate-800 p-8 flex flex-col justify-between hover:border-brand-gold/40 transition-all duration-300 shadow-xl group">
                            <div>
                                <span class="text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded-full bg-brand-gold/10 text-brand-gold border border-brand-gold/20 mb-4 inline-block">
                                    <?php echo htmlspecialchars($p['badge']); ?>
                                </span>

                                <h3 class="text-2xl font-bold text-white mb-1"><?php echo htmlspecialchars($p['name']); ?></h3>
                                <p class="text-xs text-brand-gold font-medium mb-4"><?php echo htmlspecialchars($p['tagline']); ?></p>

                                <p class="text-xs text-slate-300 leading-relaxed mb-6">
                                    <?php echo htmlspecialchars($p['desc']); ?>
                                </p>

                                <div class="pt-4 border-t border-slate-800/80 mb-6">
                                    <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400 block mb-3">Key Highlights</span>
                                    <ul class="space-y-2.5">
                                        <?php foreach ($p['features'] as $f): ?>
                                            <li class="flex items-center gap-2.5 text-xs text-slate-300">
                                                <svg class="w-4 h-4 text-brand-gold flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg>
                                                <span><?php echo htmlspecialchars($f); ?></span>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>

                            <div class="pt-6 border-t border-slate-800">
                                <p class="text-[11px] text-slate-400 mb-4 leading-snug">
                                    <?php echo htmlspecialchars($p['pricing_note']); ?>
                                </p>
                                <a href="./contact.php?type=Tuition&plan=<?php echo urlencode($p['name']); ?>" 
                                   class="w-full py-3 px-4 rounded-xl bg-slate-800 hover:bg-brand-gold hover:text-slate-950 text-white font-bold text-xs transition-colors border border-slate-700 hover:border-brand-gold flex items-center justify-center gap-2">
                                    <span>Enquire for <?php echo htmlspecialchars($p['name']); ?></span>
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>


        <!-- ===================================================================
             SECTION 6: WHAT IS INCLUDED?
             =================================================================== -->
        <section class="py-20 lg:py-24 bg-brand-navy border-b border-slate-800/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-14">
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-800 text-brand-gold text-xs font-bold uppercase tracking-wider mb-3 border border-slate-700">
                        Standard Inclusions
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        What Is Included in Every Plan?
                    </h2>
                    <p class="mt-4 text-base text-slate-400">
                        Every tuition session is structured around core conceptual discipline, regular problem solving, and open parent communication.
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <?php foreach ($tuitionConfig['inclusions'] as $inc): ?>
                        <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800 hover:border-slate-700 transition-all flex flex-col justify-between shadow-lg">
                            <div>
                                <div class="w-12 h-12 rounded-xl bg-slate-800 border border-slate-700/80 flex items-center justify-center text-brand-gold mb-4">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg>
                                </div>
                                <h3 class="text-lg font-bold text-white mb-2"><?php echo htmlspecialchars($inc['title']); ?></h3>
                                <p class="text-xs text-slate-400 leading-relaxed"><?php echo htmlspecialchars($inc['description']); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>


        <!-- ===================================================================
             SECTION 7: HOW TUITION PRICING WORKS (5-STEP TIMELINE)
             =================================================================== -->
        <section class="py-20 lg:py-24 bg-slate-950 border-b border-slate-800/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-800 text-brand-gold text-xs font-bold uppercase tracking-wider mb-3 border border-slate-700">
                        Simple Process
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        How Tuition Pricing Works
                    </h2>
                    <p class="mt-4 text-base text-slate-400">
                        Five simple steps to confirm your class pricing, faculty availability, and schedule.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-5 gap-6">
                    <?php foreach ($tuitionConfig['pricing_steps'] as $st): ?>
                        <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800 relative flex flex-col justify-between">
                            <div>
                                <span class="text-3xl font-black text-brand-gold/30 font-mono mb-4 block"><?php echo htmlspecialchars($st['step']); ?></span>
                                <h3 class="text-base font-bold text-white mb-2"><?php echo htmlspecialchars($st['title']); ?></h3>
                                <p class="text-xs text-slate-400 leading-relaxed"><?php echo htmlspecialchars($st['desc']); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="mt-12 text-center text-xs text-slate-400">
                    <span>Final fees and scheduling depend on selected session frequency and batch opening dates.</span>
                </div>

            </div>
        </section>


        <!-- ===================================================================
             SECTION 8: TUITION FAQS
             =================================================================== -->
        <section class="py-20 lg:py-24 bg-brand-navy border-b border-slate-800/80">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center mb-14">
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-800 text-brand-gold text-xs font-bold uppercase tracking-wider mb-3 border border-slate-700">
                        Questions Answered
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Frequently Asked Tuition Questions
                    </h2>
                    <p class="mt-3 text-sm text-slate-400">
                        Clarifications regarding tuition fees, batch formats, and subject enrollment.
                    </p>
                </div>

                <div class="space-y-4">
                    <?php foreach ($tuitionConfig['faqs'] as $index => $faq): 
                        $faqId = 'tuition-faq-' . $index;
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
             SECTION 9: COMPARE TUITION OPTIONS
             =================================================================== -->
        <section class="py-20 lg:py-24 bg-slate-950 border-b border-slate-800/80">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-14">
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-800 text-brand-gold text-xs font-bold uppercase tracking-wider mb-3 border border-slate-700">
                        Side-by-Side Comparison
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Compare Home Tuition vs. Online Classes
                    </h2>
                    <p class="mt-4 text-base text-slate-400">
                        Choose the format that fits your student's learning style, routine, and academic focus.
                    </p>
                </div>

                <!-- Comparison Table (Responsive) -->
                <div class="rounded-3xl bg-slate-900 border border-slate-800 shadow-xl overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-sm text-slate-300">
                            <thead class="bg-slate-950 text-xs uppercase font-bold text-slate-400 border-b border-slate-800">
                                <tr>
                                    <th scope="col" class="py-4 px-6 w-1/3 text-brand-gold">Attribute</th>
                                    <th scope="col" class="py-4 px-6 w-1/3 text-amber-400">Home Tuition</th>
                                    <th scope="col" class="py-4 px-6 w-1/3 text-sky-400">Online Classes</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-800/80 text-xs sm:text-sm">
                                <?php foreach ($tuitionConfig['comparison']['attributes'] as $row): ?>
                                    <tr class="hover:bg-slate-800/40 transition-colors">
                                        <td class="py-4 px-6 font-semibold text-white">
                                            <?php echo htmlspecialchars($row['label']); ?>
                                        </td>
                                        <td class="py-4 px-6 text-slate-300">
                                            <?php echo htmlspecialchars($row['home']); ?>
                                        </td>
                                        <td class="py-4 px-6 text-slate-300">
                                            <?php echo htmlspecialchars($row['online']); ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </section>


        <!-- ===================================================================
             SECTION 10: FINAL TUITION ENQUIRY CTA
             =================================================================== -->
        <section class="py-20 lg:py-28 relative overflow-hidden bg-brand-navy">
            <!-- Background Gradients -->
            <div class="absolute inset-0 bg-gradient-to-b from-slate-950 via-brand-navy to-slate-950 pointer-events-none"></div>
            <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-[650px] h-[350px] bg-brand-gold/10 blur-[130px] rounded-full pointer-events-none" aria-hidden="true"></div>

            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
                <div class="p-8 sm:p-12 lg:p-16 rounded-3xl bg-slate-900/90 border border-slate-800 shadow-2xl relative">
                    
                    <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-brand-gold/10 border border-brand-gold/30 text-brand-gold text-xs font-bold uppercase tracking-wider mb-6">
                        <span class="w-2 h-2 rounded-full bg-brand-gold"></span>
                        <span>Individual Attention Makes the Difference</span>
                    </span>

                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight leading-tight max-w-3xl mx-auto">
                        Find the Right Tuition Plan for You.
                    </h2>

                    <p class="mt-5 text-base sm:text-lg text-slate-300 max-w-2xl mx-auto leading-relaxed">
                        Speak directly with RKTuition to discuss batch slots, subject options, and transparent quotations tailored to your child's schedule.
                    </p>

                    <!-- CTAs -->
                    <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4">
                        <!-- Primary CTA: Enquire Now -> Contact Page -->
                        <a href="./contact.php?type=Tuition" 
                           class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-8 py-4 text-base font-bold text-slate-950 bg-gradient-to-r from-amber-400 via-brand-gold to-amber-500 hover:from-amber-300 hover:to-amber-400 rounded-xl shadow-lg shadow-amber-500/20 hover:shadow-xl hover:shadow-amber-500/30 transition-all duration-200 transform hover:-translate-y-0.5 active:translate-y-0 focus:outline-none focus:ring-2 focus:ring-brand-gold focus:ring-offset-2 focus:ring-offset-brand-navy">
                            <span>Enquire Now</span>
                            <svg class="w-5 h-5 text-slate-950" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>

                        <!-- Secondary CTA: Get Admission -> Admission Page -->
                        <a href="./admission.php" 
                           class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-4 text-base font-semibold text-slate-200 hover:text-white bg-slate-800 hover:bg-slate-700/80 border border-slate-700 rounded-xl transition-all duration-200">
                            <span>Get Admission</span>
                        </a>
                    </div>

                    <div class="mt-8 pt-6 border-t border-slate-800 flex flex-col sm:flex-row items-center justify-center gap-4 text-xs text-slate-400">
                        <span>Classes 6 to 12 Individual Guidance</span>
                        <span class="hidden sm:inline text-slate-700">&bull;</span>
                        <span>Home &bull; Online Delivery Options</span>
                        <span class="hidden sm:inline text-slate-700">&bull;</span>
                        <span>No Obligation Preliminary Discussion</span>
                    </div>

                </div>
            </div>
        </section>

    </main>

    <!-- SHARED REUSABLE COMPONENT: FOOTER -->
    <?php require_once __DIR__ . '/../components/footer.php'; ?>

    <!-- Main Navigation & Accordion JavaScript -->
    <script src="../js/main.js"></script>
    <!-- Tuition Interactive Pricing Logic -->
    <script src="../js/tuition.js"></script>

</body>
</html>
