
<!DOCTYPE html>
<html>
<head>
<title>Smooth Sliding Forms a Flat Responsive Widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smooth Sliding Forms template Responsive, Login form web template,Flat Pricing w3tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->

<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->

<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Cormorant+Unicase:300,400,500,600,700" rel="stylesheet"><!--web font-->
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main agileits-w3layouts">
		<h1>Please Fill this form Bellow</h1>
		<div class="main-agileinfo"> 
			<div class="agileui-forms">
				<div class="container-form">
					<div class="form-item log-in"><!-- login form-->
						<div class="w3table agileinfo"> 
							<div class="w3table-cell register"> 
								<div class="w3table-tophead">
									<h2>Sign in</h2>
								</div>
								<form action="formsignin.php" method="post"> 
									<div class="fields-grid">
										<div class="styled-input agile-styled-input-top">
											<input type="text" name="Nama" required=""> 
											<label>Username</label>
											<span></span>
										</div>
										<div class="styled-input">
											<input type="Password" name="Password" required="">
											<label>Password</label>
											<span></span>
										</div>
										<a href="#">forgot password?</a>										
										<input type="submit" value="Sign in"> 
									</div>
									

								</form>  
							</div>
						</div>
					</div>
					<div class="form-item sign-up"><!-- sign-up form-->
						<div class="w3table w3-agileits">
							<div class="w3table-cell register">   
									<h3>Sign up</h3>
								<form action="form.php" method="post">
									<div class="fields-grid">
										<div class="styled-input agile-styled-input-top">
											<input type="text" name="Nama" required=""> 
											<label>Name</label>
											<span></span>
										</div>
										<div class="styled-input">
											<input type="tel" name="No_hp" required="">
											<label>Phone Number</label>
											<span></span>
										</div>
										<div class="styled-input">
											<input type="email" name="Email" required="">
											<label>Email</label>
											<span></span>
										</div>
										<div class="styled-input">
											<input type="password" name="Password" required="">
											<label>Password</label>
											<span></span>
										</div>
										<div class="styled-input">
											<input type="password" name="Password" required="">
											<label>Confirm Password</label>
											<span></span>
										</div>
										<div class="clear"> </div>
										<!--  <label class="checkbox"><input type="checkbox" name="checkbox" checked><i></i>I agree to the <a href="#">Terms and Conditions</a></label> -->
									</div>
									<input type="submit" value="Sign up">
								</form>

							</div>
						</div>
					</div>
				</div>
				<div class="container-info">
					<div class="info-w3lsitem">
						<div class="w3table">
							<div class="w3table-cell">
								<p> Have an account? </p>
								<div class="btn"> Sign in </div>
							</div>
						</div>
					</div>
					<div class="info-w3lsitem">
						<div class="w3table">
							<div class="w3table-cell">
								<p> Dont have an account?</p>
								<div class="btn">Sign up</div>
							</div>
						</div>
					</div>
					<div class="clear"> </div>
				</div> 
				
				
			</div> 
		</div>	
	</div>   
	<!-- //main -->
	<!-- copyright -->
	<!-- <div class="copyw3-agile">
		<p> © 2017 Smooth Sliding Forms . All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts.</a></p>
	</div> -->
	<!-- //copyright --> 
	<!-- js -->  
	<script  src=" js/jquery-1.12.3.min.js"></script> 
	<script>
		$(".info-w3lsitem .btn").click(function() {
			  $(".main-agileinfo").toggleClass("log-in");
			});
			$(".container-form .btn").click(function() {
			  $(".main-agileinfo").addClass("active");
		});
	</script>
	<!-- //js --> 
</body>
</html>