-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2020 at 09:07 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salon_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointment`
--

CREATE TABLE `tbl_appointment` (
  `App_id` int(2) NOT NULL,
  `Reg_no` int(2) NOT NULL,
  `ser_cat_id` varchar(20) NOT NULL,
  `Cat_id` int(2) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Staff_id` int(2) NOT NULL,
  `Status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`App_id`, `Reg_no`, `ser_cat_id`, `Cat_id`, `Date`, `Time`, `Staff_id`, `Status`) VALUES
(1, 2, '1', 1, '2020-05-02', '13:00:00', 3, 4),
(2, 2, '1', 1, '2020-05-02', '13:00:00', 3, 0),
(3, 2, '1', 1, '2020-05-02', '13:31:00', 3, 0),
(4, 1, '1', 1, '2020-05-02', '13:00:00', 3, 3),
(5, 1, '1', 1, '2020-05-02', '13:40:00', 3, 4),
(6, 2, '1', 1, '2020-05-01', '13:00:00', 3, 0),
(7, 2, '1', 1, '2020-05-03', '14:00:00', 3, 5),
(8, 2, '1', 1, '2020-05-03', '15:00:00', 3, 2),
(9, 2, '1', 1, '2020-05-02', '16:00:00', 3, 2),
(10, 2, '1', 1, '2020-05-02', '11:00:00', 3, 2),
(11, 2, '1', 1, '2020-05-02', '15:00:00', 4, 1),
(12, 2, '1', 1, '2020-05-05', '13:00:00', 3, 2),
(13, 2, '1', 1, '2020-05-05', '14:00:00', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `ser_cat_id` int(5) NOT NULL,
  `Cat_id` int(5) NOT NULL,
  `ser_cat_name` varchar(50) NOT NULL,
  `ser_cat_price` int(10) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`ser_cat_id`, `Cat_id`, `ser_cat_name`, `ser_cat_price`, `status`) VALUES
(1, 1, 'Hair Cut', 150, 1),
(2, 1, 'Hair Coloring', 500, 1),
(3, 1, 'Hair Straightening', 5000, 1),
(4, 1, 'Hair Dye', 200, 1),
(5, 1, 'Hair Smoothening', 6000, 1),
(6, 2, 'Manicure', 500, 1),
(7, 2, 'Pedicure', 100, 1),
(8, 2, 'Nail Art', 120, 1),
(9, 2, 'Nail cut', 50, 1),
(10, 3, 'Makeup', 5000, 1),
(11, 3, 'Brow Shaping', 30, 1),
(12, 4, 'Back massage', 1000, 1),
(13, 4, 'Body massage', 1000, 1),
(14, 4, 'Full Massage', 2000, 1),
(15, 5, 'Facial', 500, 1),
(16, 5, 'Makeup', 1000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `Log_id` int(2) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Role_id` int(5) NOT NULL,
  `Reg_id` int(2) NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`Log_id`, `Username`, `Password`, `Role_id`, `Reg_id`, `Status`) VALUES
(1, 'jennicadulay@gmail.com', 'cust1', 1, 1, 1),
(2, 'rosanosoria@gmail.com', 'cust1', 1, 2, 1),
(3, 'admin', 'admin', 0, 0, 0),
(4, 'ericasoria@gmail.com', 'staff1', 2, 3, 1),
(5, 'jrdog@gmail.com', 'staff1', 2, 4, 1),
(6, 'yuridog@gmail.com', 'staff1', 2, 5, 1),
(7, 'acecat@gmail.com', 'staff1', 2, 6, 1),
(8, 'jadecat@gmail.com', 'staff1', 2, 7, 1),
(9, 'pandakitten@gmail.com', 'staff1', 2, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `Pay_id` int(2) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Card_no` varchar(50) NOT NULL,
  `Cvv` int(50) NOT NULL,
  `Bank` varchar(50) NOT NULL,
  `Expiry` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`Pay_id`, `Name`, `Card_no`, `Cvv`, `Bank`, `Expiry`) VALUES
(1, 'Jennica Dulay', '123456', 123, 'Bank', '2020-08-02'),
(2, 'Rosano Soria', '654321', 321, 'Bank', '2020-08-05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE `tbl_registration` (
  `Reg_id` int(2) NOT NULL,
  `F_name` varchar(50) NOT NULL,
  `L_name` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `House_num` varchar(70) NOT NULL,
  `Street` varchar(20) NOT NULL,
  `Barangay` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Mobile` varchar(15) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Image` varchar(50) NOT NULL,
  `Status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`Reg_id`, `F_name`, `L_name`, `Gender`, `House_num`, `Street`, `Barangay`, `City`, `Mobile`, `Email`, `Image`, `Status`) VALUES
(1, 'Jennica', 'Dulay', 'female', '008', 'Elma', 'Commonwealth', 'Quezon City', '9109111949', 'jennicadulay@gmail.com', 'jennica.jpeg', 1),
(2, 'Rosano', 'Soria', 'female', '008', 'Elma', 'Commonwealth', 'Quezon City', '9109111949', 'rosanosoria@gmail.com', 'rosano.jpeg', 1),
(3, 'Erica', 'Soria', 'female', '009', 'Elma', 'Commonwealth', 'Quezon City', '9109111949', 'ericasoria@gmail.com', 'erica.jpeg', 2),
(4, 'JR', 'Dog', 'female', '009', 'Elma', 'Commonwealth', 'Quezon City', '9109111949', 'jrdog@gmail.com', 'jr.jpeg', 2),
(5, 'Yuri', 'Dog', 'female', '009', 'Elma', 'Commonwealth', 'Quezon City', '9109111949', 'yuridog@gmail.com', 'yuri.jpeg', 2),
(6, 'Ace', 'Cat', 'female', '009', 'Elma', 'Commonwealth', 'Quezon City', '9109111949', 'acecat@gmail.com', 'ace.jpeg', 2),
(7, 'Jade', 'Cat', 'female', '009', 'Elma', 'Commonwealth', 'Quezon City', '9109111949', 'jadecat@gmail.com', 'jade.jpeg', 2),
(8, 'Panda', 'Kitten', 'female', '009', 'Elma', 'Commonwealth', 'Quezon City', '9109111949', 'pandakitten@gmail.com', 'panda.jpeg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service_category`
--

CREATE TABLE `tbl_service_category` (
  `Cat_id` int(2) NOT NULL,
  `Cat_name` varchar(50) NOT NULL,
  `Status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_service_category`
--

INSERT INTO `tbl_service_category` (`Cat_id`, `Cat_name`, `Status`) VALUES
(1, 'Hair Treatments', 1),
(2, 'Nail Treatments', 1),
(3, 'Bridal Treatments', 1),
(4, 'Body Spa treatments', 1),
(5, 'Face Treatments', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE `tbl_staff` (
  `Detail_id` int(2) NOT NULL,
  `Reg_id` int(2) NOT NULL,
  `Cat_id` int(2) NOT NULL,
  `Qualification` varchar(50) NOT NULL,
  `University` varchar(50) NOT NULL,
  `Year_of_pass` year(4) NOT NULL,
  `Experience` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`Detail_id`, `Reg_id`, `Cat_id`, `Qualification`, `University`, `Year_of_pass`, `Experience`) VALUES
(1, 3, 1, 'UG', 'Beauty College', 2014, '2'),
(2, 4, 1, 'UG', 'Beauty College', 2015, '1'),
(3, 5, 2, 'PG', 'Beauty College', 2017, '1'),
(4, 6, 3, 'PG', 'Beauty College', 2015, '2'),
(5, 7, 4, 'PG', 'Beauty College', 2014, '2'),
(6, 8, 5, 'UG', 'Beauty College', 2014, '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  ADD PRIMARY KEY (`App_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`ser_cat_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`Log_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`Pay_id`);

--
-- Indexes for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  ADD PRIMARY KEY (`Reg_id`);

--
-- Indexes for table `tbl_service_category`
--
ALTER TABLE `tbl_service_category`
  ADD PRIMARY KEY (`Cat_id`);

--
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`Detail_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  MODIFY `App_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `ser_cat_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `Log_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `Pay_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  MODIFY `Reg_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_service_category`
--
ALTER TABLE `tbl_service_category`
  MODIFY `Cat_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `Detail_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
