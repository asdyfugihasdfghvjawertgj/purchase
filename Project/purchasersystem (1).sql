-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 03:25 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `purchasersystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `broucher`
--

CREATE TABLE `broucher` (
  `id` int(11) NOT NULL,
  `item_code` varchar(255) NOT NULL,
  `servicecom` varchar(255) NOT NULL,
  `transportation` varchar(255) NOT NULL,
  `total_cost` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `township` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `bname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `productid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `name`, `photo`, `code`, `size`, `color`, `price`, `productid`) VALUES
(1, 'M1', 'photo/men1.jpg', '1001', 'S,M,L', 'free', '10000', 1),
(2, 'M2', 'photo/men2.jpg', '1002', 'S,M,L', 'free', '10000', 1),
(3, 'M3', 'photo/men3.jpg', '1003', 'S,M,L', 'free', '10000', 1),
(4, 'M4', 'photo/men4.jpg', '1004', 'S,M,L', 'free', '10000', 1),
(5, 'M5', 'photo/men5.jpg', '1005', 'S,M,L', 'free', '10000', 1),
(6, 'M6', 'photo/men6.jpg', '1006', 'S,M,L', 'free', '10000', 1),
(7, 'M7', 'photo/men7.jpg', '1007', 'S,M,L', 'free', '10000', 1),
(8, 'M8', 'photo/men8.jpg', '1008', 'S,M,L', 'free', '10000', 1),
(9, 'M9', 'photo/men9.jpg', '1009', 'S,M,L', 'free', '10000', 1),
(10, 'M10', 'photo/men10.jpg', '1010', 'S,M,L', 'free', '10000', 1),
(11, 'M11', 'photo/men11.jpg', '1011', 'S,M,L', 'free', '10000', 1),
(12, 'M12', 'photo/men12.jpg', '1012', 'S,M,L', 'free', '10000', 1),
(13, 'L1', 'photo/lady1.jpg', '1001', 'S,M,L', 'black', '10000', 2),
(14, 'L2', 'photo/lady2.jpg', '1002', 'S,M,L', 'black', '10000', 2),
(15, 'L3', 'photo/lady3.jpg', '1003', 'S,M,L', 'black', '10000', 2),
(16, 'L4', 'photo/lady4.jpg', '1004', 'S,M,L', 'black', '10000', 2),
(17, 'L5', 'photo/lady5.jpg', '1005', 'S,M,L', 'black', '10000', 2),
(18, 'L6', 'photo/lady6.jpg', '1006', 'S,M,L', 'black', '10000', 2),
(19, 'L7', 'photo/lady7.jpg', '1007', 'S,M,L', 'black', '10000', 2),
(20, 'L8', 'photo/lady8.jpg', '1008', 'S,M,L', 'black', '10000', 2),
(21, 'L9', 'photo/lady9.jpg', '1009', 'S,M,L', 'black', '10000', 2),
(22, 'L10', 'photo/lady10.jpg', '1010', 'S,M,L', 'black', '10000', 2),
(23, 'L11', 'photo/lady11.jpg', '1011', 'S,M,L', 'black', '10000', 2),
(25, 'L12', 'photo/lady12.jpg', '1012', 'S,M,L', 'black', '10000', 2),
(26, 'W1', 'photo/watch1.jpg', '1001', 'free', 'free', '190000', 3),
(27, 'W2', 'photo/watch2.jpg', '1002', 'free', 'free', '180000', 3),
(28, 'W3', 'photo/watch3.jpg', '1003', 'free', 'free', '160000', 3),
(29, 'W4', 'photo/watch4.jpg', '1004', 'free', 'free', '140000', 3),
(30, 'W5', 'photo/watch5.jpg', '1005', 'free', 'free', '130000', 3),
(31, 'W6', 'photo/watch6.jpg', '1006', 'free', 'free', '120000', 3),
(32, 'W7', 'photo/watch7.jpg', '1007', 'free', 'free', '170000', 3),
(33, 'W8', 'photo/watch8.jpg', '1008', 'free', 'free', '150000', 3),
(34, 'W9', 'photo/watch9.jpg', '1009', 'free', 'free', '160000', 3),
(35, 'W10', 'photo/watch10.jpg', '1010', 'free', 'free', '130000', 3),
(36, 'W11', 'photo/watch11.jpg', '1011', 'free', 'free', '120000', 3),
(37, 'W12', 'photo/watch12.jpg', '1012', 'free', 'free', '110000', 3),
(38, 'G1', 'photo/glass1.jpg', '1001', 'free', 'free', '90000', 4),
(39, 'G1', 'photo/glass2.jpg', '1002', 'free', 'free', '80000', 4),
(40, 'G3', 'photo/glass3.jpg', '1003', 'free', 'free', '60000', 4),
(41, 'G4', 'photo/glass4.png', '1004', 'free', 'free', '40000', 4),
(42, 'G5', 'photo/glass5.jpg', '1005', 'free', 'free', '40000', 4),
(43, 'G6', 'photo/glass6.png', '1006', 'free', 'free', '60000', 4),
(44, 'G7', 'photo/glass7.jpg', '1007', 'free', 'free', '70000', 4),
(45, 'G8', 'photo/glass8.jpg', '1008', 'free', 'free', '50000', 4),
(46, 'G9', 'photo/glass9.jpg', '1009', 'free', 'free', '60000', 4),
(47, 'G10', 'photo/glass10.jpg', '1010', 'free', 'free', '90000', 4),
(48, 'G11', 'photo/glass11.jpg', '1011', 'free', 'free', '70000', 4),
(49, 'G12', 'photo/glass12.jpg', '1012', 'free', 'free', '80000', 4),
(50, 'S1', 'photo/sneaker1.jpg', '1001', 'free', 'free', '90000', 5),
(51, 'S2', 'photo/sneaker2.jpg', '1002', 'free', 'free', '80000', 5),
(52, 'S3', 'photo/sneaker3.jpg', '1003', 'free', 'free', '60000', 5),
(53, 'S4', 'photo/sneaker4.jpg', '1004', 'free', 'free', '40000', 5),
(54, 'S5', 'photo/sneaker5.jpg', '1005', 'free', 'free', '40000', 5),
(55, 'S6', 'photo/sneaker6.jpg', '1006', 'free', 'free', '60000', 5),
(56, 'S7', 'photo/sneaker7.jpg', '1007', 'free', 'free', '70000', 5),
(57, 'S8', 'photo/sneaker8.jpg', '1008', 'free', 'free', '50000', 5),
(58, 'S9', 'photo/sneaker9.jpg', '1009', 'free', 'free', '60000', 5),
(59, 'S10', 'photo/sneaker10.jpg', '1010', 'free', 'free', '90000', 5),
(60, 'S11', 'photo/sneaker11.jpg', '1011', 'free', 'free', '70000', 5),
(61, 'S12', 'photo/sneaker12.jpg', '1012', 'free', 'free', '80000', 5),
(62, 'H1', 'photo/hat1.jpg', '1001', 'free', 'free', '9000', 6),
(63, 'H2', 'photo/hat2.jpg', '1002', 'free', 'free', '8000', 6),
(64, 'H3', 'photo/hat3.jpg', '1003', 'free', 'free', '6000', 6),
(65, 'H4', 'photo/hat4.jpg', '1004', 'free', 'free', '4000', 6),
(66, 'H5', 'photo/hat5.jpg', '1005', 'free', 'free', '4000', 6),
(67, 'H6', 'photo/hat6.jpg', '1006', 'free', 'free', '6000', 6),
(68, 'H7', 'photo/hat7.jpg', '1007', 'free', 'free', '7000', 6),
(69, 'H8', 'photo/hat8.jpg', '1008', 'free', 'free', '5000', 6),
(70, 'H9', 'photo/hat9.jpg', '1009', 'free', 'free', '6000', 6),
(71, 'H10', 'photo/hat10.jpg', '1010', 'free', 'free', '9000', 6),
(72, 'H11', 'photo/hat11.jpg', '1011', 'free', 'free', '7000', 6),
(73, 'H12', 'photo/hat12.jpg', '1012', 'free', 'free', '8000', 6),
(74, 'B1', 'photo/bag1.jpg', '1001', 'free', 'free', '28000', 7),
(75, 'B2', 'photo/bag2.jpg', '1002', 'free', 'free', '20000', 7),
(76, 'B3', 'photo/bag3.jpg', '1003', 'free', 'free', '21000', 7),
(77, 'B4', 'photo/bag4.jpg', '1004', 'free', 'free', '26000', 7),
(78, 'B5', 'photo/bag5.jpg', '1005', 'free', 'free', '25000', 7),
(79, 'B6', 'photo/bag6.jpg', '1006', 'free', 'free', '30000', 7),
(80, 'B7', 'photo/bag7.jpg', '1007', 'free', 'free', '18000', 7),
(81, 'B8', 'photo/bag8.jpg', '1008', 'free', 'free', '16000', 7),
(82, 'B9', 'photo/bag9.jpg', '1009', 'free', 'free', '24000', 7),
(83, 'B10', 'photo/bag10.jpg', '1010', 'free', 'free', '23000', 7),
(84, 'B11', 'photo/bag11.jpg', '1011', 'free', 'free', '20000', 7),
(85, 'B12', 'photo/bag12.jpg', '1012', 'free', 'free', '30000', 7),
(86, 'J1', 'photo/jean1.jpg', '1001', 'S,M,L', 'free', '90000', 8),
(87, 'J2', 'photo/jean2.jpg', '1002', 'S,M,L', 'free', '80000', 8),
(88, 'J3', 'photo/jean3.jpg', '1003', 'S,M,L', 'free', '60000', 8),
(89, 'J4', 'photo/jean4.jpg', '1004', 'S,M,L', 'free', '40000', 8),
(90, 'J5', 'photo/jean5.jpg', '1005', 'S,M,L', 'free', '40000', 8),
(91, 'J6', 'photo/jean6.jpg', '1006', 'S,M,L', 'free', '60000', 8),
(92, 'J7', 'photo/jean7.jpg', '1007', 'S,M,L', 'free', '70000', 8),
(93, 'J8', 'photo/jean8.jpg', '1008', 'S,M,L', 'free', '50000', 8),
(94, 'J9', 'photo/jean9.jpg', '1009', 'S,M,L', 'free', '60000', 8),
(95, 'J10', 'photo/jean10.jpg', '1010', 'S,M,L', 'free', '90000', 8),
(96, 'J11', 'photo/jean11.jpg', '1011', 'S,M,L', 'free', '70000', 8),
(97, 'J12', 'photo/jean12.jpg', '1012', 'S,M,L', 'free', '80000', 8),
(98, 'C1', 'photo/comestic1.jpg', '1001', 'free', 'free', '90000', 9),
(99, 'C2', 'photo/comestic2.jpg', '1002', 'free', 'free', '80000', 9),
(100, 'C3', 'photo/comestic3.jpg', '1003', 'free', 'free', '60000', 9),
(101, 'C4', 'photo/comestic4.jpg', '1004', 'free', 'free', '40000', 9),
(102, 'C5', 'photo/comestic5.jpg', '1005', 'free', 'free', '40000', 9),
(103, 'C6', 'photo/comestic6.jpg', '1006', 'free', 'free', '60000', 9),
(104, 'C7', 'photo/comestic7.jpg', '1007', 'free', 'free', '70000', 9),
(105, 'C8', 'photo/comestic8.jpg', '1008', 'free', 'free', '50000', 9),
(106, 'C9', 'photo/comestic9.jpg', '1009', 'free', 'free', '60000', 9),
(107, 'C10', 'photo/comestic10.jpg', '1010', 'free', 'free', '90000', 9),
(108, 'C11', 'photo/comestic11.jpg', '1011', 'free', 'free', '70000', 9),
(109, 'C12', 'photo/comestic12.jpg', '1012', 'free', 'free', '80000', 9),
(110, 'Acc1', 'photo/laptop1.jpg', '1001', 'free', 'free', '1900000', 10),
(111, 'Acc2', 'photo/laptop2.jpg', '1002', 'free', 'free', '1800000', 10),
(112, 'Acc3', 'photo/laptop3.jpg', '1003', 'free', 'free', '2600000', 10),
(113, 'Acc4', 'photo/phone1.jpg', '1004', 'free', 'free', '2400000', 10),
(114, 'Acc5', 'photo/phone2.jpg', '1005', 'free', 'free', '2300000', 10),
(115, 'Acc6', 'photo/phone3.jpg', '1006', 'free', 'free', '2200000', 10),
(116, 'Acc7', 'photo/camera1.jpg', '1007', 'free', 'free', '700000', 10),
(117, 'Acc8', 'photo/camera2.jpg', '1008', 'free', 'free', '500000', 10),
(118, 'Acc9', 'photo/camera3.jpg', '1009', 'free', 'free', '600000', 10),
(119, 'Acc10', 'photo/tablet1.jpg', '1010', 'free', 'free', '1300000', 10),
(120, 'Acc11', 'photo/tablet2.jpg', '1011', 'free', 'free', '1200000', 10),
(121, 'Acc12', 'photo/tablet3.jpg', '1012', 'free', 'free', '1100000', 10),
(122, 'HD1', 'photo/seat1.jpg', '1001', 'free', 'free', '150000', 11),
(123, 'HD2', 'photo/seat2.jpg', '1002', 'free', 'free', '160000', 11),
(124, 'HD3', 'photo/seat3.jpg', '1003', 'free', 'free', '180000', 11),
(125, 'HD4', 'photo/table.jpg', '1004', 'free', 'free', '440000', 11),
(126, 'HD5', 'photo/table1.jpg', '1005', 'free', 'free', '500000', 11),
(127, 'HD6', 'photo/table2.jpg', '1006', 'free', 'free', '600000', 11),
(128, 'HD7', 'photo/mirror1.jpg', '1007', 'free', 'free', '700000', 11),
(129, 'HD8', 'photo/mirror2.jpg', '1008', 'free', 'free', '800000', 11),
(130, 'HD9', 'photo/mirror3.jpg', '1009', 'free', 'free', '900000', 11),
(131, 'HD10', 'photo/decor1.jpg', '1010', 'free', 'free', '900000', 11),
(132, 'HD11', 'photo/decor2.jpg', '1011', 'free', 'free', '800000', 11),
(133, 'HD12', 'photo/decor3.jpg', '1012', 'free', 'free', '700000', 11),
(134, 'Sport1', 'photo/gym1.jpg', '1001', 'free', 'free', '190000', 12),
(135, 'Sport2', 'photo/gym2.jpg', '1002', 'free', 'free', '180000', 12),
(136, 'Sport3', 'photo/gym3.jpg', '1003', 'free', 'free', '160000', 12),
(137, 'Sport4', 'photo/gym4.jpg', '1004', 'free', 'free', '140000', 12),
(138, 'Sport5', 'photo/gym5.jpg', '1005', 'free', 'free', '430000', 12),
(139, 'Sport6', 'photo/gym6.jpg', '1006', 'free', 'free', '120000', 12),
(140, 'Sport7', 'photo/gym7.jpg', '1007', 'free', 'free', '170000', 12),
(141, 'Sport8', 'photo/gym8.jpg', '1008', 'free', 'free', '150000', 12),
(142, 'Sport9', 'photo/gym9.jpg', '1009', 'free', 'free', '260000', 12),
(143, 'Sport10', 'photo/gym10.jpg', '1010', 'free', 'free', '330000', 12),
(144, 'Sport11', 'photo/gym11.jpg', '1011', 'free', 'free', '320000', 12),
(145, 'Sport12', 'photo/gym12.jpg', '1012', 'free', 'free', '410000', 12);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `order_detail` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `id` int(11) NOT NULL,
  `item_code` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `delivery_type` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `township` varchar(255) NOT NULL,
  `broucher_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`) VALUES
(1, 'Men'),
(2, 'Lady'),
(3, 'Watches'),
(4, 'Glasses'),
(5, 'Sneaker'),
(6, 'Hats'),
(7, 'Bags'),
(8, 'Jeans'),
(9, 'Comestic'),
(10, 'Accessories'),
(11, 'Home & Decor'),
(12, 'Sport');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `email`, `password`) VALUES
(1, 'myomyint123@gmail.com', '1234'),
(2, 'myomyint123@gmail.com', '1234'),
(3, 'myomyint123@gmail.com', '1234'),
(4, 'myomyint123@gmail.com', '1234'),
(5, 'myomyint123@gmail.com', '1234'),
(6, 'thayair123@gmail.com', '123'),
(7, 'mmyh1234@gmail.com', 'mmyh'),
(8, 'maymu1234@gmail.com', '7890');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `broucher`
--
ALTER TABLE `broucher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `broucher`
--
ALTER TABLE `broucher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
