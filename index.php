<!DOCTYPE html>
<html lang="EN">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Hệ thống Xe ABC</title>


    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/htqlxe.css">
    <link rel="stylesheet" href="assets/css/owl.css">


</head>

<body>



    <!-- Header -->
    <div class="sub-header">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <ul class="left-info">
                        <li><a href="#"><i class="fa-solid fa-envelope"></i>abc@gmail.com </a></li>
                        <li><a href="#"><i class="fa fa-phone"></i>090-080-0760</a></li>
                        <li><a href="taikhoan.php"><i class="fa-solid fa-right-to-bracket"></i>Đăng Nhập</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="right-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <h2>Hệ thống xe abc</h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#top">trang chủ
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="lichtrinh.php">Lịch Trình</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.html">Liên Hệ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Hóa Đơn</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="taikhoan.php">Đăng ký</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active banner">
                <img src="assets/images/banner.png" class="d-block w-100" alt="ảnh banner">
            </div>

        </div>
    </div>
    <div style="position: relative;">
        <img src="image.jpg" alt="">
        <div
            style="position: absolute; top: 0; left: 0; width: 100%; height: 50px; background-color: rgba(224, 110, 110, 0.603);">
            <marquee behavior="scroll" direction="left" scrollamount="10">
                <h1 class="font-weight-bold" style="color: darkgreen;">Chào mừng bạn đến với hệ thống bán vé xe ABC</h1>
            </marquee>
        </div>
    </div>


    <!-- Cái khung, bo gốc -->
    <div class="border1 m-5  shadow-lg p-5">

        <!-- Radiobox -->
        <div class="form-check form-check-inline  " style="margin-left: 100px;">
            <input class="form-check-input" type="radio" name="go-type">
            <label class="form-check-label font-weight-bold " for="motchieu">Một chiều</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="go-type">
            <label class="form-check-label font-weight-bold" for="khuhoi">Khứ hồi</label>
        </div>

        <!-- Nhớ xóa border -->
        <div class="container">
            <div class="row">
                <!-- Ô đầu -->
                <div class="col1 border m-1 p-3">
                    <div class="row">

                        <!-- Cột đầu -->
                        <div class="col m-1 p-3 text-muted text-center font-weight-bold">
                            <h5 class="card-title text-center font-weight-bold text-muted">Điểm đi</h5>

                            <div>
                                <select class="form-select1 text-muted text-center" style="border: none" id="diemdi">
                                    <option selected text-muted>Chọn điểm đi</option>
                                    <option value="1">An Giang (Châu Đốc)</option>
                                    <option value="2">An Giang (Long Xuyên)</option>
                                    <option value="3">An Nhơn</option>
                                    <option value="4">Bạc Liêu</option>
                                    <option value="5">Bảo Lộc</option>
                                    <option value="6">Bến Tre</option>
                                    <option value="7">Bình Dương</option>
                                    <option value="8">Bình Minh</option>
                                    <option value="9">Buôn Ma Thuộc</option>
                                    <option value="10">Cà Mau</option>
                                    <option value="11">Cam Ranh</option>
                                    <option value="12">Cần Thơ</option>
                                    <option value="13">Cao Lãnh</option>
                                </select>
                            </div>
                        </div>

                        <div class="col border-left m-1 p-3 text-center font-weight-bold text-muted">
                            <h5 class="card-title text-center font-weight-bold text-muted">Điểm đến</h5>
                            <div>
                                <select class="form-select2 text-muted text-center" style="border: none" id="diemden">
                                    <option>Chọn điểm đến</option>
                                    <option value="1">An Giang (Châu Đốc)</option>
                                    <option value="2">An Giang (Long Xuyên)</option>
                                    <option value="3">An Nhơn</option>
                                    <option value="4">Bạc Liêu</option>
                                    <option value="5">Bảo Lộc</option>
                                    <option value="6">Bến Tre</option>
                                    <option value="7">Bình Dương</option>
                                    <option value="8">Bình Minh</option>
                                    <option value="9">Buôn Ma Thuộc</option>
                                    <option value="10">Cà Mau</option>
                                    <option value="11">Cam Ranh</option>
                                    <option value="12">Cần Thơ</option>
                                    <option value="13">Cao Lãnh</option>
                                </select>
                            </div>
                        </div>


                    </div>
                </div>


                <div class="col1 border m-1 p-3">
                    <div class="row ">

                        <div class="col-mx-2 border-right m-1 p-3">
                            <h5 class="card-title text-center font-weight-bold text-muted bor ">Ngày đi</h5>
                            <input type="datetime-local" name="" style="width: auto;">
                        </div>


                        <div class="col border-none m-1 p-3 ">
                            <h5 class="card-title text-center font-weight-bold text-muted">Ngày về</h5>
                            <input type="datetime-local" name="" style="width: auto;">
                            <div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <button class="snip1339 " style="float: right;">Tìm chuyến xe</button>
        </div>
    </div>


    <!-- Bảng giá -->
    <div class="container">
        <h4 class="title3 font-weight-bold">TUYẾN PHỔ BIẾN</h4>
        <!-- Dòng đầu  -->
        <div class="row">
            <!-- Ô đầu  -->
            <div class="container btn col-md-6 pr-5">
                <div class="row border2 border">
                    <div>
                        <img class="img" src="assets/images/SaiGon.jpg" style="max-width: 200px;" alt="">
                    </div>
                    <div>
                        <h5 class="text22 font-weight-bold text-center ">Sài Gòn ⇒ Đà Lạt</h5>
                        <div class="text23">
                            <div data-v-15bcc412="" class="details ">
                                <span>300.000đ &emsp;&emsp;&emsp;</span>
                                <p class="fa fa-clock-o icon "></p>
                                8h &emsp;&emsp;&emsp;
                                <p class="fa fa-map-marker icon"></p>
                                310km
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Ô 2 -->
            <div class="container btn col-md-6 pl-5">
                <div class="row border2 border">
                    <div>
                        <img class="img" src="assets/images/NhaTrang.jpg" style="max-width: 200px;" alt="">
                    </div>
                    <div>
                        <h5 class="text21 font-weight-bold text-center ">Sài Gòn ⇒ Nha Trang</h5>
                        <div class="text23">
                            <div data-v-15bcc412="" class="details">
                                <span>450.000đ &emsp;&emsp;&emsp;</span>
                                <p class="fa fa-clock-o icon "></p>
                                9h &emsp;&emsp;&emsp;
                                <p class="fa fa-map-marker icon"></p>
                                275km
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dòng 2 -->
        <div class="row">
            <!-- ô 3 -->
            <div class="container btn col-md-6 pr-5">
                <div class="row border2 border">
                    <div>
                        <img class="img" src="assets/images/DaNang.jpg" style="max-width: 200px;" alt="">
                    </div>
                    <div>
                        <h5 class="text21 font-weight-bold text-center ">Sài Gòn ⇒ Đà Nẵng</h5>
                        <div class="text23">
                            <div data-v-15bcc412="" class="details ">
                                <span>395.000đ &emsp;&emsp;&emsp;</span>
                                <p class="fa fa-clock-o icon "></p>
                                20h &emsp;&emsp;&emsp;
                                <p class="fa fa-map-marker icon"></p>
                                980km
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ô 4 -->
            <div class="container btn col-md-6 pl-5">
                <div class="row border2 border">
                    <div>
                        <img class="img" src="assets/images/CanTho.jpg" style="max-width: 200px;" alt="">
                    </div>
                    <div>
                        <h5 class="text22 font-weight-bold text-center ">Sài Gòn ⇒ Cần Thơ</h5>
                        <div class="text23">
                            <div data-v-15bcc412="" class="details ">
                                <span>165.000đ &emsp;&emsp;&emsp;</span>
                                <p class="fa fa-clock-o icon "></p>
                                4h &emsp;&emsp;&emsp;
                                <p class="fa fa-map-marker icon"></p>
                                190km
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dòng 3 -->
        <div class="row">
            <!-- ô 5 -->
            <div class="container btn col-md-6 pr-5">
                <div class="row border2 border">
                    <div>
                        <img class="img" src="assets/images/HaNoi.jpg" style="max-width: 200px;" alt="">
                    </div>
                    <div>
                        <h5 class="text22 font-weight-bold text-center ">Đà Nẵng ⇒ Hà Nội</h5>
                        <div class="text23">
                            <div data-v-15bcc412="" class="details ">
                                <span>360.000đ &emsp;&emsp;&emsp;</span>
                                <p class="fa fa-clock-o icon "></p>
                                18h &emsp;&emsp;&emsp;
                                <p class="fa fa-map-marker icon"></p>
                                745km
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ô 6 -->
            <div class="container btn col-md-6 pl-5">
                <div class="row border2 border">
                    <div>
                        <img class="img" src="assets/images/RachGia.jpg" style="max-width: 200px;" alt="">
                    </div>
                    <div>
                        <h5 class="text21 font-weight-bold text-center ">Sài Gòn ⇒ Rạch Giá</h5>
                        <div class="text23">
                            <div data-v-15bcc412="" class="details ">
                                <span>190.000đ &emsp;&emsp;&emsp;</span>
                                <p class="fa fa-clock-o icon "></p>
                                5h &emsp;&emsp;&emsp;
                                <p class="fa fa-map-marker icon"></p>
                                235km
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dòng 4 -->
        <div class="row">
            <!-- ô 7 -->
            <div class="container btn col-md-6 pr-5">
                <div class="row border2 border">
                    <div>
                        <img class="img" src="assets/images/ChauDoc.jpg" style="max-width: 200px;" alt="">
                    </div>
                    <div>
                        <h5 class="text21 font-weight-bold text-center ">Sài Gòn ⇒ Châu Đốc</h5>
                        <div class="text23">
                            <div data-v-15bcc412="" class="details ">
                                <span>175.000đ &emsp;&emsp;&emsp;</span>
                                <p class="fa fa-clock-o icon "></p>
                                6h &emsp;&emsp;&emsp;
                                <p class="fa fa-map-marker icon"></p>
                                240km
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ô 8 -->
            <div class="container btn col-md-6 pl-5">
                <div class="row border2 border">
                    <div>
                        <img class="img" src="assets/images/CaMau.jpg" style="max-width: 200px;" alt="">
                    </div>
                    <div>
                        <h5 class="text22 font-weight-bold text-center ">Sài Gòn ⇒ Cà Mau</h5>
                        <div class="text23">
                            <div data-v-15bcc412="" class="details ">
                                <span>230.000đ &emsp;&emsp;&emsp;</span>
                                <p class="fa fa-clock-o icon "></p>
                                8h &emsp;&emsp;&emsp;
                                <p class="fa fa-map-marker icon"></p>
                                357km
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div>
        <h1 class="tieude font-weight-bold">ABC - CHẤT LƯỢNG LÀ DANH DỰ</h1>
    </div>


    <div class="partners">
        <h2 class="title font-weight-bold">ĐIỂM ĐẾN PHỔ BIẾN</h2>
        <h4 class="title2">Gợi ý những điểm du lịch được ưa thích trong năm</h4>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-partners owl-carousel">

                        <div class="partner-item hinh">
                            <img src="assets/images/CanTho.jpg" title="" alt="1">
                        </div>

                        <div class="partner-item hinh">
                            <img src="assets/images/CaMau.jpg" title="2" alt="2">
                        </div>

                        <div class="partner-item hinh">
                            <img src="assets/images/DaNang.jpg" title="3" alt="3">
                        </div>

                        <div class="partner-item hinh">
                            <img src="assets/images/NhaTrang.jpg" title="4" alt="4">
                        </div>

                        <div class="partner-item hinh">
                            <img src="assets/images/SaiGon.jpg" title="5" alt="5">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- footer-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 footer-item">
                    <h4>Kết nối với chúng tôi</h4>
                    <ul class="social-icons">
                        <h3 style=" color: #EE6D4A; font-size: 40px; font-weight: 700;">1900 2082</h3>
                        <li><a rel="nofollow" href="https://fb.com/templatemo" target="_blank"><i
                                    class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                    <p>
                        Địa chỉ: 102abc, Trần Quang Khải, P.Cái Khế, Q.Ninh Kiều, TP.Cần Thơ
                        <br> Email: abc@gmail.com
                    </p>
                </div>
                <div class="col-md-3 footer-item">
                    <h4>Hướng Dẫn</h4>
                    <ul class="menu-list">
                        <li><a href="#">Hướng dẫn đặt vé trên Web</a></li>
                        <li><a href="#">Hướng dẫn đặt vé trên App</a></li>
                        <li><a href="#">Hỏi Đáp</a></li>
                        <li><a href="#">Điều khoản sử dụng</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-item">
                    <h4>Đi đến trang</h4>
                    <ul class="menu-list">
                        <li><a href="#">Trang Chủ</a></li>
                        <li><a href="#">Lịch trình</a></li>
                        <li><a href="#">Liên Hệ</a></li>
                        <li><a href="#">Đăng Ký</a></li>
                        <li><a href="#">Đăng nhập</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-item">
                    <h4>Khác</h4>
                    <ul class="menu-list">
                        <li><a href="#">Trở thành nhà cung cấp</a></li>
                        <li><a href="#">Cộng tác với chúng tôi</a></li>
                        <li><a href="#">Chính sách bảo mật</a></li>
                        <li><a href="#">Điều khoản sử dụng</a></li>
                        <li><a href="#">Liên Kết Hữu Dụng</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright &copy; 2023 nhóm 2 Phát Triển Hệ Thống Web

                        - Thiết Kế: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">Nhóm
                            2</a><br>
                        Phát hành bởi: <a rel="nofollow noopener" href="https://themewagon.com" target="_blank">Nhóm
                            2</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) { //declaring the array outside of the
        if (!cleared[t.id]) { // function makes it static and global
            cleared[t.id] = 1; // you could use true and false, but that's more typing
            t.value = ''; // with more chance of typos
            t.style.color = '#fff';
        }
    }
    </script>

</body>

</html>