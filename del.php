<?php
include("auth_session.php");
      require('db.php');
      $user=$_SESSION['username'];
  
      $query = "DELETE FROM users WHERE(username='".$user."')"; 
  
      $con->query($query); 
   
      session_destroy();    

       header("Location: registration.php");


?>