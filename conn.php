<?php
$host = "localhost"; // Change if needed
$user = "root"; // Your MySQL username
$pass = ""; // Your MySQL password
$db = "MetroMedClinic"; // Your database name
$port = 3307;

$conn = new mysqli($host, $user, $pass, $db, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
