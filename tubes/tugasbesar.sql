-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 08, 2023 at 12:05 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasbesar`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `gambar` varchar(255) DEFAULT NULL,
  `kategori_id` int DEFAULT NULL,
  `tanggal_publikasi` date NOT NULL,
  `link` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi`, `gambar`, `kategori_id`, `tanggal_publikasi`, `link`) VALUES
(1, '6 Makanan Terbaik Saat Masuk Angin, Bikin Cepat Sembuh', 'Sedang tidak enak badan atau masuk angin? Ini rekomendasi makanan terbaik agar pulih lebih cepat', 'sakit.jpeg', 1, '2023-05-20', 'https://www.cnnindonesia.com/gaya-hidup/20230516082839-262-950081/10-minuman-penurun-berat-badan-yang-ampuh-buat-diet'),
(2, 'Respons PSSI Usai AFA Resmi Umumkan Indonesia vs Argentina 19 Juni', 'PSSI memberikan respons usai Federasi Sepak Bola Argentina (AFA) mengumumkan jadwal Argentina vs Indonesia di Jakarta pada 19 Juni. Berikut respons PSSI usai Argentina resmi umumkan lawan Timnas Indonesia digelar 19 Juni.', 'argentina.jpeg', 2, '2023-05-22', 'https://www.cnnindonesia.com/gaya-hidup/20230516082839-262-950081/10-minuman-penurun-berat-badan-yang-ampuh-buat-diet'),
(3, 'Gibran Usai Dipanggil DPP PDIP: Saya Tegak Lurus Arahan Ketua Umum', 'Wali Kota Solo sekaligus kader PDIP, Gibran Rakabuming menegaskan akan tegak lurus terhadap arahan Ketua Umum Megawati Soekarnoputri terkait Pilpres 2024.', 'gibran.jpeg', 3, '2023-05-22', 'https://www.cnnindonesia.com/olahraga/20230521161926-142-952125/bek-timnas-u-22-cium-kaki-orang-tua-usai-raih-emas-sea-games-2023'),
(4, 'Kominfo Klarifikasi Soal Dugaan Bocoran Data BSI yang Beredar', 'Kementerian Komunikasi dan Informatikamengklarifikasi soal dugaan kebocoran data nasabah Bank Syariah Indonesia (BSI)', 'hacker.jpeg', 4, '2023-05-21', 'https://www.cnnindonesia.com/teknologi/20230522122857-192-952382/kominfo-klarifikasi-soal-dugaan-bocoran-data-bsi-yang-beredar'),
(5, 'Desta Mahendra Gugat Cerai Natasha Rizki', 'Deddy Mahendra Desta resmi mengajukan gugatan cerai talak kepada istrinya, Natasha Rizki. Gugatan itu diajukan Desta dan telah terdaftar di Pengadilan Agama (PA) Jakarta Selatan pada 11 Mei 2023', 'desta.png', 5, '2023-05-17', 'https://www.cnnindonesia.com/hiburan/20230517164738-234-950926/desta-mahendra-gugat-cerai-natasha-rizki'),
(6, '10 Minuman Penurun Berat Badan yang Ampuh Buat Diet', 'Bukan cuma makanan yang bisa menurunkan berat badan. Ada juga minuman penurun berat badan yang bisa dinikmati untuk diet, Meskipun tidak ada minuman penurun berat badan yang ajaib, minuman tertentu membuat Anda kenyang lebih lama.', 'jus.jpg', 1, '2023-05-16', 'https://www.cnnindonesia.com/gaya-hidup/20230516082839-262-950081/10-minuman-penurun-berat-badan-yang-ampuh-buat-diet'),
(7, 'Bek Timnas U-22 Cium Kaki Orang Tua Usai Raih Emas SEA Games 2023', 'Bek Timnas Indonesia U-22 Haykal Alhafiz melakukan sujud syukur sambil mencium kaki kedua orang tua setelah tiba di rumahnya.', 'timnas.jpeg', 2, '2023-05-21', 'https://www.cnnindonesia.com/olahraga/20230521161926-142-952125/bek-timnas-u-22-cium-kaki-orang-tua-usai-raih-emas-sea-games-2023'),
(8, 'Mayjen Nur Alamsyah Resmi Jadi Komandan Korps Marinir', 'Kepala Staf Angkatan Laut (KSAL) Laksamana Muhammad Ali memimpin serah terima jabatan delapan perwira di lingkungan TNI Angkatan Laut, Minggu (21/5).', 'komandan.jpeg', 3, '2023-05-22', 'https://www.cnnindonesia.com/nasional/20230522122634-20-952379/mayjen-nur-alamsyah-resmi-jadi-komandan-korps-marinir'),
(11, 'Akun Gmail-YouTube Tak Aktif 2 Tahun Akan Dihapus, Ada Pengecualian?', 'Google akan menghapus akun pengguna jika dalam waktu 2 tahun terakhir tak kunjung login di segala platformnya', 'gmail.jpeg', 4, '2023-05-19', 'https://www.cnnindonesia.com/teknologi/20230519160859-185-951586/akun-gmail-youtube-tak-aktif-2-tahun-akan-dihapus-ada-pengecualian'),
(12, 'Saat Konser, Taylor Swift Ungkap Sedang di Puncak Kebahagiaan', 'Taylor Swift mengungkapkan bahwa saat ini hidupnya sedang dalam puncak kebahagiaan. Perasaannya itu ia ucapkan di hadapan penggemarnya saat menggelar konser The Eras Tour di Foxborough, Massachusetts, AS.', 'taylor.jpeg', 5, '2023-05-22', 'https://www.cnnindonesia.com/hiburan/20230522064251-234-952217/saat-konser-taylor-swift-ungkap-sedang-di-puncak-kebahagiaan'),
(13, 'Indonesia dan Mesir Tandatangani Kontrak Dagang Rp 12,8 Triliun', '', '', 6, '2023-05-15', 'https://money.kompas.com/read/2023/05/15/190000026/indonesia-dan-mesir-tandatangani-kontrak-dagang-rp-12-8-triliun'),
(14, 'Eduardo Almeida Resmi Latih RANS Nusantara FC', '', '', 6, '2023-05-15', 'https://bola.kompas.com/read/2023/05/15/19000078/eduardo-almeida-resmi-latih-rans-nusantara-fc'),
(15, '9 Minuman Penurun Berat Badan, Apa Saja?', '', '', 6, '2023-06-08', 'https://www.kompas.com/tren/read/2023/05/15/190000465/9-minuman-penurun-berat-badan-apa-saja-'),
(16, 'Desa Wisata di Lombok Mulai Bersiap Sambut MotoGP 2023 di Mandalika', '', '', 6, '2023-06-08', 'https://www.kompas.id/baca/nusantara/2023/05/15/desa-wisata-di-lombok-mulai-bersiap-sambut-motogp-2023-di-mandalika?apn=id.kompas.app'),
(17, 'New Balance Bangun Pabrik di Cirebon, Menteri Luhut Sebut Indonesia Bersiap Salip Vietnam', '', '', 6, '2023-06-08', 'ttps://bandung.kompas.com/read/2023/05/15/190302178/new-balance-bangun-pabrik-di-cirebon-menteri-luhut-sebut-indonesia-bersiap');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int NOT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'HEALTH'),
(2, 'SPORT'),
(3, 'NASIONAL'),
(4, 'TECH'),
(5, 'SELEB'),
(6, 'Terpopuler'),
(7, ' Utama Lainnya'),
(8, 'Rekomendasi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'asep', 'asepbalom@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'haha', 'hahaha@gmail.com', '289dff07669d7a23de0ef88d2f7129e7'),
(3, 'alfa', 'alfa@gmail.com', 'd81f9c1be2e08964bf9f24b15f0e4900');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;