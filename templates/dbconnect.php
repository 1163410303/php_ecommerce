<?php

$servername = "202.118.249.4";
$username = "hitstu46";
$password = "Pqpz0Ek4";
$database = "hitstu46";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

if (mysqli_connect_errno()) 
{
 die("Connection failed to database: " . mysqli_connect_error());
}

// Use database 
mysqli_select_db($conn, $database);


?> 


