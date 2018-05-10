<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!-- Responsive meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- IE Compatibility meta -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Description meta -->
        <meta name="description" content="...">
        <!-- Author meta -->
        <meta name="author" content="Bootstrap Temple">

        <!-- Page Title -->
        <title>LongTme Restaurant <!-- Bootstrap Template from the Bootstrap Temple--></title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon.ico">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Custom font icons -->
        <link rel="stylesheet" href="https://file.myfontastic.com/6AeAYiqp5KBjSiZ2tE8WJW/icons.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Slider -->
        <link rel="stylesheet" href="css/slider.min.css">
        <!-- Lightbox Pop up -->
        <link rel="stylesheet" href="css/lightbox.min.css">
        <!-- Datepicker -->
        <link rel="stylesheet" href="css/datepicker.min.css">
        <!-- Datepicker -->
        <link rel="stylesheet" href="css/timepicki.min.css">
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/style.default.css">
        <!-- Modernizr -->
        <script type="text/javascript" src="js/modernizr.custom.79639.min.js"></script>
    </head>
    <body>

        <div class="page-holder">
            <!-- Navbar -->
            <header class="header">
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container">
                        <div class="navbar-header"><a href="index.php" class="navbar-brand"><alt="Italiano" width="100">LongTime Coffee</a>
                            <div class="navbar-buttons">
                                <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle navbar-btn">Menu<i class="fa fa-align-justify"></i></button>
                            </div>
                        </div>
                        <div id="navigation" class="collapse navbar-collapse navbar-right">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#hero">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#menu">Menu</a></li>
                                <li><a href="#booking">Reservation</a></li>
                                <li><a href="#contact">Contact</a></li>
                                <li><a href="#Logout">Logout</a></li>
                            </ul>
                            <a href="#" class="btn navbar-btn btn-unique hidden-sm hidden-xs" id="open-reservation">Make a Reservation</a>
                        </div>
                    </div>
                </nav>
            </header><!-- End Navbar -->



            <!-- Hero Section -->
            <section id="hero" class="hero">
                <div id="slider" class="sl-slider-wrapper">

                    <div class="sl-slider">
                        <!-- slide -->
                        <div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                            <div class="sl-slide-inner" style="background-image: url(img/hero-bg.jpg);">
                                <div class="container">
                                    <h1>This is <span class="text-primary">LongTime</span></h1>
                                </div>
                            </div>
                        </div>
                        <!-- slide -->
                        <div class="sl-slide bg-2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                            <div class="sl-slide-inner" style="background-image: url(img/hero-bg02.jpg);">
                                <div class="container">
                                    <h1>Cafe terkini di kalangan mahasiswa</h1>
                                    <p>Ayo reservasi sekarang</p>
                                </div>
                            </div>
                        </div>
                        <!-- slide -->
                        <div class="sl-slide bg-3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                            <div class="sl-slide-inner" style="background-image: url(img/hero-bg03.jpg);">
                                <div class="container">
                                    <h1>Visit <span class="text-primary">Us</span></h1>
                                    <p>Lamnyong, Banda Aceh</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- End sl-slider -->

                    <!-- slider pagination -->
                    <nav id="nav-dots" class="nav-dots">
                        <span class="nav-dot-current"></span>
                        <span></span>
                        <span></span>
                    </nav>

                    <!-- scroll down btn -->
                    <a id="scroll-down" href="#about" class="hidden-xs"></a>

                    <!-- social icons menu -->
                    <div class="social">
                        <div class="wrapper">
                            <ul class="list-unstyled">
                                <li><a href="#" title="facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" title="twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" title="pinterest" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#" title="instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                            <span>Follow us on</span>
                        </div>
                    </div>
                </div><!-- End slider-wrapper -->
            </section><!-- End Hero Section -->



            <!-- Details -->
            <section id="details" class="details">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="heading text-center">
                                <p>Call Us Now For</p>
                                <h5>Home Delivery</h5>
                            </div>
                            <a href="tel:9870988764" class="phone">987 098 8764</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Details-->


            <!-- About Section -->
            <section id="about" class="about">
                <div class="container text-center">
                    <header>
                        <h2>About Restaurant</h2>
                        <h3>Check our story</h3>
                    </header>
                    <p class="lead">LongTime Coffee adalah sebuah cafe yang terletak di Lamnyong, tepatnya di seberang Nasi Uduk Kelapa Dua</p>
                </div>
            </section>
            <!-- End About Section -->

			
            <!-- App Section -->
            <!--<section id="app" class="app">
                <div class="container text-center has-border">
                    <h5>Our app is availble now, we made it easire, Download it now.</h5>
                    <ul class="list-unstyled list-inline">
                        <li><a href="https://bootstraptemple.com/" target="_blank" title="Google Play" class="btn-unique-white">Google Play</a></li>
                        <li><a href="https://bootstraptemple.com/" target="_blank" title="Appstore" class="btn-unique-white">App Store</a></li>
                        <li><a href="https://bootstraptemple.com/" target="_blank" title="Bootstrap Temple" class="btn-unique-white">Download this template</a></li>
                    </ul>
                </div>
            </section>
             End App Section -->

            <!-- Menu Section -->
            <section id="menu" class="menu">
                <div class="container">
                    <header class="text-center">
                        <h2>Our food menu</h2>
                        <h3>Our most popular menu</h3>
                    </header>

                    <div class="menu">
                        <!-- Tabs Navigatin -->
                        <ul class="nav nav-tabs text-center has-border" role="tablist">
                            <li role="presentation" class="active"><a href="#breakfast" aria-controls="breakfast" role="tab" data-toggle="tab">Special Menu</a></li>
                            <li role="presentation"><a href="#lunch" aria-controls="lunch" role="tab" data-toggle="tab">Makanan Favorit</a></li>
                            <li role="presentation"><a href="#dinner" aria-controls="dinner" role="tab" data-toggle="tab">Minuman Favorit</a></li>
                            <li role="presentation"><a href="#party" aria-controls="party" role="tab" data-toggle="tab">List Menu Makanan</a></li>
                            <li role="presentation"><a href="#drinks" aria-controls="drinks" role="tab" data-toggle="tab">List Menu Minuman</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">

                            <!-- Breakfast Panel -->
                            <div role="tabpanel" class="tab-pane active" id="breakfast">
                                <div class="row">
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                        <!--<div class="menu-item recommended has-border clearfix">-->
                                            <div class="item-details pull-left">
                                                <h5>Mie Goreng + Telur + Jus Mangga</h5>
                                                <p>Tersedia</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">23000</strong>
                                              <!--  <span class="text-medium">Recommended</span>-->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                        <!--<div class="menu-item recommended has-border clearfix">-->
                                            <div class="item-details pull-left">
                                                <h5>Pisang Keju + Cream Coklat + Jus Jeruk</h5>
                                                <p>Tersedia</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">22000</strong>
                                              <!--  <span class="text-medium">Recommended</span>-->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Burger + Potato + Jus Alvukad</h5>
                                                <p>Tersedia</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">30000</strong>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Potato + Mayonnaise + Coffee Latte</h5>
                                                <p>Tersedia</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">25000</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Coming Soon</h5>
                                                <p>.....</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">.....</strong>
                                            </div>
                                        </div>
                                    </div>
                                      <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Coming Soon</h5>
                                                <p>.....</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">.....</strong>
                                            </div>
                                        </div>
                                    </div>
                                     <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Coming Soon</h5>
                                                <p>.....</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">.....</strong>
                                            </div>
                                        </div>
                                    </div>
                                      <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Coming Soon</h5>
                                                <p>.....</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">.....</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Coming Soon</h5>
                                                <p>.....</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">.....</strong>
                                            </div>
                                        </div>
                                    </div>
                                      <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Coming Soon</h5>
                                                <p>.....</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">.....</strong>
                                            </div>
                                        </div>
                                    </div>
                                      <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Coming Soon</h5>
                                                <p>.....</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">.....</strong>
                                            </div>
                                        </div>
                                    </div>
                                     <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Coming Soon</h5>
                                                <p>.....</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">.....</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Breakfast Panel-->

                            <!-- lunch Panel -->
                            <div role="tabpanel" class="tab-pane fade" id="lunch">
                                <div class="row">
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                        <!--<div class="menu-item recommended has-border clearfix">-->
                                            <div class="item-details pull-left">
                                                <h5>Potato</h5>
                                                <p>Tersedia</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">10000</strong>
                                                <!--<span class="text-medium">Recommended</span>-->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Mie Goreng</h5>
                                                <p>Tersedia</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">12000</strong>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Nougat</h5>
                                                <p>Tersedia</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">10000</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Burger</h5>
                                                <p>Tersedia</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">15000</strong>
                                            </div>
                                        </div>
                                    </div>
                                     <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Coming Soon</h5>
                                                <p>.....</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">.....</strong>
                                            </div>
                                        </div>
                                    </div>
                                     <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Coming Soon</h5>
                                                <p>.....</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">.....</strong>
                                            </div>
                                        </div>
                                    </div>
                                      <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Coming Soon</h5>
                                                <p>.....</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">.....</strong>
                                            </div>
                                        </div>
                                    </div>
                                      <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Coming Soon</h5>
                                                <p>.....</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">.....</strong>
                                            </div>
                                        </div>
                                    </div>
                                        <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Coming Soon</h5>
                                                <p>.....</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">.....</strong>
                                            </div>
                                        </div>
                                    </div>
                                     <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Coming Soon</h5>
                                                <p>.....</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">.....</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End lunch Panel-->
                            
                            

                            <!-- favorit drink Panel -->
                            <div role="tabpanel" class="tab-pane fade" id="dinner">
                                <div class="row">
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Cofffe Latte</h5>
                                                <p>Tersedia</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">13000</strong>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Jus Mangga</h5>
                                                <p>Tersedia</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">10000</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                        <!--<div class="menu-item recommended has-border clearfix">-->
                                            <div class="item-details pull-left">
                                                <h5>Jus Alvukad</h5>
                                                <p>Tersedia</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">10000</strong>
                                                <!--<span class="text-medium">Recommended</span>-->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Cappucino</h5>
                                                <p>Tersedia</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">8000</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>.....</h5>
                                                <p>.....</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">....</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>.....</h5>
                                                <p>.....</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">....</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>.....</h5>
                                                <p>.....</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">....</strong>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>.....</h5>
                                                <p>.....</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">....</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>.....</h5>
                                                <p>.....</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">....</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>.....</h5>
                                                <p>.....</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">....</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End minuman favorit Panel-->

                            <!-- foods Panel -->
                            <div role="tabpanel" class="tab-pane fade" id="party">
                                <div class="row">
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                        <!--<div class="menu-item recommended has-border clearfix">-->
                                            <div class="item-details pull-left">
                                                <h5>Burger</h5>
                                                <p>Tersedia</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">15000</strong>
                                                <!--<span class="text-medium">Recommended</span>-->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Nougat</h5>
                                                <p>Tersedia</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">10000</strong>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Potato</h5>
                                                <p>Tersedia</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">10000</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Sosis BBQ</h5>
                                                <p>Tersedia</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">10000</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Mie Goreng</h5>
                                                <p>Tersedia</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">12000</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Mie Rebus</h5>
                                                <p>Tersedia</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">12000</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Indomie Goreng</h5>
                                                <p>Tersedia</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">9000</strong>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Risol</h5>
                                                <p>Tersedia</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">8000</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Omlet</h5>
                                                <p>Tersedia</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">13000</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>pisang keju</h5>
                                                <p>Tersedia</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">12000</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Party Panel-->

                            <!-- Drinks Panel -->
                            <div role="tabpanel" class="tab-pane fade" id="drinks">
                                <div class="row">
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Cappucino</h5>
                                                <p>Dingin / Hangat / Panas</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">8000</strong>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- item  minuman-->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Coffee Latte</h5>
                                                <p>Dingin / Hangat / Panas</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">12000</strong>
                                            </div>
                                        </div>
                                    </div>
                                  
                                
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Tea Tarik</h5>
                                                <p>Dingin / Hangat / Panas</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">10000</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Teh Hijau</h5>
                                                <p>Dingin / Hangat / Panas</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">10000</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Teh Hijau + Susu</h5>
                                                <p>Dingin / Hangat / Panas</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">13000</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>jus mangga</h5>
                                                <p>Dingin / Hangat / Panas</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">10000</strong>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Nutrisari</h5>
                                                <p>Dingin / Hangat / Panas</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">7000</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Jus Apel</h5>
                                                <p>Dingin / Hangat / Panas</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">10000</strong>
                                            </div>
                                        </div>
                                    </div>
                                     <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Jus Alvokad</h5>
                                                <p>Dingin / Hangat / Panas</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">10000</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Jus Jeruk</h5>
                                                <p>Dingin / Hangat / Panas</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">10000</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Drinks Panel-->
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Menu Section -->

            <!-- Booking Section -->
            <section id="booking" class="booking">
                <div class="container text-center">
                    <header>
                        <h2>Order your table</h2>
                        <h3>Enjoy your meal at our restaurant</h3>
                    </header>

                    <div class="row">
                        <div class="form-holder col-md-10 col-md-push-1 text-center">
                            <div class="ribbon">
                                <i class="fa fa-star"></i>
                            </div>

                            <h2>Make a reservation</h2>
                            <h3>Book your table now</h3>

                            <form id="booking-form" method="get" action="#">
                                <div class="row">
                                    <div class="col-md-10 col-md-push-1">
                                        <div class="row">
                                            <label for="name" class="col-sm-6 unique">Name
                                                <input name="name" type="text" id="name" required>
                                            </label>
                                            <label for="email" class="col-sm-6 unique">Email
                                                <input name="email" type="email" id="email" required>
                                            </label>
                                            <label for="number" class="col-sm-6 unique">Number
                                                <input name="number" type="text" id="number" required>
                                            </label>
                                            <label for="people" class="col-sm-6 unique">How Many People
                                                <input name="people" type="number" id="people" min="1" required>
                                            </label>
                                            <label for="date" class="col-sm-6 unique">Date
                                                <input name="date" type="text" id="date" class="datepicker-here" data-language='en' required>
                                            </label>
                                            <label for="time" class="col-sm-6 unique">Time
                                                <input name="time" type="text" id="time" class="timepicker" required>
                                            </label>
                                            <label for="request" class="col-sm-12 unique">Special Request
                                                <textarea id="request" name="request" required></textarea>
                                            </label>
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn-unique">Book Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Booking Section -->


            <!-- End Booking Section -->
            <section id="contact" class="contact">
                <div id="map"></div>
                <div class="container text-center">
                    <div class="form-holder">
                        <header>
                            <h2>Contact Us</h2>
                            <h3>Feel free to contact us</h3>
                        </header>

                        <form method="get" action="#" id="contact-form">
                            <div class="row">
                                <label for="user-name" class="col-sm-6 unique">Name
                                    <input type="text" name="username" id="user-name" required>
                                </label>
                                <label for="user-email" class="col-sm-6 unique">Email
                                    <input type="email" name="useremail" id="user-email" required>
                                </label>
                                <label for="message" class="col-sm-12 unique">Your Message
                                    <textarea name="message" id="message" required></textarea>
                                </label>
                                <div class="col-sm-12">
                                    <button type="submit" class="btn-unique" id="submit">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <!-- End Booking Section -->


            <!-- Footer -->
            <footer id="mainFooter" class="mainFooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 brief">
                            <div class="header">
                                <img src="img/logo-footer.png" alt="italiano" width="100">
                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        </div>

                        <div class="col-md-4 contact">
                            <div class="header">
                                <h6>Contact</h6>
                            </div>
                            <ul class="contact list-unstyled">
                                <li><span class="icon-map text-primary"></span>Basioun, 23 July st, Egypt</li>
                                <li><a href="mailto:Italiano@Company.com"><span class="icon-phone text-primary"></span>Italiano@Company.com</a></li>
                                <li><span class="icon-mail text-primary"></span>9465 7675 294</li>
                                <li><span class="icon-printer text-primary"></span>333-999-666</li>
                            </ul>
                        </div>

                        <div class="col-md-4 newsletter">
                            <div class="header">
                                <h6>Newsletter</h6>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmo.</p>
                            <form action="#" id="subscribe" class="clearfix">
                                <input type="email" name="subscribtion-email" placeholder="Enter Your Email Address" class="pull-left">
                                <button type="submit" class="btn-unique has-border pull-left">Subscribe</button>
                            </form>
                        </div>
                    </div>

                    <ul class="social list-unstyled list-inline">
                        <li><a href="#" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#" target="_blank" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" target="_blank" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#" target="_blank" title="Skype"><i class="fa fa-skype"></i></a></li>
                    </ul>
                </div>

                <div class="copyrights">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-5">
                                <ul class="list-unstyled list-inline">
                                    <li><a href="#">Policy Privacy</a></li>
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>

                            <div class="col-sm-7">
                                <p>&copy; 2017 Italiano Restaurant. Template By <a href="https://bootstraptemple.com/" target="_blank">BootstrapTemple.com</a></p>
                                <!-- Please do not remove the backlink to us unless you have purchased the attribution-free license at https://bootstraptemple.com. It is part of the license conditions. Thanks for understanding :) -->
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End Footer -->

            <!-- scroll top btn -->
            <div id="scrollTop" class="btn-unique">
                <i class="fa fa-angle-up"></i>
            </div><!-- end scroll top btn -->


            <!-- moadal booking form -->
            <div class="reservation-overlay hidden-sm hidden-xs">
                <section id="reservation-modal" class="reservation-modal">
                    <div id="close"><i class="icon-close"></i></div>

                    <div class="container">
                        <div class="row">
                            <div class="form-holder col-md-12 text-center">
                                <h2>Make a reservation</h2>
                                <h3>Book your table now</h3>

                                <form id="booking-form-alternative" method="get"  action="#">
                                    <div class="row">
                                        <div class="col-md-push-1 col-sm-10">
                                            <div class="row">
                                                <label for="cname" class="col-sm-6 unique">Name
                                                    <input name="clientname" type="text" id="cname" required>
                                                </label>
                                                <label for="cemail" class="col-sm-6 unique">Email
                                                    <input name="clientemail" type="email" id="cemail" required>
                                                </label>
                                                <label for="cnumber" class="col-sm-6 unique">Number
                                                    <input name="clientnumber" type="text" id="cnumber" required>
                                                </label>
                                                <label for="cpeople" class="col-sm-6 unique">How Many People
                                                    <input name="clientpeople" type="number" id="cpeople" min="1" required>
                                                </label>
                                                <label for="cdate" class="col-sm-6 unique">Date
                                                    <input name="clientdate" type="text" id="cdate" class="datepicker-here" data-language='en' required>
                                                </label>
                                                <label for="time-alt" class="col-sm-6 unique">Time
                                                    <input name="clienttime" type="text" id="time-alt" class="timepicker" required>
                                                </label>
                                                <label for="request-alt" class="col-sm-12 unique">Special Request
                                                    <textarea id="request-alt" name="clientrequest" required></textarea>
                                                </label>
                                                <div class="col-sm-12">
                                                    <button type="submit" class="btn-unique">Book Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div><!-- end modal booking form -->
        </div>

        <!--?php
        session_start();
        session_destroy();
        echo "<script>alert('Terima kasih, Anda Berhasil Logout')</script>";
        echo "<meta http-equiv='refresh' content='1 url=SignIn.php'>";
        ?>-->




        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.ba-cond.min.js"></script>
        <script src="js/jquery.slitslider.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/lightbox.min.js"></script>
        <script src="js/datepicker.min.js"></script>
        <script src="js/datepicker.en.min.js"></script>
        <script src="js/timepicki.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/smooth.scroll.min.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0dSWcBx-VghzhzQB6oCMTgeXMOhCYTvk"></script>
        <script src="js/map.min.js"></script>
        <script src="js/script.js"></script>

        <?php
        if(isset($_GET["gagalregister"])){
            echo "<script>
                alert('data yang dimasukkan salah');

        </script>";
      } 
    ?>
    </body>
</html>
