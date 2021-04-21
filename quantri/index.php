
<?php
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['Email'])) {
	 header('Location: login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script src="js/lumino.glyphs.js"></script>

</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> 
						<?php 
							if(isset($_SESSION['Email'])) {echo $_SESSION['Email'];}
						?> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li role="presentation" class="divider"></li>
			<li class="active"><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg> Trang chủ</a></li>
			<li><a href="index.php?page=sanpham"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg> Quản lý sản phẩm</a></li>
			<li><a href="index.php?page=theloai"><svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg> Quản lý thể loại</a></li>
			<li><a href="index.php?page=user"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Quản lý admin</a></li>
			<li><a href="index.php?page=khachhang"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Quản lý khách hàng</a></li>
			<li><a href="index.php?page=donhang"><svg class="glyph stroked open letter"><use xlink:href="#stroked-open-letter"></use></svg> Quản lý đơn hàng</a></li>
			<li role="presentation" class="divider"></li>
		</ul>
		
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">		
		<?php
		if (isset($_GET['page'])) {
			switch ($_GET["page"]) {
				case 'sanpham': include_once './sanpham/sanpham.php';
					# code...
					break;
				case 'themsp': include_once './sanpham/themsp.php';
					# code...
					break;
				case 'suasp': include_once './sanpham/suasp.php';
					# code...
					break;
				case 'theloai': include_once './theloai/theloai.php';
					# code...
					break;
				case 'suatheloai': include_once './theloai/suatheloai.php';
					# code...
					break;
				case 'themtheloai': include_once './theloai/themtheloai.php';
					# code...
					break;
				case 'user': include_once './nguoidung/admin.php';
					# code...
					break;
				case 'adduser': include_once './nguoidung/add.php';
					# code...
					break;
				case 'edituser': include_once './nguoidung/edit.php';
					# code...
					break;
				case 'donhang': include_once './donhang/donhang.php';
					# code...
					break;
				case 'CTHD': include_once './donhang/CTHD.php';
					# code...
					break;
				case 'khachhang': include_once './nguoidung/khachhang.php';
					# code...
					break;
				case 'editKH': include_once './nguoidung/editKH.php';
					# code...
					break;
				
			}
		}
		else {
			include_once './gioithieu.php';
				# code...
			}
			# code...
		
			
		?>
	</div>	<!--/.main-->
		  

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		// !function ($) {
		//     $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		//         $(this).find('em:first').toggleClass("glyphicon-minus");      
		//     }); 
		//     $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		// }(window.jQuery);

		// $(window).on('resize', function () {
		//   if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		// })
		// $(window).on('resize', function () {
		//   if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		// })
	</script>	
</body>

</html>
