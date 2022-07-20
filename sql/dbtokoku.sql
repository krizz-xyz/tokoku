/*
MySQL Data Transfer
Source Host: localhost
Source Database: dbtokoku
Target Host: localhost
Target Database: dbtokoku
Date: 30/12/2020 6:54:25
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
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(64) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `full_name` varchar(40) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `role` enum('customer','admin') DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `photo` varchar(64) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) DEFAULT NULL,
  `password_aes` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `barang` VALUES ('001', 'ROYCO RASA AYAM 230G', '8200', '9200', 'default.jpg', 'Bumbu masak dengan berat 230 G per bungkus');
INSERT INTO `barang` VALUES ('002', 'WALLS SOLERO MANGGA', '3500', '4000', '002.png', 'Walls Solero Mangga');
INSERT INTO `barang` VALUES ('003', 'SUNLIGHT JRK HABBAT 230', '4500', '5000', '003.png', 'SUNLIGHT JRK HABBAT 230');
INSERT INTO `barang` VALUES ('004', 'BANGO BB AYM GR BACEM60', '3200', '3700', 'default.jpg', 'BANGO BB AYM GR BACEM60');
INSERT INTO `barang` VALUES ('005', 'SARIWANGI TEH CELUP 100', '15000', '17000', '005.jpg', 'SARIWANGI TEH CELUP 100');
INSERT INTO `customer` VALUES ('001', 'Joko', 'k235 madiun', '0812345678', '001.jpg', 'admin');
INSERT INTO `users` VALUES ('1', 'admin', '$2y$10$tonZkQrnGnp9n38rWeMTieLPNxtDfvy4Z/35Q4rlFObsm/xFnSae.', 'admin@gmail.com', 'admin', '0812345678', 'admin', '2020-12-30 06:53:06', 'user_no_image.jpg', '2020-12-30 06:53:06', '1', 'ÖCN»¦KIÈ@Îs?ç”');
