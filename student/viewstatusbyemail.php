<?php
session_start();
?>
<html>
<head>
  <link rel="stylesheet"type="text/css" href="../studentlogin.css">
  
  <href= REGISTRATION FORM></href>
    
  <title>seachstatus</title>


</head>

<body>
      
      <div class="loginbox">
        
        <h1>look your request status</h1>
        <form action="../student/create_pdf.php" method="post">
          <p>email</p>
          <input type="email" name="email"  value="<?php echo $_SESSION['email'] ?>" placeholder="Enter email">
          
          <input type="submit"  value="search">
        </form>
        <h4>
          <a href="../studenthome.php">home</a>
        </h4>
      </div>