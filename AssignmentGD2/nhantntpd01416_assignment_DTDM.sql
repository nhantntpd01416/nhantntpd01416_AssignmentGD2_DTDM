-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2016 at 04:50 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dattlqpd01388_assignment_inf205`
--

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` int(11) NOT NULL,
  `NgayXuatHD` date DEFAULT NULL,
  `DonGia` varchar(50) DEFAULT NULL,
  `KhachHang_MaKH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `NgayXuatHD`, `DonGia`, `KhachHang_MaKH`) VALUES
(1, '2016-08-10', '500000VND', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hoadonchitiet`
--

CREATE TABLE `hoadonchitiet` (
  `MaHDCT` int(11) NOT NULL,
  `TenSP` varchar(30) DEFAULT NULL,
  `SoLuong` varchar(20) DEFAULT NULL,
  `TongTien` varchar(20) DEFAULT NULL,
  `SanPham_MaSP` int(11) NOT NULL,
  `HoaDon_MaHD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoadonchitiet`
--

INSERT INTO `hoadonchitiet` (`MaHDCT`, `TenSP`, `SoLuong`, `TongTien`, `SanPham_MaSP`, `HoaDon_MaHD`) VALUES
(1, 'Camera', '2', '1000000', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` int(11) NOT NULL,
  `TenKH` varchar(35) CHARACTER SET latin1 DEFAULT NULL,
  `DiaChi` varchar(35) CHARACTER SET latin1 DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL,
  `SDT` varchar(11) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `TenKH`, `DiaChi`, `NgaySinh`, `SDT`) VALUES
(1, 'Tráº§n LÃª Quá»‘c Äáº¡t', 'Quáº£ng NgÃ£i', '1993-09-13', '01698869791');

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `MaLoai` int(11) NOT NULL,
  `TenLoai` varchar(30) DEFAULT NULL,
  `TenNCC` varchar(30) DEFAULT NULL,
  `DiaChi` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`MaLoai`, `TenLoai`, `TenNCC`, `DiaChi`) VALUES
(1, 'Thiáº¿t bá»‹ nghe nhÃ¬n', 'Asus', 'ÄÃ i Loan');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(11) NOT NULL,
  `TenSP` varchar(30) DEFAULT NULL,
  `SoLuongSP` varchar(20) DEFAULT NULL,
  `GiaSP` varchar(30) DEFAULT NULL,
  `LoaiSanPham_MaLoai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `SoLuongSP`, `GiaSP`, `LoaiSanPham_MaLoai`) VALUES
(1, 'Camera', '2', '1000000', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `HoaDon_KhachHang` (`KhachHang_MaKH`);

--
-- Indexes for table `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
  ADD PRIMARY KEY (`MaHDCT`),
  ADD KEY `HoaDonChiTiet_HoaDon` (`HoaDon_MaHD`),
  ADD KEY `HoaDonChiTiet_SanPham` (`SanPham_MaSP`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `SanPham_LoaiSanPham` (`LoaiSanPham_MaLoai`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `HoaDon_KhachHang` FOREIGN KEY (`KhachHang_MaKH`) REFERENCES `khachhang` (`MaKH`);

--
-- Constraints for table `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
  ADD CONSTRAINT `HoaDonChiTiet_HoaDon` FOREIGN KEY (`HoaDon_MaHD`) REFERENCES `hoadon` (`MaHD`),
  ADD CONSTRAINT `HoaDonChiTiet_SanPham` FOREIGN KEY (`SanPham_MaSP`) REFERENCES `sanpham` (`MaSP`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `SanPham_LoaiSanPham` FOREIGN KEY (`LoaiSanPham_MaLoai`) REFERENCES `loaisanpham` (`MaLoai`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
