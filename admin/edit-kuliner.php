<?php 
include_once "header.php";
?>
<?php 
include_once 'koneksi.php';
$id = $_GET['id'];
$oci = new oci;
$query = $oci->query("SELECT * FROM tabel_kuliner WHERE id_kuliner = '$id'");
$kuliner = $oci->fetch_array($query);
?>  
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <form action="proses-update-kuliner.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $id ?>">
                <div class="form-group">
                    <label for="kuliner">Kuliner</label>
                    <input type="text" name="kuliner" id="kuliner" class="form-control" required value="<?php echo $kuliner['KULINER'] ?>">
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" name="foto" id="foto" class="form-control">
                </div>
                <div class="form-group">
                    <label for="lokasi">Lokasi</label>
                    <input type="text" name="lokasi" id="lokasi" class="form-control" required value="<?php echo $kuliner['LOKASI'] ?>">
                </div>
                <div class="form-group inline-form">
                    <label for="lokasi">Latitude
                    <input type="text" name="lat" id="lat" class="form-control" required readonly value="<?= $kuliner['LAT'] ?>" ></label>
                    <label>Longitude
                    <input type="text" name="long" id="long" class="form-control" required readonly value="<?= $kuliner['LONGI'] ?>" >
                    </label>
                </div>
                <div id="map" style="height: 250px; width: 100%"></div>
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select name="kategori" class="form-control" id="kategori" required>
                        <option value="">Pilih satu...</option>
                        <?php 
                        $query = $oci->query("SELECT * FROM tabel_kategori");
                        while($kategori = $oci->fetch_array($query)) {
                        ?>
                        <option value="<?= $kategori['ID_KATEGORI'] ?>" <?= $kuliner['ID_KATEGORI'] == $kategori['ID_KATEGORI'] ? "selected" : "" ?>><?= $kategori['KATEGORI'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="keteranga">Keterangan</label>
                    <textarea name="keterangan" id="keterangan" class="form-control"><?php echo $kuliner['KETERANGAN'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="contact">Contact person</label>
                    <textarea name="contact" id="contact" class="form-control"><?php echo $kuliner['CONTACT'] ?></textarea>
                </div>
                <div class="form-group">
                    <input type="reset" value="Batal" class="btn btn-danger" onclick="history.back()">
                    <input type="submit" value="Simpan" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    var map;
    var lat = document.getElementById('lat');
    var lng = document.getElementById('long');
  function initMap() {
    // Create a map object and specify the DOM element for display.
    <?php 
    if($kuliner['LAT'] == '') {
        $kuliner['LAT'] = '-7.8681201';
    }
    if($kuliner['LONGI'] == '') {
        $kuliner['LONGI'] = '111.4556577';
    }
    ?>
    map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: <?= $kuliner['LAT'] ?>, lng: <?= $kuliner['LONGI'] ?>},
      zoom: 17
    });
    map.addListener('click', function(e){
        lat.value = e.latLng.lat();
        lng.value = e.latLng.lng();
    });
  }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxSg93t62JEx66Buy0mZhOgN9jwXHB5Zo&callback=initMap" async defer></script>
<?php 
include_once "footer.php";
?>