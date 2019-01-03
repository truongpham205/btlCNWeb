<!DOCTYPE html>
<?php
session_start();
include_once('config.php');
if(isset($_POST["login"])){
	$u=$_POST['username'];
	$p=$_POST['password'];
	if($u==""){
		echo '<script>alert("Vui lòng nhập tài khoản") </script>';
	}
	if($p==""){
		echo '<script>alert( "Vui lòng nhập mật khẩu") </script>';
	}
	else {
		$sql_login="select * from users where Name='$u' and Pass='$p' limit 1";
		$run_login=mysqli_query($connect,$sql_login);
		$count_login=mysqli_num_rows($run_login);
		if($count_login==0){
			echo '<script>alert("Sai tài khoản hay mật khẩu")</script>';
		}else{
			$_SESSION['user']=$u;
			echo '<script>alert("Đăng nhập thành công")</script>';
			header('location: index.php');
		}
	}
}
 ?>
		<?php
			require('template/header.php');
		 ?>
		<!-- End Header -->
		<div class="form-dangnhap">
					<div class="form" >
						<p>Đăng nhập</p>
						<form action="login.php" method="post">
							<input type="text" class="form-control" placeholder="Tên đăng nhập" name="username"><br>
							<input type="password" class="form-control" id="inputPassword" placeholder="Mật khẩu" name="password"><br>
							<div class="form-check">
							  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
							  <label class="form-check-label" for="defaultCheck1">
							    Nhớ mật khẩu?
							  </label>
							</div>
							<button type="submit" class="btn btn-danger btn-lg btn-block" name="login">Đăng Nhập</button><br>
							<p>or</p>
							<button type="button" class="btn btn-success btn-lg btn-block">Đăng Ký</button>
						</form>
					</div>
		</div>

		<?php
			require('template/footer.php');
		 ?>
	<!-- end .infomation -->
