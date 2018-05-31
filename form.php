<?php
	session_start();

include('connection.php');
	if(!empty($_POST)){
		$Id = " ";
		$Nama = htmlentities(strip_tags($_POST["Nama"]));
		$No_hp = htmlentities (Strip_tags($_POST["No_hp"]));
		$Email = htmlentities(Strip_tags($_POST["Email"]));
		$Password = htmlentities(strip_tags(hash('sha256', $_POST["Password"]))); 
		$Confirm_password = htmlentities(strip_tags(hash('sha256', $_POST["Password"])));
		
		if($Password == $Confirm_password){
			$Password = htmlentities(strip_tags(hash('sha256', $_POST["Password"])));

		$syntax= "insert into akun values ('$Id','$Nama','$No_hp','$Email','$Password')";
		$SignUp = mysqli_query($link,$syntax);
		
		
		if($SignUp){
			$_SESSION ['message']= "you are now logged in";
			$_SESSION ['Nama']= $Nama;
			header("HTTP/1.1 302 Moved Temporarily");
			//header("location : SignIn.php");
			header("location : index.php");
			exit();

		} else{
			header("HTTP/1.1 302 Moved Temporarily");
			header("location : SignUp.php?gagalregister");
			$error = "Username / password combination incorrect";

			//$_SESSION ['message'] = "the password do not match";
				} 

		}else{
			header("HTTP/1.1 302 Moved Temporarily");
			header("location : SignUp.php?gagalregister");
			$error = "Username / password combination incorrect";
		}

	}else {
		die(mysqli_error($link));
	}
?>