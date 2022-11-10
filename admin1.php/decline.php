<?php
include("connection.php");

if(isset($_GET['decline_email'])){
    $update=$_GET['decline_email'];

$update_application="update `application` set status='0' WHERE email='$update'";
$sql=mysqli_query($conn,$update_application);
//header('Location: applicationview1.php');
if($sql){
    echo "<script>alert('Application declined successfully')</script>";
    echo "<script>window.open('applicationview1.php','_self')</script>";
}
}	

?>