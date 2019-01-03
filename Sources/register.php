
	<?php
		session_start();
		include_once('config.php');
		if(isset($_POST["register"])){
			$u=$_POST['username'];
			$p1=(string)$_POST['password1'];
			$p2=(string)$_POST['password2'];
			if($u=="" || $p1=="" || $p2=""){
				echo '<script>alert("Vui lòng nhập đủ thông tin") </script>';
			}
			
			if(isset($_POST["confirm"])){
					// $c = strcmp($p1,$p2);
					if(strcmp($p1,$p2) == '0'){
						$sql_regis="select * from user where Acc='$u' limit 1";
						$run_regis=mysqli_query($connect,$sql_regis);
						$count_regis=mysqli_num_rows($run_regis);
						if($count_regis > 0){
							echo '<script>alert("Đã tồn tại tài khoản")</script>';
						}else{
							$sql_regis1="insert into users values ('$u','$p1')";
							if (mysqli_query($connect, $sql_regis1)){
										echo '<script language="javascript">alert("Đăng ký thành công"); window.location="register.php";</script>';
									}
								}
					}else{
						echo '<script language="javascript">alert("Mật khẩu chưa trùng nhau"); window.location="register.php";</script>';
						// echo "<script type='text/javascript'>alert('$c');</script>";
					}
		}else {
			echo '<script language="javascript">alert("Bạn chưa đồng ý điều kiện website"); window.location="register.php";</script>';
		}
	?>

			<?php
				require('template/header.php');
			?>
			<!-- End Header -->
			<div class="form-dangnhap">
				<div class="form">
					<p>Đăng Ký</p>
					<form action="register.php" method="post">
						<input type="text" class="form-control" placeholder="Tên đăng nhập" name="username"><br>
						<input type="password" class="form-control" id="inputPassword" placeholder="Mật khẩu" name="password1"><br>
						<input type="password" class="form-control" id="inputPassword" placeholder="Xác nhận Mật khẩu" name="password2"><br>
						<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="confirm">
							<label class="form-check-label" for="defaultCheck1" >
									Đồng ý với những điều khoản, điều lệ của Website
							</label>
						</div>
						<button type="submit" class="btn btn-success btn-lg btn-block" name="register">Đăng Ký</button>
					</form>
				</div>
			</div>

			<?php
				require('template/footer.php');
			?>
	</body>
</html>
