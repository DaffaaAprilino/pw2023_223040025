<?php
require "php/functions.php"
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
      <h1>Halo </h1>

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
        <p><strong>Username:</strong></p>
        <p><strong>Email:</strong></p>
      </div>
      <a class="btn btn-danger logout-link" href="logout.php">Logout</a>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>