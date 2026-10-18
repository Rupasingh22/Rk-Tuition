<?php
/**
 * RKTuition - Student & Parent Portal Login
 * File: frontend/pages/login.php
 */

$currentPage = 'login';
$basePath    = '../';

$navUrls = [
    'home'      => '../index.php',
    'services'  => '../services.php',
    'class'     => '../classes/sixthToeight.php',
    'notes'     => '../notes/index.php',
    'contact'   => './admission.php#contact-guidance',
    'login'     => './login.php',
    'admission' => './admission.php',
];
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal Login | RKTuition</title>
    <link rel="stylesheet" href="../css/output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>body { font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif; }</style>
</head>
<body class="bg-brand-navy text-slate-100 min-h-screen flex flex-col antialiased selection:bg-brand-gold selection:text-slate-950">

    <?php require_once __DIR__ . '/../components/header.php'; ?>

    <main class="flex-grow flex items-center justify-center py-20 px-4">
        <div class="w-full max-w-md p-8 sm:p-10 rounded-3xl bg-slate-900/90 border border-slate-800 shadow-2xl text-center">
            <div class="w-14 h-14 rounded-2xl bg-brand-gold/10 text-brand-gold border border-brand-gold/20 flex items-center justify-center mx-auto mb-6">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"/></svg>
            </div>
            
            <h1 class="text-2xl font-bold text-white mb-2">Student & Parent Portal</h1>
            <p class="text-xs text-slate-400 mb-6">Access your batch schedule, test analytics, and digitized notes.</p>
            
            <div class="p-4 rounded-xl bg-slate-950 border border-slate-800 text-xs text-slate-400 mb-6">
                <p class="font-semibold text-brand-gold mb-1">Portal Setup Notice</p>
                <p>Digital portal authentication is currently accessible for enrolled batch students with assigned credentials.</p>
            </div>

            <div class="space-y-4">
                <a href="./admission.php" class="w-full py-3.5 px-4 rounded-xl bg-gradient-to-r from-amber-400 via-brand-gold to-amber-500 text-slate-950 font-bold text-sm block shadow-md hover:from-amber-300 hover:to-amber-400 transition-all">
                    New Student? Get Admission
                </a>
                <a href="../index.php" class="w-full py-3 px-4 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-300 font-semibold text-xs block border border-slate-700 transition-colors">
                    Back to Homepage
                </a>
            </div>
        </div>
    </main>

    <?php require_once __DIR__ . '/../components/footer.php'; ?>
    <script src="../js/main.js"></script>
</body>
</html>
