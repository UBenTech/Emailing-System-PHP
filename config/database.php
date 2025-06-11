<?php
/**
 * Database Configuration
 * 
 * Update the values below with your actual database credentials.
 * For security, never commit real credentials to version control.
 */

// Database Host - usually 'localhost' for local development
define('DB_HOST', 'localhost');

// Database Username - your MySQL/MariaDB username
define('DB_USER', '662439561_mailbulk');

// Database Password - your MySQL/MariaDB password
define('DB_PASS', 'BenTech#@5428#');

// Database Name - the name of your database
define('DB_NAME', '662439561_bulkmail');

// Create connection to MySQL server (without selecting database first)
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS " . DB_NAME;
if (mysqli_query($conn, $sql)) {
    // Select the database for use
    mysqli_select_db($conn, DB_NAME);
} else {
    die("Error creating database: " . mysqli_error($conn));
}

// Set charset to UTF-8 for proper character encoding
mysqli_set_charset($conn, "utf8");
?>