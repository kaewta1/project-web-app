<?php
    require('connect.php');
    $sql = "SELECT * FROM url ";
    $result = mysqli_query($conn, $sql);
?>
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
    <script>
    function confirmDelete(){
        return confirm("Are you sure to Delete?");
        }
    </script>
</head>

<body>

    <div class="header">
        <img src="logo-leisure.png" alt=" " width="150" height="30">
    </div>

    <div class="topnav">
        <a href="add_stadium.php">เพิ่ม</a>
        <a href="update_stadium.php">ลบและแก้ไข</a>
        <a class="active" href="admin.php">admin</a>
        <form action="logout.php">
            <button type="submit" class="button">Logout</button>
        </form>
    </div>

    <table border="1">
        <tr>
            <th>ชื่อสนาม</th>
            <th>จำนวน</th>
            <th>รูปภาพ</th>
            <th>สถานะ</th>
            <th colspan="3">ลบและแก้ไข</th>
        </tr>
    <?php
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo '<form action="check_update.php" method="">' ;
                echo '<tr>' ;
                echo    '<td> <input type="text" name="name" id="name" value="'.$row['name'].'"> </td>' ;
                echo    '<td> <input type="text" name="number" id="number" value="'.$row['number'].'"> </td>' ;
                echo    '<td> <input type="file" id="img" name="img" value="'.$row['location'].'"> </td>' ;
                echo    '<td> <select id="state" name="state" >';
                if($row['state']=='0'){echo '<option value="0">ว่าง</option>' ;
                    echo '<option value="1">ไม่ว่าง</option>' ;}
                else if($row['state']=='1'){echo '<option value="1">ไม่ว่าง</option>' ;
                    echo '<option value="0">ว่าง</option>' ;}
                echo    '</select> </td>' ;
                echo    '<td> <input type="hidden" name="id" id="id" value="'.$row['id_name'].'"> </td>' ;
                echo '<td> <input type="submit" name="send" id="send" value="edit"> </td>' ;
                echo '<td> <input type="submit" name="send" id="send" value="delete" onclick="confirmDelete()"> </td>' ;
                echo '</tr>' ;
                echo '</form>' ;
            }
        } else {
            echo "0 results";
        }
    ?>
    </boby>
    </table>

</html>