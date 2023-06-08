<?php
require('functions.php');
$name = 'Tambah Berita';

// saat tombol submit diklik
if (isset($_POST["tambah"])) {


  // jalankan fungsi tambah()
  if (tambah($_POST) > 0) {
    echo "<script>
    alert('Data berhasil ditambahkan!');
    document.location.href = 'admin.php';
    </script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DA News</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-3">
    <h1>Tambah Berita</h1>

    <div class="row">
      <div class="col-md-8">
        <form action="" method="post">
          <div class="mb-3 w-25">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" name="judul" id="judul" autofocus required>
          </div>
          <div class="mb-3">
            <label for="isi" class="form-label">isi</label>
            <input type="text" class="form-control" name="isi" id="isi">
          </div>
          <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="text" class="form-control" name="gambar" id="gambar">
          </div>
          <div class="mb-3">
            <label for="kategori" class="form-label">kategori</label>
            <input type="text" class="form-control" name="kategori_id" id="kategori_id">
          </div>
          <div class="mb-3">
            <label for="tanggalpublikasi" class="form-label">tanggal publikasi</label>
            <input type="date" class="form-control" name="tanggal_publikasi" id="tanggal_publikasi">
          </div>
          <div class="mb-3">
            <label for="link" class="form-label">link</label>
            <input type="text" class="form-control" name="link" id="link">
          </div>
          <button class="btn btn-primary" type="tambah" name="tambah">Tambah Data</button>
        </form>
      </div>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>