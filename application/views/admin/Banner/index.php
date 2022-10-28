<main id="main" class="main">

  <div class="pagetitle">
    <h1>Banner</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Banner</li>
      </ol>
    </nav>

    <div class="col-md-4 mb-3">
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Cari Data Berita" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Cari</button>
      </form>
    </div>

    <a href="<?= base_url(); ?>Banner/tambahBanner" class="btn btn-primary">Tambah Banner</a>
  </div><!-- End Page Title -->



  <section class="section dashboard">
    <div class="row">
      <!-- Left side columns -->
      <div class="col-lg-12">
        <?php if (!empty($this->session->flashdata('pesan'))) : ?>
          <div class="alert <?= $this->session->flashdata('alert') ?>" role="alert">
            <?= $this->session->flashdata('pesan') ?>
          </div>
        <?php endif; ?>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Gambar</th>
              <th scope="col">Judul</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            <?php foreach ($banner as $row) : ?>
              <tr>
                <th scope="row"><?= $no; ?></th>
                <td><img src="<?= base_url(); ?>assets/upload/<?= $row['gambar']; ?>" width="30"></td>
                <td><?= $row['judul']; ?></td>
                <td><?= $row['deskripsi']; ?></td>
                <td>
                  <a href="<?= base_url(); ?>Banner/editBanner/<?= $row['id']; ?>" class="btn btn-warning">Edit</a>
                  <a href="<?= base_url(); ?>Banner/delete/<?= $row['id']; ?>" onclick="return confirm('Yakin Data Ingin Di Hapus');" class="btn btn-danger">Hapus</a>
                </td>
              </tr>
              <?php $no++; ?>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div><!-- End Left side columns -->
    </div>
  </section>

</main><!-- End #main -->