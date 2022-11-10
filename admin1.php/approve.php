<?php
include("connection.php");

if(isset($_GET['approve_email'])){
    $update=$_GET['approve_email'];

$update_application="update `application` set status='3' WHERE email='$update'";
$sql=mysqli_query($conn,$update_application);
//header('Location: applicationview1.php');
if($sql){
    echo "<script>alert('Application updated successfully')</script>";
    echo "<script>window.open('applicationview1.php','_self')</script>";
}
}	

?>