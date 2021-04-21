<?php


// if ($_SESSION['Email'] == 'truong@gmail.com' && $_SESSION['MatKhau'] == '123') {
    $ID = $_GET['ID'];
    include_once './db_config.php';
    $sql = "DELETE FROM tbl_admin WHERE ID = '$ID'";
    $query = mysqli_query($conn, $sql);
    header('location: index.php?page=user');
    # code...
// }
// else {
//     header('location:index.php');
// }

?>