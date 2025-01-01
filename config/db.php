<?php
// Database configuration
$host = 'localhost';        // Server address (default for XAMPP is 'localhost')
$username = 'root';         // Default MySQL username
$password = '';             // Default password is blank in XAMPP
$database = 'ai_solutions'; // Database name you created in phpMyAdmin

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
