-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2021 at 01:50 PM
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
-- Table structure for table `sub_cabang_industris`
--

CREATE TABLE `sub_cabang_industris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_sub_cabangindustri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cabangindustri_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_cabang_industris`
--

INSERT INTO `sub_cabang_industris` (`id`, `nama_sub_cabangindustri`, `cabangindustri_id`, `created_at`, `updated_at`) VALUES
(1, 'Industri Pengolahan Ikan dan Hasil Laut \r\n', 1, NULL, NULL),
(2, 'Industri Berbasis Ternak Ruminansia\r\n', 1, NULL, NULL),
(3, 'Industri Pengolahan Hasil Hutan Kayu ', 2, NULL, NULL),
(4, 'Industri Pengolahan Hasil Hutan Bukan Kayu (HHBK)', 2, NULL, NULL),
(5, 'Industri Permesinan', 3, NULL, NULL),
(6, 'Industri Alat Transportasi', 3, NULL, NULL),
(7, 'Industri Energi Baru Terbarukan', 3, NULL, NULL),
(8, 'Industri Pakan', 2, NULL, NULL),
(9, 'Industri Pupuk Organik', 2, NULL, NULL),
(10, 'Industri Berbasis Ternak Unggas', 1, NULL, NULL),
(11, 'Industri Pengolahan Hasil Pertanian dan Perkebunan', 1, NULL, NULL),
(12, 'Industri Smelter dan Turunannya ', 4, NULL, NULL),
(13, 'Industri Kosmetik Herbal', 5, NULL, NULL),
(14, 'Industri Farmasi Herbal', 5, NULL, NULL),
(15, 'Industri Kimia', 5, NULL, NULL),
(16, 'Industri Alat Kesehatan', 5, NULL, NULL),
(17, 'Industri Busana Muslim', 6, NULL, NULL),
(18, 'Industri Kriya dan Aneka', 6, NULL, NULL),
(19, 'Industri Multimedia', 6, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sub_cabang_industris`
--
ALTER TABLE `sub_cabang_industris`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_cabang_industris_cabangindustri_id_foreign` (`cabangindustri_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sub_cabang_industris`
--
ALTER TABLE `sub_cabang_industris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sub_cabang_industris`
--
ALTER TABLE `sub_cabang_industris`
  ADD CONSTRAINT `sub_cabang_industris_cabangindustri_id_foreign` FOREIGN KEY (`cabangindustri_id`) REFERENCES `cabang_industris` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
