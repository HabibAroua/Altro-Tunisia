-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 16, 2018 at 08:33 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.0.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `altro_tunisia`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `login` varchar(50) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `date_inscription` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`login`, `password`, `nom`, `prenom`, `date_inscription`) VALUES
('user', 'user', 'user', 'user', '2018-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `libelle` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id`, `libelle`) VALUES
(1, 'Laptop'),
(2, 'Samart phone'),
(3, 'Television');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `login` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `date_inscription` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`login`, `password`, `nom`, `prenom`, `email`, `date_naissance`, `date_inscription`) VALUES
('Bassem_khlil', '9cf95dacd226dcf43da376cdb6cbba7035218921', 'Bassem', 'Khelil', 'bassem.khlil@sesame.com.tn', '1988-02-04', '2018-12-15'),
('Foulen1', 'c0302cb832da4f325c45949db17f3f98386a305d', 'Foulen', 'Ben foulen ben salah', 'foulen@gmail.com', '1971-02-02', '2018-12-14'),
('HabibAroua', 'f164396476a356a5bdef3970fd1978d3f2b99571', 'Habib', 'Aroua', 'habib.aroua@sesame.com.tn', '1994-11-15', '2018-12-09'),
('imenb', 'c0302cb832da4f325c45949db17f3f98386a305d', 'imen', 'sourgfrf', 'imen@gmail.com', '1993-03-18', '2018-12-15'),
('ImenTr', '9cf95dacd226dcf43da376cdb6cbba7035218921', 'Imen', 'Trabelsi', 'imen.trablsi@sesame.com.tn', '1993-09-28', '2018-12-09'),
('ManelTrabelsi', '9cf95dacd226dcf43da376cdb6cbba7035218921', 'Manel', 'Trabelsi', 'manel.trabelsi@sesame.com.tn', '1993-11-18', '2018-12-09');

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `ref` varchar(50) NOT NULL,
  `image` varchar(250) DEFAULT NULL,
  `libelle` varchar(50) DEFAULT NULL,
  `prix` int(11) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `date_ajout` date DEFAULT NULL,
  `id_cat` int(11) DEFAULT NULL,
  `login_admin` varchar(50) DEFAULT NULL,
  `quantite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`ref`, `image`, `libelle`, `prix`, `description`, `date_ajout`, `id_cat`, `login_admin`, `quantite`) VALUES
('1ddsd', 'iPhone6-32.jpg', 'IPhone 6Â²Â²', 2500, 'un nouveau modele   ', '2018-12-09', 2, '', 0),
('7889d', 'lenovo-laptop-thinkpad-t580.png', 'Lenovo Laptop Thinkpad1', 1200, 'Ram 5G a une bonne qualitÃ© lenovo-laptop-thinkpad-t580.png     ', '2018-12-09', 1, '', 1),
('7889dd', 'iPhone6-32.jpg', 'Lenovo Laptop Thinkpad T581', 2000, 'Camera HD  ', '2018-12-09', 2, '', 1),
('78ddd', 'lenovo-laptop-thinkpad-t580.png', 'Lenovo Laptop Thinkpad T580', 900, 'Voici notre nouveau laptop nouvel gÃ©nÃ©ration   ', '2018-12-09', 1, '', 3),
('gtsss', 'Samsung.jpg', 'Samsung 5d', 500, 'Un nouveau model de samsung ', '2018-12-14', 3, '', 1),
('lo777', 'Samsung_UAE.jpg', 'Samsung UAE', 4000, 'Un nouveau model ', '2018-12-14', 3, '', 10),
('Rddfdsfd', 'huawei.png', 'Huwaei bassaem', 750, 'eaeaeaearfara ', '2018-12-15', 2, '', 19);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `login` varchar(50) DEFAULT NULL,
  `ref_Prod` varchar(50) DEFAULT NULL,
  `date_reservation` date DEFAULT NULL,
  `nb` int(11) DEFAULT NULL,
  `quantite` int(11) DEFAULT NULL,
  `reduction` int(11) DEFAULT NULL,
  `nbres` int(11) DEFAULT NULL,
  `achat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`login`, `ref_Prod`, `date_reservation`, `nb`, `quantite`, `reduction`, `nbres`, `achat`) VALUES
('HabibAroua', '1ddsd', '2018-12-13', 7, 1, 40, 6, NULL),
('HabibAroua', '78ddd', '2018-12-13', 8, 3, 40, 6, NULL),
('HabibAroua', '78ddd', '2018-12-13', 10, 1, 40, 6, NULL),
('HabibAroua', '1ddsd', '2018-12-14', 11, 3, 40, 6, NULL),
('HabibAroua', '7889dd', '2018-12-14', 12, 6, 40, 6, NULL),
('HabibAroua', '78ddd', '2018-12-14', 13, 1, 40, 6, NULL),
('HabibAroua', '78ddd', '2018-12-14', 14, 1, 40, 6, NULL),
('Foulen1', '7889d', '2018-12-14', 17, 3, 40, 6, NULL),
('ManelTrabelsi', 'gtsss', '2018-12-14', 18, 3, 40, 6, 1),
('ManelTrabelsi', 'lo777', '2018-12-14', 19, 6, 40, 6, 1),
('ManelTrabelsi', 'lo777', '2018-12-14', 20, 1, 40, 6, 1),
('ManelTrabelsi', '78ddd', '2018-12-15', 21, 2, 40, 6, 1),
('ManelTrabelsi', '1ddsd', '2018-12-15', 22, 2, 40, 6, 1),
('ManelTrabelsi', '1ddsd', '2018-12-12', 23, 1, 40, 6, 1),
('ManelTrabelsi', '1ddsd', '2018-12-15', 24, 1, 40, 6, 1),
('ImenTr', '78ddd', '2018-12-15', 25, 1, 40, 6, 1),
('ImenTr', '7889d', '2018-12-15', 26, 1, 40, 6, NULL),
('imenb', '78ddd', '2018-12-15', 27, 1, NULL, NULL, NULL),
('Bassem_khlil', 'gtsss', '2018-12-15', 29, 3, NULL, NULL, 1),
('Bassem_khlil', '1ddsd', '2018-12-15', 30, 1, NULL, NULL, 1),
('Bassem_khlil', 'gtsss', '2018-12-15', 31, 2, NULL, NULL, 1),
('Bassem_khlil', 'lo777', '2018-12-15', 32, 4, NULL, NULL, 1),
('Bassem_khlil', '7889dd', '2018-12-15', 33, 1, NULL, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`login`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`login`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`ref`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD UNIQUE KEY `nb` (`nb`),
  ADD KEY `fk2` (`login`),
  ADD KEY `fk3` (`ref_Prod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `fk2` FOREIGN KEY (`login`) REFERENCES `client` (`login`),
  ADD CONSTRAINT `fk3` FOREIGN KEY (`ref_Prod`) REFERENCES `produit` (`ref`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
