<?php 

	require 'functions.php';

	if(!is_logged_in())
	{
		redirect('login.php');
	}

	$id = $_GET['id'] ?? $_SESSION['PROFILE']['id'];

	$row = db_query("select * from users where id = :id limit 1",['id'=>$id]);

	if($row)
	{
		$row = $row[0];
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Minh Hieu Shop</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="./css/userstyle.css">
	<!-- google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,600;1,700;1,800&display=swap" rel="stylesheet">

	<!-- font awesome cdn -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
	
</head>
<body>
	<header>
		<nav>
			<div class="logo">
				<img src="images/logo.png"><h1>Minh Hiếu Shop</h1>
			</div>
			<div class="nav-links">
				<ul>
					<li><a href="./Trangchu.php">Trang chủ</a></li>
					<li><a href="#thongtin">Thông tin</a></li>
					<li><a href="#top-bar">Liên hệ</a></li>
					<li><a href="./list.php">Cửa hàng</a></li>
				</ul>
			</div>
			<div class="nav-icons">
				<a href="./login.php"><i class="fas fa-user-circle"></i> </a>
				<a href="./cart.php"><i class="fas fa-shopping-cart"></i></a>
			</div>
		</nav>
	</header>

	


	<?php if(!empty($row)):?>
		<div class="row col-lg-8 border rounded mx-auto mt-5 p-2 shadow-lg">
			<div class="col-md-4 text-center">
				<img src="<?=get_image($row['image'])?>" class="img-fluid rounded" style="width: 180px;height:180px;object-fit: cover;">
				<div>

					<?php if(user('id') == $row['id']):?>

						<a href="profile-edit.php">
							<button class="mx-auto m-1 btn-sm btn btn-primary">Sửa</button>
						</a>
						<a href="profile-delete.php">
							<button class="mx-auto m-1 btn-sm btn btn-warning text-white">Hủy</button>
						</a>
						<a href="logout.php">
							<button class="mx-auto m-1 btn-sm btn btn-info text-white">Đăng xuất</button>
						</a>
					<?php endif;?>
				</div>
			</div>
			<div class="col-md-8">
				<div class="h2">Thông tin người dùng</div>
				<table class="table table-striped">
					<tr><th colspan="2">Thông tin:</th></tr>
					<tr><th><i class="bi bi-envelope"></i> Email</th><td><?=esc($row['email'])?></td></tr>
					<tr><th><i class="bi bi-person-circle"></i> Tên</th><td><?=esc($row['firstname'])?></td></tr>
					<tr><th><i class="bi bi-person-square"></i> Họ</th><td><?=esc($row['lastname'])?></td></tr>
					<tr><th><i class="bi bi-gender-ambiguous"></i> Giới tính</th><td><?=esc($row['gender'])?></td></tr>
				</table>
			</div>
		</div>
	<?php else:?>
		<div class="text-center alert alert-danger">Không tìm thấy dữ liệu</div>
		<a href="index.php">
			<button class="btn btn-primary m-4">Trang chủ</button>
		</a>
	<?php endif;?>
	<footer>
				<div class="top-bar">
					<div><img src="images/logo.png"><h1>Minh Hiếu Shop</h1></div>
					<p>Luôn mang đến những sản phẩm hàng đầu và tốt nhất cho các boss. Đảm bảo chất lượng và uy tín</p>
				</div>
				<div class="middle-bar">
					<div class="bar1">
						<h2>Hãy trở thành bạn đồng hành </h2>
						<p>Để nhận thông báo mới nhất về các sản phẩm, các sự kiện của cửa hàng</p>
						
						
						
					</div>
					<div class="bar2">
						<ul>
							<li><h2>Danh mục</h2></li>
							<li>Chó</li>
							<li>Mèo</li>
						</ul>
					</div>
					<div class="bar3">
						<ul>
							<li><h2>Thức ăn</h2></li>
							<li>Grade Fresh</li>
							<li>Dried Raw</li>
							<li>The Pantry</li>
							<li>Small Revirew</li>
							<li>Cat Nutrition</li>
						</ul>
					</div>
					<div class="bar4">
						<ul>
							<li><h2>Thông tin</h2></li>
							<li>FAQs</li>
							<li>Blog</li>
							<li>Youtube</li>
							<li>Facebook</li>
						</ul>
					</div>
					<div class="bar5">
						<h2>Liên lạc</h2>
						<div class="email info">
							<i class="far fa-envelope"></i>
							<span><h3>Email</h3><p>MinhHieu@gmail.com</p></span>
						</div>
						<div class="call info">
							<i class="fas fa-phone-alt"></i>
							<span><h3>Call</h3><p> 028 3722 1223 </p></span>
						</div>
						<div class="chat info">
							<i class="far fa-comment-dots"></i>
							<span><h3>Chat</h3><p>Open Live Chat</p></span>
						</div>
					</div>
				</div>
				<div class="bottom-bar">
					<div class="copyright">&copy; 2022 Minh Hiếu Shop</div>
					<div class="social-icons">
						<i class="fab fa-facebook"></i>
						<i class="fab fa-twitter"></i>
						<i class="fab fa-linkedin"></i>
					</div>
				</div>
			</footer>

</body>
</html>