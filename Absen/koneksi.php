<?php
    $namahost = "127.0.0.1";
    $user = "root";
    $password = "";
    $database = "absensi_kls_11";
    $conn = mysqli_connect($namahost,$user,$password,$database);
    if (!$conn){
        echo "database tidak terhubung";
    }


?>