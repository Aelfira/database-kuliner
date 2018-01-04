<?php 
include_once 'koneksi.php';
$kuliner = $_POST['kuliner'];
$lokasi = $_POST['lokasi'];
$id_kategori = $_POST['kategori'];
$keterangan = $_POST['keterangan'];
$contact = $_POST['contact'];
$lat = $_POST['lat'];
$long = $_POST['long'];

$oci = new oci;
$query = $oci->query("INSERT INTO tabel_kuliner(kuliner, lokasi, id_kategori, keterangan, contact, tgl_dibuat, lat, longi) VALUES('$kuliner', '$lokasi', '$id_kategori', '$keterangan', '$contact', sysdate, '$lat', '$long')");
$ed = $oci->query("select seq_kuliner.currval from dual");

if($_FILES['foto']['name'] !== '') {
	$fileName = $oci->fetch_array($ed)[0];
	move_uploaded_file($_FILES['foto']['tmp_name'], "../gambar/$fileName.jpg");
	$oci->query("UPDATE tabel_kuliner SET foto='{$fileName}.jpg' WHERE id_kuliner = $fileName");
}
header('location: data-kuliner.php');