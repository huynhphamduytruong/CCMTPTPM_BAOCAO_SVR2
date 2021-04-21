<?php
session_start();

// if ($_SESSION['Email'] == 'truong@gmail.com' && $_SESSION['MatKhau'] == '123') {
    $IDLoai = $_GET['IDLoai'];
    include_once './db_config.php';
    $sql = "DELETE FROM theloai WHERE IDLoai = '$IDLoai'";
    $query = mysqli_query($conn, $sql);
    header('location: index.php?page=theloai');
    # code...
// }
// else {
//     header('location:index.php');
// }

?>