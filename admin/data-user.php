<?php 
include_once "header.php";
?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <table class="table">
                <tr>
                    <th>No</th><th>Email</th><th>Nama</th><th>Tanggal daftar</th>
                </tr>
                <?php
                include_once "koneksi.php";
                $oci = new oci;
                $query = $oci->query("SELECT * FROM tabel_user ORDER BY tgl_daftar DESC");
                $no = 0;
                while($data = $oci->fetch_array($query)) {
                    $no++
                ?>
                <tr><td><?= $no ?></td><td><?= $data['email'] ?></td><td><?= $data['nama'] ?></td><td><?= $data['tgl_daftar'] ?></td></tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
<?php 
include_once "footer.php";
?>