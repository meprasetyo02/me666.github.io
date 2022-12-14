/*
Navicat MySQL Data Transfer

Source Server         : exc
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : tes

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-02-03 19:51:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tb_asset`
-- ----------------------------
DROP TABLE IF EXISTS `tb_asset`;
CREATE TABLE `tb_asset` (
  `id_asset` int(100) NOT NULL AUTO_INCREMENT,
  `asset_code` varchar(100) DEFAULT NULL,
  `asset_name` varchar(255) DEFAULT NULL,
  `asset_category` varchar(100) DEFAULT NULL,
  `departement` varchar(100) DEFAULT NULL,
  `purchase_date` date DEFAULT NULL,
  `price` double(200,0) DEFAULT NULL,
  `supplayer_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_asset`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_asset
-- ----------------------------
INSERT INTO `tb_asset` VALUES ('1', 'PC-001', 'CPU 01', 'Computer', 'Programmer', '2020-01-07', '5000000', 'ABC');
INSERT INTO `tb_asset` VALUES ('2', 'PC-002', 'Mouse', 'Computer', 'Programmer', '2020-02-01', '30000', 'DEF');

-- ----------------------------
-- Table structure for `tb_user_login`
-- ----------------------------
DROP TABLE IF EXISTS `tb_user_login`;
CREATE TABLE `tb_user_login` (
  `id_user` int(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `no_hp` varchar(100) DEFAULT NULL,
  `id_jabatan` int(20) DEFAULT NULL,
  `tanggal_pembuatan` datetime DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_user_login
-- ----------------------------
INSERT INTO `tb_user_login` VALUES ('1', 'me.serj.adam@gmail.com', 'Adam', 'c4ca4238a0b923820dcc509a6f75849b', '08967356534', '1', '2019-08-22 10:55:27');
INSERT INTO `tb_user_login` VALUES ('2', 'echorockers@gmail.com', 'adam@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0886734673', '1', '2019-08-22 10:55:33');
