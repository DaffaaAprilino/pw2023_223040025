<?php
session_start();

require('php/functions.php');
if (isset($_GET['search'])) {
  $keyword = $_GET['keyword'];
  $query = "SELECT * FROM 
  berita
  WHERE 
  judul LIKE '%$keyword%' 
  ";
  $berita = query($query);
  $populer = query("SELECT * FROM berita WHERE kategori_id = '6'");
  $utama = query("SELECT * FROM berita WHERE kategori_id = '7'");
  $rekomen = query("SELECT * FROM berita WHERE kategori_id = '8'");
} else {
  $berita = query("SELECT * FROM berita WHERE kategori_id != '6' AND kategori_id != '7' AND kategori_id != '8'");
  $populer = query("SELECT * FROM berita WHERE kategori_id = '6'");
  $utama = query("SELECT * FROM berita WHERE kategori_id = '7'");
  $rekomen = query("SELECT * FROM berita WHERE kategori_id = '8'");
}

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
        <a class="navbar-brand" href="index.php">DA<strong>News</strong> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="col-md-3">
          <form action="" method="get">
            <div class="input-group d-flex ms-auto my-4 my-lg-0">
              <input type="search" name="keyword" id="keyword" class="form-control" placeholder="Search news." autofocus autocomplete="off">
              <button class="btn btn-secondary" type="submit" name="search" id="search-button"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
          </form>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="health.php">HEALTH</a>
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
              <a class="nav-link" href="seleb.php">SELEB</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto pe-5">
            <?php if (isset($_SESSION['login'])) : ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="text-light fa-regular fa-circle-user fa-xl"></i>
                </a>
                <ul class="dropdown-menu">
                  <?php if ($_SESSION['role'] == 'admin') : ?>
                    <li><a class="dropdown-item" href="php/admin.php">Profile</a></li>
                  <?php else : ?>
                    <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                  <?php endif; ?>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
              </li>
            <?php else : ?>
              <li class="nav-item">
                <a class="nav-link active" href="login.php"><i class="fa-regular fa-circle-user fa-xl"></i></a>
              </li>
            <?php endif; ?>

          </ul>
        </div>
      </div>
    </nav>

    <!-- main content -->
    <hr>
    <div id="search-container">
      <?php if (!empty($berita)) : ?>
        <div class="row">
          <div class="col-sm-8 mb-3">
            <?php foreach ($berita as $brt) : ?>
              <div class="card">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="img/<?= $brt['gambar']; ?>" class="object-fit-cover" alt="#" style="width: 100%; height:100%;">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title"><?= $brt['judul']; ?></h5>
                      <p class="card-text"><?= $brt['isi']; ?></p>
                      <a href="<?= $brt['link']; ?>" class="btn btn-primary">Baca selengkapnya</a>
                    </div>
                  </div>
                </div>
              </div>
              <hr>
            <?php endforeach; ?>
          </div>

          <!-- topic 1 -->
          <div class="col-sm-4 mt-3 mb-3">
            <h4>Berita Terpopuler</h4>
            <hr>
            <ol class="list-group list-group-numbered">
              <?php foreach ($populer as $popu) : ?>
                <li class="list-group-item list-group-item-action"><a href="<?= $popu['link']; ?>"><?= $popu['judul']; ?></a></li>
              <?php endforeach; ?>
            </ol>
          </div>

          <!-- topic 2 -->
          <hr>
          <h4>Berita Utama Lainnya</h4>
          <div class="row row-cols-1 row-cols-md-3 g-4 mb-3 mt-1 justify-content-center">
            <?php foreach ($utama as $utm) : ?>
              <div class="col card-group">
                <div class="card shadow">
                  <img src="img/<?= $utm['gambar']; ?>" class="img-fluid rounded-start" alt="#">
                  <div class="card-body">
                    <p class="card-text"><a href="<?= $utm['link']; ?>"><b><?= $utm['judul']; ?></b></a></p>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>

          <!-- Topic 3 -->
          <hr>
          <h4>Rekomendasi untuk anda</h4>
          <div class="card mb-3 mt-2">
            <div class="card-group-flush">
              <div class="row row-cols-1 row-cols-md-3 g-4 mb-4 mt-1 justify-content-center">
                <?php foreach ($rekomen as $rkm) : ?>
                  <div class="col card-group">
                    <div class="card shadow">
                      <img src="img/<?= $rkm['gambar']; ?>" class="img-fluid rounded-start" alt="#">
                      <div class="card-body">
                        <h5 class="card-title"><?= $rkm['judul']; ?></h5>
                        <a href="<?= $rkm['link']; ?>" class="btn btn-primary">Baca selengkapnya</a>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        <?php else : ?>
          <div class="row">
            <div class="col-md-20">
              <div class="alert alert-danger text-center" role="alert">
                Daftar berita tidak ditemukan!
              </div>
            </div>
          </div>
        <?php endif; ?>
        </div>

    </div>

    <footer class="footer bg-dark text-light text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p>&copy; 2023 DA News.</p>
            <ul class="social-media-icons">
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
              <li><a href="#"><i class="fab fa-github"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>

</body>

</html>