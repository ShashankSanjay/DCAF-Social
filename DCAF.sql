-- phpMyAdmin SQL Dump
-- version 3.4.10
-- http://www.phpmyadmin.net
--
-- Host: mysql
-- Generation Time: Jan 24, 2014 at 12:15 PM
-- Server version: 5.1.55
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `DCAF`
--

-- --------------------------------------------------------

--
-- Table structure for table `DCAF_Users`
--

CREATE TABLE IF NOT EXISTS `DCAF_Users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `password` char(40) DEFAULT NULL,
  `team_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `FB_Pages`
--

CREATE TABLE IF NOT EXISTS `FB_Pages` (
  `Index` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
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
  UNIQUE KEY `INDEX` (`Index`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `FB_Posts`
--

CREATE TABLE IF NOT EXISTS `FB_Posts` (
  `Index` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
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
  UNIQUE KEY `INDEX` (`Index`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `FB_Users`
--

CREATE TABLE IF NOT EXISTS `FB_Users` (
  `Index` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `FB_User_ID` bigint(20) unsigned NOT NULL COMMENT 'PRIMARY',
  `username` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `full_name` varchar(90) NOT NULL,
  `name_format` varchar(90) NOT NULL DEFAULT '{first} {last}',
  `email` varchar(254) NOT NULL,
  `link` varchar(256) NOT NULL COMMENT 'URL',
  `gender` char(12) NOT NULL,
  `is_verified` tinyint(1) NOT NULL,
  `verified` tinyint(1) NOT NULL,
  `viewer_can_send_gift` tinyint(1) NOT NULL,
  `third_party_id` varchar(128) NOT NULL,
  `relationship_status` varchar(30) NOT NULL,
  `timeline_link` mediumtext NOT NULL,
  `quotes` text NOT NULL,
  `hometown` mediumtext NOT NULL,
  `bio` text NOT NULL,
  `religion` varchar(30) NOT NULL,
  `about` text NOT NULL,
  `timezone` int(11) NOT NULL,
  `locale` char(20) NOT NULL,
  `updated_time` datetime NOT NULL,
  `political` text NOT NULL,
  `significant_other` bigint(20) unsigned NOT NULL,
  `website` mediumtext NOT NULL,
  `location` text NOT NULL,
  `installed` tinyint(1) NOT NULL,
  `install_type` varchar(32) NOT NULL,
  PRIMARY KEY (`FB_User_ID`),
  UNIQUE KEY `INDEX` (`Index`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_facebook`
--

CREATE TABLE IF NOT EXISTS `oauth_facebook` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `oauth_uid` text COLLATE utf8_unicode_ci NOT NULL,
  `access_token` text COLLATE utf8_unicode_ci NOT NULL,
  `expire_time` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `oauth_facebook_user_id_unique` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_github`
--

CREATE TABLE IF NOT EXISTS `oauth_github` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `oauth_uid` text COLLATE utf8_unicode_ci NOT NULL,
  `access_token` text COLLATE utf8_unicode_ci NOT NULL,
  `expire_time` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `oauth_github_user_id_unique` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_google`
--

CREATE TABLE IF NOT EXISTS `oauth_google` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `oauth_uid` text COLLATE utf8_unicode_ci NOT NULL,
  `access_token` text COLLATE utf8_unicode_ci NOT NULL,
  `expire_time` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `oauth_google_user_id_unique` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_instagram`
--

CREATE TABLE IF NOT EXISTS `oauth_instagram` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `oauth_uid` text COLLATE utf8_unicode_ci NOT NULL,
  `access_token` text COLLATE utf8_unicode_ci NOT NULL,
  `expire_time` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `oauth_instagram_user_id_unique` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_twitter`
--

CREATE TABLE IF NOT EXISTS `oauth_twitter` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `oauth_uid` text COLLATE utf8_unicode_ci NOT NULL,
  `access_token` text COLLATE utf8_unicode_ci NOT NULL,
  `expire_time` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `oauth_twitter_user_id_unique` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Tw_Users`
--

CREATE TABLE IF NOT EXISTS `Tw_Users` (
  `User_ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Tw_User_ID` int(11) NOT NULL,
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
  PRIMARY KEY (`User_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `User_Profiles`
--

CREATE TABLE IF NOT EXISTS `User_Profiles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'User ID',
  `username` varchar(30) NOT NULL,
  `gender` enum('M','F','O') NOT NULL,
  `email` varchar(254) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQUE` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
