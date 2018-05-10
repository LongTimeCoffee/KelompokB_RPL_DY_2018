<?php
include('connection.php');

session_start();
if(isset($_GET['logout'])){
session_destroy();
unset($_SESSION['id_pelanggan']);
header("location : SignIn.php");
?>