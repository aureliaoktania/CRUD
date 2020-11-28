<html>
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
            <a class="nav-link active" href="lu tambahin ae mau kemane">Display<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="jee mau kemane ">Input</a>
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

  <div class="container-md">
    <form action="insert.php" method="POST">
         <div class="form-group">
   
                    <label>Product Name</label>
                    <input type="text" class="form-control product_name" name="product_name">
                </div>
                <div class="form-group">
                    <label>Product Code</label>
                    <input type="text" class="form-control product_code" name="product_code" >
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <input type="text" class="form-control product_category" name="product_category">
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="form-control product_price" name="product_price" >
                </div>
                <div class="form-group">
                    <label>Stock Count</label>
                    <input type="text" class="form-control product_stock" name="product_stock" >
                </div>
                <button type="submit" class="btn btn-primary float-right">Add</button>
  </form>
  </div>
</body>
<script src="./js/bootstrap.min.js"></script>
</html>
