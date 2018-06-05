<?php
	session_start();
	include ('connection.php');
	
	if(!empty($_POST)){
		$id_admin=" ";
		$username = htmlentities(strip_tags($_POST["username"]));
		$password = htmlentities(strip_tags(hash('sha256', $_POST["password"])));	
		
 
	$syntax = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
		$data=mysqli_query($link, $syntax);
		if($data){
		if(mysqli_num_rows($data) > 0){
			$var = mysqli_fetch_assoc($data);
			$_SESSION['id_admin'] = $var["id_admin"]; 
			$_SESSION['username'] = "$username";
			header("HTTP/1.1 302 Moved Temporarily");
			header("location: indexadmin.php");
			exit();
		}
		else{
			$error = "Username/password combination incorrect";
			echo $error;
			//header("HTTP/1.1 302 Moved Temporarily");
			//header("location: page-login.php");
			exit();
		}
	}else{
		die(mysqli_error($link));
		}
	}

?>