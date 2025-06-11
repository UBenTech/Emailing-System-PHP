<?php
// Enable error reporting for development
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Define ROOT_PATH as one directory up from /bulkmail
if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', dirname(__DIR__));
}

// Connect to database using the app's main config
$db_file = ROOT_PATH . 'bulkmail/config/database.php';
if (!file_exists($db_file)) {
    die("Database configuration file not found at: $db_file");
}
require_once $db_file;

// Main output for test
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bulk Mailer Home</title>
</head>
<body>
  <h1>Bulk Mailer Home</h1>
  <p>Database connection established.</p>
  <?php
  // Optional test: show tables in the database
  if (isset($conn) && $conn) {
      $result = mysqli_query($conn, "SHOW TABLES");
      if ($result) {
          echo '<h2>Database Tables:</h2><ul>';
          while ($row = mysqli_fetch_row($result)) {
              echo '<li>' . htmlspecialchars($row[0]) . '</li>';
          }
          echo '</ul>';
      } else {
          echo '<p>Could not list tables.</p>';
      }
  } else {
      echo '<p>No database connection available.</p>';
  }
  ?>
</body>
</html>
