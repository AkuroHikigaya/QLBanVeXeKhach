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
                            <a class="nav-link" href="index.php">trang chủ
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
                            <a class="nav-link" href="hoadon.php">Hóa Đơn</a>
                        </li>
                        <li class="nav-item">
                            <a class="taikhoan.php" href="one-page.html">Đăng ký</a>
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

    <!-- tai khoan Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Đăng Ký / Đăng Nhập</span></h2>
        </div>

        <div class="row px-xl-5">
            <!-- dag ky-->
            <div class="col-lg-5 mb-5">
                <section class="dangky">
                    <div class="row">
                        <div class="col-6">
                            <form class="row g-3 formdangky" action="dangky.php" method="POST">
                                <h2>Đăng Ký</h2>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Họ
                                        và
                                        tên<span class="error">*</span> </label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="Tên"
                                        name="ten">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Email<span
                                            class="error">*</span></label>
                                    <input type="email" class="form-control" id="inputEmail4" name="email">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputNumberl4" class="form-label">Số
                                        điện thoại<span class="error">*</span></label>
                                    <input type="text" class="form-control" id="inputNumberl4" name="sdt">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Mật
                                        khẩu<span class="error">*</span></label>
                                    <input type="password" class="form-control" id="Mật khẩu" name="psw">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Nhập
                                        lại mật khẩu<span class="error">*</span></label>
                                    <input type="password" class="form-control" id="Nhập lại" name="psw1">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">Ngày
                                        sinh<span class="error">*</span></label>
                                    <input type="date" class="form-control" id="inputdate" name="ngaysinh">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">Giới
                                        tính</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Nam
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Nữ
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="inputtext4" class="form-label">Địa
                                        chỉ<span class="error">*</span></label>
                                    <input type="text" class="form-control" id="Nhập lại" name="diachi">
                                </div>

                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label dieukhoansd" for="gridCheck">
                                            <b>Tôi đồng ý</b> <a href="#">với điều
                                                khoản
                                                sử dụng của hệ thống</a>
                                        </label>
                                    </div>
                                </div>
                                <input type="submit" name="sb" value="Đăng ký">
                            </form>

                        </div>
                    </div>
                </section>
            </div>
            <!-- ket thuc dk-->
            <div class="col-lg-2 mb-5">
                <div id="hredit">
                    <hr>
                </div>
            </div>
            <!-- dag ky-->
            <div class="col-lg-5 mb-5">
                <section class="dangky">
                    <div class="row">
                        <div class="col-6">
                            <form class="row g-3 formdangky" action="dangnhap.php" method="POST">
                                <h2>Đăng Nhập</h2>
                                <div class="col-md-12">
                                    <label for="inputNumberl4" class="form-label">Số
                                        điện thoại<span class="error">*</span></label>
                                    <input type="text" class="form-control" id="inputNumberl" name="sdt1">
                                </div>
                                <div class="col-md-12">
                                    <label for="inputPassword4" class="form-label">Mật
                                        khẩu<span class="error">*</span></label>
                                    <input type="password" class="form-control" id="MatKhau" name="psw1">
                                </div>

                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label dieukhoansd" for="gridCheck">
                                            <b>Bạn Quên Mật Khẩu? <a href="doimk.php">Bạn Quên Mật Khẩu?</a> </b>
                                        </label>
                                    </div>
                                </div>
                                <input type="submit" name="sb1" value="Đăng Nhập">
                            </form>

                        </div>
                    </div>
                </section>
            </div>
            <!-- ket thuc dk-->
        </div>
    </div>
    <!-- tai khoan End -->

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