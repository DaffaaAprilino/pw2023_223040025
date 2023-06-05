<?php
require 'functions.php';

$berita = query("SELECT * FROM berita");

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DA News</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <h4>Halo, Selamat datang Admin DA News</h4>
      </a>
    </div>
  </nav>
  <div class="container mt-3">
    <h3>Daftar berita</h4>
      <hr>
      <a href="tambah.php" class="btn btn-primary">Tambah Berita</a>
      <table class="table">
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
                <img src="img/<?= $brt['gambar']; ?>" width="50">
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

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>