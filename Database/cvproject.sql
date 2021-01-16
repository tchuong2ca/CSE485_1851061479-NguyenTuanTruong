-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 16, 2021 lúc 04:06 PM
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
-- Cơ sở dữ liệu: `cvproject`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `achievements`
--

CREATE TABLE `achievements` (
  `id` int(255) NOT NULL,
  `a_id` longtext NOT NULL,
  `working` int(255) NOT NULL,
  `done` int(255) NOT NULL,
  `awards` int(255) NOT NULL,
  `clients` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `achievements`
--

INSERT INTO `achievements` (`id`, `a_id`, `working`, `done`, `awards`, `clients`) VALUES
(3, 'bmd1eWVudHVhbnRydW9uZzJrQGdtYWlsLmNvbQ==', 2, 4, 10, 1000);

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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `content`
--

CREATE TABLE `content` (
  `id` int(111) NOT NULL,
  `a_id` mediumtext NOT NULL,
  `type` mediumtext NOT NULL,
  `content_one` mediumtext NOT NULL,
  `content_two` mediumtext NOT NULL,
  `content_three` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `content`
--

INSERT INTO `content` (`id`, `a_id`, `type`, `content_one`, `content_two`, `content_three`) VALUES
(27, 'bmd1eWVudHVhbnRydW9uZzJrQGdtYWlsLmNvbQ==', 'Work Experience', 'd2ViIGRlc2lnbg==', 'bWFzdGVy', 'YmxhaA=='),
(28, 'bmd1eWVudHVhbnRydW9uZzJrQGdtYWlsLmNvbQ==', 'Education', 'THkgVHUgVHJvbmcgU2Vjb25kYXJ5IFNjaG9vbA==', 'RGlzdGluY3Rpb24=', 'Li4uLg=='),
(29, 'bmd1eWVudHVhbnRydW9uZzJrQGdtYWlsLmNvbQ==', 'Work Experience', 'Q0VPIGluIHR0cnVvbmcgbGltaXR0ZWQgY29tcGFueQ==', 'RnJvbSB0aGVuIHRpbGwgbm93', 'Li4u');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `details`
--

CREATE TABLE `details` (
  `id` int(100) NOT NULL,
  `a_id` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `exp` int(3) NOT NULL,
  `exlanguage` varchar(100) NOT NULL,
  `freelance` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `details`
--

INSERT INTO `details` (`id`, `a_id`, `age`, `exp`, `exlanguage`, `freelance`) VALUES
(20, 'bmd1eWVudHVhbnRydW9uZzJrQGdtYWlsLmNvbQ==', 20, 10, 'RW5nbGlzaCwga29yZWFuLCBjaGluZXNlLCBqYXBhbmVzZQ==', 'Unavailable');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `a_id` mediumtext NOT NULL,
  `job_title` mediumtext NOT NULL,
  `address` mediumtext NOT NULL,
  `mobile` mediumtext NOT NULL,
  `summary` mediumtext NOT NULL,
  `image` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `profile`
--

INSERT INTO `profile` (`id`, `a_id`, `job_title`, `address`, `mobile`, `summary`, `image`) VALUES
(8, 'bmd1eWVudHVhbnRydW9uZzJrQGdtYWlsLmNvbQ==', 'RnJvbnQtZW5kIERldmVsb3Blcg==', 'bWFpIHjDoSwgbeG7uSB4w6EsIFRQIE5hbSDEkOG7i25o', 'MDg1MjAyMzk2OA==', 'aW0gYSBqdW5pb3Igb2YgdGh1eWxvaSB1bml2ZXJzaXR5LCBteSBtYWpvciBpcyBpbmZvcm1hdGlvbiB0ZWNobm9sb2d5LiAgSW4gdGhlIGZ1dHVyZSwgaSB3YW5uYSBiZSBhICB3ZWIgZGV2ZWxvcGVy', 'aW1nLzIxMzI5Mzc3NjUxNDc3MDc3NTUuanBn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `registration`
--

CREATE TABLE `registration` (
  `id` int(111) NOT NULL,
  `name` mediumtext NOT NULL,
  `email` mediumtext NOT NULL,
  `password` mediumtext NOT NULL,
  `data` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `password`, `data`) VALUES
(8, 'Tmd1eeG7hW4gVHXhuqVuIFRyxrDhu51uZw==', 'bmd1eWVudHVhbnRydW9uZzJrQGdtYWlsLmNvbQ==', 'MTIzNDU2', '10-01-21'),
(15, 'xJDhurduZyBUdeG6pW4gSGnhu4dw', 'ZHJhZ29uMTYwNjIwMDBAZ21haWwuY29t', 'MTIzNDU2', '16-01-21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `a_id` mediumtext NOT NULL,
  `service` mediumtext NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `services`
--

INSERT INTO `services` (`id`, `a_id`, `service`, `description`) VALUES
(12, 'bmd1eWVudHVhbnRydW9uZzJrQGdtYWlsLmNvbQ==', 'd2ViIGRlc2lnbg==', 'YmxhaGho'),
(13, 'bmd1eWVudHVhbnRydW9uZzJrQGdtYWlsLmNvbQ==', 'bW9uZXkgbGF1bmRlcmluZw==', 'YmxhaGho'),
(15, 'bmd1eWVudHVhbnRydW9uZzJrQGdtYWlsLmNvbQ==', 'cHN5Y2hvbG9naWNhbCBjb3Vuc2VsaW5nIA==', 'dMawIHbhuqVuIHTDom0gbMO9IDp2'),
(16, 'bmd1eWVudHVhbnRydW9uZzJrQGdtYWlsLmNvbQ==', 'YuG6pXQgxJHhu5luZyBz4bqjbg==', 'YmxhaA==');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `skill`
--

CREATE TABLE `skill` (
  `id` int(111) NOT NULL,
  `a_id` mediumtext NOT NULL,
  `content` mediumtext NOT NULL,
  `percentage` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `skill`
--

INSERT INTO `skill` (`id`, `a_id`, `content`, `percentage`) VALUES
(40, 'bmd1eWVudHVhbnRydW9uZzJrQGdtYWlsLmNvbQ==', 'Q1NT', 60),
(41, 'bmd1eWVudHVhbnRydW9uZzJrQGdtYWlsLmNvbQ==', 'SFRNTA==', 50),
(42, 'bmd1eWVudHVhbnRydW9uZzJrQGdtYWlsLmNvbQ==', 'Ug==', 60),
(43, 'bmd1eWVudHVhbnRydW9uZzJrQGdtYWlsLmNvbQ==', 'Qysr', 30);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `content`
--
ALTER TABLE `content`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `details`
--
ALTER TABLE `details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
