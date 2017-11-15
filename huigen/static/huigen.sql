/*
SQLyog 企业版 - MySQL GUI v8.14 
MySQL - 5.7.14 : Database - huigen
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`huigen` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `huigen`;

/*Table structure for table `atc` */

DROP TABLE IF EXISTS `atc`;

CREATE TABLE `atc` (
  `url` varchar(150) COLLATE utf8_croatian_ci DEFAULT NULL,
  `xuhao` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(155) CHARACTER SET gbk DEFAULT NULL,
  `info` varchar(120) CHARACTER SET gbk DEFAULT NULL,
  `type` int(10) DEFAULT NULL,
  `thumb` varchar(70) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`xuhao`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

/*Data for the table `atc` */

insert  into `atc`(`url`,`xuhao`,`title`,`info`,`type`,`thumb`) values ('asdvfds',1,'打撒','打撒',0,'爱思');

/*Table structure for table `pictures` */

DROP TABLE IF EXISTS `pictures`;

CREATE TABLE `pictures` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `pic` varchar(150) CHARACTER SET gbk DEFAULT NULL,
  `picname` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

/*Data for the table `pictures` */

insert  into `pictures`(`ID`,`pic`,`picname`) values (1,'http://v3.bootcss.com/assets/img/components.png','大叔大婶'),(2,'http://v3.bootcss.com/assets/img/components.png','打撒打撒大受访人'),(9,'http://www.huigen.com/static/images/7.jpg',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
