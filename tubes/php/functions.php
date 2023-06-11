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

function upload()
{
  $nama_file = $_FILES['gambar']['name'];
  $tipe_file = $_FILES['gambar']['type'];
  $ukuran_file = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmp_file = $_FILES['gambar']['tmp_name'];

  // ketika tidak ada gambar yang dipilih
  if ($error == 4) {
    //   echo "<script>
    // alert('pilih gambar terlebih dahulu!');
    // </script>";
    //   return false;
    return 'nofoto.jpg';
  }

  // cek ekstensi file
  $daftar_gambar = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));
  if (!in_array($ekstensi_file, $daftar_gambar)) {
    echo "<script>
  alert('yang anda pilih bukan gambar!');
  </script>";
    return false;
  }

  // cek tipe file
  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "<script>
  alert('yang anda pilih bukan gambar!');
  </script>";
    return false;
  }

  // ukuran file
  // maksimal 5mb ==5000000
  if ($ukuran_file > 5000000) {
    echo "<script>
  alert('ukuran file terlalu besar!');
  </script>";
    return false;
  }

  // lolos pengecekan
  // siap upload file
  // generate nama file baru
  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= '$ekstensi_file';

  move_uploaded_file($tmp_file, '../img/' . $nama_file_baru);

  return $nama_file_baru;
}

function tambah($data)
{
  $conn = koneksi();

  $judul = htmlspecialchars($data['judul']);
  $isi = htmlspecialchars($data['isi']);
  // $gambar = htmlspecialchars($data['gambar']);
  $kategori_id = htmlspecialchars($data['kategori_id']);
  $tanggal_publikasi = isset($data['tanggal_publikasi']) ? htmlspecialchars($data['tanggal_publikasi']) : '';
  $link = htmlspecialchars($data['link']);

  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  // Jika tanggal_publikasi tidak diinputkan, gunakan nilai kosong dalam kueri
  $tanggal_publikasi_value = !empty($tanggal_publikasi) ? "'" . date('Y-m-d', strtotime($tanggal_publikasi)) . "'" : "NULL";

  $query = "INSERT INTO berita VALUES (null, '$judul', '$isi', '$gambar', '$kategori_id', $tanggal_publikasi_value, '$link')";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}


function hapus($id)
{
  $conn = koneksi();

  // menghapus gambar di folder img
  $brt = query("SELECT * FROM berita WHERE id = $id")[0];
  if ($brt['gambar'] != 'nofoto.jpg') {
    unlink('../img/' . $brt['gambar']);
  }

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
  $gambar_lama = htmlspecialchars($data['gambar_lama']);
  $kategori_id = htmlspecialchars($data['kategori_id']);
  $tanggal_publikasi = isset($data['tanggal_publikasi']) ? htmlspecialchars($data['tanggal_publikasi']) : '';
  $link = htmlspecialchars($data['link']);

  // Jika tanggal_publikasi tidak diinputkan atau kosong, gunakan nilai NULL dalam kueri
  $tanggal_publikasi_value = !empty($tanggal_publikasi) ? "'" . date('Y-m-d', strtotime($tanggal_publikasi)) . "'" : "NULL";

  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  if ($gambar == 'nofoto.jpg') {
    $gambar = $gambar_lama;
  }

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
