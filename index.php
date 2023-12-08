<!DOCTYPE html>
<html lang="en">

<?php
$title = "Bayonet Karate Club";
include_once('components/header.php');
?>

<body class="">

  <!-- Spinner Start -->
  <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
  </div>
  <!-- Spinner End -->

  <!-- Navbar start -->
  <div class="container-fluid nav-bar fixed-top">
    <div class="container">
      <nav class="navbar navbar-light navbar-expand-lg py-3 ">
        <a href="" class="navbar-brand">
          <h1 class="fw-bold mb-0">BayonetKarateClub </h1>
        </a>
        <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="fa fa-bars text-primary"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav mx-auto">
            <a href="#beranda" class="nav-item nav-link" data-bs-target="beranda">Beranda</a>
            <a href="#tentang" class="nav-item nav-link" data-bs-target="tentang">Tentang Kami</a>
            <a href="#program" class="nav-item nav-link" data-bs-target="program">Program</a>
            <a href="#berita" class="nav-item nav-link" data-bs-target="berita">Berita</a>
            <a href="#kohai" class="nav-item nav-link" data-bs-target="kohai">Kohai</a>
            <a href="#galeri" class="nav-item nav-link" data-bs-target="galeri">Galeri</a>
            <!-- <a href="" class="nav-item nav-link d-block d-xl-none rounded-pill btn-primary btn w-90 mx-auto mt-4">Masuk</a> -->
          </div>

          <a href="login.php" class="btn btn-primary py-3 px-4 d-none d-xl-inline-block rounded-pill">Masuk</a>
        </div>
      </nav>
    </div>
  </div>
  <!-- Navbar End -->

  <!-- Hero Start -->
  <div id="beranda" class="container-fluid bg-light py-6 my-4 mt-0">
    <div class="container">
      <div class="row g-5 align-items-center">
        <div class="col-lg-7 col-md-12 ">
          <h1 class="display-1 mb-2 animated bounceInDown"><span class="text-primary">Bayonet</span>Karate Club</h1>
          <h5 class="animated bounceInDown">Ruang Gerak untuk berlatih Karate. </h5>
          <p class="mb-4 animated bounceInDown "> "Keberanian sejati tidak ditemukan dalam pukulan keras, tetapi dalam keteguhan hati menghadapi rintangan. Pahlawan adalah mereka yang tetap tegar di tengah badai."</p>
          <a href="register.php" class="btn btn-danger border-0 rounded-pill py-3 px-4 px-md-5 me-4 animated bounceInLeft">Gabung Sekarang !</a>

        </div>
        <div class="col-lg-5 col-md-12 order-first order-md-first order-lg-last">
          <img src="img/hero.png" class="img-fluid rounded animated zoomIn" alt="">
        </div>
      </div>
    </div>
  </div>
  <!-- Hero End -->


  <!-- About Start -->
  <div id="tentang" class="container-fluid py-6">
    <div class="container">
      <div class="row g-5 align-items-center">
        <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
          <img src="img/about.png" class="img-fluid rounded" alt="">
        </div>
        <div class="col-lg-7 wow bounceInUp" data-wow-delay="0.3s">
          <h1 class="display-5 mb-4">Tentang Bayonet Karate CLub</h1>
          <p class="mb-3 fw-bolder text-dark text-justify ">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae, rem quod ipsa quae asperiores Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo maxime. </p>
          <p class="mb-5 text-justify">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore eit esdioilore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullaemco laboeeiris nisi ut aliquip ex ea commodo consequat. Duis aute irure
            dolor iesdein reprehendeerit in voluptate velit esse cillum dolore.</p>

          <h6>Maulana Jonanda</h6>
          <h6 class="text-primary d-flex justify-content-between ">(Pemilik Bayonet Karate Club)
            <span class="d-flex justify-content-between"><button type="button" class="btn btn-sm btn-md  btn-outline-primary"><a href="./tentang.php">Baca Selengkapnya</a></button></span>
          </h6>

        </div>
      </div>
    </div>
  </div>
  <!-- About End -->

  <!-- Fact Start-->
  <div class="container-fluid faqt ">
    <div class="container">
      <div class="row g-4 align-items-center">
        <div class="col-lg-7">
          <div class="row g-4">
            <div class="col-sm-4 wow bounceInUp" data-wow-delay="0.5s">
              <div class="faqt-item bg-dark rounded p-4 text-center ">
                <i class="fas fa-user fa-4x mb-4 text-white"></i>
                <h1 class="display-4 text-white fw-bold" data-toggle="counter-up">25</h1>
                <p class="text-primary text-uppercase fw-bold mb-0">Kohai</p>
              </div>
            </div>
            <div class="col-sm-4 wow bounceInUp" data-wow-delay="0.3s">
              <div class="faqt-item bg-dark rounded p-4 text-center">
                <i class="fas fa-users fa-4x mb-4 text-white"></i>
                <h1 class="display-4 text-white fw-bold" data-toggle="counter-up">125</h1>
                <p class="text-primary text-uppercase fw-bold mb-0">Anggota</p>
              </div>
            </div>
            <div class="col-sm-4 wow bounceInUp" data-wow-delay="0.3s">
              <div class="faqt-item bg-dark rounded p-4 text-center">
                <i class="fas fa-trophy fa-4x mb-4 text-white"></i>
                <h1 class="display-4 text-white fw-bold" data-toggle="counter-up">7</h1>
                <p class="text-primary text-uppercase fw-bold mb-0">Kejuaraan</p>
              </div>
            </div>

          </div>
        </div>
        <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
          <div class="video">
            <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/8bRBtJ_wqvI?si=gaR88BRHuHT0pK6D " data-bs-target="#videoModal">
              <span></span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Video -->
  <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content rounded-0">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- 16:9 aspect ratio -->
          <div class="ratio ratio-16x9">
            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always" allow="autoplay" autoplay></iframe>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Fact End -->

  <!-- Program Start -->
  <div id="program" class="container-fluid service py-6">
    <div class="container">
      <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
        <h1 class="display-5 mb-5">PROGRAM <span class="text-primary">KAMI</span></h1>
      </div>
      <div class="row g-4 ">
        <?php
        $i = 1;
        while ($i <= 3) : ?>
          <div class="col-lg-4 col-md-6 col-sm-12 wow bounceInUp mx-md-auto" data-wow-delay="0.1s">
            <div class="card" height="200px">
              <img src=" img/card.jpg" height="200px" class="card-img-top  " alt="...">
              <div class="card-body">
                <h5 class="card-title text-center">Program A</h5>
                <h6 class="card-title text-center text-primary">Senin | 10.00 - 12.00 </h6>
                <p class="card-text  custom-truncate" id="truncatableText<?= $i ?>">
                  Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat voluptates quos in quis accusantium debitis at excepturi itaque. Recusandae quos temporibus qui voluptate rerum omnis dolores fugit laudantium numquam aspernatur?
                </p>

                <div class="text-center mt-4">
                  <a class="" onclick="toggleTruncate(<?= $i ?>)" role="button"><i class="fa fa-chevron-down text-primary fa-lg" id="arrow<?= $i ?>"></i></a>

                </div>
              </div>
            </div>
          </div>
        <?php $i++;
        endwhile; ?>
      </div>
    </div>
  </div>
  <!-- Program End -->

  <!-- Berita Start -->
  <div id="berita" class="container-fluid py-6">
    <div class="container">
      <div class="text-center wow bounceInUp" data-wow-delay="0.1s">

        <h1 class="display-5 mb-5">BERITA <span class="text-primary">TERBARU</span></h1>
        <div class="text-end mb-2">
          <a href="berita.php" class="btn btn-sm btn-outline-primary">lihat berita lainnya >></a>
        </div>
      </div>

      <div class="owl-carousel owl-theme berita-carousel wow bounceInUp" data-wow-delay="0.1s">
        <?php
        $i = 1;
        while ($i <= 5) : ?>

          <div class="card">
            <img src=" img/card.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary btn-card btn-md">Baca Selengkapnya</a>
            </div>
          </div>

        <?php $i++;
        endwhile; ?>
      </div>


    </div>
  </div>
  <!-- Berita End -->

  <!-- Kohai Start -->
  <div id="kohai" class="container-fluid team py-6">
    <div class="container">
      <div class="text-center wow bounceInUp" data-wow-delay="0.1s">

        <h1 class="display-5 mb-5">PARA KOHAI</h1>
        <div class="text-end mb-2 ">
          <a href="" class="btn btn-sm btn-outline-primary  ">Lihat Kohai Lainnya >></a>
        </div>
      </div>
      <div class="row g-4">
        <?php $v = 1;
        while ($v <= 4) : ?>
          <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.1s">
            <div class="team-item rounded">
              <img class="img-fluid rounded-top w-100 " src="img/Faraz.jpg" alt="">
              <div class="team-content text-center py-3 bg-dark rounded-bottom">
                <h4 class="text-primary">Faraz</h4>
                <p class="text-white mb-0">Decoration Chef</p>
              </div>
              <div class="team-icon d-flex flex-column justify-content-center m-4">
                <a class="share btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fas fa-share-alt"></i></a>
                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fab fa-twitter"></i></a>
                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>
        <?php $v++;
        endwhile; ?>
      </div>
    </div>
  </div>
  <!-- Kohai End -->

  <!-- Galeri Start -->
  <div id="galeri" class="container-fluid py-6">
    <div class="container">
      <div class="text-center wow bounceInUp" data-wow-delay="0.1s">`

        <h1 class="display-5 mb-5">GALERI <span class="text-primary">TERBARU</span></h1>
        <div class="text-end mb-2 ">
          <a href="" class="btn btn-sm btn-outline-primary  ">Lihat Galeri >></a>
        </div>
      </div>

      <div class="owl-carousel owl-theme berita-carousel wow bounceInUp" data-wow-delay="0.1s">
        <?php
        $i = 1;
        while ($i <= 5) : ?>

          <div class="card">
            <img src=" img/card.jpg" class="card-img-center" alt="...">
          </div>

        <?php $i++;
        endwhile; ?>
      </div>


    </div>
  </div>
  <!-- Galeri End -->

  <?php include_once('components/footer.php') ?>


  <!-- Back to Top -->
  <a href="#" class="btn btn-md-square btn-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

  <?php include_once('components/javascript.php') ?>

</body>

</html>