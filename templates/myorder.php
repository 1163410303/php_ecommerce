<?php session_start();?>
<head>
    <meta charset="utf-8">
    <title>Bootstrap eCommerce</title>
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
              <li class="nav-item active">
              <a class="nav-link" href="myorder.php">My Order</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="login.php">Logout</a>
                <a class="dropdown-item" href="contact.php">Setting</a>
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
    <div class="table-responsive">
      <table class="table table-hover">
            <thead>
                <tr>
                    <th>OrderID</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Address</th>
                    <th>Date</th>
                    <th>State</th>
                    <th>Return</th>
                </tr>
            </thead>
            <tbody>
            <!-- {% for order in orders%} -->
                    <tr>
                        <td>1111111</td>
                        <td>JIUYIN Book</td>
                        <td>999</td>
                        <td>100$</td>
                        <td>Harbin</td>
                        <td>2019.7.6</td>
                        <td>In transit</td>
                        <td><button class="btn-danger" onclick="cancel_order({{ order.id }})">Apply for Return</button></td>
                    </tr>

                    <tr>
                        <td>1111111</td>
                        <td>JIUYIN Book</td>
                        <td>999</td>
                        <td>100$</td>
                        <td>Harbin</td>
                        <td>2019.7.6</td>
                        <td>In transit</td>
                        <td><button class="btn-danger" onclick="cancel_order({{ order.id }})">Apply for Return</button></td>
                    </tr>

                    <tr>
                        <td>1111111</td>
                        <td>JIUYIN Book</td>
                        <td>999</td>
                        <td>100$</td>
                        <td>Harbin</td>
                        <td>2019.7.6</td>
                        <td>In transit</td>
                        <td><button class="btn-danger" onclick="cancel_order({{ order.id }})">Apply for Return</button></td>
                    </tr>

                    <tr>
                        <td>1111111</td>
                        <td>JIUYIN Book</td>
                        <td>999</td>
                        <td>100$</td>
                        <td>Harbin</td>
                        <td>2019.7.6</td>
                        <td>In transit</td>
                        <td><button class="btn-danger" onclick="cancel_order({{ order.id }})">Apply for Return</button></td>
                    </tr>
           <!--  {% endfor %} -->
            </tbody>
      </table>
    </div>
</div>
   <script src="../static/js/jquery-3.2.1.min.js"></script>
    <script src="../static/js/popper.min.js"></script>
    <script src="../static/js/bootstrap-4.0.0.js"></script>
<script >
function cancel_order(id) {
    $.post(
			'/cancel_order/',{
				"id" : id
				},
			function (data){
				if(data) {
                    alert('订单已申请退货')
                    window.location.reload()
                }
			});
}
</script>
</body>
</html>
