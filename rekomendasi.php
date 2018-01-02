<?php 
include 'koneksi.php';
$kuliner = $_POST['kuliner'];
$username = $_POST['username'];
$sql = mysql_query("SELECT * FROM tabel_rekom WHERE id_kuliner='$kuliner' AND id_user='$username'") or die(mysql_error());
if(mysql_num_rows($sql) < 1) {
	mysql_query("INSERT INTO tabel_rekom(id_kuliner, id_user, tgl_direkom) VALUE('$kuliner','$username', NOW())") or die(mysql_error());
	$qq = mysql_query("SELECT count(id_rekom) as total FROM tabel_rekom WHERE id_kuliner='$kuliner'")or die(mysql_error());
	$aa = mysql_fetch_array($qq);
	$data = array('total'=>$aa['total'], 'msg'=>'1');
	echo json_encode($data);
} else {
	mysql_query("DELETE FROM tabel_rekom WHERE id_kuliner='$kuliner' AND id_user='$username'") or die(mysql_error());
	$qq = mysql_query("SELECT count(id_rekom) as total FROM tabel_rekom WHERE id_kuliner='$kuliner'")or die(mysql_error());
	$aa = mysql_fetch_array($qq);
	$data = array('total'=>$aa['total'], 'msg'=>'2');
	echo json_encode($data);
}
?>