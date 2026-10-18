<?php
/**
 * RKTuition - Classes 11 & 12 Senior Secondary & Advanced Mentorship
 *
 * File: frontend/classes/eleventhTotwelth.php
 * Covers Classes 11 & 12: Mathematics, Physics, Chemistry, Biology & Computer Science.
 */

require_once __DIR__ . '/../config/classes_data.php';

$allGroups = getClassesConfig();
$classGroupData = $allGroups['11-12'] ?? null;

if (!$classGroupData) {
    die('Error: Configuration for Classes 11 to 12 not found.');
}

// Render complete 10-section page
require_once __DIR__ . '/../components/class_page_renderer.php';
