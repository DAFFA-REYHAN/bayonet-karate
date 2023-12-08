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
            <li class="breadcrumb-item active" aria-current="page">Tentang</li>
          </ol>
        </nav>
      </div>

    </div>
  </div>
  <!-- Breadcrumb End -->

  <!-- NavTabs Start -->
  <div class="container-fluid service pb-5 pt-3">
    <div class="container ">
      <ul class="nav nav-tabs justify-content-center  mb-3" id="pills-tab" role="tablist">
        <li class="nav-item px-md-2" role="presentation">
          <button class="nav-link active" id="tentang-tab" data-bs-toggle="pill" data-bs-target="#tentang" type="button" role="tab" aria-controls="tentang" aria-selected="true">Tentang</button>
        </li>
        <li class="nav-item px=md-2" role="presentation">
          <button class="nav-link" id="sejarah-tab" data-bs-toggle="pill" data-bs-target="#sejarah" type="button" role="tab" aria-controls="sejarah" aria-selected="false">Sejarah</button>
        </li>
        <li class="nav-item px-md-2" role="presentation">
          <button class="nav-link" id="visimisi-tab" data-bs-toggle="pill" data-bs-target="#visimisi" type="button" role="tab" aria-controls="visimisi" aria-selected="false">Visi & Misi</button>
        </li>
      </ul>
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="tentang" role="tabpanel" aria-labelledby="tentang-tab">
          <h1>Tentang Bayonet Karate</h1>
          <img src="./img/about.png" alt="" class="w-100 mb-4" height="400px">
          <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic quaerat aspernatur doloremque recusandae cupiditate, exercitationem dignissimos nemo animi cum consequuntur tenetur ipsam aperiam ipsum minus. Labore maxime officiis qui debitis!</p>
        </div>
        <div class="tab-pane fade" id="sejarah" role="tabpanel" aria-labelledby="sejarah-tab">
          <h1>Sejarah Bayonet Karate</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati neque minima, quos consectetur doloribus tempore esse, harum optio consequatur repellendus suscipit explicabo eum. Repudiandae nobis sit voluptate voluptatum quae repellat fugiat, rem eius, temporibus quisquam rerum laudantium enim natus minus incidunt praesentium sunt numquam? Aliquid, ex. Accusamus eos quod, voluptas, beatae quisquam vel saepe eaque commodi optio, omnis molestiae error quo totam! Incidunt dignissimos eaque voluptatem hic vel sit, quidem harum in minima ratione necessitatibus possimus numquam, quisquam praesentium amet blanditiis rem nobis ipsum magni voluptatibus ea, quaerat nemo. Quo quisquam accusantium blanditiis a tenetur itaque, eveniet nam ex incidunt?</p>
        </div>
        <div class="tab-pane fade" id="visimisi" role="tabpanel" aria-labelledby="visimisi-tab">
          <h1 class="pt-4">Visi Bayonet Karate</h1>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos perspiciatis ipsum temporibus eos ducimus rerum! Consequatur atque, ab autem cupiditate eum dicta, eveniet ad id ipsa pariatur repellendus error rem officiis natus excepturi ut. Vero impedit, vitae voluptate explicabo fugit consectetur harum error tempora repudiandae totam quas provident suscipit sapiente.</p>
          <h1 class="pt-4">Misi Bayonet Karate</h1>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos perspiciatis ipsum temporibus eos ducimus rerum! Consequatur atque, ab autem cupiditate eum dicta, eveniet ad id ipsa pariatur repellendus error rem officiis natus excepturi ut. Vero impedit, vitae voluptate explicabo fugit consectetur harum error tempora repudiandae totam quas provident suscipit sapiente.</p>
        </div>
      </div>
    </div>


  </div>
  </div>
  <!-- NavTabs End -->


  <?php include_once('components/footer.php') ?>


  <!-- Back to Top -->
  <a href="#" class="btn btn-md-square btn-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

  <?php include_once('components/javascript.php') ?>

</body>

</html>