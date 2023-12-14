<!DOCTYPE html>
<html lang="en">
<?php 


require_once __DIR__ .'/controller/auth_controller.php';

if (isset($_GET['action']) && $_GET['action'] == 'logout') {
  logout(); // Panggil fungsi logout()
}


if ($_COOKIE["bayonet-user"] ) {
    $token = $_COOKIE["bayonet-user"];
    if($a=verifyToken($token)){
      $username = $a->username;
  
  } else{
    header('Location: login.php');
    exit;
  }
}
  else{
    header('Location: login.php');
    exit;
  }

?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Ini Adalah Halaman setelah login <?= $username ?></h1>

  <a href="?action=logout"><button>Logout</button></a>


</body>

</html>