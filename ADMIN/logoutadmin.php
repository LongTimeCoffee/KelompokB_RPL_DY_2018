<?php 
	if(isset($_GET['logoutadmin'])) {
		session_destroy();
		unset($_SESSION['username']);
	}
 ?>