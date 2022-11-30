-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Nov 2022 pada 18.07
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_chmzyrest_uts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `psw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `email`, `username`, `psw`) VALUES
(2, 'admin1@gmail.com', 'Admin', '$2y$10$GAqBp.d6kA/iBwLIwhrGC.IaQkqIeJ8dcIbGt/yD6d5LtQ1Dzb/Qa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking_table`
--

CREATE TABLE `booking_table` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `telpon` varchar(13) NOT NULL,
  `tamu` int(50) NOT NULL,
  `tanggal_reserv` date NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `booking_table`
--

INSERT INTO `booking_table` (`id`, `nama`, `tipe`, `telpon`, `tamu`, `tanggal_reserv`, `note`) VALUES
(5, 'Rismayanti', 'Private VIP', '085281877461', 5, '2022-12-09', 'Dekorasi semi formal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dessert`
--

CREATE TABLE `dessert` (
  `id` int(11) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dessert`
--

INSERT INTO `dessert` (`id`, `tipe`, `nama`, `gambar`, `harga`, `tanggal`) VALUES
(4, 'Custard dan puding', 'Oreo Pudding', 'Oreo Pudding.jpg', 90000, '2022-12-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan`
--

CREATE TABLE `makanan` (
  `id` int(11) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `makanan`
--

INSERT INTO `makanan` (`id`, `tipe`, `nama`, `gambar`, `harga`, `tanggal`) VALUES
(4, 'Buffet', 'Sushi', 'Sushi.jpg', 280000, '2022-12-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `minuman`
--

CREATE TABLE `minuman` (
  `id` int(11) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `minuman`
--

INSERT INTO `minuman` (`id`, `tipe`, `nama`, `gambar`, `harga`, `tanggal`) VALUES
(4, 'Juices', 'Blueberry Thyme Gin Fizz', 'Blueberry Thyme Gin Fizz.jpg', 150000, '2022-12-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_online`
--

CREATE TABLE `order_online` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `pembayaran` varchar(100) NOT NULL,
  `telpon` varchar(13) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `order_menu` varchar(255) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `order_online`
--

INSERT INTO `order_online` (`id`, `nama`, `pembayaran`, `telpon`, `alamat`, `order_menu`, `jumlah`, `note`) VALUES
(3, 'Rismayanti', 'Bank Transfer', '085281877461', 'Sungai Dama, RT 01', 'Sushi', 2, 'tambahkan extra kezu ');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `booking_table`
--
ALTER TABLE `booking_table`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dessert`
--
ALTER TABLE `dessert`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `minuman`
--
ALTER TABLE `minuman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `order_online`
--
ALTER TABLE `order_online`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `booking_table`
--
ALTER TABLE `booking_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `dessert`
--
ALTER TABLE `dessert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `minuman`
--
ALTER TABLE `minuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `order_online`
--
ALTER TABLE `order_online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
