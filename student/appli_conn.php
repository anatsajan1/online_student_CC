<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cc";
$conn = new mysqli($servername, $username, $password,$dbname);
          if($conn === false){
              die("ERROR: Could not connect. " . mysqli_connect_error());
            }
if (mysqli_connect_errno())
 {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }
  
      
  $name=$_POST['name'];
  $image=$_POST['image'];
  $address=$_POST['address'];
  $gender=$_POST['gender'];
  $dob=$_POST['dob'];
  $email=$_POST['email'];
  $number=$_POST['number'];
  $place=$_POST['place'];
  $institute=$_POST['institutename'];
  $img=$_POST['image1'];
  $wtw=$_POST['wheretowhere'];


  $sql ="INSERT INTO `application` (`name`,`image`,`address`,`gender`,`dob`,`email`,`number`,`place`,`institutename`,`img`,`wheretowhere`,`status`) 
  VALUES ('$name','$image','$address','$gender','$dob','$email','$number','$place','$institute','$img','$wtw','0')";
      if (mysqli_query($conn, $sql))
      {
        header("location:../student/feedback.php");
      }
      else
      {
          echo "Error: " . $sql."<br>" . mysqli_error($conn);
         
      }
      mysqli_close($conn);
  ?>