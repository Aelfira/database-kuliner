<?php 
include 'koneksi.php';
$kategori = $_POST['kategori'];

$query = mysql_query("INSERT INTO tabel_kategori(kategori) VALUE('$kategori')") or die(mysql_error());
header('location: data-kategori.php');