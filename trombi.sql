-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 30, 2021 at 07:06 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trombi`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `dat` date NOT NULL,
  `lib` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`dat`, `lib`) VALUES
('2019-05-02', 'toto est née'),
('2019-06-05', 'toto apprend à marcher'),
('2019-07-01', 'toto fait du 100m en 3,2 seconde'),
('2019-08-10', 'toto à fêté c\'est 4 ans à miami'),
('2019-09-21', 'toto sort un single sur la vie'),
('2020-01-02', 'toto etudie à havard a 8 ans'),
('2020-02-11', 'toto créer sa société i-TechMôme'),
('2020-06-17', 'toto est devenu millardaire et rachète google'),
('2020-07-24', 'toto continue sur sa lancer et rachète microsoft'),
('2020-08-22', 'toto lance le premier navigateur à IA integré');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `codSec` varchar(10) NOT NULL,
  `libSec` varchar(50) DEFAULT NULL,
  `datDebSec` date DEFAULT NULL,
  `nbStag` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`codSec`, `libSec`, `datDebSec`, `nbStag`) VALUES
('DigCod', 'Digital Codeur', '2019-05-22', 14),
('DigSta', 'Digital Stater', '2019-08-01', 14),
('Dw', 'Designer web', '2020-10-12', 0),
('Dwwm', 'Developeur web et web mobile', '2020-04-03', 14);

-- --------------------------------------------------------

--
-- Table structure for table `stagiaires`
--

CREATE TABLE `stagiaires` (
  `codSec` varchar(10) NOT NULL,
  `codSta` varchar(10) NOT NULL,
  `nomSta` varchar(25) DEFAULT NULL,
  `preSta` varchar(25) DEFAULT NULL,
  `datNaisSta` date DEFAULT NULL,
  `villeSta` varchar(25) DEFAULT NULL,
  `interneSta` char(1) DEFAULT NULL,
  `gsmSta` int(11) DEFAULT NULL,
  `mailSta` varchar(50) DEFAULT NULL,
  `obsvSta` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stagiaires`
--

INSERT INTO `stagiaires` (`codSec`, `codSta`, `nomSta`, `preSta`, `datNaisSta`, `villeSta`, `interneSta`, `gsmSta`, `mailSta`, `obsvSta`) VALUES
('DigCod', 'E1', 'CHECCHI', 'Sébastien', '1982-07-01', 'saint-adda', 'N', 695147741, 'toto@to.to', 'NA'),
('DigCod', 'E2', 'CONV', 'AVA', '1982-06-01', 'saint-adda', 'N', 695147741, 'toto@to.to', 'NA'),
('DigCod', 'E3', 'DAMOUR', 'Celiane', '1982-05-01', 'saint-adda', 'N', 695147741, 'toto@to.to', 'NA'),
('DigCod', 'E4', 'CAZAL', 'Océane', '1982-04-01', 'saint-adda', 'N', 695147741, 'toto@to.to', 'NA'),
('DigSta', 'E1', 'LEFRANC', 'Romain', '1982-03-01', 'saint-adda', 'N', 695147741, 'toto@to.to', 'NA'),
('DigSta', 'E2', 'MATINE', 'Bruno', '1982-02-01', 'saint-adda', 'N', 695147741, 'toto@to.to', 'NA'),
('Dwwm', 'E1', 'PICARD', 'Sylvain', '1982-01-01', 'saint-adda', 'N', 695147741, 'toto@to.to', 'NA'),
('Dwwm', 'E2', 'YAN-SIN', 'Laily', '1982-12-01', 'saint-adda', 'N', 695147741, 'toto@to.to', 'NA'),
('Dwwm', 'E3', 'BOB', 'Lee', '1982-11-01', 'saint-adda', 'N', 695147741, 'toto@to.to', 'NA'),
('Dwwm', 'E4', 'DAMOUR', 'Iris', '1982-10-01', 'saint-adda', 'N', 695147741, 'toto@to.to', 'NA'),
('Dwwm', 'E5', 'BREDE', 'Jeanblon', '1982-09-01', 'saint-adda', 'Y', 695147741, 'toto@to.to', 'NA'),
('Dwwm', 'E6', 'SOUCE', 'Douitre', '1982-08-01', 'saint-adda', 'Y', 695147741, 'toto@to.to', 'NA');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `log` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `rol` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`log`, `pwd`, `rol`) VALUES
('a@a.a', 'a', 'M'),
('admin@admin.com', 'admin123', 'A'),
('to@to.to', 'toto', 'M');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`dat`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`codSec`);

--
-- Indexes for table `stagiaires`
--
ALTER TABLE `stagiaires`
  ADD PRIMARY KEY (`codSec`,`codSta`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`log`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stagiaires`
--
ALTER TABLE `stagiaires`
  ADD CONSTRAINT `stagiaires_FK1` FOREIGN KEY (`codSec`) REFERENCES `sections` (`codSec`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
