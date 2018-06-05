<?php
$dsn = 'mysql:host=localhost;dbname=rpl';
$username = 'root';
$password = '';
$options = [];
try {
$connection = new PDO($dsn, $username, $password, $options);
} catch(PDOException $e) {


}