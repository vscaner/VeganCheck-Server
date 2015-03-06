
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Мар 06 2015 г., 11:58
-- Версия сервера: 5.1.66
-- Версия PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `u787682332_vscan`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cat`
--

CREATE TABLE IF NOT EXISTS `cat` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `barcode` bigint(50) NOT NULL,
  `Cat` text COLLATE utf8_unicode_ci NOT NULL,
  `Subcat` text COLLATE utf8_unicode_ci NOT NULL,
  `veganstatus` text COLLATE utf8_unicode_ci NOT NULL,
  `vegetarianstatus` text COLLATE utf8_unicode_ci NOT NULL,
  `Testinanimals` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`index`),
  UNIQUE KEY `barcode` (`barcode`),
  KEY `index` (`index`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Структура таблицы `cat_list`
--

CREATE TABLE IF NOT EXISTS `cat_list` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `Cat` text COLLATE utf8_unicode_ci NOT NULL,
  `Subcat` text COLLATE utf8_unicode_ci NOT NULL,
  `Group` int(3) NOT NULL,
  KEY `index` (`index`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=75 ;

-- --------------------------------------------------------

--
-- Структура таблицы `client_platform_type`
--

CREATE TABLE IF NOT EXISTS `client_platform_type` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  KEY `index` (`index`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `barcode` bigint(250) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`index`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=32 ;

-- --------------------------------------------------------

--
-- Структура таблицы `gps`
--

CREATE TABLE IF NOT EXISTS `gps` (
  `index` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `barcode` text COLLATE utf8_unicode_ci NOT NULL,
  `gps` text COLLATE utf8_unicode_ci NOT NULL,
  `date` int(11) NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Структура таблицы `main`
--

CREATE TABLE IF NOT EXISTS `main` (
  `idmain` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyProizvod` text,
  `name` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `barcode` bigint(255) DEFAULT NULL,
  `veganstatus` int(11) NOT NULL,
  `vegetarianstatus` int(11) NOT NULL,
  `zapr_products` int(11) NOT NULL,
  `GMO` int(11) NOT NULL,
  `Publika` text CHARACTER SET cp1251 NOT NULL,
  `Testinanimals` text CHARACTER SET cp1251 NOT NULL,
  `comment` text,
  `meta` int(30) NOT NULL,
  `moderate` int(11) DEFAULT '0',
  `moderator_name` text NOT NULL,
  PRIMARY KEY (`idmain`),
  UNIQUE KEY `barcode` (`barcode`),
  FULLTEXT KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1195 ;

-- --------------------------------------------------------

--
-- Структура таблицы `passwords`
--

CREATE TABLE IF NOT EXISTS `passwords` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `pass` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`index`),
  UNIQUE KEY `index` (`index`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1005 ;

-- --------------------------------------------------------

--
-- Структура таблицы `PCClientVErsion`
--

CREATE TABLE IF NOT EXISTS `PCClientVErsion` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `version` int(11) NOT NULL,
  PRIMARY KEY (`index`),
  KEY `index` (`index`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Структура таблицы `report_metadata`
--

CREATE TABLE IF NOT EXISTS `report_metadata` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `user_ip` text COLLATE utf8_unicode_ci,
  `user_client_app_identificator` text COLLATE utf8_unicode_ci NOT NULL,
  `user_client_platform_type_index` int(11) NOT NULL,
  `user_client_app_version` text COLLATE utf8_unicode_ci NOT NULL,
  `report_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `report_latitude` double NOT NULL,
  `report_longitude` double NOT NULL,
  KEY `index` (`index`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=845 ;

-- --------------------------------------------------------

--
-- Структура таблицы `sms`
--

CREATE TABLE IF NOT EXISTS `sms` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `SMSSENDER` int(11) NOT NULL,
  `SMSTEXT` int(11) NOT NULL,
  PRIMARY KEY (`index`),
  KEY `index` (`index`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
