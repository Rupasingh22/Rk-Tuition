<?php
/**
 * RKTuition - Contact & General Enquiry Configuration
 *
 * Central configuration file for the Contact page, including
 * verified contact details, enquiry form options, and contact FAQs.
 */

function getContactConfig() {
    return [
        'hero' => [
            'eyebrow'  => 'Get in Touch with RKTuition',
            'headline' => 'Let’s Talk About Your Learning Goals.',
            'subtext'  => 'Have questions regarding tuition plans, class batches, study notes, or admission procedures? Reach out to our team for honest academic advice and personalized guidance for your student.',
            'badge'    => 'Consultations Open',
        ],

        // Verified / Configurable Contact Information
        'contact_info' => [
            'phone'         => '+91 9153832633',
            'phone_raw'     => '+919153832633',
            'email'         => 'rupasingh10456@gmail.com',
            'admission_mail'=> 'rupasingh10456@gmail.com',
            'hours'         => 'Monday – Saturday: 9:00 AM – 7:30 PM IST',
            'location'      => 'Shree Sidhivinayak Meera , Aeronest society , Pune - 411001',
            'response_time' => 'Typically responds within 24 business hours',
            'whatsapp_note' => 'WhatsApp messaging available on primary phone for quick queries.'
        ],

        // Enquiry Form Options
        'enquiry_types' => [
            'Tuition'     => 'Tuition Enquiry (Home / Online)',
            'Classes'     => 'Academic Classes (6–8, 9–10, 11–12)',
            'Study Notes' => 'Study Notes & Telegram Resources',
            'Admission'   => 'Admission & Enrolment Process',
            'Other'       => 'Other Academic Questions'
        ],

        'tuition_modes' => [
            'Home Tuition' => 'Home Tuition (In-Person at Residence)',
            'Online Classes' => 'Online Classes (Live Digital Classroom)',
            'Not Sure'     => 'Not Sure / Need Advice'
        ],

        // Contact FAQs
        'faqs' => [
            [
                'q' => 'How can I enquire about tuition plans and pricing?',
                'a' => 'You can fill out the contact form below with your student\'s grade and preferred tuition mode (Home Tuition or Online Classes). We will review faculty availability and provide a tailored fee breakdown matching your requested session frequency.'
            ],
            [
                'q' => 'Which grades and boards are supported?',
                'a' => 'RKTuition mentors students across Classes 6 to 12 following CBSE, ICSE, and State Board syllabi, with structured coaching in Mathematics, Sciences, Social Studies, and Computer Science.'
            ],
            [
                'q' => 'How do I access free study notes and revision resources?',
                'a' => 'Visit our dedicated Notes page from the top navigation to explore class-wise and subject-wise chapter notes, formula sheets, and study materials, or join our configured Telegram updates.'
            ],
            [
                'q' => 'What is the procedure for student admission?',
                'a' => 'Click "Get Admission" in the header or on this page to visit our dedicated Admission page. Submit an enquiry to schedule an initial consultation where we evaluate academic goals, batch options, and batch schedules.'
            ],
            [
                'q' => 'What are the response times for enquiries?',
                'a' => 'We strive to answer all phone calls and email enquiries within 24 business hours during our operating hours (Monday to Saturday, 9:00 AM – 7:30 PM IST).'
            ]
        ]
    ];
}
