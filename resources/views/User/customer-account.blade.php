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
                <li aria-current="page" class="breadcrumb-item active">My account</li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-3">
            <!--
              *** CUSTOMER MENU ***
              _________________________________________________________
              -->
            <div class="card sidebar-menu">
              <div class="card-header">
                <h3 class="h4 card-title">Customer section</h3>
              </div>
              <div class="card-body">
                <ul class="nav nav-pills flex-column"><a href="customer-orders" class="nav-link active"><i class="fa fa-list"></i> My orders</a><a href="customer-wishlist" class="nav-link"><i class="fa fa-heart"></i> My wishlist</a><a href="customer-account" class="nav-link"><i class="fa fa-user"></i> My account</a><a href="index" class="nav-link"><i class="fa fa-sign-out"></i> Logout</a></ul>
              </div>
            </div>
            <!-- /.col-lg-3-->
            <!-- *** CUSTOMER MENU END ***-->
          </div>
          <div class="col-lg-9">
            <div class="box">
              <h1>My account</h1>
              <p class="lead">Change your personal details or your password here.</p>
              <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
              <h3>Change password</h3>
              <form>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="password_old">Old password</label>
                      <input id="password_old" type="password" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="password_1">New password</label>
                      <input id="password_1" type="password" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="password_2">Retype new password</label>
                      <input id="password_2" type="password" class="form-control">
                    </div>
                  </div>
                </div>
                <!-- /.row-->
                <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save new password</button>
                </div>
              </form>
              <h3 class="mt-5">Personal details</h3>
              <form>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="firstname">Firstname</label>
                      <input id="firstname" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="lastname">Lastname</label>
                      <input id="lastname" type="text" class="form-control">
                    </div>
                  </div>
                </div>
                <!-- /.row-->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="company">Company</label>
                      <input id="company" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="street">Street</label>
                      <input id="street" type="text" class="form-control">
                    </div>
                  </div>
                </div>
                <!-- /.row-->
                <div class="row">
                  <div class="col-md-6 col-lg-3">
                    <div class="form-group">
                      <label for="city">Company</label>
                      <input id="city" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                    <div class="form-group">
                      <label for="zip">ZIP</label>
                      <input id="zip" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                    <div class="form-group">
                      <label for="state">State</label>
                      <select id="state" class="form-control"></select>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                    <div class="form-group">
                      <label for="country">Country</label>
                      <select id="country" class="form-control"></select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="phone">Telephone</label>
                      <input id="phone" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input id="email" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save changes</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
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