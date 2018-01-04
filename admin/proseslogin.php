<?php 
include_once 'koneksi.php';
$username = $_POST['username'];
$password = md5($_POST['password']);
$oci = new oci;
$query = $oci->query("SELECT * FROM admin WHERE username='$username' AND password='$password'");
if($oci->fetch_array($query)) {
	session_start();
	$_SESSION['admin'] = $username;
	header("location: index.php");
} else {
	header("location: login.php");
}