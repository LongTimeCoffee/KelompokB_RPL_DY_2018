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

<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
		<title>Form Login</title>
			<link rel="stylesheet" href="style.css" type="text/css">
	</head>

	<body>
		<div class="Loginbox">
			<p>
				<?php 
					if(isset($error)){
					echo $error;
					}
					?>
				</p>	
			<h1>Sign In</h1>
				<form action = "SignIn.php" method ="post">							
					<input type="text" name="Nama" placeholder="Nama" required>
					<input type="password" name="Password" placeholder="Password" required>
					<input type="submit" name="login" value="login">
					<p>Not yet a member?<a href="SignUp.php">Sign Up</a></p>
	
				</form>
			</div>
	</body>
</html>
 