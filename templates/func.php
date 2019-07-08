<?php 
$action = $_GET['action'];
switch ($action) {
	case 'register':
		register();
		break;

	case 'logout':
		logout();
		break;

	case 'sendEmail':
		break;

	case 'login':
		login();
		break;
	default:
		echo "error";
		break;
}

function register(){
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
	    echo "<script> window.location.href='login.php?msg=User already exists!'</script>";
	}
}

function va_credit($number,$expiry)
{
    $result = true;
    return $result;
}

function va_email($email)
{
    $result = true;
    return $result;
}


function va_post($post_code)
{
    $result = true;
    return $result;
}

function logout(){
	session_start();
	unset($_SESSION['userstatus']); 
	echo "<script> window.location.href='login.php'</script>";
}

function login(){
	session_start();
	include("dbconnect.php"); 

	$username=$_POST["username"];
	$password=$_POST["password"];
	$temp='';
	$sql = "select * from user where username=$username ";
	$result = $conn->query($sql);

	//read the password from database
	if ($result->num_rows > 0) {
	  while($row = $result->fetch_assoc()) {
		 $temp = $row['password'];
	  }
	  	$conn->close();
		//compare the password
		if ($temp == $password) {
			$_SESSION['userstatus'] = "loggedin";
		    echo "<script> window.location.href='shop.php'</script>";
		}else{
			echo "<script> window.location.href='login.php?msg=Wrong password!'</script>";
		}
	} 
	else {
		echo "<script> window.location.href='login.php?msg=Please register first!'</script>";
	}
	

	


}
?>