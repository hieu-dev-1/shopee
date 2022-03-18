<?php
  require "./config/config.php";
  if (isset($_POST["insert"])) {
      $cate_id= $_POST["cate_id"];
      $product_name= $_POST["product_name"];
      $product_price_new= $_POST["product_price_new"];
      $status= $_POST["status"];
      $target_dir = "product_img/";
      $target_file = $target_dir.basename($_FILES["product_avatar"]["name"]);
      if (move_uploaded_file($_FILES["product_avatar"]["tmp_name"],$target_file))
      {
        $sql = "insert into product(Cate_ID,Product_Name,Imge,Price,Status) values(".$cate_id.",N'". $product_name."',N'".$target_file."',N'".$product_price_new."',".$status.")";
      
        if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
          header('Location:product.php');
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }
    if(isset($_GET['click'])&&$_GET['click']=="delete"){
    $id = $_GET["id"];
    $sql = "DELETE from product where 	Product_ID=".$id;

    if (mysqli_query($conn, $sql)) {
      echo "Record deleted successfully";
    } else {
      echo "Error deleting record: " . mysqli_error($conn);
    }

  }
    
        

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
  <title>Document</title>
</head>
<body>
  <div class="container">
    <h1 style="text-align: center;"> Quản lí doanh muc sản phẩm </h1>
    <div class="row">
      <form action="product.php" method="post" class="col-6" enctype="multipart/form-data">
        <!-- nhập mã sản phẩm
        <input type="text" class="form-control" name="product_id"> -->
        chọn doanh mục sản phẩm
        loại 
        <input class="form-control" name="cate_id"  >
        tên sản phẩm
        <input type="text" class="form-control" name="product_name">
        ảnh avatar 
        <input type="file" class="form-control" name="product_avatar">
        giá mới
        <input type="text" class="form-control" name="product_price_new">
        trạng thái sản phẩm
        <input type="text" class="form-control" name="status">
        <input type="submit" class="btn btn-primary" name="insert" value="update" >
      </form>
    </div>
    <div class="row">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">mã doanh mục</th>
      <th scope="col">doanh mục san phẩm</th>
      <th scope="col">tên sản phẩm</th>
      <th scope="col">ảnh</th>
      <th scope="col">giá cũ</th>
      <th scope="col">trạng thái</th>
      <th scope="col">hành động</th>
    </tr>
  </thead>
    <tbody>
     <?php

    $sql = "SELECT * FROM product order by Product_ID DESC";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {

        echo "<tr>";
        echo "<td>".$row["Product_ID"]. "</td>";
        echo "<td>".$row["Cate_ID"]. "</td>";
        echo "<td>".$row["Product_Name"]. "</td>";
        echo "<td><img style='width:230px;height:200px;border-radis:50px;' src='".$row["Imge"]."'/></td>";
        echo "<td> ".$row["Price"]. "</td>";
        echo "<td> ".$row["Status"]. "</td>";
          echo "<td> <a name='delete_DM' class='btn btn-danger' href='product.php?click=delete&id=".$row["Product_ID"]."'> xoa </a></td>";
        echo "</tr>";
      }
    } else {
      echo "0 results";
    }
    mysqli_close($conn);
?>
  </tbody>
</table>
    </div>
  </div>
</body>
</html>