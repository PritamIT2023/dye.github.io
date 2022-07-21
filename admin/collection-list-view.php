
<?php
   session_start();
    
    
    if(!isset($_SESSION['password'])){
        header("location:http://localhost/online art gallery/ad_login.html");
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
    <title>Collection List View - Dye </title>
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
                                
                                <li><a href="logout.php" class="login-popup"><img src="assets/images/corg.png" alt="" class=""><?php
                                    
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
                                ?></a></li></a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <!--=================== Main Content Container ===================-->
    <main class="collection-page">
        <!--=================== Breadcrumb Section ===================-->
        <section class="breadcrumb-container paira-margin-bottom-3">
            <div class="breadcrumb">
                <div class="container-fluid padding-fix">
                    <ul class="list-inline">
                        <li><a href="cu_index.php">Home <i class="fa fa-angle-right"></i></a></li>
                        <li>Collection</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--=================== latest Picture Section ===================-->
        <section class="latest-picture paira-margin-bottom-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 heading-title">
                        <h2 class="text-capitalize margin-clear text-center"><span>Collection</span></h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12 col-sm-12 margin-bottom-40 margin-top-30">
                        <div class="showing-item text-center">
                            <p class="margin-clear">Showing <strong>8 items</strong> 30 items</p>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4 padding-clear">
                            <div class="short-by">
                                <div class="btn-group">
                                    <button type="button" class="btn dropdown-toggle pull-left" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        Short by <i class="fa fa-plus"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Bed Room</a></li>
                                        <li><a href="#">Showcase</a></li>
                                        <li><a href="#">Dining Room</a></li>
                                        <li><a href="#">Living Room</a></li>
                                        <li><a href="#">Drowing Room</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4 padding-clear">
                            <div class="show-category">
                                <div class="btn-group">
                                    <button type="button" class="btn dropdown-toggle pull-left" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        Category <i class="fa fa-plus"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Bed Room</a></li>
                                        <li><a href="#">Showcase</a></li>
                                        <li><a href="#">Dining Room</a></li>
                                        <li><a href="#">Living Room</a></li>
                                        <li><a href="#">Drowing Room</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4 padding-clear">
                            <div class="views">
                                <div class="btn-group">
                                    <button type="button" class="btn dropdown-toggle pull-left" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        Grid view <i class="fa fa-plus"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Bed Room</a></li>
                                        <li><a href="#">Showcase</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-view">
                <div class="margin-bottom-30">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-xs-12">
                                <div class="product text-center">
                                    <div class="product-image position-r">
                                        <a href="#">
                                            <div class="background-overlay"></div>
                                            <img src="assets/images/product/product-5.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="product-hover">
                                        <h3 class="margin-clear"><a href="collection.php">Looking big eyes look</a></h3>
                                        <div class="text-center prices margin-top-15 margin-bottom-10">
                                            <h4 class="pull-left margin-clear margin-right-5 del"><del><span class="money">$170.00</span></del></h4>
                                            <h4 class="pull-left margin-clear margin-left-5"><span class="money">$120.00</span></h4>
                                        </div>
                                        <p class="margin-bottom-15">Negat esse eam, inquit, propter se expetendam. Honesta oratio, Socra tica, Platonis etiam. Positum est a nostris in iis esse rebus, quae secu ndum naturam essent, non dolere; Non est ista, inquam, Piso, magna dissensio. Non quaeritur autem quid naturae tuae consentaneum sit sed quid disciplinae. Cum ageremus, inquit, vitae beatum et eundem supremum diem, scribebamus haec.</p>
                                        <div class="paira-wish-compare-con wish-compare-view-cart">
                                            <a href="#" class="product-cart-con btn btn-success"><i class="fa fa-shopping-cart"></i></a>
                                            <a href="#paira-quick-view" class="paira-quick-view quick-view  btn btn-default"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-xs-12">
                                <div class="product text-center">
                                    <div class="product-image position-r">
                                        <a href="#">
                                            <div class="background-overlay"></div>
                                            <img src="assets/images/product/product-6.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="product-sale"><span>Sale</span></div>
                                    <div class="product-stock-out"><span>Sold</span></div>
                                    <div class="product-hover">
                                        <h3 class="margin-clear"><a href="collection.php">Looking big eyes look</a></h3>
                                        <div class="text-center prices margin-top-15 margin-bottom-10">
                                            <h4 class="pull-left margin-clear"><span class="money">$120.00</span></h4>
                                        </div>
                                        <p class="margin-bottom-15">Negat esse eam, inquit, propter se expetendam. Honesta oratio, Socra tica, Platonis etiam. Positum est a nostris in iis esse rebus, quae secu ndum naturam essent, non dolere; Non est ista, inquam, Piso, magna dissensio. Non quaeritur autem quid naturae tuae consentaneum sit sed quid disciplinae. Cum ageremus, inquit, vitae beatum et eundem supremum diem, scribebamus haec.</p>
                                        <div class="paira-wish-compare-con wish-compare-view-cart">
                                            <a href="#" class="product-cart-con btn btn-success"><i class="fa fa-shopping-cart"></i></a>
                                            <a href="#paira-quick-view" class="paira-quick-view quick-view  btn btn-default"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-xs-12">
                                <div class="product text-center">
                                    <div class="product-image position-r">
                                        <a href="#">
                                            <div class="background-overlay"></div>
                                            <img src="assets/images/product/product-7.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="product-hover">
                                        <h3 class="margin-clear"><a href="collection.php">Looking big eyes look</a></h3>
                                        <div class="text-center prices margin-top-15 margin-bottom-10">
                                            <h4 class="pull-left margin-clear"><span class="money">$120.00</span></h4>
                                        </div>
                                        <p class="margin-bottom-15">Negat esse eam, inquit, propter se expetendam. Honesta oratio, Socra tica, Platonis etiam. Positum est a nostris in iis esse rebus, quae secu ndum naturam essent, non dolere; Non est ista, inquam, Piso, magna dissensio. Non quaeritur autem quid naturae tuae consentaneum sit sed quid disciplinae. Cum ageremus, inquit, vitae beatum et eundem supremum diem, scribebamus haec.</p>
                                        <div class="paira-wish-compare-con wish-compare-view-cart">
                                            <a href="#" class="product-cart-con btn btn-success"><i class="fa fa-shopping-cart"></i></a>
                                            <a href="#paira-quick-view" class="paira-quick-view quick-view  btn btn-default"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-container"></div>
                </div>
                <div class="margin-bottom-30">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-xs-12">
                                <div class="product text-center">
                                    <div class="product-image position-r">
                                        <a href="#">
                                            <div class="background-overlay"></div>
                                            <img src="assets/images/product/product-8.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="product-hover">
                                        <h3 class="margin-clear"><a href="collection.php">Looking big eyes look</a></h3>
                                        <div class="text-center prices margin-top-15 margin-bottom-10">
                                            <h4 class="pull-left margin-clear"><span class="money">$120.00</span></h4>
                                        </div>
                                        <p class="margin-bottom-15">Negat esse eam, inquit, propter se expetendam. Honesta oratio, Socra tica, Platonis etiam. Positum est a nostris in iis esse rebus, quae secu ndum naturam essent, non dolere; Non est ista, inquam, Piso, magna dissensio. Non quaeritur autem quid naturae tuae consentaneum sit sed quid disciplinae. Cum ageremus, inquit, vitae beatum et eundem supremum diem, scribebamus haec.</p>
                                        <div class="paira-wish-compare-con wish-compare-view-cart">
                                            <a href="#" class="product-cart-con btn btn-success"><i class="fa fa-shopping-cart"></i></a>
                                            <a href="#paira-quick-view" class="paira-quick-view quick-view  btn btn-default"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-xs-12">
                                <div class="product text-center">
                                    <div class="product-image position-r">
                                        <a href="#">
                                            <div class="background-overlay"></div>
                                            <img src="assets/images/product/product-9.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="product-sale"><span>Sale</span></div>
                                    <div class="product-stock-out"><span>Sold</span></div>
                                    <div class="product-hover">
                                        <h3 class="margin-clear"><a href="collection.php">Looking big eyes look</a></h3>
                                        <div class="text-center prices margin-top-15 margin-bottom-10">
                                            <h4 class="pull-left margin-clear margin-right-5 del"><del><span class="money">$170.00</span></del></h4>
                                            <h4 class="pull-left margin-clear margin-left-5"><span class="money">$120.00</span></h4>
                                        </div>
                                        <p class="margin-bottom-15">Negat esse eam, inquit, propter se expetendam. Honesta oratio, Socra tica, Platonis etiam. Positum est a nostris in iis esse rebus, quae secu ndum naturam essent, non dolere; Non est ista, inquam, Piso, magna dissensio. Non quaeritur autem quid naturae tuae consentaneum sit sed quid disciplinae. Cum ageremus, inquit, vitae beatum et eundem supremum diem, scribebamus haec.</p>
                                        <div class="paira-wish-compare-con wish-compare-view-cart">
                                            <a href="#" class="product-cart-con btn btn-success"><i class="fa fa-shopping-cart"></i></a>
                                            <a href="#paira-quick-view" class="paira-quick-view quick-view  btn btn-default"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-xs-12">
                                <div class="product text-center">
                                    <div class="product-image position-r">
                                        <a href="#">
                                            <div class="background-overlay"></div>
                                            <img src="assets/images/product/product-10.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="product-hover">
                                        <h3 class="margin-clear"><a href="collection.php">Looking big eyes look</a></h3>
                                        <div class="text-center prices margin-top-15 margin-bottom-10">
                                            <h4 class="pull-left margin-clear"><span class="money">$120.00</span></h4>
                                        </div>
                                        <p class="margin-bottom-15">Negat esse eam, inquit, propter se expetendam. Honesta oratio, Socra tica, Platonis etiam. Positum est a nostris in iis esse rebus, quae secu ndum naturam essent, non dolere; Non est ista, inquam, Piso, magna dissensio. Non quaeritur autem quid naturae tuae consentaneum sit sed quid disciplinae. Cum ageremus, inquit, vitae beatum et eundem supremum diem, scribebamus haec.</p>
                                        <div class="paira-wish-compare-con wish-compare-view-cart">
                                            <a href="#" class="product-cart-con btn btn-success"><i class="fa fa-shopping-cart"></i></a>
                                            <a href="#paira-quick-view" class="paira-quick-view quick-view  btn btn-default"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-container"></div>
                </div>
                <div class="margin-bottom-30">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-xs-12">
                                <div class="product text-center">
                                    <div class="product-image position-r">
                                        <a href="#">
                                            <div class="background-overlay"></div>
                                            <img src="assets/images/product/product-11.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="product-hover">
                                        <h3 class="margin-clear"><a href="collection.php">Looking big eyes look</a></h3>
                                        <div class="text-center prices margin-top-15 margin-bottom-10">
                                            <h4 class="pull-left margin-clear margin-right-5 del"><del><span class="money">$170.00</span></del></h4>
                                            <h4 class="pull-left margin-clear margin-left-5"><span class="money">$120.00</span></h4>
                                        </div>
                                        <p class="margin-bottom-15">Negat esse eam, inquit, propter se expetendam. Honesta oratio, Socra tica, Platonis etiam. Positum est a nostris in iis esse rebus, quae secu ndum naturam essent, non dolere; Non est ista, inquam, Piso, magna dissensio. Non quaeritur autem quid naturae tuae consentaneum sit sed quid disciplinae. Cum ageremus, inquit, vitae beatum et eundem supremum diem, scribebamus haec.</p>
                                        <div class="paira-wish-compare-con wish-compare-view-cart">
                                            <a href="#" class="product-cart-con btn btn-success"><i class="fa fa-shopping-cart"></i></a>
                                            <a href="#paira-quick-view" class="paira-quick-view quick-view  btn btn-default"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-xs-12">
                                <div class="product text-center">
                                    <div class="product-image position-r">
                                        <a href="#">
                                            <div class="background-overlay"></div>
                                            <img src="assets/images/product/product-12.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="product-sale"><span>Sale</span></div>
                                    <div class="product-stock-out"><span>Sold</span></div>
                                    <div class="product-hover">
                                        <h3 class="margin-clear"><a href="collection.php">Looking big eyes look</a></h3>
                                        <div class="text-center prices margin-top-15 margin-bottom-10">
                                            <h4 class="pull-left margin-clear margin-right-5 del"><del><span class="money">$170.00</span></del></h4>
                                            <h4 class="pull-left margin-clear margin-left-5"><span class="money">$120.00</span></h4>
                                        </div>
                                        <p class="margin-bottom-15">Negat esse eam, inquit, propter se expetendam. Honesta oratio, Socra tica, Platonis etiam. Positum est a nostris in iis esse rebus, quae secu ndum naturam essent, non dolere; Non est ista, inquam, Piso, magna dissensio. Non quaeritur autem quid naturae tuae consentaneum sit sed quid disciplinae. Cum ageremus, inquit, vitae beatum et eundem supremum diem, scribebamus haec.</p>
                                        <div class="paira-wish-compare-con wish-compare-view-cart">
                                            <a href="#" class="product-cart-con btn btn-success"><i class="fa fa-shopping-cart"></i></a>
                                            <a href="#paira-quick-view" class="paira-quick-view quick-view  btn btn-default"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-xs-12">
                                <div class="product text-center">
                                    <div class="product-image position-r">
                                        <a href="#">
                                            <div class="background-overlay"></div>
                                            <img src="assets/images/product/product-13.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="product-hover">
                                        <h3 class="margin-clear"><a href="collection.php">Looking big eyes look</a></h3>
                                        <div class="text-center prices margin-top-15 margin-bottom-10">
                                            <h4 class="pull-left margin-clear margin-right-5 del"><del><span class="money">$170.00</span></del></h4>
                                            <h4 class="pull-left margin-clear margin-left-5"><span class="money">$120.00</span></h4>
                                        </div>
                                        <p class="margin-bottom-15">Negat esse eam, inquit, propter se expetendam. Honesta oratio, Socra tica, Platonis etiam. Positum est a nostris in iis esse rebus, quae secu ndum naturam essent, non dolere; Non est ista, inquam, Piso, magna dissensio. Non quaeritur autem quid naturae tuae consentaneum sit sed quid disciplinae. Cum ageremus, inquit, vitae beatum et eundem supremum diem, scribebamus haec.</p>
                                        <div class="paira-wish-compare-con wish-compare-view-cart">
                                            <a href="#" class="product-cart-con btn btn-success"><i class="fa fa-shopping-cart"></i></a>
                                            <a href="#paira-quick-view" class="paira-quick-view quick-view  btn btn-default"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-container"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <ul class="list-inline pagination margin-clear">
                            <li><a href="#" class="next-page"><i class="fa fa-caret-left"></i></a></li>
                            <li class="active font-bold"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#" class="prev-page"><i class="fa fa-caret-right"></i></a></li>
                        </ul>
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
<script src="assets/js/jquery.bxslider.min.js"></script>
<!--=================== Paira Framework Main Javascript ===================-->
<script src="assets/js/paira.js" type="text/javascript"></script>
</body>


</html>