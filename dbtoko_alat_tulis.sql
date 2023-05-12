-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Bulan Mei 2023 pada 05.59
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtoko_alat_tulis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `merk`
--

CREATE TABLE `merk` (
  `id` int(11) NOT NULL,
  `nama_merk` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `merk`
--

INSERT INTO `merk` (`id`, `nama_merk`) VALUES
(1, 'Sinar Dunia'),
(2, 'Joyko'),
(3, 'Stabilo'),
(4, 'Jotter');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `namapelanggan` varchar(191) NOT NULL,
  `tanggal` date NOT NULL,
  `produk_id` int(45) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `namapelanggan`, `tanggal`, `produk_id`, `quantity`) VALUES
(2, 'dela', '2023-02-20', 7, 5),
(5, 'hisyam', '1010-10-20', 16, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(45) NOT NULL,
  `merk_id` int(45) NOT NULL,
  `foto` blob NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama`, `stok`, `harga`, `merk_id`, `foto`, `deskripsi`) VALUES
(7, 'Pensil Warna', 50, 20000, 2, 0x68747470733a2f2f632e746f7034746f702e696f2f705f32363737666c716275312e6a7067, 'pensil warna joyko 12 warna'),
(8, 'Buku Tulis', 30, 13000, 1, 0x68747470733a2f2f642e746f7034746f702e696f2f705f32363837687868386a312e706e67, 'BUku tulis dengan kualitas terbaik dengan bahan kertas yang nyaman digunakan '),
(9, 'Parker Jotter Stainless Steel Gold Ballpoint', 20, 15000, 4, 0x68747470733a2f2f682e746f7034746f702e696f2f705f323638377739323672312e6a7067, 'Pulpen berbahan stainless berwarna emas dengan kualitas'),
(10, 'Stabilo Warna', 10, 10000, 3, 0x68747470733a2f2f6c2e746f7034746f702e696f2f705f323638376b3576776e312e6a7067, ''),
(11, 'Buku Matematika', 7, 4000, 1, 0x68747470733a2f2f6b2e746f7034746f702e696f2f705f323638377231323169312e6a706567, 'Buku tulis matematika isi 38 lembar'),
(12, 'Pulpen Gel Joyko', 13, 35000, 2, 0x68747470733a2f2f692e746f7034746f702e696f2f705f323638376337717737312e6a706567, 'Pulpen gel joyko 0.5 lancip isi 12 pcs/box '),
(13, 'Pensil 2B', 20, 25000, 3, 0x68747470733a2f2f692e746f7034746f702e696f2f705f32363837783635346f312e6a7067, 'Pensil 2B ujian stabilo isi 12/box'),
(14, 'Refill pulpen jotter', 6, 22000, 4, 0x68747470733a2f2f622e746f7034746f702e696f2f705f323638376a68796a36312e6a7067, 'Refill pulpen Jotter original authentic parker'),
(15, 'Lem putar', 6, 5000, 2, 0x68747470733a2f2f622e746f7034746f702e696f2f705f323638377568617572312e6a706567, 'Lem putar joyko berat 20gr'),
(16, 'Buku kwitansi', 33, 7000, 1, 0x68747470733a2f2f662e746f7034746f702e696f2f705f323638377369763378312e6a706567, 'Buku kwitansi penjualan isi 20 lembar sinar dunia'),
(17, 'Buku Tulis Jotter', 44, 6000, 4, 0x68747470733a2f2f6b2e746f7034746f702e696f2f705f323638376f69396b32312e6a7067, 'Buku Tulis original jotter 1/2 lusin asli singapore'),
(18, 'Pulpen stand', 30, 12000, 2, 0x68747470733a2f2f662e746f7034746f702e696f2f705f323638376662673162312e6a706567, 'Pulpen stand joyko termurah ');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pesanan_1` (`produk_id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_produk1` (`merk_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `merk`
--
ALTER TABLE `merk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `fk_pesanan_1` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `fk_produk1` FOREIGN KEY (`merk_id`) REFERENCES `merk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
