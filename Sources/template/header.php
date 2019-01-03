<!DOCTYPE html>
<html lang="vi">
	<head>
		<title>Web truyện tranh</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="bootstrap/js/bootstrap.js"></script>
		<script src="js/script.js"></script>
	</head>
	<body>
		<nav class="navbar">
			<div class="container">
				<div class="navbar-header">
					<a href="index.php"><img src="images/logo.png" alt=""></a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<?php
							if(!isset($_SESSION)){
								session_start();
							}
							if(isset($_SESSION['user'])){
								 ?>
								 <ul class="nav navbar-nav navbar-right">
									 <?php  echo '<li> <a href="#">Chào, '.$_SESSION['user'].' </a> </li>' ; ?>
									 <li> <a href="">Truyện </a> </li>
									 <li> <a href="">Thông tin</a> </li>
									 <li> <a href="">Đăng truyện</a> </li>
								  <li> <a href="logout.php">Đăng xuất</a> </li>
								 </ul>
								 	<?php
							}
							else{
								?>
								<ul class="nav navbar-nav navbar-right">
									<li><a href="">Truyện</a></li>
									<li><a href="login.php">Đăng nhập</a></li>
								</ul>
								<?php
							}
							?>
				</div>
			</div>
		</nav>

	<!-- end header -->
