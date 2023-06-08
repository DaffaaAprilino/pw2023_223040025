<?php
require('functions.php');
$name = 'Home';

// cari siswa berdasarkan keyword ketika tombol diklik
if (isset($_GET['search'])) {
  $keyword = $_GET['keyword'];
  $query = "SELECT * FROM 
  mahasiswa 
  WHERE 
  nama LIKE '%$keyword%' OR 
  jurusan LIKE '%$keyword%' OR
  email LIKE '%$keyword%' OR
  nim LIKE '%$keyword%'
  ";
  $students = query($query);
} else {
  //  siapkan data $students
  $students = query("SELECT * FROM mahasiswa");
}





// dd(BASE_URL === $_SERVER["REQUEST_URI"]);
require('views/index.view.php');
