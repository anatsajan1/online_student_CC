<?php
session_start();
?>

<html>
	<head>
		<title>Registration form design</title>
		<link rel="stylesheet" type="text/css" href="../reg.css">
	</head>
<body>
  <div class="regform">
		<h1>Feedback</h1>
	  <form action="../student/feedbackconn.php" method="POST">
		<p>Name</p>
		<input type="text" name="name"   value="<?php echo $_SESSION['name'] ?>" placeholder="Enter Name"required autofocus>
		<p>Message</p>
		<textarea type="text" name="message" placeholder="Enter message" rows="5" cols="50" required></textarea>
		
		<button type="submit" value="Submit">Sent</button>
	  </form>
	    
	</div>
</body>
</html>