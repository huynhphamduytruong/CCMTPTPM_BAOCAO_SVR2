<?php

	include_once './db_config.php';
	$IDSp = $_GET['IDSp'];
	$sqlTL = "SELECT * FROM theloai";
	$queryTL = mysqli_query($conn, $sqlTL);
	$sql = "SELECT * FROM sanpham WHERE IDSp = $IDSp";
	$query = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($query);


	if(isset($_POST['submit'])){
		$IDLoai = $_POST['IDLoai'];
		$tenSp = $_POST['TenSP'];
		if($_FILES['HinhAnh']['name']==''){
			$hinhanh = $_POST['HinhAnh'];
		}
		else {
			$hinhanh =$_FILES['HinhAnh']['name'];
			$tmp_name = $_FILES['HinhAnh']['tmp_name'];
			$path = "images/";
			
		}
		$gia = $_POST['Gia'];
		// $tinhtrang = $_POST['TinhTrang'];
		$mota = $_POST['MoTa'];
		$khuyenmai = $_POST['KhuyenMai'];
		$sanphamhot = $_POST['SanPhamHot'];
		if(isset($IDLoai) && isset($tenSp) && isset($hinhanh)&& isset($gia)&& isset($mota)&& isset($khuyenmai)&& isset($sanphamhot)){
			move_uploaded_file($tmp_name,$path.$hinhanh);
			$sqlsp = "UPDATE sanpham SET IDLoai = '$IDLoai', TenSP = '$tenSp', HinhAnh = '$hinhanh' , Gia = '$gia' , MoTa = '$mota', KhuyenMai = '$khuyenmai', SanPhamHot = '$sanphamhot' WHERE IDSp = $IDSp";
			$querysp = mysqli_query($conn,$sqlsp);
			header('location:index.php?page=sanpham');
		}
	}
	
?>
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sản phẩm</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Sửa sản phẩm</div>
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
							<!-- <a href="index.php?page=sanpham" class="btn btn-primary">Trở về</a> -->
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Tên sản phẩm</label>
										<input required type="text" name="TenSP" class="form-control" value = "<?php echo $row['TenSP'];  ?>">
									</div>
									<div class="form-group" >
										<label>Giá sản phẩm</label>
										<input required type="number" name="Gia" class="form-control" value = "<?php echo $row['Gia'];  ?>">
									</div>
									<div class="form-group" >
										<label>Ảnh sản phẩm</label>
										 <input type="file" name="HinhAnh">
										 <input type="hidden" name="HinhAnh"  value ="<?php echo $row['HinhAnh'];  ?>">
									</div>								
									<div class="form-group" >
										<label>Khuyến mãi</label>
										<input required type="text" name="KhuyenMai" class="form-control" value = "<?php if(isset($_POST['KhuyenMai'])){echo $_POST['KhuyenMai'];} else{echo $row['KhuyenMai'];}  ?>">
									</div>
									<!-- <div class="form-group" >
										<label>Tình trạng</label>
										<input required type="text" name="TinhTrang" class="form-control" value = "<?php if(isset($_POST['TinhTrang'])){echo $_POST['TinhTrang'];} else{echo $row['TinhTrang'];}  ?>">
									</div>							 -->
									<div class="form-group" >
										<label>Mô tả</label>
										<!-- <textarea required ="" class="form-control" row ="3" name="MoTa" value = "<?php if(isset($_POST['MoTa'])){echo $_POST['MoTa'];}  else{echo $row['MoTa'];} ?>"></textarea> -->
										<input required type="text" name="MoTa" class="form-control" value = "<?php if(isset($_POST['MoTa'])){echo $_POST['MoTa'];}  else{echo $row['MoTa'];} ?>">
									</div>
									<div class="form-group" >
										<label>Danh mục</label>
										<select  name = "IDLoai" class="form-control">
										<!-- <option value="unselect" selected>Chọn nhà cung cấp</option> -->
										<?php
											while ($rowsTL = mysqli_fetch_array($queryTL)) {
												# code...
							
										?>
											
											<option 
											<?php
												if ($row['IDLoai']==$rowsTL['IDLoai']) {
													echo 'selected = "selected"' ;
													# code...
												}
											
											?>
											value="<?php echo $rowsTL['IDLoai'];  ?>"><?php echo $rowsTL['TenLoai'];  ?></option>
										<?php
											}
										
										?>
											
					                    </select>
									</div>
									<div class="form-group" >
										<label>Sản phẩm nổi bật</label><br> 
										 <input type="radio" name="SanPhamHot" <?php if ($row['SanPhamHot']== 1) {echo 'checked';}  ?> value="1">Có</br>
										 <input type="radio" checked name="SanPhamHot" <?php if ($row['SanPhamHot']== 0) {echo 'checked';}  ?> value="0">Không
									</div>
									
									<input type="submit" name="submit" value="Sửa" class="btn btn-primary">
									<a href="index.php?page=sanpham" class="btn btn-danger">Trở về trang sản phẩm</a>
								</div>
							</div>
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	