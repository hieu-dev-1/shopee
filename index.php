<?php
    session_start();
    require "./config/config.php";
    if(isset($_SESSION["user_name"])) {
        $user_name = $_SESSION["user_name"];
        $sql = "SELECT * FROM user where user_name='$user_name'";
  
        $result = mysqli_query($conn, $sql);
  
        if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
            
            $_SESSION["user_ID"] = $row["user_ID"];
            
          }
        } else {
          echo "0 results";
        }
      }
?>
<!DOCTYPE html>
<html lang="vi">

    <head>
        <meta charset="UTF-8" >
        <title>Shopee</title>
        <link rel="icon" href="image/logo.jpeg" >
        <link rel="stylesheet" href="css/style.css" >
        <script src="https://kit.fontawesome.com/9d79513337.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    

    <body>

        <!-- Header -->
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
                                <form style="display: flex;width:100%" action="index.php" method="post">
                                    <input placeholder="Tìm kiếm" name="seach"  maxlength="100" >
                                    <button name="btn_seach"  type="submit"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        
                    </div>

                    <div style="width: 190px;display: flex;align-items: center;justify-content: center;">
                        <a href="cart.php"><i class="fas fa-shopping-cart" style="font-size: 25px;color: #fff;"></i></a>
                    </div>

                 </div>
            </div>
        </div>

        <!-- Content -->
        <div class="content">
            <div style="position: fixed;right: 30px;bottom: 100px;" >
                <a href="" ><img src="image/icon-sale.png" ></a>
            </div>
            <div class="content_container">
                <div class="content-slide">
                    <div class="top-slide">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                              <button style="width: 8px;height: 8px;border-radius: 100%;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                              <button style="width: 8px;height: 8px;border-radius: 100%;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                              <button style="width: 8px;height: 8px;border-radius: 100%;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                              <button style="width: 8px;height: 8px;border-radius: 100%;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                              <button style="width: 8px;height: 8px;border-radius: 100%;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                              <button style="width: 8px;height: 8px;border-radius: 100%;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                              <button style="width: 8px;height: 8px;border-radius: 100%;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
                              <button style="width: 8px;height: 8px;border-radius: 100%;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
                              <button style="width: 8px;height: 8px;border-radius: 100%;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 9"></button>
                              <button style="width: 8px;height: 8px;border-radius: 100%;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9" aria-label="Slide 10"></button>
                              <button style="width: 8px;height: 8px;border-radius: 100%;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="10" aria-label="Slide 11"></button>
                            </div>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="image/truot1.png" class="d-block w-100" alt="">
                              </div>
                              <div class="carousel-item">
                                <img src="image/truot2.png" class="d-block w-100" alt="">
                              </div>
                              <div class="carousel-item">
                                <img src="image/truot3.png" class="d-block w-100" alt="">
                              </div>
                              <div class="carousel-item">
                                <img src="image/truot4.png" class="d-block w-100" alt="">
                              </div>
                              <div class="carousel-item">
                                <img src="image/truot5.png" class="d-block w-100" alt="">
                              </div>
                              <div class="carousel-item">
                                <img src="image/truot6.png" class="d-block w-100" alt="">
                              </div>
                              <div class="carousel-item">
                                <img src="image/truot7.png" class="d-block w-100" alt="">
                              </div>
                              <div class="carousel-item">
                                <img src="image/truot8.png" class="d-block w-100" alt="">
                              </div>
                              <div class="carousel-item">
                                <img src="image/truot9.png" class="d-block w-100" alt="">
                              </div>
                              <div class="carousel-item">
                                <img src="image/truot10.png" class="d-block w-100" alt="">
                              </div>
                              <div class="carousel-item">
                                <img src="image/truot11.png" class="d-block w-100" alt="">
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="top-right-slide">
                        <div style="height: 118px;">
                            <a href="" ><img src="image/c1.png" alt="" ></a>
                        </div>
                        <div style="height: 118px;margin-top: 4px;">
                            <a href="" ><img src="image/c2.png" alt="" ></a>
                        </div>
                    </div>
                </div>

                <div class="top-icon">
                    <a href="" >
                        <div style="width: 100px;height: 100%;margin-top: 15px;">
                            <div><img src="image/icon1.png" alt="" ></div>
                            <div>Tech Zone - Siêu thị điện tử</div>
                        </div>
                    </a>
                    <a href="" >
                        <div style="width: 100px;height: 100%;margin-top: 15px;">
                            <div><img src="image/icon2.png" alt="" ></div>
                            <div>Gì Cũng Rẻ - Từ 1K</div>
                        </div>
                    </a>
                    <a href="" >
                        <div style="width: 100px;height: 100%;margin-top: 15px;">
                            <div><img src="image/icon3.png" alt="" ></div>
                            <div>Hoàn xu 10% - Đơn từ 0Đ</div>
                        </div>
                    </a>
                    <a href="" >
                        <div style="width: 100px;height: 100%;margin-top: 15px;">
                            <div><img src="image/icon4.png" alt="" ></div>
                            <div>Nạp Thẻ, Hóa Đơn</div>
                        </div>
                    </a>
                    <a href="" >
                        <div style="width: 100px;height: 100%;margin-top: 15px;">
                            <div><img src="image/icon5.png" alt="" ></div>
                            <div>Shopee Số Gì Đây</div>
                        </div>
                    </a>
                    <a href="" >
                        <div style="width: 100px;height: 100%;margin-top: 15px;">
                            <div><img src="image/icon6.png" alt="" ></div>
                            <div>Freeship Extra</div>
                        </div>
                    </a>
                    <a href="" >
                        <div style="width: 100px;height: 100%;margin-top: 15px;">
                            <div><img src="image/icon7.png" alt="" ></div>
                            <div>Hàng Hiệu -50%</div>
                        </div>
                    </a>
                    <a href="" >
                        <div style="width: 100px;height: 100%;margin-top: 15px;">
                            <div><img src="image/icon8.png" alt="" ></div>
                            <div>Hàng Quốc Tế - Thương Hiệu</div>
                        </div>
                    </a>
                    <a href="" >
                        <div style="width: 100px;height: 100%;margin-top: 15px;">
                            <div><img src="image/icon9.png" alt="" ></div>
                            <div>Mừng Ngày Xuống Phố</div>
                        </div>
                    </a>
                </div>

                <!-- -->
                <div class="bot-icon">
                    <a href=""><img src="image/h1.png" style="width: 100%;height: 100%;"></a>
                </div>

                <!--Sieu sale -->
                
                <?php
                    if(isset($_POST["btn_seach"])) {
                        $seach=$_POST["seach"];
                        $sql = "SELECT * FROM product where Product_Name like '%".$seach."%'";
                        $result = mysqli_query($conn, $sql);
                        echo '
                        <div class="tim-kiem-hang-dau" >
                            <button id="nut116" class="nut-truot" onclick="left_nut66()" style="left: -15px;display:none;"><</button>
                            <button id="nut1166" class="nut-truot" onclick="nut66()" style="left: -15px;display:none;"><</button>
                            <button id="nut226" class="nut-truot" onclick="nut66()" style="right: -15px;display: block;">></button>
                            <button id="nut2266" class="nut-truot" onclick="right_nut66()" style="right: -15px;display:none;">></button>
                        <div style="overflow: hidden;">
                        ';
                        echo '<ul id="danh-muc-4" >';
                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {                 
                            
                                if($row["Status"] !=0){  
                                        echo' <li>';
                                        echo     '<a href="cart.php?btn=insert_cart&pro_id='.$row["Product_ID"].'" >';
                                        echo          '<div class="hang-66" >';
                                        echo                  '<img src="'.$row["Imge"].'" alt="" >';
                                        echo                  " ".$row["Product_Name"]."";
                                        echo          '</div>';
                                        echo      '</a>';
                                        echo  '</li>';  
                                                        
                                }
                            }
                        } else {
                          echo "0 results";
                        }
                        echo "</ul>";
                        echo '
                            
                            </div>
                            </div>
                        ';
                    } 
                ?>
                <div class="sale">
                    <img src="image/sale.png" alt="" style="width: 100%;height:100px;">

                    <div class="sale-list" >
                        <div class="sale-list-1">
                            <div class="sale-list-2" >
                                <div style="font-size: 18px;color: #ffa500;" >SẢN PHẨM BÁN CHẠY</div>
                                <div style="font-size: 15px;" ><a href="" style="color:#ffa500;" >Xem Thêm> </a></div>
                            </div>
                            <div class="sale-list-2" >
                                <div style="font-size: 18px;color: #ffa500;" >SẢN PHẨM BÁN CHẠY</div>
                                <div style="font-size: 15px;" ><a href="" style="color:#ffa500;" >Xem Thêm> </a></div>
                            </div>
                        </div>
                        <div class="sale-list-1">
                            <div class="sale-list-2">
                               <?php
                                    $sql = "SELECT * FROM product where Cate_ID=4 limit 6 ";
                                    $result = mysqli_query($conn, $sql);    
                                     if (mysqli_num_rows($result) > 0) {
                                      while($row = mysqli_fetch_assoc($result)) {                 
                                        if($row["Status"] !=0){  
                                        echo  '<a href="cart.php?btn=insert_cart&pro_id='.$row["Product_ID"].'" >';
                                        echo    '<div class="sale-list-3">';
                                        echo         '<img src="'.$row["Imge"].'" alt="">';
                                        echo         "".$row["Price"]. "";
                                        echo     '</div>';
                                        echo '</a>';
                                 } }
                                    } else {
                                      echo "0 results";
                                    }                           
                              ?>
                            </div>
                        </div>
                    </div>

                    <img src="image/duoi-sale.png" alt="" style="width: 100%;height: 50px;">

                </div>
   

                <div style="margin-top: 20px;">
                    <div class="top-khoi" >
                        <img src="image/fsale.png" style="width: 150px;height: 30px;" >
                    </div>

                    <div class="flash-sale" >
                        <button id="nut16" class="nut-truot" onclick="left_nut6()" style="left: -15px;display:none;"><</button>
                        <button id="nut166" class="nut-truot" onclick="nut6()" style="left: -15px;display:none;"><</button>
                        <button id="nut26" class="nut-truot" onclick="nut6()" style="right: -15px;display: block;">></button>
                        <button id="nut266" class="nut-truot" onclick="right_nut6()" style="right: -15px;display:none;">></button>
                        <div style="overflow: hidden;">
                            <ul id="danh-muc-2" >
                              <?php
                                    $sql = "SELECT * FROM product where Cate_ID=3  ";
                                    $result = mysqli_query($conn, $sql);    
                                     if (mysqli_num_rows($result) > 0) {
                                      while($row = mysqli_fetch_assoc($result)) {                 
                                        if($row["Status"] !=0){  
                                        echo '<li>';
                                        echo   '<a href="cart.php?btn=insert_cart&pro_id='.$row["Product_ID"].'" >';
                                        echo       '<div class="hang-6" >';
                                        echo           '<div class="top-hang-6" >';
                                        echo                '<img  src="'.$row["Imge"].'" alt="" >';
                                        echo                '<img class="ngay-sale" src="image/ngay-sale.png" alt="" >';
                                        echo           '</div>';
                                        echo           "".$row["Price"]. "";
                                        echo        '</div>';
                                        echo   '</a>';
                                        echo'</li>';
                                    
                                       } }
                                    } else {
                                      echo "0 results";
                                    }                           
                              ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- QC -->
                <div style="margin-top: 20px;">
                    <a href="" ><img src="image/qc1.jpeg" alt="" style="width: 396px;" ></a>
                    <a href="" ><img src="image/qc2.jpeg" alt="" style="width: 396px;" ></a>
                    <a href="" ><img src="image/qc3.jpeg" alt="" style="width: 396px;" ></a>
                </div>

                <!-- Shopee mall -->
                <div style="margin-top: 20px;" >
                    <div class="top-khoi" style="color: #f63;" >
                        SHOPEE MALL
                    </div>

                    <div style="margin-top: 2px;background-color: #fff;height: 450px;width: 100%;display: flex;flex-direction: row;">
                        <div class="bot-slide">
                            <div id="carouselExampleIndicators1" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                  <button style="width: 8px;height: 8px;border-radius: 100%;" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                  <button style="width: 8px;height: 8px;border-radius: 100%;" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                  <button style="width: 8px;height: 8px;border-radius: 100%;" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                  <button style="width: 8px;height: 8px;border-radius: 100%;" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                  <button style="width: 8px;height: 8px;border-radius: 100%;" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                  <button style="width: 8px;height: 8px;border-radius: 100%;" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="5" aria-label="Slide 6"></button>
                                  <button style="width: 8px;height: 8px;border-radius: 100%;" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="6" aria-label="Slide 7"></button>
                                </div>
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="image/mall1.png" class="d-block w-100" alt="">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="image/mall2.png" class="d-block w-100" alt="">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="image/mall3.png" class="d-block w-100" alt="">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="image/mall4.png" class="d-block w-100" alt="">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="image/mall5.png" class="d-block w-100" alt="">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="image/mall6.png" class="d-block w-100" alt="">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="image/mall7.png" class="d-block w-100" alt="">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="bot-slide-right">
                            <div class="danh-muc">
                                <button id="nut14" class="nut-truot" onclick="left_nut4()" style="left: -5px;display:none;"><</button>
                                <button id="nut144" class="nut-truot" onclick="nut4()" style="left: -5px;display:none;"><</button>
                                <button id="nut24" class="nut-truot" onclick="nut4()" style="right: -5px;display:block;">></button>
                                <button id="nut244" class="nut-truot" onclick="right_nut4()" style="right: -5px;display:none;">></button>
                                <div class="right-slide-list" >
                                    <ul id="danh-muc-3" >
                                        <li>
                                            <div class="cot-slide-duoi" >
                                                <div class="top-slide-duoi" >
                                                    <a href="" ><img src="image/lmall1.png" alt="" ></a>
                                                    SAMSUNG
                                                </div>
                                                <div class="bot-slide-duoi" >
                                                    <a href="" ><img src="image/lmall2.png" alt="" ></a>
                                                    SỮA DƯỠNG THỂ
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="cot-slide-duoi" >
                                                <div class="top-slide-duoi" >
                                                    <a href="" ><img src="image/lmall3.png" alt="" ></a>
                                                    DEAL NGÀY VÀNG
                                                </div>
                                                <div class="bot-slide-duoi" >
                                                    <a href="" ><img src="image/lmall4.png" alt="" ></a>
                                                    HÀNG HIỆU SALE
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="cot-slide-duoi" >
                                                <div class="top-slide-duoi" >
                                                    <a href="" ><img src="image/lmall5.png" alt="" ></a>
                                                    Săn IP 13
                                                </div>
                                                <div class="bot-slide-duoi" >
                                                    <a href="" ><img src="image/lmall6.png" alt="" ></a>
                                                    Voucher 20k
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="cot-slide-duoi" >
                                                <div class="top-slide-duoi" >
                                                    <a href="" ><img src="image/lmall7.png" alt="" ></a>
                                                    Mua 1 tặng 1
                                                </div>
                                                <div class="bot-slide-duoi" >
                                                    <a href="" ><img src="image/lmall8.png" alt="" ></a>
                                                    Săn IP 13
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="cot-slide-duoi" >
                                                <div class="top-slide-duoi" >
                                                    <a href="" ><img src="image/lmall9.png" alt="" ></a>
                                                    Mua 1 tặng 1
                                                </div>
                                                <div class="bot-slide-duoi" >
                                                    <a href="" ><img src="image/lmall10.png" alt="" ></a>
                                                    Siêu sale
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="cot-slide-duoi" >
                                                <div class="top-slide-duoi" >
                                                    <a href="" ><img src="image/lmall11.png" alt="" ></a>
                                                    Siêu sale
                                                </div>
                                                <div class="bot-slide-duoi" >
                                                    <a href="" ><img src="image/lmall12.png" alt="" ></a>
                                                    Siêu sale
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="cot-slide-duoi" >
                                                <div class="top-slide-duoi" >
                                                    <a href="" ><img src="image/lmall13.png" alt="" ></a>
                                                    Voucher 50%
                                                </div>
                                                <div class="bot-slide-duoi" >
                                                    <a href="" ><img src="image/lmall14.png" alt="" ></a>
                                                    Voucher 40%
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="cot-slide-duoi" >
                                                <div class="top-slide-duoi" >
                                                    <a href="" ><img src="image/lmall15.png" alt="" ></a>
                                                    Voucher 50%
                                                </div>
                                                <div class="bot-slide-duoi" >
                                                    <a href="" ><img src="image/lmall16.png" alt="" ></a>
                                                    Mua 1 tặng 1
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="cot-slide-duoi" >
                                                <div class="top-slide-duoi" >
                                                    <a href="" ><img src="image/lmall17.png" alt="" ></a>
                                                    Voucher 40%
                                                </div>
                                                <div class="bot-slide-duoi" >
                                                    <a href="" ><img src="image/lmall18.png" alt="" ></a>
                                                    Voucher 30%
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="cot-slide-duoi" >
                                                <div class="top-slide-duoi" >
                                                    <a href="" ><img src="image/lmall19.png" alt="" ></a>
                                                    Voucher 30%
                                                </div>
                                                <div class="bot-slide-duoi" >
                                                    <a href="" ><img src="image/lmall20.png" alt="" ></a>
                                                    Voucher 30%
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="cot-slide-duoi" >
                                                <div class="top-slide-duoi" >
                                                    <a href="" ><img src="image/lmall21.png" alt="" ></a>
                                                    Voucher 30%
                                                </div>
                                                <div class="bot-slide-duoi" >
                                                    <a href="" ><img src="image/lmall22.png" alt="" ></a>
                                                    Voucher 30%
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="cot-slide-duoi" >
                                                <div class="top-slide-duoi" >
                                                    <a href="" ><img src="image/lmall23.png" alt="" ></a>
                                                    Voucher 30%
                                                </div>
                                                <div class="bot-slide-duoi" >
                                                    <a href="" ><img src="image/lmall23.png" alt="" ></a>
                                                    Voucher 30%
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Xu huong -->
                <div style="margin-top: 20px;" >
                    <div class="top-khoi" >
                        <div style="font-size: 20px;" >XU HƯỚNG TÌM KIẾM</div>
                        <div><a href= "" style="color: #f63;" ><i class="fas fa-sync-alt" ></i>Xem them</a></div>
                    </div>

                    <div style="margin-top: 2px;height: 100px;display: flex;justify-content: space-between;" >
                        <a href="" >
                            <div class="Xu-huong" >
                                <div style="padding: 10px 10px 10px 0px;font-size: 15px;" >Tai nghe Blutooth<br><p style="font-size: 10px;" >6k+ san pham</p></div>
                                <img src="image/xh1.jpeg" alt="" >
                            </div>
                        </a>
                        <a href="" >
                            <div class="Xu-huong" >
                                <div style="padding: 10px 10px 10px 0px;font-size: 15px;" >Váy trắng<br><p style="font-size: 10px;" >6k+ san pham</p></div>
                                <img src="image/xh2.jpeg" alt="" >
                            </div>
                        </a>
                        <a href="" >
                            <div class="Xu-huong" >
                                <div style="padding: 10px 10px 10px 0px;font-size: 15px;" >Khẩu trang 3d<br><p style="font-size: 10px;" >6k+ san pham</p></div>
                                <img src="image/xh3.jpeg" alt="" >
                            </div>
                        </a>
                        <a href="" >
                            <div class="Xu-huong" >
                                <div style="padding: 10px 10px 10px 0px;font-size: 15px;" >Son nội địa<br><p style="font-size: 10px;" >6k+ san pham</p></div>
                                <img src="image/xh4.jpeg" alt="" >
                            </div>
                        </a>
                        <a href="" >
                            <div class="Xu-huong" >
                                <div style="padding: 10px 10px 10px 0px;font-size: 15px;" >Kệ Gỗ<br><p style="font-size: 10px;" >6k+ san pham</p></div>
                                <img src="image/xh5.jpeg" alt="" >
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Tim kiem hang dau -->
                <div style="margin-top: 20px;">
                    <div class="top-khoi" >
                        <div style="color: #f63;" >TÌM KIẾM HÀNG ĐẦU</div>
                        <div><a href="" style="color: #f63;" >Xem tất cả ></a></div>
                    </div>

                    <div class="tim-kiem-hang-dau" >
                        <button id="nut116" class="nut-truot" onclick="left_nut66()" style="left: -15px;display:none;"><</button>
                        <button id="nut1166" class="nut-truot" onclick="nut66()" style="left: -15px;display:none;"><</button>
                        <button id="nut226" class="nut-truot" onclick="nut66()" style="right: -15px;display: block;">></button>
                        <button id="nut2266" class="nut-truot" onclick="right_nut66()" style="right: -15px;display:none;">></button>
                        <div style="overflow: hidden;">
                            <ul id="danh-muc-4" >
                               <?php
                                    $sql = "SELECT * FROM product where Cate_ID=2  ";
                                    $result = mysqli_query($conn, $sql);    
                                     if (mysqli_num_rows($result) > 0) {
                                      while($row = mysqli_fetch_assoc($result)) {                 
                                        if($row["Status"] !=0){  
                                        echo' <li>';
                                        echo     '<a href="cart.php?btn=insert_cart&pro_id='.$row["Product_ID"].'" >';
                                        echo          '<div class="hang-66" >';
                                        echo                  '<img src="'.$row["Imge"].'" alt="" >';
                                        echo                  " ".$row["Product_Name"]."";
                                        echo          '</div>';
                                        echo      '</a>';
                                        echo  '</li>';
                                    }                           
                                      }
                                    } else {
                                      echo "0 results";
                                    }                           
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- San pham -->
                <div style="margin-top: 20px;" >
                    <div class="top-goi-y" >
                        <div class="nav nav-tabs" id="nav-tab" role="tablist" style="border: none;box-shadow: none;" >
                            <button class="nav-link active button-goi-y" style="border: none;color: #f63;" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">GỢI Ý HÔM NAY</button>
                            <button class="nav-link button-goi-y" style="border: none;" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><img src="image/sieu-sale.png" ></button>
                        </div>
                    </div>

                    <div class="bot-goi-y" >
                        <div class="tab-content" id="nav-tabContent" >
                            <!-- Goi y sp -->

                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="product-goi-y" >
                                  <?php
                                    $sql = "SELECT * FROM product where Cate_ID=1  ";
                                    $result = mysqli_query($conn, $sql);    
                                     if (mysqli_num_rows($result) > 0) {
                                      while($row = mysqli_fetch_assoc($result)) {                 
                                        if($row["Status"] !=0){  
                                        echo '<a href="cart.php?btn=insert_cart&pro_id='.$row["Product_ID"].'" >';
                                        echo '<div class="product-only" >';
                                        echo '<img src="'.$row["Imge"].'" alt="" >' ;  
                                        echo  "<div>".$row["Product_Name"]."</div>"  ;    
                                        echo  '<div style="height: 7px;" ></div>'      ;
                                        echo  "<div style='color: #f63;font-size: 20px;' >đ ".$row["Price"]. "</div>"    ; 
                                        echo  '</div>'   ;
                                        echo '</a>';   
                                     }                           
                                      }
                                    } else {
                                      echo "0 results";
                                    }                           
                                   ?>
                                </div>
                                <div style="margin-top: 25px;" >
                                    <button style="width: 200px;height: 30px;font-size: 15px;display: block;margin: auto;background-color: #fff;" >Xem Thêm</button>
                                </div>
                            </div>

                            <!-- Sale  -->
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="product-sale" >
                                    <a href="" >
                                        <div class="product-only" >
                                            <img src="image/s1.jpeg" alt="" >
                                            <div>Kính cường lực Iphone</div>
                                            <div style="height: 7px;" ></div>
                                            <div style="color: #f63;font-size: 20px;" >đ 10.000</div>
                                        </div>
                                    </a>
                                    <a href="" >
                                        <div class="product-only" >
                                            <img src="image/s2.jpeg" alt="" >
                                            <div>Bông tẩy trang</div>
                                            <div style="height: 7px;" ></div>
                                            <div style="color: #f63;font-size: 20px;" >đ 17.900</div>
                                        </div>
                                    </a>
                                    <a href="" >
                                        <div class="product-only" >
                                            <img src="image/s3.jpeg" alt="" >
                                            <div>Ốp lưng Iphone</div>
                                            <div style="height: 7px;" ></div>
                                            <div style="color: #f63;font-size: 20px;" >đ 9.000</div>
                                        </div>
                                    </a>
                                    <a href="" >
                                        <div class="product-only" >
                                            <img src="image/s4.jpeg" alt="" >
                                            <div>Quần lót nữ</div>
                                            <div style="height: 7px;" ></div>
                                            <div style="color: #f63;font-size: 20px;" >đ 9.800</div>
                                        </div>
                                    </a>
                                    <a href="" >
                                        <div class="product-only" >
                                            <img src="image/s5.jpeg" alt="" >
                                            <div>Khăn mặt khô</div>
                                            <div style="height: 7px;" ></div>
                                            <div style="color: #f63;font-size: 20px;" >đ 50.000</div>
                                        </div>
                                    </a>
                                    <a href="" >
                                        <div class="product-only" >
                                            <img src="image/s6.jpeg" alt="" >
                                            <div>Ốp lưng Iphone</div>
                                            <div style="height: 7px;" ></div>
                                            <div style="color: #f63;font-size: 20px;" >đ 2.000</div>
                                        </div>
                                    </a>
                                    <a href="" >
                                        <div class="product-only" >
                                            <img src="image/s7.jpeg" alt="" >
                                            <div>Ốp lưng Iphone</div>
                                            <div style="height: 7px;" ></div>
                                            <div style="color: #f63;font-size: 20px;" >đ 14.000</div>
                                        </div>
                                    </a>
                                    <a href="" >
                                        <div class="product-only" >
                                            <img src="image/s8.jpeg" alt="" >
                                            <div>Quần ống rộng</div>
                                            <div style="height: 7px;" ></div>
                                            <div style="color: #f63;font-size: 20px;" >đ 75.000</div>
                                        </div>
                                    </a>
                                    <a href="" >
                                        <div class="product-only" >
                                            <img src="image/s9.jpeg" alt="" >
                                            <div>Băng đô hình sừng hươu</div>
                                            <div style="height: 7px;" ></div>
                                            <div style="color: #f63;font-size: 20px;" >đ 17.000</div>
                                        </div>
                                    </a>
                                    <a href="" >
                                        <div class="product-only" >
                                            <img src="image/s10.jpeg" alt="" >
                                            <div>Kem che khuyết điểm</div>
                                            <div style="height: 7px;" ></div>
                                            <div style="color: #f63;font-size: 20px;" >đ 49.000</div>
                                        </div>
                                    </a>
                                    <a href="" >
                                        <div class="product-only" >
                                            <img src="image/s11.jpeg" alt="" >
                                            <div>Áo nỉ hoddie</div>
                                            <div style="height: 7px;" ></div>
                                            <div style="color: #f63;font-size: 20px;" >đ 320.000</div>
                                        </div>
                                    </a>
                                    <a href="" >
                                        <div class="product-only" >
                                            <img src="image/s12.jpeg" alt="" >
                                            <div>Son kem Perfect diary</div>
                                            <div style="height: 7px;" ></div>
                                            <div style="color: #f63;font-size: 20px;" >đ 159.000</div>
                                        </div>
                                    </a>
                                    <a href="" >
                                        <div class="product-only" >
                                            <img src="image/s13.jpeg" alt="" >
                                            <div>Dây cáp sạc</div>
                                            <div style="height: 7px;" ></div>
                                            <div style="color: #f63;font-size: 20px;" >đ 27.000</div>
                                        </div>
                                    </a>
                                    <a href="" >
                                        <div class="product-only" >
                                            <img src="image/s14.jpeg" alt="" >
                                            <div>Son kem màu nhung</div>
                                            <div style="height: 7px;" ></div>
                                            <div style="color: #f63;font-size: 20px;" >đ 50.000</div>
                                        </div>
                                    </a>
                                    <a href="" >
                                        <div class="product-only" >
                                            <img src="image/s15.jpeg" alt="" >
                                            <div>Ốp lưng Iphone</div>
                                            <div style="height: 7px;" ></div>
                                            <div style="color: #f63;font-size: 20px;" >đ 19.000</div>
                                        </div>
                                    </a>
                                    <a href="" >
                                        <div class="product-only" >
                                            <img src="image/s16.jpeg" alt="" >
                                            <div>Ốp lưng Iphone</div>
                                            <div style="height: 7px;" ></div>
                                            <div style="color: #f63;font-size: 20px;" >đ 14.000</div>
                                        </div>
                                    </a>
                                    <a href="" >
                                        <div class="product-only" >
                                            <img src="image/s17.jpeg" alt="" >
                                            <div>Mắt kính gọng vuông chữ V</div>
                                            <div style="height: 7px;" ></div>
                                            <div style="color: #f63;font-size: 20px;" >đ 5.400</div>
                                        </div>
                                    </a>
                                    <a href="" >
                                        <div class="product-only" >
                                            <img src="image/s18.jpeg" alt="" >
                                            <div>Tất thể thao</div>
                                            <div style="height: 7px;" ></div>
                                            <div style="color: #f63;font-size: 20px;" >đ 4.500</div>
                                        </div>
                                    </a>

                                </div>

                                <div style="margin-top: 25px;" >
                                    <button style="width: 200px;height: 30px;font-size: 15px;display: block;margin: auto;background-color: #fff;" >Xem Thêm</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div style="border-top: #f63 solid 4px;padding: 50px 0px;">
            <div class="content_container" >
                <div style="padding-bottom: 50px;border-bottom: black solid 3px;" >
                    <h5>SHOPEE - GÌ CŨNG CÓ, MUA HẾT Ở SHOPEE</h5>
                    <p style="font-size: 12px;" >
                        Shopee - ứng dụng mua sắm trực tuyến thú vị, tin cậy, an toàn và miễn phí! Shopee là nền tảng giao dịch trực tuyến hàng đầu ở Đông Nam Á, Việt Nam, <a href="" >Singapore</a>, <a href="" >Malaysia</a>, <a href="" >Indonesia</a>, <a href="" >Thái Lan</a>, <a href="" >Philipin</a>, <a href="" >Đài loan</a> và <a href="" >Brazil</a>. Với sự đảm bảo của Shopee, bạn sẽ mua hàng trực tuyến an tâm và nhanh chóng hơn bao giờ hết!
                    </p>
                    <h5>MUA SẮM VÀ BÁN HÀNG ONLINE ĐƠN GIẢN, NHANH CHÓNG VÀ AN TOÀN</h5>
                    <p style="font-size: 12px;" >
                        Nếu bạn đang tìm kiếm một trang web để mua và bán hàng trực tuyến thì Shopee.vn là một sự lựa chọn tuyệt vời dành cho bạn. Bản chất của Shopee là một social E-commerce platform - nền tảng trang web thương mại điện tử tích hợp mạng xã hội. Điều này cho phép người mua và người bán hàng dễ dàng tương tác, trao đổi thông tin về sản phẩm và chương trình khuyến mãi của shop. Nhờ nền tảng đó, việc mua bán trên Shopee trở nên nhanh chóng và đơn giản hơn. Bạn có thể trò chuyện trực tiếp với nhà bán hàng để hỏi trực tiếp về mặt hàng cần mua. Còn nếu bạn muốn tìm mua những dòng sản phẩm chính hãng, uy tín, Shopee Mall chính là sự lựa chọn lí tưởng dành cho bạn. Để bạn có thể dễ dàng khi tìm hiểu và sử dụng sản phẩm, Shopee Blog - trang blog thông tin chính thức của Shopee - sẽ giúp bạn có thể tìm được cho mình các kiến thức về xu hướng thời trang, review công nghệ, mẹo làm đẹp, tin tức tiêu dùng và deal giá tốt bất ngờ.
                        <br>
                        Đến với Shopee, cơ hội để trở thành một nhà bán hàng dễ dàng hơn bao giờ hết. Chỉ với vài thao tác trên ứng dụng, bạn đã có thể đăng bán ngay những sản phẩm của mình. Không những thế, các nhà bán hàng có thể tự tạo chương trình khuyến mãi trên Shopee để thu hút người mua với những sản phẩm có mức giá hấp dẫn. Khi đăng nhập tại Shopee Kênh người bán, bạn có thể dễ dàng phân loại sản phẩm, theo dõi đơn hàng, chăm sóc khách hàng và cập nhập ngay các hoạt động của shop.
                    </p>
                    <h5>TẢI ỨNG DỤNG SHOPEE NGAY ĐỂ MUA BÁN ONLINE MỌI LÚC, MỌI NƠI</h5>
                    <p style="font-size: 12px;" >
                        Ưu điểm của ứng dụng Shopee là cho phép bạn mua và bán hàng mọi lúc, mọi nơi. Bạn có thể tải ứng dụng Shopee cũng như đăng sản phẩm bán hàng một cách nhanh chóng và tiện lợi. Ngoài ra, ứng dụng Shopee còn có những ưu điểm sau: - Giao diện thân thiện, đơn giản, dễ sử dụng. Bạn sẽ dễ dàng thấy được ngay những sản phẩm nổi bật cũng như dễ dàng tìm đến các ô tìm kiếm, giỏ hàng hoặc tính năng chat liền tay. - Ứng dụng tích hợp công nghệ quản lý đơn mua và bán hàng tiện lợi trên cùng một tài khoản. Bạn sẽ vừa là người mua hàng, vừa là người bán hàng rất linh hoạt, dễ dàng. - Cập nhập thông tin khuyến mãi, Shopee flash sale nhanh chóng và liên tục. Tại Shopee, bạn có thể lấy các mã giảm giá Shopee và mã miễn phí vận chuyển toàn quốc. Bên cạnh đó, Shopee cũng sẽ có những chiến dịch khuyến mãi lớn hằng năm như Siêu hội mua sắm 4.4, Shopee 9.9 sale, Shopee 10.10 sale, Shopee 11.11 sale, Shopee 12.12 sale, Shopee Tết Sale. Đây là thời điểm để người mua hàng có thể nhanh tay chọn ngay cho mình những mặt hàng ưa thích với mức giá giảm kỉ lục.
                    </p>
                    <h5>MUA HÀNG HIỆU CAO CẤP GIÁ TỐT TẠI SHOPEE</h5>
                    <p style="font-size: 12px;" >
                        Bên cạnh Shopee Premium, Shopee còn có rất nhiều khuyến mãi khủng cho hàng hiệu giảm đến 50%. Cộng với mã giao hàng miễn phí, Shopee cũng có các mã giảm giá được phân phối mỗi tháng từ rất nhiều gian hàng chính hãng tham gia chương trình khuyến mãi này. Bên cạnh đó, Shopee còn tập hợp rất nhiều thương hiệu đình đám được các nhà bán lẻ uy tín phân phối bán trên Shopee, đem đến cho bạn sự lựa chọn đa dạng, từ các hãng mỹ phẩm nổi tiếng hàng đầu như Kiehl's, Fresh, The Ordinary, Foreo, Transino, SK-II... Đến những thương hiệu công nghệ nổi tiếng như camera hành trình Gopro, loa Marshall, bảng vẽ điện tử Huion, máy quay DJI Osmo Pocket, loa Harman Kardon, Razer... 
                    </p>
                    <h5>MUA HÀNG CHÍNH HÃNG TỪ CÁC THƯƠNG HIỆU LỚN VỚI SHOPEE</h5>
                    <p style="font-size: 12px;" >
                        Mua hàng trên Shopee luôn là một trải nghiệm ấn tượng. Dù bạn đang có nhu cầu mua bất kỳ mặt hàng thời trang nam, thời trang nữ, đồng hồ, điện thoại, nước rửa tay khô hay khẩu trang N95 thì Shopee cũng sẽ đảm bảo cung cấp cho bạn những sản phẩm ưng ý. Bên cạnh đó, Shopee cũng có sự tham gia của các thương hiệu hàng đầu thế giới ở đa dạng nhiều lĩnh vực khác nhau. Trong đó có thể kể đến Samsung, OPPO, Xiaomi, Innisfree, Unilever, P&G, Biti’s,...Các thương hiệu này hiện cũng đã có cửa hàng chính thức trên Shopee Mall với hàng trăm mặt hàng chính hãng, được cập nhập liên tục. Là một kênh bán hàng uy tín, Shopee luôn cam kết mang lại cho khách hàng những trải nghiệm mua sắm online giá rẻ, an toàn và tin cậy. Mọi thông tin về người bán và người mua đều được bảo mật tuyệt đối. Các hoạt động giao dịch thanh toán tại Shopee luôn được đảm bảo diễn ra nhanh chóng, an toàn. Một vấn đề nữa khiến cho các khách hàng luôn quan tâm đó chính là mua hàng trên Shopee có đảm bảo không. Shopee luôn cam kết mọi sản phẩm trên Shopee, đặc biệt là Shopee Mall đều là những sản phẩm chính hãng, đầy đủ tem nhãn, bảo hành từ nhà bán hàng. Ngoài ra, Shopee bảo vệ người mua và người bán bằng cách giữ số tiền giao dịch đến khi người mua xác nhận đồng ý với đơn hàng và không có yêu cầu khiếu nại, trả hàng hay hoàn tiền nào. Thanh toán sau đó sẽ được chuyển đến cho người bán.
                        <br>
                        Đến với Shopee ngay hôm nay để mua hàng online giá rẻ và trải nghiệm dịch vụ chăm sóc khách hàng tuyệt vời tại đây. Đặc biệt khi mua sắm trên Shopee Mall, bạn sẽ được miễn phí vận chuyển, giao hàng tận nơi và 7 ngày miễn phí trả hàng. Ngoài ra, khách hàng có thể sử dụng Shopee Xu để đổi lấy mã giảm giá có giá trị cao và voucher dịch vụ hấp dẫn. Tiếp đến là Shopee Mum's Club, Shopee Beauty Club và Shopee Book Club với các ưu đãi độc quyền từ các thương hiệu lớn có những khách hàng đã đăng ký làm thành viên. Hãy truy cập ngay Shopee.vn hoặc tải ngay ứng dụng Shopee về điện thoại ngay hôm nay!
                    </p>
                </div>
                
            </div>
            <div style="background-color: #fafafa;padding: 50px 0px;" >
                <div class="content_container" style="display: flex;justify-content: space-between;padding-bottom: 50px;border-bottom: 2px solid black;" >
                    <div class="cskh" >
                        CHĂM SÓC KHÁCH HÀNG
                        <a href="" >Trung Tâm Trợ Giúp</a>
                        <a href="" >Shopee Blog</a>
                        <a href="" >Shopee Mall</a>
                        <a href="" >Hướng Dẫn Mua Hàng</a>
                        <a href="" >Hướng Dẫn Bán Hàng</a>
                        <a href="" >Thanh Toán</a>
                        <a href="" >Shopee Xu</a>
                        <a href="" >Vận Chuyển</a>
                        <a href="" >Trả Hàng & Hoàn Tiền</a>
                        <a href="" >Chăm Sóc Khách Hàng</a>
                        <a href="" >Chính Sách Bảo Hành</a>
                    </div>
                    <div class="cskh" >
                        VỀ SHOPEE
                        <a href="" >Giới Thiệu Về Shopee Việt Nam</a>
                        <a href="" >Tuyển Dụng</a>
                        <a href="" >Điều Khoản Shopee</a>
                        <a href="" >Chính Sách Bảo Mật</a>
                        <a href="" >Chính Hãng</a>
                        <a href="" >Kênh Người Bán</a>
                        <a href="" >Flash Sales</a>
                        <a href="" >Chương Trình Tiếp Thị Liên Kết Shopee</a>
                        <a href="" >Liên Hệ Với Truyền Thông</a>
                    </div>
                    <div class="cskh" >
                        THEO DÕI CHÚNG TÔI TRÊN
                        <a href="" ><i class="fab fa-facebook"></i> Facebook</a>
                        <a href="" ><i class="fab fa-instagram"></i> Instagram</a>
                        <a href="" ><i class="fab fa-linkedin"></i> Linkedln</a>
                    </div>
                    <div class="cskh" >
                        TẢI ỨNG DỤNG SHOPEE NGAY THÔI
                        <img src="image/moblieapp.png" style="width: 80px;height: 80px;display: block;" >
                    </div>
                </div>
                <div class="content_container" style="display: flex;justify-content: space-between;font-size: 14px;" >
                    <div>© 2021 Shopee. Tất cả các quyền được bảo lưu.</div>
                    <div style="width: 100px;" ></div>
                    <div class="bot-cskh" >
                        Quốc gia & Khu vực:
                        <a href="" >Singapore</a>
                        <a href="" >Indonesia</a>
                        <a href="" >Đài Loan</a>
                        <a href="" >Thái Lan</a>
                        <a href="" >Malaysia</a>
                        <a href="" >Việt Nam</a>
                        <a href="" >Philippines</a>
                        <a href="" >Brazil</a>
                        <a href="" >México</a>
                        <a href="" >Colombia</a>
                        <a href="" >Chile</a>
                        <a href="" >Poland</a>
                        <a href="" >Spain</a>
                    </div>
                </div>
            </div>
        </div>

    <script src="javascript/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>