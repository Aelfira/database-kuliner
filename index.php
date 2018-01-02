<?php include 'header.php'; ?>
    <!-- Header -->
    <header>
        <div class="container" id="maincontent" tabindex="-1">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <h1 class="name">KULINER PONOROGO</h1>
                        <hr class="star-light">
                        <span class="skills">Web Wisata Kuliner Di Ponorogo</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Kuliner terbaru</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <?php 
                include 'koneksi.php';
                $loadKuliner = "SELECT * FROM tabel_kuliner ORDER BY id_kuliner DESC LIMIT 6";
                $query = mysql_query($loadKuliner); 
                while($kuliner = mysql_fetch_array($query)) {
                ?>
                <div class="col-sm-4 portfolio-item">
                    <a href="#<?= $kuliner['id_kuliner'] ?>" class="portfolio-link" data-toggle="modal" align="center">
                        <div class="caption">
                            <div class="caption-content">
                                <?= $kuliner['kuliner'] ?>
                            </div>
                        </div>
                        <img src="gambar/<?= $kuliner['foto'] == '' ? 'ph.png' : $kuliner['foto'] ?>" class="img-responsive" alt="<?= $kuliner['kuliner'] ?>" style="height: 128px; margin:auto">
                    </a>
                </div>
                <?php } ?>
            </div>
            <div class="row">
                <a href="kuliner.php" class="btn btn-info btn-lg">Tampilkan lebih banyak <i class="fa fa-plus"></i></a>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Kuliner yang paling disukai</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <?php 
                include 'koneksi.php';
                $loadKuliner = "SELECT *, count(tabel_rekom.id_kuliner) as total, tabel_rekom.id_kuliner id_kuliner1, tabel_kuliner.kuliner as nama_kuliner FROM tabel_rekom LEFT JOIN tabel_kuliner ON tabel_kuliner.id_kuliner=tabel_rekom.id_kuliner GROUP BY tabel_rekom.id_kuliner ORDER BY total DESC LIMIT 6";
                $query = mysql_query($loadKuliner) or die(mysql_error()); 
                while($kuliner = mysql_fetch_array($query)) {
                ?>
                <div class="col-sm-4 portfolio-item">
                    <a href="#<?= $kuliner['id_kuliner'] ?>" class="portfolio-link" data-toggle="modal" align="center">
                        <div class="caption">
                            <div class="caption-content">
                                <?= $kuliner['kuliner'] ?>
                            </div>
                        </div>
                        <img src="gambar/<?= $kuliner['foto'] == '' ? 'ph.png' : $kuliner['foto'] ?>" class="img-responsive" alt="<?= $kuliner['kuliner'] ?>" style="height: 128px; margin:auto">
                    </a>
                </div>
                <?php } ?>
            </div>
            <div class="row">
                <a href="kuliner.php" class="btn btn-info btn-lg">Tampilkan lebih banyak <i class="fa fa-plus"></i></a>
            </div>
        </div>
    </section>

    <!-- Portfolio Modals -->
     <?php 
    $query = mysql_query("SELECT * FROM tabel_kuliner");
    while($kuliner = mysql_fetch_array($query)) {
    ?>
    <div class="portfolio-modal modal fade" id="<?= $kuliner['id_kuliner'] ?>" tabindex="-1" role="dialog" aria-hidden="true" height="100%">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2><?= $kuliner['kuliner'] ?></h2>
                            <hr class="star-primary">
                            <img src="gambar/<?= $kuliner['foto'] ?>" class="img-responsive img-centered" alt="">
                            <b>Keterangan:</b>
                            <p><small><?= $kuliner['keterangan'] ?></small></p>
                            <b><small>Lokasi:</small></b>
                            <p><?= $kuliner['lokasi'] ?></p>
                            <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/view?key=AIzaSyDx0y-BPAd5Xsr2lD6ZK7JyhVxVlymy0vQ&zoom=17&center=<?= $kuliner['lat'] ?>,<?= $kuliner['long'] ?>" allowfullscreen></iframe><br>
                            <b><small>Contact person:</small></b>
                            <p><?= $kuliner['contact'] ?></p>
                            <p id="<?= $kuliner['id_kuliner'] ?>totalrekom"><small><?= $total['total'] ?> orang merekomendasikan kuliner ini.</small></p>
                            <?php 
                            if(isset($_SESSION['id_user'])) {
                            $ll = mysql_query("SELECT * FROM tabel_rekom WHERE id_kuliner='".$kuliner['id_kuliner']."' AND id_user='".$_SESSION['id_user']."'") or die(mysql_error());
                            $jumlah = mysql_num_rows($ll);
                            ?>
                            <p><a class="recom <?= $jumlah > 0 ? 'recomended' : '' ?>" onclick="rekom('<?= $_SESSION['id_user'] ?>', '<?= $kuliner['id_kuliner'] ?>', '<?= $kuliner['id_kuliner'] ?>')" id="<?= $kuliner['id_kuliner'] ?>rekom"><i class="fa fa-thumbs-up fa-lg fa-default"></i> <?= $jumlah > 0 ?  'Hapus rekomendasi' : 'Rekomendasikan' ?></a></p>
                            <form id="FormKomentar" action="kirim-komentar.php" method="post">
                             <div>
                             <input type="hidden" name="id_kuliner" value="<?php echo $kuliner['id_kuliner']?>" />
                            <textarea type="text" name="Komentar" placeholder="Komentar" rows="5" style="width: 100%"></textarea>
                            </div>
                            <div>
                            <input type="submit" value="Tambahkan Komentar" class="pull-left btn btn-success" />
                            </div>
                            </form>
                            <br><br><br>
                            <?php 
                            } else {
                            ?>
                            <a href="#login" class="page-scroll" data-toggle='modal'>Login dulu untuk memberikan rekomendasi</a>
                            <?php
                            }
                            $kk = mysql_query("SELECT count(id_rekom) as total FROM tabel_rekom WHERE id_kuliner='".$kuliner['id_kuliner']."'") or die(mysql_error());
                            $total = mysql_fetch_array($kk);
                            ?>
                            <div class="list-group" style="text-align: left; border: 2px solid gray; border-radius: 5px; padding: 10px">
                            <?php 
                            $cc = mysql_query("SELECT * FROM tabel_komentar LEFT JOIN tabel_user ON tabel_komentar.id_user=tabel_user.id_user WHERE id_kuliner='{$kuliner['id_kuliner']}'") or die(mysql_error());
                            if(mysql_num_rows($cc) > 0) {
                                while ($komentar = mysql_fetch_array($cc)) {
                            ?>
                                <div class="list-item">
                                    <b><h4 style="padding: 0; margin: 0"><?= $komentar['nama'] ?></h4></b>
                                    <small><?= date('d-m-Y H:i', strtotime($komentar['tgl_komentar'])) ?></small>
                                    <p><?= $komentar['komentar'] ?></p>
                                    <hr style="border-bottom: 2px solid lightgray">
                                </div>
                            <?php 
                                }
                            } else {
                            ?>
                            <h3>Belum ada komentar</h3>
                            <?php
                            }
                            ?>
                            </div>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
<?php include 'footer.php'; ?>