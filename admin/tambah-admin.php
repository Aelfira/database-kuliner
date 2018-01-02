<?php 
include "header.php";
?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <form action="proses-tambah-admin.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="kuliner">Username</label>
                            <input type="text" name="username" id="kuliner" class="form-control" required>
                        </div>
                        <div class="form-group">
                            
                        <div class="form-group">
                            <label for="keteranga">Password</label>
                            <textarea name="password" id="keterangan" class="form-control"></textarea>
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