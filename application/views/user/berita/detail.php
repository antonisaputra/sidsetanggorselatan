
    <!-- ======= Hero Section ======= -->

    <main id="main">

        <section id="team" class="team section-bg mt-5">
            <div class="container">
                <div class="img-berita">
                    <img src="<?= base_url(); ?>assets/upload/<?= $berita['gambar']; ?>" alt="">
                </div>
                <div class="section-title mt-3">
                    <h2>Berita Desa Setanggor Selatan</h2>
                </div>
                <h3><?= $berita['judul']; ?></h3>
                <small><?= date('d F Y h:i:s A', strtotime($berita['waktu']));?> </small>
                <p><?= $berita['deskripsi']; ?></p>
            </div>
        </section>
    </main><!-- End #main -->
