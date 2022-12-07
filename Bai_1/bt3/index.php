<?php 
    $mota = '';
    $listPrice = '';
    $discountPercent = '';
    $Discount_Amount = '';
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $mota = $_POST["properties_product"];
        $listPrice = $_POST["price_product"];
        $discountPercent = $_POST["percent_product"];
        $Discount_Amount = $listPrice * $discountPercent*0.1;
    }
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chiết khấu sản phẩm</title>
</head>
<body>
<form action="" method="POST">
    <p>Mô tả sản phẩm:</p><input type="text" name="properties_product"/>
    <p>Giá niêm yết của sản phẩm:</p><input type="number" name="price_product"/>
    <p>Tỷ lệ chiết khấu:</p><input type="number" name="percent_product"/>
    <input type="submit" value="Tính Chiết Khấu"/>
    <br>
    <?php echo "Lượng chiết khấu là: $Discount_Amount của $mota" ?>
    </form>
  
</body>
</html>