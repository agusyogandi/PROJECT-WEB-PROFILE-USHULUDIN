-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jan 2021 pada 13.27
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fakus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `Judul` varchar(255) NOT NULL,
  `Slug` varchar(255) NOT NULL,
  `Tanggal` varchar(255) NOT NULL,
  `Tanggal_update` varchar(255) NOT NULL,
  `Penulis` varchar(255) NOT NULL,
  `Jenis` varchar(255) NOT NULL,
  `Abstrak` longtext NOT NULL,
  `Link` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `Judul`, `Slug`, `Tanggal`, `Tanggal_update`, `Penulis`, `Jenis`, `Abstrak`, `Link`, `Image`) VALUES
(1, 'Berita Pertama', 'berita-pertama', '2021-01-11', '', '', 'Berita', '', '', 'ts_4.jpg'),
(2, 'Berita Kedua', 'berita-kedua', '2021-01-11', '2021-01-30', 'uin bandung', 'Berita', 'Wawasan adalah jurnal berkala ilmiah yang mempublikasikan hasil-hasil kajian dan penelitian orisinal dengan edisi terbaru dalam ilmu agama dan sosial budaya dari perspektif multidisipliner, khususnya ilmu-ilmu keushuluddinan. Jurnal Wawasan bertujuan untuk memperluas dan menciptakan inovasi konsep, teori, paradigma, perspektif dan metodologi dalam ilmu-ilmu keushuluddinan. Jurnal Wawasan diterbitkan oleh Fakultas Ushuluddin Universitas Islam Negeri Sunan Gunung Djati Bandung dua kali dalam setah', 'https://journal.uinsgd.ac.id/index.php/jw/index', 'ushuludin.png'),
(3, 'Berita Ketiga', 'berita-ketiga', '2021-01-11', '', 'uin bandung', 'Berita', 'Wawasan adalah jurnal berkala ilmiah yang mempublikasikan hasil-hasil kajian dan penelitian orisinal dengan edisi terbaru dalam ilmu agama dan sosial budaya dari perspektif multidisipliner, khususnya ilmu-ilmu keushuluddinan. Jurnal Wawasan bertujuan untuk memperluas dan menciptakan inovasi konsep, teori, paradigma, perspektif dan metodologi dalam ilmu-ilmu keushuluddinan. Jurnal Wawasan diterbitkan oleh Fakultas Ushuluddin Universitas Islam Negeri Sunan Gunung Djati Bandung dua kali dalam setah', 'https://journal.uinsgd.ac.id/index.php/jw/index', 'ushuludin_1.png'),
(4, 'Berita Keempat', 'berita-keempat', '2021-01-11', '', 'uin bandung', 'Berita', 'Wawasan adalah jurnal berkala ilmiah yang mempublikasikan hasil-hasil kajian dan penelitian orisinal dengan edisi terbaru dalam ilmu agama dan sosial budaya dari perspektif multidisipliner, khususnya ilmu-ilmu keushuluddinan. Jurnal Wawasan bertujuan untuk memperluas dan menciptakan inovasi konsep, teori, paradigma, perspektif dan metodologi dalam ilmu-ilmu keushuluddinan. Jurnal Wawasan diterbitkan oleh Fakultas Ushuluddin Universitas Islam Negeri Sunan Gunung Djati Bandung dua kali dalam setah', 'https://journal.uinsgd.ac.id/index.php/jw/index', 'ushuludin_2.png'),
(5, 'Berita Kelima', 'berita-kelima', '2021-01-11', '', 'uin bandung', 'Berita', 'Wawasan adalah jurnal berkala ilmiah yang mempublikasikan hasil-hasil kajian dan penelitian orisinal dengan edisi terbaru dalam ilmu agama dan sosial budaya dari perspektif multidisipliner, khususnya ilmu-ilmu keushuluddinan. Jurnal Wawasan bertujuan untuk memperluas dan menciptakan inovasi konsep, teori, paradigma, perspektif dan metodologi dalam ilmu-ilmu keushuluddinan. Jurnal Wawasan diterbitkan oleh Fakultas Ushuluddin Universitas Islam Negeri Sunan Gunung Djati Bandung dua kali dalam setah', 'https://journal.uinsgd.ac.id/index.php/jw/index', 'ushuludin_3.png'),
(6, 'Artikel Pertama', 'artikel-pertama', '2021-01-11', '', 'uin bandung', 'Artikel', 'Wawasan adalah jurnal berkala ilmiah yang mempublikasikan hasil-hasil kajian dan penelitian orisinal dengan edisi terbaru dalam ilmu agama dan sosial budaya dari perspektif multidisipliner, khususnya ilmu-ilmu keushuluddinan. Jurnal Wawasan bertujuan untuk memperluas dan menciptakan inovasi konsep, teori, paradigma, perspektif dan metodologi dalam ilmu-ilmu keushuluddinan. Jurnal Wawasan diterbitkan oleh Fakultas Ushuluddin Universitas Islam Negeri Sunan Gunung Djati Bandung dua kali dalam setah', 'https://journal.uinsgd.ac.id/index.php/jw/index', 'images.jpg'),
(7, 'Artikel Kedua', 'artikel-kedua', '2021-01-11', '', 'uin bandung', 'Artikel', 'Wawasan adalah jurnal berkala ilmiah yang mempublikasikan hasil-hasil kajian dan penelitian orisinal dengan edisi terbaru dalam ilmu agama dan sosial budaya dari perspektif multidisipliner, khususnya ilmu-ilmu keushuluddinan. Jurnal Wawasan bertujuan untuk memperluas dan menciptakan inovasi konsep, teori, paradigma, perspektif dan metodologi dalam ilmu-ilmu keushuluddinan. Jurnal Wawasan diterbitkan oleh Fakultas Ushuluddin Universitas Islam Negeri Sunan Gunung Djati Bandung dua kali dalam setah', 'https://journal.uinsgd.ac.id/index.php/jw/index', 'images_1.jpg'),
(8, 'Artikel Ketiga', 'artikel-ketiga', '2021-01-11', '', 'uin bandung', 'Artikel', 'Wawasan adalah jurnal berkala ilmiah yang mempublikasikan hasil-hasil kajian dan penelitian orisinal dengan edisi terbaru dalam ilmu agama dan sosial budaya dari perspektif multidisipliner, khususnya ilmu-ilmu keushuluddinan. Jurnal Wawasan bertujuan untuk memperluas dan menciptakan inovasi konsep, teori, paradigma, perspektif dan metodologi dalam ilmu-ilmu keushuluddinan. Jurnal Wawasan diterbitkan oleh Fakultas Ushuluddin Universitas Islam Negeri Sunan Gunung Djati Bandung dua kali dalam setah', 'https://journal.uinsgd.ac.id/index.php/jw/index', 'images_2.jpg'),
(9, 'Artikel Ke Empat', 'artikel-ke-empat', '2021-01-11', '', 'uin bandung', 'Artikel', 'Wawasan adalah jurnal berkala ilmiah yang mempublikasikan hasil-hasil kajian dan penelitian orisinal dengan edisi terbaru dalam ilmu agama dan sosial budaya dari perspektif multidisipliner, khususnya ilmu-ilmu keushuluddinan. Jurnal Wawasan bertujuan untuk memperluas dan menciptakan inovasi konsep, teori, paradigma, perspektif dan metodologi dalam ilmu-ilmu keushuluddinan. Jurnal Wawasan diterbitkan oleh Fakultas Ushuluddin Universitas Islam Negeri Sunan Gunung Djati Bandung dua kali dalam setah', 'https://journal.uinsgd.ac.id/index.php/jw/index', 'images_3.jpg'),
(10, 'Artikel Ke Lima', 'artikel-ke-lima', '2021-01-11', '', 'uin bandung', 'Artikel', '\" Kota Tangerang itu dapatnya (vaksinasi) pada fase pertama kloter kedua. Jadi, kami awal Februari,\" kata Kepala Dinas Kesehatan (Kadinkes) Kota Tangerang, Liza Puspadewi, saat ditemui di RSUD Kota Tangerang, Kota Tangerang, Selasa (12/1/2021) siang. Ia mengemukakan, tenaga medis di Kota Serang dan Kota Tangerang Selatan yang akan menerima vaksinasi Covid-19 pada fase pertama kloter pertama pada 14 Januari ini. \"Yang pertama divaksin itu Tangerang Selatan dan Kota Serang. Karena vaksinnya juga terbatas,\" ujar dia. Baca juga: PPKM di Kota Tangerang, Tempat Rekreasi, Hiburan hingga Fasilitas Olahraga Ditutup Gubernur Banten Wahidin Halim mengatakan, Kota Serang akan mendapatkan vaksinasi terlebih dahulu karena kota tersebut adalah Ibu Kota Provinsi Banten. Kota Tangerang Selatan juga didahulukan lantaran tingkat kematian akibat Covid-19 yang cukup tinggi di daerah itu. \"(Sebanyak) 3.800 vaksin untuk Kota Serang. Lalu, Tangerang Selatan sekitar 8.000 vaksin. Sementara itu, Kabupaten atau Kota Tangerang pada kloter keduanya,\" ujar Wahidin ketika melakukan konferensi pers di Pendopo Kabupaten Tangerang, Banten, Senin kemarin. Dinkes Kota Tangerang telah menyiapkan dua skema untuk vaksinasi yang akan dilakukan. Berdasarkan skema tersebut, ada golongan orang yang akan divaksin dalam dua tahap vaksinasi. \"Di tahap pertama, 12.148 vaksin itu untuk tenaga kesehatan,\" kata Liza Puspadewi, Jumat pekan lalu. \"Tahap kedua, yaitu pelayan publik 49.205 orang, TNI dan Polri 2.787 orang yang dilakukan imunisasi sebanyak dua dosis,\" tambahnya. Dinkes Kota Tangerang juga telah menyiapkan 82 fasilitas kesehatan untuk tempat pelaksanaan vaksinasi. Tempat vaksinasi itu berupa 38 puskesmas, 32 rumah sakit, dan 12 klinik.  Artikel ini telah tayang di Kompas.com dengan judul \"Kota Tangerang Memulai Vaksinasi Covid-19 pada Awal Februari\", Klik untuk baca: https://megapolitan.kompas.com/read/2021/01/12/13375191/kota-tangerang-memulai-vaksinasi-covid-19-pada-awal-februari. Penulis : Muhammad Naufal Editor : Egidius Patnistik  Download aplikasi Kompas.com untuk akses berita lebih mudah dan cepat: Android: https://bit.ly/3g85pkA iOS: https://apple.co/3hXWJ0L', 'https://journal.uinsgd.ac.id/index.php/jw/index', 'images_4.jpg'),
(11, 'Opini Pertama', 'opini-pertama', '2021-01-11', '', 'uin bandung', 'Opini', 'Wawasan adalah jurnal berkala ilmiah yang mempublikasikan hasil-hasil kajian dan penelitian orisinal dengan edisi terbaru dalam ilmu agama dan sosial budaya dari perspektif multidisipliner, khususnya ilmu-ilmu keushuluddinan. Jurnal Wawasan bertujuan untuk memperluas dan menciptakan inovasi konsep, teori, paradigma, perspektif dan metodologi dalam ilmu-ilmu keushuluddinan. Jurnal Wawasan diterbitkan oleh Fakultas Ushuluddin Universitas Islam Negeri Sunan Gunung Djati Bandung dua kali dalam setah', 'https://journal.uinsgd.ac.id/index.php/jw/index', 'testing2.jpg'),
(12, 'Opini Kedua', 'opini-kedua', '2021-01-11', '', 'uin bandung', 'Opini', 'Wawasan adalah jurnal berkala ilmiah yang mempublikasikan hasil-hasil kajian dan penelitian orisinal dengan edisi terbaru dalam ilmu agama dan sosial budaya dari perspektif multidisipliner, khususnya ilmu-ilmu keushuluddinan. Jurnal Wawasan bertujuan untuk memperluas dan menciptakan inovasi konsep, teori, paradigma, perspektif dan metodologi dalam ilmu-ilmu keushuluddinan. Jurnal Wawasan diterbitkan oleh Fakultas Ushuluddin Universitas Islam Negeri Sunan Gunung Djati Bandung dua kali dalam setah', 'https://journal.uinsgd.ac.id/index.php/jw/index', 'testing2_1.jpg'),
(13, 'Opini Ketiga', 'opini-ketiga', '2021-01-11', '', 'uin bandung', 'Opini', 'Wawasan adalah jurnal berkala ilmiah yang mempublikasikan hasil-hasil kajian dan penelitian orisinal dengan edisi terbaru dalam ilmu agama dan sosial budaya dari perspektif multidisipliner, khususnya ilmu-ilmu keushuluddinan. Jurnal Wawasan bertujuan untuk memperluas dan menciptakan inovasi konsep, teori, paradigma, perspektif dan metodologi dalam ilmu-ilmu keushuluddinan. Jurnal Wawasan diterbitkan oleh Fakultas Ushuluddin Universitas Islam Negeri Sunan Gunung Djati Bandung dua kali dalam setah', 'https://journal.uinsgd.ac.id/index.php/jw/index', 'testing2_2.jpg'),
(14, 'Opini Ke Empat', 'opini-ke-empat', '2021-01-11', '', 'uin bandung', 'Opini', 'Wawasan adalah jurnal berkala ilmiah yang mempublikasikan hasil-hasil kajian dan penelitian orisinal dengan edisi terbaru dalam ilmu agama dan sosial budaya dari perspektif multidisipliner, khususnya ilmu-ilmu keushuluddinan. Jurnal Wawasan bertujuan untuk memperluas dan menciptakan inovasi konsep, teori, paradigma, perspektif dan metodologi dalam ilmu-ilmu keushuluddinan. Jurnal Wawasan diterbitkan oleh Fakultas Ushuluddin Universitas Islam Negeri Sunan Gunung Djati Bandung dua kali dalam setah', 'https://journal.uinsgd.ac.id/index.php/jw/index', 'testing2_3.jpg'),
(15, 'Opini Ke Lima', 'opini-ke-lima', '2021-01-11', '', 'uin bandung', 'Opini', 'Wawasan adalah jurnal berkala ilmiah yang mempublikasikan hasil-hasil kajian dan penelitian orisinal dengan edisi terbaru dalam ilmu agama dan sosial budaya dari perspektif multidisipliner, khususnya ilmu-ilmu keushuluddinan. Jurnal Wawasan bertujuan untuk memperluas dan menciptakan inovasi konsep, teori, paradigma, perspektif dan metodologi dalam ilmu-ilmu keushuluddinan. Jurnal Wawasan diterbitkan oleh Fakultas Ushuluddin Universitas Islam Negeri Sunan Gunung Djati Bandung dua kali dalam setah', 'https://journal.uinsgd.ac.id/index.php/jw/index', 'testing2_4.jpg'),
(16, 'Inspirasi Pertama', 'inspirasi-pertama', '2021-01-12', '', 'uin bandung', 'Inspirasi Pagi', 'Wawasan adalah jurnal berkala ilmiah yang mempublikasikan hasil-hasil kajian dan penelitian orisinal dengan edisi terbaru dalam ilmu agama dan sosial budaya dari perspektif multidisipliner, khususnya ilmu-ilmu keushuluddinan. Jurnal Wawasan bertujuan untuk memperluas dan menciptakan inovasi konsep, teori, paradigma, perspektif dan metodologi dalam ilmu-ilmu keushuluddinan. Jurnal Wawasan diterbitkan oleh Fakultas Ushuluddin Universitas Islam Negeri Sunan Gunung Djati Bandung dua kali dalam setah', 'https://journal.uinsgd.ac.id/index.php/jw/index', 'logoUin.png'),
(17, 'Inspirasi Kedua', 'inspirasi-kedua', '2021-01-12', '', 'uin bandung', 'Inspirasi Pagi', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop p', 'https://journal.uinsgd.ac.id/index.php/jw/index', 'logoUin_1.png'),
(19, 'inspirasi keempat', 'inspirasi-keempat', '2021-01-01', '', 'uin bandung', 'Inspirasi Pagi', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop p', 'https://journal.uinsgd.ac.id/index.php/jw/index', 'logoUin_3.png'),
(21, 'Artikel Ke Enam', 'artikel-ke-enam', '2021-01-12', '', 'uin bandung', 'Artikel', ' <p>Kota Tangerang itu dapatnya (vaksinasi) pada fase pertama kloter kedua. Jadi, kami awal Februari,\" kata Kepala Dinas Kesehatan (Kadinkes) Kota Tangerang, Liza Puspadewi, saat ditemui di RSUD Kota Tangerang, Kota Tangerang, Selasa (12/1/2021) siang. Ia mengemukakan, tenaga medis di Kota Serang dan Kota Tangerang Selatan yang akan menerima vaksinasi Covid-19 pada fase pertama kloter pertama pada 14 Januari ini. \"Yang pertama divaksin itu Tangerang Selatan dan Kota Serang. Karena vaksinnya juga terbatas,\" ujar dia. Baca juga: PPKM di Kota Tangerang, Tempat Rekreasi, Hiburan hingga Fasilitas Olahraga Ditutup Gubernur Banten Wahidin Halim mengatakan, Kota Serang akan mendapatkan vaksinasi terlebih dahulu karena kota tersebut adalah Ibu Kota Provinsi Banten. Kota Tangerang Selatan juga didahulukan lantaran tingkat kematian akibat Covid-19 yang cukup tinggi di daerah itu. \"(Sebanyak) 3.800 vaksin untuk Kota Serang. Lalu, Tangerang Selatan sekitar 8.000 vaksin. Sementara itu, Kabupaten atau Kota Tangerang pada kloter keduanya,\" ujar Wahidin ketika melakukan konferensi pers di Pendopo Kabupaten Tangerang, Banten, Senin kemarin. Dinkes Kota Tangerang telah menyiapkan dua skema untuk vaksinasi yang akan dilakukan. Berdasarkan skema tersebut, ada golongan orang yang akan divaksin dalam dua tahap vaksinasi. \"Di tahap pertama, 12.148 vaksin itu untuk tenaga kesehatan,\" kata Liza Puspadewi, Jumat pekan lalu. \"Tahap kedua, yaitu pelayan publik 49.205 orang, TNI dan Polri 2.787 orang yang dilakukan imunisasi sebanyak dua dosis,\" tambahnya. Dinkes Kota Tangerang juga telah menyiapkan 82 fasilitas kesehatan untuk tempat pelaksanaan vaksinasi. Tempat vaksinasi itu berupa 38 puskesmas, 32 rumah sakit, dan 12 klinik.</p><p>Artikel ini telah tayang di Kompas.com dengan judul \"Kota Tangerang Memulai Vaksinasi Covid-19 pada Awal Februari\", Klik untuk baca: https://megapolitan.kompas.com/read/2021/01/12/13375191/kota-tangerang-memulai-vaksinasi-covid-19-pada-awal-februari.\r\nPenulis : Muhammad Naufal\r\nEditor : Egidius Patnistik</p><p>Download aplikasi Kompas.com untuk akses berita lebih mudah dan cepat:\r\nAndroid: https://bit.ly/3g85pkA\r\niOS: https://apple.co/3hXWJ0L</p>', 'https://journal.uinsgd.ac.id/index.php/jw/index', 'images_5.jpg'),
(22, 'Istana Harap DPR Segera Menyetujui Penunjukan Komjen Listyo Sigit Jadi Kapolri', 'istana-harap-dpr-segera-menyetujui-penunjukan-komjen-listyo-sigit-jadi-kapolri', '2021-01-13', '', 'testing', 'Inspirasi Pagi', ' <p>Presiden Joko Widodo telah menunjuk Kabareskrim Komjen Listyo Sigit Prabowo sebagai calon Kapolri. DPR akan memproses pengajuan calon Kapolri ini selama 20 hari sejak surat presiden diterima hari ini.</p><p>Namun, Istana berharap DPR bisa mempercepat proses tersebut agar segera bisa mendapatkan Kapolri yang definitif. Diketahui, Jenderal Idham Azis yang saat ini menjabat Kapolri akan pensiun pada 1 Februari 2020.</p><p>\"Pemerintah berharap proses ini ditindaklanjuti secepat-cepatnya. sebagaimana disampaikan ibu Ketua (Puan Maharani) 20 hari kami berharap lebih cepat dari itu sehingga kita memperoleh kapolri definitif,\" ujar Mensesneg Pratikno dalam kesempatan sama.</p><p>Pratikno mengharapkan DPR menyetujui usulan Presiden Joko Widodo menunjuk Listyo sebagai Kapolri baru.</p><p>\"Tentu saja proses di DPR kami mengharapkan menyetujui apa yang sudah diusulkan bapak presiden,\" kata dia.</p><p>Sementara itu, Ketua Komisi III DPR RI Herman Herry mengatakan, uji kelayakan dan kepatutan (fit and proper test) akan dimulai pada Senin atau Selasa pekan depan. Berbeda dengan sebelumnya, Komisi III tidak akan menyambangi kediaman calon Kapolri seperti biasanya karena pandemi Covid-19.</p><p>\"Betul, Senin atau Selasa sudah fit and proper test,\" kata Herman kemarin.</p><p>Ketua DPR Puan Maharani mengatakan, pergantian Kapolri saat ini adalah mengikuti siklus masa jabatan yang telah berakhir dan dengan demikian perlu diangkat Kapolri yang baru.</p><p>Puan menjelaskan, sesuai ketentuan dalam Undang-Undang Nomor 2 Tahun 2002 tentang Kepolisian RI, bahwa Kapolri diangkat dan diberhentikan Presiden dengan persetujuan DPR RI.</p><p>Dalam memberikan pendapat atas Kapolri usulan Presiden, kata Puan, DPR RI akan memperhatikan berbagai aspek dan dimensi yang dapat memberi keyakinan bahwa Kapolri yang diusulkan memenuhi persyaratan.</p><p>Persyaratan itu meliputi syarat adimistratif, kompetensi, profesionalitas, dan komitmen dalam mengawal Pancasila, UUD Negara Republik Indonesia 1945, NKRI, dan Bineka Tunggal Ika.</p>', 'https://www.merdeka.com/peristiwa/istana-harap-dpr-segera-menyetujui-penunjukan-komjen-listyo-sigit-jadi-kapolri.html', 'istana-harap-dpr-segera-menyetujui-penunjukan-komjen-listyo-sigit-jadi-kapolri.jpg'),
(23, 'Jangan harap kau bisa kabur ', 'jangan-harap-kau-bisa-kabur', '2021-01-13', '', 'agus yogandi', 'Inspirasi Pagi', ' <p>Kita kerap terlalu naif untuk menyadari adanya kesempatan mempersiapkan diri dari apa yang akan terjadi dan lebih suka menimpakan kesalahan atas apa yang kita dapatkan pada keadaan. Seperti pagi yang tiba-tiba, siang yang melenggang, atau malam yang diam-diam meminta kita pulang, kita pun alpa pada…</p>', 'https://www.merdeka.com/peristiwa/istana-harap-dpr-segera-menyetujui-penunjukan-komjen-listyo-sigit-jadi-kapolri.html', 'banner.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'agusyogandi41@gmail.com', 1, '2021-01-10 22:23:17', 1),
(2, '::1', 'agusyogandi41@gmail.com', 1, '2021-01-10 22:25:13', 1),
(3, '::1', 'Admin Fakultas Ushuludin', NULL, '2021-01-10 22:43:32', 0),
(4, '::1', 'agusyogandi41@gmail.com', 1, '2021-01-10 22:43:46', 1),
(5, '::1', 'agusyogandi41@gmail.com', 1, '2021-01-10 23:06:24', 1),
(6, '::1', 'agusyogandi41@gmail.com', 1, '2021-01-11 05:54:34', 1),
(7, '::1', 'agusyogandi41@gmail.com', 1, '2021-01-11 05:55:20', 1),
(8, '::1', 'agusyogandi41@gmail.com', 1, '2021-01-11 23:32:48', 1),
(9, '::1', 'agusyogandi41@gmail.com', 1, '2021-01-12 06:47:40', 1),
(10, '::1', 'agusyogandi41@gmail.com', 1, '2021-01-12 23:23:44', 1),
(11, '::1', '1167050011@uinsgd.ac.id', 4, '2021-01-13 07:02:51', 0),
(12, '::1', '1167050011@uinsgd.ac.id', 4, '2021-01-13 07:03:01', 0),
(13, '::1', 'agusyogandi41@gmail.com', 1, '2021-01-13 19:25:35', 1),
(14, '::1', 'agusyogandi41@gmail.com', 1, '2021-01-14 06:22:22', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_reset_attempts`
--

INSERT INTO `auth_reset_attempts` (`id`, `email`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(1, 'fu@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36', 'c7be7ffb9213b1793cfc22b25ef28dd0', '2021-01-10 22:22:52'),
(2, 'agusyogandi41@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36', 'c7be7ffb9213b1793cfc22b25ef28dd0', '2021-01-10 22:23:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `Judul` varchar(255) NOT NULL,
  `Slug` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Komite` varchar(255) NOT NULL,
  `Lokasi` varchar(255) NOT NULL,
  `Kontak` varchar(255) NOT NULL,
  `Link` varchar(255) NOT NULL,
  `Tanggal_mulai` varchar(255) NOT NULL,
  `Tanggal_selesai` varchar(255) NOT NULL,
  `Tanggal_input` varchar(255) NOT NULL,
  `Tanggal_update` varchar(255) NOT NULL,
  `Deskripsi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id`, `Judul`, `Slug`, `Image`, `Komite`, `Lokasi`, `Kontak`, `Link`, `Tanggal_mulai`, `Tanggal_selesai`, `Tanggal_input`, `Tanggal_update`, `Deskripsi`) VALUES
(1, 'testing gaaans', 'testing-gaaans', 'logo_1.png', '', '', '', '', '', '', '', '', ' '),
(2, 'testing acara 2', 'testing-acara-2', 'logo_2.png', 'uin bandung', 'uin bandung', 'uin bandung', 'https://www.merdeka.com/peristiwa/istana-harap-dpr-segera-menyetujui-penunjukan-komjen-listyo-sigit-jadi-kapolri.html', '2021-01-09', '2021-01-10', '2021-01-13', '', ' <p>Adds indicators for the carousel. These are the little dots at the bottom of each slide (which indicates how many slides there are in the carousel, and which slide the user are currently viewing)</p>'),
(4, 'Berita Pertama', 'berita-pertama', 'logo_4.png', '', '', '', '', '', '', '', '', ' ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto`
--

CREATE TABLE `foto` (
  `id` int(11) NOT NULL,
  `Judul` varchar(255) NOT NULL,
  `Slug` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Deskripsi` longtext NOT NULL,
  `Tanggal_input` varchar(255) NOT NULL,
  `Tanggal_update` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `foto`
--

INSERT INTO `foto` (`id`, `Judul`, `Slug`, `Image`, `Deskripsi`, `Tanggal_input`, `Tanggal_update`) VALUES
(1, 'Foto Pertama', 'foto-pertama', 'ts.jpg', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-01-11', ''),
(5, 'Foto Keempat', 'foto-keempat', 'unnamed.jpg', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-01-11', ''),
(6, 'Foto Kedua', 'foto-kedua', 'itb-671246af57a124aaf07ed7b206243178_600x400.jpg', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-01-11', ''),
(7, 'Foto Ketiga', 'foto-ketiga', 'kampus-ipb-_180502101427-384.jpg', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-01-11', ''),
(8, 'Foto Kelima', 'foto-kelima', 'Keberadaan-kampus-Institut-Pertanian-Bogor-IPB.jpg', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-01-11', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1610334301, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'agusyogandi41@gmail.com', 'admin', '$2y$10$.5qmWMyXHHKktWhJEB3IUuD9v3qw2lkb6P7A4Lhg6ekbO30Cu9VK6', NULL, '2021-01-10 22:23:02', NULL, NULL, NULL, NULL, 1, 0, '2021-01-10 21:26:32', '2021-01-10 22:23:02', NULL),
(2, 'AdminFu@gmail.com', 'AdminFu', '$2y$10$20ppiPWaC1GbpCGurQ3zUugPtFoX4PyvV/WH.LoN.Q4owijtkHCOu', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-01-10 21:33:26', '2021-01-10 21:33:26', NULL),
(3, 'fu@gmail.com', 'Admin Fakultas Ushuludin', '$2y$10$SVUpX25Ou1feCnkFCehOVedHYLCC669k1Yq8Po9klFJYl71mdo1cq', NULL, NULL, NULL, 'a0d0b7c4759f12d907e0f9ceaca11aa8', NULL, NULL, 0, 0, '2021-01-10 22:21:13', '2021-01-10 22:21:13', NULL),
(4, '1167050011@uinsgd.ac.id', 'ulalalalalala', '$2y$10$BPV2FucsMBiw4SRFQ4hy0ucsjEKxQU4tCn8pkTOUquiAUpay25Un2', NULL, NULL, NULL, '403322be426c0e3cd2622b8a9c7cb34d', NULL, NULL, 0, 0, '2021-01-13 07:01:14', '2021-01-13 07:01:14', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `vidio`
--

CREATE TABLE `vidio` (
  `id` int(11) NOT NULL,
  `Judul` varchar(255) NOT NULL,
  `Slug` varchar(255) NOT NULL,
  `Vidio` varchar(255) NOT NULL,
  `Thumbnail` varchar(255) NOT NULL,
  `Deskripsi` varchar(255) NOT NULL,
  `Link` varchar(255) NOT NULL,
  `Tanggal_input` varchar(255) NOT NULL,
  `Tanggal_update` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `vidio`
--

INSERT INTO `vidio` (`id`, `Judul`, `Slug`, `Vidio`, `Thumbnail`, `Deskripsi`, `Link`, `Tanggal_input`, `Tanggal_update`) VALUES
(3, 'Vidio Pertama', 'vidio-pertama', 'Vidio Fakultas', '180-1804164_ux-ui-design-user-testing-icon-png.png', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not o', 'https://www.youtube.com/watch?v=YgY1d-3FiFo', '2021-01-11', 0),
(4, 'Vidio Kedua', 'vidio-kedua', 'Vidio Fakultas', '180-1804164_ux-ui-design-user-testing-icon-png_1.png', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not o', 'https://www.youtube.com/watch?v=YgY1d-3FiFo', '2021-01-11', 0),
(5, 'Vidio ketiga', 'vidio-ketiga', 'Vidio Fakultas', '180-1804164_ux-ui-design-user-testing-icon-png_2.png', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not o', 'https://www.youtube.com/', '2021-01-11', 0),
(6, 'Vidio Keempat', 'vidio-keempat', 'Vidio Fakultas', '180-1804164_ux-ui-design-user-testing-icon-png_3.png', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not o', 'https://www.youtube.com/', '2021-01-11', 0),
(7, 'Vidio Kelima', 'vidio-kelima', 'Vidio Fakultas', '180-1804164_ux-ui-design-user-testing-icon-png_4.png', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not o', 'https://www.youtube.com/', '2021-01-11', 0),
(8, 'Kabar Alumni Pertama', 'kabar-alumni-pertama', 'Kabar Alumni', 'youtube-2.jpg', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not o', 'https://www.youtube.com/', '2021-01-11', 0),
(9, 'Kabar Alumni Kedua', 'kabar-alumni-kedua', 'Kabar Alumni', 'youtube-2_1.jpg', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not o', 'https://www.youtube.com/', '2021-01-11', 0),
(10, 'Kabar Alumni Ketiga', 'kabar-alumni-ketiga', 'Kabar Alumni', 'youtube-2_2.jpg', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not o', 'https://www.youtube.com/', '2021-01-11', 0),
(11, 'Kabar Alumni Keempat', 'kabar-alumni-keempat', 'Kabar Alumni', 'youtube-2_3.jpg', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not o', 'https://www.youtube.com/', '2021-01-11', 0),
(12, 'Kabar Alumni Kelima', 'kabar-alumni-kelima', 'Kabar Alumni', 'youtube-2_4.jpg', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not o', 'https://www.youtube.com/', '2021-01-11', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `visitor`
--

CREATE TABLE `visitor` (
  `ip` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `hits` int(11) NOT NULL,
  `online` varchar(255) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `visitor`
--

INSERT INTO `visitor` (`ip`, `date`, `hits`, `online`, `time`) VALUES
('::1', '2021-01-14', 1, '1610627094', '2021-01-14 06:24:54');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `vidio`
--
ALTER TABLE `vidio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `vidio`
--
ALTER TABLE `vidio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
