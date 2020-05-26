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

  <style>
    input[type=text],
    select {
      width: 20%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type=submit] {
      width: 5%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>

</head>

<body>
  <div class="header">
    <h1></h1>
    <img src="logo-leisure.png" alt=" " width="150" height="30">
  </div>

  <div class="topnav">
    <a href="add_stadium.php">เพิ่ม</a>
    <a href="update_stadium.php">ลบและแก้ไข</a>
    <a class="active" href="admin.php">admin</a>
    <form action="logout.php" name="Logout" id="Logout">
      <button type="submit" class="button">Logout</button>
    </form>
  </div>

  <form action="add_s.php" method="" id="add" name="add">
    <div class="container">
      <label><b>ชื่อสนาม</b></label>
      <input type="text" placeholder="" id="name" name="name" required>

      <label><b>จำนวน</b></label>
      <input type="number" placeholder="" id="number" name="number" required>

      <label><b>ที่อยู่รูป</b></label>
      <input type="file" placeholder="" id="location" name="location" required>

      <input type="submit" value="เพิ่ม">
    </div>
  </form>
</body>

</html>