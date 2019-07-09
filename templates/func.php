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
	case 'add_cart':
			add_cart();
			break;	
	case 'delete_cart':
			delete_cart();
		break;
	default:
		echo "error";
		break;
}


function login(){
	session_start();
	include("dbconnect.php"); 

	$username=$_POST["username"];
	$password=$_POST["password"];
	$temp='';
	$uid ='';
	$sql = "select * from user where username='$username' ";
	$result = $conn->query($sql);

	//read the password from database
	if ($result->num_rows > 0) {
	  while($row = $result->fetch_assoc()) {
		 $temp = $row['password'];
		 $uid = $row['id'];
	  }
	  	$conn->close();
		//compare the password
		if ($temp == $password) {
			$_SESSION['userstatus'] = "loggedin";
			$_SESSION['userid'] = "$uid";
		    echo "<script> window.location.href='shop.php'</script>";
		}else{
			echo "<script> window.location.href='login.php?msg=Wrong password!'</script>";
		}
	} 
	else {
		echo "<script> window.location.href='login.php?msg=Please register first!'</script>";
	}
}

function register(){
	session_start();
	include("dbconnect.php"); 
	$email=$_POST["email"];
	$username=$_POST["username"];
	$password=$_POST["password"];
	$uid ='';
	$sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')"; 

	if (mysqli_query($conn, $sql) === TRUE) {
		$sql = "select * from user where username='$username' ";
		$result = $conn->query($sql);
			if ($result->num_rows > 0) {
			  while($row = $result->fetch_assoc()) {
				 $uid = $row['id'];
			  }
			}  
		$_SESSION['userstatus'] = "loggedin";
		$_SESSION['userid'] = "$uid";
		$conn->close();
	    echo "<script> window.location.href='shop.php'</script>";
	} else {
		$conn->close();
	    echo "<script> window.location.href='login.php?msg=User already exists!'</script>";
	}
}

function logout(){
	session_start();
	unset($_SESSION['userstatus']); 
	unset($_SESSION['userid']);
	echo "<script> window.location.href='login.php'</script>";
}

function add_cart(){
    session_start();
    $uid=$_SESSION['userid'];
    $gid=$_SESSION['gid'];
    $quantity=$_POST['quantity'];
    include("dbconnect.php"); 
	$sql = "INSERT INTO cart (user_id, good_id, quantity) VALUES ('$uid', '$gid','$quantity')"; 

	if (mysqli_query($conn, $sql) === TRUE) {
		unset($_SESSION['gid']);
		$conn->close();
	    echo "<script> window.location.href='cart.php'</script>";

	} else {
	    echo "error";
	}
}

function delete_cart(){
	$cid = $_GET['cid'];
	include("dbconnect.php");
	$sql = "delete from cart where id='$cid' ";
	if (mysqli_query($conn, $sql) === TRUE) {
		echo "<script> window.location.href='cart.php'</script>";
	}else{
		echo "error cart can not be deleted";
	}
	$conn->close();
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

function email_sender(){
	$from_value = "1163410303";
	$to_value = "player949@hit.edu.cn";
	$subject_value = "registration confirmation ";
	$text_value = "You are the member now!";
	$headers = "From: " . "hit-1163410303";
	mail($to_value, $subject_value, $text_value, $headers);
	echo "<p>The email has been sent to</p>";
	echo "<p>$to_value</p>";
}

?>