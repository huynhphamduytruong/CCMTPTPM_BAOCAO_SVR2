<?php
// session_start();

// if ($_SESSION['Email'] == 'truong@gmail.com' && $_SESSION['MatKhau'] == '123') {
    $IDSp = $_GET['IDSp'];
    include_once './db_config.php';
    $sql = "DELETE FROM sanpham WHERE IDSp = '$IDSp'";
    $query = mysqli_query($conn, $sql);
    header('location: index.php?page=sanpham');
    # code...

// else {
//     header('location:index.php');
// }

?>