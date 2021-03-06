<!DOCTYPE html>
<html class="csstransforms csstransforms3d csstransitions no-js skrollr skrollr-desktop" lang="en">
    <head>
        <title>Salon Zero</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- favicon -->
        <link rel="shortcut icon" href="" />
        <!-- google font -->
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" />
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Oswald:300,400,700" />

        <link rel="stylesheet" href="css/jquery.datetimepicker.css" />

        <!-- font awesome-->
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
        <!-- Animation -->
        <link rel="stylesheet" type="text/css"  id="animationcss" href="css/animation.css" />
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <!-- custom style -->
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <!-- custom scrollbar -->
        <link rel="stylesheet" type="text/css" href="css/custom-scrollbar.css">
        <!-- responsive -->
        <link rel="stylesheet" type="text/css" href="css/responsive.css">

        <style>
            .logo-white{
                display: none;
            }

            .logo-dark{
                display: none;
                visibility: hidden;
                height: 20px;
            }         

            button *{
                -webkit-transition-duration: 0s !important;
                transition-duration: 0s !important;
            }
            .xdsoft_prev{
                -webkit-transition-duration: 0s !important;
                transition-duration: 0s !important;
            }
            /*            button.xdsoft_next{
                            transition-duration: 0s !important;
                        }
                        .xdsoft_prev{
                            transition-duration: 0s !important;
                        }*/
        </style>
    </head>

    <body>
        <!-- main page -->
        <div class="main"> 
            <!-- header-->
            <header id="home" data-stellar-background-ratio="0.5" class="header animated no-background">
                <nav class="navbar navbar-default navbar-fixed-top nav-transparent overlay-nav sticky-nav" role="navigation">
                    <img alt="logo-dark" src="images/logo-dark.png" style="width:135px; position: fixed; left: 11%;" />
                    <div class="container main-navigation">
                        <div class="col-md-3 float-left"> <a class="logo-dark" href="#home"><img alt="logo-dark" src="images/logo-dark.png" class="logo-dark" /></a> <a class="logo-light" href="#home"><img alt="logo-white" src="images/logo-white.png" class="logo-white" /></a> </div>
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle Navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        </div>
                        <div class="col-md-9 text-left float-right collapse-navation">
                            <div class="navbar-collapse collapse navbar-inverse no-transition">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="#about">About Us</a></li>
                                    <li><a href="#work">Our Work</a></li>
                                    <li><a href="#expertise">Expertise</a></li>
                                    <li><a href="#team">Team</a></li>
                                    <li class="last"><a href="#contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="home-slider full-screen">
                    <div id="carousel3" class="carousel slide " data-ride="carousel3" data-interval='false'>
                        <!-- Indicators -->
                        <ol class="carousel-indicators" style="display:none;">
                            <li class="active" data-slide-to="0" data-target="#carousel3"></li>
                            <li data-slide-to="1" data-target="#carousel3" class=""></li>
                            <li data-slide-to="2" data-target="#carousel3" class=""></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="slider-gradient-overlay"></div>
                                <div style="background-image:url('images/bg1.jpg');" class="fill"></div>
                                <div class="slider-text">
                                    <div class="col-md-6">
                                        <h1>Real human hair extensions</h1>
                                        <span>We will give u volume,healthy,long,thick hair instead of u have.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="slider-gradient-overlay"></div>
                                <div style="background-image:url('images/bg2.jpg');" class="fill"></div>
                                <div class="slider-text">
                                    <div class="col-md-6">
                                        <h1>Hair tattoos for ladies</h1>
                                        <span>Are u ready to challenge ? GET YOUR NEW LOOK.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="slider-gradient-overlay"></div>
                                <div style="background-image:url('images/bg3.jpg');" class="fill"></div>
                                <div class="slider-text">
                                    <div class="col-md-6">
                                        <h1>Change ur old look </h1>
                                        <span>Hurry up and Get Your New Look.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="slider-gradient-overlay"></div>
                                <div style="background-image:url('images/bg4.jpg');" class="fill"></div>
                                <div class="slider-text">
                                    <div class="col-md-6">
                                        <h1>What color is your hair gonna be</h1>
                                        <span>Find out what you should dye your hair to match you and your personality..</span>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </header>
            <!-- header end --> 

            <!-- about -->
            <section id="about" class="gray-bg">
                <div class="container">
                    <div class="row border-bottom os-animation text-center" data-os-animation="fadeInUp">
                        <div class="col-md-6 col-sm-6 title-text border-right">
                            <h2 class="title">About</h2>
                        </div>
                        <div class="col-md-6 col-sm-6 simple-text">
                            <p class="description text-left">We provide a wide range of services related to hair care with our well trained professionals to cater to all your needs.</p>
                        </div>
                    </div>
                    <div class="row border-bottom os-animation" data-os-animation="fadeInUp">
                        <div class="col-md-3 col-sm-3 service-box border-right text-center">
                            <div class="service-icon"> <i class="fa fa-pencil-square-o"></i> </div>
                            <h6>Innovate</h6>
                            <p class="content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                        </div>
                        <div class="col-md-3 col-sm-3 service-box border-right text-center">
                            <div class="service-icon"> <i class="fa fa-comment-o"></i> </div>
                            <h6>Qualities</h6>
                            <p class="content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                        </div>
                        <div class="col-md-3 col-sm-3 service-box border-right text-center">
                            <div class="service-icon"> <i class="fa fa-cut"></i> </div>
                            <h6>Analytics</h6>
                            <p class="content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                        </div>
                        <div class="col-md-3 col-sm-3 service-box text-center">
                            <div class="service-icon"> <i class="fa fa-bell-o"></i> </div>
                            <h6>strategy</h6>
                            <p class="content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                        </div>
                    </div>
                    <div class="row os-animation text-center" data-os-animation="fadeInUp">
                        <p class="lead width">We are ready to serve you. Are you ready for a great new experience</p>
                        <br>
                        <a id="href-about" class="highlight-button-black inner-link" href="#contact">Let's work together</a> </div>
                </div>
            </section>
            <!-- about end --> 

            <!-- work -->
            <section id="grid-gallery" class="grid-gallery no-padding-top no-padding-bottom">
                <div id="work" class="work grid-wrap"> 
                    <!-- portfolio tab -->
                    <ul class="isotope-filters text-center os-animation" data-os-animation="fadeInUp">
                        <li class="active"><a class="active" data-filter="*" href="#">all</a></li>
                        <li><a data-filter=".design" href="#">hair extensions</a></li>
                        <li><a data-filter=".fashion" href="#">hair Arts</a></li>
                        <li><a data-filter=".illustration" href="#">Hair colour</a></li>
                        <li><a data-filter=".product" href="#">Treatments</a></li>
                        <li><a data-filter=".style" href="#">BRIDAL DRESSING</a></li>
                    </ul>
                    <ul class="grid portfolio isotope no-transition portfolio-hex portfolio-shadows row demo-3 os-animation" data-os-animation="fadeInUp">
                        <li class="portfolio-item col-md-3 col-sm-3 fashion style grid cs-style-3">
                            <figure class="portfolio-figure"> <img src="http://placehold.it/1000x1000" alt="work-01" />
                                <figcaption>
                                    <h4 class="title">Real human hair extensions1</h4>
                                    <span>Fashion, style</span> <a class="text-right" href="javascript:;"><i class="fa fa-angle-right"></i></a> </figcaption>
                            </figure>
                        </li>
                        <li class="portfolio-item col-md-3 col-sm-3 fashion product style grid cs-style-3">
                            <figure class="portfolio-figure"> <img src="http://placehold.it/1000x1000" alt="work-02" />
                                <figcaption>
                                    <h4 class="title">Apple New Design</h4>
                                    <span>product, style</span> <a class="text-right" href="javascript:;"><i class="fa fa fa-angle-right"></i></a> </figcaption>
                            </figure>
                        </li>
                        <li class="portfolio-item col-md-3 col-sm-3 fashion style product grid cs-style-3">
                            <figure class="portfolio-figure"> <img src="http://placehold.it/1000x1000" alt="work-03" />
                                <figcaption>
                                    <h4 class="title">Dreams</h4>
                                    <span>design, Fashion, product</span> <a class="text-right" href="javascript:;"><i class="fa fa fa-angle-right"></i></a> </figcaption>
                            </figure>
                        </li>
                        <li class="portfolio-item col-md-3 col-sm-3 illustration fashion style grid cs-style-3">
                            <figure class="portfolio-figure"> <img src="http://placehold.it/1000x1000" alt="work-04" />
                                <figcaption>
                                    <h4 class="title">Dreams of glory</h4>
                                    <span>Fashion, style</span> <a class="text-right" href="javascript:;"><i class="fa fa fa-angle-right"></i></a> </figcaption>
                            </figure>
                        </li>
                        <li class="portfolio-item col-md-3 col-sm-3 design illustration product grid cs-style-3">
                            <figure class="portfolio-figure"> <img src="images\our works\EX1.jpg" alt="work-05" />
                                <figcaption>
                                    <h4 class="title">Real human hair extensions</h4>
                                    <span>design, product</span> <a class="text-right" href="javascript:;"><i class="fa fa fa-angle-right"></i></a> </figcaption>
                            </figure>
                        </li>
                        <li class="portfolio-item col-md-3 col-sm-3 design grid cs-style-3">
                            <figure class="portfolio-figure"> <img src="http://placehold.it/1000x1000" alt="work-06" />
                                <figcaption>
                                    <h4 class="title">flat screen wall</h4>
                                    <span>design, product</span> <a class="text-right" href="javascript:;"><i class="fa fa fa-angle-right"></i></a> </figcaption>
                            </figure>
                        </li>
                        <li class="portfolio-item col-md-3 col-sm-3 design illustration grid cs-style-3">
                            <figure class="portfolio-figure"> <img src="http://placehold.it/1000x1000" alt="work-07" />
                                <figcaption>
                                    <h4 class="title">parament action</h4>
                                    <span>design, Illustraion</span> <a class="text-right" href="javascript:;"><i class="fa fa fa-angle-right"></i></a> </figcaption>
                            </figure>
                        </li>
                        <li class="portfolio-item col-md-3 col-sm-3 design illustration product grid cs-style-3">
                            <figure class="portfolio-figure"> <img src="http://placehold.it/1000x1000" alt="work-08" />
                                <figcaption>
                                    <h4 class="title">visual art exibition</h4>
                                    <span>design, Illustraion</span> <a class="text-right" href="javascript:;"><i class="fa fa fa-angle-right"></i></a> </figcaption>
                            </figure>
                        </li>
                    </ul>
                </div>
                <!-- work popup -->
                <div class="slideshow">
                    <ul class="popup-slide">
                        <li class="popup-slideshow content-scroll">
                            <figure class="ipad-scroll">
                                <figcaption>
                                    <div class="popup-slider">
                                        <div id="carousel1" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel1" data-slide-to="1"></li>
                                                <li data-target="#carousel1" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="item active"> <img src="http://placehold.it/1000x1000" alt="work-01"/> </div>
                                                <div class="item"> <img src="http://placehold.it/1000x1000" alt="work-02"/> </div>
                                                <div class="item"> <img src="http://placehold.it/1000x1000" alt="work-03"/> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-part">
                                        <h4 class="title text-left">Real human hair extensions</h4>
                                        <span class="text-left category">Fashion Industry&nbsp;&nbsp;â€¢&nbsp;&nbsp;United Kingdom</span>
                                        <div class="popup-line"></div>
                                        <span class="work-details">Magento Development + Mobile Website + WordPress Development</span>
                                        <div class="popup-line"></div>
                                        <p class="text-left">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <div class="popup-line"></div>
                                        <span class="work-details">Client Speak</span>
                                        <p class="client-speak">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.<span>Jacskon Smith&nbsp;&nbsp;â€¢&nbsp;&nbsp;Google Inc</span></p>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="popup-slideshow content-scroll">
                            <figure class="ipad-scroll">
                                <figcaption>
                                    <div class="popup-slider">
                                        <div id="carousel-example-generic-01" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel-example-generic-01" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel-example-generic-01" data-slide-to="1"></li>
                                                <li data-target="#carousel-example-generic-01" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="item active"> <img src="http://placehold.it/1000x1000" alt="work-01"/> </div>
                                                <div class="item"> <img src="http://placehold.it/1000x1000" alt="work-02"/> </div>
                                                <div class="item"> <img src="http://placehold.it/1000x1000" alt="work-03"/> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-part">
                                        <h4 class="title">Apple New Design</h4>
                                        <span class="category">product Industry&nbsp;&nbsp;â€¢&nbsp;&nbsp;United States of America</span>
                                        <div class="popup-line"></div>
                                        <span class="work-details">Magento Development + Mobile Website + eNewsletter</span>
                                        <div class="popup-line"></div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <div class="popup-line"></div>
                                        <span class="work-details">Client Speak</span>
                                        <p class="client-speak">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.<span>Stella Kromstain&nbsp;&nbsp;â€¢&nbsp;&nbsp;Google Inc</span></p>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="popup-slideshow content-scroll">
                            <figure class="ipad-scroll">
                                <figcaption>
                                    <div class="popup-slider">
                                        <div id="carousel-example-generic-02" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel-example-generic-02" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel-example-generic-02" data-slide-to="1"></li>
                                                <li data-target="#carousel-example-generic-02" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="item active"> <img src="http://placehold.it/1000x1000" alt="work-01"/> </div>
                                                <div class="item"> <img src="http://placehold.it/1000x1000" alt="work-02"/> </div>
                                                <div class="item"> <img src="http://placehold.it/1000x1000" alt="work-03"/> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-part">
                                        <h4 class="title">Dreams</h4>
                                        <span class="category">design Industry&nbsp;&nbsp;â€¢&nbsp;&nbsp;australia</span>
                                        <div class="popup-line"></div>
                                        <span class="work-details">Magento Development + WordPress Development + Mobile Website</span>
                                        <div class="popup-line"></div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <div class="popup-line"></div>
                                        <span class="work-details">Client Speak</span>
                                        <p class="client-speak">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.<span>Jerry Gordinter&nbsp;&nbsp;â€¢&nbsp;&nbsp;Google Inc</span></p>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="popup-slideshow content-scroll">
                            <figure class="ipad-scroll">
                                <figcaption>
                                    <div class="popup-slider">
                                        <div id="carousel2" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel2" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel2" data-slide-to="1"></li>
                                                <li data-target="#carousel2" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="item active"> <img src="http://placehold.it/1000x1000" alt="work-01"/> </div>
                                                <div class="item"> <img src="http://placehold.it/1000x1000" alt="work-02"/> </div>
                                                <div class="item"> <img src="http://placehold.it/1000x1000" alt="work-03"/> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-part">
                                        <h4 class="title">Dreams of glory</h4>
                                        <span class="text-left category">Illustraion Industry&nbsp;&nbsp;â€¢&nbsp;&nbsp;United States of America</span>
                                        <div class="popup-line"></div>
                                        <span class="work-details">WordPress Development + Blog + Branding + eNewsletter</span>
                                        <div class="popup-line"></div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <div class="popup-line"></div>
                                        <span class="work-details">Client Speak</span>
                                        <p class="client-speak">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.<span>Jone Doe&nbsp;&nbsp;â€¢&nbsp;&nbsp;Google Inc</span></p>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="popup-slideshow content-scroll">
                            <figure class="ipad-scroll">
                                <figcaption>
                                    <div class="popup-slider">
                                        <div id="carousel-example-generic-04" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel-example-generic-04" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel-example-generic-04" data-slide-to="1"></li>
                                                <li data-target="#carousel-example-generic-04" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="item active"> <img src="images\our works\ex1.1.jpg" alt="work-01"/> </div>
                                                <div class="item"> <img src="images\our works\ex1.2.jpg" alt="work-02"/> </div>
                                                <div class="item"> <img src="images\our works\ex1.3.jpg" alt="work-03"/> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-part">
                                        <h4 class="title">Real human hair extensions</h4>
                                        <span class="text-left category">Still thinking?&nbsp;&nbsp;â€¢&nbsp;&nbsp;No more worries</span>
                                        <div class="popup-line"></div>
                                        <span class="work-details">Real human hair extensions + color</span>
                                        <div class="popup-line"></div>
                                        <p>Real human hair extensions We will give u volume,healthy,long,thick hair instead of u have.ðŸ’« U can iron,do hair styles,colour,comb,wash or anything what u want to do.</p>
                                        <p>Real human hair extensions We will give u volume,healthy,long,thick hair instead of u have.ðŸ’« U can iron,do hair styles,colour,comb,wash or anything what u want to do.</p>
                                        <div class="popup-line"></div>
                                        <span class="work-details">Oshadi Himasha </span>
                                        <p class="client-speak">Oshadi Himasha. 26 Mar, 2015. Oshadi Himasha 09. 4 Photographs of Sri Lankan Model Oshadi Himasha. Photography by Kasun Di Smaranayake. Share this.<span>Jacskon Smith&nbsp;&nbsp;â€¢&nbsp;&nbsp;Google Inc</span></p>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="popup-slideshow content-scroll">
                            <figure class="ipad-scroll">
                                <figcaption>
                                    <div class="popup-slider">
                                        <div id="carousel-example-generic-05" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel-example-generic-05" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel-example-generic-05" data-slide-to="1"></li>
                                                <li data-target="#carousel-example-generic-05" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="item active"> <img src="http://placehold.it/1000x1000" alt="work-01"/> </div>
                                                <div class="item"> <img src="http://placehold.it/1000x1000" alt="work-02"/> </div>
                                                <div class="item"> <img src="http://placehold.it/1000x1000" alt="work-03"/> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-part">
                                        <h4 class="title">flat screen wall</h4>
                                        <span class="text-left category">Fashion Industry&nbsp;&nbsp;â€¢&nbsp;&nbsp;United Kingdom</span>
                                        <div class="popup-line"></div>
                                        <span class="work-details">Magento Development + WordPress Development + Mobile Website</span>
                                        <div class="popup-line"></div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <div class="popup-line"></div>
                                        <span class="work-details">Client Speak</span>
                                        <p class="client-speak">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.<span>Stella Kromstain&nbsp;&nbsp;â€¢&nbsp;&nbsp;Google Inc</span></p>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="popup-slideshow content-scroll">
                            <figure class="ipad-scroll">
                                <figcaption>
                                    <div class="popup-slider">
                                        <div id="carousel-example-generic-06" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel-example-generic-06" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel-example-generic-06" data-slide-to="1"></li>
                                                <li data-target="#carousel-example-generic-06" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="item active"> <img src="http://placehold.it/1000x1000" alt="work-01"/> </div>
                                                <div class="item"> <img src="http://placehold.it/1000x1000" alt="work-02"/> </div>
                                                <div class="item"> <img src="http://placehold.it/1000x1000" alt="work-03"/> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-part">
                                        <h4 class="title">parament action</h4>
                                        <span class="text-left category">product Industry&nbsp;&nbsp;â€¢&nbsp;&nbsp;United States of America</span>
                                        <div class="popup-line"></div>
                                        <span class="work-details">Custom Website Development + Facebook Pages Design + eNewsletter</span>
                                        <div class="popup-line"></div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <div class="popup-line"></div>
                                        <span class="work-details">Client Speak</span>
                                        <p class="client-speak">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.<span>Jerry Gordinter&nbsp;&nbsp;â€¢&nbsp;&nbsp;Google Inc</span></p>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="popup-slideshow content-scroll">
                            <figure class="ipad-scroll">
                                <figcaption>
                                    <div class="popup-slider">
                                        <div id="carousel-example-generic-07" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel-example-generic-07" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel-example-generic-07" data-slide-to="1"></li>
                                                <li data-target="#carousel-example-generic-07" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="item active"> <img src="http://placehold.it/1000x1000" alt="work-01"/> </div>
                                                <div class="item"> <img src="http://placehold.it/1000x1000" alt="work-02"/> </div>
                                                <div class="item"> <img src="http://placehold.it/1000x1000" alt="work-03"/> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-part">
                                        <h4 class="title">visual art exibition</h4>
                                        <span class="text-left category">Fashion Industry&nbsp;&nbsp;â€¢&nbsp;&nbsp;australia</span>
                                        <div class="popup-line"></div>
                                        <span class="work-details">Custom Website Development + Branding + Campaign </span>
                                        <div class="popup-line"></div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <div class="popup-line"></div>
                                        <span class="work-details">Client Speak</span>
                                        <p class="client-speak">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.<span>Jone Doe&nbsp;&nbsp;â€¢&nbsp;&nbsp;Google Inc</span></p>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                    <nav class="popup-navigation"> <span class="icon nav-prev"></span> <span class="icon nav-next"></span> <span class="icon nav-close"></span> </nav>
                </div>
            </section>
            <!-- work end --> 

            <!-- skills -->
            <section class="orange-bg work-count">
                <div class="container">
                    <div class="row">
                        <div class="work-count-box col-md-4 col-sm-4 os-animation" data-os-animation="bounceIn"> <span class="title-top">01.</span> <span class="title">logo design</span>
                            <div class="black-line-top"></div>
                            <div class="black-line-bottom"></div>
                            <p class="content-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            <a href="#expertise" class="small-button inner-link">Read More</a> </div>
                        <div class="work-count-box col-md-4 col-sm-4 os-animation" data-os-animation="bounceIn"> <span class="title-top">02.</span> <span class="title">print design</span>
                            <div class="black-line-top"></div>
                            <div class="black-line-bottom"></div>
                            <p class="content-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            <a href="#expertise" class="small-button inner-link">Read More</a> </div>
                        <div class="work-count-box col-md-4 col-sm-4 os-animation" data-os-animation="bounceIn"> <span class="title-top">03.</span> <span class="title">web design</span>
                            <div class="black-line-top"></div>
                            <div class="black-line-bottom"></div>
                            <p class="content-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            <a href="#expertise" class="small-button inner-link">Read More</a> </div>
                    </div>
                </div>
            </section>
            <!-- skills end --> 

            <!-- testimonial -->
            <section id="testimonial" class="testimonial">
                <div class="color-overlay">
                    <div class="container">
                        <div class="row text-center os-animation" data-os-animation="fadeInUp">
                            <h2 class="title">Testimonial</h2>
                        </div>
                        <div class="row text-center os-animation" data-os-animation="fadeInUp">
                            <div data-ride="carousel" class="carousel slide" id="myCarousel">
                                <ol class="carousel-indicators">
                                    <li data-slide-to="0" data-target="#myCarousel"></li>
                                    <li data-slide-to="1" data-target="#myCarousel"></li>
                                    <li data-slide-to="2" data-target="#myCarousel" class="active"></li>
                                    <li data-slide-to="3" data-target="#myCarousel"></li>
                                    <li data-slide-to="4" data-target="#myCarousel"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item">
                                        <div class="container">
                                            <div class="carousel-caption">
                                                <p>We build pretty complex tools and this allows us to take designs and turn them into functional prototypes quickly and easily.</p>
                                                <div class="white-line"></div>
                                                <span>jerry gordinter</span> </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="container">
                                            <div class="carousel-caption">
                                                <p>We build pretty complex tools and this allows us to take designs and turn them into functional prototypes quickly and easily.</p>
                                                <div class="white-line"></div>
                                                <span>Jone Doe</span> </div>
                                        </div>
                                    </div>
                                    <div class="item active">
                                        <div class="container">
                                            <div class="carousel-caption">
                                                <p>We build pretty complex tools and this allows us to take designs and turn them into functional prototypes quickly and easily.</p>
                                                <div class="white-line"></div>
                                                <span>Tom Anthony</span> </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="container">
                                            <div class="carousel-caption">
                                                <p>We build pretty complex tools and this allows us to take designs and turn them into functional prototypes quickly and easily.</p>
                                                <div class="white-line"></div>
                                                <span>Stella Kromstain</span> </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="container">
                                            <div class="carousel-caption">
                                                <p>We build pretty complex tools and this allows us to take designs and turn them into functional prototypes quickly and easily.</p>
                                                <div class="white-line"></div>
                                                <span>Jone Doe</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial end --> 

            <!-- expertise -->
            <section id="expertise" class="expertise">
                <div class="container">
                    <div class="row border-bottom os-animation text-center" data-os-animation="fadeInUp">
                        <div class="col-md-6 col-sm-6 title-text border-right">
                            <h2 class="title">expertise</h2>
                        </div>
                        <div class="col-md-6 col-sm-6 simple-text">
                            <p class="description text-left">We consult on digital strategy &amp; craft meaningful connections with your customers across web, social, mobile &amp; ecommerce.</p>
                        </div>
                    </div>
                    <div class="row feature-content os-animation" data-os-animation="fadeInUp">
                        <div class="col-md-6 col-sm-6">
                            <div class="feature">
                                <div class="icon-container"> <i class="fa fa-paper-plane-o"></i> </div>
                                <div class="fetaure-details">
                                    <h4 class="title">Discover. <span>Understand the situation.</span></h4>
                                    <p class="content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="feature">
                                <div class="icon-container"> <i class="fa fa-bullhorn"></i> </div>
                                <div class="fetaure-details">
                                    <h4 class="title">Strategise. <span>Chart the course.</span></h4>
                                    <p class="content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <!-- expertise end --> 
    <!-- team -->
    <section id="team" class="team gray-bg">
        <div class="container">
            <div class="row border-bottom os-animation text-center" data-os-animation="fadeInUp">
                <div class="col-md-6 col-sm-6 title-text border-right">
                    <h2 class="title">our team</h2>
                </div>
                <div class="col-md-6 col-sm-6 simple-text">
                    <p class="description text-left">We are a fun mix of designers and strategists with a great passion for all things creative. We love what we do, it's a way of life.</p>
                </div>
            </div>
            <div class="row os-animation" data-os-animation="fadeInUp">
                <p class="lead width">We grow brands by making decisions that are rooted in business strategy.</p>
            </div>
            <div class="row os-animation" data-os-animation="fadeInUp">
                <div class="col-md-3 team-details os-animation text-center" data-os-animation="bounceIn">
                    <figure class="team-profile"><!-- 800 X 966 --><img src="http://placehold.it/497x600" alt="team-01" />
                        <figcaption class="text-center our-team">
                            <p class="content-white text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <div class="orange-line"></div>
                            <div class="social"> <a href="http://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a> <a href="http://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a> <a href="http://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                        </figcaption>
                    </figure>
                    <div class="namerol"> <span>Sara smith</span>
                        <div class="orange-line text-center"></div>
                        <p class="content">Founder and ceo</p>
                    </div>
                </div>
                <div class="col-md-3 team-details os-animation text-center" data-os-animation="bounceIn">
                    <figure class="team-profile"><img src="http://placehold.it/497x600" alt="team-02" />
                        <figcaption class="text-center our-team">
                            <p class="content-white text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <div class="orange-line"></div>
                            <div class="social"> <a href="http://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a> <a href="http://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a> <a href="http://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                        </figcaption>
                    </figure>
                    <div class="namerol"> <span>sommer Christian</span>
                        <div class="orange-line text-center"></div>
                        <p class="content">creative studio head</p>
                    </div>
                </div>
                <div class="col-md-3 team-details os-animation text-center" data-os-animation="bounceIn">
                    <figure class="team-profile"><img src="http://placehold.it/497x600" alt="team-03" />
                        <figcaption class="text-center our-team">
                            <p class="content-white text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <div class="orange-line"></div>
                            <div class="social"> <a href="http://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a> <a href="http://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a> <a href="http://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                        </figcaption>
                    </figure>
                    <div class="namerol"> <span>Jane lupkin</span>
                        <div class="orange-line text-center"></div>
                        <p class="content">magento developer</p>
                    </div>
                </div>
                <div class="col-md-3 team-details os-animation text-center" data-os-animation="bounceIn">
                    <figure class="team-profile"><img src="http://placehold.it/497x600" alt="team-04" />
                        <figcaption class="text-center our-team">
                            <p class="content-white text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <div class="orange-line"></div>
                            <div class="social"> <a href="http://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a> <a href="http://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a> <a href="http://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                        </figcaption>
                    </figure>
                    <div class="namerol"> <span>Sebastian roll</span>
                        <div class="orange-line text-center"></div>
                        <p class="content">Logo / branding designer</p>
                    </div>
                </div>
            </div>
            <div class="text-center row os-animation" data-os-animation="fadeInUp">
                <p class="light">Creative thinkers, clever developer and marketing</p>
                <p class="lead big">superheroes apply here.</p>
                <p class="label">we're hiring</p>
            </div>
        </div>
    </section>
    <!-- team end --> 
    <!-- contact -->
    <section id="contact" class="contact gray-bg">
        <div class="container">
            <div class="row border-bottom os-animation text-center" data-os-animation="fadeInUp">
                <div class="col-md-6 col-sm-6 title-text border-right">
                    <h2 class="title">Contact</h2>
                </div>
                <div class="col-md-6 col-sm-6 simple-text">
                    <p class="description text-left">How we can help you. We like to talk and on the strength of that you are invited for a coffee at our head office.</p>
                </div>
            </div>

            <!--<input id="default_datetimepicker2" type="text" value="fsd"/>-->

            <div class="row contact-info os-animation" data-os-animation="fadeInUp">
                <div class="col-md-6 col-sm-6 left-part">
                    <div class="head"> <span class="contact-title">how to reach us</span>
                        <p class="content contact-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="head"> <span class="contact-title">our address</span>
                        <p class="content contact-text address">Salon Zero<br>
                            No.23/A1, Piliyandala Road,<br>
                            Maharagama,.</p>
                    </div>
                    <ul class="icon-list">
                        <li><i class="fa fa-phone"></i>+94 112 845 094 - +94 713 144 544</li>
                        <li class="divider"></li>
                        <li><i class="fa fa-envelope-o"></i><a href="mailto:no-reply@domain.com">salonzero.sl@gmail.com</a></li>
                        <li class="divider"></li>
                        <li><i class="fa fa-globe"></i><a href="javascript:;">/www.salonzero.lk/</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6 right-part">
                    <div class="form-group contactFrm">
                        <form action="javascript:void(0)" method="post">
                            <input class="form-control" name="name" placeholder="Your Name" type="text">
                            <input class="form-control" name="email" placeholder="Your Email" type="text">
                            <input class="form-control" name="phone" placeholder="Your Phone number" type="text">
                            <input class="form-control" autocomplete="off" name="time" placeholder="Enter Your Time" id="default_datetimepicker" type="text">
                            <textarea class="form-control" placeholder="Your Comment" name="comment"></textarea>
                            <button id="submit-button" class="small-button text-left confSubmit">Send for confirm</button>
                            <p class="timeEmpty" style="display: none;">Enter a time to submit</p>
                            <p class="timeTaken" style="display: none;">Time you entered has already taken</p>
                        </form>
                    </div>
                    <div id="success"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact end --> 

    <!-- map -->
    <section class="map">
        <div class="map-overlay">
            <button class="map-button" value="Show map">Locate Us on Map</button>
        </div>
        <div id="googlemap">
            <div id="map" data-address="Salon Zero, Maharagama" data-text="<p><strong>Salon Zero.</strong><br> Salon Zero, Maharagama.<br>Phone: 0713144544</p>"></div>
        </div>
    </section>
    <!-- map end -->  

    <!-- footer -->
    <footer id="footer" class="footer">
        <div class="color-overlay">
            <div class="container">
                <div class="row os-animation" data-os-animation="bounceIn">
                    <ul class="social footer-social text-center">
                        <li><a href="https://www.facebook.com/SalonZero.SL/?fref=ts" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="http://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="http://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="http://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="http://www.dribbble.com/" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="javascript:;"><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div>
                <div class="row os-animation" data-os-animation="bounceIn">
                    <div class="transparent-line"></div>
                </div>
                <div class="row os-animation" data-os-animation="bounceIn">
                    <p class="text-center content-white copy">&copy; a web 30000tmp site.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end --> 


    <!-- scroll to top --> 
    <a href="javascript:;" class="scrollToTop"><i class="fa fa-angle-up"></i></a> 
    <!-- scroll to top End... -->

</div>
<!-- main page end --> 
<!-- javascript  --> 
<!-- Placed at the End of the document so the pages load faster --> 
<!-- jQuery --> 
<script src="js/jquery.js"></script> 
<!-- page loading -->  
<script src="js/loader.min.js"></script>
<script src="js/preloader.js"></script>
<!-- smoth hover --> 
<script src="js/hover.min.js"></script> 
<!-- parallax background --> 
<script src="js/parallel.min.js"></script> 
<!-- jQuery UI --> 
<script src="js/jquery-ui.min.js"></script> 
<!-- modernizr --> 
<script src="js/modernizr.custom.js"></script> 
<!-- smooth page scrolling --> 
<script src="js/smooth-scroll.js"></script> 
<!-- custom javascript  --> 
<script src="js/custom.js"></script> 
<!-- counter  --> 
<script src="js/conter.js"></script> 
<!-- bootstrap  --> 
<script src="js/bootstrap-custom.js"></script> 
<!-- portfolio  --> 
<script src="js/portfolio.js"></script> 
<script src="js/jquery.nav.js"></script>  
<!-- portfolio  --> 
<script src="js/imagesloaded.pkgd.min.js"></script> 
<script src="js/cbpGridGallery.js"></script> 
<script src="js/classie.js"></script> 
<!-- custom scrollbar  --> 
<script src="js/custom-scrollbar.min.js"></script> 
<!-- google map API --> 
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>
<script src="js/map.js"></script> 
<script src="js/load-gridgallery.js"></script>
<script type="text/javascript" src="js/jquery.datetimepicker.full.js"></script>

<script type="text/javascript">
    var al = function(currentDateTime) {

        var date = currentDateTime.getFullYear() + '/'
                + ('0' + (currentDateTime.getMonth() + 1)).slice(-2) + '/'
                + ('0' + currentDateTime.getDate()).slice(-2);

        $.ajax({
            url: 'getdate.php',
            type: 'POST',
            data: {date: date},
            success: function(data) {
                var days = jQuery.parseJSON(data);
                $('#default_datetimepicker').datetimepicker({
                    allowTimes: days
                });
            }
        });
    };

<?php
//Databse connection
$username = "root";
$password = "";
$hostname = "localhost";
$dbname = "salunz";
$conn = new mysqli($hostname, $username, $password, $dbname);

$times = array(
    '08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00'
);

date_default_timezone_set("Asia/Bangkok");
$date = date("Y/m/d");

//Check the date in database
$result = $conn->query("SELECT `booking_time` FROM `booking` WHERE `booking_date` = '" . $date . "'");

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        foreach ($times as $key => $value) {
            if ($row{'booking_time'} == $value) {
                unset($times[$key]);
                $times = array_values($times);
            }
        }
    }
}
?>

    $(function() {
//        var datesPhp = <?php ?>
//        
//        var days = jQuery.parseJSON(datesPhp);


        $('#default_datetimepicker').datetimepicker({
            allowTimes: <?php echo json_encode($times) ?>,
//            disabledDates: ['06.02.2016'],
//            formatTime: 'H:i',
            formatTime: 'g:i A',
            formatDate: 'd.m.Y',
            defaultTime: '08:00',
            onChangeDateTime: al,
            onChangeMonth:al,
            onChangeYear:al,
            timepickerScrollbar: true
        });
    });
</script>
</body>
