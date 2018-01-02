<footer class="footer">
             <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>

                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy;  Made with love by AMALIA ELFIRA
                </p>
            </div>
        </footer>

    </div>

</div>
</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>
    <script type="text/javascript" src="assets/js/raphael.min.js"></script>
    <script type="text/javascript" src="assets/js/morris.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
        <?php 
        include 'koneksi.php';
        $hariIni = date('Y-m-d');
        for($i=0; $i<7; $i++) {
            $tgl = date('Y-m-d', strtotime($hariIni." - $i days"));
            $query1 = mysql_query("SELECT count(*) as total FROM tabel_kuliner WHERE tgl_dibuat = '$tgl'") or die(mysql_error());
            $kuliner = mysql_fetch_array($query1);
            $data[] = array('tgl'=> $tgl, 'jumlah'=>$kuliner['total']);
        }
        ?>
    	$(document).ready(function(){

        	demo.initChartist();

        	/*$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

            },{
                type: 'info',
                timer: 4000
            });*/

            new Morris.Area({
              // ID of the element in which to draw the chart.
              element: 'statistik-kuliner',
              // Chart data records -- each entry in this array corresponds to a point on
              // the chart.
              data: <?php echo json_encode($data) ?> ,
              // The name of the data record attribute that contains x-values.
              xkey: 'tgl',
              // A list of names of data record attributes that contain y-values.
              ykeys: ['jumlah'],
              // Labels for the ykeys -- will be displayed when you hover over the
              // chart.
              labels: ['Jumlah']
            });

    	});
	</script>

</html>
 