-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for child_care
CREATE DATABASE IF NOT EXISTS `child_care` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `child_care`;

-- Dumping structure for table child_care.activity_table
CREATE TABLE IF NOT EXISTS `activity_table` (
  `activity_id` int(11) NOT NULL AUTO_INCREMENT,
  `classroom_id` int(11) NOT NULL,
  `activity_image` text NOT NULL,
  `activity_description` text NOT NULL,
  `activity_date` date NOT NULL,
  `activity_start` datetime NOT NULL,
  `activity_end` datetime NOT NULL,
  PRIMARY KEY (`activity_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table child_care.activity_table: ~0 rows (approximately)
DELETE FROM `activity_table`;
/*!40000 ALTER TABLE `activity_table` DISABLE KEYS */;
/*!40000 ALTER TABLE `activity_table` ENABLE KEYS */;

-- Dumping structure for table child_care.admin_table
CREATE TABLE IF NOT EXISTS `admin_table` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` text NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table child_care.admin_table: ~0 rows (approximately)
DELETE FROM `admin_table`;
/*!40000 ALTER TABLE `admin_table` DISABLE KEYS */;
INSERT INTO `admin_table` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
	(1, 'admin', 'admin@admin.com', 'admin123');
/*!40000 ALTER TABLE `admin_table` ENABLE KEYS */;

-- Dumping structure for table child_care.children_table
CREATE TABLE IF NOT EXISTS `children_table` (
  `children_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `classroom_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `age` int(11) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`children_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table child_care.children_table: ~5 rows (approximately)
DELETE FROM `children_table`;
/*!40000 ALTER TABLE `children_table` DISABLE KEYS */;
INSERT INTO `children_table` (`children_id`, `user_id`, `classroom_id`, `name`, `age`, `image`) VALUES
	(2, 1, 0, 'Syamil', 12, 'https://i.imgur.com/USofWhi.jpg'),
	(12, 0, 0, 'Hasan', 3, 'https://i.imgur.com/USofWhi.jpg'),
	(17, 0, 0, 'Li', 3, 'https://i.imgur.com/USofWhi.jpg'),
	(27, 1, 1, 'Syahir', 3, 'https://i.imgur.com/USofWhi.jpg'),
	(28, 0, 0, 'Zaim', 12, 'https://i.imgur.com/USofWhi.jpg');
/*!40000 ALTER TABLE `children_table` ENABLE KEYS */;

-- Dumping structure for table child_care.classroom_table
CREATE TABLE IF NOT EXISTS `classroom_table` (
  `classroom_id` int(11) NOT NULL AUTO_INCREMENT,
  `classroom_name` varchar(11) NOT NULL,
  `classroom_capacity` int(11) NOT NULL,
  PRIMARY KEY (`classroom_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table child_care.classroom_table: ~4 rows (approximately)
DELETE FROM `classroom_table`;
/*!40000 ALTER TABLE `classroom_table` DISABLE KEYS */;
INSERT INTO `classroom_table` (`classroom_id`, `classroom_name`, `classroom_capacity`) VALUES
	(1, 'Caterpillar', 20),
	(2, 'Butterfly', 20),
	(3, 'Tiger', 20),
	(4, 'Falcon', 15);
/*!40000 ALTER TABLE `classroom_table` ENABLE KEYS */;

-- Dumping structure for table child_care.menu_table
CREATE TABLE IF NOT EXISTS `menu_table` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `classroom_id` int(11) NOT NULL,
  `menu_name` varchar(50) NOT NULL,
  `menu_date` date NOT NULL,
  `menu_start_time` time NOT NULL,
  `menu_end_time` time NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table child_care.menu_table: ~0 rows (approximately)
DELETE FROM `menu_table`;
/*!40000 ALTER TABLE `menu_table` DISABLE KEYS */;
/*!40000 ALTER TABLE `menu_table` ENABLE KEYS */;

-- Dumping structure for table child_care.skill_table
CREATE TABLE IF NOT EXISTS `skill_table` (
  `skill_id` int(11) NOT NULL AUTO_INCREMENT,
  `children_id` int(11) NOT NULL,
  `communication` int(11) NOT NULL,
  `reading` int(11) NOT NULL,
  `counting` int(11) NOT NULL,
  `art` int(11) NOT NULL,
  PRIMARY KEY (`skill_id`) USING BTREE,
  KEY `FK_skill_table_children_table` (`children_id`),
  CONSTRAINT `FK_skill_table_children_table` FOREIGN KEY (`children_id`) REFERENCES `children_table` (`children_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table child_care.skill_table: ~1 rows (approximately)
DELETE FROM `skill_table`;
/*!40000 ALTER TABLE `skill_table` DISABLE KEYS */;
INSERT INTO `skill_table` (`skill_id`, `children_id`, `communication`, `reading`, `counting`, `art`) VALUES
	(1, 2, 5, 5, 5, 5);
/*!40000 ALTER TABLE `skill_table` ENABLE KEYS */;

-- Dumping structure for table child_care.teacher_table
CREATE TABLE IF NOT EXISTS `teacher_table` (
  `teacher_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_name` varchar(50) NOT NULL,
  `teacher_email` varchar(50) NOT NULL,
  `teacher_password` text NOT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table child_care.teacher_table: ~2 rows (approximately)
DELETE FROM `teacher_table`;
/*!40000 ALTER TABLE `teacher_table` DISABLE KEYS */;
INSERT INTO `teacher_table` (`teacher_id`, `teacher_name`, `teacher_email`, `teacher_password`) VALUES
	(1, 'teacher', 'teacher@teacher.com', 'teacher1234'),
	(2, 'teacher1', 'teacher1@teacher.com', 'teacher1234\r\n');
/*!40000 ALTER TABLE `teacher_table` ENABLE KEYS */;

-- Dumping structure for table child_care.users_table
CREATE TABLE IF NOT EXISTS `users_table` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table child_care.users_table: ~2 rows (approximately)
DELETE FROM `users_table`;
/*!40000 ALTER TABLE `users_table` DISABLE KEYS */;
INSERT INTO `users_table` (`user_id`, `user_name`, `user_email`, `user_password`) VALUES
	(1, 'test', 'test@test.com', '16d7a4fca7442dda3ad93c9a726597e4'),
	(2, 'test', 'test1@test.com', '16d7a4fca7442dda3ad93c9a726597e4');
/*!40000 ALTER TABLE `users_table` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
