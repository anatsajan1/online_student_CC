<?php
include("connection.php");

$email=$_GET['email'];
//echo $email;
$sql=mysqli_query($conn,"UPDATE `application` SET `status`='1' WHERE email='$email'");
	
if($sql){
    echo "<script>alert('Application updated successfully')</script>";
    echo "<script>window.open('applicationview.php','_self')</script>";
}
    

?>