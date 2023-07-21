<?php
    $host ="localhost";
    $username ="root";
    $password ="";
    $dbname = "data-register";
    $conn = new mysqli($host, $username, $password, $dbname);
    if ($conn->connect_error) {
        # code...
        die("Kết nối không thành công:">$conn->connect_error);
    }
?>