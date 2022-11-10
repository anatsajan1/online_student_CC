<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cc";
$conn = new mysqli($servername, $username, $password,$dbname);
          if($conn === false){
              die("ERROR: Could not connect. " . mysqli_connect_error());
            }

?>










