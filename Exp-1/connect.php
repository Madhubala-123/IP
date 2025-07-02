<?php
$host = "localhost";
$user = "root";       // Change to your DB username
$password = "";       // Change to your DB password
$database = "library"; // Database name

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
  die("Database Connection Failed: " . $conn->connect_error);
}
?>
