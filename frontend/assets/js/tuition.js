/**
 * RKTuition - Tuition Page Interactive Logic (Assets copy)
 *
 * Handles dynamic class filtering, learning mode toggles (Home Tuition vs. Online Classes),
 * pricing card rendering with "Contact for Pricing" fallbacks, and enquiry link context.
 */

document.addEventListener('DOMContentLoaded', function () {
    initTuitionPage();
});

function initTuitionPage() {
    let tuitionData = null;
    const dataEl = document.getElementById('rk-tuition-config-data');
    if (dataEl) {
        try {
            tuitionData = JSON.parse(dataEl.textContent);
        } catch (e) {
            console.error('Failed to parse tuition config:', e);
        }
    }

    if (!tuitionData) return;

    let selectedClass = '10';
    let selectedMode = 'all';

    const classCards = document.querySelectorAll('.tuition-class-card');
    const pricingContainer = document.getElementById('pricing-cards-container');
    const activeClassLabel = document.getElementById('active-tuition-class-label');
    const modeTabs = document.querySelectorAll('.tuition-mode-tab');
    const modeHomeBtn = document.getElementById('view-home-pricing-btn');
    const modeOnlineBtn = document.getElementById('view-online-pricing-btn');

    function setClass(classNum, shouldScroll = false) {
        selectedClass = String(classNum);

        classCards.forEach(function (card) {
            const cardClass = card.getAttribute('data-class');
            const isActive = cardClass === selectedClass;

            card.setAttribute('aria-pressed', isActive ? 'true' : 'false');
            if (isActive) {
                card.classList.add('ring-2', 'ring-brand-gold', 'bg-slate-800/90', 'border-brand-gold');
                card.classList.remove('border-slate-800');
                const btn = card.querySelector('.tuition-class-btn');
                if (btn) {
                    btn.classList.add('bg-brand-gold', 'text-slate-950', 'font-bold');
                    btn.classList.remove('bg-slate-800', 'text-slate-300');
                    btn.textContent = 'Selected';
                }
            } else {
                card.classList.remove('ring-2', 'ring-brand-gold', 'bg-slate-800/90', 'border-brand-gold');
                card.classList.add('border-slate-800');
                const btn = card.querySelector('.tuition-class-btn');
                if (btn) {
                    btn.classList.remove('bg-brand-gold', 'text-slate-950', 'font-bold');
                    btn.classList.add('bg-slate-800', 'text-slate-300');
                    btn.textContent = 'Select Class';
                }
            }
        });

        if (activeClassLabel) {
            activeClassLabel.textContent = 'Class ' + selectedClass;
        }

        renderPricingCards();

        if (shouldScroll) {
            const pricingSection = document.getElementById('subject-pricing-section');
            if (pricingSection) {
                pricingSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }
    }

    function setMode(modeId) {
        selectedMode = modeId;

        modeTabs.forEach(function (tab) {
            const tabMode = tab.getAttribute('data-mode');
            const isActive = tabMode === selectedMode;

            if (isActive) {
                tab.classList.add('bg-brand-gold', 'text-slate-950', 'font-bold', 'shadow-md');
                tab.classList.remove('bg-slate-900', 'text-slate-300');
                tab.setAttribute('aria-selected', 'true');
            } else {
                tab.classList.remove('bg-brand-gold', 'text-slate-950', 'font-bold', 'shadow-md');
                tab.classList.add('bg-slate-900', 'text-slate-300');
                tab.setAttribute('aria-selected', 'false');
            }
        });

        renderPricingCards();
    }

    classCards.forEach(function (card) {
        card.addEventListener('click', function () {
            const cNum = this.getAttribute('data-class');
            if (cNum) {
                setClass(cNum, false);
            }
        });
    });

    modeTabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            const mode = this.getAttribute('data-mode');
            if (mode) {
                setMode(mode);
            }
        });
    });

    if (modeHomeBtn) {
        modeHomeBtn.addEventListener('click', function (e) {
            e.preventDefault();
            setMode('home');
            const target = document.getElementById('subject-pricing-section');
            if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    }

    if (modeOnlineBtn) {
        modeOnlineBtn.addEventListener('click', function (e) {
            e.preventDefault();
            setMode('online');
            const target = document.getElementById('subject-pricing-section');
            if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    }

    function renderPricingCards() {
        if (!pricingContainer) return;

        const classInfo = tuitionData.classes[selectedClass];
        if (!classInfo || !classInfo.subjects || !classInfo.subjects.length) {
            pricingContainer.innerHTML = `
                <div class="col-span-full p-10 rounded-2xl bg-slate-900 border border-slate-800 text-center">
                    <p class="text-sm text-slate-400">No subject pricing configured for Class ${selectedClass}.</p>
                </div>
            `;
            return;
        }

        pricingContainer.innerHTML = '';

        classInfo.subjects.forEach(function (subj) {
            const showHome = (selectedMode === 'all' || selectedMode === 'home');
            const showOnline = (selectedMode === 'all' || selectedMode === 'online');

            const card = document.createElement('div');
            card.className = 'rounded-3xl bg-slate-900/90 border border-slate-800 hover:border-slate-700 transition-all duration-300 p-6 sm:p-8 flex flex-col justify-between shadow-xl shadow-black/20 group';

            let modePricingHtml = '';

            if (showHome) {
                const isHomePriceSet = Boolean(subj.home_price && String(subj.home_price).trim() !== '');
                const homePriceDisplay = isHomePriceSet ? escapeHtml(subj.home_price) : 'Contact for Pricing';
                const homePeriodDisplay = isHomePriceSet ? escapeHtml(subj.home_period) : 'Schedule consultation for customized rate';
                const homeEnquireUrl = `../pages/contact.php?type=Tuition&class=${encodeURIComponent(selectedClass)}&subject=${encodeURIComponent(subj.name)}&mode=Home%20Tuition`;

                modePricingHtml += `
                    <div class="p-4 sm:p-5 rounded-2xl bg-slate-950/80 border border-slate-800/80 ${showOnline && selectedMode === 'all' ? 'mb-4' : ''}">
                        <div class="flex items-center justify-between gap-2 mb-2">
                            <span class="inline-flex items-center gap-1.5 text-xs font-bold text-amber-400 uppercase tracking-wider">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/></svg>
                                <span>Home Tuition (In-Person)</span>
                            </span>
                            <span class="text-[10px] font-bold px-2 py-0.5 rounded bg-slate-800 border border-slate-700 text-slate-300">
                                ${escapeHtml(subj.home_status || 'Available')}
                            </span>
                        </div>

                        <div class="my-2.5">
                            <div class="text-xl sm:text-2xl font-extrabold ${isHomePriceSet ? 'text-white' : 'text-brand-gold'}">
                                ${homePriceDisplay}
                            </div>
                            <span class="text-[11px] text-slate-400 block mt-0.5">
                                ${homePeriodDisplay}
                            </span>
                        </div>

                        <div class="mt-3 pt-3 border-t border-slate-800/80 flex items-center justify-between">
                            <span class="text-[11px] text-slate-400 font-medium">
                                ${escapeHtml(subj.duration || '1.5 hrs / session')}
                            </span>
                            <a href="${homeEnquireUrl}" 
                               class="inline-flex items-center gap-1 px-3.5 py-1.5 rounded-lg bg-amber-400 hover:bg-amber-300 text-slate-950 font-bold text-xs transition-colors shadow-sm">
                                <span>Enquire Home</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                            </a>
                        </div>
                    </div>
                `;
            }

            if (showOnline) {
                const isOnlinePriceSet = Boolean(subj.online_price && String(subj.online_price).trim() !== '');
                const onlinePriceDisplay = isOnlinePriceSet ? escapeHtml(subj.online_price) : 'Contact for Pricing';
                const onlinePeriodDisplay = isOnlinePriceSet ? escapeHtml(subj.online_period) : 'Schedule consultation for customized rate';
                const onlineEnquireUrl = `../pages/contact.php?type=Tuition&class=${encodeURIComponent(selectedClass)}&subject=${encodeURIComponent(subj.name)}&mode=Online%20Classes`;

                modePricingHtml += `
                    <div class="p-4 sm:p-5 rounded-2xl bg-slate-950/80 border border-slate-800/80">
                        <div class="flex items-center justify-between gap-2 mb-2">
                            <span class="inline-flex items-center gap-1.5 text-xs font-bold text-sky-400 uppercase tracking-wider">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25"/></svg>
                                <span>Online Classes (Digital)</span>
                            </span>
                            <span class="text-[10px] font-bold px-2 py-0.5 rounded bg-slate-800 border border-slate-700 text-slate-300">
                                ${escapeHtml(subj.online_status || 'Available')}
                            </span>
                        </div>

                        <div class="my-2.5">
                            <div class="text-xl sm:text-2xl font-extrabold ${isOnlinePriceSet ? 'text-white' : 'text-sky-300'}">
                                ${onlinePriceDisplay}
                            </div>
                            <span class="text-[11px] text-slate-400 block mt-0.5">
                                ${onlinePeriodDisplay}
                            </span>
                        </div>

                        <div class="mt-3 pt-3 border-t border-slate-800/80 flex items-center justify-between">
                            <span class="text-[11px] text-slate-400 font-medium">
                                ${escapeHtml(subj.duration || '1.5 hrs / session')}
                            </span>
                            <a href="${onlineEnquireUrl}" 
                               class="inline-flex items-center gap-1 px-3.5 py-1.5 rounded-lg bg-sky-500 hover:bg-sky-400 text-slate-950 font-bold text-xs transition-colors shadow-sm">
                                <span>Enquire Online</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                            </a>
                        </div>
                    </div>
                `;
            }

            card.innerHTML = `
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs font-bold uppercase tracking-wider text-brand-gold bg-brand-gold/10 px-2.5 py-1 rounded-full border border-brand-gold/20">
                            Class ${escapeHtml(selectedClass)}
                        </span>
                        <span class="text-xs text-slate-400 font-semibold">
                            Core Subject
                        </span>
                    </div>

                    <h3 class="text-xl sm:text-2xl font-extrabold text-white mb-2 group-hover:text-brand-gold transition-colors">
                        ${escapeHtml(subj.name)}
                    </h3>

                    <p class="text-xs text-slate-300 leading-relaxed mb-6">
                        ${escapeHtml(subj.desc)}
                    </p>

                    ${modePricingHtml}
                </div>

                <div class="mt-6 pt-4 border-t border-slate-800 flex items-center justify-between text-xs text-slate-400">
                    <span>Includes weekly doubt clearing</span>
                    <a href="../pages/contact.php?type=Tuition&class=${encodeURIComponent(selectedClass)}&subject=${encodeURIComponent(subj.name)}" 
                       class="text-brand-gold hover:underline font-semibold">
                        Custom Plan &rarr;
                    </a>
                </div>
            `;

            pricingContainer.appendChild(card);
        });
    }

    function escapeHtml(str) {
        if (!str) return '';
        const div = document.createElement('div');
        div.textContent = str;
        return div.innerHTML;
    }

    setClass('10', false);
}
