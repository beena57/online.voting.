<?php
include("connection.php");
error_reporting(0);
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Selection</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="css/stylee.css" media="screen">
</head>
<style>
body{
margin: 0;
background-color: #ffffff;
align-items: center;
justify-content: center;
font-family: sans-serif;
}

h3{
  font-size: 20px;
}

p{
  font-size: 15px;
}
.form-control{
  width: 600px;
  height: 20px;
}

.btn{
  color: white;
  padding: 4px 6px;
  border-radius: 0.50rem;
  background-color: #4da6ff;
}
fieldset{
  background-color: #c5c6c7;t: center;
  margin-top: 10px;
  width: 800px;
  height: 500px;
}
.header{
  font-size: 30px;
  font-weight: bold;
  font-family: sans-serif;
}
h3{
  font-family: sans-serif;
  font-size: 20px;
}
.image{
  vertical-align: middle;
  margin-left: 170px;
}
footer{
  background-color: #000000;
  color: white;
  padding: 10px;
  clear: both;
  text-align: center;
}
.button{
  float: right;
  margin-top: 17px;
  margin-right: 20px;
  padding: 5px 10px;
  font-size: 15px;
  border-radius: 0.50rem;
  background-color: #4da6ff;
}
.button a{
  text-decoration: none;
  color: white;
}
.reviews{
  margin-top: 100px;
  display: inline-block;
  width: 440px;
  height: 100px;
}

</style>
  <body>
    <nav>
      <label class="logo">VOTE</label>
      <button class="button"><a href="logout.php">Logout</a></button>
    </nav>
    <fieldset>
         <div class="header">
          Choose your favourite representative.
        </div>
        <form action="process.php" method="POST" role="form">
          <div class="form-group"><br>
            <input type="email" name="email" placeholder="EMAIL ADDRESS" class="form-control">
            <h3 class="normalFont">Select anyone option:</h3>
      </div>
      <div class="radio">
          <label class="radio"><input type="radio" name="choice" value="BJP" required>
          <h3 style="display:inline-block;">BJP</h3></label><br>

          <label class="radio"><input type="radio" name="choice" value="AITC">
          <h3 style="display:inline-block;">AITC</h3></label><br>

          <label class="radio"><input type="radio" name="choice" value="DMKP">
          <h3 style="display:inline-block;">DMKP</h3></label><br>

          <label class="radio"><input type="radio" name="choice" value="SWP">
          <h3 style="display:inline-block;">SWP</h3></label><br>
<div class="form-group">
  <input type="submit" name="vote" value="VOTE" class="btn btn primary">
</div>
</div>
</form>
</fieldset>
<div class="reviews">
<img src="img/group.png" width="100" height="100" class="image">
<p>PARTICIPANTS<br>
<a href="nominations.php">Click Here</a>
</p>
</div>

<div class="reviews">
<img src="img/note.png" width="100" height="100" class="image">
<p>INSTRUCTIONS<br>
<a href="instructions.php">Click Here</a>
</p>
</div>

<div class="reviews">
<img src="img/login.png" width="100" height="100" class="image">
<p>REGISTER<br>
<a href="registerpanell.php">Click Here</a>
</p>
</div>
<footer>
  Email id: <a href="#">sharmabeena572000@gmail.com</a>
</footer>
</body>
</html>
</body>
</html>
