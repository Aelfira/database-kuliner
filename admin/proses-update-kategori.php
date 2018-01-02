<?php 
include 'koneksi.php';
$id = $_POST['id'];
$kategori = $_POST['kategori'];

$query = mysql_query("UPDATE tabel_kategori SET kategori='$kategori' WHERE id_kategori='$id'") or die(mysql_error());
header('location: data-kategori.php');