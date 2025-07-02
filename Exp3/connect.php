<?php
$host = "localhost";
$user = "root";       // Your MySQL username
$password = "";       // Your MySQL password
$database = "bus_booking"; // Database name

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
  die("Database Connection Failed: " . $conn->connect_error);
}
?>
