<?php
include 'koneksi.php';
$email = $_POST['email'];
$nama = $_POST['nama'];
$password = md5($_POST['password']);
mysql_query("INSERT INTO tabel_user(email, nama, password, tgl_daftar) VALUES('$email', '$nama', '$password', NOW())") or die(mysql_error());
session_start();
$_SESSION['email'] = $email;
$_SESSION['nama'] = $nama;
$_SESSION['id_user'] = mysql_insert_id();
header("location: index.php");