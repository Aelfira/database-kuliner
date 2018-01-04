<?php 
include_once "header.php";
?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <form action="proses-tambah-kategori.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <input type="text" name="kategori" placeholder="Nama kategori" class="form-control">
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