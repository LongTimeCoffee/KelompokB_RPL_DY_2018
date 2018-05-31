<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <style>

            class-center{
                font-size: 30pt;

            }
            table {
                font-family: PT serif ,arial, sans-serif, ;
                font-size: 30 px;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: center;
                padding: 8px;

            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>

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
                            <div class="navbar-buttons">
                        <div class="navbar-header"><a href="index.html" class="navbar-brand"><alt="Italiano" width="100">LongTime
                            <div class="navbar-buttons">
                                <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle navbar-btn">Menu<i class="fa fa-align-justify"></i></button>
                            </div>
                        </div>
                        <div id="navigation" class="collapse navbar-collapse navbar-right">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#hero">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#menu">Menu</a></li>
                                <li><a href="#gallery">Gallery</a></li>
                                <?php
                                if(isset($_SESSION['Nama'])){
                                    echo "<li><a href=\"#OrderHistory\">History Order</a></li>";
                                }
                                ?>
                                 <li><a href="#contact">Contact</a></li>
                                 <?php
                                    if(isset($_SESSION['Nama'])){
                                        echo "<li><a href=\"index.php?logout='1'\">Logout</a></li> ";
                                    }
                                    else{
                                        echo " <li><a href=\"SignIn.php\"><u>Login</u></a></li>";
                                    }
                                ?>
                            </ul>
                            <?php
                               if(isset($_SESSION['Nama'])){
                                  echo " <a class=\"btn navbar-btn btn-unique hidden-sm hidden-xs\" id=\"open-reservation\">Make a Reservation</a>";
                                }
                            ?>
                        </div>
                    </div>
                </nav>
            </header><!-- End Navbar -->


         <div class="Order" class="Order">
                <section id=OrderHistory class="Order">
                    <div class="container">
                        <header>
                        <h1 class="header text-center">History Order</h1>
                        <h3 class="header text-center">Your Order </h3>
                        </header>
                        
                         <table class="table">
                            <thead>
                            <tr align="center">
                            <th class="text-center"><b>JUMLAH ORANG</b></th>
                            <th class="text-center"><b>NAMA MENU</b></th>
                            <th class="text-center"><b>SPESIAL REQUEST</b></th>
                            <th class="text-center"><b>JUMLAH</b></th>
                            <th class="text-center"><b>HARGA</b></th>
                            </tr>
                        </thead>
                       
                    <?php
                    include 'connection.php'; 
                    if(!isset($_GET['id_pesanan'])){
                        header("HTTP/1.0 404 Not Found");
                        die();
                    }

                    $id_pesanan = $_GET['id_pesanan'];

                    //$Nama= $_SESSION["Nama"];
                    //$sql = "SELECT akun.id_pelanggan,akun.Nama,akun.No_hp, pesan.meja,pesan.date,pesan.time,pesan.people,pesan.clientrequest,menu.id_namamenu,menu.jumlah,menu.harga,nama_menu.Nama_Menu,nama_menu.Harga From akun join pesan on akun.id_pelanggan=pesan.id_pelanggan join menu on pesan.id_pesan=menu.id_pesan join nama_menu on menu.id_namamenu=nama_menu.id_namamenu where akun.Nama= '$Nama'";
                    $sql = "SELECT menu.*, nama_menu.Nama_Menu, pesan.clientrequest, pesan.people FROM `menu` join nama_menu on nama_menu.id_namamenu = menu.id_namamenu join pesan on pesan.id_pesan = menu.id_pesan where menu.id_pesan=$id_pesanan";
                    $data = mysqli_query($link, $sql);
                    

                    while($row = mysqli_fetch_array($data)){
                    error_reporting(0);
                    $total= $row['jumlah'] * $row['harga'];
                    $Hasiltotal = $Hasiltotal + $total;
                             
                               
                                echo"<tr align='center'>
                                    <td>".$row['people']."</td>
                                    <td>".$row['Nama_Menu']."</td>
                                    <td>".$row['clientrequest']."</td>
                                    <td>".$row['jumlah']."</td>   
                                    <td>".str_replace(",", ".", number_format($total))."</td>
                                    </tr>";
                     }     
                    ?>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="text-right" colspan="4">Total</th>
                                <th class="text-center"><?php echo str_replace(",", ".", number_format($Hasiltotal)) ?></th>
                            </tr>
                        </tfoot>
                        </table>
                         <td class="text-center"><a href=index.php#OrderHistory><b>Back</b></a></td>
                    </div>
                </section>
            </div>

    </body>
</html>

