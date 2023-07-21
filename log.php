<?php
    require 'db/connect.php';
    if (isset($_POST['btn-log'])){
        $enterUsername = $_POST['enterusername'];
        $enterPassword = $_POST['enterpassword'];
        if (!empty($enterUsername) && !empty($enterPassword)) {
            // Kiểm tra nếu có kết quả trả về từ truy vấn
            $sql = "SELECT * FROM tbl_user WHERE username = '$enterUsername'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result)>0) {
                // So sánh dữ liệu người dùng đăng nhập với dữ liệu người dùng đã đăng ký
                while ($row=mysqli_fetch_assoc($result)) {
                    if (password_verify($enterPassword, $row['password'])) {
                        echo "ĐĂNG NHẬP THÀNH CÔNG";
                    }else {
                        echo "MÃ PASSWORD SAI";
                    }
                }
            }else {
                echo "TÀI KHOẢN KHÔNG TỒN TẠI";
            }
        }
        
    }else {
        echo "Vui lòng nhập đủ thông tin";
    }
?>