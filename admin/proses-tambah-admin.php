<?php 
include_once 'koneksi.php';
$username = $_POST['username'];
$password = md5($_POST['password']);

$oci = new oci;
$query = $oci->query("INSERT INTO admin(username, password) VALUES('$username', '$password')");


header('location: data-admin.php');