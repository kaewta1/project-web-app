<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="login.css">

</head>

<body>

  <form action="checkloginadmin.php" method="post">
    <div class="imgcontainer">

    </div>

    <div class="container">
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="pass"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pass" required>
      <form><button onclick="myfunctio()" class="button">Login</button></form>
      
      
    </div>


  </form>

</body>

</html>