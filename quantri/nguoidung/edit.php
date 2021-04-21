

<?php

include_once './db_config.php';
$ID = $_GET['ID'];
$sql="SELECT * FROM tbl_admin WHERE ID = $ID";
$query=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($query);
if(isset($_POST['submit'])){
    $email = $_POST['Email'];
    $ten = $_POST['Ten'];
    $matkhau = $_POST['MatKhau'];
    $matkhau = md5($matkhau);
    $diachi = $_POST['DiaChi'];
    if(isset($email) && isset($ten)&& isset($matkhau)&& isset($diachi)){
        $sql = "UPDATE tbl_admin SET Email = '$email',Ten = '$ten',MatKhau = '$matkhau',DiaChi = '$diachi' WHERE ID = $ID";
        $query = mysqli_query($conn, $sql);
        header('location: index.php?page=user');
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
								<label>Email:</label>
    							<input type="email" name="Email" class="form-control" placeholder="Email...." value = "<?php echo $row['Email'];  ?>">
							</div>
                            <div class="form-group">
								<label>Tên:</label>
    							<input type="text" name="Ten" class="form-control" placeholder="Tên..." value = "<?php echo $row['Ten'];  ?>">
							</div>
                            <div class="form-group">
								<label>Mật Khẩu:</label>
    							<input type="password" name="MatKhau" class="form-control" placeholder="Mật khẩu ....." value = "<?php echo $row['MatKhau'];  ?>">
							</div>
                            <div class="form-group">
								<label>Địa chỉ:</label>
    							<input type="text" name="DiaChi" class="form-control" placeholder="Địa Chỉ ....." value = "<?php echo $row['DiaChi'];  ?>">
							</div>
                            <input type="submit" name="submit" value="Sửa" class="btn btn-primary">
							<a href="index.php?page=user" class="btn btn-danger">Trở về trang người dùng</a>
						</div>
					</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	
</form>