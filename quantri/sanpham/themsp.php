<?php
include_once './db_config.php';

$sqlTL = "SELECT * FROM theloai";
$queryTL = mysqli_query($conn, $sqlTL);

if(isset($_POST['submit'])){
	if($_POST['IDLoai'] == 'unselect'){
		$error_tl = '<span style ="color:red;">(*)</span>';
	}
	else {
		$IDLoai = $_POST['IDLoai'];
	}
	$tenSp = $_POST['TenSP'];
	if($_FILES['HinhAnh']['name']==''){
		$error_anh = '<span style ="color:red;">(*)</span>';
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
	
	
	if(isset($IDLoai) && isset($tenSp) && isset($hinhanh)&& isset($gia)&& isset($mota)&& isset($khuyenmai) && isset($sanphamhot)){
		move_uploaded_file($tmp_name,$path.$hinhanh);
		$sql = "INSERT INTO sanpham(IDLoai,TenSP,HinhAnh,Gia,MoTa,KhuyenMai,SanPhamHot) VALUES ('$IDLoai','$tenSp','$hinhanh','$gia','$mota','$khuyenmai','$sanphamhot')";
		$query = mysqli_query($conn,$sql);
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
					<div class="panel-heading">Thêm sản phẩm</div>
					
					<div class="panel-body">
					
						<form method="post" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
							
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Tên sản phẩm</label>
										<input required type="text" name="TenSP" class="form-control">
									</div>
									<div class="form-group" >
										<label>Giá sản phẩm</label>
										<input required type="number" name="Gia" class="form-control">
									</div>
									<div class="form-group" >
										<label>Ảnh sản phẩm</label>
										<!-- <input required id="img" type="file" name="HinhAnh" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="img/new_seo-10-512.png"> -->
										<input type="file" name="HinhAnh" >
									</div>
									
									
									<div class="form-group" >
										<label>Khuyến mãi</label>
										<input required type="text" name="KhuyenMai" class="form-control">
									</div>
									<!-- <div class="form-group" >
										<label>Tình trạng</label>
										<input required type="text" name="TinhTrang" class="form-control">
									</div> -->
									
									<div class="form-group" >
										<label>Mô tả</label>
										<textarea required ="" class="form-control" row ="3" name="MoTa" ></textarea>
										<!-- <script>CKEDITOR.replace( 'MoTa' );</script> -->
									</div>
									<div class="form-group" >
										<label>Danh mục</label>
										<select  name = "IDLoai" class="form-control">
										<option value="unselect" selected>Chọn nhà cung cấp</option>
										<?php
											while ($rowsTL = mysqli_fetch_array($queryTL)) {
												# code...
											
										?>
											<option value="<?php echo $rowsTL['IDLoai'];  ?>"><?php echo $rowsTL['TenLoai'];  ?></option>
										<?php
											}
										
										?>
											
					                    </select>
									</div>
									<div class="form-group" >
										<label>Sản phẩm nổi bật</label></br>
										 <input type="radio" name="SanPhamHot" value="1">Có</br>
										 <input type="radio" checked name="SanPhamHot" value="0">Không
									</div>
									
									<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
									<!-- <a href="#" class="btn btn-danger">Hủy bỏ</a> -->
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
	