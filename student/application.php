<?php
session_start();
?>

<html>
	<head>
		<title>Application Form</title>
		<link rel="stylesheet" type="text/css" href=" ../reg.css">
	</head>

<body>
  <div class="regform">
		
		<h1>Appplication Form</h1>
	    <form action="appli_conn.php" method="POST">
		<p>Name</p>
		<input type="text" name="name" value="<?php echo $_SESSION['name'] ?>" placeholder="Enter Name"required autofocus>
		<div class="form-input"></div>
		<p>Profile</p>
		<input type="file" name="image" placeholder="Choose an image from the file" required>
		<p>Address</p>
		<input type="text" name="address" value="<?php echo $_SESSION['address'] ?>" placeholder="Enter Address"required>
	    <p>Gender</p>
	    <div class="row">
			<div class="col-md-3" style="text-align:right">
			 </div>
			 <div class="col-md-6">
			   <input type="radio" name="gender" value="Male">Male
			   <input type="radio" name="gender" value="Female" >Female
		   </div>
		   <br>
		<br><p>Date of Birth</p>
		<input type="date" name="dob" placeholder="Enter number"required>
		<p> Email</p>
		<input type="email" name="email" value="<?php echo $_SESSION['email'] ?>" placeholder="Enter email"required>
		<p>Mobile Number</p>
		<input type="text" name="number" id="contact" value="<?php echo $_SESSION['number'] ?>" placeholder="Enter your number"  required pattern="[0-9]+" maxlength="10S" minlength="10" autofocus>
		<p>Place</p>
		<input type="text" name="place" placeholder="Enter your place"required pattern="[a-zA-Z ]+" autofocus>
		<p>Institute Name</p>
		<input type="text" name="institutename" placeholder="Enter institutename"required pattern="[a-zA-Z ]+" autofocus>
		<p>College Id</p>
		<input type="file" name="image1" placeholder="Choose an image from the file" required>
        <p>Where to Where</p>
		<input type="text" name="wheretowhere" placeholder="Enter wheretowhere"required pattern="[a-zA-Z ]+" autofocus>
        
		<button type="submit" name="submit">Submit</button>
		
	  </form>

	    <button><a id="logout" href="../studenthome.php">back to home</a></button>
	</div>
</body>
</html>