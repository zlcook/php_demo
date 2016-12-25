/*
MySQL Data Transfer
Source Host: 127.0.0.1
Source Database: library
Target Host: 127.0.0.1
Target Database: library
Date: 2016/12/25 19:58:20
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for book
-- ----------------------------
CREATE TABLE `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(25) NOT NULL,
  `picPath` varchar(50) DEFAULT NULL,
  `price` decimal(3,0) NOT NULL,
  `author` char(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for stu
-- ----------------------------
CREATE TABLE `stu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(15) DEFAULT NULL,
  `name` varchar(15) NOT NULL,
  `sex` char(1) NOT NULL,
  `savenum` int(11) DEFAULT '0',
  `birth` date DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `book` VALUES ('6', 'ddd', 'ddd', '55', 'ddd');
INSERT INTO `book` VALUES ('7', 'ddd的', 'ddd', '55', 'ddd');
INSERT INTO `book` VALUES ('9', 'cc', 'df', '45', 'ccccccccccccccc');
INSERT INTO `stu` VALUES ('1', '123', 'admin', '男', '0', '2016-12-25', '594389932@qq.com');
