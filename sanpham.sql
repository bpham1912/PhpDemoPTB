-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 01, 2018 lúc 02:18 PM
-- Phiên bản máy phục vụ: 5.7.21
-- Phiên bản PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mysqlsanpham`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `id` int(25) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `maloai` int(11) NOT NULL,
  `mota` varchar(50) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `gia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `ten`, `maloai`, `mota`, `hinhanh`, `gia`, `soluong`) VALUES
(1, 'San pham 1', 1, 'Mo ta san pham 1', '01.jpg', 250, 1000),
(2, 'San pham 2', 1, 'Mo ta san pham 2', '02.jpg', 500, 1000),
(3, 'San pham 3', 2, 'Mo ta san pham 3', '03.jpg', 100, 2000),
(4, 'San pham 4', 3, 'Mo ta san pham 4', '04.jpg', 350, 5000),
(5, 'San pham 5', 3, 'Mo ta san pham 5', '05.jpg', 400, 6000),
(6, 'San pham 6', 2, 'Mo ta san pham 6', '06.jpg', 100, 5000),
(7, 'San pham 7', 3, 'Mo ta san pham 7', '07.jpg', 800, 9000),
(8, 'San pham 8', 2, 'Mo ta san pham 8', '08.jpg', 360, 7000),
(9, 'San pham 9', 2, 'Mo ta san pham 9', '09.jpg', 400, 3500),
(10, 'San pham 10', 3, 'Mo ta san pham 10', '10.jpg', 200, 2000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
