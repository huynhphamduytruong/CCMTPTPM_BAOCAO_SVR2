<?php
include_once './db_config.php';
 $sql = "SELECT * FROM khachhang  ORDER BY IDKH DESC ";
 $query = mysqli_query($conn,$sql);

?>

<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sản phẩm</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Quản lý người dùng</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<!-- <a href="index.php?page=adduser" class="btn btn-primary">Thêm người dùng</a> -->
								<table class="table table-bordered" style="margin-top:20px;">
												
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th>Tên</th>
                                            <th>Địa chỉ</th>
											<th>Email</th> 
                                            <th>Số điện thoại</th>
											<th>Mật Khẩu</th>                                         
                                            <th>Tùy chọn</th>
											<!-- <th>Loại Sản Phẩm</th>
											<th>Khuyến Mãi</th>
											<th>Trình Trạng</th>
											<th>Mô Tả</th>
											<th>Tùy chọn</th> -->
											
										</tr>
									</thead>
									<tbody>
									<?php
									$i = 1 ;
									while ($row=mysqli_fetch_array($query)) {
									?>
										<tr>
											
											<td><?php  echo $i;?></td>
                                            <td><?php  echo $row['Ten'];   ?></td>
                                            <td><?php  echo $row['DiaChi'];   ?></td>
											<td><?php  echo $row['Email'];   ?></td>
                                            <td><?php  echo $row['SDT'];   ?></td>										
                                            <td><?php  echo $row['MatKhau'];   ?></td>
											<td>
											    <a href="index.php?page=editKH&IDKH=<?php echo $row['IDKH']?>" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
												<a href="xoakh.php?IDKH=<?php echo $row['IDKH']?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
											</td>
											
										</tr>
									<?php
									$i++;
									}
									
									?>																												
									</tbody>
								</table>
								<ul class = "pagination" style = "float:right;">
								<!-- <?php
									echo $listP;
							
								?> -->
							</ul>							
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->