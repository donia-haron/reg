<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Profile page</title>
    <link rel="stylesheet" href="style3.css"/>
<script>
function showDiv() {
   document.getElementById('passDiv').style.display = "block";
   document.getElementById('btnpass').style.display = "none";
}
</script>


</head>
<body>

<?php
    require('db.php');
    $user=$_SESSION['username'];

    $query = "SELECT * FROM users WHERE(username='".$user."')"; 

    $con->query($query); 
 
     $result = $con->query($query);
 
     $row = mysqli_fetch_array($result, MYSQLI_BOTH);
 

?>
<?php
    require('db.php');
if(isset($_REQUEST['password'])){
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query = "UPDATE users ". "SET password = md5($password)  ". 
        "WHERE username ='".$user."'" ;

        
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "Done !!";
            header("Location: login.php");
        } else {
            echo "";
        }
    }else{
       
    }
?>
        <h1 class="login-title">Profile</h1>
      
<div class="card">
<img src="profile.gif" alt="profile" style="width:40%">
  <h1><?php echo $_SESSION['username']; ?></h1>
  <p class="title"> <?php echo  $row['email']; ?></p>
  <p> <?php echo  $row['create_datetime']; ?></p>
<div  id="passDiv"  style="display:none;" >
<hr>
  <p class="title"> Change Password</p>
  <form class="form" action="" method="post">
  <input type="password" class="login-input" name="password"  minlength="5" placeholder="Enter Password"required>
  <input type="submit" name="submit" value="DONE" class="login-button">
</form>

</div>
  <p><button onclick="showDiv()" style="display:block;" id="btnpass">Change Password</button></p>
</div>
</div>


</body>
</html>