<?php
	session_start();
	
	
	if(!isset($_SESSION['email'])){
		header("location:http://localhost/online art gallery/index.html");
	}
?>
<!DOCTYPE html>

<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=================== The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags ===================-->
    <meta name="description" content="Dye - Multipurpose Creative Shop Art & Photography HTML Template">
    <meta name="author" content="dye">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png" />
    <title>Cart - Dye  </title>
    <!--=================== Bootstrap core CSS ===================-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <!--=================== Animate CSS ===================-->
    <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css" media="all">
    <!--=================== Paira Framework Main CSS ===================-->
    <link href="assets/css/paira.css" rel="stylesheet" type="text/css" media="all">
    <!--=================== Paira Framework Font and Color CSS ===================-->
    <link href="assets/css/paira-color-font.css" rel="stylesheet" type="text/css" media="all">
    <!--=================== Paira Framework Main Responsive CSS ===================-->
    <link href="assets/css/paira-responsive.css" rel="stylesheet" type="text/css" media="all">
    <!--=================== Font Awesome ===================-->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <!--=================== HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries ===================-->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js" type="text/javascript"></script>
    <script src="assets/js/respond.min.js" type="text/javascript"></script>
    <![endif]-->
    <!--=================== Google Fonts ===================-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600" rel="stylesheet">
</head>
<body>
<!--=================== Main Body Content Container ===================-->
<div class="paira-container pages-container">
    <!--=================== Header Container ===================-->
    <header>
        <!--=================== Header Top Section ===================-->
        <section class="header-top">
            <div class="container-fluid padding-fix">
                <div class="row">
                    <div class="pull-left logo col-md-3 col-sm-3 col-xs-4">
                        <a href="cu_index.php"><img src="assets/images/logo.png" alt="" class="pull-left"></a>
                    </div>
                    <div class="text-center col-md-6 col-sm-6 col-xs-4">
                        <a href="#" class="menu-pops"><img src="assets/images/menu-plus.png" alt="" class="margin-right-10 img-hover"><img src="assets/images/menu-plus-hover.png" alt="" class="margin-right-10 img-hovers"><span class="text-uppercase">MENU</span></a>
                    </div>
                    <div class="pull-right col-md-3 col-sm-3 col-xs-4">
                        <div class="account-ajax-cart pull-right">
                            <ul class="list-inline pull-right">
                                <li>
                                    <a href="#" class="search-popup"><img src="assets/images/search.png" alt="" class=""></a>
                                </li>
                                <li><a href="logout.php" class="login-popup"><img src="assets/images/corg.png" alt="" class=""><?php echo  $_SESSION['email'];  ?></a></li></a></li>
                                <li class="dropdown cart-menu-body">
                                    <a href="cart.php"><img src="assets/images/shopping-bag.png" alt="" class="position-r"><span class="span"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <!--=================== Main Content Container ===================-->
    <main class="article-page">
        <!--=================== Breadcrumb Section ===================-->
        <section class="breadcrumb-container paira-margin-bottom-3">
            <div class="breadcrumb">
                <div class="container-fluid padding-fix">
                    <ul class="list-inline">
                        <li><a href="cu_indexphp">Home</a></li>
                        <li>-</li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </section>
    <!--=================== Footer Container ===================-->
    <footer>
        <!--=================== Footer Top Section ===================-->
        <section class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12 col-sm-12">
                        <div class="paira-widget paira-subscribe">
                            <h3 class="text-center margin-clear text-uppercase">Sign up for the newsletter</h3>
                            <hr class="margin-bottom-40 margin-top-15">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Email Address">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">SUBSCRIBE</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================== Footer Bottom Section ===================-->
        <section class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="paira-widget paira-menu">
                            <h4>Importent link</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Market Place</a></li>
                                <li><a href="#">Author Terms</a></li>
                                <li><a href="#">Licenses</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">About Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="paira-widget paira-menu">
                            <h4>Support</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Forums</a></li>
                                <li><a href="#">Autdye Blog</a></li>
                                <li><a href="#">Faqs</a></li>
                                <li><a href="#">Terms & Conditions </a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="paira-widget paira-social">
                            <h4>Follow Us</h4>
                          <ul class="social-links list-inline">
                                <li><a href="https://www.facebook.com/profile.php?id=100009810821468" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://plus.google.com " target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="https://twitter.com " target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/pritam-mondal-3645b6201/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="https://www.behance.net " target="_blank"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                        <div class="paira-widget paira-payment">
                            <h4>Payment Methode</h4>
                            <img src="assets/images/footer/payment-icon.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-12 col-sm-12">
                        <div class="paira-widget paira-copyright">
                            <p class="margin-clear">© Pritam. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
</div>
<!--=================== Ajax Cart Dialog ===================-->
<div class="modal fade paira-cart-popup" id="paira-ajax-cart" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
                <div class="row margin-top-40">
                    <div class="col-md-7 col-sm-7 col-xs-12 cart-table margin-top-40">
                        <h3 class="margin-top-0">Shopping Cart</h3>
                        <div class="cart-table-inner">
                            <div class="column full-width overflow">
                                <div class="row-1">
                                    <a href="#" class="pull-left"><img class="" src="assets/images/product/product-10.jpg" alt=""></a>
                                </div>
                                <div class="row-2">
                                    <a href="product.php" class="cart-menu-line-title">Butterfly eyes women</a>
                                    <div class="quentity margin-bottom-15 pull-left">
                                        <div class="product_quantity_group product-quantity-fix">
                                            <input type="text" class="form-control text-center pull-left font-size-16 margin-left-15" value="2">
                                            <div class="up-down text-center pull-left overflow">
                                                <span class="up" data-direction="up"><i class="fa fa-angle-up"></i></span>
                                                <span class="down" data-direction="down"><i class="fa fa-angle-down"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-group full-width dropdown-category margin-bottom-15">
                                        <button type="button" class="btn btn-success dropdown-toggle text-uppercase" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">1024 x 1024 px<i class="fa fa-angle-down dropdown-icon"></i></button>
                                        <ul class="dropdown-menu text-uppercase">
                                            <li><a href="#">Bed Room</a></li>
                                            <li><a href="#">Showcase</a></li>
                                            <li><a href="#">Dining Room</a></li>
                                            <li><a href="#">Living Room</a></li>
                                            <li><a href="#">Drowing Room</a></li>
                                        </ul>
                                    </div>
                                    <h2 class="margin-clear cart-product-price">$180</h2>
                                </div>
                                <div class="row-3"><p><a href="#" class="remove margin-top-20"><i class="fa fa-trash fa-2x"></i></a></p></div>
                            </div>
                            <hr>
                            <div class="column full-width overflow">
                                <div class="row-1">
                                    <a href="#" class="pull-left"><img class="" src="assets/images/product/product-9.jpg" alt=""></a>
                                </div>
                                <div class="row-2">
                                    <a href="product.php" class="cart-menu-line-title">Butterfly eyes women</a>
                                    <div class="quentity margin-bottom-15 pull-left">
                                        <div class="product_quantity_group product-quantity-fix">
                                            <input type="text" class="form-control text-center pull-left font-size-16 margin-left-15" value="2">
                                            <div class="up-down text-center pull-left overflow">
                                                <span class="up" data-direction="up"><i class="fa fa-angle-up"></i></span>
                                                <span class="down" data-direction="down"><i class="fa fa-angle-down"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-group full-width dropdown-category margin-bottom-15">
                                        <button type="button" class="btn btn-success dropdown-toggle text-uppercase" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">1024 x 1024 px<i class="fa fa-angle-down dropdown-icon"></i></button>
                                        <ul class="dropdown-menu text-uppercase">
                                            <li><a href="#">Bed Room</a></li>
                                            <li><a href="#">Showcase</a></li>
                                            <li><a href="#">Dining Room</a></li>
                                            <li><a href="#">Living Room</a></li>
                                            <li><a href="#">Drowing Room</a></li>
                                        </ul>
                                    </div>
                                    <h2 class="margin-clear cart-product-price">$180</h2>
                                </div>
                                <div class="row-3"><p><a href="#" class="remove margin-top-20"><i class="fa fa-trash fa-2x"></i></a></p></div>
                            </div>
                            <hr>
                        </div>
                        <div class="cart-menu-buttons text-right">
                            <a href="#" class="btn btn-success pull-left">Continue Shopping</a>
                            <a href="#" class="btn btn-success pull-right">Update Cart</a>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-12 cart-table margin-top-40">
                        <div class="margin-bottom-30">
                            <h3 class="margin-clear margin-bottom-15">Sub Total</h3>
                            <div class="cart-sub-total">
                                <textarea id="note" name="note" class=" margin-bottom-15 form-control" placeholder="Special instruction for seller"></textarea>
                                <h1 class="margin-bottom-15 text-center"><span class="money">$510.00</span></h1>
                                <input type="submit" id="checkout" class="btn btn-success btn-lg btn-block" name="checkout" value="Proceed To Checkout">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=================== Login Dialog ===================-->
<div class="modal fade paira-login-popup" id="paira-login" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
                <div class="row">
                    <div class="col-md-3 col-sm-3 paira-margin-top-3">
                        <div class="currency">
                            <h3 class="text-capitalize margin-bottom-30">currency</h3>
                            <ul class="list-inline text-uppercase full-width">
                                <li><a href="#"><span>CAD</span></a></li>
                                <li><a href="#"><span>USD</span></a></li>
                                <li><a href="#"><span>AUD</span></a></li>
                                <li><a href="#"><span>GBP</span></a></li>
                                <li><a href="#"><span>CAD</span></a></li>
                                <li><a href="#"><span>YUN</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-9 paira-margin-top-3">
                        <h3 class="text-capitalize margin-bottom-30">Login</h3>
                        <form accept-charset="UTF-8" action="#" class="contact-form" method="post">
                            <div>
                                <input name="form_type" type="hidden" value="contact">
                                <input name="utf8" type="hidden" value="✓">
                                <div class="input-group margin-bottom-20">
                                    <span class="input-group-addon" id="basic-addon1">Email</span>
                                    <input type="text" class="form-control" aria-describedby="basic-addon3">
                                </div>
                                <div class="input-group margin-bottom-20">
                                    <span class="input-group-addon" id="basic-addon2">Password</span>
                                    <input type="text" class="form-control" aria-describedby="basic-addon3">
                                </div>
                            </div>
                        </form>
                        <div class="margin-bottom-20 for-pass full-width text-right">
                            <a href="reset-password.php" class="forget pull-left margin-top-10 text-underline">Reset Password?</a>
                            <a href="login.php" class="btn btn-success btn-lg">Login</a>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12 paira-margin-top-3">
                        <h3 class="text-capitalize margin-bottom-30">Register</h3>
                        <form accept-charset="UTF-8" action="#" class="contact-form" method="post">
                            <div>
                                <input name="form_type" type="hidden" value="contact">
                                <input name="utf8" type="hidden" value="✓">
                                <div class="input-group margin-bottom-20">
                                    <span class="input-group-addon" id="basic-addon3">First Name</span>
                                    <input type="text" class="form-control" aria-describedby="basic-addon3">
                                </div>
                                <div class="input-group margin-bottom-20">
                                    <span class="input-group-addon" id="basic-addon4">Last Name</span>
                                    <input type="text" class="form-control" aria-describedby="basic-addon3">
                                </div>
                                <div class="input-group margin-bottom-20">
                                    <span class="input-group-addon" id="basic-addon5">Email</span>
                                    <input type="text" class="form-control" aria-describedby="basic-addon3">
                                </div>
                                <div class="input-group margin-bottom-20">
                                    <span class="input-group-addon" id="basic-addon6">Password</span>
                                    <input type="text" class="form-control" aria-describedby="basic-addon3">
                                </div>
                            </div>
                        </form>
                        <div class="margin-bottom-20 for-pass full-width text-right">
                            <a href="login.php" class="btn btn-success btn-lg">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=================== Menu Dialog ===================-->
<div class="modal fade paira-menu-popup" id="paira-menu" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg text-center">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
                <div class="row">
                    <div class="col-md-12 margin-top-15">
                        <div class="menus">
                            <h3>MAIN MENU</h3>
                            <ul class="list-unstyled margin-top-20">
                                <li><a href="http://localhost/online art gallery/customer/cu_index.php">Home</a></li>
                                <li><a href="collection.php">Shop</a></li>
                                <li><a href="list-collections.php">List Collection</a></li>  
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                                <li><a href="logout.php">Logout</a></li>
                           
                                 <li><a href="article.php">article</a></li>  
                                <li><a href="404.php">404</a></li>
                                   
                                
                            </ul>
                            <hr>
                            <ul class="social-links list-inline">
                                <li><a href="https://www.facebook.com/profile.php?id=100009810821468" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://plus.google.com " target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/pritam-mondal-3645b6201/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="https://www.behance.net " target="_blank"><i class="fa fa-behance"></i></a></li>
                            </ul>>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=================== Search Dialog ===================-->
<div class="modal fade paira-search-popup search-pops" id="paira-search" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
                <div class="row">
                    <div class="col-md-12 paira-margin-top-1">
                        <form class="popup-search-form">
                            <input type="text" class="form-control padding-clear text-capitalize pop-light" name="q" value="" placeholder="Search here..."/>
                            <button class="search"><i class="fa fa-search fa-2x"></i></button>
                            <button class="btn btn-success btn-lg text-uppercase pull-right margin-top-15">go</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=================== Placed at the end of the document, so the pages load faster ===================-->
<script src="assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/jquery-migrate-3.0.0.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="assets/js/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.mousewheel.min.js" type="text/javascript"></script>
<!--=================== Paira Framework Main Javascript ===================-->
<script src="assets/js/paira.js" type="text/javascript"></script>
</body>


</html>
</html>