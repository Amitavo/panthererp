-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 13, 2020 at 10:20 AM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `item_list`
--

CREATE TABLE `item_list` (
  `item_id` int(5) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_hsn` varchar(10) DEFAULT NULL,
  `item_price` int(10) NOT NULL,
  `item_tax` int(10) DEFAULT NULL,
  `item_attributes` varchar(50) NOT NULL,
  `item_description` varchar(100) NOT NULL,
  `item_qty` int(10) DEFAULT '0',
  `item_suppliers` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item_list`
--

INSERT INTO `item_list` (`item_id`, `item_name`, `item_hsn`, `item_price`, `item_tax`, `item_attributes`, `item_description`, `item_qty`, `item_suppliers`) VALUES
(0, 'Select a Item --', NULL, 0, 0, 'aa', 'aa', 0, 'aa'),
(1, 'Indicators', '2242', 50, 10, 'Yellow', 'Front Indicators', 10, 'minda'),
(2, 'Rim', '3324', 200, 12, 'black', 'Black front rim', 2, ''),
(3, 'Tyre 17inch front', '234', 102, 14, 'fornt tyre ak', 'Front tyre', 3, 'Ralco,Ceat'),
(21, 'Roof', '123', 2000, 18, 'Metal Roof', 'Raw metal roof with powder coating', 4, 'Ali roofs'),
(22, 'item8', '234', 200, 28, 'red in color', 'sdfsafd', 5, 'Rohit'),
(23, 'Handle Lock', '', 85, 12, 'Small size', 'Small size handle lock', 6, 'A,B,C'),
(24, 'item1', '', 300, 12, 'item 1 att', '', 7, ''),
(25, 'Item 2', '456', 230, 12, 'item 3 att', '', 8, ''),
(26, 'Item 3', 'rth40', 400, 10, 'Item 3', 'Item 3 des', 9, ''),
(27, 'Item 4', '2', 300, 12, 'Item 4 att', 'Item 4 Description', 10, ''),
(28, 'Item 5', '23r', 500, 8, 'Item 5 att', 'item 5 desc', 11, ''),
(29, 'Item 6', '12d', 450, 5, 'Item 6 Att', 'Item 6 Desc', 12, ''),
(30, 'Item 7', 'T54', 230, 5, 'Item 7 att', 'Item 7 des', 0, ''),
(31, 'Roof', '123', 2000, 18, 'Metal Roof', 'Raw metal roof with powder coating', 0, 'Ali roofs'),
(32, 'Roof', '123', 2000, 18, 'Metal Roof', 'Raw metal roof with powder coating', 0, 'Ali roofs'),
(33, 'Roof', '123', 2000, 18, 'Metal Roof', 'Raw metal roof with powder coating', 0, 'Ali roofs');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `po_no` int(5) NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `vendor_id` int(5) DEFAULT NULL,
  `item1_id` int(5) DEFAULT NULL,
  `item2_id` varchar(5) DEFAULT NULL,
  `item3_id` varchar(5) DEFAULT NULL,
  `item4_id` varchar(5) DEFAULT NULL,
  `item5_id` varchar(5) DEFAULT NULL,
  `item6_id` varchar(5) DEFAULT NULL,
  `item7_id` varchar(5) DEFAULT NULL,
  `item8_id` varchar(5) DEFAULT NULL,
  `item9_id` varchar(5) DEFAULT NULL,
  `item10_id` varchar(5) DEFAULT NULL,
  `item11_id` varchar(5) DEFAULT NULL,
  `item12_id` varchar(5) DEFAULT NULL,
  `qty1` int(5) DEFAULT NULL,
  `qty2` varchar(5) DEFAULT NULL,
  `qty3` varchar(5) DEFAULT NULL,
  `qty4` varchar(5) DEFAULT NULL,
  `qty5` varchar(5) DEFAULT NULL,
  `qty6` varchar(5) DEFAULT NULL,
  `qty7` varchar(5) DEFAULT NULL,
  `qty8` varchar(5) DEFAULT NULL,
  `qty9` varchar(5) DEFAULT NULL,
  `qty10` varchar(5) DEFAULT NULL,
  `qty11` varchar(5) DEFAULT NULL,
  `qty12` varchar(5) DEFAULT NULL,
  `total` int(10) NOT NULL,
  `shipping` varchar(5) DEFAULT NULL,
  `status` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchase_order`
--

INSERT INTO `purchase_order` (`po_no`, `date`, `vendor_id`, `item1_id`, `item2_id`, `item3_id`, `item4_id`, `item5_id`, `item6_id`, `item7_id`, `item8_id`, `item9_id`, `item10_id`, `item11_id`, `item12_id`, `qty1`, `qty2`, `qty3`, `qty4`, `qty5`, `qty6`, `qty7`, `qty8`, `qty9`, `qty10`, `qty11`, `qty12`, `total`, `shipping`, `status`) VALUES
(1, NULL, 4, 1, '2', '3', '1', '1', '3', '1', '3', '1', '2', '1', '0', 1, '2', '3', '4', '5', '6', '7', '8', '9', '2', '2', '0', 4600, '200', NULL),
(3, '2020-11-11 04:48:54', 2, 3, '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 652, '102', NULL),
(5, '2020-11-11 16:06:06', 3, 2, '1', '', '', '', '', '', '', '', '', '', '', 1, '3', '', '', '', '', '', '', '', '', '', '', 0, '', NULL),
(8, '2020-11-11 16:14:07', 3, 1, '2', '3', '', '', '', '', '', '', '', '', '', 1000, '800', '1000', '', '', '', '', '', '', '', '', '', 342000, '1000', NULL),
(10, '2020-11-11 16:38:21', 3, 1, '', '', '', '', '', '', '', '', '', '', '', 1, '', '', '', '', '', '', '', '', '', '', '', 0, '', NULL),
(11, '2020-11-12 03:54:18', 3, 1, '3', '', '', '', '', '', '', '', '', '', '', 10, '20', '', '', '', '', '', '', '', '', '', '', 3599, '299', NULL),
(12, '2020-11-12 03:55:20', 2, 1, '2', '1', '', '', '', '', '', '', '', '', '', 10, '20', '', '', '', '', '', '', '', '', '', '', 3599, '0', NULL),
(13, '2020-11-13 04:21:08', 4, 1, '2', '3', '1', '2', '3', '', '', '', '', '', '', 12, '22', '3', '4', '32', '23', '', '', '', '', '', '', 10560, '0', NULL),
(14, '2020-11-16 14:52:29', 5, 1, '2', '', '', '', '', '', '', '', '', '', '', 12, '', '', '', '', '', '', '', '', '', '', '', 1453, '133', NULL),
(15, '2020-11-16 14:52:36', 3, 1, '', '', '', '', '', '', '', '', '', '', '', 12, '', '', '', '', '', '', '', '', '', '', '', 1453, '133', NULL),
(16, '2020-11-16 15:27:57', 3, 1, '2', '1', '2', '1', '3', '1', '2', '3', '1', '1', '2', 1, '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', 7784, '249', NULL),
(17, '2020-11-16 19:49:37', 3, 1, '2', '3', '', '', '', '', '', '', '', '', '', 2, '3', '4', '', '', '', '', '', '', '', '', '', 1210, '', NULL),
(18, '2020-11-18 01:47:08', 3, 1, '2', '', '', '', '', '', '', '', '', '', '', 10, '20', '', '', '', '', '', '', '', '', '', '', 5249, '299', NULL),
(19, '2020-11-18 01:55:53', 3, 1, '2', '', '', '', '', '', '', '', '', '', '', 10, '20', '', '', '', '', '', '', '', '', '', '', 5249, '299', NULL),
(20, '2020-11-18 01:56:17', 3, 1, '2', '', '', '', '', '', '', '', '', '', '', 10, '20', '', '', '', '', '', '', '', '', '', '', 5249, '299', NULL),
(21, '2020-11-18 03:33:48', 3, 1, '2', '3', '2', '1', '3', '1', '2', '3', '1', '1', '0', 1, '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '0', 7784, '249', NULL),
(22, '2020-11-18 03:35:40', 3, 1, '2', '3', '2', '1', '3', '1', '2', '3', '1', '1', '2', 1, '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', 7784, '249', NULL),
(23, '2020-11-18 04:01:58', 2, 3, '2', '', '', '', '', '', '', '', '', '', '', 1, '2', '', '', '', '', '', '', '', '', '', '', 652, '102', NULL),
(24, '2020-11-18 04:24:53', 2, 1, '2', '3', '2', '0', '0', '0', '0', '0', '0', '0', '0', 12, '12', '12', '23', '0', '0', '0', '0', '0', '0', '0', '0', 9691, '11', NULL),
(25, '2020-11-18 04:43:42', 2, 1, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 55, '0', NULL),
(26, '2020-11-18 04:49:23', 1, 1, '', '', '', '', '', '', '', '', '', '', '', 1, '', '', '', '', '', '', '', '', '', '', '', 55, '', NULL),
(27, '2020-11-18 04:51:26', 1, 1, '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 2, '3', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 275, '0', NULL),
(28, '2020-11-18 06:38:54', 3, 1, '2', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, '2', '3', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1155, '0', NULL),
(29, '2020-11-18 07:05:30', 3, 1, '', '', '', '', '', '', '', '', '', '', '', 1, '', '', '', '', '', '', '', '', '', '', '', 55, '', NULL),
(30, '2020-11-18 10:39:55', 1, 1, '', '', '', '', '', '', '', '', '', '', '', 12, '', '', '', '', '', '', '', '', '', '', '', 660, '0', NULL),
(31, '2020-11-19 02:26:04', 3, 2, '1', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', 12, '10', '20', '0', '0', '0', '0', '0', '0', '0', '0', '0', 7790, '200', NULL),
(32, '2020-11-20 07:43:55', 3, 1, '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 12, '10', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 2960, '100', NULL),
(33, '2020-11-20 08:16:35', 2, 1, '', '', '', '', '', '', '', '', '', '', '', 1, '', '', '', '', '', '', '', '', '', '', '', 55, '', NULL),
(34, '2020-11-20 08:19:45', 2, 1, '2', '3', '21', '0', '0', '0', '0', '0', '0', '0', '0', 1, '2', '5', '10', '0', '0', '0', '0', '0', '0', '0', '0', 24645, '0', NULL),
(35, '2020-11-23 12:07:41', 2, 1, '2', '1', '3', '2', '2', '2', '1', '1', '0', '0', '0', 2, '4', '5', '12', '12', '23', '221', '89', '10', '0', '0', '0', 65426, '0', NULL),
(36, '2020-11-24 02:03:55', 4, 2, '21', '1', '3', '0', '0', '0', '0', '0', '0', '0', '0', 23, '33', '123', '20', '0', '0', '0', '0', '0', '0', '0', '0', 92005, '100', NULL),
(37, '2020-11-30 04:55:07', 2, 1, '3', '', '', '', '', '', '', '', '', '', '', 2, '4', '', '', '', '', '', '', '', '', '', '', 750, '200', NULL),
(38, '2020-12-05 09:27:30', 1, 1, '2', '3', '21', '23', '', '', '', '', '', '', '', 100, '200', '300', '500', '400', '', '', '', '', '', '', '', 1302780, '500', NULL),
(39, '2020-12-05 09:40:34', 2, 1, '2', '3', '', '', '', '', '', '', '', '', '', 23, '44', '56', '', '', '', '', '', '', '', '', '', 17483, '34', NULL),
(40, '2020-12-05 09:47:53', 2, 1, '2', '', '', '', '', '', '', '', '', '', '', 21, '21', '', '', '', '', '', '', '', '', '', '', 5893, '34', NULL),
(41, '2020-12-07 04:49:23', 1, 1, '2', '3', '1', '0', '0', '0', '0', '0', '0', '0', '0', 2, '8', '1', '12', '0', '0', '0', '0', '0', '0', '0', '0', 2675, '0', NULL),
(42, '2020-12-07 04:53:39', 1, 1, '2', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', 2, '8', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', 2126, '0', NULL),
(43, '2020-12-07 07:21:47', 0, 1, '', '', '', '', '', '', '', '', '', '', '', 1, '', '', '', '', '', '', '', '', '', '', '', 55, '', NULL),
(44, '2020-12-08 13:41:47', 2, 2, '', '', '', '', '', '', '', '', '', '', '', 1, '', '', '', '', '', '', '', '', '', '', '', 225, '1', NULL),
(45, '2020-12-08 13:44:21', 1, 1, '2', '3', '', '', '', '', '', '', '', '', '', 2, '3', '4', '', '', '', '', '', '', '', '', '', 1333, '99', NULL),
(46, '2020-12-13 08:13:55', 1, 2, '', '', '', '', '', '', '', '', '', '', '', 122, '', '', '', '', '', '', '', '', '', '', '', 27340, '12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vendor_id` int(6) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gst_no` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendor_id`, `name`, `number`, `address`, `email`, `gst_no`) VALUES
(0, 'Select a Vendor --', '', '', '', ''),
(1, 'Ramesh Tyres', '98989898', 'sdfasdf', 'ramesh@gmail.com', 'asdfff334'),
(2, 'ankur', '8989898989', 'noida', '', 'HGT6548785'),
(3, 'Amit', '8788778898', 'Kolkata', '', '674829364HT'),
(4, 'Sunil', '9999888899', 'New Delhi', 'sunil@ds.com', '123456789009876'),
(5, 'sdf', '3452435', 'qr4q23r5', 'asdfas@dasfa.com', 'qwerqwre');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item_list`
--
ALTER TABLE `item_list`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`po_no`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item_list`
--
ALTER TABLE `item_list`
  MODIFY `item_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `purchase_order`
--
ALTER TABLE `purchase_order`
  MODIFY `po_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vendor_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
