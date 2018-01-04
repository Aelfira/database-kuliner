<?php 
include_once "header.php";
?>
<div class="content">
    <a href="tambah-kategori.php" class="btn btn-success">Tambah data kategori</a>
    <table class="table">
        <tr>
            <th>No</th><th>Kategori</th><th>Aksi</th>
        </tr>
        <?php
        include_once "koneksi.php";
        $oci = new oci;
        $query = $oci->query("SELECT * FROM tabel_kategori ORDER BY id_kategori DESC");
        $no = 0;
        while($data = $oci->fetch_array($query)) {
            $no++
        ?>
        <tr><td><?= $no ?></td><td><?= $data['kategori'] ?></td><td><a href="edit-kategori.php?id=<?php echo $data['id_kategori'] ?>" class="btn btn-sm btn-info"><i class="fa fa-lg fa-edit"></i></a><a href="hapus-kategori.php?id=<?php echo $data['id_kategori'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-lg fa-trash"></i></a></td></tr>
        <?php } ?>
    </table>
</div>
<?php 
include_once "footer.php";
?>