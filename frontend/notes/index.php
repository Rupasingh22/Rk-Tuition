<?php
/**
 * RKTuition - Dedicated Study Notes & Academic Resources Page
 *
 * File: frontend/notes/index.php
 * Contains exactly 10 comprehensive, premium content sections (excluding shared header and footer).
 * Integrates individual Classes 6 through 12, dynamic filtering, Telegram resources, and direct admission navigation.
 */

require_once __DIR__ . '/../config/notes.php';

$notesConfig = getNotesConfig();
$currentPage = 'notes';
$basePath = '../';

// Navigation URLs relative to frontend/notes/
$navUrls = [
    'home'      => '../index.php',
    'services'  => '../services.php',
    'class'     => '../classes/sixthToeight.php',
    'notes'     => './index.php',
    'contact'   => '../pages/admission.php#contact-guidance',
    'login'     => '../pages/login.php',
    'admission' => '../pages/admission.php',
];
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Access structured chapter notes, formula sheets, and revision guides for Classes 6 to 12 at RKTuition. Verified academic resources aligned with board standards.">
    <title>Chapter Study Notes & Revision Resources | RKTuition</title>

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
    <script id="rk-notes-config-data" type="application/json">
        <?php echo json_encode($notesConfig, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT); ?>
    </script>

    <main class="flex-grow">

        <!-- ===================================================================
             SECTION 1: PREMIUM NOTES HERO
             =================================================================== -->
        <section class="relative pt-12 pb-20 lg:pt-20 lg:pb-28 overflow-hidden bg-gradient-to-b from-brand-navy via-slate-900 to-brand-navy border-b border-slate-800/80">
            <!-- Subtle Gold Glow Backdrop -->
            <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[650px] h-[350px] bg-brand-gold/10 blur-[130px] rounded-full pointer-events-none" aria-hidden="true"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
                    
                    <!-- Left Hero Content -->
                    <div class="lg:col-span-7 text-center lg:text-left">
                        <!-- Eyebrow text -->
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-brand-gold/10 border border-brand-gold/30 text-brand-gold text-xs font-bold uppercase tracking-wider mb-6">
                            <span class="w-2 h-2 rounded-full bg-brand-gold animate-pulse"></span>
                            <span>RKTuition Learning Resources</span>
                        </div>

                        <!-- Headline -->
                        <h1 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-extrabold text-white tracking-tight leading-[1.15]">
                            Your Learning Journey, One Chapter at a Time.
                        </h1>

                        <!-- Concise description -->
                        <p class="mt-6 text-base sm:text-lg text-slate-300 max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                            Discover structured, class-wise study notes, formula compendiums, and high-yield revision resources curated for Classes 6 through 12. Designed to turn complex syllabus concepts into clear, exam-ready mastery.
                        </p>

                        <!-- Actions -->
                        <div class="mt-8 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                            <!-- Primary CTA: Scroll to class selector -->
                            <a href="#class-selector" 
                               class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-8 py-4 text-base font-bold text-slate-950 bg-gradient-to-r from-amber-400 via-brand-gold to-amber-500 hover:from-amber-300 hover:to-amber-400 rounded-xl shadow-lg shadow-amber-500/20 hover:shadow-xl hover:shadow-amber-500/30 transition-all duration-200 transform hover:-translate-y-0.5 active:translate-y-0 focus:outline-none focus:ring-2 focus:ring-brand-gold focus:ring-offset-2 focus:ring-offset-brand-navy">
                                <span>Explore Class Notes</span>
                                <svg class="w-5 h-5 text-slate-950" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3"/></svg>
                            </a>

                            <!-- Secondary CTA: Real admission page -->
                            <a href="../pages/admission.php" 
                               class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-4 text-base font-semibold text-slate-200 hover:text-white bg-slate-800/80 hover:bg-slate-800 border border-slate-700 hover:border-slate-500 rounded-xl transition-all duration-200 shadow-sm">
                                <span>Get Admission</span>
                                <svg class="w-4 h-4 text-brand-gold" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/></svg>
                            </a>
                        </div>

                        <!-- Quick Stats Strip -->
                        <div class="mt-10 pt-8 border-t border-slate-800/80 grid grid-cols-3 gap-4 text-center lg:text-left">
                            <div>
                                <span class="block text-2xl font-extrabold text-brand-gold">7 Grades</span>
                                <span class="text-xs text-slate-400">Class 6 to 12 Individual</span>
                            </div>
                            <div>
                                <span class="block text-2xl font-extrabold text-brand-gold">Curated</span>
                                <span class="text-xs text-slate-400">Verified Board Syllabi</span>
                            </div>
                            <div>
                                <span class="block text-2xl font-extrabold text-brand-gold">Telegram</span>
                                <span class="text-xs text-slate-400">Central Broadcast Hub</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right Academic Visual Card -->
                    <div class="lg:col-span-5 relative">
                        <div class="relative mx-auto max-w-md lg:max-w-none">
                            <div class="absolute -inset-1 rounded-3xl bg-gradient-to-tr from-brand-gold/30 to-amber-500/10 blur-xl opacity-75"></div>
                            <div class="relative rounded-2xl bg-slate-900 border border-slate-800 p-6 shadow-2xl overflow-hidden">
                                <img src="../images/exam_prep.jpg" 
                                     alt="RKTuition Academic Notes and Study Material" 
                                     class="w-full h-64 object-cover rounded-xl border border-slate-800/80 shadow-inner"
                                     onerror="this.src='https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&w=800&q=80'">

                                <div class="mt-5 space-y-3">
                                    <div class="flex items-center justify-between text-xs text-slate-400">
                                        <span class="flex items-center gap-1.5 text-brand-gold font-semibold">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25"/></svg>
                                            Study Hub Active
                                        </span>
                                        <span>2026–27 Academic Series</span>
                                    </div>

                                    <h2 class="text-lg font-bold text-white">Concept-Driven Revision Notes</h2>
                                    <p class="text-xs text-slate-300 leading-relaxed">
                                        Synthesizing core textbook chapters into high-yield summaries, formulas, and verified step solutions for daily school preparation and exams.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- ===================================================================
             SECTION 2: CLASS SELECTOR — CLASSES 6 TO 12
             =================================================================== -->
        <section id="class-selector" class="py-20 lg:py-24 bg-brand-navy border-b border-slate-800/80 scroll-mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-14">
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-800 text-brand-gold text-xs font-bold uppercase tracking-wider mb-3 border border-slate-700">
                        Choose Your Class
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Select Your Grade (Class 6 to 12)
                    </h2>
                    <p class="mt-4 text-base text-slate-400">
                        Click on your class to instantly filter available subjects, chapter breakdowns, and study resources without reloading the page.
                    </p>
                </div>

                <!-- Individual Class Cards (7 Distinct Cards: 6, 7, 8, 9, 10, 11, 12) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-7 gap-4">
                    <?php foreach ($notesConfig['classes'] as $cNum => $cData): 
                        $isDefault = ($cNum === '10');
                    ?>
                        <div class="class-selector-card p-5 rounded-2xl bg-slate-900 border <?php echo $isDefault ? 'border-brand-gold ring-2 ring-brand-gold bg-slate-800/90' : 'border-slate-800'; ?> hover:border-brand-gold/60 transition-all duration-200 cursor-pointer flex flex-col justify-between group shadow-lg"
                             data-class="<?php echo htmlspecialchars($cNum); ?>"
                             role="button"
                             tabindex="0"
                             aria-pressed="<?php echo $isDefault ? 'true' : 'false'; ?>">
                            
                            <div>
                                <!-- Class Number Badge -->
                                <div class="flex items-center justify-between mb-3">
                                    <div class="w-10 h-10 rounded-xl bg-slate-800 border border-slate-700/80 flex items-center justify-center text-sm font-black text-brand-gold group-hover:bg-brand-gold group-hover:text-slate-950 transition-colors">
                                        <?php echo htmlspecialchars($cNum); ?>
                                    </div>
                                    <span class="text-[9px] font-bold uppercase tracking-wider px-2 py-0.5 rounded bg-brand-gold/10 text-brand-gold border border-brand-gold/20">
                                        Grade
                                    </span>
                                </div>

                                <h3 class="text-base font-bold text-white mb-1 group-hover:text-brand-gold transition-colors">
                                    <?php echo htmlspecialchars($cData['name']); ?>
                                </h3>

                                <p class="text-[11px] text-slate-400 line-clamp-2 leading-snug mb-3">
                                    <?php echo htmlspecialchars($cData['stage']); ?>
                                </p>

                                <!-- Available Subjects count -->
                                <div class="text-[10px] text-slate-500 font-medium mb-4">
                                    <?php echo count($cData['subjects']); ?> Configured Subjects
                                </div>
                            </div>

                            <button type="button" 
                                    class="class-view-btn w-full py-2 rounded-lg text-xs font-semibold transition-all <?php echo $isDefault ? 'bg-brand-gold text-slate-950 font-bold' : 'bg-slate-800 text-slate-300 hover:text-white hover:bg-slate-700'; ?>">
                                <?php echo $isDefault ? 'Active Class' : 'View Notes'; ?>
                            </button>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Active class indicator & quick search -->
                <div class="mt-8 pt-6 border-t border-slate-800 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-400">
                    <div class="flex items-center gap-2">
                        <span>Currently Filtering:</span>
                        <span id="active-class-label" class="font-bold text-brand-gold text-sm bg-slate-800 px-3 py-1 rounded-lg border border-slate-700">
                            Class 10
                        </span>
                    </div>
                    <div>
                        <span>JavaScript filtering active. You can also browse directly in the library below.</span>
                    </div>
                </div>

            </div>
        </section>


        <!-- ===================================================================
             SECTION 3: SUBJECT-WISE NOTES
             =================================================================== -->
        <section id="subject-notes-section" class="py-20 lg:py-24 bg-slate-950 border-b border-slate-800/80 scroll-mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-14">
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-800 text-brand-gold text-xs font-bold uppercase tracking-wider mb-3 border border-slate-700">
                        Curriculum Subjects
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Subject-Wise Study Resources
                    </h2>
                    <p class="mt-4 text-base text-slate-400">
                        Configured curriculum subjects for your active class. Click on any subject to filter chapter notes below.
                    </p>
                </div>

                <!-- Dynamic Subject Cards Container (Populated by notes.js) -->
                <div id="subject-cards-container" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Fallback / Initial State rendered by PHP for Class 10 -->
                    <?php 
                    $defaultClassSubjects = $notesConfig['classes']['10']['subjects'] ?? [];
                    foreach ($defaultClassSubjects as $subj): 
                    ?>
                        <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800 hover:border-slate-700 transition-all cursor-pointer flex flex-col justify-between group">
                            <div>
                                <div class="flex items-center justify-between mb-4">
                                    <div class="w-12 h-12 rounded-xl bg-slate-800 border border-slate-700/80 flex items-center justify-center text-brand-gold group-hover:bg-brand-gold group-hover:text-slate-950 transition-colors">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25"/></svg>
                                    </div>
                                    <span class="text-[11px] font-bold px-2.5 py-1 rounded-full bg-slate-800 border border-slate-700 text-slate-300">
                                        <?php echo htmlspecialchars($subj['total_notes']); ?> Chapters
                                    </span>
                                </div>

                                <h3 class="text-lg font-bold text-white group-hover:text-brand-gold transition-colors mb-2">
                                    <?php echo htmlspecialchars($subj['name']); ?>
                                </h3>

                                <p class="text-xs text-slate-400 line-clamp-2 leading-relaxed mb-6">
                                    <?php echo htmlspecialchars($subj['desc']); ?>
                                </p>
                            </div>

                            <div class="pt-4 border-t border-slate-800/80 flex items-center justify-between">
                                <span class="text-xs font-semibold text-brand-gold flex items-center gap-1">
                                    <span>Explore Notes</span>
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                                </span>
                                <span class="text-[10px] text-slate-500 font-medium">Class 10</span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>


        <!-- ===================================================================
             SECTION 4: INDIVIDUAL CLASS DETAILS (EXPANDABLE SEPARATE CLASS SPECS)
             =================================================================== -->
        <section id="individual-class-details" class="py-20 lg:py-24 bg-brand-navy border-b border-slate-800/80 scroll-mt-20">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-14">
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-800 text-brand-gold text-xs font-bold uppercase tracking-wider mb-3 border border-slate-700">
                        Comprehensive Class Breakdown
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Individual Class Curricula & Availability
                    </h2>
                    <p class="mt-4 text-base text-slate-400">
                        Review the exact topics, syllabus status, and revision materials mapped for each individual class from Class 6 to Class 12.
                    </p>
                </div>

                <!-- Accessible Expandable Class Accordion -->
                <div id="class-detail-accordion" class="space-y-4">
                    <?php foreach ($notesConfig['classes'] as $cNum => $cData): 
                        $isDefault = ($cNum === '10');
                        $panelId = 'class-detail-panel-' . $cNum;
                    ?>
                        <div class="rounded-2xl bg-slate-900 border border-slate-800 overflow-hidden transition-all duration-200">
                            
                            <!-- Accordion Header Button -->
                            <button type="button" 
                                    class="class-detail-toggle w-full flex items-center justify-between p-5 sm:p-6 text-left focus:outline-none focus:ring-2 focus:ring-brand-gold/60 focus:ring-inset transition-colors <?php echo $isDefault ? 'bg-slate-800/90 text-brand-gold' : 'text-slate-200 hover:bg-slate-800/50'; ?>"
                                    data-target-class="<?php echo htmlspecialchars($cNum); ?>"
                                    aria-expanded="<?php echo $isDefault ? 'true' : 'false'; ?>"
                                    aria-controls="<?php echo htmlspecialchars($panelId); ?>">
                                
                                <div class="flex items-center gap-4">
                                    <div class="w-10 h-10 rounded-xl bg-slate-800 border border-slate-700 flex items-center justify-center font-black text-brand-gold">
                                        <?php echo htmlspecialchars($cNum); ?>
                                    </div>
                                    <div>
                                        <div class="flex items-center gap-2">
                                            <span class="text-lg font-bold text-white"><?php echo htmlspecialchars($cData['name']); ?></span>
                                            <span class="text-[10px] font-bold uppercase px-2 py-0.5 rounded bg-brand-gold/10 text-brand-gold border border-brand-gold/20">
                                                <?php echo htmlspecialchars($cData['badge']); ?>
                                            </span>
                                        </div>
                                        <p class="text-xs text-slate-400 mt-0.5"><?php echo htmlspecialchars($cData['stage']); ?></p>
                                    </div>
                                </div>

                                <div class="flex items-center gap-3">
                                    <span class="hidden sm:inline-block text-xs font-medium text-slate-400">
                                        <?php echo count($cData['chapters']); ?> Core Topics
                                    </span>
                                    <svg class="class-detail-arrow w-5 h-5 text-slate-400 transition-transform duration-200 <?php echo $isDefault ? 'rotate-180 text-brand-gold' : ''; ?>" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/>
                                    </svg>
                                </div>
                            </button>

                            <!-- Accordion Body Panel -->
                            <div id="<?php echo htmlspecialchars($panelId); ?>" 
                                 class="class-detail-panel <?php echo $isDefault ? '' : 'hidden'; ?> p-5 sm:p-6 border-t border-slate-800/80 bg-slate-950/60">
                                
                                <p class="text-sm text-slate-300 leading-relaxed mb-6">
                                    <?php echo htmlspecialchars($cData['description']); ?>
                                </p>

                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                                    
                                    <!-- Left: Chapters list -->
                                    <div class="p-4 rounded-xl bg-slate-900 border border-slate-800">
                                        <h4 class="text-xs font-bold uppercase tracking-wider text-brand-gold mb-3 flex items-center gap-2">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25"/></svg>
                                            <span>Key Syllabus Modules</span>
                                        </h4>
                                        <div class="space-y-2">
                                            <?php foreach ($cData['chapters'] as $ch): ?>
                                                <div class="flex items-center justify-between text-xs p-2 rounded-lg bg-slate-950/80 border border-slate-800">
                                                    <span class="text-slate-200 font-medium"><?php echo htmlspecialchars($ch['title']); ?></span>
                                                    <span class="text-[10px] text-brand-gold px-2 py-0.5 rounded bg-brand-gold/10"><?php echo htmlspecialchars($ch['subject']); ?></span>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>

                                    <!-- Right: Revision materials -->
                                    <div class="p-4 rounded-xl bg-slate-900 border border-slate-800 flex flex-col justify-between">
                                        <div>
                                            <h4 class="text-xs font-bold uppercase tracking-wider text-brand-gold mb-3 flex items-center gap-2">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"/></svg>
                                                <span>Revision & Practice Materials</span>
                                            </h4>
                                            <div class="space-y-2">
                                                <?php foreach ($cData['revision_materials'] as $mat): ?>
                                                    <div class="flex items-center justify-between text-xs p-2 rounded-lg bg-slate-950/80 border border-slate-800">
                                                        <span class="text-slate-300"><?php echo htmlspecialchars($mat['title']); ?></span>
                                                        <span class="text-[10px] text-slate-400 font-mono"><?php echo htmlspecialchars($mat['type']); ?></span>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>

                                        <div class="mt-4 pt-3 border-t border-slate-800 flex items-center justify-between">
                                            <span class="text-[11px] text-slate-400">Class <?php echo htmlspecialchars($cNum); ?> Resources</span>
                                            <a href="#chapter-library-section" class="text-xs font-bold text-brand-gold hover:underline">
                                                View Library Cards &rarr;
                                            </a>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>


        <!-- ===================================================================
             SECTION 5: CHAPTER-WISE NOTES LIBRARY
             =================================================================== -->
        <section id="chapter-library-section" class="py-20 lg:py-24 bg-slate-950 border-b border-slate-800/80 scroll-mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
                    <div>
                        <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-800 text-brand-gold text-xs font-bold uppercase tracking-wider mb-3 border border-slate-700">
                            Searchable Resource Archive
                        </span>
                        <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                            Chapter-Wise Notes Library
                        </h2>
                        <p class="mt-2 text-sm text-slate-400 max-w-xl">
                            Filter by grade, subject, resource type, or topic keyword.
                        </p>
                    </div>

                    <div class="flex items-center gap-3">
                        <span id="library-results-count" class="px-3.5 py-1.5 rounded-full bg-brand-gold/10 text-brand-gold border border-brand-gold/30 text-xs font-bold">
                            Loading Resources...
                        </span>
                    </div>
                </div>

                <!-- Filter Controls Bar -->
                <div class="p-4 sm:p-6 rounded-2xl bg-slate-900 border border-slate-800 mb-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    
                    <!-- 1. Class Filter -->
                    <div>
                        <label for="library-filter-class" class="block text-xs font-bold uppercase tracking-wider text-slate-400 mb-1.5">
                            Grade / Class
                        </label>
                        <select id="library-filter-class" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-950 border border-slate-700 text-sm text-white focus:outline-none focus:ring-2 focus:ring-brand-gold focus:border-brand-gold">
                            <option value="all">All Classes (6 to 12)</option>
                            <?php foreach ($notesConfig['classes'] as $cNum => $cData): ?>
                                <option value="<?php echo htmlspecialchars($cNum); ?>" <?php echo $cNum === '10' ? 'selected' : ''; ?>>
                                    <?php echo htmlspecialchars($cData['name']); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- 2. Subject Filter -->
                    <div>
                        <label for="library-filter-subject" class="block text-xs font-bold uppercase tracking-wider text-slate-400 mb-1.5">
                            Subject
                        </label>
                        <select id="library-filter-subject" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-950 border border-slate-700 text-sm text-white focus:outline-none focus:ring-2 focus:ring-brand-gold focus:border-brand-gold">
                            <option value="all">All Subjects</option>
                            <option value="Mathematics">Mathematics</option>
                            <option value="Science">Science</option>
                            <option value="Social Science">Social Science</option>
                            <option value="Computer Studies">Computer Studies</option>
                            <option value="Physics">Physics</option>
                            <option value="Chemistry">Chemistry</option>
                            <option value="Biology">Biology</option>
                            <option value="Computer Science">Computer Science</option>
                        </select>
                    </div>

                    <!-- 3. Resource Type Filter -->
                    <div>
                        <label for="library-filter-type" class="block text-xs font-bold uppercase tracking-wider text-slate-400 mb-1.5">
                            Resource Type
                        </label>
                        <select id="library-filter-type" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-950 border border-slate-700 text-sm text-white focus:outline-none focus:ring-2 focus:ring-brand-gold focus:border-brand-gold">
                            <option value="all">All Types</option>
                            <option value="Revision Notes">Revision Notes</option>
                            <option value="Practice Worksheet">Practice Worksheet</option>
                            <option value="Formula Sheet">Formula Sheet</option>
                            <option value="Concept Chart">Concept Chart</option>
                            <option value="Revision Guide">Revision Guide</option>
                        </select>
                    </div>

                    <!-- 4. Text Search -->
                    <div>
                        <label for="library-search-input" class="block text-xs font-bold uppercase tracking-wider text-slate-400 mb-1.5">
                            Search Topics / Chapter
                        </label>
                        <div class="relative">
                            <input type="text" id="library-search-input" placeholder="e.g. Quadratic, Motion, Cell..."
                                   class="w-full pl-9 pr-3.5 py-2.5 rounded-xl bg-slate-950 border border-slate-700 text-sm text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-gold focus:border-brand-gold">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3 text-slate-500">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"/></svg>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Resource Cards Container (Populated dynamically by notes.js) -->
                <div id="notes-library-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Initial Content loaded by JS or fallback -->
                </div>

                <!-- Empty State (Shown when no items match filters) -->
                <div id="notes-library-empty" class="hidden p-12 rounded-3xl bg-slate-900 border border-slate-800 text-center max-w-xl mx-auto my-6">
                    <div class="w-14 h-14 rounded-2xl bg-amber-500/10 text-brand-gold border border-brand-gold/20 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Notes Coming Soon</h3>
                    <p class="text-sm text-slate-400 mb-6 leading-relaxed">
                        No materials currently match the selected combination. Our instructors publish new chapters regularly according to school test schedules.
                    </p>
                    <button type="button" id="reset-filters-btn"
                            class="px-6 py-2.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-brand-gold border border-slate-700 font-semibold text-xs transition-colors">
                        Reset All Filters
                    </button>
                </div>

            </div>
        </section>


        <!-- ===================================================================
             SECTION 6: NOTES ON TELEGRAM
             =================================================================== -->
        <section id="telegram-notes-section" class="py-20 lg:py-24 relative overflow-hidden bg-gradient-to-b from-brand-navy via-slate-900 to-brand-navy border-b border-slate-800/80">
            <!-- Glow background -->
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[300px] bg-sky-500/10 blur-[130px] rounded-full pointer-events-none" aria-hidden="true"></div>

            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="rounded-3xl bg-slate-900/90 border border-slate-800 p-8 sm:p-12 lg:p-14 shadow-2xl relative overflow-hidden">
                    
                    <!-- Telegram Icon Badge -->
                    <div class="w-16 h-16 rounded-2xl bg-sky-500/10 text-sky-400 border border-sky-500/20 flex items-center justify-center mx-auto mb-6 shadow-md shadow-sky-500/5">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                            <!-- Premium Telegram SVG Icon -->
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.64 6.8c-.15 1.58-.8 5.42-1.13 7.19-.14.75-.42 1-.68 1.03-.58.05-1.02-.38-1.58-.75-.88-.58-1.38-.94-2.23-1.5-.99-.65-.35-1.01.22-1.59.15-.15 2.71-2.48 2.76-2.69a.2.2 0 00-.05-.18c-.06-.05-.14-.03-.21-.02-.09.02-1.49.95-4.22 2.79-.4.27-.76.41-1.08.4-.36-.01-1.04-.2-1.55-.37-.63-.2-1.12-.31-1.08-.66.02-.18.27-.36.75-.55 2.92-1.27 4.86-2.11 5.83-2.52 2.77-1.16 3.35-1.36 3.73-1.36.08 0 .27.02.39.12.1.08.13.19.14.27-.01.06.01.24 0 .38z"/>
                        </svg>
                    </div>

                    <div class="text-center max-w-2xl mx-auto">
                        <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-sky-500/10 text-sky-400 text-xs font-bold uppercase tracking-wider mb-4 border border-sky-500/20">
                            Central Community & Alerts
                        </span>
                        
                        <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                            Get Your Study Notes on Telegram
                        </h2>

                        <p class="mt-4 text-sm sm:text-base text-slate-300 leading-relaxed">
                            <?php echo htmlspecialchars($notesConfig['telegram']['description']); ?>
                        </p>

                        <!-- Safe Configured Telegram Button Destination -->
                        <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4">
                            <?php 
                            $telegramConfig = $notesConfig['telegram'];
                            $hasValidTgLink = !empty($telegramConfig['main_channel']) && $telegramConfig['enabled'];
                            ?>

                            <?php if ($hasValidTgLink): ?>
                                <a href="<?php echo htmlspecialchars($telegramConfig['main_channel']); ?>" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-8 py-4 text-base font-bold text-white bg-sky-600 hover:bg-sky-500 rounded-xl shadow-lg shadow-sky-600/20 transition-all duration-200">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.64 6.8c-.15 1.58-.8 5.42-1.13 7.19-.14.75-.42 1-.68 1.03-.58.05-1.02-.38-1.58-.75-.88-.58-1.38-.94-2.23-1.5-.99-.65-.35-1.01.22-1.59.15-.15 2.71-2.48 2.76-2.69a.2.2 0 00-.05-.18c-.06-.05-.14-.03-.21-.02-.09.02-1.49.95-4.22 2.79-.4.27-.76.41-1.08.4-.36-.01-1.04-.2-1.55-.37-.63-.2-1.12-.31-1.08-.66.02-.18.27-.36.75-.55 2.92-1.27 4.86-2.11 5.83-2.52 2.77-1.16 3.35-1.36 3.73-1.36.08 0 .27.02.39.12.1.08.13.19.14.27-.01.06.01.24 0 .38z"/></svg>
                                    <span>Get Notes on Telegram</span>
                                </a>
                            <?php else: ?>
                                <!-- Transparent notice preventing fake link execution as required by instructions -->
                                <div class="p-4 rounded-xl bg-slate-950 border border-slate-800 text-xs text-slate-400 max-w-md">
                                    <div class="flex items-center justify-center gap-2 text-amber-400 font-bold mb-1">
                                        <span class="w-2 h-2 rounded-full bg-amber-400 animate-ping"></span>
                                        <span>Telegram Broadcast Setup in Progress</span>
                                    </div>
                                    <p>Official Telegram destination channel is configurable in <code class="text-brand-gold bg-black/40 px-1 py-0.5 rounded">config/notes.php</code>. Enrolled students receive direct notes packets during sessions.</p>
                                    <div class="mt-3">
                                        <a href="../pages/admission.php" class="text-xs font-bold text-brand-gold hover:underline">
                                            Enquire on Admission Page for Classroom Notes &rarr;
                                        </a>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>

                    </div>

                </div>
            </div>
        </section>


        <!-- ===================================================================
             SECTION 7: STUDY RESOURCES & REVISION GUIDES
             =================================================================== -->
        <section id="study-resources-section" class="py-20 lg:py-24 bg-brand-navy border-b border-slate-800/80 scroll-mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-14">
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-800 text-brand-gold text-xs font-bold uppercase tracking-wider mb-3 border border-slate-700">
                        Academic Toolkits
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Study Resources & Revision Guides
                    </h2>
                    <p class="mt-4 text-base text-slate-400">
                        High-yield collateral designed to supplement textbook learning with structured recall tools and exam strategies.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <?php foreach ($notesConfig['study_resources'] as $res): ?>
                        <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800 hover:border-slate-700 transition-all flex flex-col justify-between group shadow-lg">
                            <div>
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-[10px] font-bold uppercase tracking-wider px-2.5 py-1 rounded bg-brand-gold/10 text-brand-gold border border-brand-gold/20">
                                        <?php echo htmlspecialchars($res['badge']); ?>
                                    </span>
                                    <div class="w-10 h-10 rounded-xl bg-slate-800 border border-slate-700 flex items-center justify-center text-brand-gold">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z"/></svg>
                                    </div>
                                </div>

                                <h3 class="text-lg font-bold text-white mb-2 group-hover:text-brand-gold transition-colors">
                                    <?php echo htmlspecialchars($res['title']); ?>
                                </h3>

                                <p class="text-xs text-slate-400 leading-relaxed mb-6">
                                    <?php echo htmlspecialchars($res['description']); ?>
                                </p>

                                <ul class="space-y-2 mb-6">
                                    <?php foreach ($res['items'] as $it): ?>
                                        <li class="flex items-center gap-2 text-xs text-slate-300">
                                            <span class="w-1.5 h-1.5 rounded-full bg-brand-gold flex-shrink-0"></span>
                                            <span><?php echo htmlspecialchars($it); ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>

                            <div class="pt-4 border-t border-slate-800">
                                <a href="#chapter-library-section" class="text-xs font-bold text-brand-gold hover:underline flex items-center justify-between">
                                    <span>Browse In Library</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>


        <!-- ===================================================================
             SECTION 8: HOW TO USE THE NOTES (4-STEP LEARNING GUIDE)
             =================================================================== -->
        <section class="py-20 lg:py-24 bg-slate-950 border-b border-slate-800/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-800 text-brand-gold text-xs font-bold uppercase tracking-wider mb-3 border border-slate-700">
                        Methodology
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        How to Use the Study Notes
                    </h2>
                    <p class="mt-4 text-base text-slate-400">
                        Follow our four-step routine to integrate chapter summaries into your daily homework and revision cycles.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    
                    <!-- Step 1 -->
                    <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800 relative">
                        <span class="text-3xl font-black text-brand-gold/30 font-mono mb-4 block">01</span>
                        <h3 class="text-base font-bold text-white mb-2">Select Your Class</h3>
                        <p class="text-xs text-slate-400 leading-relaxed">
                            Navigate the Class Selector (Classes 6 to 12) to configure the page for your specific academic grade and board curriculum.
                        </p>
                    </div>

                    <!-- Step 2 -->
                    <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800 relative">
                        <span class="text-3xl font-black text-brand-gold/30 font-mono mb-4 block">02</span>
                        <h3 class="text-base font-bold text-white mb-2">Choose Your Subject</h3>
                        <p class="text-xs text-slate-400 leading-relaxed">
                            Pick Mathematics, Science, Social Studies, Physics, Chemistry, Biology, or Computer Studies to view subject notes.
                        </p>
                    </div>

                    <!-- Step 3 -->
                    <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800 relative">
                        <span class="text-3xl font-black text-brand-gold/30 font-mono mb-4 block">03</span>
                        <h3 class="text-base font-bold text-white mb-2">Find the Chapter</h3>
                        <p class="text-xs text-slate-400 leading-relaxed">
                            Search or filter by chapter title to find concise summaries, formula sheets, and step-by-step problem worksheets.
                        </p>
                    </div>

                    <!-- Step 4 -->
                    <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800 relative">
                        <span class="text-3xl font-black text-brand-gold/30 font-mono mb-4 block">04</span>
                        <h3 class="text-base font-bold text-white mb-2">Open Resource or Telegram</h3>
                        <p class="text-xs text-slate-400 leading-relaxed">
                            Download the PDF guide or join the Telegram broadcast group for weekly release notifications and supplementary exercises.
                        </p>
                    </div>

                </div>

                <!-- Guidance CTA -->
                <div class="mt-12 text-center">
                    <p class="text-xs text-slate-400 mb-4">Want guided instruction and personalized doubt solving alongside your notes?</p>
                    <a href="../classes/sixthToeight.php" class="inline-flex items-center gap-2 text-sm font-bold text-brand-gold hover:underline">
                        <span>Explore RKTuition Foundation Programs</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>

            </div>
        </section>


        <!-- ===================================================================
             SECTION 9: NOTES FAQS
             =================================================================== -->
        <section class="py-20 lg:py-24 bg-brand-navy border-b border-slate-800/80">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center mb-14">
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-800 text-brand-gold text-xs font-bold uppercase tracking-wider mb-3 border border-slate-700">
                        Help & FAQs
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Frequently Asked Questions about Notes
                    </h2>
                    <p class="mt-3 text-sm text-slate-400">
                        Clear, accurate answers regarding our note formats, Telegram channels, and subject coverage.
                    </p>
                </div>

                <div class="space-y-4">
                    <?php foreach ($notesConfig['faqs'] as $index => $faq): 
                        $faqId = 'notes-faq-' . $index;
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
             SECTION 10: FINAL CTA — LEARN MORE WITH RKTUITION
             =================================================================== -->
        <section class="py-20 lg:py-28 relative overflow-hidden bg-slate-950">
            <!-- Background Gradients -->
            <div class="absolute inset-0 bg-gradient-to-b from-brand-navy via-slate-900 to-slate-950 pointer-events-none"></div>
            <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-[650px] h-[350px] bg-brand-gold/10 blur-[130px] rounded-full pointer-events-none" aria-hidden="true"></div>

            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
                <div class="p-8 sm:p-12 lg:p-16 rounded-3xl bg-slate-900/90 border border-slate-800 shadow-2xl relative">
                    
                    <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-brand-gold/10 border border-brand-gold/30 text-brand-gold text-xs font-bold uppercase tracking-wider mb-6">
                        <span class="w-2 h-2 rounded-full bg-brand-gold"></span>
                        <span>Transform Notes into Top Performance</span>
                    </span>

                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight leading-tight max-w-3xl mx-auto">
                        Make Every Study Session Count.
                    </h2>

                    <p class="mt-5 text-base sm:text-lg text-slate-300 max-w-2xl mx-auto leading-relaxed">
                        While notes build knowledge, personalized mentorship ensures complete conceptual mastery and exam readiness. Enquire today for focused small-batch tuition.
                    </p>

                    <!-- CTAs -->
                    <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4">
                        <!-- Primary CTA: Real Admission Page -->
                        <a href="../pages/admission.php" 
                           class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-8 py-4 text-base font-bold text-slate-950 bg-gradient-to-r from-amber-400 via-brand-gold to-amber-500 hover:from-amber-300 hover:to-amber-400 rounded-xl shadow-lg shadow-amber-500/20 hover:shadow-xl hover:shadow-amber-500/30 transition-all duration-200 transform hover:-translate-y-0.5 active:translate-y-0 focus:outline-none focus:ring-2 focus:ring-brand-gold focus:ring-offset-2 focus:ring-offset-brand-navy">
                            <span>Get Admission</span>
                            <svg class="w-5 h-5 text-slate-950" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>

                        <!-- Secondary CTA: Explore Classes Page -->
                        <a href="../classes/sixthToeight.php" 
                           class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-4 text-base font-semibold text-slate-200 hover:text-white bg-slate-800 hover:bg-slate-700/80 border border-slate-700 rounded-xl transition-all duration-200">
                            <span>Explore Classes</span>
                        </a>
                    </div>

                    <div class="mt-8 pt-6 border-t border-slate-800 flex flex-col sm:flex-row items-center justify-center gap-4 text-xs text-slate-400">
                        <span>Classes 6 to 12 Individual Guidance</span>
                        <span class="hidden sm:inline text-slate-700">&bull;</span>
                        <span>Small Batches for Maximum Focus</span>
                        <span class="hidden sm:inline text-slate-700">&bull;</span>
                        <span>Verified Chapter Study Material</span>
                    </div>

                </div>
            </div>
        </section>

    </main>

    <!-- SHARED REUSABLE COMPONENT: FOOTER -->
    <?php require_once __DIR__ . '/../components/footer.php'; ?>

    <!-- Main Navigation & Accordion JavaScript -->
    <script src="../js/main.js"></script>
    <!-- Notes Page Interactive Filtering Logic -->
    <script src="../js/notes.js"></script>

</body>
</html>
