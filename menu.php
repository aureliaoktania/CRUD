<html>
<head>
<title>Toys Town</title>
<link href="./css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
<h1>Filter</h1>
<button type="button" class="btn btn-primary float-right">Add New</button> <br>
 <div class="row">
  <div>
   Name
   <input type="text" name="nama" class="form-control" value=""/><hr>

   Code
   <input type="text" name="nama" class="form-control" value=""/><hr> <br>
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
