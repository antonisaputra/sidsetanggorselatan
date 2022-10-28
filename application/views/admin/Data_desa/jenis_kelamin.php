<main id="main" class="main">

  <div class="pagetitle">
    <h1>Jenis Kelamin</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Jenis Kelamin</li>
      </ol>
    </nav>

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
              <th scope="col">Kelompok</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data as $row) : ?>
              <tr>
                <th scope="row"><?= $no; ?></th>
                <td><?= $row['kelompok']; ?></td>
                <td><?= $row['jumlah']; ?></td>
                <td>
                  <a href="<?= base_url(); ?>Admin_data_desa/edit_jenis_kelamin/<?= $row['id']; ?>" class="btn btn-warning">Edit</a>
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