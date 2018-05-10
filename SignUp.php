<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
		<title>Form Register</title>
			<link rel="stylesheet" href="style.css" type="text/css">
			
			
	</head>

	<body>
		
		<div class="Loginbox">
			<img src="img_avatar2.png" class="avatar">
			<h1>Sign Up</h1>
				<form action="form.php" method="post">
					<input type="text" name="Nama" placeholder="Name" required>
					<input type="text" name="No_hp" placeholder="Number Phone" size="12" required>
					<input type="email" name="Email" placeholder="Email" required>
					<input type="password" name="Password" placeholder="Password" required>
					<input type="password" name="Password" placeholder="Confirm password" required>
					<input type="submit" name="submit" value="SignUp">
					Already a member? <a href = "SignIn.php">Sign in</a>
				</form>

				
			</div>
	</body>
</html>
 