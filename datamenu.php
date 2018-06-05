
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
.container {
  position: relative;
  width: 200%;
}

.image {
  display: block;
  width: 50%;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: auto;
  width: 50%;
  opacity: 0;
  transition: .5s ease;
  background-color: #14ad2b;
}

.container:hover .overlay {
  opacity: 1;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: left;
}
</style>
    
        <style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #dddddd }

th {
    background-color: blue;/*#4CAF50*/
    color: white; /*WHITE*/
}
 .tabb h3 {
     color: green;/*WHITE*/
}  
            td {
                color: black;
            }            
            .insert {
                color: white;
            }
           
            

            
</style>
        
</head>
<body>
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

         <div class="col-sm-9">
            <div class="form-box" action="#">
               <div class="form-top">
	               <div class="form-top-left">
                       <center>  <h3>Daftar Menu Makanan Dan Minuman </h3></center>
                       <br/>
                       
	               </div>
	               
	           </div>
	           <div class="form-bottom">
                
                   <div class="tabb">
                   
 
                       
                           
                        <table>
                          <tr>
                          
                            <th>Nama_Menu</th>
                                <th>Kategori</th>
                            <th>Harga</th>
                              
                       <?php
                        $result=mysqli_query($koneksi, "SELECT * FROM nama_menu");
                         ?>
                              <?php while($row=mysqli_fetch_assoc($result)): ?>
                        
                        </tr>
                    <tr>
                      <td><?php echo $row["Nama_Menu"];?></td>
                      <td><?php echo $row["Kategori"];?></td>
                      <td><?php echo $row["Harga"];?></td>
                         
                    </tr>
                            <?php endwhile; ?>

                       </table>
                           
                       
                       
                       
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
