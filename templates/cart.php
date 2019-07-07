<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MY CART</title>
    <!-- Bootstrap -->
    <link href="../static/styles/pages/bootstrap-4.0.0.css" rel="stylesheet">
  </head>
  <body>
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
            <li class="nav-item active">
              <a class="nav-link" href="cart.php">Cart</a>
            </li>
              <li class="nav-item">
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
      <div class="row text-center">
        <!-- {% for i in range(cartLength) %} -->
        <div class="col-md-4 pb-1 pb-md-0">
          <div class="card">
            <img class="card-img-top" src="../static/images/booktest.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><!-- {{ goods[i].name }}{{ quantitys[i]}} -->JIUYIN Book * 999</h5>
              <p class="card-text"><!-- {{ goods[i].content }} -->test</p>
              <a href="/confirm_myorder/{{ cartids[i] }}" class="btn btn-primary">Confirm</a>
              <a href="/delete_cart/{{ cartids[i] }}" class="btn btn-danger">Delete</a>
            </div>
          </div>
        </div>
         <div class="col-md-4 pb-1 pb-md-0">
          <div class="card">
            <img class="card-img-top" src="../static/images/booktest.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><!-- {{ goods[i].name }}{{ quantitys[i]}} -->JIUYIN Book * 999</h5>
              <p class="card-text"><!-- {{ goods[i].content }} -->test</p>
              <a href="/confirm_myorder/{{ cartids[i] }}" class="btn btn-primary">Confirm</a>
              <a href="/delete_cart/{{ cartids[i] }}" class="btn btn-danger">Delete</a>
            </div>
          </div>
        </div>
         <div class="col-md-4 pb-1 pb-md-0">
          <div class="card">
            <img class="card-img-top" src="../static/images/booktest.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><!-- {{ goods[i].name }}{{ quantitys[i]}} -->JIUYIN Book * 999</h5>
              <p class="card-text"><!-- {{ goods[i].content }} -->test</p>
              <a href="/confirm_myorder/{{ cartids[i] }}" class="btn btn-primary">Confirm</a>
              <a href="/delete_cart/{{ cartids[i] }}" class="btn btn-danger">Delete</a>
            </div>
          </div>
        </div>
        <!-- {% endfor %} -->

      </div>

    </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../static/js/jquery-3.2.1.min.js"></script>
    <script src="../static/js/popper.min.js"></script>
    <script src="../static/js/bootstrap-4.0.0.js"></script>
  </body>
</html>