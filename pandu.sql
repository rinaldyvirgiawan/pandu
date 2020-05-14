/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 100137
Source Host           : localhost:3306
Source Database       : pandu

Target Server Type    : MYSQL
Target Server Version : 100137
File Encoding         : 65001

Date: 2020-05-14 22:36:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for pandu
-- ----------------------------
DROP TABLE IF EXISTS `pandu`;
CREATE TABLE `pandu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `umur` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pandu
-- ----------------------------
INSERT INTO `pandu` VALUES ('1', 'pandu', '12', null, null);
INSERT INTO `pandu` VALUES ('2', 'gumi', '13', null, null);
INSERT INTO `pandu` VALUES ('3', 'somantri', '17', null, null);
INSERT INTO `pandu` VALUES ('4', 'pandu', '12', null, null);
INSERT INTO `pandu` VALUES ('5', 'pandu', '12', null, null);
INSERT INTO `pandu` VALUES ('6', 'gumi', '13', null, null);
INSERT INTO `pandu` VALUES ('7', 'somantri', '17', null, null);
INSERT INTO `pandu` VALUES ('8', 'pandu', '12', null, null);
INSERT INTO `pandu` VALUES ('9', 'pandu', '12', null, null);
INSERT INTO `pandu` VALUES ('10', 'gumi', '13', null, null);
INSERT INTO `pandu` VALUES ('11', 'somantri', '17', null, null);
INSERT INTO `pandu` VALUES ('12', 'pandu', '12', null, null);
INSERT INTO `pandu` VALUES ('13', 'pandu', '12', null, null);
INSERT INTO `pandu` VALUES ('14', 'gumi', '13', null, null);
INSERT INTO `pandu` VALUES ('15', 'somantri', '17', null, null);
INSERT INTO `pandu` VALUES ('16', 'pandu', '12', null, null);
INSERT INTO `pandu` VALUES ('17', 'pandu', '12', null, null);
INSERT INTO `pandu` VALUES ('18', 'gumi', '13', null, null);
INSERT INTO `pandu` VALUES ('19', 'somantri', '17', null, null);
INSERT INTO `pandu` VALUES ('20', 'pandu', '12', null, null);
INSERT INTO `pandu` VALUES ('21', 'pandu', '12', null, null);
INSERT INTO `pandu` VALUES ('22', 'gumi', '13', null, null);
INSERT INTO `pandu` VALUES ('23', 'somantri', '17', null, null);
INSERT INTO `pandu` VALUES ('24', 'pandu', '12', null, null);
INSERT INTO `pandu` VALUES ('25', 'pandu', '12', null, null);
INSERT INTO `pandu` VALUES ('26', 'gumi', '13', null, null);
INSERT INTO `pandu` VALUES ('27', 'somantri', '17', null, null);
INSERT INTO `pandu` VALUES ('28', 'pandu', '12', null, null);
INSERT INTO `pandu` VALUES ('29', 'pandu', '12', null, null);
INSERT INTO `pandu` VALUES ('30', 'gumi', '13', null, null);
INSERT INTO `pandu` VALUES ('31', 'somantri', '17', null, null);
INSERT INTO `pandu` VALUES ('32', 'pandu', '12', null, null);
SET FOREIGN_KEY_CHECKS=1;
