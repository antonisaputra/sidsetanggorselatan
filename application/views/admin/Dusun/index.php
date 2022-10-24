<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dusun</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dusun</li>
      </ol>
    </nav>
    <a href="<?= base_url(); ?>Dusun/tambahDusun" class="btn btn-primary">Tambah Dusun</a>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
      <!-- Left side columns -->
      <div class="col-lg-12">
        <?php if(!empty($this->session->flashdata('pesan'))): ?>
        <div class="alert <?= $this->session->flashdata('alert')?>" role="alert">
        <?= $this->session->flashdata('pesan')?>
        </div>
        <?php endif; ?>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Dusun</th>
              <th scope="col">Jumlah KK</th>
              <th scope="col">Jumlah Laki-Laki & Perempuan</th>
              <th scope="col">Jumlah Laki-Laki</th>
              <th scope="col">Jumlah Perempuan</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            <?php foreach ($dusun as $row) : ?>
              <tr>
                <th scope="row"><?= $no; ?></th>
                <td><?= $row['nama_dusun']; ?></td>
                <td><?= $row['jumlah_KK']; ?></td>
                <td><?= $row['jumlah_L'] + $row['jumlah_P']; ?></td>
                <td><?= $row['jumlah_L']; ?></td>
                <td><?= $row['jumlah_P']; ?></td>
                <td>
                  <a href="<?= base_url(); ?>Dusun/edit/<?= $row['id']; ?>" class="btn btn-warning">Edit</a>
                  <a href="<?= base_url(); ?>Dusun/hapus/<?= $row['id']; ?>" onclick="return confirm('Yakin Data Ingin Di Hapus');" class="btn btn-danger">Hapus</a>
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