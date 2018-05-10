<?php
	session_start();
	include ('connection.php');
	if(!empty($_POST)){

		$Id_pelanggan = " ";
		$Nama = htmlentities(strip_tags($_POST["Nama"]));	
		$Password = htmlentities(strip_tags(hash('sha256', $_POST["Password"])));


	$syntax= "select * from akun where Nama ='$Nama' and Password = '$Password' ";

		$login= mysqli_query($link,$syntax);
		if ($login){


			if(mysqli_num_rows($login) == 1){
			$var = mysqli_fetch_assoc($login);

			$_SESSION['id_pelanggan'] = $var["id_pelanggan"]; 
			$_SESSION['Nama'] = "$Nama";
			header("HTTP/1.1 302 Moved Temporarily");
			header("location: index.php");
			exit();

		} else {
			$error = "Username/ password combination incorrect";
			header("HTTP/1.1 302 Moved Temporarily");
			header("location: SignIn.php");
			exit();
			//$_SESSION['message'] = "Username/ password combination incorrect";

		}
	} else {

		die(mysqli_error($link));
	}

}
?>