<?php


if (isset($SERVER)&&$_SERVER['REQUEST_URI']=== $SERVER){
include '../vendor/autoload.php';  // Path ke file autoload dari Composer
}else{
    include 'vendor/autoload.php';
}
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

$key="a1b2c3";
// Fungsi koneksi ke MySQL
function connectToDatabase() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bayonet-karate";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    return $conn;
}

// Fungsi registrasi pengguna
function registerUser($username,$email, $password) {
    $conn = connectToDatabase();

    $query = "SELECT * FROM akun WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        mysqli_close($conn);
        return "Pengguna dengan username ini sudah terdaftar.";
    }
    

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $insertQuery = "INSERT INTO akun (id,username,email, password) VALUES ('','$username', '$email','$hashedPassword')";

    if (mysqli_query($conn, $insertQuery)) {
        mysqli_close($conn);
        return true;
    } else {
        mysqli_close($conn);
        return "Error: " . $insertQuery . "<br>" . mysqli_error($conn);
    }
}

// Fungsi login pengguna
function loginUser($username, $password) {
    $conn = connectToDatabase();
    $username = $_POST["username"];
    $password = $_POST["password"];
    $query = "SELECT * FROM akun WHERE username = '$username' || email = '$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);

        if (password_verify($password, $user['password'])) {
            $user_id = $user['id'];
            $username = $user['username'];
            $token = generateToken($user_id,$username);
            setcookie("bayonet-user", $token,time()+86400, "/bayonet-karate/anggota/", "", true, true);
            header('Location: anggota/dashboard.php');
            mysqli_close($conn);
exit;
        } else {
            mysqli_close($conn);
            return "Password salah.";
        }
    } else {
        mysqli_close($conn);
        return "Pengguna tidak ditemukan.";
    }
}

// Fungsi pembuatan token JWT
function generateToken($user_id,$username) {
   global $key;

    $payload = array(
        "user_id" => $user_id,
        "username" => $username,
        "session_id"=> bin2hex(random_bytes(32)),
        "exp" => time() + 3600
    );

    $token = JWT::encode($payload, $key,'HS256');

    return $token;
}

// Fungsi verifikasi token JWT
function verifyToken($token) {
    global $key;

    try {
        $decoded = JWT::decode($token,new Key ($key,"HS256"));
        return $decoded;
    } catch (Exception $e) {
        // Tampilkan pesan kesalahan
        echo 'Error: ' . $e->getMessage();
        return false;
    }
}


function logout(){
    setcookie("bayonet-user", "", time() - 3600);
    header("Location: ../login.php");
}
    ?>