<?php session_start();?>
<head>
    <meta charset="utf-8">
    <title>hit1163410303</title>
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
        <a class="navbar-brand" href="/shop">BookShop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="shop.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cart.php">Cart</a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="myorder.php">My Order</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="login.php">Logout</a>
                <a class="dropdown-item active" href="contact.php">Setting</a>
              </div>
            </li>
          </ul>
          <!-- <form class="form-inline my-2 my-lg-0"> -->
            <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="输入商品名或种类名">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">搜索</button> -->
          <!-- </form> -->
        </div>
      </div>
    </nav>
<div class="container">
<div class="row">
    <div class="col-md-6 col-md-offset-3 col-xl-10 offset-xl-2 p-2">
      <form class="form-inline m-2 p-lg-1" id="username">
        <div class="form-group col-md-4">
			<div>
       		  <p class="form-control-static m-2">Your username is: wang</p>
        	</div>
		</div>
        <div class="form-group col-md-4 ">
          <label for="inputname" class="sr-only">username</label>
          		<input type="text" class="form-control" id="input-username" name="username" placeholder="Enter a new user name here">
		</div>
		<div class=" col-md-4 ">
        	<button type="submit" class="btn btn-danger" onclick="form=document.getElementById('username');form.action='/edit_username/'">Update</button>
      	</div>
	  </form>
    </div>
  </div>
<div class="row">
  <div class="col-md-6 col-md-offset-3 col-xl-10 offset-xl-2 p-2">
    <form class="form-inline" id="edit-pwd">
  <div class="form-group col-md-4">
    <label for="old-pwd">Old pwd：</label>
    <input type="password" class="form-control" id="old-pwd" name="old_password">
  </div>
	<div class="form-group col-md-4">
    	<label for="new-pwd">new pwd：</label>
    	<input type="password" class="form-control" id="new-pwd" name="new_password">
	</div>
	<div class="col-md-4">
  		<button type="submit" class="btn btn-danger" onclick="form=document.getElementById('edit-pwd');form.action='/edit_password/'">Update</button>
	</div>
</form>
  </div>
</div>
<div class="row">
  <div class="col-md-6 col-md-offset-3 col-xl-10 offset-xl-2 p-2">
    <form class="form-inline m-2 p-lg-1" id="edit-email">
      <div class="form-group col-md-4">
        <div>
          <p class="form-control-static m-2">Your E-mail address：player949@hit.edu.cn</p>
        </div>
      </div>
      <div class="form-group col-md-4 ">
        <label for="inputname" class="sr-only">email</label>
        <div>
          <input type="email" class="form-control" id="input-email" placeholder="Enter a new email address here" name="email">
        </div>
      </div>
      <div class=" col-md-4 ">
        <button type="submit" class="btn btn-danger" onclick="form=document.getElementById('edit-email');form.action='/edit_email/'">Update</button>
      </div>
    </form>
  </div>
</div>
<div class="row">
  <div class="col-md-6 col-md-offset-3 col-xl-10 offset-xl-2 p-2">
    <form class="form-inline m-2 p-lg-1" id="phone-number">
      <div class="form-group col-md-4">
        <div>
          <p class="form-control-static m-2">Your phone number is：110410000:</p>
        </div>
      </div>
      <div class="form-group col-md-4 ">
        <label for="input-number" class="sr-only"></label>
        <div>
          <input type="number" class="form-control" id="input-number" placeholder="Enter a new phone number here" name="phone">
        </div>
      </div>
      <div class=" col-md-4 ">
        <button type="submit" class="btn btn-danger" onclick="form=document.getElementById('phone-number');form.action='/edit_phone/'">Update</button>
      </div>
    </form>
  </div>
  <div class="col-md-6 col-md-offset-3 col-xl-10 offset-xl-2 p-2">
    <form class="form-inline m-2 p-lg-1" id="address">
      <div class="form-group col-md-4">
        <div>
          <p class="form-control-static m-2"> Address: Harbin</p>
        </div>
      </div>
      <div class="form-group col-md-4 ">
          <label for="input-address" class="sr-only">input-address</label>
          <textarea class="form-control" rows="3"id="input-address" placeholder="Enter new address" name="address"></textarea>
      </div>
      <div class=" col-md-4 ">
        <button type="submit" class="btn btn-danger" onclick="form=document.getElementById('address');form.action='/edit_address/'">Update</button>
      </div>
    </form>
  </div>
</div>
</div>
   <script src="../static/js/jquery-3.2.1.min.js"></script>
    <script src="../static/js/popper.min.js"></script>
    <script src="../static/js/bootstrap-4.0.0.js"></script>
</body>
</html>
