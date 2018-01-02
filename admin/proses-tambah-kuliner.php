<?php 
include 'koneksi.php';
$kuliner = $_POST['kuliner'];
$lokasi = $_POST['lokasi'];
$id_kategori = $_POST['kategori'];
$keterangan = $_POST['keterangan'];
$contact = $_POST['contact'];
$lat = $_POST['lat'];
$long = $_POST['long'];
$query = mysql_query("INSERT INTO tabel_kuliner(kuliner, lokasi, id_kategori, keterangan, contact, tgl_dibuat, lat, `long`) VALUE('$kuliner', '$lokasi', '$id_kategori', '$keterangan', '$contact', NOW(), '$lat', '$long')") or die(mysql_error());

if($_FILES['foto']['name'] !== '') {
	$fileName = mysql_insert_id();
	move_uploaded_file($_FILES['foto']['tmp_name'], "../gambar/$fileName.jpg");
	mysql_query("UPDATE tabel_kuliner SET foto='{$fileName}.jpg' WHERE id_kuliner = $fileName") or die(mysql_error());
}
header('location: data-kuliner.php');