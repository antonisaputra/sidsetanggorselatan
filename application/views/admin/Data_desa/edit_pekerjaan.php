<main id="main" class="main">

    <div class="pagetitle">
        <h1>Pekerjaan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Pekerjaan</li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-md-12">
                <form class="row g-3" action="" method="POST">
                    <div class="col-md-4">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <input type="number" name="jumlah" class="form-control" id="jumlah" value="<?= $data['jumlah'] ?>">
                        <?= form_error('jumlah','<small class="text-danger">','</small>'); ?>
                    </div>
                    <div class="col-12">
                        <a href="<?= base_url('Admin_data_desa/pekerjaan'); ?>" class="btn btn-danger">Kembali</a>
                        <button class="btn btn-primary" type="submit">Edit Pekerjaan</button>
                    </div>
                </form>
                <!-- End Browser Default Validation -->

            </div>
        </div>
    </section>
</main>