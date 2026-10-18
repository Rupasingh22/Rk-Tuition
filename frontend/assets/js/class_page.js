/**
 * RKTuition - Class Page Interactive Logic (class_page.js)
 *
 * Handles:
 * 1. Grade selection (Class 6/7/8, 9/10, 11/12)
 * 2. Syllabus subject filtering & chapter expansion
 * 3. Resource category filtering
 * 4. Interactive practice quiz with instant feedback & scoring
 * 5. Interactive study planner with localStorage persistence
 * 6. Smooth scrolling & accessibility states
 */

document.addEventListener('DOMContentLoaded', function () {
    initClassPageInteractions();
});

function initClassPageInteractions() {
    // Read embedded data from page
    const configDataElement = document.getElementById('rk-class-data');
    if (!configDataElement) return;

    let classData = {};
    try {
        classData = JSON.parse(configDataElement.textContent);
    } catch (e) {
        console.error('Failed to parse RKTuition class data:', e);
        return;
    }

    // Initialize individual components
    initGradeSelector(classData);
    initSyllabusFilter(classData);
    initResourceFilter();
    initPracticeQuiz(classData);
    initStudyPlanner(classData);
}

/**
 * 1. Grade Selection Handler
 */
function initGradeSelector(classData) {
    const gradeButtons = document.querySelectorAll('.grade-select-btn');
    if (!gradeButtons.length) return;

    let currentGrade = gradeButtons[0].getAttribute('data-grade-id');

    gradeButtons.forEach(function (btn) {
        btn.addEventListener('click', function () {
            const gradeId = this.getAttribute('data-grade-id');
            if (gradeId === currentGrade) return;

            currentGrade = gradeId;

            // Update UI active states on grade buttons
            gradeButtons.forEach(function (b) {
                const isSelected = b.getAttribute('data-grade-id') === gradeId;
                b.setAttribute('aria-selected', isSelected ? 'true' : 'false');
                if (isSelected) {
                    b.classList.remove('bg-slate-900', 'border-slate-800', 'text-slate-300');
                    b.classList.add('bg-slate-800', 'border-brand-gold', 'text-white', 'shadow-lg');
                    const indicator = b.querySelector('.grade-indicator');
                    if (indicator) indicator.classList.remove('opacity-0');
                } else {
                    b.classList.remove('bg-slate-800', 'border-brand-gold', 'text-white', 'shadow-lg');
                    b.classList.add('bg-slate-900', 'border-slate-800', 'text-slate-300');
                    const indicator = b.querySelector('.grade-indicator');
                    if (indicator) indicator.classList.add('opacity-0');
                }
            });

            // Update syllabus view for new grade
            renderSyllabusChapters(classData, currentGrade);
        });
    });
}

/**
 * 2. Syllabus Subject & Grade Filter
 */
let activeSyllabusSubject = 'all';

function initSyllabusFilter(classData) {
    const subjectPills = document.querySelectorAll('.syllabus-subject-pill');
    if (!subjectPills.length) return;

    subjectPills.forEach(function (pill) {
        pill.addEventListener('click', function () {
            const subj = this.getAttribute('data-subject');
            activeSyllabusSubject = subj;

            subjectPills.forEach(function (p) {
                const isActive = p.getAttribute('data-subject') === subj;
                p.setAttribute('aria-pressed', isActive ? 'true' : 'false');
                if (isActive) {
                    p.classList.remove('bg-slate-900', 'text-slate-400', 'border-slate-800');
                    p.classList.add('bg-brand-gold', 'text-slate-950', 'border-brand-gold', 'font-bold');
                } else {
                    p.classList.remove('bg-brand-gold', 'text-slate-950', 'border-brand-gold', 'font-bold');
                    p.classList.add('bg-slate-900', 'text-slate-400', 'border-slate-800');
                }
            });

            // Re-render chapters
            const activeGradeBtn = document.querySelector('.grade-select-btn[aria-selected="true"]');
            const currentGrade = activeGradeBtn ? activeGradeBtn.getAttribute('data-grade-id') : Object.keys(classData.syllabus || {})[0];
            renderSyllabusChapters(classData, currentGrade);
        });
    });
}

function renderSyllabusChapters(classData, gradeId) {
    const container = document.getElementById('syllabus-chapters-container');
    const emptyState = document.getElementById('syllabus-empty-state');
    if (!container) return;

    const gradeSyllabus = (classData.syllabus && classData.syllabus[gradeId]) ? classData.syllabus[gradeId] : {};
    let chapters = [];

    if (activeSyllabusSubject === 'all') {
        Object.keys(gradeSyllabus).forEach(function (subjKey) {
            const subjChapters = gradeSyllabus[subjKey] || [];
            subjChapters.forEach(function (c) {
                chapters.push({ ...c, subjectKey: subjKey });
            });
        });
    } else {
        const subjChapters = gradeSyllabus[activeSyllabusSubject] || [];
        subjChapters.forEach(function (c) {
            chapters.push({ ...c, subjectKey: activeSyllabusSubject });
        });
    }

    if (!chapters.length) {
        container.innerHTML = '';
        if (emptyState) emptyState.classList.remove('hidden');
        return;
    }

    if (emptyState) emptyState.classList.add('hidden');

    let html = '';
    chapters.forEach(function (ch, idx) {
        const topicsList = (ch.topics || []).map(function (t) {
            return `<li class="flex items-center gap-2 text-xs text-slate-300">
                <svg class="w-3.5 h-3.5 text-brand-gold shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg>
                <span>${escapeHtml(t)}</span>
            </li>`;
        }).join('');

        html += `
        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 hover:border-slate-700 transition-all duration-300 shadow-md">
            <div class="flex flex-wrap items-center justify-between gap-2 mb-3">
                <span class="text-[11px] font-bold uppercase tracking-wider text-brand-gold bg-brand-gold/10 px-2.5 py-1 rounded-md border border-brand-gold/20">
                    ${escapeHtml(ch.category || 'Topic')}
                </span>
                <div class="flex items-center gap-2">
                    <span class="text-[11px] text-slate-400 font-medium px-2 py-0.5 rounded bg-slate-800">
                        ${escapeHtml(ch.duration || '2-3 Weeks')}
                    </span>
                    <span class="text-[11px] font-semibold text-emerald-400 bg-emerald-500/10 px-2 py-0.5 rounded border border-emerald-500/20">
                        ${escapeHtml(ch.status || 'Active Term')}
                    </span>
                </div>
            </div>
            <h3 class="text-lg font-bold text-white mb-3">${escapeHtml(ch.title)}</h3>
            <div class="pt-3 border-t border-slate-800/80">
                <span class="text-[11px] uppercase tracking-wider font-semibold text-slate-400 block mb-2">Core Concepts Covered:</span>
                <ul class="space-y-1.5">
                    ${topicsList}
                </ul>
            </div>
        </div>`;
    });

    container.innerHTML = html;
}

/**
 * 3. Learning Resources Filter
 */
function initResourceFilter() {
    const filterPills = document.querySelectorAll('.resource-filter-pill');
    const resourceCards = document.querySelectorAll('.resource-card');
    if (!filterPills.length || !resourceCards.length) return;

    filterPills.forEach(function (pill) {
        pill.addEventListener('click', function () {
            const filter = this.getAttribute('data-filter');

            filterPills.forEach(function (p) {
                const isActive = p.getAttribute('data-filter') === filter;
                p.setAttribute('aria-pressed', isActive ? 'true' : 'false');
                if (isActive) {
                    p.classList.remove('bg-slate-900', 'text-slate-400', 'border-slate-800');
                    p.classList.add('bg-brand-gold', 'text-slate-950', 'border-brand-gold', 'font-bold');
                } else {
                    p.classList.remove('bg-brand-gold', 'text-slate-950', 'border-brand-gold', 'font-bold');
                    p.classList.add('bg-slate-900', 'text-slate-400', 'border-slate-800');
                }
            });

            let visibleCount = 0;
            resourceCards.forEach(function (card) {
                const cardType = card.getAttribute('data-type');
                if (filter === 'all' || cardType === filter) {
                    card.classList.remove('hidden');
                    visibleCount++;
                } else {
                    card.classList.add('hidden');
                }
            });

            const emptyNotice = document.getElementById('resources-empty-state');
            if (emptyNotice) {
                if (visibleCount === 0) {
                    emptyNotice.classList.remove('hidden');
                } else {
                    emptyNotice.classList.add('hidden');
                }
            }
        });
    });
}

/**
 * 4. Practice & Self-Assessment Quiz
 */
function initPracticeQuiz(classData) {
    const quizData = classData.quiz || [];
    if (!quizData.length) return;

    let currentQuestionIndex = 0;
    let score = 0;
    let answered = false;

    const subjectBadge = document.getElementById('quiz-subject-badge');
    const questionText = document.getElementById('quiz-question-text');
    const optionsContainer = document.getElementById('quiz-options-container');
    const feedbackBox = document.getElementById('quiz-feedback-box');
    const feedbackText = document.getElementById('quiz-feedback-text');
    const nextBtn = document.getElementById('quiz-next-btn');
    const counterText = document.getElementById('quiz-counter');
    const scoreText = document.getElementById('quiz-live-score');
    const resetBtn = document.getElementById('quiz-reset-btn');

    function loadQuestion(index) {
        if (!questionText || !optionsContainer) return;
        const q = quizData[index];
        answered = false;

        if (subjectBadge) subjectBadge.textContent = q.subject || 'General';
        if (questionText) questionText.textContent = q.q;
        if (counterText) counterText.textContent = `Question ${index + 1} of ${quizData.length}`;
        if (scoreText) scoreText.textContent = `Score: ${score}`;

        if (feedbackBox) feedbackBox.classList.add('hidden');
        if (nextBtn) {
            nextBtn.classList.add('hidden');
            nextBtn.textContent = (index === quizData.length - 1) ? 'View Final Results' : 'Next Question';
        }

        let optionsHtml = '';
        q.options.forEach(function (opt, optIdx) {
            optionsHtml += `
            <button type="button" 
                    class="quiz-option-btn w-full text-left p-4 rounded-xl border border-slate-700 bg-slate-800/80 hover:bg-slate-700/80 hover:border-slate-500 text-sm font-medium text-slate-200 transition-all flex items-center justify-between"
                    data-option-idx="${optIdx}">
                <span>${escapeHtml(opt)}</span>
                <span class="w-5 h-5 rounded-full border border-slate-600 flex items-center justify-center text-xs text-slate-400 option-radio"></span>
            </button>`;
        });

        optionsContainer.innerHTML = optionsHtml;

        const optionButtons = optionsContainer.querySelectorAll('.quiz-option-btn');
        optionButtons.forEach(function (btn) {
            btn.addEventListener('click', function () {
                if (answered) return;
                answered = true;
                const chosenIdx = parseInt(this.getAttribute('data-option-idx'), 10);
                const isCorrect = (chosenIdx === q.answer);

                if (isCorrect) {
                    score++;
                    if (scoreText) scoreText.textContent = `Score: ${score}`;
                    this.classList.remove('bg-slate-800/80', 'border-slate-700');
                    this.classList.add('bg-emerald-950/60', 'border-emerald-500', 'text-emerald-200');
                } else {
                    this.classList.remove('bg-slate-800/80', 'border-slate-700');
                    this.classList.add('bg-rose-950/60', 'border-rose-500', 'text-rose-200');
                    // Highlight correct answer
                    const correctBtn = optionsContainer.querySelector(`[data-option-idx="${q.answer}"]`);
                    if (correctBtn) {
                        correctBtn.classList.remove('bg-slate-800/80', 'border-slate-700');
                        correctBtn.classList.add('bg-emerald-950/40', 'border-emerald-500/80', 'text-emerald-300');
                    }
                }

                // Show Explanation Feedback
                if (feedbackBox && feedbackText) {
                    feedbackText.innerHTML = `<span class="font-bold ${isCorrect ? 'text-emerald-400' : 'text-rose-400'}">${isCorrect ? 'Correct!' : 'Incorrect.'}</span> ${escapeHtml(q.explain)}`;
                    feedbackBox.classList.remove('hidden');
                }

                if (nextBtn) nextBtn.classList.remove('hidden');
            });
        });
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', function () {
            if (currentQuestionIndex < quizData.length - 1) {
                currentQuestionIndex++;
                loadQuestion(currentQuestionIndex);
            } else {
                // Show completion summary
                if (questionText) questionText.textContent = `Practice Quiz Completed!`;
                if (optionsContainer) {
                    const percentage = Math.round((score / quizData.length) * 100);
                    optionsContainer.innerHTML = `
                    <div class="text-center p-8 bg-slate-900 border border-slate-800 rounded-2xl">
                        <span class="text-4xl font-extrabold text-brand-gold">${score} / ${quizData.length}</span>
                        <p class="text-sm text-slate-300 mt-2">You achieved <strong>${percentage}%</strong> on this practice set.</p>
                        <p class="text-xs text-slate-400 mt-1">Remember, practice questions are for conceptual reinforcement. Regular revision leads to sustained mastery.</p>
                    </div>`;
                }
                if (feedbackBox) feedbackBox.classList.add('hidden');
                nextBtn.classList.add('hidden');
            }
        });
    }

    if (resetBtn) {
        resetBtn.addEventListener('click', function () {
            currentQuestionIndex = 0;
            score = 0;
            loadQuestion(0);
        });
    }

    loadQuestion(0);
}

/**
 * 5. Interactive Study Planner (with localStorage)
 */
function initStudyPlanner(classData) {
    const storageKey = `rktuition_planner_${classData.key || 'default'}`;
    const taskInput = document.getElementById('planner-task-input');
    const subjectSelect = document.getElementById('planner-subject-select');
    const addBtn = document.getElementById('planner-add-btn');
    const listContainer = document.getElementById('planner-tasks-list');
    const progressBar = document.getElementById('planner-progress-bar');
    const progressLabel = document.getElementById('planner-progress-label');
    const countLabel = document.getElementById('planner-count-label');
    const clearBtn = document.getElementById('planner-clear-btn');

    if (!listContainer) return;

    // Load initial tasks from localStorage or defaults
    let tasks = [];
    const saved = localStorage.getItem(storageKey);
    if (saved) {
        try {
            tasks = JSON.parse(saved);
        } catch (e) {
            tasks = classData.planner_defaults || [];
        }
    } else {
        tasks = classData.planner_defaults || [];
    }

    function saveAndRender() {
        try {
            localStorage.setItem(storageKey, JSON.stringify(tasks));
        } catch (e) {
            // Storage quota or disabled
        }

        renderTasks();
    }

    function renderTasks() {
        if (!tasks.length) {
            listContainer.innerHTML = `<div class="p-6 text-center text-xs text-slate-400 italic">No active tasks in your planner. Add a study goal above to get started!</div>`;
            if (progressBar) progressBar.style.width = '0%';
            if (progressLabel) progressLabel.textContent = '0%';
            if (countLabel) countLabel.textContent = '0 of 0 tasks completed';
            return;
        }

        const completedCount = tasks.filter(t => t.done).length;
        const percent = Math.round((completedCount / tasks.length) * 100);

        if (progressBar) progressBar.style.width = `${percent}%`;
        if (progressLabel) progressLabel.textContent = `${percent}%`;
        if (countLabel) countLabel.textContent = `${completedCount} of ${tasks.length} tasks completed`;

        let html = '';
        tasks.forEach(function (task, idx) {
            html += `
            <div class="flex items-center justify-between p-3.5 rounded-xl border ${task.done ? 'bg-slate-900/50 border-slate-800/60 opacity-60' : 'bg-slate-900 border-slate-800'} transition-all gap-3">
                <label class="flex items-center gap-3 cursor-pointer flex-grow select-none">
                    <input type="checkbox" 
                           class="planner-checkbox w-4 h-4 rounded text-brand-gold focus:ring-brand-gold focus:ring-offset-slate-900 bg-slate-800 border-slate-700" 
                           data-task-idx="${idx}" 
                           ${task.done ? 'checked' : ''}>
                    <span class="text-xs sm:text-sm ${task.done ? 'line-through text-slate-500' : 'text-slate-200'}">
                        ${escapeHtml(task.task)}
                    </span>
                </label>
                <div class="flex items-center gap-2">
                    <span class="text-[10px] uppercase font-bold text-slate-400 px-2 py-0.5 rounded bg-slate-800 border border-slate-700">
                        ${escapeHtml(task.subject || 'Study')}
                    </span>
                    <button type="button" 
                            class="planner-delete-btn p-1 text-slate-500 hover:text-rose-400 transition-colors" 
                            data-task-idx="${idx}"
                            title="Remove task">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/></svg>
                    </button>
                </div>
            </div>`;
        });

        listContainer.innerHTML = html;

        // Bind checkbox listeners
        const checkboxes = listContainer.querySelectorAll('.planner-checkbox');
        checkboxes.forEach(function (cb) {
            cb.addEventListener('change', function () {
                const idx = parseInt(this.getAttribute('data-task-idx'), 10);
                if (tasks[idx]) {
                    tasks[idx].done = this.checked;
                    saveAndRender();
                }
            });
        });

        // Bind delete listeners
        const deleteBtns = listContainer.querySelectorAll('.planner-delete-btn');
        deleteBtns.forEach(function (btn) {
            btn.addEventListener('click', function () {
                const idx = parseInt(this.getAttribute('data-task-idx'), 10);
                tasks.splice(idx, 1);
                saveAndRender();
            });
        });
    }

    if (addBtn && taskInput) {
        addBtn.addEventListener('click', function () {
            const text = taskInput.value.trim();
            if (!text) return;
            const subject = subjectSelect ? subjectSelect.value : 'General';
            tasks.unshift({ task: text, subject: subject, done: false });
            taskInput.value = '';
            saveAndRender();
        });

        taskInput.addEventListener('keydown', function (e) {
            if (e.key === 'Enter') {
                addBtn.click();
            }
        });
    }

    if (clearBtn) {
        clearBtn.addEventListener('click', function () {
            if (confirm('Clear all tasks from your local study planner?')) {
                tasks = [];
                saveAndRender();
            }
        });
    }

    renderTasks();
}

/**
 * Utility: Safe HTML Escape
 */
function escapeHtml(str) {
    if (!str) return '';
    return String(str)
        .replace(/&/g, '&amp;')
        .replace(/</g, '&lt;')
        .replace(/>/g, '&gt;')
        .replace(/"/g, '&quot;')
        .replace(/'/g, '&#039;');
}
