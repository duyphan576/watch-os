<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Obaju : e-commerce template</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="{{ asset('/User/vendor/bootstrap/css/bootstrap.min.css') }}">
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="{{ asset('/User/vendor/font-awesome/css/font-awesome.min.css') }}">
  <!-- Google fonts - Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700">
  <!-- owl carousel-->
  <link rel="stylesheet" href="{{ asset('/User/vendor/owl.carousel/assets/owl.carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('/User/vendor/owl.carousel/assets/owl.theme.default.css') }}">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="{{ asset('/User/css/style.default.css') }}" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="{{ asset('/User/css/custom.css') }}">
  <!-- Favicon-->
  <link rel="shortcut icon" href="{{ asset('/User/favicon.png') }}">
  <!-- Tweaks for older IEs-->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
  <!-- navbar-->
  <header class="header mb-5">
    <!--
      *** TOPBAR ***
      _________________________________________________________
      -->
    <div id="top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offer mb-3 mb-lg-0"><a href="#" class="btn btn-success btn-sm">Offer of the day</a><a href="#" class="ml-1">Get flat 35% off on orders over $50!</a></div>
          <div class="col-lg-6 text-center text-lg-right">
            <ul class="menu list-inline mb-0">
              <li class="list-inline-item"><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
              <li class="list-inline-item"><a href="register">Register</a></li>
              <li class="list-inline-item"><a href="contact">Contact</a></li>
              <li class="list-inline-item"><a href="#">Recently viewed</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Customer login</h5>
              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
              <form action="customer-orders" method="post">
                <div class="form-group">
                  <input id="email-modal" type="text" placeholder="email" class="form-control">
                </div>
                <div class="form-group">
                  <input id="password-modal" type="password" placeholder="password" class="form-control">
                </div>
                <p class="text-center">
                  <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                </p>
              </form>
              <p class="text-center text-muted">Not registered yet?</p>
              <p class="text-center text-muted"><a href="register"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
            </div>
          </div>
        </div>
      </div>
      <!-- *** TOP BAR END ***-->


    </div>
    <nav class="navbar navbar-expand-lg">
      <div class="container"><a href="index" class="navbar-brand home"><img src="User/img/logo.png" alt="Obaju logo" class="d-none d-md-inline-block"><img src="User/img/logo-small.png" alt="Obaju logo" class="d-inline-block d-md-none"><span class="sr-only">Obaju - go to homepage</span></a>
        <div class="navbar-buttons">
          <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
          <button type="button" data-toggle="collapse" data-target="#search" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></button><a href="basket" class="btn btn-outline-secondary navbar-toggler"><i class="fa fa-shopping-cart"></i></a>
        </div>
        <div id="navigation" class="collapse navbar-collapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a href="#" class="nav-link active">Home</a></li>
            <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">Men<b class="caret"></b></a>
              <ul class="dropdown-menu megamenu">
                <li>
                  <div class="row">
                    <div class="col-md-6 col-lg-3">
                      <h5>Clothing</h5>
                      <ul class="list-unstyled mb-3">
                        <li class="nav-item"><a href="category" class="nav-link">T-shirts</a></li>
                        <li class="nav-item"><a href="category" class="nav-link">Shirts</a></li>
                        <li class="nav-item"><a href="category" class="nav-link">Pants</a></li>
                        <li class="nav-item"><a href="category" class="nav-link">Accessories</a></li>
                      </ul>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <h5>Shoes</h5>
                      <ul class="list-unstyled mb-3">
                        <li class="nav-item"><a href="category" class="nav-link">Trainers</a></li>
                        <li class="nav-item"><a href="category" class="nav-link">Sandals</a></li>
                        <li class="nav-item"><a href="category" class="nav-link">Hiking shoes</a></li>
                        <li class="nav-item"><a href="category" class="nav-link">Casual</a></li>
                      </ul>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <h5>Accessories</h5>
                      <ul class="list-unstyled mb-3">
                        <li class="nav-item"><a href="category" class="nav-link">Trainers</a></li>
                        <li class="nav-item"><a href="category" class="nav-link">Sandals</a></li>
                        <li class="nav-item"><a href="category" class="nav-link">Hiking shoes</a></li>
                        <li class="nav-item"><a href="category" class="nav-link">Casual</a></li>
                        <li class="nav-item"><a href="category" class="nav-link">Hiking shoes</a></li>
                        <li class="nav-item"><a href="category" class="nav-link">Casual</a></li>
                      </ul>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <h5>Featured</h5>
                      <ul class="list-unstyled mb-3">
                        <li class="nav-item"><a href="category" class="nav-link">Trainers</a></li>
                        <li class="nav-item"><a href="category" class="nav-link">Sandals</a></li>
                        <li class="nav-item"><a href="category" class="nav-link">Hiking shoes</a></li>
                      </ul>
                      <h5>Looks and trends</h5>
                      <ul class="list-unstyled mb-3">
                        <li class="nav-item"><a href="category" class="nav-link">Trainers</a></li>
                        <li class="nav-item"><a href="category" class="nav-link">Sandals</a></li>
                        <li class="nav-item"><a href="category" class="nav-link">Hiking shoes</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">Ladies<b class="caret"></b></a>
              <ul class="dropdown-menu megamenu">
                <li>
                  <div class="row">
                    <div class="col-md-6 col-lg-3">
                      <h5>Clothing</h5>
                      <ul class="list-unstyled mb-3">
                        <li class="nav-item"><a href="category" class="nav-link">T-shirts</a></li>
                        <li class="nav-item"><a href="category" class="nav-link">Shirts</a></li>
                        <li class="nav-item"><a href="category" class="nav-link">Pants</a></li>
                        <li class="nav-item"><a href="category" class="nav-link">Accessories</a></li>
                      </ul>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <h5>Shoes</h5>
                      <ul class="list-unstyled mb-3">
                        <li class="nav-item"><a href="category" class="nav-link">Trainers</a></li>
                        <li class="nav-item"><a href="category" class="nav-link">Sandals</a></li>
                        <li class="nav-item"><a href="category" class="nav-link">Hiking shoes</a></li>
                        <li class="nav-item"><a href="category" class="nav-link">Casual</a></li>
                      </ul>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <h5>Accessories</h5>
                      <ul class="list-unstyled mb-3">
                        <li class="nav-item"><a href="category" class="nav-link">Trainers</a></li>
                        <li class="nav-item"><a href="category" class="nav-link">Sandals</a></li>
                        <li class="nav-item"><a href="category" class="nav-link">Hiking shoes</a></li>
                        <li class="nav-item"><a href="category" class="nav-link">Casual</a></li>
                        <li class="nav-item"><a href="category" class="nav-link">Hiking shoes</a></li>
                        <li class="nav-item"><a href="category" class="nav-link">Casual</a></li>
                      </ul>
                      <h5>Looks and trends</h5>
                      <ul class="list-unstyled mb-3">
                        <li class="nav-item"><a href="category" class="nav-link">Trainers</a></li>
                        <li class="nav-item"><a href="category" class="nav-link">Sandals</a></li>
                        <li class="nav-item"><a href="category" class="nav-link">Hiking shoes</a></li>
                      </ul>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <div class="banner"><a href="#"><img src="User/img/banner.jpg" alt="" class="img img-fluid"></a></div>
                      <div class="banner"><a href="#"><img src="User/img/banner2.jpg" alt="" class="img img-fluid"></a></div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">Template<b class="caret"></b></a>
              <ul class="dropdown-menu megamenu">
                <li>
                  <div class="row">
                    <div class="col-md-6 col-lg-3">
                      <h5>Shop</h5>
                      <ul class="list-unstyled mb-3">
                        <li class="nav-item"><a href="index" class="nav-link">Homepage</a></li>
                        <li class="nav-item"><a href="category" class="nav-link">Category - sidebar left</a></li>
                        <li class="nav-item"><a href="category-right" class="nav-link">Category - sidebar right</a></li>
                        <li class="nav-item"><a href="category-full" class="nav-link">Category - full width</a></li>
                        <li class="nav-item"><a href="detail" class="nav-link">Product detail</a></li>
                      </ul>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <h5>User</h5>
                      <ul class="list-unstyled mb-3">
                        <li class="nav-item"><a href="register" class="nav-link">Register / login</a></li>
                        <li class="nav-item"><a href="customer-orders" class="nav-link">Orders history</a></li>
                        <li class="nav-item"><a href="customer-order" class="nav-link">Order history detail</a></li>
                        <li class="nav-item"><a href="customer-wishlist" class="nav-link">Wishlist</a></li>
                        <li class="nav-item"><a href="customer-account" class="nav-link">Customer account / change password</a></li>
                      </ul>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <h5>Order process</h5>
                      <ul class="list-unstyled mb-3">
                        <li class="nav-item"><a href="basket" class="nav-link">Shopping cart</a></li>
                        <li class="nav-item"><a href="checkout1" class="nav-link">Checkout - step 1</a></li>
                        <li class="nav-item"><a href="checkout2" class="nav-link">Checkout - step 2</a></li>
                        <li class="nav-item"><a href="checkout3" class="nav-link">Checkout - step 3</a></li>
                        <li class="nav-item"><a href="checkout4" class="nav-link">Checkout - step 4</a></li>
                      </ul>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <h5>Pages and blog</h5>
                      <ul class="list-unstyled mb-3">
                        <li class="nav-item"><a href="blog" class="nav-link">Blog listing</a></li>
                        <li class="nav-item"><a href="post" class="nav-link">Blog Post</a></li>
                        <li class="nav-item"><a href="faq" class="nav-link">FAQ</a></li>
                        <li class="nav-item"><a href="text" class="nav-link">Text page</a></li>
                        <li class="nav-item"><a href="text-right" class="nav-link">Text page - right sidebar</a></li>
                        <li class="nav-item"><a href="404" class="nav-link">404 page</a></li>
                        <li class="nav-item"><a href="contact" class="nav-link">Contact</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
          <div class="navbar-buttons d-flex justify-content-end">
            <!-- /.nav-collapse-->
            <div id="search-not-mobile" class="navbar-collapse collapse"></div><a data-toggle="collapse" href="#search" class="btn navbar-btn btn-primary d-none d-lg-inline-block"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></a>
            <div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block"><a href="basket" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span>3 items in cart</span></a></div>
          </div>
        </div>
      </div>
    </nav>
    <div id="search" class="collapse">
      <div class="container">
        <form role="search" class="ml-auto">
          <div class="input-group">
            <input type="text" placeholder="Search" class="form-control">
            <div class="input-group-append">
              <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </header>
  <div id="all">
    <div id="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <!-- breadcrumb-->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li aria-current="page" class="breadcrumb-item active">Shopping cart</li>
              </ol>
            </nav>
          </div>
          <div id="basket" class="col-lg-9">
            <div class="box">
              <form method="post" action="checkout1">
                <h1>Shopping cart</h1>
                <p class="text-muted">You currently have 3 item(s) in your cart.</p>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th colspan="2">Product</th>
                        <th>Quantity</th>
                        <th>Unit price</th>
                        <th>Discount</th>
                        <th colspan="2">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a href="#"><img src="User/img/detailsquare.jpg" alt="White Blouse Armani"></a></td>
                        <td><a href="#">White Blouse Armani</a></td>
                        <td>
                          <input type="number" value="2" class="form-control">
                        </td>
                        <td>$123.00</td>
                        <td>$0.00</td>
                        <td>$246.00</td>
                        <td><a href="#"><i class="fa fa-trash-o"></i></a></td>
                      </tr>
                      <tr>
                        <td><a href="#"><img src="User/img/basketsquare.jpg" alt="Black Blouse Armani"></a></td>
                        <td><a href="#">Black Blouse Armani</a></td>
                        <td>
                          <input type="number" value="1" class="form-control">
                        </td>
                        <td>$200.00</td>
                        <td>$0.00</td>
                        <td>$200.00</td>
                        <td><a href="#"><i class="fa fa-trash-o"></i></a></td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th colspan="5">Total</th>
                        <th colspan="2">$446.00</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.table-responsive-->
                <div class="box-footer d-flex justify-content-between flex-column flex-lg-row">
                  <div class="left"><a href="category" class="btn btn-outline-secondary"><i class="fa fa-chevron-left"></i> Continue shopping</a></div>
                  <div class="right">
                    <button class="btn btn-outline-secondary"><i class="fa fa-refresh"></i> Update cart</button>
                    <button type="submit" class="btn btn-primary">Proceed to checkout <i class="fa fa-chevron-right"></i></button>
                  </div>
                </div>
              </form>
            </div>
            <!-- /.box-->
            <div class="row same-height-row">
              <div class="col-lg-3 col-md-6">
                <div class="box same-height">
                  <h3>You may also like these products</h3>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="product same-height">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detail"><img src="User/img/product2.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="detail"><img src="User/img/product2_2.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="detail" class="invisible"><img src="User/img/product2.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3>Fur coat</h3>
                    <p class="price">$143</p>
                  </div>
                </div>
                <!-- /.product-->
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="product same-height">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detail"><img src="User/img/product1.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="detail"><img src="User/img/product1_2.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="detail" class="invisible"><img src="User/img/product1.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3>Fur coat</h3>
                    <p class="price">$143</p>
                  </div>
                </div>
                <!-- /.product-->
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="product same-height">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detail"><img src="User/img/product3.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="detail"><img src="User/img/product3_2.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="detail" class="invisible"><img src="User/img/product3.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3>Fur coat</h3>
                    <p class="price">$143</p>
                  </div>
                </div>
                <!-- /.product-->
              </div>
            </div>
          </div>
          <!-- /.col-lg-9-->
          <div class="col-lg-3">
            <div id="order-summary" class="box">
              <div class="box-header">
                <h3 class="mb-0">Order summary</h3>
              </div>
              <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>
              <div class="table-responsive">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>Order subtotal</td>
                      <th>$446.00</th>
                    </tr>
                    <tr>
                      <td>Shipping and handling</td>
                      <th>$10.00</th>
                    </tr>
                    <tr>
                      <td>Tax</td>
                      <th>$0.00</th>
                    </tr>
                    <tr class="total">
                      <td>Total</td>
                      <th>$456.00</th>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="box">
              <div class="box-header">
                <h4 class="mb-0">Coupon code</h4>
              </div>
              <p class="text-muted">If you have a coupon code, please enter it in the box below.</p>
              <form>
                <div class="input-group">
                  <input type="text" class="form-control"><span class="input-group-append">
                    <button type="button" class="btn btn-primary"><i class="fa fa-gift"></i></button></span>
                </div>
                <!-- /input-group-->
              </form>
            </div>
          </div>
          <!-- /.col-md-3-->
        </div>
      </div>
    </div>
  </div>
  <!--
    *** FOOTER ***
    _________________________________________________________
    -->
  <div id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <h4 class="mb-3">Pages</h4>
          <ul class="list-unstyled">
            <li><a href="text">About us</a></li>
            <li><a href="text">Terms and conditions</a></li>
            <li><a href="faq">FAQ</a></li>
            <li><a href="contact">Contact us</a></li>
          </ul>
          <hr>
          <h4 class="mb-3">User section</h4>
          <ul class="list-unstyled">
            <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
            <li><a href="register">Regiter</a></li>
          </ul>
        </div>
        <!-- /.col-lg-3-->
        <div class="col-lg-3 col-md-6">
          <h4 class="mb-3">Top categories</h4>
          <h5>Men</h5>
          <ul class="list-unstyled">
            <li><a href="category">T-shirts</a></li>
            <li><a href="category">Shirts</a></li>
            <li><a href="category">Accessories</a></li>
          </ul>
          <h5>Ladies</h5>
          <ul class="list-unstyled">
            <li><a href="category">T-shirts</a></li>
            <li><a href="category">Skirts</a></li>
            <li><a href="category">Pants</a></li>
            <li><a href="category">Accessories</a></li>
          </ul>
        </div>
        <!-- /.col-lg-3-->
        <div class="col-lg-3 col-md-6">
          <h4 class="mb-3">Where to find us</h4>
          <p><strong>Obaju Ltd.</strong><br>13/25 New Avenue<br>New Heaven<br>45Y 73J<br>England<br><strong>Great Britain</strong></p><a href="contact">Go to contact page</a>
          <hr class="d-block d-md-none">
        </div>
        <!-- /.col-lg-3-->
        <div class="col-lg-3 col-md-6">
          <h4 class="mb-3">Get the news</h4>
          <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
          <form>
            <div class="input-group">
              <input type="text" class="form-control"><span class="input-group-append">
                <button type="button" class="btn btn-outline-secondary">Subscribe!</button></span>
            </div>
            <!-- /input-group-->
          </form>
          <hr>
          <h4 class="mb-3">Stay in touch</h4>
          <p class="social"><a href="#" class="facebook external"><i class="fa fa-facebook"></i></a><a href="#" class="twitter external"><i class="fa fa-twitter"></i></a><a href="#" class="instagram external"><i class="fa fa-instagram"></i></a><a href="#" class="gplus external"><i class="fa fa-google-plus"></i></a><a href="#" class="email external"><i class="fa fa-envelope"></i></a></p>
        </div>
        <!-- /.col-lg-3-->
      </div>
      <!-- /.row-->
    </div>
    <!-- /.container-->
  </div>
  <!-- /#footer-->
  <!-- *** FOOTER END ***-->


  <!--
    *** COPYRIGHT ***
    _________________________________________________________
    -->
  <div id="copyright">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-2 mb-lg-0">
          <p class="text-center text-lg-left">©2019 Your name goes here.</p>
        </div>
        <div class="col-lg-6">
          <p class="text-center text-lg-right">Template design by <a href="https://bootstrapious.com/">Bootstrapious</a>
            <!-- If you want to remove this backlink, pls purchase an Attribution-free License @ https://bootstrapious.com/p/obaju-e-commerce-template. Big thanks!-->
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- *** COPYRIGHT END ***-->
  <!-- JavaScript files-->
  <script src="User/vendor/jquery/jquery.min.js"></script>
  <script src="User/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="User/vendor/jquery.cookie/jquery.cookie.js"> </script>
  <script src="User/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="User/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
  <script src="User/js/front.js"></script>
</body>

</html>