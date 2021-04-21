<?php
	include_once './db_config.php';
 	$sql="SELECT * FROM theloai ORDER BY IDLoai DESC";
 	$query=mysqli_query($conn,$sql);

?>
<?php
if (isset($_GET['trang'])) { // kiểm tra tồn tại của get['trang]
	$page = $_GET['trang'];
	# code...
}
else {
	$page = 1; // trang hiện hành
}
$rowPerPage=5; // tổng danh mục hiển thị trên 1 trang
$perRow=$page*$rowPerPage-$rowPerPage;  // 1*5 - 5 = 0 số danh mục hiển thị
$sql="SELECT * FROM theloai ORDER BY IDLoai DESC LIMIT $perRow,$rowPerPage";
$query=mysqli_query($conn,$sql);
$totalRows=mysqli_num_rows(mysqli_query($conn, "SELECT * FROM theloai")); // tổng hàng
$totalPage= ceil($totalRows/$rowPerPage); // tổng trang
$listP=""; 
for ($i=1; $i < $totalPage; $i++) {   // vòng lặp for hiển thị trang 1 2 3
	if($page==$i){ 
		$listP.='<li class = "active"><a href="index.php?page=theloai&trang='.$i.'">'.$i.'</a></li>'; 
	}
	else {
		$listP.='<li><a href="index.php?page=theloai&trang='.$i.'">'.$i.'</a></li>';
	}
	# code...
}


?>
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh mục danh mục</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-7 col-lg-7">
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách danh mục</div>
					<div class="panel-body">
						<div class="bootstrap-table">
						<a href="index.php?page=themtheloai" class="btn btn-primary">Thêm thể loại</a>
							<table class="table table-bordered">
							<thead>
								<tr class="bg-primary">
									<th>ID</th>
									<th>Tên thể loại</th>
									<th>Action</th>
								</tr>
							</thead>				              
				              	<tbody>
								<?php
								$i = 1;
									while ($row = mysqli_fetch_array($query)) {
										# code...									
								?>
								<tr>
									<td><?php  echo $i;   ?></td>
									<td><?php echo $row ['TenLoai']   ?></td>
									<td>
			                    		<a href="index.php?page=suatheloai&IDLoai=<?php echo $row['IDLoai']?>" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
			                    		<a href="xoatheloai.php?IDLoai=<?php echo $row['IDLoai']?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
			                  		</td>
			                  	</tr>
								<?php
								$i++;
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
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	