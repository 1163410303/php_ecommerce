<?php session_start();?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>hit-1163410303</title>
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
            <li class="nav-item active">
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
                <a class="dropdown-item" href="logout.php">Logout</a>
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
      <hr>
    <div class="container">
      <div class="row">
        <div class="col-4">
          <div class="row">
            <div class="col-2"><img class="rounded-circle" alt="Free Shipping" src="../static/images/item1.gif"></div>
            <div class="col-lg-6 col-10 ml-1">
              <h4>Free Ship</h4>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="row">
            <div class="col-2"><img class="rounded-circle" alt="Free Shipping" src="../static/images/item1.gif"></div>
            <div class="col-lg-6 col-10 ml-1">
              <h4>High Quality</h4>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="row">
            <div class="col-2"><img class="rounded-circle" alt="Free Shipping" src="../static/images/item1.gif"></div>
            <div class="col-lg-6 col-10 ml-1">
              <h4>Low Price</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <h2 class="text-center">Recommendation</h2>
    <hr>
    <div class="container">
      <div class="row text-center">
        <div class="col-md-4 pb-1 pb-md-0">
          <div class="card">
            <img class="card-img-top" src="../static/images/booktest.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Book Title</h5>
              <p class="card-text">description</p>
              <a href="detail.php" class="btn btn-primary">Detail</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 pb-1 pb-md-0">
          <div class="card">
            <img class="card-img-top" src="../static/images/booktest.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Book Title</h5>
              <p class="card-text">description</p>
              <a href="detail.php" class="btn btn-primary">Detail</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 pb-1 pb-md-0">
          <div class="card">
            <img class="card-img-top" src="../static/images/booktest.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Book Title</h5>
              <p class="card-text">description</p>
              <a href="detail.php" class="btn btn-primary">Detail</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row text-center mt-4">
        <div class="col-md-4 pb-1 pb-md-0">
          <div class="card">
            <img class="card-img-top" src="../static/images/booktest.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Book Title</h5>
              <p class="card-text">description</p>
              <a href="detail.php" class="btn btn-primary">Detail</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 pb-1 pb-md-0">
          <div class="card">
            <img class="card-img-top" src="../static/images/booktest.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Book Title</h5>
              <p class="card-text">description</p>
              <a href="detail.php" class="btn btn-primary">Detail</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 pb-1 pb-md-0">
          <div class="card">
            <img class="card-img-top" src="../static/images/booktest.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Book Title</h5>
              <p class="card-text"> description</p>
              <a href="detail.php" class="btn btn-primary">Detail</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <h2 class="text-center">Other stuff</h2>
    <hr>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <ul class="list-unstyled">
            <li class="media">
              <img class="mr-3" src="../static/images/book_little.jpg" alt="Generic placeholder image">
              <div class="media-body">
                <h5 class="mt-0 mb-1">test</h5>
                test test test
                  test test test
              </div>
            </li>
            <li class="media my-4">
              <img class="mr-3" src="../static/images/book_little.jpg" alt="Generic placeholder image">
              <div class="media-body">
                <h5 class="mt-0 mb-1">test</h5>
                test test test
                  test test test
              </div>
            </li>
          </ul>
        </div>
        <div class="col-lg-4">
          <ul class="list-unstyled">
            <li class="media">
              <img class="mr-3" src="../static/images/book_little.jpg" alt="Generic placeholder image">
              <div class="media-body">
                <h5 class="mt-0 mb-1">test</h5>
                test test test
                  test test test
              </div>
            </li>
            <li class="media my-4">
              <img class="mr-3" src="../static/images/book_little.jpg" alt="Generic placeholder image">
              <div class="media-body">
                <h5 class="mt-0 mb-1">test</h5>
                test test test
                  test test test
              </div>
            </li>
          </ul>
        </div>
        <div class="col-lg-4">
          <ul class="list-unstyled">
            <li class="media">
              <img class="mr-3" src="../static/images/book_little.jpg" alt="Generic placeholder image">
              <div class="media-body">
                <h5 class="mt-0 mb-1">test</h5>
                test test test
                  test test test
              </div>
            </li>
            <li class="media my-4">
              <img class="mr-3" src="../static/images/book_little.jpg" alt="Generic placeholder image">
              <div class="media-body">
                <h5 class="mt-0 mb-1">test</h5>
                test test test
                  test test test
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <hr>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../static/js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../static/js/popper.min.js"></script>
    <script src="../static/js/bootstrap-4.0.0.js"></script>
    <script>
      window.onload = function () {
        
          }
      }
  </script>
  </body>
</html>