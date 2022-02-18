<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "material_qrcode_db";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection faile" . mysqli_connect_error());
    } 
    else {
        echo "Connected successfully";

    }



?>