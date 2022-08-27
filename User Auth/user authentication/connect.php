<?php
$servername = "localhost:8889";
$username = "root";
$password = "root";
$dbname = "q";// Database name

// Include new or fourth parameter
$conn = new mysqli($servername, $username, $password, $dbname);

// Only display error message when connection fails
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
    //print("success");
}