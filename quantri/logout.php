<?php
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['Email'])) {
	session_destroy();
    header('location:login.php');
}
else {
    header('location:login.php');
}

?>