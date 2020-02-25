/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.10-MariaDB : Database - labor
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`labor` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `labor`;

/*Table structure for table `tbl_harga_to_user` */

DROP TABLE IF EXISTS `tbl_harga_to_user`;

CREATE TABLE `tbl_harga_to_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_uji` text DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT '-',
  `kategori` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_harga_to_user` */

insert  into `tbl_harga_to_user`(`id`,`item_uji`,`harga`,`keterangan`,`kategori`) values (1,'Ketebalan Jalan Aspal dengan Alat Core Drill ≤7 Titik',1050000,'Harga Paket','Pengujian Aspal'),(2,'Ketebalan Jalan Aspal dengan Alat Core Drill ≥7 Titik',150000,'Harga Per Titik','Pengujian Aspal'),(3,'Ketebalan Jalan berbutir dengan test pit ≤7 Titik',525000,'Harga Paket','Pengujian Aspal'),(4,'Ketebalan Jalan berbutir dengan test pit ≥7 Titik',75000,'Harga Per Titik','Pengujian Aspal'),(20,'Uji Tarik dan Lentur Besi 1 Paket',900000,'Pengujian 3 Tarik dan 3 Tekuk','Pengujian Struktur'),(21,'Pemotongan Benda Uji Baja/Besi 1 Sample',20000,'','Pengujian Struktur'),(24,'Kuat Tekan Beton Kubus 1 Sample',65000,'','Pengujian Beton'),(25,'Kuat Tekan Beton Kubus 1 Sample',130000,'≥ Mutu K301','Pengujian Beton'),(26,'Kuat Tekan Beton Silinder 1 Sample',65000,'','Pengujian Beton'),(33,'Hammer Test 1 Titik',160000,'Minimal 7 Titik','Pengujian Beton'),(35,'Kuat Tekan Beton Sample Core 1 Sample',200000,'','Pengujian Beton'),(52,'Sondir 1 Titik',1000000,'','Pengujian Tanah');

/*Table structure for table `tbl_harga_uji` */

DROP TABLE IF EXISTS `tbl_harga_uji`;

CREATE TABLE `tbl_harga_uji` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_uji` text DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT '-',
  `kategori` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_harga_uji` */

insert  into `tbl_harga_uji`(`id`,`item_uji`,`harga`,`keterangan`,`kategori`) values (1,'Ketebalan Jalan Aspal dengan Alat Core Drill ≤7 Titik',1050000,'Harga Paket','Pengujian Aspal'),(2,'Ketebalan Jalan Aspal dengan Alat Core Drill ≥7 Titik',150000,'Harga Per Titik','Pengujian Aspal'),(3,'Ketebalan Jalan berbutir dengan test pit ≤7 Titik',525000,'Harga Paket','Pengujian Aspal'),(4,'Ketebalan Jalan berbutir dengan test pit ≥7 Titik',75000,'Harga Per Titik','Pengujian Aspal'),(5,'Kepadatan / Density sample core aspal 1 Sample',60000,'','Pengujian Aspal'),(6,'Kadar Aspal / Reflux (Gembur/Core Besar) 1 Sample',600000,'','Pengujian Aspal'),(7,'Kadar Aspal/Reflux (Core Kecil) 1 Sample',150000,'','Pengujian Aspal'),(8,'Analisa Saringan (Setelah Kadar Aspal) 1 Sample',100000,'','Pengujian Aspal'),(9,'Kelekatan Agregat Terhadap Aspal 1 Sample',150000,'','Pengujian Aspal'),(10,'Marshall 1 Sample',100000,'','Pengujian Aspal'),(11,'Penetrasi Aspal 1 Sample',100000,'','Pengujian Aspal'),(12,'Daktilitas 1 Sample',200000,'','Pengujian Aspal'),(13,'Titik Lembek 1 Sample',200000,'','Pengujian Aspal'),(14,'Kehilangan Berat/TFOT 1 Sample',150000,'','Pengujian Aspal'),(15,'Sibolt Viskositas 1 Sample',200000,'','Pengujian Aspal'),(16,'Titik Nyala, Titik Bakar 1 Sample',200000,'','Pengujian Aspal'),(17,'Berat Jenis Aspal 1 Sample',200000,'','Pengujian Aspal'),(18,'Desain Mix Formula Aspal 1 Mix',2550000,'','Pengujian Aspal'),(19,'Desain Mix Formulas Latasir 1 Mix',2550000,'','Pengujian Aspal'),(20,'Uji Tarik dan Lentur Besi 1 Paket',900000,'Pengujian 3 Tarik dan 3 Tekuk','Pengujian Struktur'),(21,'Pemotongan Benda Uji Baja/Besi 1 Sample',20000,'','Pengujian Struktur'),(22,'Uji Tarik Plat 1 Paket',450000,'','Pengujian Struktur'),(23,'Uji Lentur Kayu 1 Sample',150000,'','Pengujian Struktur'),(24,'Kuat Tekan Beton Kubus 1 Sample',65000,'','Pengujian Beton'),(25,'Kuat Tekan Beton Kubus 1 Sample',130000,'≥ Mutu K301','Pengujian Beton'),(26,'Kuat Tekan Beton Silinder 1 Sample',65000,'','Pengujian Beton'),(27,'Keping Beton 1 Sample',10000,'','Pengujian Beton'),(28,'Kuat Tekan Paving Block/Batako 1 Sample',55000,'Mutu > K-200','Pengujian Beton'),(29,'Kuat Tekan Paving Block/Batako 1 Sample',150000,'Mutu < K-200','Pengujian Beton'),(30,'Kuat Tekan Mortar 1 Sample',150000,'','Pengujian Beton'),(31,'Desain Mix Formula Beton 1 Mix',1750000,'','Pengujian Beton'),(32,'Uji Lentur Beton Balok 1 Sample',150000,'','Pengujian Beton'),(33,'Hammer Test 1 Titik',160000,'Minimal 7 Titik','Pengujian Beton'),(34,'Ketebalan Jalan Beton dengan Alat Core Drill (Minimal 3 titik) 1 Titik',750000,'','Pengujian Beton'),(35,'Kuat Tekan Beton Sample Core 1 Sample',200000,'','Pengujian Beton'),(36,'Berat Jenis Base 1 Sample',300000,'','Pengujian Tanah'),(37,'Berat Jenis 1 Sample',150000,'','Pengujian Tanah'),(38,'Kadar Air 1 Sample',50000,'','Pengujian Tanah'),(39,'Berat Volume 1 Sample',50000,'','Pengujian Tanah'),(40,'Analisa Saringan/Hydrometer 1 Sample',100000,'','Pengujian Tanah'),(41,'Analisa Saringan Base 1 Sample',150000,'','Pengujian Tanah'),(42,'Analisa (LL/PL/PI) 1 Sample',150000,'','Pengujian Tanah'),(43,'Uji Geser Langsung/Direct Shear 1 Sample',150000,'','Pengujian Tanah'),(44,'Konsolodasi 1 Sample',200000,'','Pengujian Tanah'),(45,'Pemadatan Standard/Standard Proctor 1 Sample',400000,'','Pengujian Tanah'),(46,'Pemadatan Modifikasi/Modified Proctor 1 Sample',450000,'','Pengujian Tanah'),(47,'CBR Laboratorium Kering/Rendam 1 Sample',500000,'','Pengujian Tanah'),(48,'Triaxial UU 1 Sample',450000,'','Pengujian Tanah'),(49,'Triaxial CU 1 Sample',750000,'','Pengujian Tanah'),(50,'Triaxial CD 1 Sample',750000,'','Pengujian Tanah'),(51,'Permeabilitas 1 Titik',75000,'','Pengujian Tanah'),(52,'Sondir 1 Titik',1000000,'','Pengujian Tanah'),(53,'Bor Tangan 1 Titik',500000,'','Pengujian Tanah'),(54,'Bor Mesin 1 Titik',17000000,'','Pengujian Tanah'),(55,'DCP 1 Titik',150000,'','Pengujian Tanah'),(56,'CBR Lapangan 1 Titik',500000,'','Pengujian Tanah'),(57,'Sand Cone 1 Titik',250000,'','Pengujian Tanah'),(58,'Pemadatan Tanah 1 Sample',600000,'Harga Paket','Pengujian Tanah'),(59,'Kadar Air 1 Sample',50000,'','Pengujian Mekanika Bahan'),(60,'Berat Volume 1 Sample',50000,'','Pengujian Mekanika Bahan'),(61,'Berat Jenis dan Penyerapan 1 Sample',150000,'','Pengujian Mekanika Bahan'),(62,'Analisa Saringan/Gradasi 1 Sample',100000,'','Pengujian Mekanika Bahan'),(63,'Kadar Lumpur 1 Sample',75000,'','Pengujian Mekanika Bahan'),(64,'Kadar Organik Agregat Halus 1 Sample',150000,'','Pengujian Mekanika Bahan'),(65,'Abrasi/Los Angeles Agregat Kasar 1 Sample',300000,'','Pengujian Mekanika Bahan'),(66,'Uji Tumbuk/Impact Agregat Kasar 1 Sample',300000,'','Pengujian Mekanika Bahan'),(67,'Kepipihan Agregat Kasar 1 Sample',150000,'','Pengujian Mekanika Bahan'),(68,'Uji Vicat 1 Sample',100000,'','Pengujian Mekanika Bahan'),(69,'Agregat Base A/B/S 1 Sample',1850000,'Harga Paket','Pengujian Mekanika Bahan'),(70,'Agregat Lapen (1-2/2-3/3-5) 1 Sample',1050000,'Harga Paket','Pengujian Mekanika Bahan'),(71,'Analisa Saringan 3x 1 Sample',1050000,'Harga Paket','Pengujian Mekanika Bahan'),(72,'Berat Jenis 3x Abrasi 1 Sample',1050000,'Harga Paket','Pengujian Mekanika Bahan'),(73,'Abrasi 1 Sample',1050000,'Harga Paket','Pengujian Mekanika Bahan'),(74,'Pemadatan Base A/B/S 1 Sample',800000,'Harga Paket','Pengujian Mekanika Bahan'),(75,'Pengujian Kelayakan Agregat Kasur (2 Ukuran) 1 Quary',1050000,'Harga Paket','Pengujian Mekanika Bahan'),(76,'Pengujian Kelayakan Agregat Kasur (1 Ukuran) 1 Quary',700000,'Harga Paket','Pengujian Mekanika Bahan'),(77,'Pengujian Kelayakan Agregat Halus 1 Quary',525000,'Harga Paket','Pengujian Mekanika Bahan');

/*Table structure for table `tbl_jadwal` */

DROP TABLE IF EXISTS `tbl_jadwal`;

CREATE TABLE `tbl_jadwal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `kuota` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_jadwal` */

insert  into `tbl_jadwal`(`id`,`tanggal`,`kuota`) values (1,'2020-02-20',9);

/*Table structure for table `tbl_karyawan` */

DROP TABLE IF EXISTS `tbl_karyawan`;

CREATE TABLE `tbl_karyawan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_karyawan` */

insert  into `tbl_karyawan`(`id`,`nama`,`email`,`password`,`jabatan`) values (1,'sudo','su@mail.com','61c105c1000bfe1a3a76217cfd6a62082ba64a07d0c0ffa094955951044762648d3fdbf3e5e6d4c0d1151cdec915b348c7d5873ed2e61d2a491264d31219a6f60Jut4WigDv7N1Nu4Xlmn5lRaSg5Vhbp6WL5HaR672Us=','su'),(5,'kasir','kasir@mail.com','fcdf2df4fafc7eb1a6790af4c2f3f8dd640e9828517c28916c1085997defda652c9989cf3647d558a4f158256522c1bfcc75e600bf9325197af6d34b3b8427d0E02qVgycLs9FiZXQP9vQYzJ+uvC/25mqmyVBRPR4LoQ=','Kasir'),(6,'Teknisi','teknisi@mail.com','39462f39ae02623077cdbee918bc791ea6d8651e25c05a08f0d76ce1471db5a71455a01305a356860874dfb0c1021978ee534a97dc233e416586a1212aa7c0c6hyvU7hssVDXl2OXB5h4lC3VHJdQ/5yt7d6wkzIL3jdE=','Teknisi'),(7,'Teknisi 2','teknisi2@mail.com','5ba62f6280a3f800b2cea68e3135dcefa9141f8913c8b982f1fe26c4c7aac69f612dfd60cec9e20f77aad939894e63126bf94ce55270b0dfd1caac68e26afc4clXwTvUu1Ms5btberHi2WQu860JlS28QMmwZcdI6y9Oo=','Teknisi'),(8,'Penyelia','penyelia@mail.com','ca734875b66537be3679bdf79d1328c1bfee0f6d2f213161e52d517675066721cb4fe7282fc13bd2f9cf2c9951c0983df3d953f3c21434bc65778860dcf104e7oX174embyZVZPJk87ABufEy2qULl1M5BtZtlTzCSqOE=','Penyelia'),(9,'Kepala Lab','kepala@mail.com','6ad944493c7128940319e9745faeda1aa2f6bde5d268bfd6d843de6d74ba3de26a952396626ee68292b01dc2417ae3e6f5215869b74f316fd0c2f1d2a2fc7f0cDN/s6xXwDxNFrb3Zzf0BV6MHyj3uzW68FZ7jeWbVHGA=','Kepala Lab');

/*Table structure for table `tbl_pelanggan` */

DROP TABLE IF EXISTS `tbl_pelanggan`;

CREATE TABLE `tbl_pelanggan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `nope` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `nama_perusahaan` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_pelanggan` */

insert  into `tbl_pelanggan`(`id`,`nama`,`nope`,`alamat`,`nama_perusahaan`,`email`,`password`,`tanggal`,`status`) values (1,'Guru Baik','08965434323','Jl Japan','Usaha Muda','user@mail.com','d76432c9d071f3e97086aeb2150e33d9430c889d16cbdff1c3343a06806e1910a67970980af6dff28e692a68003481eaf606c2d8ff6414fa953dc55baf564f6bwApxd9fw/xclP9qW2xOm2nhwoLUBTqNrXh4/NN7FYXc=','2020-02-18 16:17:05',1);

/*Table structure for table `tbl_timeline` */

DROP TABLE IF EXISTS `tbl_timeline`;

CREATE TABLE `tbl_timeline` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `faktur` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_timeline` */

insert  into `tbl_timeline`(`id`,`faktur`,`status`,`waktu`) values (1,'CV235L','Menunggu konfirmasi Bayar','2020-02-21 14:23:47'),(2,'CV235L','Menunggu Persetujuan Penyelia','2020-02-21 14:35:24'),(3,'CV235L','Memulai Proses Uji','2020-02-21 14:36:41'),(4,'CV235L','menunggu konfirmasi Penyelia','2020-02-21 14:39:52'),(5,'CV235L','Menunggu Persetujuan Kepala Lab','2020-02-21 14:40:20'),(6,'CV235L','Uji Selesai, Silahkan Download Hasilnya','2020-02-21 14:40:47');

/*Table structure for table `tbl_uji` */

DROP TABLE IF EXISTS `tbl_uji`;

CREATE TABLE `tbl_uji` (
  `faktur` varchar(100) NOT NULL,
  `id_pelanggan` varchar(100) DEFAULT NULL,
  `id_uji` int(11) DEFAULT NULL,
  `jenis_uji` varchar(100) DEFAULT NULL,
  `tanggal_uji` date DEFAULT NULL,
  `bukti_bayar` text DEFAULT '-',
  `hasil_uji` text DEFAULT '-',
  `status_uji` varchar(100) DEFAULT 'pending',
  `jenis_bayar` varchar(100) DEFAULT NULL,
  `teknisi` int(11) DEFAULT NULL,
  `status_periksa` varchar(100) DEFAULT 'penyelia',
  PRIMARY KEY (`faktur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_uji` */

insert  into `tbl_uji`(`faktur`,`id_pelanggan`,`id_uji`,`jenis_uji`,`tanggal_uji`,`bukti_bayar`,`hasil_uji`,`status_uji`,`jenis_bayar`,`teknisi`,`status_periksa`) values ('CV235L','1',3,'Lapangan','2020-02-20','http://localhost/lab/bukti/J388092O.png','http://localhost/lab/hasil/P134078R.pdf','verified','transfer',6,'done'),('LW204U','1',8,'Lab','2020-02-18','http://localhost/lab/bukti/F933306W.png','http://localhost/lab/hasil/S926227H.pdf','waiting','transfer',NULL,'penyelia'),('NM6082H','1',2,'Lapangan','2020-02-20','-','http://localhost/lab/hasil/O196037H.pdf','verified','cash',6,'done'),('OM5321Z','1',4,'Lapangan','2020-02-18','http://localhost/lab/bukti/I866353W.png','-','process','transfer',7,'penyelia');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
