<?php
function connect_db() {
 $servername = "localhost";
 $username = "patrik";
 $password = "password";
 $dbname = "patrik";
 // Create connection
GIT Exercises 4 (13)
29.12.2018
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 } else {
 }
 return $conn;
}
?>

