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
                        <li class="breadcrumb-item active" aria-current="page">Para Kohai </li>

                    </ol>

                </nav>
            </div>

        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Content Kohai -->
    <div class="container-fluid service pt-4">
        <div class="container">
            <h1 class="text-center">Para Kohai</h1>
            <div class="input-group w-75 mx-auto">
                <input type="text" class="form-control" placeholder="Cari Kohai ...." aria-label="Cari berita disini"
                    aria-describedby="basic-addon1">
                <span class="input-group-text" type="button"><i class="fas fa-search"></i></span>
            </div>
            <div class="row g-2 py-4">
                <?php $v = 1;
                    while ($v <= 18) : ?>
                <div class="col-lg-2 col-md-6 wow bounceInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded">
                        <img class="img-fluid rounded-top w-100 " src="img/Faraz.jpg" alt="">
                        <div class="team-content text-center py-3 bg-dark rounded-bottom">
                            <h4 class="text-primary">Faraz</h4>
                            <p class="text-white mb-0">Decoration Chef</p>
                        </div>
                        <div class="team-icon d-flex flex-column justify-content-center m-4">
                            <a class="share btn btn-primary btn-md-square rounded-circle mb-2" href=""><i
                                    class="fas fa-share-alt"></i></a>
                            <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <?php $v++;
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
    </div>

    <!-- Content Kohai End -->



    <?php include_once('components/footer.php') ?>


    <!-- Back to Top -->
    <a href="#" class="btn btn-md-square btn-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

    <?php include_once('components/javascript.php') ?>

</body>

</html>