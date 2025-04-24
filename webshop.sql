-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2024 at 10:24 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkcare`
--

CREATE TABLE `checkcare` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sdt` int(11) NOT NULL,
  `mota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkcare`
--

INSERT INTO `checkcare` (`id`, `name`, `email`, `sdt`, `mota`) VALUES
(1, 'Bùi Quang Huy', 'buihuy11102004@gmail.com', 1231313, 'ádasd');

-- --------------------------------------------------------

--
-- Table structure for table `dangki`
--

CREATE TABLE `dangki` (
  `id` int(11) NOT NULL,
  `ho` varchar(50) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dangki`
--

INSERT INTO `dangki` (`id`, `ho`, `ten`, `email`, `password`) VALUES
(1, 'bui', 'huy', 'buihuy111004@gmail.com', 'huyhuyhuy'),
(2, 'huy', 'bui', 'buihuy11102004@gmail.com', '12312313qweqwe'),
(3, 'qưe', 'bui', 'nhatanh11022000@gmail.com', 'asfasdasd'),
(4, 'huy', 'bui', 'nhatanh1102200@gmail.com', 'sdfs'),
(5, 'huy', 'bui', 'buihuy11102005@gmail.com', '11111111'),
(6, 'qưeqwe', 'bui', 'buihuy1110@gmail.com', '1bbd886460827015e5d605ed44252251'),
(7, 'huy', 'bui', 'buihuy111006@gmail.com', 'bae5e3208a3c700e3db642b6631e95b9'),
(8, 'huy', 'bui', 'buihuy111008@gmail.com', '1bbd886460827015e5d605ed44252251'),
(9, 'huy', 'bui', 'buihuy20012004@gmail.com', 'd94af641111d0096590b6237dba38b6b'),
(10, 'phuong', 'bui', 'phuonganlolkhong@gmail.com', '1bbd886460827015e5d605ed44252251');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oder_id` int(11) NOT NULL,
  `use_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gioitinh` varchar(20) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `cmnd` int(11) NOT NULL,
  `httt_ma` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oder_id`, `use_id`, `name`, `gioitinh`, `diachi`, `phone`, `email`, `birthday`, `cmnd`, `httt_ma`) VALUES
(1, 9, 'Bùi Quang Huy', 'nam', '123', 325921665, 'buihuy11102004@gmail.com', '0000-00-00', 12312313, '1'),
(2, 9, 'Bùi Quang Huy', 'nam', '123', 325921665, 'buihuy11102004@gmail.com', '0000-00-00', 12312313, '1'),
(3, 9, 'Bùi Quang Huy', 'nam', '123', 325921665, 'buihuy11102004@gmail.com', '0000-00-00', 12312313, '1'),
(4, 9, 'Bùi Quang Huyq', 'nam', '123', 325921665, 'buihuy11102004@gmail.com', '0000-00-00', 12312313, '1'),
(5, 9, 'Bùi Quang Huyq', 'nam', '123', 325921665, 'buihuy11102004@gmail.com', '0000-00-00', 12312313, '1'),
(6, 9, 'Bùi Quang Huyq', 'nam', '123', 325921665, 'buihuy11102004@gmail.com', '0000-00-00', 12312313, '1'),
(7, 9, 'Bùi Quang Huyq', 'nam', '123', 325921665, 'buihuy11102004@gmail.com', '0000-00-00', 12312313, '2'),
(8, 9, 'Bùi Quang Huyq', 'nam', '123', 325921665, 'buihuy11102004@gmail.com', '0000-00-00', 12312313, '2'),
(9, 9, '', '', '', 0, '', '0000-00-00', 0, '1'),
(10, 9, 'aasdqweq', 'nam', 'asdasdasdad', 325921665, 'buihuy11102004@gmail.com', '0000-00-00', 12312313, '3'),
(11, 9, '', '', '', 0, '', '0000-00-00', 0, '2'),
(12, 9, 'Bùi Quang Huy', 'nam', 'asdasdasdad', 325921665, 'buihuy11102004@gmail.com', '0000-00-00', 12312313, '1'),
(13, 9, 'Bùi Quang Huy', 'nam', 'asdasdasdad', 325921665, 'buihuy11102004@gmail.com', '0000-00-00', 12312313, '1'),
(14, 9, 'Bùi Quang Huy', 'nam', 'asdasdasdad', 325921665, 'buihuy11102004@gmail.com', '0000-00-00', 12312313, '3'),
(15, 9, 'Bùi Quang Huy', 'nam', 'asdasdasdad', 325921665, 'buihuy11102004@gmail.com', '0000-00-00', 12312313, '1'),
(16, 9, 'Bùi Quang Huy', 'nam', 'asdasdasdad', 325921665, 'buihuy11102004@gmail.com', '0000-00-00', 12312313, '1'),
(17, 9, 'Bùi Quang Huy', 'nam', 'asdasdasdad', 325921665, 'buihuy11102004@gmail.com', '0000-00-00', 12312313, '1'),
(18, 9, 'Bùi Quang Huy', 'nam', 'asdasdasdad', 325921665, 'buihuy11102004@gmail.com', '0000-00-00', 12312313, '1'),
(19, 9, 'Bùi Quang Huy', 'nam', 'asdasdasdad', 325921665, 'buihuy11102004@gmail.com', '0000-00-00', 12312313, '1'),
(20, 9, 'Bùi Quang Huy', '', '', 325921665, 'buihuy11102004@gmail.com', '0000-00-00', 0, '2'),
(21, 9, 'Bùi Quang Huy', 'nam', 'asdasdasdad', 325921665, 'buihuy11102004@gmail.com', '0000-00-00', 12312313, '1'),
(22, 9, 'Bùi Quang Huy', 'nam', 'asdasdasdad', 325921665, 'buihuy11102004@gmail.com', '0000-00-00', 12312313, '1');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `oders_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `oder_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`oders_id`, `product_name`, `oder_id`, `product_id`, `quantity`, `price`) VALUES
(8, '0', 19, 1, 20, 9998.00),
(9, '0', 20, 2, 21, 888888.00),
(10, ' Thời trang áo nữ harmode 2012', 21, 3, 20, 9998.00),
(11, ' Thời trang áo nữ harmode 2012', 21, 4, 20, 9998.00),
(12, ' Thời trang áo nữ harmode 2012', 22, 5, 20, 9998.00),
(13, ' Quần nam jean mịn', 22, 6, 30, 99999.00);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img` varchar(255) NOT NULL,
  `soluong` int(11) NOT NULL,
  `nganhhang` varchar(255) NOT NULL,
  `mota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `img`, `soluong`, `nganhhang`, `mota`) VALUES
(1, 'Thời trang áo nữ harmode', 999999.00, 'ádooad.webp', 23, 'Thời trang quần áo', 'saedqwesdqwads'),
(2, 'Thời trang áo nữ harmode 2012', 9998.00, 'thoi trang.jpg', 20, 'Thời trang áo', 'đfqqrasadasd nhìn cái....'),
(3, 'Thời trang áo nữ harmode 2024', 888888.00, 'quanao.webp', 21, 'Thời trang áo', 'gfhdgsartqwedq'),
(4, 'harmode nữ đẹpp vcl nhỉ', 5654000.00, 'ádooad.webp', 20, 'Thời trang áo', '123123wqedasd'),
(5, 'chân váy nữ đẹ', 200000.00, 'download.jpeg', 1, 'Thời trang quần ', 'qưeqweqwe'),
(6, 'Quần nam jean mịn', 99999.00, 'download (2).jpeg', 23, 'Thời trang quần ', 'không biết nói gì'),
(7, 'quần nam joker', 44444.00, 'download (3).jpeg', 123, 'Thời trang quần ', ''),
(8, 'Nước xả vải dnee hàng nhập khẩu', 888888.00, 'd-nee hong.jpg', 20, 'Nước xả vải', ''),
(9, 'nước xả vải hygine', 99999.00, 'hygine.jpg', 20, 'Nước xả vải', ''),
(10, 'Nước xả vải dnee hàng nhập khẩu loại màu xanh', 999999.00, 'd-nee xanh.jpg', 23, 'Nước xả vải', ''),
(11, 'Quần nam ', 200000.00, 'quâno.webp', 21, 'Thời trang quần', 'quaanzinnasd');

-- --------------------------------------------------------

--
-- Table structure for table `products_cart`
--

CREATE TABLE `products_cart` (
  `id` int(11) NOT NULL,
  `name_cart` varchar(255) NOT NULL,
  `price_cart` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `size` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'huy123', '123456789', 'buihuy111004@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkcare`
--
ALTER TABLE `checkcare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dangki`
--
ALTER TABLE `dangki`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oder_id`),
  ADD KEY `use_id` (`use_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`oders_id`),
  ADD KEY `order_items_ibfk_1` (`product_name`),
  ADD KEY `oder_id` (`oder_id`),
  ADD KEY `order_items_ibfk_2` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_cart`
--
ALTER TABLE `products_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkcare`
--
ALTER TABLE `checkcare`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dangki`
--
ALTER TABLE `dangki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oder_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `oders_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products_cart`
--
ALTER TABLE `products_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`use_id`) REFERENCES `dangki` (`id`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`oder_id`) REFERENCES `orders` (`oder_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
