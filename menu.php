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
<div class="container">
<h1>Filter</h1>
<button type="button" class="btn btn-primary float-right">Add New</button> <br>
 <div class="row">
  <div>
   Name
   <input type="text" name="nama" class="form-control" value=""/><hr>

   Code
   <input type="text" name="code" class="form-control" value=""/><hr> <br>
</div>
 </div>

 <input type="submit" name="filter" class="btn btn-primary" value="Search"/>
 <input type="submit" name="filter" class="btn btn-secondary" value="Reset"/> <br> <br>

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
    <tr>
     <td>1</td>
     <td>100120</td>
     <td>Orga</td>
     <td>Jakarta Barat No 58</td>
     <td>50</td>
     <td><button type="button" class="btn btn-success btn-sm">Edit</button>
      <button type="button" class="btn btn-danger btn-sm">Delete</button></td>
    </tr>
    <tr>
     <td>2</td>
     <td>100121</td>
     <td>Mikazuki</td>
     <td>Depok</td>
     <td>50</td>
     <td><button type="button" class="btn btn-success btn-sm">Edit</button>
      <button type="button" class="btn btn-danger btn-sm">Delete</button></td>
    </tr>
    <tr>
     <td>3</td>
     <td>100122</td>
     <td>Akihiro</td>
     <td>Jakarta Pusat No 100</td>
     <td>50</td>
     <td><button type="button" class="btn btn-success btn-sm">Edit</button>
      <button type="button" class="btn btn-danger btn-sm">Delete</button></td>
    </tr>
    <tr>
     <td>4</td>
     <td>100123</td>
     <td>Lia</td>
     <td>Jakarta Selatan,Lebak Bulus</td>
     <td>50</td>
     <td><button type="button" class="btn btn-success btn-sm">Edit</button>
      <button type="button" class="btn btn-danger btn-sm">Delete</button></td>
    </tr>
   </table>
  </div>
 </div>
</div>
</body>
<script src="./js/bootstrap.min.js"></script>
</html>
