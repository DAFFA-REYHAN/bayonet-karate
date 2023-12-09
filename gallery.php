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
                        <li class="breadcrumb-item active" aria-current="page">Gallery</li>

                    </ol>

                </nav>
            </div>

        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Galllery Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <?php $gallery=1;
                while($gallery <= 3 ):?>
            <div class="gallery py-5">
                <div class="text-center wow bounceInUp " data-wow-delay="0.1s">
                    <h1 class="display-5 mb-1">Nama Kegiatan</h1>
                    <small
                        class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">2/11/2023</small>
                </div>
                <div class="owl-carousel owl-theme  testimonial-carousel-1 mb-4 wow bounceInUp" data-wow-delay="0.1s">
                    <?php $gallery1=1;
                while($gallery1 <= 6 ):?>
                    <div class="rounded">

                        <img src="./img/card.jpg" class="img-fluid " alt="">

                    </div>

                    <?php $gallery1++; endwhile; ?>
                </div>
                <div class="owl-carousel owl-theme testimonial-carousel-2 wow bounceInUp w-75 mx-auto"
                    data-wow-delay="0.3s">
                    <?php $gallery1=1;
                while($gallery1 <= 6 ):?>
                    <div class="rounded">

                        <img src="./img/card.jpg" class="img-fluid " alt="">

                    </div>

                    <?php $gallery1++; endwhile; ?>
                </div>
            </div>
            <?php $gallery++; endwhile; ?>
            <!-- Pagination -->
            <nav aria-label="Page navigation example " class="d-flex justify-content-center">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- End Pagination -->
        </div>
    </div>
    <!-- Gallery End -->



    <?php include_once('components/footer.php') ?>


    <!-- Back to Top -->
    <a href="#" class="btn btn-md-square btn-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

    <?php include_once('components/javascript.php') ?>

</body>

</html>