<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
$cakeDescription = 'MediaAfro Holdings';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>
            <title>
            <?php echo $cakeDescription; ?>
            <?php //echo $this->fetch('title');?>
            </title>   
        </title>

        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">        
        <!-- Bootstrap -->
        <?php echo $this->Html->css('bootstrap.min.css'); ?>
        <!-- Owl Carousel -->
        <?php echo $this->Html->css('owl.carousel.css'); ?>
        <?php echo $this->Html->css('owl.theme.default.css'); ?>
        <!-- Magnific Popup -->
        <?php echo $this->Html->css('magnific-popup.css'); ?>
        <!-- Font Awesome Icon -->
        <?php echo $this->Html->css('font-awesome.min.css'); ?>
        <!-- Custom stlylesheet -->
        <?php echo $this->Html->css('style.css'); ?>      
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>

        <!-- /Header -->
        <?php //echo $this->fetch('content');?>
        <!-- Footer -->
        <?php //echo $this->element('footers/footer');?>
        <!-- Header -->
        <?php echo $this->element('header');?>
        <!-- /Header -->
        <!-- Home Section -->
        <div id="home" class="banner-area">

            <!-- Background Image -->
            <div class="bg-img overlay" style="background-image:url('./img/background1.jpg')"></div>
            <!-- /Background Image -->

            <!-- home wrapper -->
            <div class="home-wrapper">
                <div class="container">
                    <div class="row">

                        <!-- home content -->
                        <div class="col-md-10 col-md-offset-1">
                            <h1>Providing effective customer service</h1>
                            <p class="lead">Multi Afro Holdings Pty was established in 2016 as a private company, wholly owned by Black South African individuals and we are a level 1 BBBEE company.  Multi Afro Holdings Pty’s vision is to be South Africa’s ultimate supplier of choice for goods and services. We are based in Midrand; Johannesburg. We are a newly established company, however our goal is to grow and establish branches in Gauteng and the rest of the country.</p>
                            <button class="secondary-button">Len more</button>
                        </div>
                        <!-- /home content -->

                    </div>
                </div>
            </div>
            <!-- /home wrapper -->

        </div>
        <!-- /Home Section -->

        <!-- About Section -->
        <div id="about">

            <!-- About section 01 -->
            <div class="section md-section">

                <!-- container -->
                <div class="container">

                    <!-- row -->
                    <div class="row">

                        <!-- about -->
                        <div class="col-md-4">
                            <div class="about">
                                <img src="./img/vision.jpeg" alt="">
                                <h3>Our Vision</h3>
                                <p>To Be South Africa’s Ultimate Supplier of Choice.</p>
                               <!-- <a href="#" class="text-link"><span>Read more</span></a>-->
                            </div>
                        </div>
                        <!-- /about -->

                        <!-- about -->
                        <div class="col-md-4">
                            <div class="about">
                                <img src="./img/mission-3.jpeg" alt="">
                                <h3>Our Mission </h3>
                                <p>
                                    To exceed the expectations of our customers and stakeholders.
                                </p>
                                <button class="secondary-button" data-toggle="collapse" data-target="#demo">Read more</button>
                                <div id="demo" class="collapse">
                                <ul>
                                <li style="list-style-type: circle">Providing effective customer service</li>
                                <li style="list-style-type: circle">Being a preferred equal opportunity employer through growth</li>
                                <li style="list-style-type: circle">Undertaking business honestly with integrity</li>
                                </ul>
                               </div>
                            </div>
                        </div>
                        <!-- /about -->

                        <!-- about -->
                        <div class="col-md-4">
                            <div class="about">
                                <img src="./img/values-2.jpg" alt="" style="width:100%;height: 100%;">
                                <h3>Our Values</h3>
                                <p>Resourcefulness</p>
                                <button class="secondary-button" data-toggle="collapse" data-target="#demo1">Read more</button>
                                <div id="demo1" class="collapse">
                                <ul>
                                <li style="list-style-type: circle">Resourcefulness</li>
                                <li style="list-style-type: circle">Resilience</li>
                                <li style="list-style-type: circle">Reliable</li>
                                <li style="list-style-type: circle">Respectful</li>
                                <li style="list-style-type: circle">Integrity</li>
                                </ul>
                             </div>       
                            </div>
                        </div>
                        <!-- /about -->

                    </div>
                    <!-- /row -->

                </div>
                <!-- /container -->

            </div>
            <!-- /About section 01 -->

            <!-- About section 02 -->
            <div class="section md-section bg-grey">

                <!-- Half Background Image -->
                <div class="bg-img bg-half overlay" style="background-image:url('./img/about-3.jpg')"></div>
                <!-- /Half Background Image -->

                <!-- container -->
                <div class="container">

                    <!-- row -->
                    <div class="row">

                        <!-- About content -->
                        <div class="col-md-offset-7 col-md-6">
                            <!--<h4 class="sub-title">Subtitle</h4>-->
                            <h2 class="title">About Us</h2>
                            <p class="lead"> </p>
                            <p>Multi Afro Holdings Pty was established in 2016 as a private company, wholly owned by Black South African 
                                individuals and we are a level 1 BBBEE company.  Multi Afro Holdings Pty’s vision is to 
                                be South Africa’s ultimate supplier of choice for goods and services. We are based in 
                                Midrand; Johannesburg. We are a newly established company, however our goal is to grow 
                                and establish branches in Gauteng and the rest of the country.</p>
                        </div>
                        <!-- /About content -->

                    </div>
                    <!-- /row -->

                </div>
                <!-- /container -->

            </div>
            <!-- /About section 02 -->

        </div>
        <!-- /About Section -->

        <!-- Numbers Section -->
        <div id="numbers" class="section sm-section bg-main">

            <!-- container -->
            <div class="container">

                <!-- row -->
                <div class="row">

                    <!-- number -->
                    <div class="col-xs-6 col-md-3">
                        <div class="number">
                            <i class="fa fa-building"></i>
                            <h3>20</h3>
                            <span>Year Of Experience</span>
                        </div>
                    </div>
                    <!-- /number -->

                    <!-- number -->
                    <div class="col-xs-6 col-md-3">
                        <div class="number">
                            <i class="fa fa-university"></i>
                            <h3>154</h3>
                            <span>Project Completed</span>
                        </div>
                    </div>
                    <!-- /number -->

                    <!-- number -->
                    <div class="col-xs-6 col-md-3">
                        <div class="number">
                            <i class="fa fa-handshake-o"></i>
                            <h3>785</h3>
                            <span>Happy Client</span>
                        </div>
                    </div>
                    <!-- /number -->

                    <!-- number -->
                    <div class="col-xs-6 col-md-3">
                        <div class="number">
                            <i class="fa fa-trophy"></i>
                            <h3>14</h3>
                            <span>Award Won</span>
                        </div>
                    </div>
                    <!-- /number -->

                </div>
                <!-- /row -->

            </div>
            <!-- /container -->

        </div>
        <!-- /Numbers Section -->


        <!-- Portfolio Section -->
        <div id="portfolio" class="section md-section">

            <!-- container -->
            <div class="container-fluid">

                <!-- row -->
                <div class="row">

                    <!-- section header -->
                    <div class="section-header text-center">
                        <!--<h4 class="sub-title">Subtitle</h4>-->
                        <h2 class="title">Featured Works</h2>
                    </div>
                    <!-- section header -->

                    <!-- portfolio slider -->
                    <div id="portfolio-slider" class="owl-carousel owl-theme">

                        <!-- portfolio -->
                        <div class="portfolio">
                            <div class="portfolio-img">
                                <div class="overlay"></div>
                                <div class="portfolio-links">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                    <a class="lightbox" href="./img/feature-1.jpg"><i class="fa fa-search"></i></a>
                                </div>                              
                                <?php echo $this->Html->image('feature-1.jpg',['alt' => 'CakePHP']);?>
                            </div>
                            <div class="portfolio-content">
                                <h3>Project Title</h3>
                                <span>Construction</span>
                            </div>
                        </div>
                        <!-- /portfolio -->

                        <!-- portfolio -->
                        <div class="portfolio">
                            <div class="portfolio-img">
                                <div class="overlay"></div>
                                <div class="portfolio-links">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                    <a class="lightbox" href="./img/feature-2.jpg"><i class="fa fa-search"></i></a>
                                </div>

                                <?php echo $this->Html->image('feature-2.jpg',['alt' => 'CakePHP']);?>
                            </div>
                            <div class="portfolio-content">
                                <h3>Project Title</h3>
                                <span>Cleaning</span>
                            </div>
                        </div>
                        <!-- /portfolio -->


                        <!-- portfolio -->
                        <div class="portfolio">
                            <div class="portfolio-img">
                                <div class="overlay"></div>
                                <div class="portfolio-links">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                    <a class="lightbox" href="./img/feature-3.jpg"><i class="fa fa-search"></i></a>
                                </div>
                                <img src="./img/feature-3.jpg" alt="">
                            </div>
                            <div class="portfolio-content">
                                <h3>Project Title</h3>
                                <span>Carpentry & Home Decoration</span>
                            </div>
                        </div>
                        <!-- /portfolio -->


                        <!-- portfolio -->
                        <div class="portfolio">
                            <div class="portfolio-img">
                                <div class="overlay"></div>
                                <div class="portfolio-links">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                    <a class="lightbox" href="./img/feature-4.jpg"><i class="fa fa-search"></i></a>
                                </div>
                                <img src="./img/feature-4.jpg" alt="">
                            </div>
                            <div class="portfolio-content">
                                <h3>Project Title</h3>
                                <span>Category</span>
                            </div>
                        </div>
                        <!-- /portfolio -->


                    </div>
                    <!-- /portfolio slider -->

                    <div class="view-all-portfolio">
                        <a href="#" class="main-button">View All</a>
                    </div>

                </div>
                <!-- /row -->

            </div>
            <!-- /container -->

        </div>
        <!-- /Portfolio Section -->

        <!-- Services Section -->
        <div id="service" class="section md-section">

            <!-- container -->
            <div class="container">

                <!-- row -->
                <div class="row">

                    <!-- section header -->
                    <div class="section-header text-center">
                        <!--<h4 class="sub-title">Subtitle</h4>-->
                        <h2 class="title">Our Services</h2>
                    </div>
                    <!-- /section header -->

                    <!-- service -->
                    <div class="col-md-4 col-sm-6">
                        <div class="service">
                            <i class="fa fa-building"></i>
                            <div class="service-content">
                                <h3>Construction</h3>
                                <p>Whether breaking ground on new projects, upgrading existing structures or revitalising old ones, we are constantly building on our reputation of integrity, innovation and expertise.</p>
                                <a href="#" class="text-link"><span>Read more</span></a>
                            </div>
                        </div>
                    </div>
                    <!-- /service -->
                    <!-- service -->
                    <div class="col-md-4 col-sm-6">
                        <div class="service">
                            <i class="fa fa-wrench"></i>
                            <div class="service-content">
                                <h3>Renovation</h3>
                                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                <a href="#" class="text-link"><span>Read more</span></a>
                            </div>
                        </div>
                    </div>
                    <!-- /service -->

                    <!-- service -->
                    <div class="col-md-4 col-sm-6">
                        <div class="service">
                            <i class="fa fa-university"></i>
                            <div class="service-content">
                                <h3>Architecture</h3>
                                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                <a href="#" class="text-link"><span>Read more</span></a>
                            </div>
                        </div>
                    </div>
                    <!-- /service -->

                    <!-- service -->
                    <div class="col-md-4 col-sm-6">
                        <div class="service">
                            <i class="fa fa-paint-brush"></i>
                            <div class="service-content">
                                <h3>Painting</h3>
                                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                <a href="#" class="text-link"><span>Read more</span></a>
                            </div>
                        </div>
                    </div>
                    <!-- /service -->

                    <!-- service -->
                    <div class="col-md-4 col-sm-6">
                        <div class="service">
                            <i class="fa fa-magic"></i>
                            <div class="service-content">
                                <h3>Decorating</h3>
                                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                <a href="#" class="text-link"><span>Read more</span></a>
                            </div>
                        </div>
                    </div>
                    <!-- /service -->

                    <!-- service -->
                    <div class="col-md-4 col-sm-6">
                        <div class="service">
                            <i class="fa fa-bullhorn"></i>
                            <div class="service-content">
                                <h3>Consulting</h3>
                                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                <a href="#" class="text-link"><span>Read more</span></a>
                            </div>
                        </div>
                    </div>
                    <!-- /service -->

                </div>
                <!-- /row -->

            </div>
            <!-- /container -->

        </div>
        <!-- /Services Section -->

        <!-- Why Choose us Section -->
        <div class="section md-section bg-grey">

            <!-- Half Background Image -->
            <div class="bg-img bg-half bg-right overlay" style="background-image:url('./img/about5.jpg')"></div>
            <!-- Half Background Image -->

            <!-- container -->
            <div class="container">

                <!-- row -->
                <div class="row">

                    <!-- Why Choose us content -->
                    <div class="col-md-5">

                        <!-- section header -->
                        <div class="section-header">
                            <h4 class="sub-title">Subtitle</h4>
                            <h2 class="title">Why Choose Us</h2>
                            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu</p>
                        </div>
                        <!-- /section header -->

                        <!-- Why Choose us accordion -->
                        <div class="accordion" id="accordion">

                            <!-- panel -->
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" href="#collapse-1">Certified Experience</a></h4>
                                </div>
                                <div id="collapse-1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /panel -->

                            <!-- panel -->
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapse-2">The Great Teamwork</a></h4>
                                </div>
                                <div id="collapse-2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /panel -->

                            <!-- panel -->
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapse-3">Modern Thechnology</a></h4>
                                </div>
                                <div id="collapse-3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /panel -->

                        </div>
                        <!-- /Why Choose us accordion -->

                    </div>
                    <!-- /Why Choose us content -->

                </div>
                <!-- /row -->

            </div>
            <!-- /container -->

        </div>
        <!-- /Why Choose us Section -->

        <!-- Call to Action Section -->
        <div id="cta-1" class="section md-section bg-main">

            <!-- container -->
            <div class="container">

                <!-- row -->
                <div class="row">

                    <!-- CTA content -->
                    <div class="col-md-10 col-md-offset-1 text-center">
                        <h2>Aenean imperdiet. Etiam ultricies nisi vel augue.</h2>
                        <h4>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</h4>
                        <button class="main-button">Contact Us</button>
                    </div>
                    <!-- /CTA content -->

                </div>
                <!-- /row -->

            </div>
            <!-- /container -->

        </div>
        <!-- /Call to Action Section -->

        <!-- Clients Section -->
        <div id="clients" class="section">

            <!-- Half Background Image -->
            <div class="bg-img overlay" style="background-image:url('./img/background2.jpg')"></div>
            <!-- /Half Background Image -->

            <!-- Testimonial Section -->
            <div id="testimonial" class="section sm-section">

                <!-- container -->
                <div class="container">

                    <!-- row -->
                    <div class="row">

                        <!-- section header -->
                        <div class="section-header text-center">
                            <h4 class="sub-title">Subtitle</h4>
                            <h2 class="title">Happy Clients</h2>
                        </div>
                        <!-- /section header -->

                        <!-- Testimonial slider -->
                        <div class="col-md-8 col-md-offset-2">
                            <div id="testimonial-slider" class="owl-carousel owl-theme">

                                <!-- testimonial -->
                                <div class="testimonial">
                                    <div class="testimonial-quote">
                                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu.</p>
                                    </div>
                                    <div class="testimonial-meta">
                                        <h3>John Doe</h3>
                                        <span>CEO Company</span>
                                    </div>
                                </div>
                                <!-- /testimonial -->

                                <!-- testimonial -->
                                <div class="testimonial">
                                    <div class="testimonial-quote">
                                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu.</p>
                                    </div>
                                    <div class="testimonial-meta">
                                        <h3>John Doe</h3>
                                        <span>CEO Company</span>
                                    </div>
                                </div>
                                <!-- /testimonial -->

                                <!-- testimonial -->
                                <div class="testimonial">
                                    <div class="testimonial-quote">
                                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu.</p>
                                    </div>
                                    <div class="testimonial-meta">
                                        <h3>John Doe</h3>
                                        <span>CEO Company</span>
                                    </div>
                                </div>
                                <!-- /testimonial -->

                            </div>
                        </div>
                        <!-- /Testimonial slider -->

                    </div>
                    <!-- /row -->

                </div>
                <!-- /container -->

            </div>
            <!-- /Testimonial Section -->


            <!-- Partners Section -->
            <div id="partners" class="section sm-section">

                <!-- container -->
                <div class="container">

                    <!-- row -->
                    <div class="row">

                        <!-- partners slider -->
                        <div id="partners-slider" class="owl-carousel owl-theme">

                            <!-- partner -->
                            <a href="#" class="partner">
                                <img src="./img/partner.jpg" alt="">
                            </a>
                            <!-- /partner -->

                            <!-- partner -->
                            <a href="#" class="partner">
                                <img src="./img/partner.jpg" alt="">
                            </a>
                            <!-- /partner -->

                            <!-- partner -->
                            <a href="#" class="partner">
                                <img src="./img/partner.jpg" alt="">
                            </a>
                            <!-- /partner -->

                            <!-- partner -->
                            <a href="#" class="partner">
                                <img src="./img/partner.jpg" alt="">
                            </a>
                            <!-- /partner -->

                            <!-- partner -->
                            <a href="#" class="partner">
                                <img src="./img/partner.jpg" alt="">
                            </a>
                            <!-- /partner -->

                            <!-- partner -->
                            <a href="#" class="partner">
                                <img src="./img/partner.jpg" alt="">
                            </a>
                            <!-- /partner -->

                            <!-- partner -->
                            <a href="#" class="partner">
                                <img src="./img/partner.jpg" alt="">
                            </a>
                            <!-- /partner -->

                        </div>
                        <!-- /partners slider -->

                    </div>
                    <!-- /row -->

                </div>
                <!-- /container -->

            </div>
            <!-- /Partner Section -->

        </div>
        <!-- /Clients Section -->


        <!-- Blog Section -->
        <div id="blog" class="section md-section">

            <!-- container -->
            <div class="container">

                <!-- row -->
                <div class="row">

                    <!-- section header -->
                    <div class="section-header text-center">
                        <h4 class="sub-title">Subtitle</h4>
                        <h2 class="title">Lastest News</h2>
                    </div>
                    <!-- /section header -->

                    <!-- blog -->
                    <div class="col-md-4">
                        <div class="blog">
                            <div class="blog-img">
                                <img src="./img/blog1.jpg" alt="">
                            </div>
                            <ul class="blog-meta">
                                <li>10 November 2017 ,</li>
                                <li>By John Doe</li>
                            </ul>
                            <h3>Aenean imperdiet. Etiam ultricies nisi vel augue.</h3>
                            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            <a href="#" class="text-link"><span>Read more</span></a>
                        </div>
                    </div>
                    <!-- /blog -->

                    <!-- blog -->
                    <div class="col-md-4">
                        <div class="blog">
                            <div class="blog-img">
                                <img src="./img/blog2.jpg" alt="">
                            </div>
                            <ul class="blog-meta">
                                <li>10 November 2017 ,</li>
                                <li>By John Doe</li>
                            </ul>
                            <h3>Aenean imperdiet. Etiam ultricies nisi vel augue.</h3>
                            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            <a href="#" class="text-link"><span>Read more</span></a>
                        </div>
                    </div>
                    <!-- /blog -->

                    <!-- blog -->
                    <div class="col-md-4">
                        <div class="blog">
                            <div class="blog-img">
                                <img src="../img/blog3.jpg" alt="">
                            </div>
                            <ul class="blog-meta">
                                <li>10 November 2017 ,</li>
                                <li>By John Doe</li>
                            </ul>
                            <h3>Aenean imperdiet. Etiam ultricies nisi vel augue.</h3>
                            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            <a href="#" class="text-link"><span>Read more</span></a>
                        </div>
                    </div>
                    <!-- /blog -->

                </div>
                <!-- /row -->

            </div>
            <!-- /container -->

        </div>
        <!-- /Blog Section -->

        <!-- Call to Action Section -->
        <div id="cta-2" class="section xs-section bg-main">

            <!-- container -->
            <div class="container">

                <!-- container -->
                <div class="row">

                    <!-- CTA Content -->
                    <div class="col-md-9">
                        <h3>Cum sociis natoque penatibus et magnis dis parturient montes.</h3>
                    </div>
                    <div class="col-md-3">
                        <button class="main-button">Contact Us</button>
                    </div>
                    <!-- /CTA Content -->

                </div>
                <!-- /row -->

            </div>
            <!-- /container -->

        </div>
        <!-- /Call to Action Section -->


        <!-- Footer Section -->
        <footer id="footer" class="bg-dark">

            <!-- Top footer -->
            <div id="top-footer" class="section sm-section">

                <!-- container -->
                <div class="container">

                    <!-- row -->
                    <div class="row">

                        <!-- footer about -->
                        <div class="col-md-4 footer-widget">
                            <div class="footer-logo">
                                <a class="logo" href="index.html">
                                    <img src="../img/logo-alt.png" alt="logo">
                                </a>
                                <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.</p>
                            </div>
                            <ul class="footer-contact">
                                <li><a href="#" class="text-link"><i class="fa fa-map"></i><span>1673 Marietta Street</span></a></li>
                                <li><a href="#" class="text-link"><i class="fa fa-phone"></i><span>120 875 4578</span></a></li>
                                <li><a href="#" class="text-link"><i class="fa fa-envelope"></i><span>company@support.com</span></a></li>
                            </ul>
                        </div>
                        <!-- /footer about -->

                        <!-- footer links -->
                        <div class="col-md-4 footer-widget">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="title white-text">Quick Links</h3>
                                </div>
                                <div class="col-xs-6">
                                    <ul class="footer-links">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Projects</a></li>
                                        <li><a href="#">News</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </div>

                                <div class="col-xs-6">
                                    <ul class="footer-links">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Projects</a></li>
                                        <li><a href="#">News</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /footer links -->

                        <!-- footer subscribe -->
                        <div class="col-md-4 footer-widget">
                            <h3 class="title white-text">Keep in touch</h3>
                            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            <div class="footer-subscribe">
                                <form>
                                    <input class="input" type="email" placeholder="Enter your email">
                                    <button>Subscribe</button>
                                </form>
                            </div>
                            <ul class="footer-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <!-- /footer subscribe -->

                    </div>
                    <!-- /row -->

                </div>
                <!-- /container -->

            </div>
            <!-- /Top footer -->

            <!-- Bottom footer -->
            <div id="bottom-footer" class="section xs-section text-center">
                <div class="container">
                    <div class="row">
                        <span>&copy; Copyright 2017. All Rights Reserved, Created by <a href="https://colorlib.com">Colorlib</a></span>
                    </div>
                </div>
            </div>
            <!-- /Bottom footer -->

        </footer>
        <!-- /Footer Section -->

        <!-- Preloader -->
        <div id="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- /Preloader -->

        <!-- jQuery Plugins -->
        <?php echo $this->Html->script('jquery.min.js'); ?>
        <?php echo $this->Html->script('bootstrap.min.js'); ?>
        <?php echo $this->Html->script('owl.carousel.min.js'); ?>
        <?php echo $this->Html->script('jquery.magnific-popup.js'); ?>
        <?php echo $this->Html->script('main.js'); ?>       
    </body>
</html>

