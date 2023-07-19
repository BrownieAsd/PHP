-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 05, 2019 at 09:06 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `login` char(50) COLLATE utf8_polish_ci NOT NULL,
  `pass` char(50) COLLATE utf8_polish_ci NOT NULL,
  `admin` char(3) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `login`, `pass`, `admin`) VALUES
(26, 'aaaaaaaa', '81dc9bdb52d04dc20036dbd8313ed055', 'no'),
(27, 'david', '172522ec1028ab781d9dfd17eaca4427', 'no'),
(28, 'thomas', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'yes'),
(29, 'root', '21232f297a57a5a743894a0e4a801fc3', 'yes'),
(30, 'boi', '94f5cba7388a7342d459f9691796f911', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `text` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `dat` date DEFAULT NULL,
  `title` varchar(25) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `text`, `dat`, `title`) VALUES
(2, 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam non justo orci, eget aliquet augue. Suspendisse sollicitudin turpis eu mi ornare viverra.     01.01.2011 Nowa promocja      Cum so', '2019-05-09', 'nascetur ridiculus mus'),
(73, 'hello everyone, today we have a very nice day in northland, etc.etc.', '2019-06-03', 'hello everyone'),
(74, 'hello everybody here', '2019-06-03', 'good morning'),
(78, 'I am your host maxmoefoepokemon', '2019-06-03', 'hello'),
(79, 'MASSIVE LEGEND HERE', '2019-06-03', 'Hey Vsauce,'),
(80, 'hello', '2019-06-05', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `zdjecia`
--

CREATE TABLE `zdjecia` (
  `id` mediumint(9) NOT NULL,
  `nazwa` varchar(60) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `zdjecia`
--

INSERT INTO `zdjecia` (`id`, `nazwa`) VALUES
(1, 'boat.jpg'),
(2, 'christ.jpg'),
(3, 'aiai.png'),
(4, 'hills.jpg'),
(5, 'Auckland5.JPG'),
(7, 'sky.jpg'),
(8, 'kiwi.jpg'),
(10, 'Auckland6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zdjecia`
--
ALTER TABLE `zdjecia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `zdjecia`
--
ALTER TABLE `zdjecia`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
