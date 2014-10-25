/*
Navicat MySQL Data Transfer

Source Server         : LessonManagement
Source Server Version : 50527
Source Host           : localhost:3306
Source Database       : article_management

Target Server Type    : MYSQL
Target Server Version : 50527
File Encoding         : 65001

Date: 2014-10-25 20:13:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbl_categories
-- ----------------------------
DROP TABLE IF EXISTS `tbl_categories`;
CREATE TABLE `tbl_categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_categories
-- ----------------------------
INSERT INTO `tbl_categories` VALUES ('1', 'Database');

-- ----------------------------
-- Table structure for tbl_posts
-- ----------------------------
DROP TABLE IF EXISTS `tbl_posts`;
CREATE TABLE `tbl_posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(255) NOT NULL,
  `post_content` text,
  `post_image` varchar(255) DEFAULT NULL,
  `post_created` datetime DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `post_view_count` int(11) DEFAULT '0',
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `category_id` (`category_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_posts
-- ----------------------------
INSERT INTO `tbl_posts` VALUES ('1', 'JAVA JDBC', '<p>How to code with Java JDBC</p>', '10721083_294705967386347_1708917141_n.jpg', '2014-10-19 00:00:00', '1', '0', '1');

-- ----------------------------
-- Table structure for tbl_users
-- ----------------------------
DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_type` int(11) DEFAULT NULL,
  `status` bit(1) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_users
-- ----------------------------
INSERT INTO `tbl_users` VALUES ('1', 'admin', 'admin', '0', '');
INSERT INTO `tbl_users` VALUES ('3', 'simple', 'simple', '1', '');
INSERT INTO `tbl_users` VALUES ('4', 'Test', 'Test', '0', '');
INSERT INTO `tbl_users` VALUES ('5', 'SimpleTest', '123', '1', '');
INSERT INTO `tbl_users` VALUES ('6', 'darapenhchet', '123', '0', '');
INSERT INTO `tbl_users` VALUES ('7', '123', '123', '0', '');
