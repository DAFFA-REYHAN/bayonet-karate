<!DOCTYPE html>
<html lang="en">

<?php
$title = "Bayonet Karate Club";
require_once __DIR__ . '/components/header.php';
?>

<body class="">

  <!-- Spinner Start -->
  <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
  </div>
  <!-- Spinner End -->


  <!-- Breadcrumb Start -->
  <div class="container-fluid service pt-5">
    <div class="container">
      <div class="d-flex pb-4 justify-content-between align-items-center">
        <div class="">
          <a href="index.php">
            <i class="fas fa-arrow-circle-left fa-lg text-dark"> Back</i>
          </a>
        </div>
        <div class="">
          <h4>Logo Bayonet Karate</h1>
        </div>
      </div>
      <div class="row card bg-gray-800">
        <nav aria-label="breadcrumb ">
          <ol class="breadcrumb my-auto py-2">
            <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Berita </li>
          </ol>
        </nav>
      </div>

    </div>
  </div>
  <!-- Breadcrumb End -->


  <!-- Content Berita -->
  <div class="container-fluid service py-4">
    <div class="container">
      <div class="input-group w-75 mx-auto">
        <input type="text" class="form-control" placeholder="Cari Berita terbaru...." aria-label="Cari berita disini" aria-describedby="basic-addon1">
        <span class="input-group-text" type="button"><i class="fas fa-search"></i></span>
      </div>
      <div class="row my-4">

        <div class="col-md-8">
          <h1>saojdas</h1>
        </div>
        <div class="col-md-4">
          <h2>ldjsnfklsfj</h2>
        </div>
      </div>

    </div>
  </div>

  <!-- Content Berita End -->



  <?php include_once('components/footer.php') ?>


  <!-- Back to Top -->
  <a href="#" class="btn btn-md-square btn-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

  <?php include_once('components/javascript.php') ?>

</body>

</html>