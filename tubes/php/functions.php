<?php
function koneksi()
{
  $server = "localhost";
  $user = "root";
  $pass = "";
  $database = "tugasbesar";

  return mysqli_connect($server, $user, $pass, $database);
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $judul = htmlspecialchars($data['judul']);
  $isi = htmlspecialchars($data['isi']);
  $gambar = htmlspecialchars($data['gambar']);
  $kategori_id = htmlspecialchars($data['kategori_id']);
  $tanggal_publikasi = isset($data['tanggal_publikasi']) ? htmlspecialchars($data['tanggal_publikasi']) : '';
  $link = htmlspecialchars($data['link']);

  // Jika tanggal_publikasi tidak diinputkan, gunakan nilai kosong dalam kueri
  $tanggal_publikasi_value = !empty($tanggal_publikasi) ? "'" . date('Y-m-d', strtotime($tanggal_publikasi)) . "'" : "NULL";

  $query = "INSERT INTO berita VALUES (null, '$judul', '$isi', '$gambar', '$kategori_id', $tanggal_publikasi_value, '$link')";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}


function hapus($id)
{
  $conn = koneksi();
  $query = "DELETE FROM berita WHERE id = $id";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = $data["id"];
  $judul = htmlspecialchars($data['judul']);
  $isi = htmlspecialchars($data['isi']);
  $gambar = htmlspecialchars($data['gambar']);
  $kategori_id = htmlspecialchars($data['kategori_id']);
  $tanggal_publikasi = isset($data['tanggal_publikasi']) ? htmlspecialchars($data['tanggal_publikasi']) : '';
  $link = htmlspecialchars($data['link']);

  // Jika tanggal_publikasi tidak diinputkan atau kosong, gunakan nilai NULL dalam kueri
  $tanggal_publikasi_value = !empty($tanggal_publikasi) ? "'" . date('Y-m-d', strtotime($tanggal_publikasi)) . "'" : "NULL";

  $query = "UPDATE berita SET
            judul = '$judul',
            isi = '$isi',
            gambar = '$gambar',
            kategori_id = '$kategori_id',
            tanggal_publikasi = $tanggal_publikasi_value,
            link = '$link'
            WHERE id = $id";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}
