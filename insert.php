<?php
include("config.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $Pname       = $_POST['product_name'];
    $Pcode       = $_POST['product_code'];
    $Pcategory   = $_POST['product_category'];
    $Pprice      = $_POST['product_price'];
    $Pstock      = $_POST['product_stock'];



$sql = "INSERT INTO inventory (ProductName, Code, Category,Price,StockCount)VALUES ('$Pname', '$Pcode',' $Pcategory','$Pprice','$Pstock')";
if (mysqli_query($db, $sql)) {
 echo "Udah bisa, Makaseih :).";
} else {
 echo "Ade yang salah same die: " . $sql . "<br>" . mysqli_error($db);
}
mysqli_close($db);
}
?>
