<?php
   session_start();
    
    
    if(!isset($_SESSION['password'])){
        header("location:http://localhost/online art gallery/ad_login.html");
    }
?>

<!DOCTYPE html>
 <html class="no-js" lang="en"> 

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=================== The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags ===================-->
    <meta name="description" content="Dye - Multipurpose Creative Shop Art & Photography HTML Template">
    <meta name="author" content="dye">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png" />
    <title>Home - Dye </title>
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
<div class="paira-container">
    <!--=================== Header Container ===================-->
    <header>
        <!--=================== Header Top Section ===================-->
        <section class="header-top">
            <div class="container-fluid padding-fix">
                <div class="row">
                    <div class="pull-left logo col-md-3 col-sm-3 col-xs-4">
                        <a href="http://localhost/dye/customer/cu_index.php"><img src="assets/images/logo.png" alt="" class="pull-left"></a>
                    </div>
                    <div class="text-center col-md-6 col-sm-6 col-xs-4">
                        <a href="#" class="menu-pops"><img src="assets/images/menu-plus.png" alt="" class="margin-right-10 img-hover"><img src="assets/images/menu-plus-hover.png" alt="" class="margin-right-10 img-hovers"><span class="text-uppercase">MENU</span></a>
                    </div>
                   
                    <div class="pull-right col-md-3 col-sm-3 col-xs-4">
                        <div class="account-ajax-cart pull-right">
                            <ul class="list-inline pull-right">
                               
                                <li><a href="logout.php" class="login-popup"><img src="assets/images/corg.png" alt="" class="">
                                <?php
                                    
                                    $con=mysqli_connect('localhost','root');
                                    mysqli_select_db($con,'artgallery');

                                    $query = " SELECT name FROM  admin where id='ad-101'";
                                    $queryfire = mysqli_query($con,$query);

                                    $num = mysqli_num_rows($queryfire);
                                    if($num > 0){
                                                  while($admin = mysqli_fetch_array($queryfire)){
                                                    echo $admin['name'];
                                                   }
                                                }
                                ?>
                                </a></li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================== Main Slider Section ===================-->
        <section class="header-middle paira-margin-bottom-2">
            <div class="main-slider paira-animation-container">
                <div id="Carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <img alt="First slide" src="assets/images/slider/slider-1.jpg">
                            <div class="container">
                                <div class="carousel-caption carousel-caption1">
                                    <h1 class="text-capitalize margin-bottom-20 paira-animation" data-paira-animation="fadeInLeft" data-paira-animation-delay="0.2s">Unique Art</h1>
                                    <h1 class="text-capitalize margin-bottom-20 margin-top-0 paira-animation" data-paira-animation="fadeInLeft" data-paira-animation-delay="0.5s">& Paint For Sale</h1>
                                    <a href="collection.php" class="btn btn-primary btn-lg paira-animation" data-paira-animation="fadeInUp" data-paira-animation-delay="0.8s">Show Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img alt="Second slide" src="assets/images/slider/slider-2.jpg">
                            <div class="container">
                                <div class="carousel-caption carousel-caption3">
                                    <h1 class="text-capitalize margin-bottom-20 paira-animation" data-paira-animation="fadeInRight" data-paira-animation-delay="0.2s">Unique Art</h1>
                                    <h1 class="text-capitalize margin-bottom-20 margin-top-0 paira-animation" data-paira-animation="fadeInRight" data-paira-animation-delay="0.5s">& Paint For Sale</h1>
                                    <a href="collection.php" class="btn btn-primary btn-lg paira-animation" data-paira-animation="fadeInUp" data-paira-animation-delay="0.8s">Show Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img alt="Third slide" src="assets/images/slider/slider-3.jpg">
                            <div class="container">
                                <div class="carousel-caption carousel-caption2">
                                    <h1 class="text-capitalize margin-bottom-20 paira-animation"
                                        data-paira-animation="fadeInRight" data-paira-animation-delay="0.2s">Unique Art
                                    </h1>
                                    <h1 class="text-capitalize margin-bottom-20 margin-top-0 paira-animation"
                                        data-paira-animation="fadeInRight" data-paira-animation-delay="0.5s">& Paint For Sale
                                    </h1>
                                    <a href="collection.php" class="btn btn-primary btn-lg paira-animation" data-paira-animation="fadeInUp" data-paira-animation-delay="0.8s">Show Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control paira-animation" href="#Carousel" data-slide="prev" data-paira-animation="fadeIn" data-paira-animation-delay="0.0ms"><span>PR<br>EV</span></a>
                    <a class="right carousel-control paira-animation" href="#Carousel" data-slide="next" data-paira-animation="fadeIn" data-paira-animation-delay="0.10ms"><span>NE<br>XT</span></a>
                    <ol class="carousel-indicators">
                        <li data-target="#Carousel" data-slide-to="0" class="active">01</li>
                        <li data-target="#Carousel" data-slide-to="1">02</li>
                        <li data-target="#Carousel" data-slide-to="2">03</li>
                    </ol>
                    <span class="carousel-indicators-total"></span>
                </div>
            </div>
        </section>
    </header>
    <!--=================== Main Content Container ===================-->
    <main class="home-page">
        <!--=================== Small Banner Section ===================-->
        <section class="banner-small paira-margin-bottom-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12 col-sm-4">
                        <div class="banner-small-back">
                            <img src="assets/images/icon.png" alt="" class="img-responsive pull-left">
                            <h4 class="margin-clear text-capitalize margin-bottom-5"><a href="#">Free shipping</a></h4>
                            <p class="margin-bottom-0 margin-top-5">Verum tamen cum de rebus grand</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-4">
                        <div class="banner-small-back">
                            <img src="assets/images/icon-2.png" alt="" class="img-responsive pull-left">
                            <h4 class="margin-clear text-capitalize margin-bottom-5"><a href="#">Free Frame</a></h4>
                            <p class="margin-bottom-0 margin-top-5">Verum tamen cum de rebus grand</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-4">
                        <div class="banner-small-back last">
                            <img src="assets/images/icon-3.png" alt="" class="img-responsive pull-left">
                            <h4 class="margin-clear text-capitalize margin-bottom-5"><a href="#">M.B Guarantee</a></h4>
                            <p class="margin-bottom-0 margin-top-5">Verum tamen cum de rebus grand</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <!--=================== latest Collection Section ===================-->
         <section class="latest-collection paira-margin-bottom-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 heading-title">
                        <h2 class="text-capitalize margin-clear"><span>Our Latest Collection</span></h2>
                    </div>
                    <div class="product-widget text-center">
                        <div class="col-sm-8 col-md-8 col-xs-12 margin-top-30">
                            <div class="product text-center">
                                <div class="product-image position-r">
                                    <a href="#">
                                        <div class="background-overlay"></div>
                                        <img src="assets/images/product/product-1.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="product-hover">
                                    <h2 class="margin-clear">20 items</h2>
                                    <a href="collection.php" class="margin-top-10">- Shop The Collection -</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-xs-12 margin-top-30">
                            <div class="product text-center">
                                <div class="product-image position-r">
                                    <a href="#">
                                        <div class="background-overlay"></div>
                                        <img src="assets/images/product/product-2.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="product-hover">
                                    <h2 class="margin-clear">20 items</h2>
                                    <a href="collection.php" class="margin-top-10">- Shop The Collection -</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-xs-12 margin-top-30">
                            <div class="product text-center">
                                <div class="product-image position-r">
                                    <a href="#">
                                        <div class="background-overlay"></div>
                                        <img src="assets/images/product/product-3.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="product-hover">
                                    <h2 class="margin-clear">20 items</h2>
                                    <a href="collection.php" class="margin-top-10">- Shop The Collection -</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8 col-md-8 col-xs-12 margin-top-30">
                            <div class="product text-center">
                                <div class="product-image position-r">
                                    <a href="#">
                                        <div class="background-overlay"></div>
                                        <img src="assets/images/product/product-4.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="product-hover">
                                    <h2 class="margin-clear">20 items</h2>
                                    <a href="collection.php" class="margin-top-10">- Shop The Collection -</a>
                                </div>
                            </div>
                        </div>
                        <a href="collection.php" class="btn-primary btn btn-lg margin-top-30">See More Collection</a>
                    </div>
                </div>
            </div>
        </section>
      <!--=================== latest Picture Section ===================-->
      <section class="latest-picture paira-margin-bottom-2">
            <div class="picture-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 heading-title">
                            <h2 class="text-capitalize margin-clear pull-left"><span>Our Latest Pictures</span></h2>
                            <a href="collection.php" class="text-uppercase pull-right margin-top-10">View All</a>
                        </div>
                        <div class="col-sm-4 col-md-4 col-xs-12 margin-top-30">
                            <div class="product text-center">
                                <div class="product-image position-r">
                                    <a href="#">
                                        <div class="background-overlay"></div>
                                        <img src="assets/images/product/product-5.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="product-hover">
                                    <h4 class="margin-clear"><a href="collection.php">Looking big eyes look</a></h4>
                                    <div class="text-center prices">
                                        <h3 class="pull-left margin-right-5 del"><del><span class="money">$170.00</span></del></h3>
                                        <h3 class="pull-left margin-left-5"><span class="money">$120.00</span></h3>
                                    </div>
                                    <div class="paira-wish-compare-con wish-compare-view-cart">
                                        <a href="collection.php" class="product-cart-con btn btn-success"><i class="fa fa-shopping-cart"></i></a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-xs-12 margin-top-30">
                            <div class="product text-center">
                                <div class="product-image position-r">
                                    <a href="#">
                                        <div class="background-overlay"></div>
                                        <img src="assets/images/product/product-6.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                                
                                <div class="product-hover">
                                    <h4 class="margin-clear"><a href="collection.php">Looking big eyes look</a></h4>
                                    <div class="text-center prices">
                                        <h3 class="pull-left margin-right-5 del"><del><span class="money">$180.00</span></del></h3>
                                        <h3 class="pull-left margin-left-5"><span class="money">$100.00</span></h3>
                                    </div>
                                    <div class="paira-wish-compare-con wish-compare-view-cart">
                                        <a href="collection.php" class="product-cart-con btn btn-success"><i class="fa fa-shopping-cart"></i></a>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-xs-12 margin-top-30">
                            <div class="product text-center">
                                <div class="product-image position-r">
                                    <a href="#">
                                        <div class="background-overlay"></div>
                                        <img src="assets/images/product/product-7.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="product-hover">
                                    <h4 class="margin-clear"><a href="collection.php">Looking big eyes look</a></h4>
                                    <div class="text-center prices">
                                        <h3 class="pull-left margin-right-5 del"><del><span class="money">$200.00</span></del></h3>
                                        <h3 class="pull-left margin-left-5"><span class="money">$150.00</span></h3>
                                    </div>
                                    <div class="paira-wish-compare-con wish-compare-view-cart">
                                        <a href="collection.php" class="product-cart-con btn btn-success"><i class="fa fa-shopping-cart"></i></a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-container"></div>
            </div>
        </section>
   
        <!--=================== latest Collection Section ===================-->
        <section class="latest-blog paira-margin-bottom-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 heading-title">
                        <h2 class="text-capitalize margin-clear pull-left"><span>Our Latest Blog</span></h2>
                        <a href="blog.php" class="text-uppercase pull-right margin-top-10">View All</a>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-6 margin-top-30">
                        <div class="blog">
                            <div class="blog-image position-r">
                                <a href="#">
                                    <div class="background-overlay"></div>
                                    <img src="assets/images/blog/blog-7.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="blog-hover">
                                <a href="article.php" class="margin-top-10">- See The blog -</a>
                            </div>
                            <div class="margin-top-15 text-left">
                                <p class="margin-bottom-5">March 05, 2016</p>
                                <h4 class="margin-top-0 margin-bottom-10"><a href="article.php">Our paintis unique for all</a></h4>
                                <a href="blog.php" class="text-uppercase read-more">Read More<i class="fa fa-long-arrow-right margin-left-5"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-6 margin-top-30">
                        <div class="blog">
                            <div class="blog-image position-r">
                                <a href="#">
                                    <div class="background-overlay"></div>
                                    <img src="assets/images/blog/blog-8.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="blog-hover">
                                <a href="article.php" class="margin-top-10">- See The blog -</a>
                            </div>
                            <div class="margin-top-15 text-left">
                                <p class="margin-bottom-5">March 05, 2016</p>
                                <h4 class="margin-top-0 margin-bottom-10"><a href="article.php">Our paintis unique for all</a></h4>
                                <a href="blog.php" class="text-uppercase read-more">Read More<i class="fa fa-long-arrow-right margin-left-5"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-6 margin-top-30">
                        <div class="blog">
                            <div class="blog-image position-r">
                                <a href="#">
                                    <div class="background-overlay"></div>
                                    <img src="assets/images/blog/blog-9.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="blog-hover">
                                <a href="article.php" class="margin-top-10">- See The blog -</a>
                            </div>
                            <div class="margin-top-15 text-left">
                                <p class="margin-bottom-5">March 05, 2016</p>
                                <h4 class="margin-top-0 margin-bottom-10"><a href="article.php">Our paintis unique for all</a></h4>
                                <a href="blog.php" class="text-uppercase read-more">Read More<i class="fa fa-long-arrow-right margin-left-5"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================== Gallery Section ===================-->
        <section class="gallery paira-margin-bottom-2">
            <div class="gallery-background margin-top-30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 heading-title">
                            <h2 class="text-capitalize margin-clear"><span>Instragram Gallery</span></h2>
                        </div>
                        <div class="col-md-3 col-xs-6 col-sm-6 margin-top-30">
                            <div class="instragram-desc text-left">
                                <h4 class="margin-top-0 margin-bottom-10">DYE</h4>
                                <a href="https://www.instagram.com/" class="margin-bottom-10">@ dye</a>
                                <p class="margin-bottom-15">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                                <button class="btn btn-primary btn-lg"><i class="fa fa-instagram margin-right-5"></i>Follow us</button>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6 col-sm-6 margin-top-30">
                            <div class="instragram">
                                <div class="instragram-image position-r">
                                    <a href="https://www.instagram.com/">
                                        <div class="background-overlay"></div>
                                        <img src="assets/images/banner/banner-small-3.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="instragram-hover">
                                    <a href="collection.php" class="margin-top-10">- See Gallery -</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6 col-sm-6 margin-top-30">
                            <div class="instragram">
                                <div class="instragram-image position-r">
                                    <a href="#">
                                        <div class="background-overlay"></div>
                                        <img src="assets/images/banner/banner-small-2.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="instragram-hover">
                                    <a href="collection.php" class="margin-top-10">- See Gallery -</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6 col-sm-6 margin-top-30">
                            <div class="instragram">
                                <div class="instragram-image position-r">
                                    <a href="#">
                                        <div class="background-overlay"></div>
                                        <img src="assets/images/banner/banner-small-1.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="instragram-hover">
                                    <a href="collection.php" class="margin-top-10">- See Gallery -</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================== Banner Section ===================-->
        <section class="banner paira-margin-bottom-2">
            <div class="container">
                <div class="row">
                    <div class="product-widget text-center">
                        <div class="col-sm-8 col-md-6 col-xs-12 overs padding-right-0">
                            <div class="banners text-center">
                                <div class="banner-img position-r">
                                    <a href="#">
                                        <div class="background-overlay"></div>
                                        <img src="assets/images/banner/banner-small-4.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="banner-hover">
                                    <a href="collection.php" class="margin-top-10">- Shop Now -</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-6 col-xs-12 padding-left-0 banner-blank">
                            <div class="banner-desc text-center">
                                <h3 class="margin-clear">Abstract Print</h3>
                                <p class="margin-top-10 margin-bottom-20">A clean and modern take on abstract prints design take on abstract prints desig take on abstract prints design</p>
                                <a href="collection.php"   class="btn btn-success btn-lg">Shop Now</a>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-6 col-xs-12 padding-right-0 banner-blank">
                            <div class="banner-desc text-center">
                                <h3 class="margin-clear">Illustrated Paints</h3>
                                <p class="margin-top-10 margin-bottom-20">A clean and modern take on abstract prints design take on abstract prints desig take on abstract prints design</p>
                                <a href="collection.php"  class="btn btn-success btn-lg">Shop Now</a>
                            </div>
                        </div>
                        <div class="col-sm-8 col-md-6 col-xs-12 overs padding-left-0">
                            <div class="banners text-center">
                                <div class="banner-img position-r">
                                    <a href="#">
                                        <div class="background-overlay"></div>
                                        <img src="assets/images/banner/banner-small-5.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="banner-hover">
                                    <a href="collection.php" class="margin-top-10">- Shop Now -</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
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
                            <ul class="list-inline list-unstyled">
                                <li><a href="https://www.facebook.com/profile.php?id=100009810821468" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://plus.google.com " target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
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

<!--=================== Loading Image ===================-->
<div class="paira-loading ajax-loading margin-clear text-center">
    <img src="assets/images/AjaxLoader.gif" alt="" class="padding-clear margin-top-10">
    <p><b>Loading...</b></p>
</div>
<!--=================== Quick View Dialog ===================-->
<div class="modal fade quick-view" id="paira-quick-view" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
                <div class="row margin-bottom-20">
                    <div class="col-md-5 col-sm-12 col-xs-12 margin-top-40 paira-margin-top-2">
                        <div class="paira-product single-varients-product">
                            <div class="position-r pull-left full-width margin-bottom-40">
                                <div class="single-product-image paira-quick-single-product-image">
                                    <img src="assets/images/product/product-big-1.jpg" alt="" class="paira-product-image img-responsive">
                                </div>
                                <div class="single-product-container"></div>
                            </div>
                            <div class="position-r pull-left full-width small-verient-product">
                                <div class="bx-carousel-fix">
                                    <div class="quick-product-image-list paira-quick-product-image-list">
                                        <div><a href="#" data-image="assets/images/product/product-big-1.jpg"><img src="assets/images/product/product-big-1.jpg" alt="product-14" class="img-responsive center-block"/></a></div>
                                        <div><a href="#" data-image="assets/images/product/product-big-2.jpg"><img src="assets/images/product/product-big-2.jpg" alt="product-15" class="img-responsive center-block"/></a></div>
                                        <div><a href="#" data-image="assets/images/product/product-big.jpg"><img src="assets/images/product/product-big.jpg" alt="product-16" class="img-responsive center-block"/></a></div>
                                        <div><a href="#" data-image="assets/images/product/product-big-1.jpg"><img src="assets/images/product/product-big-1.jpg" alt="product-14" class="img-responsive center-block"/></a></div>
                                        <div><a href="#" data-image="assets/images/product/product-big-2.jpg"><img src="assets/images/product/product-big-2.jpg" alt="product-15" class="img-responsive center-block"/></a></div>
                                    </div>
                                </div>
                                <div class="single-product-container-small"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12 margin-top-40 paira-margin-top-2">
                        <div class="product-detles">
                            <h1 class="full-width text-capitalize margin-bottom-15 margin-clear"><a href="collection.php">Sleep women with water color</a></h1>
                            <div class="full-width pull-left margin-bottom-15">
                                <h3 class="margin-right-5 pull-left margin-top-0 margin-bottom-0 del"><del class="margin-clear"><span class="money margin-clear">$200.00</span></del></h3>
                                <h3 class="margin-left-5 pull-left margin-top-0 margin-bottom-0">$80.00</h3>
                            </div>
                            <div class="pull-left full-width margin-bottom-20">
                                <label class="margin-bottom-10 pull-left full-width">Size :</label>
                                <div class="arrow-d">
                                    <select class="pro-select">
                                        <option value="volvo">1024 x 1024 px</option>
                                        <option value="saab">890 x 890 px</option>
                                        <option value="mercedes">620 x 620 px</option>
                                        <option value="audi">320 x 320 px</option>
                                    </select>
                                </div>
                            </div>
                            <div class="pull-left full-width margin-bottom-20">
                                <label class="margin-bottom-10">Quantity :</label>
                                <div class="quentity">
                                    <div class="product_quantity_group product-quantity-fix">
                                        <input type="text" class="form-control text-center pull-left font-size-16" value="2">
                                        <div class="up-down text-center pull-left overflow">
                                            <span class="up" data-direction="up"><i class="fa fa-angle-up"></i></span>
                                            <span class="down" data-direction="down"><i class="fa fa-angle-down"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-success btn-lg text-capitalize margin-bottom-20">Add To Cart</button>
                        </div>
                        <div class="sicoal-share-widget margin-top-10  full-width pull-left">
                            <label class=" pull-left">Share :</label>
                            <ul class="social-li list-inline">
                            <li><a href="https://www.facebook.com/profile.php?id=100009810821468" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://plus.google.com " target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/pritam-mondal-3645b6201/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="https://www.behance.net " target="_blank"><i class="fa fa-behance"></i></a></li>
                            </ul>
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
                                <li><a href="http://localhost/online art gallery/admin/ad_index.php">Home</a></li>
                                <li><a href="collection.php">Shop</a></li>
                                <li><a href="list-collections.php">List Collection</a></li>  
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                                <li><a href="add_art.php">Modify Art</a></li>
                                <li><a href="article.php">article</a></li>  
                                <li><a href="logout.php">Logout</a></li> 
                             
                                   
                                
                            </ul>
                            <hr>
                            <ul class="social-links list-inline">
                                <li><a href="https://www.facebook.com/profile.php?id=100009810821468" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://plus.google.com " target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
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
<script src="assets/js/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
<script src="assets/js/jquery.mousewheel.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.bxslider.min.js"></script>
<!--=================== Paira Framework Main Javascript ===================-->
<script src="assets/js/paira.js" type="text/javascript"></script>
</body>


</html>
