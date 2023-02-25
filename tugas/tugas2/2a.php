<?php
$nama_depan = "Daffaa";
$nama_belakang = "Aprilino";

for ($i = 1; $i <= 100; $i++)
  if ($i % 5 == 0 && $i % 3 == 0) {
    echo $nama_depan . " " . $nama_belakang . '<br>';
  } elseif ($i % 5 == 0) {
    echo $nama_belakang . '<br>';
  } elseif ($i % 3 == 0) {
    echo $nama_depan . '<br>';
  } else {
    echo $i . '<br>';
  }
