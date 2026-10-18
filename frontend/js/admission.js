/**
 * RKTuition - Admission Page Logic & Form Validation (Assets copy)
 *
 * Provides dynamic subject selection per class, accessible client-side form validation,
 * error state rendering, and transparent submission feedback.
 */

document.addEventListener('DOMContentLoaded', function () {
    initAdmissionForm();
});

function initAdmissionForm() {
    const form = document.getElementById('rk-admission-form');
    if (!form) return;

    const classSelect = document.getElementById('admit-class');
    const subjectsContainer = document.getElementById('admit-subjects-container');
    const formNotice = document.getElementById('admit-form-notice');
    const submitBtn = document.getElementById('admit-submit-btn');

    let classSubjectsMap = {};
    const dataElement = document.getElementById('rk-class-subjects-data');
    if (dataElement) {
        try {
            classSubjectsMap = JSON.parse(dataElement.textContent);
        } catch (e) {
            console.error('Error parsing class subjects data:', e);
        }
    }

    const defaultSubjects = ['Mathematics', 'Science', 'Social Science', 'Computer Studies'];

    function updateSubjectOptions(selectedClass) {
        if (!subjectsContainer) return;

        const subjects = classSubjectsMap[selectedClass] || defaultSubjects;
        subjectsContainer.innerHTML = '';

        subjects.forEach(function (subj, index) {
            const id = 'subj-' + selectedClass + '-' + index;
            const label = document.createElement('label');
            label.className = 'relative flex items-center gap-3 p-3 rounded-xl border border-slate-700/80 bg-slate-800/50 hover:bg-slate-800 hover:border-slate-600 transition-all cursor-pointer group text-sm';
            
            label.innerHTML = `
                <input type="checkbox" name="preferred_subjects[]" value="${subj}" id="${id}"
                       class="h-4 w-4 rounded border-slate-700 bg-slate-900 text-brand-gold focus:ring-brand-gold focus:ring-offset-slate-900 accent-amber-400 cursor-pointer">
                <span class="text-slate-200 group-hover:text-white font-medium select-none">${subj}</span>
            `;
            subjectsContainer.appendChild(label);
        });

        clearFieldError('admit-subjects-group');
    }

    if (classSelect) {
        classSelect.addEventListener('change', function () {
            const selectedClass = this.value;
            if (selectedClass) {
                updateSubjectOptions(selectedClass);
                clearFieldError('admit-class');
            } else {
                if (subjectsContainer) {
                    subjectsContainer.innerHTML = '<p class="text-xs text-slate-400 italic py-2 col-span-full">Please select a class first to view available subjects.</p>';
                }
            }
        });

        if (classSelect.value) {
            updateSubjectOptions(classSelect.value);
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

    const fieldsToWatch = ['admit-student-name', 'admit-phone', 'admit-email', 'admit-class', 'admit-consent'];
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

        const nameInput = document.getElementById('admit-student-name');
        if (!nameInput || nameInput.value.trim().length < 2) {
            showFieldError('admit-student-name', 'Please enter a valid student name (at least 2 characters).');
            if (isValid && nameInput) nameInput.focus();
            isValid = false;
        } else {
            clearFieldError('admit-student-name');
        }

        const phoneInput = document.getElementById('admit-phone');
        const cleanPhone = phoneInput ? phoneInput.value.replace(/[\s\-\(\)\+]/g, '') : '';
        if (!phoneInput || cleanPhone.length < 10) {
            showFieldError('admit-phone', 'Please enter a valid 10-digit mobile or telephone number.');
            if (isValid && phoneInput) phoneInput.focus();
            isValid = false;
        } else {
            clearFieldError('admit-phone');
        }

        const emailInput = document.getElementById('admit-email');
        if (emailInput && emailInput.value.trim() !== '') {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(emailInput.value.trim())) {
                showFieldError('admit-email', 'Please provide a valid email address (e.g. name@domain.com).');
                if (isValid && emailInput) emailInput.focus();
                isValid = false;
            } else {
                clearFieldError('admit-email');
            }
        }

        if (!classSelect || !classSelect.value) {
            showFieldError('admit-class', 'Please select the student\'s class (Class 6 to 12).');
            if (isValid && classSelect) classSelect.focus();
            isValid = false;
        } else {
            clearFieldError('admit-class');
        }

        const checkedSubjects = form.querySelectorAll('input[name="preferred_subjects[]"]:checked');
        if (checkedSubjects.length === 0) {
            showFieldError('admit-subjects-group', 'Please select at least one preferred subject.');
            isValid = false;
        } else {
            clearFieldError('admit-subjects-group');
        }

        const consentInput = document.getElementById('admit-consent');
        if (!consentInput || !consentInput.checked) {
            showFieldError('admit-consent', 'You must agree to be contacted regarding this admission enquiry.');
            if (isValid && consentInput) consentInput.focus();
            isValid = false;
        } else {
            clearFieldError('admit-consent');
        }

        if (!isValid) {
            form.scrollIntoView({ behavior: 'smooth', block: 'start' });
            return;
        }

        const studentName = nameInput.value.trim();
        const selectedClassName = classSelect.options[classSelect.selectedIndex].text;
        const selectedSubjList = Array.from(checkedSubjects).map(cb => cb.value).join(', ');
        const phone = phoneInput.value.trim();

        showValidationSuccessModal({
            name: studentName,
            className: selectedClassName,
            subjects: selectedSubjList,
            phone: phone
        });
    });

    function showValidationSuccessModal(data) {
        let modal = document.getElementById('rk-enquiry-modal');
        if (!modal) {
            modal = document.createElement('div');
            modal.id = 'rk-enquiry-modal';
            modal.className = 'fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-950/80 backdrop-blur-sm transition-opacity';
            document.body.appendChild(modal);
        }

        modal.innerHTML = `
            <div class="relative w-full max-w-lg bg-slate-900 border border-brand-gold/40 rounded-2xl shadow-2xl p-6 sm:p-8 text-slate-100 max-h-[90vh] overflow-y-auto">
                <div class="w-12 h-12 rounded-full bg-emerald-500/20 text-emerald-400 border border-emerald-500/30 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg>
                </div>

                <h3 class="text-2xl font-bold text-center text-white">Enquiry Validated!</h3>
                <p class="text-sm text-slate-300 text-center mt-2">
                    Thank you, <strong class="text-brand-gold">${escapeHtml(data.name)}</strong>. Your admission details have passed client-side verification.
                </p>

                <div class="mt-5 p-4 rounded-xl bg-slate-950/80 border border-slate-800 text-xs space-y-2">
                    <div class="flex justify-between border-b border-slate-800/80 pb-1.5">
                        <span class="text-slate-400">Class:</span>
                        <span class="text-white font-semibold">${escapeHtml(data.className)}</span>
                    </div>
                    <div class="flex justify-between border-b border-slate-800/80 pb-1.5">
                        <span class="text-slate-400">Subjects:</span>
                        <span class="text-white font-semibold text-right">${escapeHtml(data.subjects)}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-slate-400">Contact Number:</span>
                        <span class="text-white font-semibold">${escapeHtml(data.phone)}</span>
                    </div>
                </div>

                <div class="mt-4 p-3.5 rounded-xl bg-amber-500/10 border border-amber-500/30 text-amber-200/90 text-xs leading-relaxed">
                    <p class="font-semibold text-amber-300 flex items-center gap-1.5 mb-1">
                        <svg class="w-4 h-4 text-amber-400 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"/></svg>
                        <span>Integration Notice</span>
                    </p>
                    <p>Client-side validation is active. To deliver this enquiry directly to your email or SMS, configure your server-side mailer or connect your approved contact endpoint in <code class="bg-black/30 px-1 py-0.5 rounded text-amber-200">config/admission.php</code>.</p>
                </div>

                <div class="mt-6 flex flex-col sm:flex-row items-center gap-3">
                    <a href="mailto:admission@rktuition.com?subject=Admission%20Enquiry%20-%20${encodeURIComponent(data.name)}%20(${encodeURIComponent(data.className)})&body=Student%20Name:%20${encodeURIComponent(data.name)}%0AClass:%20${encodeURIComponent(data.className)}%0ASubjects:%20${encodeURIComponent(data.subjects)}%0APhone:%20${encodeURIComponent(data.phone)}"
                       class="w-full sm:flex-1 py-3 px-4 rounded-xl bg-gradient-to-r from-amber-400 via-brand-gold to-amber-500 text-slate-950 font-bold text-sm text-center shadow-md hover:from-amber-300 hover:to-amber-400 transition-all">
                        Send via Email App
                    </a>
                    <button type="button" id="rk-close-modal-btn"
                            class="w-full sm:w-auto py-3 px-5 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-200 font-semibold text-sm transition-colors border border-slate-700">
                        Close
                    </button>
                </div>
            </div>
        `;

        modal.classList.remove('hidden');

        const closeBtn = document.getElementById('rk-close-modal-btn');
        if (closeBtn) {
            closeBtn.addEventListener('click', function () {
                modal.classList.add('hidden');
                form.reset();
                if (classSelect) {
                    updateSubjectOptions(classSelect.value);
                }
            });
        }

        modal.addEventListener('click', function (e) {
            if (e.target === modal) {
                modal.classList.add('hidden');
            }
        });
    }

    function escapeHtml(string) {
        const div = document.createElement('div');
        div.textContent = string;
        return div.innerHTML;
    }
}
