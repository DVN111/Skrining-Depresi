-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Apr 2023 pada 06.41
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `skrining`
--

CREATE TABLE `skrining` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `hasil` varchar(100) NOT NULL,
  `saran` varchar(255) NOT NULL,
  `nilai` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `skrining`
--

INSERT INTO `skrining` (`id`, `user_id`, `tanggal`, `hasil`, `saran`, `nilai`) VALUES
(14, 1, '2023-04-18', 'Depresi Berat', 'Perlu bantuan profesional berupa konseling dan terapi obat, kemungkinan untuk rawat inap', 42),
(15, 1, '2023-04-19', 'Depresi Berat', 'Perlu bantuan profesional berupa konseling dan terapi obat, kemungkinan untuk rawat inap', 63),
(16, 1, '2023-04-20', 'Depresi Sedang', 'Perlu bantuan profesional berupa konseling dan terapi obat', 21),
(17, 1, '2023-04-19', 'Depresi Berat', 'Perlu bantuan profesional berupa konseling dan terapi obat, kemungkinan untuk rawat inap', 57),
(18, 1, '2023-04-19', 'Depresi Berat', 'Perlu bantuan profesional berupa konseling dan terapi obat, kemungkinan untuk rawat inap', 57),
(19, 1, '2023-04-19', 'Depresi Berat', 'Perlu bantuan profesional berupa konseling dan terapi obat, kemungkinan untuk rawat inap', 57),
(20, 1, '2023-04-21', 'Normal', 'Tidak perlu intervensi', 0),
(21, 1, '2023-04-22', 'Depresi Sedang', 'Perlu bantuan profesional berupa konseling dan terapi obat', 21),
(22, 1, '2023-04-19', 'Depresi Ringan', 'Perlu dipelajari beberapa teknik relaksasi, pernafasan, olahraga terukur, dan diet', 12),
(23, 1, '2023-04-23', 'Depresi Ringan', 'Perlu dipelajari beberapa teknik relaksasi, pernafasan, olahraga terukur, dan diet', 13),
(24, 1, '2023-04-23', 'Depresi Ringan', 'Perlu dipelajari beberapa teknik relaksasi, pernafasan, olahraga terukur, dan diet', 13),
(25, 1, '2023-04-24', 'Depresi Sedang', 'Perlu bantuan profesional berupa konseling dan terapi obat', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `email`, `name`, `password`) VALUES
(1, 'user@gmail.com', 'User Baru', '1'),
(2, 'user2@gmail.com', 'Muhammad Daniyal', '1'),
(3, 'user2@gmail.com', 'Muhammad Daniyal', '1'),
(4, 'asus.daniyal@gmail.com', 'Niyall', '1QA1qa'),
(5, 'asus.daniyal@gmail.com', 'Muhammad Daniyal', '123qweASD'),
(6, 'asus.daniyal@gmail.com', 'Muhammad Daniyal', '1qa2WAS');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `skrining`
--
ALTER TABLE `skrining`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `skrining`
--
ALTER TABLE `skrining`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `skrining`
--
ALTER TABLE `skrining`
  ADD CONSTRAINT `skrining_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
