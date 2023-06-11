<?php
session_start();
require "php/functions.php";
//Periksa apakah pengguna memiliki akses admin
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
  header("Location: login.php");
} else {
  header("location: profile.php");
}

// Fungsi untuk mengambil informasi pengguna dari tabel "user"
function getUserInfo($username)
{
  // Lakukan koneksi ke database dan ambil data pengguna berdasarkan username
  // Gantikan "your_host", "your_username", "your_password", dan "your_database" sesuai dengan pengaturan database Anda
  $conn = koneksi();

  // Periksa koneksi database
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }

  // Bersihkan username untuk mencegah serangan SQL injection
  $clean_username = mysqli_real_escape_string($conn, $username);

  // Lakukan query untuk mendapatkan informasi pengguna berdasarkan username
  $query = "SELECT * FROM user WHERE username = '$clean_username'";
  $result = mysqli_query($conn, $query);

  // Periksa apakah query berhasil dieksekusi
  if (!$result) {
    echo "Error: " . mysqli_error($conn);
    exit();
  }

  // Ambil hasil query
  $user = mysqli_fetch_assoc($result);

  // Tutup koneksi ke database
  mysqli_close($conn);

  return $user;
}

// Ambil informasi pengguna dari tabel "user"
$user = getUserInfo($_SESSION['username']);

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DA News</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/profile.css">
</head>

<body>
  <div class="container">
    <div class="card profile-card">
      <a href="index.php" class="back-link">Kembali ke Halaman Utama</a>
      <h1>Halo <?= $_SESSION['username']; ?> </h1>

      <div class="card-img-top profile-img">
        <img src="img/nofoto.jpg" alt="Default Image" class="img-profile">
      </div>
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="upload-container my-3">
          <input type="file" name="image" id="upload-file" onchange="displayFileName()" class="form-control-file">
          <label for="upload-file" class="btn btn-primary">Ganti Photo Profile</label>
          <span id="file-name"></span>
        </div>
        <button type="submit" name="upload" class="btn btn-primary upload-btn">Upload Image</button>
      </form>
      <div class="card-body profile-info">
        <p><strong>Username:</strong> <?php echo $user['username']; ?></p>
        <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
      </div>
      <a class="btn btn-danger logout-link" href="logout.php">Logout</a>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>