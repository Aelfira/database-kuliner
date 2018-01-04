<?php 
include_once 'koneksi.php';
$id = $_GET['id'];
$oci = new oci;
$query = $oci->query("DELETE FROM tabel_tamu WHERE id_tamu='$id'");
echo "<script>alert('Data berhasil di hapus.'); location.href='krisar.php'</script>";