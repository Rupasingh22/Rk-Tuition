<?php
/**
 * RKTuition - Tuition Redirection Stub
 * Forwards requests from frontend root to pages/tuition.php
 */
$queryString = !empty($_SERVER['QUERY_STRING']) ? '?' . $_SERVER['QUERY_STRING'] : '';
header('Location: pages/tuition.php' . $queryString, true, 301);
exit;
