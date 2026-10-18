<?php
/**
 * RKTuition - Admission & Enrollment Configuration
 *
 * Central configuration file for the Get Admission page, including
 * application steps, class offerings, subject mapping, learning modes,
 * official contact details, and admission FAQs.
 */

function getAdmissionConfig() {
    return [
        'hero' => [
            'eyebrow'  => 'Admissions & Mentorship Enrollment',
            'headline' => 'Take the Next Step in Your Learning Journey.',
            'subtext'  => 'Partner with experienced educators who prioritize conceptual mastery, structured homework routines, and personalized academic confidence. Reserve an initial discussion for your student today.',
            'badge'    => 'Academic Year Batches Open',
        ],

        // 4-Step Transparent Admission Process
        'process_steps' => [
            [
                'step'        => '01',
                'title'       => 'Submit an Enquiry',
                'description' => 'Fill out our confidential student enquiry form with your grade, preferred subjects, and academic goals.',
                'icon'        => 'clipboard-list'
            ],
            [
                'step'        => '02',
                'title'       => 'Discuss Requirements',
                'description' => 'Our lead instructor connects with parents and students to discuss syllabus focus, strengths, and target areas.',
                'icon'        => 'chat-bubble'
            ],
            [
                'step'        => '03',
                'title'       => 'Confirm Available Options',
                'description' => 'We review suitable batch timings, small-group options, or 1-on-1 mentorship slots to match your routine.',
                'icon'        => 'calendar'
            ],
            [
                'step'        => '04',
                'title'       => 'Receive Further Guidance',
                'description' => 'Receive session schedules, diagnostic orientation materials, and tailored study resources to begin learning.',
                'icon'        => 'academic-cap'
            ]
        ],

        // Class options and subject mapping
        'classes' => [
            '6'  => [
                'name'     => 'Class 6',
                'stage'    => 'Middle School Foundation',
                'subjects' => ['Mathematics', 'Science', 'Social Science', 'Computer Studies']
            ],
            '7'  => [
                'name'     => 'Class 7',
                'stage'    => 'Middle School Core',
                'subjects' => ['Mathematics', 'Science', 'Social Science', 'Computer Studies']
            ],
            '8'  => [
                'name'     => 'Class 8',
                'stage'    => 'Pre-Secondary Bridge',
                'subjects' => ['Mathematics', 'Science', 'Social Science', 'Computer Studies']
            ],
            '9'  => [
                'name'     => 'Class 9',
                'stage'    => 'Secondary Board Foundation',
                'subjects' => ['Mathematics', 'Science', 'Social Science', 'Computer Studies']
            ],
            '10' => [
                'name'     => 'Class 10',
                'stage'    => 'Secondary Board Examination',
                'subjects' => ['Mathematics', 'Science', 'Social Science', 'Computer Studies']
            ],
            '11' => [
                'name'     => 'Class 11',
                'stage'    => 'Senior Secondary & Entrance Core',
                'subjects' => ['Mathematics', 'Physics', 'Chemistry', 'Biology', 'Computer Science']
            ],
            '12' => [
                'name'     => 'Class 12',
                'stage'    => 'Senior Secondary & Competitive Mentorship',
                'subjects' => ['Mathematics', 'Physics', 'Chemistry', 'Biology', 'Computer Science']
            ],
        ],

        // Learning Modes
        'learning_modes' => [
            [
                'id'          => 'in_person',
                'label'       => 'In-Person Coaching Center',
                'desc'        => 'Physical classroom sessions with interactive whiteboard & direct supervision.',
                'icon'        => 'building'
            ],
            [
                'id'          => 'online',
                'label'       => 'Live Online Mentorship',
                'desc'        => 'Interactive digital classes with screen sharing, recorded revisions & digital notes.',
                'icon'        => 'video'
            ],
            [
                'id'          => 'hybrid',
                'label'       => 'Hybrid (Flexible Mode)',
                'desc'        => 'Combination of weekday classroom sessions and weekend online doubt-clearing.',
                'icon'        => 'sparkles'
            ]
        ],

        // Contact & Enquiry Guidance (Configurable real placeholders)
        'contact' => [
            'phone'         => '+91 9153832633',
            'phone_raw'     => '+919153832633',
            'email'         => 'rupasingh10456@gmail.com',
            'hours'         => 'Monday – Saturday: 9:00 AM – 7:30 PM IST',
            'location'      => 'Shree Sidhivinayak Meera , Aeronest society , Pune - 411001',
            'response_time' => 'Typically responds within 24 business hours',
            'guidance_note' => 'Please provide accurate phone and grade information so we can provide relevant batch schedule and curriculum details during our initial discussion.'
        ],

        // Admission FAQs
        'faqs' => [
            [
                'q' => 'How do I enquire about admission?',
                'a' => 'You can fill out the Admission Enquiry Form above with your student details, grade, and subjects of interest. Alternatively, you can reach out directly via phone or email listed in our contact guidance section. We will schedule a brief discussion to walk you through options.'
            ],
            [
                'q' => 'Which classes are supported?',
                'a' => 'RKTuition provides structured academic mentorship for individual grades from Class 6 through Class 12 across CBSE, ICSE, and State Board curricula, covering core sciences, mathematics, humanities, and computer studies.'
            ],
            [
                'q' => 'How to ask about subject availability?',
                'a' => 'Subject availability varies by class level: Classes 6 to 10 include Mathematics, Science, Social Science, and Computer Studies. Classes 11 and 12 focus on Mathematics, Physics, Chemistry, Biology, and Computer Science. You can select single or multiple subjects in the enquiry form.'
            ],
            [
                'q' => 'How to confirm tuition details and fee structure?',
                'a' => 'Fee structures, batch schedules, and class formats (in-person vs. online) are confirmed during the initial consultation based on the selected subjects and student learning requirements. RKTuition maintains transparent, no-obligation consultations.'
            ]
        ]
    ];
}
