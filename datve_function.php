<?php
    if (isset($_GET["function"]) && $_GET["function"] == "get_distance") {
        // Gọi hàm PHP và trả về kết quả
        $start = $_GET["start"];
        $end = $_GET["end"];
        echo get_distance($start, $end);
    }

    function get_distance($diemdi, $diemden) {
        // Kết nối đến cơ sở dữ liệu
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "qlbanvexe";

        

        $conn = new mysqli($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Kết nối đến cơ sở dữ liệu không thành công: " . mysqli_connect_error());
        }

        $sql_start = "";
        $sql_end = "";

        //Lấy khoảng cách với thời gian
        $sql_distance_time = "SELECT QUANGDUONG, TGDICHUYENTB 
                                FROM tuyenxe
                                WHERE tuyenxe.MABX 
                                AND tuyenxe.BEN_MABX = (SELECT MABX FROM `benxe` WHERE MATINH = 'CT65')";

        $result_distance_time = $conn->query($sql_distance_time);

        while ($row = mysqli_fetch_assoc($result_distance_time)) {
            echo'<div>Khoảng cách: '.$row["QUANGDUONG"].' KM</div>';
            echo'<div>Thời gian: '.$row["TGDICHUYENTB"].' H</div>';
        }

        // Đóng kết nối
        mysqli_close($conn);
    }
?>