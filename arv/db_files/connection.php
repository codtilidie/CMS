<?php
// connecting to the mariadb server
$server_name = "localhost";
$username = "root";
$password = "";
$db_name = "CMS";

// Create connection
$conn = new mysqli($server_name, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>