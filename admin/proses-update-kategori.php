<?php 
include_once 'koneksi.php';
$id = $_POST['id'];
$kategori = $_POST['kategori'];

$query = $oci->query("UPDATE tabel_kategori SET kategori='$kategori' WHERE id_kategori='$id'");
header('location: data-kategori.php');