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
	$username=$_POST["username"];
	$password=$_POST["password"];
	$email=$_POST["email"];
	$postcode=$_POST["postcode"];
	$credit_number=$_POST["credit_number"];
	$credit_expiry=$_POST["credit_expiry"];
	$uid ='';
	if (!va_email($email)) {
		echo "<script> window.location.href='login.php?msg=Wrong email!'</script>";
		exit();
	}
	if (!va_credit($credit_number, $credit_expiry)) {
		echo "<script> window.location.href='login.php?msg=Wrong creditcard!'</script>";
		exit();
	}
	if (!va_post($postcode)) {
		echo "<script> window.location.href='login.php?msg=Wrong postcode!'</script>";
		exit();
	}
	$sql = "INSERT INTO user (username, password, email, credit_number, credit_expiry) VALUES ('$username', '$password','$email', '$credit_number', '$credit_expiry')"; 

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
	    email_sender($email);
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



function va_credit($number,$expiry){ 
	$cardnumber = preg_replace ("/\D|\s/","", $number);
        $cardlength = strlen($cardnumber);
	if($cardlength != 0){
		//luhn algorithm
        	$parity = $cardlength % 2;
            	$sum = 0;
            	for($i=0; $i<$cardlength; $i++){
                	$digit = $cardnumber[$i];
                	if($i%2 == $parity) $digit = $digit * 2;
                	if($digit > 9) $digit = $digit - 9;
               		$sum = $sum + $digit;
            	}
            	$valid1 = ($sum %10==0);
		if (preg_match ("/^([0-9]{4})([0-9]{2})([0-9]{2})$/", $expiry, $parts))
		{
 
		//Checks whether it is a date, and checkdate is month, day and year        
			if(checkdate($parts[2],$parts[3],$parts[1]))
            
				$valid2 = true;
        
			else
            
				$valid2 = false;
    
		}

		else
		$valid2 = false;
		$result = $valid1 && $valid2;
    	return $result;
        }
	$result = false;	
    return $result;
}


function va_email($email)
{

  if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
  	return false;
	}
   return true;
}


function va_post($post_code)
{
	return (preg_match("/^\d{6}$/",$post_code))?true:false;
}

function email_sender($toValue){
	$from_value = "1163410303@hit.edu.cn";
	$to_value = $toValue;
	$subject_value = "registration confirmation ";
	$text_value = "COMP344 Assignment 1 2019  ------You are the member now!-----";
	$headers = "From: " . "COMP344 Assignment 1 2019  team 6";
	mail($to_value, $subject_value, $text_value, $headers);
}

?>