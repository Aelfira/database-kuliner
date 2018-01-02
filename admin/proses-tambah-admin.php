<?php 
include 'koneksi.php';
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysql_query("INSERT INTO admin(username, password) VALUE('$username', '$password')") or die(mysql_error());


header('location: data-admin.php');