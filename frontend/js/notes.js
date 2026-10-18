/**
 * RKTuition - Notes Page Interactive Logic (Assets copy)
 *
 * Handles dynamic class filtering, subject filtering, notes library search & filtering,
 * expandable class details accordion, and Telegram button handling.
 */

document.addEventListener('DOMContentLoaded', function () {
    initNotesInteractions();
});

function initNotesInteractions() {
    let notesData = null;
    const dataEl = document.getElementById('rk-notes-config-data');
    if (dataEl) {
        try {
            notesData = JSON.parse(dataEl.textContent);
        } catch (e) {
            console.error('Failed to parse notes config:', e);
        }
    }

    if (!notesData) return;

    let selectedClass = '10';
    let selectedSubject = 'all';
    let selectedType = 'all';
    let searchQuery = '';

    const classCards = document.querySelectorAll('.class-selector-card');
    const subjectCardsContainer = document.getElementById('subject-cards-container');
    const classDetailAccordion = document.getElementById('class-detail-accordion');
    const libraryCardsContainer = document.getElementById('notes-library-container');
    const libraryEmptyState = document.getElementById('notes-library-empty');
    const filterClassSelect = document.getElementById('library-filter-class');
    const filterSubjectSelect = document.getElementById('library-filter-subject');
    const filterTypeSelect = document.getElementById('library-filter-type');
    const searchInput = document.getElementById('library-search-input');
    const libraryCountBadge = document.getElementById('library-results-count');
    const activeClassLabel = document.getElementById('active-class-label');

    function setClass(classNum, shouldScrollToSubjects = false) {
        selectedClass = String(classNum);

        classCards.forEach(function (card) {
            const cardClass = card.getAttribute('data-class');
            const isActive = cardClass === selectedClass;
            
            card.setAttribute('aria-pressed', isActive ? 'true' : 'false');
            if (isActive) {
                card.classList.add('ring-2', 'ring-brand-gold', 'bg-slate-800/90', 'border-brand-gold');
                card.classList.remove('border-slate-800');
                const btn = card.querySelector('.class-view-btn');
                if (btn) {
                    btn.classList.add('bg-brand-gold', 'text-slate-950', 'font-bold');
                    btn.classList.remove('bg-slate-800', 'text-slate-300');
                    btn.textContent = 'Active Class';
                }
            } else {
                card.classList.remove('ring-2', 'ring-brand-gold', 'bg-slate-800/90', 'border-brand-gold');
                card.classList.add('border-slate-800');
                const btn = card.querySelector('.class-view-btn');
                if (btn) {
                    btn.classList.remove('bg-brand-gold', 'text-slate-950', 'font-bold');
                    btn.classList.add('bg-slate-800', 'text-slate-300');
                    btn.textContent = 'View Notes';
                }
            }
        });

        if (activeClassLabel) {
            activeClassLabel.textContent = 'Class ' + selectedClass;
        }

        renderSubjects(selectedClass);
        expandClassDetail(selectedClass);

        if (filterClassSelect) {
            filterClassSelect.value = selectedClass;
        }

        selectedSubject = 'all';
        if (filterSubjectSelect) {
            updateLibrarySubjectDropdown(selectedClass);
            filterSubjectSelect.value = 'all';
        }

        renderLibrary();

        if (shouldScrollToSubjects) {
            const targetSection = document.getElementById('subject-notes-section');
            if (targetSection) {
                targetSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }
    }

    classCards.forEach(function (card) {
        card.addEventListener('click', function (e) {
            const classNum = this.getAttribute('data-class');
            if (classNum) {
                setClass(classNum, false);
            }
        });
    });

    function renderSubjects(classNum) {
        if (!subjectCardsContainer) return;

        const classInfo = notesData.classes[classNum];
        if (!classInfo || !classInfo.subjects || !classInfo.subjects.length) {
            subjectCardsContainer.innerHTML = `
                <div class="col-span-full p-8 rounded-2xl bg-slate-900 border border-slate-800 text-center">
                    <p class="text-sm text-slate-400">No subjects currently configured for Class ${classNum}.</p>
                </div>
            `;
            return;
        }

        subjectCardsContainer.innerHTML = '';

        classInfo.subjects.forEach(function (subj) {
            const card = document.createElement('div');
            const isActive = (selectedSubject === subj.name);
            card.className = `p-6 rounded-2xl border transition-all duration-200 cursor-pointer flex flex-col justify-between group ${
                isActive 
                    ? 'bg-slate-800/90 border-brand-gold ring-1 ring-brand-gold shadow-lg shadow-brand-gold/10' 
                    : 'bg-slate-900/90 border-slate-800 hover:border-slate-700 hover:bg-slate-800/60'
            }`;

            const iconSvg = getSubjectIconSvg(subj.icon || 'book-open');

            card.innerHTML = `
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 rounded-xl bg-slate-800 border border-slate-700/80 flex items-center justify-center text-brand-gold group-hover:bg-brand-gold group-hover:text-slate-950 transition-colors">
                            ${iconSvg}
                        </div>
                        <span class="text-[11px] font-bold px-2.5 py-1 rounded-full bg-slate-800 border border-slate-700 text-slate-300">
                            ${subj.total_notes ? subj.total_notes + ' Chapters' : 'Notes Planned'}
                        </span>
                    </div>

                    <h3 class="text-lg font-bold text-white group-hover:text-brand-gold transition-colors mb-2">
                        ${escapeHtml(subj.name)}
                    </h3>

                    <p class="text-xs text-slate-400 line-clamp-2 leading-relaxed mb-6">
                        ${escapeHtml(subj.desc)}
                    </p>
                </div>

                <div class="pt-4 border-t border-slate-800/80 flex items-center justify-between">
                    <span class="text-xs font-semibold text-brand-gold flex items-center gap-1 group-hover:gap-2 transition-all">
                        <span>Explore Notes</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                    </span>
                    <span class="text-[10px] text-slate-500 font-medium">Class ${classNum}</span>
                </div>
            `;

            card.addEventListener('click', function () {
                selectedSubject = subj.name;
                if (filterSubjectSelect) {
                    filterSubjectSelect.value = subj.name;
                }
                renderSubjects(classNum);
                renderLibrary();

                const libSection = document.getElementById('chapter-library-section');
                if (libSection) {
                    libSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });

            subjectCardsContainer.appendChild(card);
        });
    }

    function expandClassDetail(classNum) {
        if (!classDetailAccordion) return;

        const allButtons = classDetailAccordion.querySelectorAll('.class-detail-toggle');

        allButtons.forEach(function (btn) {
            const bClass = btn.getAttribute('data-target-class');
            const targetPanelId = btn.getAttribute('aria-controls');
            const panel = document.getElementById(targetPanelId);
            const icon = btn.querySelector('.class-detail-arrow');

            if (bClass === classNum) {
                btn.setAttribute('aria-expanded', 'true');
                btn.classList.add('bg-slate-800/90', 'border-brand-gold/60', 'text-brand-gold');
                if (panel) panel.classList.remove('hidden');
                if (icon) icon.classList.add('rotate-180', 'text-brand-gold');
            } else {
                btn.setAttribute('aria-expanded', 'false');
                btn.classList.remove('bg-slate-800/90', 'border-brand-gold/60', 'text-brand-gold');
                if (panel) panel.classList.add('hidden');
                if (icon) icon.classList.remove('rotate-180', 'text-brand-gold');
            }
        });
    }

    const classDetailToggles = document.querySelectorAll('.class-detail-toggle');
    classDetailToggles.forEach(function (toggle) {
        toggle.addEventListener('click', function () {
            const targetClass = this.getAttribute('data-target-class');
            const panelId = this.getAttribute('aria-controls');
            const panel = document.getElementById(panelId);
            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            const icon = this.querySelector('.class-detail-arrow');

            if (isExpanded) {
                this.setAttribute('aria-expanded', 'false');
                this.classList.remove('bg-slate-800/90', 'border-brand-gold/60', 'text-brand-gold');
                if (panel) panel.classList.add('hidden');
                if (icon) icon.classList.remove('rotate-180', 'text-brand-gold');
            } else {
                if (targetClass) {
                    setClass(targetClass, false);
                }
            }
        });
    });

    function updateLibrarySubjectDropdown(classNum) {
        if (!filterSubjectSelect) return;

        filterSubjectSelect.innerHTML = '<option value="all">All Subjects</option>';

        if (classNum !== 'all' && notesData.classes[classNum]) {
            notesData.classes[classNum].subjects.forEach(function (s) {
                const opt = document.createElement('option');
                opt.value = s.name;
                opt.textContent = s.name;
                filterSubjectSelect.appendChild(opt);
            });
        } else {
            const distinct = ['Mathematics', 'Science', 'Social Science', 'Computer Studies', 'Physics', 'Chemistry', 'Biology', 'Computer Science'];
            distinct.forEach(function (name) {
                const opt = document.createElement('option');
                opt.value = name;
                opt.textContent = name;
                filterSubjectSelect.appendChild(opt);
            });
        }
    }

    function renderLibrary() {
        if (!libraryCardsContainer) return;

        const allItems = notesData.library || [];

        const filtered = allItems.filter(function (item) {
            if (selectedClass !== 'all' && item.class !== selectedClass) {
                return false;
            }
            if (selectedSubject !== 'all' && item.subject.toLowerCase() !== selectedSubject.toLowerCase()) {
                return false;
            }
            if (selectedType !== 'all' && item.type.toLowerCase() !== selectedType.toLowerCase()) {
                return false;
            }
            if (searchQuery.trim() !== '') {
                const q = searchQuery.toLowerCase().trim();
                const titleMatch = item.title.toLowerCase().includes(q);
                const chapterMatch = item.chapter.toLowerCase().includes(q);
                const descMatch = item.description.toLowerCase().includes(q);
                const subjMatch = item.subject.toLowerCase().includes(q);
                if (!titleMatch && !chapterMatch && !descMatch && !subjMatch) {
                    return false;
                }
            }
            return true;
        });

        if (libraryCountBadge) {
            libraryCountBadge.textContent = `${filtered.length} Resource${filtered.length === 1 ? '' : 's'}`;
        }

        libraryCardsContainer.innerHTML = '';

        if (filtered.length === 0) {
            if (libraryEmptyState) libraryEmptyState.classList.remove('hidden');
            return;
        } else {
            if (libraryEmptyState) libraryEmptyState.classList.add('hidden');
        }

        filtered.forEach(function (item) {
            const card = document.createElement('div');
            card.className = 'p-6 rounded-2xl bg-slate-900/90 border border-slate-800 hover:border-slate-700 transition-all flex flex-col justify-between hover:shadow-xl hover:shadow-black/30 group';

            const isAvailable = (item.status === 'Available');
            const hasRealUrl = Boolean(item.url && item.url !== '#');

            card.innerHTML = `
                <div>
                    <div class="flex items-center justify-between gap-2 mb-3">
                        <div class="flex items-center gap-1.5 flex-wrap">
                            <span class="text-[10px] font-bold px-2.5 py-0.5 rounded-full bg-slate-800 border border-slate-700 text-brand-gold">
                                Class ${escapeHtml(item.class)}
                            </span>
                            <span class="text-[10px] font-semibold px-2 py-0.5 rounded-full bg-slate-800/80 text-slate-300">
                                ${escapeHtml(item.subject)}
                            </span>
                        </div>
                        <span class="text-[10px] font-bold px-2 py-0.5 rounded ${
                            isAvailable 
                                ? 'bg-emerald-500/10 text-emerald-400 border border-emerald-500/20' 
                                : 'bg-amber-500/10 text-amber-400 border border-amber-500/20'
                        }">
                            ${escapeHtml(item.type)}
                        </span>
                    </div>

                    <h3 class="text-base font-bold text-white group-hover:text-brand-gold transition-colors leading-snug mb-2">
                        ${escapeHtml(item.title)}
                    </h3>

                    <p class="text-xs text-slate-400 mb-4 line-clamp-2 leading-relaxed">
                        ${escapeHtml(item.description)}
                    </p>
                </div>

                <div class="pt-4 border-t border-slate-800/80 flex items-center justify-between">
                    <span class="text-[11px] text-slate-500">
                        ${escapeHtml(item.pages || 'Verified Content')} &bull; ${escapeHtml(item.size || 'PDF Document')}
                    </span>

                    ${
                        hasRealUrl
                            ? `<a href="${escapeHtml(item.url)}" target="_blank" rel="noopener noreferrer" 
                                  class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-brand-gold text-slate-950 font-bold text-xs hover:bg-amber-300 transition-colors">
                                  <span>View PDF</span>
                                  <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                               </a>`
                            : `<button type="button" class="notes-coming-soon-btn inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-slate-800 hover:bg-slate-700/80 text-slate-300 border border-slate-700 font-medium text-xs transition-colors">
                                  <span class="w-1.5 h-1.5 rounded-full bg-amber-400 animate-pulse"></span>
                                  <span>Notes Coming Soon</span>
                               </button>`
                    }
                </div>
            `;

            const soonBtn = card.querySelector('.notes-coming-soon-btn');
            if (soonBtn) {
                soonBtn.addEventListener('click', function () {
                    alert('Notes for "' + item.chapter + '" are currently being prepared and digitized by our faculty. Enrolled students receive direct classroom copies. You can enquire on the Admission page for batch access.');
                });
            }

            libraryCardsContainer.appendChild(card);
        });
    }

    if (filterClassSelect) {
        filterClassSelect.addEventListener('change', function () {
            setClass(this.value, false);
        });
    }

    if (filterSubjectSelect) {
        filterSubjectSelect.addEventListener('change', function () {
            selectedSubject = this.value;
            renderSubjects(selectedClass);
            renderLibrary();
        });
    }

    if (filterTypeSelect) {
        filterTypeSelect.addEventListener('change', function () {
            selectedType = this.value;
            renderLibrary();
        });
    }

    if (searchInput) {
        searchInput.addEventListener('input', function () {
            searchQuery = this.value;
            renderLibrary();
        });
    }

    const resetBtn = document.getElementById('reset-filters-btn');
    if (resetBtn) {
        resetBtn.addEventListener('click', function () {
            selectedClass = '10';
            selectedSubject = 'all';
            selectedType = 'all';
            searchQuery = '';
            if (searchInput) searchInput.value = '';
            if (filterClassSelect) filterClassSelect.value = '10';
            if (filterSubjectSelect) filterSubjectSelect.value = 'all';
            if (filterTypeSelect) filterTypeSelect.value = 'all';
            setClass('10', false);
        });
    }

    function getSubjectIconSvg(iconName) {
        switch (iconName) {
            case 'calculator':
                return '<svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm2.25-4.5h.008v.008H10.5v-.008Zm0 2.25h.008v.008H10.5V13.5Zm0 2.25h.008v.008H10.5v-.008Zm2.25-4.5h.008v.008H12.75v-.008Zm0 2.25h.008v.008H12.75V13.5Zm0 2.25h.008v.008H12.75v-.008ZM6.75 6.75h10.5a2.25 2.25 0 0 1 2.25 2.25v10.5a2.25 2.25 0 0 1-2.25 2.25H6.75a2.25 2.25 0 0 1-2.25-2.25V9a2.25 2.25 0 0 1 2.25-2.25Z"/></svg>';
            case 'beaker':
                return '<svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.942A4.5 4.5 0 0 1 15.85 17H8.15a4.5 4.5 0 0 1-2.38-.722L4.2 15.3M19.8 15.3A2.25 2.25 0 0 1 21 17.25v.75a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-.75a2.25 2.25 0 0 1 1.2-1.95"/></svg>';
            case 'globe':
                return '<svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418"/></svg>';
            case 'lightning':
                return '<svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z"/></svg>';
            case 'dna':
                return '<svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v18m-6-15 12 12m0-12L6 18"/></svg>';
            case 'code':
            case 'cpu':
                return '<svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5"/></svg>';
            default:
                return '<svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25"/></svg>';
        }
    }

    function escapeHtml(str) {
        if (!str) return '';
        const div = document.createElement('div');
        div.textContent = str;
        return div.innerHTML;
    }

    setClass('10', false);
}
