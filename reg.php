<?php
  require 'db/connect.php';
  if (isset($_POST['btn-reg'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (!empty($username)&& !empty($email) && !empty($password)) {
      // Kiểm tra xem người dùng và email đã tồn tại trong cơ sở dữ liệu hay chưa
      $sql = "SELECT * FROM tbl_user WHERE username = '$username' OR email = '$email'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        echo "User or Email đã tồn tại";
      }else {
        // Tiếp tục quá trình đăng ký
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        // Thực hiện câu truy vấn INSERT để lưu thông tin người dùng mới
        $insert_sql = "INSERT INTO `tbl_user` (`username`, `email`, `password`) VALUES ('$username', '$email', '$hashed_password')";
        if ($conn->query($insert_sql)===TRUE){
          echo "Đăng ký thành công"."<br>";
          header("Location: login.php");
          exit;
        }else{
          echo "Lỗi {$sql}".$conn->error;
        }
      }
    }else{
      echo"Bạn cần nhập đầy đủ thông tin";
    }
  }
?>