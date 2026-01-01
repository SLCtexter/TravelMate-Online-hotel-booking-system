<?php
session_start();

$servername = "localhost";
$username = "root";
$password = ""; // Set your MySQL root password
$dbname = "chamara"; // Use your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
