<?php
    session_start();
    require "./config/config.php";
    
    if (isset($_POST["login"])) {
        
        $user = $_POST["user_name"];
        $pass = md5($_POST["pass_word"]);
        $sql = "SELECT * FROM user where user_name='".$user."' and pass_word='".$pass."'";  

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $_SESSION["user_name"] = "$user";
            header('Location: index.php');
        } else {
            echo "<span style='color: red;position: absolute;top:47vh;right: 26vw;font-size: 12px;'>*Sai tên đăng nhập hoặc mật khẩu!</span>";
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
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="./css/style_login.css">
</head>
<body>
    <div class="cart--login">
        <div class="container">
            <div class="login--navbar">
                <div class="navbar--logo">
                    <img src="./img/logo.png" alt="">
                    <span>Đăng nhập</span>
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
                    <span class="login--magin">Đăng nhập</span>
                    
                </div>
                <div class="right--body">
                    <div class="body--user login--magin">
                        <form action="#" method="post">
                            <input class="user--input" type="text" name="user_name" placeholder="Email/Số điện thoại/Tên Đăng nhập">
                            <div class="body--pass login--top">
                                <input class="user--input" type="password" name="pass_word" placeholder="Mật khẩu">
                            </div>
                            <div class="login--top">
                                <input class="body--submit" type="submit" name="login" value="ĐĂNG NHẬP">
                            </div>
                        </form>
                    </div>
                    <div class="supper">

                        <div class="body--forget login--magin">
                            <a href="#">Quên mật khẩu</a>
                            <a href="#">Đăng nhập với SMS</a>
                        </div>
                        <div class="right--befor">
                            <span>Bạn mới biết đến Shop? </span>
                            <a href="dangky.php" style="color: #ff0000;margin-left: 0.2vw; text-decoration: none;">Đăng kí</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>