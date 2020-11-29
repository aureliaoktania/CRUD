<?php
include("config.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $prod_id       = $_POST['product_id'];

$sql = "DELETE FROM inventory WHERE Code IN('$prod_id')";

if (mysqli_query($db, $sql)) {
 echo "Delete Success.";
} else {
 echo "Error: " . $sql . "<br>" . mysqli_error($db);
}
mysqli_close($db);

header("location: menu.php");
}
?>
