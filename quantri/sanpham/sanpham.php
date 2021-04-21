<?php
include_once './db_config.php';

 $sql = "SELECT * FROM sanpham INNER JOIN theloai ON sanpham.IDLoai = theloai.IDLoai  ORDER BY IDSp DESC ";
 $query = mysqli_query($conn,$sql);

?>

<?php

if (isset($_GET['trang'])) {// kiểm tra tồn tại của get['trang]
	$page = $_GET['trang'];
	# code...
}
else {
	$page = 1;
}
$rowPerPage=5; // hiển thị 5 sản phẩm trên 1 trang
$perRow=$page*$rowPerPage-$rowPerPage; //1*5 - 5 = 0 số danh mục hiển thị
$sql="SELECT * FROM sanpham INNER JOIN theloai ON sanpham.IDLoai = theloai.IDLoai  ORDER BY IDSp DESC LIMIT $perRow,$rowPerPage";
$query=mysqli_query($conn,$sql);
$totalRow=mysqli_num_rows(mysqli_query($conn, "SELECT * FROM sanpham"));// tổng hàng
$totalPage= ceil($totalRow/$rowPerPage);// tổng hàng
$listP="";
for ($i=1; $i < $totalPage; $i++) { // vòng lặp for hiển thị trang 1 2 3
	if($page==$i){
		$listP.='<li class = "active"><a href="index.php?page=sanpham&trang='.$i.'">'.$i.'</a></li>'; 
	}
	else {
		$listP.='<li><a href="index.php?page=sanpham&trang='.$i.'">'.$i.'</a></li>';
	}
	# code...
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
					<div class="panel-heading">Danh sách sản phẩm</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="index.php?page=themsp" class="btn btn-primary">Thêm sản phẩm</a>
								<table class="table table-bordered" style="margin-top:20px;">
												
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th>Tên Sản phẩm</th>
											<th>Giá sản phẩm</th>
											<th width="20%">Ảnh sản phẩm</th>
											<th>Loại Sản Phẩm</th>
											<th>Khuyến Mãi</th>
											<!-- <th>Trình Trạng</th> -->
											<th>Mô Tả</th>
											<th>Sản Phẩm Hot</th>
											<th>Tùy chọn</th>
											
										</tr>
									</thead>
									<tbody>
									<?php
									$i1 = 1 ;
									while ($row=mysqli_fetch_array($query)) {
										# code...
									
									
									?>
										<tr>
											
											<td><?php  echo $i1;   ?></td>
											<td><?php  echo $row['TenSP'];   ?></td>
											<td><?php  echo number_format($row['Gia'],0,',','.').'đ'   ?></td>
											<td>
												<img width="150px" src="images/<?php  echo $row['HinhAnh'];   ?>" class="thumbnail">
											</td>
											<td><?php  echo $row['TenLoai'];   ?></td>
											<td><?php  echo $row['KhuyenMai'];   ?></td>
											<!-- <td><?php  echo $row['TinhTrang'];   ?></td> -->
											<td><?php  echo $row['MoTa'];   ?></td>
											<td><?php  if($row['SanPhamHot'] == 1){
												echo 'Có'; 
											}else {
												echo 'Không';
											} ;   ?></td>
											<td>
											<a href="index.php?page=suasp&IDSp=<?php echo $row['IDSp']?>" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
											<a href="xoasp.php?IDSp=<?php echo $row['IDSp']?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
											</td>
											
										</tr>
									<?php
									$i1++;
									}
									
									?>																												
									</tbody>
								</table>
								<ul class = "pagination" style = "float:right;">
								<?php
									echo $listP;
							
								?>
							</ul>							
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	