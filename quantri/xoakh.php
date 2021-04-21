<?php
// session_start();

// if ($_SESSION['Email'] == 'truong@gmail.com' && $_SESSION['MatKhau'] == '123') {
    $IDKH = $_GET['IDKH'];
    include_once './db_config.php';
    $sql = "DELETE FROM khachhang WHERE IDKH = '$IDKH'";
    $query = mysqli_query($conn, $sql);
    header('location: index.php?page=khachhang');
    # code...

// else {
//     header('location:index.php');
// }

?>