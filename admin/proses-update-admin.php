<?php 
include 'koneksi.php';
$id = $_POST['id'];
$username= $_POST['username'];
$password = $_POST['password'];

$query = mysql_query("UPDATE admin SET username='$username', password='$password' WHERE username='$id'") or die(mysql_error());
header('location: data-admin.php');