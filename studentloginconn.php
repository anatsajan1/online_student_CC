<?php
session_start();
?>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {


include('studentconnection/connection.php');



$password=$_POST['password'];
$email=$_POST['email'];

    
$sql = "SELECT * FROM `login` WHERE `email`= '$email' AND `pwd`='$password'";
// echo "working";

$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_array($result)){

// echo $row;

$email=$row['email'];

$usertype=$row['type'];

$_SESSION['name']=$row['name'];
$_SESSION['address']=$row['address'];
$_SESSION['email']=$row['email'];
$_SESSION['number']=$row['number'];

// echo $usertype;

$count = mysqli_num_rows($result);



if($usertype=='student')
{
    echo "<script> alert('Login Successfully..!');
			window.location='studenthome.php'</script>";
}
else if($usertype=='cadmin')
{
    echo "<script> alert('Login Successfully..!');
			window.location='adminhome.php'</script>";
}

else if($usertype=='dadmin')
{
    echo "<script> alert('Login Successfully..!');
			window.location='adminhome2.php'</script>";
}



else{
   // $showError = "Password or Username do not match";
    echo "<script> alert('Login failed..!');
    window.location='studentlogin.php'</script>";
			
			
}

}
echo "<script> alert('Login Error..Email or Password do not match!');
window.location='studentlogin.php'</script>";

}
?>
<!--echo "<script> alert('Sumit Successfully!!'); 
        //window.location='../student/feedback.html';</script>