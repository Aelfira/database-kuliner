<?php 
include "header.php";
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
        include "koneksi.php";
        $query = mysql_query("SELECT * FROM admin ") or die(mysql_error());
        $no = 0;
        while($data = mysql_fetch_array($query)) {
            $no++
        ?>
        <tr><td><?= $no ?></td><td><?= $data['username'] ?></td><td><a href="edit-user.php?id=<?= $data['username'] ?>"" class="btn btn-small btn-info"><i class="fa fa-lg fa-edit"></i></a></td></tr>
        <?php } ?>
    </table>

        
           
                </div>
            </div>
        


        
<?php 
include "footer.php";
?>