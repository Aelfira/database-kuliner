<?php 
include "header.php";
?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
    <table class="table">
        <tr>
            <th>No</th><th>Nama</th><th>Email</th><th>Aksi</th>
        </tr>
        <?php
        include "koneksi.php";
        $query = mysql_query("SELECT * FROM tabel_tamu ") or die(mysql_error());
        $no = 0;
        while($data = mysql_fetch_array($query)) {
            $no++;
        ?> 
        <tr><td><?= $no ?></td><td><?= $data['nama'] ?></td><td><?= $data['email'] ?></td><td><a href="detil-krisar.php?id=<?= $data['id_tamu'] ?>" class="btn btn-info"><i class="fa fa-lg fa-file"></i></a><a href="hapus-krisar.php?id=<?= $data['id_tamu'] ?>" class="btn btn-small btn-danger"><i class="fa fa-lg fa-trash"></i></a></td></tr>
        <?php } ?>
    </table>


                </div>
            </div>
        </div>

<?php 
include "footer.php";
?>