<?php
include 'koneksi.php';
session_start();
$email = $_POST['email'];
$password = md5($_POST['password']);
$query = mysql_query("SELECT * FROM tabel_user WHERE email='$email' AND password='$password'") or die(mysql_error());
if(mysql_fetch_row($query) > 0) {
	$query = mysql_query("SELECT * FROM tabel_user WHERE email='$email' AND password='$password'") or die(mysql_error());
	$data = mysql_fetch_array($query);
	$_SESSION['id_user'] = $data['id_user'];
	$_SESSION['email'] = $email;
	$_SESSION['nama'] = $data['nama'];
	header("location: index.php");
} else {
	echo "<script>alert('Login gagal!'); location.href='index.php'</script>";
}