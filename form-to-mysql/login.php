<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        .form-log{
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
        form input:last-child{
            cursor: pointer;
        }
        @media screen and (max-width: 800px){
            .form-log{
                width: 70%;
            }
        }
        @media screen and (max-width: 414px){
            .form-log{
                width: 100%;
            }
        }
        
    </style>
</head>
<body>
    <div id="wrapper">
        <div class="form-log">
            <form action="log.php" method="post">
                Username: <input type="text" require name="enterusername"><br>
                Password : <input type="password" require name="enterpassword"><br>
                <p>Chưa có tài khoản -><a href="index.php">Register</a></p>
                <input type="submit" name="btn-log" value ="Đăng Nhập">
            </form>
        </div>
    </div>
</body>
</html>