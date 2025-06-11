<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'u662439561_mailbulk');
define('DB_PASS', 'BenTech#@5428#');
define('DB_NAME', 'u662439561_bulkmail');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS " . DB_NAME;
if (mysqli_query($conn, $sql)) {
    mysqli_select_db($conn, DB_NAME);
} else {
    die("Error creating database: " . mysqli_error($conn));
}
