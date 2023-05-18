<?php 
require_once 'dbkoneksi.php';
// simpan data iddel
$delete = $GET['iddel'];
// bikin quear sql
$sql = "DELETE FROM pelanggan WHERE id=?";
// siapin quary
$st = $dbh->prepare($sql);
// ekseskusi
$st->execute([$delete]);

header('location:list_pelanggan.php')

?>