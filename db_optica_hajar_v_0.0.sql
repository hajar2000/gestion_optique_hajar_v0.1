-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2022 at 01:11 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_optic`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `codeBrand` int(11) NOT NULL,
  `mark` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`codeBrand`, `mark`, `type`, `categorie`) VALUES
(1, 'Reiban', 'Medical', 1),
(2, 'Reiban', 'Protection', 2);

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `codeCategorie` int(11) NOT NULL,
  `labellcategorie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`codeCategorie`, `labellcategorie`) VALUES
(1, 'Optique'),
(2, 'Solaire');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `codeClient` int(250) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `login` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`codeClient`, `nom`, `prenom`, `telephone`, `adresse`, `mail`, `login`, `password`) VALUES
(8, 'Ali Mohamed', '', '', '', '', '', ''),
(20, 'Ali Mohamed Soucou', '', '', '', '', 'mohamed008', ''),
(21, 'Ali Mohamed Soucou', '', '', '', '', 'miti008', ''),
(23, 'Ali Mohamed Soucou', 'miti008', '0676993319', 'Hy elmassira 3 av e N 138', 'mohamediti04@gmail.com', 'miti00008', 'ed8c4bf7e75a068719e0bf8e40927cd8'),
(30, 'Mohamed', 'Mohamed', '06758854885', 'Hay elmassira 3 tranche 3 Av e N 138, casablanca Moroc', 'Fhimi@gamil.com', 'Fhimi004', '9c6cee57efec84e431c00fa1b6ceb5e4'),
(31, 'Hanane', 'Bouhmadi', '03365885', 'hukd marakech', 'bouhmadi@gmail.com', 'Hannae002', '0acee087f46a07af6abcc8f293c80a0c'),
(34, 'HananefH', 'BouhmadifM', '03365885', 'hukd marakech', 'bouhmadi@gmail.com', 'Hannae00529', '0acee087f46a07af6abcc8f293c80a0c'),
(35, 'Hananef1', 'BouhmadifM5', '033658854', 'hukd marakech', 'bouhmadi@gmail.com', 'Hannae1', '0acee087f46a07af6abcc8f293c80a0c'),
(36, 'Karim', 'Bouhmadi', '03365885', 'hhii', 'jihan5e@gamil.com', 'Hannae12', '202cb962ac59075b964b07152d234b70'),
(38, 'Nacer', 'Haddar', '0675885566', 'Hay elmassira 3 tranche 3 Av e N 138, casablanca Moroc', 'nacer@gmail.com', 'nacer04', '202cb962ac59075b964b07152d234b70'),
(39, 'imitech', 'imitech', '0676993319', 'fsdfsd', 'imitech@gmail.com', 'mohamediti04@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE `commande` (
  `codeCommande` int(11) NOT NULL,
  `dateCommande` datetime NOT NULL,
  `codeClient` int(125) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commande`
--

INSERT INTO `commande` (`codeCommande`, `dateCommande`, `codeClient`) VALUES
(4, '2022-04-24 00:00:00', 8),
(5, '2022-04-24 01:04:13', 8),
(6, '2022-04-24 01:05:27', 8),
(9, '2022-04-24 00:00:00', 39),
(10, '2022-04-24 00:00:00', 39),
(11, '2022-04-24 00:00:00', 39),
(12, '2022-04-24 00:00:00', 39),
(13, '2022-04-26 00:00:00', 39),
(14, '2022-04-27 00:00:00', 39);

-- --------------------------------------------------------

--
-- Table structure for table `lignecommande`
--

CREATE TABLE `lignecommande` (
  `codeLigneCommande` int(11) NOT NULL,
  `codeCommande` int(11) NOT NULL,
  `qantite` int(11) NOT NULL,
  `prixTotal` double NOT NULL,
  `codeProduit` int(125) DEFAULT NULL,
  `codeOrdonance` int(125) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lignecommande`
--

INSERT INTO `lignecommande` (`codeLigneCommande`, `codeCommande`, `qantite`, `prixTotal`, `codeProduit`, `codeOrdonance`) VALUES
(1, 13, 4, 600, 1, 1),
(2, 13, 1, 255, 2, 1),
(3, 13, 2, 700, 5, 1),
(4, 14, 1, 150, 1, 1),
(5, 14, 1, 255, 2, 1),
(6, 14, 2, 700, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ordonance`
--

CREATE TABLE `ordonance` (
  `codeOrdonance` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordonance`
--

INSERT INTO `ordonance` (`codeOrdonance`, `photo`) VALUES
(1, 'ord1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `codeProduit` int(11) NOT NULL,
  `labell` varchar(100) NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `quantite` int(200) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `rank` int(10) NOT NULL,
  `codeBrand` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`codeProduit`, `labell`, `prix`, `quantite`, `photo`, `rank`, `codeBrand`) VALUES
(1, 'Produit 1', '150', 100, 'p1.png', 5, 1),
(2, 'produit2', '255', 10, 'p2.png', 3, 2),
(5, 'Produit4', '350', 30, 'p4.jpg', 1, 2),
(6, 'Produit4', '350', 30, 'p4.jpg', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `codeProfil` int(11) NOT NULL,
  `labellProfil` varchar(255) NOT NULL,
  `statusProfil` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`codeProfil`, `labellProfil`, `statusProfil`) VALUES
(1, 'admin', 1),
(2, 'user', 1),
(3, 'Manager', 1),
(4, 'Super Viseur', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `codeUser` int(11) NOT NULL,
  `codeClient` int(255) NOT NULL,
  `codeProfil` int(11) NOT NULL,
  `statusUser` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`codeUser`, `codeClient`, `codeProfil`, `statusUser`) VALUES
(1, 35, 2, 1),
(2, 36, 2, 1),
(3, 38, 2, 1),
(4, 39, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `usersprofil`
--

CREATE TABLE `usersprofil` (
  `codeUserProfil` int(11) NOT NULL,
  `codeUser` int(11) NOT NULL,
  `codeProfile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`codeBrand`),
  ADD KEY `fkCategorieBrand` (`categorie`) USING BTREE;

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`codeCategorie`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`codeClient`),
  ADD UNIQUE KEY `uniquelogin` (`login`);

--
-- Indexes for table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`codeCommande`),
  ADD KEY `codeClient` (`codeClient`);

--
-- Indexes for table `lignecommande`
--
ALTER TABLE `lignecommande`
  ADD PRIMARY KEY (`codeLigneCommande`),
  ADD KEY `codeCommande` (`codeCommande`),
  ADD KEY `codeProduit` (`codeProduit`),
  ADD KEY `codeOrdonance` (`codeOrdonance`);

--
-- Indexes for table `ordonance`
--
ALTER TABLE `ordonance`
  ADD PRIMARY KEY (`codeOrdonance`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`codeProduit`),
  ADD KEY `CodeBrand` (`codeBrand`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`codeProfil`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`codeUser`),
  ADD KEY `codeProfil` (`codeProfil`),
  ADD KEY `codeClient` (`codeClient`);

--
-- Indexes for table `usersprofil`
--
ALTER TABLE `usersprofil`
  ADD PRIMARY KEY (`codeUserProfil`),
  ADD KEY `codeUser` (`codeUser`),
  ADD KEY `codeProfile` (`codeProfile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `codeBrand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `codeCategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `codeClient` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `commande`
--
ALTER TABLE `commande`
  MODIFY `codeCommande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `lignecommande`
--
ALTER TABLE `lignecommande`
  MODIFY `codeLigneCommande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ordonance`
--
ALTER TABLE `ordonance`
  MODIFY `codeOrdonance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `codeProduit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `codeProfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `codeUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usersprofil`
--
ALTER TABLE `usersprofil`
  MODIFY `codeUserProfil` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `brand`
--
ALTER TABLE `brand`
  ADD CONSTRAINT `fkbrandCodeCategorie` FOREIGN KEY (`categorie`) REFERENCES `categorie` (`codeCategorie`);

--
-- Constraints for table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `fk_code_client` FOREIGN KEY (`codeClient`) REFERENCES `client` (`codeClient`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lignecommande`
--
ALTER TABLE `lignecommande`
  ADD CONSTRAINT `fk_code_ordonance` FOREIGN KEY (`codeOrdonance`) REFERENCES `ordonance` (`codeOrdonance`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_code_produit` FOREIGN KEY (`codeProduit`) REFERENCES `produit` (`codeProduit`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fkcommandetCodelignecommande` FOREIGN KEY (`codeCommande`) REFERENCES `commande` (`codeCommande`);

--
-- Constraints for table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `fkproduitCodeBrnad` FOREIGN KEY (`codeBrand`) REFERENCES `brand` (`codeBrand`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fkusersCodeClient` FOREIGN KEY (`codeClient`) REFERENCES `client` (`codeClient`),
  ADD CONSTRAINT `fkusersCodeProfil` FOREIGN KEY (`codeProfil`) REFERENCES `profil` (`codeProfil`);

--
-- Constraints for table `usersprofil`
--
ALTER TABLE `usersprofil`
  ADD CONSTRAINT `fkusersProfilCodeUsers` FOREIGN KEY (`codeUser`) REFERENCES `users` (`codeUser`),
  ADD CONSTRAINT `fkusersProfilCodeprofil` FOREIGN KEY (`codeProfile`) REFERENCES `profil` (`codeProfil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
