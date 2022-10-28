<!-- ======= Hero Section ======= -->

<main id="main">

    <section id="team" class="team section-bg mt-5">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Profil Desa</h2>
            </div>
            <div class="col-lg-10">
                <p>Data Demografi Berdasar Populasi Per Wilayah</p>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col" colspan="3">Wilayah/Ketua</th>
                            <th scope="col">KK</th>
                            <th scope="col">L+P</th>
                            <th scope="col">L</th>
                            <th scope="col">P</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;?>
                        <?php foreach ($dusun as $row) : ?>
                            <tr>
                                <th scope="row"><?= $no++; ?></th>
                                <td colspan="3"><?= $row['nama_dusun']; ?></td>
                                <td><?= $row['jumlah_KK']; ?></td>
                                <td><?= $row['jumlah_L'] + $row['jumlah_P']; ?></td>
                                <td><?= $row['jumlah_L']; ?></td>
                                <td><?= $row['jumlah_P']; ?></td>
                            </tr>
                            <?php $Rt = $this->db->get_where('RT', ['id_dusun' => $row['id']])->result_array(); ?>
                            <?php $i = 1; ?>
                            <?php foreach ($Rt as $R) : ?>
                                <tr>
                                    <th scope="row"></th>
                                    <td></td>
                                    <td><?= $i++;?></td>
                                    <td>RT.<?= $R['RT']; ?></td>
                                    <td><?= $R['jumlah_KK']; ?></td>
                                    <td><?= $R['jumlah_L']+ $R['jumlah_P']; ?></td>
                                    <td><?= $R['jumlah_L']; ?></td>
                                    <td><?= $R['jumlah_P']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
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
                <input type="email"  class="form-control" name="email" id="email" placeholder="email@gmai.com">
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