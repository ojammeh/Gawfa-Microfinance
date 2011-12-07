-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 07, 2011 at 08:25 PM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gawfa`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE IF NOT EXISTS `branches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `type` varchar(30) NOT NULL,
  `parent_id` int(6) NOT NULL,
  `address` text NOT NULL,
  `status` tinyint(2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `code` (`code`,`parent_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `code`, `name`, `type`, `parent_id`, `address`, `status`, `created`, `modified`) VALUES
(1, '', 'GBA', 'branch', 0, '', 0, '2011-12-03 18:17:35', '2011-12-03 18:17:35'),
(2, '', 'Northern Branch', 'branch', 0, '', 0, '2011-12-03 18:17:42', '2011-12-03 18:17:42'),
(3, '', 'Southern Branch', 'branch', 0, '', 0, '2011-12-03 18:17:51', '2011-12-03 18:17:51'),
(4, '', 'Bakua', 'branch', 0, '', 0, '2011-12-03 18:26:17', '2011-12-03 18:26:17'),
(5, '001', 'BANJUL', 'station', 1, '10 TOBACCO ROAD', 0, '2011-12-04 11:28:33', '2011-12-04 11:28:33'),
(6, '002', 'BRIKAMA', 'station', 1, '06 NEW TOWN', 0, '2011-12-04 11:30:03', '2011-12-04 11:30:03'),
(7, '003', 'BAKAU', 'station', 1, '5 KAPE POINT', 0, '2011-12-04 11:30:48', '2011-12-04 11:30:48'),
(8, '004', 'SERE KUNDA', 'station', 1, '89 SAYER JOBE STREET', 0, '2011-12-04 11:31:20', '2011-12-04 11:31:20'),
(9, '005', 'BARRA', 'station', 2, 'OPPOSITE GAMTEL', 0, '2011-12-04 11:31:57', '2011-12-04 11:31:57'),
(10, '006', 'LAMIN', 'station', 3, 'NTC', 0, '2011-12-04 11:34:11', '2011-12-04 11:34:11'),
(11, '007', 'YUNDUM', 'station', 1, 'NEAR ARMY BRACKS', 0, '2011-12-04 11:35:30', '2011-12-04 11:35:30'),
(13, '0036', 'churchills town', 'station', 1, ' 022 galp station', 0, '2011-12-04 11:53:38', '2011-12-04 11:53:38'),
(14, '0036', 'Farafenni', 'station', 1, '023 Warf town', 0, '2011-12-04 11:54:36', '2011-12-04 11:54:36'),
(15, '037', 'Kinteh Kunda', 'station', 1, '0024 Marong Kunda Dutabakoto', 0, '2011-12-04 11:56:01', '2011-12-04 11:56:01');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `telephone` int(15) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `account_number` int(20) NOT NULL,
  `kin_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `kin_id` (`kin_id`,`group_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `firstname`, `lastname`, `address`, `telephone`, `sex`, `account_number`, `kin_id`, `group_id`) VALUES
(1, 'Pa Essa', 'Jabang', 'Banjul', 987369723, 'MALE', 10097864, 0, 0),
(2, 'Kalifa', 'SILLAH', 'BASSE', 6865300, 'MALE', 110555, 0, 0),
(3, 'EBRIMA ', 'CAMARA', 'BASSE KOBA KUNDA', 6491145, 'MALE', 555110, 0, 0),
(4, 'FATOUMATA', 'CEESAY', 'ALLUNHAREH', 776655, 'FEMALE', 665758, 0, 0),
(5, 'ALIEU', 'TOURAY', 'DAMPHA KUNDA BASSE', 9865300, 'MALE', 77889, 0, 0),
(6, 'JONKUNDA', 'SANNEH', 'SUTUKONDING', 667758, 'MALE', 8879970, 0, 0),
(7, 'LAMIN', 'DARBOE', 'BRIKAMA', 667758, 'MALE', 6657758, 0, 0),
(8, 'EDRISA', 'KEITA', 'SANCHABA SULAY JOBE', 988756, 'MALE', 858750, 0, 0),
(9, 'MUSTAPHA', 'NJIE', 'SERE KUNDA', 885995, 'MALE', 858959587, 0, 0),
(10, 'EBOU', 'TOURAY', 'BANJUL TOBACCO ROAD', 998850, 'MALE', 995868, 0, 0),
(11, 'PAPA', 'NJIE', 'KANIFING', 88577586, 'MALE', 90056996, 0, 0),
(12, 'HUSAINOU', 'TOURAY', 'FARATO', 995868, 'MALE', 2147483647, 0, 0),
(13, 'ALPHA', 'JALLOW', 'BASSE', 9886776, 'MALE', 88576760, 0, 0),
(14, 'OMAR', 'DANSO', 'SUTUKOBA', 988756, 'MALE', 99588606, 0, 0),
(15, 'AISATOU', 'DABO', 'SUKUTA', 99867577, 'MALE', 2147483647, 0, 0),
(16, 'BINTA', 'TOURAY', 'BANJUL', 988677, 'FEMALE', 969867, 0, 0),
(17, 'AWA', 'JOBE', 'FARAFENI', 99687, 'MALE', 696897689, 0, 0),
(18, 'OUMIE', 'JALLOW', 'LATRI KUNDA SABIJI', 7786570, 'FEMALE', 995006868, 0, 0),
(52, 'Safiatou', 'Hydara', 'Brikama', 9811496, 'FEMALE', 21200125, 0, 0),
(20, 'MAIMOUNA', 'JALLOW', 'SOMA', 6888756, 'FEMALE', 969778, 0, 0),
(21, 'DAWDA', 'NJAI', 'FAJARA', 988765, 'MALE', 88677690, 0, 0),
(22, 'FATOUMATA', 'JAITEH', 'KUDANG', 7688764, 'MALE', 2147483647, 0, 0),
(23, 'FABAKARY', 'NDOYE', 'BANSANG', 9323546, 'MALE', 299, 0, 0),
(24, 'PETER', 'BALDEH', 'BRIKAMABA', 9958868, 'MALE', 88577430, 0, 0),
(25, 'PA ANSU', 'JARJOU', 'LAMIN', 6730909, 'MALE', 99583, 0, 0),
(26, 'BABUCARR', 'SILLAH', 'BAJA KUNDA', 988579, 'MALE', 88949379, 0, 0),
(27, 'FANTA', 'YAFFA', 'BUSUMBALA', 9885756, 'MALE', 49938782, 0, 0),
(28, 'UCHENNA', 'KWEKU', 'KAIRABA AVENUE', 977466, 'MALE', 88774939, 0, 0),
(29, 'LAMIN', 'YARBOE', 'FARABA SUTU', 9885778, 'MALE', 39938, 0, 0),
(30, 'JENEBA', 'JAGNE', 'PIRANG', 9884773, 'FEMALE', 2147483647, 0, 0),
(31, 'BASHRU', 'DARBOE', 'SOTUMA', 99088, 'MALE', 9000, 0, 0),
(32, 'OMAR', 'FYE', 'KANUBEH', 998, 'MALE', 887899, 0, 0),
(33, 'ALI', 'KRUBALLY', 'CHAMOI TUMANA', 99900, 'MALE', 9886, 0, 0),
(34, 'ALI', 'KRUBALLY', 'CHAMOI TUMANA', 49990, 'MALE', 9989330, 0, 0),
(35, 'JARRAY', 'SIDIBEH', 'HELA KUNDA', 9888876, 'FEMALE', 994778, 0, 0),
(36, 'NYIMA', 'TRAWALLEY', 'LONDON CORNER', 998876, 'FEMALE', 1125527, 0, 0),
(37, 'BINTA', 'CEESAY', 'GUNJUR', 9224899, 'FEMALE', 994883090, 0, 0),
(38, 'ALHAGIE', 'FATTY', 'WELLINGARA', 877993, 'MALE', 9990300, 0, 0),
(39, 'OUSAMAN ', 'KANDEH', 'BANJUL', 6666888, 'MALE', 666555, 0, 0),
(40, 'YAYA ', 'JAWO', 'SARRE BOJOR', 6899871, 'MALE', 55555, 0, 0),
(41, 'MAFANTA', 'DARBOE', 'BRIKAMA', 1111554, 'FEMALE', 222222, 0, 0),
(42, 'EBRIMA ', 'SOWE', 'BAKAU', 66666688, 'MALE', 2, 0, 0),
(43, 'JARIE', 'KAMARA', 'FATOTO', 6551244, 'FEMALE', 5777, 0, 0),
(44, 'JANABA', 'KAMARA', 'BASSE SANTU-SU', 5588989, 'FEMALE', 458, 0, 0),
(45, 'FATOU ', 'KRUBALLY', 'BAKOTEH BANTABAA', 2147483647, 'FEMALE', 2147483647, 0, 0),
(46, 'Ebrima ', 'Njie', 'Bakau', 9929154, 'MALE', 84994949, 0, 0),
(47, 'BINTA', 'JAMMEH', 'FAGI  KUNDA', 55447814, 'FEMALE', 54654, 0, 0),
(48, 'SOUL', 'BOJANG', 'BUSUMBALLA', 2147483647, 'MALE', 15, 0, 0),
(49, 'MUHAMADOU', 'BALDEH', 'SUKUTA', 588877777, 'MALE', 222245, 0, 0),
(50, 'MUHAMADOU', 'BALDEH', 'SUKUTA', 588877777, 'MALE', 22224522, 0, 0),
(51, 'Dembo ', 'Gaye', 'Tallinding', 7629920, 'MALE', 899928, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer_bank_details`
--

CREATE TABLE IF NOT EXISTS `customer_bank_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `bank_name` varchar(30) NOT NULL,
  `bank_branch` varchar(30) NOT NULL,
  `acc_number` int(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `customer_bank_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `customer_groups`
--

CREATE TABLE IF NOT EXISTS `customer_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) DEFAULT NULL,
  `customer_id` int(20) NOT NULL,
  `status` int(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `customer_id` (`customer_id`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `customer_groups`
--


-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(20) NOT NULL,
  `number_of_women` int(3) NOT NULL,
  `number_of_men` int(3) NOT NULL,
  `activity` text NOT NULL,
  `president` varchar(30) NOT NULL,
  `vice_president` varchar(30) NOT NULL,
  `treasurer` varchar(30) NOT NULL,
  `secretaty` varchar(30) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by_user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `group_id` (`group_name`,`modified_by_user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `group_name`, `number_of_women`, `number_of_men`, `activity`, `president`, `vice_president`, `treasurer`, `secretaty`, `created`, `modified`, `modified_by_user_id`) VALUES
(1, 'Yundum Women Society', 5, 1, 'The loan is for ..........', 'Fatou Ceesay', 'Mariama Sanneh', 'Bintou Njie', 'Modou Faal', '2011-12-04 09:49:38', '2011-12-04 15:33:17', 0),
(2, 'Yundum Women Society', 5, 0, 'The loan is for ..........', 'Fatou Ceesay', 'Mariama Sanneh', 'Bintou Njie', 'Modou Faal', '2011-12-04 09:50:02', '2011-12-04 09:50:02', 0),
(3, 'Mussamollo', 20, 50, 'Set steal', 'Musa jarra', 'Omie sabally', 'Ebrima sowe', 'Fatoumata baldeh', '2011-12-04 09:59:00', '2011-12-04 09:59:00', 0),
(4, 'SOBEYAA', 10, 5, 'VEGETABLE GARDENING', 'JENEBA BAH', 'FATOU TOURAY', 'OMAR BOJANG', 'YAHYA BADJIE', '2011-12-04 09:59:05', '2011-12-04 09:59:05', 0),
(5, 'FANG DEMA', 20, 10, 'AGRO-FORESTRY', 'ADAMA DEM', 'SALIMATOU TOURAY', 'KEBBA NJIE', 'MUSA BARROW', '2011-12-04 10:01:32', '2011-12-04 10:01:32', 0),
(6, 'NYO DEMA', 50, 100, 'SKILLS ACQUISITION AND DEVELOPMENT\r\n', 'OUMIE MBALLOW', 'FAFA JANNEH', 'BINTA FAAL', 'KAWSU SILLAH', '2011-12-04 10:04:51', '2011-12-04 10:04:51', 0),
(7, 'BACK TO THE LAND', 5, 70, 'AGRICULTURE\r\nFISHING AND\r\nBAKERY', 'MOMODOU NJIE', 'MR. FREEMAN', 'SIDAT TOURAY', 'EDRISA SANNEH', '2011-12-04 10:08:08', '2011-12-04 10:08:08', 0),
(8, 'Naasue Karl', 15, 10, 'NO TO BACK WAY !', 'Saine Krubally', 'Alpha yaya Jallow', 'Haja Turay', 'Binta Jawo', '2011-12-04 10:10:50', '2011-12-04 10:10:50', 0),
(9, 'FANDAMAA KAFO', 30, 60, 'TO DEVELOPS THE YOUNG PEOPLE .', 'YA AMIE  MANNEH', 'FODAY BALDEH', 'BINTU JLLOWA', 'OUSAMAN FATTY', '2011-12-04 10:16:38', '2011-12-04 10:16:38', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kins`
--

CREATE TABLE IF NOT EXISTS `kins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `relationship` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `kins`
--


-- --------------------------------------------------------

--
-- Table structure for table `loanaccounts`
--

CREATE TABLE IF NOT EXISTS `loanaccounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `amount` double NOT NULL,
  `paymentperiod` int(11) NOT NULL,
  `interest` int(11) NOT NULL,
  `monthlydeduction` double NOT NULL,
  `maturitydate` date NOT NULL,
  `disbursementdate` date NOT NULL,
  `branch_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `loanaccounts`
--

INSERT INTO `loanaccounts` (`id`, `customer_id`, `type`, `amount`, `paymentperiod`, `interest`, `monthlydeduction`, `maturitydate`, `disbursementdate`, `branch_id`, `created`, `modified`, `user`, `user_id`) VALUES
(1, 0, 'ADDLOANACCOUNT', 100, 20, 20, 5, '2012-12-04', '2013-12-04', 0, '2011-12-04 13:19:26', '2011-12-04 13:19:26', '', 0),
(2, 0, 'ADDLOANACCOUNT', 200, 3, 15, 50, '2011-12-08', '2011-11-23', 0, '2011-12-04 13:23:43', '2011-12-04 13:23:43', '', 0),
(3, 0, '1', 350, 5, 20, 30, '2011-11-04', '2011-10-11', 0, '2011-12-04 13:25:06', '2011-12-04 13:25:06', '', 0),
(4, 0, '1', 350, 5, 20, 30, '2011-11-04', '2011-10-11', 0, '2011-12-04 13:25:36', '2011-12-04 13:25:36', '', 0),
(5, 0, '1', 350, 5, 20, 30, '2011-12-20', '2011-12-11', 0, '2011-12-04 13:26:01', '2011-12-04 13:26:01', '', 0),
(6, 0, '1', 350, 5, 20, 30, '2011-12-20', '2011-12-11', 0, '2011-12-04 13:26:21', '2011-12-04 13:26:21', '', 0),
(7, 0, '1', 350, 5, 20, 30, '2011-12-20', '2011-12-11', 0, '2011-12-04 13:26:32', '2011-12-04 13:26:32', '', 0),
(8, 0, '1', 350, 5, 20, 30, '2011-12-20', '2011-12-11', 0, '2011-12-04 13:26:41', '2011-12-04 13:26:41', '', 0),
(9, 0, '1', 350, 5, 20, 30, '2011-12-20', '2011-12-11', 0, '2011-12-04 13:27:18', '2011-12-04 13:27:18', '', 0),
(10, 0, 'ADDLOANACCOUNT', 300, 5, 20, 30, '2011-12-04', '2011-12-04', 0, '2011-12-04 13:28:24', '2011-12-04 13:28:24', '', 0),
(11, 0, 'ADDLOANACCOUNT', 10000, 123, 20, 30, '2020-12-04', '2011-12-04', 0, '2011-12-04 13:29:33', '2011-12-04 13:29:33', '', 0),
(12, 0, '1', 450, 30, 50, 25, '2011-12-10', '2011-11-04', 0, '2011-12-04 13:29:46', '2011-12-04 13:29:46', '', 0),
(13, 0, 'ADDLOANACCOUNT', 400, 30, 50, 25, '2011-12-10', '2011-11-04', 0, '2011-12-04 13:30:48', '2011-12-04 13:30:48', '', 0),
(14, 0, 'ADDLOANACCOUNT', 100, 12, 14, 6, '2013-12-04', '2011-12-04', 0, '2011-12-04 13:30:55', '2011-12-04 13:30:55', '', 0),
(15, 0, 'ADDLOANACCOUNT', 400, 30, 50, 25, '2011-12-10', '2011-11-04', 0, '2011-12-04 13:31:07', '2011-12-04 13:31:07', '', 0),
(16, 0, 'ADDLOANACCOUNT', 400, 30, 20, 25, '2011-12-04', '2011-11-10', 0, '2011-12-04 13:32:36', '2011-12-04 13:32:36', '', 0),
(17, 0, 'ADDLOANACCOUNT', 400, 30, 20, 25, '2011-12-04', '2011-11-10', 0, '2011-12-04 13:33:38', '2011-12-04 13:33:38', '', 0),
(18, 0, 'ADDLOANACCOUNT', 100, 12, 14, 6, '2013-12-04', '2011-12-04', 0, '2011-12-04 13:33:39', '2011-12-04 13:33:39', '', 0),
(19, 0, '1', 225, 15, 25, 15, '2012-09-12', '2012-08-11', 0, '2011-12-04 13:34:41', '2011-12-04 13:34:41', '', 0),
(20, 0, '1', 225, 15, 25, 15, '2012-09-12', '2012-08-11', 0, '2011-12-04 13:34:53', '2011-12-04 13:34:53', '', 0),
(21, 2, 'ADDLOANACCOUNT', 225, 15, 14, 10, '2012-11-11', '2012-10-12', 0, '2011-12-04 13:36:08', '2011-12-04 13:36:08', '', 0),
(22, 2, 'ADDLOANACCOUNT', 1000, 300, 29, 78, '2011-12-04', '2013-12-04', 0, '2011-12-04 13:36:16', '2011-12-04 13:36:16', '', 0),
(23, 0, '1', 1500, 6, 9, 32, '2013-09-13', '2013-10-08', 0, '2011-12-04 13:37:43', '2011-12-04 13:37:43', '', 0),
(24, 0, '1', 1500, 6, 9, 32, '2013-09-13', '2013-10-08', 0, '2011-12-04 13:37:50', '2011-12-04 13:37:50', '', 0),
(25, 2, 'ADDLOANACCOUNT', 225, 6, 14, 32, '2013-10-12', '2013-11-04', 0, '2011-12-04 13:39:10', '2011-12-04 13:39:10', '', 0),
(26, 2, 'ADDLOANACCOUNT', 1000000, 300, 10, 500, '2012-12-04', '2013-12-04', 0, '2011-12-04 13:49:38', '2011-12-04 13:49:38', '', 0),
(27, 2, 'ADDLOANACCOUNT', 1000000, 300, 10, 500, '2012-12-04', '2013-12-04', 0, '2011-12-04 13:49:56', '2011-12-04 13:49:56', '', 0),
(28, 2, 'ADDLOANACCOUNT', 1000000, 300, 10, 500, '2012-12-04', '2013-12-04', 0, '2011-12-04 13:50:56', '2011-12-04 13:50:56', '', 0),
(29, 2, 'ADDLOANACCOUNT', 100, 11, 11, 19, '2012-12-04', '2013-12-04', 0, '2011-12-04 13:57:21', '2011-12-04 13:57:21', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loantransactions`
--

CREATE TABLE IF NOT EXISTS `loantransactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_ID` int(25) NOT NULL,
  `loan_id` int(11) NOT NULL,
  `payment_date` date NOT NULL,
  `opening_balanace` double NOT NULL,
  `principal_amount` double NOT NULL,
  `interest_paid` double NOT NULL,
  `closing_balance` double NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  `modified_by` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `loantransactions`
--


-- --------------------------------------------------------

--
-- Table structure for table `loan_types`
--

CREATE TABLE IF NOT EXISTS `loan_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `loan_types`
--

INSERT INTO `loan_types` (`id`, `name_type`) VALUES
(1, 'Agriculture'),
(2, 'Commercial'),
(3, 'Senera');

-- --------------------------------------------------------

--
-- Table structure for table `savingtransactions`
--

CREATE TABLE IF NOT EXISTS `savingtransactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `opening_balance` double NOT NULL,
  `Amount` double NOT NULL,
  `closing_balance` double NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  `modified_by` varchar(25) NOT NULL,
  `receiptNo` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `savingtransactions`
--

INSERT INTO `savingtransactions` (`id`, `customer_id`, `branch_id`, `type`, `opening_balance`, `Amount`, `closing_balance`, `created_date`, `modified_date`, `modified_by`, `receiptNo`) VALUES
(1, 1, 7, 'DEPOSIT', 0, 200, 0, '2011-12-04 14:46:00', '2011-12-04 14:46:00', '1', '0044'),
(2, 2, 6, 'WITHDRAW', 0, 3000, 0, '2011-12-04 14:51:00', '2011-12-04 14:51:00', '1', '0055'),
(3, 3, 7, 'INTEREST', 0, 250, 0, '2011-12-04 14:54:00', '2011-12-04 14:54:00', '1', '0051'),
(4, 4, 14, 'DEPOSIT', 0, 3550, 0, '2011-12-04 14:55:00', '2011-12-04 14:55:00', '1', '0052'),
(5, 5, 10, 'WITHDRAW', 0, 2000, 0, '2011-12-04 14:56:00', '2011-12-04 14:56:00', '1', '0041'),
(6, 6, 11, 'INTEREST', 0, 3500, 0, '2011-12-04 14:57:00', '2011-12-04 14:57:00', '1', '0054'),
(7, 7, 15, 'INTEREST', 0, 1000, 0, '2011-12-04 14:58:00', '2011-12-04 14:58:00', '1', '0047'),
(8, 8, 8, 'INTEREST', 0, 1000, 0, '2011-12-04 14:58:00', '2011-12-04 14:58:00', '1', '0046'),
(9, 9, 9, 'INTEREST', 0, 1000, 0, '2011-12-04 14:58:00', '2011-12-04 14:58:00', '1', '0056'),
(10, 10, 10, 'DEPOSIT', 0, 1500, 0, '2011-12-04 15:00:00', '2011-12-04 15:00:00', '1', '0057'),
(11, 11, 13, 'WITHDRAW', 0, 2500, 0, '2011-12-04 15:04:00', '2011-12-04 15:04:00', '1', '0048'),
(12, 12, 11, 'INTEREST', 0, 100, 0, '2011-12-04 15:05:00', '2011-12-04 15:05:00', '1', '0058'),
(13, 13, 5, 'DEPOSIT', 0, 500, 0, '2011-12-04 15:06:00', '2011-12-04 15:06:00', '1', '0059'),
(14, 14, 6, 'WITHDRAW', 0, 300, 0, '2011-12-04 15:06:00', '2011-12-04 15:06:00', '1', '0049'),
(15, 15, 7, 'INTEREST', 0, 650, 0, '2011-12-04 15:07:00', '2011-12-04 15:07:00', '1', '0033'),
(16, 16, 10, 'INTEREST', 0, 400, 0, '2011-12-04 15:09:00', '2011-12-04 15:09:00', '1', '0034');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE IF NOT EXISTS `transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `balance` decimal(10,0) NOT NULL,
  `status` varchar(20) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `note` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `modified_user_id` int(11) NOT NULL,
  `reciept_number` int(30) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `customer_id` (`customer_id`,`branch_id`,`modified_user_id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `customer_id`, `branch_id`, `type`, `balance`, `status`, `parent_id`, `note`, `created`, `modified`, `modified_user_id`, `reciept_number`, `amount`) VALUES
(1, 2, 1, 'LOAN', 0, '', 0, 'Loan to buy groundnuts', '2011-12-04 10:22:58', '2011-12-04 10:22:58', 0, 0, 1000),
(2, 4, 1, 'LOAN', 0, '', 0, 'to buy........', '2011-12-04 10:24:32', '2011-12-04 10:24:32', 0, 0, 5000),
(3, 9, 1, 'LOAN', 0, '', 0, 'To register and start busine', '2011-12-04 10:28:02', '2011-12-04 10:28:02', 0, 0, 10000),
(4, 5, 1, 'LOAN', 0, '', 0, 'TO OPEN INTERNET CAFE ', '2011-12-04 10:28:35', '2011-12-04 10:28:35', 0, 0, 500),
(5, 3, 3, 'ANNUALSUBSCRIPTION', 0, '', 0, 'Annual sub', '2011-12-04 10:30:04', '2011-12-04 10:30:04', 0, 0, 768),
(6, 2, 1, 'LOAN', 0, '', 0, 'To start business', '2011-12-04 10:30:06', '2011-12-04 10:30:06', 0, 0, 50000),
(7, 0, 0, 'LOAN', 500, '', 0, '', '2011-12-04 10:42:06', '2011-12-04 10:42:06', 0, 2232, 200),
(8, 2, 1, 'ANNUALSUBSCRIPTION', 0, '', 0, 'Test', '2011-12-04 11:20:25', '2011-12-04 11:20:25', 0, 0, 4500),
(9, 0, 0, 'LOAN', 500, '', 0, '', '2011-12-04 11:22:52', '2011-12-04 11:22:52', 0, 2232, 200),
(10, 2, 1, 'APPLICATIONFEE', 0, '', 0, 'buy food', '2011-12-04 11:23:12', '2011-12-04 11:23:12', 0, 0, 100),
(11, 2, 1, 'APPLICATIONFEE', 0, '', 0, 'new game', '2011-12-04 11:24:24', '2011-12-04 11:24:24', 0, 0, 100),
(12, 2, 2, 'PROCESSINGFEE', 0, '', 0, 'for june payment', '2011-12-04 11:47:20', '2011-12-04 11:47:20', 0, 0, 100),
(13, 2, 4, 'ADDCREDIT', 0, '', 0, 'for loan..', '2011-12-04 11:58:25', '2011-12-04 11:58:25', 0, 0, 89),
(14, 2, 1, 'ADDCREDIT', 0, '', 0, 'deposit', '2011-12-04 12:06:38', '2011-12-04 12:06:38', 0, 0, 1000),
(15, 2, 5, 'ADDCREDIT', 0, '', 0, 'for transportation', '2011-12-04 12:07:10', '2011-12-04 12:07:10', 0, 0, 1000),
(16, 2, 2, 'ADDCREDIT', 0, '', 0, 'to buy goods', '2011-12-04 12:08:20', '2011-12-04 12:08:20', 0, 0, 5000),
(17, 2, 4, 'ADDCREDIT', 0, '', 0, 'to buy goods', '2011-12-04 12:08:45', '2011-12-04 12:08:45', 0, 0, 5000),
(18, 2, 1, 'ADDDEBIT', 0, '', 0, 'withdrawal ', '2011-12-04 12:09:15', '2011-12-04 12:09:15', 0, 0, 500),
(19, 2, 6, 'ADDCREDIT', 0, '', 0, 'university tuition fee', '2011-12-04 12:09:32', '2011-12-04 12:09:32', 0, 0, 35000),
(20, 2, 1, 'ANNUALSUBSCRIPTION', 0, '', 0, 'Annual subs fee', '2011-12-04 12:09:47', '2011-12-04 12:09:47', 0, 0, 50),
(21, 2, 8, 'ADDCREDIT', 0, '', 0, 'for food stuffs', '2011-12-04 12:10:56', '2011-12-04 12:10:56', 0, 0, 500),
(22, 2, 5, 'LOAN', 0, '', 0, 'pocket money', '2011-12-04 12:11:57', '2011-12-04 12:11:57', 0, 0, 2000),
(23, 2, 1, 'APPLICATIONFEE', 0, '', 0, 'application fee', '2011-12-04 12:12:05', '2011-12-04 12:12:05', 0, 0, 25),
(24, 2, 10, 'LOAN', 0, '', 0, 'to buy goods', '2011-12-04 12:13:05', '2011-12-04 12:13:05', 0, 0, 3000),
(25, 2, 1, 'PROCESSINGFEE', 0, '', 0, 'Pros fee', '2011-12-04 12:13:09', '2011-12-04 12:13:09', 0, 0, 10),
(26, 2, 4, 'LOAN', 0, '', 0, 'school fee', '2011-12-04 12:14:06', '2011-12-04 12:14:06', 0, 0, 1500),
(27, 2, 10, 'ADDCREDIT', 0, '', 0, 'tuition fee', '2011-12-04 12:14:39', '2011-12-04 12:14:39', 0, 0, 3000),
(28, 2, 7, 'LOAN', 0, '', 0, 'for lunch', '2011-12-04 12:15:47', '2011-12-04 12:15:47', 0, 0, 650),
(29, 2, 5, 'ADDDEBIT', 0, '', 0, '  payment of loan', '2011-12-04 12:17:07', '2011-12-04 12:17:07', 0, 0, 2000),
(30, 2, 6, 'ADDDEBIT', 0, '', 0, 'for dinner', '2011-12-04 12:18:55', '2011-12-04 12:18:55', 0, 0, 250),
(31, 2, 10, 'ADDDEBIT', 0, '', 0, 'for house rent', '2011-12-04 12:20:13', '2011-12-04 12:20:13', 0, 0, 560),
(32, 2, 5, 'ANNUALSUBSCRIPTION', 0, '', 0, 'for bills', '2011-12-04 12:21:44', '2011-12-04 12:21:44', 0, 0, 150),
(33, 2, 7, 'ANNUALSUBSCRIPTION', 0, '', 0, 'for breakfast', '2011-12-04 12:22:54', '2011-12-04 12:22:54', 0, 0, 350),
(34, 2, 6, 'ANNUALSUBSCRIPTION', 0, '', 0, 'for goods', '2011-12-04 12:25:38', '2011-12-04 12:25:38', 0, 0, 400),
(35, 2, 9, 'ANNUALSUBSCRIPTION', 0, '', 0, 'for ferry transportation', '2011-12-04 12:26:29', '2011-12-04 12:26:29', 0, 0, 750),
(36, 2, 11, 'ANNUALSUBSCRIPTION', 0, '', 0, 'to buy air tickets', '2011-12-04 12:28:13', '2011-12-04 12:28:13', 0, 0, 18000),
(37, 2, 9, 'ADDDEBIT', 0, '', 0, 'for drink', '2011-12-04 12:29:20', '2011-12-04 12:29:20', 0, 0, 50),
(38, 2, 6, 'APPLICATIONFEE', 0, '', 0, 'for application form', '2011-12-04 12:30:06', '2011-12-04 12:30:06', 0, 0, 150),
(39, 2, 8, 'APPLICATIONFEE', 0, '', 0, 'for printing', '2011-12-04 12:32:42', '2011-12-04 12:32:42', 0, 0, 250),
(40, 2, 7, 'PROCESSINGFEE', 0, '', 0, 'for anything', '2011-12-04 12:34:44', '2011-12-04 12:34:44', 0, 0, 325),
(41, 2, 11, 'PROCESSINGFEE', 0, '', 0, 'for what ever you want to do with it', '2011-12-04 12:36:15', '2011-12-04 12:36:15', 0, 0, 425),
(42, 2, 14, 'PROCESSINGFEE', 0, '', 0, 'for shoppining', '2011-12-04 12:38:09', '2011-12-04 12:38:09', 0, 0, 2500),
(43, 2, 14, 'PROCESSINGFEE', 0, '', 0, 'for pocket money', '2011-12-04 12:39:26', '2011-12-04 12:39:26', 0, 0, 4500),
(44, 2, 3, 'APPLICATIONFEE', 0, '', 0, 'used for cattle rearing', '2011-12-04 12:40:31', '2011-12-04 12:40:31', 0, 0, 5500);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `title` varchar(10) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `title`, `firstname`, `lastname`, `created`, `modified`) VALUES
(1, 'rider', 'tea', 'MR', 'Alagie ', 'Sillah', '2011-12-03 18:29:43', '2011-12-03 18:29:43'),
(2, 'sheikhmalaine', 'pqrstuv_9', 'MR', 'Malaine', 'Hydara', '2011-12-04 11:57:40', '2011-12-04 11:57:40'),
(6, 'pjabang', 'b32b9a92a5b3387ab291b8d2bc331cc790309c49', 'MR', 'Pa Essa', 'Jabang', '2011-12-04 12:52:20', '2011-12-04 12:52:20'),
(7, 'ousman', '969f213a9f0e5ad1480672289b195ce8089f3406', 'MR', 'ousman', 'jammeh', '2011-12-04 13:04:29', '2011-12-04 13:04:29'),
(8, 'sulayman', 'bd83a4c49abc0d9e6384687a5b475bc5f76f8e4c', 'MR', 'sulayman', 'jallow', '2011-12-04 13:05:57', '2011-12-04 13:05:57'),
(9, 'Kalifa', '41f87c91bfe4693c4b677986d868b96970340368', 'MR', 'Kalifa', 'Faal', '2011-12-04 13:07:13', '2011-12-04 15:34:08'),
(10, 'baboucarr', 'cc4a318d25a9c4cd0ad18134c4b39fe30a3092ae', 'MR', 'Baboucarr', 'Sanneh', '2011-12-04 13:08:37', '2011-12-04 13:08:37'),
(11, 'fabakary', 'd964cb9ad72749c7e49c5bea019937aa13449014', 'MR', 'Fabakary ', 'Minteh', '2011-12-04 13:09:27', '2011-12-04 13:09:27'),
(12, 'ebrima', '2035be2a87653eeb24723f3490609e254b425cdd', 'MR', 'Ebrima', 'Camara', '2011-12-04 13:10:06', '2011-12-04 13:10:06'),
(13, 'kawsu', '2b895bf18e1bcd47c922de07d21428196a26c716', 'MR', 'Kawsu', 'Camara', '2011-12-04 13:11:13', '2011-12-04 13:11:13'),
(16, 'abdoulie', 'bd83a4c49abc0d9e6384687a5b475bc5f76f8e4c', 'MR', 'Abdoulie ', 'Jallow', '2011-12-04 13:14:40', '2011-12-04 13:14:40'),
(15, 'ousman', '434413d1fd51ad5cda97547843cd811062a6455e', 'MR', 'Ousman', 'Janneh', '2011-12-04 13:13:12', '2011-12-04 13:13:12'),
(17, 'ousman ', 'af76ff41ee40dedfeb73c947fe09bad017429e01', 'MR', 'Ousman ', 'Jah', '2011-12-04 13:15:39', '2011-12-04 13:15:39'),
(18, 'Aji Fatou', 'a9c99adea9d9e6aee9508bc23c11cd2aab283483', 'MISS', 'Aji Fatou', 'Sey', '2011-12-04 13:17:03', '2011-12-04 15:18:47');
