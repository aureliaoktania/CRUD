<?php
 include("config.php");
 session_start();

 if($_SERVER["REQUEST_METHOD"] == "POST") {

 $user = mysqli_real_escape_string($db,$_POST['username']);
 $pass = mysqli_real_escape_string($db,$_POST['password']);
 $sql = "SELECT id FROM user WHERE username = '$user' and pass = '$pass'";
 $result = mysqli_query($db,$sql);
 $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

 $count = mysqli_num_rows($result);

 if($count == 1) {
 $_SESSION['login_user'] = $user;
 header("location: menu.php");
echo ":D";
 }else {
 echo "Your username or password is invalid";
echo "<br />";
 }
 }
?>

<html>

 <head>
 <title>Login Page</title>
 <link href="./css/bootstrap.min.css" rel="stylesheet">
 </head>

 <form action ="" method = "post">
        <div class="container">
            <h1>LOG IN</h1>
        <div class="row">
        <div>
        Username
        <input type="text" name="username" value="your username" class="form-control" value=""/><hr>

        Password
        <input type="text" name="password" class="form-control" value="your password"/><hr> <br>

        <input type="submit" name="submit" class="btn btn-primary float-none" value="Submit"/>
        </div>
         </div>
 </form>


 </body>
 <script src="./js/bootstrap.min.js"></script>
</html>
