<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>signup</title>
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


	<form method="post" onsubmit="myaction.collect_data(event, 'signup')">
		<div class="col-md-8 col-lg-4 border rounded mx-auto mt-5 p-4 shadow">
			
			<div class="h2">Đăng ký</div>
			
			<div class="input-group mt-3">
			  <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-circle"></i></span>
			  <input name="firstname" type="text" class="form-control p-3" placeholder="Tên" >
			</div>
			<div><small class="js-error js-error-firstname text-danger"></small></div>

			<div class="input-group mt-3">
			  <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-square"></i></span>
			  <input name="lastname" type="text" class="form-control p-3" placeholder="Họ" >
			</div>
			<div><small class="js-error js-error-lastname text-danger"></small></div>

			<div class="input-group mt-3">
			  <span class="input-group-text" id="basic-addon1"><i class="bi bi-gender-ambiguous"></i></span>
			  <select class="form-select" name="gender">
			  	  <option selected value="">--Giới tính--</option>
				  <option value="Male">Nam</option>
				  <option value="Female">Nữ</option>
			  </select>
			</div>
			<div><small class="js-error js-error-gender text-danger"></small></div>
			
			<div class="input-group mt-3">
			  <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope"></i></span>
			  <input name="email" type="text" class="form-control p-3" placeholder="Email" >
			</div>
			<div><small class="js-error js-error-email text-danger"></small></div>
			
			<div class="input-group mt-3">
			  <span class="input-group-text" id="basic-addon1"><i class="bi bi-key"></i></span>
			  <input name="password" type="password" class="form-control p-3" placeholder="Mật khẩu" >
			</div>
			<div><small class="js-error js-error-password text-danger"></small></div>

			<div class="input-group mt-3">
			  <span class="input-group-text" id="basic-addon1"><i class="bi bi-key-fill"></i></span>
			  <input name="retype_password" type="password" class="form-control p-3" placeholder="Nhập lại mật khẩu" >
			</div>

			<div class="progress mt-3 d-none">
			  <div class="progress-bar" role="progressbar" style="width: 50%;" >Đang tải... 25%</div>
			</div>

			<button class="mt-3 btn btn-primary col-12">Đăng ký</button>
			<div class="m-2">
				Đã đăng ký <a href="login.php">Đăng nhập ở đây!</a>
			</div>

		</div>
	</form>

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

			var inputs = document.querySelectorAll("form input, form select");
			let myform = new FormData();
			myform.append('data_type',data_type);

			for (var i = 0; i < inputs.length; i++) {

				myform.append(inputs[i].name, inputs[i].value);
			}

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
				alert("Profile created successfully");
				window.location.href = 'login.php';
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
