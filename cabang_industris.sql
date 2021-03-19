-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2021 at 01:49 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simanis`
--

-- --------------------------------------------------------

--
-- Table structure for table `cabang_industris`
--

-- CREATE TABLE `cabang_industris` (
--   `id` bigint(20) UNSIGNED NOT NULL,
--   `nama_cabangindustri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `created_at` timestamp NULL DEFAULT NULL,
--   `updated_at` timestamp NULL DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cabang_industris`
--

INSERT INTO `cabang_industris` (`id`, `nama_cabangindustri`, `created_at`, `updated_at`) VALUES
(1, 'Pangan', NULL, NULL),
(2, 'Hulu Agro', NULL, NULL),
(3, 'Permesinan, Alat Transportasi & Energi Terbarukan', NULL, NULL),
(4, 'Hasil Pertambangan', NULL, NULL),
(5, 'Kimia, Farmasi, Kosemetik & Kesehatan', NULL, NULL),
(6, 'Ekonomi Kreatif', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cabang_industris`
--
ALTER TABLE `cabang_industris`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cabang_industris`
--
ALTER TABLE `cabang_industris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
