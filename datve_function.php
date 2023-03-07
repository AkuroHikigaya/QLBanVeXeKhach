<?php
    if (isset($_GET["function"]) && $_GET["function"] == "hello") {
        // Gọi hàm PHP và trả về kết quả
        echo get_distance();
    }

    function get_distance() {
        // Kết nối đến cơ sở dữ liệu
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "qlbanvexe";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Kết nối đến cơ sở dữ liệu không thành công: " . mysqli_connect_error());
        }

        //Lấy khoảng cách với thời gian
        $sql_distance_time = "SELECT QUANGDUONG, TGDICHUYENTB FROM tuyenxe
        WHERE tuyenxe.MABX = 'BAG2'
        AND tuyenxe.BEN_MABX = 'BSC1'";

        $result_distance_time = $conn->query($sql_distance_time);

        while ($row = mysqli_fetch_assoc($result_distance_time)) {
            echo'<div>Khoảng cách: '.$row["QUANGDUONG"].' KM</div>';
            echo'<div>Thời gian: '.$row["TGDICHUYENTB"].' H</div>';
        }

        // Đóng kết nối
        mysqli_close($conn);
    }
?>