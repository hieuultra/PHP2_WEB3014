-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 02, 2024 lúc 05:50 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `asm2_php2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `id_role` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `username`, `password`, `email`, `address`, `phone`, `img`, `id_role`) VALUES
(2, 'hieuvip', '321', 'hieubtph32408@fpt.edu.vn', 'ha noi', '0363707561', './app/public/image/r.jpg', 1),
(4, 'hungvc10', '111', 'hungcv@fpt.edu.vn', 'ha nam', '043532532532', './app/public/image/dc9bba30e469fcf9c0f4acf9928124c8.jpg', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `img` varchar(250) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `img`, `status`) VALUES
(55, 'Shoes', './app/public/image/0a6c93bb-a3e1-4027-9ad5-60224fe0acaf.jpg', 1),
(56, 'Bags', './app/public/image/76598878-cf87-459f-b4ae-c78a8b749ba4.jpg', 1),
(57, 'Trouser', './app/public/image/Tactical utility pants.jpg', 1),
(59, 'dress', './app/public/image/6f6b8541-2f53-4e05-ba26-c9aafc2b9eff.jpg', 1),
(60, 'shirts', './app/public/image/5580ce6d-49bf-4666-aafb-f451cccd7b80.jpg', 1),
(61, 'hats', './app/public/image/608fc4f0-e1d2-4bca-8e5b-b903e5616286.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `discount` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `img`, `description`, `price`, `discount`, `id_cat`, `status`) VALUES
(28, 'Dress1', './app/public/image/6f6b8541-2f53-4e05-ba26-c9aafc2b9eff.jpg', 'mua di', 123, 12, 52, 1),
(29, 'Hat1', './app/public/image/Ear Decor Fuzzy Bucket Hat.jpg', 'muaaa', 234, 2, 53, 1),
(30, 'Shirt1', './app/public/image/↟.jpg', 'ahahaha', 345, 45, 54, 1),
(31, 'Shoes9', './app/public/image/OIP (23).jpg', 'hang gia', 566, 55, 55, 1),
(32, 'bag1', './app/public/image/Backpack for Girls Primary School Student Satchel Backpack Book Travel bag Geometric Prints.jpg', 'hang vn ', 666, 44, 56, 1),
(33, 'Trouser1', './app/public/image/006c8bdf-9090-4d21-9768-5c526cd8d203.jpg', 'hang dat lam', 999, 9, 57, 1),
(34, 'hat3', './app/public/image/Jungkook.jpg', 'gia re', 1000, 20, 53, 1),
(35, 'dress4', './app/public/image/Hoàng tộc ma cà rồng.jpg', 'vay usa', 99, 9, 52, 1),
(36, 'dress44', './app/public/image/A-Line Prom Dresses Sparkle & Shine Dress Wedding Party Sweep _ Brush Train Sleeveless Sequined with Crystals Sequin Ruffles - Custom Size _ Black.jpg', 'fsds', 343, 4, 59, 1),
(37, 'shoe3', './app/public/image/OIP (11).jpg', 'fsdfsdgds', 43, 4, 55, 1),
(38, 'hat6', './app/public/image/d9b74968-e7f7-4ad7-8bbd-249c09a18680.jpg', 'dfdsfds', 434, 4, 61, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'user'),
(2, 'admin');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
