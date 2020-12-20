-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Agu 2019 pada 18.07
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `hits` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `isi`, `gambar`, `tanggal`, `hits`) VALUES
(4, 'Pendidikan sekolah dasar', 'Pengertian Lempar Lembing\r\nAdalah suatu nomor yang terdapat dalam cabang olahraga atletik yang menggunakan alat bulat panjang berbentuk tombak dengan cara melempar sejauh-jauhnya (PASI, 1988:43)\r\nSelanjutnya Jerver ( 1996:142) menjelaskan bahwa Lempar Lembing adalah suatu gerakan antara sentuhan tangan dengan menggunakan benda yang berbentuk panjang berusaha untuk melempar sejauh mungkin. Untuk memperoleh jauhnya lemparan diperlukan kekuatan dengan kecepatan gerak serta sudut pada saat lembing meninggalkan tangan.\r\nNamun pada konteks olah raga, lempar lembing dapat didefinisikan sebagai salah satu nomor atletik melempar di mana sang atlet mempertunjukkan kemampuannya untuk melempar sebuah lembing dengan gaya dan teknik tertentu dengan mengikuti segala peraturan dalam pertandingan tersebut untuk memperoleh jarak lempar terjauh.\r\nMateri Lempar Lembing\r\nBerikut ini merupakan beberapa materi dasar dalam pelajaran lempar lembing, khususnya yang diajarkan di sekolah.\r\nMateri dasar ini mencakup beberapa hal seperti pengertian umum mengenai olah raga atletik lempar lembing, sejarah lempar lembing mulai dari sebelum menjadi olah raga yang diperlombakan hingga menjadi ajang perlombaan internasional.\r\n', '2.jpg', '2019-05-24', 8),
(5, 'Berita eropa', 'Pengertian Lempar Lembing\r\nAdalah suatu nomor yang terdapat dalam cabang olahraga atletik yang menggunakan alat bulat panjang berbentuk tombak dengan cara melempar sejauh-jauhnya (PASI, 1988:43)\r\nSelanjutnya Jerver ( 1996:142) menjelaskan bahwa Lempar Lembing adalah suatu gerakan antara sentuhan tangan dengan menggunakan benda yang berbentuk panjang berusaha untuk melempar sejauh mungkin. Untuk memperoleh jauhnya lemparan diperlukan kekuatan dengan kecepatan gerak serta sudut pada saat lembing meninggalkan tangan.\r\nNamun pada konteks olah raga, lempar lembing dapat didefinisikan sebagai salah satu nomor atletik melempar di mana sang atlet mempertunjukkan kemampuannya untuk melempar sebuah lembing dengan gaya dan teknik tertentu dengan mengikuti segala peraturan dalam pertandingan tersebut untuk memperoleh jarak lempar terjauh.\r\nMateri Lempar Lembing\r\nBerikut ini merupakan beberapa materi dasar dalam pelajaran lempar lembing, khususnya yang diajarkan di sekolah.\r\nMateri dasar ini mencakup beberapa hal seperti pengertian umum mengenai olah raga atletik lempar lembing, sejarah lempar lembing mulai dari sebelum menjadi olah raga yang diperlombakan hingga menjadi ajang perlombaan internasional.', '5.jpg', '2019-06-04', 6),
(6, 'Perkembangan Burung nuri', 'Pengertian bola\r\nAdalah suatu nomor yang terdapat dalam cabang olahraga atletik yang menggunakan alat bulat panjang berbentuk tombak dengan cara melempar sejauh-jauhnya (PASI, 1988:43)\r\nSelanjutnya Jerver ( 1996:142) menjelaskan bahwa Lempar Lembing adalah suatu gerakan antara sentuhan tangan dengan menggunakan benda yang berbentuk panjang berusaha untuk melempar sejauh mungkin. Untuk memperoleh jauhnya lemparan diperlukan kekuatan dengan kecepatan gerak serta sudut pada saat lembing meninggalkan tangan.\r\nNamun pada konteks olah raga, lempar lembing dapat didefinisikan sebagai salah satu nomor atletik melempar di mana sang atlet mempertunjukkan kemampuannya untuk melempar sebuah lembing dengan gaya dan teknik tertentu dengan mengikuti segala peraturan dalam pertandingan tersebut untuk memperoleh jarak lempar terjauh.\r\nMateri Lempar Lembing\r\nBerikut ini merupakan beberapa materi dasar dalam pelajaran lempar lembing, khususnya yang diajarkan di sekolah.\r\nMateri dasar ini mencakup beberapa hal seperti pengertian umum mengenai olah raga atletik lempar lembing, sejarah lempar lembing mulai dari sebelum menjadi olah raga yang diperlombakan hingga menjadi ajang perlombaan internasional.\r\n', '15.jpg', '2019-06-04', 11),
(7, 'Rohani', 'Pengertian Lempar Lembing\r\nAdalah suatu nomor yang terdapat dalam cabang olahraga atletik yang menggunakan alat bulat panjang berbentuk tombak dengan cara melempar sejauh-jauhnya (PASI, 1988:43)\r\nSelanjutnya Jerver ( 1996:142) menjelaskan bahwa Lempar Lembing adalah suatu gerakan antara sentuhan tangan dengan menggunakan benda yang berbentuk panjang berusaha untuk melempar sejauh mungkin. Untuk memperoleh jauhnya lemparan diperlukan kekuatan dengan kecepatan gerak serta sudut pada saat lembing meninggalkan tangan.\r\nNamun pada konteks olah raga, lempar lembing dapat didefinisikan sebagai salah satu nomor atletik melempar di mana sang atlet mempertunjukkan kemampuannya untuk melempar sebuah lembing dengan gaya dan teknik tertentu dengan mengikuti segala peraturan dalam pertandingan tersebut untuk memperoleh jarak lempar terjauh.\r\nMateri Lempar Lembing\r\nBerikut ini merupakan beberapa materi dasar dalam pelajaran lempar lembing, khususnya yang diajarkan di sekolah.\r\nMateri dasar ini mencakup beberapa hal seperti pengertian umum mengenai olah raga atletik lempar lembing, sejarah lempar lembing mulai dari sebelum menjadi olah raga yang diperlombakan hingga menjadi ajang perlombaan internasional.\r\n', 'Movie56+0001.jpg', '2019-06-16', 8),
(9, 'Kudus', 'Pengertian Lempar Lembing\r\nAdalah suatu nomor yang terdapat dalam cabang olahraga atletik yang menggunakan alat bulat panjang berbentuk tombak dengan cara melempar sejauh-jauhnya (PASI, 1988:43)\r\nSelanjutnya Jerver ( 1996:142) menjelaskan bahwa Lempar Lembing adalah suatu gerakan antara sentuhan tangan dengan menggunakan benda yang berbentuk panjang berusaha untuk melempar sejauh mungkin. Untuk memperoleh jauhnya lemparan diperlukan kekuatan dengan kecepatan gerak serta sudut pada saat lembing meninggalkan tangan.\r\nNamun pada konteks olah raga, lempar lembing dapat didefinisikan sebagai salah satu nomor atletik melempar di mana sang atlet mempertunjukkan kemampuannya untuk melempar sebuah lembing dengan gaya dan teknik tertentu dengan mengikuti segala peraturan dalam pertandingan tersebut untuk memperoleh jarak lempar terjauh.\r\nMateri Lempar Lembing\r\nBerikut ini merupakan beberapa materi dasar dalam pelajaran lempar lembing, khususnya yang diajarkan di sekolah.\r\nMateri dasar ini mencakup beberapa hal seperti pengertian umum mengenai olah raga atletik lempar lembing, sejarah lempar lembing mulai dari sebelum menjadi olah raga yang diperlombakan hingga menjadi ajang perlombaan internasional.\r\n', 'haleluyagroup15 001.jpg', '2019-06-16', 19),
(10, 'BOLA', 'Pengertian Lempar andi\r\nAdalah suatu nomor yang terdapat dalam cabang olahraga atletik yang menggunakan alat bulat panjang berbentuk tombak dengan cara melempar sejauh-jauhnya (PASI, 1988:43)\r\nSelanjutnya Jerver ( 1996:142) menjelaskan bahwa Lempar Lembing adalah suatu gerakan antara sentuhan tangan dengan menggunakan benda yang berbentuk panjang berusaha untuk melempar sejauh mungkin. Untuk memperoleh jauhnya lemparan diperlukan kekuatan dengan kecepatan gerak serta sudut pada saat lembing meninggalkan tangan.\r\nNamun pada konteks olah raga, lempar lembing dapat didefinisikan sebagai salah satu nomor atletik melempar di mana sang atlet mempertunjukkan kemampuannya untuk melempar sebuah lembing dengan gaya dan teknik tertentu dengan mengikuti segala peraturan dalam pertandingan tersebut untuk memperoleh jarak lempar terjauh.\r\nMateri Lempar Lembing\r\nBerikut ini merupakan beberapa materi dasar dalam pelajaran lempar lembing, khususnya yang diajarkan di sekolah.\r\nMateri dasar ini mencakup beberapa hal seperti pengertian umum mengenai olah raga atletik lempar lembing, sejarah lempar lembing mulai dari sebelum menjadi olah raga yang diperlombakan hingga menjadi ajang perlombaan internasional.\r\n', 'Andres_Iniesta_11.jpg', '2019-06-17', 3),
(11, 'Barca', 'Pengertian Lempar Lembing\r\nAdalah suatu nomor yang terdapat dalam cabang olahraga atletik yang menggunakan alat bulat panjang berbentuk tombak dengan cara melempar sejauh-jauhnya (PASI, 1988:43)\r\nSelanjutnya Jerver ( 1996:142) menjelaskan bahwa Lempar Lembing adalah suatu gerakan antara sentuhan tangan dengan menggunakan benda yang berbentuk panjang berusaha untuk melempar sejauh mungkin. Untuk memperoleh jauhnya lemparan diperlukan kekuatan dengan kecepatan gerak serta sudut pada saat lembing meninggalkan tangan.\r\nNamun pada konteks olah raga, lempar lembing dapat didefinisikan sebagai salah satu nomor atletik melempar di mana sang atlet mempertunjukkan kemampuannya untuk melempar sebuah lembing dengan gaya dan teknik tertentu dengan mengikuti segala peraturan dalam pertandingan tersebut untuk memperoleh jarak lempar terjauh.\r\nMateri Lempar Lembing\r\nBerikut ini merupakan beberapa materi dasar dalam pelajaran lempar lembing, khususnya yang diajarkan di sekolah.\r\nMateri dasar ini mencakup beberapa hal seperti pengertian umum mengenai olah raga atletik lempar lembing, sejarah lempar lembing mulai dari sebelum menjadi olah raga yang diperlombakan hingga menjadi ajang perlombaan internasional.\r\n', 'Anak barca.jpg', '2019-06-17', 19);

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `judul`, `gambar`, `tanggal`) VALUES
(1, 'Bunga', '2.jpg', '2019-05-30'),
(2, 'Eropa', '5.jpg', '2019-06-05'),
(3, 'Jembatan', '11.jpg', '2019-06-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `halaman`
--

CREATE TABLE `halaman` (
  `id_halaman` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `halaman`
--

INSERT INTO `halaman` (`id_halaman`, `judul`, `isi`) VALUES
(1, 'Home', '123456'),
(2, 'Visi dan Misi', 'Pengertian Lempar Lembing\r\nAdalah suatu nomor yang terdapat dalam cabang olahraga atletik yang menggunakan alat bulat panjang berbentuk tombak dengan cara melempar sejauh-jauhnya (PASI, 1988:43)\r\nSelanjutnya Jerver ( 1996:142) menjelaskan bahwa Lempar Lembing adalah suatu gerakan antara sentuhan tangan dengan menggunakan benda yang berbentuk panjang berusaha untuk melempar sejauh mungkin. Untuk memperoleh jauhnya lemparan diperlukan kekuatan dengan kecepatan gerak serta sudut pada saat lembing meninggalkan tangan.\r\nNamun pada konteks olah raga, lempar lembing dapat didefinisikan sebagai salah satu nomor atletik melempar di mana sang atlet mempertunjukkan kemampuannya untuk melempar sebuah lembing dengan gaya dan teknik tertentu dengan mengikuti segala peraturan dalam pertandingan tersebut untuk memperoleh jarak lempar terjauh.\r\nMateri Lempar Lembing\r\nBerikut ini merupakan beberapa materi dasar dalam pelajaran lempar lembing, khususnya yang diajarkan di sekolah.\r\nMateri dasar ini mencakup beberapa hal seperti pengertian umum mengenai olah raga atletik lempar lembing, sejarah lempar lembing mulai dari sebelum menjadi olah raga yang diperlombakan hingga menjadi ajang perlombaan internasional.\r\n'),
(3, 'Profil', 'Pengertian Lempar Lembing\r\nAdalah suatu nomor yang terdapat dalam cabang olahraga atletik yang menggunakan alat bulat panjang berbentuk tombak dengan cara melempar sejauh-jauhnya (PASI, 1988:43)\r\nSelanjutnya Jerver ( 1996:142) menjelaskan bahwa Lempar Lembing adalah suatu gerakan antara sentuhan tangan dengan menggunakan benda yang berbentuk panjang berusaha untuk melempar sejauh mungkin. Untuk memperoleh jauhnya lemparan diperlukan kekuatan dengan kecepatan gerak serta sudut pada saat lembing meninggalkan tangan.\r\nNamun pada konteks olah raga, lempar lembing dapat didefinisikan sebagai salah satu nomor atletik melempar di mana sang atlet mempertunjukkan kemampuannya untuk melempar sebuah lembing dengan gaya dan teknik tertentu dengan mengikuti segala peraturan dalam pertandingan tersebut untuk memperoleh jarak lempar terjauh.\r\nMateri Lempar Lembing\r\nBerikut ini merupakan beberapa materi dasar dalam pelajaran lempar lembing, khususnya yang diajarkan di sekolah.\r\nMateri dasar ini mencakup beberapa hal seperti pengertian umum mengenai olah raga atletik lempar lembing, sejarah lempar lembing mulai dari sebelum menjadi olah raga yang diperlombakan hingga menjadi ajang perlombaan internasional.\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(5) NOT NULL,
  `id_artikel` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `komentar` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_artikel`, `nama`, `email`, `komentar`, `tanggal`) VALUES
(1, 11, 'Andi', 'yohanesardinus@gmail.com', '0', '2019-08-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(5) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `link` varchar(50) NOT NULL,
  `urutan` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `judul`, `link`, `urutan`) VALUES
(60, 'Home', 'index.php', 1),
(61, 'Galeri', '?tampil=galeri', 4),
(62, 'Kontak Kami', '?tampil=kontak', 5),
(63, 'Visi dan Misi', '?tampil=halaman&id=2', 3),
(64, 'Profil', '?tampil=halaman&id=3', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subjek` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `balasan` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama`, `email`, `subjek`, `pesan`, `balasan`, `tanggal`) VALUES
(1, 'Andi', 'yohanes@mail.com', 'Test', 'andi', 'gdgsgsgfdgsdgdsdf', '2019-03-15'),
(2, 'Andi', 'yohanesardinus@gmail.com', '', 'dajdajkahdaksdhakd', '', '2019-06-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `submenu`
--

CREATE TABLE `submenu` (
  `id_submenu` int(5) NOT NULL,
  `id_menu` int(5) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `urutan` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `submenu`
--

INSERT INTO `submenu` (`id_submenu`, `id_menu`, `judul`, `link`, `urutan`) VALUES
(1, 64, 'Produk', '?tampil=halaman&id=2', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', 'ce0e5bf55e4f71749eade7a8b95c4e46');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `halaman`
--
ALTER TABLE `halaman`
  ADD PRIMARY KEY (`id_halaman`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id_submenu`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `halaman`
--
ALTER TABLE `halaman`
  MODIFY `id_halaman` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `submenu`
--
ALTER TABLE `submenu`
  MODIFY `id_submenu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
