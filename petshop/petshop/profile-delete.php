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
	<title>Delete Profile</title>
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
				<img src="<?=get_image($row['image'])?>" class="js-image img-fluid rounded" style="width: 180px;height:180px;object-fit: cover;">

			</div>
			<div class="col-md-8">
				
				<div class="h2">Hủy đăng ký</div>

				<div class="alert-danger alert text-center my-2">Bạn chắc chắn muốn hủy đăng ký chứ!</div>

				<form method="post" onsubmit="myaction.collect_data(event, 'profile-delete')">
					<table class="table table-striped">
						<tr><th colspan="2">Thông tin:</th></tr>
						<tr><th><i class="bi bi-envelope"></i> Email</th>
							<td>
								<div class="form-control" ><?=$row['email']?></div>
								<div><small class="js-error js-error-email text-danger"></small></div>
							</td>
						</tr>
						<tr><th><i class="bi bi-person-circle"></i> Tên</th>
							<td>
								<div class="form-control" name="firstname" ><?=$row['firstname']?></div>
								<div><small class="js-error js-error-firstname text-danger"></small></div>
							</td>
						</tr>
						<tr><th><i class="bi bi-person-square"></i> Họ</th>
							<td>
								<div class="form-control" ><?=$row['lastname']?></div>
								<div><small class="js-error js-error-lastname text-danger"></small></div>
							</td>
						</tr>
 
					</table>

					<div class="progress my-3 d-none">
					  <div class="progress-bar" role="progressbar" style="width: 50%;" >Working... 25%</div>
					</div>

					<div class="p-2">
						
						<button class="btn btn-danger float-end">Hủy</button>
						
						<a href="index.php">
							<label class="btn btn-secondary">Trở về</label>
						</a>

					</div>
				</form>

			</div>
		</div>

	<?php else:?>
		<div class="text-center alert alert-danger">Không có dữ liệu</div>
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

<script>


	var myaction  = 
	{
		collect_data: function(e, data_type)
		{
			e.preventDefault();
			e.stopPropagation();

 			let myform = new FormData();
			myform.append('data_type',data_type);
			myform.append('id',<?=$row['id'] ?? 0 ?>);

 
			myaction.send_data(myform);
		},

		send_data: function (form)
		{

			var ajax = new XMLHttpRequest();

			document.querySelector(".progress").classList.remove("d-none");

			//reset the prog bar
			document.querySelector(".progress-bar").style.width = "0%";
			document.querySelector(".progress-bar").innerHTML = "Working... 0%";

			ajax.addEventListener('readystatechange', function(){

				if(ajax.readyState == 4)
				{
					if(ajax.status == 200)
					{
						//all good
						myaction.handle_result(ajax.responseText);
					}else{
						console.log(ajax);
						alert("An error occurred");
					}
				}
			});

			ajax.upload.addEventListener('progress', function(e){

				let percent = Math.round((e.loaded / e.total) * 100);
				document.querySelector(".progress-bar").style.width = percent + "%";
				document.querySelector(".progress-bar").innerHTML = "Working..." + percent + "%";
			});

			ajax.open('post','ajax.php', true);
			ajax.send(form);
		},

		handle_result: function (result)
		{
			console.log(result);
			var obj = JSON.parse(result);
			if(obj.success)
			{
				alert("Profile deleted successfully!");
				window.location.href = 'logout.php';
			}else{

				//show errors
				let error_inputs = document.querySelectorAll(".js-error");

				//empty all errors
				for (var i = 0; i < error_inputs.length; i++) {
					error_inputs[i].innerHTML = "";
				}

				//display errors
				for(key in obj.errors)
				{
					document.querySelector(".js-error-"+key).innerHTML = obj.errors[key];
				}
			}
		}
	};

</script>
