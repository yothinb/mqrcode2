<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Table Material</title>
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
    <h1>ตารางแสดงครุภัณฑ์</h1>
    <table border="1" >
    <tr>
        
        <td>รหัสครุภัณฑ์</td>
        <td>ชื่อครุภัณฑ์</td>
        <td>วันที่ได้มา</td>
        <td>รายละเอียด</td>
        <td>หมายเลขซีเรียล</td>
        <td>ราคา</td>
        <td>สถานที่ตั้ง</td>
        <td>ชื่อผู้ใช้งาน</td>
        <td>แก้ไขข้อมูล</td>
    </tr>
    <?php

    $sql="SELECT * FROM mqrcode_material";
    $result =$conn->query($sql);

    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){ ?>
            
            <tr>
                <td><?php echo $row["material_id"];?></td>
                <td><?php echo $row["material_name"];?></td>
                <td><?php echo $row["material_in"];?></td>
                <td><?php echo $row["material_details"];?></td>
                <td><?php echo $row["material_sn"];?></td>
                <td><?php echo $row["material_price"];?></td>
                <td><?php echo $row["material_location"];?></td>
                <td><?php echo $row["user_id"];?></td>
                <td><a href="material_add.php?id=<?php echo $row["material_id"];?>">edit</a></td>
            </tr>
            <?php
        }
        }
        else{
        echo "ไม่มีข้อมูล";
        }

    $conn->close();
   ?> 
   </table>
    <a href="material_add.php">กลับหน้าเพิ่มข้อมูลครุภัณฑ์</a><br><br>
    <a href="groub_table.php" >ตารางกลุ่มผู้ใช้งานระบบ - Groub</a><br>
    <a href="division_table.php" >ตารางข้อมูลหน่วยงาน - Division</a><br>
    <a href="user_table.php" >ตารางแสดงผู้ใช้งานระบบ - User</a><br>
    <a href="material_table.php" >ตารางข้อมูลครุภัณฑ์ - Matrerial</a><br>
</body>
</html>


            