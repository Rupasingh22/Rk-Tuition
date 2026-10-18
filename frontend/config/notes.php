<?php
/**
 * RKTuition - Notes & Study Resources Configuration
 *
 * Centralized configuration for all individual classes (Class 6 through Class 12),
 * subject allocations, chapter listings, study resources, Telegram settings, and FAQs.
 */

function getNotesConfig() {
    return [
        // =====================================================================
        // CENTRAL TELEGRAM SETTINGS
        // =====================================================================
        'telegram' => [
            // Set enabled to true once an official Telegram channel is set up.
            // If false or empty, a helpful configurable waiting list/notice is shown.
            'enabled'        => false,
            'main_channel'   => '', // e.g., 'https://t.me/RKTuitionStudyNotes'
            'channel_handle' => '@RKTuitionNotes (Configurable)',
            'description'    => 'Get direct access to weekly summary notes, formula cards, practice question sets, and revision guides directly on Telegram.',
            'class_channels' => [
                '6'  => '',
                '7'  => '',
                '8'  => '',
                '9'  => '',
                '10' => '',
                '11' => '',
                '12' => '',
            ]
        ],

        // =====================================================================
        // INDIVIDUAL CLASS DATA (CLASSES 6 TO 12)
        // =====================================================================
        'classes' => [
            '6' => [
                'num'          => '6',
                'name'         => 'Class 6',
                'stage'        => 'Middle School Foundation',
                'description'  => 'Transition from primary concepts to structured reasoning with foundational problem solving and core science concepts.',
                'badge'        => 'Foundation Stage',
                'subjects'     => [
                    [
                        'id'          => 'math-6',
                        'name'        => 'Mathematics',
                        'icon'        => 'calculator',
                        'desc'        => 'Knowing numbers, whole numbers, playing with numbers, integers, fractions, and basic geometry.',
                        'total_notes' => 4,
                        'available'   => true
                    ],
                    [
                        'id'          => 'science-6',
                        'name'        => 'Science',
                        'icon'        => 'beaker',
                        'desc'        => 'Components of food, sorting materials, separation of substances, body movements, and living organisms.',
                        'total_notes' => 3,
                        'available'   => true
                    ],
                    [
                        'id'          => 'social-science-6',
                        'name'        => 'Social Science',
                        'icon'        => 'globe',
                        'desc'        => 'Earliest societies, earth in solar system, globe & maps, and grassroots democratic governance.',
                        'total_notes' => 3,
                        'available'   => true
                    ],
                    [
                        'id'          => 'computer-studies-6',
                        'name'        => 'Computer Studies',
                        'icon'        => 'cpu',
                        'desc'        => 'Fundamentals of computers, operating system essentials, and introductory digital logic.',
                        'total_notes' => 2,
                        'available'   => true
                    ]
                ],
                'chapters'     => [
                    ['id' => 'c6-m1', 'subject' => 'Mathematics', 'title' => 'Chapter 1: Knowing Our Numbers', 'resources' => 2],
                    ['id' => 'c6-m2', 'subject' => 'Mathematics', 'title' => 'Chapter 2: Whole Numbers & Integers', 'resources' => 2],
                    ['id' => 'c6-s1', 'subject' => 'Science', 'title' => 'Chapter 1: Components of Food & Nutrition', 'resources' => 2],
                    ['id' => 'c6-s2', 'subject' => 'Science', 'title' => 'Chapter 2: Sorting Materials & Changes Around Us', 'resources' => 1],
                    ['id' => 'c6-ss1', 'subject' => 'Social Science', 'title' => 'Chapter 1: The Earth in the Solar System', 'resources' => 2],
                    ['id' => 'c6-cs1', 'subject' => 'Computer Studies', 'title' => 'Chapter 1: Computer Fundamentals & Hardware', 'resources' => 2],
                ],
                'revision_materials' => [
                    ['title' => 'Class 6 Math Formula & Rules Sheet', 'type' => 'Formula Sheet', 'format' => 'PDF Guide'],
                    ['title' => 'Class 6 Science Key Definitions Chart', 'type' => 'Concept Chart', 'format' => 'Summary Sheet'],
                ]
            ],

            '7' => [
                'num'          => '7',
                'name'         => 'Class 7',
                'stage'        => 'Middle School Core',
                'description'  => 'Deepening conceptual discipline in fractions, decimals, algebraic expressions, and physical & chemical processes.',
                'badge'        => 'Middle Foundation',
                'subjects'     => [
                    [
                        'id'          => 'math-7',
                        'name'        => 'Mathematics',
                        'icon'        => 'calculator',
                        'desc'        => 'Integers, fractions & decimals, simple equations, lines & angles, and triangles.',
                        'total_notes' => 4,
                        'available'   => true
                    ],
                    [
                        'id'          => 'science-7',
                        'name'        => 'Science',
                        'icon'        => 'beaker',
                        'desc'        => 'Nutrition in plants and animals, heat, acids, bases and salts, physical & chemical changes.',
                        'total_notes' => 3,
                        'available'   => true
                    ],
                    [
                        'id'          => 'social-science-7',
                        'name'        => 'Social Science',
                        'icon'        => 'globe',
                        'desc'        => 'Medieval kingdoms, Delhi Sultanate, our environment, and state government mechanisms.',
                        'total_notes' => 2,
                        'available'   => true
                    ],
                    [
                        'id'          => 'computer-studies-7',
                        'name'        => 'Computer Studies',
                        'icon'        => 'cpu',
                        'desc'        => 'Number systems, spreadsheet basics, and web communication fundamentals.',
                        'total_notes' => 2,
                        'available'   => true
                    ]
                ],
                'chapters'     => [
                    ['id' => 'c7-m1', 'subject' => 'Mathematics', 'title' => 'Chapter 1: Integers & Properties', 'resources' => 2],
                    ['id' => 'c7-m2', 'subject' => 'Mathematics', 'title' => 'Chapter 2: Fractions and Decimals', 'resources' => 2],
                    ['id' => 'c7-s1', 'subject' => 'Science', 'title' => 'Chapter 1: Nutrition in Living Organisms', 'resources' => 2],
                    ['id' => 'c7-s2', 'subject' => 'Science', 'title' => 'Chapter 2: Heat, Temperature & Transfer', 'resources' => 1],
                    ['id' => 'c7-ss1', 'subject' => 'Social Science', 'title' => 'Chapter 1: Our Environment & Ecosystems', 'resources' => 2],
                    ['id' => 'c7-cs1', 'subject' => 'Computer Studies', 'title' => 'Chapter 1: Number Systems & Data Formats', 'resources' => 2],
                ],
                'revision_materials' => [
                    ['title' => 'Class 7 Geometry & Algebraic Identities Summary', 'type' => 'Formula Sheet', 'format' => 'PDF Guide'],
                    ['title' => 'Class 7 Science Reaction & Nutrition Summary', 'type' => 'Concept Chart', 'format' => 'Summary Sheet'],
                ]
            ],

            '8' => [
                'num'          => '8',
                'name'         => 'Class 8',
                'stage'        => 'Pre-Secondary Bridge',
                'description'  => 'Bridging core school learning with rigorous pre-secondary logic in rational numbers, linear equations, and cellular biology.',
                'badge'        => 'Pre-Secondary',
                'subjects'     => [
                    [
                        'id'          => 'math-8',
                        'name'        => 'Mathematics',
                        'icon'        => 'calculator',
                        'desc'        => 'Rational numbers, linear equations in one variable, quadrilaterals, squares and square roots.',
                        'total_notes' => 4,
                        'available'   => true
                    ],
                    [
                        'id'          => 'science-8',
                        'name'        => 'Science',
                        'icon'        => 'beaker',
                        'desc'        => 'Crop production, microorganisms, synthetic fibers, metals and non-metals, cell structure.',
                        'total_notes' => 3,
                        'available'   => true
                    ],
                    [
                        'id'          => 'social-science-8',
                        'name'        => 'Social Science',
                        'icon'        => 'globe',
                        'desc'        => 'Modern Indian history, resources & development, law & social justice, Indian Constitution.',
                        'total_notes' => 3,
                        'available'   => true
                    ],
                    [
                        'id'          => 'computer-studies-8',
                        'name'        => 'Computer Studies',
                        'icon'        => 'cpu',
                        'desc'        => 'Networking concepts, algorithmic thinking, and introductory Python/programming concepts.',
                        'total_notes' => 2,
                        'available'   => true
                    ]
                ],
                'chapters'     => [
                    ['id' => 'c8-m1', 'subject' => 'Mathematics', 'title' => 'Chapter 1: Rational Numbers & Properties', 'resources' => 2],
                    ['id' => 'c8-m2', 'subject' => 'Mathematics', 'title' => 'Chapter 2: Linear Equations in One Variable', 'resources' => 2],
                    ['id' => 'c8-s1', 'subject' => 'Science', 'title' => 'Chapter 1: Cell Structure and Functions', 'resources' => 2],
                    ['id' => 'c8-s2', 'subject' => 'Science', 'title' => 'Chapter 2: Metals, Non-Metals & Combustion', 'resources' => 1],
                    ['id' => 'c8-ss1', 'subject' => 'Social Science', 'title' => 'Chapter 1: The Indian Constitution & Secularism', 'resources' => 2],
                    ['id' => 'c8-cs1', 'subject' => 'Computer Studies', 'title' => 'Chapter 1: Networks & Cybersecurity Essentials', 'resources' => 2],
                ],
                'revision_materials' => [
                    ['title' => 'Class 8 Linear Equations Step-by-Step Method', 'type' => 'Practice Worksheet', 'format' => 'Worksheet'],
                    ['title' => 'Class 8 Science Rapid Mind-Maps', 'type' => 'Concept Chart', 'format' => 'Summary Sheet'],
                ]
            ],

            '9' => [
                'num'          => '9',
                'name'         => 'Class 9',
                'stage'        => 'Secondary Foundation & 10th Prep',
                'description'  => 'Crucial foundation for Board examinations covering polynomial theorems, coordinate geometry, laws of motion, and tissue biology.',
                'badge'        => 'Board Foundation',
                'subjects'     => [
                    [
                        'id'          => 'math-9',
                        'name'        => 'Mathematics',
                        'icon'        => 'calculator',
                        'desc'        => 'Number systems, polynomials, coordinate geometry, lines and angles, triangles, and surface areas.',
                        'total_notes' => 4,
                        'available'   => true
                    ],
                    [
                        'id'          => 'science-9',
                        'name'        => 'Science',
                        'icon'        => 'beaker',
                        'desc'        => 'Matter in our surroundings, atoms and molecules, tissues, gravitation, and work and energy.',
                        'total_notes' => 4,
                        'available'   => true
                    ],
                    [
                        'id'          => 'social-science-9',
                        'name'        => 'Social Science',
                        'icon'        => 'globe',
                        'desc'        => 'French Revolution, Russian Revolution, physical features of India, and democratic rights.',
                        'total_notes' => 3,
                        'available'   => true
                    ],
                    [
                        'id'          => 'computer-studies-9',
                        'name'        => 'Computer Studies',
                        'icon'        => 'cpu',
                        'desc'        => 'Information technology essentials, cyber ethics, word processing, and presentation tools.',
                        'total_notes' => 2,
                        'available'   => true
                    ]
                ],
                'chapters'     => [
                    ['id' => 'c9-m1', 'subject' => 'Mathematics', 'title' => 'Chapter 1: Number Systems & Real Numbers', 'resources' => 2],
                    ['id' => 'c9-m2', 'subject' => 'Mathematics', 'title' => 'Chapter 2: Polynomials & Factor Theorem', 'resources' => 2],
                    ['id' => 'c9-s1', 'subject' => 'Science', 'title' => 'Chapter 1: Motion, Velocity & Acceleration', 'resources' => 2],
                    ['id' => 'c9-s2', 'subject' => 'Science', 'title' => 'Chapter 2: Atoms and Molecules: Mole Concept', 'resources' => 2],
                    ['id' => 'c9-ss1', 'subject' => 'Social Science', 'title' => 'Chapter 1: India - Size and Location', 'resources' => 2],
                    ['id' => 'c9-cs1', 'subject' => 'Computer Studies', 'title' => 'Chapter 1: Information and Communication Tech', 'resources' => 2],
                ],
                'revision_materials' => [
                    ['title' => 'Class 9 Math Algebraic Identities & Derivations', 'type' => 'Formula Sheet', 'format' => 'PDF Guide'],
                    ['title' => 'Class 9 Physics Formulae & Numerical Solver Guide', 'type' => 'Formula Sheet', 'format' => 'Summary Sheet'],
                ]
            ],

            '10' => [
                'num'          => '10',
                'name'         => 'Class 10',
                'stage'        => 'Secondary Board Examination',
                'description'  => 'Comprehensive board exam preparation emphasizing answer-structuring, high-yield theorems, numerical precision, and sample paper strategies.',
                'badge'        => 'Board Exam Year',
                'subjects'     => [
                    [
                        'id'          => 'math-10',
                        'name'        => 'Mathematics',
                        'icon'        => 'calculator',
                        'desc'        => 'Real numbers, polynomials, quadratic equations, arithmetic progressions, trigonometry, and statistics.',
                        'total_notes' => 5,
                        'available'   => true
                    ],
                    [
                        'id'          => 'science-10',
                        'name'        => 'Science',
                        'icon'        => 'beaker',
                        'desc'        => 'Chemical reactions, acids, bases and salts, life processes, light reflection & refraction, electricity.',
                        'total_notes' => 5,
                        'available'   => true
                    ],
                    [
                        'id'          => 'social-science-10',
                        'name'        => 'Social Science',
                        'icon'        => 'globe',
                        'desc'        => 'Rise of nationalism in Europe, nationalism in India, agriculture, manufacturing, money and credit.',
                        'total_notes' => 3,
                        'available'   => true
                    ],
                    [
                        'id'          => 'computer-studies-10',
                        'name'        => 'Computer Studies',
                        'icon'        => 'cpu',
                        'desc'        => 'HTML & CSS basics, database management systems, cyber security, and web services.',
                        'total_notes' => 2,
                        'available'   => true
                    ]
                ],
                'chapters'     => [
                    ['id' => 'c10-m1', 'subject' => 'Mathematics', 'title' => 'Chapter 1: Real Numbers & Euclid Lemma', 'resources' => 3],
                    ['id' => 'c10-m2', 'subject' => 'Mathematics', 'title' => 'Chapter 2: Quadratic Equations & Roots', 'resources' => 2],
                    ['id' => 'c10-m3', 'subject' => 'Mathematics', 'title' => 'Chapter 3: Introduction to Trigonometry', 'resources' => 3],
                    ['id' => 'c10-s1', 'subject' => 'Science', 'title' => 'Chapter 1: Chemical Reactions and Equations', 'resources' => 3],
                    ['id' => 'c10-s2', 'subject' => 'Science', 'title' => 'Chapter 2: Life Processes: Nutrition & Respiration', 'resources' => 2],
                    ['id' => 'c10-s3', 'subject' => 'Science', 'title' => 'Chapter 3: Electricity: Ohm’s Law & Circuits', 'resources' => 3],
                    ['id' => 'c10-ss1', 'subject' => 'Social Science', 'title' => 'Chapter 1: Nationalism in India: Timeline', 'resources' => 2],
                    ['id' => 'c10-cs1', 'subject' => 'Computer Studies', 'title' => 'Chapter 1: Web Technologies & Semantic HTML', 'resources' => 2],
                ],
                'revision_materials' => [
                    ['title' => 'Class 10 Trigonometry Formulae & Angle Tables', 'type' => 'Formula Sheet', 'format' => 'PDF Guide'],
                    ['title' => 'Class 10 Chemical Reactions & Equation Balancer Chart', 'type' => 'Concept Chart', 'format' => 'Summary Sheet'],
                    ['title' => 'Class 10 Physics Ray Diagrams & Sign Conventions', 'type' => 'Revision Guide', 'format' => 'Quick Guide'],
                ]
            ],

            '11' => [
                'num'          => '11',
                'name'         => 'Class 11',
                'stage'        => 'Senior Secondary & Entrance Core',
                'description'  => 'Conceptual depth for science stream students preparing for school exams along with engineering and medical entrance foundations.',
                'badge'        => 'Senior Secondary',
                'subjects'     => [
                    [
                        'id'          => 'math-11',
                        'name'        => 'Mathematics',
                        'icon'        => 'calculator',
                        'desc'        => 'Sets, relations and functions, trigonometric functions, complex numbers, permutations & combinations, calculus limits.',
                        'total_notes' => 4,
                        'available'   => true
                    ],
                    [
                        'id'          => 'physics-11',
                        'name'        => 'Physics',
                        'icon'        => 'lightning',
                        'desc'        => 'Units and measurements, kinematics, laws of motion, work energy power, rotational mechanics, thermodynamics.',
                        'total_notes' => 4,
                        'available'   => true
                    ],
                    [
                        'id'          => 'chemistry-11',
                        'name'        => 'Chemistry',
                        'icon'        => 'beaker',
                        'desc'        => 'Some basic concepts, structure of atom, chemical bonding, thermodynamics, equilibrium, organic chemistry basics.',
                        'total_notes' => 4,
                        'available'   => true
                    ],
                    [
                        'id'          => 'biology-11',
                        'name'        => 'Biology',
                        'icon'        => 'dna',
                        'desc'        => 'The living world, biological classification, plant kingdom, animal kingdom, cell biology, human physiology.',
                        'total_notes' => 3,
                        'available'   => true
                    ],
                    [
                        'id'          => 'cs-11',
                        'name'        => 'Computer Science',
                        'icon'        => 'code',
                        'desc'        => 'Computer systems overview, computational thinking, Python fundamentals, strings, lists, dictionaries, tuples.',
                        'total_notes' => 3,
                        'available'   => true
                    ]
                ],
                'chapters'     => [
                    ['id' => 'c11-m1', 'subject' => 'Mathematics', 'title' => 'Chapter 1: Sets, Relations & Functions', 'resources' => 2],
                    ['id' => 'c11-m2', 'subject' => 'Mathematics', 'title' => 'Chapter 2: Trigonometric Identities & General Solutions', 'resources' => 2],
                    ['id' => 'c11-p1', 'subject' => 'Physics', 'title' => 'Chapter 1: Kinematics: 1D and 2D Motion', 'resources' => 2],
                    ['id' => 'c11-p2', 'subject' => 'Physics', 'title' => 'Chapter 2: Newton’s Laws & Friction Dynamics', 'resources' => 2],
                    ['id' => 'c11-c1', 'subject' => 'Chemistry', 'title' => 'Chapter 1: Atomic Structure: Quantum Models', 'resources' => 2],
                    ['id' => 'c11-c2', 'subject' => 'Chemistry', 'title' => 'Chapter 2: Chemical Bonding & Molecular Structure', 'resources' => 2],
                    ['id' => 'c11-b1', 'subject' => 'Biology', 'title' => 'Chapter 1: Cell: The Unit of Life & Cell Cycle', 'resources' => 2],
                    ['id' => 'c11-cs1', 'subject' => 'Computer Science', 'title' => 'Chapter 1: Python Programming: Control Flow & Lists', 'resources' => 2],
                ],
                'revision_materials' => [
                    ['title' => 'Class 11 Physics Kinematics & Mechanics Formula Handbook', 'type' => 'Formula Sheet', 'format' => 'PDF Guide'],
                    ['title' => 'Class 11 Chemistry Periodic Trends & Hybridization Chart', 'type' => 'Concept Chart', 'format' => 'Summary Sheet'],
                ]
            ],

            '12' => [
                'num'          => '12',
                'name'         => 'Class 12',
                'stage'        => 'Senior Secondary & Competitive Mentorship',
                'description'  => 'Senior board mastery with intensive focus on calculus, electrodynamics, organic synthesis mechanisms, and scoring techniques.',
                'badge'        => 'Graduating & Entrance',
                'subjects'     => [
                    [
                        'id'          => 'math-12',
                        'name'        => 'Mathematics',
                        'icon'        => 'calculator',
                        'desc'        => 'Relations & functions, matrices, determinants, continuity and differentiability, integrals, vectors, 3D geometry.',
                        'total_notes' => 5,
                        'available'   => true
                    ],
                    [
                        'id'          => 'physics-12',
                        'name'        => 'Physics',
                        'icon'        => 'lightning',
                        'desc'        => 'Electrostatics, current electricity, magnetic effects, electromagnetic induction, optics, modern physics.',
                        'total_notes' => 5,
                        'available'   => true
                    ],
                    [
                        'id'          => 'chemistry-12',
                        'name'        => 'Chemistry',
                        'icon'        => 'beaker',
                        'desc'        => 'Solutions, electrochemistry, chemical kinetics, d and f-block elements, coordination compounds, haloalkanes, aldehydes.',
                        'total_notes' => 5,
                        'available'   => true
                    ],
                    [
                        'id'          => 'biology-12',
                        'name'        => 'Biology',
                        'icon'        => 'dna',
                        'desc'        => 'Reproduction in organisms, genetics & evolution, biology and human welfare, biotechnology, ecology.',
                        'total_notes' => 3,
                        'available'   => true
                    ],
                    [
                        'id'          => 'cs-12',
                        'name'        => 'Computer Science',
                        'icon'        => 'code',
                        'desc'        => 'Python functions, file handling, data structures (stacks), database management with SQL, computer networks.',
                        'total_notes' => 3,
                        'available'   => true
                    ]
                ],
                'chapters'     => [
                    ['id' => 'c12-m1', 'subject' => 'Mathematics', 'title' => 'Chapter 1: Matrices and Determinants: Properties', 'resources' => 3],
                    ['id' => 'c12-m2', 'subject' => 'Mathematics', 'title' => 'Chapter 2: Continuity, Differentiability & Derivatives', 'resources' => 3],
                    ['id' => 'c12-m3', 'subject' => 'Mathematics', 'title' => 'Chapter 3: Indefinite and Definite Integrals', 'resources' => 3],
                    ['id' => 'c12-p1', 'subject' => 'Physics', 'title' => 'Chapter 1: Electric Charges, Fields & Gauss Law', 'resources' => 3],
                    ['id' => 'c12-p2', 'subject' => 'Physics', 'title' => 'Chapter 2: Current Electricity & Kirchhoff’s Laws', 'resources' => 3],
                    ['id' => 'c12-p3', 'subject' => 'Physics', 'title' => 'Chapter 3: Ray Optics and Optical Instruments', 'resources' => 2],
                    ['id' => 'c12-c1', 'subject' => 'Chemistry', 'title' => 'Chapter 1: Chemical Kinetics & Rate Laws', 'resources' => 3],
                    ['id' => 'c12-c2', 'subject' => 'Chemistry', 'title' => 'Chapter 2: Organic Name Reactions & Mechanisms', 'resources' => 3],
                    ['id' => 'c12-b1', 'subject' => 'Biology', 'title' => 'Chapter 1: Principles of Inheritance and Variation', 'resources' => 2],
                    ['id' => 'c12-cs1', 'subject' => 'Computer Science', 'title' => 'Chapter 1: Data Structures: Stack Implementation in Python', 'resources' => 2],
                ],
                'revision_materials' => [
                    ['title' => 'Class 12 Differential & Integral Calculus Master Formula Handbook', 'type' => 'Formula Sheet', 'format' => 'PDF Guide'],
                    ['title' => 'Class 12 Physics Electrodynamics & Optics Formula Compendium', 'type' => 'Formula Sheet', 'format' => 'PDF Guide'],
                    ['title' => 'Class 12 Organic Chemistry Named Reactions & Conversion Chart', 'type' => 'Concept Chart', 'format' => 'Summary Sheet'],
                ]
            ],
        ],

        // =====================================================================
        // CHAPTER-WISE NOTES LIBRARY (FILTERABLE CARDS)
        // =====================================================================
        'library' => [
            // Class 10 Math & Science
            [
                'id'          => 'res-10-m1',
                'title'       => 'Real Numbers: Fundamental Theorem of Arithmetic & Proofs',
                'class'       => '10',
                'subject'     => 'Mathematics',
                'chapter'     => 'Real Numbers',
                'type'        => 'Revision Notes',
                'description' => 'Complete step-by-step proofs of irrationality, decimal expansions, and high-yield board examination questions.',
                'status'      => 'Available',
                'url'         => null, // Set to actual PDF URL once uploaded, or null for coming soon
                'size'        => '1.8 MB',
                'pages'       => '12 Pages'
            ],
            [
                'id'          => 'res-10-m2',
                'title'       => 'Quadratic Equations: Derivation, Discriminant & Word Problems',
                'class'       => '10',
                'subject'     => 'Mathematics',
                'chapter'     => 'Quadratic Equations',
                'type'        => 'Practice Worksheet',
                'description' => 'Factoring, completing the square, quadratic formula derivation, and 25 graded practice problems.',
                'status'      => 'Available',
                'url'         => null,
                'size'        => '2.1 MB',
                'pages'       => '14 Pages'
            ],
            [
                'id'          => 'res-10-s1',
                'title'       => 'Chemical Reactions: Balanced Equations & Reaction Types',
                'class'       => '10',
                'subject'     => 'Science',
                'chapter'     => 'Chemical Reactions and Equations',
                'type'        => 'Revision Notes',
                'description' => 'Exothermic, endothermic, oxidation-reduction, corrosion, and rancidity explained with color-change examples.',
                'status'      => 'Available',
                'url'         => null,
                'size'        => '2.4 MB',
                'pages'       => '16 Pages'
            ],
            [
                'id'          => 'res-10-s2',
                'title'       => 'Electricity: Ohm\'s Law, Resistance Combinations & Heating Effect',
                'class'       => '10',
                'subject'     => 'Science',
                'chapter'     => 'Electricity',
                'type'        => 'Formula Sheet',
                'description' => 'Formula sheet with series-parallel circuit diagrams, power calculations, and commercial energy units.',
                'status'      => 'Available',
                'url'         => null,
                'size'        => '1.5 MB',
                'pages'       => '8 Pages'
            ],

            // Class 12 Math & Physics & Chemistry
            [
                'id'          => 'res-12-m1',
                'title'       => 'Calculus: Continuity, Differentiability & Chain Rule Methods',
                'class'       => '12',
                'subject'     => 'Mathematics',
                'chapter'     => 'Continuity and Differentiability',
                'type'        => 'Revision Notes',
                'description' => 'Left-hand and right-hand limits, differentiability tests, standard derivatives, and parametric differentiation.',
                'status'      => 'Available',
                'url'         => null,
                'size'        => '3.2 MB',
                'pages'       => '22 Pages'
            ],
            [
                'id'          => 'res-12-p1',
                'title'       => 'Electrostatics: Coulomb\'s Law, Electric Dipoles & Gauss Applications',
                'class'       => '12',
                'subject'     => 'Physics',
                'chapter'     => 'Electric Charges and Fields',
                'type'        => 'Revision Notes',
                'description' => 'Electric flux, derivations of field due to infinite wire, plane sheet, and spherical shell with diagrams.',
                'status'      => 'Available',
                'url'         => null,
                'size'        => '2.8 MB',
                'pages'       => '18 Pages'
            ],
            [
                'id'          => 'res-12-c1',
                'title'       => 'Organic Chemistry: Complete Name Reactions & Synthesis Routes',
                'class'       => '12',
                'subject'     => 'Chemistry',
                'chapter'     => 'Organic Mechanisms',
                'type'        => 'Revision Guide',
                'description' => 'Aldol condensation, Cannizzaro, Sandmeyer, Reimer-Tiemann, and Williamson ether synthesis compiled.',
                'status'      => 'Available',
                'url'         => null,
                'size'        => '2.9 MB',
                'pages'       => '20 Pages'
            ],

            // Class 9 Math & Science
            [
                'id'          => 'res-9-m1',
                'title'       => 'Polynomials: Remainder Theorem, Factor Theorem & Identities',
                'class'       => '9',
                'subject'     => 'Mathematics',
                'chapter'     => 'Polynomials',
                'type'        => 'Revision Notes',
                'description' => 'Clear breakdown of degree, algebraic identities, factoring cubic polynomials, and board prep questions.',
                'status'      => 'Available',
                'url'         => null,
                'size'        => '1.9 MB',
                'pages'       => '11 Pages'
            ],
            [
                'id'          => 'res-9-s1',
                'title'       => 'Motion: Graphical Analysis of Equations of Motion & Numerical Solver',
                'class'       => '9',
                'subject'     => 'Science',
                'chapter'     => 'Motion',
                'type'        => 'Practice Worksheet',
                'description' => 'Distance-time, velocity-time graph interpretation with 20 worked physics numerical problems.',
                'status'      => 'Available',
                'url'         => null,
                'size'        => '2.0 MB',
                'pages'       => '12 Pages'
            ],

            // Class 8 Math & Science
            [
                'id'          => 'res-8-m1',
                'title'       => 'Rational Numbers: Properties, Number Line & Representation',
                'class'       => '8',
                'subject'     => 'Mathematics',
                'chapter'     => 'Rational Numbers',
                'type'        => 'Revision Notes',
                'description' => 'Commutative, associative, distributive properties with intuitive fraction representations.',
                'status'      => 'Available',
                'url'         => null,
                'size'        => '1.4 MB',
                'pages'       => '9 Pages'
            ],
            [
                'id'          => 'res-8-s1',
                'title'       => 'Cell Structure and Functions: Plant vs Animal Cell Microscopy',
                'class'       => '8',
                'subject'     => 'Science',
                'chapter'     => 'Cell Biology',
                'type'        => 'Concept Chart',
                'description' => 'Hand-annotated cell organelle diagrams, functions of nucleus, mitochondria, and cell wall comparison.',
                'status'      => 'Available',
                'url'         => null,
                'size'        => '1.7 MB',
                'pages'       => '10 Pages'
            ],

            // Class 7
            [
                'id'          => 'res-7-m1',
                'title'       => 'Integers: Rules of Signs, Operations & Properties',
                'class'       => '7',
                'subject'     => 'Mathematics',
                'chapter'     => 'Integers',
                'type'        => 'Formula Sheet',
                'description' => 'Easy-to-remember rules for integer multiplication, division, and number line displacements.',
                'status'      => 'Available',
                'url'         => null,
                'size'        => '1.2 MB',
                'pages'       => '7 Pages'
            ],

            // Class 6
            [
                'id'          => 'res-6-m1',
                'title'       => 'Knowing Our Numbers: Place Value, Estimation & Roman Numerals',
                'class'       => '6',
                'subject'     => 'Mathematics',
                'chapter'     => 'Knowing Our Numbers',
                'type'        => 'Revision Notes',
                'description' => 'Indian and International numeration systems, rounding off numbers, and Roman numeral conversion rules.',
                'status'      => 'Available',
                'url'         => null,
                'size'        => '1.3 MB',
                'pages'       => '8 Pages'
            ],
            [
                'id'          => 'res-6-s1',
                'title'       => 'Components of Food: Balanced Diet & Deficiency Diseases Chart',
                'class'       => '6',
                'subject'     => 'Science',
                'chapter'     => 'Components of Food',
                'type'        => 'Concept Chart',
                'description' => 'Carbohydrates, proteins, fats, vitamins, and minerals summary with deficiency prevention pointers.',
                'status'      => 'Available',
                'url'         => null,
                'size'        => '1.1 MB',
                'pages'       => '6 Pages'
            ]
        ],

        // =====================================================================
        // SECTION 7: STUDY RESOURCES & REVISION GUIDES HIGHLIGHTS
        // =====================================================================
        'study_resources' => [
            [
                'title'       => 'Chapter Summaries & Key Points',
                'badge'       => 'High Yield',
                'icon'        => 'book-open',
                'description' => 'Concise, high-yield summaries covering essential definitions, core principles, formulas, and visual diagrams for rapid exam revision.',
                'items'       => ['Point-wise conceptual clarity', 'Important exam definitions', 'Commonly tested diagrams']
            ],
            [
                'title'       => 'Graded Practice Worksheets',
                'badge'       => 'Skill Building',
                'icon'        => 'pencil-alt',
                'description' => 'Structured exercises organized from foundational concept drills to challenging higher-order thinking skill (HOTS) questions.',
                'items'       => ['Level 1: Foundational checks', 'Level 2: Standard school problems', 'Level 3: Higher order reasoning']
            ],
            [
                'title'       => 'Formula Sheets & Concept Maps',
                'badge'       => 'Quick Recall',
                'icon'        => 'lightning',
                'description' => 'Single-page reference sheets containing all mathematical theorems, physics laws, chemical reactions, and dimensional units.',
                'items'       => ['Mathematics formula compendiums', 'Physics unit & sign conventions', 'Chemistry reaction charts']
            ],
            [
                'title'       => 'Previous Year Question Banks',
                'badge'       => 'Exam Focused',
                'icon'        => 'academic-cap',
                'description' => 'Topic-wise segregated questions from previous school and board examinations with model marking schemes and step guidance.',
                'items'       => ['Frequently repeated questions', 'Step-by-step marking rubrics', 'Sample time management strategies']
            ]
        ],

        // =====================================================================
        // SECTION 9: NOTES FAQS
        // =====================================================================
        'faqs' => [
            [
                'q' => 'How do I find notes for my class?',
                'a' => 'You can use the Class Selector cards at the top of this page to choose your class (Class 6 to Class 12). Selecting a class will dynamically filter the subject lists, chapter details, and notes library to show only materials relevant to your grade.'
            ],
            [
                'q' => 'Are notes available for every subject?',
                'a' => 'Notes are provided for our configured curriculum offerings: Mathematics, Science, Social Science, and Computer Studies for Classes 6 to 10; and Mathematics, Physics, Chemistry, Biology, and Computer Science for Classes 11 and 12. We publish notes as modules are taught and updated.'
            ],
            [
                'q' => 'How can I access notes through Telegram?',
                'a' => 'Our Telegram study channel is a central broadcast hub where enrolled students and visitors can receive weekly resource alerts, formula updates, and revision sheets. Once the channel link is officially active, you can click the "Get Notes on Telegram" button to join instantly.'
            ],
            [
                'q' => 'Are PDF downloads available?',
                'a' => 'Yes. Resources with an "Available" badge can be opened or downloaded directly in PDF format once uploaded by the instructor. When a resource is still being digitized, it displays a "Notes Coming Soon" status rather than a broken link.'
            ],
            [
                'q' => 'What should I do if a chapter has no notes?',
                'a' => 'If a chapter or topic shows "Coming Soon", you can reach out via our Admission / Contact page or inform the instructor during your tuition session. Upcoming chapters are prioritized based on school test schedules.'
            ],
            [
                'q' => 'How can I enquire about tuition?',
                'a' => 'Click on any "Get Admission" button on this website to visit our dedicated Admission page. You can review batch timings, submit an enquiry with your grade and subjects, and schedule an initial consultation.'
            ]
        ]
    ];
}
