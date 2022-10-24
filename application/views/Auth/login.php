<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SID Setanggor Selatan</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url(); ?>assets/img/logo lotim.png" rel="icon">
    <link href="<?= base_url(); ?>assets/user/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url(); ?>assets/user/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/user/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/user/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/user/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/user/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/user/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url(); ?>assets/user/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Arsha - v4.8.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <section class="vh-100">
        <div class="container-fluid h-custom">

            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-2">
                    <img src="<?= base_url(); ?>assets/user/img/logo lotim.png" class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-6 offset-xl-1">
                    <form class="mt-5" action="" method="POST">
                        <h1 class="mb-5">Login Admin SID Setanggor Selatan</h1>
                        <?php if (!empty($this->session->flashdata('pesan'))) : ?>
                            <div class="alert <?= $this->session->flashdata('alert') ?>" role="alert">
                                <?= $this->session->flashdata('pesan') ?>
                            </div>
                        <?php endif; ?>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control form-control-lg" placeholder="Masukkan Username" />
                            <?= form_error('username', '<small class="text-danger">', '</small>') ?>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Masukkan Password" />
                            <?= form_error('password', '<small class="text-danger">', '</small>') ?>
                        </div>


                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Vendor JS Files -->
    <script src="<?= base_url(); ?>assets/user/vendor/aos/aos.js"></script>
    <script src="<?= base_url(); ?>assets/user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets/user/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url(); ?>assets/user/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url(); ?>assets/user/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets/user/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="<?= base_url(); ?>assets/user/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url(); ?>assets/user/js/main.js"></script>

</body>

</html>