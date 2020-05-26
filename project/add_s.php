<?php
  // 1. CONNECT
  require("connect.php");  

  $name = $_REQUEST['name'];
  $number = $_REQUEST['number'];
  $location = $_REQUEST['location'];
  
  // echo $location ;

  // 2. SELECT (SQL: INSERT)
  $sql = "INSERT INTO url (name, number, location ,state) VALUE ";
  $sql .= "('".$name."',".$number.",'".$location."','0')";

  // echo $sql;

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header("Location:add_stadium.php");

?>