<!doctype HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="fragment" content="!">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>MazeTech</title>
    <!-- Bootstrap CSS -->
    <link href="<?php echo URL?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS-->
    <link href="<?php echo URL?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo URL?>assets/css/style.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="<?php echo URL?>assets/animate/animate.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link href="<?php echo URL?>assets/owl-carousel/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo URL?>assets/owl-carousel/css/owl.theme.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo URL?>assets/images/fav.png">
</head>
<body>
    <!-- Pre Loader -->
    <div id="dvLoading"></div>
    <!-- Header Start -->
    <header>
        <div class="top-wrapper hidden-xs">
            <div class="container">
                <div class="col-md-4 col-sm-6 hidden-xs top-wraper-left no-padding">
                    <ul class="header-social-icons">
                        <li class="facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li class="twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li class="linkedin"><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        <li class="pinterest"><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                        <li class="google-plus"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        <li class="youtube"><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
                        <li class="dribbble"><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-8 col-sm-6">
                    <ul class="top-right pull-right ">
                        <!-- Login -->
                        <li class="login">
                            <a href="#"><i class="fa fa-lock"></i>Login</a>
                            <div class="login-form">
                                <h4>Login</h4>
                                <form action="#" method="post">
                                    <input type="text" name="name" placeholder="Username">
                                    <input type="password" name="password" placeholder="Password">
                                    <button type="submit" class="btn">Login</button>
                                </form>
                            </div>
                        </li>
                        <!-- Register -->
                        <li class="register">
                            <a href="#"><i class="fa fa-user"></i>Sign Up</a>
                            <div class="register-form">
                                <h4>Sign Up</h4>
                                <span>Please sign up the account</span>
                                <form action="#" method="post">
                                    <input type="text" name="user-name" placeholder="Username">
                                    <input type="email" name="user-email" placeholder="Email">
                                    <input type="password" name="user-password" placeholder="Password">
                                    <button type="submit" class="btn">Register</button>
                                </form>
                            </div>
                        </li>
                        <li class="search">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <div id="search-form-container">
                                <form id="search-form" action="#" style="display: none;" class="">
                                    <input type="search" id="search" name="search" placeholder="Search...">
                                    <input type="submit" id="search-submit" value="">
                                    <span id="close-form" class="close">x</span>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="logo-bar hidden-xs">
            <div class="container">
                <!-- Logo -->
                <div class="row">
                    <div class="col-sm-4"><a href="index-2.html"> <img src="assets/images/logo.png" alt="Education World"></a> </div>
                    <div class="col-sm-8">
                        <ul class="contact-info pull-right">
                            <li>
                                <i class="fa fa-phone"></i>
                                <p>
                                    <span>Call us</span><br>
                                    +1-012-345-6789
                                </p>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <p>
                                    <span>Email Us</span><br>
                                    <a href="mailto:support@sbtechnosoft.com">support@sbtechnosoft.com</a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="wow fadeInDown navigation" data-offset-top="197" data-spy="affix">
            <div class="container">
                <nav class="navbar navbar-default">
                    <div class="row">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                            <a class="navbar-brand" href="index-2.html"><img src="assets/images/logo.png" alt="Education World" /></a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="<?php echo URL?>index">Home</a></li>    
                                <li><a href="about">About Us</a></li>                            
                                <li class="dropdown mega-menu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="row">
                                                <div class="col-md-2 col-md-offset-1">
                                                    <ul class="list-unstyled">
                                                        <li><span>Web Services</span></li>
                                                        <li><a href="grid.html"><span class="fa fa-angle-right menu-icon"></span>Grid</a></li>                                                        
                                                    </ul>
                                                </div>
                                                <div class="col-md-2">
                                                    <ul class="list-unstyled">
                                                        <li><span>SEO Services</span></li>
                                                        <li><a href="course-list.html"><span class="fa fa-angle-right menu-icon"></span>Course List</a></li>                                                        
                                                    </ul>
                                                </div>
                                                <div class="col-md-2">
                                                    <ul class="list-unstyled">
                                                        <li><span>Branding</span></li>
                                                        <li><a href="classic-news.html"><span class="fa fa-angle-right menu-icon"></span>Classic News</a></li>                                                        
                                                    </ul>
                                                </div>
                                                <div class="col-md-2">
                                                    <ul class="list-unstyled">
                                                        <li><span>Gallery</span></li>
                                                        <li><a href="grid-gallery.html"><span class="fa fa-angle-right menu-icon"></span>Grid Gallery</a></li>                                                        
                                                    </ul>
                                                </div>
                                                <div class="col-md-2">
                                                    <ul class="list-unstyled">
                                                        <li><span>Pages</span></li>
                                                        <li><a href="<?php echo URL?>about"><span class="fa fa-angle-right menu-icon"></span>About Us</a></li>                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>                                
                                <li><a href="#">Web Services</a></li>
                                <li><a href="#">Portfolio</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Get Quote</a></li>
                                <li><a href="contact">Contact Us</a></li>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header End -->