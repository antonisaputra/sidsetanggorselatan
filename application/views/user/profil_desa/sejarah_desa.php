<main id="main">

    <section id="team" class="team section-bg mt-5">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Sejarah Desa</h2>
            </div>
            <div class="col-lg-10">
                <p>Bagian ini berisi informasi dasar mengenai desa kami. Sila klik pada tautan berikut untuk mendapatkan informasi yang lebih rinci.</p>

                <div class="d-flex">
                    <img src="assets/img/facebook.png" class="ms-3" alt="" width="30">
                    <img src="assets/img/gmail.png" class="ms-3" alt="" width="30">
                    <img src="assets/img/telegram.png" class="ms-3" alt="" width="30">
                </div>

                <h3 class="mt-5">
                    Komentar

                </h3>
                <div class="col-lg-5">

                    <form action="<?= base_url(); ?>Komentar/tambahKomentar" method="post">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama_lengkap" id="nama" placeholder="kelik disini">
                            <label for="email" class="form-label">Email </label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="email@gmai.com">
                        </div>
                        <div class="mb-3">
                            <label for="komentar" class="form-label">Isi pesan</label>
                            <textarea class="form-control" name="komentar" id="komentar" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Kirim
                        </button>
                    </form>
                </div>
            </div>
    </section>
</main><!-- End #main -->