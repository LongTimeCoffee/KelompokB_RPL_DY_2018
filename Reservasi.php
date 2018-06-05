<?php
	include ('connection.php');
	session_start();

		if(!empty($_POST)){
			$Id_pelanggan = $_SESSION["id_pelanggan"];
			$Meja = htmlentities(Strip_tags($_POST["meja"])); 
			$Date = htmlentities(Strip_tags($_POST["date"]));
			$Time = htmlentities(Strip_tags($_POST["time"]));
			$People = htmlentities(Strip_tags($_POST["people"]));
			$clientrequest = htmlentities(Strip_tags($_POST["clientrequest"]));

			$syntax = "insert into pesan (id_pesan,id_pelanggan,meja,date,time,people,clientrequest) values(DEFAULT,'$Id_pelanggan','$Meja','$Date','$Time','$People','$clientrequest')";
			$BookNow = mysqli_query($link,$syntax);

			if($BookNow){
				$cnt=1;
				$Pesan_qr= mysqli_query($link,"SHOW TABLE STATUS LIKE 'pesan'");
				$Pesan_data = mysqli_fetch_assoc($Pesan_qr);
				$Id_pesan=$Pesan_data["Auto_increment"]-1;
				while(isset($_POST["menu".$cnt])){
					$Id_menu = " ";
					$id_namamenu = htmlentities(Strip_tags($_POST["menu".$cnt]));
					$Jumlah = htmlentities(Strip_tags($_POST["jumlah_menu".$cnt]));
					list($id_namamenu,$harga) = explode('|', $_POST["menu".$cnt]);

					$temp = "insert into menu(id_menu, harga, id_namamenu, jumlah, id_pesan) values(DEFAULT, '$harga', $id_namamenu, '$Jumlah', '$Id_pesan')";
					$input_menu = mysqli_query($link, $temp);
					if(!$input_menu){
						die(mysqli_error($link));
					}
					$cnt++;
				}

				// $sql = "update meja set status= '1' where No_meja = '$Meja'";
				// $result = mysqli_query($link, $sql);

				//header("location:index.php#reservation-modal");
				header("location:index.php?berhasilbook");
					//echo "<script>
                		//alert('Booking berhasil dilakukan');
        			//</script>";
			}
			else{
				die(mysqli_error($link));
				//header("location: index.php#reservation-modal");
			}

		}else {
		die(mysqli_error($link));
	}
?>