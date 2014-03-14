-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 14, 2014 at 10:07 PM
-- Server version: 5.5.35-0ubuntu0.13.10.2
-- PHP Version: 5.5.3-1ubuntu2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `DCAF-Social`
--

-- --------------------------------------------------------

--
-- Table structure for table `assigned_roles`
--

CREATE TABLE IF NOT EXISTS `assigned_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dcaf_user_id` int(10) unsigned NOT NULL,
  `dcaf_role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `assigned_roles_dcaf_user_id_index` (`dcaf_user_id`),
  KEY `assigned_roles_dcaf_role_id_index` (`dcaf_role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `assigned_roles`
--

INSERT INTO `assigned_roles` (`id`, `dcaf_user_id`, `dcaf_role_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `Billing_Accounts`
--

CREATE TABLE IF NOT EXISTS `Billing_Accounts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `client_company_id` int(10) unsigned NOT NULL,
  `payment_method` char(1) NOT NULL DEFAULT 'P',
  `billing_name` varchar(30) NOT NULL,
  `billing_address` varchar(126) NOT NULL,
  `plan_id` tinyint(3) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Billing_Accounts`
--

INSERT INTO `Billing_Accounts` (`id`, `client_company_id`, `payment_method`, `billing_name`, `billing_address`, `plan_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'P', 'Corporation X', '000 X St, X City, 00000, NY', 1, '2014-02-26 23:08:32', '2014-02-26 23:08:32');

-- --------------------------------------------------------

--
-- Table structure for table `Billing_Plans`
--

CREATE TABLE IF NOT EXISTS `Billing_Plans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `plan_name` varchar(15) NOT NULL,
  `payment_amount` decimal(8,2) unsigned NOT NULL,
  `payment_frequency` text NOT NULL,
  `duration` int(48) unsigned NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `plan_name` (`plan_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `Billing_Plans`
--

INSERT INTO `Billing_Plans` (`id`, `plan_name`, `payment_amount`, `payment_frequency`, `duration`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Small DCAF', 500.00, 'upfront', 2, 'Small DCAF plan features xyz', '2014-02-26 23:08:31', '2014-02-26 23:08:31'),
(2, 'Medium DCAF', 1000.00, 'monthly', 2, 'Medium DCAF plan features xyz', '2014-02-26 23:08:31', '2014-02-26 23:08:31'),
(3, 'Large DCAF', 12000.00, 'upfront', 12, 'Large DCAF plan features xyz', '2014-02-26 23:08:31', '2014-02-26 23:08:31'),
(4, 'Extra-Large DCA', 24000.00, 'monthly', 24, 'Extra-Large DCAF plan features xyz', '2014-02-26 23:08:31', '2014-02-26 23:08:31');

-- --------------------------------------------------------

--
-- Table structure for table `Brands`
--

CREATE TABLE IF NOT EXISTS `Brands` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Brands`
--

INSERT INTO `Brands` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Cherry Coke', '2014-03-02 01:10:51', '2014-03-02 01:10:51');

-- --------------------------------------------------------

--
-- Table structure for table `Brand_Groups`
--

CREATE TABLE IF NOT EXISTS `Brand_Groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Brand_Groups`
--

INSERT INTO `Brand_Groups` (`id`, `name`) VALUES
(1, 'Pepsi');

-- --------------------------------------------------------

--
-- Table structure for table `Client_Brand_Groups`
--

CREATE TABLE IF NOT EXISTS `Client_Brand_Groups` (
  `company_id` int(11) NOT NULL,
  `brand_group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Client_Brand_Groups`
--

INSERT INTO `Client_Brand_Groups` (`company_id`, `brand_group_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Client_Companies`
--

CREATE TABLE IF NOT EXISTS `Client_Companies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `industry` varchar(30) NOT NULL,
  `billing_account_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Client_Companies`
--

INSERT INTO `Client_Companies` (`id`, `name`, `industry`, `billing_account_id`, `created_at`, `updated_at`) VALUES
(1, 'Corporation X', 'Industry X', 0, '2014-02-26 23:08:32', '2014-02-26 23:08:32');

-- --------------------------------------------------------

--
-- Table structure for table `Client_User_Assoc`
--

CREATE TABLE IF NOT EXISTS `Client_User_Assoc` (
  `uid` bigint(20) NOT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Client_User_Assoc`
--

INSERT INTO `Client_User_Assoc` (`uid`, `company_id`) VALUES
(2, 1),
(3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `DCAF_Roles`
--

CREATE TABLE IF NOT EXISTS `DCAF_Roles` (
  `role_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `DCAF_Roles`
--

INSERT INTO `DCAF_Roles` (`role_id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'Site Admin', '2014-02-26 23:08:31', '2014-02-26 23:08:31'),
(2, 'Team Manager', '2014-02-26 23:08:31', '2014-02-26 23:08:31'),
(3, 'Team Member', '2014-02-26 23:08:31', '2014-02-26 23:08:31');

-- --------------------------------------------------------

--
-- Table structure for table `DCAF_Teams`
--

CREATE TABLE IF NOT EXISTS `DCAF_Teams` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `billing_account` int(10) unsigned NOT NULL,
  `subscription_status` char(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `DCAF_Team_User`
--

CREATE TABLE IF NOT EXISTS `DCAF_Team_User` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dcaf_team_id` int(10) unsigned NOT NULL,
  `dcaf_user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `dcaf_team_user_dcaf_team_id_dcaf_user_id_unique` (`dcaf_team_id`,`dcaf_user_id`),
  KEY `dcaf_team_user_dcaf_team_id_index` (`dcaf_team_id`),
  KEY `dcaf_team_user_dcaf_user_id_index` (`dcaf_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `DCAF_Users`
--

CREATE TABLE IF NOT EXISTS `DCAF_Users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'User ID',
  `profile_id` int(10) unsigned NOT NULL,
  `display_name` varchar(30) DEFAULT NULL,
  `salt` char(8) NOT NULL,
  `bio` text NOT NULL COMMENT 'bio/description',
  `team_id` int(10) unsigned NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmation_code` varchar(255) NOT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `DCAF_Users`
--

INSERT INTO `DCAF_Users` (`id`, `profile_id`, `display_name`, `salt`, `bio`, `team_id`, `username`, `email`, `password`, `confirmation_code`, `confirmed`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, '', '', 0, 'Site_Admin', 'site@admin.com', '$2y$10$jIH6U7PSVh2CS1QBPsrUtOGwWcF3A0jFdpc.N3XKEhiIl0Ls8Z5f2', '', 1, '2014-02-26 23:08:31', '2014-02-26 23:08:31'),
(2, 0, NULL, '', '', 0, 'Manager', 'user@manager.com', '$2y$10$che1.yde1KY.2c/jcXkZp.hkEcIVlu23adzikRZekMI5SE9B2c83i', '', 1, '2014-02-26 23:08:31', '2014-02-26 23:08:31'),
(3, 0, NULL, '', '', 0, 'Member', 'user@member.com', '$2y$10$oN/Qgy3UFJWz2a0onCg.1eF4Jxl25tpNEP0RZmazg3J0LvTJ.b2Oi', '', 1, '2014-02-26 23:08:31', '2014-02-26 23:08:31'),
(5, 0, NULL, '', '', 0, 'user', 'user@user.com', '$2y$10$ZXibY50sxZLZA6KBjv9/eu05LncTJ7AFTPIzBLTjl8m2t2LkVK29.', '028388c8ead2d5065b6efe0711259816', 1, '2014-02-26 09:33:27', '2014-02-26 09:33:27');

-- --------------------------------------------------------

--
-- Table structure for table `FB_Covers`
--

CREATE TABLE IF NOT EXISTS `FB_Covers` (
  `Index` bigint(20) NOT NULL AUTO_INCREMENT,
  `cover_id` bigint(20) NOT NULL COMMENT 'PRIMARY',
  `source` varchar(255) NOT NULL COMMENT 'URL',
  `offset_y` smallint(5) NOT NULL DEFAULT '0',
  `offset_x` smallint(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cover_id`),
  UNIQUE KEY `INDEX` (`Index`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `FB_Covers`
--

INSERT INTO `FB_Covers` (`Index`, `cover_id`, `source`, `offset_y`, `offset_x`) VALUES
(1, 10151937932013280, 'https://scontent-b.xx.fbcdn.net/hphotos-prn2/s720x720/1467326_10151937932013280_17599880_n.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `FB_Pages`
--

CREATE TABLE IF NOT EXISTS `FB_Pages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `FB_Page_ID` bigint(20) unsigned NOT NULL COMMENT 'PRIMARY',
  `username` varchar(63) DEFAULT NULL,
  `access_token` char(127) NOT NULL,
  `anyone_can_post` tinyint(1) NOT NULL DEFAULT '1',
  `fan_photos` tinyint(1) NOT NULL DEFAULT '1',
  `checkins` int(11) NOT NULL,
  `cover_id` char(127) NOT NULL,
  `global_brand_parent_page_id` char(127) DEFAULT NULL,
  `hours` text,
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `like_count` int(11) NOT NULL DEFAULT '0',
  `link` varchar(255) NOT NULL COMMENT 'URL',
  `location` varchar(63) DEFAULT NULL,
  `name` varchar(63) NOT NULL,
  `phone` varchar(16) DEFAULT NULL,
  `profile_picture_url` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL COMMENT 'website_url',
  `is_permanently_closed` tinyint(1) NOT NULL DEFAULT '0',
  `is_unclaimed` tinyint(1) NOT NULL DEFAULT '0',
  `founded` varchar(31) DEFAULT NULL,
  `about` varchar(182) NOT NULL,
  `description` mediumtext NOT NULL,
  `general_info` text NOT NULL,
  `mission` text NOT NULL,
  `global_brand_page_name` varchar(63) NOT NULL,
  `were_here_count` int(11) NOT NULL DEFAULT '0',
  `talking_about_count` int(11) NOT NULL DEFAULT '0',
  `category` varchar(63) NOT NULL,
  PRIMARY KEY (`FB_Page_ID`),
  UNIQUE KEY `INDEX` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `FB_Posts`
--

CREATE TABLE IF NOT EXISTS `FB_Posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `FB_Post_ID` bigint(20) unsigned NOT NULL COMMENT 'PRIMARY',
  `User_ID` bigint(20) unsigned NOT NULL,
  `Content` varchar(63206) NOT NULL,
  `Date_Created` datetime NOT NULL,
  `from_user_id` char(30) NOT NULL,
  `to_user_id` char(30) NOT NULL,
  `message` text NOT NULL,
  `message_tags` text NOT NULL,
  `picture_url` varchar(256) DEFAULT NULL,
  `link_name` varchar(32) NOT NULL,
  `link_url` varchar(256) NOT NULL,
  `link_caption` varchar(64) NOT NULL,
  `link_description` varchar(128) NOT NULL,
  `media_url` varchar(256) NOT NULL,
  PRIMARY KEY (`FB_Post_ID`),
  UNIQUE KEY `INDEX` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `FB_Users`
--

CREATE TABLE IF NOT EXISTS `FB_Users` (
  `Index` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id` bigint(20) unsigned NOT NULL COMMENT 'PRIMARY (FK: FB_User_ID or FBUID)',
  `username` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `full_name` varchar(90) NOT NULL,
  `name_format` varchar(90) NOT NULL DEFAULT '{first} {last}',
  `email` varchar(254) NOT NULL,
  `link` varchar(254) NOT NULL COMMENT 'URL',
  `gender` char(12) NOT NULL,
  `age_range_min` enum('13','18','21') DEFAULT NULL,
  `age_range_max` enum('17','20') DEFAULT NULL,
  `birthday` date NOT NULL,
  `is_verified` tinyint(1) NOT NULL,
  `verified` tinyint(1) NOT NULL,
  `viewer_can_send_gift` tinyint(1) NOT NULL,
  `third_party_id` varchar(128) NOT NULL,
  `relationship_status` varchar(30) NOT NULL,
  `timeline_link` mediumtext NOT NULL,
  `quotes` text NOT NULL,
  `hometown` bigint(20) NOT NULL COMMENT 'page id',
  `bio` text NOT NULL,
  `religion` varchar(30) NOT NULL,
  `about` text NOT NULL,
  `timezone` int(11) NOT NULL,
  `locale` char(20) NOT NULL,
  `updated_time` datetime NOT NULL,
  `political` text NOT NULL,
  `significant_other` bigint(20) unsigned NOT NULL,
  `website` mediumtext NOT NULL,
  `location` bigint(20) NOT NULL COMMENT 'page id',
  `installed` tinyint(1) NOT NULL,
  `install_type` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `INDEX` (`Index`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
('2013_02_05_024934_confide_setup_users_table', 1),
('2013_02_05_043505_create_posts_table', 1),
('2013_02_05_044505_create_comments_table', 1),
('2013_02_08_031702_entrust_setup_tables', 1),
('2013_02_24_113250_team_user_pivot_table', 1),
('2013_05_21_024934_entrust_permissions', 1),
('2014_01_15_081444_networkauth', 1),
('2013_09_01_024008_migration_oauth_amazon', 2),
('2013_09_01_024008_migration_oauth_bitbucket', 2),
('2013_09_01_024008_migration_oauth_bitly', 2),
('2013_09_01_024008_migration_oauth_box', 2),
('2013_09_01_024008_migration_oauth_dropbox', 2),
('2013_09_01_024008_migration_oauth_facebook', 2),
('2013_09_01_024008_migration_oauth_fitbit', 2),
('2013_09_01_024008_migration_oauth_foursquare', 2),
('2013_09_01_024008_migration_oauth_github', 2),
('2013_09_01_024008_migration_oauth_google', 2),
('2013_09_01_024008_migration_oauth_heroku', 2),
('2013_09_01_024008_migration_oauth_instagram', 2),
('2013_09_01_024008_migration_oauth_linkedin', 2),
('2013_09_01_024008_migration_oauth_microsoft', 2),
('2013_09_01_024008_migration_oauth_paypal', 2),
('2013_09_01_024008_migration_oauth_soundcloud', 2),
('2013_09_01_024008_migration_oauth_tumblr', 2),
('2013_09_01_024008_migration_oauth_twitter', 2),
('2013_09_02_024008_migration_oauth_facebook', 3),
('2013_09_02_024008_migration_oauth_google', 3),
('2013_09_02_024008_migration_oauth_instagram', 3),
('2013_09_02_024008_migration_oauth_tumblr', 3),
('2013_09_02_024008_migration_oauth_twitter', 3),
('2014_03_01_194916_Brand', 4);

-- --------------------------------------------------------

--
-- Table structure for table `Network_Users`
--

CREATE TABLE IF NOT EXISTS `Network_Users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `profile_id` bigint(20) unsigned NOT NULL,
  `DCAF_User_ID` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `profile_id` (`profile_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Network_Users`
--

INSERT INTO `Network_Users` (`id`, `profile_id`, `DCAF_User_ID`) VALUES
(1, 2, 13);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_facebook`
--

CREATE TABLE IF NOT EXISTS `oauth_facebook` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `brand_id` int(10) unsigned NOT NULL,
  `oauth_uid` text COLLATE utf8_unicode_ci NOT NULL,
  `access_token` text COLLATE utf8_unicode_ci NOT NULL,
  `expire_time` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `oauth_facebook_brand_id_unique` (`brand_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_google`
--

CREATE TABLE IF NOT EXISTS `oauth_google` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `brand_id` int(10) unsigned NOT NULL,
  `oauth_uid` text COLLATE utf8_unicode_ci NOT NULL,
  `access_token` text COLLATE utf8_unicode_ci NOT NULL,
  `expire_time` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `oauth_google_brand_id_unique` (`brand_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_instagram`
--

CREATE TABLE IF NOT EXISTS `oauth_instagram` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `brand_id` int(10) unsigned NOT NULL,
  `oauth_uid` text COLLATE utf8_unicode_ci NOT NULL,
  `access_token` text COLLATE utf8_unicode_ci NOT NULL,
  `expire_time` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `oauth_instagram_brand_id_unique` (`brand_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_tumblr`
--

CREATE TABLE IF NOT EXISTS `oauth_tumblr` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `brand_id` int(10) unsigned NOT NULL,
  `oauth_uid` text COLLATE utf8_unicode_ci NOT NULL,
  `access_token` text COLLATE utf8_unicode_ci NOT NULL,
  `expire_time` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `oauth_tumblr_brand_id_unique` (`brand_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_twitter`
--

CREATE TABLE IF NOT EXISTS `oauth_twitter` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `brand_id` int(10) unsigned NOT NULL,
  `oauth_uid` text COLLATE utf8_unicode_ci NOT NULL,
  `access_token` text COLLATE utf8_unicode_ci NOT NULL,
  `expire_time` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `oauth_twitter_brand_id_unique` (`brand_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `password_reminders`
--

CREATE TABLE IF NOT EXISTS `password_reminders` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`),
  UNIQUE KEY `permissions_display_name_unique` (`display_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'manage_billing', 'manage billing', '2014-02-26 23:08:31', '2014-02-26 23:08:31');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE IF NOT EXISTS `permission_role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `permission_role_permission_id_role_id_unique` (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`, `created_at`, `updated_at`) VALUES
(5, 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Tw_Tweets`
--

CREATE TABLE IF NOT EXISTS `Tw_Tweets` (
  `Tweet_ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Tw_Tweet_ID` bigint(20) unsigned NOT NULL,
  `Tw_User_ID` bigint(20) unsigned NOT NULL,
  `contributors` text NOT NULL,
  `coordinates` text NOT NULL,
  `created_at` datetime NOT NULL,
  `entities` text NOT NULL,
  `favorite_count` int(11) DEFAULT NULL,
  `filter_level` varchar(10) NOT NULL,
  `in_reply_to_screen_name` char(15) DEFAULT NULL,
  `in_reply_to_status_id` bigint(20) unsigned DEFAULT NULL,
  `in_reply_to_user_id` bigint(20) unsigned DEFAULT NULL,
  `lang` char(8) DEFAULT NULL,
  `place` text,
  `possibly_sensitive` tinyint(1) DEFAULT NULL,
  `scopes` text NOT NULL,
  `retweet_count` int(11) NOT NULL,
  `retweeted_status` text NOT NULL,
  `source` text NOT NULL,
  `text` text NOT NULL,
  `truncated` tinyint(1) NOT NULL,
  `user` text NOT NULL,
  `withheld_copyright` tinyint(1) DEFAULT NULL,
  `withheld_in_countries` text,
  `withheld_scope` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`Tweet_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Tw_Users`
--

CREATE TABLE IF NOT EXISTS `Tw_Users` (
  `index` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Tw_User_ID` bigint(20) unsigned NOT NULL,
  `contributors_enabled` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `default_profile` tinyint(1) NOT NULL,
  `default_profile_image` tinyint(1) NOT NULL,
  `description` text,
  `entities` text NOT NULL,
  `favorites_count` int(11) NOT NULL,
  `follow_request_sent` tinyint(1) DEFAULT NULL,
  `followers_count` int(11) NOT NULL,
  `friends_count` int(11) NOT NULL,
  `geo_enabled` tinyint(1) NOT NULL,
  `is_translator` tinyint(4) NOT NULL,
  `lang` char(8) NOT NULL,
  `listed_count` int(11) NOT NULL,
  `location` varchar(64) DEFAULT NULL,
  `name` varchar(20) NOT NULL,
  `notifications` tinyint(1) NOT NULL,
  `profile_background_color` char(6) NOT NULL,
  `profile_background _image_url` varchar(256) NOT NULL,
  `profile_background_ image_url_https` varchar(256) NOT NULL,
  `profile_background_tile` tinyint(1) NOT NULL,
  `profile_banner_url` varchar(256) NOT NULL,
  `profile_image_url` varchar(256) NOT NULL,
  `profile_image_url_https` varchar(256) NOT NULL,
  `profile_link_color` char(6) NOT NULL,
  `profile_sidebar_border_color` char(6) NOT NULL,
  `profile_sidebar_fill_color` char(6) NOT NULL,
  `profile_text_color` char(6) NOT NULL,
  `profile_use_background_image` tinyint(1) NOT NULL,
  `protected` tinyint(1) NOT NULL,
  `screen_name` varchar(15) NOT NULL,
  `show_all_inline_media` tinyint(1) NOT NULL,
  `status` text,
  `statuses_count` int(11) NOT NULL,
  `time_zone` varchar(64) DEFAULT NULL,
  `url` varchar(256) DEFAULT NULL,
  `utc_offset` int(11) DEFAULT NULL,
  `verified` tinyint(1) NOT NULL,
  `withheld_in_countries` varchar(30) DEFAULT NULL,
  `withheld_scope` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`Tw_User_ID`),
  UNIQUE KEY `index` (`index`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `confirmation_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `facebookAuthToken` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `twitterAuthToken` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `googleAuthToken` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `User_Profiles`
--

CREATE TABLE IF NOT EXISTS `User_Profiles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'User ID',
  `username` varchar(30) NOT NULL COMMENT 'loginid',
  `gender` enum('M','F','O') NOT NULL,
  `email` varchar(254) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQUE` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `User_Profiles`
--

INSERT INTO `User_Profiles` (`id`, `username`, `gender`, `email`, `firstName`, `lastName`) VALUES
(1, 'User', 'O', 'user@test.com', 'Bro', 'Smoe');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assigned_roles`
--
ALTER TABLE `assigned_roles`
  ADD CONSTRAINT `assigned_roles_dcaf_role_id_foreign` FOREIGN KEY (`dcaf_role_id`) REFERENCES `DCAF_Roles` (`role_id`),
  ADD CONSTRAINT `assigned_roles_dcaf_user_id_foreign` FOREIGN KEY (`dcaf_user_id`) REFERENCES `DCAF_Users` (`id`);

--
-- Constraints for table `DCAF_Team_User`
--
ALTER TABLE `DCAF_Team_User`
  ADD CONSTRAINT `dcaf_team_user_dcaf_team_id_foreign` FOREIGN KEY (`dcaf_team_id`) REFERENCES `DCAF_Teams` (`id`),
  ADD CONSTRAINT `dcaf_team_user_dcaf_user_id_foreign` FOREIGN KEY (`dcaf_user_id`) REFERENCES `DCAF_Users` (`id`);

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`),
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `DCAF_Roles` (`role_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
