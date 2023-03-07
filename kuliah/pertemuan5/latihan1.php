<?php

// ARRAY
// MEMBUAT ARRAY

$hari = array('senin', 'selasa', 'rabu');
$bulan = ['januari', 'febuari', 'maret'];
$myArray = ['daffaa', 18, false];
$binatang = ['🐈', '🐇', '🐒', '🐨', '🐎'];

// mencetak array
echo $hari[2]; // 1 elemen menggunakan indexnya
echo "<hr>";
var_dump($hari);
echo "<hr>";
print_r($bulan);
echo "<hr>";
var_dump($myArray);
echo "<hr>";

// manipulasi Array
// menambah elemen di akhir menggunakan index
$hari[] = 'kamis';
$hari[] = "jum'at";
print_r($hari);
echo "<hr>";
// menambah elemen diakhir menggunakan array_push()
array_push($bulan, 'april', 'mei', 'juni');
print_r($bulan);
echo "<hr>";
// menambah elemen di awal array_unshift()
array_unshift($binatang, '🐍');
print_r($binatang);
echo "<hr>";
// menghapus elemen diakhir array_pop()
array_pop($hari);
print_r($hari);
echo "<hr>";
// menghapus elemen diawal array_shift()
array_shift($hari);
print_r($hari);
