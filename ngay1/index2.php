<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        * {
            margin:0px;
            padding:0px;
        }
        .clearfix:after {
            display:block;
            clear:both;
        }
        .wrapper {
            width:100%;
            box-shadow:0px 1px 3px rgba(0,0,0,0.2);
            background:#3e3436;
        }

        /*----- Phần menu -----*/
        .menu {
            width:1000px;
            margin:0px auto;
            background:#bf5c71;
            height: 50px;
            margin-top: 150px;
        }
        .menu li {
            margin:0px;
            list-style:none;
            font-family:'Ek Mukta';
        }
        .menu a {
            transition:all linear 0.15s;
            color:#919191;
            text-decoration:none;
        }
        .menu li:hover > a, .menu .current-item > a {
            text-decoration:none;
            color:#be5b70;
        }
        .menu .arrow {
            font-size:11px;
            line-height:0%;
        }
        /*----- css cho phần menu cha -----*/
        .menu > ul > li {
            float:left;
            display:inline-block;
            position:relative;
            font-size:19px;
        }
        .menu > ul > li > a {
            padding:10px 40px;
            display:inline-block;
            color:white;
        }
        .menu > ul > li:hover > a, .menu > ul > .current-item > a {
            background:#2e2728;
        }
        /*----css cho menu con----*/
        .menu li:hover .sub-menu {
            z-index:1;
            opacity:1;
        }
        .sub-menu {
            width:160%;
            padding:5px 0px;
            position:absolute;
            top:100%;
            left:0px;
            z-index:-1;
            opacity:0;
            transition:opacity linear 0.15s;
            box-shadow:0px 2px 3px rgba(0,0,0,0.2);
            background:#2e2728;
        }
        .sub-menu li {
            display:block;
            font-size:16px;
        }
        .sub-menu li a {
            padding:10px 30px;
            display:block;
        }
        .sub-menu li a:hover, .sub-menu .current-item a {
            background:#3e3436;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <nav class="menu">
        <ul class="clearfix">
            <li><a href="#">Trang chủ</a></li>
            <li>
                <a href="#">Ẩm thực <span class="arrow">&#9660;</span></a>

                <ul class="sub-menu">
                    <li><a href="#">Món ăn miền Bắc</a></li>
                    <li><a href="#">Món ăn miền Trung</a></li>
                    <li><a href="#">Món ăn miền Nam</a></li>
                    <li><a href="#">Ẩm thực đường phố</a></li>
                </ul>
            </li>
            <li><a href="#">Du lịch</a></li>
            <li ><a href="#">Ảnh</a></li>
            <li><a href="#">Liên hệ</a></li>
        </ul>
    </nav>
</div>
</body>
</html>