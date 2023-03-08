
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlbanvexe";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//tao chuoi luu cau lenh sql
$sql = "SELECT * FROM hoadon";
//thuc thi cau lenh sql va dua doi tuong vao $result
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  
  
   //Cach 3: trinh bay voi bang html
  //load du lieu moi len dua vao bien result
  $result = $conn->query($sql);
  $result_all = $result -> fetch_all();

  // trinh bay du lieu trong 1 bang html
  //tieu de bang
    echo "<table border=1><tr><th>Mã Phiếu</th><th>Email</th><th>Mã NV</th><th>Ngày Lập</th><th>VAT</th><th>Số lượng vé</th><th>Tổng tiền</th></tr>";
    // output data of each row
foreach ($result_all as $value) {
    echo "<tr><td>" . $value[0]. "</td><td>" . $value[1]. "</td><td>" . $value[2]. "</td><td>" . $value[3]. "</td><td>" . $value[4]. "</td><td>" . $value[5]. "</td><td>" . $value[6]. "</td></tr>";
}

   echo "</table>";
  
} else {
  echo "0 ket qua tra ve";
}
$conn->close();
?>

