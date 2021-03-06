  <head>
<title>Toys Town</title>
<link href="./css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="">♛ Toys Town</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
 
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link active" href="./menu.php">Display<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="./input.php">Input</a>
          </li>
        </ul>
      </div>
    </nav>
      
    <div class="jumbotron">
        <h1 class="display-4">Manage Inventory</h1>
        <p class="lead">Set and manage your store inventory here.</p>
        <hr class="my-4">
        <p>Click the <strong>Add New</strong> to insert new inventory</p>
    </div>
<div class="container">
<h1>Filter</h1>
<button type="button" class="btn btn-light btn-outline-primary float-right" ><a href= "./input.php">Add New</a></button> <br>
 <div class="row">
  <div>
  <form method="POST">
   Name
   <input type="text" name="name" class="form-control"  value="" /><hr>

   Code
   <input type="text" name="code" class="form-control" value="" /><hr> <br>
</div>
 </div>

 <input type="submit" name="submit" class="btn btn-primary" value="Search"/>
 <input type="reset" name="reset" class="btn btn-secondary" value="Reset"/> <br> <br>
</form>
 <div class="row">
  <div class="col-md-12">
   <table width="100%" class="table table-bordered table-striped">
    <tr>
     <th>Name</th>
     <th>Code</th>
     <th>Category</th>
     <th>Price</th>
     <th>Stock Account</th>
     <th>Action</th>
    </tr>
   
     <!-- <td><button type="button" class="btn btn-success btn-sm">Edit</button>
      <button type="button" class="btn btn-danger btn-sm">Delete</button></td> -->

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
if(ISSET($_POST['name'])){
$search = $_POST['name'];
$sql = "SELECT * FROM inventory WHERE productName LIKE '%$search%'";
}else if(ISSET($_POST['code'])){
$search = $_POST['code'];
$sql = "SELECT * FROM inventory WHERE Code LIKE '%$search%'";
}else if(ISSET($_POST['name']) && ISETT($_POST['code'])){
  $search1 = $_POST['name'];
  $search2 = $_POST['code'];
  $sql = "SELECT * FROM inventory WHERE productName LIKE '%$search1%' OR Code LIKE '%$search2%' ";
}else{
$sql = "SELECT * FROM inventory";
}
$result = mysqli_query($db, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row
 while($row = mysqli_fetch_assoc($result)) {
echo "<tr>";
 echo "<td>" . $row["ProductName"]. "</td>" .
        "<td>" . $row["Code"]."</td>". 
        "<td>" . $row["Category"]. "</td>". 
        "<td>" . $row["Price"]. "</td>". 
        "<td>" . $row["StockCount"]. "</td>";
        ?>
        <td> <a class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit<?php echo $row["Code"]?>" role="Button"> Edit </a>  
        <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?php echo $row["Code"]?>" role="Button"> Delete</a> </td>
 <?php
echo "</tr>";
 }
} else {
 echo "0 results";
}
?>
   </table>
  </div>
 </div>
</div>
  

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "toystown";
$db = mysqli_connect($servername, $username, $password, $dbname);
if (!$db) {
 die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT  Code FROM inventory";
$result = mysqli_query($db, $sql);
if (mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_assoc($result)) {
   ?>

<div class="modal fade" id="delete<?php echo $row["Code"]?>" tabindex="-1"  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Missed Confirm</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="delete.php" method="post">
      <input type="hidden" name="product_id" value="<?php echo $row["Code"];?>" readonly>
        Do you Fucking missed me?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-danger">Confirm</button>
        </form>
      </div>
    </div>
  </div>
</div>

 <?php }} ?>

 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "toystown";
$db = mysqli_connect($servername, $username, $password, $dbname);
if (!$db) {
 die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT ProductName, Code, Category, Price, StockCount FROM inventory";
$result = mysqli_query($db, $sql);
if (mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_assoc($result)) {
   ?>

<div class="modal fade" id="edit<?php echo $row["Code"]?>" tabindex="-1"  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Missed Confirm 1000</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="update.php" method="post">
      <input type="hidden" name="product_id" value="<?php echo $row["Code"];?>" readonly>

                    <label>Product Name</label>
                    <input type="text" class="form-control productName" value="<?php echo $row["ProductName"];?>" name="productName">
                
              
                    <label>Product Code</label>
                    <input type="text" class="form-control productCode" value="<?php echo $row["Code"];?>" name="productCode" >
              
                
                    <label>Category</label>
                    <input type="text" class="form-control productCategory"value="<?php echo $row["Category"];?>" name="productCategory">
             
             
                    <label>Price</label>
                    <input type="text" class="form-control productPrice" value="<?php echo $row["Price"];?>"name="productPrice" >
           
             
                    <label>Stock Count</label>
                    <input type="text" class="form-control productStock"value="<?php echo $row["StockCount"];?>" name="productStock" >
              
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-danger">Confirm</button>
        </form>
      </div>
    </div>
  </div>
</div>

 <?php }} ?>

</body>
<script src="./js/jquery.min.js"></script>
<script src="./js/bootstrap.bundle.min.js"></script>
</html>
