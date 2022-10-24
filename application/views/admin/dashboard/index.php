<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">
          <?php $jumlah_total = 0;
                $jumlah_l = 0;
                $jumlah_p = 0; ?>
          <?php foreach($dusun as $row): ?>
          <?php 
                $jumlah_total += ($row['jumlah_L'] + $row['jumlah_P']);  
                $jumlah_l += $row['jumlah_L'];  
                $jumlah_p += $row['jumlah_P'];
          ?>
          <?php endforeach; ?>
          <!-- Sales Card -->
          <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card">

              <div class="card-body">
                <h5 class="card-title">Jumlah <span>| Total Penduduk</span></h5>

                <div class="d-flex align-items-center">
                  <div class="ps-3">
                    <h6><?= $jumlah_total; ?></h6>
                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Sales Card -->

          <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card">

              <div class="card-body">
                <h5 class="card-title">Jumlah <span>| Penduduk Laki-Laki</span></h5>

                <div class="d-flex align-items-center">
                  <div class="ps-3">
                    <h6><?= $jumlah_l; ?></h6>
                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Sales Card -->

          <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card">

              <div class="card-body">
                <h5 class="card-title">Jumlah <span>| Penduduk Perempuan</span></h5>

                <div class="d-flex align-items-center">
                  <div class="ps-3">
                    <h6><?= $jumlah_p; ?></h6>
                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Sales Card -->
            </div>
          </div><!-- End Revenue Card -->
        </div>
      </div><!-- End Left side columns -->
    </div>
  </section>

</main><!-- End #main -->