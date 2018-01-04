<?php 
include_once 'koneksi.php';
$id = $_POST['id'];
$kuliner = $_POST['kuliner'];
$lokasi = $_POST['lokasi'];
$kategori = $_POST['kategori'];
$keterangan = $_POST['keterangan'];
$contact = $_POST['contact'];
$lat = $_POST['lat'];
$long = $_POST['long'];

$oci = new oci;
$sql = "UPDATE tabel_kuliner SET kuliner='$kuliner', lokasi='$lokasi', id_kategori=$kategori, keterangan='$keterangan', contact='$contact', lat='$lat', longi='$long' WHERE id_kuliner='$id'";
$query = $oci->query($sql);

if($_FILES['foto']['name'] !== '') {
	$fileName = $id;
	move_uploaded_file($_FILES['foto']['tmp_name'], "../gambar/".$fileName.".jpg");
	$oci->query("UPDATE tabel_kuliner SET foto='{$fileName}.jpg' WHERE id_kuliner = $id");
}
// var_dump($sql);
header('location: data-kuliner.php');

?>