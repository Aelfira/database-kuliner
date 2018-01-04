<?php 
include_once 'koneksi.php';
$kategori = $_POST['kategori'];

$oci = new oci;
$query = $oci->query("INSERT INTO tabel_kategori(kategori) VALUES('$kategori')");
header('location: data-kategori.php');