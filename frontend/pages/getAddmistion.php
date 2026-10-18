<?php
/**
 * RKTuition - Admission Redirection Forwarder
 * Ensures legacy links or typo URLs seamlessly redirect to the primary admission page.
 */
header('Location: admission.php', true, 301);
exit;
