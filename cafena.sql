-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2023 at 10:14 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafena`
--

-- --------------------------------------------------------

--
-- Table structure for table `mas_contacts`
--

CREATE TABLE `mas_contacts` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mas_contacts`
--

INSERT INTO `mas_contacts` (`id`, `name`, `email`, `message`, `date`) VALUES
(1, 'James ', 'james@mail.com', 'This is just a message ', '2023-10-03 06:27:24');

-- --------------------------------------------------------

--
-- Table structure for table `mas_prd`
--

CREATE TABLE `mas_prd` (
  `prdid` int(255) NOT NULL,
  `prdnm` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mas_prd`
--

INSERT INTO `mas_prd` (`prdid`, `prdnm`, `img`, `price`, `desc`) VALUES
(2, 'Gourmet Belgian Hot Chocolate', 'uploads/651d951fe3791_5694.jpg', '180', 'ssa'),
(3, 'Gourmet Belgian Cold Chocolate', 'uploads/651dcf864ccc8_1754.jpg', '200', ''),
(4, 'Espresso', 'uploads/651dcfcabc4df_8877.jpg', '120', ''),
(5, 'Cafe Mocha', 'uploads/651dd04ed1b41_9018.png', '165', ''),
(6, 'Cheesy Corn ‘n’ Spinach', 'uploads/651dd0a0a2d57_5757.jpg', '150', ''),
(7, 'Cheese Chilli Sandwich', 'uploads/651dd0b7c1b8f_4486.jpg', '150', ''),
(8, 'Cake Pastry', 'uploads/651dd0d9c4981_6423.jpg', '200', ''),
(9, 'Green Tea', 'uploads/651dd12d69151_1886.jpg', '120', '');

-- --------------------------------------------------------

--
-- Table structure for table `mas_tables`
--

CREATE TABLE `mas_tables` (
  `table_no` int(255) NOT NULL,
  `status` enum('OCCUPIED','UNOCCUPIED') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mas_tables`
--

INSERT INTO `mas_tables` (`table_no`, `status`) VALUES
(1, 'OCCUPIED'),
(2, 'UNOCCUPIED'),
(3, 'UNOCCUPIED'),
(4, 'UNOCCUPIED'),
(5, 'UNOCCUPIED'),
(6, 'UNOCCUPIED'),
(7, 'UNOCCUPIED'),
(8, 'UNOCCUPIED');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_make_order`
--

CREATE TABLE `tbl_make_order` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `table_id` int(255) NOT NULL,
  `hot_choco_number` int(255) NOT NULL,
  `cold_choco_number` int(255) NOT NULL,
  `esperesso_number` int(255) NOT NULL,
  `macchiato_number` int(255) NOT NULL,
  `cafe_mocha_number` int(255) NOT NULL,
  `cappucino_number` int(255) NOT NULL,
  `corn_n_spinach_number` int(255) NOT NULL,
  `veg_cheese_number` int(255) NOT NULL,
  `cheese_chilli_number` int(255) NOT NULL,
  `muffins_number` int(255) NOT NULL,
  `pastry_number` int(255) NOT NULL,
  `black_tea_number` int(255) NOT NULL,
  `green_tea_number` int(255) NOT NULL,
  `status` enum('PENDING','COMPLETE','PAID') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_make_order`
--

INSERT INTO `tbl_make_order` (`id`, `name`, `phone`, `table_id`, `hot_choco_number`, `cold_choco_number`, `esperesso_number`, `macchiato_number`, `cafe_mocha_number`, `cappucino_number`, `corn_n_spinach_number`, `veg_cheese_number`, `cheese_chilli_number`, `muffins_number`, `pastry_number`, `black_tea_number`, `green_tea_number`, `status`, `created_at`) VALUES
(1, 'Yash', '8320263676', 1, 2, 2, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 'COMPLETE', '2023-10-30 08:35:14'),
(2, 'Yash', '2147483647', 1, 2, 0, 0, 0, 2, 0, 0, 1, 0, 0, 0, 0, 0, 'PENDING', '2023-10-22 19:10:22'),
(3, 'Yash', '8320263676', 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'COMPLETE', '2023-10-30 08:37:13'),
(4, 'Yash', '8320263676', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'PENDING', '2023-10-30 08:37:26'),
(5, 'Yash', '8320263676', 1, 1, 0, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 'COMPLETE', '2023-10-30 16:42:12'),
(6, 'ds', '9426903379', 1, 0, 0, 0, 2, 0, 0, 0, 0, 0, 1, 0, 0, 0, 'COMPLETE', '2023-10-30 08:41:43'),
(7, 'Riya Sanghvi', '9426903378', 4, 0, 1, 0, 0, 0, 0, 2, 0, 2, 0, 0, 0, 0, 'COMPLETE', '2023-10-30 16:47:06'),
(8, 'Yash', '8320263676', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 'COMPLETE', '2023-10-30 16:46:50'),
(9, 'chiku', '9723731309', 6, 0, 0, 0, 0, 1, 0, 2, 1, 0, 0, 0, 0, 0, 'COMPLETE', '2023-10-30 17:00:39'),
(10, 'Dinkal', '9313376667', 7, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 'COMPLETE', '2023-10-30 17:05:10'),
(11, 'sa', '8320263676', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'PENDING', '2023-10-31 19:50:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `id` int(255) NOT NULL,
  `fnm` varchar(255) NOT NULL,
  `lnm` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `total` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_orders`
--

INSERT INTO `tbl_orders` (`id`, `fnm`, `lnm`, `company`, `country`, `street`, `town`, `zip`, `phone`, `email`, `detail`, `total`, `created_at`) VALUES
(1, 'Yash', 'Chavda', 'Rosie', 'Qui nobis eum volupt', 'Callum Britt', 'x', 'Kimberley Conner', '9426903379', 'yash@mail.com', 'eewewe', '500', '2023-10-30 17:57:45'),
(2, 'Yash', 'Chavda', 'Kent and Tillman LLC', 'Qui nobis eum volupt', 'Callum Britt', 'x', 'Kimberley Conner', '8320263676', 'yashchavda567@gmail.com', 'we are venom', '270', '2023-10-31 16:35:33'),
(3, 'SF', 'Chavda', 'Rosie', 'India', 'Callum Britt', 'Angelica Fuentes', 'Kimberley Conner', '8320263676', 'yashchavda567@gmail.com', 'OM NAMAH SHIVAY', '380', '2023-10-31 16:39:45'),
(4, 'Yash', 'Chavda', 'Kent and Tillman LLC', 'Optio nihil consect', 'Callum Britt', 'Angelica Fuentes', 'Kimberley Conner', '9426903379', 'yash@mail.com', 'this is etst set', '940', '2023-10-31 16:42:07'),
(5, 'Yash', 'Chavda', 'Kent and Tillman LLC', 'Rosalyn Berg', 'Callum Britt', 'x', 'Kimberley Conner', '8320263676', 'yashchavda567@gmail.com', 'this is test', '475', '2023-10-31 16:43:53');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_detail`
--

CREATE TABLE `tbl_order_detail` (
  `id` int(255) NOT NULL,
  `orderid` int(11) NOT NULL,
  `prdnm` varchar(255) NOT NULL,
  `count` int(255) NOT NULL,
  `amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order_detail`
--

INSERT INTO `tbl_order_detail` (`id`, `orderid`, `prdnm`, `count`, `amount`) VALUES
(1, 1, 'Gourmet Belgian Hot Chocolate', 1, '180'),
(2, 1, 'Gourmet Belgian Cold Chocolate', 1, '200'),
(3, 1, 'Espresso', 1, '120'),
(4, 2, 'Cheesy Corn ‘n’ Spinach', 1, '150'),
(5, 2, 'Black Tea', 1, '120'),
(6, 3, 'Gourmet Belgian Cold Chocolate', 1, '200'),
(7, 3, 'Muffins', 1, '60'),
(8, 3, 'Espresso', 1, '120'),
(9, 4, 'Espresso', 1, '120'),
(10, 4, 'Gourmet Belgian Cold Chocolate', 1, '200'),
(11, 4, 'Muffins', 2, '120'),
(12, 4, 'Green Tea', 1, '120'),
(13, 4, 'Cake Pastry', 1, '200'),
(14, 4, 'Gourmet Belgian Hot Chocolate', 1, '180'),
(15, 5, 'Gourmet Belgian Hot Chocolate', 1, '180'),
(16, 5, 'Macchiato', 1, '145'),
(17, 5, 'Cheesy Corn ‘n’ Spinach', 1, '150');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `uid` int(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`uid`, `uname`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'yashchavda', 'Yash', 'yashchavda567@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'yashchavda', 'Yash', 'yashchavda567@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mas_contacts`
--
ALTER TABLE `mas_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mas_prd`
--
ALTER TABLE `mas_prd`
  ADD PRIMARY KEY (`prdid`);

--
-- Indexes for table `mas_tables`
--
ALTER TABLE `mas_tables`
  ADD PRIMARY KEY (`table_no`);

--
-- Indexes for table `tbl_make_order`
--
ALTER TABLE `tbl_make_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mas_contacts`
--
ALTER TABLE `mas_contacts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mas_prd`
--
ALTER TABLE `mas_prd`
  MODIFY `prdid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mas_tables`
--
ALTER TABLE `mas_tables`
  MODIFY `table_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_make_order`
--
ALTER TABLE `tbl_make_order`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `uid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
