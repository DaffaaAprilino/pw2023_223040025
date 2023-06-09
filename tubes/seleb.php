<?php
session_start();
require('php/functions.php');

$berita = query("SELECT * FROM berita WHERE kategori_id = '5'");
$rekomen = query("SELECT * FROM berita WHERE kategori_id = '8'");
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DA News</title>
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <!-- css -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>

<body>
  <div class="container">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">DA<strong>News</strong> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="col-md-3">
          <form action="" method="get">
            <div class="input-group d-flex ms-auto my-4 my-lg-0">
              <input type="search" name="keyword" id="keyword" class="form-control" placeholder="Search news." autofocus autocomplete="off">
              <button class=" btn btn-secondary" type="submit" name="search" id="search-button"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
          </form>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="health.php">HEALTH</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sport.php">SPORT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="nasional.php">NASIONAL</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tech.php">TECH</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="seleb.php">SELEB</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto pe-5">
            <li class="nav-item">
              <?php if (isset($_SESSION['login'])) : ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="text-light fa-regular fa-circle-user fa-xl"></i>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
              </ul>
            </li>
          <?php else : ?>
            <a class="nav-link active" href="login.php"><i class="fa-regular fa-circle-user fa-xl"></i></a>
          <?php endif; ?>
          </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- news seleb -->
    <hr>
    <h1 style="text-align: center;">SELEB </h1>
    <hr>
    <div class="row">
      <div class="col-sm-8 mb-3 mt-3">
        <div class="row row-cols-1 row-cols-md-2 g-4">
          <?php foreach ($berita as $brt) : ?>
            <div class="col card-group">
              <div class="card shadow">
                <img src="img/<?= $brt['gambar']; ?>" class="img-fluid rounded-start" alt="#">
                <div class="card-body">
                  <h5 class="card-title"><?= $brt['judul']; ?></h5>
                  <p class="card-text"><?= $brt['isi']; ?></p>
                  <a href="<?= $brt['link']; ?>" class="btn btn-primary">Baca selengkapnya</a>
                </div>
                <div class="card-footer">
                  <small class="text-body-secondary">Last updated, <?= $brt['tanggal_publikasi']; ?></small>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- berita -->
      <div class="col-sm-4 mt-3 mb-3">
        <h4>Rekomendasi untuk anda</h4>
        <hr>
        <ol class="list-group list-group-numbered">
          <?php foreach ($rekomen as $rkm) : ?>
            <li class="list-group-item list-group-item-action"><a href="<?= $rkm['link']; ?>"><?= $rkm['judul']; ?></a></li>
          <?php endforeach; ?>
        </ol>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>