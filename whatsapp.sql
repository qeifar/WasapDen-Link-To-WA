/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 5.7.19 : Database - whatsapp
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`whatsapp` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `whatsapp`;

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(1,'s','superuser@admin.com','$2y$10$J6tCEwGWOXjzcI1.veWO9OamUWe0pYjoNIAyCDosBfYKY.juuQICi','vxrvndhPks4KHVvFU1y1laUVsiX4AJFgnw1JhksquLvNoemKLkgEPoem7wpe','2018-01-07 20:35:33','2018-01-07 20:35:33');

/*Table structure for table `whatsapps` */

DROP TABLE IF EXISTS `whatsapps`;

CREATE TABLE `whatsapps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wa_id` varchar(100) DEFAULT NULL,
  `text` text,
  `phone` varchar(100) DEFAULT NULL,
  `user_id` int(13) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `whatsapps` */

insert  into `whatsapps`(`id`,`wa_id`,`text`,`phone`,`user_id`) values 
(1,'abc123','Manusia','60102381057',1),
(2,'ccc224','adcadca','60101111057',2),
(3,'DEN4e7254c6903347d239d61cf64ecbeb2eadfdc609','Bro apa khabar?sd','601230392008',1),
(4,'DEN4e7254c6903347d239d61cf64ecbeb2eadfdc609','apa gelak2 ni','3030300303',1),
(5,'DEN4e7254c6903347d239d61cf64ecbeb2eadfdc609','hahahahah','3030300303',1),
(6,'DEN220d5ad8cf73a03d6c8a4ef1de20293e19ba387e','woi','6010120101',1),
(7,'DENfd0731b122f1dbdd0e2b236ba9e571bfe4c3f1ce','Yo koka','60146213588',1),
(8,'DEN220d5ad8cf73a03d6c8a4ef1de20293e19ba387e','fdwdwww','212131232',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
