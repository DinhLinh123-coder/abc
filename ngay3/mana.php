<?php
require ("config.php");
if(isset($_POST["submit"])){
    $name=$_POST["namebook"];
    $intro=$_POST["introbook"];
    $sql="insert into books (name_books, introbook) values (N'$name', $intro)";
    if(mysqli_query($conn,$sql)){
        echo "Thêm mới bản ghi thành công";
    } else
        echo "Thất bại".mysqli_error($conn);
}
?>

<form action="mana.php" method="post">
    Tên sách:
    <input type="text" name="namebook">
    mô tả:
    <input type="text" name="introbook">
    <input type="text" name="imagebook">
    <input type="submit" name="submit" value="Sửa">
</form>