<?php
/*$db = mysqli_connect("localhost", "root", "", "webproject") or die("Connection failed: " . mysqli_connect_error());*/

$servername = "localhost";
$username = "root";
$password = "";


// Create connection
$conn = new mysqli($servername, $username, $password, "webproject");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " .$conn->connect_error);
} 
  echo "Connected successfully to database: " ;
?>
