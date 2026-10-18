<?php
/**
 * RKTuition - Homepage (index.php)
 *
 * Premium, modern, and accessible educational homepage with 10 complete sections.
 * Designed for students and parents seeking personalized, concept-driven academic coaching.
 */

// Navigation and Path Configuration
$currentPage = 'home';
$basePath    = './';

// In-page navigation mappings for smooth section scrolling
$navUrls = [
    'home'      => './index.php',
    'services'  => './services.php',
    'class'     => '#classes',
    'notes'     => './notes/index.php',
    'contact'   => './pages/admission.php#contact-guidance',
    'login'     => './pages/login.php',
    'admission' => './pages/admission.php',
];

// =============================================================================
// CONFIGURABLE TUTOR DATA & PLACEHOLDERS
// (Easily update these values with your actual details)
// =============================================================================

$tutorProfile = [
    'brand_name'         => 'RKTuition',
    'tutor_name'         => '[Enter Your Name / R.K.]',
    'role_title'         => 'Academic Coach & Subject Mentor',
    'tagline'            => 'Empowering Minds, Inspiring Excellence, Shaping Bright Futures',
    'hero_headline'      => 'Personalized Academic Coaching for Deep Conceptual Clarity & Confidence',
    'hero_subheading'    => 'Welcome to RKTuition. I provide dedicated, concept-driven tutoring designed to help students master core fundamentals, develop disciplined study habits, and achieve academic excellence in an encouraging, student-friendly environment.',
    'photo_url'          => './images/tutor_placeholder.jpg',
    'email_placeholder'  => 'rupasingh10456@gmail.com',
    'phone_placeholder'  => '+91 9153832633',
    'address_placeholder'=> 'Shree Sidhivinayak Meera , Aeronest society , Pune - 411001',
    'statement'          => 'My teaching mission is not merely helping students score in examinations, but empowering them to truly understand the core "why" behind every concept, think independently, and gain lifelong academic confidence.',
];

// Section 3: Educational Background (Editable fields - strictly no fake degrees)
$educationList = [
    [
        'category'       => 'Highest Qualification',
        'degree'         => '[Enter Degree / Program, e.g., Master of Science (M.Sc)]',
        'institution'    => '[Enter College / University Name]',
        'year'           => '[Enter Passing Year]',
        'specialization' => '[Enter Academic Specialization / Focus Area]',
        'description'    => 'Advanced academic grounding with focus on conceptual depth, analytical reasoning, and rigorous problem-solving.',
        'badge'          => 'Post Graduate'
    ],
    [
        'category'       => 'Undergraduate Degree',
        'degree'         => '[Enter Degree / Program, e.g., Bachelor of Science (B.Sc)]',
        'institution'    => '[Enter College / University Name]',
        'year'           => '[Enter Passing Year]',
        'specialization' => '[Enter Core Disciplines / Major]',
        'description'    => 'Strong foundational education establishing broad mastery across primary subjects and scientific principles.',
        'badge'          => 'Graduation'
    ],
    [
        'category'       => 'Professional Training / Certifications',
        'degree'         => '[Enter Relevant Certification / Teaching Diploma, e.g., B.Ed or Pedagogy Training]',
        'institution'    => '[Enter Issuing Board / Institution]',
        'year'           => '[Enter Year]',
        'specialization' => '[Enter Domain, e.g., Modern Classroom Pedagogy]',
        'description'    => 'Dedicated coursework in modern instructional methodologies, student psychological engagement, and differentiated learning.',
        'badge'          => 'Certification'
    ]
];

// Section 4: Teaching Philosophy Pillars
$philosophyPillars = [
    [
        'title'       => 'Conceptual Clarity First',
        'description' => 'Deconstructing difficult theorems and formulas into intuitive, bite-sized logical steps so students understand concepts before memorizing.'
    ],
    [
        'title'       => 'Practical Real-World Context',
        'description' => 'Connecting academic theory with everyday examples, turning abstract textbook problems into engaging and relatable learning moments.'
    ],
    [
        'title'       => 'Dedicated Doubt-Solving & Patience',
        'description' => 'Fostering an open, friendly atmosphere where students feel completely free to ask questions without hesitation or fear of judgment.'
    ],
    [
        'title'       => 'Structured Practice & Drills',
        'description' => 'Consistent chapter worksheets, periodic recall drills, and formula reviews that transform short-term knowledge into lasting retention.'
    ],
    [
        'title'       => 'Student-Friendly Communication',
        'description' => 'Empathetic mentorship tailored to each learner\'s unique pace, actively easing exam anxiety and building steady self-belief.'
    ],
    [
        'title'       => 'Consistent Study Routines',
        'description' => 'Guiding students on note-taking strategies, homework planning, and effective time management for sustained academic independence.'
    ]
];

// Section 5: Subjects I Teach (Configurable cards)
$subjectsList = [
    [
        'id'          => 'math',
        'name'        => 'Mathematics',
        'grades'      => '[Class 6th – 10th / Editable]',
        'summary'     => 'Building numerical confidence, algebraic reasoning, geometry proofs, and step-by-step problem-solving discipline.',
        'topics'      => ['Algebra & Arithmetic', 'Geometry & Proofs', 'Trigonometry & Mensuration', 'Formula Mastery Drills'],
        'accent'      => 'text-amber-400 border-amber-500/30'
    ],
    [
        'id'          => 'science',
        'name'        => 'Science',
        'grades'      => '[Class 6th – 10th / Editable]',
        'summary'     => 'Unraveling physical laws, chemical reactions, and biological systems through intuitive diagrams and real-life connections.',
        'topics'      => ['Physics Fundamentals', 'Chemistry & Equations', 'Living Systems & Biology', 'Experimental Concepts'],
        'accent'      => 'text-sky-400 border-sky-500/30'
    ],
    [
        'id'          => 'english',
        'name'        => 'English',
        'grades'      => '[Class 6th – 10th / Editable]',
        'summary'     => 'Developing grammatical accuracy, reading comprehension, structured essay composition, and articulate vocabulary.',
        'topics'      => ['Grammar Essentials', 'Reading Comprehension', 'Creative Writing', 'Vocabulary Building'],
        'accent'      => 'text-emerald-400 border-emerald-500/30'
    ],
    [
        'id'          => 'hindi',
        'name'        => 'Hindi',
        'grades'      => '[Class 6th – 10th / Editable]',
        'summary'     => 'Strengthening Hindi Vyakaran (grammar), prose and poetry analysis, and clear written and spoken expression.',
        'topics'      => ['Vyakaran Fundamentals', 'Literature Appreciation', 'Patra & Nibandh Lekhan', 'Reading Fluency'],
        'accent'      => 'text-orange-400 border-orange-500/30'
    ],
    [
        'id'          => 'social-studies',
        'name'        => 'Social Studies',
        'grades'      => '[Class 6th – 10th / Editable]',
        'summary'     => 'Making history, geography, and civics engaging through structured timelines, map skills, and conceptual clarity.',
        'topics'      => ['Historical Timelines', 'Physical Geography & Maps', 'Civics & Democratic Systems', 'Economic Concepts'],
        'accent'      => 'text-indigo-400 border-indigo-500/30'
    ],
    [
        'id'          => 'computer-studies',
        'name'        => 'Computer Studies',
        'grades'      => '[Class 6th – 10th / Editable]',
        'summary'     => 'Introducing core computing fundamentals, algorithmic logic, digital literacy, and introductory programming concepts.',
        'topics'      => ['Computer Basics & OS', 'Algorithms & Flowcharts', 'Introductory Coding', 'Safe Digital Practices'],
        'accent'      => 'text-purple-400 border-purple-500/30'
    ]
];

// Section 6: Classes and Student Levels (Configurable)
$classLevels = [
    [
        'title'        => 'Middle School Foundation',
        'classes'      => 'Classes 6, 7 & 8',
        'curriculum'   => '[CBSE / ICSE / State Board - Configurable]',
        'focus'        => 'Core Conceptual Foundation & Study Habit Formation',
        'description'  => 'Guiding young learners through the transition from elementary schooling into structured subject comprehension. We emphasize foundational curiosity and disciplined homework routines.',
        'points'       => [
            'Solidifying basic Math & Science logic',
            'Cultivating active reading & clear writing habits',
            'Supportive doubt-clearing sessions',
            'Building daily study discipline without pressure'
        ],
        'badge'        => 'Foundation Stage'
    ],
    [
        'title'        => 'Secondary Board Preparation',
        'classes'      => 'Classes 9 & 10',
        'curriculum'   => '[CBSE / ICSE / State Board - Configurable]',
        'focus'        => 'Board Exam Alignment, Conceptual Depth & Question Practice',
        'description'  => 'Critical academic years demanding clear conceptual mastery, thorough textbook coverage, question paper pattern analysis, and consistent mock evaluation.',
        'points'       => [
            'In-depth syllabus and textbook alignment',
            'Step-by-step problem-solving and answer writing',
            'Frequent practice tests & error analysis',
            'Structured revision cycles before exams'
        ],
        'badge'        => 'Board Exam Focus'
    ],
    [
        'title'        => 'Senior / Specialized Mentorship',
        'classes'      => 'Classes 11 & 12 / Tailored Batches',
        'curriculum'   => '[Specify Stream / Curriculum - Configurable]',
        'focus'        => 'Advanced Analytical Mastery & Exam Readiness',
        'description'  => 'Focused guidance for higher secondary topics or specialized batches, providing advanced conceptual clarity and structured preparation strategies.',
        'points'       => [
            'Advanced theorem & formula breakdowns',
            'Individualized academic pacing & milestone tracking',
            'Dedicated doubt resolution windows',
            'Focused preparation for school & board evaluations'
        ],
        'badge'        => 'Advanced Coaching'
    ]
];

// Section 7: Teaching Methodology (6 Steps)
$methodologySteps = [
    [
        'step'        => '01',
        'name'        => 'Understand the Student\'s Current Level',
        'subtitle'    => 'Diagnostic Assessment',
        'description' => 'Every student starts from their own baseline. I assess prior knowledge, identify specific learning gaps, and understand the student\'s unique learning style.'
    ],
    [
        'step'        => '02',
        'name'        => 'Explain Concepts Clearly',
        'subtitle'    => 'Foundation First',
        'description' => 'Breaking down complex concepts into logical, understandable parts using everyday analogies, visual diagrams, and interactive dialogue.'
    ],
    [
        'step'        => '03',
        'name'        => 'Practice with Guided Examples',
        'subtitle'    => 'Step-by-Step Modeling',
        'description' => 'Walking through problem-solving models together step by step, demonstrating effective reasoning methods and how to avoid common pitfalls.'
    ],
    [
        'step'        => '04',
        'name'        => 'Solve Questions & Clear Doubts',
        'subtitle'    => 'Active Independent Mastery',
        'description' => 'Students solve varied questions independently while receiving immediate, patient feedback. Dedicated time is carved out for all student questions.'
    ],
    [
        'step'        => '05',
        'name'        => 'Revise Important Topics',
        'subtitle'    => 'Spaced Retention',
        'description' => 'Structured periodic revisions, formula recaps, summary charts, and flash recall sessions to solidify long-term memory and prevent exam cramming.'
    ],
    [
        'step'        => '06',
        'name'        => 'Evaluate Understanding & Improve',
        'subtitle'    => 'Constructive Feedback',
        'description' => 'Formative reviews and targeted assignments highlight areas of improvement, providing actionable guidance for steady academic progress.'
    ]
];

// Section 8: Learning Resources & Study Notes (Preview Cards)
$resourcesList = [
    [
        'title'       => 'Subject-Wise Chapter Notes',
        'tag'         => 'Concept Summaries',
        'description' => 'Handcrafted, concise chapter notes highlighting key definitions, formulas, diagrams, and essential concepts.'
    ],
    [
        'title'       => 'Chapter Summaries & Mindmaps',
        'tag'         => 'Rapid Revision',
        'description' => 'One-page chapter recap sheets and visual mindmaps ideal for quick pre-exam review and memory consolidation.'
    ],
    [
        'title'       => 'Graded Practice Worksheets',
        'tag'         => 'Self Practice',
        'description' => 'Level-based exercise sheets moving progressively from basic foundation questions to challenging analytical problems.'
    ],
    [
        'title'       => 'Formula & Theorem Sheets',
        'tag'         => 'Essential Reference',
        'description' => 'Compiled lists of formulas, laws, scientific units, and equations for quick daily reference.'
    ],
    [
        'title'       => 'Important Exam Questions',
        'tag'         => 'Exam Orientation',
        'description' => 'Curated collections of frequently tested questions, common error analysis, and structured solution templates.'
    ],
    [
        'title'       => 'Homework & Revision Drills',
        'tag'         => 'Daily Reinforcement',
        'description' => 'Manageable practice assignments structured to reinforce topics covered during class without overwhelming the student.'
    ]
];

// Section 9: FAQ Items
$faqList = [
    [
        'q' => 'Which classes and subjects are currently offered?',
        'a' => 'I provide tutoring for Classes 6th through 10th in core subjects including Mathematics, Science, and other foundational school subjects. Batches and subject combinations are customized based on the student\'s syllabus and specific learning needs. Please reach out to discuss your child\'s exact requirements.'
    ],
    [
        'q' => 'What educational boards and curricula do you support?',
        'a' => 'Coaching can be tailored for CBSE, ICSE, or State Board curricula depending on current batch schedules. During our initial consultation, we review your child\'s school textbook and syllabus to ensure exact curriculum alignment.'
    ],
    [
        'q' => 'How are individual student doubts resolved?',
        'a' => 'Doubts are addressed in real time during class discussions. For students requiring extra clarification on challenging topics, dedicated time is allocated so no student leaves with unresolved questions.'
    ],
    [
        'q' => 'How can parents stay informed about their child\'s progress?',
        'a' => 'I maintain transparent communication with parents. Periodic updates regarding homework completion, conceptual improvement, and areas of focus are shared directly to ensure collaborative support.'
    ],
    [
        'q' => 'How do I inquire about admission or schedule an initial discussion?',
        'a' => 'You can click on the "Get Admission" or "Contact Me" buttons on this page. We will schedule a brief discussion to understand the student\'s academic background, subject needs, and convenient timings before finalizing enrollment.'
    ],
    [
        'q' => 'Are study materials and practice worksheets provided?',
        'a' => 'Yes, enrolled students receive curated chapter notes, revision summaries, and regular practice worksheets designed to reinforce what is taught in class.'
    ]
];
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="RKTuition - Premium, personalized academic coaching for school students. Focused on conceptual clarity, disciplined study routines, and student confidence.">
    <title>RKTuition | Premium Academic Coaching & Conceptual Learning</title>
    
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

    <!-- REUSABLE COMPONENT: HEADER -->
    <?php require_once __DIR__ . '/components/header.php'; ?>

    <!-- MAIN CONTENT: EXACTLY 10 SECTIONS -->
    <main class="flex-grow">

        <!-- ===================================================================
             SECTION 1: PREMIUM HERO SECTION
             =================================================================== -->
        <section id="hero" class="relative overflow-hidden pt-12 pb-20 lg:pt-20 lg:pb-32 border-b border-slate-800/80">
            <!-- Background Radial Glow & Accents -->
            <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-brand-gold/5 blur-[120px] rounded-full pointer-events-none" aria-hidden="true"></div>
            <div class="absolute top-12 right-10 w-72 h-72 bg-indigo-500/5 blur-[90px] rounded-full pointer-events-none" aria-hidden="true"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
                    
                    <!-- Left Column: Copy & CTAs (7 Cols) -->
                    <div class="lg:col-span-7 space-y-8 text-center lg:text-left">
                        <!-- Quality Pill -->
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-800/80 border border-slate-700/80 text-brand-gold text-xs font-semibold uppercase tracking-wider shadow-sm">
                            <span class="w-2 h-2 rounded-full bg-brand-gold animate-pulse"></span>
                            <span>Dedicated Personal Coaching &bull; RKTuition</span>
                        </div>

                        <!-- Main Headline -->
                        <h1 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-extrabold tracking-tight text-white leading-[1.15]">
                            Empowering Students with 
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-gold via-amber-300 to-amber-500">
                                Conceptual Clarity
                            </span> 
                            &amp; Confidence
                        </h1>

                        <!-- Tagline & Short Introduction -->
                        <p class="text-base sm:text-lg text-slate-300 max-w-2xl mx-auto lg:mx-0 leading-relaxed font-normal">
                            <?php echo htmlspecialchars($tutorProfile['hero_subheading']); ?>
                        </p>

                        <!-- Tutor Badge Preview -->
                        <div class="flex items-center justify-center lg:justify-start gap-3 pt-1">
                            <div class="w-10 h-10 rounded-full bg-slate-800 border border-brand-gold/40 flex items-center justify-center text-brand-gold font-bold text-sm">
                                RK
                            </div>
                            <div class="text-left">
                                <span class="block text-sm font-bold text-white"><?php echo htmlspecialchars($tutorProfile['tutor_name']); ?></span>
                                <span class="block text-xs text-slate-400"><?php echo htmlspecialchars($tutorProfile['role_title']); ?></span>
                            </div>
                        </div>

                        <!-- CTA Action Buttons -->
                        <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 pt-2">
                            <!-- Primary CTA: Get Admission -->
                            <a href="./pages/admission.php" class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-7 py-3.5 text-base font-bold text-slate-950 bg-gradient-to-r from-amber-400 via-brand-gold to-amber-500 hover:from-amber-300 hover:to-amber-400 rounded-xl shadow-lg shadow-amber-500/20 hover:shadow-xl hover:shadow-amber-500/30 transition-all duration-200 transform hover:-translate-y-0.5 active:translate-y-0 focus:outline-none focus:ring-2 focus:ring-brand-gold focus:ring-offset-2 focus:ring-offset-brand-navy">
                                <span>Get Admission</span>
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                                </svg>
                            </a>

                            <!-- Secondary CTA: Explore Classes -->
                            <a href="#classes" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-7 py-3.5 text-base font-semibold text-slate-200 hover:text-white bg-slate-800/80 hover:bg-slate-800 border border-slate-700 hover:border-slate-500 rounded-xl transition-all duration-200 shadow-sm">
                                <span>Explore Classes</span>
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/>
                                </svg>
                            </a>
                        </div>

                        <!-- Small Supporting Highlights -->
                        <div class="pt-6 border-t border-slate-800/80 grid grid-cols-1 sm:grid-cols-3 gap-4 text-left">
                            <div class="flex items-center gap-2.5">
                                <div class="w-7 h-7 rounded-lg bg-slate-800/90 border border-slate-700 flex items-center justify-center text-brand-gold shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg>
                                </div>
                                <span class="text-xs font-medium text-slate-300">Personalized Guidance</span>
                            </div>
                            <div class="flex items-center gap-2.5">
                                <div class="w-7 h-7 rounded-lg bg-slate-800/90 border border-slate-700 flex items-center justify-center text-brand-gold shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg>
                                </div>
                                <span class="text-xs font-medium text-slate-300">Concept-Based Learning</span>
                            </div>
                            <div class="flex items-center gap-2.5">
                                <div class="w-7 h-7 rounded-lg bg-slate-800/90 border border-slate-700 flex items-center justify-center text-brand-gold shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg>
                                </div>
                                <span class="text-xs font-medium text-slate-300">Regular Doubt Clearing</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Professional Tutor Portrait Area (5 Cols) -->
                    <div class="lg:col-span-5 flex justify-center">
                        <div class="relative w-full max-w-md">
                            <!-- Decorative Behind Glow & Frame -->
                            <div class="absolute -inset-1.5 bg-gradient-to-tr from-brand-gold/30 via-slate-700/40 to-amber-500/30 rounded-3xl blur-md opacity-75"></div>
                            
                            <div class="relative bg-slate-900 border border-slate-700/80 rounded-2xl overflow-hidden shadow-2xl">
                                <!-- Image Container -->
                                <div class="aspect-[4/4] sm:aspect-[4/4.5] w-full bg-slate-800 relative overflow-hidden group">
                                    <img src="<?php echo htmlspecialchars($tutorProfile['photo_url']); ?>" 
                                         alt="RKTuition Dedicated Tutor Portrait" 
                                         class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105"
                                         onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1544717305-2782549b5136?auto=format&fit=crop&w=800&q=80';">
                                    
                                    <!-- Gradient Overlay for Contrast -->
                                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/20 to-transparent"></div>

                                    <!-- Bottom Image Floating Tag -->
                                    <div class="absolute bottom-4 left-4 right-4 bg-slate-900/95 backdrop-blur-md border border-slate-700/80 rounded-xl p-3.5 shadow-lg">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h2 class="text-sm font-bold text-white"><?php echo htmlspecialchars($tutorProfile['tutor_name']); ?></h2>
                                                <p class="text-xs text-brand-gold font-medium"><?php echo htmlspecialchars($tutorProfile['role_title']); ?></p>
                                            </div>
                                            <span class="inline-flex items-center px-2.5 py-1 rounded-full text-[10px] font-semibold bg-brand-gold/15 text-brand-gold border border-brand-gold/30">
                                                Active Batches
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
             SECTION 2: ABOUT ME — MY INTRODUCTION
             =================================================================== -->
        <section id="about" class="py-20 lg:py-28 bg-slate-900/40 border-b border-slate-800/80 scroll-mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <!-- Section Header -->
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="text-brand-gold text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-md bg-brand-gold/10 border border-brand-gold/20 inline-block mb-3">
                        About The Educator
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Dedicated Mentorship Focused on Your Child's Growth
                    </h2>
                    <p class="mt-4 text-base text-slate-300">
                        Get to know my teaching background, academic motivation, and personalized approach to helping students succeed.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    
                    <!-- Left: Profile Image Card (5 Cols) -->
                    <div class="lg:col-span-5 flex justify-center">
                        <div class="w-full max-w-md bg-slate-900 border border-slate-800 rounded-2xl p-4 shadow-xl relative">
                            <div class="rounded-xl overflow-hidden aspect-[4/4] bg-slate-800">
                                <img src="<?php echo htmlspecialchars($tutorProfile['photo_url']); ?>" 
                                     alt="Profile of <?php echo htmlspecialchars($tutorProfile['tutor_name']); ?>" 
                                     class="w-full h-full object-cover object-top"
                                     onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1544717305-2782549b5136?auto=format&fit=crop&w=800&q=80';">
                            </div>
                            <div class="mt-4 p-3 bg-slate-800/60 rounded-xl border border-slate-700/60 text-center">
                                <span class="text-xs uppercase tracking-wider text-slate-400 font-semibold block">Academic Philosophy</span>
                                <p class="text-sm text-slate-200 mt-1 font-medium">"Every student has the potential to master any concept with the right patience and guidance."</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Personal Introduction Text (7 Cols) -->
                    <div class="lg:col-span-7 space-y-6">
                        <div class="inline-flex items-center gap-2 text-sm text-brand-gold font-semibold">
                            <svg class="w-5 h-5 text-brand-gold" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25"/></svg>
                            <span>Hello, I am <?php echo htmlspecialchars($tutorProfile['tutor_name']); ?></span>
                        </div>

                        <h3 class="text-2xl sm:text-3xl font-bold text-white">
                            Committed to building understanding, reducing fear of exams, and inspiring academic curiosity.
                        </h3>

                        <p class="text-slate-300 leading-relaxed text-sm sm:text-base">
                            Teaching is more than a profession for me—it is a responsibility to guide curious young minds through foundational academic years. Having observed many students struggle simply because foundational concepts were rushed in standard school environments, I founded <strong>RKTuition</strong> to offer a focused, stress-free space where fundamentals are strengthened step by step.
                        </p>

                        <p class="text-slate-300 leading-relaxed text-sm sm:text-base">
                            Whether breaking down algebraic equations, clarifying scientific reactions, or guiding step-by-step revision, I prioritize genuine conceptual understanding over rote memorization. My goal is to make learning engaging, logical, and deeply rewarding for every enrolled student.
                        </p>

                        <!-- Personal Teaching Statement Quote Box -->
                        <div class="p-5 rounded-xl bg-slate-900 border-l-4 border-brand-gold border-r border-t border-b border-slate-800 shadow-md">
                            <p class="text-slate-200 text-sm sm:text-base italic leading-relaxed">
                                &ldquo;<?php echo htmlspecialchars($tutorProfile['statement']); ?>&rdquo;
                            </p>
                            <span class="block mt-2 text-xs font-bold text-brand-gold uppercase tracking-wider">
                                &mdash; <?php echo htmlspecialchars($tutorProfile['tutor_name']); ?>, Founder &amp; Tutor at RKTuition
                            </span>
                        </div>

                        <div class="pt-2 flex flex-wrap gap-4">
                            <a href="#philosophy" class="text-sm font-semibold text-brand-gold hover:text-amber-300 inline-flex items-center gap-1.5 transition-colors">
                                <span>Read My Teaching Philosophy</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/></svg>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- ===================================================================
             SECTION 3: MY EDUCATIONAL BACKGROUND
             =================================================================== -->
        <section id="education" class="py-20 lg:py-28 border-b border-slate-800/80 scroll-mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="text-brand-gold text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-md bg-brand-gold/10 border border-brand-gold/20 inline-block mb-3">
                        Qualifications &amp; Studies
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Academic Qualifications &amp; Background
                    </h2>
                    <p class="mt-4 text-base text-slate-300">
                        A transparent overview of my educational milestones, university studies, and subject training.
                    </p>
                    <p class="mt-1 text-xs text-slate-400 italic">
                        (Note: All educational details below are configurable placeholders to be filled with verified qualifications.)
                    </p>
                </div>

                <!-- Structured Academic Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <?php foreach ($educationList as $edu): ?>
                        <div class="bg-slate-900/90 border border-slate-800 rounded-2xl p-6 lg:p-8 flex flex-col justify-between hover:border-brand-gold/40 transition-all duration-300 shadow-lg relative group">
                            <!-- Top Tag -->
                            <div>
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-xs font-semibold uppercase tracking-wider text-brand-gold bg-brand-gold/10 px-3 py-1 rounded-full border border-brand-gold/20">
                                        <?php echo htmlspecialchars($edu['badge']); ?>
                                    </span>
                                    <span class="text-xs text-slate-400 font-mono">
                                        <?php echo htmlspecialchars($edu['year']); ?>
                                    </span>
                                </div>

                                <h3 class="text-xl font-bold text-white group-hover:text-brand-gold transition-colors">
                                    <?php echo htmlspecialchars($edu['degree']); ?>
                                </h3>

                                <p class="text-sm font-medium text-slate-300 mt-1">
                                    <?php echo htmlspecialchars($edu['institution']); ?>
                                </p>

                                <div class="mt-4 pt-4 border-t border-slate-800">
                                    <span class="text-xs text-slate-400 uppercase tracking-wider font-semibold block mb-1">Specialization</span>
                                    <p class="text-sm text-slate-200 font-medium">
                                        <?php echo htmlspecialchars($edu['specialization']); ?>
                                    </p>
                                </div>

                                <p class="text-xs text-slate-400 mt-3 leading-relaxed">
                                    <?php echo htmlspecialchars($edu['description']); ?>
                                </p>
                            </div>

                            <div class="mt-6 pt-4 border-t border-slate-800/80 flex items-center gap-2 text-xs text-slate-400">
                                <svg class="w-4 h-4 text-brand-gold" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg>
                                <span>Verified Academic Milestone</span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>


        <!-- ===================================================================
             SECTION 4: MY TEACHING EXPERIENCE AND PHILOSOPHY
             =================================================================== -->
        <section id="philosophy" class="py-20 lg:py-28 bg-slate-900/40 border-b border-slate-800/80 scroll-mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="text-brand-gold text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-md bg-brand-gold/10 border border-brand-gold/20 inline-block mb-3">
                        Teaching Philosophy
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        How I Approach Teaching &amp; Student Mentorship
                    </h2>
                    <p class="mt-4 text-base text-slate-300">
                        My teaching philosophy is built upon patience, clear explanations, consistent practice, and constructive feedback.
                    </p>
                </div>

                <!-- Teaching Experience Summary Banner -->
                <div class="bg-gradient-to-r from-slate-900 via-slate-800 to-slate-900 border border-slate-700/80 rounded-2xl p-6 lg:p-8 mb-12 shadow-xl">
                    <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                        <div class="space-y-2 text-center md:text-left">
                            <span class="text-xs uppercase tracking-wider font-bold text-brand-gold">Practical Teaching Experience</span>
                            <h3 class="text-xl sm:text-2xl font-bold text-white">[Enter Your Teaching Experience or 'Dedicated Private &amp; Small-Group Tutoring']</h3>
                            <p class="text-sm text-slate-300 max-w-3xl">
                                Dedicated to working closely with students from varied learning backgrounds, understanding their unique conceptual hurdles, and guiding them to overcome study obstacles through structured personal attention.
                            </p>
                        </div>
                        <div class="shrink-0">
                            <a href="./pages/admission.php" class="px-5 py-2.5 rounded-xl bg-brand-gold text-slate-950 font-bold text-sm hover:bg-amber-300 transition-colors shadow-md">
                                Discuss Your Child's Needs
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 6 Core Philosophy Pillars Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php foreach ($philosophyPillars as $index => $pillar): ?>
                        <div class="bg-slate-900/80 border border-slate-800 rounded-2xl p-6 hover:border-slate-700 transition-all duration-300">
                            <div class="w-10 h-10 rounded-xl bg-slate-800 border border-brand-gold/30 flex items-center justify-center text-brand-gold font-bold text-sm mb-4">
                                <?php echo sprintf('%02d', $index + 1); ?>
                            </div>
                            <h4 class="text-lg font-bold text-white mb-2"><?php echo htmlspecialchars($pillar['title']); ?></h4>
                            <p class="text-sm text-slate-300 leading-relaxed"><?php echo htmlspecialchars($pillar['description']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>


        <!-- ===================================================================
             SECTION 5: SUBJECTS I TEACH
             =================================================================== -->
        <section id="subjects" class="py-20 lg:py-28 border-b border-slate-800/80 scroll-mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="text-brand-gold text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-md bg-brand-gold/10 border border-brand-gold/20 inline-block mb-3">
                        Curriculum Offerings
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Subjects I Teach
                    </h2>
                    <p class="mt-4 text-base text-slate-300">
                        Structured, concept-oriented coaching across key academic disciplines. Easily configurable based on student grade levels.
                    </p>
                    <p class="mt-1 text-xs text-slate-400 italic">
                        (Note: These are configurable subject cards. Subjects can be customized or tailored as per actual batch offerings.)
                    </p>
                </div>

                <!-- Subjects Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php foreach ($subjectsList as $subj): ?>
                        <div class="bg-slate-900/90 border border-slate-800 rounded-2xl p-7 flex flex-col justify-between hover:border-brand-gold/40 hover:shadow-xl transition-all duration-300 group">
                            <div>
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-xs font-semibold px-3 py-1 rounded-full bg-slate-800 text-slate-300 border border-slate-700">
                                        <?php echo htmlspecialchars($subj['grades']); ?>
                                    </span>
                                    <span class="w-2.5 h-2.5 rounded-full bg-brand-gold"></span>
                                </div>

                                <h3 class="text-2xl font-bold text-white group-hover:text-brand-gold transition-colors mb-3">
                                    <?php echo htmlspecialchars($subj['name']); ?>
                                </h3>

                                <p class="text-sm text-slate-300 leading-relaxed mb-5">
                                    <?php echo htmlspecialchars($subj['summary']); ?>
                                </p>

                                <div class="space-y-2 pt-2 border-t border-slate-800">
                                    <span class="text-[11px] uppercase tracking-wider font-bold text-slate-400 block mb-2">Key Focus Areas</span>
                                    <?php foreach ($subj['topics'] as $topic): ?>
                                        <div class="flex items-center gap-2 text-xs text-slate-300">
                                            <svg class="w-3.5 h-3.5 text-brand-gold shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg>
                                            <span><?php echo htmlspecialchars($topic); ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <div class="mt-6 pt-5 border-t border-slate-800/80 flex items-center justify-between">
                                <a href="./pages/admission.php" class="text-xs font-bold text-brand-gold hover:text-amber-300 inline-flex items-center gap-1.5 transition-colors">
                                    <span>Get Admission for <?php echo htmlspecialchars($subj['name']); ?></span>
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/></svg>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>


        <!-- ===================================================================
             SECTION 6: CLASSES AND STUDENT LEVELS
             =================================================================== -->
        <section id="classes" class="py-20 lg:py-28 bg-slate-900/40 border-b border-slate-800/80 scroll-mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="text-brand-gold text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-md bg-brand-gold/10 border border-brand-gold/20 inline-block mb-3">
                        Student Batches
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Classes &amp; Grade Levels
                    </h2>
                    <p class="mt-4 text-base text-slate-300">
                        Tailored learning objectives for middle school, secondary board students, and senior learners.
                    </p>
                    <p class="mt-1 text-xs text-slate-400 italic">
                        (Curricula such as CBSE, ICSE, or State Board can be customized per batch.)
                    </p>
                </div>

                <!-- 3 Class Level Cards -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <?php foreach ($classLevels as $lvl): ?>
                        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-7 flex flex-col justify-between hover:border-slate-700 transition-all duration-300 shadow-xl">
                            <div>
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-xs font-bold uppercase tracking-wider text-brand-gold bg-brand-gold/10 px-3 py-1 rounded-full border border-brand-gold/20">
                                        <?php echo htmlspecialchars($lvl['badge']); ?>
                                    </span>
                                    <span class="text-xs font-semibold text-slate-400">
                                        <?php echo htmlspecialchars($lvl['curriculum']); ?>
                                    </span>
                                </div>

                                <h3 class="text-2xl font-bold text-white mb-1">
                                    <?php echo htmlspecialchars($lvl['classes']); ?>
                                </h3>
                                <p class="text-sm font-semibold text-brand-gold mb-3">
                                    <?php echo htmlspecialchars($lvl['title']); ?>
                                </p>

                                <p class="text-sm text-slate-300 leading-relaxed mb-6">
                                    <?php echo htmlspecialchars($lvl['description']); ?>
                                </p>

                                <div class="space-y-2.5 pt-4 border-t border-slate-800 mb-6">
                                    <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block mb-3">Key Learning Goals:</span>
                                    <?php foreach ($lvl['points'] as $pt): ?>
                                        <div class="flex items-start gap-2.5 text-xs text-slate-300">
                                            <div class="w-4 h-4 rounded-full bg-brand-gold/15 text-brand-gold flex items-center justify-center shrink-0 mt-0.5">
                                                <svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg>
                                            </div>
                                            <span><?php echo htmlspecialchars($pt); ?></span>
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
             SECTION 7: MY TEACHING METHODOLOGY
             =================================================================== -->
        <section id="methodology" class="py-20 lg:py-28 border-b border-slate-800/80 scroll-mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="text-brand-gold text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-md bg-brand-gold/10 border border-brand-gold/20 inline-block mb-3">
                        Step-by-Step Learning
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        My 6-Step Teaching Methodology
                    </h2>
                    <p class="mt-4 text-base text-slate-300">
                        A structured, scientific approach designed to foster deep understanding, eliminate confusion, and build exam self-assurance without stress.
                    </p>
                </div>

                <!-- 6 Process Steps Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php foreach ($methodologySteps as $step): ?>
                        <div class="bg-slate-900/80 border border-slate-800 rounded-2xl p-7 relative hover:border-brand-gold/40 transition-all duration-300 group">
                            <!-- Step Number Badge -->
                            <div class="flex items-center justify-between mb-5">
                                <span class="text-2xl font-black text-brand-gold font-mono tracking-wider">
                                    <?php echo htmlspecialchars($step['step']); ?>
                                </span>
                                <span class="text-[10px] font-bold uppercase tracking-widest text-slate-400 bg-slate-800 px-2.5 py-1 rounded-md border border-slate-700">
                                    <?php echo htmlspecialchars($step['subtitle']); ?>
                                </span>
                            </div>

                            <h3 class="text-lg font-bold text-white mb-2 group-hover:text-brand-gold transition-colors">
                                <?php echo htmlspecialchars($step['name']); ?>
                            </h3>

                            <p class="text-sm text-slate-300 leading-relaxed">
                                <?php echo htmlspecialchars($step['description']); ?>
                            </p>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Pedagogical Disclaimer / Ethics Note -->
                <div class="mt-12 p-4 rounded-xl bg-slate-900/50 border border-slate-800 text-center max-w-2xl mx-auto text-xs text-slate-400">
                    <span class="font-semibold text-slate-300">Academic Commitment:</span> We focus on consistent effort, conceptual mastery, and disciplined practice. We do not make misleading guarantees of examination marks; rather, we equip every student with genuine competence.
                </div>

            </div>
        </section>


        <!-- ===================================================================
             SECTION 8: LEARNING RESOURCES AND STUDY NOTES
             =================================================================== -->
        <section id="resources" class="py-20 lg:py-28 bg-slate-900/40 border-b border-slate-800/80 scroll-mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="text-brand-gold text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-md bg-brand-gold/10 border border-brand-gold/20 inline-block mb-3">
                        Student Material
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Learning Resources &amp; Study Notes
                    </h2>
                    <p class="mt-4 text-base text-slate-300">
                        Comprehensive academic resources designed to support classroom learning and simplify home revisions.
                    </p>
                </div>

                <!-- Tasteful Resource Availability Notice -->
                <div class="mb-10 p-4 rounded-xl bg-slate-900 border border-brand-gold/30 flex flex-col sm:flex-row items-center justify-between gap-4 max-w-4xl mx-auto text-center sm:text-left">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-lg bg-brand-gold/10 border border-brand-gold/30 flex items-center justify-center text-brand-gold shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z"/></svg>
                        </div>
                        <div>
                            <span class="block text-sm font-bold text-white">Curated Student Portal Resources</span>
                            <span class="text-xs text-slate-400">Study materials and practice worksheets are systematically released to enrolled batches.</span>
                        </div>
                    </div>
                    <span class="text-xs font-semibold px-3 py-1.5 rounded-full bg-slate-800 text-brand-gold border border-slate-700 whitespace-nowrap">
                        Updated Seasonally
                    </span>
                </div>

                <!-- 6 Resource Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php foreach ($resourcesList as $res): ?>
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
                                <span class="italic">Available for Enrolled Students</span>
                                <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z"/></svg>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>


        <!-- ===================================================================
             SECTION 9: STUDENT AND PARENT SUPPORT & FAQS
             =================================================================== -->
        <section id="support" class="py-20 lg:py-28 border-b border-slate-800/80 scroll-mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="text-brand-gold text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-md bg-brand-gold/10 border border-brand-gold/20 inline-block mb-3">
                        Trust &amp; Transparency
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Student &amp; Parent Support
                    </h2>
                    <p class="mt-4 text-base text-slate-300">
                        Open communication, personalized feedback, and answers to common questions about admissions and classes.
                    </p>
                </div>

                <!-- 4 Trust Highlights -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
                    <div class="p-5 rounded-2xl bg-slate-900 border border-slate-800 text-center sm:text-left">
                        <div class="w-10 h-10 rounded-xl bg-slate-800 border border-brand-gold/30 flex items-center justify-center text-brand-gold mx-auto sm:mx-0 mb-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z"/></svg>
                        </div>
                        <h3 class="text-base font-bold text-white mb-1">Doubt-Clearing</h3>
                        <p class="text-xs text-slate-400">Questions are answered with patience during class or dedicated query windows.</p>
                    </div>

                    <div class="p-5 rounded-2xl bg-slate-900 border border-slate-800 text-center sm:text-left">
                        <div class="w-10 h-10 rounded-xl bg-slate-800 border border-brand-gold/30 flex items-center justify-center text-brand-gold mx-auto sm:mx-0 mb-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg>
                        </div>
                        <h3 class="text-base font-bold text-white mb-1">Routine Guidance</h3>
                        <p class="text-xs text-slate-400">Helping students organize daily revision and homework hours systematically.</p>
                    </div>

                    <div class="p-5 rounded-2xl bg-slate-900 border border-slate-800 text-center sm:text-left">
                        <div class="w-10 h-10 rounded-xl bg-slate-800 border border-brand-gold/30 flex items-center justify-center text-brand-gold mx-auto sm:mx-0 mb-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z"/></svg>
                        </div>
                        <h3 class="text-base font-bold text-white mb-1">Parent Check-Ins</h3>
                        <p class="text-xs text-slate-400">Regular progress discussions with parents regarding homework and milestones.</p>
                    </div>

                    <div class="p-5 rounded-2xl bg-slate-900 border border-slate-800 text-center sm:text-left">
                        <div class="w-10 h-10 rounded-xl bg-slate-800 border border-brand-gold/30 flex items-center justify-center text-brand-gold mx-auto sm:mx-0 mb-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z"/></svg>
                        </div>
                        <h3 class="text-base font-bold text-white mb-1">Low Stress Learning</h3>
                        <p class="text-xs text-slate-400">Mentorship focused on calm preparation, confidence, and genuine competence.</p>
                    </div>
                </div>

                <!-- FAQ Subsection with Accessible Accordions -->
                <div class="max-w-3xl mx-auto">
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold text-white">Frequently Asked Questions</h3>
                        <p class="text-sm text-slate-400 mt-1">Clear answers regarding batches, curricula, doubt-solving, and admissions.</p>
                    </div>

                    <div class="space-y-4" id="faq-accordion-group">
                        <?php foreach ($faqList as $idx => $faq): 
                            $btnId   = "faq-btn-" . $idx;
                            $panelId = "faq-panel-" . $idx;
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
             SECTION 10: FINAL CTA AND ADMISSION INVITATION
             =================================================================== -->
        <section id="admission" class="py-20 lg:py-28 relative overflow-hidden scroll-mt-20">
            <!-- Background Decorative Gradients -->
            <div class="absolute inset-0 bg-gradient-to-b from-brand-navy via-slate-900 to-slate-950 pointer-events-none"></div>
            <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-[700px] h-[350px] bg-brand-gold/10 blur-[130px] rounded-full pointer-events-none" aria-hidden="true"></div>

            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
                
                <div class="p-8 sm:p-12 lg:p-16 rounded-3xl bg-slate-900/90 border border-slate-800 shadow-2xl relative">
                    <!-- Top Gold Badge -->
                    <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-brand-gold/10 border border-brand-gold/30 text-brand-gold text-xs font-bold uppercase tracking-wider mb-6">
                        <span class="w-2 h-2 rounded-full bg-brand-gold"></span>
                        <span>Join RKTuition</span>
                    </span>

                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight leading-tight max-w-3xl mx-auto">
                        Take the First Step Toward Confident Learning
                    </h2>

                    <p class="mt-5 text-base sm:text-lg text-slate-300 max-w-2xl mx-auto leading-relaxed">
                        Every student's academic path is unique. Reach out to schedule a consultation, discuss your child's learning goals, and explore upcoming batch availability.
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
                        <a href="tel:<?php echo htmlspecialchars(str_replace(' ', '', $tutorProfile['phone_placeholder'])); ?>" 
                           class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-4 text-base font-semibold text-slate-200 hover:text-white bg-slate-800 hover:bg-slate-700/80 border border-slate-700 rounded-xl transition-all duration-200">
                            <svg class="w-5 h-5 text-brand-gold" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"/></svg>
                            <span>Contact Me Directly</span>
                        </a>
                    </div>

                    <!-- Honest Reassurance Note -->
                    <div class="mt-8 pt-6 border-t border-slate-800 flex flex-col sm:flex-row items-center justify-center gap-4 text-xs text-slate-400">
                        <span class="inline-flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-brand-gold" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span>No obligation preliminary consultation</span>
                        </span>
                        <span class="hidden sm:inline text-slate-700">&bull;</span>
                        <span class="inline-flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-brand-gold" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span>Small batch size for focused attention</span>
                        </span>
                    </div>

                </div>

            </div>
        </section>

    </main>

    <!-- REUSABLE COMPONENT: FOOTER -->
    <?php require_once __DIR__ . '/components/footer.php'; ?>

    <!-- Main JavaScript (Mobile navigation, FAQ accordions, smooth scroll) -->
    <script src="./js/main.js"></script>
</body>
</html>
