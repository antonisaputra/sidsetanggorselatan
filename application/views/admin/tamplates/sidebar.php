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
          <i class="bi bi-grid"></i>
          <span>Berita</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link <?= active_menu('Admin_komentar'); ?>" href="<?= base_url(); ?>Admin_komentar">
          <i class="bi bi-grid"></i>
          <span>Komentar</span>
        </a>
      </li>
  </aside><!-- End Sidebar-->