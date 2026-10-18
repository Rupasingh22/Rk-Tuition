<?php
/**
 * RKTuition - Tuition Plans & Pricing Configuration
 *
 * Central configuration file for Tuition offerings, Home Tuition & Online Classes,
 * subject-wise pricing rules, plan packages, inclusions, timeline, and FAQs.
 *
 * All pricing is customizable. Unconfirmed prices safely default to "Contact for Pricing".
 */

function getTuitionConfig() {
    return [
        'hero' => [
            'eyebrow'  => 'Flexible Learning Modes & Transparent Guidance',
            'headline' => 'The Right Tuition for Every Learning Goal.',
            'subtext'  => 'Whether you prefer personalized, in-person instruction in the comfort of your home or interactive digital sessions from anywhere, RKTuition provides focused subject mentorship tailored to your syllabus.',
            'badge'    => 'Home & Online Batches Open',
        ],

        // SECTION 2: LEARNING MODES
        'modes' => [
            'home' => [
                'id'          => 'home',
                'name'        => 'Home Tuition',
                'tagline'     => 'In-Person One-on-One Mentorship',
                'description' => 'Personalized, face-to-face learning conducted at the student’s home. Ideal for students who benefit from direct faculty supervision, focused notebook checking, and a dedicated, distraction-free learning routine.',
                'icon'        => 'home',
                'badge'       => 'In-Person Guidance',
                'features'    => [
                    'Direct one-on-one student attention',
                    'Physical notebook & homework supervision',
                    'Flexible pace matching school tests',
                    'Immediate in-person doubt resolution'
                ],
                'availability_note' => 'Subject to localized tutor travel radius & batch availability.'
            ],
            'online' => [
                'id'          => 'online',
                'name'        => 'Online Classes',
                'tagline'     => 'Interactive Digital Classroom',
                'description' => 'Live, two-way digital classes featuring virtual whiteboard demonstrations, screen-shared problem solving, digital chapter notes, and recording access for flexible home revision.',
                'icon'        => 'device-laptop',
                'badge'       => 'Flexible & Accessible',
                'features'    => [
                    'Live two-way screen & whiteboard sessions',
                    'Instant digital notes & formula sheet distribution',
                    'Flexible timings without travel overhead',
                    'Recorded revision clips for difficult derivations'
                ],
                'availability_note' => 'Available pan-region with verified high-speed digital connection.'
            ]
        ],

        // SECTION 3 & 4: CLASSES 6 TO 12 PRICING
        // Note: Prices can be exact strings (e.g. '₹3,500') or null / empty to show 'Contact for Pricing'
        'classes' => [
            '6' => [
                'num'         => '6',
                'name'        => 'Class 6',
                'stage'       => 'Middle School Foundation',
                'description' => 'Building core study habits and clear conceptual foundations in mathematics, basic science, and logic.',
                'subjects'    => [
                    [
                        'name'        => 'Mathematics',
                        'desc'        => 'Number sense, fractions, integers, basic geometry, and systematic calculation drills.',
                        'home_price'  => null, // displays "Contact for Pricing"
                        'home_period' => 'per month (12 sessions)',
                        'home_status' => 'Available',
                        'online_price'=> null,
                        'online_period'=> 'per month (12 sessions)',
                        'online_status'=> 'Available',
                        'duration'    => '1.5 hrs / session'
                    ],
                    [
                        'name'        => 'Science',
                        'desc'        => 'Components of food, materials, physical changes, and living organism observations.',
                        'home_price'  => null,
                        'home_period' => 'per month (12 sessions)',
                        'home_status' => 'Available',
                        'online_price'=> null,
                        'online_period'=> 'per month (12 sessions)',
                        'online_status'=> 'Available',
                        'duration'    => '1.5 hrs / session'
                    ],
                    [
                        'name'        => 'Social Science',
                        'desc'        => 'Foundational history, earth geography, and basic civic community awareness.',
                        'home_price'  => null,
                        'home_period' => 'per month (8 sessions)',
                        'home_status' => 'Limited Slots',
                        'online_price'=> null,
                        'online_period'=> 'per month (8 sessions)',
                        'online_status'=> 'Available',
                        'duration'    => '1 hr / session'
                    ],
                    [
                        'name'        => 'Computer Studies',
                        'desc'        => 'Computer parts, operating system fundamentals, and basic algorithmic logic.',
                        'home_price'  => null,
                        'home_period' => 'per month (8 sessions)',
                        'home_status' => 'Available',
                        'online_price'=> null,
                        'online_period'=> 'per month (8 sessions)',
                        'online_status'=> 'Available',
                        'duration'    => '1 hr / session'
                    ]
                ]
            ],

            '7' => [
                'num'         => '7',
                'name'        => 'Class 7',
                'stage'       => 'Middle School Core',
                'description' => 'Developing independent problem-solving skills in integers, fractions, heat, and physical sciences.',
                'subjects'    => [
                    [
                        'name'        => 'Mathematics',
                        'desc'        => 'Fractions & decimals, simple equations, lines, angles, and triangle properties.',
                        'home_price'  => null,
                        'home_period' => 'per month (12 sessions)',
                        'home_status' => 'Available',
                        'online_price'=> null,
                        'online_period'=> 'per month (12 sessions)',
                        'online_status'=> 'Available',
                        'duration'    => '1.5 hrs / session'
                    ],
                    [
                        'name'        => 'Science',
                        'desc'        => 'Nutrition, heat, acids, bases, salts, and physical & chemical reactions.',
                        'home_price'  => null,
                        'home_period' => 'per month (12 sessions)',
                        'home_status' => 'Available',
                        'online_price'=> null,
                        'online_period'=> 'per month (12 sessions)',
                        'online_status'=> 'Available',
                        'duration'    => '1.5 hrs / session'
                    ],
                    [
                        'name'        => 'Social Science',
                        'desc'        => 'Medieval history, environment, ecology, and state governance mechanisms.',
                        'home_price'  => null,
                        'home_period' => 'per month (8 sessions)',
                        'home_status' => 'Available',
                        'online_price'=> null,
                        'online_period'=> 'per month (8 sessions)',
                        'online_status'=> 'Available',
                        'duration'    => '1 hr / session'
                    ],
                    [
                        'name'        => 'Computer Studies',
                        'desc'        => 'Number systems, spreadsheet basics, and digital communication tools.',
                        'home_price'  => null,
                        'home_period' => 'per month (8 sessions)',
                        'home_status' => 'Available',
                        'online_price'=> null,
                        'online_period'=> 'per month (8 sessions)',
                        'online_status'=> 'Available',
                        'duration'    => '1 hr / session'
                    ]
                ]
            ],

            '8' => [
                'num'         => '8',
                'name'        => 'Class 8',
                'stage'       => 'Pre-Secondary Bridge',
                'description' => 'Bridging middle-school concepts with rigorous secondary-level mathematics and scientific inquiry.',
                'subjects'    => [
                    [
                        'name'        => 'Mathematics',
                        'desc'        => 'Rational numbers, linear equations in one variable, quadrilaterals, squares, and square roots.',
                        'home_price'  => null,
                        'home_period' => 'per month (12 sessions)',
                        'home_status' => 'Available',
                        'online_price'=> null,
                        'online_period'=> 'per month (12 sessions)',
                        'online_status'=> 'Available',
                        'duration'    => '1.5 hrs / session'
                    ],
                    [
                        'name'        => 'Science',
                        'desc'        => 'Crop production, microorganisms, synthetic materials, metals, non-metals, and cell structure.',
                        'home_price'  => null,
                        'home_period' => 'per month (12 sessions)',
                        'home_status' => 'Available',
                        'online_price'=> null,
                        'online_period'=> 'per month (12 sessions)',
                        'online_status'=> 'Available',
                        'duration'    => '1.5 hrs / session'
                    ],
                    [
                        'name'        => 'Social Science',
                        'desc'        => 'Modern history, resources, industries, constitution, and judiciary processes.',
                        'home_price'  => null,
                        'home_period' => 'per month (8 sessions)',
                        'home_status' => 'Available',
                        'online_price'=> null,
                        'online_period'=> 'per month (8 sessions)',
                        'online_status'=> 'Available',
                        'duration'    => '1 hr / session'
                    ],
                    [
                        'name'        => 'Computer Studies',
                        'desc'        => 'Network basics, algorithmic logic, introductory coding principles.',
                        'home_price'  => null,
                        'home_period' => 'per month (8 sessions)',
                        'home_status' => 'Available',
                        'online_price'=> null,
                        'online_period'=> 'per month (8 sessions)',
                        'online_status'=> 'Available',
                        'duration'    => '1 hr / session'
                    ]
                ]
            ],

            '9' => [
                'num'         => '9',
                'name'        => 'Class 9',
                'stage'       => 'Secondary Board Foundation',
                'description' => 'Crucial prerequisite year establishing mastery in polynomials, coordinate geometry, laws of motion, and chemistry.',
                'subjects'    => [
                    [
                        'name'        => 'Mathematics',
                        'desc'        => 'Real numbers, polynomials, coordinate geometry, triangles, surface areas & volumes.',
                        'home_price'  => null,
                        'home_period' => 'per month (14 sessions)',
                        'home_status' => 'Available',
                        'online_price'=> null,
                        'online_period'=> 'per month (14 sessions)',
                        'online_status'=> 'Available',
                        'duration'    => '1.5 hrs / session'
                    ],
                    [
                        'name'        => 'Science',
                        'desc'        => 'Matter, atoms and molecules, cell tissues, kinematics, force, gravitation, work and energy.',
                        'home_price'  => null,
                        'home_period' => 'per month (14 sessions)',
                        'home_status' => 'Available',
                        'online_price'=> null,
                        'online_period'=> 'per month (14 sessions)',
                        'online_status'=> 'Available',
                        'duration'    => '1.5 hrs / session'
                    ],
                    [
                        'name'        => 'Social Science',
                        'desc'        => 'Contemporary world events, physical geography of India, electoral politics, economics.',
                        'home_price'  => null,
                        'home_period' => 'per month (10 sessions)',
                        'home_status' => 'Available',
                        'online_price'=> null,
                        'online_period'=> 'per month (10 sessions)',
                        'online_status'=> 'Available',
                        'duration'    => '1 hr / session'
                    ],
                    [
                        'name'        => 'Computer Studies',
                        'desc'        => 'Information technology essentials, cyber ethics, digital document creation tools.',
                        'home_price'  => null,
                        'home_period' => 'per month (8 sessions)',
                        'home_status' => 'Available',
                        'online_price'=> null,
                        'online_period'=> 'per month (8 sessions)',
                        'online_status'=> 'Available',
                        'duration'    => '1 hr / session'
                    ]
                ]
            ],

            '10' => [
                'num'         => '10',
                'name'        => 'Class 10',
                'stage'       => 'Secondary Board Examination',
                'description' => 'Intensive board preparation targeting 95%+ marks with rigorous step-marking rubrics, NCERT problem solving, and past board papers.',
                'subjects'    => [
                    [
                        'name'        => 'Mathematics',
                        'desc'        => 'Real numbers, quadratic equations, arithmetic progressions, trigonometry, circles, and statistics.',
                        'home_price'  => null,
                        'home_period' => 'per month (16 sessions)',
                        'home_status' => 'Available',
                        'online_price'=> null,
                        'online_period'=> 'per month (16 sessions)',
                        'online_status'=> 'Available',
                        'duration'    => '1.5 hrs / session'
                    ],
                    [
                        'name'        => 'Science',
                        'desc'        => 'Chemical reactions, acids & bases, life processes, light reflection & refraction, electricity, and magnetic effects.',
                        'home_price'  => null,
                        'home_period' => 'per month (16 sessions)',
                        'home_status' => 'Available',
                        'online_price'=> null,
                        'online_period'=> 'per month (16 sessions)',
                        'online_status'=> 'Available',
                        'duration'    => '1.5 hrs / session'
                    ],
                    [
                        'name'        => 'Social Science',
                        'desc'        => 'Nationalism in Europe & India, agriculture, manufacturing, money, credit, and federalism.',
                        'home_price'  => null,
                        'home_period' => 'per month (10 sessions)',
                        'home_status' => 'Available',
                        'online_price'=> null,
                        'online_period'=> 'per month (10 sessions)',
                        'online_status'=> 'Available',
                        'duration'    => '1 hr / session'
                    ],
                    [
                        'name'        => 'Computer Studies',
                        'desc'        => 'HTML, web protocols, DBMS, cyber security, and structured query language basics.',
                        'home_price'  => null,
                        'home_period' => 'per month (8 sessions)',
                        'home_status' => 'Available',
                        'online_price'=> null,
                        'online_period'=> 'per month (8 sessions)',
                        'online_status'=> 'Available',
                        'duration'    => '1 hr / session'
                    ]
                ]
            ],

            '11' => [
                'num'         => '11',
                'name'        => 'Class 11',
                'stage'       => 'Senior Secondary & Entrance Core',
                'description' => 'Deep conceptual transition to senior secondary science curricula, calculus limits, mechanics, and molecular chemistry.',
                'subjects'    => [
                    [
                        'name'        => 'Mathematics',
                        'desc'        => 'Sets, relations, functions, trigonometric identities, complex numbers, permutations & combinations, calculus limits.',
                        'home_price'  => null,
                        'home_period' => 'per month (16 sessions)',
                        'home_status' => 'Available',
                        'online_price'=> null,
                        'online_period'=> 'per month (16 sessions)',
                        'online_status'=> 'Available',
                        'duration'    => '1.5 hrs / session'
                    ],
                    [
                        'name'        => 'Physics',
                        'desc'        => 'Kinematics in 1D & 2D, Newton’s laws of motion, work energy power, rotational mechanics, thermodynamics.',
                        'home_price'  => null,
                        'home_period' => 'per month (16 sessions)',
                        'home_status' => 'Available',
                        'online_price'=> null,
                        'online_period'=> 'per month (16 sessions)',
                        'online_status'=> 'Available',
                        'duration'    => '1.5 hrs / session'
                    ],
                    [
                        'name'        => 'Chemistry',
                        'desc'        => 'Atomic structure, chemical bonding, thermodynamics, equilibrium, and organic chemistry principles.',
                        'home_price'  => null,
                        'home_period' => 'per month (16 sessions)',
                        'home_status' => 'Available',
                        'online_price'=> null,
                        'online_period'=> 'per month (16 sessions)',
                        'online_status'=> 'Available',
                        'duration'    => '1.5 hrs / session'
                    ],
                    [
                        'name'        => 'Biology',
                        'desc'        => 'Biological classification, plant kingdom, animal kingdom, cell biology, and human physiology.',
                        'home_price'  => null,
                        'home_period' => 'per month (14 sessions)',
                        'home_status' => 'Available',
                        'online_price'=> null,
                        'online_period'=> 'per month (14 sessions)',
                        'online_status'=> 'Available',
                        'duration'    => '1.5 hrs / session'
                    ],
                    [
                        'name'        => 'Computer Science',
                        'desc'        => 'Computer systems overview, computational problem solving, Python programming and data handling.',
                        'home_price'  => null,
                        'home_period' => 'per month (10 sessions)',
                        'home_status' => 'Available',
                        'online_price'=> null,
                        'online_period'=> 'per month (10 sessions)',
                        'online_status'=> 'Available',
                        'duration'    => '1.5 hrs / session'
                    ]
                ]
            ],

            '12' => [
                'num'         => '12',
                'name'        => 'Class 12',
                'stage'       => 'Senior Secondary & Competitive Mentorship',
                'description' => 'Senior board excellence combined with entrance exam speed, differential & integral calculus, electrodynamics, and organic synthesis.',
                'subjects'    => [
                    [
                        'name'        => 'Mathematics',
                        'desc'        => 'Matrices, determinants, continuity, differentiability, integrals, differential equations, vectors, 3D geometry.',
                        'home_price'  => null,
                        'home_period' => 'per month (16 sessions)',
                        'home_status' => 'Available',
                        'online_price'=> null,
                        'online_period'=> 'per month (16 sessions)',
                        'online_status'=> 'Available',
                        'duration'    => '1.5 hrs / session'
                    ],
                    [
                        'name'        => 'Physics',
                        'desc'        => 'Electrostatics, current electricity, magnetic effects, electromagnetic induction, wave optics, modern physics.',
                        'home_price'  => null,
                        'home_period' => 'per month (16 sessions)',
                        'home_status' => 'Available',
                        'online_price'=> null,
                        'online_period'=> 'per month (16 sessions)',
                        'online_status'=> 'Available',
                        'duration'    => '1.5 hrs / session'
                    ],
                    [
                        'name'        => 'Chemistry',
                        'desc'        => 'Solutions, electrochemistry, chemical kinetics, d & f-block, coordination compounds, haloalkanes, aldehydes, amines.',
                        'home_price'  => null,
                        'home_period' => 'per month (16 sessions)',
                        'home_status' => 'Available',
                        'online_price'=> null,
                        'online_period'=> 'per month (16 sessions)',
                        'online_status'=> 'Available',
                        'duration'    => '1.5 hrs / session'
                    ],
                    [
                        'name'        => 'Biology',
                        'desc'        => 'Reproduction, genetics & evolution, human health, biotechnology, ecology, and environment.',
                        'home_price'  => null,
                        'home_period' => 'per month (14 sessions)',
                        'home_status' => 'Available',
                        'online_price'=> null,
                        'online_period'=> 'per month (14 sessions)',
                        'online_status'=> 'Available',
                        'duration'    => '1.5 hrs / session'
                    ],
                    [
                        'name'        => 'Computer Science',
                        'desc'        => 'Python functions, data structures (stacks), SQL database connectivity, and networking protocols.',
                        'home_price'  => null,
                        'home_period' => 'per month (10 sessions)',
                        'home_status' => 'Available',
                        'online_price'=> null,
                        'online_period'=> 'per month (10 sessions)',
                        'online_status'=> 'Available',
                        'duration'    => '1.5 hrs / session'
                    ]
                ]
            ],
        ],

        // SECTION 5: PLANS COMPARISON
        'plans' => [
            [
                'id'          => 'single_subject',
                'name'        => 'Single-Subject Tuition',
                'tagline'     => 'Targeted Subject Mastery',
                'desc'        => 'Focus exclusively on strengthening one specific core subject where the student needs dedicated conceptual rebuilding or score improvement.',
                'badge'       => 'Most Popular for Weak Areas',
                'features'    => [
                    'Dedicated focus on selected subject syllabus',
                    'Chapter-by-chapter problem-solving drills',
                    'Targeted school exam & unit test revision',
                    'Flexible Home or Online delivery mode',
                    'Direct communication with tutor on progress'
                ],
                'pricing_note'=> 'Configurable per class and tuition mode. Contact for individual rate.'
            ],
            [
                'id'          => 'multi_subject',
                'name'        => 'Multiple-Subject Package',
                'tagline'     => 'Balanced Academic Routine',
                'desc'        => 'Coordinate combined coaching in 2 to 4 subjects with unified scheduling so school homework, unit tests, and revisions stay synchronized.',
                'badge'       => 'Comprehensive Support',
                'features'    => [
                    'Combined coverage (e.g., Math + Science or PCM / PCB)',
                    'Harmonized weekly test preparation schedules',
                    'Balanced workload avoiding student fatigue',
                    'Shared parent feedback across all subjects',
                    'Dedicated consolidated doubt clearance slots'
                ],
                'pricing_note'=> 'Configurable bundle quotation provided upon enquiry.'
            ],
            [
                'id'          => 'custom_plan',
                'name'        => 'Customized Mentorship Plan',
                'tagline'     => 'Tailored Timing & Pace',
                'desc'        => 'Tailored for students needing accelerated revision before board exams, remedial gap-filling, or flexible timing adjustments around competitive tests.',
                'badge'       => 'Bespoke Schedule',
                'features'    => [
                    'Diagnostic evaluation of student baseline',
                    'Custom syllabus roadmap and milestone dates',
                    'Pre-board intensive test series & paper correction',
                    'Hybrid option (Home + Live Online doubt sessions)',
                    'Direct consultation with lead faculty'
                ],
                'pricing_note'=> 'Tailored quote based on session frequency and duration.'
            ]
        ],

        // SECTION 6: WHAT IS INCLUDED?
        'inclusions' => [
            [
                'title'       => 'Concept-Based Learning',
                'description' => 'We reject rote memorization. Every concept is grounded in clear logical reasoning, visual intuition, and real-world applications.',
                'icon'        => 'lightbulb'
            ],
            [
                'title'       => 'Guided Practice Drills',
                'description' => 'Supervised step-by-step problem solving during sessions ensures students build confidence before attempting independent homework.',
                'icon'        => 'pencil'
            ],
            [
                'title'       => 'Dedicated Doubt-Solving',
                'description' => 'No question is left unanswered. Students receive patient, thorough explanations until complete conceptual clarity is attained.',
                'icon'        => 'chat-bubble'
            ],
            [
                'title'       => 'Continuous Revision Cycles',
                'description' => 'Systematic spaced repetition and formula recall sessions guarantee that previous chapters remain fresh ahead of school exams.',
                'icon'        => 'arrow-path'
            ],
            [
                'title'       => 'Subject-Focused Mentorship',
                'description' => 'Instructors specialize in curriculum specifics across CBSE, ICSE, and State Boards, aligning closely with school syllabi.',
                'icon'        => 'book-open'
            ],
            [
                'title'       => 'Transparent Progress Reviews',
                'description' => 'Regular feedback shared with parents regarding homework consistency, test accuracy, and target areas for improvement.',
                'icon'        => 'chart-bar'
            ]
        ],

        // SECTION 7: TIMELINE
        'pricing_steps' => [
            [
                'step'  => '01',
                'title' => 'Select Student Class',
                'desc'  => 'Choose the student’s grade (Class 6 to Class 12) to load syllabus scope and relevant subject offerings.'
            ],
            [
                'step'  => '02',
                'title' => 'Choose Subjects Needed',
                'desc'  => 'Identify single or multiple subjects such as Mathematics, Sciences, or Computer Studies required for coaching.'
            ],
            [
                'step'  => '03',
                'title' => 'Choose Learning Mode',
                'desc'  => 'Select personalized Home Tuition (in-person at your residence) or Live Online Classes (interactive digital).'
            ],
            [
                'step'  => '04',
                'title' => 'Review Quoted Pricing',
                'desc'  => 'Check the configured fee or request a customized quotation matching session frequency and batch slots.'
            ],
            [
                'step'  => '05',
                'title' => 'Confirm Availability',
                'desc'  => 'Submit an enquiry to speak with the faculty, finalize days/timings, and confirm batch opening dates.'
            ]
        ],

        // SECTION 8: TUITION FAQS
        'faqs' => [
            [
                'q' => 'What is the difference between Home Tuition and Online Classes?',
                'a' => 'Home Tuition provides one-on-one, in-person instruction at your home, focusing heavily on hands-on physical notebook supervision and direct guidance. Online Classes are conducted live over interactive digital whiteboards with two-way audio/video, offering greater scheduling flexibility, digital resource distribution, and no travel overhead.'
            ],
            [
                'q' => 'Which classes are available for tuition?',
                'a' => 'RKTuition offers individualized tuition programs for all individual classes from Class 6 through Class 12. Each class features dedicated curriculum pacing appropriate for middle school, secondary board, or senior secondary science streams.'
            ],
            [
                'q' => 'Can I enquire about multiple subjects together?',
                'a' => 'Yes. Students frequently enroll in combined packages such as Mathematics and Science (Classes 6–10) or Physics, Chemistry, and Mathematics/Biology (Classes 11–12). Multiple-subject plans are synchronized to avoid conflicting homework and exam schedules.'
            ],
            [
                'q' => 'How are tuition fees calculated?',
                'a' => 'Tuition pricing is determined by class grade, subject requirements, weekly session frequency, and tuition mode (Home Tuition vs. Online). All unconfirmed prices display "Contact for Pricing" so we can provide an accurate quotation tailored to your specific schedule.'
            ],
            [
                'q' => 'How can I confirm batch and tutor availability?',
                'a' => 'Click "Enquire Now" on any subject card or visit our Contact page. Share your grade, preferred subjects, location (for Home Tuition), and timings. We will review faculty availability and respond promptly.'
            ],
            [
                'q' => 'How do I apply for admission?',
                'a' => 'You can proceed directly to our dedicated Get Admission page via the main navigation or any "Get Admission" button on this website to complete our formal student admission registration form.'
            ]
        ],

        // SECTION 9: COMPARISON MATRIX
        'comparison' => [
            'attributes' => [
                ['label' => 'Learning Environment', 'home' => 'Student\'s Residence (In-Person)', 'online' => 'Interactive Digital Classroom (Live)'],
                ['label' => 'Supervision Format',   'home' => 'Physical one-on-one notebook checking', 'online' => 'Two-way screen & digital whiteboard'],
                ['label' => 'Class Availability',   'home' => 'Classes 6 to 12 (Location dependent)', 'online' => 'Classes 6 to 12 (Pan-region access)'],
                ['label' => 'Session Scheduling',   'home' => 'Fixed weekly home visit slots', 'online' => 'Flexible morning / evening timings'],
                ['label' => 'Study Materials',       'home' => 'Printed worksheets + digital notes', 'online' => 'Instant PDF downloads & digital notes'],
                ['label' => 'Pricing Model',        'home' => 'Configured per subject / month or hour', 'online' => 'Configured per subject / month or session'],
                ['label' => 'Faculty Interaction',  'home' => 'Direct in-person mentoring', 'online' => 'Live digital audio/video & screen sharing']
            ]
        ]
    ];
}
