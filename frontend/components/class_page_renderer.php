<?php
/**
 * RKTuition - Reusable Class Page Renderer Component
 *
 * Renders exactly 10 comprehensive, responsive, accessible sections
 * using data configured in frontend/config/classes_data.php.
 */

// Safety check for incoming data
if (!isset($classGroupData) || !is_array($classGroupData)) {
    die('Error: Class group data is required to render this page.');
}

$currentPage = 'class';
$basePath    = '../';

// Header & Footer URLs relative to frontend/classes/
$navUrls = [
    'home'      => '../index.php',
    'services'  => '../services.php',
    'class'     => './sixthToeight.php',
    'notes'     => '../notes/index.php',
    'contact'   => '../pages/admission.php#contact-guidance',
    'login'     => '../pages/login.php',
    'admission' => '../pages/admission.php',
];

$allGroups = $allGroups ?? [];
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($classGroupData['description']); ?>">
    <title><?php echo htmlspecialchars($classGroupData['title']); ?> | RKTuition</title>
    
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
    <?php require_once __DIR__ . '/header.php'; ?>

    <!-- JSON DATA EMBED FOR VANILLA JS INTERACTIONS -->
    <script id="rk-class-data" type="application/json">
        <?php echo json_encode($classGroupData, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT); ?>
    </script>

    <!-- MAIN CLASS CONTENT: EXACTLY 10 SECTIONS -->
    <main class="flex-grow">

        <!-- ===================================================================
             SECTION 1: PREMIUM CLASS HERO
             =================================================================== -->
        <section id="hero" class="relative overflow-hidden pt-8 pb-16 lg:pt-14 lg:pb-24 border-b border-slate-800/80">
            <!-- Background Radial Accents -->
            <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-brand-gold/5 blur-[130px] rounded-full pointer-events-none" aria-hidden="true"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                
                <!-- TOP CLASS GROUP SWITCHER NAVIGATION -->
                <div class="mb-10 flex flex-wrap items-center justify-center gap-2 sm:gap-3 p-1.5 rounded-2xl bg-slate-900/90 border border-slate-800 max-w-2xl mx-auto shadow-lg">
                    <?php 
                    $pagesMap = [
                        '6-8'   => ['file' => 'sixthToeight.php', 'label' => 'Classes 6 – 8 (Foundation)'],
                        '9-10'  => ['file' => 'ninetheTotenth.php', 'label' => 'Classes 9 – 10 (Secondary)'],
                        '11-12' => ['file' => 'eleventhTotwelth.php', 'label' => 'Classes 11 – 12 (Senior)'],
                    ];
                    foreach ($pagesMap as $key => $meta): 
                        $isActive = ($classGroupData['key'] === $key);
                    ?>
                        <a href="./<?php echo $meta['file']; ?>" 
                           class="flex-1 min-w-[170px] text-center px-4 py-2.5 rounded-xl text-xs sm:text-sm font-bold transition-all duration-200 <?php echo $isActive ? 'bg-brand-gold text-slate-950 shadow-md' : 'text-slate-400 hover:text-white hover:bg-slate-800/60'; ?>"
                           <?php echo $isActive ? 'aria-current="page"' : ''; ?>>
                            <?php echo htmlspecialchars($meta['label']); ?>
                        </a>
                    <?php endforeach; ?>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                    
                    <!-- Left Column: Copy & Actions (7 Cols) -->
                    <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-800/80 border border-slate-700/80 text-brand-gold text-xs font-semibold uppercase tracking-wider shadow-sm">
                            <span class="w-2 h-2 rounded-full bg-brand-gold animate-pulse"></span>
                            <span><?php echo $classGroupData['eyebrow']; ?></span>
                        </div>

                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-white leading-tight">
                            <?php echo htmlspecialchars($classGroupData['headline']); ?>
                        </h1>

                        <p class="text-base text-slate-300 max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                            <?php echo htmlspecialchars($classGroupData['description']); ?>
                        </p>

                        <!-- CTA Actions -->
                        <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 pt-2">
                            <a href="#choose-class" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-7 py-3.5 text-base font-bold text-slate-950 bg-gradient-to-r from-amber-400 via-brand-gold to-amber-500 hover:from-amber-300 hover:to-amber-400 rounded-xl shadow-lg shadow-amber-500/20 hover:shadow-xl hover:shadow-amber-500/30 transition-all duration-200 transform hover:-translate-y-0.5 active:translate-y-0 focus:outline-none focus:ring-2 focus:ring-brand-gold focus:ring-offset-2 focus:ring-offset-brand-navy">
                                <span>Explore Subjects &amp; Syllabus</span>
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/></svg>
                            </a>

                            <a href="../pages/admission.php" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-7 py-3.5 text-base font-semibold text-slate-200 hover:text-white bg-slate-800/80 hover:bg-slate-800 border border-slate-700 hover:border-slate-500 rounded-xl transition-all duration-200 shadow-sm">
                                <span>Get Admission</span>
                                <svg class="w-4 h-4 text-brand-gold" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                            </a>
                        </div>

                        <!-- Highlights Strip -->
                        <div class="pt-6 border-t border-slate-800/80 grid grid-cols-1 sm:grid-cols-3 gap-3 text-left">
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-brand-gold shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg>
                                <span class="text-xs text-slate-300">Small Focused Batches</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-brand-gold shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg>
                                <span class="text-xs text-slate-300">Concept-First Pedagogy</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-brand-gold shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg>
                                <span class="text-xs text-slate-300">Continuous Assessment</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Visual Academic Hero Card (5 Cols) -->
                    <div class="lg:col-span-5 flex justify-center">
                        <div class="relative w-full max-w-md">
                            <div class="rounded-2xl overflow-hidden bg-slate-900 border border-slate-700/80 shadow-2xl relative">
                                <div class="aspect-[4/3] bg-slate-800 overflow-hidden">
                                    <img src="<?php echo htmlspecialchars($classGroupData['hero_image']); ?>" 
                                         alt="RKTuition Coaching for <?php echo htmlspecialchars($classGroupData['grade_range']); ?>" 
                                         class="w-full h-full object-cover"
                                         onerror="this.onerror=null; this.src='<?php echo htmlspecialchars($classGroupData['hero_fallback']); ?>';">
                                </div>
                                <div class="p-5 bg-slate-900/95 border-t border-slate-800 flex items-center justify-between">
                                    <div>
                                        <span class="text-xs uppercase tracking-wider text-slate-400 font-semibold block">Curriculum Alignment</span>
                                        <span class="text-sm font-bold text-white"><?php echo htmlspecialchars($classGroupData['curriculum_tag']); ?></span>
                                    </div>
                                    <span class="px-3 py-1 rounded-full text-xs font-bold bg-brand-gold/15 text-brand-gold border border-brand-gold/30">
                                        Active Batches
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>


        <!-- ===================================================================
             SECTION 2: CHOOSE YOUR CLASS
             =================================================================== -->
        <section id="choose-class" class="py-16 lg:py-24 bg-slate-900/40 border-b border-slate-800/80 scroll-mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="text-brand-gold text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-md bg-brand-gold/10 border border-brand-gold/20 inline-block mb-3">
                        Grade Selection
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Choose Your Class
                    </h2>
                    <p class="mt-3 text-base text-slate-300">
                        Select a specific grade below to view its tailored syllabus topics, study goals, and learning plans.
                    </p>
                </div>

                <!-- Interactive Grade Cards Selector -->
                <div class="grid grid-cols-1 sm:grid-cols-2 <?php echo count($classGroupData['grades']) === 3 ? 'lg:grid-cols-3' : 'lg:grid-cols-2 max-w-3xl mx-auto'; ?> gap-6" role="tablist" aria-label="Class Selector">
                    <?php foreach ($classGroupData['grades'] as $idx => $grd): 
                        $isFirst = ($idx === 0);
                    ?>
                        <button type="button" 
                                role="tab" 
                                aria-selected="<?php echo $isFirst ? 'true' : 'false'; ?>" 
                                class="grade-select-btn text-left p-6 rounded-2xl border transition-all duration-300 relative group focus:outline-none focus:ring-2 focus:ring-brand-gold <?php echo $isFirst ? 'bg-slate-800 border-brand-gold text-white shadow-lg' : 'bg-slate-900 border-slate-800 text-slate-300 hover:border-slate-700'; ?>"
                                data-grade-id="<?php echo htmlspecialchars($grd['id']); ?>">
                            
                            <div class="flex items-center justify-between mb-4">
                                <span class="w-12 h-12 rounded-xl bg-slate-950 border border-slate-800 flex items-center justify-center font-extrabold text-xl text-brand-gold group-hover:border-brand-gold transition-colors">
                                    <?php echo htmlspecialchars($grd['num']); ?>
                                </span>
                                <span class="grade-indicator text-xs font-bold text-brand-gold flex items-center gap-1.5 transition-opacity <?php echo $isFirst ? '' : 'opacity-0'; ?>">
                                    <span class="w-2 h-2 rounded-full bg-brand-gold"></span>
                                    <span>Selected</span>
                                </span>
                            </div>

                            <h3 class="text-xl font-bold text-white mb-1"><?php echo htmlspecialchars($grd['label']); ?></h3>
                            <p class="text-xs text-slate-400 leading-relaxed"><?php echo htmlspecialchars($grd['sub']); ?></p>

                            <div class="mt-4 pt-3 border-t border-slate-800/80 flex items-center justify-between text-xs text-slate-400">
                                <span>View Class Syllabus</span>
                                <svg class="w-4 h-4 text-brand-gold" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/></svg>
                            </div>
                        </button>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>


        <!-- ===================================================================
             SECTION 3: EXPLORE SUBJECTS
             =================================================================== -->
        <section id="subjects-section" class="py-20 lg:py-28 border-b border-slate-800/80 scroll-mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="text-brand-gold text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-md bg-brand-gold/10 border border-brand-gold/20 inline-block mb-3">
                        Curriculum Subjects
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Explore Subjects for <?php echo htmlspecialchars($classGroupData['grade_range']); ?>
                    </h2>
                    <p class="mt-3 text-base text-slate-300">
                        In-depth coaching across core academic subjects, focusing on analytical reasoning, derivations, and problem solving.
                    </p>
                </div>

                <!-- Subject Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 <?php echo count($classGroupData['subjects']) > 4 ? 'lg:grid-cols-3' : 'lg:grid-cols-4'; ?> gap-6">
                    <?php foreach ($classGroupData['subjects'] as $subj): ?>
                        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 flex flex-col justify-between hover:border-brand-gold/40 hover:shadow-xl transition-all duration-300 group">
                            <div>
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-xs font-semibold px-2.5 py-1 rounded-md bg-brand-gold/10 text-brand-gold border border-brand-gold/20">
                                        <?php echo htmlspecialchars($subj['tag']); ?>
                                    </span>
                                    <span class="text-[10px] font-semibold text-slate-400 bg-slate-800 px-2 py-0.5 rounded">
                                        <?php echo htmlspecialchars($subj['status']); ?>
                                    </span>
                                </div>

                                <h3 class="text-xl font-bold text-white group-hover:text-brand-gold transition-colors mb-2">
                                    <?php echo htmlspecialchars($subj['name']); ?>
                                </h3>

                                <p class="text-xs text-slate-300 leading-relaxed mb-4">
                                    <?php echo htmlspecialchars($subj['description']); ?>
                                </p>

                                <div class="p-3 rounded-xl bg-slate-800/60 border border-slate-700/60 mb-4">
                                    <span class="text-[10px] uppercase font-bold text-slate-400 block mb-1">Key Focus</span>
                                    <p class="text-xs text-slate-200"><?php echo htmlspecialchars($subj['focus']); ?></p>
                                </div>
                            </div>

                            <div class="pt-4 border-t border-slate-800 flex items-center justify-between">
                                <a href="#syllabus-section" class="text-xs font-bold text-brand-gold hover:text-amber-300 inline-flex items-center gap-1 transition-colors">
                                    <span>Explore Topics</span>
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/></svg>
                                </a>
                                <a href="../pages/admission.php" class="text-[11px] text-slate-400 hover:text-white transition-colors">Get Admission</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>


        <!-- ===================================================================
             SECTION 4: SYLLABUS AND LEARNING TOPICS
             =================================================================== -->
        <section id="syllabus-section" class="py-20 lg:py-28 bg-slate-900/40 border-b border-slate-800/80 scroll-mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="text-brand-gold text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-md bg-brand-gold/10 border border-brand-gold/20 inline-block mb-3">
                        Structured Topics
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Syllabus &amp; Learning Topics
                    </h2>
                    <p class="mt-3 text-base text-slate-300">
                        Filter chapters and subtopics for your selected class and subject.
                    </p>
                </div>

                <!-- Subject Filter Pills -->
                <div class="flex flex-wrap items-center justify-center gap-2 mb-10">
                    <button type="button" 
                            class="syllabus-subject-pill px-4 py-2 rounded-xl text-xs font-bold border transition-all duration-200 bg-brand-gold text-slate-950 border-brand-gold" 
                            data-subject="all" 
                            aria-pressed="true">
                        All Subjects
                    </button>
                    <?php foreach ($classGroupData['subjects'] as $subj): ?>
                        <button type="button" 
                                class="syllabus-subject-pill px-4 py-2 rounded-xl text-xs font-semibold border transition-all duration-200 bg-slate-900 text-slate-400 border-slate-800 hover:text-white hover:border-slate-700" 
                                data-subject="<?php echo htmlspecialchars($subj['id']); ?>" 
                                aria-pressed="false">
                            <?php echo htmlspecialchars($subj['name']); ?>
                        </button>
                    <?php endforeach; ?>
                </div>

                <!-- Dynamic Chapters Container (Updated via class_page.js) -->
                <div id="syllabus-chapters-container" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Initial Server Rendered Chapters for Class 1 of this group -->
                    <?php 
                    $firstGradeKey = $classGroupData['grades'][0]['id'];
                    $initialSyllabus = $classGroupData['syllabus'][$firstGradeKey] ?? [];
                    $allInitChapters = [];
                    foreach ($initialSyllabus as $sKey => $chList) {
                        foreach ($chList as $ch) {
                            $allInitChapters[] = $ch;
                        }
                    }
                    foreach ($allInitChapters as $ch):
                    ?>
                        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 hover:border-slate-700 transition-all duration-300 shadow-md">
                            <div class="flex flex-wrap items-center justify-between gap-2 mb-3">
                                <span class="text-[11px] font-bold uppercase tracking-wider text-brand-gold bg-brand-gold/10 px-2.5 py-1 rounded-md border border-brand-gold/20">
                                    <?php echo htmlspecialchars($ch['category'] ?? 'Topic'); ?>
                                </span>
                                <div class="flex items-center gap-2">
                                    <span class="text-[11px] text-slate-400 font-medium px-2 py-0.5 rounded bg-slate-800">
                                        <?php echo htmlspecialchars($ch['duration'] ?? '2-3 Weeks'); ?>
                                    </span>
                                    <span class="text-[11px] font-semibold text-emerald-400 bg-emerald-500/10 px-2 py-0.5 rounded border border-emerald-500/20">
                                        <?php echo htmlspecialchars($ch['status'] ?? 'Active Term'); ?>
                                    </span>
                                </div>
                            </div>
                            <h3 class="text-lg font-bold text-white mb-3"><?php echo htmlspecialchars($ch['title']); ?></h3>
                            <div class="pt-3 border-t border-slate-800/80">
                                <span class="text-[11px] uppercase tracking-wider font-semibold text-slate-400 block mb-2">Core Concepts Covered:</span>
                                <ul class="space-y-1.5">
                                    <?php foreach ($ch['topics'] as $t): ?>
                                        <li class="flex items-center gap-2 text-xs text-slate-300">
                                            <svg class="w-3.5 h-3.5 text-brand-gold shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg>
                                            <span><?php echo htmlspecialchars($t); ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Empty State -->
                <div id="syllabus-empty-state" class="hidden text-center p-12 bg-slate-900 border border-slate-800 rounded-2xl max-w-xl mx-auto">
                    <p class="text-sm text-slate-300 font-semibold">No syllabus topics found for this selection.</p>
                    <p class="text-xs text-slate-500 mt-1">Please select another subject or contact us for customized curriculum details.</p>
                </div>

            </div>
        </section>


        <!-- ===================================================================
             SECTION 5: LEARNING RESOURCES
             =================================================================== -->
        <section id="resources-section" class="py-20 lg:py-28 border-b border-slate-800/80 scroll-mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="text-brand-gold text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-md bg-brand-gold/10 border border-brand-gold/20 inline-block mb-3">
                        Resource Library
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Learning Resources &amp; Notes
                    </h2>
                    <p class="mt-3 text-base text-slate-300">
                        High-yield study materials provided to enrolled students to support classroom learning and independent revision.
                    </p>
                </div>

                <!-- Resource Category Filters -->
                <div class="flex flex-wrap items-center justify-center gap-2 mb-10">
                    <button type="button" class="resource-filter-pill px-4 py-2 rounded-xl text-xs font-bold border transition-all duration-200 bg-brand-gold text-slate-950 border-brand-gold" data-filter="all" aria-pressed="true">
                        All Materials
                    </button>
                    <button type="button" class="resource-filter-pill px-4 py-2 rounded-xl text-xs font-semibold border transition-all duration-200 bg-slate-900 text-slate-400 border-slate-800 hover:text-white" data-filter="Formula Sheet" aria-pressed="false">
                        Formula Sheets
                    </button>
                    <button type="button" class="resource-filter-pill px-4 py-2 rounded-xl text-xs font-semibold border transition-all duration-200 bg-slate-900 text-slate-400 border-slate-800 hover:text-white" data-filter="Chapter Notes" aria-pressed="false">
                        Chapter Notes
                    </button>
                    <button type="button" class="resource-filter-pill px-4 py-2 rounded-xl text-xs font-semibold border transition-all duration-200 bg-slate-900 text-slate-400 border-slate-800 hover:text-white" data-filter="Worksheet" aria-pressed="false">
                        Worksheets
                    </button>
                    <button type="button" class="resource-filter-pill px-4 py-2 rounded-xl text-xs font-semibold border transition-all duration-200 bg-slate-900 text-slate-400 border-slate-800 hover:text-white" data-filter="Question Bank" aria-pressed="false">
                        Question Banks
                    </button>
                </div>

                <!-- Resource Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <?php foreach ($classGroupData['resources'] as $res): ?>
                        <div class="resource-card bg-slate-900 border border-slate-800 rounded-2xl p-6 flex flex-col justify-between hover:border-slate-700 transition-all duration-300 shadow-md" data-type="<?php echo htmlspecialchars($res['type']); ?>">
                            <div>
                                <div class="flex items-center justify-between mb-3">
                                    <span class="text-[11px] font-bold uppercase tracking-wider text-brand-gold bg-brand-gold/10 px-2.5 py-1 rounded-md border border-brand-gold/20">
                                        <?php echo htmlspecialchars($res['type']); ?>
                                    </span>
                                    <span class="text-xs text-slate-400 font-medium">
                                        <?php echo htmlspecialchars($res['subject']); ?>
                                    </span>
                                </div>

                                <h3 class="text-base font-bold text-white mb-2">
                                    <?php echo htmlspecialchars($res['title']); ?>
                                </h3>

                                <p class="text-xs text-slate-300 leading-relaxed mb-4">
                                    <?php echo htmlspecialchars($res['desc']); ?>
                                </p>
                            </div>

                            <div class="pt-4 border-t border-slate-800 flex items-center justify-between text-xs text-slate-400">
                                <span class="italic"><?php echo htmlspecialchars($res['status']); ?></span>
                                <a href="#admission-cta" class="text-brand-gold hover:text-amber-300 font-bold transition-colors">Inquire Access</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div id="resources-empty-state" class="hidden text-center p-12 bg-slate-900 border border-slate-800 rounded-2xl max-w-xl mx-auto mt-6">
                    <p class="text-sm text-slate-300 font-semibold">No materials found in this category.</p>
                </div>

            </div>
        </section>


        <!-- ===================================================================
             SECTION 6: PRACTICE AND SELF-ASSESSMENT (INTERACTIVE QUIZ)
             =================================================================== -->
        <section id="quiz-section" class="py-20 lg:py-28 bg-slate-900/40 border-b border-slate-800/80 scroll-mt-20">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="text-brand-gold text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-md bg-brand-gold/10 border border-brand-gold/20 inline-block mb-3">
                        Knowledge Check
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Practice &amp; Self-Assessment
                    </h2>
                    <p class="mt-3 text-base text-slate-300">
                        Test your conceptual grasp with instant feedback. Practice questions are designed for self-evaluation and reinforcement.
                    </p>
                </div>

                <!-- Interactive Quiz Container -->
                <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 sm:p-10 shadow-2xl relative">
                    
                    <!-- Quiz Top Meta -->
                    <div class="flex flex-wrap items-center justify-between gap-4 pb-6 border-b border-slate-800">
                        <div class="flex items-center gap-3">
                            <span id="quiz-subject-badge" class="px-3 py-1 rounded-full text-xs font-bold bg-brand-gold/15 text-brand-gold border border-brand-gold/30">
                                Subject
                            </span>
                            <span id="quiz-counter" class="text-xs font-semibold text-slate-400">
                                Question 1 of 5
                            </span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span id="quiz-live-score" class="text-xs font-bold text-brand-gold bg-slate-800 px-3 py-1 rounded-md border border-slate-700">
                                Score: 0
                            </span>
                            <button type="button" id="quiz-reset-btn" class="text-xs text-slate-400 hover:text-white transition-colors underline">
                                Reset Quiz
                            </button>
                        </div>
                    </div>

                    <!-- Question Text -->
                    <div class="py-6">
                        <h3 id="quiz-question-text" class="text-lg sm:text-xl font-bold text-white leading-relaxed">
                            Loading question...
                        </h3>
                    </div>

                    <!-- Options Container (Populated by class_page.js) -->
                    <div id="quiz-options-container" class="space-y-3">
                        <!-- Options generated here -->
                    </div>

                    <!-- Feedback Box -->
                    <div id="quiz-feedback-box" class="hidden mt-6 p-4 rounded-xl bg-slate-800/80 border border-slate-700 text-xs sm:text-sm text-slate-200">
                        <p id="quiz-feedback-text"></p>
                    </div>

                    <!-- Next Question Action -->
                    <div class="mt-6 pt-4 border-t border-slate-800 flex justify-end">
                        <button type="button" 
                                id="quiz-next-btn" 
                                class="hidden px-6 py-2.5 rounded-xl bg-brand-gold text-slate-950 font-bold text-sm hover:bg-amber-300 transition-colors shadow-md">
                            Next Question
                        </button>
                    </div>

                    <!-- Disclaimer -->
                    <p class="mt-4 text-[11px] text-center text-slate-500 italic">
                        Note: This is an interactive conceptual practice activity to encourage self-review, not an official examination or predictor of grades.
                    </p>
                </div>

            </div>
        </section>


        <!-- ===================================================================
             SECTION 7: TEACHING APPROACH
             =================================================================== -->
        <section id="teaching-approach" class="py-20 lg:py-28 border-b border-slate-800/80 scroll-mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="text-brand-gold text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-md bg-brand-gold/10 border border-brand-gold/20 inline-block mb-3">
                        Our Approach
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Teaching Methodology for <?php echo htmlspecialchars($classGroupData['grade_range']); ?>
                    </h2>
                    <p class="mt-3 text-base text-slate-300">
                        A structured 5-step learning workflow engineered to foster deep understanding, problem-solving independence, and confidence.
                    </p>
                </div>

                <!-- 5-Step Process Timeline -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                    <?php 
                    $steps = [
                        ['num' => '01', 'title' => 'Understand Concept', 'desc' => 'Deconstructing theorems and definitions into logical, intuitive parts.'],
                        ['num' => '02', 'title' => 'Study Examples', 'desc' => 'Guided walkthroughs of standard problem models and mathematical derivations.'],
                        ['num' => '03', 'title' => 'Practise Alone', 'desc' => 'Students solve varied exercises independently to build practical fluency.'],
                        ['num' => '04', 'title' => 'Resolve Doubts', 'desc' => 'Immediate, patient resolution of lingering misconceptions without hesitation.'],
                        ['num' => '05', 'title' => 'Revise & Review', 'desc' => 'Periodic recall drills, summary sheets, and formative milestone assessments.'],
                    ];
                    foreach ($steps as $st):
                    ?>
                        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 relative hover:border-brand-gold/40 transition-all duration-300 flex flex-col justify-between">
                            <div>
                                <span class="text-2xl font-black text-brand-gold font-mono block mb-3">
                                    <?php echo $st['num']; ?>
                                </span>
                                <h3 class="text-lg font-bold text-white mb-2"><?php echo $st['title']; ?></h3>
                                <p class="text-xs text-slate-300 leading-relaxed"><?php echo $st['desc']; ?></p>
                            </div>
                            <div class="mt-6 pt-3 border-t border-slate-800/80 text-[10px] text-slate-400 flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-brand-gold"></span>
                                <span>Phase <?php echo $st['num']; ?> of 05</span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>


        <!-- ===================================================================
             SECTION 8: STUDY PLANNER AND LEARNING PROGRESS
             =================================================================== -->
        <section id="study-planner" class="py-20 lg:py-28 bg-slate-900/40 border-b border-slate-800/80 scroll-mt-20">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="text-brand-gold text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-md bg-brand-gold/10 border border-brand-gold/20 inline-block mb-3">
                        Self-Study Planner
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Interactive Study Planner
                    </h2>
                    <p class="mt-3 text-base text-slate-300">
                        Set chapter goals, track completion progress, and maintain a disciplined study routine. Data is saved in your browser.
                    </p>
                </div>

                <!-- Planner Box -->
                <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 sm:p-8 shadow-2xl">
                    
                    <!-- Progress Bar Header -->
                    <div class="mb-6 p-4 rounded-2xl bg-slate-950 border border-slate-800">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs uppercase font-bold text-slate-400">Study Progress</span>
                            <span id="planner-progress-label" class="text-sm font-bold text-brand-gold">0%</span>
                        </div>
                        <div class="w-full h-2.5 rounded-full bg-slate-800 overflow-hidden">
                            <div id="planner-progress-bar" class="h-full bg-gradient-to-r from-amber-400 to-brand-gold rounded-full transition-all duration-300" style="width: 0%;"></div>
                        </div>
                        <div class="flex items-center justify-between mt-2 text-[11px] text-slate-400">
                            <span id="planner-count-label">0 of 0 tasks completed</span>
                            <span class="italic">Saved locally</span>
                        </div>
                    </div>

                    <!-- Add Task Input Row -->
                    <div class="flex flex-col sm:flex-row gap-3 mb-6">
                        <div class="sm:w-1/3">
                            <select id="planner-subject-select" class="w-full px-4 py-3 rounded-xl bg-slate-800 border border-slate-700 text-xs font-semibold text-slate-200 focus:outline-none focus:ring-2 focus:ring-brand-gold">
                                <?php foreach ($classGroupData['subjects'] as $s): ?>
                                    <option value="<?php echo htmlspecialchars($s['name']); ?>"><?php echo htmlspecialchars($s['name']); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="flex-grow">
                            <input type="text" 
                                   id="planner-task-input" 
                                   placeholder="Add a new chapter or revision goal (e.g. Revise Chapter 2 formulas)..." 
                                   class="w-full px-4 py-3 rounded-xl bg-slate-800 border border-slate-700 text-xs text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-gold">
                        </div>
                        <div>
                            <button type="button" 
                                    id="planner-add-btn" 
                                    class="w-full sm:w-auto px-6 py-3 rounded-xl bg-brand-gold text-slate-950 font-bold text-xs hover:bg-amber-300 transition-colors shadow-md">
                                Add Task
                            </button>
                        </div>
                    </div>

                    <!-- Tasks List Container (Populated by class_page.js) -->
                    <div id="planner-tasks-list" class="space-y-2.5">
                        <!-- Tasks rendered here -->
                    </div>

                    <!-- Planner Footer -->
                    <div class="mt-6 pt-4 border-t border-slate-800 flex items-center justify-between text-xs text-slate-500">
                        <span>Data is stored privately in your browser local storage.</span>
                        <button type="button" id="planner-clear-btn" class="text-slate-400 hover:text-rose-400 transition-colors">
                            Clear All
                        </button>
                    </div>

                </div>

            </div>
        </section>


        <!-- ===================================================================
             SECTION 9: FREQUENTLY ASKED QUESTIONS
             =================================================================== -->
        <section id="faqs-section" class="py-20 lg:py-28 border-b border-slate-800/80 scroll-mt-20">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center mb-12">
                    <span class="text-brand-gold text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-md bg-brand-gold/10 border border-brand-gold/20 inline-block mb-3">
                        Common Queries
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Frequently Asked Questions
                    </h2>
                    <p class="mt-3 text-base text-slate-300">
                        Clear answers regarding batch timings, board alignment, doubt resolution, and study resources.
                    </p>
                </div>

                <!-- FAQ Accordion (Reuses main.js initFaqAccordion) -->
                <div class="space-y-3.5">
                    <?php foreach ($classGroupData['faqs'] as $idx => $faq): 
                        $btnId   = "faq-btn-" . $classGroupData['key'] . "-" . $idx;
                        $panelId = "faq-panel-" . $classGroupData['key'] . "-" . $idx;
                    ?>
                        <div class="bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden transition-colors">
                            <h3>
                                <button type="button" 
                                        id="<?php echo $btnId; ?>" 
                                        class="faq-toggle w-full px-6 py-4 text-left flex items-center justify-between gap-4 focus:outline-none focus:ring-2 focus:ring-brand-gold/60 focus:ring-inset" 
                                        aria-expanded="false" 
                                        aria-controls="<?php echo $panelId; ?>">
                                    <span class="text-sm sm:text-base font-semibold text-white hover:text-brand-gold transition-colors">
                                        <?php echo htmlspecialchars($faq['q']); ?>
                                    </span>
                                    <svg class="faq-icon w-5 h-5 text-slate-400 shrink-0 transition-transform duration-200" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/>
                                    </svg>
                                </button>
                            </h3>
                            <div id="<?php echo $panelId; ?>" 
                                 class="hidden px-6 pb-5 pt-1 text-xs sm:text-sm text-slate-300 leading-relaxed border-t border-slate-800/80" 
                                 role="region" 
                                 aria-labelledby="<?php echo $btnId; ?>">
                                <?php echo htmlspecialchars($faq['a']); ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>


        <!-- ===================================================================
             SECTION 10: PREMIUM ADMISSION CTA
             =================================================================== -->
        <section id="admission-cta" class="py-20 lg:py-28 relative overflow-hidden scroll-mt-20">
            <!-- Background Gradients -->
            <div class="absolute inset-0 bg-gradient-to-b from-brand-navy via-slate-900 to-slate-950 pointer-events-none"></div>
            <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-[700px] h-[350px] bg-brand-gold/10 blur-[130px] rounded-full pointer-events-none" aria-hidden="true"></div>

            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
                
                <div class="p-8 sm:p-12 lg:p-16 rounded-3xl bg-slate-900/90 border border-slate-800 shadow-2xl relative">
                    <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-brand-gold/10 border border-brand-gold/30 text-brand-gold text-xs font-bold uppercase tracking-wider mb-6">
                        <span class="w-2 h-2 rounded-full bg-brand-gold"></span>
                        <span>Enrollment Open for <?php echo htmlspecialchars($classGroupData['grade_range']); ?></span>
                    </span>

                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight leading-tight max-w-3xl mx-auto">
                        <?php echo htmlspecialchars($classGroupData['cta_headline']); ?>
                    </h2>

                    <p class="mt-5 text-base sm:text-lg text-slate-300 max-w-2xl mx-auto leading-relaxed">
                        <?php echo htmlspecialchars($classGroupData['cta_sub']); ?>
                    </p>

                    <!-- CTAs -->
                    <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4">
                        <a href="../pages/admission.php" 
                           class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-8 py-4 text-base font-bold text-slate-950 bg-gradient-to-r from-amber-400 via-brand-gold to-amber-500 hover:from-amber-300 hover:to-amber-400 rounded-xl shadow-lg shadow-amber-500/20 hover:shadow-xl hover:shadow-amber-500/30 transition-all duration-200 transform hover:-translate-y-0.5 active:translate-y-0 focus:outline-none focus:ring-2 focus:ring-brand-gold focus:ring-offset-2 focus:ring-offset-brand-navy">
                            <span>Get Admission</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>

                        <a href="tel:+919153832633" 
                           class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-4 text-base font-semibold text-slate-200 hover:text-white bg-slate-800 hover:bg-slate-700/80 border border-slate-700 rounded-xl transition-all duration-200">
                            <svg class="w-5 h-5 text-brand-gold" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"/></svg>
                            <span>Contact RKTuition Directly</span>
                        </a>
                    </div>

                    <!-- Notice -->
                    <div class="mt-8 pt-6 border-t border-slate-800 flex flex-col sm:flex-row items-center justify-center gap-4 text-xs text-slate-400">
                        <span>No obligation preliminary consultation</span>
                        <span class="hidden sm:inline text-slate-700">&bull;</span>
                        <span>Small batch size for focused attention</span>
                    </div>

                </div>

            </div>
        </section>

    </main>

    <!-- SHARED REUSABLE COMPONENT: FOOTER -->
    <?php require_once __DIR__ . '/footer.php'; ?>

    <!-- Main JavaScript & Class Interactive Logic -->
    <script src="../js/main.js"></script>
    <script src="../js/class_page.js"></script>
</body>
</html>
