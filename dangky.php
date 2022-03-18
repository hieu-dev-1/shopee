<?php
    require "./config/config.php";

    if (isset($_POST["insert_user"])) {

		if($_POST["user_name"]!=""&& $_POST["pass_word"]!=""&& $_POST["pass_word"]==$_POST["again_pass"]){

            $user_name = $_POST["user_name"];
			$pass_word = md5($_POST["pass_word"]);
			
			$sql = "insert into user (user_name,pass_word) values(N'".$user_name."',N'".$pass_word."')";
            
			if (mysqli_query($conn, $sql)) {
                // Đăng ký thành công!
                header('Location: dangnhap.php');
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

            
		} else {
            echo "<span style='color: red;position: absolute;top:55vh;right: 33vw;font-size: 12px;'>*Không hợp lệ!</span>";
        }
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Đăng ký</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <div class="cart--login">
        <div class="container">
            <div class="login--navbar">
                <div class="navbar--logo">
                    <img src="./img/logo.png" alt="">
                    <span>Đăng ký</span>
                </div>
                <div class="login--suppot">
                    <a href="#">Cần trợ giúp?</a>
                </div>
            </div>
        </div>
    </div>
    <div class="login--body">
        <div class="container">
            <div class="body--right">
                <div class="right--appter">
                    <span class="login--magin">Đăng ký</span>
                </div>
                <div class="right--body">
                    <div class="body--user login--magin">
                        <form action="dangky.php" method="post">
                            <input class="user--input" type="text" name="user_name" placeholder="Email/Số điện thoại/Tên Đăng ký">
                            <div class="body--pass login--top">
                                <input class="user--input" type="password" name="pass_word" placeholder="Mật khẩu">
                            </div>
                            <div class="body--pass login--top">
                                <input class="user--input" type="password" name="again_pass" placeholder="Nhập lại mật khẩu">
                            </div>
                            <div class="login--top">
                                <input class="body--submit" type="submit" name="insert_user" value="ĐĂNG KÝ">
                            </div>
                        </form>
                    </div>
                    <div class="supper" style="margin-top: 30vh;">
                        <div class="body--forget login--magin body__end" style="display: block;">
                            <span style="font-size: 14px; margin-left: 1.5vw;">Bằng việc đăng kí, bạn đã đồng ý với Shop về </span>
                            <span style="font-size: 14px; margin-left: 2.2vw;"><span style="color: #ee4d2d;">Điều khoản dịch vụ</span> & <span style="color: #ee4d2d;">Chính sách bảo mật</span></span>
                        </div>
                    </div>
                    <div style="margin-top: 30;" class="right--befor">
                        <span>Bạn đã có tài khoản?</span>
                        <a href="dangnhap.php" style="color: #ff0000;margin-left: 0.2vw; text-decoration: none;">Đăng nhập</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>