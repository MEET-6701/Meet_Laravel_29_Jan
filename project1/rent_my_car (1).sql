-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2022 at 06:26 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rent_my_car`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_master`
--

CREATE TABLE `admin_master` (
  `admin_id` int(11) NOT NULL,
  `admin_user` varchar(100) DEFAULT NULL,
  `admin_password` varchar(100) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `updated_dt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_master`
--

INSERT INTO `admin_master` (`admin_id`, `admin_user`, `admin_password`, `created_dt`, `updated_dt`) VALUES
(1, 'admin', '1234', '2022-04-09 11:32:54', '2022-04-09 11:32:54');

-- --------------------------------------------------------

--
-- Table structure for table `area_master`
--

CREATE TABLE `area_master` (
  `area_id` int(11) NOT NULL,
  `sta_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `area_name` char(30) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `updated_dt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area_master`
--

INSERT INTO `area_master` (`area_id`, `sta_id`, `city_id`, `area_name`, `created_dt`, `updated_dt`) VALUES
(5, 8, 8, 'baroda1', '2022-04-10 15:36:25', '2022-04-10 15:36:25'),
(7, 10, 10, 'delhi1', '2022-04-20 22:11:53', '2022-04-20 22:11:53');

-- --------------------------------------------------------

--
-- Table structure for table `booking_master`
--

CREATE TABLE `booking_master` (
  `bc_id` int(11) NOT NULL,
  `car_id` int(11) DEFAULT NULL,
  `cus_id` int(11) DEFAULT NULL,
  `bc_days` date DEFAULT NULL,
  `bc_time` time DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `updated_dt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `car_cate_master`
--

CREATE TABLE `car_cate_master` (
  `car_cate_id` int(11) NOT NULL,
  `cate_name` varchar(23) DEFAULT NULL,
  `cate_img` varchar(255) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `updated_dt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_cate_master`
--

INSERT INTO `car_cate_master` (`car_cate_id`, `cate_name`, `cate_img`, `created_dt`, `updated_dt`) VALUES
(14, '2 seater', '2 seater car.jpg', '2022-04-10 15:35:11', '2022-04-10 15:35:11'),
(21, '4 seater', '1.jpg', '2022-04-20 22:01:07', '2022-04-20 22:01:07');

-- --------------------------------------------------------

--
-- Table structure for table `car_master`
--

CREATE TABLE `car_master` (
  `car_id` int(11) NOT NULL,
  `car_cate_id` int(11) DEFAULT NULL,
  `cl_id` int(11) NOT NULL,
  `st_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `area_id` int(11) DEFAULT NULL,
  `car_name` varchar(50) DEFAULT NULL,
  `car_number` varchar(13) DEFAULT NULL,
  `rc_pic` varchar(255) DEFAULT NULL,
  `car_pic` varchar(255) DEFAULT NULL,
  `rc_number` varchar(100) DEFAULT NULL,
  `car_price` bigint(20) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `updated_dt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_master`
--

INSERT INTO `car_master` (`car_id`, `car_cate_id`, `cl_id`, `st_id`, `city_id`, `area_id`, `car_name`, `car_number`, `rc_pic`, `car_pic`, `rc_number`, `car_price`, `created_dt`, `updated_dt`) VALUES
(40, 21, 19, 8, 8, 5, 'demo car', 'GJ xy bc 0000', '274794_hyundai_verna_23746.jpg', 'rc-transfer.jpg', 'xxyyzzaabbcc', 2500, '2022-04-25 07:29:17', '2022-04-25 07:29:17'),
(41, 21, 16, 10, 10, 7, 'demo 2', 'GJ xy bc 0000', 'lamborghini-aventador-s-roadster-2019-4k-ok-2560x1440.jpg', 'rc-transfer.jpg', 'xxyyzzaabbcc', 2000, '2022-04-25 07:30:49', '2022-04-25 07:30:49'),
(42, 21, 16, 8, 8, 5, 'verna', 'GJ xy bc 0000', 'apollo.jpg', 'gtu.jpg', 'xxyyzzaabbcc', 2500, '2022-05-07 11:22:47', '2022-05-07 11:22:47');

-- --------------------------------------------------------

--
-- Table structure for table `city_master`
--

CREATE TABLE `city_master` (
  `city_id` int(11) NOT NULL,
  `st_id` int(35) DEFAULT NULL,
  `city_name` char(35) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `updated_dt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city_master`
--

INSERT INTO `city_master` (`city_id`, `st_id`, `city_name`, `created_dt`, `updated_dt`) VALUES
(8, 8, 'baroda', '2022-04-10 15:36:00', '2022-04-10 15:36:00'),
(10, 10, 'delhi', '2022-04-20 22:07:58', '2022-04-20 22:07:58');

-- --------------------------------------------------------

--
-- Table structure for table `client_master`
--

CREATE TABLE `client_master` (
  `cl_id` int(11) NOT NULL,
  `cl_name` char(50) DEFAULT NULL,
  `cl_mobile` bigint(11) DEFAULT NULL,
  `cl_mail` varchar(50) DEFAULT NULL,
  `cl_user` varchar(20) DEFAULT NULL,
  `cl_password` varchar(20) DEFAULT NULL,
  `cl_address` varchar(255) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `updated_dt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_master`
--

INSERT INTO `client_master` (`cl_id`, `cl_name`, `cl_mobile`, `cl_mail`, `cl_user`, `cl_password`, `cl_address`, `created_dt`, `updated_dt`) VALUES
(16, 'client3', 9685741232, 'client3@gmail.com', 'client3', '1234', 'oirgjaoerjgoraengiaerjgoiahoerjgarjg9ejag', '2022-04-11 09:08:48', '2022-04-11 09:08:48'),
(19, 'client1', 65845168416, 'client1@gmail.com', 'client1', '1234', 'af64a8ef4a84f68efa684efae8f', '2022-04-19 22:44:16', '2022-04-19 22:44:16');

-- --------------------------------------------------------

--
-- Table structure for table `contact_master`
--

CREATE TABLE `contact_master` (
  `co_id` int(11) NOT NULL,
  `co_mail` varchar(50) DEFAULT NULL,
  `co_reason` varchar(50) DEFAULT NULL,
  `co_discription` varchar(255) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `updated_dt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_master`
--

INSERT INTO `contact_master` (`co_id`, `co_mail`, `co_reason`, `co_discription`, `created_dt`, `updated_dt`) VALUES
(4, 'cus@gmail.com', 'hello', 'demo demo demodemo demo demodemo demo demodemo demo demodemo demo demodemo demo demo demo demo demo demo demo demo', '2022-04-19 22:31:12', '2022-04-19 22:31:12');

-- --------------------------------------------------------

--
-- Table structure for table `customer_master`
--

CREATE TABLE `customer_master` (
  `cus_id` int(11) NOT NULL,
  `cus_name` varchar(100) NOT NULL,
  `cus_user` varchar(100) DEFAULT NULL,
  `cus_password` varchar(100) DEFAULT NULL,
  `cus_mobile` bigint(11) DEFAULT NULL,
  `cus_mail` varchar(100) DEFAULT NULL,
  `cus_driveing_license` varchar(100) DEFAULT NULL,
  `cus_img` varchar(255) DEFAULT NULL,
  `cus_gender` text NOT NULL,
  `cus_address` varchar(255) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `updated_dt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_master`
--

INSERT INTO `customer_master` (`cus_id`, `cus_name`, `cus_user`, `cus_password`, `cus_mobile`, `cus_mail`, `cus_driveing_license`, `cus_img`, `cus_gender`, `cus_address`, `created_dt`, `updated_dt`) VALUES
(32, 'cus1', 'cus1', '81dc9bdb52d04dc20036dbd8313ed055', 9685741236, 'cus1@gmail.com', 'erngioerngoi', 'slider-bg.jpg', '', '   selrtjg[srejkg ainvaiouenio ienhfiuaef;aowf   ', '2022-04-11 09:15:40', '2022-04-14 22:52:15'),
(33, 'cus2', 'cus2', '81dc9bdb52d04dc20036dbd8313ed055', 8574961236, 'cus2@gmail.com', 'jlfbvlibvliablvbfdbvlk', '1.jpg', 'Female', 'hello there\r\n', '2022-04-20 08:17:15', '2022-04-20 08:17:15'),
(34, 'cus3', 'cus3', '81dc9bdb52d04dc20036dbd8313ed055', 9857412365, 'cus3@gmail.com', 'dskvhusiludvo;bi', '2.jpg', 'Male', 'Hello', '2022-04-24 17:09:56', '2022-04-24 17:09:56');

-- --------------------------------------------------------

--
-- Table structure for table `employee_master`
--

CREATE TABLE `employee_master` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(100) DEFAULT NULL,
  `emp_user` varchar(100) DEFAULT NULL,
  `emp_password` varchar(100) DEFAULT NULL,
  `emp_mobile` bigint(11) DEFAULT NULL,
  `emp_mail` varchar(35) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `updated_dt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_master`
--

INSERT INTO `employee_master` (`emp_id`, `emp_name`, `emp_user`, `emp_password`, `emp_mobile`, `emp_mail`, `created_dt`, `updated_dt`) VALUES
(9, 'emp2', 'emp2', '1234', 85264, 'emp2@gmail.com', '2022-04-10 15:31:58', '2022-04-10 15:31:58'),
(10, 'emp1', 'emp1', '81dc9bdb52d04dc20036dbd8313ed055', 9876541238, 'emp1@gmail.com', '2022-04-20 08:25:11', '2022-04-20 09:16:13');

-- --------------------------------------------------------

--
-- Table structure for table `payment_master`
--

CREATE TABLE `payment_master` (
  `py_id` int(11) NOT NULL,
  `car_id` int(11) DEFAULT NULL,
  `cus_id` int(11) DEFAULT NULL,
  `mathod` varchar(50) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `updated_dt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `state_master`
--

CREATE TABLE `state_master` (
  `st_id` int(11) NOT NULL,
  `st_name` char(30) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `updated_dt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state_master`
--

INSERT INTO `state_master` (`st_id`, `st_name`, `created_dt`, `updated_dt`) VALUES
(8, 'Gujarat', '2022-04-10 15:35:33', '2022-04-10 15:35:33'),
(10, 'delhi', '2022-04-20 22:02:56', '2022-04-20 22:02:56');

-- --------------------------------------------------------

--
-- Table structure for table `wish_master`
--

CREATE TABLE `wish_master` (
  `wish_id` int(11) NOT NULL,
  `cus_id` int(11) DEFAULT NULL,
  `car_id` int(11) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `updated_dt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_master`
--
ALTER TABLE `admin_master`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `area_master`
--
ALTER TABLE `area_master`
  ADD PRIMARY KEY (`area_id`),
  ADD KEY `sta_id` (`sta_id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `booking_master`
--
ALTER TABLE `booking_master`
  ADD PRIMARY KEY (`bc_id`),
  ADD KEY `car_id` (`car_id`),
  ADD KEY `cus_id` (`cus_id`);

--
-- Indexes for table `car_cate_master`
--
ALTER TABLE `car_cate_master`
  ADD PRIMARY KEY (`car_cate_id`);

--
-- Indexes for table `car_master`
--
ALTER TABLE `car_master`
  ADD PRIMARY KEY (`car_id`),
  ADD KEY `car_cate_id` (`car_cate_id`),
  ADD KEY `st_id` (`st_id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `area_id` (`area_id`),
  ADD KEY `cl_id` (`cl_id`);

--
-- Indexes for table `city_master`
--
ALTER TABLE `city_master`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `st_id` (`st_id`);

--
-- Indexes for table `client_master`
--
ALTER TABLE `client_master`
  ADD PRIMARY KEY (`cl_id`);

--
-- Indexes for table `contact_master`
--
ALTER TABLE `contact_master`
  ADD PRIMARY KEY (`co_id`);

--
-- Indexes for table `customer_master`
--
ALTER TABLE `customer_master`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `employee_master`
--
ALTER TABLE `employee_master`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `payment_master`
--
ALTER TABLE `payment_master`
  ADD PRIMARY KEY (`py_id`),
  ADD KEY `car_id` (`car_id`),
  ADD KEY `cus_id` (`cus_id`);

--
-- Indexes for table `state_master`
--
ALTER TABLE `state_master`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `wish_master`
--
ALTER TABLE `wish_master`
  ADD PRIMARY KEY (`wish_id`),
  ADD KEY `cus_id` (`cus_id`),
  ADD KEY `car_id` (`car_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_master`
--
ALTER TABLE `admin_master`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `area_master`
--
ALTER TABLE `area_master`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `booking_master`
--
ALTER TABLE `booking_master`
  MODIFY `bc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `car_cate_master`
--
ALTER TABLE `car_cate_master`
  MODIFY `car_cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `car_master`
--
ALTER TABLE `car_master`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `city_master`
--
ALTER TABLE `city_master`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `client_master`
--
ALTER TABLE `client_master`
  MODIFY `cl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contact_master`
--
ALTER TABLE `contact_master`
  MODIFY `co_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer_master`
--
ALTER TABLE `customer_master`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `employee_master`
--
ALTER TABLE `employee_master`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payment_master`
--
ALTER TABLE `payment_master`
  MODIFY `py_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `state_master`
--
ALTER TABLE `state_master`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `wish_master`
--
ALTER TABLE `wish_master`
  MODIFY `wish_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `area_master`
--
ALTER TABLE `area_master`
  ADD CONSTRAINT `area_master_ibfk_1` FOREIGN KEY (`sta_id`) REFERENCES `state_master` (`st_id`),
  ADD CONSTRAINT `area_master_ibfk_2` FOREIGN KEY (`city_id`) REFERENCES `city_master` (`city_id`);

--
-- Constraints for table `booking_master`
--
ALTER TABLE `booking_master`
  ADD CONSTRAINT `booking_master_ibfk_1` FOREIGN KEY (`car_id`) REFERENCES `car_master` (`car_id`),
  ADD CONSTRAINT `booking_master_ibfk_2` FOREIGN KEY (`cus_id`) REFERENCES `customer_master` (`cus_id`);

--
-- Constraints for table `car_master`
--
ALTER TABLE `car_master`
  ADD CONSTRAINT `car_master_ibfk_1` FOREIGN KEY (`car_cate_id`) REFERENCES `car_cate_master` (`car_cate_id`),
  ADD CONSTRAINT `car_master_ibfk_2` FOREIGN KEY (`st_id`) REFERENCES `state_master` (`st_id`),
  ADD CONSTRAINT `car_master_ibfk_3` FOREIGN KEY (`city_id`) REFERENCES `city_master` (`city_id`),
  ADD CONSTRAINT `car_master_ibfk_4` FOREIGN KEY (`area_id`) REFERENCES `area_master` (`area_id`),
  ADD CONSTRAINT `car_master_ibfk_5` FOREIGN KEY (`cl_id`) REFERENCES `client_master` (`cl_id`);

--
-- Constraints for table `city_master`
--
ALTER TABLE `city_master`
  ADD CONSTRAINT `city_master_ibfk_1` FOREIGN KEY (`st_id`) REFERENCES `state_master` (`st_id`);

--
-- Constraints for table `payment_master`
--
ALTER TABLE `payment_master`
  ADD CONSTRAINT `payment_master_ibfk_1` FOREIGN KEY (`car_id`) REFERENCES `car_master` (`car_id`),
  ADD CONSTRAINT `payment_master_ibfk_2` FOREIGN KEY (`cus_id`) REFERENCES `customer_master` (`cus_id`);

--
-- Constraints for table `wish_master`
--
ALTER TABLE `wish_master`
  ADD CONSTRAINT `wish_master_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `customer_master` (`cus_id`),
  ADD CONSTRAINT `wish_master_ibfk_2` FOREIGN KEY (`car_id`) REFERENCES `car_master` (`car_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
