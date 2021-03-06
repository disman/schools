<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <?= $this->include('arsha/commons/meta_header'); ?>
</head>

<body>

  <!-- ======= Header ======= -->
  <?= $this->include('arsha/layouts/header'); ?>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Better Solutions For Your Business</h1>
          <h2>We are team of talented designers making websites with Bootstrap</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="<?= base_url('arsha'); ?>/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <!-- main -->
  <?= $this->renderSection('content') ?>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <?= $this->include('arsha/layouts/footer'); ?>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('arsha') ?>/vendor/aos/aos.js"></script>
  <script src="<?= base_url('arsha') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('arsha') ?>/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url('arsha') ?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url('arsha') ?>/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url('arsha') ?>/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url('arsha') ?>/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('arsha') ?>/js/main.js"></script>

</body>

</html>