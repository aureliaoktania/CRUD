<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "toystown";
// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$db) {
 die("Connection failed: " . mysqli_connect_error());
}
//Display records
$sql = "SELECT ProductName, Code, Category, Price, StockCount FROM inventory";
$result = mysqli_query($db, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row
 while($row = mysqli_fetch_assoc($result)) {
    echo "<td>" . $row["ProductName"]. "</td>" .
    "<td>" . $row["Code"]."</td>". 
    "<td>" . $row["Category"]. "</td>". 
    "<td>" . $row["Price"]. "</td>". 
    "<td>" . $row["StockCount"]. "</td>". "<br>";
    }
} else {
 echo "0 results";
}
echo "<br>We will delete record id 1 : <br>";
// sql to delete a record
$sql = "DELETE FROM inventory";
if (mysqli_query($db, $sql)) {
 echo "Record deleted successfully <br>";
} else {
 echo "Error deleting record: " . mysqli_error($conn);
}
$sql = "SELECT id, firstname, lastname FROM MembersTbl";
$result = mysqli_query($db, $sql);
//Display Records
if (mysqli_num_rows($result) > 0) {
 // output data of each row
 while($row = mysqli_fetch_assoc($result)) {
    echo "<td>" . $row["ProductName"]. "</td>" .
    "<td>" . $row["Code"]."</td>". 
    "<td>" . $row["Category"]. "</td>". 
    "<td>" . $row["Price"]. "</td>". 
    "<td>" . $row["StockCount"]. "</td>". "<br>";
 }
} else {
 echo "0 results";
}
mysqli_close($db);
?>