<?php  

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "cc";

$conn = mysqli_connect($servername, $username, $password, $dbname);

  
if(! $conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}  

$name = $_POST['name'];
$message = $_POST['message'];


$sql = "INSERT INTO feedback (`name`, `message`)
VALUES ('$name', '$message')";
if ($conn->query($sql) === TRUE) {
  header('location:../index.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 
?>