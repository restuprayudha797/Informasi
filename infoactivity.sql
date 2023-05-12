-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Mar 2023 pada 14.18
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infoactivity`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `activity`
--

CREATE TABLE `activity` (
  `id_activity` int(11) NOT NULL,
  `nameOfActivity` varchar(200) NOT NULL,
  `personResponsible` varchar(222) NOT NULL,
  `activityDate` varchar(200) NOT NULL,
  `startTime` varchar(200) NOT NULL,
  `timesUp` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `role_activity` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `activity`
--

INSERT INTO `activity` (`id_activity`, `nameOfActivity`, `personResponsible`, `activityDate`, `startTime`, `timesUp`, `location`, `role_activity`) VALUES
(6, 'Ldp pr ipm smk muda', 'Andi Saputra', '2023-03-09', '11:37', '04:37', 'Workshop smk muda', 1),
(7, 'Trobosan', 'Wali Kelas', '2023-03-10', '07:10', '16:30', 'Labor Jurusan', 1),
(8, 'Trobosan', 'Wali Kelas', '2023-03-12', '08:38', '05:25', 'Workshop', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_users`, `name`, `email`, `password`) VALUES
(1, 'administrator', 'smkmudapekanbaru@gmail.com', '$2y$10$m8F.VFY00R9Q91DEObPc/O1/xrpyVX9MunyG/vBP6lNXtVAkOYPQy'),
(4, 'Restu Prayudha', 'muhammadrestuprayudha797@gmail.com', '$2y$10$sFu0STQvUAl7cPyjgfHks.gcA2.qR/bJBQ2pWCLRn5t6NA53AkKfy');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `activity`
--
ALTER TABLE `activity`
  MODIFY `id_activity` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
