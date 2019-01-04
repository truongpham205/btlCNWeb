<!DOCTYPE html>
<html lang="vi">
	<head>
		<title>Web truyện</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<script src="js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.js"></script>
		<script src="js/script.js"></script>
		<script type="text/javascript">
				function searchProduct(){
					var win=window.open('listStory.php','_blank');
					if(win){
						win.focus();
					}
				}

        function loadRegister(){
					var win=window.open('register.php');
					if(win){
						win.focus();
					}
				}
		</script>
	</head>
	<body>
		<header>
			<nav class="navbar">
				<div class="container">
					<div class="navbar-header">
						<a href="index.php"><img src="images/logo.png" alt=""></a>
					</div>
				<nav class="navbar navbar-expand-lg navbar-right">
					<div class="container">
						<div class="collapse navbar-collapse" id="navbarNavDropdown">
							<?php
								if(!isset($_SESSION)){
									session_start();
								}
								if(isset($_SESSION['user'])){
									?>
									<ul class="nav navbar-nav">
											<?php  echo '<li class="nav-item"> <a class="nav-link" href="#">Chào, '.$_SESSION['user'].' </a> </li>' ; ?>
											<li class="nav-item active"><a class="nav-link" href="index.php">Trang chủ<span class="sr-only">(current)</span></a></li>
											<li class="nav-item"> <a class="nav-link" href="info-user.php">Thông tin</a> </li>
											<li class="nav-item"> <a class="nav-link" href="addStory.php">Đăng truyện</a> </li>
											<li class="nav-item"> <a class="nav-link" href="logout.php">Đăng xuất</a> </li>
									</ul>
										<?php
								}
								else{
									?>
									<ul class="nav navbar-nav">
										<li class="nav-item active"><a class="nav-link" href="index.php">Trang chủ<span class="sr-only">(current)</span></a></li>
										<li class="nav-item"><a class="nav-link" href="login.php">Đăng nhập</a></li>
									</ul>
									<?php
								}
								?>
						</div>
					</div>
				</nav>
				<div class="" id="bs-example-navbar-collapse-1" class="nav navbar-nav navbar-right">
				</div>
			</nav>
		</header>
	</body>
</html>
