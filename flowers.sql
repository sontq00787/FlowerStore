-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2015 at 04:31 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `flowers`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookmark`
--

CREATE TABLE IF NOT EXISTS `bookmark` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `uri` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
`id` int(10) unsigned NOT NULL,
  `user_comment_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_comment_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_comment_website` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
`id` int(10) unsigned NOT NULL,
  `country_code` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `country_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
`id` int(10) unsigned NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `url`, `description`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'http://localhost/FlowerStore/public/florist-hands-showing-red-roses-bouquet-flowers.jpg', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'http://localhost/FlowerStore/public/florist-is-phoning.jpg', '', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'http://localhost/FlowerStore/public/flower.jpg', '', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'http://localhost/FlowerStore/public/flower-shop-in-gorinchem-netherlands.jpg', '', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'http://localhost/FlowerStore/public/happy-florist.jpg', '', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'http://localhost/FlowerStore/public/lemon-trees-in-pots.jpg', '', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_02_28_232049_create_country_table', 1),
('2015_03_01_002232_create_order_table', 1),
('2015_03_01_002259_create_product_table', 2),
('2015_03_01_002320_create_category_table', 2),
('2015_03_01_010229_create_rating_table', 2),
('2015_03_01_010356_create_tagged_table', 2),
('2015_03_01_011617_create_comment_table', 2),
('2015_03_01_013225_create_bookmark_table', 2),
('2015_03_01_013820_create_promotion_table', 2),
('2015_03_01_021846_create_image_table', 2),
('2015_03_01_023649_create_orderdetail_table', 2),
('2015_03_01_060937_create_store_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` char(40) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address_detail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `town_city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state_country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postcode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `notes` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country_code` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `state` int(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `first_name`, `last_name`, `email`, `phone`, `company_name`, `address`, `address_detail`, `town_city`, `state_country`, `postcode`, `notes`, `country_code`, `state`, `created_at`, `updated_at`) VALUES
('4n96eabdALUGfHfwVCq4JgrUcK3lKR01BSjTk0U9', 'Nam', 'Bang', 'admin@example.com', '0234992374', 'Lolotica', 'Hai duong', '', 'Hai duong', 'Vietnam', 'oisfdu7f', '', 'VN', 1, '2015-03-02 20:18:22', '2015-03-02 20:18:22'),
('AmRzIkkDzIaQYsHREDPFtiZYlfA66dATBOStfN8u', 'Nam', 'Bang', 'admin@example.com', '0234992374', 'Lolotica', 'Hai duong', '', 'Hai duong', 'Vietnam', 'oisfdu7f', '', 'VN', 1, '2015-03-02 20:18:19', '2015-03-02 20:18:19'),
('BT9gqp4O8sV0qKLoR4E0rk8ub7leajkGa62fZu2z', 'Nam', 'Bang', 'admin@example.com', '0234992374', 'Lolotica', 'Hai duong', '', 'Hai duong', 'Vietnam', 'oisfdu7f', '', 'VN', 1, '2015-03-02 20:18:19', '2015-03-02 20:18:19'),
('DqsyLYbg0UWnoJRrTqUyPBZ2gLbR6oT9mPJszbtN', 'Nam', 'Bang', 'admin@example.com', '0234992374', 'Lolotica', 'Hai duong', '', 'Hai duong', 'Vietnam', 'oisfdu7f', '', 'VN', 1, '2015-03-02 20:18:18', '2015-03-02 20:18:18'),
('dsJpt0lE58yCVsrFsQFJI7Et1ylM95BAWy5mHdJb', 'Nam', 'Bang', 'admin@example.com', '0234992374', 'Lolotica', 'Hai duong', '', 'Hai duong', 'Vietnam', 'oisfdu7f', '', 'VN', 1, '2015-03-02 20:18:20', '2015-03-02 20:18:20'),
('gZzYUbvhipF3JHF0xtx0bOvAOOiu9sTT7rqCvG4K', 'Do', 'Do', 'hieudtse02086@gmail.com', '0923487913', 'Home', 'Hanoi', '', 'Hanoi', 'Vietnam', 'ih0fsd09', 'home at 15:30', 'VN', 0, '2015-03-02 03:41:34', '2015-03-02 10:05:14'),
('jewWVGnQGavWt1GhBR1rdHbxwYQkaoVtUGLiK4gN', 'Hieu', 'Do', 'hieudtse02086@gmail.com', '0937409123', 'Home', 'Hanoi', '', 'Hanoi', 'Vietnam', 'isdfih234', 'Please ship at 6:00PM', 'VN', 2, '2015-03-02 03:39:25', '2015-03-02 03:39:25'),
('uFHghnaskEt17ujRI0lYLF8grjGwgcCG1FW3eYsM', 'Nam', 'Bang', 'admin@example.com', '0234992374', 'Lolotica', 'Hai duong', '', 'Hai duong', 'Vietnam', 'oisfdu7f', '', 'VN', 1, '2015-03-02 20:18:19', '2015-03-02 20:18:19'),
('UPAJiGeFbaQUmqpGnlnY1kLODKQt0E7Kq2s7ndpG', 'Nam', 'Bang', 'admin@example.com', '0234992374', 'Lolotica', 'Hai duong', '', 'Hai duong', 'Vietnam', 'oisfdu7f', '', 'VN', 1, '2015-03-02 20:18:21', '2015-03-02 20:18:21'),
('y5OPn85ogPGL1PWXmOLq3LxIGEH9ZaBN3l4MF7lA', 'Nam', 'Bang', 'admin@example.com', '0234992374', 'Lolotica', 'Hai duong', '', 'Hai duong', 'Vietnam', 'oisfdu7f', '', 'VN', 1, '2015-03-02 20:17:59', '2015-03-02 20:17:59'),
('Z8YN9NocawXs2oBac3UkS5edMGklLYmem6sm9ygW', 'Nam', 'Bang', 'admin@example.com', '0234992374', 'Lolotica', 'Hai duong', '', 'Hai duong', 'Vietnam', 'oisfdu7f', '', 'VN', 1, '2015-03-02 20:18:22', '2015-03-02 20:18:22'),
('zbbnMcKXtVX8AjtFMUSeQ7Z2iYtM4LNtrgoZ3zgA', 'Nam', 'Bang', 'admin@example.com', '0234992374', 'Lolotica', 'Hai duong', '', 'Hai duong', 'Vietnam', 'oisfdu7f', '', 'VN', 1, '2015-03-02 20:18:17', '2015-03-02 20:18:17');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE IF NOT EXISTS `orderdetail` (
`id` int(10) unsigned NOT NULL,
  `order_id` char(40) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`id`, `order_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(5, 'jewWVGnQGavWt1GhBR1rdHbxwYQkaoVtUGLiK4gN', 3, 3, '2015-03-02 03:39:25', '2015-03-02 03:39:25'),
(6, 'gZzYUbvhipF3JHF0xtx0bOvAOOiu9sTT7rqCvG4K', 3, 3, '2015-03-02 03:41:34', '2015-03-02 03:41:34'),
(7, 'gZzYUbvhipF3JHF0xtx0bOvAOOiu9sTT7rqCvG4K', 2, 1, '2015-03-02 03:41:34', '2015-03-02 03:41:34'),
(8, 'y5OPn85ogPGL1PWXmOLq3LxIGEH9ZaBN3l4MF7lA', 8, 3, '2015-03-02 20:17:59', '2015-03-02 20:17:59'),
(9, 'zbbnMcKXtVX8AjtFMUSeQ7Z2iYtM4LNtrgoZ3zgA', 8, 3, '2015-03-02 20:18:17', '2015-03-02 20:18:17'),
(10, 'DqsyLYbg0UWnoJRrTqUyPBZ2gLbR6oT9mPJszbtN', 8, 3, '2015-03-02 20:18:18', '2015-03-02 20:18:18'),
(11, 'BT9gqp4O8sV0qKLoR4E0rk8ub7leajkGa62fZu2z', 8, 3, '2015-03-02 20:18:19', '2015-03-02 20:18:19'),
(12, 'AmRzIkkDzIaQYsHREDPFtiZYlfA66dATBOStfN8u', 8, 3, '2015-03-02 20:18:19', '2015-03-02 20:18:19'),
(13, 'uFHghnaskEt17ujRI0lYLF8grjGwgcCG1FW3eYsM', 8, 3, '2015-03-02 20:18:19', '2015-03-02 20:18:19'),
(14, 'dsJpt0lE58yCVsrFsQFJI7Et1ylM95BAWy5mHdJb', 8, 3, '2015-03-02 20:18:21', '2015-03-02 20:18:21'),
(15, 'UPAJiGeFbaQUmqpGnlnY1kLODKQt0E7Kq2s7ndpG', 8, 3, '2015-03-02 20:18:21', '2015-03-02 20:18:21'),
(16, '4n96eabdALUGfHfwVCq4JgrUcK3lKR01BSjTk0U9', 8, 3, '2015-03-02 20:18:22', '2015-03-02 20:18:22'),
(17, 'Z8YN9NocawXs2oBac3UkS5edMGklLYmem6sm9ygW', 8, 3, '2015-03-02 20:18:22', '2015-03-02 20:18:22');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `short_description` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `introduction` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dimensions` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `guarantee` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `availability` tinyint(1) NOT NULL DEFAULT '1',
  `madein` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` int(11) NOT NULL,
  `amount` decimal(12,2) NOT NULL,
  `amount_changed` decimal(12,2) NOT NULL DEFAULT '0.00',
  `store_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `short_description`, `introduction`, `description`, `image`, `weight`, `dimensions`, `color`, `guarantee`, `availability`, `madein`, `category`, `amount`, `amount_changed`, `store_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Home decoration', '', 'In commodo, orci a ullamcorper pulvinar, tortor enim ultrices urna, eu molestie mauris leo eget arcu. In malesuada ligula ligula, eget lacinia est vulputate ac. Pellentesque eu aliquam lacus.Etiam sed ullamcorper ex. Donec consequat nec quam at tempor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean semper faucibus lacus, vel pretium metus. Praesent suscipit malesuada pretium. Quisque ultrices feugiat nulla vel molestie. Mauris suscipit quis dui et pharetra. Quisque venenatis urna ut dap', 'http://localhost/FlowerStore/public/_img/florist-hands-showing-red-roses-bouquet-flowers.jpg', '1.25 Kg', '20x10x20 Cm', 'Purple', '1 year', 1, 'United States of America', 0, '170000.00', '0.00', 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Home decoration', '', 'In commodo, orci a ullamcorper pulvinar, tortor enim ultrices urna, eu molestie mauris leo eget arcu. In malesuada ligula ligula, eget lacinia est vulputate ac. Pellentesque eu aliquam lacus.\r\n\r\nEtiam sed ullamcorper ex. Donec consequat nec quam at tempor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean semper faucibus lacus, vel pretium metus. Praesent suscipit malesuada pretium. Quisque ultrices feugiat nulla vel molestie. Mauris suscipit quis dui et pharetra. Quisque venenatis urna ut dap', 'http://localhost/FlowerStore/public/_img/florist-is-phoning.jpg', '1.25 Kg', '20x10x20 Cm', 'Purple', '1 year', 1, 'United States of America', 0, '170000.00', '0.00', 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Home decoration', '', 'In commodo, orci a ullamcorper pulvinar, tortor enim ultrices urna, eu molestie mauris leo eget arcu. In malesuada ligula ligula, eget lacinia est vulputate ac. Pellentesque eu aliquam lacus.\r\n\r\nEtiam sed ullamcorper ex. Donec consequat nec quam at tempor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean semper faucibus lacus, vel pretium metus. Praesent suscipit malesuada pretium. Quisque ultrices feugiat nulla vel molestie. Mauris suscipit quis dui et pharetra. Quisque venenatis urna ut dap', 'http://localhost/FlowerStore/public/_img/florist-with-tulips.jpg', '1.25 Kg', '20x10x20 Cm', 'Purple', '1 year', 1, 'United States of America', 0, '170000.00', '0.00', 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Home decoration', 'Great home decoration.', 'In commodo, orci a ullamcorper pulvinar, tortor enim ultrices urna, eu molestie mauris leo eget arcu. In malesuada ligula ligula, eget lacinia est vulputate ac. Pellentesque eu aliquam lacus.\r\n\r\nEtiam sed ullamcorper ex. Donec consequat nec quam at tempor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean semper faucibus lacus, vel pretium metus. Praesent suscipit malesuada pretium. Quisque ultrices feugiat nulla vel molestie. Mauris suscipit quis dui et pharetra. Quisque venenatis urna ut dap', 'http://localhost/FlowerStore/public/_img/flower.jpg', '1.25 Kg', '20x10x20 Cm', 'Purple', '1 year', 1, 'United States of America', 0, '170000.00', '0.00', 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Home decoration', 'Fresh flowers in small pack.', 'In commodo, orci a ullamcorper pulvinar, tortor enim ultrices urna, eu molestie mauris leo eget arcu. In malesuada ligula ligula, eget lacinia est vulputate ac. Pellentesque eu aliquam lacus.\r\n\r\nEtiam sed ullamcorper ex. Donec consequat nec quam at tempor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean semper faucibus lacus, vel pretium metus. Praesent suscipit malesuada pretium. Quisque ultrices feugiat nulla vel molestie. Mauris suscipit quis dui et pharetra. Quisque venenatis urna ut dap', 'http://localhost/FlowerStore/public/_img/flower-shop-in-gorinchem-netherlands.jpg', '1.25 Kg', '20x10x20 Cm', 'Purple', '1 year', 1, 'United States of America', 0, '170000.00', '0.00', 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Home decoration', '', 'In commodo, orci a ullamcorper pulvinar, tortor enim ultrices urna, eu molestie mauris leo eget arcu. In malesuada ligula ligula, eget lacinia est vulputate ac. Pellentesque eu aliquam lacus.\r\n\r\nEtiam sed ullamcorper ex. Donec consequat nec quam at tempor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean semper faucibus lacus, vel pretium metus. Praesent suscipit malesuada pretium. Quisque ultrices feugiat nulla vel molestie. Mauris suscipit quis dui et pharetra. Quisque venenatis urna ut dap', 'http://localhost/FlowerStore/public/_img/happy-florist.jpg', '1.25 Kg', '20x10x20 Cm', 'Purple', '1 year', 1, 'United States of America', 0, '170000.00', '130000.00', 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Home decoration', '', 'In commodo, orci a ullamcorper pulvinar, tortor enim ultrices urna, eu molestie mauris leo eget arcu. In malesuada ligula ligula, eget lacinia est vulputate ac. Pellentesque eu aliquam lacus.\r\n\r\nEtiam sed ullamcorper ex. Donec consequat nec quam at tempor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean semper faucibus lacus, vel pretium metus. Praesent suscipit malesuada pretium. Quisque ultrices feugiat nulla vel molestie. Mauris suscipit quis dui et pharetra. Quisque venenatis urna ut dap', 'http://localhost/FlowerStore/public/_img/lemon-trees-in-pots.jpg', '1.25 Kg', '20x10x20 Cm', 'Purple', '1 year', 1, 'United States of America', 0, '170000.00', '0.00', 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Home decoration', '', 'In commodo, orci a ullamcorper pulvinar, tortor enim ultrices urna, eu molestie mauris leo eget arcu. In malesuada ligula ligula, eget lacinia est vulputate ac. Pellentesque eu aliquam lacus.\r\n\r\nEtiam sed ullamcorper ex. Donec consequat nec quam at tempor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean semper faucibus lacus, vel pretium metus. Praesent suscipit malesuada pretium. Quisque ultrices feugiat nulla vel molestie. Mauris suscipit quis dui et pharetra. Quisque venenatis urna ut dap', 'http://localhost/FlowerStore/public/_img/colorful-bouquet-florist-woman-selling-customer-flower.jpg', '1.25 Kg', '20x10x20 Cm', 'Purple', '1 year', 1, 'United States of America', 0, '170000.00', '0.00', 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE IF NOT EXISTS `promotion` (
`id` int(10) unsigned NOT NULL,
  `discount` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `end_discount_date` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
`id` int(10) unsigned NOT NULL,
  `rate` decimal(3,2) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE IF NOT EXISTS `store` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `storekeeper` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `name`, `address`, `phone`, `storekeeper`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Old bicycle', 'Ho CHi Minh City', '0111111111111', 'Anh Anh', 'http://localhost/FlowerStore/public/upload/colorful-bouquet-florist-woman-selling-customer-flower.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'New Shop', 'Tan Binh, Ho Chi Minh City', '20392340293', 'Do Do', 'http://localhost/FlowerStore/public/upload/colorful-bouquet-florist-woman-selling-customer-flower.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'New Shop', 'Ha Noi', '20392340293', 'Do Do', 'http://localhost/FlowerStore/public/upload/colorful-bouquet-florist-woman-selling-customer-flower.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Shop Hoa Hong', 'Cau Giay, Ha Noi', '0984247374', 'Mai Cute', 'http://localhost/FlowerStore/public/upload/florist-with-tulips.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Shop florist', 'Dong Da, Ha Noi', '09843424374', 'Trang Pe', 'http://localhost/FlowerStore/public/upload/happy-florist.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tagged`
--

CREATE TABLE IF NOT EXISTS `tagged` (
`id` int(10) unsigned NOT NULL,
  `product_id` int(11) NOT NULL,
  `bookmark_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `company_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address_detail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `town_city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state_country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postcode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country_code` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookmark`
--
ALTER TABLE `bookmark`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`id`), ADD KEY `name_2` (`name`), ADD FULLTEXT KEY `name` (`name`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tagged`
--
ALTER TABLE `tagged`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookmark`
--
ALTER TABLE `bookmark`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tagged`
--
ALTER TABLE `tagged`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
