<?php include 'header.php'; ?>
    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Kuliner</h2>
                    <hr class="star-primary">
                </div>
                <div class="col-md-5">
                    <form action="" method="get" class="form-inline" role="form">
                        <div class="form-group">
                            <input type="text" name="cari" placeholder="Cari.." class="form-control">
                            <input type="submit" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
            <?php 
            include 'koneksi.php';
            $sql = mysql_query("SELECT * FROM tabel_kategori") or die(mysql_error());
            while($kategori = mysql_fetch_array($sql)) {
                $loadKuliner = "SELECT * FROM tabel_kuliner WHERE id_kategori='".$kategori['id_kategori']."'";
                if(isset($_GET['cari'])) {
                    $cari = $_GET['cari'];
                    $loadKuliner = $loadKuliner . " AND kuliner LIKE '%$cari%'";
                }
                $loadKuliner = $loadKuliner." ORDER BY id_kuliner DESC";
                $query = mysql_query($loadKuliner); 
            ?>
            <div class="col-lg-12">
                <h4><u><?= $kategori['kategori'] ?></u></h4>
                <?php 
                echo mysql_num_rows($query)." kuliner ditemukan.";
                ?>
            </div>
            <div class="row" id="kuliner">
                <?php 
                while($kuliner = mysql_fetch_array($query)) {
                ?>
                <div class="col-sm-2 portfolio-item">
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
            <?php } ?>
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
                            <?php 
                            if(isset($_SESSION['id_user'])) {
                            $ll = mysql_query("SELECT * FROM tabel_rekom WHERE id_kuliner='".$kuliner['id_kuliner']."' AND id_user='".$_SESSION['id_user']."'") or die(mysql_error());
                            $jumlah = mysql_num_rows($ll);
                            ?>
                            <p><a class="recom <?= $jumlah > 0 ? 'recomended' : '' ?>" onclick="rekom('<?= $_SESSION['id_user'] ?>', '<?= $kuliner['id_kuliner'] ?>', '<?= $kuliner['id_kuliner'] ?>')" id="<?= $kuliner['id_kuliner'] ?>rekom"><i class="fa fa-thumbs-up fa-lg fa-default"></i> <?= $jumlah > 0 ?  'Hapus rekomendasi' : 'Rekomendasikan' ?></a></p>
                            <?php 
                            } else {
                            ?>
                            <a href="#login" class="page-scroll" data-toggle='modal'>Login dulu untuk memberikan rekomendasi</a>
                            <?php
                            }
                            $kk = mysql_query("SELECT count(id_rekom) as total FROM tabel_rekom WHERE id_kuliner='".$kuliner['id_kuliner']."'" ) or die(mysql_error());
                            $total = mysql_fetch_array($kk);
                            ?>
                            <p id="<?= $kuliner['id_kuliner'] ?>totalrekom"><small><?= $total['total'] ?> orang merekomendasikan kuliner ini.</small></p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
<?php include 'footer.php'; ?>