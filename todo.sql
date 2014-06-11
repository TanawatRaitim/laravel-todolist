-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- โฮสต์: 127.0.0.1
-- เวลาในการสร้าง: 
-- เวอร์ชั่นของเซิร์ฟเวอร์: 5.6.14
-- รุ่นของ PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- ฐานข้อมูล: `todo`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `owner_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `done` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- dump ตาราง `items`
--

INSERT INTO `items` (`id`, `owner_id`, `name`, `done`, `created_at`, `updated_at`) VALUES
(3, 5, 'Pick up milk', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 6, 'Go to japan', 1, '0000-00-00 00:00:00', '2014-06-11 03:32:08'),
(5, 6, 'Go to Korea', 1, '0000-00-00 00:00:00', '2014-06-11 03:53:42'),
(6, 6, 'my new task', 0, '2014-06-11 03:44:38', '2014-06-11 03:52:18'),
(7, 6, 'Feed the cat', 1, '2014-06-11 03:53:38', '2014-06-11 03:53:41');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- dump ตาราง `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_06_10_031019_create_users_table', 1),
('2014_06_10_032257_create_items_table', 2);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- dump ตาราง `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `created_at`, `updated_at`) VALUES
(5, 'Terry', '$2y$10$H5OiIdsoNoUlpSqUX/IhA.yzP3ls02pvXp95wrmSrEMk4wlJwEq0O', 'terry@wswp.co.th', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Tanawat', '$2y$10$FmZbFh6W335qyvjA7oAmF.5u7ROJOJWXfxTi9fiGnt0awYXFFx78a', 'tanawat.ra@mail.wswp.co.th', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
