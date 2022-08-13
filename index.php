<?php 
include "dbconn.php";
session_start();
if(isset($_SESSION['user'])!=""){
// echo "<script>location.href='dashboard.php';</script>";
    header('location:about.php');
}

if(isset($_REQUEST['log'])=="logout"){
   $_SESSION['user'];
   //unset();
   session_destroy();
  header('location:index.php');
//echo "<script>location.href='index.php';</script>";
}

?>
<!DOCTYPE html>
<!-- 


-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <title>Handicraft - Responsive HTML Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320">
    <!-- favicon links-->
    <link rel="icon" type="image/icon" href="assets/images/favicon.png" />
    <!-- main css -->
    <link rel="stylesheet" href="assets/css/fonts.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/custom_animation.css" />
    <link rel="stylesheet" href="assets/js/plugin/owl/owl.carousel.css" />
    <link rel="stylesheet" href="assets/css/style.css" media="screen" />
    <link rel="stylesheet" href="assets/css/colors/default.css" id="colors" />

</head>

<body>
    <!--preloader-->
    <div class="loader">
        <div class="loader-inner ball-scale-ripple-multiple">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!--style switcher-->
    <div id="style-switcher">
        <h2>Style Switcher <a href="#"></a></h2>
        <div>
            <h3>Predefined Colors</h3>
            <ul class="colors">
                <li><a href="#" class="default" title="Default"></a></li>
                <li><a href="#" class="olive" title="Olive"></a></li>
                <li><a href="#" class="purple" title="Purple"></a></li>
                <li><a href="#" class="blue" title="Blue"></a></li>
                <li><a href="#" class="green" title="green"></a></li>
                <li><a href="#" class="orange" title="Orange"></a></li>
            </ul>
            <h3>Layout Style</h3>
            <select id="layout-style">
                <option value="1">Wide Layout</option>
                <option value="2">Boxed Layout</option>
            </select>
            <br>
            <div class="bgr hide">
                <h3>Background Pattern</h3>
                <ul class="colors bg" id="bg">
                    <li><a href="#" class="bg1"></a></li>
                    <li><a href="#" class="bg2"></a></li>
                    <li><a href="#" class="bg3"></a></li>
                    <li><a href="#" class="bg4"></a></li>
                    <li><a href="#" class="bg5"></a></li>
                    <li><a href="#" class="bg6"></a></li>
                </ul>
            </div>
        </div>
        <div id="reset">
            <button class="button color" value="Reload Page"
                onClick="window.location.reload();return false;">Reset</button>
        </div>
    </div>
    <!--main wrapper start-->
    <div id="wrapper">
        <!--top_header start-->
        <div class="home_style2">
            <div class="hm_top_info">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <div class="hm_top_login">
                                <ul>
                                    <li><a href="javascript:;" class="popup-with-form"><i class="fa fa-user"
                                                aria-hidden="true"></i> login</a></li>
                                    <li><a href="javascript:;" class="popup-signup-form"><i class="fa fa-pencil"
                                                aria-hidden="true"></i> register</a></li>
                                    <li><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i> checkout</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 pull-right">
                            <div class="top_usd">
                                <div class="hm_top_wishlist">
                                    <p><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Wishlist</a></p>
                                </div>
                                <div class="hm_top_usd">
                                    <p><a href="javascript:;"><i class="fa fa-angle-down" aria-hidden="true"></i>
                                            INR</a></p>
                                    <ul class="usd_dropmenu">
                                        <li><a href="#">EUR - Euro</a></li>
                                        <li><a href="#">INR - Indian Rupees</a></li>
                                        <li><a href="#">USD - US Dollar</a></li>
                                        <li><a href="#">GBP - British Pound</a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Header start-->
            <div class="hm_header_wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="hm_logo">
                                <a href="index.html"><img src="assets/images/logo.png" alt="handmade-craft-logo"
                                        class="img-responsive"></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="hm_top_search hm_top_search1">
                                <input type="search" name="search" placeholder="Search....">
                                <span class="search_icon"><i class="fa fa-search" aria-hidden="true"></i></span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="hm_menu_bar hm_menu_bar_001">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hm_header_overlay"></div>
            </div>
            <!--menu start-->
            <div class="hm_menu_wrapper menu_hide">
                <div class="container">
                    <div class="row">
                        <div class="boxed_hide_menu padding_left">
                            <div class="hm_menu_wrap">
                                <nav>
                                    <div class="hm_hidden-bar-close">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                    <div class="hm_menu">
                                        <ul>
                                            <li class="active dropdown"><a href="javascript:;">home</a>
                                                <ul class="sub-menu">
                                                    <!-- <li><a href="home-style1.html">home style1</a></li> -->
                                                    <li><a href="index.php">home style2</a></li>
                                                    <!-- <li><a href="home-style3.html">home style3</a></li> -->
                                                </ul>
                                            </li>
                                            <li><a href="about.html">about</a></li>
                                            <li><a href="services.html">services</a></li>
                                            <li class="dropdown"><a href="javacsript:;">gallery</a>
                                                <ul class="sub-menu">
                                                    <li><a href="gallery-3-column.html">gallery 3 column</a></li>
                                                    <li><a href="gallery-4-column.html">gallery 4 column</a></li>
                                                    <li><a href="gallery-fullwidth.html">gallery full width</a></li>
                                                    <li><a href="gallery.html">gallery masonry</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="javascript:;">blog</a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog-two-column.html">blog two column</a></li>
                                                    <li><a href="blog-three-column.html">blog three column</a></li>
                                                    <li><a href="blog-single.html">blog single</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="javascript:;">shop</a>
                                                <ul class="sub-menu">
                                                    <li><a href="shop.html">shop</a></li>
                                                    <li><a href="shop-single.html">shop single</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">contact</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="hide_menu_footer">
                                <ul class="hide_menu_social">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                                <p>copyright &copy; 2021 all rights reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--banner start-->
            <div class="hm_banner_wrapper">
                <div class="">
                    <div class="item">
                        <div class="slider_bg" style="background-image:url('a2.jpg');">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-xs-12 col-lg-offset-2 col-md-offset-2">
                                        <div class="slider_caption">
                                            <h3>we make things with love</h3>
                                            <h1>handmade</h1>
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry.<br /> Lorem Ipsum has been the industry's standard dummy text
                                                ever since the <br /> 1500s, when an unknown printer took a galley.
                                            </p>
                                            <div class="button_wrapper">
                                                <a href="#" class="read_more hm_btn">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--About section start-->
            <div class="hm_about_wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="hm_about_img">
                                <img src="assets/images/about.jpg" alt="handmade-craft-about" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="hm_about_data">
                                <h1><span class="hm_color">Welcome</span> To Hand Made</h1>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution of letters, as opposed to using 'Content
                                    here, content here', making it look like readable English. Many desktop publishing
                                    packages and web page editors now use Lorem Ipsum as their default model text, and a
                                    search for 'lorem ipsum' will uncover </p>
                                <p>Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover
                                    many web sites still in their infancy.</p>
                                <a href="#" class="hm_btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--New Arrivals section start-->
            <div class="hm_arrivals_wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <h1 class="hm_heading hm_heading_01"><span class="hm_color">Our</span> New Arrivals</h1>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="new_pro_box">
                                <div class="new_pro_img">
                                    <img src="a3.jpg" alt="handmade-craft-arrivals1"
                                        class="img-responsive" />
                                </div>
                                <div class="new_pro_data">
                                    <h3><a href="shop-single.html">Jagannath crafts.</a></h3>
                                    <p>orem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                    <div class="new_pro_data_dollar">
                                        <span class="pro_price">Rs 120 Only</span>
                                        <span class="cart_icon"><a href="#"><i class="fa fa-cart-plus"
                                                    aria-hidden="true"></i></a></span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--2-->
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="new_pro_box">
                                <div class="new_pro_data">
                                    <h3><a href="shop-single.html">Hanging Jagannath crafts.</a></h3>
                                    <p>orem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                    <div class="new_pro_data_dollar">
                                        <span class="pro_price">Rs 160 Only</span>
                                        <span class="cart_icon"><a href="#"><i class="fa fa-cart-plus"
                                                    aria-hidden="true"></i></a></span>
                                    </div>

                                </div>
                                <div class="new_pro_img">
                                    <img src="a4.jpg" alt="handmade-craft-arrivals2"
                                        class="img-responsive" />
                                </div>
                            </div>
                        </div>
                        <!--3-->
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="new_pro_box">
                                <div class="new_pro_img">
                                    <img src="a10.jpg" alt="handmade-craft-arrivals3"
                                        class="img-responsive" />
                                </div>
                                <div class="new_pro_data">
                                    <h3><a href="shop-single.html">Patachitra</a></h3>
                                    <p>orem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                    <div class="new_pro_data_dollar">
                                        <span class="pro_price">Rs 130 Only</span>
                                        <span class="cart_icon"><a href="#"><i class="fa fa-cart-plus"
                                                    aria-hidden="true"></i></a></span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--4-->
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="new_pro_box">
                                <div class="new_pro_img">
                                    <img src="a6.jpg" alt="handmade-craft-arrivals4"
                                        class="img-responsive" />
                                </div>
                                <div class="new_pro_data">
                                    <h3><a href="shop-single.html">Jagannath painting</a></h3>
                                    <p>orem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                    <div class="new_pro_data_dollar">
                                        <span class="pro_price">Rs 180 Only</span>
                                        <span class="cart_icon"><a href="#"><i class="fa fa-cart-plus"
                                                    aria-hidden="true"></i></a></span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--5-->
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="new_pro_box">
                                <div class="new_pro_data">
                                    <h3><a href="shop-single.html">Ancient tools</a></h3>
                                    <p>orem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                    <div class="new_pro_data_dollar">
                                        <span class="pro_price">Rs 260 Only</span>
                                        <span class="cart_icon"><a href="#"><i class="fa fa-cart-plus"
                                                    aria-hidden="true"></i></a></span>
                                    </div>

                                </div>
                                <div class="new_pro_img">
                                    <img src="a7.jpg" alt="handmade-craft-arrivals5"
                                        class="img-responsive" />
                                </div>
                            </div>
                        </div>
                        <!--6-->
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="new_pro_box">
                                <div class="new_pro_img">
                                    <img src="assets/images/new_pro6.jpg" alt="handmade-craft-arrivals6"
                                        class="img-responsive" />
                                </div>
                                <div class="new_pro_data">
                                    <h3><a href="shop-single.html">Zipper jute bags</a></h3>
                                    <p>orem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                    <div class="new_pro_data_dollar">
                                        <span class="pro_price">Rs 200 Only</span>
                                        <span class="cart_icon"><a href="#"><i class="fa fa-cart-plus"
                                                    aria-hidden="true"></i></a></span>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--Choose section start-->
            <div class="hm_choose_wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12">

                        </div>
                        <div class="col-lg-8 col-md-12 pull-right padding_left">
                            <div class="hm_choose_data">
                                <h1 class="hm_heading text-left"><span class="hm_color">why </span>Choose Us</h1>
                                <div class="hm_choose_list">
                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingOne">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                    aria-expanded="false" aria-controls="flush-collapseOne">
                                                    <h4>Respecting Your Time</h4>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                                aria-labelledby="flush-headingOne"
                                                data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et do
                                                    lore magna aliqua.Lonsectetur adipiscing elit, sed do eiusmod tempor
                                                    incididunt ut labore et dolore</div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                                    aria-expanded="false" aria-controls="flush-collapseTwo">
                                                    <h4>Latest In Technology</h4>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="flush-headingTwo"
                                                data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et do
                                                    lore magna aliqua.Lonsectetur adipiscing elit, sed do eiusmod tempor
                                                    incididunt ut labore et dolore</div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                                    aria-expanded="false" aria-controls="flush-collapseThree">
                                                    <h4>Professional Staff</h4>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="flush-headingThree"
                                                data-bs-parent="#accordionFlushExample">

                                                <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et do
                                                    lore magna aliqua.Lonsectetur adipiscing elit, sed do eiusmod tempor
                                                    incididunt ut labore et dolore</div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingFour">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                                                    aria-expanded="false" aria-controls="flush-collapseFour">
                                                    <h4>Free Home Dilevery</h4>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                                aria-labelledby="flush-headingFour"
                                                data-bs-parent="#accordionFlushExample">

                                                <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et do
                                                    lore magna aliqua.Lonsectetur adipiscing elit, sed do eiusmod tempor
                                                    incididunt ut labore et dolore</div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingFive">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseFive"
                                                    aria-expanded="false" aria-controls="flush-collapseFive">
                                                    <h4>High Quality</h4>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                                aria-labelledby="flush-headingFive"
                                                data-bs-parent="#accordionFlushExample">

                                                <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et do
                                                    lore magna aliqua.Lonsectetur adipiscing elit, sed do eiusmod tempor
                                                    incididunt ut labore et dolore</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--our artist section start-->
            <div class="hm_artist_wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <h1 class="hm_heading hm_heading_01"><span class="hm_color">Our</span> expert artists</h1>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-6 col-md-6">
                            <div class="hm_artist_box">
                                <div class="artist_img">
                                    <img src="assets/images/artist1.jpg" alt="handmade-craft-artist1"
                                        class="img-responsive" />
                                </div>
                                <div class="artist_data">
                                    <h3>sand Art</h3>
                                    <p class="artist_post">Chief Advisior</p>
                                    <p class="artist_para">The cloth painting tradition in Odisha started as jatri pattis, painted souvenirs of the Jagannatha trio of deities for tourists, sold outside the Jagannatha temple at Puri. </p>
                                    <ul class="artist_social">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="hm_artist_box">
                                <div class="artist_img">
                                    <img src="assets/images/artist2.jpg" alt="handmade-craft-artist2"
                                        class="img-responsive" />
                                </div>
                                <div class="artist_data">
                                    <h3>Martina Carlo</h3>
                                    <p class="artist_post">Chief Advisior</p>
                                    <p class="artist_para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                                        et tempus erat, et luctus quam. Maecenas cursus porta tortor, vel consectetur
                                        ante volutpat imperdiet. </p>
                                    <ul class="artist_social">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="hm_artist_box artist_right_image">
                                <div class="artist_data">
                                    <h3>Philen james</h3>
                                    <p class="artist_post">Chief Advisior</p>
                                    <p class="artist_para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                                        et tempus erat, et luctus quam. Maecenas cursus porta tortor, vel consectetur
                                        ante volutpat imperdiet. </p>
                                    <ul class="artist_social">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div class="artist_img">
                                    <img src="assets/images/artist3.jpg" alt="handmade-craft-artist3"
                                        class="img-responsive" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="hm_artist_box artist_right_image">
                                <div class="artist_data">
                                    <h3>Kelvin Broad</h3>
                                    <p class="artist_post">Chief Advisior</p>
                                    <p class="artist_para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                                        et tempus erat, et luctus quam. Maecenas cursus porta tortor, vel consectetur
                                        ante volutpat imperdiet. </p>
                                    <ul class="artist_social">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div class="artist_img">
                                    <img src="assets/images/artist4.jpg" alt="handmade-craft-artist4"
                                        class="img-responsive" />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--happy customer sevtion start-->
            <div class="hm_testimonial_wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <h1 class="hm_heading "><span class="hm_color">Our</span> happy customers</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="hm_test_inner">
                            <div class="col-lg-4 col-md-4">
                                <div class="hm_testi_box">
                                    <div class="hm_test_img">
                                        <img src="assets/images/customer1.png" alt="handmade-craft-customer1"
                                            class="img-responsive" />
                                    </div>
                                    <h2>Hilpton Broad</h2>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                                        in a piece of cla ssical Latin literature from 45 BC, making it over 2000 years
                                        old. </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="hm_testi_box">
                                    <div class="hm_test_img">
                                        <img src="assets/images/customer2.png" alt="handmade-craft-customer2"
                                            class="img-responsive" />
                                    </div>
                                    <h2>Stive Philips</h2>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                                        in a piece of cla ssical Latin literature from 45 BC, making it over 2000 years
                                        old. </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="hm_testi_box">
                                    <div class="hm_test_img">
                                        <img src="assets/images/customer3.png" alt="handmade-craft-customer3"
                                            class="img-responsive" />
                                    </div>
                                    <h2>James Carlo</h2>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                                        in a piece of cla ssical Latin literature from 45 BC, making it over 2000 years
                                        old. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--our blog section start-->
            <div class="hm_news_wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <h1 class="hm_heading hm_heading_01"><span class="hm_color">Our </span>latest blog</h1>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-4 col-md-12">
                            <div class="hm_news_box">
                                <div class="hm_news_img">
                                    <img src="assets/images/new_pro1.jpg" alt="handmade-craft-blog1"
                                        class="img-responsive">
                                    <div class="news_img_overlay"></div>
                                    <div class="overlay_buttons">
                                        <a class="popup-iframe" href="https://www.youtube.com/watch?v=KAQjLTjW-dM"><i
                                                class="fa fa-play-circle-o" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="hm_news_data">
                                    <h3><a href="blog-single.html">Inteligent Transitions In Design</a></h3>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> admin</a></li>
                                        <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> 12 june
                                                2021</a></li>
                                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>picture</a></li>
                                    </ul>
                                    <p>Pleasure and praising pain was born and will give you a complete account of the
                                        systems, and expound the actual teaching.</p>
                                    <a href="#" class="news_btn">read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <div class="hm_news_big_post">
                                <img src="assets/images/blog_big.jpg" alt="handmade-craft-blog"
                                    class="img-responsive" />
                                <div class="hm_blog_overlay_data">
                                    <div class="news_data">
                                        <span class="hm_blog_date">13 june 2021</span>
                                        <h2><a href="blog-single.html">standard blog post</a></h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et do lore magna aliqua.Lonsectetur adipiscing
                                            elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                                        <div class="blog_admin">Posted by <span class="hm_color">william harry</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="hm_news_box">
                                <div class="hm_news_img">
                                    <img src="assets/images/new_pro2.jpg" alt="handmade-craft-blog2"
                                        class="img-responsive">
                                    <div class="news_img_overlay"></div>
                                    <div class="overlay_buttons">
                                        <a class="popup-news-gallery" href="assets/images/gallery_big2.jpg"><i
                                                class="fa fa-search" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="hm_news_data">
                                    <h3><a href="blog-single.html">DIY Matisse</a></h3>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> admin</a></li>
                                        <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> 12 june
                                                2021</a></li>
                                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>picture</a></li>
                                    </ul>
                                    <p>Pleasure and praising pain was born and will give you a complete account of the
                                        systems, and expound the actual teaching.</p>
                                    <a href="#" class="news_btn">read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="hm_news_box">
                                <div class="hm_news_img">
                                    <img src="assets/images/new_pro3.jpg" alt="handmade-craft-blog3"
                                        class="img-responsive">
                                    <div class="news_img_overlay"></div>
                                    <div class="overlay_buttons">
                                        <a class="popup-news-gallery" href="assets/images/gallery_big9.jpg"><i
                                                class="fa fa-search" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="hm_news_data">
                                    <h3><a href="blog-single.html">Creating Art Spaces For Kids</a></h3>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> admin</a></li>
                                        <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> 12 june
                                                2021</a></li>
                                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>picture</a></li>
                                    </ul>
                                    <p>Pleasure and praising pain was born and will give you a complete account of the
                                        systems, and expound the actual teaching.</p>
                                    <a href="#" class="news_btn">read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="hm_news_box">
                                <div class="hm_news_img">
                                    <img src="assets/images/new_pro4.jpg" alt="handmade-craft-blog4"
                                        class="img-responsive">
                                    <div class="news_img_overlay"></div>
                                    <div class="overlay_buttons">
                                        <a class="popup-news-gallery" href="assets/images/gallery_big10.jpg"><i
                                                class="fa fa-search" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="hm_news_data">
                                    <h3><a href="blog-single.html">Illuminated Accessories</a></h3>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> admin</a></li>
                                        <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> 12 june
                                                2021</a></li>
                                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>picture</a></li>
                                    </ul>
                                    <p>Pleasure and praising pain was born and will give you a complete account of the
                                        systems, and expound the actual teaching.</p>
                                    <a href="#" class="news_btn">read more</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--our partners section start-->
            <div class="hm_partners_wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <h1 class="hm_heading">Our clients</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="hm_partners_slider">
                                <div class="owl-carousel owl-theme test_slider">
                                    <div class="item"><img src="assets/images/partner1.png"
                                            alt="handmade-craft-clients1"></div>
                                    <div class="item"><img src="assets/images/partner2.png"
                                            alt="handmade-craft-clients2"></div>
                                    <div class="item"><img src="assets/images/partner3.png"
                                            alt="handmade-craft-clients3"></div>
                                    <div class="item"><img src="assets/images/partner4.png"
                                            alt="handmade-craft-clients4"></div>
                                    <div class="item"><img src="assets/images/partner5.png"
                                            alt="handmade-craft-clients5"></div>
                                    <div class="item"><img src="assets/images/partner1.png"
                                            alt="handmade-craft-clients1"></div>
                                    <div class="item"><img src="assets/images/partner2.png"
                                            alt="handmade-craft-clients2"></div>
                                    <div class="item"><img src="assets/images/partner3.png"
                                            alt="handmade-craft-clients3"></div>
                                    <div class="item"><img src="assets/images/partner4.png"
                                            alt="handmade-craft-clients4"></div>
                                    <div class="item"><img src="assets/images/partner5.png"
                                            alt="handmade-craft-clients5"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer start-->
            <div class="hm_footer_wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <div class="hm_footer_box">
                                <img src="assets/images/logo.png" alt="handmade-craft-logo" class="img-fluid">
                                <p class="footer_about_para">It is a long established fact that a reader will be
                                    distracted by the readable content of a page when looking at its layout.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <div class="hm_footer_box">
                                <h3 class="footer_heading">Help</h3>
                                <ul>
                                    <li><a href="#">Find Your Beer</a></li>
                                    <li><a href="#">Customer Service</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Recent Orders</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <div class="hm_footer_box">
                                <h3 class="footer_heading">links</h3>
                                <ul>
                                    <li><a href="index.html">home</a></li>
                                    <li><a href="shop.html">shop</a></li>
                                    <li><a href="404.html">404 page</a></li>
                                    <li><a href="javascript:;">login</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <div class="hm_footer_box hm_footer_contact">
                                <h3 class="footer_heading">Our Information</h3>
                                <ul>
                                    <li>
                                        <div class="hm_footer_information">
                                            <span class="footer_icon"><i class="fa fa-map-marker"
                                                    aria-hidden="true"></i> </span>
                                            <p class="foo_con_para">787 Lakeview St. Marion, NC 28752</p>
                                        </div>

                                    </li>
                                    <li>
                                        <div class="hm_footer_information"><span class="footer_icon"><i
                                                    class="fa fa-phone" aria-hidden="true"></i> </span>
                                            <p class="foo_con_para">+1800123654789 +1800123456788</p>
                                        </div>

                                    </li>
                                    <li>
                                        <div class="hm_footer_information">
                                            <a href="mailto:jhini.mehta@gmail.com"><span class="footer_icon"><i
                                                        class="fa fa-envelope" aria-hidden="true"></i> </span>
                                                <p class="foo_con_para">support@handmade.net</p>
                                            </a>
                                        </div>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--bottom footer start-->
            <div class="hm_bottom_footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <p>Copyrights &copy; 2021 All Rights Reserved by Himanshusofttech</p>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <ul class="footer_so_icons">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--popup login form-->
            <div class="hm_login_form_overlay">
                <div class="hm_login_form">
                    <div class="hm_login_header">
                        <h1>login form</h1>
                        <span class="login_close"><i class="fa fa-times" aria-hidden="true"></i></span>
                    </div>
                    <div class="login_fields">
                        <form method="POST" id="login_form_data">
                            <div class="form-group">
                                <input type="text" class="form-control" id="lemail" name="lemail" placeholder="Email">
                                <span id="error11"></span>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="lpass" name="lpass"
                                    placeholder="Password">
                                <span id="error22"></span>
                            </div>
                            <div class="form_btn">
                                <button type="button" class="btn btn-primary" onclick="chlogin();" name="login"
                                    id="login">LOGIN</button>
                                <span id="error33"></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--popup signup form-->
            <div class="hm_signup_form_overlay">
                <div class="hm_signup_form">
                    <div class="hm_login_header">
                        <h1>signup form</h1>
                        <span class="login_close"><i class="fa fa-times" aria-hidden="true"></i></span>
                    </div>
                    <div class="login_fields">
                        <form method="POST" id="form_data">
                            <div class="form-group">
                                <input type="text" class="form-control" id="uname" name="uname" placeholder="Name"
                                    onkeyup="keyup()">
                                <span id="error1"></span>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="aemail" name="email" placeholder="Email"
                                    onkeyup="keyup()">
                                <span id="error2"></span>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password" onkeyup="keyup()"
                                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                                    required>
                                <span id="error3"></span>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="repassword" name="repassword"
                                    placeholder="Re-type Password" onkeyup="keyup()"
                                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                                    required>
                                <span id="error4"></span>
                                <input type="hidden" name="role" value="User">
                            </div>
                            <div class="form_btn">
                                <button class="btn btn-primary" name="submit" id="submit" type="button"
                                    onclick="checkerror();">REGISTER</button>
                                <span id="error"></span>
                                <div class="register_info">already have an account? <a href="javascript:;">login</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--main wrap1per-->
    </div>
    <script type="text/javascript">
    function chlogin() {
        event.preventDefault();
        var form = $('#login_form_data')[0];
        var formData = new FormData(form);
        1
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="token"]').attr('value')
            }
        });
        var lemail = document.getElementById("lemail").value;
        var lpass = document.getElementById("lpass").value;
        var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;

        if (lemail == "" || lpass == "") {
            if (lemail == "") {
                $('#error11').css("color", "red");
                $('#error11').html("All field are required.");
            } else {
                $('#error11').css("color", "red");
                $('#error11').html("");
            }
            if (lpass == "") {
                $('#error22').css("color", "red");
                $('#error22').html("All field are required.");
            } else {
                $('#error22').css("color", "red");
                $('#error22').html("");
            }
            if (lpass == "") {
                $('#error22').css("color", "red");
                $('#error22').html("Password can't be blank.");
            } else {
                if (lpass.match(passw)) {
                    $('#error22').html("");
                } else {
                    $('#error22').css("color", "red");
                $('#error22').html("Password not valid.")
                }
            }



        } else {
            $('#error22').html("");
            $('#error11').html("");
            $.ajax({
                url: "process.php",
                data: formData,
                processData: false,
                contentType: false,
                type: 'POST',
                success: function(data) {
                    if (data == "done") {
                        $('#error33').css("color", "green");
                        $('#error33').html("login successfully");
                        setTimeout(function() {
                            location.href = 'about.php';
                        }, 1000);
                    } else {
                        $('#error33').css("color", "red");
                        $('#error33').html("invalid userid and password");
                        //setTimeout(function(){ location.reload();},1000);
                    }

                }

            });
        }

    };
    </script>
    <script type="text/javascript">
    // $(document).on('click','#submit',function (event) {
    function checkerror() {
        //alert("ddddddddddd");
        event.preventDefault();
        var form = $('#form_data')[0];
        var formData = new FormData(form);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="token"]').attr('value')
            }
        });
        var uname = document.getElementById("uname").value;
        var email = document.getElementById("aemail").value;
        var password = document.getElementById("password").value;
        var repassword = document.getElementById("repassword").value;
        if (uname == "" || email == "" || password == "" || repassword == "") {
            if (uname == "") {
                $('#error1').css("color", "red");
                $('#error1').html("All field are required.");
            } else {
                $('#error1').css("color", "red");
                $('#error1').html("");
            }
            if (email == "") {
                $('#error2').css("color", "red");
                $('#error2').html("All field are required.");
            } else {
                $('#error2').css("color", "red");
                $('#error2').html("");
            }
            if (password == "") {
                $('#error3').css("color", "red");
                $('#error3').html("All field are required.");
            } else {
                $('#error3').css("color", "red");
                $('#error3').html("");
            }
            if (repassword == "") {
                $('#error4').css("color", "red");
                $('#error4').html("All field are required.");
            } else {
                $('#error4').css("color", "red");
                $('#error4').html("");
            }


        } else {
            $.ajax({
                url: "process.php",
                data: formData,
                processData: false,
                contentType: false,
                type: 'POST',
                success: function(data) {
                    //alert(data);
                    if (data == "done") {
                        $('#error').css("color", "green");
                        $('#error').html("data inserted successfully");
                        setTimeout(function() {
                            location.reload();
                        }, 1000);
                    } else if (data == "sorry") {
                        $('#error').css("color", "red");
                        $('#error').html("Try after some time");
                        setTimeout(function() {
                            location.reload();
                        }, 1000);
                    }

                }

            });
        }

    };
    </script>
    <!-- form onkeyup -->
    <script>
    function keyup() {
        var name = document.getElementById("uname").value;
        var email = document.getElementById("aemail").value;
        var password = document.getElementById("password").value;
        var repassword = document.getElementById("repassword").value;
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;

        if (name == "") {
            document.getElementById('error1').style.color = "red";
            document.getElementById('error1').innerHTML = "name can't be blank";

        } else {
            document.getElementById('error1').innerHTML = "";
        }

        if (email == "") {
            document.getElementById('error2').style.color = "red";
            document.getElementById('error2').innerHTML = "email can't be blank";
        } else {
            if (email.match(mailformat)) {
                document.getElementById('error2').innerHTML = "";
            } else {
                document.getElementById('error2').style.color = "red";
                document.getElementById('error2').innerHTML = "invalid email";
            }
        }
        if (password == "") {
            document.getElementById('error3').style.color = "red";
            document.getElementById('error3').innerHTML = "password can't be blank";
        } else {
            if (password.match(passw)) {
                document.getElementById('error3').innerHTML = "";
            } else {
                document.getElementById('error3').style.color = "red";
                document.getElementById('error3').innerHTML = "Password not secured";
            }
        }
        if (repassword == "") {
            document.getElementById('error4').style.color = "red";
            document.getElementById('error4').innerHTML = "password can't be blank";
        } else {
            if (repassword.match(passw)) {
                document.getElementById('error4').innerHTML = "";
            } else {
                document.getElementById('error4').style.color = "red";
                document.getElementById('error4').innerHTML = "Password not secured";
            }
        }

    }
    </script>
    <!--script-->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="assets/js/wow.min.js"></script>
    <script type="text/javascript" src="assets/js/plugin/owl/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.magnific-popup.js"></script>
    <script type="text/javascript" src="assets/js/switcher.js"></script>
    <script type="text/javascript" src="assets/js/custom.js"></script>
</body>

</html>