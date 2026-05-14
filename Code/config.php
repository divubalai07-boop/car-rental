<?php
// config.php - Database Configuration File
// Fleet Flax Car Rental Website
//
// This file sets up the MySQL database connection.
// It is included by booking.php using require_once.
//
// ============================================================
//  HOW TO USE:
//  1. Start XAMPP / WAMP
//  2. Open phpMyAdmin
//  3. Import the db.sql file to create the database & table
//  4. Update DB_USER and DB_PASS below if needed
// ============================================================

// ----- Database Settings -----
define('DB_HOST', 'localhost');   // Usually 'localhost' in XAMPP/WAMP
define('DB_USER', 'root');        // Default XAMPP user is 'root'
define('DB_PASS', '');            // Default XAMPP password is '' (empty)
define('DB_NAME', 'fleet_flax'); // Our database name

// ----- Create Connection -----
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// ----- Check Connection -----
if ($conn->connect_error) {
    // If connection fails, return a JSON error (since booking.php uses AJAX)
    http_response_code(500);
    echo json_encode([
        'status'  => 'error',
        'message' => 'Database connection failed: ' . $conn->connect_error
    ]);
    exit; // Stop script
}

// Set character encoding to UTF-8 for proper text storage
$conn->set_charset("utf8");

// $conn is now available to any file that includes config.php
?>
