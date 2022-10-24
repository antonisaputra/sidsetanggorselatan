

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
          data-aos="fade-up" data-aos-delay="200">
          <h1>WEBSITE RESMI DESA SETANGGOR SELATAN</h1>
          <h2>KEC.SUKAMULIA KAB.LOMBOK TIMUR PROV.NUSA TENGGARA BARAT</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
               
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="<?= base_url() ?>assets/user/img/logo lotim.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?= base_url() ?>assets/user/img/kantor desa.JPG" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?= base_url() ?>assets/user/img/orang.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?= base_url() ?>assets/user/img/kantor desa.JPG" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Artikel Terkini</h2>
        </div>

        <div class="row">

          <?php foreach($berita as $row): ?>         
          <div class="col-lg-12 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="<?= base_url() ?>assets/user/img/kantor desa.JPG" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4><?= $row['judul']; ?></h4>
                <span><?= date('d F Y h:i:s A', strtotime($row['waktu'])) ; ?></span>
                <p><?= word_limiter($row['deskripsi'],15); ?></p>
                <a href="" class="btn btn-primary mt-2">Lihat Selengkapnya</a>
              </div>
            </div>
          </div>
          <?php endforeach;  ?>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kategori </h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <ul>
              <a href="">
                <li><i class="ri-check-double-line"></i>Berita Desa</li>
              </a>
              <a href="">
                <li><i class="ri-check-double-line"></i>Program Kerja</li>
              </a>
              <a href="">
                <li><i class="ri-check-double-line"></i>Peraturan Desa</li>
              </a>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Wilayah Desa</h2>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15777.586465942844!2d116.47119366360552!3d-8.653776186980508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcc4c6f385c01d7%3A0x5030bfbcaf7e1d0!2sSetanggor%2C%20Kec.%20Sukamulia%2C%20Kabupaten%20Lombok%20Timur%2C%20Nusa%20Tenggara%20Bar.!5e0!3m2!1sid!2sid!4v1664689074315!5m2!1sid!2sid" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </section><!-- End About Us Section -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        
        
    </section><!-- End About Us Section -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Statistik Pengunjung</h2>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <d class="flex">
              <img src="<?= base_url() ?>assets/user/img/statistik_wil.png" alt="" width="150px">
              <img src="<?= base_url() ?>assets/user/img/statistik_pend.png" alt="" srcset="" width="150px">
              <img src="<?= base_url() ?>assets/user/img/statistik_pekerjaan.png" alt="" srcset="" width="150px">
            </d>
          </div>
          <div class="col-lg-6">
            <d class="flex">
              <img src="<?= base_url() ?>assets/user/img/statistik_agama.png" alt="" width="150px">
              <img src="<?= base_url() ?>assets/user/img/statistik_kelamin.png" alt="" srcset="" width="150px">
              <img src="<?= base_url() ?>assets/user/img/statistik_umur.png" alt="" srcset="" width="150px">
            </d>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->


  </main><!-- End #main -->
