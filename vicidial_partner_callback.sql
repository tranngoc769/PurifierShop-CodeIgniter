/*
 Navicat Premium Data Transfer

 Source Server         : Tlink01
 Source Server Type    : MySQL
 Source Server Version : 100136
 Source Host           : tlink01.tel4vn.com:3306
 Source Schema         : asterisk

 Target Server Type    : MySQL
 Target Server Version : 100136
 File Encoding         : 65001

 Date: 08/06/2021 14:10:44
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for vicidial_partner_callback
-- ----------------------------
DROP TABLE IF EXISTS `vicidial_partner_callback`;
CREATE TABLE `vicidial_partner_callback`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `api_url` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `header` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `partner` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
