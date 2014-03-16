-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 16, 2014 at 04:38 PM
-- Server version: 5.5.35
-- PHP Version: 5.4.4-14+deb7u8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `uiproperties`
--
CREATE DATABASE `uiproperties` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `uiproperties`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `created`, `modified`, `deleted`) VALUES
(1, NULL, 'home', '2014-03-13 07:11:52', '2014-03-16 14:47:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `document_files`
--

CREATE TABLE IF NOT EXISTS `document_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `document_id` int(11) DEFAULT NULL,
  `document_translation_id` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(45) NOT NULL,
  `path` varchar(100) NOT NULL,
  `is_a_link` tinyint(1) NOT NULL DEFAULT '0',
  `is_login_required` tinyint(1) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `document_translations`
--

CREATE TABLE IF NOT EXISTS `document_translations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `document_id` int(11) NOT NULL,
  `locale_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `summary` text,
  `body` text,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `document_translations`
--

INSERT INTO `document_translations` (`id`, `document_id`, `locale_id`, `user_id`, `name`, `summary`, `body`, `created`, `modified`, `deleted`) VALUES
(1, 2, 2, 1, '主页', '这是一个测试页面。。。', '原标题：宣示连任党魁决心 苏：为2014选战负责\r\n\r\n台海网3月15日讯 民进党今晚在云林举办造势餐会，前党主席蔡英文上午宣布角逐下任党主席后，现任党主席苏贞昌也宣示竞选连任决心，强调将以党主席身分全力辅选年底选战。\r\n\r\n据台湾“中央社”报道，民进党“团结胜选大会”云林场，晚上在虎尾举办募款餐会，席开500桌，苏贞昌和蔡英文都应邀出席，为党提名参选人加油打气。\r\n\r\n由于蔡英文上午宣布参选党主席，也让外界关注两人晚上会否碰面，但先抵达的蔡英文致词后随即离开，苏贞昌之后才到场，两人王不见王。\r\n\r\n苏贞昌授战旗给党提名云林县长参选人李进勇。苏贞昌也再度表明竞选连任决心，强调将以党主席身分全力辅选，也会为年底选举成败，负起完全责任。\r\n\r\n先到的蔡英文受访，媒体询问若当选党主席，是否对年底选举结果负起责任，她说，民进党的执政成绩普遍受到选民肯定，相信胜选的机会很大，应该会选得不错。\r\n\r\n\r\n对选党主席或“总统”二择一的看法，蔡英文表示，选党主席是希望让台湾人对政治有信心、对政党信赖，“总统”候选人要由支持者和社会大众选举出来，并非个人选择，政治人物在位子上做出好成绩，其他就交给选民。\r\n\r\n蔡英文下午出席“海内外台湾‘国是会议’”发表专题演讲，有民众询问如何改变民进党“逢中必反”的印象。她说，一个强势的国民党“倾中”，弱势的民进党要阻止国民党“倾中”，弱势力量小当然用力深，用力深容易被认为是激烈的一方。\r\n\r\n她表示，现在反对服贸协议的态度比较坚定，因为有社会理性力量的出现，对这件事情发表意见，持保留看法，所以民众观感改变。因此，民进党要改变“逢中必反”印象，要与社会力量结合，以理性方式处理攸关台湾人民生计的重大议题', '2014-03-16 15:57:02', '2014-03-16 15:57:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE IF NOT EXISTS `documents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `locale_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `summary` text,
  `body` text,
  `is_login_required` tinyint(1) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `parent_id`, `user_id`, `locale_id`, `category_id`, `name`, `summary`, `body`, `is_login_required`, `created`, `modified`, `deleted`) VALUES
(2, NULL, 1, 1, 1, 'Home', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi malesuada leo tellus, convallis faucibus turpis porttitor sed. Maecenas sagittis viverra nulla, nec egestas elit consequat viverra. Praesent ut diam facilisis, congue velit ut, laoreet leo. Nam nisl nibh, bibendum semper malesuada quis, placerat vitae enim. Interdum et malesuada fame...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi malesuada leo tellus, convallis faucibus turpis porttitor sed. Maecenas sagittis viverra nulla, nec egestas elit consequat viverra. Praesent ut diam facilisis, congue velit ut, laoreet leo. Nam nisl nibh, bibendum semper malesuada quis, placerat vitae enim. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean dictum eget metus id vestibulum. Ut scelerisque justo arcu, nec pretium orci hendrerit in. Praesent ut lectus molestie, accumsan risus id, cursus metus. Mauris elementum augue ut velit laoreet egestas. Fusce at sem facilisis, tempus massa vel, tincidunt odio. Nunc est massa, consectetur vitae felis ut, bibendum porta velit. Fusce vitae sodales nisl. Duis condimentum iaculis ligula eget rutrum. Aenean tincidunt dui non nulla posuere, ut rutrum ligula placerat. Proin turpis nisi, blandit non enim ac, imperdiet sodales leo.\r\n\r\nAliquam vel nisi et lorem imperdiet vulputate nec vitae tellus. Donec ultrices posuere turpis, a pulvinar libero scelerisque sagittis. Pellentesque enim nulla, sagittis vel magna et, pellentesque vehicula quam. Aliquam suscipit tortor a interdum volutpat. Nam a commodo ligula, non accumsan massa. Ut vitae nibh sagittis, ultricies elit id, mattis magna. Integer in enim ornare, volutpat nisl nec, scelerisque metus. Donec suscipit rhoncus nunc, at vulputate magna condimentum vel. Etiam adipiscing libero ante, ac placerat massa tempor in. Donec id metus massa. Integer ultricies orci cursus egestas luctus. Morbi eu dui venenatis, rhoncus ligula eu, elementum nulla. In volutpat risus at lectus aliquam, at posuere diam egestas.\r\n\r\nInteger porta ipsum gravida scelerisque faucibus. Etiam ut felis quis ante mollis dignissim nec at augue. Vivamus sagittis tincidunt ante non volutpat. Pellentesque nec nunc bibendum, venenatis leo id, fermentum lectus. Cras diam sem, posuere vel volutpat vitae, accumsan sed est. Fusce egestas sit amet nibh vitae tempor. Aenean et accumsan nulla. Praesent fermentum suscipit odio in pulvinar. Nullam luctus, lectus ac eleifend scelerisque, est sem ornare erat, eget consequat orci magna in ante.\r\n\r\nPraesent ornare elit condimentum augue mattis pellentesque. Vestibulum non nisl id sapien dapibus molestie ut ut magna. Proin mollis risus eu dui vestibulum, eu convallis risus laoreet. Cras posuere sem ultricies scelerisque fringilla. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas sit amet nulla in purus egestas pretium. Nullam vel purus in elit placerat rhoncus eu et urna. Duis non nunc quis urna tincidunt facilisis. Ut ac tincidunt ligula, sed ultricies augue.\r\n\r\nSuspendisse eleifend commodo est. Sed blandit, turpis ac molestie dapibus, nibh felis vestibulum leo, ac lacinia justo velit eget augue. Morbi a leo libero. Proin sed tempus felis. Nunc tellus lorem, imperdiet a dui sollicitudin, pulvinar varius erat. Donec non ligula leo. Sed sodales metus lectus, vitae auctor augue commodo sed. Aenean odio dui, vestibulum nec eros quis, fringilla feugiat dolor.', 0, '2014-03-16 15:53:57', '2014-03-16 15:53:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dynamic_routes`
--

CREATE TABLE IF NOT EXISTS `dynamic_routes` (
  `slug` varchar(255) NOT NULL,
  `spec` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` datetime DEFAULT NULL,
  PRIMARY KEY (`slug`),
  KEY `spec` (`spec`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `locales`
--

CREATE TABLE IF NOT EXISTS `locales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `code` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `locales`
--

INSERT INTO `locales` (`id`, `name`, `code`, `created`, `modified`, `deleted`) VALUES
(1, 'English Australia', 'en-AU', '2014-03-13 07:13:04', NULL, NULL),
(2, 'Traditional Chinese', 'zh-TW', '2014-03-13 07:13:04', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  `locale_id` int(11) DEFAULT NULL,
  `name` varchar(25) NOT NULL,
  `url` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

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
-- Dumping data for table `user_groups`
--

INSERT INTO `user_groups` (`id`, `parent_id`, `name`, `created`, `modified`, `deleted`) VALUES
(1, NULL, 'administrator', '2014-03-13 07:14:09', NULL, NULL),
(2, NULL, 'normal user', '2014-03-13 07:14:09', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

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
  UNIQUE KEY `email_UNIQUE` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_group_id`, `name`, `password`, `email`, `created`, `modified`, `deleted`) VALUES
(1, 1, 'admin', '', 'admin@uiproperties.com.au', '2014-03-13 07:15:06', NULL, NULL);
