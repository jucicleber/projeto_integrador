<?php 

// Create connection
$conn = new mysqli('localhost:3307', 'root', 'root', 'chacara');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
