-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2018 at 02:20 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digital_service_canvas`
--

-- --------------------------------------------------------

--
-- Table structure for table `api_monolithic`
--

CREATE TABLE `api_monolithic` (
  `id_monolithic` int(11) NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `detail` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `api_monolithic`
--

INSERT INTO `api_monolithic` (`id_monolithic`, `category`, `detail`) VALUES
(2, 'USSD Push (phase 1 & 2)', 'USSD Push (phase 1 & 2)'),
(3, 'Balance Charging', 'Balance Charging'),
(4, 'Location Based', 'Location Based'),
(5, 'Purchase Content', 'Purchase Content'),
(6, 'Purchase balance', 'Advertisement broadcast'),
(7, 'Purchase data package', 'Purchase data package'),
(8, 'Advertisement broadca', 'Advertisement broadca');

-- --------------------------------------------------------

--
-- Table structure for table `combined_api`
--

CREATE TABLE `combined_api` (
  `id_com` int(11) NOT NULL,
  `id_api` int(11) DEFAULT NULL,
  `id_mashup` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `combined_api`
--

INSERT INTO `combined_api` (`id_com`, `id_api`, `id_mashup`) VALUES
(127, 3, 36),
(128, 2, 36),
(129, 2, 36),
(130, 2, 36);

-- --------------------------------------------------------

--
-- Table structure for table `econtract`
--

CREATE TABLE `econtract` (
  `id_contract` int(11) NOT NULL,
  `contract` varchar(100) DEFAULT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `detail` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id_lib` int(11) NOT NULL,
  `service` varchar(100) DEFAULT NULL,
  `detail_library` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mashup_api`
--

CREATE TABLE `mashup_api` (
  `id_mashup` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `detail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mashup_api`
--

INSERT INTO `mashup_api` (`id_mashup`, `name`, `detail`) VALUES
(16, 'Notification Center', 'Notification Center'),
(17, 'Coupon & QR Code Generator', 'Coupon & QR Code Generator'),
(18, 'Subscription & Ads', 'Subscription & Ads'),
(19, 'Low Cost Banking Barrier', 'Low Cost Banking Barrier'),
(20, 'One Time Password', 'One Time Password'),
(21, 'Authentication Center', 'Authentication Center'),
(22, 'Payment Center', 'Payment Center'),
(23, 'klak', 'ksl'),
(24, 'ss', 'ss'),
(25, 'aa', 'aa'),
(26, 'jkdja', 'skajd'),
(27, 'ss', 'ss'),
(28, 'ss', 'ss'),
(29, 'ss', 'ss'),
(30, 'sss', 'ss'),
(31, 'ss', 'qq'),
(32, 'ss', 'ss'),
(33, 'ss', 'ss'),
(34, 'ss', 'ss'),
(35, 'ss', 'ss'),
(36, 'a', 'a'),
(37, 'a', 'a'),
(38, 'ss', 'sssss');

-- --------------------------------------------------------

--
-- Table structure for table `source_api`
--

CREATE TABLE `source_api` (
  `id_api` int(11) NOT NULL,
  `id_monolithic` int(11) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `last_update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `source_api`
--

INSERT INTO `source_api` (`id_api`, `id_monolithic`, `url`, `status`, `last_update`) VALUES
(1, 1, 'https:\\10.37.67.8:8101\\anumber+sms+bnumber', 1, '2017-11-11 22:28:15'),
(2, 2, 'https:10.37.67.8:8101anumber+sms+bnumber', 1, '2017-11-14 18:39:56'),
(3, 3, 'https:10.37.67.9:8101anumber+sms+bnumber', 1, '2017-11-14 18:39:56'),
(4, 4, 'https:10.37.67.10:8101anumber+sms+bnumber', 1, '2017-11-14 18:39:56'),
(5, 5, 'https:10.37.67.11:8101anumber+sms+bnumber', 1, '2017-11-14 18:39:56'),
(6, 6, 'https:10.37.67.10:8101anumber+sms+bnumber', 1, '2017-11-14 18:39:56'),
(7, 7, 'https:10.37.67.13:8101anumber+sms+bnumber', 1, '2017-11-14 18:39:56'),
(8, 8, 'https:10.37.67.14:8101anumber+sms+bnumber', 1, '2017-11-14 18:39:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) UNSIGNED NOT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED DEFAULT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `name`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`) VALUES
(4, '::1', 'Devy Irawan', 'admin', '$2y$08$e0JAmvowiSjmsjEIzXYuBeeYq6Gj4w7JwoEKVJHbJwhW9k2aPFXG2', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1512126977, 1516254491, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `group_id` mediumint(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(2, 2, 1),
(3, 3, 5),
(4, 4, 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_api`
-- (See below for the actual view)
--
CREATE TABLE `view_api` (
`id_api` int(11)
,`url` varchar(100)
,`status` int(1)
,`last_update` datetime
,`category` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_compose_api`
-- (See below for the actual view)
--
CREATE TABLE `view_compose_api` (
`id_mashup` int(11)
,`name` varchar(100)
,`detail` varchar(255)
,`url` varchar(100)
,`id_monolithic` int(11)
,`id_api` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_monolithic`
-- (See below for the actual view)
--
CREATE TABLE `view_monolithic` (
`id_api` int(11)
,`id_monolithic` int(11)
,`url` varchar(100)
,`status` int(1)
,`category` varchar(100)
,`detail` varchar(100)
);

-- --------------------------------------------------------

--
-- Structure for view `view_api`
--
DROP TABLE IF EXISTS `view_api`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_api`  AS  select `s`.`id_api` AS `id_api`,`s`.`url` AS `url`,`s`.`status` AS `status`,`s`.`last_update` AS `last_update`,`a`.`category` AS `category` from (`source_api` `s` join `api_monolithic` `a` on((`s`.`id_monolithic` = `a`.`id_monolithic`))) ;

-- --------------------------------------------------------

--
-- Structure for view `view_compose_api`
--
DROP TABLE IF EXISTS `view_compose_api`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_compose_api`  AS  select `m`.`id_mashup` AS `id_mashup`,`m`.`name` AS `name`,`m`.`detail` AS `detail`,`s`.`url` AS `url`,`a`.`id_monolithic` AS `id_monolithic`,`c`.`id_api` AS `id_api` from (((`mashup_api` `m` join `combined_api` `c` on((`m`.`id_mashup` = `c`.`id_mashup`))) join `source_api` `s` on((`s`.`id_api` = `c`.`id_api`))) join `api_monolithic` `a` on((`a`.`id_monolithic` = `s`.`id_monolithic`))) ;

-- --------------------------------------------------------

--
-- Structure for view `view_monolithic`
--
DROP TABLE IF EXISTS `view_monolithic`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_monolithic`  AS  select `s`.`id_api` AS `id_api`,`s`.`id_monolithic` AS `id_monolithic`,`s`.`url` AS `url`,`s`.`status` AS `status`,`a`.`category` AS `category`,`a`.`detail` AS `detail` from (`source_api` `s` join `api_monolithic` `a` on((`s`.`id_monolithic` = `a`.`id_monolithic`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `api_monolithic`
--
ALTER TABLE `api_monolithic`
  ADD PRIMARY KEY (`id_monolithic`);

--
-- Indexes for table `combined_api`
--
ALTER TABLE `combined_api`
  ADD PRIMARY KEY (`id_com`);

--
-- Indexes for table `econtract`
--
ALTER TABLE `econtract`
  ADD PRIMARY KEY (`id_contract`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id_lib`);

--
-- Indexes for table `mashup_api`
--
ALTER TABLE `mashup_api`
  ADD PRIMARY KEY (`id_mashup`);

--
-- Indexes for table `source_api`
--
ALTER TABLE `source_api`
  ADD PRIMARY KEY (`id_api`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `api_monolithic`
--
ALTER TABLE `api_monolithic`
  MODIFY `id_monolithic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `combined_api`
--
ALTER TABLE `combined_api`
  MODIFY `id_com` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `econtract`
--
ALTER TABLE `econtract`
  MODIFY `id_contract` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mashup_api`
--
ALTER TABLE `mashup_api`
  MODIFY `id_mashup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `source_api`
--
ALTER TABLE `source_api`
  MODIFY `id_api` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
