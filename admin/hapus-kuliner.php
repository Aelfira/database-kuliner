<?php 
include 'koneksi.php';
$id = $_GET['id'];
$query = mysql_query("DELETE FROM tabel_kuliner WHERE id_kuliner='$id'") or die(mysql_error());
echo "<script>alert('Data berhasil di hapus.'); location.href='data-kuliner.php'</script>";