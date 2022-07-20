/*
MySQL Data Transfer
Source Host: localhost
Source Database: dbtokoku
Target Host: localhost
Target Database: dbtokoku
Date: 28/12/2020 17:00:23
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for customer
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `kodecust` varchar(20) NOT NULL,
  `namacust` varchar(30) DEFAULT NULL,
  `alamat` varchar(60) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`kodecust`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `customer` VALUES ('001', 'Joko', 'madiun', '0812345678', '001.jpg', 'admin');
