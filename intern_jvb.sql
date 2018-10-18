-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 16, 2018 lúc 03:24 PM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `intern.jvb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `gender` int(1) NOT NULL,
  `faculty` int(2) NOT NULL,
  `birthday_year` char(4) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `student`
--

INSERT INTO `student` (`id`, `name`, `gender`, `faculty`, `birthday_year`) VALUES
(44, 'Roger', 1, 1, '1997'),
(51, 'Ngô Thị Diệu Linh', 0, 1, '1971'),
(58, 'Ngô Thị Diệu Linh', 0, 1, '1971'),
(59, 'Ngô Thị Diệu Linh', 1, 1, '1971'),
(60, 'Ngô Thị Diệu Linh', 1, 1, '1971'),
(61, 'Ngô Thị Diệu Linh', 1, 1, '1971'),
(62, 'Ngô Thị Diệu Linh', 1, 1, '1971'),
(63, 'Ngô Thị Diệu Linh', 1, 1, '1971'),
(64, 'Ngô Thị Diệu Linh', 1, 1, '1971'),
(65, 'Ngô Thị Diệu Linh', 1, 1, '1971'),
(66, 'Ngô Thị Diệu Linh', 1, 1, '1971'),
(67, 'Ngô Thị Diệu Linh', 1, 1, '1971'),
(68, 'Ngô Thị Diệu Linh', 1, 1, '1971'),
(69, 'Ngô Thị Diệu Linh', 1, 1, '1971'),
(70, 'Công nghệ', 0, 1, '1971');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
