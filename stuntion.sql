-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table stuntion.user
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(150) NOT NULL,
  `username` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pass` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nohp` varchar(15) DEFAULT NULL,
  `nama_anak` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `umur_anak` int DEFAULT NULL,
  `alamat` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `idx_username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=160 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table stuntion.user: ~10 rows (approximately)
INSERT INTO `user` (`id_user`, `nama_lengkap`, `username`, `email`, `pass`, `nohp`, `nama_anak`, `umur_anak`, `alamat`) VALUES
	(1, 'Salsabila Ramadanti', 'salsa123', 'salsabil@gmail.com', 'salsaaaaa', '081223678071', 'Athanasia', 40, 'Blitar'),
	(4, 'Eka Mira', 'eka234', 'eka@gmail.com', 'ekaaaa', NULL, NULL, NULL, NULL),
	(143, 'Salsa Azzahra', 'salsa89', 'azzahra@gmail.com', 'salsa', '086524678097', 'Gaga', 48, 'Sunan Kalijaga Dalam, Malang'),
	(144, 'Jaja Maulana', 'jaja_34', 'jajamaulana@gmail.com', 'jaja34_maulana', '085432789634', 'Henry', 45, 'Dusun Jambu, Desa Mangkah, Kecamatan Baureno, Kabupaten Bojonegoro'),
	(148, 'Sita Naura', 'naura_s', 'sitanaur@gmail.com', '12345', NULL, NULL, NULL, NULL),
	(149, 'Kaira Maulana', 'kaira7', 'rara@gmail.com', '12345', NULL, NULL, NULL, NULL),
	(156, 'Husni Aziza Maul', 'husni90', 'husni@gmail.com', 'husni90', '085245167851', 'kaira', 56, 'Jalan Sukabumi RT 05 RW 13 Malang'),
	(157, 'Anisa Fitri Yama', 'anisa51', 'anisa@gmail.com', '45678', '081342567245', 'Lanang', 45, 'Desa Juara Kecamatan Kuala Lumur Kabupaten Lamongan'),
	(158, 'Halo', 'halo', 'halo@gmail.com', 'halo', '085367289578', 'siapa', 45, 'Malang'),
	(159, 'Fadila', 'fadila', 'fadila@gmail.com', 'fadila', '086456372890', 'Kaira', 50, 'Malang');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
