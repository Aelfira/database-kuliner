<?php 
include 'koneksi.php';
include "header.php";
$query = mysql_query("SELECT * FROM tabel_tamu WHERE id_tamu='$_GET[id]'") or die(mysql_error());
$krisar =  mysql_fetch_array($query);
?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <a href="krisar.php" class="btn btn-info">Kembali</a>
                <br>
                <span style="color: #777">Nama</span>
                <h3 style="margin-top: 0"><?= $krisar['nama'] ?></h3>
                <span style="color: #777">Email</span>
                <h4 style="margin-top: 0"><?= $krisar['email'] ?></h4>
                <span style="color: #777">Pesan</span>
                <p style="margin-top: 0"><?= $krisar['pesan'] ?></p>
                <span style="color: #777">Tanggal dikirim</span>
                <h5 style="margin-top: 0"><?= $krisar['tgl_kirim'] ?></h5>
            </div>
        </div>
    </div>

<?php 
include "footer.php";
?>