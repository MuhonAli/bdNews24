-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2020 at 03:59 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdnews24`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '96e79218965eb72c92a549dd5a330112');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `category_image`) VALUES
(3, 'Bangladesh', '1.jpg'),
(4, 'International', '2.jpg'),
(5, 'Business', '3.jpg'),
(6, 'Opinion', '4.jpg'),
(7, 'Sports', '5.jpg'),
(8, 'Lifestyle', '6.jpg'),
(11, 'Showbiz', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(200) DEFAULT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `review` int(255) NOT NULL,
  `views` int(11) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `category_id`, `description`, `image`, `review`, `views`, `created_on`) VALUES
(4, 'aa', 8, 'aa', 'b6.jpg', 0, 1, '2020-07-11 13:58:23'),
(7, 'Supplying fake N95 masks to BSMMU: Sharmin Jahan placed on 3-day remand', 4, 'According to the First Information Report (FIR), BSMMU authorities deiced to purchase safety gears for the frontline doctors of newly launched Covid-19 unit on May 27.\r\n\r\nReceiving verbal instructions from BSMMU authorities, several companies submitted samples of masks. Those were later sent to Dysin International Ltd, a DGHS approved lab, for tests.\r\n\r\nThe lab report mentioned Aparajita Internationals samples to be the best.\r\n\r\nLater, BSMMU authorities sought pricing of the masks from Aparajita International on June 23 and received the quotation on the next day.\r\n\r\nOn June 27, BSMMU approved the work order to provide 11,000 N95 masks in the name of Aparajita International.\r\n\r\nThe company then supplied around 3,460 N95 masks in four consignments -- between June 30 and July 13.', 'news.jpg', 0, 1, '2020-07-11 13:58:23'),
(8, 'Supplying fake N95 masks to BSMMU: Sharmin Jahan placed on 3-day remand', 4, 'According to the First Information Report (FIR), BSMMU authorities deiced to purchase safety gears for the frontline doctors of newly launched Covid-19 unit on May 27.\r\n\r\nReceiving verbal instructions from BSMMU authorities, several companies submitted samples of masks. Those were later sent to Dysin International Ltd, a DGHS approved lab, for tests.\r\n\r\nThe lab report mentioned Aparajita Internationals samples to be the best.\r\n\r\nLater, BSMMU authorities sought pricing of the masks from Aparajita International on June 23 and received the quotation on the next day.\r\n\r\nOn June 27, BSMMU approved the work order to provide 11,000 N95 masks in the name of Aparajita International.\r\n\r\nThe company then supplied around 3,460 N95 masks in four consignments -- between June 30 and July 13.', 'news.jpg', 0, 3, '2020-07-11 13:58:23'),
(13, 'Supplying fake N95 masks to BSMMU: Sharmin Jahan placed on 3-day remand', 4, 'According to the First Information Report (FIR), BSMMU authorities deiced to purchase safety gears for the frontline doctors of newly launched Covid-19 unit on May 27.\r\n\r\nReceiving verbal instructions from BSMMU authorities, several companies submitted samples of masks. Those were later sent to Dysin International Ltd, a DGHS approved lab, for tests.\r\n\r\nThe lab report mentioned Aparajita Internationals samples to be the best.\r\n\r\nLater, BSMMU authorities sought pricing of the masks from Aparajita International on June 23 and received the quotation on the next day.\r\n\r\nOn June 27, BSMMU approved the work order to provide 11,000 N95 masks in the name of Aparajita International.\r\n\r\nThe company then supplied around 3,460 N95 masks in four consignments -- between June 30 and July 13.', 'news.jpg', 0, 0, '2020-07-11 13:58:23'),
(14, 'Supplying fake N95 masks to BSMMU: Sharmin Jahan placed on 3-day remand', 4, 'According to the First Information Report (FIR), BSMMU authorities deiced to purchase safety gears for the frontline doctors of newly launched Covid-19 unit on May 27.\r\n\r\nReceiving verbal instructions from BSMMU authorities, several companies submitted samples of masks. Those were later sent to Dysin International Ltd, a DGHS approved lab, for tests.\r\n\r\nThe lab report mentioned Aparajita Internationals samples to be the best.\r\n\r\nLater, BSMMU authorities sought pricing of the masks from Aparajita International on June 23 and received the quotation on the next day.\r\n\r\nOn June 27, BSMMU approved the work order to provide 11,000 N95 masks in the name of Aparajita International.\r\n\r\nThe company then supplied around 3,460 N95 masks in four consignments -- between June 30 and July 13.', 'news.jpg', 0, 0, '2020-07-11 13:58:23'),
(15, 'Supplying fake N95 masks to BSMMU: Sharmin Jahan placed on 3-day remand', 7, 'According to the First Information Report (FIR), BSMMU authorities deiced to purchase safety gears for the frontline doctors of newly launched Covid-19 unit on May 27.\r\n\r\nReceiving verbal instructions from BSMMU authorities, several companies submitted samples of masks. Those were later sent to Dysin International Ltd, a DGHS approved lab, for tests.\r\n\r\nThe lab report mentioned Aparajita Internationals samples to be the best.\r\n\r\nLater, BSMMU authorities sought pricing of the masks from Aparajita International on June 23 and received the quotation on the next day.\r\n\r\nOn June 27, BSMMU approved the work order to provide 11,000 N95 masks in the name of Aparajita International.\r\n\r\nThe company then supplied around 3,460 N95 masks in four consignments -- between June 30 and July 13.', 'news.jpg', 0, 0, '2020-07-11 13:58:23'),
(16, 'Supplying fake N95 masks to BSMMU: Sharmin Jahan placed on 3-day remand', 7, 'According to the First Information Report (FIR), BSMMU authorities deiced to purchase safety gears for the frontline doctors of newly launched Covid-19 unit on May 27.\r\n\r\nReceiving verbal instructions from BSMMU authorities, several companies submitted samples of masks. Those were later sent to Dysin International Ltd, a DGHS approved lab, for tests.\r\n\r\nThe lab report mentioned Aparajita Internationals samples to be the best.\r\n\r\nLater, BSMMU authorities sought pricing of the masks from Aparajita International on June 23 and received the quotation on the next day.\r\n\r\nOn June 27, BSMMU approved the work order to provide 11,000 N95 masks in the name of Aparajita International.\r\n\r\nThe company then supplied around 3,460 N95 masks in four consignments -- between June 30 and July 13.', 'news.jpg', 0, 0, '2020-07-11 13:58:23'),
(17, 'Supplying fake N95 masks to BSMMU: Sharmin Jahan placed on 3-day remand', 7, 'According to the First Information Report (FIR), BSMMU authorities deiced to purchase safety gears for the frontline doctors of newly launched Covid-19 unit on May 27.\r\n\r\nReceiving verbal instructions from BSMMU authorities, several companies submitted samples of masks. Those were later sent to Dysin International Ltd, a DGHS approved lab, for tests.\r\n\r\nThe lab report mentioned Aparajita Internationals samples to be the best.\r\n\r\nLater, BSMMU authorities sought pricing of the masks from Aparajita International on June 23 and received the quotation on the next day.\r\n\r\nOn June 27, BSMMU approved the work order to provide 11,000 N95 masks in the name of Aparajita International.\r\n\r\nThe company then supplied around 3,460 N95 masks in four consignments -- between June 30 and July 13.', 'news.jpg', 0, 0, '2020-07-11 13:58:23'),
(18, 'Supplying fake N95 masks to BSMMU: Sharmin Jahan placed on 3-day remand', 7, 'According to the First Information Report (FIR), BSMMU authorities deiced to purchase safety gears for the frontline doctors of newly launched Covid-19 unit on May 27.\r\n\r\nReceiving verbal instructions from BSMMU authorities, several companies submitted samples of masks. Those were later sent to Dysin International Ltd, a DGHS approved lab, for tests.\r\n\r\nThe lab report mentioned Aparajita Internationals samples to be the best.\r\n\r\nLater, BSMMU authorities sought pricing of the masks from Aparajita International on June 23 and received the quotation on the next day.\r\n\r\nOn June 27, BSMMU approved the work order to provide 11,000 N95 masks in the name of Aparajita International.\r\n\r\nThe company then supplied around 3,460 N95 masks in four consignments -- between June 30 and July 13.', 'news.jpg', 0, 0, '2020-07-11 13:58:23'),
(19, 'Supplying fake N95 masks to BSMMU: Sharmin Jahan placed on 3-day remand', 7, 'According to the First Information Report (FIR), BSMMU authorities deiced to purchase safety gears for the frontline doctors of newly launched Covid-19 unit on May 27.\r\n\r\nReceiving verbal instructions from BSMMU authorities, several companies submitted samples of masks. Those were later sent to Dysin International Ltd, a DGHS approved lab, for tests.\r\n\r\nThe lab report mentioned Aparajita Internationals samples to be the best.\r\n\r\nLater, BSMMU authorities sought pricing of the masks from Aparajita International on June 23 and received the quotation on the next day.\r\n\r\nOn June 27, BSMMU approved the work order to provide 11,000 N95 masks in the name of Aparajita International.\r\n\r\nThe company then supplied around 3,460 N95 masks in four consignments -- between June 30 and July 13.', 'news.jpg', 0, 0, '2020-07-11 13:58:23'),
(20, 'Supplying fake N95 masks to BSMMU: Sharmin Jahan placed on 3-day remand', 7, 'According to the First Information Report (FIR), BSMMU authorities deiced to purchase safety gears for the frontline doctors of newly launched Covid-19 unit on May 27.\r\n\r\nReceiving verbal instructions from BSMMU authorities, several companies submitted samples of masks. Those were later sent to Dysin International Ltd, a DGHS approved lab, for tests.\r\n\r\nThe lab report mentioned Aparajita Internationals samples to be the best.\r\n\r\nLater, BSMMU authorities sought pricing of the masks from Aparajita International on June 23 and received the quotation on the next day.\r\n\r\nOn June 27, BSMMU approved the work order to provide 11,000 N95 masks in the name of Aparajita International.\r\n\r\nThe company then supplied around 3,460 N95 masks in four consignments -- between June 30 and July 13.', 'news.jpg', 0, 0, '2020-07-11 13:58:23'),
(21, 'Supplying fake N95 masks to BSMMU: Sharmin Jahan placed on 3-day remand', 8, 'According to the First Information Report (FIR), BSMMU authorities deiced to purchase safety gears for the frontline doctors of newly launched Covid-19 unit on May 27.\r\n\r\nReceiving verbal instructions from BSMMU authorities, several companies submitted samples of masks. Those were later sent to Dysin International Ltd, a DGHS approved lab, for tests.\r\n\r\nThe lab report mentioned Aparajita Internationals samples to be the best.\r\n\r\nLater, BSMMU authorities sought pricing of the masks from Aparajita International on June 23 and received the quotation on the next day.\r\n\r\nOn June 27, BSMMU approved the work order to provide 11,000 N95 masks in the name of Aparajita International.\r\n\r\nThe company then supplied around 3,460 N95 masks in four consignments -- between June 30 and July 13.', 'news.jpg', 0, 0, '2020-07-11 13:58:23'),
(22, 'Supplying fake N95 masks to BSMMU: Sharmin Jahan placed on 3-day remand', 8, 'qqq', 'news.jpg', 0, 0, '2020-07-11 13:58:23'),
(23, 'Supplying fake N95 masks to BSMMU: Sharmin Jahan placed on 3-day remand', 8, 'According to the First Information Report (FIR), BSMMU authorities deiced to purchase safety gears for the frontline doctors of newly launched Covid-19 unit on May 27.\r\n\r\nReceiving verbal instructions from BSMMU authorities, several companies submitted samples of masks. Those were later sent to Dysin International Ltd, a DGHS approved lab, for tests.\r\n\r\nThe lab report mentioned Aparajita Internationals samples to be the best.\r\n\r\nLater, BSMMU authorities sought pricing of the masks from Aparajita International on June 23 and received the quotation on the next day.\r\n\r\nOn June 27, BSMMU approved the work order to provide 11,000 N95 masks in the name of Aparajita International.\r\n\r\nThe company then supplied around 3,460 N95 masks in four consignments -- between June 30 and July 13.', 'news.jpg', 0, 1, '2020-07-11 13:58:23'),
(25, 'Supplying fake N95 masks to BSMMU: Sharmin Jahan placed on 3-day remand', 8, 'According to the First Information Report (FIR), BSMMU authorities deiced to purchase safety gears for the frontline doctors of newly launched Covid-19 unit on May 27.\r\n\r\nReceiving verbal instructions from BSMMU authorities, several companies submitted samples of masks. Those were later sent to Dysin International Ltd, a DGHS approved lab, for tests.\r\n\r\nThe lab report mentioned Aparajita Internationals samples to be the best.\r\n\r\nLater, BSMMU authorities sought pricing of the masks from Aparajita International on June 23 and received the quotation on the next day.\r\n\r\nOn June 27, BSMMU approved the work order to provide 11,000 N95 masks in the name of Aparajita International.\r\n\r\nThe company then supplied around 3,460 N95 masks in four consignments -- between June 30 and July 13.', 'news.jpg', 0, 0, '2020-07-11 13:58:23'),
(26, 'Supplying fake N95 masks to BSMMU: Sharmin Jahan placed on 3-day remand', 5, 'According to the First Information Report (FIR), BSMMU authorities deiced to purchase safety gears for the frontline doctors of newly launched Covid-19 unit on May 27.\r\n\r\nReceiving verbal instructions from BSMMU authorities, several companies submitted samples of masks. Those were later sent to Dysin International Ltd, a DGHS approved lab, for tests.\r\n\r\nThe lab report mentioned Aparajita Internationals samples to be the best.\r\n\r\nLater, BSMMU authorities sought pricing of the masks from Aparajita International on June 23 and received the quotation on the next day.\r\n\r\nOn June 27, BSMMU approved the work order to provide 11,000 N95 masks in the name of Aparajita International.\r\n\r\nThe company then supplied around 3,460 N95 masks in four consignments -- between June 30 and July 13.', 'news.jpg', 0, 0, '2020-07-11 13:58:23'),
(27, 'Supplying fake N95 masks to BSMMU: Sharmin Jahan placed on 3-day remand', 5, 'According to the First Information Report (FIR), BSMMU authorities deiced to purchase safety gears for the frontline doctors of newly launched Covid-19 unit on May 27.\r\n\r\nReceiving verbal instructions from BSMMU authorities, several companies submitted samples of masks. Those were later sent to Dysin International Ltd, a DGHS approved lab, for tests.\r\n\r\nThe lab report mentioned Aparajita Internationals samples to be the best.\r\n\r\nLater, BSMMU authorities sought pricing of the masks from Aparajita International on June 23 and received the quotation on the next day.\r\n\r\nOn June 27, BSMMU approved the work order to provide 11,000 N95 masks in the name of Aparajita International.\r\n\r\nThe company then supplied around 3,460 N95 masks in four consignments -- between June 30 and July 13.', 'news.jpg', 0, 0, '2020-07-11 13:58:23'),
(28, 'Supplying fake N95 masks to BSMMU: Sharmin Jahan placed on 3-day remand', 5, 'According to the First Information Report (FIR), BSMMU authorities deiced to purchase safety gears for the frontline doctors of newly launched Covid-19 unit on May 27.\r\n\r\nReceiving verbal instructions from BSMMU authorities, several companies submitted samples of masks. Those were later sent to Dysin International Ltd, a DGHS approved lab, for tests.\r\n\r\nThe lab report mentioned Aparajita Internationals samples to be the best.\r\n\r\nLater, BSMMU authorities sought pricing of the masks from Aparajita International on June 23 and received the quotation on the next day.\r\n\r\nOn June 27, BSMMU approved the work order to provide 11,000 N95 masks in the name of Aparajita International.\r\n\r\nThe company then supplied around 3,460 N95 masks in four consignments -- between June 30 and July 13.', 'news.jpg', 0, 0, '2020-07-11 13:58:23'),
(33, 'Supplying fake N95 masks to BSMMU: Sharmin Jahan placed on 3-day remand', 5, 'According to the First Information Report (FIR), BSMMU authorities deiced to purchase safety gears for the frontline doctors of newly launched Covid-19 unit on May 27.\r\n\r\nReceiving verbal instructions from BSMMU authorities, several companies submitted samples of masks. Those were later sent to Dysin International Ltd, a DGHS approved lab, for tests.\r\n\r\nThe lab report mentioned Aparajita Internationals samples to be the best.\r\n\r\nLater, BSMMU authorities sought pricing of the masks from Aparajita International on June 23 and received the quotation on the next day.\r\n\r\nOn June 27, BSMMU approved the work order to provide 11,000 N95 masks in the name of Aparajita International.\r\n\r\nThe company then supplied around 3,460 N95 masks in four consignments -- between June 30 and July 13.', 'news.jpg', 0, 0, '2020-07-11 13:58:23'),
(34, 'Criticising Malaysia’s handling of migrants: Lawyers appointed for arrested Bangladeshi', 5, 'Two lawyers have been appointed for Rayhan Kabir a day after Malaysian Immigration Department arrested him and declared he would be deported to Bangladesh and blacklisted for criticising Putrajaya’s handling of migrants during the Covid-19 pandemic.', 'rayhan_kabir_1.jpg', 1, 5, '2020-07-11 13:58:23'),
(35, 'Supplying fake N95 masks to BSMMU: Sharmin Jahan placed on 3-day remand', 5, 'According to the First Information Report (FIR), BSMMU authorities deiced to purchase safety gears for the frontline doctors of newly launched Covid-19 unit on May 27.\r\n\r\nReceiving verbal instructions from BSMMU authorities, several companies submitted samples of masks. Those were later sent to Dysin International Ltd, a DGHS approved lab, for tests.\r\n\r\nThe lab report mentioned Aparajita Internationals samples to be the best.\r\n\r\nLater, BSMMU authorities sought pricing of the masks from Aparajita International on June 23 and received the quotation on the next day.\r\n\r\nOn June 27, BSMMU approved the work order to provide 11,000 N95 masks in the name of Aparajita International.\r\n\r\nThe company then supplied around 3,460 N95 masks in four consignments -- between June 30 and July 13.', 'news.jpg', 0, 0, '2020-07-11 13:58:23'),
(38, 'Quia quasi inciduntffaf', 6, 'Nemo nostrud distincafafaf', 'b21.jpg', 0, 0, '2020-07-26 05:49:12'),
(39, 'Possimus praesentiu', 6, 'Deserunt sint offic', 'big.jpg', 0, 0, '2020-07-26 05:51:03');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `user_id` int(255) NOT NULL,
  `news_id` int(255) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `user_id`, `news_id`, `comment`) VALUES
(9, 8, 34, 'sss');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `unique_key` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `unique_key`, `token`, `status`) VALUES
(8, '', 'muhon199@gmail.com', '96e79218965eb72c92a549dd5a330112', 'c9f0f895fb98ab9159f51fd0297e236d', '', 1),
(9, '', 'muhon@gmail.com', '96e79218965eb72c92a549dd5a330112', '45c48cce2e2d7fbdea1afc51c7c6ad26', '', 0),
(10, '', 'muhon1919@gmail.com', '96e79218965eb72c92a549dd5a330112', 'd3d9446802a44259755d38e6d163e820', '', 0),
(11, '', 'muhosssn199@gmail.com', '96e79218965eb72c92a549dd5a330112', '6512bd43d9caa6e02c990b0a82652dca', '', 0),
(12, '', 'muhon11199@gmail.com', '96e79218965eb72c92a549dd5a330112', 'c20ad4d76fe97759aa27a0c99bff6710', '', 1),
(13, '', 'popy@gmail.com', '96e79218965eb72c92a549dd5a330112', 'c51ce410c124a10e0db5e4b97fc2af39', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
