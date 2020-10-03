<!-- khai báo phiên bản html -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cổng thông tin ĐH Mỏ-Địa Chất</title>
    <link rel="stylesheet" href="image/logo.jpg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style>
    .col-5 a {
        text-decoration: none; /* bỏ gạch chân*/
        color: blue;
        font-weight: bold;

    }

    .row-menu ul {
        list-style-type: none; /* xóa các dấu đầu dòng */
        background:#003366 ;
        text-align: center;

    }
    .row-menu ul li {
        color: #f1f1f1;
        display: inline-table;
        width: 200px;
        height: 50px;
       line-height: 50px;
        position: relative;

    }

    .row-menu ul li a{
        text-decoration: none; /* bỏ gạch chân*/
        color: white;
        display: block;
    }

    .row-menu ul li a:hover{
        background: white;
        color: #003366;
        z-index: 1;
    }


    .row-menu ul li > .sub-menu {
        display:none; /*ẩn menu con*/
        position: absolute;
    }
    .row-menu ul li:hover .sub-menu {
        display:block; /*khi di chuột vào menu con hiện ra*/
    }

    .lk{
        width: 100%;
        border: 1px solid #CCCCCC;
    }
    p {
        font-family: "Times New Roman";
        text-align: justify; /* căn chữ đều 2 đầu */
    }
    p:hover{
        text-decoration: none;
    }
    .ul_thongbao li {
        color: #0066CC;
        padding-bottom: 20px;
    }
    .ul_thongbao li a {
        color: black;
    }

    .thongbao1 a:hover {
       text-decoration: none;
    }
    .tuyensinh h1{
        color: #024da1;
        font-size: 15px;
        font-family: 'Times New Roman';
        font-weight: bold;margin: 20px;
        border-bottom: 2px solid #0f75bc;
        padding-bottom: 10px;

    }
    .tuyensinh{
        list-style-type: none;
    }
    .tuyensinh li{
        display: inline-table;
    }
    .tuyensinh h1:visited{
        font-size: 20px;
    }
    .tuyensinhcon img {
        width: 100%;
        height: 150px;

    }
    .tuyensinhcon li {
      float: left;
        padding: 10px;
    }


    </style>

</head>
<body>
<div class="container" >
    <!-- banner-->
    <div class="row">
        <div class="col-7" >
            <a href="http://humg.edu.vn" target="_blank"><img src="image/banner_left.png" style="width: 100%"></a>
        </div>

        <div class="col-5" >
            <a href="#" style="float: left;"> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-badge-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-.245z">
                </svg><span style="font-size: 13px; margin-left: 3px; margin-right: 10px;"> Đăng Nhập </span></a>

            <!-- Khung tìm kiếm -->
            <form class="form-group" action="index1.php" method="get" style="float: left;">
                <input placeholder="Tìm kiếm..." class="form-control" style="width: 150px; height: 30px; font-size: 12px;" type="text" name="search"/>
            </form>
            <!--chuyển đổi ngôn ngữ-->
            <a href="#" style="margin-left: 10px;"><img src="image/en-EN.png"></a>

        </div>

    </div>
    <!-- menu-->

    <section class="row-menu" >
        <nav>
        <ul>
            <li ><a  href="#">GIỚI THIỆU</a>
               <ul class="sub-menu">
                    <li><a href="#" >Thư ngỏ</a> </li>
                    <li><a href="#" >Thư ngỏ</a> </li>
                    <li><a href="#" >Thư ngỏ</a> </li>
            </ul>
            </li>

            <li ><a href="#">TUYỂN SINH</a> </li>
            <li ><a href="#">TIN TỨC</a> </li>
            <li ><a href="#">ĐÀO TẠO</a> </li>
            <li ><a href="#">KHOA HỌC CÔNG NGHỆ</a> </li>
        </ul>
        </nav>

    </section>
    <!--slide ảnh-->
    <div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image/banner%20triet%20ly%20gd.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="image/banner%20web%20fix.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="image/bannersssd.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="image/banner%20hoc%20ba%20web%20ts.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!--các liên kết ngoài-->
    <div class="row" style="margin-top: 20px;">
        <div class="col-2">
            <img class="lk" src="image/tapchi.png">
        </div>
        <div class="col-2">
            <img class="lk" src="image/Thudientu_v4.png">
        </div>
        <div class="col-2">
            <img class="lk" src="image/TTngoaingutinhoc-v4.png">
        </div>
        <div class="col-2">
            <img class="lk" src="image/TTthongtinthuvien-v4.png">
        </div>
        <div class="col-2">
            <img class="lk" src="image/TTthongtinthuvien-v4.png">
        </div>
        <div class="col-2">
            <img class="lk" src="image/TTthongtinthuvien-v4.png">
        </div>
    </div>
    <hr style="border: 5px solid #CCCCCC"/>
    <!-- tin tức -->
    <div  class="row">
        <h1 style="font-size: 24px;font-family: 'Times New Roman';font-weight: bold; color: #0066CC ; " >TIN TỨC</h1>
        <div class="row">
            <div class="col-3">
                <a href="#">
                    <img style="width: 100%" src="image/t1.jpg">
                    <p>Bế mạc Khảo sát chính thức đánh giá ngoài 04 CTĐT Kỹ thuật Mỏ, Kỹ thuật Tuyển khoáng, Kỹ thuật Trắc địa – Bản đồ, Kỹ thuật Dầu khí</p>
                </a>
            </div>
            <div class="col-3">
                <a href="#">
                <img style="width: 100%" src="image/t2.png">
                    <p>Bế mạc Khảo sát chính thức đánh giá ngoài 04 CTĐT Kỹ thuật Mỏ, Kỹ thuật Tuyển khoáng, Kỹ thuật Trắc địa – Bản đồ, Kỹ thuật Dầu khí</p>
                </a>
            </div>
            <div class="col-3">
                <a href="#">
                <img style="width: 100%" src="image/t3.jpg">
                    <p>Bế mạc Khảo sát chính thức đánh giá ngoài 04 CTĐT Kỹ thuật Mỏ, Kỹ thuật Tuyển khoáng, Kỹ thuật Trắc địa – Bản đồ, Kỹ thuật Dầu khí</p>
                </a>
            </div>
            <div class="col-3">
                <a href="#">
                <img style="width: 100%" src="image/t4.jpg">
                    <p>Bế mạc Khảo sát chính thức đánh giá ngoài 04 CTĐT Kỹ thuật Mỏ, Kỹ thuật Tuyển khoáng, Kỹ thuật Trắc địa – Bản đồ, Kỹ thuật Dầu khí</p>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-9">
            <marquee>
              <a href="#"><img src="image/Thudientu_v4.png"></a>
              <a href="#"><img src="image/Thudientu_v4.png"></a>
              <a href="#"><img src="image/Thudientu_v4.png"></a>
              <a href="#"><img src="image/Thudientu_v4.png"></a>
            </marquee>
        </div>
        <div class="col-3" style="border: 1px solid #CCCCCC">
           <p style="text-align: center;">LIÊN KẾT WEBSITE</p>

            <select name="lienket" style="width: 100%; margin-bottom: 10px;">
                <option><a href="#"> Trung tâm ngoại ngữ tin học </a></option>
                <option><a href="#">Trung tâm thông tin thư viện</a> </option>
                <option><a href="#">bộ tài nguyên môi trường</a> </option>
                <option><a href="#">Tập đoàn than khoáng sản Việt Nam</a> </option>
                <option><a href="#">Bộ giáo dục và đào tạo</a> </option>
            </select>
            
        </div>
    </div>

    <!-- Thông báo -->
    <div class="row" style="margin-top: 30px; background: #EEEEEE;">
        <h1 style="margin: 20px; font-size: 20px; font-family: 'Times New Roman'; font-weight: bold; color: #0066CC; border-bottom: 2px solid #0066CC; padding-bottom: 10px; ">THÔNG BÁO</h1>
    </div>

    <div class="row thongbao1" style="background: #EEEEEE;">

        <div class="col-4">
            <a href="#" style="color: black;">
                <img style="width: 100%" src="http://adprog.humg.edu.vn/content/tintuc/PublishingImages/thongbao2.png?RenditionID=7"/>
            <p style="text-decoration: none; padding-top: 10px">Bế mạc Khảo sát chính thức đánh giá ngoài 04 CTĐT Kỹ thuật Mỏ, Kỹ thuật Tuyển khoáng, Kỹ thuật Trắc địa – Bản đồ, Kỹ thuật Dầu khí</p>
            </a>
        </div>
        <div class="col-4 ">
            <ul class="ul_thongbao">
                <li><a  href="#">Thông báo về cuộc thi Vô địch Tin học Văn phòng Thế giới – Viettel năm 2020</a></li>
                <li><a href="#">Thông báo về cuộc thi Vô địch Tin học Văn phòng Thế giới – Viettel năm 2020</a></li>
                <li><a href="#">Thông báo về cuộc thi Vô địch Tin học Văn phòng Thế giới – Viettel năm 2020</a></li>
                <li><a href="#">Thông báo về cuộc thi Vô địch Tin học Văn phòng Thế giới – Viettel năm 2020</a></li>
                <li><a href="#">Thông báo về cuộc thi Vô địch Tin học Văn phòng Thế giới – Viettel năm 2020</a></li>
            </ul>
            <a href="#" style="float:right;color: #919191">Xem thêm >></a>

        </div>
        <div class="col-4">
            <p style="color: #0c4ca3; font-size: 18px">SỰ KIỆN SẮP DIỄN RA</p>
            <div class="row">
                <div class="col-4" style="border: 2px solid red;">
                    <div class="row ">
                        <p style="font-size: 30px; text-align: center; color: #B40404; font-weight: bold">24/09</p>
                    </div>
                    <div class="row">
                        <span style="font-size: 20px; text-align: center; font-weight: 400; color: #848484; float: left">2020</span>
                    </div>
                </div>
                <div class="col-8">
                    <p style="text-align: justify">Khảo sát chính thức Đánh giá ngoài 03 Chương trình đào tạo (24 - 28/9/2020)</p>
                </div>

            </div>
            <a href="#" style="float:right; color: #919191">Xem thêm >></a>
        </div>
    </div>
    <!-- Thông tin tuyển sinh -->
    <div class="row" style="margin-top: 30px">
        <ul class="tuyensinh">
            <li><h1 >THÔNG TIN TUYỂN SINH</h1></li>
            <div class="col-3">
            <ul class="tuyensinhcon">
                <li><a href="#"><img src="http://adprog.humg.edu.vn/content/tintuc/PublishingImages/postercttt_2020.jpg" </a>
                    <p>Chương trình tiên tiến tuyển sinh Khóa 11, ngành Kỹ thuật hóa học (đào tạo bằng tiếng Anh)</p>
                </li>
                <li><a href="#"><img src="http://adprog.humg.edu.vn/content/tintuc/PublishingImages/postercttt_2020.jpg" </a>
                    <p>Chương trình tiên tiến tuyển sinh Khóa 11, ngành Kỹ thuật hóa học (đào tạo bằng tiếng Anh)</p>
                </li>
                <li><a href="#"><img src="http://adprog.humg.edu.vn/content/tintuc/PublishingImages/postercttt_2020.jpg" </a>
                    <p>Chương trình tiên tiến tuyển sinh Khóa 11, ngành Kỹ thuật hóa học (đào tạo bằng tiếng Anh)</p>
                </li>
                <li><a href="#"><img src="http://adprog.humg.edu.vn/content/tintuc/PublishingImages/postercttt_2020.jpg" </a>
                    <p>Chương trình tiên tiến tuyển sinh Khóa 11, ngành Kỹ thuật hóa học (đào tạo bằng tiếng Anh)</p>
                </li>
            </ul>
            </div>
            <li><h1>NGÀNH TUYỂN SINH</h1></li>
        </ul>
    </div>

    <!-- footer-->
    <div></div>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</body>
</html>