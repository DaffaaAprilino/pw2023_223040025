<?php

include 'php/functions.php';

// error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
  header("Location: index.php");
}

if (isset($_POST['submit'])) {
  $conn = koneksi();
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $cpassword = md5($_POST['cpassword']);

  if ($password == $cpassword) {
    $sql = "SELECT * FROM user WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if (!$result->num_rows > 0) {
      $sql = "INSERT INTO user (username, email, password)
                    VALUES ('$username', '$email', '$password')";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        echo "<script>alert('Selamat, registrasi berhasil!')</script>";
        $username = "";
        $email = "";
        $_POST['password'] = "";
        $_POST['cpassword'] = "";
      } else {
        echo "<script>alert('Terjadi kesalahan! Mohon cek ulang.')</script>";
      }
    } else {
      echo "<script>alert('Email Sudah Terdaftar.')</script>";
    }
  } else {
    echo "<script>alert('Password Tidak Sesuai')</script>";
  }
}

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <!-- css -->
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>

<body>
  <div class="container">
    <form action="" method="POST" class="login-email">
      <p class="login-text" style="font-size: 2rem; font-weight: 800;">Daftar</p>
      <div class="input-group">
        <input type="text" placeholder="Masukan Username" name="username" value="<?php echo $username; ?>" required autocomplete="off">
      </div>
      <div class="input-group">
        <input type="email" placeholder="Masukan Email" name="email" value="<?php echo $email; ?>" required>
      </div>
      <div class="input-group">
        <input type="password" placeholder="Masukan Password" name="password" value="<?php echo $_POST['password']; ?>" required>
      </div>
      <div class="input-group">
        <input type="password" placeholder="Konfirmasi Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
      </div>
      <div class="input-group">
        <button name="submit" class="btn">Daftar</button>
      </div>
      <p class="login-register-text">Sudah Punya Akun? <a href="login.php">Masuk</a></p>
      <a href="index.php" class="btn btn-secondary">Kembali ke Halaman Utama</a>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>