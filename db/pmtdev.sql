-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Apr 2020 pada 19.10
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmtdev`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `product_id` varchar(64) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `sender` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`product_id`, `name`, `link`, `description`, `image`, `sender`, `status`) VALUES
('5e81c45075d3f', 'Sistor Jayapura', 'https://play.google.com/store/apps/details?id=com.sidapur.grafikdata', 'Aplikasi informasi data sektoral jayapura papua', '5e81c45075d3f.png', 'Rois', 1),
('5e81e7e55053f', 'Rois Hoiron', 'https://play.google.com/store/apps/details?id=com.sidapur.grafikdata', 'kaessjafljefpjefp iewoiwfoejwf iwejfoiwjefoije iwfejoiwjefwef ojewofijwoef jofeijw', '5e81e7e55053f.jpeg', 'A', 1),
('5e81e90488db7', 'Rois Hoiron', 'https://play.google.com/store/apps/details?id=com.sidapur.grafikdata', 'kaessjafljefpjefp iewoiwfoejwf iwejfoiwjefoije iwfejoiwjefwef ojewofijwoef jofeijw', '5e81e90488db7.jpeg', 'A', 0),
('5e836cae67be7', 'rois', 'ksjlkejofiowij', 'wdaqwwqdkjdioeuwqhdiw oweihfwiuefhiuwhefwf wdaqwwqdkjdioeuwqhdiw oweihfwiuefhiuwhefwf wdaqwwqdkjdioeuwqhdiw oweihfwiuefhiuwhefwf ', '5e836cae67be7.png', 'Hoiron', 1),
('A', 'A', 'A', 'Informasi mengenai warisan budaya yang tersimpan dan dirawat keaslianya.', 'bkpm.png', 'Rois', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `role` enum('admin','customer') NOT NULL DEFAULT 'customer',
  `last_login` timestamp NOT NULL DEFAULT current_timestamp(),
  `photo` varchar(64) NOT NULL DEFAULT 'user_no_image.jpg',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_active` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `full_name`, `phone`, `role`, `last_login`, `photo`, `created_at`, `is_active`) VALUES
(1, 'admin', '$2y$10$kLfNILUSd.K3L5DnnwMFPem3xHW4zxBgALQE/8crjfg4BtQp2RYU6', 'admin@admin.com', 'admin', '082332646354', 'admin', '2020-04-01 16:06:47', 'user_no_image.jpg', '2020-04-01 09:36:51', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
