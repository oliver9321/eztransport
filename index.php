<!DOCTYPE html>
<html lang="en-US">
<?php
include 'core.php';
?>

<head>
    <title><?=NAME_PAGE.' - Home' ?></title>
    <meta name="author" content="Nile-Theme">
    <meta name="robots" content="index follow">
    <meta name="googlebot" content="index follow">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="keywords" content="cargo, clean, contractor, corporate, freight, industry, localization, logistics, modern, shipment, transport, transportation, truck, trucking">
    <meta name="description" content="Transportation and Logistics">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google fonts -->
    <link rel="shortcut icon" href="assets/icons/Oficial%20sin%20fondo.png" />
    <link rel="stylesheet" href="assets/ThemaAlert/dist/sweetalert2.css">
    <link href="assets/fonts/font-awesome/css/fonts.googleapis.css" rel="stylesheet">
    <!-- animate -->

    <link rel="stylesheet" type="text/css" h href="assets/fonts/font-awesome/css/fonts.googleapis.materialicons.css"
        rel="stylesheet">
    <!-- <link rel="stylesheet" href="assets/css/Maxfontawesome.css">-->

    <!-- owl Carousel assets -->
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <!-- bootstrap -->

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/maxcdn.bootstrapcdn.css">
    <link rel="stylesheet" href="assets/css/material-bootstrap-wizard.css">

    <!-- hover anmation -->
    <link rel="stylesheet" href="assets/css/hover-min.css">
    <!-- flag icon -->
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <!-- main style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/colors/color-2.css">
    <!-- elegant icon -->
    <link rel="stylesheet" href="assets/css/elegant_icon.css">
    <link rel="stylesheet" href="assets/select2/select2.min.css">
    <!-- fontawesome  -->
    <link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="assets/rslider/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="assets/rslider/fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/rslider/css/settings.css">
    <link href='assets/fonts/css.css?family=Muli:400,300' rel='stylesheet' type='text/css'>

    <style>
    .pac-container {
        z-index: 10000 !important;
    }
    </style>

</head>

<body>
    <header>

        <div id="fixed-header-dark" class="header-output fixed-header">
            <div class="header-output">
                <div class="container header-in">

                    <!-- Up Head -->
                    <div class="up-head d-none d-lg-block">
                        <div class="row">
                            <div class="col-xl-9 col-lg-12">
                                <div class="row">
                                    <div class="col-md-3"><i class="fa fa-phone margin-right-10px"></i> <a
                                            href="tel:<?=PHONE?>">Main Phone <?=PHONE?></a></div>
                                    <div class="col-md-4"><i class="fa fa-envelope-o margin-right-10px"></i> <a
                                            href="mailto:<?=EMAIL?>"><?=EMAIL?></a> </div>
                                    <div class="col-md-5"><i class="fa fa-map-marker margin-right-10px"></i> <a
                                            href="<?=GOOGLE_MAPS?>"><?=ADDRESS?></a></div>
                                </div>
                            </div>
                            <div class="col-xl-3 d-none d-xl-block">
                                <div class="row">


                                    <div class="col-lg-6">
                                        <!--  Social -->
                                        <ul class="social-media list-inline text-right margin-0px text-white">
                                            <li class="list-inline-item"><a class="facebook" href="<?=FACEBOOK?>"
                                                    target="_blank"><i class="fa fa-facebook"
                                                        aria-hidden="true"></i></a></li>
                                            <li class="list-inline-item"><a class="instagram" href="<?=INSTAGRAM?>"
                                                    target="_blank"><i class="fa fa-instagram"
                                                        aria-hidden="true"></i></a></li>

                                        </ul>
                                        <!-- // Social -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // Up Head -->

                    <div class="position-relative">
                        <div class="row">
                            <div class="col-lg-3 col-md-12">
                                <a id="logo" href="index.php" class="d-inline-block margin-tb-15px"><img
                                        src="assets/img/Logo_Oficial.png" class="logoa" alt=""></a>
                                <a class="mobile-toggle padding-15px background-second-color border-radius-3"
                                    href="#"><i class="fa fa-bars"></i></a>
                            </div>
                            <div class="col-lg-7 col-md-12 position-inherit">
                                <ul id="menu-main"
                                    class="nav-menu float-xl-left text-lg-center link-padding-tb-25px white-link dropdown-dark">
                                    <li class=""><a href="#">Home</a></li>
                                    <li class=""><a href="about.php">About Us</a></li>
                                    <li class=""><a href="service.php">Services</a></li>
                                    <li class=""><a href="contact.php">Contact</a></li>
                                </ul>

                                <div class="d-none d-xl-block search-link pull-right model-link margin-top-15px">
                                    <a id="search-header" class="model-link margin-right-0px text-white opacity-hover-8"
                                        href="#search" style="width: 176px;">
                                        <i class="fa fa-search margin-right-10px"></i>Order Tracking
                                    </a>
                                </div>

                            </div>
                            <div class="col-lg-2 col-md-12  d-none d-lg-block">
                                <a data-toggle="modal" data-target="#myModal" href="#"
                                    style="background-color:#177AB7;  margin-top: 35px;"
                                    class="btn btn-sm border-radius-30 margin-tb-20px text-white  box-shadow float-right padding-lr-20px margin-left-30px d-block">
                                    <i class="fa fa-envelope-o margin-right-10px"></i> Get A Quote
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- // Header  -->



    <?php
    include("modalOrderTracking.php");
    include("modalquote.php");
    ?>


    <!-- // Get A Quote  -->

    <div id="rev_slider_3_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="nile-logistics-1"
        data-source="gallery"
        style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.4.8 fullwidth mode -->
        <div id="rev_slider_3_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.8">
            <ul>
                <!-- SLIDE  -->
                <li data-index="rs-3" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                    data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                    data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                    data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="assets/img/NuevaCarpeta/car.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                        data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption   tp-resizeme" id="slide-3-layer-1" data-x="['left','left','left','center']"
                        data-hoffset="['0','41','45','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['-111','-143','-186','-36']" data-width="461" data-height="173"
                        data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                        data-frames='[{"delay":10,"speed":1140,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','center']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 5; min-width: 461px; max-width: 461px; max-width: 173px; max-width: 173px; white-space: nowrap; font-size: 50px; line-height: 59px; font-weight: 400; color: #ffffff; letter-spacing: -4px;font-family:Poppins;">
                        WELCOME TO<br> EZ AUTO
                        <br> TRANSPORTATION <br>
                        <h1 class="subtitulo"> ANYWHERE, ANYTIME, ANYDAY</h1>
                    </div>


                </li>
                <!-- SLIDE  -->
                <li data-index="rs-4" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                    data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                    data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                    data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="assets/img/NuevaCarpeta/car5.jpg" alt="" data-bgposition="center center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption   tp-resizeme" id="slide-4-layer-1" data-x="['left','left','left','center']"
                        data-hoffset="['0','41','45','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['-111','-143','-186','-36']" data-width="461" data-height="173"
                        data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                        data-frames='[{"delay":10,"speed":1140,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','center']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 5; min-width: 461px; max-width: 461px; max-width: 173px; max-width: 173px; white-space: nowrap; font-size: 50px; line-height: 59px; font-weight: 400; color: #ffffff; letter-spacing: -4px;font-family:Poppins;">
                        Making<br> Transportation
                        <br> Fast & Save
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption rev-btn " id="slide-4-layer-2" data-x="['left','left','left','center']"
                        data-hoffset="['0','41','45','0']" data-y="['top','top','top','top']"
                        data-voffset="['453','372','435','471']" data-width="none" data-height="none"
                        data-whitespace="nowrap" data-type="button" data-responsive_offset="on" data-responsive="off"
                        data-frames='[{"delay":640,"speed":1120,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:transparent;bc:rgb(255,255,255);"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]"
                        data-paddingright="[35,35,35,35]" data-paddingbottom="[12,12,12,12]"
                        data-paddingleft="[35,35,35,35]"
                        style="z-index: 6; white-space: nowrap; font-size: 14px; line-height: 17px; font-weight: 500; color: rgba(255,255,255,1); letter-spacing: 0px;font-family:Poppins;background-color:rgb(13 14 14 / 95%);border-color:rgb(114 125 133);border-style:solid;border-width:2px 2px 2px 2px;border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                        <a class="text-secondary" href="contact.php">Contact Us</a> </div>
                </li>
                <li data-index="rs-4" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                    data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                    data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                    data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="assets/img/NuevaCarpeta/Slider3.jpg" alt="" data-bgposition="center center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption   tp-resizeme" id="slide-4-layer-1" data-x="['left','left','left','center']"
                        data-hoffset="['0','41','45','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['-111','-143','-186','-36']" data-width="461" data-height="173"
                        data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                        data-frames='[{"delay":10,"speed":1140,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','center']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 5; min-width: 461px; max-width: 461px; max-width: 173px; max-width: 173px; white-space: nowrap; font-size: 50px; line-height: 59px; font-weight: 400; color: #ffffff; letter-spacing: -4px;font-family:Poppins;">
                        Making<br> Transportation
                        <br> Fast & Save
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption rev-btn " id="slide-4-layer-2" data-x="['left','left','left','center']"
                        data-hoffset="['0','41','45','0']" data-y="['top','top','top','top']"
                        data-voffset="['453','372','435','471']" data-width="none" data-height="none"
                        data-whitespace="nowrap" data-type="button" data-responsive_offset="on" data-responsive="off"
                        data-frames='[{"delay":640,"speed":1120,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:transparent;bc:rgb(255,255,255);"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]"
                        data-paddingright="[35,35,35,35]" data-paddingbottom="[12,12,12,12]"
                        data-paddingleft="[35,35,35,35]"
                        style="z-index: 6; white-space: nowrap; font-size: 14px; line-height: 17px; font-weight: 500; color: rgba(255,255,255,1); letter-spacing: 0px;font-family:Poppins;background-color:rgb(13 14 14 / 95%);border-color:rgb(114 125 133);border-style:solid;border-width:2px 2px 2px 2px;border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                        <a class="text-secondary" href="contact.php">Contact Us</a></div>
                </li>
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>

    <!-- END REVOLUTION SLIDER -->

    <!--FIN DE HEADER -->


    <div class="nile-about-section">
        <div class="container">
            <!-- Title -->
            <div class="section-title margin-bottom-40px">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="icon text-main-color"><i class="fa fa-truck"></i></div>
                        <div class="h2">WELCOME TO EZ AUTO TRANSPORTATION</div>
                        <div class="des">Our mission is to be a safe transportation that ensures the mobility of
                            automotive, and preserves the quality of our client needs understanding their expectations.
                        </div>
                    </div>
                </div>
            </div>
            <!-- // End Title -->

            <div class="row">

                <div class="col-lg-4">
                    <div class="service-icon-box">

                        <div class="icon"><img src="assets/icons/Imagen3.png" alt=""></div>
                        <a href="#" class="title h2">Fast Delivery</a>
                        <div class="des">We schedule your transportation with the right truck to fit your needs. Any
                            offer a client gets guarantees the price and also door-to-door service.</div>
                    </div>
                    <div class="service-icon-box">
                        <div class="icon"><img src="assets/icons/Imagen1.png" alt=""></div>
                        <a href="#" class="title h2">Better service and security </a>
                        <div class="des">One agency, one team! Because it’s not about moving vehicles, it is about Auto
                            Transport that you can trust. Our trust transparency is open and fair for each one of our
                            clients.</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-center sm-mb-45px">
                        <img src="assets/img/Oficial-logo.png" alt="" class="border-radius-500">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-icon-box">
                        <div class="icon"><img src="assets/icons/Imagen2.png" alt=""></div>
                        <a href="#" class="title h2">24/7 Support</a>
                        <div class="des">Our company serves the people of all the States by providing 24/7 contact to
                            our clients. A transportation network that is reliable, well planned, and has the goal of
                            being an efficient and modern transportation system.</div>
                    </div>
                    <div class="service-icon-box">
                        <div class="icon"><img src="assets/icons/Imagen6.png" alt=""></div>
                        <a href="#" class="title h2"> </a>

                        <a class="title h5"></a>
                        <div class="des">EZ Auto Transportation is fully licensed, bonded and insured.</div>
                    </div>
                </div>



            </div>


            <div class="text-center margin-top-35px">
                <a href="service.php" class="nile-bottom md">Show our services <i class="fa fa-arrow-right"></i> </a>
            </div>

        </div>
    </div>

    <div class="call-action ba-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 padding-tb-15px">
                    <h2>THE FACTS SPEAKS FOR THEMSELVES </h2>
                    <h4>-ANYWHERE, ANYTIME, ANYDAY- </h4>
                </div>
                <div class="col-lg-5">

                    <div class="col-md-6">
                        <div class="service layout-1">
                            <div class="clearfix">
                                <div class="icon"><img src="assets/icons/Earth-WF.png" alt=""></div>
                                <a href="#" class="title">+5</a>
                            </div>
                            <div class="dis clearfix">
                                STAR RATING WORLD WIDE
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service layout-1">
                            <div class="clearfix">
                                <div class="icon"><img src="assets/icons/Lane.png" alt=""></div>
                                <a href="#" class="title">895K</a>
                            </div>
                            <div class="dis clearfix">
                                MILES PER YEAR
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>






    <!--============= About Us =============-->
    <div class="nile-about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 sm-mb-45px">

                    <div class="section-title-right text-main-color clearfix">
                        <div class="icon"><img src="assets/icons/title-icon-1.png" alt=""></div>
                        <h2 class="title-text">FLEET GALLERY</h2>
                    </div>
                    <div class="about-text margin-tb-25px">
                        <h4>EZ Auto Transportation provides superior auto transport services because we are committed
                            while understanding our customer’s needs.</h4>
                        <h6>GET MORE INFORMATION FROM OUR EXPERTS TODAY!</h6>
                    </div>
                </div>
                <div class="col-lg-6 sm-mb-45px">
                    <!--carousel  -->

                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                            <li data-target="#myCarousel" data-slide-to="4"></li>
                            <li data-target="#myCarousel" data-slide-to="5"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">

                            <div class="item active">
                                <img src="./assets/img/CarouselHome/carousel5-.jpg" alt="Los Angeles"
                                    style="width:100%;">
                                <div class="carousel-caption">
                                    <h3>
                                        Open transport</h3>
                                </div>
                            </div>

                            <div class="item">
                                <img src="./assets/img/CarouselHome/carousel12-.jpg" alt="Chicago" style="width:100%;">
                                <div class="carousel-caption">
                                    <h3>Transport exotic cars</h3>
                                </div>
                            </div>

                            <div class="item">
                                <img src="./assets/img/CarouselHome/carousel1-.jpg" alt="New York" style="width:100%;">
                                <div class="carousel-caption">
                                    <h3>Transport exotic cars</h3>
                                </div>
                            </div>

                            <div class="item">
                                <img src="./assets/img/CarouselHome/carousel13-.jpg" alt="Chicago" style="width:100%;">
                                <div class="carousel-caption">
                                </div>
                            </div>

                            <div class="item">
                                <img src="./assets/img/CarouselHome/carousel14-.jpg" alt="New York" style="width:100%;">
                                <div class="carousel-caption">
                                    <h3>
                                        Motor transport</h3>
                                </div>
                            </div>

                            <div class="item">
                                <img src="./assets/img/CarouselHome/carousel15-.jpg" alt="New York" style="width:100%;">
                                <div class="carousel-caption">
                                    <h3>
                                        Motor transport</h3>
                                </div>
                            </div>



                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <!--carousel  -->

            </div>
        </div>
    </div>

    <!--============= //About Us =============-->





    <div class="section padding-tb-100px section-ba-2">
        <div class="container">
            <!-- Title -->
            <div class="section-title margin-bottom-40px">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="icon text-main-color"><i class="fa fa-commenting-o"></i></div>
                        <div class="h2">Testimonials</div>
                        <div class="des">SOME OF OUR CLIENTS </div>
                    </div>
                </div>
            </div>
            <!-- // End Title -->

            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="testimonials layout-1">
                        <div class="icon"></div>
                        <div class="text">First time using a carrier to transport my car from Georgia to Alabama could
                            not make a
                            better choice. Thanks to this team for helping me move to my new hometown</div>
                        <div class="meta">
                            <div class="testimonials-thum"><img src="assets/img/" alt=""></div>
                            <div class="name">Rabie Elkheir</div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="testimonials layout-1">
                        <div class="icon"></div>
                        <div class="text">Ez Auto Transportation has an excellent service they kept me updated along the
                            way of
                            the route, Delivery was quicker than expected</div>
                        <div class="meta">
                            <div class="testimonials-thum"><img src="assets/img/" alt=""></div>
                            <div class="name">Khalid Alnoor</div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="testimonials layout-1">
                        <div class="icon"></div>
                        <div class="text">Great service and incredible communication</div>
                        <div class="meta">
                            <div class="testimonials-thum"><img src="assets/img/" alt=""></div>
                            <div class="name">Amal Salman</div>
                        </div>
                    </div>
                </div>

            </div>



            <br>
            <br>

            <!-- Title -->
            <div class="section-title margin-bottom-40px">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="icon text-main-color"><i class="fa fa-envelope-o "></i></div>
                        <div class="h2">
                            Ready to ship your vehicle ? </div>
                        <a data-toggle="modal" data-target="#myModal" href="#"
                            style="background-color:#177AB7; padding: 8px; font-size: 13px; "
                            class="btn btn-sm border-radius-30 margin-tb-20px text-white  box-shadow  padding-lr-20px   d-block">
                            <i class="fa fa-hand-o-right"></i> &nbsp; Get a quote
                        </a>
                    </div>
                </div>
            </div>
            <!-- // End Title -->


        </div>
    </div>




    <div class="map-layout">
        <div class="map-embed">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3588.7300053841586!2d-80.29984868454196!3d25.91124480871755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjXCsDU0JzQwLjUiTiA4MMKwMTcnNTEuNiJX!5e0!3m2!1ses!2sdo!4v1634519876644!5m2!1ses!2sdo"
                width="100%" height="390" frameborder="0" style="border:0" allowfullscreen></iframe>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8"></div>
                <div class="col-lg-4">
                    <div class="padding-tb-20px padding-lr-30px background-main-color pull-top-309px">
                        <div class="contact-info-map">
                            <div class="margin-bottom-30px">
                                <h2 class="title">Location</h2>
                                <div class="contact-info opacity-9">
                                    <div class="icon margin-top-5px"><span class="icon_pin_alt"></span></div>
                                    <div class="text">
                                        <span class="font-weight-500 text-uppercase"><a target="_blank"
                                                href="<?=GOOGLE_MAPS?>" class="text-light"><?=ADDRESS?></a></span>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="call_center margin-top-30px">
                                <h2 class="title">Main Office</h2>
                                <div class="contact-info opacity-9">
                                    <div class="icon  margin-top-5px"><span class="icon_phone"></span></div>
                                    <div class="text">
                                        <span class="title-in">Call Us :</span><br>
                                        <span class="font-weight-500 text-uppercase"><a
                                                href="tel:<?=PHONE?>"><?=PHONE?></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="layout-light">

        <div class="copy-right">
            <div class="container padding-tb-15px">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="copy-right-text text-lg-left text-center sm-mb-15px">© 2021 EZ AUTO TRANSPORTATION
                            <a href="#"></a> - All rights reserved </div>
                    </div>
                    <div class="col-lg-6">
                        <!--  Social -->
                        <ul class="social-media list-inline text-lg-right text-center margin-0px text-dark">
                            <li class="list-inline-item"><a class="facebook" href="<?=FACEBOOK?>" target="_blank"><i
                                        class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="instagram"
                                    href="https://instagram.com/ezautotransportation?utm_medium=copy_link"
                                    target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

                        </ul>
                        <!-- // Social -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- jquery library  -->


    <!-- <script src="assets/js/bootstrap1.min.js"></script>-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.mask.js"></script>
    <script src="assets/js/jquery.bootstrap.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/material-bootstrap-wizard.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/select2/select2.min.js"></script>
    <script src="assets/js/nile-slider.js"></script>
    <!--<script src="assets/js/jquery-3.2.1.min.js"></script>-->
    <!-- <script src="assets/js/jquery-2.2.4.min.js"></script>-->
    <!-- REVOLUTION JS FILES -->
    <script src="assets/rslider/js/jquery.themepunch.tools.min.js"></script>
    <script src="assets/rslider/js/jquery.themepunch.revolution.min.js"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
    <script src="assets/rslider/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.video.min.js"></script>

    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/imagesloaded.min.js"></script>
    <script src="assets/js/custom.js"></script>

    <script src="assets/js/popper.min.js"></script>

    <script src="assets/ThemaAlert/dist/sweetalert2.min.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOHEjweqW61WAqGaXKZzuQS7sbOakgpT0&libraries=places">
    </script>


</body>
</html>
<script>
$(document).ready(function() {
    $("#LoadingButton").hide();
    $('.phone').mask("(000) 000-0000");
    $('.inputDate').mask("00/00/0000");
    $('.solo-numero').on('input', function() {
        this.value = this.value.replace(/[^0-9]/g, '');
    });

    $("#next").prop('disabled', true);
    $(".BloquiarClick").prop('disabled', true);

    $("#add-new").click(function() {

        //Add row
        row = '';
        row +=
            '<tr><td><select class="cssbordertable" required="required"><option disabled="" selected=""></option>' +
            '<option>Open</option>' +
            '<option>Enclosed </option>' +
            '</select></td>' +
            '<td><select class="cssbordertable" required="required"><option disabled="" selected=""></option>' +
            '<option>Open</option>' +
            '<option>Enclosed </option></select></td>' +
            '<td><input type="number" class="cssbordertable"style="text-align: center;" ></td>';

        row +=
            '<td style="text-align: center;"><a class="delete" title="Delete" data-toggle="tooltip"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a></td></tr>';

        $("tbody").append(row);

    });
    // Delete row on delete button click
    $(document).on("click", ".delete", function() {
        $(this).parents("tr").remove();
        $(".add-new").removeAttr("disabled");
    });

});



$("#ZipCode").keyup(function() {

    if ($("#ZipCode").val() != "" & $("#ZipCode2").val() != "") {
        $("#next").prop('disabled', false);
    }
    if ($("#ZipCode").val() == "") {
        $("#next").prop('disabled', true);
    }
});

$("#ZipCode2").keyup(function() {

    if ($("#ZipCode2").val() != "" & $("#ZipCode").val() != "") {
        $("#next").prop('disabled', false);
    }
    if ($("#ZipCode2").val() == "") {
        $("#next").prop('disabled', true);
    }
});


$("#DivRadioAuto").click(function() {
    $("#next").prop('disabled', false);
});
$("#DivRadioMotorcycle").click(function() {
    $("#next").prop('disabled', false);
});

$("#DivRadioBoth").click(function() {
    $("#next").prop('disabled', false);
});


$("#previous").click(function() {
    $("#next").prop('disabled', false);
});


$("#next").click(function() {

    if ($("#exapleI").val() == "") {

        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please complete all fields'
        })


    } else {
        if ($("#RadioAuto").prop('checked') || $("#RadioMotorcycle").prop('checked')) {
            $("#next").prop('disabled', true);
        };
    }
});

$("#DivRadioAuto").click(function() {
    $("#TypeV").empty();
    $("#TypeV").append(

        '<div class="col-sm-10 col-sm-offset-1 "> ' +
        '<div class="form-group label-floating"> ' +
        '<input type="text" class="form-control" id="TypeVehicle" name="TypeVehicle"  value="Auto" > ' +
        '</div> ' +
        '</div> '

    );

    $("#TypeV").hide();
});
$("#DivRadioMotorcycle").click(function() {
    $("#TypeV").empty();
    $("#TypeV").show();
    $("#TypeV").append(


        '  <div class="form-group label-floating">' +
        ' 	<label class="control-label">Select Vehicle*</label>' +
        ' 	<select class="form-control" id="TypeVehicle" name="TypeVehicle" required="required">' +
        '    	<option disabled="" selected=""></option>' +
        '    	<option>Motorcycle</option>' +
        '   	<option>ATV/UTV </option>' +
        '       <option>Other </option>' +
        ' 	</select>' +
        ' </div>'


    );

});


$("#search1").click(function() {

    $("#pendiente").empty();
    $("#recojido").empty();
    $("#entregado").empty();
    $("#estado1").empty();

    $("#pendiente1").removeClass("fa fa-road styleVerde");
    $("#pendiente1").addClass("fa fa-road");
    $("#recojido1").removeClass("fa fa-truck styleVerde");
    $("#recojido1").addClass("fa fa-truck");
    $("#entregado1").removeClass("fa fa-handshake-o styleVerde");
    $("#entregado1").addClass("fa fa-handshake-o");

    $("#pendiente1").removeClass("fa fa-road styleRojo");
    $("#pendiente1").addClass("fa fa-road");
    $("#recojido1").removeClass("fa fa-truck styleRojo");
    $("#recojido1").addClass("fa fa-truck");
    $("#entregado1").removeClass("fa fa-handshake-o styleRojo");
    $("#entregado1").addClass("fa fa-handshake-o");
    $("#estado11").removeClass("fa fa-ban fa-1x fa-fw styleRojo");
    $("#estado11").addClass("fa fa-ban fa-1x fa-fw");

    var OrderID = $("#buscar").val();
    $("#StatusText").html("");
    $.ajax({
        type: 'POST',
        dataType: "json",
        crossDomain: true,
        format: "json",
        url: "http://www.ezautotransportationusa.com/system/index.php?c=Orders&a=GetStatusOrder",
        data: {
            'OrderID': OrderID
        }
    }).then(function(response) {

        if (response != "") {

            var data = response.Status;

            $("#StatusText").html("Hello <b>" + response.CustomerOrigin +
                "</b>, the status of your order is <b>" + data + "</b>");

            switch (data) {

                case "Pending":

                    $("#pendiente").append('<img src="assets/icons/validate3.png">');
                    $("#pendiente1").removeClass("fa fa-road");
                    $("#pendiente1").addClass("fa fa-road styleVerde");

                    break;

                case "Picked up":

                    $("#pendiente").append('<img src="assets/icons/validate3.png">');
                    $("#recojido").append('<img src="assets/icons/validate3.png">');

                    $("#pendiente1").removeClass("fa fa-road");
                    $("#pendiente1").addClass("fa fa-road styleVerde");
                    $("#recojido1").removeClass("fa fa-truck");
                    $("#recojido1").addClass("fa fa-truck styleVerde");
                    break;

                case "Delivered":

                    $("#pendiente").append('<img src="assets/icons/validate3.png">');
                    $("#recojido").append('<img src="assets/icons/validate3.png">');
                    $("#entregado").append('<img src="assets/icons/validate3.png">');

                    $("#pendiente1").removeClass("fa fa-road");
                    $("#pendiente1").addClass("fa fa-road styleVerde");
                    $("#recojido1").removeClass("fa fa-truck");
                    $("#recojido1").addClass("fa fa-truck styleVerde");
                    $("#entregado1").removeClass("fa fa-handshake-o");
                    $("#entregado1").addClass("fa fa-handshake-o styleVerde");

                    break;

                case "Cancelled":

                    $("#estado1").append('<img src="assets/icons/close.png">');

                    $("#pendiente1").removeClass("fa fa-road");
                    $("#pendiente1").addClass("fa fa-road styleRojo");
                    $("#recojido1").removeClass("fa fa-truck");
                    $("#recojido1").addClass("fa fa-truck styleRojo");
                    $("#entregado1").removeClass("fa fa-handshake-o");
                    $("#entregado1").addClass("fa fa-handshake-o styleRojo");
                    $("#estado11").removeClass("fa fa-cog fa-spin fa-1x fa-fw");
                    $("#estado11").addClass("fa fa-cog fa-spin fa-1x fa-fw styleRojo");
                    break;

            }

        } else {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'This request is not registered.'
            })
        }


    });

});


$("#PickUpLocation").change(function() {
    $(".originAdrees").addClass("is-focused");
});

$("#DeliveryLocation").change(function() {
    $(".destinoAddress").addClass("is-focused");
});
</script>
<script src="assets/js/GoogleConsulta.js"></script>
<script src="assets/js/logic.js"></script>