<?php 
include_once "header.php";
?>
<?php 
include_once 'koneksi.php';
$oci = new oci;
$id = $_GET['id'];
$query = $oci->query("SELECT * FROM tabel_kategori WHERE id_kategori = '$id'");
$kuliner = $oci->fetch_array($query);
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
include_once "footer.php";
?>