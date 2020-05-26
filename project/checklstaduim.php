<?php
$servername = "localhost";
$reserve_id = "root";
$reserve_start = "";
$reserve_end = "";
$dbname = "tbl_staduim_reserve";

// Create connection
$conn = mysqli_connect($servername, $reserve_id, $reserve_start, $reserve_end, $dbname);
mysqli_set_charset($conn, "utf8");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
     
    <br>
    <br>
    <br>
    <div style="width:800px;margin:auto;">
 <?php
// ตัวอย่างชุดข้อมูล
//    2015-04-01 08:15:00   2015-04-01 10:15:00
//    2015-04-01 14:02:04   2015-04-01 15:02:13
 
$chk_startDateTime="2015-04-01 15:02:00";  // ค่าวันที่ เวลาเริ่ม ที่ต้องการเช็ค
$chk_endDateTime="2015-04-01 17:14:00";     // ค่าวันที่ เวลาสิ้นสุด ที่ต้องการเช็ค
$nowday=substr($chk_startDateTime,0,10);  // ดึงค่าเก็บวันที่ปัจจุบันไว้ใช้งาน
 
// ตรวจสอบว่าวันนี้มีรายการจองทั้งหมดกี่รายการ 
$numInDay=@mysql_result(@mysql_query("
SELECT COUNT(reserve_id) FROM tbl_room_reserve 
WHERE reserve_start LIKE '".$nowday."%'
"),0,0);
 
// ชุดคำสั่ง sql ตรวจสอบ รายการจอง ที่ไม่ทับซ้อนกับเวลาที่ตรวจสอบ
$q="
SELECT * FROM tbl_room_reserve WHERE 1 
AND (
        (
            reserve_start>'".$chk_startDateTime."'
            AND reserve_start>'".$chk_endDateTime."'
            AND reserve_end>'".$chk_startDateTime."'
        ) 
            OR  
        (
            reserve_end<'".$chk_startDateTime."'
            AND reserve_end<'".$chk_endDateTime."'      
            AND reserve_start<'".$chk_endDateTime."'   
        )
    )   
";
$qr=mysql_query($q);
// จำนวนรายการจองที่ไม่ทับซ้อนกับเวลาที่ตรวจอบ
$numMatch=mysql_num_rows($qr);
 
// ถ้าจำนวนรายการจองที่ไม่ทับซ้อนกับเวลาที่ตรวจสอบ เท่ากับรายการจองทั้งหมด
// ซึ่งหมายถึง ช่วงเวลาที่ตรวจสอบ ว่าง
if($numMatch==$numInDay){
    echo "ว่าง";   
}else{
    echo "ไม่ว่าง เลือกช่วงเวลาใหม่";   
}
 
 
?>
         
    </div>
     
</body>
</html>