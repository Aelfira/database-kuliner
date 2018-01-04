<?php 
include_once 'koneksi.php';
$id = $_GET['id'];
$oci = new oci;
$query = $oci->query("DELETE FROM tabel_kategori WHERE id_kategori='$id'");
echo "<script>alert('Data berhasil di hapus.'); location.href='data-kategori.php'</script>";