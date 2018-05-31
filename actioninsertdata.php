<?php

$server = "localhost";
$user   = "root";
$password   = "";
$dbname     = "rpl";




$conn = mysqli_connect($server, $user, $password, $dbname);

if (!$conn){
    die("gagal connect : " . mysqli_connect_error());
    
}


$menu =$_POST['menu'];
$kategori =$_POST['kategori'];
$harga =$_POST['harga'];

$sql = "INSERT INTO nama_menu (Nama_Menu, Kategori, Harga) VALUES ('$menu','$kategori','$harga')";

if (mysqli_query($conn, $sql))
{  
  header("Location: /admin2/tambahmenu.php");
}
else {
    echo "Error :" . $sql . mysqli_error($conn);
}
mysqli_close($conn);
?>