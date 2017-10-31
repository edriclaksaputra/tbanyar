/*
SQLyog Enterprise - MySQL GUI v7.15 
MySQL - 5.6.25 : Database - tugasakhir
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`tugasakhir` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `tugasakhir`;

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `kodebarang` int(10) NOT NULL AUTO_INCREMENT,
  `namabarang` varchar(10) DEFAULT NULL,
  `hargabeli` int(10) DEFAULT NULL,
  `hargajual` int(10) DEFAULT NULL,
  `stok` int(10) DEFAULT NULL,
  `kodesupplier` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`kodebarang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `barang` */

/*Table structure for table `faktur` */

DROP TABLE IF EXISTS `faktur`;

CREATE TABLE `faktur` (
  `kodefaktur` int(10) NOT NULL AUTO_INCREMENT,
  `kodebarang` int(10) DEFAULT NULL,
  `hargajual` int(10) DEFAULT NULL,
  `jumlah` int(10) DEFAULT NULL,
  `subtotal` int(12) DEFAULT NULL,
  `konsumen` varchar(20) DEFAULT NULL,
  `total` int(12) DEFAULT NULL,
  `tanggalfaktur` date DEFAULT NULL,
  `alamat` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`kodefaktur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `faktur` */

/*Table structure for table `po` */

DROP TABLE IF EXISTS `po`;

CREATE TABLE `po` (
  `kodePO` int(10) NOT NULL AUTO_INCREMENT,
  `tanggalPO` date DEFAULT NULL,
  `kodesupplier` int(5) DEFAULT NULL,
  `kodebarang` int(10) DEFAULT NULL,
  `hargabeli` int(10) DEFAULT NULL,
  PRIMARY KEY (`kodePO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `po` */

/*Table structure for table `supplier` */

DROP TABLE IF EXISTS `supplier`;

CREATE TABLE `supplier` (
  `kodesupplier` int(5) NOT NULL AUTO_INCREMENT,
  `namasupplier` varchar(10) DEFAULT NULL,
  `alamat` varchar(30) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`kodesupplier`),
  CONSTRAINT `FK_supplier` FOREIGN KEY (`kodesupplier`) REFERENCES `barang` (`kodebarang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `supplier` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;