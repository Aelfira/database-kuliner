<?php 
include "header.php";
?>
<div class="content">
    <a href="tambah-kategori.php" class="btn btn-success">Tambah data kategori</a>
    <table class="table">
        <tr>
            <th>No</th><th>Kategori</th><th>Aksi</th>
        </tr>
        <?php
        include "koneksi.php";
        $query = mysql_query("SELECT * FROM tabel_kategori ORDER BY id_kategori DESC") or die(mysql_error());
        $no = 0;
        while($data = mysql_fetch_array($query)) {
            $no++
        ?>
        <tr><td><?= $no ?></td><td><?= $data['kategori'] ?></td><td><a href="edit-kategori.php?id=<?php echo $data['id_kategori'] ?>" class="btn btn-sm btn-info"><i class="fa fa-lg fa-edit"></i></a><a href="hapus-kategori.php?id=<?php echo $data['id_kategori'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-lg fa-trash"></i></a></td></tr>
        <?php } ?>
    </table>
</div>
<?php 
include "footer.php";
?>