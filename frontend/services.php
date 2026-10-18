<?php
/**
 * RKTuition - Services Page (services.php)
 *
 * Premium, professional educational services page featuring exactly 10 comprehensive sections.
 * Configured with Core PHP, Tailwind CSS v3, and Vanilla JavaScript.
 */

// Navigation and Path Configuration
$currentPage = 'services';
$basePath    = './';

// Navigation URL mappings for this page
$navUrls = [
    'home'      => './index.php',
    'services'  => './services.php',
    'class'     => './classes/sixthToeight.php',
    'notes'     => './notes/index.php',
    'contact'   => './pages/admission.php#contact-guidance',
    'login'     => './pages/login.php',
    'admission' => './pages/admission.php',
];

// =============================================================================
// CONFIGURABLE SERVICES DATA & PLACEHOLDERS
// (Easily customize service offerings, subjects, and batch details)
// =============================================================================

$siteInfo = [
    'brand_name'         => 'RKTuition',
    'tutor_name'         => '[Enter Your Name / R.K.]',
    'email_placeholder'  => 'rupasingh10456@gmail.com',
    'phone_placeholder'  => '+91 9153832633',
    'address_placeholder'=> 'Shree Sidhivinayak Meera , Aeronest society , Pune - 411001',
];

// Section 2: Core Educational Services (6 Cards)
$coreServices = [
    [
        'id'          => 'one-to-one',
        'title'       => 'One-to-One Tuition',
        'badge'       => 'Individual Mentorship',
        'description' => 'Dedicated personalized sessions tailored exclusively to your child\'s learning speed, syllabus gaps, and specific academic goals.',
        'features'    => ['100% individual mentor focus', 'Customized learning pace', 'Immediate doubt clarification', 'Targeted homework assistance'],
        'icon'        => 'user'
    ],
    [
        'id'          => 'small-group',
        'title'       => 'Small Group Classes',
        'badge'       => 'Collaborative Learning',
        'description' => 'Focused mini-batches (4 to 8 students) fostering interactive peer discussions, structured competitive spirit, and collaborative problem-solving.',
        'features'    => ['Small, disciplined batch size', 'Interactive group discussions', 'Healthy peer motivation', 'Balanced individual attention'],
        'icon'        => 'user-group'
    ],
    [
        'id'          => 'subject-wise',
        'title'       => 'Subject-Wise Coaching',
        'badge'       => 'Specialized Focus',
        'description' => 'Targeted coaching for students who require dedicated conceptual strengthening in specific subjects such as Mathematics or Science.',
        'features'    => ['Deep conceptual breakdowns', 'Formula & theorem drills', 'Chapter-wise focus areas', 'Regular diagnostic reviews'],
        'icon'        => 'academic-cap'
    ],
    [
        'id'          => 'online-tuition',
        'title'       => 'Online Tuition',
        'badge'       => 'Flexible & Remote',
        'description' => 'Interactive live digital classes conducted with virtual whiteboards, screen demonstrations, digital notes, and flexible home schedules.',
        'features'    => ['Live interactive whiteboard', 'Convenient home study', 'Digital revision summaries', 'Recorded recap access (optional)'],
        'icon'        => 'device-laptop'
    ],
    [
        'id'          => 'offline-tuition',
        'title'       => 'Offline Tuition',
        'badge'       => 'In-Person Guidance',
        'description' => 'Traditional, disciplined classroom environment providing direct in-person mentorship, paper-and-pen practice, and distraction-free study.',
        'features'    => ['Face-to-face personal guidance', 'Supervised written practice', 'Distraction-free environment', 'Direct parent consultations'],
        'icon'        => 'building-library'
    ],
    [
        'id'          => 'homework-support',
        'title'       => 'Homework & Academic Support',
        'badge'       => 'Daily Consistency',
        'description' => 'Structured support for school assignments, lab record preparation, project guidance, and reinforcement of daily school topics.',
        'features'    => ['School assignment guidance', 'Daily concept reinforcement', 'Reduced homework stress', 'Consistent study discipline'],
        'icon'        => 'clipboard-check'
    ]
];

// Section 4: Subject-Wise Support Cards
$serviceSubjects = [
    [
        'name'        => 'Mathematics',
        'levels'      => '[Class 6th to 10th / Configurable]',
        'description' => 'Bridging mathematical gaps from foundational arithmetic to advanced algebra, geometry proofs, and trigonometry with step-by-step logic.',
        'topics'      => ['Algebra & Linear Equations', 'Geometry & Theorem Proofs', 'Mensuration & Trigonometry', 'Arithmetic Precision & Speed'],
        'accent'      => 'text-amber-400 border-amber-500/30'
    ],
    [
        'name'        => 'Science',
        'levels'      => '[Class 6th to 10th / Configurable]',
        'description' => 'Unfolding the principles of Physics, Chemistry, and Biology through visual diagrams, real-world examples, and foundational scientific inquiry.',
        'topics'      => ['Physics Laws & Mechanics', 'Chemical Equations & Matter', 'Biological Systems & Processes', 'Practical Scientific Thinking'],
        'accent'      => 'text-sky-400 border-sky-500/30'
    ],
    [
        'name'        => 'English',
        'levels'      => '[Class 6th to 10th / Configurable]',
        'description' => 'Mastering grammar conventions, reading comprehension strategies, structured writing (essays, letters), and expressive articulation.',
        'topics'      => ['Grammar Rules & Syntax', 'Comprehension Analysis', 'Formal & Creative Writing', 'Vocabulary & Pronunciation'],
        'accent'      => 'text-emerald-400 border-emerald-500/30'
    ],
    [
        'name'        => 'Hindi',
        'levels'      => '[Class 6th to 10th / Configurable]',
        'description' => 'Strengthening Hindi Vyakaran, formal writing, prose understanding, and poetry analysis with proper linguistic clarity.',
        'topics'      => ['Vyakaran Fundamentals', 'Nibandh & Patra Lekhan', 'Prose & Poetry Appreciation', 'Spelling & Vocabulary Accuracy'],
        'accent'      => 'text-orange-400 border-orange-500/30'
    ],
    [
        'name'        => 'Social Studies',
        'levels'      => '[Class 6th to 10th / Configurable]',
        'description' => 'Connecting historical events, geographical phenomena, and civic institutions into cohesive, engaging narratives and structured mindmaps.',
        'topics'      => ['Historical Timelines & Context', 'Map Reading & Geography', 'Civics & Democratic Rights', 'Foundations of Economics'],
        'accent'      => 'text-indigo-400 border-indigo-500/30'
    ],
    [
        'name'        => 'Computer Studies',
        'levels'      => '[Class 6th to 10th / Configurable]',
        'description' => 'Demystifying computing fundamentals, algorithmic flowcharts, logical reasoning, and introductory coding languages.',
        'topics'      => ['Computer Architecture & OS', 'Algorithm & Flowchart Logic', 'Introductory Programming Syntax', 'Safe Digital Practices'],
        'accent'      => 'text-purple-400 border-purple-500/30'
    ]
];

// Section 5: Academic Levels
$academicLevels = [
    [
        'title'       => 'Middle School Foundation',
        'classes'     => 'Classes 6, 7 & 8',
        'curriculum'  => '[CBSE / ICSE / State Board - Configurable]',
        'subtitle'    => 'Building Curiosity & Strong Conceptual Basics',
        'description' => 'Focused on helping students transition from basic elementary learning into structured subject comprehension without academic fear.',
        'features'    => [
            'Strengthening core Math & Science foundations',
            'Cultivating independent reading & homework habits',
            'Gentle, encouraging doubt-clearing sessions',
            'Developing organized study and note-taking routines'
        ]
    ],
    [
        'title'       => 'Secondary Board Preparation',
        'classes'     => 'Classes 9 & 10',
        'curriculum'  => '[CBSE / ICSE / State Board - Configurable]',
        'subtitle'    => 'Board Exam Alignment & Analytical Mastery',
        'description' => 'Pivotal board years requiring textbook mastery, analytical problem-solving, structured answer writing, and consistent practice.',
        'features'    => [
            'Comprehensive NCERT and prescribed syllabus coverage',
            'Step-by-step problem-solving and presentation skills',
            'Chapter-wise mock test papers and error analysis',
            'Strategic revision cycles before school evaluations'
        ]
    ],
    [
        'title'       => 'Senior / Specialized Guidance',
        'classes'     => 'Classes 11 & 12 / Tailored Batches',
        'curriculum'  => '[Specify Stream / Curriculum - Configurable]',
        'subtitle'    => 'Advanced Topic Breakdown & Academic Focus',
        'description' => 'Dedicated guidance for higher secondary subjects or specialized foundation topics, customized to individual learning schedules.',
        'features'    => [
            'Detailed derivations and theorem explanations',
            'Targeted problem sets for difficult chapters',
            'One-on-one milestone tracking and feedback',
            'Disciplined prep for school tests & board exams'
        ]
    ]
];

// Section 6: Methodology (5 Stages)
$methodologyStages = [
    [
        'step'        => '01',
        'name'        => 'Understand',
        'subtitle'    => 'Needs Assessment',
        'description' => 'We begin by identifying the student\'s baseline knowledge, individual learning style, and specific academic goals to tailor the coaching roadmap.'
    ],
    [
        'step'        => '02',
        'name'        => 'Explain',
        'subtitle'    => 'Concept Clarity',
        'description' => 'Breaking complex concepts into logical, bite-sized components using real-life analogies, visual sketches, and interactive dialogue.'
    ],
    [
        'step'        => '03',
        'name'        => 'Practice',
        'subtitle'    => 'Guided Application',
        'description' => 'Students solve problem sets with step-by-step guidance, learning correct methodologies, formula applications, and avoiding common pitfalls.'
    ],
    [
        'step'        => '04',
        'name'        => 'Revise',
        'subtitle'    => 'Active Retention',
        'description' => 'Regular recall drills, summary flashcards, and dedicated doubt-clearing windows to reinforce long-term memory and eliminate lingering confusion.'
    ],
    [
        'step'        => '05',
        'name'        => 'Review',
        'subtitle'    => 'Progress Check',
        'description' => 'Formative periodic evaluations reveal true understanding and highlight specific areas for targeted reinforcement, ensuring steady growth.'
    ]
];

// Section 8: Study Materials Cards (6 Cards)
$materialsList = [
    [
        'title'       => 'Curated Chapter Notes',
        'tag'         => 'Concept Summaries',
        'description' => 'Concise, high-yield chapter notes covering essential definitions, core principles, formulas, and visual diagrams.'
    ],
    [
        'title'       => 'Chapter Summaries & Mindmaps',
        'tag'         => 'Quick Revision',
        'description' => 'One-page overview sheets and structured concept mindmaps designed for rapid review before school tests and exams.'
    ],
    [
        'title'       => 'Graded Practice Worksheets',
        'tag'         => 'Self-Practice',
        'description' => 'Level-based exercise sheets moving systematically from foundational questions to challenging analytical problems.'
    ],
    [
        'title'       => 'Formula & Law Reference Sheets',
        'tag'         => 'Quick Reference',
        'description' => 'Compiled lists of mathematical formulas, scientific laws, units, and chemical equations for handy daily reference.'
    ],
    [
        'title'       => 'Question Practice Sets',
        'tag'         => 'Exam Orientation',
        'description' => 'Collections of high-frequency question patterns, common calculation pitfalls, and structured answer models.'
    ],
    [
        'title'       => 'Learning Guides & Study Planners',
        'tag'         => 'Routine Building',
        'description' => 'Actionable revision calendars and self-study templates to help students manage school homework and tuition revision.'
    ]
];

// Section 9: FAQ Items
$serviceFaqs = [
    [
        'q' => 'Which subjects are currently available for tuition?',
        'a' => 'We currently offer comprehensive coaching in Mathematics, Science, and other core school subjects for Classes 6th through 10th. Subject combinations and batch availability can be customized based on student requirements.'
    ],
    [
        'q' => 'Which classes or grade levels do you support?',
        'a' => 'We primarily support middle school (Classes 6 to 8) and secondary school (Classes 9 and 10), with specialized batches available for senior secondary topics upon consultation.'
    ],
    [
        'q' => 'Are both online and offline classes available?',
        'a' => 'Yes. Depending on your location and preference, we offer both in-person offline batches and live interactive online sessions equipped with virtual whiteboards.'
    ],
    [
        'q' => 'How can I enquire about admission or book an initial discussion?',
        'a' => 'You can click on the "Get Admission" or "Contact Us" buttons on this page. We schedule a brief consultation with parents and students to discuss academic goals and suitable batch timings before finalizing enrollment.'
    ],
    [
        'q' => 'What learning materials and worksheets are provided?',
        'a' => 'Enrolled students receive chapter-wise conceptual notes, formula sheets, and regular graded worksheets tailored to reinforce what is taught during sessions.'
    ]
];
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore RKTuition's comprehensive educational services: One-to-One tuition, small group classes, subject-wise coaching, exam preparation, and conceptual mentorship.">
    <title>Educational Services | RKTuition - The Right Guidance for Every Learning Journey</title>
    
    <!-- Compiled Tailwind CSS v3 -->
    <link rel="stylesheet" href="./css/output.css">
    
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
    <?php require_once __DIR__ . '/components/header.php'; ?>

    <!-- MAIN SERVICES CONTENT: EXACTLY 10 SECTIONS -->
    <main class="flex-grow">

        <!-- ===================================================================
             SECTION 1: PREMIUM SERVICES HERO
             =================================================================== -->
        <section id="services-hero" class="relative overflow-hidden pt-12 pb-20 lg:pt-20 lg:pb-28 border-b border-slate-800/80">
            <!-- Background Radial Glow Accents -->
            <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-brand-gold/5 blur-[130px] rounded-full pointer-events-none" aria-hidden="true"></div>
            <div class="absolute top-12 right-10 w-80 h-80 bg-indigo-500/5 blur-[100px] rounded-full pointer-events-none" aria-hidden="true"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
                    
                    <!-- Left Column: Copy & Actions (7 Cols) -->
                    <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                        <!-- Premium Small Badge -->
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-800/80 border border-slate-700/80 text-brand-gold text-xs font-semibold uppercase tracking-wider shadow-sm">
                            <span class="w-2 h-2 rounded-full bg-brand-gold animate-pulse"></span>
                            <span>OUR EDUCATIONAL SERVICES &bull; RKTUITION</span>
                        </div>

                        <!-- Main Powerful Headline -->
                        <h1 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-extrabold tracking-tight text-white leading-[1.15]">
                            The Right Guidance for Every 
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-gold via-amber-300 to-amber-500">
                                Learning Journey
                            </span>
                        </h1>

                        <!-- Supporting Paragraph -->
                        <p class="text-base sm:text-lg text-slate-300 max-w-2xl mx-auto lg:mx-0 leading-relaxed font-normal">
                            Discover structured educational services tailored to each student's unique academic needs. From personalized one-to-one mentorship to collaborative small group classes, we combine concept clarity with disciplined practice to foster lifelong academic confidence.
                        </p>

                        <!-- CTA Action Buttons -->
                        <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 pt-2">
                            <!-- Primary CTA: Explore Services -->
                            <a href="#core-services" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-7 py-3.5 text-base font-bold text-slate-950 bg-gradient-to-r from-amber-400 via-brand-gold to-amber-500 hover:from-amber-300 hover:to-amber-400 rounded-xl shadow-lg shadow-amber-500/20 hover:shadow-xl hover:shadow-amber-500/30 transition-all duration-200 transform hover:-translate-y-0.5 active:translate-y-0 focus:outline-none focus:ring-2 focus:ring-brand-gold focus:ring-offset-2 focus:ring-offset-brand-navy">
                                <span>Explore Our Services</span>
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/></svg>
                            </a>

                            <!-- Secondary CTA: Get Admission -->
                            <a href="./pages/admission.php" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-7 py-3.5 text-base font-semibold text-slate-200 hover:text-white bg-slate-800/80 hover:bg-slate-800 border border-slate-700 hover:border-slate-500 rounded-xl transition-all duration-200 shadow-sm">
                                <span>Get Admission</span>
                                <svg class="w-4 h-4 text-brand-gold" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                            </a>
                        </div>

                        <!-- Supporting Key Quality Chips -->
                        <div class="pt-6 border-t border-slate-800/80 grid grid-cols-1 sm:grid-cols-3 gap-4 text-left">
                            <div class="flex items-center gap-2.5">
                                <div class="w-7 h-7 rounded-lg bg-slate-800/90 border border-slate-700 flex items-center justify-center text-brand-gold shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg>
                                </div>
                                <span class="text-xs font-medium text-slate-300">1-on-1 &amp; Small Batches</span>
                            </div>
                            <div class="flex items-center gap-2.5">
                                <div class="w-7 h-7 rounded-lg bg-slate-800/90 border border-slate-700 flex items-center justify-center text-brand-gold shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg>
                                </div>
                                <span class="text-xs font-medium text-slate-300">Concept-First Pedagogy</span>
                            </div>
                            <div class="flex items-center gap-2.5">
                                <div class="w-7 h-7 rounded-lg bg-slate-800/90 border border-slate-700 flex items-center justify-center text-brand-gold shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg>
                                </div>
                                <span class="text-xs font-medium text-slate-300">Continuous Evaluation</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Visual Composition (5 Cols) -->
                    <div class="lg:col-span-5 flex justify-center">
                        <div class="relative w-full max-w-md">
                            <div class="absolute -inset-1.5 bg-gradient-to-tr from-brand-gold/30 via-slate-700/40 to-amber-500/30 rounded-3xl blur-md opacity-75"></div>
                            
                            <div class="relative bg-slate-900 border border-slate-700/80 rounded-2xl overflow-hidden shadow-2xl">
                                <div class="aspect-[4/3] w-full bg-slate-800 relative overflow-hidden group">
                                    <img src="./images/services_hero.jpg" 
                                         alt="RKTuition Academic Coaching and Tutoring Session" 
                                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                         onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1577896851231-70ef18881754?auto=format&fit=crop&w=800&q=80';">
                                    
                                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/20 to-transparent"></div>

                                    <!-- Bottom Image Floating Tag -->
                                    <div class="absolute bottom-4 left-4 right-4 bg-slate-900/95 backdrop-blur-md border border-slate-700/80 rounded-xl p-3.5 shadow-lg">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h2 class="text-sm font-bold text-white">Focused Mentorship</h2>
                                                <p class="text-xs text-brand-gold font-medium">Concept Mastery &bull; Personal Pacing</p>
                                            </div>
                                            <span class="inline-flex items-center px-2.5 py-1 rounded-full text-[10px] font-semibold bg-brand-gold/15 text-brand-gold border border-brand-gold/30">
                                                Enrolling Now
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- ===================================================================
             SECTION 2: OUR CORE EDUCATIONAL SERVICES
             =================================================================== -->
        <section id="core-services" class="py-20 lg:py-28 bg-slate-900/40 border-b border-slate-800/80 scroll-mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="text-brand-gold text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-md bg-brand-gold/10 border border-brand-gold/20 inline-block mb-3">
                        Flexible Formats
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Our Core Educational Services
                    </h2>
                    <p class="mt-4 text-base text-slate-300">
                        Tailored learning solutions designed to accommodate different learning styles, student schedules, and academic milestones.
                    </p>
                    <p class="mt-1 text-xs text-slate-400 italic">
                        (Note: All service offerings below are configurable based on batch capacity and local availability.)
                    </p>
                </div>

                <!-- 6 Service Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php foreach ($coreServices as $srv): ?>
                        <div class="bg-slate-900/90 border border-slate-800 rounded-2xl p-7 flex flex-col justify-between hover:border-brand-gold/40 hover:shadow-xl transition-all duration-300 group relative">
                            <div>
                                <!-- Top Badge -->
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-xs font-semibold uppercase tracking-wider text-brand-gold bg-brand-gold/10 px-3 py-1 rounded-full border border-brand-gold/20">
                                        <?php echo htmlspecialchars($srv['badge']); ?>
                                    </span>
                                    <div class="w-8 h-8 rounded-lg bg-slate-800 border border-slate-700 flex items-center justify-center text-brand-gold group-hover:border-brand-gold transition-colors">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25"/></svg>
                                    </div>
                                </div>

                                <h3 class="text-xl font-bold text-white group-hover:text-brand-gold transition-colors mb-2">
                                    <?php echo htmlspecialchars($srv['title']); ?>
                                </h3>

                                <p class="text-sm text-slate-300 leading-relaxed mb-5">
                                    <?php echo htmlspecialchars($srv['description']); ?>
                                </p>

                                <!-- Features List -->
                                <div class="space-y-2 pt-3 border-t border-slate-800">
                                    <?php foreach ($srv['features'] as $feat): ?>
                                        <div class="flex items-center gap-2 text-xs text-slate-300">
                                            <svg class="w-3.5 h-3.5 text-brand-gold shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg>
                                            <span><?php echo htmlspecialchars($feat); ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <div class="mt-6 pt-4 border-t border-slate-800/80 flex items-center justify-between">
                                <a href="./pages/admission.php" class="text-xs font-bold text-brand-gold hover:text-amber-300 inline-flex items-center gap-1.5 transition-colors">
                                    <span>Get Admission for <?php echo htmlspecialchars($srv['title']); ?></span>
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/></svg>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>


        <!-- ===================================================================
             SECTION 3: PERSONALIZED LEARNING PROGRAMS
             =================================================================== -->
        <section id="personalized-learning" class="py-20 lg:py-28 border-b border-slate-800/80 scroll-mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    
                    <!-- Left: Educational Visual Composition (5 Cols) -->
                    <div class="lg:col-span-5">
                        <div class="relative w-full max-w-md mx-auto">
                            <div class="rounded-2xl overflow-hidden bg-slate-900 border border-slate-800 shadow-2xl relative">
                                <div class="aspect-[4/3] bg-slate-800 overflow-hidden">
                                    <img src="./images/exam_prep.jpg" 
                                         alt="Personalized Academic Coaching and Diagnostic Study Setup" 
                                         class="w-full h-full object-cover"
                                         onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&w=800&q=80';">
                                </div>
                                <div class="p-6 bg-slate-900">
                                    <span class="text-xs uppercase tracking-wider font-bold text-brand-gold block mb-1">Adaptive Learning Model</span>
                                    <h3 class="text-lg font-bold text-white">Customized Pacing for Every Student</h3>
                                    <p class="text-xs text-slate-400 mt-2 leading-relaxed">
                                        We analyze where the student stands, identify prior knowledge gaps, and adjust instructional speed accordingly so foundational clarity is achieved before proceeding.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Features & Content (7 Cols) -->
                    <div class="lg:col-span-7 space-y-6">
                        <span class="text-brand-gold text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-md bg-brand-gold/10 border border-brand-gold/20 inline-block">
                            Student-Centered Approach
                        </span>

                        <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                            Personalized Learning Adapted to Your Child's Unique Pace
                        </h2>

                        <p class="text-slate-300 leading-relaxed text-sm sm:text-base">
                            In traditional crowded classrooms, a fixed teaching speed often leaves students either overwhelmed or disengaged. At RKTuition, our personalized programs are designed around the student's individual learning curve, ensuring steady comprehension and authentic confidence.
                        </p>

                        <!-- Structured Support Points -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                            <div class="p-4 rounded-xl bg-slate-900/80 border border-slate-800">
                                <div class="flex items-center gap-2.5 mb-2">
                                    <div class="w-6 h-6 rounded-md bg-brand-gold/10 text-brand-gold flex items-center justify-center text-xs font-bold">1</div>
                                    <h4 class="text-sm font-bold text-white">Identifying Learning Gaps</h4>
                                </div>
                                <p class="text-xs text-slate-400 leading-relaxed">Pinpointing weak foundation topics from earlier school years and reinforcing them systematically.</p>
                            </div>

                            <div class="p-4 rounded-xl bg-slate-900/80 border border-slate-800">
                                <div class="flex items-center gap-2.5 mb-2">
                                    <div class="w-6 h-6 rounded-md bg-brand-gold/10 text-brand-gold flex items-center justify-center text-xs font-bold">2</div>
                                    <h4 class="text-sm font-bold text-white">Flexible Pacing</h4>
                                </div>
                                <p class="text-xs text-slate-400 leading-relaxed">Slowing down for complex theorems, moving ahead swiftly when concepts are comfortably mastered.</p>
                            </div>

                            <div class="p-4 rounded-xl bg-slate-900/80 border border-slate-800">
                                <div class="flex items-center gap-2.5 mb-2">
                                    <div class="w-6 h-6 rounded-md bg-brand-gold/10 text-brand-gold flex items-center justify-center text-xs font-bold">3</div>
                                    <h4 class="text-sm font-bold text-white">Concept-First Pedagogy</h4>
                                </div>
                                <p class="text-xs text-slate-400 leading-relaxed">Prioritizing deep understanding of principles rather than shallow rote memorization of steps.</p>
                            </div>

                            <div class="p-4 rounded-xl bg-slate-900/80 border border-slate-800">
                                <div class="flex items-center gap-2.5 mb-2">
                                    <div class="w-6 h-6 rounded-md bg-brand-gold/10 text-brand-gold flex items-center justify-center text-xs font-bold">4</div>
                                    <h4 class="text-sm font-bold text-white">Continuous Revision</h4>
                                </div>
                                <p class="text-xs text-slate-400 leading-relaxed">Spaced practice cycles that ensure previously covered topics remain fresh and readily recalled.</p>
                            </div>
                        </div>

                        <div class="pt-2">
                            <a href="./pages/admission.php" class="text-sm font-bold text-brand-gold hover:text-amber-300 inline-flex items-center gap-1.5 transition-colors">
                                <span>Schedule an Initial Consultation</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/></svg>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section>


        <!-- ===================================================================
             SECTION 4: SUBJECT-WISE LEARNING SUPPORT
             =================================================================== -->
        <section id="subject-support" class="py-20 lg:py-28 bg-slate-900/40 border-b border-slate-800/80 scroll-mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="text-brand-gold text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-md bg-brand-gold/10 border border-brand-gold/20 inline-block mb-3">
                        Academic Disciplines
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Subject-Wise Learning Support
                    </h2>
                    <p class="mt-4 text-base text-slate-300">
                        Targeted curriculum coverage across essential school subjects. Readily customized as per your syllabus and school textbook requirements.
                    </p>
                </div>

                <!-- Subjects Showcase Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php foreach ($serviceSubjects as $subj): ?>
                        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-7 flex flex-col justify-between hover:border-slate-700 transition-all duration-300 shadow-lg">
                            <div>
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-xs font-semibold px-3 py-1 rounded-full bg-slate-800 text-slate-300 border border-slate-700">
                                        <?php echo htmlspecialchars($subj['levels']); ?>
                                    </span>
                                    <span class="w-2.5 h-2.5 rounded-full bg-brand-gold"></span>
                                </div>

                                <h3 class="text-2xl font-bold text-white mb-2">
                                    <?php echo htmlspecialchars($subj['name']); ?>
                                </h3>

                                <p class="text-sm text-slate-300 leading-relaxed mb-5">
                                    <?php echo htmlspecialchars($subj['description']); ?>
                                </p>

                                <div class="space-y-2 pt-3 border-t border-slate-800">
                                    <span class="text-[11px] uppercase tracking-wider font-bold text-slate-400 block mb-2">Focus Areas</span>
                                    <?php foreach ($subj['topics'] as $tpc): ?>
                                        <div class="flex items-center gap-2 text-xs text-slate-300">
                                            <svg class="w-3.5 h-3.5 text-brand-gold shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg>
                                            <span><?php echo htmlspecialchars($tpc); ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <div class="mt-6 pt-4 border-t border-slate-800/80">
                                <a href="./pages/admission.php" class="text-xs font-bold text-brand-gold hover:text-amber-300 inline-flex items-center gap-1.5 transition-colors">
                                    <span>Get Admission for <?php echo htmlspecialchars($subj['name']); ?> Batches</span>
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/></svg>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Discuss Subject Requirements Banner -->
                <div class="mt-14 p-6 lg:p-8 rounded-2xl bg-gradient-to-r from-slate-900 via-slate-800 to-slate-900 border border-slate-700/80 shadow-xl flex flex-col md:flex-row items-center justify-between gap-6 text-center md:text-left">
                    <div>
                        <span class="text-xs uppercase tracking-wider font-bold text-brand-gold block mb-1">Tailored Subject Combinations</span>
                        <h3 class="text-xl sm:text-2xl font-bold text-white">Need a specific subject or multiple-subject bundle?</h3>
                        <p class="text-sm text-slate-300 mt-1 max-w-2xl">
                            We offer custom batch timings and combined coaching packages matching your school examination schedule.
                        </p>
                    </div>
                    <div class="shrink-0">
                        <a href="./pages/admission.php" class="px-6 py-3 rounded-xl bg-brand-gold text-slate-950 font-bold text-sm hover:bg-amber-300 transition-colors shadow-md inline-block">
                            Discuss Your Subject Requirements
                        </a>
                    </div>
                </div>

            </div>
        </section>


        <!-- ===================================================================
             SECTION 5: CLASSES AND ACADEMIC LEVELS
             =================================================================== -->
        <section id="classes-levels" class="py-20 lg:py-28 border-b border-slate-800/80 scroll-mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="text-brand-gold text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-md bg-brand-gold/10 border border-brand-gold/20 inline-block mb-3">
                        Grade Stages
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Classes &amp; Academic Levels
                    </h2>
                    <p class="mt-4 text-base text-slate-300">
                        Clear learning milestones tailored for middle school, board preparation, and senior learners.
                    </p>
                    <p class="mt-1 text-xs text-slate-400 italic">
                        (Curricula such as CBSE, ICSE, or State Board can be customized per batch.)
                    </p>
                </div>

                <!-- 3 Level Cards -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <?php foreach ($academicLevels as $lvl): ?>
                        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-7 flex flex-col justify-between hover:border-slate-700 transition-all duration-300 shadow-xl">
                            <div>
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-xs font-bold uppercase tracking-wider text-brand-gold bg-brand-gold/10 px-3 py-1 rounded-full border border-brand-gold/20">
                                        <?php echo htmlspecialchars($lvl['classes']); ?>
                                    </span>
                                    <span class="text-xs font-semibold text-slate-400">
                                        <?php echo htmlspecialchars($lvl['curriculum']); ?>
                                    </span>
                                </div>

                                <h3 class="text-2xl font-bold text-white mb-1">
                                    <?php echo htmlspecialchars($lvl['title']); ?>
                                </h3>

                                <p class="text-sm font-semibold text-brand-gold mb-3">
                                    <?php echo htmlspecialchars($lvl['subtitle']); ?>
                                </p>

                                <p class="text-sm text-slate-300 leading-relaxed mb-6">
                                    <?php echo htmlspecialchars($lvl['description']); ?>
                                </p>

                                <div class="space-y-2.5 pt-4 border-t border-slate-800 mb-6">
                                    <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block mb-2">Key Academic Objectives:</span>
                                    <?php foreach ($lvl['features'] as $feat): ?>
                                        <div class="flex items-start gap-2.5 text-xs text-slate-300">
                                            <div class="w-4 h-4 rounded-full bg-brand-gold/15 text-brand-gold flex items-center justify-center shrink-0 mt-0.5">
                                                <svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg>
                                            </div>
                                            <span><?php echo htmlspecialchars($feat); ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <div class="pt-4 border-t border-slate-800">
                                <a href="./pages/admission.php" class="w-full inline-flex items-center justify-center gap-2 px-4 py-2.5 rounded-xl bg-slate-800 hover:bg-brand-gold hover:text-slate-950 text-white font-semibold text-sm transition-all duration-200 border border-slate-700 hover:border-brand-gold">
                                    <span>Get Admission for <?php echo htmlspecialchars($lvl['classes']); ?></span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>


        <!-- ===================================================================
             SECTION 6: OUR TEACHING METHODOLOGY
             =================================================================== -->
        <section id="methodology" class="py-20 lg:py-28 bg-slate-900/40 border-b border-slate-800/80 scroll-mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="text-brand-gold text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-md bg-brand-gold/10 border border-brand-gold/20 inline-block mb-3">
                        Structured Pedagogy
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Our 5-Stage Teaching Methodology
                    </h2>
                    <p class="mt-4 text-base text-slate-300">
                        A disciplined, step-by-step learning cycle proven to transition students from basic confusion to independent concept mastery.
                    </p>
                </div>

                <!-- 5-Stage Process Grid / Timeline -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6 relative">
                    <?php foreach ($methodologyStages as $stg): ?>
                        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 relative hover:border-brand-gold/40 transition-all duration-300 flex flex-col justify-between group">
                            <div>
                                <!-- Stage Number -->
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-2xl font-black text-brand-gold font-mono tracking-wider">
                                        <?php echo htmlspecialchars($stg['step']); ?>
                                    </span>
                                    <span class="text-[10px] font-bold uppercase tracking-widest text-slate-400 bg-slate-800 px-2.5 py-1 rounded-md border border-slate-700">
                                        <?php echo htmlspecialchars($stg['subtitle']); ?>
                                    </span>
                                </div>

                                <h3 class="text-xl font-bold text-white mb-2 group-hover:text-brand-gold transition-colors">
                                    <?php echo htmlspecialchars($stg['name']); ?>
                                </h3>

                                <p class="text-xs text-slate-300 leading-relaxed">
                                    <?php echo htmlspecialchars($stg['description']); ?>
                                </p>
                            </div>

                            <div class="mt-6 pt-3 border-t border-slate-800/60 text-[11px] text-slate-400 flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-brand-gold"></span>
                                <span>Phase <?php echo htmlspecialchars($stg['step']); ?> of 05</span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Ethical Disclaimer Note -->
                <div class="mt-12 p-4 rounded-xl bg-slate-900/60 border border-slate-800 text-center max-w-2xl mx-auto text-xs text-slate-400">
                    <span class="font-semibold text-slate-300">Our Pedagogical Commitment:</span> We cultivate genuine problem-solving ability, steady study routines, and self-confidence. We do not make false guarantees of marks or ranks.
                </div>

            </div>
        </section>


        <!-- ===================================================================
             SECTION 7: EXAM PREPARATION AND REVISION SUPPORT
             =================================================================== -->
        <section id="exam-prep" class="py-20 lg:py-28 border-b border-slate-800/80 scroll-mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    
                    <!-- Left: Copy & Checklist (7 Cols) -->
                    <div class="lg:col-span-7 space-y-6">
                        <span class="text-brand-gold text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-md bg-brand-gold/10 border border-brand-gold/20 inline-block">
                            Evaluation Preparedness
                        </span>

                        <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                            Strategic Exam Preparation &amp; Revision Support
                        </h2>

                        <p class="text-slate-300 leading-relaxed text-sm sm:text-base">
                            Exam anxiety is often the result of hasty last-minute cramming. Our exam readiness module replaces stress with systematic revision schedules, pattern familiarity, and guided mock practice.
                        </p>

                        <!-- Checklist Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                            <div class="p-4 rounded-xl bg-slate-900 border border-slate-800 flex items-start gap-3">
                                <div class="w-6 h-6 rounded-md bg-brand-gold/10 text-brand-gold flex items-center justify-center shrink-0 mt-0.5">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg>
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-white">Chapter-Wise Revision</h4>
                                    <p class="text-xs text-slate-400 mt-1">Structured revisit of high-weightage topics and crucial formulas.</p>
                                </div>
                            </div>

                            <div class="p-4 rounded-xl bg-slate-900 border border-slate-800 flex items-start gap-3">
                                <div class="w-6 h-6 rounded-md bg-brand-gold/10 text-brand-gold flex items-center justify-center shrink-0 mt-0.5">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg>
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-white">Question Practice Drills</h4>
                                    <p class="text-xs text-slate-400 mt-1">Solving varied difficulty problems to build answer presentation speed.</p>
                                </div>
                            </div>

                            <div class="p-4 rounded-xl bg-slate-900 border border-slate-800 flex items-start gap-3">
                                <div class="w-6 h-6 rounded-md bg-brand-gold/10 text-brand-gold flex items-center justify-center shrink-0 mt-0.5">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg>
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-white">Time Management Coaching</h4>
                                    <p class="text-xs text-slate-400 mt-1">Techniques to pace paper completion and avoid running out of exam time.</p>
                                </div>
                            </div>

                            <div class="p-4 rounded-xl bg-slate-900 border border-slate-800 flex items-start gap-3">
                                <div class="w-6 h-6 rounded-md bg-brand-gold/10 text-brand-gold flex items-center justify-center shrink-0 mt-0.5">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg>
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-white">Dedicated Doubt Clarification</h4>
                                    <p class="text-xs text-slate-400 mt-1">Clearing all uncertainties before test day so students enter with peace of mind.</p>
                                </div>
                            </div>
                        </div>

                        <div class="pt-2">
                            <a href="./pages/admission.php" class="text-sm font-bold text-brand-gold hover:text-amber-300 inline-flex items-center gap-1.5 transition-colors">
                                <span>Get Admission for Pre-Exam Revision Batches</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Right: Visual Card (5 Cols) -->
                    <div class="lg:col-span-5">
                        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 shadow-xl relative overflow-hidden">
                            <div class="w-10 h-10 rounded-xl bg-brand-gold/15 border border-brand-gold/30 flex items-center justify-center text-brand-gold mb-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5.586a1 1 0 0 1 .707.293l5.414 5.414a1 1 0 0 1 .293.707V19a2 2 0 0 1-2 2Z"/></svg>
                            </div>
                            <h3 class="text-lg font-bold text-white mb-2">Systematic Exam Blueprint</h3>
                            <p class="text-xs text-slate-300 leading-relaxed mb-6">
                                How we guide students from syllabus coverage to confident paper submission:
                            </p>
                            
                            <div class="space-y-3 text-xs">
                                <div class="flex items-center justify-between p-2.5 rounded-lg bg-slate-800/60 border border-slate-700/60">
                                    <span class="text-slate-300">Phase 1: Syllabus Diagnostics</span>
                                    <span class="text-brand-gold font-bold">Week 1-2</span>
                                </div>
                                <div class="flex items-center justify-between p-2.5 rounded-lg bg-slate-800/60 border border-slate-700/60">
                                    <span class="text-slate-300">Phase 2: High-Yield Revisions</span>
                                    <span class="text-brand-gold font-bold">Week 3-4</span>
                                </div>
                                <div class="flex items-center justify-between p-2.5 rounded-lg bg-slate-800/60 border border-slate-700/60">
                                    <span class="text-slate-300">Phase 3: Graded Mock Papers</span>
                                    <span class="text-brand-gold font-bold">Week 5</span>
                                </div>
                                <div class="flex items-center justify-between p-2.5 rounded-lg bg-slate-800/60 border border-slate-700/60">
                                    <span class="text-slate-300">Phase 4: Targeted Error Review</span>
                                    <span class="text-brand-gold font-bold">Exam Week</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>


        <!-- ===================================================================
             SECTION 8: STUDY MATERIALS AND LEARNING RESOURCES
             =================================================================== -->
        <section id="materials" class="py-20 lg:py-28 bg-slate-900/40 border-b border-slate-800/80 scroll-mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="text-brand-gold text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-md bg-brand-gold/10 border border-brand-gold/20 inline-block mb-3">
                        Student Resources
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Study Materials &amp; Learning Resources
                    </h2>
                    <p class="mt-4 text-base text-slate-300">
                        Curated academic materials crafted to simplify complex concepts and streamline home revision.
                    </p>
                </div>

                <!-- Tasteful Resource Availability Notice -->
                <div class="mb-10 p-4 rounded-xl bg-slate-900 border border-brand-gold/30 flex flex-col sm:flex-row items-center justify-between gap-4 max-w-4xl mx-auto text-center sm:text-left">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-lg bg-brand-gold/10 border border-brand-gold/30 flex items-center justify-center text-brand-gold shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z"/></svg>
                        </div>
                        <div>
                            <span class="block text-sm font-bold text-white">Student Study Material Access</span>
                            <span class="text-xs text-slate-400">Class notes and tailored practice exercises are distributed systematically to enrolled students.</span>
                        </div>
                    </div>
                    <span class="text-xs font-semibold px-3 py-1.5 rounded-full bg-slate-800 text-brand-gold border border-slate-700 whitespace-nowrap">
                        Updated Seasonally
                    </span>
                </div>

                <!-- 6 Resources Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php foreach ($materialsList as $res): ?>
                        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 hover:border-slate-700 transition-all duration-300 flex flex-col justify-between">
                            <div>
                                <div class="flex items-center justify-between mb-3">
                                    <span class="text-[11px] font-bold uppercase tracking-wider text-brand-gold bg-brand-gold/10 px-2.5 py-1 rounded-md border border-brand-gold/20">
                                        <?php echo htmlspecialchars($res['tag']); ?>
                                    </span>
                                </div>

                                <h3 class="text-lg font-bold text-white mb-2">
                                    <?php echo htmlspecialchars($res['title']); ?>
                                </h3>

                                <p class="text-sm text-slate-300 leading-relaxed mb-4">
                                    <?php echo htmlspecialchars($res['description']); ?>
                                </p>
                            </div>

                            <div class="pt-4 border-t border-slate-800 flex items-center justify-between text-xs text-slate-400">
                                <span class="italic">Provided to Enrolled Students</span>
                                <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z"/></svg>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>


        <!-- ===================================================================
             SECTION 9: WHY CHOOSE RKTUITION?
             =================================================================== -->
        <section id="why-choose-us" class="py-20 lg:py-28 border-b border-slate-800/80 scroll-mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="text-brand-gold text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-md bg-brand-gold/10 border border-brand-gold/20 inline-block mb-3">
                        Educational Commitment
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Why Choose RKTuition?
                    </h2>
                    <p class="mt-4 text-base text-slate-300">
                        Our student-focused methodology ensures an encouraging learning environment where genuine understanding always precedes evaluation.
                    </p>
                </div>

                <!-- 6 Feature Pillars -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
                    <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800">
                        <div class="w-10 h-10 rounded-xl bg-slate-800 border border-brand-gold/30 flex items-center justify-center text-brand-gold font-bold text-sm mb-4">
                            01
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2">Personalized Attention</h3>
                        <p class="text-sm text-slate-300 leading-relaxed">Small batches and 1-on-1 focus ensure no student is left behind or rushed through difficult chapters.</p>
                    </div>

                    <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800">
                        <div class="w-10 h-10 rounded-xl bg-slate-800 border border-brand-gold/30 flex items-center justify-center text-brand-gold font-bold text-sm mb-4">
                            02
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2">Concept-Focused Learning</h3>
                        <p class="text-sm text-slate-300 leading-relaxed">Prioritizing the underlying logic of theorems and definitions before moving to mechanical memorization.</p>
                    </div>

                    <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800">
                        <div class="w-10 h-10 rounded-xl bg-slate-800 border border-brand-gold/30 flex items-center justify-center text-brand-gold font-bold text-sm mb-4">
                            03
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2">Structured Study Routine</h3>
                        <p class="text-sm text-slate-300 leading-relaxed">Helping students organize regular homework hours, revision cycles, and balanced rest without burnout.</p>
                    </div>

                    <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800">
                        <div class="w-10 h-10 rounded-xl bg-slate-800 border border-brand-gold/30 flex items-center justify-center text-brand-gold font-bold text-sm mb-4">
                            04
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2">Continuous Practice</h3>
                        <p class="text-sm text-slate-300 leading-relaxed">Graded exercise sets and formula recall sheets that solidify knowledge into long-term academic memory.</p>
                    </div>

                    <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800">
                        <div class="w-10 h-10 rounded-xl bg-slate-800 border border-brand-gold/30 flex items-center justify-center text-brand-gold font-bold text-sm mb-4">
                            05
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2">Supportive Environment</h3>
                        <p class="text-sm text-slate-300 leading-relaxed">A patient, encouraging space where asking doubts is celebrated and exam apprehension is eased.</p>
                    </div>

                    <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800">
                        <div class="w-10 h-10 rounded-xl bg-slate-800 border border-brand-gold/30 flex items-center justify-center text-brand-gold font-bold text-sm mb-4">
                            06
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2">Parent Collaboration</h3>
                        <p class="text-sm text-slate-300 leading-relaxed">Transparent, constructive progress discussions keep parents well-informed of milestones and next steps.</p>
                    </div>
                </div>

                <!-- FAQ Subsection with Accessible Accordions -->
                <div class="max-w-3xl mx-auto">
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold text-white">Services FAQ</h3>
                        <p class="text-sm text-slate-400 mt-1">Frequently asked questions about class formats, curricula, and admissions.</p>
                    </div>

                    <div class="space-y-4" id="services-faq-group">
                        <?php foreach ($serviceFaqs as $idx => $faq): 
                            $btnId   = "srv-faq-btn-" . $idx;
                            $panelId = "srv-faq-panel-" . $idx;
                        ?>
                            <div class="bg-slate-900 border border-slate-800 rounded-xl overflow-hidden transition-colors">
                                <h3>
                                    <button type="button" 
                                            id="<?php echo $btnId; ?>"
                                            class="faq-toggle w-full px-6 py-4 text-left flex items-center justify-between gap-4 focus:outline-none focus:ring-2 focus:ring-brand-gold/60 focus:ring-inset"
                                            aria-expanded="false" 
                                            aria-controls="<?php echo $panelId; ?>">
                                        <span class="text-base font-semibold text-white hover:text-brand-gold transition-colors">
                                            <?php echo htmlspecialchars($faq['q']); ?>
                                        </span>
                                        <svg class="faq-icon w-5 h-5 text-slate-400 shrink-0 transition-transform duration-200" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/>
                                        </svg>
                                    </button>
                                </h3>
                                <div id="<?php echo $panelId; ?>" 
                                     class="hidden px-6 pb-5 pt-1 text-sm text-slate-300 leading-relaxed border-t border-slate-800/80" 
                                     role="region" 
                                     aria-labelledby="<?php echo $btnId; ?>">
                                    <?php echo htmlspecialchars($faq['a']); ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </section>


        <!-- ===================================================================
             SECTION 10: FINAL ADMISSION AND ENQUIRY CTA
             =================================================================== -->
        <section id="admission-cta" class="py-20 lg:py-28 relative overflow-hidden scroll-mt-20">
            <!-- Background Gradients -->
            <div class="absolute inset-0 bg-gradient-to-b from-brand-navy via-slate-900 to-slate-950 pointer-events-none"></div>
            <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-[700px] h-[350px] bg-brand-gold/10 blur-[130px] rounded-full pointer-events-none" aria-hidden="true"></div>

            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
                
                <div class="p-8 sm:p-12 lg:p-16 rounded-3xl bg-slate-900/90 border border-slate-800 shadow-2xl relative">
                    <!-- Top Gold Badge -->
                    <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-brand-gold/10 border border-brand-gold/30 text-brand-gold text-xs font-bold uppercase tracking-wider mb-6">
                        <span class="w-2 h-2 rounded-full bg-brand-gold"></span>
                        <span>Start Your Educational Journey</span>
                    </span>

                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight leading-tight max-w-3xl mx-auto">
                        Let's Build a Stronger Learning Journey Together
                    </h2>

                    <p class="mt-5 text-base sm:text-lg text-slate-300 max-w-2xl mx-auto leading-relaxed">
                        Every student has distinct learning potential. Reach out to discuss convenient batch timings, tailored subject packages, and initial consultation availability.
                    </p>

                    <!-- Primary & Secondary CTAs -->
                    <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4">
                        <!-- Primary CTA -->
                        <a href="./pages/admission.php" 
                           class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-8 py-4 text-base font-bold text-slate-950 bg-gradient-to-r from-amber-400 via-brand-gold to-amber-500 hover:from-amber-300 hover:to-amber-400 rounded-xl shadow-lg shadow-amber-500/20 hover:shadow-xl hover:shadow-amber-500/30 transition-all duration-200 transform hover:-translate-y-0.5 active:translate-y-0 focus:outline-none focus:ring-2 focus:ring-brand-gold focus:ring-offset-2 focus:ring-offset-brand-navy">
                            <span>Get Admission</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>

                        <!-- Secondary CTA -->
                        <a href="tel:<?php echo htmlspecialchars(str_replace(' ', '', $siteInfo['phone_placeholder'])); ?>" 
                           class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-4 text-base font-semibold text-slate-200 hover:text-white bg-slate-800 hover:bg-slate-700/80 border border-slate-700 rounded-xl transition-all duration-200">
                            <svg class="w-5 h-5 text-brand-gold" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"/></svg>
                            <span>Contact Us</span>
                        </a>
                    </div>

                    <!-- Reassurance Guarantee -->
                    <div class="mt-8 pt-6 border-t border-slate-800 flex flex-col sm:flex-row items-center justify-center gap-4 text-xs text-slate-400">
                        <span class="inline-flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-brand-gold" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span>No obligation preliminary consultation</span>
                        </span>
                        <span class="hidden sm:inline text-slate-700">&bull;</span>
                        <span class="inline-flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-brand-gold" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span>Flexible batch timings &amp; subject packages</span>
                        </span>
                    </div>

                </div>

            </div>
        </section>

    </main>

    <!-- SHARED REUSABLE COMPONENT: FOOTER -->
    <?php require_once __DIR__ . '/components/footer.php'; ?>

    <!-- Main JavaScript (Mobile navigation, FAQ accordions, smooth scroll) -->
    <script src="./js/main.js"></script>
</body>
</html>
