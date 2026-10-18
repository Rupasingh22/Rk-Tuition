<?php
/**
 * RKTuition - Notes Redirection Stub
 * Forwards requests from frontend root to notes/index.php
 */
header('Location: notes/index.php', true, 301);
exit;
