<?php
require '../php/functions.php';
$keyword = $_GET['keyword'];
$query = "SELECT * FROM 
berita
WHERE 
judul LIKE '%$keyword%'
";
$berita = query($query);
//query placeholder untuk $populer, $utama, dan $rekomen
$populer = query("SELECT * FROM berita WHERE kategori_id = '6'");
$utama = query("SELECT * FROM berita WHERE kategori_id = '7'");
$rekomen = query("SELECT * FROM berita WHERE kategori_id = '8'");
?>

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