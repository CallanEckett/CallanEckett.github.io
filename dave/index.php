<?php include('contactform.php'); ?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        
        <meta charset="utf-8">
        <!-- Needed for correct mobile viewing -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Page Title -->
        <title>All Glass Solutions</title>
        
        <!-- Core Stylesheets -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css" type="text/css">
        <!-- Animate on Scroll  -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        
        <!-- jQuery -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Owl Carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- Scrolling Nav JavaScript -->
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/scrolling-nav.js"></script>
        <!-- Animate on Scroll -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <!-- Filterizr -->
        <script src="js/jquery.filterizr.min.js"></script>
        <!-- Website JS -->
        <script src="js/website.js"></script>
        
    </head>

    <body id="page-top" data-spy="scroll" data-target=".fixed-top" data-offset="50">
        
        <!-- Navigation -->
        <nav class="navbar nav-pills fixed-top navbar-expand-xl navbar-dark">
            <div class="container">
                <span class="navbar-brand">
                    All Glass Solutions
                </span>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse justify-content-between text-center" id="navbarSupportedContent">
                    
                    <!-- Navigation Bar -->
                    <ul class="navbar-nav">
                        <li class="navbar-item">
                            <a class="nav-link active page-scroll" href="#page-top">Home</a>
                        </li>
                        <li class="navbar-item">
                            <a class="nav-link page-scroll" href="#services">Services</a>
                        </li>
                        <li class="navbar-item">
                            <a class="nav-link page-scroll" href="#about">About</a>
                        </li>
                        <li class="navbar-item">
                            <a class="nav-link page-scroll" href="#testimonials">Testimonials</a>
                        </li>
                        <li class="navbar-item">
                            <a class="nav-link page-scroll" href="#portfolio">Portfolio</a>
                        </li>
                        <li class="navbar-item">
                            <a class="nav-link page-scroll" href="#contact">Contact</a>
                        </li>
                    </ul>
                        
                    <!-- Navigation Bar Information -->
                    <ul class="list-inline navbar-information">
                        
                        <!-- Location -->
                        <li class="list-inline-item navbar-information-item text-left">
                            <div class="row">
                                <div class="col navbar-information-icon d-flex align-items-center">
                                    <span><i class="fas fa-map-marker-alt"></i></span>
                                </div>
                                <div class="col text-nowrap">
                                    <span>
                                        <strong>Woking</strong>
                                        <br>
                                        Surrey
                                    </span>
                                </div>
                            </div>
                        </li>
                        
                        <!-- Phone Number -->
                        <li class="list-inline-item navbar-information-item text-left">
                            <div class="row">
                                <div class="col navbar-information-icon d-flex align-items-center">
                                    <span><i class="fas fa-mobile-alt"></i></span>
                                </div>
                                <div class="col text-nowrap">
                                    <span>
                                        <strong>Call Us</strong>
                                        <br>
                                        07834 461518
                                    </span>
                                </div>
                            </div>
                        </li>
                        
                        <!-- Working Hours -->
                        <li class="list-inline-item navbar-information-item text-left">
                            <div class="row">
                                <div class="col navbar-information-icon d-flex align-items-center">
                                    <span><i class="far fa-clock"></i></span>
                                </div>
                                <div class="col text-nowrap">
                                    <span>
                                        <strong>Working Hours</strong>
                                        <br>
                                        Mon - Fri 08:00 - 17:00
                                    </span>
                                </div>
                            </div>
                        </li>
                    </ul>
                
                </div>
            </div>
        </nav>
        
        <!-- Intro Section -->
        <section id="intro" class="section intro-section d-flex text-center">
            
            <!-- Intro Background Carousel -->
            
            <div id="intro-image" class="container-fluid" style="background-image: url('imgs/Large.jpg')">
                <!--
                <div id="intro-carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="10000"> 
                      <div class="carousel-inner">
                            <div id="intro-image" class="carousel-item active" style="background-image: url('imgs/Large.jpg')"></div>
                            <div id="intro-image" class="carousel-item" style="background-image: url('imgs/Large2.jpg')"></div>
                            <div id="intro-image" class="carousel-item" style="background-image: url('imgs/Large3.jpg')"></div>
                      </div>
                </div>
                -->
            </div>
                
            <!-- Carousel overlay -->
            <div class=" intro-overlay">
                <h1>All Glass Solutions</h1>
                <div class="row justify-content-center">
                    <div class="col-10">
                        <p class="intro-text">
                            Hampshire based glazing company specialising in all aspects of glass work including glass repair/replacement, mirrors, painted splashbacks & more.
                        </p>
                    </div>
                </div>
                <!-- Button for Services -->
                <a class="btn btn-border btn-outline-light page-scroll" href="#services" role="button" target="_blank">View Our Services</a>
                <!-- Button for Contact -->
                <a class="btn btn-border btn-outline-light page-scroll" href="#contact" role="button" target="_blank">Contact Us</a>
            </div>
                
        </section>
        
        <!-- Quote Section -->
        <section id="quote" class="section quote-section text-center">
            <div class="container-fluid d-flex justify-content-around align-items-center">
                <div>
                    <h2 style="padding-bottom: 0;"><i class="fas fa-tape"></i> Contact us for a free quote!</h2>
                </div>
                <div>
                    <a class="btn btn-border btn-outline-dark btn-lg page-scroll" href="#contact" role="button" target="_blank">Get Started</a>
                </div>
            </div>
        </section>
        
        <!-- Services Section -->
        <section id="services" class="section services-section text-center">
            
            <div class="d-flex justify-content-center">

                <!-- Previous Slide Button 
                
                -->

                <div class="container-fluid services-container">
                    
                    <!--
                    <p class="lead" style="padding-bottom: 50px; font-size: 1.1rem; margin: 0 100px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis nulla tortor. Nam volutpat nisi elit, eu vehicula quam tincidunt in. Etiam vulputate diam eget dictum mollis. Quisque tristique ut arcu vel ultrices. Nam at congue lacus.</p>
                    -->

                    <div class="row">
                        
                        <div class="hidden-xs hidden-sm col-md-1 col-lg-1 col-xl-1 d-flex justify-content-end align-items-center">
                            <a class="btn prev" role="button" id="services-navigation"><i class="fas fa-chevron-left fa-2x"></i></a>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
                        <!-- Services Carousel -->
                        <div class="owl-carousel owl-theme" id="services-carousel">

                            <!-- Single Glazing -->
                            <div class="item">
                                <div class="card services-card">
                                    <img class="card-img-top rounded-0" src="imgs/Single%20Glazing.jpg">
                                    <div class="card-body text-left">
                                        <h3 class="card-title">Single Glazing</h3>
                                        <p class="card-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis nulla tortor. Nam volutpat nisi elit, eu vehicula quam tincidunt in. Etiam vulputate diam eget dictum mollis. Quisque tristique ut arcu vel ultrices. Nam at congue lacus.
                                        </p>
                                        <a class="btn btn-outline-primary btn-sm" role="button" data-toggle="modal" data-target="#exampleModal">Learn More</a>
                                        <a class="btn btn-outline-dark btn-sm page-scroll" href="#contact" role="button" target="_blank">Get in Contact</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Double Glazing -->
                            <div class="item">
                                <div class="card services-card">
                                    <img class="card-img-top rounded-0" src="https://via.placeholder.com/400x400">
                                    <div class="card-body text-left">
                                        <h3 class="card-title">Double Glazed Units</h3>
                                        <p class="card-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis nulla tortor. Nam volutpat nisi elit, eu vehicula quam tincidunt in. Etiam vulputate diam eget dictum mollis. Quisque tristique ut arcu vel ultrices. Nam at congue lacus. Curabitur convallis dapibus efficitur. Fusce eu euismod quam. Mauris eu elementum metus.
                                        </p>
                                        <a class="btn btn-outline-primary btn-sm page-scroll" href="#contact" role="button" target="_blank">Learn More</a>
                                        <a class="btn btn-outline-dark btn-sm page-scroll" href="#contact" role="button" target="_blank">Get in Contact</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Mirrors -->
                            <div class="item">
                                <div class="card services-card">
                                    <img class="card-img-top rounded-0" src="imgs/Mirror2.jpg">
                                    <div class="card-body text-left">
                                        <h3 class="card-title">Mirrors</h3>
                                        <p class="card-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis nulla tortor. Nam volutpat nisi elit, eu vehicula quam tincidunt in. Etiam vulputate diam eget dictum mollis. Quisque tristique ut arcu vel ultrices. Nam at congue lacus. Curabitur convallis dapibus efficitur. Fusce eu euismod quam. Mauris eu elementum metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis nulla tortor. Nam volutpat nisi elit, eu vehicula quam tincidunt in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis nulla tortor. Nam volutpat nisi elit, eu vehicula quam tincidunt in. Etiam vulputate diam eget dictum mollis.
                                        </p>
                                        <a class="btn btn-outline-primary btn-sm page-scroll" href="#contact" role="button" target="_blank">Learn More</a>
                                        <a class="btn btn-outline-dark btn-sm page-scroll" href="#contact" role="button" target="_blank">Get in Contact</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Painted Splashbacks -->
                            <div class="item">
                                <div class="card services-card">
                                    <img class="card-img-top rounded-0" src="imgs/Splashback.jpg">
                                    <div class="card-body text-left">
                                        <h3 class="card-title">Painted Splashbacks</h3>
                                        <p class="card-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis nulla tortor. Nam volutpat nisi elit, eu vehicula quam tincidunt in. Etiam vulputate diam eget dictum mollis. Quisque tristique ut arcu vel ultrices.
                                        </p>
                                        <a class="btn btn-outline-primary btn-sm page-scroll" href="#contact" role="button" target="_blank">Learn More</a>
                                        <a class="btn btn-outline-dark btn-sm page-scroll" href="#contact" role="button" target="_blank">Get in Contact</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Saftey Glass  -->
                            <div class="item">
                                <div class="card services-card">
                                    <img class="card-img-top rounded-0" src="https://via.placeholder.com/400x400">
                                    <div class="card-body text-left">
                                        <h3 class="card-title">Safety Glass</h3>
                                        <p class="card-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis nulla tortor. Nam volutpat nisi elit, eu vehicula quam tincidunt in. Etiam vulputate diam eget dictum mollis. Quisque tristique ut arcu vel ultrices. Nam at congue lacus. Curabitur convallis dapibus efficitur.
                                        </p>
                                        <a class="btn btn-outline-primary btn-sm page-scroll" href="#contact" role="button" target="_blank">Learn More</a>
                                        <a class="btn btn-outline-dark btn-sm page-scroll" href="#contact" role="button" target="_blank">Get in Contact</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Shower Screens  -->
                            <div class="item">
                                <div class="card services-card">
                                    <img class="card-img-top rounded-0" src="imgs/Shower.jpg">
                                    <div class="card-body text-left">
                                        <h3 class="card-title">Shower Screens</h3>
                                        <p class="card-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis nulla tortor. Nam volutpat nisi elit, eu vehicula quam tincidunt in. Etiam vulputate diam eget dictum mollis. Quisque tristique ut arcu vel ultrices. Nam at congue lacus. Curabitur convallis dapibus efficitur. Fusce eu euismod quam. Mauris eu elementum metus.
                                        </p>
                                        <a class="btn btn-outline-primary btn-sm page-scroll" href="#contact" role="button" target="_blank">Learn More</a>
                                        <a class="btn btn-outline-dark btn-sm page-scroll" href="#contact" role="button" target="_blank">Get in Contact</a>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Balustrades -->
                            <div class="item">
                                <div class="card services-card">
                                    <img class="card-img-top rounded-0" src="imgs/Balustrades.jpg">
                                    <div class="card-body text-left">
                                        <h3 class="card-title">Balustrades</h3>
                                        <p class="card-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis nulla tortor. Nam volutpat nisi elit, eu vehicula quam tincidunt in. Etiam vulputate diam eget dictum mollis. Quisque tristique ut arcu vel ultrices. Nam at congue lacus. Curabitur convallis dapibus efficitur. Fusce eu euismod quam. Mauris eu elementum metus.
                                        </p>
                                        <a class="btn btn-outline-primary btn-sm page-scroll" href="#contact" role="button" target="_blank">Learn More</a>
                                        <a class="btn btn-outline-dark btn-sm page-scroll" href="#contact" role="button" target="_blank">Get in Contact</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        </div>
                        
                        <div class="hidden-xs hidden-sm col-md-1 col-lg-1 col-xl-1 d-flex justify-content-start align-items-center">  
                            <a class="btn next vertical-center" role="button" id="services-navigation"><i class="fas fa-chevron-right fa-2x"></i></a>
                        </div>
                        
                    </div>
                </div>

                <!-- Next Slide Button 
                
                -->
                
            </div>
        </section>
        
        <!-- About Section -->
        <section id="about" class="section about-section text-center">
                
            <div class="container">
                
                <div class="row justify-content-center">
                    <!-- Image of Self -->
                    <div class="col col-12 col-sm-12 col-md-7 col-lg-4 col-xl-4 d-flex align-items-center">
                        <img class="card-img-top rounded-circle about-photo" src="imgs/About.jpg" data-aos="flip-left" data-aos-duration="1000">
                    </div>

                    <div class="col col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                        <h2>About Us</h2>
                        <!-- Paragraph About Company -->
                        <p class="text-center text-sm-center text-md-center text-lg-right text-xl-right">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis nulla tortor. Nam volutpat nisi elit, eu vehicula quam tincidunt in. Etiam vulputate diam eget dictum mollis. Quisque tristique ut arcu vel ultrices. Nam at congue lacus. Curabitur convallis dapibus efficitur. Fusce eu euismod quam. Mauris eu elementum metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis nulla tortor. Nam volutpat nisi elit, eu vehicula quam tincidunt in. Etiam vulputate diam eget dictum mollis. Quisque tristique ut arcu vel ultrices. Nam at congue lacus. Curabitur convallis dapibus efficitur. Fusce eu euismod quam. Mauris eu elementum metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis nulla tortor. Nam volutpat nisi elit, eu vehicula quam tincidunt in. Etiam vulputate diam eget dictum mollis. Quisque tristique ut arcu vel ultrices. Nam at congue lacus. Curabitur convallis dapibus efficitur. Fusce eu euismod quam. Mauris eu elementum metus.
                        </p>
                    </div>
                </div>

            </div>
        
        </section>
        
        <!-- Testimonial Section -->
        <section id="testimonials" class="section testimonial-section text-center">
            
            <div class="container">
                <div class="row">
                        <!-- Testimonials -->
                        <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <h2>Testimonials</h2>
                            <ul class="list-group">
                                <!-- Testimonial One -->
                                <li class="list-group-item testimonial-li mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor="#testimonials">
                                    <blockquote class="blockquote text-left">
                                        <!-- Star Rating -->
                                        <div class="text-center star-rating pb-2">
                                            <i class="fas fa-star pr-2"></i>
                                            <i class="fas fa-star pr-2"></i>
                                            <i class="fas fa-star pr-2"></i>
                                            <i class="fas fa-star pr-2"></i>
                                            <i class="fas fa-star pr-2"></i>
                                        </div>
                                        <!-- Quote From Customer -->
                                        <p>
                                            <small><i class="fas fa-quote-left"></i></small>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis nulla tortor. Nam volutpat nisi elit, eu vehicula quam tincidunt in. Etiam vulputate diam eget dictum mollis. Quisque tristique ut arcu vel ultrices. Nam at congue lacus. Curabitur convallis dapibus efficitur. Fusce eu euismod quam.
                                            <small><i class="fas fa-quote-right"></i></small>
                                        </p>
                                        <div class="row justify-content-between">
                                            <!-- Customer Name -->
                                            <div class="col-4">
                                                <footer class="blockquote-footer"><cite><strong>Callan Eckett</strong>, Customer</cite></footer>
                                            </div>
                                            <!-- Date of Testimonial -->
                                            <div class="col-4 text-right">
                                                <small>
                                                    <i class="far fa-calendar-alt"></i>
                                                    1st Jan 2018
                                                </small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </li>
                                <!-- Testimonial Two -->
                                <li class="list-group-item testimonial-li mb-3" data-aos="fade-up" data-aos-duration="1500" data-aos-anchor="#testimonials">
                                    <blockquote class="blockquote text-left">
                                        <!-- Star Rating -->
                                        <div class="text-center star-rating pb-2">
                                            <i class="fas fa-star pr-2"></i>
                                            <i class="fas fa-star pr-2"></i>
                                            <i class="fas fa-star pr-2"></i>
                                            <i class="fas fa-star pr-2"></i>
                                            <i class="fas fa-star pr-2"></i>
                                        </div>
                                        <!-- Quote From Customer -->
                                        <p>
                                            <small><i class="fas fa-quote-left"></i></small>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis nulla tortor. Nam volutpat nisi elit, eu vehicula quam tincidunt in. Etiam vulputate diam eget dictum mollis. Quisque tristique ut arcu vel ultrices. Nam at congue lacus. Curabitur convallis dapibus efficitur. Fusce eu euismod quam.
                                            <small><i class="fas fa-quote-right"></i></small>
                                        </p>
                                        <div class="row justify-content-between">
                                            <!-- Customer Name -->
                                            <div class="col-4">
                                                <footer class="blockquote-footer"><cite><strong>Callan Eckett</strong>, Customer</cite></footer>
                                            </div>
                                            <!-- Date of Testimonial -->
                                            <div class="col-4 text-right">
                                                <small>
                                                    <i class="far fa-calendar-alt"></i>
                                                    1st Jan 2018
                                                </small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </li>
                                <!-- Testimonial Three -->
                                <li class="list-group-item testimonial-li mb-3" data-aos="fade-up" data-aos-duration="2000" data-aos-anchor="#testimonials">
                                    <blockquote class="blockquote text-left">
                                        <!-- Star Rating -->
                                        <div class="text-center star-rating pb-2">
                                            <i class="fas fa-star pr-2"></i>
                                            <i class="fas fa-star pr-2"></i>
                                            <i class="fas fa-star pr-2"></i>
                                            <i class="fas fa-star pr-2"></i>
                                            <i class="fas fa-star pr-2"></i>
                                        </div>
                                        <!-- Quote From Customer -->
                                        <p>
                                            <small><i class="fas fa-quote-left"></i></small>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis nulla tortor. Nam volutpat nisi elit, eu vehicula quam tincidunt in. Etiam vulputate diam eget dictum mollis. Quisque tristique ut arcu vel ultrices. Nam at congue lacus. Curabitur convallis dapibus efficitur. Fusce eu euismod quam.
                                            <small><i class="fas fa-quote-right"></i></small>
                                        </p>
                                        <div class="row justify-content-between">
                                            <!-- Customer Name -->
                                            <div class="col-4">
                                                <footer class="blockquote-footer"><cite><strong>Callan Eckett</strong>, Customer</cite></footer>
                                            </div>
                                            <!-- Date of Testimonial -->
                                            <div class="col-4 text-right">
                                                <small>
                                                    <i class="far fa-calendar-alt"></i>
                                                    1st Jan 2018
                                                </small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </li>
                                <!-- Testimonial Four -->
                                <li class="list-group-item testimonial-li mb-3" data-aos="fade-up" data-aos-duration="2500" data-aos-anchor="#testimonials">
                                    <blockquote class="blockquote text-left">
                                        <!-- Star Rating -->
                                        <div class="text-center star-rating pb-2">
                                            <i class="fas fa-star pr-2"></i>
                                            <i class="fas fa-star pr-2"></i>
                                            <i class="fas fa-star pr-2"></i>
                                            <i class="fas fa-star pr-2"></i>
                                            <i class="fas fa-star pr-2"></i>
                                        </div>
                                        <!-- Quote From Customer -->
                                        <p>
                                            <small><i class="fas fa-quote-left"></i></small>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis nulla tortor. Nam volutpat nisi elit, eu vehicula quam tincidunt in. Etiam vulputate diam eget dictum mollis. Quisque tristique ut arcu vel ultrices. Nam at congue lacus. Curabitur convallis dapibus efficitur. Fusce eu euismod quam.
                                            <small><i class="fas fa-quote-right"></i></small>
                                        </p>
                                        <div class="row justify-content-between">
                                            <!-- Customer Name -->
                                            <div class="col-4">
                                                <footer class="blockquote-footer"><cite><strong>Callan Eckett</strong>, Customer</cite></footer>
                                            </div>
                                            <!-- Date of Testimonial -->
                                            <div class="col-4 text-right">
                                                <small>
                                                    <i class="far fa-calendar-alt"></i>
                                                    1st Jan 2018
                                                </small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </li>
                            </ul>
                        </div>
                    </div>
            </div>
            
        </section>
        
        <!-- Portfolio Section -->
        <section id="portfolio" class="section portfolio-section text-center">
            
            <div style="padding-bottom: 25px;">
            
                <div class="container container-large">
                    <h2>Portfolio</h2>
                    
                    <div class="card text-center">
                        <div class="card-header">
                            <ul class="nav nav-pills card-header-pills d-flex justify-content-around">
                                <li class="filterListItem nav-item btn btn-outline-dark btn-sm active" data-filter="all"> All </li>
                                <li class="filterListItem nav-item btn btn-outline-dark btn-sm" data-filter="singleGlazed"> Single Glazed </li>
                                <li class="filterListItem nav-item btn btn-outline-dark btn-sm" data-filter="glassUnits"> Glass Units </li>
                                <li class="filterListItem nav-item btn btn-outline-dark btn-sm" data-filter="mirrors"> Mirrors </li>
                                <li class="filterListItem nav-item btn btn-outline-dark btn-sm" data-filter="splashbacks"> Splashbacks </li>
                                <li class="filterListItem nav-item btn btn-outline-dark btn-sm" data-filter="showerScreens"> Shower Screens </li>
                                <li class="filterListItem nav-item btn btn-outline-dark btn-sm" data-filter="balustrades"> Balustrades </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            
                            <div class="filtr-container row">

                                <div class="filtr-item col col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pb-3" data-category="balustrades" data-sort="value">

                                    <div class="card">
                                        <img class="card-img-top img-fluid rounded-0" src="imgs/Balustrades.jpg">
                                        <div class="portfolio-border">
                                            <div class="card-body text-left">
                                                <h6>Private Customer, Laverstoke</h6>
                                                <p class="card-text portfolio-text mb-1">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis nulla tortor.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="filtr-item col col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pb-3" data-category="splashbacks" data-sort="value">

                                    <div class="card">
                                        <img class="card-img-top img-fluid rounded-0" src="imgs/Splashback.jpg">
                                        <div class="portfolio-border">
                                            <div class="card-body text-left">
                                                <h6>Private Customer, Laverstoke</h6>
                                                <p class="card-text portfolio-text mb-1">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis nulla tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis nulla tortor.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="filtr-item col col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pb-3" data-category="mirrors" data-sort="value">

                                    <div class="card">
                                        <img class="card-img-top img-fluid rounded-0" src="imgs/Mirror.jpg">
                                        <div class="portfolio-border">
                                            <div class="card-body text-left">
                                                <h6>Private Customer, Laverstoke</h6>
                                                <p class="card-text portfolio-text mb-1">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis nulla tortor.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="filtr-item col col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pb-3" data-category="showerScreens" data-sort="value">

                                    <div class="card">
                                        <img class="card-img-top img-fluid rounded-0" src="imgs/Shower.jpg">
                                        <div class="portfolio-border">
                                            <div class="card-body text-left">
                                                <h6>Private Customer, Laverstoke</h6>
                                                <p class="card-text portfolio-text mb-1">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis nulla tortor.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="filtr-item col col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pb-3" data-category="singleGlazed" data-sort="value">

                                    <div class="card">
                                        <img class="card-img-top img-fluid rounded-0" src="imgs/Single%20Glazing.jpg">
                                        <div class="portfolio-border">
                                            <div class="card-body text-left">
                                                <h6>Private Customer, Laverstoke</h6>
                                                <p class="card-text portfolio-text mb-1">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis nulla tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis nulla tortor.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="filtr-item col col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pb-3" data-category="mirrors" data-sort="value">

                                    <div class="card">
                                        <img class="card-img-top img-fluid rounded-0" src="imgs/Mirror2.jpg">
                                        <div class="portfolio-border">
                                            <div class="card-body text-left">
                                                <h6>Private Customer, Laverstoke</h6>
                                                <p class="card-text portfolio-text mb-1">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis nulla tortor.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="filtr-item col col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pb-3" data-category="balustrades" data-sort="value">

                                    <div class="card">
                                        <img class="card-img-top img-fluid rounded-0" src="imgs/Balustrades.jpg">
                                        <div class="portfolio-border">
                                            <div class="card-body text-left">
                                                <h6>Private Customer, Laverstoke</h6>
                                                <p class="card-text portfolio-text mb-1">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis nulla tortor.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="filtr-item col col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pb-3" data-category="balustrades" data-sort="value">

                                   <div class="card">
                                        <img class="card-img-top img-fluid rounded-0" src="imgs/Balustrades.jpg">
                                        <div class="portfolio-border">
                                            <div class="card-body text-left">
                                                <h6>Private Customer, Laverstoke</h6>
                                                <p class="card-text portfolio-text mb-1">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis nulla tortor.
                                                </p>
                                            </div>
                                        </div>
                                    </div> 

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
            
            <div id="contact-form" style="padding-bottom: 50px;"></div>
            
        </section>
        
        <!-- Contact Section -->
        <section id="contact" class="section contact-section text-center">

            <div class="container">
                <div class="row">
                    <div class="col col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                        <h2>Get a Quotation</h2>
                        
                        <!-- Contact Form -->
                        <form method="post" action="#contact-form">
                            <!-- Name Input -->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-user contact-icon"></i>
                                            <span class="badge">Name</span>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Required" aria-label="Required" name="name" id="name" value="<?= $name ?>">
                                </div>
                                <span class="error badge badge-danger"><?= $nameErr ?></span>
                            </div>
                            <!-- Email Address Input -->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-at"></i>
                                            <span class="badge">Email</span>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Required" aria-label="Required" name="email" id="email" value="<?= $email ?>">
                                </div>
                                <span class="error badge badge-danger"><?= $emailErr ?></span>
                            </div>
                            <!-- Phone Number Input -->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-mobile-alt contact-icon"></i>
                                            <span class="badge">Phone</span>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Not Required" aria-label="Not Required" name="phone" id="phone" value="<?= $phone ?>">
                                </div>
                                <span class="error badge badge-danger"><?= $phoneErr ?></span>
                            </div>
                            <!-- Postcode Input -->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-search-location contact-icon"></i>
                                            <span class="badge">Postcode</span>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Not Required" aria-label="Not Required" name="postcode" id="postcode" value="<?= $postcode ?>">
                                </div>
                                <span class="error badge badge-danger"><?= $postcodeErr ?></span>
                            </div>
                            
                            <!-- Message Input -->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-comments contact-icon"></i>
                                            <span class="badge">Message</span>
                                        </span>
                                    </div>
                                    <textarea type="text" class="form-control" placeholder="Required" aria-label="Required" rows="5" name="message" value="<?= $message ?>"></textarea>
                                </div>
                                <span class="error badge badge-danger"><?= $messageErr ?></span>
                            </div>
                            
                            <input name="submit" type="submit" value="Submit" class="btn btn-outline-primary btn-block">
                            <span class="error badge badge-success"><?= $success ?></span>
                        </form>
                    </div>
                    
                    <!-- Contact Details -->
                    <div class="col col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center contact-info">
                        <h2>Contact Information</h2>
                        
                        <div class="d-flex h-100 align-items-stretch">
                            <ul class="list-group list-group-flush d-flex-inline w-100">
                                <!-- Mobile Address -->
                                <li class="list-group-item text-center d-flex-inline h-100" style="border: 0;">
                                    <i class="fas fa-mobile-alt"></i>
                                    <strong>Mobile:</strong>
                                    <p class="contact-text">07834 461518</p>
                                </li>
                                <!-- Landline Address -->
                                <li class="list-group-item text-center d-flex-inline h-100" style="border: 0;">
                                    <i class="fas fa-phone"></i>
                                    <strong>Landline:</strong>
                                    <p class="contact-text">01256 461518</p>
                                </li>
                                <!-- Email Address -->
                                <li class="list-group-item text-center d-flex-inline h-100" style="border: 0;">
                                    <i class="fas fa-envelope"></i>
                                    <strong>Email:</strong>
                                    <p class="contact-text">allglass.solutions@hotmail.co.uk</p>
                                </li>
                                <!-- Location -->
                                <li class="list-group-item text-center d-flex-inline h-100" style="border: 0;">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <strong>Location:</strong>
                                    <p class="contact-text">Woking, Hampshire</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Single Glazing</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4" style="padding-left: 0;">
                                <img class="img-fluid rounded" src="imgs/Single%20Glazing.jpg">
                            </div>
                            <div class="col-8">
                                <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis nulla tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis nulla tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis nulla tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis nulla tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis nulla tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis nulla tortor. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
    
    <!-- Footer -->
    <footer class="text-center page-footer">
        
        <div class="container footer-container">
            
            <div class="row">

                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 text-center text-sm-center text-md-left text-lg-left text-xl-left">
                    <h4>Useful Links</h4>
                    <ul class="list-group list-group-flush footer-text">
                        <li class="list-group-item py-2">
                            <a class="page-scroll" href="#page-top">Home</a>
                        </li>
                        <li class="list-group-item py-2">
                            <a class="page-scroll" href="#services">Services</a>
                        </li>
                        <li class="list-group-item py-2">
                            <a class="page-scroll" href="#about">About</a>
                        </li>
                        <li class="list-group-item py-2">
                            <a class="page-scroll" href="#testimonials">Testimonials</a>
                        </li>
                        <li class="list-group-item py-2">
                            <a class="page-scroll" href="#portfolio">Portfolio</a>
                        </li>
                        <li class="list-group-item py-2">
                            <a class="page-scroll" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
                
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 text-center text-sm-center text-md-left text-lg-left text-xl-left">
                    <h4>Working Hours</h4>
                    <ul class="list-group list-group-flush footer-text">
                        <li class="list-group-item py-2">
                            <div>
                                <span><strong>Monday:</strong> 08:00 - 17:00</span>
                            </div>
                            <div>
                                <span><strong>Tuesday:</strong> 08:00 - 17:00</span>
                            </div>
                            <div>
                                <span><strong>Wednesday:</strong> 08:00 - 17:00</span>
                            </div>
                            <div>
                                <span><strong>Thursday:</strong> 08:00 - 17:00</span>
                            </div>
                            <div>
                                <span><strong>Friday:</strong> 08:00 - 17:00</span>
                            </div>
                        </li>
                        <li class="list-group-item py-2">
                            <div>
                                <span><strong>Saturday:</strong> 08:00 - 12:00</span>
                            </div>
                            <div>
                                <span><strong>Sunday:</strong> Closed</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 text-center text-sm-center text-md-left text-lg-left text-xl-left">
                    <h4>Contact</h4>
                    <ul class="list-group list-group-flush footer-text">
                        <li class="list-group-item py-2">
                            <!-- Mobile Number -->
                            <div>
                                <strong>Mobile:</strong> 07834 461518
                            </div>
                            <!-- Landline Number -->
                            <div>
                                <strong>Landline:</strong> 01256 770354
                            </div>
                        </li>
                        <li class="list-group-item py-2">
                            <strong>Email:</strong> allglass.solutions@hotmail.co.uk
                        </li>
                    </ul>
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 text-center text-sm-center text-md-left text-lg-left text-xl-left">
                    <h4>Links</h4>
                    <a href="" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fab fa-facebook-square fa-2x"></i></a>
                </div>
                
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 text-center text-sm-center text-md-left text-lg-left text-xl-left">
                    <h4>Areas Covered</h4>
                    <p class="footer-text">We cover the majority of postcodes in a 30 mile radius of Woking, Surrey <span class="badge  badge-info">GU21 8AL</span>
                    <p class="footer-text">Want to know if we'll travel to you, just get in contact!</p>
                </div>
                    
            </div>
        </div>
        
        <!-- Copyright -->
        <small>
            Copyright &#169 2018 

            <a href="http://callaneckett.github.io/">Callan Eckett</a>
        </small>
        
    </footer>
    
</html>