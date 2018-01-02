<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];
$query = mysql_query("INSERT INTO tabel_tamu(nama, email, pesan) VALUE('$nama', '$email', '$pesan')") or die(mysql_error());
echo "<script>alert('Pesan sudah dikirim!'); location.href='index.php'</script>";