html>
	<head>
		<title>Registration form design</title>
		<link rel="stylesheet" type="text/css" href="reg.css">
	</head>
<body>
  <div class="regform">
	
		<h1>Register Here</h1>
	  <form action="regcon.php" method="POST">
		<p>Name</p>
		<input type="text" name="name" placeholder="Enter Name"required autofocus>
		<p>Address</p>
		<input type="text" name="address" placeholder="Enter Address"required>
		<p>Email</p>
		<input type="email" name="email" placeholder="Enter your email"required>
		<p>Mobile Number</p>
		<input type="text" name="number" id="contact" placeholder="Enter your number"  required pattern="[0-9]+" maxlength="10S" minlength="10" autofocus>
		<p>Password</p>
		<input type="Password" name="pwd" placeholder="Enter Password"required>
		<p>Confirm Password</p>
		<input type="password" name="cpwd" placeholder="Enter ConformPassword"required autofocus>
		<input type="submit" name="submit" >
		
		
	  </form>

	    <button><a id="login" href="../studentlogin.php">Login</a></button>
	</div>
</body>
</html>