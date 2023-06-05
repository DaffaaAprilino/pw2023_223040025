<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "tugasbesar";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
  die("<script>alert('Gagal tersambung dengan database.')</script>");
}


function tambah($data)
{
  $conn = koneksi();

  $judul = htmlspecialchars($data['judul']);
  $isi = htmlspecialchars($data['isi']);
  $gambar = htmlspecialchars($data['gambar']);
  $kategori_id = htmlspecialchars($data['kategori_id']);
  $tanggal_publikasi = htmlspecialchars($data['tanggal_publikasi']);

  $query = "INSERT INTO berita VALUES (null, '$judul', '$isi', '$gambar', '$kategori_id', '$tanggal_publikasi')";

  mysqli_query($conn, $query) or die(mysqli_error($conn));


  return mysqli_affected_rows($conn);
}
