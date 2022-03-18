-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 10, 2021 lúc 12:50 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopee`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `Cart_ID` int(50) NOT NULL,
  `Pro_ID` int(50) NOT NULL,
  `Cart_Name` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Price_Root` varchar(30) NOT NULL,
  `value` int(5) NOT NULL DEFAULT 1,
  `Cate_ID` int(50) NOT NULL,
  `user_ID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`Cart_ID`, `Pro_ID`, `Cart_Name`, `Image`, `Price_Root`, `value`, `Cate_ID`, `user_ID`) VALUES
(5043, 7, 'áo hoodie', 'product_img/s11.jpeg', '230.000 đ', 1, 2, 53),
(5044, 2, 'Áo sweater form rộng unisex', 'product_img/a1.jpeg', '100.000 đ', 1, 1, 53),
(5045, 2, 'Áo sweater form rộng unisex', 'product_img/a1.jpeg', '100.000 đ', 1, 1, 54);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `Product_ID` int(10) NOT NULL,
  `Cate_ID` int(10) NOT NULL,
  `Product_Name` varchar(200) NOT NULL,
  `Imge` varchar(30) NOT NULL,
  `Price` varchar(15) NOT NULL,
  `Status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`Product_ID`, `Cate_ID`, `Product_Name`, `Imge`, `Price`, `Status`) VALUES
(2, 1, 'Áo sweater form rộng unisex', 'product_img/a1.jpeg', '100.000 đ', b'1'),
(4, 1, 'Quần Nỉ Tăm BASSIC', 'product_img/a2.jpeg', '110.000 đ', b'1'),
(5, 1, 'Giày Lười Da Pierre Cardin', 'product_img/a3.jpeg', '43.000 đ', b'1'),
(6, 2, ' Ốp lưng Iphone', 'product_img/s3.jpeg', '15.000 đ', b'1'),
(7, 2, 'áo hoodie', 'product_img/s11.jpeg', '230.000 đ', b'1'),
(8, 3, 'sửa', 'product_img/fsale4.jpeg', '300.999 đ', b'1'),
(9, 4, 'kính bơi', 'product_img/a13.jpeg', '15.000 đ', b'1'),
(10, 4, 'Điện thoại P48 ', 'product_img/dt1.png', '17.000.000 đ', b'1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_ID` int(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `pass_word` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_ID`, `user_name`, `pass_word`) VALUES
(53, 'Thắng', 'c4ca4238a0b923820dcc509a6f75849b'),
(54, 'Phương', 'c4ca4238a0b923820dcc509a6f75849b');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Cart_ID`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `Cart_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5046;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `Product_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
