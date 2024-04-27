-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2024 at 03:43 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoe`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `MaDonHang` varchar(10) DEFAULT NULL,
  `MaSanPham` varchar(10) DEFAULT NULL,
  `MaChiTietDonHang` int(11) NOT NULL,
  `TenSanPham` varchar(350) DEFAULT NULL,
  `Gia` int(11) DEFAULT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `Tong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `MaDanhMuc` varchar(10) NOT NULL,
  `TenDanhMuc` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `MaDonHang` varchar(10) NOT NULL,
  `HoVaTen` varchar(50) DEFAULT NULL,
  `Email` varchar(150) DEFAULT NULL,
  `Sdt` varchar(20) DEFAULT NULL,
  `DiaChi` varchar(200) DEFAULT NULL,
  `ThoiGianDatHang` datetime DEFAULT NULL,
  `TrangThai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `User_ID` int(11) NOT NULL,
  `HoVaTen` varchar(50) DEFAULT NULL,
  `Email` varchar(150) DEFAULT NULL,
  `Sdt` varchar(20) DEFAULT NULL,
  `DiaChi` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quanlyhinhanh`
--

CREATE TABLE `quanlyhinhanh` (
  `MaSanPham` varchar(10) DEFAULT NULL,
  `MaHinhAnh` varchar(10) NOT NULL,
  `HinhAnh` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaDanhMuc` varchar(10) DEFAULT NULL,
  `MaSanPham` varchar(10) NOT NULL,
  `TenSanPham` varchar(350) DEFAULT NULL,
  `Gia` int(11) DEFAULT NULL,
  `Size` varchar(255) DEFAULT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `HinhAnh` varchar(500) DEFAULT NULL,
  `MoTa` longtext DEFAULT NULL,
  `NgayTao` datetime DEFAULT NULL,
  `NgaySua` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_ID` int(11) NOT NULL,
  `User_Name` varchar(50) DEFAULT NULL,
  `Email` varchar(150) DEFAULT NULL,
  `Password` varchar(32) DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `Role` varchar(10) NOT NULL DEFAULT '''0'''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `User_Name`, `Email`, `Password`, `Phone`, `Role`) VALUES
(0, 'admin1', 'tntruong2100685@student.ctuet.edu.vn', '123456', '0368611471', '\'0\''),
(1, NULL, NULL, '030195', NULL, '1'),
(2, NULL, NULL, '123', NULL, '\'1\'');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`MaChiTietDonHang`),
  ADD KEY `MaDonHang` (`MaDonHang`),
  ADD KEY `MaSanPham` (`MaSanPham`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`MaDanhMuc`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MaDonHang`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `quanlyhinhanh`
--
ALTER TABLE `quanlyhinhanh`
  ADD PRIMARY KEY (`MaHinhAnh`),
  ADD KEY `MaSanPham` (`MaSanPham`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSanPham`),
  ADD KEY `fk_sanpham_danhmuc` (`MaDanhMuc`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`MaDonHang`) REFERENCES `donhang` (`MaDonHang`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`MaSanPham`) REFERENCES `sanpham` (`MaSanPham`);

--
-- Constraints for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `khachhang_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `user` (`User_ID`);

--
-- Constraints for table `quanlyhinhanh`
--
ALTER TABLE `quanlyhinhanh`
  ADD CONSTRAINT `quanlyhinhanh_ibfk_1` FOREIGN KEY (`MaSanPham`) REFERENCES `sanpham` (`MaSanPham`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_sanpham_danhmuc` FOREIGN KEY (`MaDanhMuc`) REFERENCES `danhmuc` (`MaDanhMuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
