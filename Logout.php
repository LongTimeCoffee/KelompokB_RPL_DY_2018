<?php

if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['Nama']);
	}
?>