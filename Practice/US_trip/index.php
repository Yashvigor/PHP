<?php
$servername = "localhost";
$username   = "root";   // default XAMPP user
$password   = "";       // default password is empty
$database   = "us_trip";  // ✅ use 'us_trip' instead of 'trip'

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
