<?php
/**
 * RKTuition - Classes 6 to 8 Foundation Program
 *
 * File: frontend/classes/sixthToeight.php
 * Covers Classes 6, 7 & 8: Mathematics, Science, Social Science & Computer Studies.
 */

require_once __DIR__ . '/../config/classes_data.php';

$allGroups = getClassesConfig();
$classGroupData = $allGroups['6-8'] ?? null;

if (!$classGroupData) {
    die('Error: Configuration for Classes 6 to 8 not found.');
}

// Render complete 10-section page
require_once __DIR__ . '/../components/class_page_renderer.php';
