<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Table User</title>
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
    <h1>ตารางแสดงผู้ใช้งานระบบ</h1>
    <table border="5" >
    <tr>
        
        <td>รหัสกลุ่มผู้ใช้งาน</td>
        <td>ไอดีของผู้ใช้งาน</td>
        <td>รหัสผ่าน</td>
        <td>ชื่อผู้ใช้งาน</td>
        <td>นามสกุล</td>
        <td>เบอร์ติดต่อภายใน</td>
        <td>อีเมล์</td>
        <td>รหัสกลุ่มผู้ใช้งาน</td>
        <td>รหัสหน่วยงาน</td>
    </tr>
    <?php

    $sql="SELECT * FROM mqrcode_user";
    $result =$conn->query($sql);

    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){ ?>
            
            <tr>
                <td><?php echo $row["user_id"];?></td>
                <td><?php echo $row["user_username"];?></td>
                <td><?php echo $row["user_password"];?></td>
                <td><?php echo $row["user_firstname"];?></td>
                <td><?php echo $row["user_lastname"];?></td>
                <td><?php echo $row["user_voip"];?></td>
                <td><?php echo $row["user_email"];?></td>
                <td><?php echo $row["group_id"];?></td>
                <td><?php echo $row["user_voip"];?></td>
            </tr>
            <?php
        }
        }
        else{
        echo "0 row";
        }

             $conn->close();
            ?> 
   </table>
    <a href="user_add.php">กลับหน้าเพิ่มข้อมูล</a><br><br>
    <a href="groub_table.php" >ตารางกลุ่มผู้ใช้งานระบบ - Groub</a><br>
    <a href="division_table.php" >ตารางข้อมูลหน่วยงาน - Division</a><br>
    <a href="user_table.php" >ตารางแสดงผู้ใช้งานระบบ - User</a><br>
    <a href="material_table.php" >ตารางข้อมูลครุภัณฑ์ - Matrerial</a><br>
</body>
</html>


            