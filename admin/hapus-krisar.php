<?php 
include 'koneksi.php';
$id = $_GET['id'];
$query = mysql_query("DELETE FROM tabel_tamu WHERE id_tamu='$id'") or die(mysql_error());
echo "<script>alert('Data berhasil di hapus.'); location.href='krisar.php'</script>";