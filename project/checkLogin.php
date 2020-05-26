<?php
// Start SESSION
session_start();
$_SESSION['email'] = "";
// 1. Connect
require("connect.php");

//checkLogin.php

$email = $_REQUEST['email'];
$pass = $_REQUEST['pass'];
//echo $user . ", " . $pass;

// 2. SELECT SQL
$sql = "SELECT * FROM userlogin WHERE EMAIL='$email' AND PASS='$pass'";



// 3. Execute SQL
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 1) { // Login OK

    $row = mysqli_fetch_assoc($result);

    $_SESSION['email'] = $row['email'];
   


    header("Location:stadium.php");
}
else {
    header("Location:login.php");
}


?>