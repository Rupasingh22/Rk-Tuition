/**
 * RKTuition - Main JavaScript File
 * Handles responsive navigation, mobile drawer transitions, FAQ accordions, and smooth UI interactions.
 */

document.addEventListener('DOMContentLoaded', function () {
    initMobileNavigation();
    initClassDropdown();
    initFaqAccordion();
    initSmoothScroll();
    initScrollReveal();
});

/**
 * Initializes mobile hamburger menu toggle and accessibility controls.
 */
function initMobileNavigation() {
    const menuButton = document.getElementById('rk-mobile-menu-btn');
    const mobileMenu = document.getElementById('rk-mobile-menu');
    const openIcon = document.getElementById('rk-menu-open-icon');
    const closeIcon = document.getElementById('rk-menu-close-icon');

    if (!menuButton || !mobileMenu) {
        return;
    }

    // Toggle Mobile Navigation
    function toggleMenu(isOpen) {
        const currentlyOpen = menuButton.getAttribute('aria-expanded') === 'true';
        const shouldOpen = typeof isOpen === 'boolean' ? isOpen : !currentlyOpen;

        menuButton.setAttribute('aria-expanded', shouldOpen ? 'true' : 'false');

        if (shouldOpen) {
            mobileMenu.classList.remove('hidden');
            if (openIcon) openIcon.classList.add('hidden');
            if (closeIcon) closeIcon.classList.remove('hidden');
            document.body.classList.add('overflow-hidden', 'lg:overflow-auto');
        } else {
            mobileMenu.classList.add('hidden');
            if (openIcon) openIcon.classList.remove('hidden');
            if (closeIcon) closeIcon.classList.add('hidden');
            document.body.classList.remove('overflow-hidden', 'lg:overflow-auto');
        }
    }

    // Toggle button click listener
    menuButton.addEventListener('click', function (e) {
        e.stopPropagation();
        toggleMenu();
    });

    // Close when clicking any mobile navigation link
    const mobileLinks = mobileMenu.querySelectorAll('.mobile-nav-link');
    mobileLinks.forEach(function (link) {
        link.addEventListener('click', function () {
            toggleMenu(false);
        });
    });

    // Close when clicking outside of header and mobile menu
    document.addEventListener('click', function (event) {
        if (!mobileMenu.classList.contains('hidden')) {
            const isInsideMenu = mobileMenu.contains(event.target);
            const isInsideButton = menuButton.contains(event.target);

            if (!isInsideMenu && !isInsideButton) {
                toggleMenu(false);
            }
        }
    });

    // Close when pressing the Escape key
    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape' && !mobileMenu.classList.contains('hidden')) {
            toggleMenu(false);
            menuButton.focus();
        }
    });

    // Reset mobile menu if resized to desktop viewport
    window.addEventListener('resize', function () {
        if (window.innerWidth >= 1024 && !mobileMenu.classList.contains('hidden')) {
            toggleMenu(false);
        }
    });
}

/**
 * Initializes Class Dropdown for both desktop and mobile navigation.
 * Supports hover, click, outside click dismissal, Escape key, and keyboard arrow navigation.
 */
function initClassDropdown() {
    // Desktop elements
    const desktopContainer = document.getElementById('desktop-class-dropdown');
    const desktopBtn = document.getElementById('desktop-class-btn');
    const desktopMenu = document.getElementById('desktop-class-menu');
    const desktopArrow = desktopBtn ? desktopBtn.querySelector('.dropdown-arrow') : null;

    // Mobile elements
    const mobileBtn = document.getElementById('mobile-class-dropdown-btn');
    const mobileMenu = document.getElementById('mobile-class-dropdown-menu');
    const mobileArrow = mobileBtn ? mobileBtn.querySelector('.mobile-class-arrow') : null;

    // --- Desktop Dropdown Logic ---
    if (desktopContainer && desktopBtn && desktopMenu) {
        let closeTimeout = null;

        function openDesktopMenu() {
            clearTimeout(closeTimeout);
            desktopMenu.classList.remove('opacity-0', 'pointer-events-none', 'invisible', '-translate-y-1');
            desktopMenu.classList.add('opacity-100', 'pointer-events-auto', 'visible', 'translate-y-0');
            desktopBtn.setAttribute('aria-expanded', 'true');
            if (desktopArrow) {
                desktopArrow.classList.add('rotate-180', 'text-brand-gold');
            }
        }

        function closeDesktopMenu() {
            clearTimeout(closeTimeout);
            desktopMenu.classList.add('opacity-0', 'pointer-events-none', 'invisible', '-translate-y-1');
            desktopMenu.classList.remove('opacity-100', 'pointer-events-auto', 'visible', 'translate-y-0');
            desktopBtn.setAttribute('aria-expanded', 'false');
            if (desktopArrow) {
                desktopArrow.classList.remove('rotate-180', 'text-brand-gold');
            }
        }

        function isDesktopOpen() {
            return desktopBtn.getAttribute('aria-expanded') === 'true';
        }

        // Hover interactions (Desktop)
        desktopContainer.addEventListener('mouseenter', function () {
            openDesktopMenu();
        });

        desktopContainer.addEventListener('mouseleave', function () {
            closeTimeout = setTimeout(function () {
                closeDesktopMenu();
            }, 180);
        });

        // Click interaction (Desktop)
        desktopBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            if (isDesktopOpen()) {
                closeDesktopMenu();
            } else {
                openDesktopMenu();
            }
        });

        // Close when clicking an option
        const desktopLinks = desktopMenu.querySelectorAll('a');
        desktopLinks.forEach(function (link) {
            link.addEventListener('click', function () {
                closeDesktopMenu();
            });
        });

        // Keyboard navigation for desktop dropdown
        desktopBtn.addEventListener('keydown', function (e) {
            if (e.key === 'ArrowDown' || e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                openDesktopMenu();
                const firstOption = desktopMenu.querySelector('a');
                if (firstOption) firstOption.focus();
            }
        });

        desktopLinks.forEach(function (link, index) {
            link.addEventListener('keydown', function (e) {
                if (e.key === 'ArrowDown') {
                    e.preventDefault();
                    const nextLink = desktopLinks[index + 1] || desktopLinks[0];
                    nextLink.focus();
                } else if (e.key === 'ArrowUp') {
                    e.preventDefault();
                    const prevLink = desktopLinks[index - 1] || desktopLinks[desktopLinks.length - 1];
                    prevLink.focus();
                } else if (e.key === 'Tab') {
                    closeDesktopMenu();
                }
            });
        });

        // Close on clicking outside
        document.addEventListener('click', function (e) {
            if (isDesktopOpen() && !desktopContainer.contains(e.target)) {
                closeDesktopMenu();
            }
        });

        // Close on Escape key
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && isDesktopOpen()) {
                closeDesktopMenu();
                desktopBtn.focus();
            }
        });
    }

    // --- Mobile Dropdown Logic ---
    if (mobileBtn && mobileMenu) {
        function toggleMobileMenu(isOpen) {
            const currentlyOpen = mobileBtn.getAttribute('aria-expanded') === 'true';
            const shouldOpen = typeof isOpen === 'boolean' ? isOpen : !currentlyOpen;

            mobileBtn.setAttribute('aria-expanded', shouldOpen ? 'true' : 'false');

            if (shouldOpen) {
                mobileMenu.classList.remove('hidden');
                if (mobileArrow) {
                    mobileArrow.classList.add('rotate-180', 'text-brand-gold');
                }
            } else {
                mobileMenu.classList.add('hidden');
                if (mobileArrow) {
                    mobileArrow.classList.remove('rotate-180', 'text-brand-gold');
                }
            }
        }

        // Tap on mobile Class button
        mobileBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            toggleMobileMenu();
        });

        // Close mobile dropdown when selecting an option
        const mobileLinks = mobileMenu.querySelectorAll('a');
        mobileLinks.forEach(function (link) {
            link.addEventListener('click', function () {
                toggleMobileMenu(false);
            });
        });

        // Close mobile dropdown on outside tap
        document.addEventListener('click', function (e) {
            if (mobileBtn.getAttribute('aria-expanded') === 'true') {
                if (!mobileBtn.contains(e.target) && !mobileMenu.contains(e.target)) {
                    toggleMobileMenu(false);
                }
            }
        });

        // Close mobile dropdown on Escape
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && mobileBtn.getAttribute('aria-expanded') === 'true') {
                toggleMobileMenu(false);
                mobileBtn.focus();
            }
        });
    }
}

/**
 * Initializes FAQ Accordion with keyboard accessibility and ARIA state management.
 */
function initFaqAccordion() {
    const faqButtons = document.querySelectorAll('.faq-toggle');
    if (!faqButtons.length) return;

    faqButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            const panelId = this.getAttribute('aria-controls');
            const panel = document.getElementById(panelId);
            const icon = this.querySelector('.faq-icon');

            // Close all other panels for a clean accordion experience
            faqButtons.forEach(function (otherBtn) {
                if (otherBtn !== button) {
                    otherBtn.setAttribute('aria-expanded', 'false');
                    const otherPanelId = otherBtn.getAttribute('aria-controls');
                    const otherPanel = document.getElementById(otherPanelId);
                    const otherIcon = otherBtn.querySelector('.faq-icon');
                    if (otherPanel) {
                        otherPanel.classList.add('hidden');
                    }
                    if (otherIcon) {
                        otherIcon.classList.remove('rotate-180', 'text-brand-gold');
                    }
                }
            });

            // Toggle current panel
            if (isExpanded) {
                this.setAttribute('aria-expanded', 'false');
                if (panel) panel.classList.add('hidden');
                if (icon) icon.classList.remove('rotate-180', 'text-brand-gold');
            } else {
                this.setAttribute('aria-expanded', 'true');
                if (panel) panel.classList.remove('hidden');
                if (icon) icon.classList.add('rotate-180', 'text-brand-gold');
            }
        });
    });
}

/**
 * Smooth scrolling for anchor links with sticky header offset and reduced-motion support.
 */
function initSmoothScroll() {
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const internalLinks = document.querySelectorAll('a[href^="#"]:not([href="#"])');

    internalLinks.forEach(function (link) {
        link.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                e.preventDefault();
                const headerOffset = 90; // Height of sticky header + padding
                const elementPosition = targetElement.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: prefersReducedMotion ? 'auto' : 'smooth'
                });

                // Set focus for accessibility without breaking view
                targetElement.setAttribute('tabindex', '-1');
                targetElement.focus({ preventScroll: true });
            }
        });
    });
}

/**
 * Subtle scroll-reveal animation using IntersectionObserver.
 */
function initScrollReveal() {
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        return; // Skip animation if user prefers reduced motion
    }

    if (!('IntersectionObserver' in window)) {
        return;
    }

    const revealElements = document.querySelectorAll('.scroll-reveal');
    if (!revealElements.length) return;

    const observer = new IntersectionObserver(function (entries, observerInstance) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('opacity-100', 'translate-y-0');
                entry.target.classList.remove('opacity-0', 'translate-y-4');
                observerInstance.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -40px 0px'
    });

    revealElements.forEach(function (el) {
        el.classList.add('transition-all', 'duration-500', 'ease-out', 'opacity-0', 'translate-y-4');
        observer.observe(el);
    });
}
