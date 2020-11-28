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

 header("location: ../Dashboard.php");
 }else {
 echo "Your username or password is invalid";
echo "<br />";
 }
 }
?>
