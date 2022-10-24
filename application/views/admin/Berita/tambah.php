<main id="main" class="main">

    <div class="pagetitle">
        <h1>Berita</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Berita</li>
                <li class="breadcrumb-item active">Tambah</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-md-12">
                <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                    
                    <div class="col-md-4">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" name="judul" class="form-control" id="judul">
                        <?= form_error('judul','<small class="text-danger">','</small>'); ?>
                    </div>
                    <div class="col-md-4">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" name="gambar" class="form-control" id="gambar">
                        <?= form_error('judul','<small class="text-danger">','</small>'); ?>
                    </div>
                    <div class="col-md-12">
                        <label for="deskripsi" class="form-label">Deskripsi</label><br>
                        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>
                    </div>
                    <div class="col-12">
                        <a href="" class="btn btn-danger">Kembali</a>
                        <button class="btn btn-primary" type="submit">Tambah Dusun</button>
                    </div>
                </form>
                <!-- End Browser Default Validation -->

            </div>
        </div>
    </section>
</main>