-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 09, 2022 lúc 10:57 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `htql_dltv`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `duan`
--

CREATE TABLE `duan` (
  `maduan` varchar(50) NOT NULL,
  `tenduan` varchar(50) NOT NULL,
  `namthuchien` int(4) NOT NULL,
  `linhvuc` varchar(50) NOT NULL,
  `nhiemvu` varchar(50) NOT NULL,
  `coquanthuchien` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `duan`
--

INSERT INTO `duan` (`maduan`, `tenduan`, `namthuchien`, `linhvuc`, `nhiemvu`, `coquanthuchien`) VALUES
('01', 'Đánh giá mức độ khí hậu và Xây dựng kịch bản Biến ', 2019, 'Biến đổi khí hậu', 'Nghiên cứu biến đổi khí hậu', 'Trung tâm Ứng phó biến đổi khí hậu'),
('02', 'Xây dựng và triển khai kế hoạch hành động ứng phó ', 2012, 'Biến đổi khí hậu', 'Nghiên cứu biến đổi khí hậu', 'Trung tâm Ứng phó biến đổi khí hậu'),
('03', 'Cập nhật kế hoạch hành động ứng phó với BĐKH tỉnh ', 2018, 'Biến đổi khí hậu', 'Nghiên cứu biến đổi khí hậu', 'Trung tâm Ứng phó biến đổi khí hậu');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `duan`
--
ALTER TABLE `duan`
  ADD PRIMARY KEY (`maduan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
