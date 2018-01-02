<?php 
include 'koneksi.php';
$id = $_POST['id'];
$kuliner = $_POST['kuliner'];
$lokasi = $_POST['lokasi'];
$kategori = $_POST['kategori'];
$keterangan = $_POST['keterangan'];
$contact = $_POST['contact'];
$lat = $_POST['lat'];
$long = $_POST['long'];
$query = mysql_query("UPDATE tabel_kuliner SET kuliner='$kuliner', lokasi='$lokasi', id_kategori='$kategori', keterangan='$keterangan', contact='$contact', lat='$lat', `long`='$long' WHERE id_kuliner='$id'")
or die(mysql_error());

if($_FILES['foto']['name'] !== '') {
	$fileName = $id;
	move_uploaded_file($_FILES['foto']['tmp_name'], "../gambar/".$fileName.".jpg");
	mysql_query("UPDATE tabel_kuliner SET foto='{$fileName}.jpg' WHERE id_kuliner = $id");
}
header('location: data-kuliner.php');

?>