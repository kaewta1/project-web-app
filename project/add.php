<?php
  // 1. CONNECT
  require("connect.php");  

  // $status_id = $_REQUEST['status_id'];
  $email = $_REQUEST['email'];
  $password = $_REQUEST['pass'];

  // echo "status_id: ". $status_id . "<br/>";
  // echo "status_th: ". $status_th . "<br/>";
  // echo "status_en: ". $status_en . "<br/>";

  // 2. SELECT (SQL: INSERT)
  $sql = "INSERT INTO userlogin (email, pass) VALUES ";
  $sql .= "('". $email ."','" . $password ."')";
  echo $sql;
  //$sql = "INSERT INTO status (status_id, status_th, status_en) VALUES ";
  //$sql .= "(". $status_id .",'" . $status_th ."','" . $status_en ."')";

  // echo $sql;

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
//header("Location:show_status.php");

?>