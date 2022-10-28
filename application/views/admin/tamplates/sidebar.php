  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link <?= active_menu('Admin'); ?>" href="<?= base_url('Admin'); ?>">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link <?= active_dusun_rt() ?>" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Data Wilayah Administratif</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= base_url(); ?>Dusun">
              <i class="bi bi-circle"></i><span>Dusun</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url(); ?>Rt">
              <i class="bi bi-circle"></i><span>RT</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link <?= active_menu('Berita'); ?>" href="<?= base_url(); ?>Berita">
        <i class="fa-solid fa-newspaper"></i>
          <span>Berita</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link <?= active_menu('Admin_komentar'); ?>" href="<?= base_url(); ?>Admin_komentar">
        <i class="fa-regular fa-comment"></i>
          <span>Komentar</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= active_menu('Banner'); ?>" href="<?= base_url(); ?>Banner">
        <i class="fa-solid fa-image"></i>
          <span>Banner</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link <?= active_dusun_rt() ?>" data-bs-target="#datadesa" data-bs-toggle="collapse" href="#">
        <i class="fa-solid fa-database"></i></i><span>Data Desa</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="datadesa" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= base_url(); ?>Admin_data_desa/pendidikan_KK">
              <i class="bi bi-circle"></i><span>Pendidikan Dalam KK</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url(); ?>Admin_data_desa/pendidikan_ditempuh">
              <i class="bi bi-circle"></i><span>Pendidikan Di Tempuh</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url(); ?>Admin_data_desa/pekerjaan">
              <i class="bi bi-circle"></i><span>Pekerjaan</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url(); ?>Admin_data_desa/agama">
              <i class="bi bi-circle"></i><span>Agama</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url(); ?>Admin_data_desa/jenis_kelamin">
              <i class="bi bi-circle"></i><span>Jenis Kelamin</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url(); ?>Admin_data_desa/warga_negara">
              <i class="bi bi-circle"></i><span>Warga Negara</span>
            </a>
          </li>
        </ul>
  </aside><!-- End Sidebar-->