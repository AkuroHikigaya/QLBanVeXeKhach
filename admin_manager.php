<!DOCTYPE html>
<html lang="en">
<head>
  <title>Trang quản lý thống kê</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/admin.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <button class="openbtn" onclick="openNav()">☰</button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Trang chủ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Về trang ABC</a>
          </li>
        </ul>
      </div>
      <a class="navbar-brand" href="#">
        Tên đăng nhập
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top rounded-circle" alt="">
      </a>
    </div>
  </nav>

  <div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <div class="text-center mt-3">
      <img src="https://via.placeholder.com/150" alt="Hình ảnh">
      <p>Tên tài khoản</p>
      <p>Thông tin</p>
    </div>
    <hr>
    
    <h5>Cài đặt:</h5>
    <ul>
      <li><a href="#">Cài đặt tài khoản</a></li>
      <li><a href="#">Đăng xuất</a></li>
    </ul>
    

  </div>
  <div id="main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center">Trang quản lý thống kê</h1>
          <hr>
        </div>
      </div>
          <h2>Phương thức thống kê</h2>
          
          <!-- --------------------------------------Chức năng------------------------------------- -->
          

          <div class="container">
            <div class="row mt-4">

              <div class="col-sm-6 col-md-6">
                <div class="container border shadow rounded">
                  <i class="fa fa-car"></i>
                  <a href="#">Hiển thị danh sách tuyến xe</a>
                </div>
              </div>

              <div class="col-sm-6 col-md-6">
                <div class="container border shadow rounded">
                  <i class="fa fa-car"></i>
                  <a href="report.php">Xem báo cáo thống kê</a>
                </div>
              </div>

            </div>
            <div class="row mt-4">

              <div class="col-sm-6 col-md-6">
                <div class="container border shadow rounded">
                  <i class="fa fa-car"></i>
                  <a href="#">Cập nhật chuyến xe</a>
                </div>
              </div>

              <div class="col-sm-6 col-md-6">
                <div class="container border shadow rounded">
                  <i class="fa fa-car"></i>
                  <a href="#">Cập nhật chuyến xe</a>
                </div>
              </div>

            </div>
            <div class="row mt-4">

              <div class="col-sm-6 col-md-6">
                <div class="container border shadow rounded">
                  <i class="fa fa-car"></i>
                  <a href="#">Cập nhật nhân viên</a>
                </div>
              </div>

              <div class="col-sm-6 col-md-6">
                <div class="container border shadow rounded">
                  <i class="fa fa-car"></i>
                  <a href="#">Cập nhật chuyến xe</a>
                </div>
              </div>

            </div>
          </div>
    </div>
  </div>
  <script src="https://kit.fontawesome.com/9d63b403ea.js" crossorigin="anonymous"></script>
  <script>
    function openNav() {
      document.getElementById("mySidebar").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
      document.getElementById("navbarSupportedContent").style.marginLeft = "250px";
      
    }

    function closeNav() {
      document.getElementById("mySidebar").style.width = "0";
      document.getElementById("main").style.marginLeft = "0";
      document.getElementById("navbarSupportedContent").style.marginLeft = "0";
    }
  </script>
</body>
</html>