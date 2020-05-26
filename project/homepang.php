<!DOCTYPE html>
<html lang="en">

<head>
  <title>homepange</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <title>Calendar</title>
  <meta name="description" content="Calendar">
  <meta name="author" content="Charles Anderson">
  <link rel="stylesheet" href="homepang.css">


  <head>


  <body>

    <div class="header">
      <h1></h1>
      <img src="logo-leisure.png" alt=" " width="300" height="58.72">
    </div>

    <div class="topnav">
      <a href="homepang.php">หน้าหลัก</a>
      <a href="sessoin.php">สนามกีฬาที่ให้บริการ</a>
      <button onclick="myfunctio()" class="button">Admin</button>
      <button onclick="myfunction()" class="button">Login</button>
    </div>
    <script>
      function myfunction() {
        window.open("login.php")
      }
    </script>

    </div>
    <script>
      function myfunctio() {
        window.open("loginadmin.php")
      }
    </script>
    <h2 class="w3-center"></h2>

    <div class="content section" style="max-width:500px">
      <img class="mySlides" src="tan.jpg" style="width:250%" height="150%" aria-flowto="1.25px">
      <img class="mySlides" src="ball.jpg" style="width:250%" height="150%" aria-flowto="1.25px">
      <img class="mySlides" src="tan.jpg" style="width:250%" height="150%" aria-flowto="1.25px">
      <img class="mySlides" src="bas2.jpg" style="width:250%" height="150%" aria-flowto="1.25px">
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
        if (myIndex > x.length) {
          myIndex = 1
        }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
      }
    </script>


  </body>

</html>