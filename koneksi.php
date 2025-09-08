<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wr_pepak";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>