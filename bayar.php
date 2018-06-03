<?php
	session_start();
	include 'connection.php';
	if(isset($_GET['id_pesanan']))
		$id_pesanan = $_GET['id_pesanan'];
 	
 	$sql= "SELECT sum(harga*jumlah) as totalharga FROM menu where menu.id_pesan='$id_pesanan'";
    $data= mysqli_query($link,$sql);
    $total = mysqli_fetch_assoc($data);

	 $Id_pelanggan = $_SESSION["id_pelanggan"];

	if(mysqli_num_rows($data) > 0){
		var_dump("expression");
		$syntax = "insert into pembayaran values ($Id_pelanggan, $id_pesanan, $total[totalharga])";
		mysqli_query($link, $syntax);
		header('Location: table.php?notif=1');
	}else{
		echo "as";
	}

?>