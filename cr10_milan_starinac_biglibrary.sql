-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2019 at 04:38 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr10_milan_starinac_biglibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `authorId` mediumint(9) NOT NULL,
  `authorFirstName` varchar(25) DEFAULT NULL,
  `authorLastName` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`authorId`, `authorFirstName`, `authorLastName`) VALUES
(1, 'Steven', 'Pressfield'),
(2, 'Matteo', 'Garrone'),
(3, 'Christopher', 'Nolan'),
(4, 'Danny', 'Boyle'),
(5, 'Martin', 'Scorcesse'),
(6, 'Tommy', 'Jaud'),
(7, 'Michael', 'Altinger');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genreId` smallint(2) NOT NULL,
  `genre` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genreId`, `genre`) VALUES
(1, 'history'),
(2, 'thriller'),
(3, 'adventure'),
(4, 'drama'),
(5, 'comedy');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `mediaID` mediumint(9) NOT NULL,
  `FK_author` mediumint(9) DEFAULT NULL,
  `FK_genre` smallint(2) NOT NULL,
  `title` varchar(30) DEFAULT NULL,
  `mediaDescription` varchar(255) NOT NULL,
  `image` blob DEFAULT NULL,
  `isbn_ean` varchar(30) DEFAULT NULL,
  `publishDate` date DEFAULT NULL,
  `FK_publisher` smallint(4) DEFAULT NULL,
  `FK_mediatype` smallint(2) DEFAULT NULL,
  `FK_status` smallint(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`mediaID`, `FK_author`, `FK_genre`, `title`, `mediaDescription`, `image`, `isbn_ean`, `publishDate`, `FK_publisher`, `FK_mediatype`, `FK_status`) VALUES
(1, 1, 1, 'Tides of War', 'Tides of War is a novel by Steven Pressfield, chronicling the Peloponnesian War.', 0x68747470733a2f2f6173736574732e7468616c69612e6d656469612f696d672f30333630373132362d30302d30302e6a7067, '978-0-553-38139-9', '2001-08-01', 1, 2, 1),
(2, 1, 1, 'Gates of Fire', 'Novel by Steven Pressfield that recounts the Battle of Thermopylae through Xeones one of only three Greek survivors of the battle', 0x68747470733a2f2f6173736574732e7468616c69612e6d656469612f696d672f30333937313737362d30302d30302e6a7067, '978-0-385-49251-5', '1998-10-01', 1, 2, 1),
(3, 1, 1, 'Killing Rommel', 'Historical fiction novel by Steven Pressfield set in North Africa during World War Two. The book follows the actions of the British Long Range Desert Group.', 0x68747470733a2f2f6173736574732e7468616c69612e6d656469612f696d672f31363930363530302d30302d30302e6a7067, '978-0-7679-2616-4', '2009-06-01', 1, 2, 2),
(4, 1, 1, 'The Lions Gate', 'The thrilling true story of one of the most unlikely and astonishing military victories in history.', 0x68747470733a2f2f6173736574732e7468616c69612e6d656469612f696d672f34303336303731352d30302d30302e6a7067, '978-1-59523-119-2', '2015-05-26', 1, 2, 2),
(5, 3, 2, 'Memento', 'A man with short-term memory loss attempts to track down his wife murderer', 0x68747470733a2f2f6173736574732e7468616c69612e6d656469612f696d672f32353930353032312d30302d30302e6a7067, '4260041334458', '2015-04-15', 2, 3, 1),
(6, 2, 2, 'Gommorah', 'Ciro disregards tradition in his attempt to become the next boss of his crime syndicate.', 0x68747470733a2f2f6173736574732e7468616c69612e6d656469612f696d672f3134323636373234332d30302d30302e6a7067, '4009750306994', '2019-08-01', 2, 3, 1),
(7, 4, 3, 'Slummdog Millionaire', 'A Mumbai teenager reflects on his life after being accused of cheating on the Indian version of  Who Wants to be a Millionaire?', 0x68747470733a2f2f6173736574732e7468616c69612e6d656469612f696d672f31373139333539342d30302d30302e6a7067, '4260170490124', '2009-10-26', 2, 3, 1),
(8, 4, 4, 'Steve Jobs', 'Steve Jobs takes us behind the scenes of the digital revolution, to paint a portrait of the man at its epicenter.', 0x68747470733a2f2f6173736574732e7468616c69612e6d656469612f696d672f34343130313236392d30302d30302e6a7067, '5053083065409', '2016-03-24', 3, 3, 2),
(9, 4, 4, 'The Beach', 'Vicenarian Richard travels to Thailand and finds himself in possession of a strange map. Rumours state that it leads to a solitary beach paradise, a tropical bliss.', 0x68747470733a2f2f6173736574732e7468616c69612e6d656469612f696d672f33353035353336372d30302d30302e6a7067, '4010232059826', '2013-03-15', 3, 3, 1),
(10, 5, 5, 'Wolf of Wall Street', 'Based on the true story of Jordan Belfort, from his rise to a wealthy stock-broker living the high life to his fall involving crime, corruption and the federal government.', 0x68747470733a2f2f6173736574732e7468616c69612e6d656469612f696d672f33383438393934382d30302d30302e6a7067, '5050582968774', '2014-05-13', 2, 3, 1),
(11, 5, 4, 'Gangs of New York', 'In 1862, Amsterdam Vallon returns to the Five Points area of New York City seeking revenge against Bill the Butcher, his fathers killer.', 0x68747470733a2f2f6173736574732e7468616c69612e6d656469612f696d672f34363139393433392d30302d30302e6a7067, '4013549081955', '2016-11-25', 3, 3, 1),
(12, 5, 4, 'Taxi Driver', 'A mentally unstable veteran works as a nighttime taxi driver in New York City, where the perceived decadence and sleaze fuels his urge for violent action', 0x68747470733a2f2f6173736574732e7468616c69612e6d656469612f696d672f30313735333639362d30302d30302e6a7067, '4030521100190', '1999-11-26', 2, 3, 2),
(13, 6, 5, 'Einen Scheiss muss ich', 'Das Manifest gegen das schlechte Gewissen – Aus dem Amerikanischen erfunden von Tommy Jaud', 0x68747470733a2f2f6173736574732e7468616c69612e6d656469612f696d672f34353235353333342d30302d30302e6a7067, '978-3-596-03228-0	', '2016-11-26', 4, 2, 1),
(14, 6, 5, 'Hummeldumm	', 'Der Bestseller – mit Daumenkino!', 0x68747470733a2f2f6173736574732e7468616c69612e6d656469612f696d672f32393031353839362d30302d30302e6a7067, '978-3-596-17476-8', '2012-03-08', 4, 2, 2),
(15, 6, 5, 'Der Loewe buellt', 'Kein Mann kann vor seinen Problemen fliehen – zumindest nicht mit seiner Mutter.', 0x68747470733a2f2f6173736574732e7468616c69612e6d656469612f696d672f3134303332373532352d30302d30302e6a7067, '978-3-651-02558-5', '2019-05-14', 4, 2, 1),
(16, 6, 5, 'Vollidiot', 'Herrlich! Peinlich! Romantisch! Filmreif! Der lustigste Roman seit Erfindung des Gurkenrennen', 0x68747470733a2f2f6173736574732e7468616c69612e6d656469612f696d672f30363339353233362d30302d30302e6a7067, '978-3-596-16360-1', '2006-02-04', 4, 2, 1),
(17, 7, 5, 'Hell', 'Das Helle, das sind immer die anderen', 0x68747470733a2f2f6173736574732e7468616c69612e6d656469612f696d672f37373631363133372d30302d30302e6a7067, '4034677413333', '2017-06-10', 4, 1, 2),
(18, 7, 5, 'Meine heilige Familie', 'Der blanke Terror und das innere Wehgeschrei der bayerischen Männlichkeit, nur notdürftig überdeckt mit weihnachtlicher Stubenmusik.', 0x68747470733a2f2f6173736574732e7468616c69612e6d656469612f696d672f32393737343339392d30302d30302e6a7067, '4034677400012', '2011-11-04', 4, 1, 1),
(19, 7, 5, 'Auch das Christkind muss dran ', 'Eine weihnachtliche Lesung aus dem Buch von Michael Altinger.', 0x68747470733a2f2f6173736574732e7468616c69612e6d656469612f696d672f3134333534383733312d30302d30302e6a7067, '978-3-86646-741-5', '2019-10-01', 4, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `mediastatus`
--

CREATE TABLE `mediastatus` (
  `statusId` smallint(2) NOT NULL,
  `status` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mediastatus`
--

INSERT INTO `mediastatus` (`statusId`, `status`) VALUES
(1, 'available'),
(2, 'reserved');

-- --------------------------------------------------------

--
-- Table structure for table `mediatype`
--

CREATE TABLE `mediatype` (
  `mediaTypeId` smallint(2) NOT NULL,
  `mediaTypeName` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mediatype`
--

INSERT INTO `mediatype` (`mediaTypeId`, `mediaTypeName`) VALUES
(1, 'cd'),
(2, 'book'),
(3, 'dvd');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `publisherID` smallint(4) NOT NULL,
  `publisherName` varchar(25) DEFAULT NULL,
  `publisherAddress` varchar(30) DEFAULT NULL,
  `publisherCity` varchar(30) NOT NULL,
  `publisherCounty` varchar(25) NOT NULL,
  `publishersize_FK` smallint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`publisherID`, `publisherName`, `publisherAddress`, `publisherCity`, `publisherCounty`, `publishersize_FK`) VALUES
(1, 'Bantam books USA', '125th Street', 'New York City', 'USA', 2),
(2, 'EuroVideo Medien', 'Sonnenstraße 21', 'Munchen', 'Germany', 3),
(3, 'Universal Pictures', 'Neubaugasse 1', 'Wien', 'Austria', 3),
(4, 'Fischer Taschenbuch', 'Hedderichstraße 114', 'Frankfurt am Main', 'Germany', 1);

-- --------------------------------------------------------

--
-- Table structure for table `publishersize`
--

CREATE TABLE `publishersize` (
  `publisherSizeId` smallint(2) NOT NULL,
  `publiserSize` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `publishersize`
--

INSERT INTO `publishersize` (`publisherSizeId`, `publiserSize`) VALUES
(1, 'small'),
(2, 'medium'),
(3, 'large');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`authorId`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genreId`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`mediaID`),
  ADD KEY `FK_author` (`FK_author`),
  ADD KEY `FK_publisher` (`FK_publisher`),
  ADD KEY `FK_mediatype` (`FK_mediatype`),
  ADD KEY `FK_status` (`FK_status`),
  ADD KEY `FK_genre` (`FK_genre`);

--
-- Indexes for table `mediastatus`
--
ALTER TABLE `mediastatus`
  ADD PRIMARY KEY (`statusId`);

--
-- Indexes for table `mediatype`
--
ALTER TABLE `mediatype`
  ADD PRIMARY KEY (`mediaTypeId`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisherID`),
  ADD KEY `publishersize_FK` (`publishersize_FK`);

--
-- Indexes for table `publishersize`
--
ALTER TABLE `publishersize`
  ADD PRIMARY KEY (`publisherSizeId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `authorId` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genreId` smallint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mediastatus`
--
ALTER TABLE `mediastatus`
  MODIFY `statusId` smallint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mediatype`
--
ALTER TABLE `mediatype`
  MODIFY `mediaTypeId` smallint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `publisherID` smallint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `publishersize`
--
ALTER TABLE `publishersize`
  MODIFY `publisherSizeId` smallint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`FK_author`) REFERENCES `author` (`authorId`),
  ADD CONSTRAINT `media_ibfk_2` FOREIGN KEY (`FK_publisher`) REFERENCES `publisher` (`publisherID`),
  ADD CONSTRAINT `media_ibfk_3` FOREIGN KEY (`FK_mediatype`) REFERENCES `mediatype` (`mediaTypeId`),
  ADD CONSTRAINT `media_ibfk_4` FOREIGN KEY (`FK_status`) REFERENCES `mediastatus` (`statusId`),
  ADD CONSTRAINT `media_ibfk_5` FOREIGN KEY (`FK_genre`) REFERENCES `genre` (`genreId`);

--
-- Constraints for table `publisher`
--
ALTER TABLE `publisher`
  ADD CONSTRAINT `publisher_ibfk_1` FOREIGN KEY (`publishersize_FK`) REFERENCES `publishersize` (`publisherSizeId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
