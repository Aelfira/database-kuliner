<!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                    <p>Ponorogo adalah sebuah kabupaten di provinsi Jawa Timur, Indonesia. Kabupaten Ponorogo dikenal dengan julukan Kota Reog atau Bumi Reog karena daerah ini merupakan daerah asal dari kesenian Reog. Ponorogo juga dikenal sebagai Kota Santri karena memiliki banyak pondok pesantren, salah satu yang terkenal adalah Pondok Modern Darussalam Gontor yang terletak di desa Gontor, kecamatan Mlarak.
Selain itu di kabupaten Ponorogo juga terdapat beberapa macam objek wisata budaya, objek wisata industri, objek wisata alam dan wisata kuliner. Contoh dari objek wisata budaya ialah setiap tanggal 1 Muharram (1 Suro), pemerintah Kabupaten Ponorogo menyelenggarakan Grebeg Suro, dimana saat grebeg suro ada beberapa acara terumata adanya Kirab pusaka, Festival Reog di alun-alun, Larung Risalah Doa (larungan) di telaga ngebel. Contoh lainnya adalah objek wisata alam dan kuliner, salah satunya objek wisata telaga ngebel selain menyediakan pemandangan danau telaga ngebel juga terkenal dengan wisata kuliner yaitu nila bakar atau gurami bakar dan pastinya memiliki citarasa yang berbeda dengan kota lain.
</p>
                
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Buku Tamu</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form action = "simpan-krisar.php" method="post" name="sentMessage" >
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="name">Nama</label>
                                <input name="nama" type="text" class="form-control" placeholder="Nama" id="name" required data-validation-required-message="Masukkan nama.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="email">Alamat Email</label>
                                <input  name="email" type="email" class="form-control" placeholder="Alamat Email" id="email" required data-validation-required-message="Masukkan alamat email yang sah.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="message">Pesan</label>
                                <textarea name="pesan" rows="5" class="form-control" placeholder="Pesan" id="message" required data-validation-required-message="Masukkan pesan."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<!-- Login -->
<div class="login-modal modal fade" id="login" tabindex="-1" role="dialog" aria-hidden="true" height="100%">
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
                        <form action="proseslogin.php" method="post">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" required class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Login" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- daftar -->
<div class="daftar-modal modal fade" id="daftar" tabindex="-1" role="dialog" aria-hidden="true" height="80%">
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
                        <form action="prosesdaftar.php" method="post">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" required class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Daftar" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
    <footer class="text-center" id="about">
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; AKN PONOROGO
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>
    <script type="text/javascript">
        function rekom(nama, id_kuliner,id) {
            $.ajax({
            url: 'rekomendasi.php',
            data: {
                username: nama,
                kuliner: id_kuliner,
            },
            type: 'post',
            dataType: 'json',
            success: function(msg) {
                if (msg.msg == '1') {
                    $('#'+id+'rekom').addClass('recomended');
                    $('#'+id+'totalrekom').html("<small>"+msg.total+" orang merekomendasikan kuliner ini.</small>");
                    $('#'+id+'rekom').html('<i class="fa fa-thumbs-up"></i>Hapus rekomendasi');
                    console.log('hello'+id);
                } else if(msg.msg == '2') {
                    $('#'+id+'rekom').removeClass('recomended');
                    $('#'+id+'totalrekom').html("<small>"+msg.total+" orang merekomendasikan kuliner ini.</small>");
                    $('#'+id+'rekom').html('<i class="fa fa-thumbs-up"></i>Rekomendasikan');
                    console.log('hello2'+id);
                } else {
                    console.log('error');
                }
            },
            error: function(a,b,c) {
                alert(a);
            }
        });
        }
        //AIzaSyDx0y-BPAd5Xsr2lD6ZK7JyhVxVlymy0vQ
    </script>
</body>

</html>
