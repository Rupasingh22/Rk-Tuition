<?php
/**
 * RKTuition - Contact Redirection Stub
 * Forwards requests from frontend root to pages/contact.php
 */
$queryString = !empty($_SERVER['QUERY_STRING']) ? '?' . $_SERVER['QUERY_STRING'] : '';
header('Location: pages/contact.php' . $queryString, true, 301);
exit;
