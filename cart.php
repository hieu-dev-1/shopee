<?php
    session_start();
    require "./config/config.php";
    

    if(!$_SESSION["user_name"]) {
      header('Location: dangnhap.php');
    }

    if(isset($_GET['btn'])&&$_GET['btn']=="insert_cart"){
      $id = $_GET["pro_id"];
      $sql = "SELECT * FROM product where Product_ID=".$id;
      
      $result = mysqli_query($conn, $sql);
      
      if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          $Pro_ID= $row["Product_ID"];
          $Cart_Name= $row["Product_Name"];
          $Image= $row["Imge"];
          $Price_Root= $row["Price"];
          $Cate_ID= $row["Cate_ID"];
          $user_ID = $_SESSION["user_ID"];
          
          $sql = "insert into cart (Pro_ID,Cart_Name,Image,Price_Root,Cate_ID,user_ID) values(".$Pro_ID.",N'".$Cart_Name."',N'".$Image."',N'".$Price_Root."',".$Cate_ID.",".$user_ID.")";

          if (mysqli_query($conn, $sql)) {
            header('Location: cart.php');
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
        }
      } else {
        echo "0 results";
      }
    }
    if(isset($_GET['click'])&&$_GET['click']=="delete"){
      $id = $_GET["id"];
      $sql = "DELETE from cart where 	Cart_ID=".$id;
  
      if (mysqli_query($conn, $sql)) {
      } else {
        echo "Error deleting record: " . mysqli_error($conn);
      }
  
    }
    if (isset($_POST["insert_people"])) {
      $name_people = $_POST["name_people"];
      $email_people = $_POST["email_people"];
      $phone_people = $_POST["phone_people"];
      $add_people = $_POST["add_people"];
      $price= $_POST["price"];
      $sql = "insert into people(People_Name,People_Email,People_Phone,People_Add,Price) values(N'".$name_people."',N'".$email_people."',".$phone_people.",N'".$add_people."',N'".$price."')";

        if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
          header('Location: cart.php');
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css" >
  <link rel="stylesheet" href="./css/style_cart.css">
  <link rel="shortcut icon" href="./asset/css/img/logoE.png">
  <script src="https://unpkg.com/phosphor-icons"></script>

  <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
  <title>Giỏ hàng</title>
  <style>

    
    .cart--table {
      width: 55%;
    }

    .number--input input {
      margin-left: 35%;
      width: 2vw;
      outline: none;
      background-color: aliceblue;
      border: none;
    }

    .push_btn {
      align-items: center;
      width: 100%;border: none;
      background-color: transparent;
    }
    .cart--Firstly>.container {
      display: flex;
      justify-content: space-between;
    }
  </style>
</head>
<body>
<div class="top-shopee">
            <div class="top-container" >
                <div class="shopee-navbar" >
                    <div class="left-navbar">
                        <a href="#" >Kênh người bán</a>
                        <a href="#" >Trở thành Người bán Shopee</a>
                        <a href="#" >Tải ứng dụng</a>
                        <a href="#" >Kết nối <i class="fab fa-facebook"></i> <i class="fab fa-instagram"></i></a>
                    </div>
                    <div style="height: 20px;" class="right-navbar">
                        <a href="#"  ><i class="far fa-bell"></i> Thông báo</a>
                        <a href="#"  >Hỗ trợ</a>
                        
                        
                        <?php 
                            if(isset($_SESSION["user_name"])) {
                                
                                echo '<div style="padding-left: 5px; display: flex;color: #fff">';
                                echo "<i style='padding-right: 6px;font-size: 16px;margin-top: 3px;' class='far fa-user'></i>";
                                echo "<p style ='font-size:16px'>".$_SESSION["user_name"]."</p>";
                                echo '</div>';
                                    
                            } else {
                                echo "<a href='dangky.php' style='border-right: 1px solid #fff;' >Đăng kí</a>";
                                echo "<a href='dangnhap.php'  >Đăng nhập</a>";
                            }
                                
                        ?>
                    </div>
                </div>
            </div>

            <div class="top-container">
                <div class="bot-banner" >

                    <a href="index.php" ><img src="image/logo2.jpeg" alt="" style="width: 170px;padding-right: 20px;;" ></a>
                    <div class="search">
                        <div class="top-search" >
                            <div style="display: flex;flex: 1 1 100%;">
                                <form >
                                    <input placeholder="Tìm kiếm" maxlength="100" action="" >
                                </form>
                            </div>
                            <button type="button"><i class="fas fa-search"></i></button>
                        </div>
                        
                    </div>

                    <div style="width: 190px;display: flex;align-items: center;justify-content: center;">
                        <a href="cart.php"><i class="fas fa-shopping-cart" style="font-size: 25px;color: #fff;"></i></a>
                    </div>

                 </div>
            </div>
        </div>

    <!-- cart -->

    <div class="cart--Firstly">
      <div class="container">
          <div style="margin-top: 0;" class="cart--from">
              <div class="cart--title">
                  <span>Giỏ Hàng</span>
              </div>
          </div>

          <div style="margin-top: 0; " class="cart--from">
              <div class="cart--title">
                  <span>Trang chủ</span>
              </div>
          </div>
      </div>
    </div>
    <div class="cart--body">
        <div class="container">
            <div class="body--box box">
                <div class="cart--ship">
                    <i class="fas fa-truck"></i>
                </div>
                <div class="cart--text">
                    <span>Nhấn vào mục Mã giảm giá ở cuối trang để hưởng miễn phí vận chuyển nhé!</span>
                </div>
            </div>
            <div class="body--box1 box">
                <div class="cart--product">
                    <div class="box--check">
                    <input style="font-size: 50px" type="checkbox">
                    </div>
                    <div class="shop--name">
                    <span class="cart--text">Sản Phẩm</span>
                    </div>
                </div>
                <div  class="cart--table">
                    <div class="table--price">
                    <span class="cart--text">Đơn Giá</span>
                    </div>
                    <div class="table--number">
                    <span class="cart--text"> Số Lượng</span>
                    </div>
                    <div class="table--money">
                    <span class="cart--text">Số Tiền</span>
                    </div>
                    <div class="table--operation">
                    <span class="cart--text">Thao Tác</span>
                    </div>
                </div>
            </div>
            
            <?php

              $name = array();

              $up = 0;

              $user_ID = $_SESSION["user_ID"];
              $sql = "SELECT * FROM cart WHERE user_ID=$user_ID order by Cart_ID DESC";
              $result = mysqli_query($conn, $sql);

              if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
                array_push($name,$row['Cart_ID']);
                $up+=1;
                echo '<div class="body--box2 box">
                        <div class="cart--product" style="border-bottom: #fde198 1px solid;">
                            <div class="box--check">
                ';
                echo"<input style='font-size: 50px' id='".$row["Cart_ID"]."_2"."' type='checkbox' >";
                echo'</div>
                            <div class="shop--love cart--text">
                              <span>Yêu thích</span>
                            </div>
                            <div class="shop--name">
                              <span class="cart--text">Express Shop</span>
                            </div>
                              <div class="mess--icon">
                              <i class="fas fa-envelope"></i>
                            </div>
                        </div>
                        <div class="shop--contens" style="border-bottom: #fde198 1px solid;"  >
                          <div class="contens--body" style="width: 47%;">
                            <div class="box--check">
                ';
                
                echo"<input style='font-size: 50px'  type='checkbox' onclick='buy_cart()' id='".$row["Cart_ID"]."_check"."'>";
                echo '
                  </div>
                  <div class="body--img">
                ';
                echo "<img src='".$row["Image"]."' alt='Express'>";
  
                echo '
                  </div>
                  <div style="width: 40%;" class="name--product cart--text">
                ';
                echo "<span>".$row["Cart_Name"]."</span>"; 
  
                echo '
                        </div>
                        <div >
                            <div class="type--text">
                            <span></span>
                            
                        </div>
                        <div class="type--volum">
                            <span></span>
                        </div>
                      </div>
                  </div>
                  <div style="width: 750px;" class="cart--table">
                      <div class="table--price">
                ';
                echo "<span  style='font-size: 13px;' id='price_root' class='price--text__sale'>".$row["Price_Root"]."</span>";
                echo '
                  </div>
                  <div class="table--number">
                      <div class="number--reduce">
                ';
                echo" <span style='margin-left:0;'><input style='align-items: center;width: 100%;border: none;background-color: transparent;' type='button' value='-' id='dec'  onclick='var id_click=".$row["Cart_ID"].";var result = document.getElementById(id_click); var qty = Number(result.value); if(qty>1) {qty = qty - 1};document.getElementById(id_click).value = qty; var pris = result.name; var prices = sum_price(pris,qty); var price_out = price_sp(prices); var id_up =$up; up_price(id_up,price_out)'/></span>";
                echo'</div>
                      <div class="number--input">
                ';
                echo"<input id='".$row["Cart_ID"]."' name='".$row["Price_Root"]."' type='text' min='1' value='1' />";
                echo'
                      </div>
                      <div class="number--plus">
                ';
                echo"<span style='margin-left:0;'><input class='push_btn'  type='button' value='+' id='inc'  onclick='var id_click=".$row["Cart_ID"].";var result = document.getElementById(id_click); var qty = Number(result.value); var qty = qty + 1;document.getElementById(id_click).value = qty; var pris = result.name; var prices = sum_price(pris,qty); var price_out = price_sp(prices); var id_up =$up; up_price(id_up,price_out)'/></span>";
                echo'</div>
                  </div>
                  <div class="table--money">
                ';
                echo "<span class='price--text__saleopen' id='$up' style='color: rgb(238, 77, 45);'>".$row["Price_Root"]."</span>";            
                echo '          
                            </div>
                            <div class="table--operation">
                                <span><a style="color: black; text-decoration: none;" href="cart.php?click=delete&id='.$row["Cart_ID"].'" class="cart--text">Xóa</a></span>
                                
                            </div>
                        </div>
                    </div>
                    <div class="cart--product" style="border-bottom: #fde198 1px solid;">
                        <div class="box--check">
                        <i class="fas fa-tags" style="margin-left: 3vw;color: rgb(238, 77, 45);"></i>
                        </div>
                        <div class="shop--name">
                        <span class="cart--text">Shop Voucher giảm đến ₫2tr</span>
                        </div>
                        <div class="mess--icon cart--text">
                        <a href="#">Xem thêm voucher</a>
                        </div>
                    </div>
                    <div class="cart--product box">
                        <div class="box--check">
                        <i class="fas fa-truck-moving" style="margin-left: 3vw;color: rgb(28, 197, 197);"></i>
                        </div>
                        <div class="shop--name">
                        <span class="cart--text">Giảm ₫25.000 phí vận chuyển đơn tối thiểu ₫50.000; Giảm ₫70.000 phí vận chuyển đơn tối thiểu ₫300.000</span>
                        </div>
                        <div class="mess--icon cart--text">
                        <a href="#">Tìm hiểu thêm</a>
                        </div>
                    </div>
                ';
              }
              } else {
              echo '<p style="color: rgb(238, 77, 45);">*Bạn chưa mua sản phẩm nào!</p>';
              }

              mysqli_close($conn);
            ?>
            

            <div style="height: 25vh;"></div>

        </div>
    </div>
    
    <div class="body--box3 box">
      <div class="cart-voucher">
        <div class="vocher--list">
          <div class="voucher--shoppe">
            <i class="fas fa-scroll" style="color: rgb(238, 77, 45);"></i>
            <span>Shop Voucher</span>
          </div>
          <div class="voucher--code">
            <span>Chọn hoặc nhập mã</span>
          </div>
        </div>
      </div>
      <!-- ---------------------- -->
      <div class="cart-voucher">
        <div class="vocher--list">
          <div class="voucher--shoppe">
            <i class="fas fa-coins" style="color: rgb(238, 77, 45);"></i>
            <span>Shop Xu:</span>
            <span class="cart--text">Sử dụng Xu</span>
          </div>
          <div class="voucher--code">
            <span style="opacity: 0.5;">0đ</span>
          </div>
        </div>
        <div class="cart--buy">
          <div class="cart--take">
            <!-- <div class="box--check">
              
            </div> -->
            <span class="cart--text"></span>
            <span class="cart--text" style="color: rgb(238, 77, 45);margin: 0 300px 0 0;">Thanh toán:</span>
            <!-- <span class="cart--text">Bỏ sản phẩm không hoạt động</span>
            <span class="cart--text" style="color: rgb(238, 77, 45);">Lưu vào mục Đã thích</span> -->
          </div>
          <div  style="width: 100vw" class="cart--pay">
            
            <div>
              <span class="cart--text">Tổng thanh toán:</span>
              <span id="sbm" style="color: rgb(238, 77, 45);">0.000 đ</span>
            </div>
              
            <!-- <span >Đặt hàng</span> -->
            <div onclick='buy()' id='buy' class="cart--buying disabled" >
              <span style="padding: 10px;border-radius: 5px" >Thanh toán</span>
            </div>
            
              
              <div class="cod-md-12">
                <div id="paypal-button"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    <script type="text/javascript">

      function plus_sp(a) {
        if(!isNaN(a)) {
          a += 1;
        }
        return a;
      }

      function sum_price(str,a) {
        var t=str.split(' ');
        t.pop();
        var d = String(t)
        var c = d.split('.');
        var y = c.join("");
        z = Number(y);
        k = z*a;
        return k;

      }

      function price_sp(k) {
        function formatNumber(num) {
          return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
        }
        var b = formatNumber(k);
        price = String(b) + " đ";
        return price;
      }

      function incPlus(a) {
        var result = document.getElementById(a);
        var qty = Number(result.value);
        var qty =  plus_sp(qty);
        document.getElementById(a).value = qty;
      }

      function up_price(str,price) {
        document.getElementById(str).innerHTML = price;
      }

      
      function buy_cart() {
        var sum_priceBuy = 0;
        var check = false;
        var id_sp = <?php  echo json_encode($name); ?>;
        console.log(id_sp);

        for(var i = 0; i < id_sp.length; i++) {
          console.log(id_sp[i]);
          var check_3 = id_sp[i] + "_check"
          var checkbox = document.getElementById(check_3);
          var ck2 = id_sp[i] + "_2";
          console.log(ck2)
          var checkbox2 = document.getElementById(ck2);
          t = checkbox.checked;
          console.log(t);
          if (t === true) { 
            var c = document.querySelectorAll(".price--text__saleopen");
            checkbox2.checked = true;
            var price = c[i].innerHTML;
            var pr = sum_price(price,1);
            sum_priceBuy += pr;
            console.log(sum_priceBuy);
            var price_retu = price_sp(sum_priceBuy);
            
            document.getElementById("sbm").innerHTML = price_retu;
            
            check = true;
          } else {
            checkbox2.checked = false;
          }
        }
        if (check == false) {
          document.getElementById("sbm").innerHTML = "0.000 đ";
          
        }

      }

      function buy() {
        
        var check_prices = document.getElementById('sbm');
        var success = check_prices.innerHTML;
        console.log(  success );
        if (success != String("0.000 đ") && success != "") {
          alert("Mua thành công!");
        } else {
          alert("Vui lòng chọn sản phẩm!");
        }

      }

    </script>
    
</body>
</html>