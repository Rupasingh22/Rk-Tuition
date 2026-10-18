<?php
/**
 * RKTuition - Classes Configuration & Data Store
 *
 * Centralized, dynamic configuration file for all class groups:
 * - Group 1: Classes 6 to 8 (Foundation Stage)
 * - Group 2: Classes 9 to 10 (Secondary & Board Preparation)
 * - Group 3: Classes 11 to 12 (Senior & Advanced Mentorship)
 *
 * All data here is easily configurable and safely rendered with htmlspecialchars() or json_encode().
 */

function getClassesConfig() {
    return [
        // =====================================================================
        // GROUP 1: CLASSES 6 TO 8
        // =====================================================================
        '6-8' => [
            'key'             => '6-8',
            'filename'        => 'sixthToeight.php',
            'title'           => 'Classes 6 to 8 Coaching & Foundation Program',
            'eyebrow'         => 'FOUNDATION YEARS &bull; CLASSES 6, 7 & 8',
            'headline'        => 'Nurturing Curiosity & Strong Academic Foundations',
            'description'     => 'Transitioning students from elementary schooling to structured subject comprehension. We emphasize conceptual clarity, disciplined homework routines, and confidence without academic pressure.',
            'hero_image'      => '../images/services_hero.jpg',
            'hero_fallback'   => 'https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=800&q=80',
            'grade_range'     => 'Classes 6, 7 & 8',
            'grades'          => [
                ['id' => 'class-6', 'num' => '6', 'label' => 'Class 6', 'sub' => 'Primary to Middle School Transition'],
                ['id' => 'class-7', 'num' => '7', 'label' => 'Class 7', 'sub' => 'Intermediate Foundation & Routine'],
                ['id' => 'class-8', 'num' => '8', 'label' => 'Class 8', 'sub' => 'Pre-Secondary Conceptual Rigor'],
            ],
            'curriculum_tag'  => '[CBSE / ICSE / State Board - Configurable]',
            'subjects'        => [
                [
                    'id'          => 'math',
                    'name'        => 'Mathematics',
                    'tag'         => 'Core Logic',
                    'description' => 'Mastering integers, fractions, basic algebra, geometric constructions, and arithmetic problem-solving techniques.',
                    'focus'       => 'Step-by-step logic, calculation precision, and eliminating math anxiety.',
                    'icon'        => 'calculator',
                    'status'      => 'Batches Available'
                ],
                [
                    'id'          => 'science',
                    'name'        => 'Science',
                    'tag'         => 'Scientific Inquiry',
                    'description' => 'Exploring everyday physics, nature of matter, living organisms, and environmental phenomena through real-world examples.',
                    'focus'       => 'Concept visualization, simple experiments, and diagram accuracy.',
                    'icon'        => 'beaker',
                    'status'      => 'Batches Available'
                ],
                [
                    'id'          => 'social-science',
                    'name'        => 'Social Science',
                    'tag'         => 'History, Civics & Geography',
                    'description' => 'Understanding early civilizations, earth geography, resources, and fundamental civic democratic institutions.',
                    'focus'       => 'Interactive storytelling, map skills, and structured key point recall.',
                    'icon'        => 'globe',
                    'status'      => 'Batches Available'
                ],
                [
                    'id'          => 'computer-studies',
                    'name'        => 'Computer Studies',
                    'tag'         => 'Digital Foundations',
                    'description' => 'Foundations of computers, hardware-software basics, algorithmic flowcharts, and introductory digital skills.',
                    'focus'       => 'Logical thinking, computer fundamentals, and safe digital practices.',
                    'icon'        => 'chip',
                    'status'      => 'Batches Available'
                ],
            ],
            'syllabus'        => [
                'class-6' => [
                    'math' => [
                        ['title' => 'Knowing Our Numbers & Whole Numbers', 'category' => 'Number Systems', 'duration' => '3 Weeks', 'status' => 'Core Foundation', 'topics' => ['Place value systems', 'Rounding off numbers', 'Roman numerals', 'Properties of whole numbers']],
                        ['title' => 'Playing with Numbers & Factors', 'category' => 'Number Systems', 'duration' => '2 Weeks', 'status' => 'Core Foundation', 'topics' => ['Factors and multiples', 'Prime and composite numbers', 'Divisibility rules', 'HCF and LCM techniques']],
                        ['title' => 'Basic Geometrical Ideas & Elementary Shapes', 'category' => 'Geometry', 'duration' => '3 Weeks', 'status' => 'Active Term', 'topics' => ['Points, lines and rays', 'Curves, polygons and angles', 'Triangles and quadrilaterals', 'Circles and radius']],
                        ['title' => 'Integers, Fractions & Decimals', 'category' => 'Arithmetic', 'duration' => '3 Weeks', 'status' => 'Active Term', 'topics' => ['Negative numbers on number line', 'Fraction representation', 'Decimals addition and subtraction', 'Word problems']],
                    ],
                    'science' => [
                        ['title' => 'Components of Food & Balanced Diet', 'category' => 'Biology / Health', 'duration' => '2 Weeks', 'status' => 'Active Term', 'topics' => ['Nutrients (Carbs, Proteins, Fats)', 'Deficiency diseases', 'Balanced diet planning', 'Food testing experiments']],
                        ['title' => 'Sorting Materials into Groups', 'category' => 'Chemistry', 'duration' => '2 Weeks', 'status' => 'Active Term', 'topics' => ['Properties of materials', 'Hardness, luster, solubility', 'Transparency (Transparent, Opaque)', 'Density and flotation']],
                        ['title' => 'Getting to Know Plants', 'category' => 'Biology', 'duration' => '3 Weeks', 'status' => 'Upcoming', 'topics' => ['Herbs, shrubs and trees', 'Stem and root systems', 'Leaf venation and transpiration', 'Structure of a flower']],
                        ['title' => 'Motion and Measurement of Distances', 'category' => 'Physics', 'duration' => '2 Weeks', 'status' => 'Upcoming', 'topics' => ['Standard units of measurement', 'Linear vs circular motion', 'Periodic motion', 'Measurement precision']],
                    ],
                    'social-science' => [
                        ['title' => 'What, Where, How and When? (Earliest Societies)', 'category' => 'History', 'duration' => '2 Weeks', 'status' => 'Active Term', 'topics' => ['Hunter-gatherers to settled farmers', 'Archaeological sources', 'Manuscripts and inscriptions']],
                        ['title' => 'The Earth in the Solar System & Globe', 'category' => 'Geography', 'duration' => '2 Weeks', 'status' => 'Active Term', 'topics' => ['Planets and orbits', 'Latitudes and longitudes', 'Time zones and Prime Meridian']],
                    ],
                    'computer-studies' => [
                        ['title' => 'Fundamentals of Computers & Operating Systems', 'category' => 'IT Basics', 'duration' => '2 Weeks', 'status' => 'Active Term', 'topics' => ['Input, Output and Storage devices', 'Memory types (RAM/ROM)', 'Windows GUI essentials']],
                    ]
                ],
                'class-7' => [
                    'math' => [
                        ['title' => 'Integers & Rational Numbers', 'category' => 'Number Systems', 'duration' => '3 Weeks', 'status' => 'Core Foundation', 'topics' => ['Multiplication and division of integers', 'Properties under operations', 'Word problem formulation']],
                        ['title' => 'Fractions, Decimals & Data Handling', 'category' => 'Arithmetic & Stats', 'duration' => '3 Weeks', 'status' => 'Active Term', 'topics' => ['Multiplication of fractions', 'Decimal divisions', 'Mean, median, and mode', 'Double bar graphs']],
                        ['title' => 'Simple Equations & Algebraic Expressions', 'category' => 'Algebra', 'duration' => '3 Weeks', 'status' => 'Active Term', 'topics' => ['Variables and constants', 'Solving linear equations', 'Balancing equations method']],
                        ['title' => 'Lines, Angles & Triangle Properties', 'category' => 'Geometry', 'duration' => '3 Weeks', 'status' => 'Upcoming', 'topics' => ['Complementary and supplementary angles', 'Parallel lines and transversal', 'Angle sum property of triangle', 'Pythagoras theorem']],
                    ],
                    'science' => [
                        ['title' => 'Nutrition in Plants and Animals', 'category' => 'Biology', 'duration' => '3 Weeks', 'status' => 'Active Term', 'topics' => ['Photosynthesis process', 'Heterotrophic modes', 'Human digestive system', 'Ruminants digestion']],
                        ['title' => 'Acids, Bases and Salts', 'category' => 'Chemistry', 'duration' => '2 Weeks', 'status' => 'Active Term', 'topics' => ['Natural indicators (Litmus, Turmeric)', 'Neutralization reactions', 'Everyday applications']],
                        ['title' => 'Heat & Physical and Chemical Changes', 'category' => 'Physics / Chemistry', 'duration' => '3 Weeks', 'status' => 'Upcoming', 'topics' => ['Conduction, convection, radiation', 'Thermometers usage', 'Rusting and prevention', 'Crystallization']],
                    ],
                    'social-science' => [
                        ['title' => 'New Kings and Kingdoms & Delhi Sultanate', 'category' => 'History', 'duration' => '3 Weeks', 'status' => 'Active Term', 'topics' => ['Medieval Indian political changes', 'Administration and revenue', 'Architectural heritage']],
                        ['title' => 'Environment, Air & Water Systems', 'category' => 'Geography', 'duration' => '2 Weeks', 'status' => 'Active Term', 'topics' => ['Atmospheric layers', 'Water cycle and ocean currents', 'Weather vs climate']],
                    ],
                    'computer-studies' => [
                        ['title' => 'Number Systems & Algorithm Development', 'category' => 'Logic', 'duration' => '2 Weeks', 'status' => 'Active Term', 'topics' => ['Binary and decimal conversion', 'Flowchart symbols', 'Stepwise thinking exercises']],
                    ]
                ],
                'class-8' => [
                    'math' => [
                        ['title' => 'Rational Numbers & Linear Equations in One Variable', 'category' => 'Algebra', 'duration' => '3 Weeks', 'status' => 'Core Foundation', 'topics' => ['Properties of rational numbers', 'Solving complex linear equations', 'Word problem modeling']],
                        ['title' => 'Understanding Quadrilaterals & Practical Geometry', 'category' => 'Geometry', 'duration' => '3 Weeks', 'status' => 'Active Term', 'topics' => ['Polygon angle sum', 'Parallelogram, rhombus and rectangle properties', 'Constructing quadrilaterals']],
                        ['title' => 'Squares, Cubes & Roots', 'category' => 'Arithmetic', 'duration' => '2 Weeks', 'status' => 'Active Term', 'topics' => ['Prime factorization method', 'Long division square root', 'Cube roots calculation']],
                        ['title' => 'Comparing Quantities (Percentage, Profit, Compound Interest)', 'category' => 'Commercial Math', 'duration' => '3 Weeks', 'status' => 'Upcoming', 'topics' => ['Discount and tax calculations', 'Compound interest formula', 'Depreciation problems']],
                    ],
                    'science' => [
                        ['title' => 'Crop Production and Management', 'category' => 'Biology / Agri', 'duration' => '2 Weeks', 'status' => 'Active Term', 'topics' => ['Agricultural practices (Tilling, Sowing)', 'Manures vs fertilizers', 'Irrigation methods', 'Harvesting and storage']],
                        ['title' => 'Microorganisms: Friend and Foe', 'category' => 'Biology', 'duration' => '2 Weeks', 'status' => 'Active Term', 'topics' => ['Bacteria, fungi, protozoa, algae', 'Antibiotics and vaccines', 'Food preservation methods']],
                        ['title' => 'Metals and Non-Metals', 'category' => 'Chemistry', 'duration' => '3 Weeks', 'status' => 'Active Term', 'topics' => ['Physical properties (Malleability, Ductility)', 'Chemical reactions with oxygen, water, acids', 'Displacement reactions', 'Uses in daily life']],
                        ['title' => 'Force, Pressure & Sound', 'category' => 'Physics', 'duration' => '3 Weeks', 'status' => 'Upcoming', 'topics' => ['Contact vs non-contact forces', 'Atmospheric and liquid pressure', 'Vibrations and frequency', 'Audible sound spectrum']],
                    ],
                    'social-science' => [
                        ['title' => 'From Trade to Territory: Company Rule', 'category' => 'History', 'duration' => '3 Weeks', 'status' => 'Active Term', 'topics' => ['Battle of Plassey and Buxar', 'Subsidiary Alliance & Doctrine of Lapse', 'Colonial administrative framework']],
                        ['title' => 'Resources, Land, Soil and Water Resources', 'category' => 'Geography', 'duration' => '2 Weeks', 'status' => 'Active Term', 'topics' => ['Classification of resources', 'Soil conservation strategies', 'Water management challenges']],
                    ],
                    'computer-studies' => [
                        ['title' => 'Introduction to Programming & Web Concepts', 'category' => 'Coding', 'duration' => '3 Weeks', 'status' => 'Active Term', 'topics' => ['Conditional logic statements', 'Basic HTML structure and tags', 'Cyber safety and privacy']],
                    ]
                ]
            ],
            'resources'       => [
                ['title' => 'Class 6–8 Mathematics Formula Pocketbook', 'subject' => 'Mathematics', 'type' => 'Formula Sheet', 'desc' => 'Key formulas for perimeter, area, algebraic identities, and arithmetic rules.', 'status' => 'Available for Enrolled Students'],
                ['title' => 'Science Chapter Concept Summaries (Term 1)', 'subject' => 'Science', 'type' => 'Chapter Notes', 'desc' => 'High-yield definitions, diagrams, and experiment recall points.', 'status' => 'Available for Enrolled Students'],
                ['title' => 'Graded Practice Worksheets: Arithmetic & Equations', 'subject' => 'Mathematics', 'type' => 'Worksheet', 'desc' => 'Tiered questions ranging from basic understanding to analytical challenges.', 'status' => 'Available for Enrolled Students'],
                ['title' => 'Social Science Mindmaps & Timeline Charts', 'subject' => 'Social Science', 'type' => 'Revision Guide', 'desc' => 'Visual chronologies and geographical features summary sheets.', 'status' => 'Available for Enrolled Students'],
                ['title' => 'Introductory Computer Studies Practice Drills', 'subject' => 'Computer Studies', 'type' => 'Practice Set', 'desc' => 'Flowchart exercises, binary conversion sheets, and quiz sheets.', 'status' => 'Available for Enrolled Students'],
                ['title' => 'Pre-Exam Term Revision Question Bank', 'subject' => 'All Subjects', 'type' => 'Question Bank', 'desc' => 'Curated collection of frequently tested questions with model answers.', 'status' => 'Available for Enrolled Students']
            ],
            'quiz'            => [
                [
                    'subject' => 'Mathematics',
                    'q'       => 'What is the sum of all interior angles of a quadrilateral?',
                    'options' => ['180 degrees', '360 degrees', '540 degrees', '720 degrees'],
                    'answer'  => 1,
                    'explain' => 'Any quadrilateral can be divided into two triangles. Since each triangle has 180°, the total sum is 2 × 180° = 360°.'
                ],
                [
                    'subject' => 'Mathematics',
                    'q'       => 'What is the value of (-15) + (-20) - (-10)?',
                    'options' => ['-25', '-45', '5', '-15'],
                    'answer'  => 0,
                    'explain' => '(-15) + (-20) = -35. Then -35 - (-10) = -35 + 10 = -25.'
                ],
                [
                    'subject' => 'Science',
                    'q'       => 'Which gas is predominantly released by green plants during daytime photosynthesis?',
                    'options' => ['Carbon Dioxide', 'Oxygen', 'Nitrogen', 'Methane'],
                    'answer'  => 1,
                    'explain' => 'Plants absorb carbon dioxide and water in the presence of sunlight to synthesize glucose and release oxygen.'
                ],
                [
                    'subject' => 'Science',
                    'q'       => 'What property of metals allows them to be beaten into thin sheets?',
                    'options' => ['Ductility', 'Malleability', 'Sonorousness', 'Conductivity'],
                    'answer'  => 1,
                    'explain' => 'Malleability is the physical property allowing metals to be hammered into sheets without shattering (e.g., aluminum foil).'
                ],
                [
                    'subject' => 'Social Science',
                    'q'       => 'Which line of latitude divides the Earth into the Northern and Southern Hemispheres?',
                    'options' => ['Tropic of Cancer', 'Equator (0°)', 'Prime Meridian', 'Tropic of Capricorn'],
                    'answer'  => 1,
                    'explain' => 'The Equator at 0° latitude divides the globe into equal Northern and Southern Hemispheres.'
                ]
            ],
            'planner_defaults' => [
                ['task' => 'Review Mathematics Chapter 1 exercise problems', 'subject' => 'Mathematics', 'done' => false],
                ['task' => 'Draw and label the human digestive system diagram', 'subject' => 'Science', 'done' => false],
                ['task' => 'Revise Social Science timeline of early civilizations', 'subject' => 'Social Science', 'done' => false],
                ['task' => 'Solve 5 flowchart problems in Computer Studies', 'subject' => 'Computer Studies', 'done' => false],
            ],
            'faqs'            => [
                ['q' => 'Which subjects are covered for Classes 6 to 8?', 'a' => 'We offer structured coaching in Mathematics, Science, Social Science, and foundational Computer Studies. Batches can be tailored based on the student\'s school syllabus.'],
                ['q' => 'How are foundational doubts resolved for middle school students?', 'a' => 'We encourage an open, friendly environment where no question is silly. Difficult topics are broken down with relatable examples and physical analogies.'],
                ['q' => 'What educational boards do you support for Classes 6–8?', 'a' => 'Our teaching easily accommodates CBSE, ICSE, and State Board curricula by aligning directly with the student\'s school textbook and term schedule.'],
                ['q' => 'Are study materials and practice worksheets provided?', 'a' => 'Yes, enrolled students receive curated chapter notes, formula sheets, and weekly graded worksheets for regular practice.'],
                ['q' => 'Can parents track daily homework and study progress?', 'a' => 'Yes, we maintain transparent parent communication with periodic updates regarding homework completion and conceptual milestones.'],
                ['q' => 'How can I enquire about joining a batch?', 'a' => 'Click on the "Enquire About Classes" button on this page to schedule an initial consultation and discuss convenient batch timings.']
            ],
            'cta_headline'    => 'Build an Unshakeable Foundation for Classes 6 to 8',
            'cta_sub'         => 'Help your child overcome fear of numbers and scientific concepts with compassionate, structured academic guidance.'
        ],

        // =====================================================================
        // GROUP 2: CLASSES 9 TO 10
        // =====================================================================
        '9-10' => [
            'key'             => '9-10',
            'filename'        => 'ninetheTotenth.php',
            'title'           => 'Classes 9 & 10 Board Preparation & Concept Mastery',
            'eyebrow'         => 'SECONDARY BOARD PREPARATION &bull; CLASSES 9 & 10',
            'headline'        => 'Rigorous Concept Mastery & Board Exam Preparedness',
            'description'     => 'Crucial academic years demanding textbook precision, question paper pattern familiarity, analytical problem-solving, and disciplined revision cycles for secondary board students.',
            'hero_image'      => '../images/exam_prep.jpg',
            'hero_fallback'   => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=800&q=80',
            'grade_range'     => 'Classes 9 & 10',
            'grades'          => [
                ['id' => 'class-9', 'num' => '9', 'label' => 'Class 9', 'sub' => 'Pre-Board Foundation & Analytical Depth'],
                ['id' => 'class-10', 'num' => '10', 'label' => 'Class 10', 'sub' => 'Board Examination Intensive Mastery'],
            ],
            'curriculum_tag'  => '[CBSE / ICSE / State Board - Configurable]',
            'subjects'        => [
                [
                    'id'          => 'math',
                    'name'        => 'Mathematics',
                    'tag'         => 'Analytical Problem-Solving',
                    'description' => 'Polynomials, quadratic equations, coordinate geometry, trigonometry, statistics, and formal geometric proofs.',
                    'focus'       => 'Rigorous theorem derivations, standard question models, and answer presentation speed.',
                    'icon'        => 'calculator',
                    'status'      => 'Enrolling Batches'
                ],
                [
                    'id'          => 'science',
                    'name'        => 'Science',
                    'tag'         => 'Physics, Chemistry & Biology',
                    'description' => 'Deep exploration of mechanics, electricity, chemical reactions, carbon chemistry, life processes, and heredity.',
                    'focus'       => 'Numerical physics problems, chemical equation balancing, and biological diagrams.',
                    'icon'        => 'beaker',
                    'status'      => 'Enrolling Batches'
                ],
                [
                    'id'          => 'social-science',
                    'name'        => 'Social Science',
                    'tag'         => 'History, Civics, Geography & Economics',
                    'description' => 'Nationalist movements, democratic politics, resource development, globalization, and economic development.',
                    'focus'       => 'Structured 3-mark & 5-mark answer writing, map accuracy, and conceptual clarity.',
                    'icon'        => 'globe',
                    'status'      => 'Enrolling Batches'
                ],
                [
                    'id'          => 'computer-studies',
                    'name'        => 'Computer Studies',
                    'tag'         => 'Information Technology / Computer Applications',
                    'description' => 'Object-oriented programming concepts (Python / Java / HTML), cyber ethics, database concepts, and logic building.',
                    'focus'       => 'Hands-on coding syntax, algorithm tracing, and practical lab file assistance.',
                    'icon'        => 'chip',
                    'status'      => 'Enrolling Batches'
                ],
            ],
            'syllabus'        => [
                'class-9' => [
                    'math' => [
                        ['title' => 'Number Systems & Polynomials', 'category' => 'Algebra', 'duration' => '3 Weeks', 'status' => 'Core Foundation', 'topics' => ['Irrational numbers & real numbers representation', 'Remainder and Factor Theorem', 'Algebraic identities factorization']],
                        ['title' => 'Coordinate Geometry & Linear Equations in 2 Variables', 'category' => 'Algebra & Geometry', 'duration' => '3 Weeks', 'status' => 'Active Term', 'topics' => ['Cartesian plane and quadrants', 'Graphing linear equations ax + by + c = 0', 'Finding multiple solutions']],
                        ['title' => 'Lines, Angles & Triangles Congruence', 'category' => 'Geometry', 'duration' => '4 Weeks', 'status' => 'Active Term', 'topics' => ['Axioms and postulates', 'Criteria for triangle congruence (SAS, ASA, SSS, RHS)', 'Inequalities in triangles']],
                        ['title' => 'Quadrilaterals & Circles Theorems', 'category' => 'Geometry', 'duration' => '3 Weeks', 'status' => 'Upcoming', 'topics' => ['Midpoint theorem', 'Chords and angle subtended by arcs', 'Cyclic quadrilaterals']],
                        ['title' => 'Surface Areas, Volumes & Statistics', 'category' => 'Mensuration & Stats', 'duration' => '3 Weeks', 'status' => 'Upcoming', 'topics' => ['Cone, sphere and hemisphere mensuration', 'Mean, median and mode of ungrouped data', 'Histograms and frequency polygons']],
                    ],
                    'science' => [
                        ['title' => 'Matter in Our Surroundings & Is Matter Around Us Pure', 'category' => 'Chemistry', 'duration' => '3 Weeks', 'status' => 'Active Term', 'topics' => ['States of matter and latent heat', 'Evaporation factors', 'Mixtures vs solutions', 'Colloids, suspensions, separation methods']],
                        ['title' => 'The Fundamental Unit of Life & Tissues', 'category' => 'Biology', 'duration' => '3 Weeks', 'status' => 'Active Term', 'topics' => ['Cell organelles structure and function', 'Prokaryotic vs Eukaryotic', 'Plant vs Animal tissues (Meristematic/Permanent)']],
                        ['title' => 'Motion, Force and Laws of Motion', 'category' => 'Physics', 'duration' => '4 Weeks', 'status' => 'Active Term', 'topics' => ['Equations of motion (v = u + at, etc.)', 'Velocity-time graphs', 'Newton\'s three laws of motion', 'Conservation of momentum']],
                        ['title' => 'Gravitation, Work and Energy', 'category' => 'Physics', 'duration' => '3 Weeks', 'status' => 'Upcoming', 'topics' => ['Universal law of gravitation', 'Mass vs weight', 'Kinetic and potential energy', 'Law of conservation of energy']],
                    ],
                    'social-science' => [
                        ['title' => 'The French Revolution & Socialism in Europe', 'category' => 'History', 'duration' => '3 Weeks', 'status' => 'Active Term', 'topics' => ['Estates General and Reign of Terror', 'Russian Revolution causes and impact']],
                        ['title' => 'India: Size and Location & Physical Features', 'category' => 'Geography', 'duration' => '3 Weeks', 'status' => 'Active Term', 'topics' => ['Himalayas, Northern Plains, Peninsular Plateau', 'Coastal plains and Islands']],
                    ],
                    'computer-studies' => [
                        ['title' => 'Computer System Fundamentals & Python Basics', 'category' => 'IT / Coding', 'duration' => '3 Weeks', 'status' => 'Active Term', 'topics' => ['Data types and variables', 'Control structures (if/else)', 'Looping constructs (for/while)']],
                    ]
                ],
                'class-10' => [
                    'math' => [
                        ['title' => 'Real Numbers & Polynomials', 'category' => 'Algebra', 'duration' => '3 Weeks', 'status' => 'Core Foundation', 'topics' => ['Fundamental Theorem of Arithmetic', 'Proving irrationality (√2, √3)', 'Zeros and coefficients relationship of quadratic/cubic polynomials']],
                        ['title' => 'Pair of Linear Equations & Quadratic Equations', 'category' => 'Algebra', 'duration' => '4 Weeks', 'status' => 'Active Term', 'topics' => ['Substitution, elimination and graphical methods', 'Nature of roots (Discriminant)', 'Speed-time and upstream-downstream word problems']],
                        ['title' => 'Arithmetic Progressions (AP)', 'category' => 'Algebra', 'duration' => '2 Weeks', 'status' => 'Active Term', 'topics' => ['General term of AP (an = a + (n-1)d)', 'Sum of first n terms formula', 'Real-life application word problems']],
                        ['title' => 'Triangles (Similarity) & Coordinate Geometry', 'category' => 'Geometry', 'duration' => '4 Weeks', 'status' => 'Active Term', 'topics' => ['Basic Proportionality Theorem (Thales)', 'Similarity criteria (AAA, SSS, SAS)', 'Distance formula and Section formula']],
                        ['title' => 'Introduction to Trigonometry & Heights and Distances', 'category' => 'Trigonometry', 'duration' => '4 Weeks', 'status' => 'Upcoming', 'topics' => ['Trigonometric ratios of standard angles', 'Trigonometric identities proof', 'Angle of elevation and depression applications']],
                        ['title' => 'Circles, Areas Related to Circles & Surface Areas', 'category' => 'Mensuration', 'duration' => '3 Weeks', 'status' => 'Upcoming', 'topics' => ['Tangent theorem and proofs', 'Sector and segment areas', 'Combination of solids (Cylinder, cone, hemisphere)']],
                        ['title' => 'Statistics & Probability', 'category' => 'Data', 'duration' => '2 Weeks', 'status' => 'Upcoming', 'topics' => ['Mean (Step deviation), Median and Mode of grouped data', 'Theoretical probability concepts']],
                    ],
                    'science' => [
                        ['title' => 'Chemical Reactions and Equations & Acids, Bases, Salts', 'category' => 'Chemistry', 'duration' => '4 Weeks', 'status' => 'Core Foundation', 'topics' => ['Balancing redox reactions', 'Types of chemical reactions', 'pH scale and applications in daily life', 'Preparation of Bleaching Powder, Plaster of Paris']],
                        ['title' => 'Metals and Non-Metals & Carbon and its Compounds', 'category' => 'Chemistry', 'duration' => '4 Weeks', 'status' => 'Active Term', 'topics' => ['Reactivity series and metallurgy basics', 'Covalent bonding and tetravalency', 'Homologous series and functional groups', 'Saponification and esterification']],
                        ['title' => 'Life Processes & Control and Coordination', 'category' => 'Biology', 'duration' => '4 Weeks', 'status' => 'Active Term', 'topics' => ['Human nutrition, respiration, circulation, excretion', 'Nephron and heart diagrams', 'Nervous system and reflex arc', 'Plant hormones and tropisms']],
                        ['title' => 'Light: Reflection and Refraction', 'category' => 'Physics', 'duration' => '4 Weeks', 'status' => 'Active Term', 'topics' => ['Mirror and lens formulas with sign convention', 'Ray diagrams construction', 'Refractive index and Snell\'s law', 'Magnification calculations']],
                        ['title' => 'The Human Eye & Electricity and Magnetic Effects', 'category' => 'Physics', 'duration' => '4 Weeks', 'status' => 'Upcoming', 'topics' => ['Defects of vision (Myopia/Hypermetropia)', 'Ohm\'s Law and resistors in series/parallel', 'Electric power and Joule\'s heating law', 'Fleming\'s Left-Hand Rule & Solenoid']],
                    ],
                    'social-science' => [
                        ['title' => 'The Rise of Nationalism in Europe & India', 'category' => 'History', 'duration' => '3 Weeks', 'status' => 'Active Term', 'topics' => ['Unification of Italy and Germany', 'Non-Cooperation and Civil Disobedience movements', 'Salt March and sense of collective belonging']],
                        ['title' => 'Resources, Agriculture, Minerals & Manufacturing', 'category' => 'Geography', 'duration' => '3 Weeks', 'status' => 'Active Term', 'topics' => ['Cropping seasons and major crops', 'Conventional vs non-conventional energy', 'Map skills for board exams']],
                        ['title' => 'Power Sharing, Federalism, Money and Credit', 'category' => 'Civics / Eco', 'duration' => '3 Weeks', 'status' => 'Active Term', 'topics' => ['Belgium vs Sri Lanka case studies', 'Decentralization in India', 'Formal vs informal credit sources']],
                    ],
                    'computer-studies' => [
                        ['title' => 'HTML, CSS & Cyber Ethics / Python Programming', 'category' => 'Applications', 'duration' => '3 Weeks', 'status' => 'Active Term', 'topics' => ['Web page structure and forms', 'Cyber laws and digital footprint', 'Functions and string manipulation']],
                    ]
                ]
            ],
            'resources'       => [
                ['title' => 'Class 10 Mathematics Board Formula Cheat Sheet', 'subject' => 'Mathematics', 'type' => 'Formula Sheet', 'desc' => 'Complete compilation of all textbook formulas, algebraic identities, and trigonometry values.', 'status' => 'Available for Enrolled Students'],
                ['title' => 'Science Blueprint: Derivations & Chemical Equations', 'subject' => 'Science', 'type' => 'Chapter Notes', 'desc' => 'High-frequency balanced chemical reactions, physics ray diagrams, and biology definitions.', 'status' => 'Available for Enrolled Students'],
                ['title' => 'High-Weightage Board Questions Bank (Solved)', 'subject' => 'Mathematics & Science', 'type' => 'Question Bank', 'desc' => 'Step-by-step marking scheme solutions for 3-mark and 5-mark board pattern questions.', 'status' => 'Available for Enrolled Students'],
                ['title' => 'Social Science 5-Mark Answer Structuring Guide', 'subject' => 'Social Science', 'type' => 'Revision Guide', 'desc' => 'Templates on how to organize historical timelines and geographical explanations for top marks.', 'status' => 'Available for Enrolled Students'],
                ['title' => 'Timed Full-Syllabus Mock Test Papers', 'subject' => 'All Subjects', 'type' => 'Mock Paper', 'desc' => 'Exam-hall simulated test papers with answer keys and error analysis sheets.', 'status' => 'Available for Enrolled Students'],
                ['title' => 'Class 9–10 Computer Applications Lab Code Drills', 'subject' => 'Computer Studies', 'type' => 'Code Drills', 'desc' => 'Standard algorithm exercises and practical syntax templates.', 'status' => 'Available for Enrolled Students']
            ],
            'quiz'            => [
                [
                    'subject' => 'Mathematics',
                    'q'       => 'If the discriminant (b² - 4ac) of a quadratic equation is greater than zero, what is the nature of its roots?',
                    'options' => ['No real roots', 'Two real and equal roots', 'Two real and distinct roots', 'Imaginary roots'],
                    'answer'  => 2,
                    'explain' => 'When D > 0, the quadratic formula yields two distinct real numbers as solutions.'
                ],
                [
                    'subject' => 'Mathematics',
                    'q'       => 'What is the value of (sin² 30° + cos² 30°)?',
                    'options' => ['0', '1/2', '1', '√3/2'],
                    'answer'  => 2,
                    'explain' => 'By the fundamental trigonometric identity, sin² θ + cos² θ = 1 for any angle θ.'
                ],
                [
                    'subject' => 'Science',
                    'q'       => 'What type of chemical reaction occurs when quicklime (CaO) reacts vigorously with water?',
                    'options' => ['Decomposition reaction', 'Combination and Exothermic reaction', 'Endothermic displacement', 'Double displacement'],
                    'answer'  => 1,
                    'explain' => 'CaO + H₂O → Ca(OH)₂ (slaked lime) + Heat. Two substances combine into one and heat is released, making it a combination exothermic reaction.'
                ],
                [
                    'subject' => 'Science',
                    'q'       => 'According to Ohm\'s Law, what happens to current if resistance is doubled while voltage remains constant?',
                    'options' => ['Current doubles', 'Current is halved', 'Current remains unchanged', 'Current quadruples'],
                    'answer'  => 1,
                    'explain' => 'From I = V / R, current is inversely proportional to resistance. Doubling R halves the current.'
                ],
                [
                    'subject' => 'Social Science',
                    'q'       => 'In which year did Mahatma Gandhi launch the historic Salt March from Sabarmati to Dandi?',
                    'options' => ['1920', '1925', '1930', '1942'],
                    'answer'  => 2,
                    'explain' => 'The Dandi March started on 12 March 1930 and marked the inception of the Civil Disobedience Movement.'
                ]
            ],
            'planner_defaults' => [
                ['task' => 'Solve 10 quadratic word problems from past papers', 'subject' => 'Mathematics', 'done' => false],
                ['task' => 'Practice ray diagrams for concave and convex mirrors', 'subject' => 'Science', 'done' => false],
                ['task' => 'Write point-wise answer for causes of Non-Cooperation', 'subject' => 'Social Science', 'done' => false],
                ['task' => 'Memorize trigonometric identities and practice proofs', 'subject' => 'Mathematics', 'done' => false],
            ],
            'faqs'            => [
                ['q' => 'How does RKTuition prepare Class 10 students for board examinations?', 'a' => 'We focus on conceptual mastery of textbooks, rigorous practice of past board question patterns, structured answer writing, and multiple timed mock tests with detailed error feedback.'],
                ['q' => 'Is individual doubt-solving provided for numerical problems in Science & Math?', 'a' => 'Yes, our small batch sizes ensure dedicated time is allocated for step-by-step numerical calculations, derivations, and chemical equations.'],
                ['q' => 'Which educational boards are supported for Classes 9 and 10?', 'a' => 'We support CBSE, ICSE, and State Board curricula, adapting our chapter progress to the student\'s school textbook and assessment blueprints.'],
                ['q' => 'Are past board question papers and sample papers solved in class?', 'a' => 'Yes, regular sessions are dedicated to analyzing high-weightage 3-mark and 5-mark question models and marking scheme requirements.'],
                ['q' => 'How can students manage school tests alongside tuition revisions?', 'a' => 'We provide structured study plans and time-management strategies that synchronize tuition chapter revisions with ongoing school schedules.'],
                ['q' => 'How do I enrol my child for Class 9 or 10 batches?', 'a' => 'Click "Enquire About Classes" to schedule a preliminary discussion where we assess the student\'s current academic baseline and assign an appropriate batch.']
            ],
            'cta_headline'    => 'Achieve Academic Distinction in Classes 9 & 10',
            'cta_sub'         => 'Equip your child with conceptual depth, disciplined exam techniques, and confidence for secondary board evaluations.'
        ],

        // =====================================================================
        // GROUP 3: CLASSES 11 TO 12
        // =====================================================================
        '11-12' => [
            'key'             => '11-12',
            'filename'        => 'eleventhTotwelth.php',
            'title'           => 'Classes 11 & 12 Advanced Subject Coaching & Mentorship',
            'eyebrow'         => 'SENIOR SECONDARY &bull; CLASSES 11 & 12',
            'headline'        => 'Advanced Subject Depth, Analytical Rigor & Exam Readiness',
            'description'     => 'Specialized coaching tailored for senior secondary students. We bridge the significant conceptual leap from Class 10 to 11–12 with in-depth derivations, higher-order problem solving, and structured academic discipline.',
            'hero_image'      => '../images/exam_prep.jpg',
            'hero_fallback'   => 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&w=800&q=80',
            'grade_range'     => 'Classes 11 & 12',
            'grades'          => [
                ['id' => 'class-11', 'num' => '11', 'label' => 'Class 11', 'sub' => 'Crucial Foundation & Deep Theoretical Leap'],
                ['id' => 'class-12', 'num' => '12', 'label' => 'Class 12', 'sub' => 'Board Examination Rigor & Career Milestones'],
            ],
            'curriculum_tag'  => '[Science & Math Streams / Configurable]',
            'subjects'        => [
                [
                    'id'          => 'math',
                    'name'        => 'Mathematics',
                    'tag'         => 'Calculus & Vectors',
                    'description' => 'Calculus (Limits, Continuity, Differentiation, Integration), Vectors, 3D Geometry, Probability, and Matrices.',
                    'focus'       => 'Step-by-step mathematical proofs, multi-step calculus problems, and analytical derivations.',
                    'icon'        => 'calculator',
                    'status'      => 'Enrolling Batches'
                ],
                [
                    'id'          => 'physics',
                    'name'        => 'Physics',
                    'tag'         => 'Mechanics, Electromagnetism & Optics',
                    'description' => 'Kinematics, rotational dynamics, thermodynamics, electrostatics, current electricity, optics, and modern physics.',
                    'focus'       => 'Mathematical derivations, vector calculus applications, and numerical problem solving.',
                    'icon'        => 'lightning-bolt',
                    'status'      => 'Configurable Stream'
                ],
                [
                    'id'          => 'chemistry',
                    'name'        => 'Chemistry',
                    'tag'         => 'Physical, Organic & Inorganic',
                    'description' => 'Atomic structure, chemical equilibrium, thermodynamics, reaction mechanisms, coordination compounds, and kinetics.',
                    'focus'       => 'Reaction mechanisms, physical chemistry numericals, and structured organic synthesis pathways.',
                    'icon'        => 'beaker',
                    'status'      => 'Configurable Stream'
                ],
                [
                    'id'          => 'biology',
                    'name'        => 'Biology',
                    'tag'         => 'Physiology, Genetics & Biotechnology',
                    'description' => 'Human physiology, plant physiology, cell biology, genetics, molecular inheritance, biotechnology, and ecology.',
                    'focus'       => 'Detailed physiological processes, genetic crosses, and technical terminology precision.',
                    'icon'        => 'dna',
                    'status'      => 'Configurable Stream'
                ],
                [
                    'id'          => 'computer-science',
                    'name'        => 'Computer Science',
                    'tag'         => 'Python / C++ / SQL & Data Structures',
                    'description' => 'Advanced Python programming, data structures (stacks, queues), relational databases (SQL), and computer networks.',
                    'focus'       => 'Algorithmic efficiency, clean code implementation, and database query mastery.',
                    'icon'        => 'chip',
                    'status'      => 'Enrolling Batches'
                ],
            ],
            'syllabus'        => [
                'class-11' => [
                    'math' => [
                        ['title' => 'Sets, Relations and Functions', 'category' => 'Foundations', 'duration' => '3 Weeks', 'status' => 'Core Foundation', 'topics' => ['Subset and power sets', 'Venn diagrams', 'Domain, range and types of functions']],
                        ['title' => 'Trigonometric Functions & Complex Numbers', 'category' => 'Algebra & Trig', 'duration' => '4 Weeks', 'status' => 'Active Term', 'topics' => ['Radian measures and circular functions', 'Multiple angle formulas', 'Complex numbers in argand plane', 'Quadratic equations with complex roots']],
                        ['title' => 'Permutations, Combinations & Binomial Theorem', 'category' => 'Algebra', 'duration' => '3 Weeks', 'status' => 'Active Term', 'topics' => ['Fundamental principle of counting', 'nPr and nCr applications', 'General and middle term of binomial expansion']],
                        ['title' => 'Sequences, Series & Straight Lines', 'category' => 'Coordinate Geo', 'duration' => '4 Weeks', 'status' => 'Upcoming', 'topics' => ['AP and GP properties', 'Slope of lines and various forms of equations', 'Distance of a point from a line']],
                        ['title' => 'Limits and Derivatives (Introduction to Calculus)', 'category' => 'Calculus', 'duration' => '3 Weeks', 'status' => 'Upcoming', 'topics' => ['Intuitive idea of limits', 'Standard limit theorems', 'First principle derivative of polynomials and trig functions']],
                    ],
                    'physics' => [
                        ['title' => 'Units and Measurements & Motion in a Straight Line / Plane', 'category' => 'Kinematics', 'duration' => '4 Weeks', 'status' => 'Core Foundation', 'topics' => ['Dimensional analysis', 'Vectors addition and dot/cross products', 'Projectile motion derivations', 'Uniform circular motion']],
                        ['title' => 'Laws of Motion, Work, Energy and Power', 'category' => 'Mechanics', 'duration' => '4 Weeks', 'status' => 'Active Term', 'topics' => ['Friction coefficients and banking of roads', 'Work-energy theorem for variable force', 'Collisions in 1D and 2D']],
                        ['title' => 'System of Particles & Rotational Motion', 'category' => 'Mechanics', 'duration' => '4 Weeks', 'status' => 'Active Term', 'topics' => ['Centre of mass equations', 'Torque and angular momentum conservation', 'Moment of inertia of standard bodies']],
                        ['title' => 'Gravitation, Thermodynamics & Oscillations/Waves', 'category' => 'Thermal / Waves', 'duration' => '4 Weeks', 'status' => 'Upcoming', 'topics' => ['Kepler\'s laws and escape velocity', 'First and second law of thermodynamics', 'Simple Harmonic Motion (SHM) equation', 'Doppler effect and wave speed']],
                    ],
                    'chemistry' => [
                        ['title' => 'Some Basic Concepts of Chemistry & Structure of Atom', 'category' => 'Physical', 'duration' => '4 Weeks', 'status' => 'Core Foundation', 'topics' => ['Mole concept and stoichiometry calculations', 'Bohr\'s model and quantum numbers', 'de Broglie relationship & Heisenberg principle']],
                        ['title' => 'Chemical Bonding and Molecular Structure', 'category' => 'Inorganic', 'duration' => '3 Weeks', 'status' => 'Active Term', 'topics' => ['VSEPR theory and hybridization', 'Molecular Orbital Theory (MOT)', 'Hydrogen bonding effects']],
                        ['title' => 'Chemical Thermodynamics & Equilibrium', 'category' => 'Physical', 'duration' => '4 Weeks', 'status' => 'Active Term', 'topics' => ['Enthalpy, entropy and Gibbs free energy', 'Le Chatelier\'s principle', 'pH and buffer solutions equilibrium']],
                        ['title' => 'Organic Chemistry: Basic Principles & Hydrocarbons', 'category' => 'Organic', 'duration' => '4 Weeks', 'status' => 'Upcoming', 'topics' => ['IUPAC nomenclature', 'Inductive and resonance effects', 'Reaction intermediates', 'Alkanes, alkenes and alkynes synthesis']],
                    ],
                    'biology' => [
                        ['title' => 'Diversity in the Living World & Plant/Animal Kingdom', 'category' => 'Taxonomy', 'duration' => '3 Weeks', 'status' => 'Core Foundation', 'topics' => ['Five kingdom classification', 'Algae, bryophytes, pteridophytes', 'Non-chordates and chordates phyla']],
                        ['title' => 'Cell Structure & Cell Cycle and Division', 'category' => 'Cytology', 'duration' => '3 Weeks', 'status' => 'Active Term', 'topics' => ['Mitosis and Meiosis stages', 'Synaptonemal complex', 'Biomolecules (Proteins, Lipids, Nucleic acids)']],
                        ['title' => 'Human Physiology Systems', 'category' => 'Physiology', 'duration' => '4 Weeks', 'status' => 'Upcoming', 'topics' => ['Breathing and exchange of gases', 'Body fluids and cardiac cycle', 'Excretory products and nephron counter-current']],
                    ],
                    'computer-science' => [
                        ['title' => 'Computer Systems & Python Basics', 'category' => 'Programming', 'duration' => '3 Weeks', 'status' => 'Active Term', 'topics' => ['Memory hierarchy', 'Control flow statements', 'Lists, tuples and dictionaries in Python']],
                    ]
                ],
                'class-12' => [
                    'math' => [
                        ['title' => 'Relations, Functions & Inverse Trigonometric Functions', 'category' => 'Algebra', 'duration' => '3 Weeks', 'status' => 'Core Foundation', 'topics' => ['One-one and onto functions', 'Domain, range and principal value branches of ITF', 'Inverse trig identities']],
                        ['title' => 'Matrices and Determinants', 'category' => 'Algebra', 'duration' => '3 Weeks', 'status' => 'Active Term', 'topics' => ['Properties of determinants', 'Adjoint and inverse of matrix', 'Solving linear systems using Matrix method (Cramer\'s rule)']],
                        ['title' => 'Continuity, Differentiability & Applications of Derivatives', 'category' => 'Calculus', 'duration' => '5 Weeks', 'status' => 'Active Term', 'topics' => ['Chain rule, logarithmic and implicit differentiation', 'Rate of change of quantities', 'Maxima and minima word problems']],
                        ['title' => 'Integrals (Definite and Indefinite) & Differential Equations', 'category' => 'Calculus', 'duration' => '5 Weeks', 'status' => 'Active Term', 'topics' => ['Integration by parts and partial fractions', 'Properties of definite integrals', 'Separation of variables and linear differential equations']],
                        ['title' => 'Vectors, 3-Dimensional Geometry & Linear Programming', 'category' => 'Geometry', 'duration' => '4 Weeks', 'status' => 'Upcoming', 'topics' => ['Dot and cross product applications', 'Equation of lines in space and shortest distance', 'LPP graphical feasible region solution']],
                        ['title' => 'Probability & Bayes\' Theorem', 'category' => 'Probability', 'duration' => '3 Weeks', 'status' => 'Upcoming', 'topics' => ['Conditional probability and multiplication theorem', 'Bayes\' Theorem formulation', 'Probability distribution of random variables']],
                    ],
                    'physics' => [
                        ['title' => 'Electrostatics & Electric Potential and Capacitance', 'category' => 'Electromagnetism', 'duration' => '4 Weeks', 'status' => 'Core Foundation', 'topics' => ['Coulomb\'s Law and Gauss\'s Theorem applications', 'Equipotential surfaces', 'Capacitance of parallel plate capacitor with dielectric']],
                        ['title' => 'Current Electricity & Moving Charges and Magnetism', 'category' => 'Electromagnetism', 'duration' => '4 Weeks', 'status' => 'Active Term', 'topics' => ['Kirchhoff\'s laws and Wheatstone bridge', 'Biot-Savart Law and Ampere\'s circuital law', 'Torque on magnetic dipole & Cyclotron concept']],
                        ['title' => 'Electromagnetic Induction & Alternating Currents', 'category' => 'Electromagnetism', 'duration' => '4 Weeks', 'status' => 'Active Term', 'topics' => ['Faraday\'s law and Lenz\'s law', 'Self and mutual inductance', 'LCR series circuit resonance', 'Transformers efficiency']],
                        ['title' => 'Ray Optics, Wave Optics & Modern Physics', 'category' => 'Optics / Modern', 'duration' => '5 Weeks', 'status' => 'Upcoming', 'topics' => ['Lens maker\'s formula and compound microscope', 'Young\'s double slit experiment derivation', 'Photoelectric effect equation', 'Semiconductor diodes and rectifiers']],
                    ],
                    'chemistry' => [
                        ['title' => 'Solutions, Electrochemistry & Chemical Kinetics', 'category' => 'Physical', 'duration' => '5 Weeks', 'status' => 'Core Foundation', 'topics' => ['Raoult\'s Law and colligative properties', 'Nernst equation calculations', 'Rate law and order of reactions', 'Arrhenius equation']],
                        ['title' => 'Coordination Compounds & d- and f-Block Elements', 'category' => 'Inorganic', 'duration' => '4 Weeks', 'status' => 'Active Term', 'topics' => ['Transition elements trends and lanthanoid contraction', 'Werner\'s theory and Crystal Field Theory (CFT)', 'Isomerism in coordination complexes']],
                        ['title' => 'Haloalkanes, Alcohols, Phenols and Ethers', 'category' => 'Organic', 'duration' => '4 Weeks', 'status' => 'Active Term', 'topics' => ['SN1 and SN2 reaction mechanisms', 'Reimer-Tiemann and Kolbe\'s reactions', 'Acidity of phenols']],
                        ['title' => 'Aldehydes, Ketones, Carboxylic Acids & Amines', 'category' => 'Organic', 'duration' => '5 Weeks', 'status' => 'Upcoming', 'topics' => ['Nucleophilic addition mechanisms', 'Aldol condensation and Cannizzaro reaction', 'Diazonium salts synthetic applications', 'Biomolecules (Glucose structure, peptide bond)']],
                    ],
                    'biology' => [
                        ['title' => 'Sexual Reproduction in Flowering Plants & Human Reproduction', 'category' => 'Reproduction', 'duration' => '4 Weeks', 'status' => 'Core Foundation', 'topics' => ['Double fertilization process', 'Spermatogenesis and Oogenesis', 'Menstrual cycle hormones', 'Embryo development']],
                        ['title' => 'Principles of Inheritance and Variation & Molecular Basis', 'category' => 'Genetics', 'duration' => '5 Weeks', 'status' => 'Active Term', 'topics' => ['Mendelian crosses and sex determination', 'DNA replication and transcription mechanisms', 'Genetic code and translation (Operon model)']],
                        ['title' => 'Biotechnology Principles and Applications', 'category' => 'Biotech', 'duration' => '3 Weeks', 'status' => 'Upcoming', 'topics' => ['Recombinant DNA technology steps', 'PCR and gel electrophoresis', 'Bt cotton and gene therapy']],
                    ],
                    'computer-science' => [
                        ['title' => 'Python Functions, Data Structures (Stack) & SQL', 'category' => 'Computer Science', 'duration' => '4 Weeks', 'status' => 'Active Term', 'topics' => ['Recursion and scope rules', 'Stack operations (push/pop implementation)', 'Relational database joins and aggregate queries']],
                    ]
                ]
            ],
            'resources'       => [
                ['title' => 'Class 12 Calculus Mastery & Derivation Compendium', 'subject' => 'Mathematics', 'type' => 'Formula Sheet', 'desc' => 'Comprehensive integration standards, trigonometric substitutions, and maxima-minima proofs.', 'status' => 'Available for Enrolled Students'],
                ['title' => 'Physics Derivations Handbook & Electromagnetism Guide', 'subject' => 'Physics', 'type' => 'Chapter Notes', 'desc' => 'Every essential board derivation with diagrams and sign convention rules.', 'status' => 'Available for Enrolled Students'],
                ['title' => 'Organic Chemistry Named Reactions & Synthesis Roadmap', 'subject' => 'Chemistry', 'type' => 'Mechanism Sheet', 'desc' => 'Step-by-step reaction mechanisms, conversions, and chemical distinguishing tests.', 'status' => 'Available for Enrolled Students'],
                ['title' => 'Biology Diagrams & Physiological Flowcharts', 'subject' => 'Biology', 'type' => 'Diagram Notes', 'desc' => 'Accurate biological sketches, genetic cross tables, and terminology flashcards.', 'status' => 'Available for Enrolled Students'],
                ['title' => 'Computer Science SQL & Python Stack Program Repository', 'subject' => 'Computer Science', 'type' => 'Code Repository', 'desc' => 'Verified program implementations for board practical and theoretical questions.', 'status' => 'Available for Enrolled Students'],
                ['title' => 'Senior Secondary Timed Mock Papers & Marking Schemes', 'subject' => 'All Subjects', 'type' => 'Mock Paper', 'desc' => 'Rigorous sample question papers with detailed step-wise answer models.', 'status' => 'Available for Enrolled Students']
            ],
            'quiz'            => [
                [
                    'subject' => 'Mathematics',
                    'q'       => 'What is the derivative of e^(2x) with respect to x?',
                    'options' => ['e^(2x)', '2 · e^(2x)', '½ · e^(2x)', '2x · e^(2x-1)'],
                    'answer'  => 1,
                    'explain' => 'By applying the chain rule: d/dx[e^(2x)] = e^(2x) · d/dx[2x] = 2e^(2x).'
                ],
                [
                    'subject' => 'Physics',
                    'q'       => 'What is the SI unit of magnetic flux?',
                    'options' => ['Tesla (T)', 'Weber (Wb)', 'Henry (H)', 'Gauss (G)'],
                    'answer'  => 1,
                    'explain' => 'Magnetic flux is measured in Webers (Wb), where 1 Wb = 1 Tesla · m².'
                ],
                [
                    'subject' => 'Chemistry',
                    'q'       => 'Which rule states that no two electrons in an atom can have the same set of four quantum numbers?',
                    'options' => ['Hund\'s Rule', 'Aufbau Principle', 'Pauli Exclusion Principle', 'Heisenberg Uncertainty Principle'],
                    'answer'  => 2,
                    'explain' => 'The Pauli Exclusion Principle dictates that each orbital can hold at most two electrons with opposite spins.'
                ],
                [
                    'subject' => 'Biology',
                    'q'       => 'Which enzyme is responsible for unwinding the double helix during DNA replication?',
                    'options' => ['DNA Polymerase', 'Helicase', 'DNA Ligase', 'RNA Primase'],
                    'answer'  => 1,
                    'explain' => 'Helicase breaks hydrogen bonds between nucleotide base pairs to unwind and separate DNA strands.'
                ],
                [
                    'subject' => 'Computer Science',
                    'q'       => 'Which data structure operates on the "Last-In, First-Out" (LIFO) principle?',
                    'options' => ['Queue', 'Stack', 'Linked List', 'Array'],
                    'answer'  => 1,
                    'explain' => 'A Stack adds and removes elements from the top end following the LIFO principle.'
                ]
            ],
            'planner_defaults' => [
                ['task' => 'Solve 8 definite integral problems using substitution', 'subject' => 'Mathematics', 'done' => false],
                ['task' => 'Derive lens maker\'s formula and solve 2 numericals', 'subject' => 'Physics', 'done' => false],
                ['task' => 'Write reaction mechanisms for Aldol and Cannizzaro', 'subject' => 'Chemistry', 'done' => false],
                ['task' => 'Implement stack push and pop operations in Python', 'subject' => 'Computer Science', 'done' => false],
            ],
            'faqs'            => [
                ['q' => 'How does RKTuition handle the conceptual leap from Class 10 to Class 11?', 'a' => 'Class 11 introduces abstract theoretical depth and heavy mathematical derivations. We start with essential mathematical tools (calculus, vectors, logarithms) before tackling challenging physics and chemistry topics.'],
                ['q' => 'Which subject streams are supported for Classes 11 and 12?', 'a' => 'We offer specialized coaching for Mathematics, Physics, Chemistry, Biology, and Computer Science. Subject combinations can be personalized based on the student\'s stream.'],
                ['q' => 'Are step-by-step derivations taught thoroughly for board exams?', 'a' => 'Yes, every mathematical proof and physics derivation is broken down into structured steps so students understand each logical link rather than memorizing.'],
                ['q' => 'How are numerical problems and practice sessions managed?', 'a' => 'Sessions combine theoretical exposition with guided problem modeling, followed by independent student problem sets with immediate doubt feedback.'],
                ['q' => 'What resources are provided for senior secondary students?', 'a' => 'Enrolled students receive formula compendiums, derivation handbooks, chapter summary mindmaps, and timed mock test papers with step-wise marking schemes.'],
                ['q' => 'How do I enrol for Class 11 or 12 coaching?', 'a' => 'Click "Enquire About Classes" to discuss your child\'s subject requirements and schedule an initial consultation.']
            ],
            'cta_headline'    => 'Master Senior Secondary with Advanced Academic Mentorship',
            'cta_sub'         => 'Navigate Classes 11 & 12 with conceptual clarity, analytical rigor, and dedicated academic support tailored to your stream.'
        ]
    ];
}
