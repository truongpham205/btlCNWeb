
<?php
	session_start();
	include_once('config.php');
	if(isset($_POST["register"])){
		$acc=$_POST['Acc'];
		$p1=(string)$_POST['Pass'];
		$p2=(string)$_POST['ConfirmPass'];
		if($acc=="" || $p1=="" || $p2=""){
			echo '<script>alert("Vui lòng nhập đủ thông tin") </script>';
		}
		if(isset($_POST["confirm"])){
				if(strcmp($p1,$p2)== 0){
					$sql_regis="select * from users where Acc='$acc' limit 1";
					$run_regis=mysqli_query($connect,$sql_regis);
					$count_regis=mysqli_num_rows($run_regis);
					if($count_regis > 0){
						echo '<script>alert("Đã tồn tại tài khoản")</script>';
					}else{
						$sql_regis1="insert into users ('Acc','Pass','Role') values ('$acc','$p1',2)";
						if (mysqli_query($connect, $sql_regis1)){
									echo '<script language="javascript">alert("Đăng ký thành công"); window.location="index.php";</script>';
								}
							}
				}else{
					echo '<script language="javascript">alert("Mật khẩu chưa trùng nhau"); window.location="register.php";</script>';
				}
	}else {
		echo '<script language="javascript">alert("Bạn chưa đồng ý điều kiện website"); window.location="register.php";</script>';
	}
}
 ?>

		<?php
			require('template/header.php');
		 ?>
		<div class="form-dangnhap">
			<div class="form">
				<h2>Đăng Ký</h2>
				<form action="register.php" method="post">
					<input type="text" class="form-control" placeholder="Tên đăng nhập" name="Acc"><br>
					<input type="text" class="form-control" id="txtPassword" placeholder="Mật khẩu" name="Pass"><br>
					<input type="text" class="form-control" id="txtConfirmPassword" placeholder="Nhập lại mật khẩu" name="ConfirmPass"><br>
					<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="defaultCheck" name="confirm">
						<label class="form-check-label" for="defaultCheck" >
							    Đồng ý với những điều khoản, điều lệ của Website
						</label>
					</div>
					<button type="submit" class="btn btn-success btn-lg btn-block" name="register">Đăng Ký</button>
				</form>
			</div>
		</div>

		<<?php
			require('template/footer.php');
		 ?>

	<!-- end footer -->
	</body>
</html>
