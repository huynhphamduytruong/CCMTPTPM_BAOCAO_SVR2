<?php

	include_once './db_config.php';
	$IDLoai = $_GET['IDLoai'];
	$sql="SELECT * FROM theloai WHERE IDLoai = $IDLoai";
 	$query=mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($query);
	if(isset($_POST['submit'])){
		$tenloai = $_POST['TenLoai'];
		if(isset($tenloai)){
			$sql = "UPDATE theloai SET tenloai = '$tenloai' WHERE IDLoai = $IDLoai";
			$query = mysqli_query($conn, $sql);
			header('location: index.php?page=theloai');
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
<form method="post">

<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh mục sản phẩm</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Sửa danh mục
						</div>
						<div class="panel-body">
							<div class="form-group">
								<label>Tên danh mục:</label>
    							<input type="text" name="TenLoai" class="form-control" value = "<?php echo $row['TenLoai'];  ?>">
							</div>
							<input type="submit" name="submit" value="Sửa" class="btn btn-primary">
							<a href="index.php?page=theloai" class="btn btn-danger">Trở về trang thể loại</a>
						</div>
					</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->

</form>
		
	