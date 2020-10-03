<?php
require ("config.php");
if(isset($_POST["btn"])){
    if($_POST["us"]=="admin" && $_POST["pa"]=="123456"){
        echo "Chào mừng bạn đến với index1";
    }
    else {
        //echo "sai Tên or MK";
        echo "<script>alert('sai Tên or MK')</script>";
    }

}



?>



<form action="index2.php" method="post">
    Nhập tên:
    <input type="text" name="us">
    Nhập MK:
    <input type="password" name="pa">
    <input type="submit" value="Gửi" name="btn">

</form>
<form action="index2.php" method="post">

</form>
