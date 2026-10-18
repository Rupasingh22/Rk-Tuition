/**
 * RKTuition - Contact Page Interactive Logic & Client-Side Validation (Assets copy)
 *
 * Handles pre-filling from URL query parameters (e.g. from Tuition page "Enquire Now"),
 * dynamic class-to-subject dropdown updating, accessible input validation,
 * and transparent, truthful submission handling without faking server-side storage.
 */

document.addEventListener('DOMContentLoaded', function () {
    initContactForm();
});

function initContactForm() {
    const form = document.getElementById('rk-contact-form');
    if (!form) return;

    const classSelect = document.getElementById('contact-class');
    const subjectSelect = document.getElementById('contact-subject');
    const typeSelect = document.getElementById('contact-type');
    const modeSelect = document.getElementById('contact-mode');

    const subjectsMap = {
        '6':  ['Mathematics', 'Science', 'Social Science', 'Computer Studies'],
        '7':  ['Mathematics', 'Science', 'Social Science', 'Computer Studies'],
        '8':  ['Mathematics', 'Science', 'Social Science', 'Computer Studies'],
        '9':  ['Mathematics', 'Science', 'Social Science', 'Computer Studies'],
        '10': ['Mathematics', 'Science', 'Social Science', 'Computer Studies'],
        '11': ['Mathematics', 'Physics', 'Chemistry', 'Biology', 'Computer Science'],
        '12': ['Mathematics', 'Physics', 'Chemistry', 'Biology', 'Computer Science'],
    };

    function updateSubjectOptions(selectedClass, preselectedSubject = null) {
        if (!subjectSelect) return;

        subjectSelect.innerHTML = '<option value="">-- Select Subject (Optional) --</option>';

        const list = subjectsMap[selectedClass] || [
            'Mathematics', 'Science', 'Social Science', 'Computer Studies',
            'Physics', 'Chemistry', 'Biology', 'Computer Science'
        ];

        list.forEach(function (subj) {
            const opt = document.createElement('option');
            opt.value = subj;
            opt.textContent = subj;
            if (preselectedSubject && subj.toLowerCase() === preselectedSubject.toLowerCase()) {
                opt.selected = true;
            }
            subjectSelect.appendChild(opt);
        });

        const multiOpt = document.createElement('option');
        multiOpt.value = 'Multiple Subjects';
        multiOpt.textContent = 'Multiple Subjects / Custom Bundle';
        if (preselectedSubject && preselectedSubject.toLowerCase().includes('multiple')) {
            multiOpt.selected = true;
        }
        subjectSelect.appendChild(multiOpt);
    }

    if (classSelect) {
        classSelect.addEventListener('change', function () {
            updateSubjectOptions(this.value);
            clearFieldError('contact-class');
        });
    }

    const urlParams = new URLSearchParams(window.location.search);
    const paramType = urlParams.get('type');
    const paramClass = urlParams.get('class');
    const paramSubject = urlParams.get('subject');
    const paramMode = urlParams.get('mode');

    if (paramType && typeSelect) {
        for (let i = 0; i < typeSelect.options.length; i++) {
            if (typeSelect.options[i].value.toLowerCase() === paramType.toLowerCase()) {
                typeSelect.selectedIndex = i;
                break;
            }
        }
    }

    if (paramClass && classSelect) {
        classSelect.value = paramClass;
        updateSubjectOptions(paramClass, paramSubject);
    } else {
        updateSubjectOptions('10');
    }

    if (paramMode && modeSelect) {
        for (let j = 0; j < modeSelect.options.length; j++) {
            if (modeSelect.options[j].value.toLowerCase().includes(paramMode.toLowerCase())) {
                modeSelect.selectedIndex = j;
                break;
            }
        }
    }

    function showFieldError(fieldId, errorText) {
        const field = document.getElementById(fieldId);
        const errorEl = document.getElementById(fieldId + '-error');
        if (field) {
            field.classList.add('border-red-500', 'focus:border-red-500', 'focus:ring-red-500/30');
            field.setAttribute('aria-invalid', 'true');
        }
        if (errorEl) {
            errorEl.textContent = errorText;
            errorEl.classList.remove('hidden');
        }
    }

    function clearFieldError(fieldId) {
        const field = document.getElementById(fieldId);
        const errorEl = document.getElementById(fieldId + '-error');
        if (field) {
            field.classList.remove('border-red-500', 'focus:border-red-500', 'focus:ring-red-500/30');
            field.removeAttribute('aria-invalid');
        }
        if (errorEl) {
            errorEl.textContent = '';
            errorEl.classList.add('hidden');
        }
    }

    const fieldsToWatch = ['contact-name', 'contact-email', 'contact-phone', 'contact-type', 'contact-class', 'contact-consent'];
    fieldsToWatch.forEach(function (id) {
        const el = document.getElementById(id);
        if (el) {
            el.addEventListener('input', function () {
                clearFieldError(id);
            });
            el.addEventListener('change', function () {
                clearFieldError(id);
            });
        }
    });

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        let isValid = true;

        const nameInput = document.getElementById('contact-name');
        if (!nameInput || nameInput.value.trim().length < 2) {
            showFieldError('contact-name', 'Please enter your full name (at least 2 characters).');
            if (isValid && nameInput) nameInput.focus();
            isValid = false;
        } else {
            clearFieldError('contact-name');
        }

        const emailInput = document.getElementById('contact-email');
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailInput || !emailRegex.test(emailInput.value.trim())) {
            showFieldError('contact-email', 'Please provide a valid email address (e.g. name@example.com).');
            if (isValid && emailInput) emailInput.focus();
            isValid = false;
        } else {
            clearFieldError('contact-email');
        }

        const phoneInput = document.getElementById('contact-phone');
        const cleanPhone = phoneInput ? phoneInput.value.replace(/[\s\-\(\)\+]/g, '') : '';
        if (!phoneInput || cleanPhone.length < 10) {
            showFieldError('contact-phone', 'Please enter a valid 10-digit mobile or telephone number.');
            if (isValid && phoneInput) phoneInput.focus();
            isValid = false;
        } else {
            clearFieldError('contact-phone');
        }

        if (!typeSelect || !typeSelect.value) {
            showFieldError('contact-type', 'Please select an enquiry category.');
            if (isValid && typeSelect) typeSelect.focus();
            isValid = false;
        } else {
            clearFieldError('contact-type');
        }

        if (!classSelect || !classSelect.value) {
            showFieldError('contact-class', 'Please select the student\'s class (Class 6 to 12).');
            if (isValid && classSelect) classSelect.focus();
            isValid = false;
        } else {
            clearFieldError('contact-class');
        }

        const consentInput = document.getElementById('contact-consent');
        if (!consentInput || !consentInput.checked) {
            showFieldError('contact-consent', 'You must agree to be contacted regarding this enquiry.');
            if (isValid && consentInput) consentInput.focus();
            isValid = false;
        } else {
            clearFieldError('contact-consent');
        }

        if (!isValid) {
            form.scrollIntoView({ behavior: 'smooth', block: 'start' });
            return;
        }

        const messageInput = document.getElementById('contact-message');
        const enquirySummary = {
            name: nameInput.value.trim(),
            email: emailInput.value.trim(),
            phone: phoneInput.value.trim(),
            type: typeSelect.value,
            className: classSelect.options[classSelect.selectedIndex].text,
            subject: subjectSelect ? (subjectSelect.value || 'Not Specified') : 'Not Specified',
            mode: modeSelect ? (modeSelect.value || 'Not Sure') : 'Not Sure',
            message: messageInput ? messageInput.value.trim() : ''
        };

        showContactSuccessModal(enquirySummary);
    });

    function showContactSuccessModal(data) {
        let modal = document.getElementById('rk-contact-modal');
        if (!modal) {
            modal = document.createElement('div');
            modal.id = 'rk-contact-modal';
            modal.className = 'fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-950/80 backdrop-blur-sm transition-opacity';
            document.body.appendChild(modal);
        }

        const emailBody = `Full Name: ${data.name}%0AEmail: ${data.email}%0APhone: ${data.phone}%0AEnquiry Type: ${data.type}%0AClass: ${data.className}%0ASubject: ${data.subject}%0APreferred Mode: ${data.mode}%0AMessage: ${encodeURIComponent(data.message)}`;
        const emailSubject = `Enquiry: [${data.type}] - ${data.name} (${data.className})`;

        modal.innerHTML = `
            <div class="relative w-full max-w-lg bg-slate-900 border border-brand-gold/40 rounded-3xl shadow-2xl p-6 sm:p-8 text-slate-100 max-h-[90vh] overflow-y-auto">
                <div class="w-12 h-12 rounded-full bg-emerald-500/20 text-emerald-400 border border-emerald-500/30 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg>
                </div>

                <h3 class="text-2xl font-bold text-center text-white">Enquiry Validated!</h3>
                <p class="text-sm text-slate-300 text-center mt-2">
                    Thank you, <strong class="text-brand-gold">${escapeHtml(data.name)}</strong>. Your contact form inputs have passed client-side verification.
                </p>

                <div class="mt-5 p-4 rounded-xl bg-slate-950/80 border border-slate-800 text-xs space-y-2">
                    <div class="flex justify-between border-b border-slate-800/80 pb-1.5">
                        <span class="text-slate-400">Category:</span>
                        <span class="text-white font-semibold">${escapeHtml(data.type)}</span>
                    </div>
                    <div class="flex justify-between border-b border-slate-800/80 pb-1.5">
                        <span class="text-slate-400">Class &amp; Subject:</span>
                        <span class="text-white font-semibold text-right">${escapeHtml(data.className)} &bull; ${escapeHtml(data.subject)}</span>
                    </div>
                    <div class="flex justify-between border-b border-slate-800/80 pb-1.5">
                        <span class="text-slate-400">Preferred Mode:</span>
                        <span class="text-white font-semibold">${escapeHtml(data.mode)}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-slate-400">Phone:</span>
                        <span class="text-white font-semibold">${escapeHtml(data.phone)}</span>
                    </div>
                </div>

                <div class="mt-4 p-3.5 rounded-xl bg-amber-500/10 border border-amber-500/30 text-amber-200/90 text-xs leading-relaxed">
                    <p class="font-semibold text-amber-300 flex items-center gap-1.5 mb-1">
                        <svg class="w-4 h-4 text-amber-400 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"/></svg>
                        <span>Integration Notice</span>
                    </p>
                    <p>Client-side validation is active. To connect this form to your active server mailer or CRM script, configure your preferred endpoint in <code class="bg-black/40 px-1 py-0.5 rounded text-amber-200">frontend/config/contact.php</code>.</p>
                </div>

                <div class="mt-6 flex flex-col sm:flex-row items-center gap-3">
                    <a href="mailto:contact@rktuition.com?subject=${encodeURIComponent(emailSubject)}&body=${emailBody}"
                       class="w-full sm:flex-1 py-3 px-4 rounded-xl bg-gradient-to-r from-amber-400 via-brand-gold to-amber-500 text-slate-950 font-bold text-sm text-center shadow-md hover:from-amber-300 hover:to-amber-400 transition-all">
                        Send via Email App
                    </a>
                    <button type="button" id="rk-close-contact-modal"
                            class="w-full sm:w-auto py-3 px-5 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-200 font-semibold text-sm transition-colors border border-slate-700">
                        Close
                    </button>
                </div>
            </div>
        `;

        modal.classList.remove('hidden');

        const closeBtn = document.getElementById('rk-close-contact-modal');
        if (closeBtn) {
            closeBtn.addEventListener('click', function () {
                modal.classList.add('hidden');
                form.reset();
                updateSubjectOptions(classSelect ? classSelect.value : '10');
            });
        }

        modal.addEventListener('click', function (e) {
            if (e.target === modal) {
                modal.classList.add('hidden');
            }
        });
    }

    function escapeHtml(str) {
        if (!str) return '';
        const div = document.createElement('div');
        div.textContent = str;
        return div.innerHTML;
    }
}
