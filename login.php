<?php
	
	require "config.php";
	if(isset($_POST["login"]))
	{
		$us = $_POST["us"];
		$pw = $_POST["pw"];
		$sql = "SELECT * FROM user where user_ds ='".$us."' and user_pw ='".$pw."'";
						
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			header("Location:user.php");
		}
		else
		{
			echo "<p style='color:red'>Sai tên đăng nhập hoặc mật khẩu</p>";
		}
	}
?>
<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="utf-8">
	
	</head>
	<body>
		<div class="container">
			<h3 style="text-align:center">Trang đăng nhập</h3>
			<form action="login.php" method="post" >
				Tên Đăng Nhập:
				<input type="text" name="us" >
				Mật khẩu:
				<input type="password" name="pw">
				<input type="submit" class="btn btn-primary" name="login" value="Đăng nhập">
			</form>
		<div>
	</body>
</html>