-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 13, 2020 at 07:02 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(3) NOT NULL,
  `cus_code` varchar(100) NOT NULL,
  `pro_code` varchar(100) NOT NULL,
  `qty` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `couponDetalis`
--

CREATE TABLE `couponDetalis` (
  `cop_id` int(3) DEFAULT NULL,
  `cop_cat` varchar(200) NOT NULL,
  `cop_name` varchar(100) NOT NULL,
  `cop_code` varchar(100) NOT NULL,
  `cop_genDate` date NOT NULL,
  `cop_validityDate` date NOT NULL,
  `cop_start` date NOT NULL,
  `cop_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customerDetails`
--

CREATE TABLE `customerDetails` (
  `cus_id` int(3) NOT NULL,
  `cus_code` varchar(100) NOT NULL,
  `cus_username` varchar(100) NOT NULL,
  `cus_password` varchar(100) NOT NULL,
  `cus_name` varchar(100) NOT NULL,
  `cus_contact` int(20) NOT NULL,
  `cus_email` varchar(50) NOT NULL,
  `cus_image` text NOT NULL,
  `cus_gender` varchar(20) NOT NULL,
  `cus_wallet` varchar(20) NOT NULL,
  `cus_status` varchar(20) NOT NULL,
  `cus_IdGenDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orderDetails`
--

CREATE TABLE `orderDetails` (
  `or_id` int(3) DEFAULT NULL,
  `ord_code` varchar(100) NOT NULL,
  `incvoice_id` varchar(100) NOT NULL,
  `ord_date` date NOT NULL,
  `p_id` int(3) NOT NULL,
  `s_id` int(3) NOT NULL,
  `cop_used` varchar(9) NOT NULL,
  `pay_mode` varchar(100) NOT NULL,
  `pay_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(3) NOT NULL,
  `p_code` varchar(10) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_category` varchar(50) NOT NULL,
  `p_subcat` varchar(50) NOT NULL,
  `p_brand` varchar(50) NOT NULL,
  `p_mrp` int(10) NOT NULL,
  `p_tax` int(10) NOT NULL,
  `p_rate` int(100) NOT NULL,
  `p_hsn` int(10) NOT NULL,
  `p_status` int(1) NOT NULL,
  `p_remarks` text NOT NULL,
  `p_discription` text NOT NULL,
  `p_unit` varchar(50) NOT NULL,
  `p_date` date NOT NULL,
  `p_updateDate` date NOT NULL,
  `p_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_code`, `p_name`, `p_category`, `p_subcat`, `p_brand`, `p_mrp`, `p_tax`, `p_rate`, `p_hsn`, `p_status`, `p_remarks`, `p_discription`, `p_unit`, `p_date`, `p_updateDate`, `p_image`) VALUES
(1, 'P123', 'Bisleri', '', '', '', 98, 8, 9, 0, 9, 'shanu', 'vaibhav', 'kilogram', '2019-05-23', '0000-00-00', ''),
(11, 'P123', 'Bisleri', '', '', '', 98, 8, 9, 0, 9, 'shanu', 'vaibhav', 'kilogram', '2019-05-23', '0000-00-00', ''),
(12, 'P123', 'Bisleri', '', '', '', 98, 8, 9, 0, 9, 'shanu', 'vaibhav', 'kilogram', '2019-05-23', '0000-00-00', ''),
(13, 'P123', 'Bisleri', '', '', '', 98, 8, 9, 0, 9, 'shanu', 'vaibhav', 'kilogram', '2019-05-23', '0000-00-00', ''),
(14, 'P123', 'Bisleri', '', '', '', 98, 8, 9, 0, 9, 'shanu', 'vaibhav', 'kilogram', '2019-05-23', '0000-00-00', ''),
(15, '098', 'shanu', '', '', '', 839, 738, 800, 0, 0, 'shanu is at good price', 'good yo be here', 'KILOGRAM', '2019-05-27', '0000-00-00', ''),
(32, 'jfnv', 'jgv', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(33, 'jfnv', 'jgv', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(34, 'jfnv', 'jgv', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(35, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(36, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(37, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(38, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(39, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(40, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(41, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(42, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(43, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(44, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(45, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(46, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(47, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(48, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(49, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(50, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(51, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(52, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(53, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(54, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(55, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(56, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(57, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(58, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(59, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(60, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(61, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(62, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(63, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(64, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(65, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(66, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(67, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(68, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(69, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(70, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(71, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(72, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(73, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(74, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(75, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(76, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(77, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(78, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(79, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(80, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(81, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(82, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(83, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(84, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(85, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(86, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(87, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(88, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(89, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(90, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(91, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(92, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(93, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(94, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(95, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(96, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(97, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(98, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(99, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(100, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(101, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(102, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(103, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(104, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(105, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(106, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(107, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(108, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(109, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(110, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(111, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(112, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(113, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(114, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(116, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(117, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(118, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(119, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(120, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(121, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(122, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(123, 'sjaxn', 'kjasncx', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(125, 'ajksc', 'jadcn', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(126, 'poi', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(127, 'poi', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(128, 'dsdasd', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', ''),
(129, 'dsdasd', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '2019-05-27', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `sellerDetails`
--

CREATE TABLE `sellerDetails` (
  `s_id` int(3) NOT NULL,
  `s_code` varchar(10) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `s_mobile` int(20) NOT NULL,
  `s_address` text NOT NULL,
  `s_companyname` varchar(200) NOT NULL,
  `s_firmAddress` text NOT NULL,
  `s_pan` varchar(20) NOT NULL,
  `s_firmgstnum` varchar(50) NOT NULL,
  `s_firmregistrarion` varchar(50) NOT NULL,
  `s_gender` varchar(20) NOT NULL,
  `s_username` varchar(50) NOT NULL,
  `s_email` varchar(100) NOT NULL,
  `s_password` varchar(100) NOT NULL,
  `s_entrydate` date NOT NULL,
  `s_validityDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `customerDetails`
--
ALTER TABLE `customerDetails`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `sellerDetails`
--
ALTER TABLE `sellerDetails`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customerDetails`
--
ALTER TABLE `customerDetails`
  MODIFY `cus_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `sellerDetails`
--
ALTER TABLE `sellerDetails`
  MODIFY `s_id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
