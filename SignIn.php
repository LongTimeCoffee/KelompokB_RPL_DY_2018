<?php
	include 'formsignin.php';
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
				<form action = "formsignin.php" method ="post">							
					<input type="text" name="Nama" placeholder="Nama" required>
					<input type="password" name="Password" placeholder="Password" required>
					<input type="submit" name="login" value="login">
					<p>Not yet a member?<a href="SignUp.php">Sign Up</a></p>
				</form>
			</div>
	</body>
</html>


 