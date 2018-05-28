<?php 
include 'connection.php';

$sql = "SELECT pesan.meja, pesan.date, pesan.time, pesan.people, pesan.clientrequest, menu.nama_menu, menu.jumlah from pesan join menu on pesan.id_pesan=menu.id_pesan";

    // "SELECT akun.id_pelanggan, akun.Nama, pesan.meja, pesan.date, pesan.time, pesan.people, pesan.clientrequest, menu.nama_menu, menu.jumlah from akun join pesan on akun.id_pelanggan=pesan.id_pelanggan join menu on pesan.id_pesan=menu.id_pesan";
$query = mysqli_query($conn, $sql);
if (!$query) {
	die('SQL error: '.mysqli_error($conn));
}

// echo '<table>
// 		<head>
// 			<tr>
// 				<th>ID PESAN</th>
// 				<th>NOMOR MEJA</th>
// 				<th>TANGGAL</th>
// 				<th>WAKTU</th>
// 				<th>BANYAK ORANG</th>
// 				<th>CLIENT REQUEST</th>
// 			</tr>
// 		</head>
// 		</table>';

// 	while ($row = mysqli_fetch_assoc($query))
//    {
// 	echo '<table>
// 			<head>
// 				<tr>
// 				<td>'.$Id_pesan = $row['id_pesan'].'</td>
// 				<td>'.$Meja = $row['meja'].'</td>
// 				<td>'.$Date = $row['date'].'</td>
// 				<td>'.$Time = $row['time'].'</td>
// 				<td>'.$People = $row['people'].'</td>
// 				<td>'.$Request = $row['clientrequest'].'</td>	
// 				</tr>	
// 			</head>
// 			</table>';
// }

?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
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
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
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
                        <!-- <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Buttons</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Badges</a></li>
                            <li><i class="fa fa-bars"></i><a href="ui-tabs.html">Tabs</a></li>
                            <li><i class="fa fa-share-square-o"></i><a href="ui-social-buttons.html">Social Buttons</a></li>
                            <li><i class="fa fa-id-card-o"></i><a href="ui-cards.html">Cards</a></li>
                            <li><i class="fa fa-exclamation-triangle"></i><a href="ui-alerts.html">Alerts</a></li>
                            <li><i class="fa fa-spinner"></i><a href="ui-progressbar.html">Progress Bars</a></li>
                            <li><i class="fa fa-fire"></i><a href="ui-modals.html">Modals</a></li>
                            <li><i class="fa fa-book"></i><a href="ui-switches.html">Switches</a></li>
                            <li><i class="fa fa-th"></i><a href="ui-grids.html">Grids</a></li>
                            <li><i class="fa fa-file-word-o"></i><a href="ui-typgraphy.html">Typography</a></li>
                        </ul> -->
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Daftar Pesanan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="tes.html">Daftar Meja</a></li>
                            <li><i class="fa fa-table"></i><a href="table.php">Daftar Pesanan</a></li>
                        </ul>
                    </li>

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
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>

        </header>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
        <style> 
        .baris {
            text-align: center;
            padding: 16px;
        }
        .table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: solid #1c1c1c;
        }
        }
        </style>
    <?php   
    echo '<table>
    <thead>
        <tr class= "table">
            <th>ID PELANGGAN</th>
            <th>NAMA</th>
            <th>NOMOR MEJA</th>
            <th>TANGGAL</th>
            <th>WAKTU</th>
            <th>BANYAK ORANG</th>
            <th>CLIENT REQUEST</th>
            <th>NAMA MENU</th>
            <th>JUMLAH</th>
        </tr>
    </thead>
    <tbody>';
 
    while ($row = mysqli_fetch_assoc($query))
   {
    echo '
                <tr class = "baris">
                <td>'.$Id_pelanggan = $row['id_pelanggan'].'</td>
                <td>'.$Meja = $row['meja'].'</td>
                <td>'.$Date = $row['date'].'</td>
                <td>'.$Time = $row['time'].'</td>
                <td>'.$People = $row['people'].'</td>
                <td>'.$Request = $row['clientrequest'].'</td>
                <td>'.$NamaMenu = $row['nama_menu'].'</td>
                <td>'.$Jumlah = $row['jumlah'].'</td>
                </tr>';   
            
}
        echo '
            </tbody>
            </table>';
            ?>

            
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



