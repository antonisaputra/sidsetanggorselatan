<main id="main" class="main">

    <div class="pagetitle">
        <h1>Banner</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Banner</li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-md-12">
                <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="gambar_lama" value="<?= $banner['gambar']; ?>">
                    <div class="col-md-4">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" name="judul" class="form-control" id="judul" value="<?= $banner['judul'] ?>">
                        <?= form_error('judul','<small class="text-danger">','</small>'); ?>
                    </div>    
                    <div class="col-md-12">
                        <label for="deskripsi" class="form-label">Deskripsi</label><br>
                        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"><?= $banner['deskripsi']; ?></textarea>
                    </div>
                    <div class="col-md-4">
                        <img src="<?= base_url(); ?>assets/upload/<?= $banner['gambar']; ?>" width="100" alt="" srcset=""><br>
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" name="gambar" class="form-control" id="gambar">
                        <?= form_error('judul','<small class="text-danger">','</small>'); ?>
                    </div>
                    <div class="col-12">
                        <a href="<?= base_url('Banner'); ?>" class="btn btn-danger">Kembali</a>
                        <button class="btn btn-primary" type="submit">Edit Banner</button>
                    </div>
                </form>
                <!-- End Browser Default Validation -->

            </div>
        </div>
    </section>
</main>