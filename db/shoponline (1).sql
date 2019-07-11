-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 11, 2019 lúc 04:55 AM
-- Phiên bản máy phục vụ: 10.1.34-MariaDB
-- Phiên bản PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shoponline`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `pk_category_product_id` int(11) NOT NULL,
  `c_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`pk_category_product_id`, `c_name`) VALUES
(1, 'Hãng 1'),
(2, 'Hãng 2'),
(3, 'Hãng 3'),
(4, 'Hãng 4'),
(5, 'Hãng  5'),
(6, 'Hãng 6');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(11) NOT NULL,
  `hovaten` varchar(500) NOT NULL,
  `diachi` varchar(2000) NOT NULL,
  `dienthoai` varchar(200) NOT NULL,
  `ghichu` text NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `hovaten`, `diachi`, `dienthoai`, `ghichu`, `email`, `password`) VALUES
(2, 'Vux B', '03326511622', '03326511622', '', 'vub@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'Vux B', '03326511622', '03326511622', '', 'vva@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_news`
--

CREATE TABLE `tbl_news` (
  `pk_news_id` int(11) NOT NULL,
  `c_name` varchar(500) NOT NULL,
  `c_description` varchar(20000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_news`
--

INSERT INTO `tbl_news` (`pk_news_id`, `c_name`, `c_description`) VALUES
(2, 'Về chúng tôi', '<p>jbfnds cjhgbvjds vjhkfnkghqigh đ&atilde; sửa</p>\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `ngaymua` date NOT NULL,
  `gia` float NOT NULL,
  `trangthai` int(11) NOT NULL,
  `ghichu` text NOT NULL,
  `diachi` varchar(500) NOT NULL,
  `sdt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `ngaymua`, `gia`, `trangthai`, `ghichu`, `diachi`, `sdt`) VALUES
(1, 1, '2019-07-10', 250000, 0, '34 sp15', 'Hà Nội', '06334567654');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_detail`
--

CREATE TABLE `tbl_order_detail` (
  `order_detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `fk_product_id` int(11) NOT NULL,
  `c_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_order_detail`
--

INSERT INTO `tbl_order_detail` (`order_detail_id`, `order_id`, `fk_product_id`, `c_number`) VALUES
(1, 1, 15, 1),
(2, 1, 14, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `pk_product_id` int(11) NOT NULL,
  `fk_category_product_id` int(11) NOT NULL DEFAULT '0',
  `fk_product_type_id` int(11) NOT NULL,
  `c_name` varchar(500) NOT NULL,
  `c_description` varchar(20000) NOT NULL,
  `c_content` text NOT NULL,
  `c_img` varchar(500) NOT NULL,
  `c_hotproduct` int(11) NOT NULL DEFAULT '0',
  `c_price` float NOT NULL,
  `price_sale` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`pk_product_id`, `fk_category_product_id`, `fk_product_type_id`, `c_name`, `c_description`, `c_content`, `c_img`, `c_hotproduct`, `c_price`, `price_sale`) VALUES
(1, 1, 1, 'Sản phẩm 1', '<p>hjbfhbjdscbh</p>\r\n', '', '15626592325.jpg', 1, 120000, 0),
(2, 1, 2, 'Sản phẩm 2', '<p>jnvnsdjvb</p>\r\n', '', '15626592164.jpg', 1, 1200000, 0),
(3, 1, 1, 'Sản phẩm 3', '<p>jnvnsdjvb</p>\r\n', '', '15626591853.jpg', 1, 1200000, 0),
(4, 2, 1, 'Sản phẩm 4', '<p>jnvnsdjvb</p>\r\n', '', '15626591623.jpg', 1, 1200000, 0),
(5, 2, 2, 'Sản phẩm 5', '<p>jnvnsdjvb</p>\r\n', '', '15626591432.jpg', 1, 1200000, 0),
(6, 2, 2, 'Sản phẩm 6', '<p>jnvnsdjvb</p>\r\n', '', '15626591271.jpg', 1, 1200000, 0),
(7, 1, 1, 'Sản phẩm 7', '<p>mnjcnmsdvjbj</p>\r\n', '', '1562658840pic2.jpg', 1, 120000, 100000),
(8, 2, 1, 'Sản phẩm 8', '<p>mnjcnmsdvjbj</p>\r\n', '', '1562658812pic1.jpg', 1, 120000, 100000),
(10, 4, 1, 'Sản phẩm 10', '<p>mnjcnmsdvjbj</p>\r\n', '', '1562552086pic6.jpg', 1, 120000, 100000),
(11, 1, 1, 'Sản phẩm 11', '<p>mnjcnmsdvjbj</p>\r\n', '', '1562552068pic5.jpg', 1, 120000, 100000),
(12, 2, 2, 'Sản phẩm 12', '<p>mnjcnmsdvjbj</p>\r\n', '', '1562552034det_pic1.jpg', 1, 120000, 100000),
(13, 2, 3, 'Sản phẩm 13', '<p>mnjcnmsdvjbj</p>\r\n', '', '1562552007pic4.jpg', 1, 120000, 100000),
(14, 2, 4, 'Sản phẩm 14', '<p>mnjcnmsdvjbj</p>\r\n', '', '1562551986pic2.jpg', 1, 120000, 100000),
(15, 5, 5, 'Sản phẩm 15', '<p>jefkjnjkvhjnv sjnb</p>\r\n', '<p>36-37-38-39-40</p>\r\n', '1562508587pic3.jpg', 1, 130000, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product_type`
--

CREATE TABLE `tbl_product_type` (
  `pk_product_type_id` int(11) NOT NULL,
  `c_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_product_type`
--

INSERT INTO `tbl_product_type` (`pk_product_type_id`, `c_name`) VALUES
(1, 'Loại 1'),
(2, 'Loại 2'),
(3, 'Loại 3'),
(4, 'Loại 4'),
(5, 'Loại 5'),
(18, 'Loại ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_slide`
--

CREATE TABLE `tbl_slide` (
  `pk_slide_id` int(11) NOT NULL,
  `c_name` varchar(500) NOT NULL,
  `c_img` varchar(500) NOT NULL,
  `c_description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `pk_user_id` int(11) NOT NULL,
  `c_email` varchar(500) NOT NULL,
  `c_password` varchar(500) NOT NULL,
  `c_fullname` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`pk_user_id`, `c_email`, `c_password`, `c_fullname`) VALUES
(1, 'admin@mail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Nguyễn Văn A'),
(2, 'admin1@mail.com', '202cb962ac59075b964b07152d234b70', 'Nguyễn Văn B'),
(3, 'admin2@mail.com', '202cb962ac59075b964b07152d234b70', 'Nguyễn Văn C'),
(4, 'admin3@mail.com', '202cb962ac59075b964b07152d234b70', 'Nguyễn Văn D');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`pk_category_product_id`);

--
-- Chỉ mục cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`pk_news_id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD PRIMARY KEY (`order_detail_id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`pk_product_id`);

--
-- Chỉ mục cho bảng `tbl_product_type`
--
ALTER TABLE `tbl_product_type`
  ADD PRIMARY KEY (`pk_product_type_id`);

--
-- Chỉ mục cho bảng `tbl_slide`
--
ALTER TABLE `tbl_slide`
  ADD PRIMARY KEY (`pk_slide_id`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`pk_user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  MODIFY `pk_category_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `pk_news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `pk_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `tbl_product_type`
--
ALTER TABLE `tbl_product_type`
  MODIFY `pk_product_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `tbl_slide`
--
ALTER TABLE `tbl_slide`
  MODIFY `pk_slide_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `pk_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
