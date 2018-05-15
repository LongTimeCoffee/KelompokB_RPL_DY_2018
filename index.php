<?php
    session_start();
    
        if(!isset($_SESSION['Nama'])){
            header('location: SignIn.php');
            exit();
        }
?>

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
        <title>LongTime</title>
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

        <link rel="stylesheet" href="js/jquery-ui/jquery-ui.min.css">
        <!-- Modernizr -->
        <script type="text/javascript" src="js/modernizr.custom.79639.min.js"></script>
    </head>
    <body>

        <div class="page-holder">
            <!-- Navbar -->
            <header class="header">
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container">
                        <!--<div class="navbar-header"><a href="index.html" class="navbar-brand"><img src="img/logo.png" alt="Italiano" width="100"></a>-->
                            <div class="navbar-buttons">
                        <div class="navbar-header"><a href="index.html" class="navbar-brand"><alt="Italiano" width="100">LongTime Coffee
                            <div class="navbar-buttons">
                                <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle navbar-btn">Menu<i class="fa fa-align-justify"></i></button>
                            </div>
                        </div>
                        <div id="navigation" class="collapse navbar-collapse navbar-right">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#hero">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#menu">Menu</a></li>
                                <li><a href="#contact">Contact</a></li>
                                <li><a href="#Struk">Struk</a></li>
                                <!--<li><a href="SignIn.php">SignIn</a></li>-->
                                <li><a href="SignIn.php?logout='1'">Logout</a></li>
                        
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
                                <p><h3>Book Your table now</h3></p>
                                <!--<h5>Home Deliv</h5>-->
                            </div>
                            <!--<a href="tel:9870988764" class="phone">987 098 8764</a>-->
                        </div>
                        <div class="col-sm-6">
                            <div class="heading text-left">
                            <p><h3> Open Order </h3></p>
                            <h5> 08: 00 AM - 12 : 00 PM</h5> 
                            </div>
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
                    <p class="lead">LongTime Coffee adalah sebuah cafe yang terletak di Lamnyong, tepatnya di seberang Nasi Uduk Kelapa Dua. Cafe ini biasa dikunjungi oleh kalangan mahasiswa. Ada yang sekedar duduk santai bersama teman-teman, ada juga yang sedang membuat tugas. LongTime Coffee buka pada pukul 08.00-24.00. Pada pagi hari, cafe ini menyediakan kue-kue tradisional yang disajikan di atas piring kecil</p>
                </div>
            </section>
            <!-- End About Section -->

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
                            <li role="presentation" class="active"><a href="#breakfast" aria-controls="breakfast" role="tab" data-toggle="tab">Breakfast</a></li>
                            <li role="presentation"><a href="#drinks" aria-controls="drinks" role="tab" data-toggle="tab">Drinks</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">

                            <!-- Breakfast Panel -->
                            <div role="tabpanel" class="tab-pane active" id="breakfast">
                                <div class="row">
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                 <h5>Burger</h5>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">Rp.10000</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                             <h5>Mie Goreng</h5>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">Rp.10000</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Indomie Goreng</h5>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">Rp.8000</strong>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Roti Bakar Telur Sosis Keju</h5>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">Rp.13000</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Pisang Bakar Keju</h5>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">Rp.15000</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Pisang Bakar Milo</h5>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">Rp.15000</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Nugget</h5>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">Rp.10000</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Churros</h5>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">Rp.12000</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Nasi Goreng</h5>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">Rp.12000</strong>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                 <h5>Omelette</h5>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">Rp.7000</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                 <h5>Indomie Rebus</h5>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">Rp.8000</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Kentang Goreng</h5>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">15000</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Breakfast Panel-->

                            <!-- Drinks Panel -->
                            <div role="tabpanel" class="tab-pane fade" id="drinks">
                                <div class="row">
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Teh Manis</h5>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">Rp.5000</strong>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                 <h5>Teh Tarik</h5>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">Rp.8000</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Teh Hijau</h5>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">Rp.8000</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Lemon Tea</h5>
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
                                                <h5>Cold Frappe</h5>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">Rp.12000</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Cappucino</h5>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">Rp.10000</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Coffee Latte</h5>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">Rp.10000</strong>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Milk Tea Dingin</h5>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">Rp.13000</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Green Tea Shake</h5>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">Rp.18000</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                 <h5>Milk Shake</h5>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">Rp.15000</strong>
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

            <!-- section struk-->
            <div class="Struk">
                <section id="Struk" class="Struk" >
                    <div class="container text-left">
                            <h1 class="header text-center">Struk</h1>
                            <?php
                                include 'connection.php';
                                //include 'formsignin.php';
                                $id_pelanggan= $_SESSION["id_pelanggan"];
                                 $sql = "SELECT akun.id_pelanggan,akun.Nama,akun.No_hp, pesan.meja,pesan.date,pesan.time,pesan.people,pesan.clientrequest,menu.nama_menu,menu.jumlah From akun join pesan on akun.id_pelanggan=pesan.id_pelanggan join menu on pesan.id_pesan=menu.id_pesan where akun.id_pelanggan= '$id_pelanggan'";
                                $data = mysqli_query($link, $sql);
                                if (!$data) {
                                        printf("Error: %s\n", mysqli_error($link));
                                        exit();
                                    }
                                $cnt=0;
                                    $row = mysqli_fetch_array($data);
                                    $Nama=$row["Nama"]; 
                                    $No_hp=$row["No_hp"];  
                                    $Meja=$row["meja"];
                                    $Date=$row["date"];
                                    $Time=$row["time"];
                                    $People=$row["people"];
                                    $Clientrequest=$row["clientrequest"];

                                        echo "Name : ".$Nama."<br>";
                                        echo "Number Phone : ".$No_hp."<br>";
                                        echo "Table : ".$Meja."<br>";
                                        echo "Date : ".$Date."<br>";
                                        echo "Time : ".$Time."<br>";
                                        echo "People : ".$People."<br>";
                                        echo "Spesial request :  ".$Clientrequest."<br>";

                                    $Nama_menu=$row["nama_menu"];
                                    $Jumlah=$row["jumlah"];  
                                        echo "Menu : ".$Nama_menu."<br>";
                                        echo "Quantity : ".$Jumlah."<br";

                                    while($row = mysqli_fetch_array($data)){  
                                        $Nama_menu=$row["nama_menu"];
                                        $Jumlah=$row["jumlah"];
                                            echo "Menu : ".$Nama_menu."<br>";
                                            echo "Quantity : ".$Jumlah. "<br>";
                                            
                                        }
                                    ?>
                        </div>
                    </section>
                </div>


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
                                <h6>LongTime</h6>
                                <!--<img src="img/logo-footer.png" alt="italiano" width="100">-->
                            </div>

                           <p>Kafe kekinian dimana kamu bisa hangout sepuasnya.</p>
                        </div>

                        <div class="col-md-4 contact">
                            <div class="header">
                                <h6>Contact</h6>
                            </div>
                            <ul class="contact list-unstyled">
                                <li><span class="icon-map text-primary"></span>Lamnyong, Banda Aceh</li>
                                <li><span class="icon-mail text-primary"></span>9465 7675 294</li>
                                <li><span class="icon-printer text-primary"></span>333-999-666</li>
                            </ul>
                        </div>

                        <div class="col-md-4 newsletter">
                            <div class="header">
                                <h6>Newsletter</h6>
                            </div>
                            <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmo.</p>-->
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


            <!--Logout btn -->

            <!-- moadal booking form -->    

            <div class="reservation-overlay hidden-sm hidden-xs">
                <section id="reservation-modal" class="reservation-modal">
                    <div id="close"><i class="icon-close"></i></div>

                    <div class="container">
                        <div class="row">
                            <div class="form-holder col-md-12 text-center">
                                <h2>Make a reservation</h2>
                                <h3>Book your table now</h3>

                                <div class="pages-reservasi page1">
                                <div id="booking-form-alternative" method="post" action="Reservasi.php">
                                   <div class="row">
                                        <div class="col-md-push-1 col-sm-10">
                                            <div class="row">
                                                <div class=col-sm-4>
                                                    <p><button class="btn btn-lg btn-meja" name="meja" idMeja="1"><b>1</b></button></p><br>
                                                    <p><button class="btn btn-lg btn-meja" name="meja" idMeja="2"><b>2</b></button></p><br>
                                                    <p><button class="btn btn-lg btn-meja" name="meja" idMeja="3"><b>3</b></button></p><br>
                                                    <p><button class="btn btn-lg btn-meja" name="meja" idMeja="4"><b>4</b></button></p><br>
                                                    <p><button class="btn btn-lg btn-meja" name="meja" idMeja="5"><b>5</b></button></p><br>
                                                    <p><button class="btn btn-lg btn-meja" name="meja" idMeja="6"><b>6</b></button></p><br>
                                                </div>
                                                <div class=col-sm-4>
                                                    <p><button class="btn btn-lg btn-meja" name="meja" idMeja="7"><b>7</b></button></p><br>
                                                    <p><button class="btn btn-lg btn-meja" name="meja" idMeja="8"><b>8</b></button></p><br>
                                                    <p><button class="btn btn-lg btn-meja" name="meja" idMeja="9"><b>9</b></button></p><br>
                                                    <p><button class="btn btn-lg btn-meja" name="meja" idMeja="10"><b>11</b></button></p><br>
                                                    <p><button class="btn btn-lg btn-meja" name="meja" idMeja="11"><b>12</b></button></p><br>
                                                    <p><button class="btn btn-lg btn-meja" name="meja" idMeja="12"><b>10</b></button></p><br>
                                                </div>
                                                <div class=col-sm-4>
                                                    <p><button class="btn btn-lg btn-meja" name="meja" idMeja="13"><b>13</b></button></p><br>
                                                    <p><button class="btn btn-lg btn-meja" name="meja" idMeja="14"><b>14</b></button></p><br>
                                                    <p><button class="btn btn-lg btn-meja" name="meja" idMeja="15"><b>15</b></button></p><br>
                                                    <p><button class="btn btn-lg btn-meja" name="meja" idMeja="16"><b>16</b></button></p><br>
                                                    <p><button class="btn btn-lg btn-meja" name="meja" idMeja="17"><b>17</b></button></p><br>
                                                    <p><button class="btn btn-lg btn-meja" name="meja" idMeja="18"><b>18</b></button></p><br>
                                                </div>
                                                <button class="btn btn-lg" type="button" id="nextBtnMenu">Next</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    

                                <div class="pages-reservasi page2">
                                <form method="post"  action="Reservasi.php">
                                    <div class="row">
                                        <div class="col-md-push-1 col-sm-10">
                                            <div class="row">
                                                
                                                    
                                                <!--<button type="button" id="nextBtn" onclick="nextPrev(1)"><a href=" ">Next</button>-->
                                                <input type="hidden" id="noMeja" name="meja" value="0">
                                                <label for="cdate" class="col-sm-6 unique">Date
                                                    <input name="date" type="text" id="pdate" data-language='en' required>
                                                </label>

                                                <label for="time-alt" class="col-sm-6 unique">Time
                                                    <input name="time" type="text" id="time-alt" class="timepicker" required>
                                                </label>

                                                 <label for="cpeople" class="col-sm-6 unique">How Many People
                                                    <input name="people" type="number" id="cpeople" min="1" required>
                                                </label>

                                                <label for="cmenu" class="col-sm-6 unique">Menu
                                                    <div id="menu_makanan">
                                                    <br>
                                                    
                                                    <select id="cmenu" name="menu1" class="col-sm-9 unique unique">

                                                    <?php
                                                        include 'connection.php';

                                                        $menu_makanan= "select * from nama_menu";
                                                        $data=mysqli_query($link,$menu_makanan);

                                                        while($row=mysqli_fetch_array($data)){
                                                             $Nama_Menu=$row["Nama_Menu"];
                                                        // $Harga=$row["Harga"];
                                                             echo "<option value1 =\"$Nama_Menu\">" .$Nama_Menu. "</option>";
                                                        
                                                        }
                                                        ?>
                                                     </select>
                                                        
                                                    <input name="jumlah_menu1" type="number" id="cmenu" min="1" required>
                                                    </br>
                                                    </div>
                                                        <span id="tbl_tambah">tambah baru</span>
                                                </label>

                                                <label for="request-alt" class="col-sm-12 unique">Special Request
                                                    <textarea id="request-alt" name="clientrequest" ></textarea>
                                                    <div class="col-sm-12">
                                                        <button class="btn btn-lg" type="button" id="prevBtnMeja">Previous</button> 
                                                        <button type="submit" class="btn-unique" value="BookNow" >Book Now</button>
                                                </div>
                                            </label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div><!-- end modal booking form -->
        </div>
 
       

                       
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
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/smooth.scroll.min.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0dSWcBx-VghzhzQB6oCMTgeXMOhCYTvk"></script>
        <script src="js/map.min.js"></script>
        <script src="js/script.js"></script>

        <script>
            $(document).ready(function(){
                var cnt=1;
                $("#tbl_tambah").click(function(){
                    cnt++;
                    var isi = $("#menu_makanan").html();
                    isi += "<br>";
                    isi += "<select id=\"cmenu\" name=\"menu"+cnt+"\" class=\"col-sm-6 unique unique\">";

                   <?php
                     include 'connection.php';
                    $menu_makanan= "select * from nama_menu";
                    $data=mysqli_query($link,$menu_makanan);
                    while($row=mysqli_fetch_array($data)){
                     $Nama_Menu=$row["Nama_Menu"];

                        echo "isi += \"<option value1 =\\\"$Nama_Menu\\\">" .$Nama_Menu. "</option>\";\n";
                                                        
                    }
                ?>
                    isi += " <input name=\"jumlah_menu"+cnt+"\" type=\"number\" id=\"cmenu\" min=\"1\" required></br>";

                    $("#menu_makanan").html(isi);
                });
                    $("#pdate").datepicker({
                        dateFormat :'yy/mm/dd',
                        changeMonth:true,
                        changeYear:true
                    });
                });
        </script>

        <?php
        if(isset($_GET["gagalregister"])){
            echo "<script>
                alert('data yang dimasukkan salah');

        </script>";
      } 
    ?>
    </body>
</html>