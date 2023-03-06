<?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "qlbanvexe";
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                }
                if(isset($_POST["sb"])){
                    //echo $_POST["sdt"]."<br>";
                    $sql1="SELECT * FROM khachhang where email='".$_POST["email"]."' ";
                    $result1= $conn->query($sql1);
                    if(mysqli_num_rows($result1)>0){
                        echo '<script language="javascript">
                    alert("Email đã được đăng ký!");
                    history.back();
                     </script>';
                    
                    }
                    else{
                   
                    $date = date_create($_POST["ngaysinh"]);
                    $sql2="INSERT INTO khachhang values('".$_POST["email"]."','".$_POST["sdt"]."','".md5($_POST["psw"])."',
                    '".$_POST["ten"]."','rong','rong','".$date ->format('Y-m-d') ."','".$_POST["diachi"]."') ";
                    //echo $result2."<br>";
                    $result2 = $conn->query($sql2);
                    //echo $sql."<br>";
                    if($result2){
                        header('Location: index.php');
                   }
                   else{
                       echo"loi kh the dang ky";
                     
                   }
                    }
                }
                ?>