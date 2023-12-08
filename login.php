<!DOCTYPE html>
<html lang="en">
<?php
$title = "Login";
include_once('components/header.php');
?>

<body class="">


  <div class="container d-flex flex-column align-items-center justify-content-center vh-100 m-auto m-md-auto m-lg-auto ">
    <div class="m-auto ">
      <div class="d-flex justify-content-between gap-2 align-items-center mb-2 ">
        <a href="index.php">
          <i class="fas fa-arrow-circle-left fa-lg text-dark"> Back</i>
        </a>
        <!-- Pills navs -->
        <ul class="nav nav-pills " id="ex1" role="tablist">
          <li class="nav-item" role="presentation">

            <a class="nav-link active disabled" href="" role="tab" aria-disabled="true">Login</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link " href="register.php" role="tab" aria-disabled="false">Register</a>
          </li>
        </ul>
        <!-- Pills navs -->

      </div>

      <div class="card m-auto m-md-auto m-lg-auto w-auto ">
        <div class="row g-0 ">
          <div class=" col-lg-6 d-none d-sm-none d-md-none d-lg-block p-2 ">
            <img src=" img/login.jpg" alt="login" class=" rounded-2 h-100 w-100">
          </div>
          <div class="col-lg-6 p-5 my-auto">

            <img src="logo.png" alt="Logo" class="mb-4">
            <h1>Masuk Akun</h1>
            <p class="mb-4">Masukkan data sesuai dengan data yang valid</p>
            <form action="" method="post">
              <div class="mb-3">
                <label for="username" class="fw-bold text-dark">Alamat Email</label>
                <input type="email" class="form-control" id="username" name="username" required>
              </div>
              <div class="mb-3">
                <label for="password" class="fw-bold text-dark">Password</label>
                <div class="input-group">
                  <input type="password" class="form-control" id="password" name="password" required>
                  <span class="input-group-text" onclick="password_show_hide()" role="button">
                    <i class=" far fa-eye" id="show_eye"></i>
                    <i class="far fa-eye-slash d-none" id="hide_eye"></i>
                  </span>
                </div>
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="rememberme">
                <label class="form-check-label text-dark" for="rememberme">Remember Me</label>
              </div>
              <button type="submit" class="btn btn-primary p-2 w-100">Masuk</button>
              <p class="text-center my-3"> Belum menjadi anggota? <a href="register.php" class="text-primary">Daftar sekarang!</a> </p>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>


  <?php include('components/javascript.php'); ?>

</body>

</html>