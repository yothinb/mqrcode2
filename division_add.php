<?php 
    include('dbconnect.php'); 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Add Division</title>
        <link rel="stylesheet" href="style.css">
    </head> 

    <body>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "material_qrcode_db";

    $conndb = mysqli_connect($servername, $username, $password, $dbname);
    mysqli_query($conndb, "set character set utf8");

    $ed=isset($_GET['ed']) ? $_GET['ed']:'';

    if($ed!=''){
        $sql="SELECT * FROM mqrcode_division where division_id='".$ed."'";
        $result =$conndb->query($sql);
        $row=$result->fetch_assoc();
    }
    ?>
    <div class="header">
        <h2>Add Division</h2>
    </div>
    
    <form action="division_process.php" method="post" ed="form">
        <div class="input-group">
        <label>รหัสหน่วยงาน</label>
        <input type="text" name="division_id" >
        </div>

        <div class="input-group">
        <label>ชื่อหน่วยงาน</label>
        <input type="text" name="division_name">
        </div>

        
        <div class="input-group">
        <input type="submit" class="btn" name="Submit" value="เพิ่มข้อมูลผู้ใช้งาน">
        </div>
    </form>
    <a href="groub_table.php" >ตารางกลุ่มผู้ใช้งานระบบ</a><br>
    <a href="division_table.php" >ตารางข้อมูลหน่วยงาน</a><br>
    <a href="user_table.php" >ตารางแสดงผู้ใช้งานระบบ</a><br>
    <a href="material_table.php" >ตารางข้อมูลครุภัณฑ์</a><br>
    </body>
</html> 