-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2024 at 06:22 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agriculture`
--

-- --------------------------------------------------------

--
-- Table structure for table `careerdata`
--

CREATE TABLE `careerdata` (
  `id` int(5) NOT NULL,
  `Nam` varchar(200) NOT NULL,
  `Addres` varchar(200) NOT NULL,
  `Qualification` varchar(200) NOT NULL,
  `DoB` date NOT NULL,
  `Mobile` varchar(12) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Exp` varchar(20) NOT NULL,
  `Skill` varchar(300) NOT NULL,
  `Applyfor` varchar(200) NOT NULL,
  `JobTime` varchar(50) NOT NULL,
  `DateandTime` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `Statuss` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `careerdata`
--

INSERT INTO `careerdata` (`id`, `Nam`, `Addres`, `Qualification`, `DoB`, `Mobile`, `Email`, `Exp`, `Skill`, `Applyfor`, `JobTime`, `DateandTime`, `Statuss`) VALUES
(36, 'Solanki gopal', 'Kodinar', 'BE-IT', '2003-04-26', '964806629', 'solankigopalj.1204@gmail.com', 'Freshers', 'Html,Css,Bootstrap,Php,MySql', 'Assistant Manager', '8:00AM TO 4:00PM', '2024-03-27 10:17:35.229501', 'pending'),
(37, 'Keval pandya', 'Talgajarada, Mahuva', 'BE-CE', '2006-01-26', '6956487548', 'kevalpandya123@gmail.com', '2 years', 'Web Development', 'Assistant Manager', '8:00AM TO 4:00PM', '2024-03-27 10:18:07.616022', 'completed'),
(38, 'naman gajera', 'Amreli', 'BCA', '2005-02-26', '8589895748', 'namangajera@gmail.com', '2 years', 'Android,java,kotlin', 'Flutter Developer', '12:00AM TO 8:00AM', '2024-03-27 10:18:37.550144', ''),
(39, 'Bhaliya Akshaykumar M', 'JANTA PLOT-BHAVANI CHAW , MAHUVA', 'BE-IT', '0000-00-00', '9377427987', 'akshaybaraiya456@gmail.com', '2 years', 'Android,java,kotlin', 'Flutter Developer', '8:00AM TO 4:00PM', '2024-03-27 10:19:01.928359', ''),
(40, 'Sondagar Bhagvat', 'Mahuva', 'BE-Mechanical', '2003-08-12', '9366784525', 'sondagarbhagvat25@gmail.com', '2 years', 'Learning, Repairing', 'Maintanance engineer', '4:00PM TO 12:00AM', '2024-04-05 09:40:28.693396', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(5) NOT NULL,
  `username` varchar(200) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `usermessage` varchar(300) NOT NULL,
  `DateandTime` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `Statuss` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `username`, `Email`, `usermessage`, `DateandTime`, `Statuss`) VALUES
(3, 'Ankit Madhudiya', 'ankitmadhudiya@gmail.com', 'i am medical student ', '2024-03-26 22:18:50.141763', 'Pending...'),
(4, 'Ankit Muvadiya', 'ankit4512@gmail.com', 'i am ankit', '2024-03-26 22:18:50.141763', ''),
(5, 'Ankit Muvadiya', 'ankit4512@gmail.com', 'i am ankit', '2024-03-26 22:18:50.141763', ''),
(6, 'Ankit Muvadiya', 'ankit4512@gmail.com', 'i am ankit', '2024-03-26 22:18:50.141763', ''),
(7, 'Rahul Ahir', 'rahulahir96@gmail.com', 'hello guys', '2024-03-26 22:18:50.141763', ''),
(8, 'Nayan bhaliya', 'nayanbhaliya2315@gmail.com', 'i am nayan and i get the product', '2024-03-26 22:18:50.141763', ''),
(9, 'Nayan bhaliya', 'nayanbhaliya2315@gmail.com', 'i am nayan and i get the product', '2024-03-26 22:18:50.141763', '');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(5) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `DateandTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `Email`, `DateandTime`) VALUES
(6, 'akshay', '2024-03-26 22:30:09'),
(7, 'Very nice web', '2024-03-26 22:30:09'),
(8, 'nice website', '2024-03-26 22:30:09');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `sno` int(3) NOT NULL,
  `Product` varchar(300) NOT NULL,
  `yourname` varchar(300) NOT NULL,
  `Email` varchar(300) NOT NULL,
  `Mobile` int(13) NOT NULL,
  `yourmessage` varchar(300) NOT NULL,
  `DateandTime` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `Statuss` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`sno`, `Product`, `yourname`, `Email`, `Mobile`, `yourmessage`, `DateandTime`, `Statuss`) VALUES
(14, 'Mahindra 275 DI XP Plus', 'Nayankumar Bhaliya', 'nayanbhaliya2315@gmail.com', 2147483647, 'hello give me this product', '2024-03-27 09:56:39.150093', 'pending'),
(15, 'INDO Plastic PVC Handle Nose Shovel', 'Solanki Gopalkumar', 'solankigopalj.1204@gmail.com', 964806629, 'can you give me details about this product', '2024-03-27 09:56:39.150093', ''),
(16, 'Jain Turbo', 'Solanki Gopalkumar', 'solankigopalj.1204@gmail.com', 964806629, 'give details about these product', '2024-03-27 09:56:39.150093', ''),
(17, '5035 SD LP Drip Irrigation', 'Keval pandya', 'kevalpandya123@gmail.com', 2147483647, 'Give description about this product', '2024-03-27 09:56:39.150093', ''),
(18, '421P & 421P AG', 'naman gajera', 'namangajera@gmail.com', 2147483647, 'i can buy these product', '2024-03-27 09:56:39.150093', ''),
(19, 'PVC Solvent Cement Bend 30°', 'Kirtan bhimani', 'kirtanbhimani@gmail.com', 2147483647, 'Can you give me this product', '2024-03-27 09:56:39.150093', ''),
(20, 'CPVC Female Threaded Adaptor', 'Kirtan bhimani', 'kirtanbhimani@gmail.com', 2147483647, 'Give me this product details', '2024-03-27 09:56:39.150093', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(3) NOT NULL,
  `userName` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `userName`, `password`) VALUES
(1, 'Akshay Bhaliya', 'akshay2315'),
(2, 'Akshay', 'Akshay@123');

-- --------------------------------------------------------

--
-- Table structure for table `servicedata`
--

CREATE TABLE `servicedata` (
  `id` int(5) NOT NULL,
  `userName` varchar(200) NOT NULL,
  `ServiceType` varchar(200) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contact` varchar(12) NOT NULL,
  `Addres` varchar(250) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Remark` varchar(250) NOT NULL,
  `DateandTime` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `Statuss` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `servicedata`
--

INSERT INTO `servicedata` (`id`, `userName`, `ServiceType`, `Email`, `Contact`, `Addres`, `City`, `Remark`, `DateandTime`, `Statuss`) VALUES
(4, 'Naman Gajera', 'Sprinkler Irrigation', 'namangajera@gmail.com', '9658969856', 'Dhari,Amreli', 'Amreli', 'providing me the great service....', '2024-03-26 10:21:15.849226', ''),
(5, 'naman gajera', 'drip', 'namangajera@gmail.com', '06956874589', 'dgsdgsdg', 'Amreli', 'efewtwtwt', '2024-03-27 09:43:25.550030', 'pending'),
(6, 'Rahul Ahir', 'Green House Repair and Maintain', 'rahulahir96@gmail.com', '09658785986', 'Devali', 'Talaja', 'providing me the great service....', '2024-03-27 09:43:53.843369', ''),
(7, 'Solanki gopal', 'Land Management Service', 'solankigopalj.1204@gmail.com', '964806629', 'Kodinar', 'Kodinar', 'can you providing me the great service ', '2024-03-27 09:44:30.282913', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `careerdata`
--
ALTER TABLE `careerdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicedata`
--
ALTER TABLE `servicedata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `careerdata`
--
ALTER TABLE `careerdata`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `servicedata`
--
ALTER TABLE `servicedata`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
