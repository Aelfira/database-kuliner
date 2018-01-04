<?php 
include_once "header.php";
?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
        <a href="tambah-admin.php" class="btn btn-success">Tambah data admin</a>
        <table class="table">
            <tr>
                <th>No</th><th>Username</th><th>Aksi</th>
            </tr>
            <?php
            include_once "koneksi.php";
            $oci = new oci;
            $query = $oci->query("SELECT * FROM admin");
            $no = 0;
            while($data = $oci->fetch_array($query)) {
                $no++
            ?>
            <tr><td><?= $no ?></td><td><?= $data['USERNAME'] ?></td><td><a href="edit-user.php?id=<?= $data['USERNAME'] ?>" class="btn btn-small btn-info"><i class="fa fa-lg fa-edit"></i></a></td></tr>
            <?php } ?>
        </table>
    </div>
</div>       
<?php 
include_once "footer.php";
?>