<?php
include("connection.php");
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<style>
@import "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background-color: #e6ffff;
  background-size: cover;
}
.admin-box{
  width: 280px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: black;
}
.adminn-box h1{
  float:left;
  font-size: 40px;
  border-bottom: 6px solid #000000;
  margin-bottom: 50px;
  padding: 9px 0
}
.textbox{
  width: 100%;
  overflow: hidden;
  font-size: 20px;
  padding: 8px 0;
  margin: 8px 0;
  border-bottom: 1px solid #000000;
}
.textbox i{
  width: 25px;
  float:left;
  text-align: center;
}
.textbox input{
  border: none;
  outline: none;
  background: none;
  color: black;
  font-size: 18px;
  width: 80%;
  float: left;
  margin: 0  10px;
}
.button{
  width: 100%;
  background-color: #000000;
  border: none;
  color: white;
  padding: 5px;
  display: inline-block;
  margin: 4px 2px;
  font-size: 18px;
  cursor: pointer;
}
</style>
<body>
  <?php
if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $password	 = $_POST['password'];

  $email_search = "SELECT * FROM registration WHERE email='$email' ";
  $query = mysqli_query($con,$email_search);

  $email_count = mysqli_num_rows($query);

  if ($email_count){
    $email_pass = mysqli_fetch_assoc($query);

    $db_pass = $email_pass['password'];

    $pass_decode = password_verify($password,$db_pass);
    if ($pass_decode) {
      echo "Login Successful";
      header('location:admin menu.php');
    }else {
      echo "Password incorrect";
    }
  }
}
   ?>
  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" class="admin-box" method="POST">
  <div class="form-group"><br>
    <h1>Admin Panel</h1>
    <div class="textbox">
      <i class="fa fa-user" aria-hidden="true"></i>
      <input type="text" placeholder="Email-id" name="email" value="">
    </div>

    <div class="textbox">
      <i class="fa fa-lock" aria-hidden="true"></i>
      <input type="password" placeholder="Password" name="password" value="">
    </div>
    <div class="form-group" name="login">
     <button type="submit" name="submit" class="button">LOGIN</button>
   </div>
  </body>
</html>
