<?php

require 'dbconnection.php';
$id_namamenu = $_GET['id_namamenu'];
$sql = 'DELETE FROM nama_menu WHERE id_namamenu=:id_namamenu';
$statement = $connection->prepare($sql);
if ($statement->execute([':id_namamenu' => $id_namamenu])) {
  header("Location: ../ADMIN/deletemenu.php"); 
}
