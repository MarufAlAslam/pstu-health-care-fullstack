<?php
$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "hospital";

// Create connection
$conn = new mysqli($servername, $user, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>