<?php
include("connection.php");
session_start();
if(!isset($_SESSION["admin"]))
{
?>
<script type="text/javascript">
  window.location="viewstudent.php";
</script>
<?php
}
?>

<html>
<head>
		<link rel="stylesheet" type="text/css" href="applicationview.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,200&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,200&display=swap" rel="stylesheet">
	</head>
	<header>
			<div class="main">
				
				<ul>
					
					 <li class="active"><a href="adminhome.html">Home</a></li>
					<li><a href="applicationview.php">Application View</a></li>
					<li><a href="feedbackview.php">Feedback View</a></li>
					<li><a href="../index.php">Logout </a></li>	
	
				</ul>
			</div>
   </header> 
						
	
				
		
		
<h1>Registrations</h1>

    
                  <table border=3>
                    <thead>
                      <tr>
                      
                      <th>SI NUMBER</th><th></th>
                        <th>NAME</th><th></th>
                        <th>EAMIL</th> <th></th>                    
                        <th>ADDRESS</th><th></th>
                        <th>NUMBER</th><th></th>




            
                      </tr>
                    </thead>
                    <tbody>
                    <?php

    $res=mysqli_query($conn,"select * from login");
	
    while($rs=mysqli_fetch_array($res))
    {
	
        ?>
         <tr>
		 
             <td><?php echo $rs["id"]; ?></td><td></td>
             <td><?php echo $rs["name"]; ?></td><td></td>  
             <td><?php echo $rs["email"]; ?></td><td></td>  
             <td><?php echo $rs["address"]; ?></td><td></td>  
             <td><?php echo $rs["number"]; ?></td><td></td>    
      	
        
          

			 
          
            
          </tr>
        <?php
    }
?>   
                        
                     
                     
                    </tbody>
                    </header>                   
  </body>
</html>