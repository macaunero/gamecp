/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50137
Source Host           : localhost:3306
Source Database       : web

Target Server Type    : MYSQL
Target Server Version : 50137
File Encoding         : 65001

Date: 2013-06-03 03:20:32
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `content`
-- ----------------------------
DROP TABLE IF EXISTS `content`;
CREATE TABLE `content` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of content
-- ----------------------------

-- ----------------------------
-- Table structure for `paylog`
-- ----------------------------
DROP TABLE IF EXISTS `paylog`;
CREATE TABLE `paylog` (
  `username` varchar(16) CHARACTER SET utf8 NOT NULL,
  `role_id` int(11) NOT NULL,
  `yuanbao` int(11) NOT NULL,
  `paytime` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of paylog
-- ----------------------------
INSERT INTO `paylog` VALUES ('nero', '1', '10000', '2013-05-31 16:21:39');
INSERT INTO `paylog` VALUES ('nero', '1', '1500000', '2013-05-31 16:31:12');
INSERT INTO `paylog` VALUES ('nero', '1', '10000', '2013-05-31 16:40:46');
INSERT INTO `paylog` VALUES ('nero', '1', '10000', '2013-05-31 16:42:41');
INSERT INTO `paylog` VALUES ('longnhj', '1', '50000', '2013-05-31 18:05:11');
INSERT INTO `paylog` VALUES ('longnhj', '1', '50000', '2013-05-31 18:13:53');
INSERT INTO `paylog` VALUES ('longnhj', '1', '50000', '2013-05-31 18:18:33');
INSERT INTO `paylog` VALUES ('lai5710223', '1', '100000', '2013-06-01 06:41:40');

-- ----------------------------
-- Table structure for `spread`
-- ----------------------------
DROP TABLE IF EXISTS `spread`;
CREATE TABLE `spread` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tid` varchar(10) NOT NULL,
  `lid` varchar(50) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `islq` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of spread
-- ----------------------------
INSERT INTO `spread` VALUES ('1', 'longnhj', 'longnhj1', '123.24.145.79', '0');
INSERT INTO `spread` VALUES ('2', 'longnhj', 'longnhj4', '123.24.163.224', '0');
INSERT INTO `spread` VALUES ('3', 'longnhj', 'longnhj6', '113.22.26.216', '0');
INSERT INTO `spread` VALUES ('4', 'lai5710223', 'a5710223', '116.20.192.15', '0');
INSERT INTO `spread` VALUES ('5', 'lai5710223', 'lai5722691', '116.20.180.82', '0');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `username` varchar(16) NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '0',
  `passwd` char(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `register_time` datetime NOT NULL,
  `register_ip` varchar(16) NOT NULL,
  `last_login_time` datetime NOT NULL,
  `yuanbao` int(11) NOT NULL DEFAULT '100000',
  `tg` int(11) DEFAULT '0',
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('nero', '0', '123456', 'rapidlcom@gmail.com', '0000-00-00 00:00:00', '2013-05-30 09:14', '2013-06-03 03:52:11', '0', '0');
INSERT INTO `user` VALUES ('a541961975', '0', 'liuman123', 'a541961975@qq.com', '0000-00-00 00:00:00', '2013-05-31 04:03', '2013-05-31 04:03:09', '0', '0');
INSERT INTO `user` VALUES ('test', '0', '123456', 'rapidlcom@gmail.com', '0000-00-00 00:00:00', '2013-05-31 08:09', '2013-05-31 08:09:07', '0', '0');
INSERT INTO `user` VALUES ('a405912719', '0', '123123', '405912719@qq.com', '0000-00-00 00:00:00', '2013-05-31 14:55', '2013-05-31 14:55:59', '0', '0');
INSERT INTO `user` VALUES ('philix', '0', '123123', 'philix@asdas.com', '0000-00-00 00:00:00', '2013-05-31 14:56', '2013-05-31 14:56:09', '0', '0');
INSERT INTO `user` VALUES ('hansiweiqwe', '0', 'hansiwei', 'hansiweiqwe@qq.com', '0000-00-00 00:00:00', '2013-05-31 14:56', '2013-05-31 15:00:54', '0', '0');
INSERT INTO `user` VALUES ('491154016', '0', '6518433', '491154016@qq.com', '0000-00-00 00:00:00', '2013-05-31 14:56', '2013-05-31 16:56:01', '0', '0');
INSERT INTO `user` VALUES ('yzf252606', '0', '334211550', 'yzf252606@163.com', '0000-00-00 00:00:00', '2013-05-31 14:56', '2013-06-01 15:47:31', '0', '0');
INSERT INTO `user` VALUES ('imrain01', '0', '123456', 'accfsharehdvn@yahoo.com', '0000-00-00 00:00:00', '2013-05-31 14:56', '2013-05-31 14:56:58', '0', '0');
INSERT INTO `user` VALUES ('kankan', '0', '123456', 'kankan@163.com', '0000-00-00 00:00:00', '2013-05-31 14:57', '2013-05-31 14:57:36', '0', '0');
INSERT INTO `user` VALUES ('thientruongdx', '0', 'maiyeuem', 'thientruonggkt@gmail.com', '0000-00-00 00:00:00', '2013-05-31 14:57', '2013-05-31 14:57:47', '0', '0');
INSERT INTO `user` VALUES ('feng168', '0', '123456', '48634224@qq.com', '0000-00-00 00:00:00', '2013-05-31 15:00', '2013-05-31 15:26:54', '0', '0');
INSERT INTO `user` VALUES ('1554260090', '0', '155426000', '1554260090@qq.com', '0000-00-00 00:00:00', '2013-05-31 15:01', '2013-05-31 15:01:14', '0', '0');
INSERT INTO `user` VALUES ('lai5710223', '0', '5710223', '258737303@qq.com', '0000-00-00 00:00:00', '2013-05-31 15:01', '2013-06-01 15:49:04', '0', '0');
INSERT INTO `user` VALUES ('wqu0517c', '0', '8440041', '412935313@qq.com', '0000-00-00 00:00:00', '2013-05-31 15:03', '2013-05-31 15:03:48', '0', '0');
INSERT INTO `user` VALUES ('longnhj', '0', 'longnhj', 'misslovemy1109@Hotmail.com', '0000-00-00 00:00:00', '2013-05-31 15:30', '2013-05-31 20:59:05', '0', '0');
INSERT INTO `user` VALUES ('wangyu', '0', '88024994', 'xtiandi@163.com', '2013-05-31 16:20:28', '123.53.117.131', '2013-05-31 16:20:28', '0', '0');
INSERT INTO `user` VALUES ('a875206', '0', '875206a', 'xtiandi@163.com', '2013-05-31 16:57:49', '113.74.41.141', '2013-05-31 16:57:49', '0', '0');
INSERT INTO `user` VALUES ('mdesign', '0', '123456', 'xtiandi@163.com', '2013-05-31 17:15:24', '171.226.62.221', '2013-05-31 17:16:33', '0', '0');
INSERT INTO `user` VALUES ('longnhj2', '0', 'longnhj1', 'xtiandi@163.com', '2013-05-31 17:52:38', '113.22.26.216', '2013-05-31 17:52:38', '0', '0');
INSERT INTO `user` VALUES ('longnhj1', '0', 'longnhj1', 'xtiandi@163.com', '2013-05-31 18:03:03', '123.24.145.79', '2013-05-31 18:03:03', '0', '0');
INSERT INTO `user` VALUES ('longnhj4', '0', 'longnhj', 'xtiandi@163.com', '2013-05-31 18:09:41', '123.24.163.224', '2013-05-31 18:09:41', '0', '0');
INSERT INTO `user` VALUES ('longnhj3', '0', 'longnhj3', 'xtiandi@163.com', '2013-05-31 18:03:51', '123.24.163.224', '2013-05-31 18:03:51', '0', '0');
INSERT INTO `user` VALUES ('longnhj6', '0', 'longnhj', 'xtiandi@163.com', '2013-05-31 18:17:20', '113.22.26.216', '2013-05-31 18:17:20', '0', '0');
INSERT INTO `user` VALUES ('longnhj5', '0', 'longnhj', 'xtiandi@163.com', '2013-05-31 18:11:19', '113.22.26.216', '2013-05-31 18:11:19', '0', '0');
INSERT INTO `user` VALUES ('hao001', '0', 'hao001', 'xtiandi@163.com', '2013-06-01 04:29:42', '123.52.160.253', '2013-06-03 02:21:54', '0', '0');
INSERT INTO `user` VALUES ('longnhj7', '0', 'longnhj', 'xtiandi@163.com', '2013-05-31 18:18:00', '113.22.26.216', '2013-05-31 18:18:00', '0', '0');
INSERT INTO `user` VALUES ('neroa', '0', '123456', 'xtiandi@163.com', '2013-06-01 04:30:22', '113.74.41.141', '2013-06-01 04:30:22', '0', '0');
INSERT INTO `user` VALUES ('qq123123', '0', '123123', 'xtiandi@163.com', '2013-06-01 04:30:47', '117.87.216.141', '2013-06-01 04:30:47', '0', '0');
INSERT INTO `user` VALUES ('m0911', '0', '1990', 'xtiandi@163.com', '2013-06-01 04:30:54', '27.115.121.40', '2013-06-01 04:30:54', '0', '0');
INSERT INTO `user` VALUES ('qwe123', '0', '123123', 'xtiandi@163.com', '2013-06-01 04:31:56', '182.90.51.95', '2013-06-01 04:32:16', '0', '0');
INSERT INTO `user` VALUES ('1230123', '0', '1230123', 'xtiandi@163.com', '2013-06-01 04:34:01', '221.226.49.75', '2013-06-01 04:34:01', '0', '0');
INSERT INTO `user` VALUES ('lichen8871', '0', '198871', 'xtiandi@163.com', '2013-06-01 04:51:54', '111.160.32.134', '2013-06-01 13:01:55', '0', '0');
INSERT INTO `user` VALUES ('a5710223', '0', '5710223', 'xtiandi@163.com', '2013-06-01 06:12:56', '116.20.192.15', '2013-06-01 06:12:56', '0', '0');
INSERT INTO `user` VALUES ('a5867581', '0', '541881999', 'xtiandi@163.com', '2013-06-01 11:00:41', '59.52.150.92', '2013-06-01 11:00:41', '0', '0');
INSERT INTO `user` VALUES ('lai5722691', '0', '5722691', 'xtiandi@163.com', '2013-06-01 06:15:02', '116.20.180.82', '2013-06-01 06:15:02', '0', '0');
INSERT INTO `user` VALUES ('zcaizhang', '0', 'zcaizy', 'xtiandi@163.com', '2013-06-01 06:16:25', '112.81.33.57', '2013-06-01 06:24:33', '0', '0');
INSERT INTO `user` VALUES ('xidiyg', '0', '111111', 'xtiandi@163.com', '2013-06-01 12:15:09', '180.223.41.16', '2013-06-01 12:15:09', '0', '0');
INSERT INTO `user` VALUES ('123123123', '0', '123123123', 'xtiandi@163.com', '2013-06-01 12:20:40', '211.160.163.3', '2013-06-01 12:20:40', '0', '0');
INSERT INTO `user` VALUES ('1111', '0', '2222', 'xtiandi@163.com', '2013-06-01 12:22:12', '218.19.13.225', '2013-06-01 12:22:12', '0', '0');
INSERT INTO `user` VALUES ('movaie', '0', 'movaie19960727', 'xtiandi@163.com', '2013-06-01 12:23:01', '222.217.242.63', '2013-06-01 12:23:01', '0', '0');
INSERT INTO `user` VALUES ('123456aaa', '0', '123456', 'xtiandi@163.com', '2013-06-01 15:46:25', '118.121.137.75', '2013-06-01 15:46:25', '0', '0');
INSERT INTO `user` VALUES ('qq594994872', '0', 'cai7017', 'xtiandi@163.com', '2013-06-02 01:02:39', '119.121.251.84', '2013-06-02 01:02:39', '0', '0');
