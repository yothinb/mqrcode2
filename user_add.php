<?php 
    include('dbconnect.php'); 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Add User</title>
        <link rel="stylesheet" href="style.css">
    </head> 

    <body>
    <div class="header">
    <h1>เพิ่มข้อมูลผู้ใช้งาน</h1>
    </div>

    <form action="user_process.php" method="post">
        <div class="input-group">
        <label>UserID</label>
        <input type="text" name="user_id">
        </div>

        <div class="input-group">
        <label>Username</label>
        <input type="text" name="user_username">
        </div>

        <div class="input-group">
        <label>Password</label>
        <input type="password" name="user_password">
        </div>

        <div class="input-group">
        <label>Firstname</label>
        <input type="text" name="user_firstname">
        </div>

        <div class="input-group">
        <label>Lastname</label>
        <input type="text" name="user_lastname">
        </div>

        <div class="input-group">
        <label>VOIP</label>
        <input type="text" name="user_voip">
        </div>

        <div class="input-group">
        <label>Email</label>
        <input type="text" name="user_email">
        </div>

        <div class="input-group">
        <label>Level User</label>
        <select type="text" name="user_level">
            <option value="admin">Admin</option>
            <option value="member">Member</option>
        </select>
        </div>

        <div class="input-group">
        <label>Group ID</label>
        <select type="text" name="group_id">
            <option value="10">10 - ผู้ดูแลระบบ</option>
            <option value="11">11 - ผู้บริหาร</option>
            <option value="12">12 - เจ้าพนักงานพัสดุ</option>
            <option value="13">13 - เจ้าหน้าที่</option>
        </select>
        </div>

        <div class="input-group">
        <label>Division ID</label>
        <select type="text" name="division_id">
            <option value="900">0900 - กรมสารนิเทศ</option>
            <option value="901">0901 - สำนักงานเลขานุการ กรมสารนิเทศ</option>
            <option value="902">0902 - กองการทูตวัฒนธรรม</option>
            <option value="903">0903 - กองการสื่อมวลชน</option>
            <option value="904">0904 - กองประชาสัมพันธ์การทูตสาธารณะ</option>
            <option value="905">0905 - กองประมวลและวิเคราะห์ข่าว</option>
        </select><br>
        </div>

        <input type="submit" name="Submit" class="btn" value="เพิ่มข้อมูลผู้ใช้งาน">
    
    </form>
    <a href="groub_table.php" >ตารางกลุ่มผู้ใช้งานระบบ - Groub</a><br>
    <a href="division_table.php" >ตารางข้อมูลหน่วยงาน - Division</a><br>
    <a href="user_table.php" >ตารางแสดงผู้ใช้งานระบบ - User</a><br>
    <a href="material_table.php" >ตารางข้อมูลครุภัณฑ์ - Matrerial</a><br>
    </body>
</html> 