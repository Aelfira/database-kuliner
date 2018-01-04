<?php 
include_once "header.php";
?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
    <table class="table">
        <tr>
            <th>No</th><th>Nama</th><th>Email</th><th>Aksi</th>
        </tr>
        <?php
        include_once "koneksi.php";
        $oci = new oci;
        $query = $oci->query("SELECT * FROM tabel_tamu ");
        $no = 0;
        while($data = $oci->fetch_array($query)) {
            $no++;
        ?> 
        <tr><td><?= $no ?></td><td><?= $data['nama'] ?></td><td><?= $data['email'] ?></td><td><a href="detil-krisar.php?id=<?= $data['id_tamu'] ?>" class="btn btn-info"><i class="fa fa-lg fa-file"></i></a><a href="hapus-krisar.php?id=<?= $data['id_tamu'] ?>" class="btn btn-small btn-danger"><i class="fa fa-lg fa-trash"></i></a></td></tr>
        <?php } ?>
    </table>


                </div>
            </div>
        </div>

<?php 
include_once "footer.php";
?>