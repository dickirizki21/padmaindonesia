-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2020 at 07:34 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_padmaindonesia`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id_artikel` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `id_kategori_artikel` int(11) NOT NULL,
  `slug_artikel` varchar(255) NOT NULL,
  `judul_artikel` varchar(255) NOT NULL,
  `status_artikel` enum('Publish','Draft') NOT NULL,
  `isi_artikel` text,
  `jenis_artikel` enum('Berita','Artikel') NOT NULL,
  `keyword` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tanggal_post` varchar(50) NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `id_pengguna`, `id_kategori_artikel`, `slug_artikel`, `judul_artikel`, `status_artikel`, `isi_artikel`, `jenis_artikel`, `keyword`, `gambar`, `tanggal_post`, `tanggal_update`) VALUES
(1, 7, 1, 'cara-memilih-bahan-baju-anak', 'Cara memilih bahan baju anak', 'Publish', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 'Berita', NULL, '7302eff8b69efaabfa6b382052a86908.jpg', '2020-03-08 13:18:50', '2020-03-08 12:18:50'),
(3, 7, 1, 'membuat-bahan-baju-adem-sari', 'Membuat Bahan Baju Adem Sari', 'Draft', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n', 'Artikel', NULL, '3df25d8cfd425d05e5aa2c93e0c24bc2.jpg', '2020-03-08 17:43:58', '2020-03-08 16:43:58'),
(4, 7, 1, 'cara-membuat-cv-yang-bagus', 'Cara membuat CV yang bagus', 'Publish', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n', 'Artikel', NULL, '5be26cc854ab133984691659271c6396.jpg', '2020-03-08 13:10:42', '2020-03-08 12:10:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori_artikel`
--

CREATE TABLE `tbl_kategori_artikel` (
  `id_kategori_artikel` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `slug_kategori_artikel` varchar(255) NOT NULL,
  `nama_kategori_artikel` varchar(255) NOT NULL,
  `urutan_ka` int(11) DEFAULT NULL,
  `tanggal_ka` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori_artikel`
--

INSERT INTO `tbl_kategori_artikel` (`id_kategori_artikel`, `id_pengguna`, `slug_kategori_artikel`, `nama_kategori_artikel`, `urutan_ka`, `tanggal_ka`) VALUES
(1, 1, 'ibu-anak', 'Ibu & Anak ', 1, '2020-02-22 12:05:05'),
(2, 9, 'tips-saran', 'Tips & Saran', 2, '2020-03-08 01:28:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori_produk`
--

CREATE TABLE `tbl_kategori_produk` (
  `id_kategori_produk` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `slug_kategori_produk` varchar(255) NOT NULL,
  `nama_kategori_produk` varchar(20) NOT NULL,
  `urutan_kp` int(11) NOT NULL,
  `tanggal_kp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori_produk`
--

INSERT INTO `tbl_kategori_produk` (`id_kategori_produk`, `id_pengguna`, `slug_kategori_produk`, `nama_kategori_produk`, `urutan_kp`, `tanggal_kp`) VALUES
(9, 1, 'mesin', 'Mesin', 1, '2020-02-16 06:16:03'),
(10, 7, 'baju-anak', 'Baju Anak', 2, '2020-03-06 22:03:11'),
(11, 7, 'baju-dewasa', 'Baju Dewasa', 3, '2020-03-06 22:03:25'),
(12, 7, 'baju-remaja', 'Baju Remaja', 4, '2020-03-06 22:03:54'),
(13, 7, 'baju-bapak', 'Baju Bapak', 5, '2020-03-06 22:04:27'),
(14, 7, 'baju-ibu', 'Baju Ibu', 6, '2020-03-06 22:04:20'),
(15, 7, 'baju-keluarga', 'Baju Keluarga', 7, '2020-03-06 22:04:40'),
(16, 7, 'baju-couple', 'Baju Couple', 8, '2020-03-06 22:04:49'),
(17, 7, 'baju', 'Baju', 9, '2020-03-06 22:05:43'),
(18, 7, 'baju-muslim', 'Baju Muslim', 10, '2020-03-06 22:06:01'),
(19, 7, 'baju-casual', 'Baju Casual', 12, '2020-03-06 22:06:08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_konfigurasi`
--

CREATE TABLE `tbl_konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `visi` varchar(255) NOT NULL,
  `misi` varchar(255) NOT NULL,
  `sejarah_perusahaan` varchar(1000) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tlp_wa` varchar(15) NOT NULL,
  `tlp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tokopedia` varchar(255) NOT NULL,
  `bukalapak` varchar(255) NOT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `tagline` varchar(255) NOT NULL,
  `kelebihan_perusahaan` varchar(255) NOT NULL,
  `maps` varchar(500) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `tanggal_k` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_konfigurasi`
--

INSERT INTO `tbl_konfigurasi` (`id_konfigurasi`, `id_pengguna`, `nama_perusahaan`, `visi`, `misi`, `sejarah_perusahaan`, `alamat`, `tlp_wa`, `tlp`, `email`, `tokopedia`, `bukalapak`, `facebook`, `twitter`, `instagram`, `tagline`, `kelebihan_perusahaan`, `maps`, `keyword`, `tanggal_k`) VALUES
(1, 9, 'Padma Indonesiaku', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'Padma Indonesia berdiri pada tahun xxxx. Perusahaan Padma Indonesia memiliki badan hukum perseorangan terbatas atau PT. Padma Indonesia berada di daerah Karawang Bekasi (alamat lebih tepatnya di Maps).It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'Jalan Raya Mustika Jaya Perumahan Kodam Blok A 1 No. 1 a, Bekasi, RT.001/RW.013, Mustika Jaya, Kec. Mustika Jaya, Jawa Barat, 17158', '6281387036498', '081319021886', 'info@padmaindonesia.co.id', 'https://www.tokopedia.com/', 'https://www.bukalapak.com/', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'Padma Indonesia - Great Choice Big Deals', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, yo', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.8165684693154!2d107.03211541419418!3d-6.2878257632941175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698e247a6cac9d%3A0xd6a12bae61967602!2sPT%20Cahaya%20Indorahmat%20Pratamajaya!5e0!3m2!1sid!2sid!4v1583455731106!5m2!1sid!2sid\" width=\"1200\" height=\"400\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>', 'padmaindonesiabekasi padmaindonesiaku padmabekasi percetakanmurahbekasi merapatyuk', '2020-03-08 01:11:04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(30) NOT NULL,
  `email_pengguna` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `akses_level` varchar(20) NOT NULL,
  `tanggal_pengguna` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`id_pengguna`, `nama_pengguna`, `email_pengguna`, `username`, `password`, `akses_level`, `tanggal_pengguna`) VALUES
(5, 'Dicki Rizki Amarullah', 'dickirizki21@gmail.com', 'omdik21', '237d040cef0a316803d76d9396ffcfa6d49443b2', 'User', '2020-02-25 17:09:07'),
(6, 'a', 'syuyun147@gmail.com', 'asiyap21', '99baee504a1fe91a07bc66b6900bd39874191889', 'User', '2020-02-25 17:07:59'),
(7, 'Dicki Rizki A', 'info@padmaindonesia.co.id', 'superadmin', 'cfb4ee6a2a98e27b07cff6728c823ffbd855e3b4', 'SuperAdmin', '2020-02-27 08:47:02'),
(8, 'Tsaniya Desita Anjani', 'siniya@gmail.com', 'saniya21', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'User', '2020-03-08 02:49:49'),
(9, 'Diah Putri Ramadhani', 'diah@gmail.com', 'diah21', 'd59c648e3dd39ca9987459c66955aa2ef588e5a3', '', '2020-03-08 01:10:39');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori_produk` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `nama_produk` varchar(30) NOT NULL,
  `slug_nama_produk` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar_produk` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL,
  `tanggal_postg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `id_kategori_produk`, `id_pengguna`, `nama_produk`, `slug_nama_produk`, `deskripsi`, `gambar_produk`, `stok`, `tanggal_postg`) VALUES
(1, 10, 7, 'Baju Couple Ibu & Anak12345', 'baju-couple-ibu-anak12345', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Where does it come from?</h2>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<h2>Where can I get some?</h2>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', '75877a7a924831b5b91470ffdfcf9e36.PNG', 4, '2020-03-06 16:14:55');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_toko_kami`
--

CREATE TABLE `tbl_toko_kami` (
  `id_toko` int(11) NOT NULL,
  `lokasi_toko` varchar(20) NOT NULL,
  `nama_toko` varchar(30) NOT NULL,
  `alamat_toko` varchar(300) NOT NULL,
  `urutan_toko` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_toko_kami`
--

INSERT INTO `tbl_toko_kami` (`id_toko`, `lokasi_toko`, `nama_toko`, `alamat_toko`, `urutan_toko`) VALUES
(5, 'JAKARTA', 'STUPENDOUS', 'ITC Kuningan LT.3 Blok C6 No.8-10 Jl. Prof. Dr. Satrio Jakarta Selatan', 2),
(6, 'JAKARTA', 'MAHIRA KREATIF', 'Jl. Insepksi banjir kanal timur swadaya III No 95 Pulo Gebang, Cakung Jakarta Timur', 0),
(7, 'TANGGERANG', 'STUPENDOUS', 'Ruko paramount 7CS – DF3/26 Gading – Serpong Tangerang – Banten\r\n    ', 0),
(8, 'SOLO', 'EMJI', 'Jl RM Said 133 PS Nongko (Depan Batik semar) Solo Jawa Tengah', 0),
(9, 'PONTIANAK', 'CHANG KAOS', 'JL. Gajah Mada Gg. Gajah Mada 14 No. 30, Pontianak Kalimantan Barat', 0),
(10, 'BANDUNG', 'LILING GRAND', 'Jalan Aceh No. 44. Bandung Jawa Barat      \r\n    ', 0),
(11, 'SURABAYA', 'WUJUD UNGGUL', 'Jl. Bendul Merisi Selatan, No.17 Surabaya Jawa Timur\r\n    ', 0),
(12, 'MALANG', 'WUJUD UNGGUL', 'Jalan Bendungan Palasari No. 6B Malang – Jawa Timur', 0),
(13, 'MAKASAR', 'MULTI KARYA', 'Jl. Yos Sudarso No. 100 Makassar Sulawesi Selatan     \r\n    ', 0),
(14, 'RAJAWALI', 'BALIKPAPAN', 'Jln. Mayjend Sutoyo No.18 rt.8 (Sebelah Elite Jaya Bengkel) Balikpapan      \r\n    ', 0),
(15, 'SAMARINDA', 'LIDATA', 'Jln. Lambung Mangkurat No. 40 Pelita Samarinda      \r\n    ', 0),
(16, 'MAKASAR', 'LEGALA', 'Mtc Karebosi lt.2 Blok L 06 A/B Jl. Ahmad yani no.49 Makassar Sulawesi Selatan    \r\n    ', 0),
(17, 'PEKANBARU', 'STARPRINT', 'Mall Pekanbaru Jl. Jend Sudirman 123 Lt 1 Blok D1/01 (Samping ATM Mandiri) Pekanbaru     \r\n    ', 0),
(18, 'BEKASI', 'KURNIA', 'Komplek. Ruko Batu Batam Permai Blok B No. 7 Batam Kepulauan Riau    \r\n    ', 0),
(19, 'MEDAN', 'AS MEDAN', 'Jl. Amplas 18a/55 (dekat Jalan Asia) Medan Sumatera Utara      \r\n    ', 0),
(20, 'LAMPUNG', 'RUMAH SABLON', 'Jl.urip sumoharjo no 98. Kedaton Bandar lampung', 0),
(21, 'BENGKULU', 'TRULY CREATIVE', 'Jl. Siti Khadijahno 43 Kel. Kebun Roos Kec.  Teluk Segara Kota Bengkulu\r\n    ', 0),
(22, 'KENDARI', 'TWINSTAR', 'Komplek Ruko Wixel Hotel Jl. Bunga Seroja RT 05/02 Lahundape Kendari Barat – Kota Kendari – Sulawesi Tenggara', 0),
(23, 'KARAWANG', 'CAHAYA DIGITAL PRINTING', 'Jl. Tuparev no. 415 Cinangoh Barat 1 Karawang Jawa Barat    \r\n    ', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tbl_kategori_artikel`
--
ALTER TABLE `tbl_kategori_artikel`
  ADD PRIMARY KEY (`id_kategori_artikel`);

--
-- Indexes for table `tbl_kategori_produk`
--
ALTER TABLE `tbl_kategori_produk`
  ADD PRIMARY KEY (`id_kategori_produk`);

--
-- Indexes for table `tbl_konfigurasi`
--
ALTER TABLE `tbl_konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tbl_toko_kami`
--
ALTER TABLE `tbl_toko_kami`
  ADD PRIMARY KEY (`id_toko`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_kategori_artikel`
--
ALTER TABLE `tbl_kategori_artikel`
  MODIFY `id_kategori_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_kategori_produk`
--
ALTER TABLE `tbl_kategori_produk`
  MODIFY `id_kategori_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_konfigurasi`
--
ALTER TABLE `tbl_konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_toko_kami`
--
ALTER TABLE `tbl_toko_kami`
  MODIFY `id_toko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
