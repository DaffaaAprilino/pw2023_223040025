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
        <div class="collapse navbar-collapse" id="navbarNav">
          <form class="d-flex ms-auto my-4 my-lg-0" role="search">
            <input class="form-control me-2" type="search" placeholder="Cari Berita" aria-label="Search">
            <button class="btn btn-light" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
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
              <a class="nav-link active" href="tech.php">TECH</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="seleb.php">SELEB</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" href="login.php"><i class="fa-regular fa-circle-user fa-xl"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- news tech -->
    <hr>
    <h1 style="text-align: center;">TECH</h1>
    <hr>
    <div class="row">
      <div class="col-sm-8 mb-3 mt-3">
        <div class="row row-cols-1 row-cols-md-2 g-4">
          <div class="col card-group">
            <div class="card shadow">
              <img src="img/hacker.jpeg" class="img-fluid rounded-start" alt="#">
              <div class="card-body">
                <h5 class="card-title">Kominfo Klarifikasi Soal Dugaan Bocoran Data BSI yang Beredar</h5>
                <p class="card-text">Kementerian Komunikasi dan Informatikamengklarifikasi soal dugaan kebocoran data nasabah Bank Syariah Indonesia (BSI)</p>
                <a href="tech1.php" class="btn btn-primary">Baca selengkapnya</a>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary">Last updated Senin, 22 Mei 2023 12:45 WIB</small>
              </div>
            </div>
          </div>
          <div class="col card-group">
            <div class="card shadow">
              <img src="img/gmail.jpeg" class="img-fluid rounded-start" alt="#">
              <div class="card-body">
                <h5 class="card-title">Akun Gmail-YouTube Tak Aktif 2 Tahun Akan Dihapus, Ada Pengecualian?</h5>
                <p class="card-text">Google akan menghapus akun pengguna jika dalam waktu 2 tahun terakhir tak kunjung login di segala platformnya</p>
                <a href="tech2.php" class="btn btn-primary">Baca selengkapnya</a>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary">Last updated Jumat, 19 Mei 2023 17:51 WIB</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- berita -->
      <div class="col-sm-4 mt-3 mb-3">
        <h4>Rekomendasi untuk anda</h4>
        <hr>
        <ol class="list-group list-group-numbered">
          <li class="list-group-item list-group-item-action"><a href="https://www.cnnindonesia.com/teknologi/20230516200459-192-950492/viral-modus-penipuan-kiriman-file-pdf-waspada-aksi-sedot-rekening">Viral Modus Penipuan Kiriman File Pdf, Waspada Aksi Sedot Rekening</a></li>
          <li class="list-group-item list-group-item-action"><a href="https://www.cnnindonesia.com/hiburan/20230520133417-234-951822/enzy-storia-resmi-menikah-dengan-molen-kasetra">Enzy Storia Resmi Menikah dengan Molen Kasetra</a></li>
          <li class="list-group-item list-group-item-action"><a href="https://www.cnnindonesia.com/gaya-hidup/20230517061733-255-950566/9-cara-meredakan-batuk-secara-efektif-alami-tanpa-obat">9 Cara Meredakan Batuk Secara Efektif Alami Tanpa Obat</a></li>
          <li class="list-group-item list-group-item-action"><a href="https://www.cnnindonesia.com/gaya-hidup/20230516172627-277-950425/johnny-depp-jadi-brand-ambassador-parfum-termahal-sepanjang-masa">Johnny Depp Jadi Brand Ambassador Parfum Termahal Sepanjang Masa</a></li>
          <li class="list-group-item list-group-item-action"><a href="https://www.cnnindonesia.com/gaya-hidup/20230520001313-277-951742/berkenalan-dengan-puteri-indonesia-2023-farhana-nariswari">Berkenalan dengan Puteri Indonesia 2023 Farhana Nariswari</a></li>
        </ol>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>