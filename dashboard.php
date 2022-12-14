<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Welcome page</title>
    <link rel="stylesheet" href="style2.css" />
</head>
<body>
    <div class="home" >
 
    <h1>Hello <?php echo $_SESSION['username']; ?></h1>
        <img src="bad.gif"/>
        <p> in Home page</p>
       
        <a href="profile.php" class="button">
  <span class="icon"></span>
  <span class="text">Profile </span>
</a>
<a href="logout.php" class="button2">
  <span class="icon"></span>
  <span class="text">LogOut </span>
</a>
<a href="del.php" class="button3">
  <span class="icon"></span>
  <span class="text">Delete </span>
</a>  
    </div>
</body>
</html>