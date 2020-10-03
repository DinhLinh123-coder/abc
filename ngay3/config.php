<?php
$servername="localhost";
$username="root";
$password="";
$db="ngay28"; // tên bảng database

$conn= mysqli_connect($servername, $username, $password, $db);
if(!$conn)
    echo "Lỗi kết nối".mysqli_connect_error();
else
    echo "<h1 style='color: green'>Kết nối thành công</h1>";

