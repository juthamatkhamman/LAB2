<?php
$servername = "localhost";
$username = "cpe0696";
$password = "Ham882545";
$db_name = "cpe0696";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>