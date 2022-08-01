<?php
include 'connection.php';
 if (isset($_POST['vote'])) {
   $email = $_POST['email'];
   if (isset($_POST['choice'])) {
     $choice = $_POST['choice'] ? $_POST['choice'] : "NULL" ;
     header("Location:selection.php?choice_not_set");
   }
   if (!filter_var($_POST['EMAIL'], FILTER_VALIDATE_EMAIL)) {
     header("Location:selection.php?email_invalid");
   }else {
     $sql = mysqli_query($con, "SELECT voter_email FROM voter_s WHERE voters_email = '$email'");
   }
   if (mysqli_num_rows($sql) > 0) {
      header("Location:selection.php?email_has_been_used");
   }else {
     $date_added = date("Y-m-d H:i:s");
     $query = mysqli_query($con, "INSERT INTO voter_s VALUES('','$email','$choice', '$date_added');");
   }
   if (!$query) {
     header("Location:selection.php?could_not_vote");
   }else {
     header("Location:thanks.php");
   }
 }
 ?>
