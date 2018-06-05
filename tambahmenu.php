

<?php
$koneksi = mysqli_connect("localhost","root","","rpl");

?>

<!DOCTYPE html>
<html>
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

    
    
        <style>

            td {
                color: black;
            }            
            .insert {
                color: black;
            }
            .h3 {
                color: black;
            }
            
           
            
</style>
        
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
                        <a href="indexadmin.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
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
                                <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>
                        	
                        <div class="col-sm-9">
                        	
                        	<div class="form-box" action="#">
                        		<div class="form-top">
	                        		<div class="form-top-left">
                                        <br/>
                                         <br/>
                                         
                            
	                        			<h2>Perhatian</h2>
                                        <h5>Di Mohon Bagi Pelayan Untuk Memperhatikan Menu Makanan Atau Minuman Yang Akan Di Input:</h5>
                                        <br/>
                                      
<div class="insert">

  <form action="actioninsertdata.php" method="post">
    <div class="form-group">
      <label for="menu">Nama Menu</label>
      <input type="name" class="form-control" value="" placeholder="Masukan Nama Menu" name="menu">
    </div>
    <div class="form-group">
      <label for="kategori">Kategori</label>
      <input type="text" class="form-control"  value="" placeholder="Masukan Kategori" name="kategori">
    </div>
        <div class="form-group">
      <label for="harga">Harga</label>
      <input type="text" class="form-control" value="" placeholder="Masukan Harga" name="harga">
    </div>
   
    <button type="submit" class="btn btn-default">Tambah Menu</button>
  </form>
</div>  

									
			                    </div>
                        	</div>
                        	
                        </div>
		</div>	
        </div>
            

      
         <!-- .content -->
    </div><!-- /#right-panel -->

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
