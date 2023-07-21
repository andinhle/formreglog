<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: arial;
        }
        #wrapper{
            display: flex;
            align-items: center;
            width: auto;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            background-image: url(https://funix.edu.vn/wp-content/uploads/2023/05/ngon-ngu-lap-trinh-php-1.jpg);
        }
        .form-register{
            background-color: aqua;
            width: 40%;
            margin: 0 auto;
            border-radius: 30px;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
        }
        form{
            padding: 40px;
        }
        form input{
            width: 100%;
            height: 35px;
            margin: 10px 0px;
            padding: 0px 10px;
            border: none;
            outline: none;
            border-radius: 5px;
        }
        form input:focus{
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            background-color: rgba(255, 255, 255, 0.815);
        }
        @media screen and (max-width: 800px){
            .form-register{
                width: 70%;
            }
        }
        @media screen and (max-width: 414px){
            .form-register{
                width: 100%;
            }
        }

    </style>
</head>
<body>
    <div id="wrapper">
        <div class="form-register">
            <form action="reg.php" method="post" onsubmit="return validatePassword()">
                Username: <input type="text" require name="username" id="user"><br>
                Email: <input type="email" require name="email"><br>
                Password : <input type="password" require name="password" id="password"><br>
                Confirm Password : <input type="password" require name="confirmpassword" id="confirmpassword"><br>
                <p>Đã có tài khoản -><a href="login.php">Login</a></p>
                <input type="submit" name="btn-reg" value="Đăng Ký">
            </form>
        </div>
    </div>
    <script>
        function validatePassword() {
            // Kiểm tra độ dài của username
            var username = document.getElementById("user").value;
            if (username.length < 6) {
            alert("Username phải chứa ít nhất 6 kí tự");
            return false;
            }
            //Kiểm tra độ dài của password
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirmpassword").value;
            if (password.length < 8) {
                alert("Password phải chứa ít nhất 8 kí tự");
                return false;
            }
            if (password !== confirmPassword) {
                alert("Mật khẩu và Xác nhận mật khẩu không khớp!");
                return false;
            } else {
                return true;
            }
        }
    </script>
</body>
</html>