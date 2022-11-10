<?php
	
$showAlert = false;
$showError = false;
$exists=false;
	
if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	// Include file which makes the
	// Database Connection.
	include 'studentconnection/connection.php';
	
    $name=$_POST['name'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $pwd=$_POST['pwd'];
    $cpwd=$_POST['cpwd'];
	
   $sql = "Select * from register where email= '$email'";
   
   $result = mysqli_query($conn, $sql);
	
   $num = mysqli_num_rows($result);


   
   

	
	// This sql query is use to check if
	// the username is already present
	// or not in our Database
	if($num == 0) {
		if(($pwd == $cpwd) && $exists==false) {
	
			$hash = password_hash($pwd,
								PASSWORD_DEFAULT);
				
			// Password Hashing is used here.
			$sql2="insert into login(email,pwd,name,address,number,type) values ('$email','$pwd','$name','$address', '$number','student')";
            $sql1 ="insert into `register`(`name`,`address`,`email`,`number`,`pwd`,`cpwd`) 
            values ('$name','$address','$email','$number','$pwd','$cpwd')";
	
			$result2 = mysqli_query($conn, $sql2);
			$result1 = mysqli_query($conn, $sql1);
			

				 if ($result2){
					$showAlert = true;
					echo "<script>alert('Registeration is Successfull...!')
					window.location='studentlogin.php'</script>"; 
					
			     }

			
		}
		else {
			$showError = "Passwords do not match";
			echo "<script> alert('Confirm Passwords do not match or email already exist');
			window.location='Student_Registration.php'</script>";
			
		}	
	}// end if
	

	
}//end if
	
?>