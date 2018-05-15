<?php
	if(!isset($_COOKIE["email"]))
	{
		header ("location: ../formLogin/hal_logregis_admin.php");
	}
?>

<?php
$koneksi = mysqli_connect("localhost","root","","listmenu");

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        	<meta name="description" content="">
		<meta name="author" content="">
        <title>Halaman Data Menu</title>
        
        		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
        
        	<!-- Stylesheet
			================================================== -->
		<link rel="stylesheet" type="text/css"  href="css/style.css">
		<link rel="stylesheet" type="text/css"  href="css/grs.css">
        
        
		<!-- new -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="../formLogin/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../formLogin/assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="../formLogin/assets/css/form-elements.css">
        <link rel="stylesheet" href="../formLogin/assets/css/style.css">
        <link rel="stylesheet" href="../formLogin/assets/css/msg.css">
		<link rel="stylesheet" href="css/grs.css">
		
		<link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../formLogin/assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../formLogin/assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../formLogin/assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../formLogin/assets/ico/apple-touch-icon-57-precomposed.png">
        <style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #4CAF50 }

th {
    background-color: blue;/*#4CAF50*/
    color: white; /*WHITE*/
}
 .tabb h3 {
     color: green;/*WHITE*/
}  
            td {
                color: white;
            }            
            
            
</style>
        
        
    </head>
    
    <nav id="menu" class="navbar navbar-default navbar-fixed-top">
		<div class="container"> 
            <div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			<a class="navbar-brand page-scroll" href="#">LongTimeCoffee
                <i class="fa fa-play fa-rotate-270"></i></a>
    </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
                <li><a href="adminHomePage.php" class="page-scroll"><b>Home</b></a></li>
                <li><a href="daftarpesanan.php" class="page-scroll"><b>Daftar Pesanan</b></a></li>
                <li><a href="datamenu.php" class="page-scroll"><b>Data Menu</b></a></li>
				<li><a href="../logout.php">Logout</a></li>
			</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<div class="grs">
			<p>&nbsp </p>
		</div>
		
		<!-- /.container-fluid -->
		</nav>
    <!-- Header -->
		<header id="header">
		<div class="intro2">
		<br>
		<div class="col-sm-5">
            <div class="form-box" action="#">
               <div class="form-top">
	               <div class="form-top-left">
                       <h3>Tabel Data Menu Makanan Dan Minuman LongTime Restauran</h3>
	               </div>
	               <div class="form-top-right">
	                   	<i class="fa fa-pencil"></i>
	               </div>
	           </div>
	           <div class="form-bottom">
                
                   <div class="tabb">
                   
 
                       
                           
                        <table>
                          <tr>
                          <th>Jenis</th>
                            <th>Produk Makanan dan Minuman</th>
                            <th>Harga</th>
                       <?php
                        $result=mysqli_query($koneksi, "SELECT * FROM menu");
                         ?>
                              <?php while($row=mysqli_fetch_assoc($result)): ?>
                        
                        </tr>
                    <tr>
                      <td><?php echo $row["jenis"];?></td>
                      <td><?php echo $row["jenis_menu"];?></td>
                      <td><?php echo $row["harga"];?></td>
                    </tr>
                            <?php endwhile; ?>

                       </table>
                           
                       
                       
                       
                   </div> 
          	</div>
            </div>        	
        </div>
		</div>
		</header>
		
		<!-- footer -->
		<div id="footer">
		<div class="container text-center">
			<div class="fnav">
			<p>Copyright &copy; 2018 LongTimeCoffee. Designed by <a href="#" rel="nofollow">Medi Darmawan</a></p>
			</div>
		</div>
		</div>
    
    <body>
    </body>
</html>