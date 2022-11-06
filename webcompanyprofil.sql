-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Okt 2021 pada 02.42
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webcompanyprofil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(11) NOT NULL,
  `judul_agenda` text NOT NULL,
  `content_agenda` text NOT NULL,
  `tanggal` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `judul_agenda`, `content_agenda`, `tanggal`, `id_user`) VALUES
(7, 'Senam Dan Apel Pagi', 'Senam Dan Apel Pagi', '2021-03-15', 1),
(8, 'Ukur Tanah Aset', 'Ukur Tanah Aset', '2021-03-17', 1),
(9, 'Istigosah Bersama', 'Istigosah Bersama', '2021-04-09', 1),
(10, 'Pengolahan Data Excel', 'Pengolahan Data Excel', '2021-04-23', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` text NOT NULL,
  `content_berita` text NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `content_berita`, `tanggal`, `gambar`, `id_user`) VALUES
(3, 'Pengukuran Aset Pemerintah Kabupaten Probolinggo', 'Pengukuran Tanah Aset Pemerintah Kabupaten Probolinggo ditujukan untuk program sertifikasi tanah milik Pemerintah Kab Probolinggo.Dalam programnya menargetkan 1000 sertifikasi tanah milik kabupaten probolinggo.Program itu merupakan Dibentuk oleh Dinas PUPR ,Dinas Pertanahan dan BKD yang nantinya ditargetkan dalam kurun waktu 1 Tahun', '2020-02-18', 'ukur tnah.jpeg', 1),
(14, 'Istigosah dan Solat Dhuha Bersama', 'Istigosah dan Solat Dhuha bersama ditujukan menambah keimanan kita kepada Allah SWT dan untuk mempererat persaudaraan antar karyawan di kantor bupati Probolinggo.Sholat dan Istigosah juga dilakukan agar kita diberi keselamatan oleh Allah swt dan diberi kelancaran dalam mengemban amanah masyarakat', '2021-03-18', 'istigosah.jpeg', 1),
(15, 'Pengolahan Data Excel ', 'Pengolahan data Aset milik Pemerintah Kabupaten Probolinggo dari berbagai dinas lalu dikumpulkan menjadi satu dokumen.Dokumen tersebut disesuaikan dengan nama daerah kedinasan itu bertempat', '2021-09-03', '', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE `biodata` (
  `id_biodata` int(11) NOT NULL,
  `nama_perusahaan` varchar(40) NOT NULL,
  `telepon` varchar(14) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nama_pimpinan` varchar(25) NOT NULL,
  `logo_perusahaan` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `biodata`
--

INSERT INTO `biodata` (`id_biodata`, `nama_perusahaan`, `telepon`, `alamat`, `nama_pimpinan`, `logo_perusahaan`, `visi`, `misi`) VALUES
(1, '-', '-', '-', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `judul_galeri` text NOT NULL,
  `gambar` text NOT NULL,
  `tanggal` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `judul_galeri`, `gambar`, `tanggal`, `id_user`) VALUES
(9, 'Senam Dan Apel Pagi', 'WhatsApp Image 2021-04-09 at 09.57.13 (3).jpeg', '2021-03-15', 1),
(11, 'Sholat Dhuha Dan Doa Bersama', 'WhatsApp Image 2021-04-09 at 09.57.13 (2).jpeg', '2021-04-12', 1),
(12, 'Ukur Jalan', 'WhatsApp Image 2021-04-09 at 09.57.13.jpeg', '2021-04-19', 1),
(13, 'Rekap Data Aset', 'WhatsApp Image 2021-04-12 at 08.58.19.jpeg', '2021-04-19', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama`, `email`, `subjek`, `pesan`) VALUES
(2, '', 'sfsdfb@gmail.com', '', 'dsfdsfdfsdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` smallint(11) NOT NULL,
  `nama_user` varchar(40) NOT NULL,
  `telepon` varchar(14) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `telepon`, `alamat`, `username`, `password`) VALUES
(7, 'SofiSugiharto', '082235177689', 'Probolinggo', 'fighaz', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id_biodata`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id_biodata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` smallint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
