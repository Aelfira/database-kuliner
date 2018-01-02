<?php 
session_start();
include "koneksi.php";
$komentar=$_POST['Komentar'];
$id_user=$_SESSION['id_user'];
$id_kuliner=$_POST['id_kuliner'];

mysql_query("insert into tabel_komentar (komentar, id_user, id_kuliner, tgl_komentar) values('$komentar', '$id_user', '$id_kuliner', NOW())") OR DIE (mysql_error());
header("location:index.php");
 ?>}
