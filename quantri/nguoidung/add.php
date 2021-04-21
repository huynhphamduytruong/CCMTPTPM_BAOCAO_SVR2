
<?php

include_once './db_config.php';
if(isset($_POST['submit'])){
    $email = $_POST['Email'];
    $ten = $_POST['Ten'];
    $matkhau = $_POST['MatKhau'];
    $matkhau = md5($matkhau);
    $diachi = $_POST['DiaChi'];
    if(isset($email) && isset($ten)&& isset($matkhau)&& isset($diachi)){
        $sql = "INSERT INTO tbl_admin(Email,Ten,MatKhau,DiaChi) VALUES ('$email','$ten','$matkhau','$diachi')";
        $query = mysqli_query($conn , $sql);
        header('location: index.php?page=user');
       //  if ($result==1) {
       //      echo 'Thêm thành công';
       //      # code...
       //  }
       //  else {
       //      echo 'Thêm thất bại';
       //  }
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
    							<input type="email" name="Email" class="form-control" placeholder="Email....">
							</div>
                            <div class="form-group">
								<label>Tên:</label>
    							<input type="text" name="Ten" class="form-control" placeholder="Tên...">
							</div>
                            <div class="form-group">
								<label>Mật Khẩu:</label>
    							<input type="password" name="MatKhau" class="form-control" placeholder="Mật khẩu .....">
							</div>
                            <div class="form-group">
								<label>Địa chỉ:</label>
    							<input type="text" name="DiaChi" class="form-control" placeholder="Địa Chỉ .....">
							</div>
                            <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
							<a href="index.php?page=user" class="btn btn-danger">Trở về trang người dùng</a>
						</div>
					</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	
</form>