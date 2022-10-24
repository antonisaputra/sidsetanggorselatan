<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dusun</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dusun</li>
                <li class="breadcrumb-item active">Tambah</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-md-12">
                <form class="row g-3" action="" method="POST">
                    <div class="col-md-4">
                        <label for="rt" class="form-label">Nama RT</label>
                        <input type="text" name="rt" class="form-control" id="rt">
                        <?= form_error('rt', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="col-md-4">
                        <label for="dusun">Pilih Dusun</label>
                        <select class="form-select" name="dusun" id="dusun" aria-label="Default select example">
                            <?php foreach($dusun as $row): ?>
                            <option value="<?= $row['id']; ?>"><?= $row['nama_dusun']; ?></option>
                            <?php endforeach; ?>
                        </select><?= form_error('dusun', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="col-md-4">
                        <label for="jumlah_kk" class="form-label">Jumlah KK</label>
                        <input type="number" name="jumlah_kk" class="form-control" id="jumlah_kk">
                        <?= form_error('jumlah_kk', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="col-md-4">
                        <label for="jumlah_l" class="form-label">Jumlah Laki-Laki</label>
                        <input type="number" name="jumlah_l" class="form-control" id="jumlah_l">
                        <?= form_error('jumlah_l', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="col-md-4">
                        <label for="jumlah_p" class="form-label">Jumlah Perempuan</label>
                        <input type="number" name="jumlah_p" class="form-control" id="jumlah_p">
                        <?= form_error('jumlah_p', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="col-12">
                        <a href="<?= base_url(); ?>Rt" class="btn btn-danger">Kembali</a>
                        <button class="btn btn-primary" type="submit">Tambah Dusun</button>
                    </div>
                </form>
                <!-- End Browser Default Validation -->

            </div>
        </div>
    </section>
</main>