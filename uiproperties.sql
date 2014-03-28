-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 03 月 27 日 09:39
-- 服务器版本: 5.5.31
-- PHP 版本: 5.4.4-14+deb7u5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- 数据库: `uiproperties`
--
DROP DATABASE `uiproperties`;
CREATE DATABASE `uiproperties` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `uiproperties`;

-- --------------------------------------------------------

--
-- 表的结构 `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `created`, `modified`, `deleted`) VALUES
(1, NULL, 'Home', '2014-03-13 07:11:52', '2014-03-20 08:11:25', NULL),
(2, NULL, 'Real Estate', '2014-03-20 07:47:43', '2014-03-20 08:20:24', NULL),
(3, NULL, 'Business', '2014-03-20 07:47:49', '2014-03-20 08:11:30', NULL),
(4, NULL, 'Career', '2014-03-20 07:47:59', '2014-03-20 08:11:35', NULL),
(5, 2, 'Off The Plan', '2014-03-28 11:47:53', '2014-03-28 11:47:53', NULL),
(6, 2, 'Residential', '2014-03-28 11:48:39', '2014-03-28 11:48:39', NULL),
(7, 2, 'Commercial', '2014-03-28 11:48:55', '2014-03-28 11:48:55', NULL),
(8, 2, 'Site', '2014-03-28 11:49:12', '2014-03-28 11:49:12', NULL),
(9, 3, 'Retail', '2014-03-28 11:49:47', '2014-03-28 11:49:47', NULL),
(10, 3, 'Wholesale', '2014-03-28 11:50:05', '2014-03-28 11:50:05', NULL),
(11, 3, 'Franchise', '2014-03-28 11:50:26', '2014-03-28 11:50:26', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `document_files`
--

DROP TABLE IF EXISTS `document_files`;
CREATE TABLE IF NOT EXISTS `document_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `document_id` int(11) DEFAULT NULL,
  `document_translation_id` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(45) NOT NULL,
  `size` int(11) NOT NULL DEFAULT '0',
  `path` varchar(100) NOT NULL,
  `is_login_required` tinyint(1) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `document_translations`
--

DROP TABLE IF EXISTS `document_translations`;
CREATE TABLE IF NOT EXISTS `document_translations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `document_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `summary` text,
  `body` text,
  `cover_img` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `document_translations`
--

INSERT INTO `document_translations` (`id`, `document_id`, `language_id`, `user_id`, `name`, `summary`, `body`, `cover_img`, `thumbnail`, `created`, `modified`, `deleted`) VALUES
(1, 1, 2, 1, '主页', '', '<p>悉尼联投物业公司由具有远见卓识的Leo 苏先生创立。苏先生自2007年起即从事房地产业。凭借对地方市场的深入了解，丰富的行业知识，以及对客户&ldquo;提供最高标准的专业个性化的销售和物业管理服务&rdquo;的承诺，悉尼联投物业公司与客户建立了紧密的联系并且获得客户多年信任。</p>\r\n\r\n<p>悉尼联投物业公司在悉尼房地产市场表现强劲。得益于苏先生在澳洲和新西兰房地产行业的丰富经验，悉尼联投物业公司不但在两个国家建立了宽广的商业网络，而且对澳洲和海外房地产市场有了独特的认识。</p>\r\n\r\n<p>怀着将公司发展壮大成为符合当前以及未来市场需求的地产服务提供商的决心，悉尼联投物业公司强大并且组织紧密的团队用心倾听买家和卖家的需求，致力于提升客户满意度。</p>\r\n\r\n<ul>\r\n	<li>新南威尔士州地产，证券以及商业经营许可证 号1542273</li>\r\n	<li>新南威尔士州公司执照号1709945</li>\r\n	<li>新西兰房地产中介执照号10054239</li>\r\n</ul>\r\n', '/img/sydney.jpg,/img/melbourne.jpg,/img/brisbane.jpg,/img/goldcoast.jpg,/img/hobart.jpg,/img/perth.jpg', '', '2014-03-27 11:26:17', '2014-03-28 06:33:12', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `documents`
--

DROP TABLE IF EXISTS `documents`;
CREATE TABLE IF NOT EXISTS `documents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `language_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `summary` text,
  `body` text,
  `cover_img` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `is_login_required` tinyint(1) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `documents`
--

INSERT INTO `documents` (`id`, `user_id`, `language_id`, `category_id`, `name`, `summary`, `body`, `cover_img`, `thumbnail`, `is_login_required`, `created`, `modified`, `deleted`) VALUES
(1, 1, 1, 1, 'Home', '', '<p>The visionary behind Sydney United Investments is Mr. Leo Su, who has been serving in real estate industry since 2007. With extensive local knowledge, industry expertise and commitment to provide the highest standard of professional and personalised service in sales and property management, Sydney United Investments has built strong connections with clients and was rewarded with their loyalty over years. &nbsp;</p>\r\n\r\n<p>Sydney United Investments has strong market presence in Sydney. Benefit from Mr. Su&rsquo;s rich experience in Australia and New Zealand real estate industry, Sydney United Investments not only built up extensive network in both countries but also gained a unique point of view for domestic and oversea property market.</p>\r\n\r\n<p>Determined to grow a business to match current and future market demands, the strong and close-knit team at Sydney United Investments listens to buyers and sellers&rsquo; real estate needs and dedicates to delivering client satisfaction.</p>\r\n\r\n<ul>\r\n	<li>NSW&nbsp; Property, Stock and Business License 1542273</li>\r\n	<li>NSW Corporation License 1709945</li>\r\n	<li>New Zealand REAA 10054239</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', '/img/sydney.jpg,/img/melbourne.jpg,/img/brisbane.jpg,/img/goldcoast.jpg,/img/hobart.jpg,/img/perth.jpg', '', 0, '2014-03-27 11:24:42', '2014-03-28 06:33:06', NULL),
(2, 1, 1, 2, 'Overview', '', '', '', '', 0, '2014-03-28 11:43:36', '2014-03-28 12:34:46', NULL),
(3, 1, 1, 5, 'Off The Plan', '', '', '', '', 0, '2014-03-28 11:46:27', '2014-03-28 12:06:09', NULL),
(4, 1, 1, 6, 'Residential', '', '', '', '', 0, '2014-03-28 12:07:29', '2014-03-28 12:07:29', NULL),
(5, 1, 1, 7, 'Commercial', '', '', '', '', 0, '2014-03-28 12:10:46', '2014-03-28 12:10:46', NULL),
(6, 1, 1, 8, 'Site', '', '', '', '', 0, '2014-03-28 12:11:03', '2014-03-28 12:11:03', NULL),
(7, 1, 1, 9, 'Retail', '', '', '', '', 0, '2014-03-28 12:11:29', '2014-03-28 12:11:29', NULL),
(8, 1, 1, 10, 'Wholesale', '', '', '', '', 0, '2014-03-28 12:11:48', '2014-03-28 12:11:48', NULL),
(9, 1, 1, 11, 'Franchise', '', '', '', '', 0, '2014-03-28 12:12:07', '2014-03-28 12:12:07', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `dynamic_routes`
--

DROP TABLE IF EXISTS `dynamic_routes`;
CREATE TABLE IF NOT EXISTS `dynamic_routes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `document_id` int(11) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `spec` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`),
  KEY `document_id` (`document_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `dynamic_routes`
--

INSERT INTO `dynamic_routes` (`id`, `document_id`, `slug`, `spec`, `active`, `created`, `modified`, `deleted`) VALUES
(1, 1, '/home', '{"plugin":null,"controller":"documents","action":"view","0":"1"}', 1, '2014-03-27 11:24:52', '2014-03-28 06:33:06', NULL),
(2, 2, '/real-estate-overview', '{"plugin":null,"controller":"documents","action":"view","0":"2"}', 1, '2014-03-28 11:43:07', '2014-03-28 12:34:46', NULL),
(4, NULL, '/real-estate-off-the-plan', '{"plugin":null,"controller":"categories","action":"display","0":"5"}', 1, '2014-03-28 11:45:47', '2014-03-28 11:45:47', NULL),
(6, NULL, '/real-estate-residential', '{"plugin":null,"controller":"categories","action":"display","0":"6"}', 1, '2014-03-28 12:13:16', '2014-03-28 12:13:26', NULL),
(7, NULL, '/real-estate-commercial', '{"plugin":null,"controller":"categories","action":"display","0":"7"}', 1, '2014-03-28 12:13:59', '2014-03-28 12:13:59', NULL),
(8, NULL, '/real-estate-site', '{"plugin":null,"controller":"categories","action":"display","0":"8"}', 1, '2014-03-28 12:16:15', '2014-03-28 12:16:15', NULL),
(9, NULL, '/business-retail', '{"plugin":null,"controller":"categories","action":"display","0":"9"}', 1, '2014-03-28 12:17:27', '2014-03-28 12:17:27', NULL),
(10, NULL, '/business-wholesale', '{"plugin":null,"controller":"categories","action":"display","0":"10"}', 1, '2014-03-28 12:17:58', '2014-03-28 12:17:58', NULL),
(11, NULL, '/business-franchise', '{"plugin":null,"controller":"categories","action":"display","0":"11"}', 1, '2014-03-28 12:18:33', '2014-03-28 12:18:33', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `languages`
--

DROP TABLE IF EXISTS `languages`;
CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `code` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `languages`
--

INSERT INTO `languages` (`id`, `name`, `code`, `created`, `modified`, `deleted`) VALUES
(1, 'English', 'en-AU', '2014-03-13 07:13:04', '2014-03-20 08:11:59', NULL),
(2, '繁體中文', 'zh-TW', '2014-03-13 07:13:04', '2014-03-20 08:17:18', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `menus`
--

DROP TABLE IF EXISTS `menus`;
CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `name` varchar(25) NOT NULL,
  `url` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- 转存表中的数据 `menus`
--

INSERT INTO `menus` (`id`, `parent_id`, `lft`, `rght`, `language_id`, `name`, `url`, `active`, `created`, `modified`, `deleted`) VALUES
(1, NULL, 1, 2, 1, 'Home', '/', 0, '2014-03-13 07:13:04', '2014-03-20 08:11:59', NULL),
(2, NULL, 3, 14, 1, 'Real Estate', '/real-estate', 1, '2014-03-13 07:13:04', '2014-03-20 08:11:59', NULL),
(3, NULL, 15, 22, 1, 'Business', '/business', 1, '2014-03-13 07:13:04', '2014-03-20 08:11:59', NULL),
(4, NULL, 23, 24, 1, 'Career', '/career', 1, '2014-03-13 07:13:04', '2014-03-20 08:11:59', NULL),
(5, NULL, 25, 26, 1, 'Contact Us', '/contact-us', 1, '2014-03-13 07:13:04', '2014-03-20 08:11:59', NULL),
(6, 2, 4, 5, 1, 'Overview', '/real-estate-overview', 1, '2014-03-13 07:13:04', '2014-03-20 08:11:59', NULL),
(7, 2, 6, 7, 1, 'Off The Plan', '/real-estate-off-the-plan', 1, '2014-03-13 07:13:04', '2014-03-20 08:11:59', NULL),
(8, 2, 8, 9, 1, 'Residential', '/real-estate-residential', 1, '2014-03-13 07:13:04', '2014-03-20 08:11:59', NULL),
(9, 2, 10, 11, 1, 'Commercial', '/real-estate-commercial', 1, '2014-03-13 07:13:04', '2014-03-20 08:11:59', NULL),
(10, 2, 12, 13, 1, 'Site', '/real-estate-site', 1, '2014-03-13 07:13:04', '2014-03-20 08:11:59', NULL),
(11, 3, 16, 17, 1, 'Retail', '/business-retail', 1, '2014-03-13 07:13:04', '2014-03-20 08:11:59', NULL),
(12, 3, 18, 19, 1, 'Wholesale', '/business-wholesale', 1, '2014-03-13 07:13:04', '2014-03-20 08:11:59', NULL),
(13, 3, 20, 21, 1, 'Franchise', '/business-franchise', 1, '2014-03-13 07:13:04', '2014-03-20 08:11:59', NULL),
(14, NULL, 27, 28, 2, '主頁', '/', 0, '2014-03-13 07:13:04', '2014-03-20 08:11:59', NULL),
(15, NULL, 29, 40, 2, '房地產', '/real-estate', 1, '2014-03-13 07:13:04', '2014-03-20 08:11:59', NULL),
(16, NULL, 41, 48, 2, '商業', '/business', 1, '2014-03-13 07:13:04', '2014-03-20 08:11:59', NULL),
(17, NULL, 49, 50, 2, '工作機會', '/career', 1, '2014-03-13 07:13:04', '2014-03-20 08:11:59', NULL),
(18, NULL, 51, 52, 2, '聯繫我們', '/contact-us', 1, '2014-03-13 07:13:04', '2014-03-20 08:11:59', NULL),
(19, 15, 30, 31, 2, '簡介', '/real-estate-overview', 1, '2014-03-13 07:13:04', '2014-03-20 08:11:59', NULL),
(20, 15, 32, 33, 2, '樓花期房', '/real-estate-off-the-plan', 1, '2014-03-13 07:13:04', '2014-03-20 08:11:59', NULL),
(21, 15, 34, 35, 2, '住宅', '/real-estate-residential', 1, '2014-03-13 07:13:04', '2014-03-20 08:11:59', NULL),
(22, 15, 36, 37, 2, '廠房店面', '/real-estate-commercial', 1, '2014-03-13 07:13:04', '2014-03-20 08:11:59', NULL),
(23, 15, 38, 39, 2, '土地', '/real-estate-site', 1, '2014-03-13 07:13:04', '2014-03-20 08:11:59', NULL),
(24, 16, 42, 43, 2, '零售', '/business-retail', 1, '2014-03-13 07:13:04', '2014-03-20 08:11:59', NULL),
(25, 16, 44, 45, 2, '批發', '/business-wholesale', 1, '2014-03-13 07:13:04', '2014-03-20 08:11:59', NULL),
(26, 16, 46, 47, 2, '加盟', '/business-franchise', 1, '2014-03-13 07:13:04', '2014-03-20 08:11:59', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `user_groups`
--

DROP TABLE IF EXISTS `user_groups`;
CREATE TABLE IF NOT EXISTS `user_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `user_groups`
--

INSERT INTO `user_groups` (`id`, `parent_id`, `name`, `created`, `modified`, `deleted`) VALUES
(1, NULL, 'Administrator', '2014-03-13 07:14:09', '2014-03-20 08:19:41', NULL),
(2, NULL, 'Normal User', '2014-03-13 07:14:09', '2014-03-20 08:19:49', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_group_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `user_group_id`, `name`, `password`, `email`, `created`, `modified`, `deleted`) VALUES
(1, 1, 'Admin', '277679f118eeb919714f0358f605d15f806b5bf4', 'admin@uiproperties.com.au', '2014-03-13 07:15:06', '2014-03-21 11:02:42', NULL);
