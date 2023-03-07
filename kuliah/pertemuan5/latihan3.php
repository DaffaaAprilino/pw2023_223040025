<?php
$mahasiswa = [['Daffaa', '🐈', '🍜', ['aprilino', '🐇', '🍕']]];
echo $mahasiswa[0][2];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data mahasiswa</title>
</head>

<body>
  <h2>Daftar Mahasiswa</h2>
  <?php foreach ($mahasiswa as $m) { ?>
    <ul>
      <li>Nama: <?= $m[0] ?></li>
      <li>Peiharaan: <?= $m[1] ?></li>
      <li>Makanan favorit: <?= $m[2] ?></li>
    </ul>
  <?php } ?>
</body>

</html>