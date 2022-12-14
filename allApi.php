
<?php
    require('db.php');
   if($con){
echo "connected";
$sql="select * from users";
$result=mysqli_query($con,$sql);
if($result){

    header("content-type: JSON");
    $i=0;
    while($row =mysqli_fetch_assoc($result)){

        $response[$i]['id']=$row['id'];
        $response[$i]['username']=$row['username'];
        $response[$i]['email']=$row['email'];
        $response[$i]['create_datetime']=$row['create_datetime'];
$i++;


    }
    echo json_encode($response);
}


   }else{
    echo "conn failed";
   }
   
   
   
   ?>