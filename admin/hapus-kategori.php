<?php 
include 'koneksi.php';
$id = $_GET['id'];
$query = mysql_query("DELETE FROM tabel_kategori WHERE id_kategori='$id'") or die(mysql_error());
echo "<script>alert('Data berhasil di hapus.'); location.href='data-kategori.php'</script>";