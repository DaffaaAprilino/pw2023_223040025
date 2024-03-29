<?php
require 'functions.php';
if (isset($_GET['search'])) {
  $keyword = $_GET['keyword'];
  $query = "SELECT * FROM 
  berita
  WHERE 
  judul LIKE '%$keyword%' OR
  kategori_id LIKE '%$keyword%' OR
  tanggal_publikasi LIKE '%$keyword%' 
  ";
  $berita = query($query);
} else {
  $berita = query("SELECT * FROM berita");
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DA News</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="../fontawesome/css/all.min.css">
</head>
<style>
  @media print {
    .cari {
      display: none;
    }
  }
</style>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">DA<strong>News</strong> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav nav-underline mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="../index.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">DAFTAR</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../profile.php">PROFILE</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
          <li class="nav-item">
            <a class="nav-link" href="#" id="print"><i class="fa-solid fa-print fa-lg"></i></a>
          </li>
          <a class="nav-link" href="../logout.php"><i class="fas fa-right-from-bracket fa-lg"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container mt-3">
    <h3>Daftar berita</h4>
      <hr>
      <div class="row">
        <div class="col-md-7 ">
          <a href="tambah.php" class="btn btn-primary">Tambah Berita</a>
        </div>
        <div class="col-md-5 justify-content-end">
          <form action="" method="get" class="cari">
            <div class="input-group my-3">
              <input type="search" name="keyword" id="keyword" class="form-control" placeholder="Cari daftar berita." autofocus autocomplete="off">
              <button class="btn btn-primary" type="submit" name="search" id="search-button"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
          </form>
        </div>
      </div>

      <?php if ($berita) : ?>
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Gambar</th>
              <th scope="col">Judul</th>
              <th scope="col">Isi</th>
              <th scope="col">Kategori</th>
              <th scope="col">Tanggal Publikasi</th>
              <th scope="col">Link</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; ?>
            <?php foreach ($berita as $brt) : ?>
              <tr>
                <td><?= $i++; ?></td>
                <td>
                  <img src="../img/<?= $brt['gambar']; ?>" width="50">
                </td>
                <td><?= $brt['judul']; ?></td>
                <td><?= $brt['isi']; ?></td>
                <td><?= $brt['kategori_id']; ?></td>
                <td><?= $brt['tanggal_publikasi']; ?></td>
                <td><?= $brt['link']; ?></td>
                <td>
                  <a href="ubah.php?id=<?= $brt['id']; ?>" class="badge text-bg-warning">Ubah</a> |
                  <a href="hapus.php?id=<?= $brt['id']; ?>" class="badge text-bg-danger" onclick="return confirm('Yakin?');">Hapus</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script>
    const printBtn = document.getElementById('print');
    printBtn.addEventListener('click', function() {
      print();
    })
  </script>
</body>

</html>