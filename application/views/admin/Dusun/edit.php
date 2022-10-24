<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dusun</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dusun</li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-md-12">
                <form class="row g-3" action="" method="POST">
                    <div class="col-md-4">
                        <label for="nama_dusun" class="form-label">Nama dusun</label>
                        <input type="text" name="nama_dusun" class="form-control" id="nama_dusun" value="<?= $dusun['nama_dusun']; ?>">
                        <?= form_error('nama_dusun','<small class="text-danger">','</small>'); ?>
                    </div>
                    <div class="col-md-4">
                        <label for="jumlah_kk" class="form-label">Jumlah KK</label>
                        <input type="number" name="jumlah_kk" class="form-control" id="jumlah_kk" value="<?= $dusun['jumlah_KK']; ?>">
                        <?= form_error('jumlah_kk','<small class="text-danger">','</small>'); ?>
                    </div>
                    <div class="col-md-4">
                        <label for="jumlah_l" class="form-label">Jumlah Laki-Laki</label>
                        <input type="number" name="jumlah_l" class="form-control" id="jumlah_l" value="<?= $dusun['jumlah_L']; ?>">
                        <?= form_error('jumlah_l','<small class="text-danger">','</small>'); ?>
                    </div>
                    <div class="col-md-4">
                        <label for="jumlah_p" class="form-label">Jumlah Perempuan</label>
                        <input type="number" name="jumlah_p" class="form-control" id="jumlah_p" value="<?= $dusun['jumlah_P'] ?>">
                        <?= form_error('jumlah_p','<small class="text-danger">','</small>'); ?>
                    </div>
                    <div class="col-12">
                        <a href="" class="btn btn-danger">Kembali</a>
                        <button class="btn btn-primary" type="submit">Edit Dusun</button>
                    </div>
                </form>
                <!-- End Browser Default Validation -->

            </div>
        </div>
    </section>
</main>