/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : yii2advanced

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2018-11-17 16:12:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for post
-- ----------------------------
DROP TABLE IF EXISTS `post`;
CREATE TABLE `post` (
  `catalog` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `book_name` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `publish` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of post
-- ----------------------------
INSERT INTO `post` VALUES ('心理学', '1', '戒了吧，拖延症', '辰格', '2013-10-01 00:00:00', '天津人民出版社', '33.00');
INSERT INTO `post` VALUES ('社会学', '2', null, null, null, null, null);
INSERT INTO `post` VALUES ('人物传记', '5', '四十自述', '胡适', '2012-10-01 00:00:00', '中国文史出版社', null);
INSERT INTO `post` VALUES ('计算机科学', '31', '你不知道的javaScript', '1', '0000-00-00 00:00:00', '1', '1.00');
INSERT INTO `post` VALUES ('中国文学', '16', '人间', '蔡骏', '2017-10-03 00:00:00', '中国文史出版社', '10.22');
INSERT INTO `post` VALUES ('中国文学', '3', '猫眼', '蔡骏', '2017-10-03 00:00:00', '中国文史出版社', '10.22');
INSERT INTO `post` VALUES ('中国文学', '4', '看着', '蔡骏', '2017-10-03 00:00:00', '中国文史出版社', '10.22');
INSERT INTO `post` VALUES ('中国文学', '6', '客栈', '蔡骏', '2017-10-03 00:00:00', '中国文史出版社', '10.22');
INSERT INTO `post` VALUES ('中国文学', '7', '公寓', '蔡骏', '2017-10-03 00:00:00', '中国文史出版社', '10.22');
INSERT INTO `post` VALUES ('中国文学', '30', '我与地坛', '史铁生', '1990-10-01 00:00:00', '中国文学出版社', '23.80');
INSERT INTO `post` VALUES ('中国文学', '9', '归来', '蔡骏', '2017-10-03 00:00:00', '中国文史出版社', '10.22');
INSERT INTO `post` VALUES ('中国文学', '10', '秘密', '蔡骏', '2017-10-03 00:00:00', '中国文史出版社', '10.22');
INSERT INTO `post` VALUES ('中国文学', '11', '旋转', '蔡骏', '2017-10-03 00:00:00', '中国文史出版社', '10.22');
INSERT INTO `post` VALUES ('中国文学', '12', '蝴蝶', '蔡骏', '2017-10-03 00:00:00', '中国文史出版社', '10.22');
INSERT INTO `post` VALUES ('中国文学', '13', '天机', '蔡骏', '2017-10-03 00:00:00', '中国文史出版社', '10.22');
INSERT INTO `post` VALUES ('中国文学', '17', '生死', '蔡骏', '2017-10-03 00:00:00', '中国文史出版社', '10.22');
INSERT INTO `post` VALUES ('中国文学', '20', '圣婴', '蔡骏', '2017-10-03 00:00:00', '中国文史出版社', '10.22');
INSERT INTO `post` VALUES ('中国文学', '21', '迷城', '蔡骏', '2017-10-03 00:00:00', '中国文史出版社', '10.22');
INSERT INTO `post` VALUES ('计算机科学', '32', 'JavaScript语言精粹', ' 赵泽欣 / 鄢学鹍', '1992-10-10 00:00:00', '电子工业出版社', '33.55');
INSERT INTO `post` VALUES ('中国文学', '27', '卷人', '蔡骏', '2017-10-03 00:00:00', '中国文史出版社', '10.22');
INSERT INTO `post` VALUES ('中国文学', '28', '家书', '蔡骏', '2017-10-03 00:00:00', '中国文史出版社', '10.22');
INSERT INTO `post` VALUES ('心理学', '29', '你淡定的样子很好看', 'Mary', '2016-10-12 00:00:00', '中国心理出版社', '22.59');
INSERT INTO `post` VALUES ('计算机科学', '33', '深入浅出Node', 'puling', '1900-10-10 00:00:00', '1', '1.00');
INSERT INTO `post` VALUES ('计算机科学', '34', '深入浅出Node', 'puling', '1900-10-10 00:00:00', '1', '1.00');
INSERT INTO `post` VALUES ('计算机科学', '35', '深入浅出Node', 'puling', '1900-10-10 00:00:00', '1', '1.00');
INSERT INTO `post` VALUES ('计算机科学', '36', '深入浅出Node', 'puling', '1900-10-10 00:00:00', '1', '1.00');
