<?= $this->extend('arsha/template') ?>

<?= $this->section('content') ?>

<main id="main">

  <!-- ======= Cliens Section ======= -->
  <?= $this->include('arsha/partials/clients'); ?>
  <!-- End Cliens Section -->

  <!-- ======= About Us Section ======= -->
  <?= $this->include('arsha/partials/list_artikel'); ?>
  <!-- End About Us Section -->

  <!-- ======= Team Section ======= -->
  <?= $this->include('arsha/partials/struktur'); ?>
  <!-- End Team Section -->

  <!-- ======= Contact Section ======= -->
  <?= $this->include('arsha/partials/contact'); ?>
  <!-- End Contact Section -->

</main>
<?= $this->endSection() ?>