<main id="main" class="main">

    <div class="pagetitle">
        <h1>Komentar</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Komentar</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="col-md-6">
            <?php foreach($komentar as $row): ?>
            <div class="card">
                <div class="card-header fw-bold text-dark pb-0">
                    <div class="row">
                        <div class="col-md-6">
                            <?= $row['nama_lengkap']; ?>
                            <p class="fs-6 pb-0 fst-italic text-secondary"><?= date('d F Y h:i:s A', strtotime($row['waktu'])) ;?></p>
                        </div>
                        <div class="col-md-6 text-end">
                            <small><?= $row['email']; ?></small>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p class="fs-6 card-title fw-normal"><?= $row['komentar']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

</main><!-- End #main -->