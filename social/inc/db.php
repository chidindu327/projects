<?php
// Database credentials
$host = 'localhost';
$dbname = 'social';
$username = 'root';
$password = '';

// Establish MySQLi connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}