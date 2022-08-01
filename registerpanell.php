<?php
include("connection.php");
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Register Panell</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>
<style>
@import "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background-color: #e6ffff;
  background-size: cover;
}
.register-box{
  width: 280px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: black;
}
.register-box h1{
  float:left;
  font-size: 40px;
  border-bottom: 6px solid #000000;
  margin-bottom: 50px;
  padding: 13px 0
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
  width: 26px;
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
  border: none;
  color: white;
  padding: 5px;
  font-size: 18px;
  cursor: pointer;

}
</style>
<body>
  <?php
if(isset($_POST['submit'])){
  $username = mysqli_real_escape_string($con,$_POST['username']);
  $contactno = mysqli_real_escape_string($con,$_POST['contactno']);
  $aadharno = mysqli_real_escape_string($con,$_POST['aadharno']);
  $email = mysqli_real_escape_string($con,$_POST['email']);
  $voterid = mysqli_real_escape_string($con,$_POST['voterid']);
  $password	 = mysqli_real_escape_string($con,$_POST['password']);
  $cpassword	 = mysqli_real_escape_string($con,$_POST['repassword']);

  $pass = password_hash($password, PASSWORD_BCRYPT);
  $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

$emailquery = "SELECT * FROM registration WHERE email='$email' ";
$query = mysqli_query($con,$emailquery);
$emailcount = mysqli_num_rows($query);
if($emailcount>0){
  echo "email already exits";
}else {
  if ($password === $cpassword) {
    $insertquery = "INSERT INTO registration(username,contactno,aadharno,email, voterid ,password ,cpassword)
    VALUES('$username','$contactno','$aadharno','$email','$voterid','$pass','$cpass')";

    $iquery = mysqli_query($con,$insertquery);
    if ($iquery) {
      ?>
      <script>
      alert("Inserted Successful");
      location.replace("registermenu.php");
      </script>
      <?php
    }else {
      ?>
      <script>
      alert("No Inserted");
      </script>
      <?php
    }
  }else {
    echo "password are not matching";
  }
}
}
   ?>
  <center><form action="" class="register-box" method="POST">
    <div class="form-group"><br>
    <h1>Register Panel</h1>
    <div class="textbox">
      <i class="fa fa-user" aria-hidden="true"></i>
      <input type="text" placeholder="Name" name="username" value="" required>
    </div>
    <div class="textbox">
      <i class="fa fa-phone" aria-hidden="true"></i>
      <input type="text" placeholder="Contact no." name="contactno" value="" required>
    </div>
    <div class="textbox">
      <i class="fa fa-phone" aria-hidden="true"></i>
      <input type="text" placeholder="Aadhar no." name="aadharno" value="" required>
    </div>
    <div class="textbox">
      <i class="fa fa-envelope" aria-hidden="true"></i>
      <input type="text" placeholder="Email-id" name="email" value="" required>
    </div>
    <div class="textbox">
      <i class="fa fa-hand-o-up" aria-hidden="true"></i>
      <input type="text" placeholder="Voter-id" name="voterid" value="" required>
    </div>
    <div class="textbox">
      <i class="fa fa-lock" aria-hidden="true"></i>
      <input type="text" placeholder="Password" name="password" value="" required>
    </div>
    <div class="textbox">
      <i class="fa fa-lock" aria-hidden="true"></i>
      <input type="text" placeholder="Confirm Password" name="repassword" value="" required>
    </div>
  </div>
  <div class="form-group">
    <div class="button">
<input type="submit" id="button"  name="submit">
</div>Already have an account?<a href="login.php"><b>Login Here</b></a>
</div>
</form>
</center>
</body>
</html>
