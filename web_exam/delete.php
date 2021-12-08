<?php
include('session.php');



if(isset($_GET['deleteid'])){
$id = $_GET['deleteid'];
$query = "delete from users where id ='$id' ";
$result = mysqli_query($con,$query);
if($result){
header("location:display.php");
}
 else{
   die(mysqli_error($con));
 }
}



 ?>
