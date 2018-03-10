-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2018 at 10:03 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlns`
--

-- --------------------------------------------------------

--
-- Table structure for table `ca`
--

CREATE TABLE `ca` (
  `id` int(10) NOT NULL,
  `tenca` varchar(5) NOT NULL,
  `tgbd` time NOT NULL,
  `tgkt` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ca`
--

INSERT INTO `ca` (`id`, `tenca`, `tgbd`, `tgkt`) VALUES
(1, 'A', '07:30:00', '11:30:00'),
(2, 'B', '13:00:00', '17:00:00'),
(3, 'C', '19:00:00', '23:00:00'),
(4, 'D', '01:00:00', '05:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `chucvu`
--

CREATE TABLE `chucvu` (
  `id` int(10) NOT NULL,
  `tencv` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chucvu`
--

INSERT INTO `chucvu` (`id`, `tencv`) VALUES
(1, 'Giam doc'),
(2, 'nhan vien');

-- --------------------------------------------------------

--
-- Table structure for table `diemdanh`
--

CREATE TABLE `diemdanh` (
  `idnv` varchar(10) NOT NULL,
  `ngay` date NOT NULL,
  `idca` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `diemdanh`
--

INSERT INTO `diemdanh` (`idnv`, `ngay`, `idca`) VALUES
('1', '2018-03-10', 2);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id` int(10) NOT NULL,
  `hoten` varchar(30) NOT NULL,
  `gioitinh` tinyint(1) NOT NULL,
  `ngaysinh` date NOT NULL,
  `noisinh` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `socmnd` varchar(13) NOT NULL,
  `hinh` varchar(50) NOT NULL,
  `noicapcmnd` varchar(50) NOT NULL,
  `ngaycapcmnd` date NOT NULL,
  `nguyenquan` varchar(50) NOT NULL,
  `quoctich` varchar(15) NOT NULL,
  `noithuongtru` varchar(50) NOT NULL,
  `noitamtru` varchar(50) NOT NULL,
  `dantoc` varchar(15) NOT NULL,
  `tongiao` varchar(15) NOT NULL,
  `tinhtranghonnhan` varchar(15) NOT NULL,
  `trinhdovanhoa` varchar(15) NOT NULL,
  `trinhdochuyenmon` varchar(15) NOT NULL,
  `dienthoai` varchar(13) NOT NULL,
  `nganhangdangky` varchar(20) NOT NULL,
  `sotaikhoan` varchar(20) NOT NULL,
  `ngayvaolam` date NOT NULL,
  `idcv` int(10) NOT NULL,
  `idphong` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`id`, `hoten`, `gioitinh`, `ngaysinh`, `noisinh`, `email`, `socmnd`, `hinh`, `noicapcmnd`, `ngaycapcmnd`, `nguyenquan`, `quoctich`, `noithuongtru`, `noitamtru`, `dantoc`, `tongiao`, `tinhtranghonnhan`, `trinhdovanhoa`, `trinhdochuyenmon`, `dienthoai`, `nganhangdangky`, `sotaikhoan`, `ngayvaolam`, `idcv`, `idphong`) VALUES
(1, 'Phong', 1, '2018-03-01', '1', '1@gmail.com', '232342', 'sdf.png', 'sf', '2018-03-15', 'sfd', 'gg', 'ưer', 'ưg', 'sv', 'sc', 'sb', 'ethg', 'ưefw', '2342342', 'fsdf', 'sdf', '2018-03-21', 1, 1),
(2, 'Huỳnh Thị Mỹ Hường', 0, '2018-03-01', '96 Nguyễn Thj Tú', 'huynhtranvuquocphong@gmail.com', '35345345345', 'Capture1.PNG', 'Bến Tre', '2018-03-16', 'Bến Tre', 'Việt Nam', 'Bến Tre', 'Bến Tre', 'Kinh', 'Không', 'Độc thân', '12/1', 'CNTT', '0986716414', 'ARIBANK', '345345', '2017-11-16', 1, 1),
(5, 'Lê Thị B', 0, '2018-03-23', '96 Nguyễn Thj Tú', 'huynhtranvuquocphong@gmail.com', '35345345345', 'mXyG_Capture1.PNG', 'Bến Tre', '2018-03-17', 'Bến Tre', 'Việt Nam', 'Bến Tre', 'Bến Tre', 'Kinh', 'Không', 'Độc thân', '12/1', 'CNTT', '0986716414', 'ARIBANK', '345345', '2018-03-16', 1, 1),
(6, 'Lê Thị c', 0, '2018-02-28', '96 Nguyễn Thj Tú', 'huynhtranvuquocphong@gmail.com', '35345345345', 'SXAL_Capture1.PNG', 'Bến Tre', '2018-03-06', 'Bến Tre', 'Việt Nam', 'Bến Tre', 'Bến Tre', 'Kinh', 'Không', 'Độc thân', '12/1', 'CNTT', '0986716414', 'ARIBANK', '345345', '2018-03-16', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `phong`
--

CREATE TABLE `phong` (
  `id` int(10) NOT NULL,
  `tenphong` varchar(15) NOT NULL,
  `mota` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phong`
--

INSERT INTO `phong` (`id`, `tenphong`, `mota`) VALUES
(1, 'Nhân sự', ''),
(2, 'Tài chính', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quyen` int(1) NOT NULL,
  `idnv` int(10) NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ca`
--
ALTER TABLE `ca`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chucvu`
--
ALTER TABLE `chucvu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diemdanh`
--
ALTER TABLE `diemdanh`
  ADD PRIMARY KEY (`idnv`,`ngay`,`idca`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idchucvu` (`idcv`),
  ADD KEY `idphong` (`idphong`);

--
-- Indexes for table `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`(191)),
  ADD KEY `idnv` (`idnv`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ca`
--
ALTER TABLE `ca`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `chucvu`
--
ALTER TABLE `chucvu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `phong`
--
ALTER TABLE `phong`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_2` FOREIGN KEY (`idcv`) REFERENCES `chucvu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`idnv`) REFERENCES `nhanvien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
