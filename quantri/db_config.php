<?php
 $dbhost="localhost";
 $dbUser="root";
 $dbPass="";
 $dbName="shopbangiay";
 $conn=mysqli_connect($dbhost,$dbUser,$dbPass,$dbName);
 if($conn){
     $setlang=mysqli_query($conn, "SET NAMES 'utf8'");

 }
 else {
     die("Kết nối thất bại".mysqli_connect_error());
 }


?>