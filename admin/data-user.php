<?php 
include "header.php";
?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <table class="table">
                <tr>
                    <th>No</th><th>Email</th><th>Nama</th><th>Tanggal daftar</th>
                </tr>
                <?php
                include "koneksi.php";
                $query = mysql_query("SELECT * FROM tabel_user ORDER BY tgl_daftar DESC") or die(mysql_error());
                $no = 0;
                while($data = mysql_fetch_array($query)) {
                    $no++
                ?>
                <tr><td><?= $no ?></td><td><?= $data['email'] ?></td><td><?= $data['nama'] ?></td><td><?= $data['tgl_daftar'] ?></td></tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
<?php 
include "footer.php";
?>