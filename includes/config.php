<?php
$servername="localhost";
 $username="root";
 $password="";
 $database="demo";
 $port="3307";
 $socket="";
 

 //create A connection
 $conn =mysqli_connect($servername, $username,$password,$database,$port,$socket);

 //die if connection was not successful 
if(!$conn)
  die("Connection was successful!");

  echo "Database connected";

 

  
  ?>