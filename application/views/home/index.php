<!-- 

BLM RAPIH, blm templating
 -->

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Depok Sehat</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="<?= base_url('assets/template_landing'); ?>/images/favicon.png" type="image/png">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="<?= base_url('assets/template_landing'); ?>/css/animate.css">

    <!--====== LineIcons CSS ======-->
    <link rel="stylesheet" href="<?= base_url('assets/template_landing'); ?>/css/lineicons.css">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="<?= base_url('assets/template_landing'); ?>/css/bootstrap.min.css">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="<?= base_url('assets/template_landing'); ?>/css/default.css">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="<?= base_url('assets/template_landing'); ?>/css/style.css">

</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->


    <!--====== HEADER PART START ======-->

    <section class="header_area">
        <div class="header_navbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="<?= base_url('admin'); ?>">
                                <span class="d-none d-lg-block title-green">Depok Sehat</span>
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">Home<span></span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">About<span></span></a>
                                    </li>                                                                        
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header navbar -->

        <div id="home" class="header_hero">
            <!-- <ul class="header_social d-none d-lg-block">
                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                <li><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
                <li><a href="#"><i class="lni lni-instagram-filled"></i></a></li>
                <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
            </ul> -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="col-lg-6">
                                <div class="header_hero_content mt-45">
                                    <h5 class="header_sub_title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Hello</h5>
                                    <h2 class="header_title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">Slide 1</h2>
                                    <span class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">Please, purchase full version to get all elements, features, footer credit removal permission and commercial license</span>
                                    <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s">Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
                                    <a href="https://rebrand.ly/freelancer-ud" rel="nofollow" class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.4s">Purchase Now</a>
                                </div> <!-- header hero content -->
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-7">
                                <div class="header_hero_image mt-50 wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="1.8s">
                                    <!-- <img src="<?= base_url('assets/template_landing'); ?>/images/hero.png" alt="hero"> -->
                                </div> <!-- header hero image -->
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="col-lg-6">
                                <div class="header_hero_content mt-45">
                                    <h5 class="header_sub_title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Hello</h5>
                                    <h2 class="header_title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">Slide 2</h2>
                                    <span class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">Please, purchase full version to get all elements, features, footer credit removal permission and commercial license</span>
                                    <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s">Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
                                    <a href="https://rebrand.ly/freelancer-ud" rel="nofollow" class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.4s">Purchase Now</a>
                                </div> <!-- header hero content -->
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-7">
                                <div class="header_hero_image mt-50 wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="1.8s">
                                    <!-- <img src="<?= base_url('assets/template_landing'); ?>/images/hero.png" alt="hero"> -->
                                </div> <!-- header hero image -->
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="col-lg-6">
                                <div class="header_hero_content mt-45">
                                    <h5 class="header_sub_title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Hello</h5>
                                    <h2 class="header_title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">Slide 3</h2>
                                    <span class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">Please, purchase full version to get all elements, features, footer credit removal permission and commercial license</span>
                                    <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s">Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
                                    <a href="https://rebrand.ly/freelancer-ud" rel="nofollow" class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.4s">Purchase Now</a>
                                </div> <!-- header hero content -->
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-7">
                                <div class="header_hero_image mt-50 wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="1.8s">
                                    <!-- <img src="<?= base_url('assets/template_landing'); ?>/images/hero.png" alt="hero"> -->
                                </div> <!-- header hero image -->
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>



            <!-- container -->
            <div class="header_hero_shape d-none d-lg-block"></div> <!-- header hero shape -->
        </div> <!-- header hero -->
    </section>

    <!--====== HEADER PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="about" class="about_area pt-70 pb-120">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-9">
                    <div class="about_image mt-50 wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <img src="<?= base_url('assets/template_landing'); ?>/images/about_hero.png" alt="Hero">
                        <div class="about_shape"></div>
                    </div> <!-- about image -->
                </div>
                <div class="col-lg-6">
                    <div class="about_content mt-45 wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <div class="section_title">
                            <h5 class="sub_title">About</h5>
                            <h3 class="main_title">Why You Hire Me?</h3>
                            <ul class="line">
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div> <!-- section title -->
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus.</p>

                        <div class="about_skills pt-15">
                            <div class="skill_item mt-20">
                                <div class="skill_header">
                                    <h6 class="skill_title">UI/UX Design</h6>
                                    <div class="skill_percentage">
                                        <p><span class="counter">85</span>%</p>
                                    </div>
                                </div>
                                <div class="skill_bar">
                                    <div class="bar_inner">
                                        <div class="bar progress_line" data-width="85"></div>
                                    </div>
                                </div>
                            </div> <!-- skill item -->
                            <div class="skill_item mt-20">
                                <div class="skill_header">
                                    <h6 class="skill_title">Web Design</h6>
                                    <div class="skill_percentage">
                                        <p><span class="counter">75</span>%</p>
                                    </div>
                                </div>
                                <div class="skill_bar">
                                    <div class="bar_inner">
                                        <div class="bar progress_line" data-width="75"></div>
                                    </div>
                                </div>
                            </div> <!-- skill item -->
                            <div class="skill_item mt-20">
                                <div class="skill_header">
                                    <h6 class="skill_title">HTML/CSS</h6>
                                    <div class="skill_percentage">
                                        <p><span class="counter">90</span>%</p>
                                    </div>
                                </div>
                                <div class="skill_bar">
                                    <div class="bar_inner">
                                        <div class="bar progress_line" data-width="90"></div>
                                    </div>
                                </div>
                            </div> <!-- skill item -->
                            <div class="skill_item mt-20">
                                <div class="skill_header">
                                    <h6 class="skill_title">Sketch</h6>
                                    <div class="skill_percentage">
                                        <p><span class="counter">65</span>%</p>
                                    </div>
                                </div>
                                <div class="skill_bar">
                                    <div class="bar_inner">
                                        <div class="bar progress_line" data-width="65"></div>
                                    </div>
                                </div>
                            </div> <!-- skill item -->
                        </div> <!-- about skill -->
                    </div> <!-- about content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== SERVICES PART START ======-->

    <section id="services" class="services_area pt-115 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-30">
                        <h5 class="sub_title">Services</h5>
                        <h3 class="main_title">Service I Provide</h3>
                        <ul class="line">
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_service mt-30 wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <div class="service_icon">
                            <i class="lni lni-vector"></i>
                        </div>
                        <div class="service_content">
                            <h4 class="service_title"><a href="#">Graphic Design</a></h4>
                            <p>Lorem ipsum dolor sit aconsect dipisicing elit, sed do eiusmod to incididunt uabore etdolore magna aliqua.</p>
                        </div>
                    </div> <!-- single service -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_service mt-30 wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <div class="service_icon">
                            <i class="lni lni-layout"></i>
                        </div>
                        <div class="service_content">
                            <h4 class="service_title"><a href="#">Web Design</a></h4>
                            <p>Lorem ipsum dolor sit aconsect dipisicing elit, sed do eiusmod to incididunt uabore etdolore magna aliqua.</p>
                        </div>
                    </div> <!-- single service -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_service mt-30 wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.8s">
                        <div class="service_icon">
                            <i class="lni lni-ux"></i>
                        </div>
                        <div class="service_content">
                            <h4 class="service_title"><a href="#">UI/UX Design</a></h4>
                            <p>Lorem ipsum dolor sit aconsect dipisicing elit, sed do eiusmod to incididunt uabore etdolore magna aliqua.</p>
                        </div>
                    </div> <!-- single service -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_service mt-30 wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <div class="service_icon">
                            <i class="lni lni-code"></i>
                        </div>
                        <div class="service_content">
                            <h4 class="service_title"><a href="#">Frontend Development</a></h4>
                            <p>Lorem ipsum dolor sit aconsect dipisicing elit, sed do eiusmod to incididunt uabore etdolore magna aliqua.</p>
                        </div>
                    </div> <!-- single service -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_service mt-30 wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <div class="service_icon">
                            <i class="lni lni-briefcase"></i>
                        </div>
                        <div class="service_content">
                            <h4 class="service_title"><a href="#">Business Analysis</a></h4>
                            <p>Lorem ipsum dolor sit aconsect dipisicing elit, sed do eiusmod to incididunt uabore etdolore magna aliqua.</p>
                        </div>
                    </div> <!-- single service -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_service mt-30 wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.8s">
                        <div class="service_icon">
                            <i class="lni lni-bullhorn"></i>
                        </div>
                        <div class="service_content">
                            <h4 class="service_title"><a href="#">Digital Marketing</a></h4>
                            <p>Lorem ipsum dolor sit aconsect dipisicing elit, sed do eiusmod to incididunt uabore etdolore magna aliqua.</p>
                        </div>
                    </div> <!-- single service -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== SERVICES PART ENDS ======-->




    <!--====== CALL TO ACTION PART START ======-->

    <section id="contact" class="call_to_action_area">
        <div class="container">
            <div class="call_to_action_wrapper wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.5s">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="call_to_action_box d-md-flex justify-content-between align-items-center">
                            <div class="call_to_action_content">
                                <h3 class="action_title">Slide 1</h3>
                                <ul class="line">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                                <p>Please, purchase full version to get all elements, features, footer credit removal permission and commercial license</p>
                            </div> <!-- call to action content -->

                            <div class="call_to_action_btn">
                                <a href="https://rebrand.ly/freelancer-ud" rel="nofollow" class="main-btn">HIRE ME</a>
                            </div> <!-- call to action btn -->
                        </div> <!-- call to action box -->
                    </div>
                </div> <!-- row -->
            </div> <!-- call to action wrapper -->
        </div> <!-- container -->
    </section>

    <!--====== CALL TO ACTION PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer_area gray-bg pt-115 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer_content text-center">
                        <a href="#"><img src="<?= base_url('assets/template_landing'); ?>/images/logo.svg" alt="Logo"></a>
                        <ul class="footer_social">
                            <li><a href="#"><i class="lni lni-facebook"></i></a></li>
                            <li><a href="#"><i class="lni lni-twitter"></i></a></li>
                            <li><a href="#"><i class="lni lni-instagram"></i></a></li>
                            <li><a href="#"><i class="lni lni-linkedin"></i></a></li>
                        </ul>
                        <span class="email">someone@example.com</span>
                        <ul class="footer_menu">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Service</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                        <p class="credit pt-45">Template Designed and Developed by <a href="https://uideck.com/" rel="nofollow">UIdeck</a></p>
                    </div> <!-- footer content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== PART START ======-->

    <!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">
                    
                </div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->

    <!-- row -->


    <!--====== Jquery js ======-->
    <script src="<?= base_url('assets/template_landing'); ?>/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?= base_url('assets/template_landing'); ?>/js/vendor/modernizr-3.7.1.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="<?= base_url('assets/template_landing'); ?>/js/popper.min.js"></script>
    <script src="<?= base_url('assets/template_landing'); ?>/js/bootstrap.min.js"></script>


    <!--====== Appear js ======-->
    <script src="<?= base_url('assets/template_landing'); ?>/js/jquery.appear.min.js"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="<?= base_url('assets/template_landing'); ?>/js/jquery.easing.min.js"></script>
    <script src="<?= base_url('assets/template_landing'); ?>/js/scrolling-nav.js"></script>

    <!--====== Main js ======-->
    <script src="<?= base_url('assets/template_landing'); ?>/js/main.js"></script>

</body>

</html>