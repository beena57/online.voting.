<?php
include'connection.php';
$bjpQuery = mysqli_query($con,"SELECT * FROM voter_s WHERE voters_choice='BJP'");
$aitcQuery = mysqli_query($con,"SELECT * FROM voter_s WHERE voters_choice='AITC'");
$dmkpQuery = mysqli_query($con,"SELECT * FROM voter_s WHERE voters_choice='DMKP'");
$swpQuery = mysqli_query($con,"SELECT * FROM voter_s WHERE voters_choice='SWP'");

$numVotersBJP = mysqli_num_rows($bjpQuery);
$numVotersAITC = mysqli_num_rows($aitcQuery);
$numVotersDMKP = mysqli_num_rows($dmkpQuery);
$numVotersSWP = mysqli_num_rows($swpQuery);

$sum = $numVotersBJP+$numVotersAITC+$numVotersDMKP+$numVotersSWP;

if ($numVotersBJP===0) {
  $bjpPercent = 0;
}else {
  $bjpPercent = round(floatval(($numVotersBJP / $sum) * 100));
}
if ($numVotersAITC===0) {
  $aitcPercent = 0;
}else {
  $aitcPercent = round(floatval(($numVotersAITC / $sum) * 100));
}
if ($numVotersDMKP===0) {
  $dmkpcPercent = 0;
}else {
  $dmkpcPercent = round(floatval(($numVotersDMKP / $sum) * 100));
}
if ($numVotersSWP===0) {
   $swpPercent = 0;
}else {
  $swpPercent = round(floatval(($numVotersSWP / $sum) * 100));
}
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Results</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="css/style.css" media="screen">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
body{
  font-family: sans-serif;
  background-color: #c5c6c7;
}

.heading{
 font-size: 30px;
 font-weight: bold;
}
.progress{
  margin-top: 50px;
  margin-left: 20%;
  width: 800px;
  height: 40px;
}

button{
 margin-top: 120px;
 margin-left: 650px;
 margin-bottom: 10px;
 padding: 5px 10px;
 font-size: 15px;
 border-radius: 0.50rem;
 background-color: #4da6ff;
}
button a{
 text-decoration: none;
 color: white;
}
footer{
 background-color: #000000;
 color: white;
 padding: 10px;
 clear: both;
 text-align: center;
}
footer a{
 color: white;
}
.progress-bar progress-bar-success{
  text-align: center;
}
</style>
<body>
  <nav>
    <label class="logo">VOTE</label>
  </nav>
  <div class="container">
  <h2 class="heading"><center>Election vote results</h2>
  <div class="progress">
    <div class="progress-bar progress-bar-success" role="progressbar" style="width:<?php echo $bjpPercent; ?>%">
     BJP  <?php echo $bjpPercent; ?>%
   </div><br>
  </div>

  <div class="progress">
    <div class="progress-bar progress-bar-info" role="progressbar"  style="width:<?php echo $aitcPercent ?>%">
    AITC  <?php echo $aitcPercent; ?>%
  </div>
  </div>
  <div class="progress">
    <div class="progress-bar progress-bar-warning" role="progressbar"  style="width:<?php echo $dmkpcPercent ?>%">
    DMKP  <?php echo $dmkpcPercent; ?>%
  </div>
  </div>
  <div class="progress">
    <div class="progress-bar progress-bar-danger" role="progressbar"  style="width:<?php echo $swpPercent ?>%">
    SWP   <?php echo $swpPercent; ?>%
  </div>
  </div>
</div>
<button><a href="admin menu.php">BACK</a></button>
<footer>
  Email id: <a href="#">sharmabeena572000@gmail.com</a>
</footer>
  </body>
  </html>
