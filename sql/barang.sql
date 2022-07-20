/*
MySQL Data Transfer
Source Host: localhost
Source Database: dbtokoku
Target Host: localhost
Target Database: dbtokoku
Date: 28/12/2020 17:00:34
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for barang
-- ----------------------------
DROP TABLE IF EXISTS `barang`;
CREATE TABLE `barang` (
  `kodebrg` varchar(20) NOT NULL DEFAULT '',
  `namabrg` varchar(50) DEFAULT NULL,
  `hargabeli` double DEFAULT NULL,
  `hargajual` double DEFAULT NULL,
  `gambar` varchar(200) DEFAULT 'default.jpg',
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`kodebrg`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `barang` VALUES ('001', 'ROYCO RASA AYAM 230G', '8200', '9200', 'default.jpg', 'Bumbu masak dengan berat 230 G per bungkus');
INSERT INTO `barang` VALUES ('002', 'WALLS SOLERO MANGGA', '3500', '4000', '002.png', 'Walls Solero Mangga');
INSERT INTO `barang` VALUES ('003', 'SUNLIGHT JRK HABBAT 230', '4500', '5000', '003.png', 'SUNLIGHT JRK HABBAT 230');
INSERT INTO `barang` VALUES ('004', 'BANGO BB AYM GR BACEM60', '3200', '3700', 'default.jpg', 'BANGO BB AYM GR BACEM60');
INSERT INTO `barang` VALUES ('005', 'SARIWANGI TEH CELUP 100', '15000', '17000', '005.jpg', 'SARIWANGI TEH CELUP 100');
