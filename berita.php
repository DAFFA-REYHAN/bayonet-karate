<!DOCTYPE html>
<html lang="en">

<?php
$title = "Bayonet Karate Club";
require_once __DIR__ . '/components/header.php';
?>

<body class="">

  <!-- Spinner Start -->
  <div id="spinner"
    class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
  </div>
  <!-- Spinner End -->


  <!-- Breadcrumb Start -->
  <div class="container-fluid service pt-5">
    <div class="container">
      <h6 class="text-end">Logo Bayonet Karate</h6>
      <div class="row card bg-light">
        <div class="text-end">

        </div>
        <nav aria-label="breadcrumb ">
          <ol class="breadcrumb my-auto py-2">
            <li class="breadcrumb-item">
              <a href="index.php"><i class="fas fa-arrow-circle-left fa-md"></i> Beranda</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Berita </li>

          </ol>

        </nav>
      </div>

    </div>
  </div>
  <!-- Breadcrumb End -->


  <!-- Content Berita -->
  <div class="container-fluid service pt-4">
    <div class="container">
      <h1 class="text-center">Berita</h1>
      <div class="input-group w-75 mx-auto">
        <input type="text" class="form-control" placeholder="Cari Berita terbaru...." aria-label="Cari berita disini"
          aria-describedby="basic-addon1">
        <span class="input-group-text" type="button"><i class="fas fa-search"></i></span>
      </div>
      <div class="row my-4">
        <div class="col-md-9">
          <div class="col">
            <?php $berita =1; 
            while($berita <= 6 ):?>
            <div class="card mb-3">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="./img/hero.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                      additional content. This content is a little bit longer.....</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div>
            <?php $berita++;
            endwhile; ?>
          </div>
          <!-- Pagination -->
          <nav aria-label="..." class="d-flex justify-content-center mt-4">
            <ul class="pagination">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item active" aria-current="page">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
          <!-- End Pagination -->
        </div>
        <div class="col-md-3">
          <div class="card p-4">
            <h2>Kategori</h2>
            <ul class="nav flex-column">
              <?php
            $kategori =1; 
            while($kategori <= 8 ):?>
              <li class="nav-item">
                <a href="" class="nav-link">Karate</a>
              </li>
              <?php $kategori++;
            endwhile; ?>
            </ul>
          </div>
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