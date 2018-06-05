<?php
	session_start();
	include('connection.php');
	if(!empty($_POST)){
		$id_admin=" ";
		$username = htmlentities(strip_tags($_POST["username"]));
		$email = htmlentities(strip_tags($_POST["email"]));
		$password = htmlentities(strip_tags(hash('sha256', $_POST["password"])));
		$Confirm_password = htmlentities(strip_tags(hash('sha256', $_POST["password"])));

		if($password == $Confirm_password){
			$Password = htmlentities(strip_tags(hash('sha256', $_POST["password"])));

		$syntax= "insert into admin values('$id_admin','$username','$email','$password')";
		$data = mysqli_query($link, $syntax);

		if($data){
			$_SESSION['id_admin']=$id_admin;
			$_SESSION['username']= $username;
			header("HTTP/1.1 302 Moved Temporarily");
			header('location : indexadmin.php') ;
			exit();
		}
		else {
			header("HTTP/1.1 302 Moved Temporarily");
			header('location : page-register.php?gagalregister');
			}
		}else{
			header("HTTP/1.1 302 Moved Temporarily");
			header("location : page-register.php?gagalregister");
			}

		}else{
			die(mysqli_error($link));
		}
?>
	<?php
        if(isset($_GET["gagalregister"])){
            echo "<script>
                alert('data yang dimasukkan salah');
        </script>";
      } 
    ?>