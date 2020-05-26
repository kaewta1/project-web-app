<?php
$servername = "localhost";
$emil = "root";
$password = "";
$dbname = "user";

// Create connection
$conn = mysqli_connect($servername, $emil, $password, $dbname);
mysqli_set_charset($conn, "utf8");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>