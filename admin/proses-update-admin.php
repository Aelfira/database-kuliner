<?php 
include_once 'koneksi.php';
$id = $_POST['id'];
$username= $_POST['username'];
$password = $_POST['password'];

$oci = new oci;

$query = $oci->query("UPDATE admin SET username='$username', password='$password' WHERE username='$id'");
header('location: data-admin.php');