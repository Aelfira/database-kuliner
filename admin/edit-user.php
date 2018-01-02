<?php 
include "header.php";
?>
<?php 
include 'koneksi.php';
$id = $_GET['id'];
$query = mysql_query("SELECT * FROM admin WHERE username = '$id'") or die(mysql_error());
$admin = mysql_fetch_array($query);
?>  
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <form action="proses-update-admin.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $id ?>">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" required value="<?php echo $admin['username'] ?>">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required value="<?php echo $admin['password'] ?>">
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