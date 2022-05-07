-- --------------------------------------------------------
-- 호스트:                          127.0.0.1
-- 서버 버전:                        10.0.38-MariaDB-0ubuntu0.16.04.1 - Ubuntu 16.04
-- 서버 OS:                        debian-linux-gnu
-- HeidiSQL 버전:                  10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE TABLE IF NOT EXISTS `tb_house` (
  `house_id` int(11) NOT NULL AUTO_INCREMENT,
  `house_name` varchar(80) DEFAULT NULL,
  `house_address` varchar(255) DEFAULT NULL,
  `contents` text,
  `insert_date` datetime DEFAULT NULL,
  PRIMARY KEY (`house_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `tb_house_reservation` (
  `rs_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(80) DEFAULT NULL,
  `house_id` int(11) DEFAULT NULL,
  `rs_date` varchar(10) DEFAULT NULL,
  `tot_man` tinyint(4) DEFAULT NULL,
  `insert_date` datetime DEFAULT NULL,
  PRIMARY KEY (`rs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `tb_member_master` (
  `uid` bigint(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(80) DEFAULT NULL,
  `passwd` varchar(50) DEFAULT NULL,
  `user_name` varchar(70) DEFAULT NULL,
  `point` int(11) NOT NULL DEFAULT '0',
  `register_date` datetime DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
