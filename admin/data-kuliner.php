<?php 
include "header.php";
?>
<div class="content">
    <a href="tambah-kuliner.php" class="btn btn-success">Tambah data kuliner</a>
    <table class="table">
        <tr>
            <th>No</th><th>Kuliner</th><th>Kategori</th><th>Aksi</th>
        </tr>
        <?php
        include "koneksi.php";
        $query = mysql_query("SELECT * FROM tabel_kuliner LEFT JOIN tabel_kategori ON tabel_kuliner.id_kategori = tabel_kategori.id_kategori ORDER BY id_kuliner DESC") or die(mysql_error());
        $no = 0;
        while($data = mysql_fetch_array($query)) {
            $no++
        ?>
        <tr><td><?= $no ?></td><td><?= $data['kuliner'] ?></td><td><?= $data['kategori'] ?></td><td><a href="edit-kuliner.php?id=<?php echo $data['id_kuliner'] ?>" class="btn btn-sm btn-info"><i class="fa fa-lg fa-edit"></i></a><a href="hapus-kuliner.php?id=<?php echo $data['id_kuliner'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-lg fa-trash"></i></a></td></tr>
        <?php } ?>
    </table>
</div>
<?php 
include "footer.php";
?>