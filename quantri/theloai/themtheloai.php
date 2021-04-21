<?php

 include_once './db_config.php';
 if(isset($_POST['submit'])){
     $tentheloai = $_POST['TenLoai'];
     if(isset($tentheloai)){
         $sql = "INSERT INTO theloai(TenLoai) VALUES ('$tentheloai')";
         $query = mysqli_query($conn , $sql);
         header('location: index.php?page=theloai');
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
				<h1 class="page-header">Danh mục sản phẩm</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Thêm thể loại
						</div>
						<div class="panel-body">
							<div class="form-group">
								<label>Tên danh mục:</label>
    							<input type="text" name="TenLoai" class="form-control" placeholder="Tên danh mục...">
							</div>
                            <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
							<a href="index.php?page=theloai" class="btn btn-danger">Trở về trang thể loại</a>
						</div>
					</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	
</form>
		