<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Table Division</title>
    </head>  

    <body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "material_qrcode_db";

    $conn = mysqli_connect($servername, $username, $password, $dbname);


    if ($conn->connect_error){
        die("connection failed : ".$con->connect_error);
    }
    $conn->set_charset("utf8");
    ?>
    <h1>ตารางหน่วยงาน</h1>

    <form method="get" id="form" enctype="multipart/form-data" action="" >
        <strong>ค้นหาข้อมูล</strong>
        <input type="text" name="search" size="30" value="">
        <input type="submit" value="ค้นหา">
    </form>
    <br>

    <table border="1" >

    <tr>
        
        <td>รหัสหน่วยงาน</td>
        <td>ชื่อหน่วยงาน</td>
        <td>แก้ไขข้อมูล</td>
        
        
    </tr>
    <?php

    $search=isset($_GET['search']) ? $_GET['search']:'';

    $sql="SELECT * FROM mqrcode_division WHERE division_id '%$search%'" ;
    $result =$conn->query($sql);?>
 
            <tr>
                <td><?php echo $row["division_id"];?></td>
                <td><?php echo $row["division_name"];?></td>
                <td><a href="division_add.php?ed=<?php echo $row["division_id"];?>">แก้ไข</a></td>
                
            </tr>
        
   </table>
    <a href="division_add.php">กลับหน้าเพิ่มข้อมูลหน่วยงาน</a><br>
   
    
</body>
</html>
