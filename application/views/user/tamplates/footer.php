
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
        &copy; desasetanggor <strong><span>
      </div>
      <div class="credits">
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

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
  <script>
    const actions = [
  {
    name: 'Randomize',
    handler(chart) {
      chart.data.datasets.forEach(dataset => {
        dataset.data = Utils.numbers({count: chart.data.labels.length, min: 0, max: 100});
      });
      chart.update();
    }
  },
  {
    name: 'Add Dataset',
    handler(chart) {
      const data = chart.data;
      const newDataset = {
        label: 'Dataset ' + (data.datasets.length + 1),
        backgroundColor: [],
        data: [],
      };

      for (let i = 0; i < data.labels.length; i++) {
        newDataset.data.push(Utils.numbers({count: 1, min: 0, max: 100}));

        const colorIndex = i % Object.keys(Utils.CHART_COLORS).length;
        newDataset.backgroundColor.push(Object.values(Utils.CHART_COLORS)[colorIndex]);
      }

      chart.data.datasets.push(newDataset);
      chart.update();
    }
  },
  {
    name: 'Add Data',
    handler(chart) {
      const data = chart.data;
      if (data.datasets.length > 0) {
        data.labels.push('data #' + (data.labels.length + 1));

        for (let index = 0; index < data.datasets.length; ++index) {
          data.datasets[index].data.push(Utils.rand(0, 100));
        }

        chart.update();
      }
    }
  },
  {
    name: 'Remove Dataset',
    handler(chart) {
      chart.data.datasets.pop();
      chart.update();
    }
  },
  {
    name: 'Remove Data',
    handler(chart) {
      chart.data.labels.splice(-1, 1); // remove the label first

      chart.data.datasets.forEach(dataset => {
        dataset.data.pop();
      });

      chart.update();
    }
  }
];
  </script>

  <!-- <script>
      // fungsi initialize untuk mempersiapkan peta
      function initialize() {
      var propertiPeta = {
          center:new google.maps.LatLng(-8.5830695,116.3202515),
          zoom:15,
          mapTypeId:google.maps.MapTypeId.ROADMAP
      };
      
      var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
      }

      // event jendela di-load  
      google.maps.event.addDomListener(window, 'load', initialize);
  </script> -->

</body>

</html>