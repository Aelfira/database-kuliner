<?php 
include 'koneksi.php';
$username = $_POST['username'];
$password = md5($_POST['password']);
$query = mysql_query("SELECT * FROM admin WHERE username='$username' AND password='$password'") or die(mysql_error());
if(mysql_fetch_row($query) > 0) {
	session_start();
	$_SESSION['admin'] = $username;
	header("location: index.php");
} else {
	header("location: login.php");
}