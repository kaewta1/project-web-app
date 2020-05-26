<?php
  session_start();
  $name = $_REQUEST['name'];
  $location = $_REQUEST['location'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>stadium</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="homepang.css">
  <link rel="stylesheet" href="stadium.css">
<style>
.mySlides {display:none;}
</style>

</head>

<body>
  
<div class="header">
  <h1></h1>
  <img src="logo-leisure.png" alt=" " width="300" height="58.72">
</div>

<div class="topnav">
  <a href="homepang.php">หน้าหลัก</a>
  <a href="stadium.php">สนามกีฬาที่ให้บริการ</a>
  <a class="active" href="basketball.php"><?php echo $name; ?></a>
  <form action = "logout.php">
  <button type="submit" class="button">Logout</button>
</form>
  
</div>
<h2 class="w3-center"></h2>

<div class="content section" style="max-width:500px">
  <img class="mySlides" src="<?php echo 'im/'.$location; ?>" style="width:250%" aria-flowto="1.25px">
</div>
<script>
  var myIndex = 0;
  carousel();
  
  function carousel() {

    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
  }
  </script>
  
        

</form>
</body>
</html>