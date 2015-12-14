-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Dec 08, 2015 at 01:05 PM
-- Server version: 5.5.42
-- PHP Version: 5.5.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `wsf-exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `email` text,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`) VALUES
(1, 'admin@admin.fr', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE `films` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `année` int(11) DEFAULT NULL,
  `durée` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `réalisateur` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `acteurs` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `genres` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `photo` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `isActive` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`id`, `nom`, `année`, `durée`, `réalisateur`, `acteurs`, `genres`, `photo`, `isActive`) VALUES
(2, 'The Dark Knight, Le Chevalier Noir', 2008, '2h27min', 'Christopher Nolan', 'Heath Ledger', 'Action', 'http://fr.web.img2.acsta.net/medias/nmedia/18/63/97/89/18949761.jpg', 1),
(3, 'Mommy', 2014, '2h34min', 'Xavier Dolan', 'Viviane Pascal', 'Drame', 'https://41.media.tumblr.com/64a0d6d20e5e419b4b894aef542a7abb/tumblr_nm5m3etarH1szjhaso1_500.png', 1),
(4, 'Intouchables', 2011, '1h52min', 'Eric Toledano', 'François Cluzet', 'Comédie', 'http://ourfaithinaction.net/wp-content/uploads/2012/07/the-intouchables-movie-poster1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `youtubers`
--

CREATE TABLE `youtubers` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `description` varchar(2048) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `isActive` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `youtubers`
--
ALTER TABLE `youtubers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `youtubers`
--
ALTER TABLE `youtubers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;