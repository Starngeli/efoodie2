-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2018 at 06:39 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `efoodie`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `messageId` int(10) NOT NULL,
  `msg_fullName` varchar(70) NOT NULL,
  `msg_email` varchar(70) NOT NULL,
  `msg_subject` text,
  `msg_fullText` text,
  `msg_datetime` bigint(10) DEFAULT NULL,
  `msg_status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`messageId`, `msg_fullName`, `msg_email`, `msg_subject`, `msg_fullText`, `msg_datetime`, `msg_status`) VALUES
(3, 'stan', 'stan@gmail.com', 'Assignemt', 'Here is the message', 1541794893, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `recipeid` bigint(12) NOT NULL,
  `recipe_chefid` int(12) NOT NULL,
  `recipe_title` text NOT NULL,
  `recipe_full_text` text NOT NULL,
  `recipe_photo` varchar(200) NOT NULL,
  `recipe_publication_date` date NOT NULL,
  `recipe_created_date` date NOT NULL,
  `recipe_last_update` date NOT NULL,
  `recipe_display` tinyint(1) NOT NULL,
  `recipe_order` bigint(12) NOT NULL,
  `ingredients` text NOT NULL,
  `recipe_procedure` text NOT NULL,
  `ingredientsvalue` text NOT NULL,
  `Chef_Name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`recipeid`, `recipe_chefid`, `recipe_title`, `recipe_full_text`, `recipe_photo`, `recipe_publication_date`, `recipe_created_date`, `recipe_last_update`, `recipe_display`, `recipe_order`, `ingredients`, `recipe_procedure`, `ingredientsvalue`, `Chef_Name`) VALUES
(1, 0, 'Pork Chops', 'Pork chops is a ethiopian inspired email', 'images/image11.jpg', '2018-11-24', '2018-11-24', '2018-11-24', 0, 0, 'pork', 'boil the pork\r\nroast it', 'pork is quite essential since it provides proteins to the body', 'John'),
(2, 0, 'Creamy kale & chicken traybake', 'A one-pan supper with bacon-wrapped, succulent chicken breasts and a garlicky, mascarpone stuffing. This everyday recipe is 3 of your 5-a-day.\r\n\r\n', 'images/image12.jpg', '2018-11-26', '2018-11-26', '2018-11-26', 0, 0, '100g curly kale, finely chopped\r\n1 lemon\r\n\r\n, Â½ zested, Â½ cut into wedges\r\n4 tbsp mascarpone\r\n2 garlic cloves, crushed\r\n4 skinless chicken breasts\r\n12 rashers smoked, streaky bacon\r\n\r\n500g parsnips\r\n\r\n, peeled and cut into batons\r\n2 red onions, halved and cut into wedges, roots left intact\r\n500g sweet potatoes\r\n\r\n, peeled and cut into thin discs\r\n2 tbsp olive oil', '1.Heat oven to 220C/200C fan/gas 7. Bring a pan of water to the boil and cook the kale for 4 mins until tender. Rinse under cold water, squeeze dry with your hands, then whizz in a food processor with the lemon zest, mascarpone, garlic and seasoning.\r\n', 'rich in fibre, folate and vitamin C', '');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(8) NOT NULL,
  `chef_name` varchar(20) NOT NULL,
  `chef_specialization` text NOT NULL,
  `chef_rates` text NOT NULL,
  `days_available` date NOT NULL,
  `chef_photo` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `chef_name`, `chef_specialization`, `chef_rates`, `days_available`, `chef_photo`, `status`) VALUES
(1, 'Stan', 'Beef', 'Kshs 1000 per hour', '2018-11-25', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `role` varchar(20) DEFAULT '3',
  `phonenumber` varchar(255) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`, `role`, `phonenumber`, `gender`) VALUES
(1, 'demo', 'demo@email.me', '827ccb0eea8a706c4c34a16891f84e7b', '2018-10-29 11:07:55', NULL, NULL, NULL),
(5, 'stanlee', 'starboi@gmail.com', '0b3f45b266a97d7029dde7c2ba372093', '2018-10-30 17:36:38', NULL, NULL, NULL),
(27, 'Vanessa ', 'mdee@gmail.com', '414c8353aee97c0cf173ca489673be1d', '2018-11-09 07:14:14', 'Customer', '12345', 'Female'),
(32, 'Stanleyy', 'stanley@gmail.com', 'f52412c4ff1dacd2111f4951f3db1260', '2018-11-22 11:19:43', 'Admin', '123', 'Male'),
(36, 'Fridah', 'fridah@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2018-11-25 17:54:53', 'Chef', '12345', 'Female'),
(37, 'Sombstar', 'sombstar@gmail.com', '020e596c4be3010c24a0975f7d4270c2', '2018-11-25 20:50:52', 'Customer', '0719121852', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `roleid` int(12) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messageId`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`recipeid`),
  ADD KEY `recipe_chefid` (`recipe_chefid`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`roleid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messageId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `recipeid` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `roleid` int(12) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
