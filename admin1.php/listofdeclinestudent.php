<?php
include("connection.php");
session_start();
if(!isset($_SESSION["admin"]))

?>


<html>
 <head>
	  <link rel="stylesheet" type="text/css" href="../admin/applicationview.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,200&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,200&display=swap" rel="stylesheet">
	</head>
  <style>
    .main{
  width: 100%;
   /* background-color: #ff7800; */
   height: 100px;
   bottom: 2px;
   padding-bottom: 10px;
}
h1{
	
	margin-right: 700px;
	
}
ul{
	float: left;
	list-style-type: none;
	margin-top: 2px;
    padding-left: 850px;
}
  </style>

  
  <body>

  <ul>
      <div class="dropdown">
                      <button onclick="myFunction()" class="dropbtn">Home</button>
                      <div id="myDropdown" class="dropdown-content">
                          <li></li>
                  <a href="../adminhome2.php">Home</a>
			        		<a href="applicationview1.php">Application View</a>
                  <a href="listofapprovestudent.php">Approved Student</a>              
				        	<a href="../admin/feedbackview.php">Feedback View</a>
				        	<a href="../index.php">Logout </a>
                  
                          
                      </div>
                  </li>
                    </div>


                       <script>
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
</script>
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
  </script>


</header>            

      </ul>
      <h1>Applications...</h1>

    </div>        
                  <table border='3'>
                  <thead>
                      <tr>
                      
                      <th>SI NUMBER</th>
                        <th>NAME</th>
                        <th>PROFILE</th>
                        <th>ADDRESS</th> 
                        <th>GENDER</th> 
                        <th>DATE OF BIRTH</th>                   
                        <th>EMAIL</th>
                        <th>NUMBER</th>
                        <th>PLACE</th>
                        <th>INSTITUTE NAME</th>
                        <th>COLLEGE ID</th>
                        <th>WHERE TO WHERE</th>
                    
                        
                        <th>APPROVE</th>
                      



            
                      </tr>
                  </thead>
                  <tbody>
                    
                    <?php

    $res=mysqli_query($conn,"select * from application where status='3'");
	
    $i=1;
    while($rs=mysqli_fetch_array($res))
    {
	
        ?>
         <tr>
		 <td><?php echo $i++;?></td>
             <td><?php echo $rs["name"]; ?></td>
             <td><?php  $pathx="../image/"; 
             echo $file=$rs["image"];
             echo '<img src="'.$pathx.$file.'"height=100 width=100>';?></td>
             <td><?php echo $rs["address"]; ?></td>
             <td><?php echo $rs["gender"]; ?></td>
             <td><?php echo $rs["dob"]; ?></td>
             <td><?php echo $rs["email"]; $email=$rs["email"]; ?></td>
             <td><?php echo $rs["number"]; ?></td>
             <td><?php echo $rs["place"]; ?></td> 
             <td><?php echo $rs["institutename"]; ?></td> 
             <td><?php  $pathx="../image/"; 
             echo $file=$rs["img"];
             echo '<img src="'.$pathx.$file.'"height=100 width=100>';?></td>
             <td><?php echo $rs["wheretowhere"]; ?></td>  
             
             
      	
            
             <?php    echo "<td><a href=approve.php?approve_email=".$email. ">APPROVE</a></td>"; ?>
      			 
                      
          </tr>
   
        <?php
    }
?>   
                     </tbody>                           
                   
</body>
</html>