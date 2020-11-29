<?php
include("config.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $Pname       = $_POST['productName'];
    $Pcode       = $_POST['productCode'];
    $Pcategory   = $_POST['productCategory'];
    $Pprice      = $_POST['productPrice'];
    $Pstock      = $_POST['productStock'];



$sql = "INSERT INTO inventory (ProductName, Code, Category,Price,StockCount)VALUES ('$Pname', '$Pcode',' $Pcategory','$Pprice','$Pstock')";
if (mysqli_query($db, $sql)) {
    header("location: menu.php");
} else {
 echo "ERROR" . $sql . "<br>" . mysqli_error($db);
}
mysqli_close($db);
}
?>
