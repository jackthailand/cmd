-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2019 at 04:15 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmdsarabun`
--

-- --------------------------------------------------------

--
-- Table structure for table `cmd`
--

CREATE TABLE `cmd` (
  `id` int(5) NOT NULL,
  `id_cmd` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date_cmd` date NOT NULL,
  `detail_cmd` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `signer` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Position` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `filename` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cmd`
--

INSERT INTO `cmd` (`id`, `id_cmd`, `date_cmd`, `detail_cmd`, `department`, `signer`, `Position`, `note`, `filename`) VALUES
(50, '0001/2562', '2019-06-12', 'dddddddddggg', 'สำนักปลัดเทศบาลgg', 'นางสมจิตต์ สุทธางกูรgg', 'รองนายกเทศมนตรี รักษาราชการแทน นายกเทศมนตรีนครภูเก', '', '50.pdf'),
(53, '0002/2562', '2019-06-13', 'cccccccccccc', 'สำนักการช่าง', 'นางสาวสมใจ สุวรรณศุภพนา', 'นายกเทศมนตรีนครภูเก็ต', '', NULL),
(56, '0003/2562', '2019-06-13', 'ddddddddd', 'สำนักการช่าง', 'นางสาวสมใจ สุวรรณศุภพนา', 'รองนายกเทศมนตรี ปฏิบัติราชการแทน นายกเทศมนตรีนครภู', '', NULL),
(59, '0004/2562', '2019-06-13', 'ddddddddd', 'สำนักการช่าง', 'นางสาวสมใจ สุวรรณศุภพนา', 'รองนายกเทศมนตรี ปฏิบัติราชการแทน นายกเทศมนตรีนครภู', '', NULL),
(62, '0005/2562', '2019-06-13', 'ddddddddd', 'สำนักการช่าง', 'นางสาวสมใจ สุวรรณศุภพนา', 'ปลัดเทศบาล รักษาราชการแทน นายกเทศมนตรีนครภูเก็ต', '', '62.pdf'),
(65, '0006/2562', '2019-06-13', 'ddddddddd', 'สำนักการช่าง', 'นางสาวสมใจ สุวรรณศุภพนา', 'รองปลัดเทศบาล รักษาราชการแทน นายกเทศมนตรีนครภูเก็ต', '', '65.pdf'),
(68, '0007/2562', '2019-06-13', 'ddddddddd', 'สำนักการช่าง', 'นางสาวสมใจ สุวรรณศุภพนา', 'ปลัดเทศบาล ปฏิบัติราชการแทน นายกเทศมนตรีนครภูเก็ต', '', '68.pdf'),
(71, '0008/2562', '2019-06-13', 'ddddddddd', 'สำนักการช่าง', 'นางสาวสมใจ สุวรรณศุภพนา', 'รองนายกเทศมนตรี รักษาราชการแทน นายกเทศมนตรีนครภูเก', '', '71.pdf'),
(74, '0009/2562', '2019-06-13', 'ddddddddd', 'สำนักการช่าง', 'นางสาวสมใจ สุวรรณศุภพนา', 'รองนายกเทศมนตรี ปฏิบัติราชการแทน นายกเทศมนตรีนครภู', '', '74.pdf'),
(77, '0010/2562', '2019-06-13', 'ddddddddd', 'สำนักการช่าง', 'นางสาวสมใจ สุวรรณศุภพนา', 'รองนายกเทศมนตรี รักษาราชการแทน นายกเทศมนตรีนครภูเก', '', '77.pdf'),
(80, '0011/2562', '2019-06-13', 'dddffffffffffgggggggg', 'สำนักการช่าง', 'นางสาวสมใจ สุวรรณศุภพนา', 'นายกเทศมนตรีนครภูเก็ต', '', '80.pdf'),
(83, '0012/2562', '2019-06-13', 'ddddddddd', 'สำนักการช่าง', 'นางสาวสมใจ สุวรรณศุภพนา', 'รองปลัดเทศบาล รักษาราชการแทน นายกเทศมนตรีนครภูเก็ต', '', NULL),
(86, '0013/2562', '2019-06-13', 'ddddddddd', 'สำนักการช่าง', 'นางสาวสมใจ สุวรรณศุภพนา', 'ปลัดเทศบาล รักษาราชการแทน นายกเทศมนตรีนครภูเก็ต', '', NULL),
(89, '0014/2562', '2019-06-13', 'dddffffffffffgggggggg', 'สำนักการช่าง', 'นางสาวสมใจ สุวรรณศุภพนา', 'รองปลัดเทศบาล รักษาราชการแทน นายกเทศมนตรีนครภูเก็ต', '', NULL),
(92, '0015/2562', '2019-06-13', 'ทดสอบ', 'สำนักการคลัง', 'นายกวี ตันสุคตานนท์', 'ปลัดเทศบาล รักษาราชการแทน นายกเทศมนตรีนครภูเก็ต', '', '92.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `depart` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `depart`, `status`) VALUES
(1, 'admin', 'admincmd', 'ผู้ดูแลระบบ', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cmd`
--
ALTER TABLE `cmd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cmd`
--
ALTER TABLE `cmd`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
