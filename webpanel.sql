-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主机: localhost
-- 生成日期: 2013 年 06 月 03 日 09:44
-- 服务器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 数据库: `webpanel`
-- 

-- --------------------------------------------------------

-- 
-- 表的结构 `n_aff_log`
-- 

CREATE TABLE `n_aff_log` (
  `id` int(10) NOT NULL auto_increment,
  `master` varchar(20) NOT NULL,
  `downline` varchar(20) NOT NULL,
  `regip` varchar(16) NOT NULL,
  `islq` int(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- 导出表中的数据 `n_aff_log`
-- 


-- --------------------------------------------------------

-- 
-- 表的结构 `n_sessions`
-- 

CREATE TABLE `n_sessions` (
  `session_id` varchar(40) NOT NULL default '0',
  `ip_address` varchar(45) NOT NULL default '0',
  `user_agent` varchar(150) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL default '0',
  `user_data` text NOT NULL,
  PRIMARY KEY  (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- 导出表中的数据 `n_sessions`
-- 

INSERT INTO `n_sessions` VALUES ('1f0c96dcf237a3663c45b6abca5d9795', '127.0.0.1', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; CIBA; .NET4.0C; .NET4.0E; .NET CLR 2.0.50727; .NET CLR 3', 1370250264, '');

-- --------------------------------------------------------

-- 
-- 表的结构 `n_user`
-- 

CREATE TABLE `n_user` (
  `role_id` int(11) NOT NULL default '0',
  `usr_name` varchar(20) NOT NULL,
  `pass_word` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `reg_time` datetime NOT NULL,
  `reg_ip` varchar(16) NOT NULL,
  `last_logintime` datetime NOT NULL,
  `gold` int(10) NOT NULL default '100000',
  `affiliate` int(10) default '0',
  PRIMARY KEY  (`usr_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- 导出表中的数据 `n_user`
-- 

INSERT INTO `n_user` VALUES (0, 'nero', '123456', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 100000, 0);
