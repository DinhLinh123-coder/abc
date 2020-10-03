<?php
$ten="Linh";
$so=10;
echo "<h1 style='color: red;'>xin chao!</h1> toi ten la ".$ten.$so." tuổi";
if(isset($_GET["btn"]))
{
    $user=$_GET["us"];
    echo "<h1 style='color: green'>".$user."</h1>";
    echo "<h1 style='color: blue'>$user</h1>";
    $pass=$_GET["pa"];
    echo "<h1 style='color: green'>".$pass."</h1>";
}

?>
<form action="index1.php" method="get" >
    Nhập vào tên đăng nhập:
    <input type="text" name="us">
    Nhập vào Mật khẩu:
    <input type="password" name="pa">
    <input type="submit" value="gửi dữ liệu" name="btn">


</form>
