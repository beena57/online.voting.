<!DOCTYPE html>
<html>
<head>
<title>List</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="css/style.css" media="screen">
<style>
body{
  font-family: sans-serif;
  background-color: #c5c6c7;
}
table {
  width: 100%;
  border-collapse: collapse;
}
button{
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
</style>
<body>
  <nav>
    <label class="logo">VOTE</label>
    <button class="button"><a href="logout.php">Logout</a></button>
  </nav>
  <center>
  <h2>LIST OF VOTERS</h2>
  <table border="1" cellpadding="20px">
    <tr>
      <th>EMAIL ID</th>
      <th>VOTE</th>
      <th>TIME</th>
    </tr>
<?php
include("connection.php");
error_reporting(0);
$query = "SELECT *  FROM voter_s";
$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);


echo $result['voters_email']." ".$result['voters_choice']." ".$result['time'];
if ($total!=0) {
  $result = mysqli_fetch_assoc($data);
  while ($result = mysqli_fetch_assoc($data))
  {
    echo"
    <tr>
    <td align=center>".$result['voters_email']."</td>
    <td align=center>".$result['voters_choice']."</td>
    <td align=center>".$result['time']."</td>
    </tr>
    ";
  }
}
else {
  echo "No record found";
}


 ?>
</table>
<br>
<button><a href="admin menu.php">BACK</a></button>
<br>
<footer>
  Email id: <a href="#">sharmabeena572000@gmail.com</a>
</footer>
</body>
</html>
