<?php
/**
 * RKTuition - Header Component
 *
 * Reusable, responsive, and accessible header for RKTuition educational platform.
 *
 * Configurable Variables (optional before including this file):
 * - $currentPage (string): 'home' | 'services' | 'class' | 'notes' | 'contact' | 'login' | 'admission'
 * - $basePath    (string): relative path to frontend root (e.g., './' or '../')
 * - $navUrls     (array) : custom overrides for navigation URLs
 */

$currentPage = $currentPage ?? ($activePage ?? 'home');
$basePath    = $basePath ?? '';

// Default navigation URLs (easily customizable via $navUrls)
$defaultUrls = [
    'home'      => $basePath . 'index.php',
    'services'  => $basePath . 'services.php',
    'class'     => $basePath . 'classes/sixthToeight.php',
    'notes'     => $basePath . 'notes/index.php',
    'tuition'   => $basePath . 'pages/tuition.php',
    'contact'   => $basePath . 'pages/contact.php',
    'login'     => $basePath . 'pages/login.php',
    'admission' => $basePath . 'pages/admission.php',
];

$urls = isset($navUrls) && is_array($navUrls) ? array_merge($defaultUrls, $navUrls) : $defaultUrls;

$currentScript = basename($_SERVER['SCRIPT_NAME'] ?? '');

// Submenu items for Class dropdown
$classSubmenu = [
    [
        'label' => 'Classes 6–8',
        'badge' => '6–8',
        'desc'  => 'Middle School Foundation',
        'url'   => $urls['class_6_8'] ?? ($basePath . 'classes/sixthToeight.php'),
        'file'  => 'sixthToeight.php',
    ],
    [
        'label' => 'Classes 9–10',
        'badge' => '9–10',
        'desc'  => 'Secondary & Board Prep',
        'url'   => $urls['class_9_10'] ?? ($basePath . 'classes/ninetheTotenth.php'),
        'file'  => 'ninetheTotenth.php',
    ],
    [
        'label' => 'Classes 11–12',
        'badge' => '11–12',
        'desc'  => 'Senior Secondary & Competitive',
        'url'   => $urls['class_11_12'] ?? ($basePath . 'classes/eleventhTotwelth.php'),
        'file'  => 'eleventhTotwelth.php',
    ],
];

// Primary navigation items (Items 1-5 in exact order)
$primaryNavItems = [
    'home'     => ['label' => 'Home',     'url' => $urls['home']],
    'services' => ['label' => 'Services', 'url' => $urls['services']],
    'class'    => ['label' => 'Class',    'url' => $urls['class']],
    'notes'    => ['label' => 'Notes',    'url' => $urls['notes']],
    'tuition'  => ['label' => 'Tuition',  'url' => $urls['tuition']],
];
?>
<!-- Top Decorative Brand Accent Strip -->
<div class="h-1 w-full bg-gradient-to-r from-brand-navy via-brand-gold to-brand-navy"></div>

<!-- Main Sticky Header -->
<header class="sticky top-0 z-50 w-full bg-brand-navy/95 backdrop-blur-md border-b border-slate-800 transition-all duration-300 shadow-lg shadow-black/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            
            <!-- Brand Identity / Logo -->
            <a href="<?php echo htmlspecialchars($urls['home']); ?>" class="flex items-center gap-3 group focus:outline-none focus:ring-2 focus:ring-brand-gold/60 focus:ring-offset-2 focus:ring-offset-brand-navy rounded-lg p-1" aria-label="RKTuition Home">
                <!-- Academic Crest Icon -->
                <div class="w-11 h-11 rounded-xl bg-gradient-to-br from-slate-800 via-slate-900 to-black border border-brand-gold/40 flex items-center justify-center text-brand-gold shadow-md shadow-brand-gold/10 group-hover:border-brand-gold group-hover:scale-105 transition-all duration-300">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <!-- Graduation Cap Icon -->
                        <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
                        <path d="M6 12v5c3 3 9 3 12 0v-5"/>
                    </svg>
                </div>
                <!-- Brand Text & Subtitle -->
                <div class="flex flex-col">
                    <span class="text-2xl font-extrabold tracking-tight text-white font-sans flex items-center">
                        RK<span class="text-brand-gold ml-0.5">Tuition</span>
                    </span>
                    <span class="text-[10px] uppercase tracking-widest text-slate-400 font-semibold -mt-1 group-hover:text-slate-300 transition-colors">
                        Premier Academic Coaching
                    </span>
                </div>
            </a>

            <!-- Desktop Navigation Menu (Items 1 to 7 in exact order) -->
            <nav class="hidden lg:flex items-center space-x-1 xl:space-x-2" role="navigation" aria-label="Primary Navigation">
                
                <!-- 1. Home, 2. Services, 3. Class (with dropdown), 4. Notes, 5. Contact -->
                <?php foreach ($primaryNavItems as $key => $item): 
                    $isActive = ($key === 'class')
                        ? ($currentPage === 'class' || in_array($currentScript, ['sixthToeight.php', 'ninetheTotenth.php', 'eleventhTotwelth.php']))
                        : ($currentPage === $key);
                ?>
                    <?php if ($key === 'class'): ?>
                        <!-- 3. Class Dropdown Container -->
                        <div class="relative" id="desktop-class-dropdown">
                            <button type="button" 
                                    id="desktop-class-btn"
                                    class="relative inline-flex items-center gap-1.5 px-3.5 py-2 text-sm font-medium rounded-lg transition-all duration-200 <?php echo $isActive ? 'text-brand-gold bg-slate-800/80 font-semibold shadow-inner' : 'text-slate-300 hover:text-white hover:bg-slate-800/50'; ?> focus:outline-none focus:ring-2 focus:ring-brand-gold/60 focus:ring-offset-2 focus:ring-offset-brand-navy"
                                    aria-haspopup="true" 
                                    aria-expanded="false"
                                    aria-controls="desktop-class-menu"
                                    <?php echo $isActive ? 'aria-current="page"' : ''; ?>>
                                <span><?php echo htmlspecialchars($item['label']); ?></span>
                                <svg class="w-4 h-4 text-slate-400 transition-transform duration-200 dropdown-arrow" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                                <?php if ($isActive): ?>
                                    <span class="absolute bottom-0 left-3 right-3 h-0.5 bg-brand-gold rounded-full"></span>
                                <?php endif; ?>
                            </button>

                            <!-- Dropdown Menu Wrapper (pt-2 allows smooth hover transition without gap) -->
                            <div id="desktop-class-menu" 
                                 class="absolute top-full left-0 pt-2 w-72 z-[9999] transition-all duration-200 transform origin-top-left opacity-0 pointer-events-none invisible -translate-y-1"
                                 role="menu"
                                 aria-orientation="vertical"
                                 aria-labelledby="desktop-class-btn">
                                <div class="rounded-2xl bg-slate-950 border border-slate-700/80 shadow-2xl shadow-black/70 p-2 space-y-1">
                                    <div class="px-3 py-1.5 border-b border-slate-800 text-[10px] uppercase font-bold tracking-wider text-slate-400">
                                        Academic Programs
                                    </div>
                                    <?php foreach ($classSubmenu as $subItem): 
                                        $isSubActive = ($currentScript === $subItem['file']);
                                    ?>
                                        <a href="<?php echo htmlspecialchars($subItem['url']); ?>" 
                                           role="menuitem"
                                           class="dropdown-item group/item flex items-center gap-3 px-3 py-2.5 rounded-xl transition-all duration-150 <?php echo $isSubActive ? 'bg-slate-800/90 text-brand-gold font-semibold border-l-2 border-brand-gold' : 'text-slate-200 hover:text-white hover:bg-slate-800/70'; ?> focus:outline-none focus:bg-slate-800/90 focus:text-brand-gold">
                                            <div class="w-9 h-9 rounded-lg flex items-center justify-center text-xs font-bold transition-all <?php echo $isSubActive ? 'bg-brand-gold text-slate-950 shadow-md shadow-brand-gold/30' : 'bg-slate-800/90 text-slate-300 border border-slate-700/80 group-hover/item:border-brand-gold/50 group-hover/item:text-brand-gold group-hover/item:bg-slate-800'; ?>">
                                                <?php echo htmlspecialchars($subItem['badge']); ?>
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <div class="text-sm font-semibold tracking-wide flex items-center justify-between">
                                                    <span><?php echo htmlspecialchars($subItem['label']); ?></span>
                                                    <svg class="w-3.5 h-3.5 text-slate-500 group-hover/item:text-brand-gold group-hover/item:translate-x-0.5 transition-all opacity-0 group-hover/item:opacity-100" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                                    </svg>
                                                </div>
                                                <p class="text-[11px] text-slate-400 group-hover/item:text-slate-300 truncate">
                                                    <?php echo htmlspecialchars($subItem['desc']); ?>
                                                </p>
                                            </div>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <a href="<?php echo htmlspecialchars($item['url']); ?>" 
                           class="relative px-3.5 py-2 text-sm font-medium rounded-lg transition-all duration-200 <?php echo $isActive ? 'text-brand-gold bg-slate-800/80 font-semibold shadow-inner' : 'text-slate-300 hover:text-white hover:bg-slate-800/50'; ?>"
                           <?php echo $isActive ? 'aria-current="page"' : ''; ?>>
                            <?php echo htmlspecialchars($item['label']); ?>
                            <?php if ($isActive): ?>
                                <span class="absolute bottom-0 left-3 right-3 h-0.5 bg-brand-gold rounded-full"></span>
                            <?php endif; ?>
                        </a>
                    <?php endif; ?>
                <?php endforeach; ?>

                <!-- Divider between primary links and auth/CTA -->
                <div class="h-6 w-px bg-slate-800 mx-2" aria-hidden="true"></div>

                <!-- 6. Contact (Replaces Login, subtle refined visual treatment) -->
                <?php $isContactActive = ($currentPage === 'contact'); ?>
                <a href="<?php echo htmlspecialchars($urls['contact']); ?>" 
                   class="inline-flex items-center gap-1.5 px-3.5 py-2 text-sm font-medium rounded-lg border transition-all duration-200 <?php echo $isContactActive ? 'text-brand-gold border-brand-gold bg-slate-800/80 font-semibold' : 'text-slate-300 border-slate-700/80 hover:border-slate-500 hover:text-white hover:bg-slate-800/60'; ?>"
                   <?php echo $isContactActive ? 'aria-current="page"' : ''; ?>>
                    <svg class="w-4 h-4 text-slate-400 group-hover:text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/>
                    </svg>
                    <span>Contact</span>
                </a>

                <!-- 7. Get Admission (Primary CTA Button with premium gold gradient) -->
                <a href="<?php echo htmlspecialchars($urls['admission']); ?>" 
                   class="inline-flex items-center gap-2 px-5 py-2.5 text-sm font-bold text-slate-950 bg-gradient-to-r from-amber-400 via-brand-gold to-amber-500 hover:from-amber-300 hover:to-amber-400 rounded-lg shadow-md shadow-amber-500/20 hover:shadow-lg hover:shadow-amber-500/30 transition-all duration-200 transform hover:-translate-y-0.5 active:translate-y-0 focus:outline-none focus:ring-2 focus:ring-brand-gold focus:ring-offset-2 focus:ring-offset-brand-navy">
                    <span>Get Admission</span>
                    <svg class="w-4 h-4 text-slate-950 transition-transform duration-200 group-hover:translate-x-0.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </nav>

            <!-- Mobile Hamburger Toggle Button -->
            <div class="flex items-center lg:hidden">
                <button type="button" 
                        id="rk-mobile-menu-btn" 
                        class="p-2.5 rounded-lg text-slate-300 hover:text-white hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-brand-gold/70 transition-colors"
                        aria-controls="rk-mobile-menu" 
                        aria-expanded="false" 
                        aria-label="Toggle navigation menu">
                    <!-- Hamburger 3-bar icon -->
                    <svg id="rk-menu-open-icon" class="w-6 h-6 block" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                    </svg>
                    <!-- Close (X) icon -->
                    <svg id="rk-menu-close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div id="rk-mobile-menu" class="hidden lg:hidden border-t border-slate-800/80 bg-brand-navy/98 backdrop-blur-xl px-4 pt-3 pb-6 transition-all duration-300" role="region" aria-label="Mobile Navigation">
        <div class="flex flex-col space-y-1">
            
            <!-- 1. Home, 2. Services, 3. Class (collapsible), 4. Notes, 5. Contact -->
            <?php foreach ($primaryNavItems as $key => $item): 
                $isActive = ($key === 'class')
                    ? ($currentPage === 'class' || in_array($currentScript, ['sixthToeight.php', 'ninetheTotenth.php', 'eleventhTotwelth.php']))
                    : ($currentPage === $key);
            ?>
                <?php if ($key === 'class'): ?>
                    <!-- Mobile Class Dropdown Accordion -->
                    <div class="w-full">
                        <button type="button" 
                                id="mobile-class-dropdown-btn" 
                                class="w-full flex items-center justify-between px-4 py-3 rounded-lg text-base font-medium transition-colors <?php echo $isActive ? 'text-brand-gold bg-slate-800/80 font-semibold' : 'text-slate-300 hover:text-white hover:bg-slate-800/50'; ?> focus:outline-none focus:ring-2 focus:ring-brand-gold/50"
                                aria-expanded="false"
                                aria-controls="mobile-class-dropdown-menu">
                            <span class="flex items-center gap-2">
                                <span><?php echo htmlspecialchars($item['label']); ?></span>
                                <?php if ($isActive): ?>
                                    <span class="w-2 h-2 rounded-full bg-brand-gold"></span>
                                <?php endif; ?>
                            </span>
                            <svg class="w-4 h-4 text-slate-400 transition-transform duration-200 mobile-class-arrow" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>

                        <!-- Mobile Class Options Container -->
                        <div id="mobile-class-dropdown-menu" class="hidden pl-3 pr-1 py-1.5 space-y-1 transition-all">
                            <?php foreach ($classSubmenu as $subItem): 
                                $isSubActive = ($currentScript === $subItem['file']);
                            ?>
                                <a href="<?php echo htmlspecialchars($subItem['url']); ?>" 
                                   class="mobile-nav-link flex items-center justify-between px-3.5 py-2.5 rounded-lg text-sm font-medium transition-all <?php echo $isSubActive ? 'text-brand-gold bg-slate-800/90 font-semibold border-l-2 border-brand-gold' : 'text-slate-300 hover:text-white hover:bg-slate-800/60 bg-slate-900/50'; ?>">
                                    <div class="flex flex-col">
                                        <span class="font-semibold"><?php echo htmlspecialchars($subItem['label']); ?></span>
                                        <span class="text-[11px] text-slate-400"><?php echo htmlspecialchars($subItem['desc']); ?></span>
                                    </div>
                                    <span class="text-[10px] font-bold px-2 py-0.5 rounded bg-brand-gold/10 text-brand-gold border border-brand-gold/20">
                                        <?php echo htmlspecialchars($subItem['badge']); ?>
                                    </span>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php else: ?>
                    <a href="<?php echo htmlspecialchars($item['url']); ?>" 
                       class="mobile-nav-link flex items-center justify-between px-4 py-3 rounded-lg text-base font-medium transition-colors <?php echo $isActive ? 'text-brand-gold bg-slate-800/80 font-semibold' : 'text-slate-300 hover:text-white hover:bg-slate-800/50'; ?>"
                       <?php echo $isActive ? 'aria-current="page"' : ''; ?>>
                        <span><?php echo htmlspecialchars($item['label']); ?></span>
                        <?php if ($isActive): ?>
                            <span class="w-2 h-2 rounded-full bg-brand-gold"></span>
                        <?php endif; ?>
                    </a>
                <?php endif; ?>
            <?php endforeach; ?>

            <div class="pt-3 pb-1">
                <div class="h-px w-full bg-slate-800"></div>
            </div>

            <!-- 6. Contact (Replaces Login in Mobile Menu) -->
            <?php $isContactActive = ($currentPage === 'contact'); ?>
            <a href="<?php echo htmlspecialchars($urls['contact']); ?>" 
               class="mobile-nav-link flex items-center justify-center gap-2 px-4 py-3 rounded-lg text-base font-medium border transition-colors <?php echo $isContactActive ? 'text-brand-gold border-brand-gold bg-slate-800 font-semibold' : 'text-slate-200 border-slate-700/80 hover:bg-slate-800 hover:text-white'; ?>"
               <?php echo $isContactActive ? 'aria-current="page"' : ''; ?>>
                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/>
                </svg>
                <span>Contact RKTuition</span>
            </a>

            <!-- 7. Get Admission (Full-width CTA) -->
            <div class="pt-2">
                <a href="<?php echo htmlspecialchars($urls['admission']); ?>" 
                   class="mobile-nav-link w-full flex items-center justify-center gap-2 px-5 py-3 text-base font-bold text-slate-950 bg-gradient-to-r from-amber-400 via-brand-gold to-amber-500 hover:from-amber-300 hover:to-amber-400 rounded-lg shadow-md shadow-amber-500/20 active:scale-[0.99] transition-all">
                    <span>Get Admission</span>
                    <svg class="w-5 h-5 text-slate-950" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</header>
