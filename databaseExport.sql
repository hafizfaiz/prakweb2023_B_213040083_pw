-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 09, 2023 at 03:55 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakweb_2023_b_213040083`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukus`
--

CREATE TABLE `bukus` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `jumlah_halaman` int NOT NULL,
  `tanggal_terbit` date NOT NULL,
  `penerbit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bukus`
--

INSERT INTO `bukus` (`id`, `judul`, `harga`, `jumlah_halaman`, `tanggal_terbit`, `penerbit`, `penulis`, `img`) VALUES
(10, 'Bumi', '190000.00', 482, '2014-01-14', 'gramedia', 'Tere Liye', 'C:\\Users\\ACER\\AppData\\Local\\Temp\\php93BA.tmp'),
(11, 'Bulan', '190000.00', 433, '2021-10-19', 'gramedia', 'Tere Liye', 'C:\\Users\\ACER\\AppData\\Local\\Temp\\php40D4.tmp'),
(12, 'PaperTown', '200000.00', 422, '2023-10-09', 'gramedia', 'Tere Liye', 'C:\\Users\\ACER\\AppData\\Local\\Temp\\phpD748.tmp'),
(13, 'mahabarata', '200000.00', 485, '2023-10-18', 'gramedia', 'Tere Liye', 'C:\\Users\\ACER\\AppData\\Local\\Temp\\php6001.tmp'),
(14, 'Bulan', '200000.00', 200000, '2023-10-22', 'gramedia', 'Tere Liye', 'C:\\Users\\ACER\\AppData\\Local\\Temp\\phpAE22.tmp'),
(15, 'PaperTown', '200000.00', 2009, '2023-10-16', 'gramedia', 'draco malfoy', 'C:\\Users\\ACER\\AppData\\Local\\Temp\\php1A5A.tmp'),
(16, 'Sudut Pandang', '98000.00', 200000, '2023-10-08', 'gramedia', 'adasda', 'C:\\Users\\ACER\\AppData\\Local\\Temp\\phpA91E.tmp'),
(17, 'mahabarata', '200000.00', 432, '2023-10-08', 'gramedia', 'draco malfoy', 'C:\\Users\\ACER\\AppData\\Local\\Temp\\php394.tmp'),
(18, 'looking for alaska', '200000.00', 534, '2023-10-08', 'gramedia', 'draco malfoy', 'C:\\Users\\ACER\\AppData\\Local\\Temp\\php971A.tmp'),
(19, 'fuyung hay', '200000.00', 867, '2023-10-15', 'gramedia', 'Tere Liye', 'C:\\Users\\ACER\\AppData\\Local\\Temp\\php69E.tmp'),
(20, 'hayuhayu', '900.00', 400, '2023-10-02', 'nizam', 'nazim', 'C:\\Users\\ACER\\AppData\\Local\\Temp\\phpF93A.tmp'),
(21, 'mahabarata', '300.00', 300, '2023-10-01', 'gramedia', 'Tere Liye', 'C:\\Users\\ACER\\AppData\\Local\\Temp\\phpB9E0.tmp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bukus`
--
ALTER TABLE `bukus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bukus`
--
ALTER TABLE `bukus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
