<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Product Page Template</title>
    <!-- Bootstrap -->
    <link href="../static/styles/pages/bootstrap-4.0.0.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="/">BookShop</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="shop.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cart.php">Cart</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="myorder.php">My Order</a>
          </li>
         <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="contact.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="login.php">LogOut</a>
                <a class="dropdown-item" href="contact.php">Setting</a>
              </div>
            </li>
        </ul>
      <!--   <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Searh" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">搜索</button> -->
        <!-- </form> -->
      </div>
    </nav>
    <div class="container mt-2">
<!-- {#      <div class="row">#}
{#        <div class="col-12">#}
{#          <div class="jumbotron">#}
{#            <h1 class="text-center">{{ name }}</h1>#}
{#<img src="{{ titleimg }}" alt="" class="img-fluid">#}
{#          </div>#}
{#        </div>#}
{#      </div>#} -->
    </div>
    <div class="container">
      <div class="row">
        <div class="text-center col-md-6 col-12 col-xl-12">
          <h3><b>Order</b></h3>
		  <p>We will contact you at the first time and deliver the goods after the audit.</p>
		  <p><em><strong>Please check your personal information carefully before confirming the order. We are not responsible for the failure of the order due to your personal reasons.</strong></em></p>
		<form role="form" id="detail" method="post">
  <div class="form-group">
    <label class="sr-only" for="number">Name</label>
    <input type="number" class="form-control" id="number" placeholder="Enter number" name="quantity">
  </div>
  <button type="submit" class="btn btn-danger" onclick="form=document.getElementById('detail');form.action='/add_myorder/{{ gid }}'">Confirm Order</button>
<button type="submit" class="btn btn-dark" onclick="form=document.getElementById('detail');form.action='/add_cart/{{ gid }}'">Add to cart</button>
</form>
        </div>
      </div>
    </div>
    <div class="container mt-4">
  <div class="row">
        <div class="col-sm-6">
          <div class="card">
<div class="card-body">
  <h5 class="card-title"><em><strong>Policy</strong></em></h5>
  <p class="card-text">xxxxxtesttesttesttest</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
<div class="card-body">
  <h5 class="card-title"><em><strong>Policy</strong></em></h5>
  <p class="card-text">xxxxxtesttesttesttest</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-12 col-xl-12">
          <h2>Detail</h2>
          <p>{{ content }}</p>
            <!-- {%  for image in images %} -->
            <div>
                <img  class="d-block w-100" src="../static/images/test.jpg">
                <img  class="d-block w-100" src="../static/images/test.jpg">
                <img  class="d-block w-100" src="../static/images/test.jpg">
                <img  class="d-block w-100" src="../static/images/test.jpg">
                <img  class="d-block w-100" src="../static/images/test.jpg">
            </div>
            <!-- {% endfor %} -->
        </div>
</div>
    </div>
    <hr>
<hr>
<hr>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.0.0.js"></script>
  <script>
      // window.onload = function () {
          // if("{{ msg }}"=='添加成功'){
              // alert("添加成功")
          // }
      // }
  </script>
  </body>
</html>