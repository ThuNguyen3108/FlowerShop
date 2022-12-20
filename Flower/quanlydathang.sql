-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2022 at 05:39 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlydathang`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdathang`
--

CREATE TABLE `chitietdathang` (
  `SoDonDH` varchar(10) NOT NULL,
  `MSHH` varchar(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `GiaDatHang` int(11) NOT NULL,
  `GiamGia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitietdathang`
--

INSERT INTO `chitietdathang` (`SoDonDH`, `MSHH`, `SoLuong`, `GiaDatHang`, `GiamGia`) VALUES
('0ab2409y3x', '3', 2, 900000, 0),
('0ab2409y3x', '4', 1, 400000, 0),
('4xx5081275', '1', 1, 4000000, 0),
('4xx5081275', '26', 1, 280000, 0),
('c0b9z0z43c', '26', 1, 280000, 0),
('c3b1abxa1a', '2', 1, 400000, 10000),
('y0bz796yyz', '15', 1, 40000, 0),
('y0bz796yyz', '42', 1, 400000, 0),
('1054z62837', '26', 1, 280000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `dathang`
--

CREATE TABLE `dathang` (
  `SoDonDH` varchar(10) NOT NULL,
  `MSKH` varchar(11) NOT NULL,
  `MSNV` varchar(11) DEFAULT NULL,
  `NgayDH` date NOT NULL DEFAULT current_timestamp(),
  `NgayGH` date DEFAULT NULL,
  `TrangthaiDH` int(1) NOT NULL DEFAULT 0 COMMENT '0: chua duoc duyet 1: da duoc duyet 2: huy don hang '
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dathang`
--

INSERT INTO `dathang` (`SoDonDH`, `MSKH`, `MSNV`, `NgayDH`, `NgayGH`, `TrangthaiDH`) VALUES
('0ab2409y3x', '2', 'ADMIN', '2022-04-04', '2022-04-04', 1),
('1054z62837', '8', NULL, '2022-05-12', NULL, 0),
('4xx5081275', '5', '2', '2022-05-07', '2022-05-07', 1),
('c0b9z0z43c', '8', 'ADMIN', '2022-05-11', '2022-05-12', 1),
('c3b1abxa1a', '8', 'ADMIN', '2022-05-12', '2022-05-12', 1),
('x2cx425150', '8', 'ADMIN', '2022-05-11', '2022-05-12', 1),
('y0bz796yyz', '10', NULL, '2022-05-12', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hanghoa`
--

CREATE TABLE `hanghoa` (
  `MSHH` int(11) NOT NULL,
  `TenHH` varchar(100) NOT NULL,
  `MoTaHH` text NOT NULL,
  `Gia` int(20) NOT NULL,
  `MaLoaiHH` int(11) NOT NULL,
  `SoLuongHang` int(11) NOT NULL,
  `GhiChu` text NOT NULL,
  `NgayTao` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hanghoa`
--

INSERT INTO `hanghoa` (`MSHH`, `TenHH`, `MoTaHH`, `Gia`, `MaLoaiHH`, `SoLuongHang`, `GhiChu`, `NgayTao`) VALUES
(1, 'Hoa Cẩm Chướng SP01', 'Bó hoa chúc mừng hoa cẩm chướng hồng bao gồm: Cẩm chướng làm chủ đạo, màu của cẩm chướng có thể là màu hồng, màu đỏ, màu trắng, màu cam, màu tím hoặc màu xanh, dựa theo yêu cầu của quý khách, chúng tôi sẽ thiết kế màu hoa sao cho phù hợp nhất với yêu cầu của quý khách và với người được tặng update.                                                                                                                                                                                                                        ', 4000000, 1, 499, 'Sản phẩm gồm: 1 bó hoa Cẩm Chướng hồng + quà tặng ngẫu nhiên                                                                                                                                                                                                                        ', '2022-03-27 11:21:54'),
(2, 'Hoa Cẩm Chướng SP02', 'Bó hoa chúc mừng hoa cẩm chướng hồng bao gồm: Cẩm chướng làm chủ đạo, màu của cẩm chướng có thể là màu hồng, màu đỏ, màu trắng, màu cam, màu tím hoặc màu xanh, dựa theo yêu cầu của quý khách, chúng tôi sẽ thiết kế màu hoa sao cho phù hợp nhất với yêu cầu của quý khách và với người được tặng.', 400000, 1, 99, 'Sản phẩm gồm: 1 bó hoa Cẩm Chướng hồng + quà tặng ngẫu nhiên', '2022-03-27 11:21:54'),
(3, 'Hoa Cẩm Chướng SP03', 'Bó hoa chúc mừng hoa cẩm chướng hồng bao gồm: Cẩm chướng làm chủ đạo, màu của cẩm chướng có thể là màu hồng, màu đỏ, màu trắng, màu cam, màu tím hoặc màu xanh, dựa theo yêu cầu của quý khách, chúng tôi sẽ thiết kế màu hoa sao cho phù hợp nhất với yêu cầu của quý khách và với người được tặng.', 450000, 1, 86, 'Sản phẩm gồm: 1 bó hoa Cẩm Chướng + quà tặng ngẫu nhiên', '2022-03-27 11:24:22'),
(4, 'Hoa Cẩm Chướng SP04', 'Bó hoa chúc mừng hoa cẩm chướng hồng bao gồm: Cẩm chướng làm chủ đạo, màu của cẩm chướng có thể là màu hồng, màu đỏ, màu trắng, màu cam, màu tím hoặc màu xanh, dựa theo yêu cầu của quý khách, chúng tôi sẽ thiết kế màu hoa sao cho phù hợp nhất với yêu cầu của quý khách và với người được tặng.', 400000, 1, 98, 'Sản phẩm gồm: 1 bó hoa Cẩm Chướng + quà tặng ngẫu nhiên', '2022-03-27 11:24:22'),
(5, 'Hoa Cẩm Chướng SP05', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 450000, 1, 20, 'Sản phẩm gồm: 1 bó hoa Cẩm Chướng + quà tặng ngẫu nhiên', '2022-03-27 11:26:33'),
(6, 'Hoa Cẩm Chướng SP06', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 550000, 1, 100, 'Sản phẩm gồm: 1 bó hoa Cẩm Chướng + quà tặng ngẫu nhiên', '2022-03-27 11:26:33'),
(7, 'Hoa Cẩm Chướng SP07', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 480000, 1, 30, 'Sản phẩm gồm: 1 bó hoa Cẩm Chướng + quà tặng ngẫu nhiên', '2022-03-27 11:29:05'),
(8, 'Hoa Cẩm Chướng SP08', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 280000, 1, 45, 'Sản phẩm gồm: 1 bó hoa Cẩm Chướng + quà tặng ngẫu nhiên', '2022-03-27 11:29:05'),
(9, 'Hoa Cẩm Chướng SP09', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 450000, 1, 90, 'Sản phẩm gồm: 1 bó hoa Cẩm Chướng + quà tặng ngẫu nhiên', '2022-03-27 11:30:25'),
(10, 'Hoa Cẩm Chướng SP10', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 499000, 1, 60, 'Sản phẩm gồm: 1 bó hoa Cẩm Chướng + quà tặng ngẫu nhiên', '2022-03-27 11:30:25'),
(11, 'Hoa Cẩm Chướng SP11', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 450000, 1, 100, 'Sản phẩm gồm: 1 bó hoa Cẩm Chướng + quà tặng ngẫu nhiên', '2022-03-27 11:31:36'),
(12, 'Hoa Cẩm Chướng SP12', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 499000, 1, 60, 'Sản phẩm gồm: 1 bó hoa Cẩm Chướng + quà tặng ngẫu nhiên', '2022-03-27 11:31:36'),
(13, 'Hoa Đồng Tiền SP01', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 40000, 2, 0, 'Sản phẩm gồm: 1 bó hoa Đồng Tiền + quà tặng ngẫu nhiên\r\n\r\n', '2022-03-27 11:43:23'),
(14, 'Hoa Đồng Tiền SP02', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 550000, 2, 60, 'Sản phẩm gồm: 1 bó hoa Đồng Tiền + quà tặng ngẫu nhiên', '2022-03-27 11:43:23'),
(15, 'Hoa Đồng Tiền SP03', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 40000, 2, 90, 'Sản phẩm gồm: 1 bó hoa Đồng Tiền + quà tặng ngẫu nhiên', '2022-03-27 11:46:01'),
(16, 'Hoa Đồng Tiền SP04', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 405000, 2, 46, 'Sản phẩm gồm: 1 bó hoa Đồng Tiền + quà tặng ngẫu nhiên', '2022-03-27 11:46:40'),
(17, 'Hoa Đồng Tiền SP05', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 450000, 2, 30, 'Sản phẩm gồm: 1 bó hoa Đồng Tiền + quà tặng ngẫu nhiên', '2022-03-27 11:47:32'),
(18, 'Hoa Đồng Tiền SP06', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 400000, 2, 60, 'Sản phẩm gồm: 1 bó hoa Đồng Tiền + quà tặng ngẫu nhiên', '2022-03-27 11:47:32'),
(19, 'Hoa Đồng Tiền SP07', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 500000, 2, 30, 'Sản phẩm gồm: 1 bó hoa Đồng Tiền + quà tặng ngẫu nhiên', '2022-03-27 11:49:10'),
(20, 'Hoa Đồng Tiền SP08', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 499000, 2, 45, 'Sản phẩm gồm: 1 bó hoa Đồng Tiền + quà tặng ngẫu nhiên', '2022-03-27 11:49:10'),
(21, 'Hoa Đồng Tiền SP09', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 450000, 2, 100, 'Sản phẩm gồm: 1 bó hoa Đồng Tiền + quà tặng ngẫu nhiên', '2022-03-27 11:50:32'),
(22, 'Hoa Đồng Tiền SP10', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 499000, 2, 60, 'Sản phẩm gồm: 1 bó hoa Đồng Tiền + quà tặng ngẫu nhiên', '2022-03-27 11:50:32'),
(23, 'Hoa Đồng Tiền SP11', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 500000, 2, 1, 'Sản phẩm gồm: 1 bó hoa Đồng Tiền + quà tặng ngẫu nhiên', '2022-03-27 11:51:31'),
(24, 'Hoa Đồng Tiền SP12', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 280000, 2, 60, 'Sản phẩm gồm: 1 bó hoa Đồng Tiền + quà tặng ngẫu nhiên', '2022-03-27 11:51:31'),
(25, 'Hoa Hướng Dương SP01', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 50000, 3, 0, 'Sản phẩm gồm: 1 bó hoa Hướng Dương + quà tặng ngẫu nhiên', '2022-03-27 11:52:45'),
(26, 'Hoa Hướng Dương SP02', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 280000, 3, 58, 'Sản phẩm gồm: 1 bó hoa Hướng Dương + quà tặng ngẫu nhiên', '2022-03-27 11:52:45'),
(27, 'Hoa Hướng Dương SP03', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 40000, 3, 90, 'Sản phẩm gồm: 1 bó hoa Hướng Dương + quà tặng ngẫu nhiên', '2022-03-27 11:55:16'),
(28, 'Hoa Hướng Dương SP04', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 400000, 3, 60, 'Sản phẩm gồm: 1 bó hoa Hướng Dương + quà tặng ngẫu nhiên', '2022-03-27 11:55:16'),
(29, 'Hoa Hướng Dương SP05', 'a tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 40000, 3, 0, 'Sản phẩm gồm: 1 bó hoa Hướng Dương + quà tặng ngẫu nhiên', '2022-03-27 11:56:23'),
(30, 'Hoa Hướng Dương SP06', 'a tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 400000, 3, 60, 'Sản phẩm gồm: 1 bó hoa Hướng Dương + quà tặng ngẫu nhiên', '2022-03-27 11:56:23'),
(31, 'Hoa Hướng Dương SP07', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 430000, 3, 1, 'Sản phẩm gồm: 1 bó hoa Hướng Dương + quà tặng ngẫu nhiên', '2022-03-27 11:57:39'),
(32, 'Hoa Hướng Dương SP08', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 400000, 3, 45, 'Sản phẩm gồm: 1 bó hoa Hướng Dương + quà tặng ngẫu nhiên', '2022-03-27 11:57:39'),
(33, 'Hoa Hướng Dương SP09', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 500000, 3, 100, 'Sản phẩm gồm: 1 bó hoa Hướng Dương + quà tặng ngẫu nhiên', '2022-03-27 11:58:33'),
(34, 'Hoa Hướng Dương SP09', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 400000, 3, 45, 'Sản phẩm gồm: 1 bó hoa Hướng Dương + quà tặng ngẫu nhiên', '2022-03-27 11:58:33'),
(35, 'Hoa Hướng Dương SP11', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 450000, 3, 30, 'Sản phẩm gồm: 1 bó hoa Hướng Dương + quà tặng ngẫu nhiên', '2022-03-27 11:59:40'),
(36, 'Hoa Hướng Dương SP12', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 400000, 3, 60, 'Sản phẩm gồm: 1 bó hoa Hướng Dương + quà tặng ngẫu nhiên', '2022-03-27 11:59:40'),
(37, 'Hoa Hồng SP01', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 500000, 4, 90, 'Sản phẩm gồm: 1 bó Hoa Hồng + quà tặng ngẫu nhiên', '2022-03-27 12:00:36'),
(38, 'Hoa Hồng SP01', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 550000, 4, 58, 'Sản phẩm gồm: 1 bó Hoa Hồng + quà tặng ngẫu nhiên', '2022-03-27 12:00:36'),
(39, 'Hoa Hồng SP03', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 450000, 4, 30, 'Sản phẩm gồm: 1 bó Hoa Hồng + quà tặng ngẫu nhiên', '2022-03-27 12:02:10'),
(40, 'Hoa Hồng SP04', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 499000, 4, 58, 'Sản phẩm gồm: 1 bó Hoa Hồng + quà tặng ngẫu nhiên', '2022-03-27 12:02:10'),
(41, 'Hoa Hồng SP05', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 500000, 4, 100, 'Sản phẩm gồm: 1 bó Hoa Hồng + quà tặng ngẫu nhiên', '2022-03-27 12:21:17'),
(42, 'Hoa Hồng SP05', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 400000, 4, 60, 'Sản phẩm gồm: 1 bó Hoa Hồng + quà tặng ngẫu nhiên', '2022-03-27 12:21:17'),
(43, 'Hoa Hồng SP07', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 500000, 4, 1, 'Sản phẩm gồm: 1 bó Hoa Hồng + quà tặng ngẫu nhiên', '2022-03-27 12:22:21'),
(44, 'Hoa Hồng SP08', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 499000, 4, 45, 'Sản phẩm gồm: 1 bó Hoa Hồng + quà tặng ngẫu nhiên', '2022-03-27 12:22:21'),
(45, 'Hoa Hồng SP09', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 500000, 4, 1, 'Sản phẩm gồm: 1 bó Hoa Hồng + quà tặng ngẫu nhiên', '2022-03-27 12:23:14'),
(46, 'Hoa Hồng SP10', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 400000, 4, 60, 'Sản phẩm gồm: 1 bó Hoa Hồng + quà tặng ngẫu nhiên', '2022-03-27 12:23:14'),
(47, 'Hoa Hồng SP11', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 450000, 4, 20, 'Sản phẩm gồm: 1 bó Hoa Hồng + quà tặng ngẫu nhiên', '2022-03-27 12:25:11'),
(48, 'Hoa Hồng SP12', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 400000, 4, 58, 'Sản phẩm gồm: 1 bó Hoa Hồng + quà tặng ngẫu nhiên', '2022-03-27 12:25:11'),
(49, 'Hoa Thủy Tiên SP01', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 52000, 5, 30, 'Sản phẩm gồm: 1 bó Thủy Tiên + quà tặng ngẫu nhiên', '2022-03-27 12:26:41'),
(50, 'Hoa Thủy Tiên SP02', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 400000, 5, 60, 'Sản phẩm gồm: 1 bó Thủy Tiên + quà tặng ngẫu nhiên', '2022-03-27 12:26:41'),
(51, 'Hoa Thủy Tiên SP03', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 500000, 5, 30, 'Sản phẩm gồm: 1 bó Thủy Tiên + quà tặng ngẫu nhiên', '2022-03-27 12:28:02'),
(52, 'Hoa Thủy Tiên SP04', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 350000, 5, 100, 'Sản phẩm gồm: 1 bó Thủy Tiên + quà tặng ngẫu nhiên', '2022-03-27 12:28:02'),
(53, 'Hoa Thủy Tiên SP05', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 450000, 5, 30, 'Sản phẩm gồm: 1 bó Thủy Tiên + quà tặng ngẫu nhiên', '2022-03-27 12:29:01'),
(54, 'Hoa Thủy Tiên SP06', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 350000, 5, 58, 'Sản phẩm gồm: 1 bó Thủy Tiên + quà tặng ngẫu nhiên', '2022-03-27 12:29:01'),
(55, 'Hoa Thủy Tiên SP07', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 50000, 5, 0, 'Sản phẩm gồm: 1 bó Thủy Tiên + quà tặng ngẫu nhiên', '2022-03-27 12:30:32'),
(56, 'Hoa Thủy Tiên SP08', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 350000, 5, 100, 'Sản phẩm gồm: 1 bó Thủy Tiên + quà tặng ngẫu nhiên', '2022-03-27 12:30:32'),
(57, 'Hoa Thủy Tiên SP09', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 500000, 5, 30, 'Sản phẩm gồm: 1 bó Thủy Tiên + quà tặng ngẫu nhiên', '2022-03-27 12:31:30'),
(58, 'Hoa Thủy Tiên SP10', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 400000, 5, 60, 'Sản phẩm gồm: 1 bó Thủy Tiên + quà tặng ngẫu nhiên', '2022-03-27 12:31:30'),
(59, 'Hoa Thủy Tiên SP11', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 500000, 5, 1, 'Sản phẩm gồm: 1 bó Thủy Tiên + quà tặng ngẫu nhiên', '2022-03-27 12:32:16'),
(60, 'Hoa Thủy Tiên SP12', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 400000, 5, 60, 'Sản phẩm gồm: 1 bó Thủy Tiên + quà tặng ngẫu nhiên', '2022-03-27 12:32:16'),
(61, 'Xương Rồng SP01', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 900000, 6, 0, 'Sản phẩm gồm: 1 chậu xương rồng + quà tặng ngẫu nhiên', '2022-03-27 12:33:24'),
(62, 'Xương Rồng SP02', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 400000, 6, 60, 'Sản phẩm gồm: 1 chậu xương rồng + quà tặng ngẫu nhiên', '2022-03-27 12:33:24'),
(63, 'Xương Rồng SP03', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 500000, 6, 100, 'Sản phẩm gồm: 1 chậu xương rồng + quà tặng ngẫu nhiên', '2022-03-27 12:38:13'),
(64, 'Xương Rồng SP04', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 400000, 6, 60, 'Sản phẩm gồm: 1 chậu xương rồng + quà tặng ngẫu nhiên', '2022-03-27 12:38:13'),
(65, 'Xương Rồng SP05', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 450000, 6, 90, 'Sản phẩm gồm: 1 chậu xương rồng + quà tặng ngẫu nhiên', '2022-03-27 12:40:05'),
(66, 'Xương Rồng SP06', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 350000, 6, 60, 'Sản phẩm gồm: 1 chậu xương rồng + quà tặng ngẫu nhiên', '2022-03-27 12:40:05'),
(67, 'Xương Rồng SP07', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 510000, 6, 20, 'Sản phẩm gồm: 1 chậu xương rồng + quà tặng ngẫu nhiên\r\n', '2022-03-27 12:41:02'),
(68, 'Xương Rồng SP08', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 400000, 6, 100, 'Sản phẩm gồm: 1 chậu xương rồng + quà tặng ngẫu nhiên\r\n', '2022-03-27 12:41:02'),
(69, 'Xương Rồng SP09', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 450000, 6, 90, '', '2022-03-27 12:45:59'),
(70, 'Xương Rồng SP10', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 400000, 6, 100, 'Sản phẩm gồm: 1 chậu xương rồng + quà tặng ngẫu nhiên', '2022-03-27 12:45:59'),
(71, 'Xương Rồng SP11', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\r\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\r\nMiễn phí thiệp, băng rôn trị giá 30,000đ\r\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\r\nNhận nhiều ưu đãi hàng tháng cho thành viên', 500000, 6, 100, 'Sản phẩm gồm: 1 chậu xương rồng + quà tặng ngẫu nhiên', '2022-03-27 12:46:58'),
(72, 'Xương Rồng SP12', 'Giao hoa hỏa tốc trong vòng 2 – 3 giờ\nMiễn phí vận chuyển cho hoa giỏ, hoa bó từ 300,000đ, hoa kệ từ 900,000đ trong vòng bán kính 5km\nMiễn phí thiệp, băng rôn trị giá 30,000đ\nNhận thiết kế thiệp miễn phí Gửi hình trước khi giao hoa và báo đơn hàng thành công\nNhận nhiều ưu đãi hàng tháng cho thành viên', 499000, 6, 60, 'Sản phẩm gồm: 1 chậu xương rồng + quà tặng ngẫu nhiên', '2022-03-27 12:46:58');

-- --------------------------------------------------------

--
-- Table structure for table `hinhhh`
--

CREATE TABLE `hinhhh` (
  `MaHinh` varchar(11) NOT NULL,
  `Anh` text CHARACTER SET utf8mb4 NOT NULL,
  `TenHinh` text CHARACTER SET utf8mb4 NOT NULL,
  `MSHH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hinhhh`
--

INSERT INTO `hinhhh` (`MaHinh`, `Anh`, `TenHinh`, `MSHH`) VALUES
('10', 'HoaCamChuong/hcc5_2.png', 'Hoa Cẩm Chướng SP05-10', 5),
('100', 'HoaThuyTien/htt2_2.png', 'Hoa Thủy Tiên SP02-100', 50),
('101', 'HoaThuyTien/htt3_1.png', 'Hoa Thủy Tiên SP03-101', 51),
('102', 'HoaThuyTien/htt3_2.png', 'Hoa Thủy Tiên SP03-102', 51),
('103', 'HoaThuyTien/htt4_1.png', 'Hoa Thủy Tiên SP04-103', 52),
('104', 'HoaThuyTien/htt4_2.png', 'Hoa Thủy Tiên SP04-104', 52),
('105', 'HoaThuyTien/htt5_1.png', 'Hoa Thủy Tiên SP05-105', 53),
('106', 'HoaThuyTien/htt5_2.png', 'Hoa Thủy Tiên SP05-106', 53),
('107', 'HoaThuyTien/htt6_1.png', 'Hoa Thủy Tiên SP06-107', 54),
('108', 'HoaThuyTien/htt6_2.png', 'Hoa Thủy Tiên SP06-108', 54),
('109', 'HoaThuyTien/htt7_1.png', 'Hoa Thủy Tiên SP07-109', 55),
('11', 'HoaCamChuong/hcc6_1.png', 'Hoa Cẩm Chướng SP06-11', 6),
('110', 'HoaThuyTien/htt7_2.png', 'Hoa Thủy Tiên SP07-110', 55),
('111', 'HoaThuyTien/htt8_1.png', 'Hoa Thủy Tiên SP08-111', 56),
('112', 'HoaThuyTien/htt8_2.png', 'Hoa Thủy Tiên SP08-112', 56),
('113', 'HoaThuyTien/htt9_1.png', 'Hoa Thủy Tiên SP09-113', 57),
('114', 'HoaThuyTien/htt9_2.png', 'Hoa Thủy Tiên SP09-114', 57),
('115', 'HoaThuyTien/htt10_1.png', 'Hoa Thủy Tiên SP10-115', 58),
('116', 'HoaThuyTien/htt10_2.png', 'Hoa Thủy Tiên SP10-116', 58),
('117', 'HoaThuyTien/htt11_1.png', 'Hoa Thủy Tiên SP11-117', 59),
('118', 'HoaThuyTien/htt11_2.png', 'Hoa Thủy Tiên SP11-118', 59),
('119', 'HoaThuyTien/htt12_1.png', 'Hoa Thủy Tiên SP12-119', 60),
('12', 'HoaCamChuong/hcc6_2.png', 'Hoa Cẩm Chướng SP06-12', 6),
('120', 'HoaThuyTien/htt12_2.png', 'Hoa Thủy Tiên SP12-120', 60),
('121', 'XuongRong/xr1_1.png', 'Xương Rồng SP01-121', 61),
('122', 'XuongRong/xr1_2.png', 'Xương Rồng SP01-122', 61),
('123', 'XuongRong/xr2_1.png', 'Xương Rồng SP02-123', 62),
('124', 'XuongRong/xr2_2.png', 'Xương Rồng SP02-124', 62),
('125', 'XuongRong/xr3_1.png', 'Xương Rồng SP03-125', 63),
('126', 'XuongRong/xr3_2.png', 'Xương Rồng SP03-126', 63),
('127', 'XuongRong/xr4_1.png', 'Xương Rồng SP04-127', 64),
('128', 'XuongRong/xr4_2.png', 'Xương Rồng SP04-128', 64),
('129', 'XuongRong/xr5_1.png', 'Xương Rồng SP05-129', 65),
('13', 'HoaCamChuong/hcc7_1.png', 'Hoa Cẩm Chướng SP07-13', 7),
('130', 'XuongRong/xr5_2.png', 'Xương Rồng SP05-130', 65),
('131', 'XuongRong/xr6_1.png', 'Xương Rồng SP06-131', 66),
('132', 'XuongRong/xr6_2.png', 'Xương Rồng SP06-132', 66),
('133', 'XuongRong/xr7_1.png', 'Xương Rồng SP07-133', 67),
('134', 'XuongRong/xr7_2.png', 'Xương Rồng SP07-134', 67),
('135', 'XuongRong/xr8_1.png', 'Xương Rồng SP08-135', 68),
('136', 'XuongRong/xr8_2.png', 'Xương Rồng SP08-136', 68),
('137', 'XuongRong/xr9_1.png', 'Xương Rồng SP09-137', 69),
('138', 'XuongRong/xr9_2.png', 'Xương Rồng SP09-138', 69),
('139', 'XuongRong/xr10_1.png', 'Xương Rồng SP10-139', 70),
('14', 'HoaCamChuong/hcc7_2.png', 'Hoa Cẩm Chướng SP07-14', 7),
('140', 'XuongRong/xr10_2.png', 'Xương Rồng SP10-140', 70),
('141', 'XuongRong/xr11_1.png', 'Xương Rồng SP11-141', 71),
('142', 'XuongRong/xr11_2.png', 'Xương Rồng SP11-142', 71),
('143', 'XuongRong/xr12_1.png', 'Xương Rồng SP12-143', 72),
('144', 'XuongRong/xr12_2.png', 'Xương Rồng SP12-144', 72),
('15', 'HoaCamChuong/hcc8_1.png', 'Hoa Cẩm Chướng SP08-15', 8),
('16', 'HoaCamChuong/hcc8_2.png', 'Hoa Cẩm Chướng SP08-16', 8),
('17', 'HoaCamChuong/hcc9_1.png', 'Hoa Cẩm Chướng SP09-17', 9),
('18', 'HoaCamChuong/hcc9_2.png', 'Hoa Cẩm Chướng SP09-18', 9),
('19', 'HoaCamChuong/hcc10_1.png', 'Hoa Cẩm Chướng SP10-19', 10),
('197', 'HoaCamChuong/hhd1_2.png', 'hhd1_2.png', 94),
('2', 'HoaCamChuong/hhd1_1.png', 'hhd1_1.png', 97),
('20', 'HoaCamChuong/hcc10_2.png', 'Hoa Cẩm Chướng SP10-20', 10),
('21', 'HoaCamChuong/hcc11_1.png', 'Hoa Cẩm Chướng SP11-21', 11),
('22', 'HoaCamChuong/hcc11_2.png', 'Hoa Cẩm Chướng SP11-22', 11),
('23', 'HoaCamChuong/hcc12_1.png', 'Hoa Cẩm Chướng SP12-23', 12),
('24', 'HoaCamChuong/hcc12_2.png', 'Hoa Cẩm Chướng SP12-24', 12),
('25', 'HoaDongTien/hdt1_1.png', 'Hoa Đồng Tiên SP01-25', 13),
('26', 'HoaDongTien/hdt1_2.png', 'Hoa Đồng Tiền SP01-26', 13),
('27', 'HoaDongTien/hdt2_1.png', 'Hoa Đồng Tiền SP02-27', 14),
('27361', 'HoaCamChuong/hhd3_1.png', 'hhd3_1.png', 98),
('27529', 'HoaHuongDuong/hhd1_1.png', 'hhd1_1.png', 100),
('28', 'HoaDongTien/hdt2_2.png', 'Hoa Đồng Tiền SP02-28', 14),
('29', 'HoaDongTien/hdt3_1.png', 'Hoa Đồng Tiền SP03-29', 15),
('30', 'HoaDongTien/hdt3_2.png', 'Hoa Đồng Tiền SP03-30', 15),
('31', 'HoaDongTien/hdt4_1.png', 'Hoa Đồng Tiền SP04-31', 16),
('32', 'HoaDongTien/hdt4_2.png', 'Hoa Đồng Tiền SP04-32', 16),
('33', 'HoaDongTien/hdt5_1.png', 'Hoa Đồng Tiền SP05-33', 17),
('34', 'HoaDongTien/hdt5_2.png', 'Hoa Đồng Tiền SP05-34', 17),
('35', 'HoaDongTien/hdt6_1.png', 'Hoa Đồng Tiền SP06-35', 18),
('36', 'HoaDongTien/hdt6_2.png', 'Hoa Đồng Tiền SP06-36', 18),
('37', 'HoaDongTien/hdt7_1.png', 'Hoa Đồng Tiền SP07-37', 19),
('38', 'HoaDongTien/hdt7_2.png', 'Hoa Đồng Tiền SP07-38', 19),
('39', 'HoaDongTien/hdt8_1.png', 'Hoa Đồng Tiền SP08-39', 20),
('4', 'HoaCamChuong/hhd2_1.png', 'hhd2_1.png', 2),
('40', 'HoaDongTien/hdt8_2.png', 'Hoa Đồng Tiền SP08-40', 20),
('41', 'HoaDongTien/hdt9_1.png', 'Hoa Đồng Tiền SP09-41', 21),
('42', 'HoaDongTien/hdt9_2.png', 'Hoa Đồng Tiền SP09-42', 21),
('43', 'HoaDongTien/hdt10_1.png', 'Hoa Đồng Tiền SP10-43', 22),
('4346zy9760x', 'HoaCamChuong/hcc8_2.png', 'hcc8_2.png', 1),
('44', 'HoaDongTien/hdt10_2.png', 'Hoa Đồng Tiền SP10-44', 22),
('45', 'HoaDongTien/hdt11_1.png', 'Hoa Đồng Tiền SP11-45', 23),
('46', 'HoaDongTien/hdt11_2.png', 'Hoa Đồng Tiền SP11-46', 23),
('47', 'HoaDongTien/hdt12_1.png', 'Hoa Đồng Tiền SP12-47', 24),
('48', 'HoaDongTien/hdt12_2.png', 'Hoa Đồng Tiền SP12-48', 24),
('4874903', 'HoaCamChuong/hhd2_1.png', 'hhd2_1.png', 97),
('49', 'HoaHuongDuong/hhd1_1.png', 'Hoa Hướng Dương SP01-49', 25),
('5', 'HoaCamChuong/hcc3_1.png', 'Hoa Cẩm Chướng SP03-5', 3),
('50', 'HoaHuongDuong/hhd1_2.png', 'Hoa Hướng Dương SP01-50', 25),
('51', 'HoaHuongDuong/hhd2_1.png', 'Hoa Hướng Dương SP02-51', 26),
('52', 'HoaHuongDuong/hhd2_2.png', 'Hoa Hướng Dương SP02-52', 26),
('53', 'HoaHuongDuong/hhd3_1.png', 'Hoa Hướng Dương SP03-53', 27),
('54', 'HoaHuongDuong/hhd3_2.png', 'Hoa Hướng Dương SP03-54', 27),
('55', 'HoaHuongDuong/hhd4_1.png', 'Hoa Hướng Dương SP04-55', 28),
('56', 'HoaHuongDuong/hhd4_2.png', 'Hoa Hướng Dương SP04-56', 28),
('57', 'HoaHuongDuong/hhd5_1.png', 'Hoa Hướng Dương SP05-57', 29),
('58', 'HoaHuongDuong/hhd5_2.png', 'Hoa Hướng Dương SP05-58', 29),
('5876', 'HoaCamChuong/hhd4_1.png', 'hhd4_1.png', 96),
('59', 'HoaHuongDuong/hhd6_1.png', 'Hoa Hướng Dương SP06-59', 30),
('6', 'HoaCamChuong/hcc3_2.png', 'Hoa Cẩm Chướng SP03-6', 3),
('60', 'HoaHuongDuong/hhd6_2.png', 'Hoa Hướng Dương SP06-60', 30),
('61', 'HoaHuongDuong/hhd7_1.png', 'Hoa Hướng Dương SP07-61', 31),
('62', 'HoaHuongDuong/hhd7_2.png', 'Hoa Hướng Dương SP07-62', 31),
('63', 'HoaHuongDuong/hhd8_1.png', 'Hoa Hướng Dương SP08-63', 32),
('64', 'HoaHuongDuong/hhd8_2.png', 'Hoa Hướng Dương SP08-64', 32),
('65', 'HoaHuongDuong/hhd9_1.png', 'Hoa Hướng Dương SP09-65', 33),
('66', 'HoaHuongDuong/hhd9_2.png', 'Hoa Hướng Dương SP09-66', 33),
('67', 'HoaHuongDuong/hhd10_1.png', 'Hoa Hướng Dương SP10-67', 34),
('68', 'HoaHuongDuong/hhd10_2.png', 'Hoa Hướng Dương SP10-68', 34),
('69', 'HoaHuongDuong/hhd11_1.png', 'Hoa Hướng Dương SP11-69', 35),
('7', 'HoaCamChuong/hcc4_1.png', 'Hoa Cẩm Chướng SP04-7', 4),
('70', 'HoaHuongDuong/hhd11_2.png', 'Hoa Hướng Dương SP11-70', 35),
('71', 'HoaHuongDuong/hhd12_1.png', 'Hoa Hướng Dương SP12-71', 36),
('72', 'HoaHuongDuong/hhd12_2.png', 'Hoa Hướng Dương SP12-72', 36),
('73', 'HoaHong/hh1_1.png', 'Hoa Hồng SP01-73', 37),
('74', 'HoaHong/hh1_2.png', 'Hoa Hồng SP01-74', 37),
('75', 'HoaHong/hh2_1.png', 'Hoa Hồng SP02-75', 38),
('76', 'HoaHong/hh2_2.png', 'Hoa Hồng SP02-76', 38),
('77', 'HoaHong/hh3_1.png', 'Hoa Hồng SP03-77', 39),
('78', 'HoaHong/hh3_2.png', 'Hoa Hồng SP03-78', 39),
('784', 'HoaCamChuong/hhd1_1.png', 'hhd1_1.png', 2),
('79', 'HoaHong/hh4_1.png', 'Hoa Hồng SP04-79', 40),
('8', 'HoaCamChuong/hcc4_2.png', 'Hoa Cẩm Chướng SP04-8', 4),
('80', 'HoaHong/hh4_2.png', 'Hoa Hồng SP04-80', 40),
('81', 'HoaHong/hh5_1.png', 'Hoa Hồng SP05-81', 41),
('82', 'HoaHong/hh5_2.png', 'Hoa Hồng SP05-82', 41),
('83', 'HoaHong/hh6_1.png', 'Hoa Hồng SP06-83', 42),
('84', 'HoaHong/hh6_2.png', 'Hoa Hồng SP06-84', 42),
('85', 'HoaHong/hh7_1.png', 'Hoa Hồng SP07-85', 43),
('86', 'HoaHong/hh7_2.png', 'Hoa Hồng SP07-86', 43),
('87', 'HoaHong/hh8_1.png', 'Hoa Hồng SP08-87', 44),
('88', 'HoaHong/hh8_2.png', 'Hoa Hồng SP08-88', 44),
('89', 'HoaHong/hh9_1.png', 'Hoa Hồng SP09-89', 45),
('9', 'HoaCamChuong/hcc5_1.png', 'Hoa Cẩm Chướng SP05-9', 5),
('90', 'HoaHong/hh9_2.png', 'Hoa Hồng SP09-90', 45),
('91', 'HoaHong/hh10_1.png', 'Hoa Hồng SP10-91', 46),
('92', 'HoaHong/hh10_2.png', 'Hoa Hồng SP10-92', 46),
('93', 'HoaHong/hh11_1.png', 'Hoa Hồng SP11-93', 47),
('94', 'HoaHong/hh11_2.png', 'Hoa Hồng SP11-94', 47),
('95', 'HoaHong/hh12_1.png', 'Hoa Hồng SP12-95', 48),
('96', 'HoaHong/hh12_2.png', 'Hoa Hồng SP12-96', 48),
('97', 'HoaThuyTien/htt1_1.png', 'Hoa Thủy Tiên SP01-97', 49),
('98', 'HoaThuyTien/htt1_2.png', 'Hoa Thủy Tiên SP01-98', 49),
('99', 'HoaThuyTien/htt2_1.png', 'Hoa Thủy Tiên SP02-99', 50);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MSKH` int(11) NOT NULL,
  `HoTenKH` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(50) NOT NULL,
  `DiaChi` text DEFAULT NULL,
  `SoDienThoai` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MSKH`, `HoTenKH`, `Email`, `Password`, `DiaChi`, `SoDienThoai`) VALUES
(8, 'Nguyễn Thị Anh Thư', 'thu123@gmail.com', '4297f44b13955235245b2497399d7a93', 'Cần Thơ', '012345678'),
(9, 'anhthu', 'thu456@gmail.com', '4297f44b13955235245b2497399d7a93', 'An Khánh', '98585749404'),
(10, 'Nguyễn Ngọc Anh Thư', 'thu789@gmail.com', '4297f44b13955235245b2497399d7a93', 'An Hòa ', '0378468457');

-- --------------------------------------------------------

--
-- Table structure for table `loaihanghoa`
--

CREATE TABLE `loaihanghoa` (
  `MaLoaiHH` int(11) NOT NULL,
  `TenLoaiHH` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Anh` text CHARACTER SET utf8mb4 NOT NULL,
  `duongdan` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaihanghoa`
--

INSERT INTO `loaihanghoa` (`MaLoaiHH`, `TenLoaiHH`, `Anh`, `duongdan`) VALUES
(1, 'Hoa Cẩm Chướng', 'img/home/hoacamchuong.png', 'hoa_CC'),
(2, 'Hoa Đồng Tiền', 'img/home/hoadongtien.png', 'Hoa_DT'),
(3, 'Hoa Hướng Dương', 'img/home/hoahuongduong.png', 'hoa_HD'),
(4, 'Hoa Hồng', 'img/home/hoahong.png', 'Hoa_Hong'),
(5, 'Hoa Thủy Tiên', 'img/home/hoathuytien.png', 'hoa_TT'),
(6, 'Hoa Xương Rồng', 'img/home/xuongrong.png', 'hoa_XR');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MSNV` varchar(6) NOT NULL,
  `HoTenNV` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ChucVu` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `SoDienThoai` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MSNV`, `HoTenNV`, `Email`, `Password`, `ChucVu`, `DiaChi`, `SoDienThoai`) VALUES
('2', 'Anh Thư', 'thu@gmail.com', '123123', 'nhanvien', 'Đà Nẵng', '0378666666'),
('admin', 'Nguyễn Thị Anh Thư', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Quản Trị Viên', 'Cần Thơ', '09457584743');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dathang`
--
ALTER TABLE `dathang`
  ADD PRIMARY KEY (`SoDonDH`);

--
-- Indexes for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`MSHH`);

--
-- Indexes for table `hinhhh`
--
ALTER TABLE `hinhhh`
  ADD PRIMARY KEY (`MaHinh`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MSKH`);

--
-- Indexes for table `loaihanghoa`
--
ALTER TABLE `loaihanghoa`
  ADD PRIMARY KEY (`MaLoaiHH`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MSNV`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `MSHH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MSKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `loaihanghoa`
--
ALTER TABLE `loaihanghoa`
  MODIFY `MaLoaiHH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
