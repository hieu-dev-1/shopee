<?php
	
	require "config.php";
	if(isset($_POST["register"]))
	{
		$us = $_POST["us"];
		$pw = $_POST["pw"];
        $un = $_POST["un"];
        $u = $_POST["u"];
        $ulive = $_POST["ulive"];
        $uemail = $_POST["uemail"];
        $sql = "INSERT INTO user (user_id, user_name, user_birth, user_living, user_email, user_cart, user_pw, user_ds) VALUES (NULL, '".$un."', '".$u."', '".$ulive."', '".$uemail."', '', '".$pw."', '".$us."')";
        if (mysqli_query($conn, $sql)) {
            echo "Bạn đã tạo tài khoản thành công";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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
			<h3 style="text-align:center">Trang đăng ky</h3>
			<form action="register.php" method="post" >
				Tên Đăng Nhập:
				<input type="text" name="us" >
				Mật khẩu:
				<input type="password" name="pw">
                Tên người dùng:
                <input type="text" name="un">
                Ngày / Tháng / Năm sinh:
                <input type="text" name="u">
                Nơi sống:
                <input type="text" name="ulive">
                Email:
                <input type="text" name="uemail">
				<input type="submit" class="btn btn-primary" name="register" value="Đăng ky">
			</form>
        </div>
	</body>
</html>