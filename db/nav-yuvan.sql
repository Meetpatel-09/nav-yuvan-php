-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2023 at 10:57 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nav-yuvan`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_number` int(15) NOT NULL,
  `mobile_number_second` int(15) DEFAULT NULL,
  `marital_status` varchar(15) DEFAULT NULL,
  `food` varchar(15) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `native_place` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `about_you` text DEFAULT NULL,
  `education` text NOT NULL,
  `job_business` text DEFAULT NULL,
  `monthly_income` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile_number`, `mobile_number_second`, `marital_status`, `food`, `father_name`, `mother_name`, `surname`, `native_place`, `address`, `about_you`, `education`, `job_business`, `monthly_income`, `gender`, `photo`) VALUES
(4, 'sdsdg', 'sdgg@gdfg.dfgfd', 0, 0, 'Unmarried', 'Non-Veg', 'fdgdf', 'gdfgdg', 'gdfgg', 'fdgfdgf', 'dgdfgdfgfgfdg', 'fdgdfg', 'gdfgfg', 'fdgfdg', 0, '', ''),
(5, 'gvfdg', 'fgf@fdd.ghjf', 0, 0, 'Married', 'Veg', 'cvbcvb', 'cvbcvbvb', 'vcbvcbcv', 'bcvbcvbc', 'vbcvbcvb', 'vcbcvb', 'vcbcvbvb', 'cvbcvbcvb', 0, '', ''),
(6, 'dsfgdfsgdf', 'dfgfdg@fgdg.dfgfdg', 0, 0, 'Married', 'Veg', 'fgdfg', 'fdgfdgdfg', 'dfgg', 'dfgfgd', 'fgdfgdf', 'gdfgdfgg', 'fdgdfgdf', 'fgdfg', 0, '', ''),
(8, '111', 'da@dfsd.vsd', 111111, 0, 'Unmarried', 'Non-Veg', 'gfd', '', 'gfsd', '', '', '', '', '', 0, '', ''),
(9, 'dsfgsg', 'dfsf@df.fsdf', 1111111111, 0, 'Unmarried', 'Veg', '43', '', 'dsf', '', '', '', '', '', 0, '', ''),
(10, 'fgfxg', 'gdfgfdg@vdfg.vom', 999999999, 0, 'Unmarried', '', 'xfg', '', 'cxvv', '', '', '', '', '', 0, '', ''),
(11, 'safdsfd', 'sdf@dfgfd.dsfdg', 0, 0, 'Married', 'Veg', 'dgfdsxg', 'dxgvxcv', 'cxvx', 'cv', 'xcv', 'xcv', 'vxcv', 'cvxcv', 0, '', ''),
(12, 'safdsfd', 'sdf@dfgfd.dsfdg', 0, 0, 'Married', 'Veg', 'dgfdsxg', 'dxgvxcv', 'cxvx', 'cv', 'xcv', 'xcv', 'vxcv', 'cvxcv', 0, '', ''),
(14, 'dsfsdfa', 'zdfzd@bfdf.vvv', 34545, 0, NULL, '', '', '', 'gdfgd', '', '', '', '', '', 0, '', ''),
(19, 'dsffdg', 'dgsdf@cxcvb.sdgd', 2147483647, 0, NULL, '', '', '', 'dfgdf', '', '', '', '', '', 0, '', ''),
(20, 'Neel', 'neel@gmail.com', 2147483647, 0, 'Divorced', 'Non-Veg', 'Rajesh', 'Saritaben', 'Rana', 'Navsari', 'Navsari', '', 'BE', 'Job', 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
