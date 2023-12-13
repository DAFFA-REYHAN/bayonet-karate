<!DOCTYPE html>
<html lang="en">
<?php
$title = "Login";
include_once('components/header.php');
require "./controller/auth_controller.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Ambil data dari formulir
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmPassword = $_POST["confirmPassword"];

  // Periksa apakah kata sandi dan konfirmasi kata sandi sesuai
  if ($password != $confirmPassword) {
      echo "Kata sandi dan konfirmasi kata sandi tidak sesuai.";
  } else {
      // Panggil fungsi registrasi
      $result = registerUser($username,$email, $password);

      // Tampilkan pesan hasil registrasi
      if ($result === true) {
          echo "Registrasi berhasil. Silakan login.";
      } else {
          echo "Registrasi gagal. Pesan: " . $result;
      }
  }
}

?>

<body class="my-auto py-5">

  <div
    class="container d-flex flex-column align-items-center justify-content-center vh-100 m-auto m-md-auto m-lg-auto ">
    <div class="m-auto ">
      <div class="d-flex justify-content-between gap-2 align-items-center mb-2 ">
        <a href="index.php">
          <i class="fas fa-arrow-circle-left fa-lg text-dark"> Back</i>
        </a>
        <!-- Pills navs -->
        <ul class="nav nav-pills " id="ex1" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link " href="login.php" role="tab" aria-disabled="false">Login</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link active disabled" href="" role="tab" aria-disabled="true">Register</a>
          </li>
        </ul>
        <!-- Pills navs -->
      </div>

      <div class="card m-auto m-md-auto m-lg-auto w-auto ">
        <div class="row g-0 ">
          <div class=" col-lg-6 d-none d-sm-none d-md-none d-lg-block p-2  ">
            <img src=" img/register.jpg" alt="login" class=" rounded-2 h-100 w-100">
          </div>
          <div class="col-lg-6 p-5 my-auto order-first">

            <img src="logo.png" alt="Logo" class="mb-4">
            <h1>Daftar Akun</h1>
            <p class="mb-4">Masukkan data dengan benar | Tata cara pendaftaran anggota

              <i class="fas fa-question-circle " type="button" data-bs-toggle="modal"
                data-bs-target="#exampleModal"></i>

            </p>
            <form action="register.php" method="post">
              <div class="mb-3">
                <label for="username" class="fw-bold text-dark">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
              </div>
              <div class="mb-3">
                <label for="email" class="fw-bold text-dark">Alamat Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="mb-3">
                <label for="password" class="fw-bold text-dark">Kata Sandi</label>
                <div class="input-group">
                  <input type="password" class="form-control" id="password" name="password" required>
                  <span class="input-group-text" onclick="password_show_hide()" role="button">
                    <i class=" far fa-eye" id="show_eye"></i>
                    <i class="far fa-eye-slash d-none" id="hide_eye"></i>
                  </span>
                </div>
              </div>
              <div class="mb-3">
                <label for="confirmPassword" class="fw-bold text-dark">Konfirmasi Kata Sandi</label>
                <div class="input-group">
                  <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                  <span class="input-group-text" onclick="confirmPassword_show_hide()" role="button">
                    <i class=" far fa-eye" id="confirm_show_eye"></i>
                    <i class="far fa-eye-slash d-none" id="confirm_hide_eye"></i>
                  </span>
                </div>
              </div>

              <button type="submit" class="btn btn-primary p-2 w-100">Submit</button>
              <p class="text-center my-3"> Sudah menjadi anggota? <a href="register.php" class="text-primary">Masuk</a>
              </p>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class=" d-flex justify-content-end px-3 pt-3">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ol>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste reiciendis sequi quidem molestiae tempore
              alias del.</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste reiciendis sequi quidem molestiae tempore
              alias del.</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste reiciendis sequi quidem molestiae tempore
              alias del.</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste reiciendis sequi quidem molestiae tempore
              alias del.</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste reiciendis sequi quidem molestiae tempore
              alias del.</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste reiciendis sequi quidem molestiae tempore
              alias del.</li>
          </ol>
        </div>

      </div>
    </div>
  </div>
  <!-- EndModal -->

  <?php include('components/javascript.php'); ?>

</body>

</html>