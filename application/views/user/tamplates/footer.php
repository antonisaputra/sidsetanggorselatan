<!-- ======= Footer ======= -->
<footer id="footer">


  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-6 footer-contact">
          <h3>Desa Setanggor Selatan</h3>
          <p>
            Kecamatan Sukamulia <br>
            Kabupaten Lombok Timur<br>
            Provinsi Nusa Tenggara Barat, Indonesia<br><br>
            <strong>Phone:</strong> +6278600000000<br>
            <strong>Email:</strong> desasetanggor@gmail.com<br>
          </p>
        </div>

        <div class="col-lg-4 col-md-6 footer-links">
          <h4>Kategori</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Berita Desa </a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Program Kerja</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Peraturan desa</a></li>

          </ul>
        </div>



      </div>
    </div>
  </div>

  <div class="container footer-bottom clearfix">
    <div class="copyright">
      <p class="fw-bold">
        Setanggor Selatan &copy; <?= date('Y'); ?>
      </p>
    </div>
    <div class="credits">
    </div>
  </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?= base_url() ?>assets/user/vendor/aos/aos.js"></script>
<script src="<?= base_url() ?>assets/user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/user/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?= base_url() ?>assets/user/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= base_url() ?>assets/user/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?= base_url() ?>assets/user/vendor/waypoints/noframework.waypoints.js"></script>
<script src="<?= base_url() ?>assets/user/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?= base_url() ?>assets/user/js/main.js"></script>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="<?= base_url() ?>assets/Cart/Chart.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script> -->
	<script>

		const baseUrl = "<?php echo base_url();?>"
    function chart(url, warna, idclass){
      const myChart = (chartType) => {
				$.ajax({
					url: baseUrl+'Data_desa/'+url,
					dataType: 'json',
					method: 'get',
					success: data => {
						let chartX = []
						let chartY = []
						data.map( data => {
							chartX.push(data.kelompok)
							chartY.push(data.jumlah)
						})
						const chartData = {
							labels: chartX,
							datasets: [
								{
									label: 'jumlah',
									data: chartY,
									backgroundColor: ['lightcoral'],
									borderColor: ['lightcoral'],
									borderWidth: 4
								}
							]
						}
						const ctx = document.getElementById(idclass).getContext('2d')
						const config = {
							type: chartType,
							data: chartData
						}
						switch(chartType) {
							case 'pie':
								const pieColor = warna
								chartData.datasets[0].backgroundColor = pieColor
								chartData.datasets[0].borderColor = pieColor
								break;
							case 'bar':
								chartData.datasets[0].backgroundColor = ['skyblue']
								chartData.datasets[0].borderColor = ['skyblue']
								break;
							default :
								config.options = {
									scales: {
										y: {
											beginAtZero: true
										}
									}
								}
						}
						const chart = new Chart(ctx, config)
					}
				})
		}

		myChart('pie')
    }
    var warnaPendidikan = ['rgba(184, 33, 211, 1)','rgba(4, 61, 4, 1)','rgba(47, 61, 4, 1)','rgba(187, 137, 38, 1)','rgba(211, 110, 33, 1)','rgba(211, 66, 33, 1)'];
    chart('chart_pendidikan_KK', warnaPendidikan,'ChartPendidikaKK');
    chart('chart_agama', warnaPendidikan,'ChartAgama');
	var warnaPendidikanDitempuh = ['rgba(4, 61, 4, 1)','rgba(47, 61, 4, 1)','rgba(187, 137, 38, 1)','rgba(211, 110, 33, 1)','rgba(211, 66, 33, 1)','rgba(33, 211, 175, 1)','rgba(33, 119, 211, 1)','rgba(184, 33, 211, 1)','rgba(211, 33, 60, 1)','rgba(62, 0, 10, 1)','rgba(29, 0, 62, 1)','rgba(0, 0, 62, 1)','rgba(0, 40, 62, 1)','rgba(0, 62, 60, 1)','rgba(0, 62, 24, 1)','rgba(42, 62, 0, 1)','rgba(170, 156, 2, 1)','rgb(170, 64, 2, 1)'];
	chart('chart_pendidikan_ditempuh',warnaPendidikanDitempuh,'ChartPendidikaDitempuh')
	var warnaPendidikanDitempuh = ['rgba(4, 61, 4, 1)','rgba(47, 61, 4, 1)'];
	chart('chart_jenis_kelamin',warnaPendidikanDitempuh,'ChartJenisKelamin')
	var warnaWargaNegara = ['rgba(4, 61, 4, 1)','rgba(47, 61, 4, 1)','rgba(187, 137, 38, 1)','rgba(211, 110, 33, 1)','rgba(211, 66, 33, 1)','rgba(33, 211, 175, 1)','rgba(33, 119, 211, 1)','rgba(184, 33, 211, 1)','rgba(211, 33, 60, 1)','rgba(62, 0, 10, 1)','rgba(29, 0, 62, 1)','rgba(0, 0, 62, 1)','rgba(0, 40, 62, 1)','rgba(0, 62, 60, 1)','rgba(0, 62, 24, 1)','rgba(42, 62, 0, 1)','rgba(170, 156, 2, 1)','rgb(170, 64, 2, 1)'];
	chart('chart_warga_negara',warnaWargaNegara,'ChartWargaNegara')
	</script>
<!-- <script>
  var PendidikaKK = document.getElementById("ChartPendidikaKK").getContext('2d');
		var ChartPendidikaKK = new Chart(PendidikaKK, {
			type: 'pie',
			data: {
				labels: 
				datasets: [{
					label: '# of Votes',
					data: [12, 19, 3, 23, 2, 3,4],
					backgroundColor: [
					'rgb(255, 99, 132)',
					'rgb(54, 162, 235)',
					'rgb(255, 206, 86)',
					'rgb(75, 192, 192)',
					'rgb(153, 102, 255)',
					'rgb(255, 159, 64)',
          'rgb(255, 0, 217)'
					],
					borderColor: [
					'rgb(255,99,132,1)',
					'rgb(54, 162, 235, 1)',
					'rgb(255, 206, 86, 1)',
					'rgb(75, 192, 192, 1)',
					'rgb(153, 102, 255, 1)',
					'rgb(255, 159, 64, 1)',
          'rgb(255, 0, 217)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
</script> -->
</body>

</html>