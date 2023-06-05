<?php session_start(); ?>

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
            <li class="nav-item">
              <?php if (isset($_SESSION['login'])) : ?>
            </li>
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
          </ul>
        </div>
      </div>
    </nav>

    <!-- main content -->
    <hr>
    <div class="row">
      <div class="col-sm-8 mb-3">
        <div class="card">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="img/sakit.jpeg" class="img-fluid rounded-start" alt="#" style="width: 100%; height:100%;">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">6 Makanan Terbaik Saat Masuk Angin, Bikin Cepat Sembuh</h5>
                <p class="card-text">Sedang tidak enak badan atau masuk angin? Ini rekomendasi makanan terbaik agar pulih lebih cepat</p>
                <a href="https://www.cnnindonesia.com/gaya-hidup/20230519172320-261-951638/6-makanan-terbaik-saat-masuk-angin-bikin-cepat-sembuh" class="btn btn-primary">Baca selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="card">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="img/argentina.jpeg" class="img-fluid rounded-start" alt="#" style="width: 100%; height:100%;">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Respons PSSI Usai AFA Resmi Umumkan Indonesia vs Argentina 19 Juni</h5>
                <p class="card-text">PSSI memberikan respons usai Federasi Sepak Bola Argentina (AFA) mengumumkan jadwal Argentina vs Indonesia di Jakarta pada 19 Juni. Berikut respons PSSI usai Argentina resmi umumkan lawan Timnas Indonesia digelar 19 Juni.</p>
                <a href="https://www.cnnindonesia.com/olahraga/20230522085234-142-952253/respons-pssi-usai-afa-resmi-umumkan-indonesia-vs-argentina-19-juni" class="btn btn-primary">Baca selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="card">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="img/gibran.jpeg" class="img-fluid rounded-start" alt="#" style="width: 100%; height:100%;">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Gibran Usai Dipanggil DPP PDIP: Saya Tegak Lurus Arahan Ketua Umum</h5>
                <p class="card-text">Wali Kota Solo sekaligus kader PDIP, Gibran Rakabuming menegaskan akan tegak lurus terhadap arahan Ketua Umum Megawati Soekarnoputri terkait Pilpres 2024.</p>
                <a href="https://www.cnnindonesia.com/nasional/20230522121547-617-952377/gibran-usai-dipanggil-dpp-pdip-saya-tegak-lurus-arahan-ketua-umum" class="btn btn-primary">Baca selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="card">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="img/hacker.jpeg" class="img-fluid rounded-start" alt="#" style="width: 100%; height:100%;">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Kominfo Klarifikasi Soal Dugaan Bocoran Data BSI yang Beredar</h5>
                <p class="card-text">Kementerian Komunikasi dan Informatikamengklarifikasi soal dugaan kebocoran data nasabah Bank Syariah Indonesia (BSI)</p>
                <a href="https://www.cnnindonesia.com/teknologi/20230522122857-192-952382/kominfo-klarifikasi-soal-dugaan-bocoran-data-bsi-yang-beredar" class="btn btn-primary">Baca selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="card">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="img/desta.png" class="img-fluid rounded-start" alt="#" style="width: 100%; height:100%;">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Desta Mahendra Gugat Cerai Natasha Rizki</h5>
                <p class="card-text">Deddy Mahendra Desta resmi mengajukan gugatan cerai talak kepada istrinya, Natasha Rizki. Gugatan itu diajukan Desta dan telah terdaftar di Pengadilan Agama (PA) Jakarta Selatan pada 11 Mei 2023</p>
                <a href="https://www.cnnindonesia.com/hiburan/20230517164738-234-950926/desta-mahendra-gugat-cerai-natasha-rizki" class="btn btn-primary">Baca selengkapnya</a>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- topic 1 -->
      <div class="col-sm-4 mt-3 mb-3">
        <h4>Berita Terpopuler</h4>
        <hr>
        <ol class="list-group list-group-numbered">
          <li class="list-group-item list-group-item-action"><a href="https://money.kompas.com/read/2023/05/15/190000026/indonesia-dan-mesir-tandatangani-kontrak-dagang-rp-12-8-triliun" target="_blank">Indonesia dan Mesir Tandatangani Kontrak Dagang Rp 12,8 Triliun</a></li>
          <li class="list-group-item list-group-item-action"><a href="https://bola.kompas.com/read/2023/05/15/19000078/eduardo-almeida-resmi-latih-rans-nusantara-fc" target="_blank">Eduardo Almeida Resmi Latih RANS Nusantara FC</a></li>
          <li class="list-group-item list-group-item-action"><a href="https://www.kompas.com/tren/read/2023/05/15/190000465/9-minuman-penurun-berat-badan-apa-saja-" target="_blank">9 Minuman Penurun Berat Badan, Apa Saja?</a></li>
          <li class="list-group-item list-group-item-action"><a href="https://www.kompas.id/baca/nusantara/2023/05/15/desa-wisata-di-lombok-mulai-bersiap-sambut-motogp-2023-di-mandalika?apn=id.kompas.app" target="_blank">Desa Wisata di Lombok Mulai Bersiap Sambut MotoGP 2023 di Mandalika</a></li>
          <li class="list-group-item list-group-item-action"><a href="https://bandung.kompas.com/read/2023/05/15/190302178/new-balance-bangun-pabrik-di-cirebon-menteri-luhut-sebut-indonesia-bersiap" target="_blank">New Balance Bangun Pabrik di Cirebon, Menteri Luhut Sebut Indonesia Bersiap Salip Vietnam</a></li>
        </ol>
      </div>

      <!-- topic 2 -->
      <hr>
      <h4>Berita Utama Lainnya</h4>
      <div class="row row-cols-1 row-cols-md-3 g-4 mb-3 mt-1 justify-content-center">
        <div class="col card-group">
          <div class="card shadow">
            <img src="img/sandi.jpg" class="img-fluid rounded-start" alt="#">
            <div class="card-body">
              <p class="card-text"><a href="https://www.liputan6.com/lifestyle/read/5287352/ikut-war-tiket-konser-coldplay-di-jakarta-sandiaga-uno-ingatkan-beli-di-jalur-resmi"><b>Ikut War Tiket Konser Coldplay di Jakarta, Sandiaga Uno Ingatkan Beli di Jalur Resmi</b></a></p>
            </div>
          </div>
        </div>
        <div class="col card-group">
          <div class="card shadow">
            <img src="img/lifter.jpg" class="img-fluid rounded-start" alt="#">
            <div class="card-body">
              <p class="card-text"><a href="https://www.liputan6.com/tekno/read/5287367/lifter-rahmat-erwin-abdullah-sumbang-emas-di-sea-games-2023-dan-pecahkan-3-rekor-tuai-pujian-warganet"><b>Lifter Rahmat Erwin Abdullah Sumbang Emas di SEA Games 2023 dan Pecahkan 3 Rekor, Tuai Pujian Warganet</b></a></p>
            </div>
          </div>
        </div>
        <div class="col card-group">
          <div class="card shadow">
            <img src="img/thailand.jpg" class="img-fluid rounded-start" alt="#">
            <div class="card-body">
              <p class="card-text"><a href="https://www.liputan6.com/bola/read/5287208/jelang-final-sepak-bola-sea-games-2023-pelatih-thailand-bocorkan-strategi-jinakkan-timnas-indonesia-u-22"><b>Jelang Final Sepak Bola SEA Games 2023, Pelatih Thailand Bocorkan Strategi Jinakkan Timnas Indonesia U-22</b></a></p>
            </div>
          </div>
        </div>
        <div class="col card-group">
          <div class="card shadow">
            <img src="img/bogor.jpeg" class="img-fluid rounded-start" alt="#">
            <div class="card-body">
              <p class="card-text"><a href="https://www.liputan6.com/news/read/5287342/kondisi-terkini-habib-bahar-bin-smith-usai-ditembak-orang-tak-dikenal-di-bogorp"><b>Kondisi Terkini Habib Bahar bin Smith Usai Ditembak Orang Tak Dikenal di Bogor</b></a></p>
            </div>
          </div>
        </div>
        <div class="col card-group">
          <div class="card shadow">
            <img src="img/pln.jpeg" class="img-fluid rounded-start" alt="#">
            <div class="card-body">
              <p class="card-text"><a href="https://www.liputan6.com/bisnis/read/5286487/pln-buka-32-posisi-lowongan-kerja-di-rekrutmen-bersama-bumn-2023-ayo-daftar"><b>PLN Buka 32 Posisi Lowongan Kerja di Rekrutmen Bersama BUMN 2023, Ayo Daftar</b></a></p>
            </div>
          </div>
        </div>
      </div>

      <!-- Topic 3 -->
      <hr>
      <h4>Rekomendasi untuk anda</h4>
      <div class="card mb-3 mt-2">
        <div class="card-group-flush">
          <div class="row row-cols-1 row-cols-md-3 g-4 mb-4 mt-1 justify-content-center">
            <div class="col card-group">
              <div class="card shadow">
                <img src="img/penipuan.jpg" class="img-fluid rounded-start" alt="#">
                <div class="card-body">
                  <h5 class="card-title">Viral Modus Penipuan Kiriman File Pdf, Waspada Aksi Sedot Rekening</h5>
                  <a href="https://www.cnnindonesia.com/teknologi/20230516200459-192-950492/viral-modus-penipuan-kiriman-file-pdf-waspada-aksi-sedot-rekening" class="btn btn-primary" target="_blank">Baca selengkapnya</a>
                </div>
              </div>
            </div>
            <div class="col card-group">
              <div class="card shadow">
                <img src="img/enzy.png" class="img-fluid rounded-start" alt="#">
                <div class="card-body">
                  <h5 class="card-title">Enzy Storia Resmi Menikah dengan Molen Kasetra</h5>
                  <a href="https://www.cnnindonesia.com/hiburan/20230520133417-234-951822/enzy-storia-resmi-menikah-dengan-molen-kasetra" class="btn btn-primary" target="_blank">Baca selengkapnya</a>
                </div>
              </div>
            </div>
            <div class="col card-group">
              <div class="card shadow">
                <img src="img/batuk.jpeg" class="img-fluid rounded-start" alt="#">
                <div class="card-body">
                  <h5 class="card-title">9 Cara Meredakan Batuk Secara Efektif Alami Tanpa Obat</h5>
                  <a href="https://www.cnnindonesia.com/gaya-hidup/20230517061733-255-950566/9-cara-meredakan-batuk-secara-efektif-alami-tanpa-obat" class="btn btn-primary" target="_blank">Baca selengkapnya</a>
                </div>
              </div>
            </div>
            <div class="col card-group">
              <div class="card shadow">
                <img src="img/johnny.jpeg" class="img-fluid rounded-start" alt="#">
                <div class="card-body">
                  <h5 class="card-title">Johnny Depp Jadi Brand Ambassador Parfum Termahal Sepanjang Masa</h5>
                  <a href="https://www.cnnindonesia.com/gaya-hidup/20230516172627-277-950425/johnny-depp-jadi-brand-ambassador-parfum-termahal-sepanjang-masa" class="btn btn-primary" target="_blank">Baca selengkapnya</a>
                </div>
              </div>
            </div>
            <div class="col card-group">
              <div class="card shadow">
                <img src="img/puteri.jpeg" class="img-fluid rounded-start" alt="#">
                <div class="card-body">
                  <h5 class="card-title">Berkenalan dengan Puteri Indonesia 2023 Farhana Nariswari</h5>
                  <a href="https://www.cnnindonesia.com/gaya-hidup/20230520001313-277-951742/berkenalan-dengan-puteri-indonesia-2023-farhana-nariswari" class="btn btn-primary" target="_blank">Baca selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
        </div>
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


</body>

</html>