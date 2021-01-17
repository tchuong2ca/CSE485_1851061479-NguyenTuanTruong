-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 17, 2021 lúc 12:38 PM
-- Phiên bản máy phục vụ: 10.4.16-MariaDB
-- Phiên bản PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cv_project-version2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `achievements`
--

CREATE TABLE `achievements` (
  `a_id` varchar(100) NOT NULL,
  `working` int(255) NOT NULL,
  `done` int(255) NOT NULL,
  `awards` int(255) NOT NULL,
  `clients` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `achievements`
--

INSERT INTO `achievements` (`a_id`, `working`, `done`, `awards`, `clients`) VALUES
('bmd1eWVudHVhbnRydW9uZzJrQGdtYWlsLmNvbQ==', 2, 4, 10, 100);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(12, 'Nguyễn Tuấn Trường', 'nguyentuantruong2k@gmail.com', 'Alo', 'co ai thay gi khong');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `content`
--

CREATE TABLE `content` (
  `a_id` varchar(100) NOT NULL,
  `type` mediumtext NOT NULL,
  `content_one` mediumtext NOT NULL,
  `content_two` mediumtext NOT NULL,
  `content_three` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `content`
--

INSERT INTO `content` (`a_id`, `type`, `content_one`, `content_two`, `content_three`) VALUES
('bmd1eWVudHVhbnRydW9uZzJrQGdtYWlsLmNvbQ==', 'Work Experience', 'd2ViIGRlc2lnbg==', 'bWFzdGVy', 'YmxhaA=='),
('bmd1eWVudHVhbnRydW9uZzJrQGdtYWlsLmNvbQ==', 'Education', 'THkgVHUgVHJvbmcgU2Vjb25kYXJ5IFNjaG9vbA==', 'RGlzdGluY3Rpb24=', 'Li4uLg=='),
('bmd1eWVudHVhbnRydW9uZzJrQGdtYWlsLmNvbQ==', 'Work Experience', 'Q0VPIGluIHR0cnVvbmcgbGltaXR0ZWQgY29tcGFueQ==', 'RnJvbSB0aGVuIHRpbGwgbm93', 'Li4u');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `details`
--

CREATE TABLE `details` (
  `a_id` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `exp` int(3) NOT NULL,
  `exlanguage` varchar(100) NOT NULL,
  `freelance` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `details`
--

INSERT INTO `details` (`a_id`, `age`, `exp`, `exlanguage`, `freelance`) VALUES
('bmd1eWVudHVhbnRydW9uZzJrQGdtYWlsLmNvbQ==', 20, 10, 'RW5nbGlzaCwga29yZWFuLCBjaGluZXNlLCBqYXBhbmVzZQ==', 'Unavailable');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `profile`
--

CREATE TABLE `profile` (
  `a_id` varchar(100) NOT NULL,
  `job_title` mediumtext NOT NULL,
  `address` mediumtext NOT NULL,
  `mobile` mediumtext NOT NULL,
  `summary` mediumtext NOT NULL,
  `image` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `profile`
--

INSERT INTO `profile` (`a_id`, `job_title`, `address`, `mobile`, `summary`, `image`) VALUES
('bmd1eWVudHVhbnRydW9uZzJrQGdtYWlsLmNvbQ==', 'RnJvbnQtZW5kIERldmVsb3Blcg==', 'bWFpIHjDoSwgbeG7uSB4w6EsIFRQIE5hbSDEkOG7i25o', 'MDg1MjAyMzk2OA==', 'aW0gYSBqdW5pb3Igb2YgdGh1eWxvaSB1bml2ZXJzaXR5LCBteSBtYWpvciBpcyBpbmZvcm1hdGlvbiB0ZWNobm9sb2d5LiAgSW4gdGhlIGZ1dHVyZSwgaSB3YW5uYSBiZSBhICB3ZWIgZGV2ZWxvcGVy', 'aW1nLzIxMzI5Mzc3NjUxNDc3MDc3NTUuanBn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `registration`
--

CREATE TABLE `registration` (
  `name` mediumtext NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` mediumtext NOT NULL,
  `data` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `registration`
--

INSERT INTO `registration` (`name`, `email`, `password`, `data`) VALUES
('Tmd1eeG7hW4gVHXhuqVuIFRyxrDhu51uZw==', 'bmd1eWVudHVhbnRydW9uZzJrQGdtYWlsLmNvbQ==', 'MTIzNDU2', '10-01-21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `services`
--

CREATE TABLE `services` (
  `a_id` varchar(100) NOT NULL,
  `service` mediumtext NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `services`
--

INSERT INTO `services` (`a_id`, `service`, `description`) VALUES
('bmd1eWVudHVhbnRydW9uZzJrQGdtYWlsLmNvbQ==', 'd2ViIGRlc2lnbg==', 'YmxhaGho'),
('bmd1eWVudHVhbnRydW9uZzJrQGdtYWlsLmNvbQ==', 'bW9uZXkgbGF1bmRlcmluZw==', 'YmxhaGho'),
('bmd1eWVudHVhbnRydW9uZzJrQGdtYWlsLmNvbQ==', 'cHN5Y2hvbG9naWNhbCBjb3Vuc2VsaW5nIA==', 'dMawIHbhuqVuIHTDom0gbMO9IDp2'),
('bmd1eWVudHVhbnRydW9uZzJrQGdtYWlsLmNvbQ==', 'YuG6pXQgxJHhu5luZyBz4bqjbg==', 'YmxhaA==');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `skill`
--

CREATE TABLE `skill` (
  `a_id` varchar(100) NOT NULL,
  `content` mediumtext NOT NULL,
  `proIndex` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `skill`
--

INSERT INTO `skill` (`a_id`, `content`, `proIndex`) VALUES
('bmd1eWVudHVhbnRydW9uZzJrQGdtYWlsLmNvbQ==', 'Q1NT', 60),
('bmd1eWVudHVhbnRydW9uZzJrQGdtYWlsLmNvbQ==', 'SFRNTA==', 50),
('bmd1eWVudHVhbnRydW9uZzJrQGdtYWlsLmNvbQ==', 'Ug==', 60);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `achievements`
--
ALTER TABLE `achievements`
  ADD KEY `a_id` (`a_id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `content`
--
ALTER TABLE `content`
  ADD KEY `a_id` (`a_id`);

--
-- Chỉ mục cho bảng `details`
--
ALTER TABLE `details`
  ADD KEY `a_id` (`a_id`);

--
-- Chỉ mục cho bảng `profile`
--
ALTER TABLE `profile`
  ADD KEY `a_id` (`a_id`);

--
-- Chỉ mục cho bảng `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `services`
--
ALTER TABLE `services`
  ADD KEY `a_id` (`a_id`);

--
-- Chỉ mục cho bảng `skill`
--
ALTER TABLE `skill`
  ADD KEY `a_id` (`a_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `achievements`
--
ALTER TABLE `achievements`
  ADD CONSTRAINT `achievements_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `registration` (`email`);

--
-- Các ràng buộc cho bảng `content`
--
ALTER TABLE `content`
  ADD CONSTRAINT `content_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `registration` (`email`);

--
-- Các ràng buộc cho bảng `details`
--
ALTER TABLE `details`
  ADD CONSTRAINT `details_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `registration` (`email`);

--
-- Các ràng buộc cho bảng `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `registration` (`email`);

--
-- Các ràng buộc cho bảng `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `registration` (`email`);

--
-- Các ràng buộc cho bảng `skill`
--
ALTER TABLE `skill`
  ADD CONSTRAINT `skill_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `registration` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
