<?php
$mahasiswa = [
  [
    "nama" => "Daffaa Aprilino",
    "nrp" => "223040025",
    "jurusan" => "Teknik Informatika",
    "email" => "Daffaaprilino7@gmail.com",
    "gambar" => "1.png"
  ],
  [
    "nama" => "Akbar Nur Iman",
    "nrp" => "223040028",
    "jurusan" => "Teknik Informatika",
    "email" => "AkbarNurTeknikI@gmail.com",
    "gambar" => "2.png"
  ],
  [
    "nama" => "Alvin Abdul Sahab",
    "nrp" => "223040026",
    "jurusan" => "Teknik Informatika",
    "email" => "AlvinAbdulS@gmail.com",
    "gambar" => "3.png"
  ],
  [
    "nama" => "Bhadrika Aryaputra Hermawan",
    "nrp" => "223040018",
    "jurusan" => "Teknik Informatika",
    "email" => "BhadrikaA@gmail.com",
    "gambar" => "4.png"
  ],
  [
    "nama" => "Daniel Satya Ramadhan",
    "nrp" => "223040011",
    "jurusan" => "Teknik Informatika",
    "email" => "DanielSatya@gmail.com",
    "gambar" => "5.png"
  ],
  [
    "nama" => "Davina Putri Kusuma",
    "nrp" => "223040016",
    "jurusan" => "Teknik Informatika",
    "email" => "DavinaPutri@gmail.com",
    "gambar" => "6.png"
  ],
  [
    "nama" => "Farid Maulana Suherman",
    "nrp" => "223040008",
    "jurusan" => "Teknik Informatika",
    "email" => "FaridMaulana@gmail.com",
    "gambar" => "7.png"
  ],
  [
    "nama" => "Muhammad Al Ghifari",
    "nrp" => "223040001",
    "jurusan" => "Teknik Informatika",
    "email" => "AlGhifari@gmail.com",
    "gambar" => "8.png"
  ],
  [
    "nama" => "Muhammad Alfa Rizky",
    "nrp" => "223040004",
    "jurusan" => "Teknik Informatika",
    "email" => "AlfaR@gmail.com",
    "gambar" => "9.png"
  ],
  [
    "nama" => "Revalian Ananda Taufan",
    "nrp" => "223040012",
    "jurusan" => "Teknik Informatika",
    "email" => "revalian@gmail.com",
    "gambar" => "10.png"
  ],

]
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>

  <h1>Daftar Mahasiswa</h1>

  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      <li>
        <img src="img/<?= $mhs["gambar"]; ?>">
      </li>
      <li>Nama : <?= $mhs["nama"]; ?> </li>
      <li>NRP : <?= $mhs["nrp"]; ?> </li>
      <li>Jurusan : <?= $mhs["jurusan"]; ?> </li>
      <li>Email : <?= $mhs["email"]; ?> </li>
    </ul>

  <?php endforeach; ?>

</body>

</html>