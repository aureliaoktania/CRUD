<?php
include("config.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_check       = $_POST['product_id'];
    $product_name       = $_POST['productName'];
    $product_code       = $_POST['productCode'];
    $product_category   = $_POST['productCategory'];
    $product_price      = $_POST['productPrice'];
    $product_stock      = $_POST['productStock'];

    mysqli_query($db,"UPDATE inventory SET ProductName='$product_name', Code='$product_code', Category='$product_category', Price='$product_price', StockCount='$product_stock' WHERE Code='$product_check'");
    header("location: menu.php");
}
?>
