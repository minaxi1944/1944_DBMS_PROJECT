-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2020 at 10:31 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employment`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `proc1` ()  BEGIN
	SELECT *
	FROM employee;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `proc2` (IN `id` INT)  NO SQL
BEGIN
select * from emp_leave WHERE emp_leave.empid=id ;
   
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `deptid` int(11) NOT NULL,
  `deptnm` varchar(20) NOT NULL,
  `depthead` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`deptid`, `deptnm`, `depthead`) VALUES
(1, 'Executive', 'Deepak Naik'),
(2, 'Finance', 'Maria Dias'),
(3, 'Marketing', 'Shri');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empid` int(11) NOT NULL,
  `empnm` varchar(20) NOT NULL,
  `lastnm` varchar(20) NOT NULL,
  `dept` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dob` date DEFAULT '1998-02-28',
  `contact` varchar(20) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `degree` varchar(30) DEFAULT NULL,
  `pid` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empid`, `empnm`, `lastnm`, `dept`, `email`, `dob`, `contact`, `gender`, `address`, `salary`, `degree`, `pid`) VALUES
(7, 'harshad', 'Mehta', 3, 'xA@SS', '2020-10-30', '704037', 'Male', 'Maharash', 12, 'bsc', 0),
(8, 'mayu', 'patil', 2, 'm@g.com', '2020-11-28', '141', 'Male', '2F', 12, 'ho', 0),
(9, 'tabib', 'sheikh', 2, 't@gmail.com', '2008-11-21', '125612', 'Male', 'karaswada', 12, 'mbbs', 0),
(10, 'kedar', 'shinde', 2, 'k@g.com', '2020-11-27', '123456789', 'Male', 'Panjim', 12, 'MCA', 1001),
(12, 'Minaxi ', 'Patil', 1, 'm@g.com', '2020-11-28', '1234', 'Female', 'goa', 14, 'as', 121),
(14, 'Madhav', 'Shikhare', 1, 'm@g.com', '2006-11-17', '231', 'Male', 'goa keri', 20, 'BE', 121),
(15, 'Ravi', 'Naik', 1, 'r@g.com', '2013-04-18', '8007074093', 'Male', 'Kirti nagar', 45, 'BE', 7821),
(16, 'Rohan', 'Desai', 1, 'r@g.com', '1995-10-18', '7040370662', 'Male', 'Pune Maharashtra', 98, 'M.E', 1991),
(17, 'Siya', 'Malhotra', 3, 's@g.com', '2007-06-13', '8806698312', 'Female', 'Pune ,Maharashtra', 80, 'Bsc', 1991),
(18, 'Riya', 'Naik Desai', 2, 'riya@gmail.com', '2015-07-10', '8806698432', 'Female', 'Panjim Goa', 30, 'MCA', 7821);

-- --------------------------------------------------------

--
-- Table structure for table `emp_leave`
--

CREATE TABLE `emp_leave` (
  `empid` int(11) NOT NULL,
  `token` int(11) NOT NULL,
  `start` date NOT NULL DEFAULT '1999-12-28',
  `end` date NOT NULL DEFAULT '1998-02-03',
  `reason` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT '''pending'''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_leave`
--

INSERT INTO `emp_leave` (`empid`, `token`, `start`, `end`, `reason`, `status`) VALUES
(10, 33, '2020-12-23', '2020-12-25', 'sick', 'Approved'),
(10, 35, '2020-12-15', '2020-12-23', 'sick3', 'Approved'),
(12, 37, '2021-01-02', '2020-12-29', 'very sick', 'Cancelled'),
(14, 38, '2020-12-23', '2020-12-26', 'wedding function', 'Approved'),
(10, 39, '2020-12-19', '2020-12-24', 'sick', 'pending'),
(7, 40, '2020-12-22', '2020-12-26', 'wedding', 'Cancelled'),
(10, 41, '2020-12-23', '2020-12-30', 'Vacation', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `pid` int(11) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `due_date` date NOT NULL DEFAULT '1999-12-28'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`pid`, `pname`, `due_date`) VALUES
(3, 'firstpro', '2020-12-05'),
(121, 'Pro2', '2021-01-10'),
(1001, 'prol', '2020-12-26'),
(1991, 'ProjectEmp', '2020-12-31'),
(7821, 'Myproject1', '2020-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `salary_assign`
--

CREATE TABLE `salary_assign` (
  `empid` int(11) NOT NULL,
  `deduction` int(11) NOT NULL,
  `sal_date` date NOT NULL DEFAULT '1998-02-02',
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salary_assign`
--

INSERT INTO `salary_assign` (`empid`, `deduction`, `sal_date`, `total`) VALUES
(9, 0, '2020-12-01', 12),
(10, 8, '2020-12-01', -388),
(17, 0, '2020-12-01', 80),
(18, 0, '2020-12-01', 30);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `pass`) VALUES
(101, 'minulii'),
(102, 'mayu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`deptid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `emp_leave`
--
ALTER TABLE `emp_leave`
  ADD PRIMARY KEY (`token`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `salary_assign`
--
ALTER TABLE `salary_assign`
  ADD PRIMARY KEY (`empid`,`sal_date`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `deptid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `empid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `emp_leave`
--
ALTER TABLE `emp_leave`
  MODIFY `token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19090;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `salary_assign`
--
ALTER TABLE `salary_assign`
  ADD CONSTRAINT `emp_cons` FOREIGN KEY (`empid`) REFERENCES `employee` (`empid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
