<?php 
include "header.php";
?>
<?php 
include 'koneksi.php';
$id = $_GET['id'];
$query = mysql_query("SELECT * FROM tabel_kategori WHERE id_kategori = '$id'") or die(mysql_error());
$kuliner = mysql_fetch_array($query);
?>  
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <form action="proses-update-kategori.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <input type="text" name="kategori" class="form-control" value="<?= $kuliner['kategori'] ?>">
                </div>
                <div class="form-group">
                    <input type="reset" value="Batal" class="btn btn-danger" onclick="history.back()">
                    <input type="submit" value="Simpan" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
<?php 
include "footer.php";
?>