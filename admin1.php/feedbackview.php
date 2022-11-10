<?php
include("connection.php");
session_start();
if(!isset($_SESSION["admin"]))
{
?>
<script type="text/javascript">
  window.location="feedbackview.php";
</script>
<?php
}
?>



<html>
	<head>
		<link rel="stylesheet" type="text/css" href="feedbackview.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,200&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,200&display=swap" rel="stylesheet">
    <style>
      
      /* import url('https://fonts.googlepis.com/css2?family=poppins:wght@100;300;400;500;600&display=swap'); */
:root{
	--orange:#ff7800;
	--black:#130f40;
	--light-color:#666;
	--box-shadow: 0.5rem 1rem rgba(0,0,0,.1);
	--border:1rem solid rgba(0,0,0,.1);
	--outline: :1rem solid rgba(0,0,0,.1);

} 

body{
background-color: aliceblue; 

}

.main{
  width: 100%;
   /* background-color: #ff7800; */
   height: 30px;
   bottom: 2px;
   padding-bottom: 10px;
}
h1{
	
	margin-right: 700px;
  margin-bottom: 20px;

	
}


header{
	font-family: 'Poppins', sans-serif;
	margin: 0;
	padding: 0;
	box-sizing: border-box;
  outline: none;
  border:none; 
	text-decoration: none;
	text-transform: capitalize;
	transition: all .2s linear;
  background-size: cover;
  background-position: center;
  /* background-color: #ff7800; */

    
}

ul{
	float: left;
	list-style-type: none;
	margin-top: 2px;
    padding-left: 890px;
}
ul li{
	display: inline-block;
}

ul li a{
	text-decoration: none;
	color: rgb(8, 8, 8);
	padding: 5px 5px;
	border: 1px solid transparent;
	transition: 0.6s ease;

}
ul li a:hover{
	background-color: rgb(10, 10, 10);
	color: rgb(248, 245, 245);
}
ul li.active a{
	background-color: rgb(10, 9, 9);
	color: rgb(250, 250, 250);
}



ul li ul{
 position: absolute;
}

                  

    

    </style>

  </head>
	<body>

	<header>
    <div class="main">



      <ul>
      <div class="dropdown">
                      <button onclick="myFunction()" class="dropbtn">Home</button>
                      <div id="myDropdown" class="dropdown-content">
                          <li></li>
						    <a href="../adminhome2.php">Home</a></li>
			        		<a href="applicationview1.php">Application View</a>
                            <a href="listofapprovestudent.php">Approved Student</a>               
                            <a href="listofdeclinestudent.php">Declined Student</a>

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
      <h1>Feedbacks..</h1>
	
	
    
                  <table border=3>
                    <thead>
                      <tr>
                      
                      <th>SI NUMBER</th>
                        <th>NAME</th>                  
                        <th>MESSAGE</th>
                
                      </tr>
                    </thead>
                    <tbody>
                    <?php

    $res=mysqli_query($conn,"select * from feedback");
	
    $i=1;
    while($rs=mysqli_fetch_array($res))
    {
	
        ?>
         <tr>
		 <td><?php echo $i++;?></td>
             <td><?php echo $rs["name"]; ?></td>
             <td><?php echo $rs["message"]; ?></td>
                
      	
        
            
          </tr>
        <?php
    }
?>   
                        
                     
                     
                    </tbody>
                   
  </body>
</html>