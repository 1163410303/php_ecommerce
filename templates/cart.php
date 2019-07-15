<?php session_start();?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>COMP344 Assignment 1 2019  team 6</title>
    <!-- Bootstrap -->
    <link href="../static/styles/pages/bootstrap-4.0.0.css" rel="stylesheet">
  </head>
  <body>
    <?php 
      if(!isset($_SESSION['userstatus'])){
         echo "<script> window.location.href='login.php'</script>";
      }
     ?>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <div class="container">
        <a class="navbar-brand" href="/shop">BookShop-Team6</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="shop.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="cart.php">Cart</a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="myorder.php">My Order</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="func.php?action=logout">Logout</a>
                <a class="dropdown-item" href="contact.php">Setting</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
   </nav>

    <div class="container">
      <div class="row text-center">
        <!-- {% for i in range(cartLength) %} -->
    <?php 
		include("dbconnect.php"); 
		$uid = $_SESSION['userid'];
		$sql = "select * from cart where user_id='$uid' ";
		$result = $conn->query($sql);
		$quantitys = array();
		$names = array();
		$images = array();
    $cids = array();

		//read the password from database
		if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			
			$quantitys[] = $row['quantity'];
			$gid = $row['good_id'];
      $cids[] = $row['id'];
			//read the names and urls
			$sql = "select * from good where id='$gid' ";
			$result_temp = $conn->query($sql);
				if ($result_temp->num_rows > 0) {
					while($row = $result_temp->fetch_assoc()) {
						$names[] = $row['name'];
						$images[] = $row['good_url'];
					}
				}
			}
		}else{
      echo "no items ";
    }


    $images[0] = "../static/images/booktest.jpg";
		$conn->close();
		$arrlength = count($quantitys);
for ($i=0; $i <$arrlength ; $i++) {  
echo <<<ENF
<div class="col-md-4 pb-1 pb-md-0">
  <div class="card">
    <img class="card-img-top" src={$images[$i]} alt="Card image cap">
        <div class="card-body">
              <h5 class="card-title">$names[$i] * $quantitys[$i]</h5>
              <p class="card-text">test</p>
              <a href="/confirm_myorder/{{ cartids[i] }}" class="btn btn-primary">Confirm</a>
              <a href="func.php?action=delete_cart&cid=$cids[$i]" class="btn btn-danger">Delete</a>
        </div>
  </div>
</div>
ENF;
		}
    ?>


       


      </div>
    </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../static/js/jquery-3.2.1.min.js"></script>
    <script src="../static/js/popper.min.js"></script>
    <script src="../static/js/bootstrap-4.0.0.js"></script>
  </body>
</html>