<?php
    session_start();
?>    

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LONGTIME ADMIN</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand">LONGTIME ADMIN</a> 
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Data LongTime</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Daftar Menu</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="datamenu.php">List Menu</a></li>
                             <li><i class="fa fa-table"></i><a href="tambahmenu.php">Tambah Menu</a></li>
                            <li><i class="fa fa-table"></i><a href="deletemenu.php">Delete Menu</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="table.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Daftar Pesanan</a>
                       <ul class="sub-menu children dropdown-menu">
                            <!-- <li><i class="fa fa-table"></i><a href="tes.html">Daftar Meja</a></li> -->
                            <li><i class="fa fa-table"></i><a href="table.php">Daftar Pesanan Pelanggan</a></li>
                        </ul>
                    </li>
                    <li><a href = "page-login.php?logoutadmin='1'">Logout</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <!-- <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar"> -->
                        </a>

                    </div>

                </div>
            </div>

        </header>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <!-- <h1>Dashboard</h1> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            </div> 
           
             <style>
            button {
                background-color: #0d4463;
                position: relative;
                border: none;
                color: white;
                padding: 12px 28px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 13px;
                margin: 4px 2px;
                border-radius: 2px;
                cursor: pointer;
            }
           
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

        <table class="table">
        <thead>
        <tr align="center">
            <th class="text-center">NAMA MENU</th>
            <th class="text-center">CLIENT REQUEST</th>
            <th class="text-center">JUMLAH</th>
            <th class="text-center"> HARGA</th>
        </tr>
    </thead>
     <?php

            include 'connection.php';
            if(isset($_GET['id_pesanan']))
                    $id_pesanan = $_GET['id_pesanan'];

            $sql= "SELECT nama_menu.Nama_Menu, pesan.clientrequest, menu.harga, menu.jumlah FROM menu join nama_menu on nama_menu.id_namamenu = menu.id_namamenu join pesan on pesan.id_pesan=menu.id_pesan where menu.id_pesan='$id_pesanan'";
            $data= mysqli_query($link,$sql);
            //echo mysqli_error($link);
            
   
    while($row = mysqli_fetch_array($data)){
    error_reporting(0);
    $jlh_harga=$row['jumlah'] * $row['harga'];
    $Hasiltotal = $Hasiltotal + $jlh_harga;
            echo '
                <tr align="center">
                <td>'.$row['Nama_Menu'].'</td>
                <td>'.$row['clientrequest'].'</td>               
                <td>'.$row['jumlah'].'</td>
                <td>'.str_replace(",", ".", number_format($jlh_harga)).'</td>
                </tr>';   
            
                }
        ?>
            </tbody>
            
            <tfoot>
                <tr>
                    <th class="text-right" colspan="3">Total</th>
                    <th class="text-center"><?php echo str_replace(",", ".", number_format($Hasiltotal)) ?></th>
                </tr>
            </tfoot>
            </table> 
                <button><a href="table.php"><-BACK</a></button>

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

</body>
</html>
