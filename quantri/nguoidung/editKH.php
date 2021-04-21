

<?php

include_once './db_config.php';
$IDKH = $_GET['IDKH'];
$sql="SELECT * FROM khachhang WHERE IDKH = $IDKH";
$query=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($query);
if(isset($_POST['submit'])){
    $ten = $_POST['Ten'];
    $diachi = $_POST['DiaChi'];
    $email = $_POST['Email'];
    $sdt = $_POST['SDT'];
    $matkhau = $_POST['MatKhau'];
    $matkhau = md5($matkhau);
    
    if(isset($ten)&& isset($diachi) && isset($email) && isset($sdt) && isset($matkhau)){
        $sql = "UPDATE khachhang SET Ten = '$ten',DiaChi = '$diachi',Email = '$email',SDT = '$sdt',MatKhau = '$matkhau' WHERE IDKH = $IDKH";
        $query = mysqli_query($conn, $sql);
        header('location: index.php?page=khachhang');
         // if ($result==1) {
        //  echo 'Thêm thành công';
        //  # code...
         // }
        //  else {
        //  echo 'Thêm thất bại';
         // }
    }
}

?>


<form  method="post">

<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Người dùng</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Thêm người dùng
						</div>
						<div class="panel-body">
                            <div class="form-group">
								<label>Tên:</label>
    							<input type="text" name="Ten" class="form-control" placeholder="Tên..." value = "<?php echo $row['Ten'];  ?>">
							</div>
                            <div class="form-group">
								<label>Địa chỉ:</label>
    							<input type="text" name="DiaChi" class="form-control" placeholder="Địa Chỉ ....." value = "<?php echo $row['DiaChi'];  ?>">
							</div>
							<div class="form-group">
								<label>Email:</label>
    							<input type="email" name="Email" class="form-control" placeholder="Email...." value = "<?php echo $row['Email'];  ?>">
							</div>
                            <div class="form-group">
								<label>Số điện thoại:</label>
    							<input type="text" name="SDT" class="form-control" placeholder="Số điện thoại ....." value = "<?php echo $row['SDT'];  ?>">
							</div>
                            <div class="form-group">
								<label>Mật Khẩu:</label>
    							<input type="password" name="MatKhau" class="form-control" placeholder="Mật khẩu ....." value = "<?php echo $row['MatKhau'];  ?>">
							</div>
                            
                            <input type="submit" name="submit" value="Sửa" class="btn btn-primary">
							<a href="index.php?page=khachhang" class="btn btn-danger">Trở về trang người dùng</a>
						</div>
					</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	
</form>