<?php
/**
 * RKTuition - Classes 9 & 10 Secondary Board Preparation
 *
 * File: frontend/classes/ninetheTotenth.php
 * Covers Classes 9 & 10: Mathematics, Science, Social Science & Computer Studies.
 */

require_once __DIR__ . '/../config/classes_data.php';

$allGroups = getClassesConfig();
$classGroupData = $allGroups['9-10'] ?? null;

if (!$classGroupData) {
    die('Error: Configuration for Classes 9 to 10 not found.');
}

// Render complete 10-section page
require_once __DIR__ . '/../components/class_page_renderer.php';
