<?php 
session_start();
include("dbconnect.php"); 


$email=$_POST["email"];
$username=$_POST["username"];
$password=$_POST["password"];

  
$sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')"; 

if (mysqli_query($conn, $sql) === TRUE) {
	$_SESSION['userstatus'] = "loggedin";
    echo "<script> window.location.href='shop.php'</script>";
} else {
    echo "Error: Query did not succeed";
}

?>

