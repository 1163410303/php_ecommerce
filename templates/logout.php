<?php session_start(); ?>
<?php unset($_SESSION['userstatus']); 
echo "<script> window.location.href='login.php'</script>";
?>