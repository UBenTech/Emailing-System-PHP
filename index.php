<?php
// Ensure errors are displayed for development (optional, can be removed for production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Define ROOT_PATH if not already defined.
// This helps in locating include files consistently.
if (!defined('ROOT_PATH')) {
    // Assuming index.php is in the root directory of the application.
    define('ROOT_PATH', __DIR__ . '/');
}

// Include the main dashboard display
include ROOT_PATH . 'dashboard.php';
?>
