<?php
require ("../config.php");
if(isset($_POST["insert"])){
    $name=$_POST["namebook"];
    $intro=$_POST["introbook"];
    $image=$_POST["imagebook"]
    $sql="insert into books (book_name, book_intro, book_image) values (N'$name, $intro, $image')";
    if(mysqli_query($conn,$sql)){
        echo "Thêm mới bản ghi thành công";
    } else
        echo "Thất bại".mysqli_error($conn);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<body>
<div class="container">
    <h1 style="text-align: center">Trang quản trị danh mục</h1>
<!---thêm mới dữ liệu-->
    <div class="row">
        <form action="mana_danhmuc.php"method="post" >
            Nhập vào tên danh mục:
            <input type="text" name="tendm">
            <input type="submit" name="insert" value="Thêm mới">


        </form>
    </div>
    <div class="row">
        <table class="table">
            <tr>
                <th>Mã danh mục</th>
                <th>Tên danh mục</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
            <!---hiển thị thông tin trong bảng dữ liệu -->
            <?php
            //khởi tạo biến truy vấn bảng dữ liệu danh mục
            $sql_select="select * from books";

            $ketqua=mysqli_query($conn, $sql_select);

            if(mysqli_num_rows($ketqua)>0){
                while($row=mysqli_fetch_assoc($ketqua)){
                    echo "<tr>";
                    echo "<td>".$row["book_name"]."</td>";
                    echo "<td>".$row["book_intro"]."</td>";
                    echo "<td>".$row["book_image"]."</td>";
                    echo "<td> ";
                    echo "<a href='#' class='btn btn-warning'>Cập nhật</a>";
                    echo "<a href='#' class='btn btn-danger'>Xóa</a>";
                    echo "</tr>";

                }
            }
            ?>
            <tr>
                <td>1</td>
                <td>Tin tức</td>
                <td>1</td>
                <td>
                    <a href='#' class='btn btn-warning'>Cập nhật</a>
                    <a href='#' class='btn btn-danger'>Xóa</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Thông báo</td>
                <td>1</td>
                <td>
                    <a href='#' class='btn btn-warning'>Cập nhật</a>
                    <a href='#' class='btn btn-danger'>Xóa</a>
                </td>
            </tr>
        </table>
    </div>
</div>
</body>
</html>
