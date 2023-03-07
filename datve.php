<!DOCTYPE html>
<html lang="EN">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Hệ thống Xe ABC</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/htqlxe.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/datve.css">

</head>

<body>



    <!-- Header -->
    <div class="sub-header">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <ul class="left-info">
                        <li><a href="mailto:abc@gmail.com"><i class="fa-solid fa-envelope"></i>abc@gmail.com
                            </a></li>
                        <li><a href="tel:090-080-0760"><i class="fa
                                        fa-phone"></i>090-080-0760</a></li>
                        <li><a href="login.php"><i class="fa-solid
                                        fa-right-to-bracket"></i>Đăng Nhập</a></li>
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

    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <h2>Hệ thống xe abc</h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Trang chủ
                                <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="lichtrinh.php">Lịch
                                Trình</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.php">Liên Hệ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Hóa Đơn</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="register.php">Đăng ký
                            </a>
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

    <!-- Start Stepper HTML -->
    <div class="container">
        <div class="accordion" id="accordionExample">
            <div class="steps">
                <progress id="progress" value=0 max=100></progress>
                <div class="step-item">
                    <button class="step-button text-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        1
                    </button>
                    <div class="step-title">
                        CHỌN TUYẾN
                    </div>
                </div>
                <div class="step-item">
                    <button class="step-button text-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        2
                    </button>
                    <div class="step-title">
                        XÁC NHẬN LỘ TRÌNH
                    </div>
                </div>
                <div class="step-item">
                    <button class="step-button text-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        3
                    </button>
                    <div class="step-title">
                        THÔNG TIN HÀNH KHÁCH
                    </div>
                </div>
                <div class="step-item">
                    <button class="step-button text-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        4
                    </button>
                    <div class="step-title">
                        THANH TOÁN
                    </div>
                </div>
            </div>

            <div class="card">
                <div id="headingOne">
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="card-body">

                        <!-- Cái khung, bo gốc -->
                        <div class="border1 m-5 shadow-lg p-5">

                            <!-- Radiobox -->
                            <div class="form-check form-check-inline " style="margin-left: 100px;">
                                <input class="form-check-input" type="radio" name="go-type">
                                <label class="form-check-label
                                        font-weight-bold " for="motchieu">Một chiều</label>
                            </div>

                            <!-- Nhớ xóa border -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="col m-1 p-3
                                                    text-muted text-center
                                                    font-weight-bold">
                                            <h5 class="card-title
                                                        text-center
                                                        font-weight-bold
                                                        text-muted">Điểm đi</h5>
                                            <?php
                                            // Kết nối đến cơ sở dữ liệu
                                            $servername = "localhost";
                                            $username = "root";
                                            $password = "";
                                            $dbname = "qlbanvexe";

                                            $conn = new mysqli($servername, $username, $password, $dbname);
                                            if (!$conn) {
                                                die("Kết nối đến cơ sở dữ liệu không thành công: " . mysqli_connect_error());
                                            }

                                            // Truy vấn cơ sở dữ liệu để lấy các điểm đến
                                            $sql = "SELECT * FROM tinhthanh";
                                            $result = mysqli_query($conn, $sql);

                                            // Đưa các điểm đến vào ô điểm đến trên trang web
                                            echo '<select class="form-select1 text-muted text-center" style="border: none" id="diemdi">';
                                            echo '<option selected text-muted>Chọn địa điểm</option>';
                                            if (mysqli_num_rows($result) > 0) {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo '<option value="' . $row["TENTINH"] . '" data-id="' . $row["MATINH"] . '">' . $row["TENTINH"] . ' (' . $row["MATINH"] . ')</option>';
                                                }
                                            }
                                            echo '</select>';

                                            // Đóng kết nối
                                            mysqli_close($conn);
                                            ?>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="col border-left
                                                        m-1 p-3 text-center
                                                        font-weight-bold
                                                        text-muted">
                                            <h5 class="card-title
                                                            text-center
                                                            font-weight-bold
                                                            text-muted">Điểm đến</h5>
                                            <?php
                                            // Kết nối đến cơ sở dữ liệu
                                            $servername = "localhost";
                                            $username = "root";
                                            $password = "";
                                            $dbname = "qlbanvexe";

                                            $conn = new mysqli($servername, $username, $password, $dbname);
                                            if (!$conn) {
                                                die("Kết nối đến cơ sở dữ liệu không thành công: " . mysqli_connect_error());
                                            }

                                            // Truy vấn cơ sở dữ liệu để lấy các điểm đến
                                            $sql = "SELECT * FROM tinhthanh";
                                            $result = mysqli_query($conn, $sql);

                                            // Đưa các điểm đến vào ô điểm đến trên trang web
                                            echo '<select class="form-select1 text-muted text-center" style="border: none" id="diemden">';
                                            echo '<option selected text-muted>Chọn địa điểm</option>';
                                            if (mysqli_num_rows($result) > 0) {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo '<option value="' . $row["TENTINH"] . '" data-id="' . $row["MATINH"] . '">' . $row["TENTINH"] . ' (' . $row["MATINH"] . ')</option>';
                                                }
                                            }
                                            echo '</select>';

                                            // Đóng kết nối
                                            mysqli_close($conn);
                                            ?>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="col border-left text-center m-1 p-3">
                                            <h5 class="card-title
                                                            text-center
                                                            font-weight-bold
                                                            text-muted">Ngày đi</h5>
                                            <?php
                                            include('date.php');
                                            ?>
                                        </div>
                                    </div>

                                </div>
                                <button class="snip1339 " style="float: right;" id="find-flight">Tìm
                                    chuyến xe</button>
                            </div>
                        </div>
                        <div>
                            <p>THÔNG TIN CHUNG</p>
                            <div id="diemdi-diemden"></div>
                            <div id="distance-time"></div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card">
                <div id="headingTwo">

                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="card-body">

                    </div>
                </div>
            </div>
            <div class="card">
                <div id="headingThree">

                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit,
                        enim eiusmod high life accusamus
                        terry richardson ad
                        squid. 3 wolf moon officia aute, non
                        cupidatat skateboard dolor brunch.
                        Food truck quinoa
                        nesciunt laborum eiusmod. Brunch 3
                        wolf moon tempor, sunt aliqua put a
                        bird on it squid
                        single-origin coffee nulla assumenda
                        shoreditch et. Nihil anim keffiyeh
                        helvetica, craft
                        beer labore wes anderson cred
                        nesciunt sapiente ea proident. Ad
                        vegan excepteur butcher vice
                        lomo. Leggings occaecat craft beer
                        farm-to-table, raw denim aesthetic
                        synth nesciunt you
                        probably haven't heard of them
                        accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Start Stepper HTML -->




    <!-- footer-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 footer-item">
                    <h4>Kết nối với chúng tôi</h4>
                    <ul class="social-icons">
                        <h3 style=" color: #EE6D4A;
                                                font-size: 40px; font-weight:
                                                700;">1900 2082</h3>
                        <li><a rel="nofollow" href="https://fb.com/templatemo" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa
                                                        fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa
                                                        fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa
                                                        fa-behance"></i></a></li>
                    </ul>
                    <p>
                        Địa chỉ:
                        <a href="https://www.google.com/maps/search/?api=1&amp;query=Địa
                                                chỉ:Trần Quang Khải, P.Cái Khế,
                                                Q.Ninh Kiều, TP.Cần Thơ" target="_blank" class="address">102abc,
                            Trần Quang Khải, P.Cái Khế,
                            Q.Ninh Kiều, TP.Cần
                            Thơ</a>
                    </p>
                    <p>
                        Email:
                        <a href="mailto:abc@gmail.com" class="title">abc@gmail.com</a>
                    </p>
                </div>
                <div class="col-md-3 footer-item">
                    <h4>Hướng Dẫn</h4>
                    <ul class="menu-list">
                        <li><a href="#">Hướng dẫn đặt vé
                                trên Web</a></li>
                        <li><a href="#">Hướng dẫn đặt vé
                                trên App</a></li>
                        <li><a href="#">Hỏi Đáp</a></li>
                        <li><a href="#">Điều khoản sử dụng</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-item">
                    <h4>Đi đến trang</h4>
                    <ul class="menu-list">
                        <li><a href="index.php">Trang Chủ</a></li>
                        <li><a href="lichtrinh.php">Lịch
                                trình</a></li>
                        <li><a href="services.php">Liên Hệ</a></li>
                        <li><a href="register.php">Đăng Ký</a></li>
                        <li><a href="login.php">Đăng nhập</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-item">
                    <h4>Khác</h4>
                    <ul class="menu-list">
                        <li><a href="#">Trở thành nhà cung
                                cấp</a></li>
                        <li><a href="#">Cộng tác với chúng
                                tôi</a></li>
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
                    <p>Copyright &copy; 2023 nhóm 2 Phát
                        Triển Hệ Thống Web

                        - Thiết Kế: <a rel="nofollow
                                                noopener" href="https://templatemo.com" target="_blank">Nhóm
                            2</a><br>
                        Phát hành bởi: <a rel="nofollow
                                                noopener" href="https://themewagon.com" target="_blank">Nhóm
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <script>
        const stepButtons = document.querySelectorAll('.step-button');
        const progress = document.querySelector('#progress');

        Array.from(stepButtons).forEach((button, index) => {
            button.addEventListener('click', () => {
                progress.setAttribute('value', index * 100 / (stepButtons.length - 1)); //there are 3 buttons. 2 spaces.

                stepButtons.forEach((item, secindex) => {
                    if (index > secindex) {
                        item.classList.add('done');
                    }
                    if (index < secindex) {
                        item.classList.remove('done');
                    }
                })
            })
        })
    </script>

    <!-- chuyển tiếp -->
    <script>
        // Lấy các bước và thanh tiến trình
        const steps = document.querySelectorAll('.step-item');
        const progressBar = document.getElementById('progress');

        // Thiết lập sự kiện cho nút "Next"
        document.getElementById('nextBtn').addEventListener('click', function() {
            // Tìm bước đang được chọn
            let currentStep = Array.from(steps).findIndex(step => step.querySelector('.step-button').getAttribute('aria-expanded') === 'true');

            // Nếu bước hiện tại không phải là bước cuối cùng, chuyển đổi sang bước kế tiếp
            if (currentStep < steps.length - 1) {
                steps[currentStep].querySelector('.step-button').classList.remove('collapsed');
                steps[currentStep].querySelector('.step-button').setAttribute('aria-expanded', 'false');
                steps[currentStep + 1].querySelector('.step-button').classList.add('collapsed');
                steps[currentStep + 1].querySelector('.step-button').setAttribute('aria-expanded', 'true');
                progressBar.value = ((currentStep + 1) / (steps.length - 1)) * 100;
            }
        });
    </script>


    <script>
        // Lấy đối tượng
        var select_di = document.getElementById("diemdi");
        var select_den = document.getElementById("diemden");

        // Thêm sự kiện "change" cho select_den
        var count = 0;
        select_di.addEventListener("change", checkSelected);
        select_den.addEventListener("change", checkSelected);

        //Kiểm tra (Nếu đủ 2 thì in ra)
        function checkSelected() {
            if (select_di.value != "" && select_den.value != "") {
                count++;
                if (count == 2) {
                    printResult();
                    count--;
                }
            }

        }

        // Hàm in kết quả
        function printResult() {

            // var valueA_code = select_di.options[select_di.selectedIndex];
            // var valueA = valueA_code.dataset.id;
            var valueA = select_di.value;
            var valueB = select_den.value;
            var result = valueA + "->" + valueB;
            document.getElementById("diemdi-diemden").innerHTML = result;

            var xmlhttp = new XMLHttpRequest();

            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    // xử lý phản hồi từ server
                    document.getElementById("distance-time").innerHTML = this.responseText;
                }
            };
            var option_di = select_di.options[select_di.selectedIndex];
            var start = option_di.dataset.id;
            var option_den = select_den.options[select_den.selectedIndex];
            var end = option_den.dataset.id;

            // gửi yêu cầu tới server
            xmlhttp.open("GET", "datve_function.php?function=get_distance&start=" + start + "&end=" + end, true);
            xmlhttp.send();
        }
    </script>

</body>

</html>