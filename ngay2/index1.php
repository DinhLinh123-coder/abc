<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("#an").click(function() {
                $("#anh").hide(2000);
            });
                $("#hien").click(function() {
                    $("#anh").show(2000);
                });
        });
    </script>
</head>
<body>
<script>
    function a() {

        var content = document.getElementById("search").value;
        document.getElementById("content").innerHTML = content;
    }</script>
<p id="nhapp"> bạn hãy nhập vào ô này</p>
<input onkeydown="a();" type="text" id="search" name="search">
<p id="content"></p>
<img id="anh" src="anh.jpg" style="width: 300px" >
<button id="an">Ẩn</button>
<button id="hien">Hiện</button>
<button id="nhap">Nhập</button>
</body>
</html>
