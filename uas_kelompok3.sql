-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2024 at 08:26 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_kelompok3`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen424`
--

CREATE TABLE `absen424` (
  `kd_absen` char(6) NOT NULL,
  `id_karyawan` char(6) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_masuk` time(6) NOT NULL,
  `jam_keluar` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `absen424`
--

INSERT INTO `absen424` (`kd_absen`, `id_karyawan`, `tanggal`, `jam_masuk`, `jam_keluar`) VALUES
('ABS002', 'HAV424', '2024-06-01', '06:50:30.000000', '16:03:10.000000'),
('ABS003', 'LIN222', '2024-06-01', '06:48:38.000000', '16:10:08.000000'),
('ABS004', 'PUT122', '2024-06-01', '07:00:47.000000', '16:03:55.000000'),
('ABS005', 'RAF428', '2024-06-01', '07:01:40.000000', '16:01:10.000000');

-- --------------------------------------------------------

--
-- Table structure for table `gaji427`
--

CREATE TABLE `gaji427` (
  `kd_gaji427` char(6) NOT NULL,
  `id_karyawan` char(6) NOT NULL,
  `kd_jabatan` char(6) NOT NULL,
  `kd_absen` char(6) NOT NULL,
  `tanggal` date NOT NULL,
  `gajian` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gaji427`
--

INSERT INTO `gaji427` (`kd_gaji427`, `id_karyawan`, `kd_jabatan`, `kd_absen`, `tanggal`, `gajian`) VALUES
('KDG001', 'HAV424', 'HRD', 'ABS002', '2024-07-31', 4000000),
('KDG002', 'AKB901', 'HRD', 'ABS005', '2024-07-30', 4000000),
('KDG003', 'LIN222', 'OPT', 'ABS003', '2024-07-31', 2000000),
('KDG004', 'PUT122', 'OPT', 'ABS004', '2024-07-31', 2000000),
('KDG005', 'RAF428', 'OPT', 'ABS005', '2024-07-31', 2000000);

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `kd_jabatan` char(6) NOT NULL,
  `nama_jabatan` varchar(15) NOT NULL,
  `gapok` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`kd_jabatan`, `nama_jabatan`, `gapok`) VALUES
('HRD', 'HRD', 4000000),
('OPT', 'Operator', 2000000),
('SPV', 'Supervisor', 3000000);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan428`
--

CREATE TABLE `karyawan428` (
  `id_karyawan` char(6) NOT NULL,
  `kd_jabatan` char(6) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `umur` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karyawan428`
--

INSERT INTO `karyawan428` (`id_karyawan`, `kd_jabatan`, `nama`, `umur`, `gender`) VALUES
('AKB901', 'OPT', 'Akbar Nalendra Kusuma', '21', 'Laki-Laki'),
('AYU390', 'SPV', 'Ayunda Salsabila', '29', 'Perempuan'),
('HAV424', 'SPV', 'Havid Danggo Pamungkas', '20', 'Laki-Laki'),
('LIN222', 'OPT', 'Linda Amanda', '19', 'Perempuan'),
('PUT122', 'OPT', 'Putri Indah Safitri', '21', 'Perempuan'),
('RAF428', 'OPT', 'Raflesia Mukhlis Juliyanto', '20', 'Laki-Laki');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` char(10) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('2213010424', '$2y$12$gYVJ4JW3lElYsCHZOf1/8ufRmAoQIMEV55bWEEil4nfeQ6TqKdfOG'),
('2213010427', '$2y$12$Mey7z6W5N/HPtjwMOF1RR.D9L/pcx/Rgz7lA7N.2N56OD5/GE5Kqy'),
('2213010428', '$2y$12$SHsG/TbhMByUy8ZaO/61ROBQqykZnqUGi/Vi0omLfezU.Qs5tYDqm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen424`
--
ALTER TABLE `absen424`
  ADD PRIMARY KEY (`kd_absen`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- Indexes for table `gaji427`
--
ALTER TABLE `gaji427`
  ADD PRIMARY KEY (`kd_gaji427`),
  ADD KEY `id_karyawan` (`id_karyawan`),
  ADD KEY `kd_absen` (`kd_absen`),
  ADD KEY `kd_jabatan` (`kd_jabatan`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`kd_jabatan`);

--
-- Indexes for table `karyawan428`
--
ALTER TABLE `karyawan428`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD KEY `kd_jabatan` (`kd_jabatan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absen424`
--
ALTER TABLE `absen424`
  ADD CONSTRAINT `absen424_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan428` (`id_karyawan`);

--
-- Constraints for table `gaji427`
--
ALTER TABLE `gaji427`
  ADD CONSTRAINT `gaji427_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan428` (`id_karyawan`),
  ADD CONSTRAINT `gaji427_ibfk_2` FOREIGN KEY (`kd_absen`) REFERENCES `absen424` (`kd_absen`),
  ADD CONSTRAINT `gaji427_ibfk_3` FOREIGN KEY (`kd_jabatan`) REFERENCES `jabatan` (`kd_jabatan`);

--
-- Constraints for table `karyawan428`
--
ALTER TABLE `karyawan428`
  ADD CONSTRAINT `karyawan428_ibfk_1` FOREIGN KEY (`kd_jabatan`) REFERENCES `jabatan` (`kd_jabatan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
