-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2019 at 10:32 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `CITY_ID` int(11) NOT NULL,
  `CITY_NAME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`CITY_ID`, `CITY_NAME`) VALUES
(1, 'WARSAW'),
(2, 'BYDGOSZCZ'),
(3, 'LAS VEGAS'),
(4, 'PARIS'),
(7, 'LONDON'),
(8, 'STOCKHOLM'),
(9, 'SYDNEY'),
(11, 'KRAKOW'),
(12, 'GENEVE'),
(13, 'FRANKFURT');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `HOTEL_ID` int(11) NOT NULL,
  `HOTEL_NAME` varchar(30) NOT NULL,
  `HOTEL_DESCRIPTION` text NOT NULL,
  `HOTEL_PHONE` varchar(20) NOT NULL,
  `HOTEL_STARS` int(10) NOT NULL,
  `HOTEL_STREET` varchar(50) NOT NULL,
  `HOTEL_STREET_NO` int(255) NOT NULL,
  `HOTEL_POSTCODE` varchar(50) NOT NULL,
  `HOTEL_EMAIL` varchar(20) NOT NULL,
  `HOTEL_WEBSITE` varchar(20) NOT NULL,
  `HOTEL_CITY` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`HOTEL_ID`, `HOTEL_NAME`, `HOTEL_DESCRIPTION`, `HOTEL_PHONE`, `HOTEL_STARS`, `HOTEL_STREET`, `HOTEL_STREET_NO`, `HOTEL_POSTCODE`, `HOTEL_EMAIL`, `HOTEL_WEBSITE`, `HOTEL_CITY`) VALUES
(18, 'yellow hotel', ' This relaxed, unpretentious hotel is 2.4 km from Gare de Dole-Ville railway station, and 2.7 km from the historic churches and museums of scenic Old Dole. \r\n\r\nThe casual rooms with straightforward decor offer en suite bathrooms, free Wi-Fi and flat-screen TVs.\r\n\r\nContinental breakfast and/or dinner are served in a colorful dining room (surcharge). There\'s also a lounge bar, plus an outdoor pool with a deck and sunloungers', '579308393', 6, 'DWORCOWA 7-7', 66, '85-324', 'yellowhotel@email', 'yellowhotel.com', 4),
(19, 'SHERATON HOTEL', '  The origins of Sheraton Hotels date to 1933, when Harvard classmates Ernest Henderson and Robert Moore purchased the Continental Hotel in Cambridge, Massachusetts. In 1937, Henderson and Moore purchased the Standard Investing Company and made it the company through which they would run their hotels. Also in 1937, they purchased their second hotel, and the first as part of the new company, the Stonehaven Hotel in Springfield, Massachusetts, a converted apartment building. The chain got its name from the third hotel the pair acquired, in Boston, which already had a large lighted sign on the roof saying \"Sheraton Hotel,\" which was too expensive to change. Instead, Henderson and Moore decided to call all of their hotels by that name.[4]\r\n\r\nHenderson and Moore purchased Boston\'s famed Copley Plaza Hotel in 1944,[5] and continued expanding rapidly, buying existing properties along the East Coast from Maine to Florida. In 1947, Sheraton was the first hotel chain to be listed on the New York Stock Exchange.[6] Sheraton Hotels merged with U.S. Realty and Improvement Corp. in 1948, forming Sheraton Corporation of America', '579308393', 5, 'DWORCOWA 7-7', 11, '85-324', 'sheraton@email', 'sheraton.com', 3),
(20, 'HILTON', 'Hilton Hotels & Resorts[3] (formerly known as Hilton Hotels) is a global brand of full-service hotels and resorts and the flagship brand of American multinational hospitality company Hilton.[4]\r\n\r\nThe original company was founded by Conrad Hilton. As of December 31, 2018, there were 586 Hilton Hotels & Resorts properties with 215,263 rooms in 85 countries and territories across six continents[1].[5] This includes 66 properties that are owned or leased with 20,264 rooms, 276 that are managed with 119,594 rooms, and 244 that are franchised with 75,765 rooms', '45325546346', 6, 'street 3', 22, '85-324', 'hilton@gmail.com', 'hilton.com', 4),
(22, 'RADDISON BLU', 'Radisson Blu (formerly Radisson SAS) is an upscale international chain of full service hotels and resorts brand for Radisson Hospitality, Inc. (formerly Carlson Hotels) and Radisson Hospitality AB (formerly Rezidor Hotel Group) mostly outside the United States, including those in Europe, Africa, and Asia. Radisson Hospitality AB was a listed subsidiary of Radisson Hotel Group since 2010, but it was established as a division of SAS Group. As of December 2014, Radisson Blu has 287 hotels operating throughout the world with 68,270 rooms, and 102 hotels under development with an additional 23,489 rooms.[1]\r\n\r\nSAS Group used to be a major shareholder in Rezidor Hotel Group (until 2006) and licensed its brand for Radisson SAS hotels. Following the withdrawal of SAS from the partnership in 2009, the name changed from Radisson SAS to Radisson Blu.[2] The new brand is being introduced gradually across the portfolio.[3][when?] In 2012, Carlson Hotels and Rezidor Hotel Group combined to form Carlson Rezidor Hotel Group. On March 5, 2018 Carlson Rezidor Hotel Group announced a rebrand to Radisson Hotel Group. The new corporate identity is supposed to align the global brand portfolio around its leading hotel brand, Radisson', '46845758573', 6, 'paris avenue', 33, '445-009', 'raddisonblu@email', 'raddisonblu.com', 4),
(23, 'MARRIOT HOTEL', 'Occupying a modern high-rise in the city center, this upscale hotel is a 3-minute walk from a tram stop, and a 6-minute walk from the shops and restaurants of the Z?ote Tarasy complex. \r\n\r\nFeaturing city views, the refined rooms come with Wi-Fi (fee), minifridges and flat-screen TVs. Upgraded rooms add access to a lounge with free breakfast and refreshments. Suites feature living rooms; some have kitchens and dining rooms. Room service is offered 24/7.\r\n\r\nThere\'s a refined Italian restaurant, a breakfast eatery and an American sports bar, plus a lobby bar, and a 40th-floor cocktail lounge with city views. There\'s also a spa with a pool and a gym.', '88500333', 6, 'queens street', 112, '99-99', 'marriot@gmail.com', 'marriot.com', 7),
(24, 'LANDMARK HOTEL', 'The Landmark London is a five-star hotel on Marylebone Road on the northern side of central London, England, in the City of Westminster. It was originally opened by the Great Central Railway, as The Hotel Great Central. As one of London\'s railway hotels it declined after the advent of the motor car, and served as a military convalescent home during the Second World War, and later the headquarters of the British Railways Board. It reopened as a hotel in 1993', '272198014', 5, 'freedomstreet', 0, '877-55', 'landmark@yahoo.com', 'landmarkhotel.com', 9),
(25, 'PALMS HOTEL', 'The Palms project was first developed by the Maloof family in July 1999,[3] during the Fiesta hotel-casino expansion. The casino resort broke ground in July 2000. The project was officially announced by George Maloof on October 24, 2000. Construction was completed on September 26, 2001.[4]\r\n\r\nThe Palms opened on November 15, 2001, to a massive crowd of people. Multiple celebrities attended the grand opening, such as Dennis Rodman, Pamela Anderson, Paris Hilton and Samuel L. Jackson.\r\n\r\nIn 2002, it was the resort where participants of MTV\'s The Real World: Las Vegas stayed. The level they rebuilt to accommodate MTV is now the \"Real World Suite\" billed at $10,000 per night.[5][6][6][7]\r\n\r\nOn October 27, 2005, the second tower, named the \"Fantasy Tower\", opened at a cost of $600 million. In keeping with George Maloof\'s basketball interest (the Maloofs were majority owners of the NBA\'s Sacramento Kings), the Fantasy Tower includes a two-story, 10,000 sq ft (930 m2) suite that includes the only basketball court in a hotel suite. The suite includes a locker room, scoreboard, and multi-screen entertainment system. Some of the other fantasy rooms include the G suite, the Barbie suite and the King Pin suite.\r\n\r\nThe Palms hit financial trouble in 2010, when it started missing loan payments.[8] Under an agreement reached with creditors TPG Capital and Leonard Green & Partners, they each received a 49% stake in the property in November 2011, in exchange for erasing about $400 million in debt.[8][9] The Maloof family retains a 2% share, with options to buy back up to 20%, and George Maloof continues to manage the propert', '666554444', 5, 'palmsstreet', 12, '345-88', 'palms@email.com', 'palmshotel.com', 3),
(26, 'GRAND HOTEL', ' Grand Hotel in KRAKOW, Poland was originally built in 1924–1927 at a cost of 20 million Danzig gulden as the most refined hotel in KRAKOW - the Kasino Hotel.\r\n\r\nAs the Sofitel Grand Hotel, it is located at the seaside of the Gda?sk Bay, in the heart of the town and next to the beach. Sofitel Grand Hotel has been totally refurbished during the last years, the classical atmosphere from the earlier period is still present and the hotel is now both classical, and modern. In 2007 it was decided to open Grand Spa by Algotherm, this to maintain the history of Sopot as a Spa resort', '12231333', 6, 'DOBRA STREET', 0, '55-977', 'GRAND@YAHOO.COM', 'GRANSHOTEL.COM', 11),
(27, 'HOTEL STARY', 'In a townhouse dating from the 14th century, this chic hotel is a 4-minute walk from shopping at the Renaissance-style Kraków Cloth Hall and 4 km from the Gothic Wawel Cathedral. \r\n\r\nFeaturing exotic wood furnishings or elegant, ornate decor, the sleek rooms and suites have free Wi-Fi and flat-screen TVs; some add balconies, marble bathrooms and/or whirlpool tubs.\r\n\r\nAmenities include a sophisticated restaurant with Gothic beams and Polish cuisine, plus a summer eatery on a rooftop terrace. There are also 2 bars (1 is seasonal), as well as a spa area inside a medieval cellar with 2 pools, a sauna and a gym', '4873554353', 4, 'WARSAW STREET 11A', 21, '21-222', 'STARY@HOTMAIL.COM', 'STARY.COM', 1),
(28, 'HOLIDAY INN', 'Overlooking the Brda River, this modern hotel with a brick and glass exterior is an 8-minute walk from the historic Poor Clares\' Church and a 10-minute walk from the landmark Deluge Fountain.\r\n\r\nChic rooms with a monochromatic style and sleek decor feature free Wi-Fi, flat-screen TVs, minibars and tea and coffeemakers. Swanky suites add living rooms with leather sofas, and glass-partitioned free-standing tubs.\r\n\r\nA free breakfast buffet is served in a contemporary restaurant, and on a seasonal terrace with panoramic city views. A vibrant bar features a fireplace and a TV. Other amenities include an exercise room, a sauna and a business cente', '598899555', 3, 'jagionelska street', 12, '85-006', 'holidayinn@gmail.com', 'holidayinn.com', 2);

-- --------------------------------------------------------

--
-- Stand-in structure for view `hotel_view`
-- (See below for the actual view)
--
CREATE TABLE `hotel_view` (
`HOTEL_ID` int(11)
,`HOTEL_NAME` varchar(30)
,`HOTEL_DESCRIPTION` text
,`HOTEL_PHONE` varchar(20)
,`HOTEL_STARS` int(10)
,`HOTEL_STREET` varchar(50)
,`HOTEL_STREET_NO` int(255)
,`HOTEL_POSTCODE` varchar(50)
,`HOTEL_EMAIL` varchar(20)
,`HOTEL_WEBSITE` varchar(20)
,`HOTEL_CITY` int(50)
,`CITY_ID` int(11)
,`CITY_NAME` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `IMAGE_ID` int(11) NOT NULL,
  `IMAGE_FILE` varchar(256) NOT NULL,
  `IMAGE_HOTEL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`IMAGE_ID`, `IMAGE_FILE`, `IMAGE_HOTEL`) VALUES
(10, 'upload/1559210496image1.jpg', 15),
(11, 'upload/1559210496image2.jpg', 15),
(12, 'upload/1559210496image3.jpg', 15),
(13, 'upload/1559894987college-students.jpg', 16),
(14, 'upload/1559894987Online-Jobs-For-College-Students-11-Legit-Easy-Ways-To-Make-Money-1200x600.jpg', 16),
(15, 'upload/1559894987photo-1522071820081-009f0129c71c.jpg', 16),
(21, 'upload/1560431810Online-Jobs-For-College-Students-11-Legit-Easy-Ways-To-Make-Money-1200x600.jpg', 18),
(22, 'upload/1560431810photo-1522071820081-009f0129c71c.jpg', 18),
(23, 'upload/1560431810photo-1522202176988-66273c2fd55f.jpg', 18),
(24, 'upload/1561052598background.jpeg', 19),
(27, 'upload/1561052598background8.jpeg', 19),
(28, 'upload/1561052736background2.jpeg', 20),
(30, 'upload/1561052736background6.jpeg', 20),
(31, 'upload/1561052736background7.jpeg', 20),
(32, 'upload/1561488157background2.jpeg', 22),
(33, 'upload/1561488157background7.jpeg', 22),
(34, 'upload/1561488157background10.jpeg', 22),
(35, 'upload/1561488602background1.jpg', 23),
(36, 'upload/1561488602background2.jpeg', 23),
(37, 'upload/1561488602background2.jpg', 23),
(38, 'upload/1561488796background3.jpeg', 24),
(39, 'upload/1561488796background6.jpeg', 24),
(40, 'upload/1561490278BACKGROUND4.jpg', 25),
(41, 'upload/1561490278images (2).jpg', 25),
(42, 'upload/1561490278images.jpg', 25),
(43, 'upload/1561490430download (1).jpg', 26),
(44, 'upload/1561490430download (2).jpg', 26),
(45, 'upload/1561490430download.jpg', 26),
(46, 'upload/1561490430images (1).jpg', 26),
(47, 'upload/1561490591background7.jpeg', 27),
(48, 'upload/1561490591download (1).jpg', 27),
(49, 'upload/1561490591images.jpg', 27),
(50, 'upload/1561490762background2.jpg', 28),
(51, 'upload/1561490762background3.jpg', 28),
(52, 'upload/1561490762images (1).jpg', 28);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `USERNAME`, `PASSWORD`) VALUES
(1, 'ADMIN', 'ADMIN'),
(2, 'hello', 'hello'),
(3, 'nema', 'pap');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `SURNAME` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`ID`, `NAME`, `SURNAME`, `EMAIL`, `USERNAME`, `PASSWORD`) VALUES
(1, 'nema', 'shikur', 'nema@email.com', 'nema', 'pap'),
(3, 'NEHMIYA', 'SHIKUR', 'nehmyahabtamu1@gmail.com', 'NEMA123', '1990'),
(4, 'ADMIN', 'ADMIN', 'ADMIN@gmail.com', 'ADMIN', 'ADMIN'),
(5, 'FEYISEL', 'BEKETA', 'feyiseljemal@gmail.com', 'FEYISEL', 'SNAKE'),
(6, 'kevin', 'adam', 'kevin@gmail.com', 'kevin', 'kevin123');

-- --------------------------------------------------------

--
-- Structure for view `hotel_view`
--
DROP TABLE IF EXISTS `hotel_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `hotel_view`  AS  select `hotel`.`HOTEL_ID` AS `HOTEL_ID`,`hotel`.`HOTEL_NAME` AS `HOTEL_NAME`,`hotel`.`HOTEL_DESCRIPTION` AS `HOTEL_DESCRIPTION`,`hotel`.`HOTEL_PHONE` AS `HOTEL_PHONE`,`hotel`.`HOTEL_STARS` AS `HOTEL_STARS`,`hotel`.`HOTEL_STREET` AS `HOTEL_STREET`,`hotel`.`HOTEL_STREET_NO` AS `HOTEL_STREET_NO`,`hotel`.`HOTEL_POSTCODE` AS `HOTEL_POSTCODE`,`hotel`.`HOTEL_EMAIL` AS `HOTEL_EMAIL`,`hotel`.`HOTEL_WEBSITE` AS `HOTEL_WEBSITE`,`hotel`.`HOTEL_CITY` AS `HOTEL_CITY`,`city`.`CITY_ID` AS `CITY_ID`,`city`.`CITY_NAME` AS `CITY_NAME` from (`hotel` join `city` on((`hotel`.`HOTEL_CITY` = `city`.`CITY_ID`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`CITY_ID`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`HOTEL_ID`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`IMAGE_ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `CITY_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `HOTEL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `IMAGE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
