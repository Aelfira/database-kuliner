<?php 
include_once 'koneksi.php';
$id = $_GET['id'];
$oci = new oci;
$query = $oci->query("DELETE FROM tabel_kuliner WHERE id_kuliner='$id'");
echo "<script>alert('Data berhasil di hapus.'); location.href='data-kuliner.php'</script>";