<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Register Menu</title>
    <link rel="stylesheet" href="css/style.css" media="screen">
  <style>
  body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
  box-sizing: border-box;
}
.wrapper{
  display: flex;
  width: 70%;
  margin-left: 200px;
  margin-top: 150px;
  justify-content:space-around;
}
.card1{
 width: 150px;
 height: 150px;
 padding: 2rem 1rem;
 background: #fff;
 position: relative;
 display: flex;
 align-items: flex-end;
 box-shadow: 0px 7px 10px rgba(0,0,0,0.5);
 transition: 0.5s ease-in-out;
}

.card1:hover{
  transform: translateY(20px);
}
.card1::before{
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  height: 100%;
  background:linear-gradient(to bottom, rgba(0, 0, 0, 100),rgba(0, 0, 0, 100));
  z-index: 2;
  transition: 0.5s all;
  opacity: 0;
}
.card1:hover::before{
  opacity: 1;
}
.card1 img{
  width: 90%;
  height: 80%;
  position: absolute;
  margin-left: 10px;
  top: 0;
  left: 0;
}
.card1 .info{
  position: relative;
  z-index: 3;
  color: #000000;
  opacity: 0;
  transform: translateY(30px);
  transition: 0.5s;
}
.card1:hover .info{
  opacity: 1;
  transform: translateY(0px);
}
.card1 .info h1{
  font-size: 25px;
  letter-spacing: 1px;
  margin-top: 8px;
  margin-bottom: 30px;
  color:white;
}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}
.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}
.sidenav a:hover {
  color: #f1f1f1;
}
.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
#main {
  transition: margin-left .5s;
  padding: 16px;
}
@media screen and (max-height: 850px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
footer{
  background-color: #000000;
  color: white;
  padding: 10px;
  clear: both;
  margin-top: 170px;
  text-align: center;
}
footer a{
  color: white;
}

  </style>
</head>
  <body>
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="#">Menu</a>
      <a href="login.php">Login</a>
      <a href="admin.php">Admin</a>
      <a href="logout.php">Logout</a>
    </div>
    <nav>
          <label class="logo">VOTE</label>
          <button class="button"><a href="logout.php">Logout</a></button>
        </nav>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
    <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
      document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("main").style.marginLeft= "0";
      document.body.style.backgroundColor = "white";
    }
    </script>
<div class="wrapper">
  <div class="card1">
    <img src="img/group.png" class="img1">
    <div class="info">
    <a href="nominations.php">
      <h1>Candidates</h1>
    </a>
  </div>
  </div>

  <div class="card1">
    <img src="img/online-voting.png" class="img2">
    <div class="info">
    <a href="selection.php">
    <h1    >Vote here</h1>
  </a>
</div>
  </div>

  <div class="card1">
    <img src="img/note.png" class="img5">
    <div class="info">
    <a href="instructions.php">
    <h1>Instructions</h1>
  </a>
</div>
  </div>

</div>
  <footer>
    Email id: <a href="#">sharmabeena572000@gmail.com</a>
  </footer>
  </body>
  </html>
