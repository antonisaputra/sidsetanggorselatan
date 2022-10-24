<main id="main" class="main">

  <div class="pagetitle">
    <h1>Berita</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Berita</li>
      </ol>
    </nav>

    <div class="col-md-4 mb-3">
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Cari Data Berita" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Cari</button>
      </form>
    </div>

    <a href="<?= base_url(); ?>Berita/tambahBerita" class="btn btn-primary">Tambah Berita</a>
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
              <th scope="col">Tanggal Upload</th>
              <th scope="col">Judul</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            <?php foreach ($berita as $row) : ?>
              <tr>
                <th scope="row"><?= $no; ?></th>
                <td><img src="<?= base_url(); ?>assets/upload/<?= $row['gambar']; ?>" width="30"></td>
                <td><?= $row['waktu']; ?></td>
                <td><?= $row['judul']; ?></td>
                <td>
                  <a href="<?= base_url(); ?>Berita/edit/<?= $row['id']; ?>" class="btn btn-warning">Edit</a>
                  <a href="<?= base_url(); ?>Berita/delete/<?= $row['id']; ?>" onclick="return confirm('Yakin Data Ingin Di Hapus');" class="btn btn-danger">Hapus</a>
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