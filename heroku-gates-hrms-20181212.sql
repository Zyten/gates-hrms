-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.18 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for gates-hrms
-- CREATE DATABASE IF NOT EXISTS `gates-hrms` /*!40100 DEFAULT CHARACTER SET latin1 */;
-- USE `gates-hrms`;

-- Dumping structure for table gates-hrms.assigned_roles
CREATE TABLE IF NOT EXISTS `assigned_roles` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table gates-hrms.assigned_roles: ~0 rows (approximately)
/*!40000 ALTER TABLE `assigned_roles` DISABLE KEYS */;
INSERT INTO `assigned_roles` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
	(1, 1, NULL, NULL);
/*!40000 ALTER TABLE `assigned_roles` ENABLE KEYS */;

-- Dumping structure for table gates-hrms.departments
CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table gates-hrms.departments: ~0 rows (approximately)
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;

-- Dumping structure for table gates-hrms.leave_reasons
CREATE TABLE IF NOT EXISTS `leave_reasons` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `attachment_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table gates-hrms.leave_reasons: ~0 rows (approximately)
/*!40000 ALTER TABLE `leave_reasons` DISABLE KEYS */;
/*!40000 ALTER TABLE `leave_reasons` ENABLE KEYS */;

-- Dumping structure for table gates-hrms.leave_types
CREATE TABLE IF NOT EXISTS `leave_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table gates-hrms.leave_types: ~5 rows (approximately)
/*!40000 ALTER TABLE `leave_types` DISABLE KEYS */;
INSERT INTO `leave_types` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'Annual', '', NULL, NULL),
	(2, 'Casual', '', NULL, NULL),
	(3, 'Medical', '', NULL, NULL),
	(4, 'Without Pay', '', NULL, NULL),
	(5, 'Compensatory Off', '', NULL, NULL);
/*!40000 ALTER TABLE `leave_types` ENABLE KEYS */;

-- Dumping structure for table gates-hrms.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table gates-hrms.migrations: ~12 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`migration`, `batch`) VALUES
	('2014_10_12_000000_create_users_table', 1),
	('2017_01_12_141155_create_roles_table', 1),
	('2017_01_12_141334_create_assigned_roles_table', 1),
	('2017_01_12_141634_create_permission_role_table', 1),
	('2017_01_12_141957_create_password_resets_table', 1),
	('2017_01_12_142555_create_profile_table', 2),
	('2017_01_12_143357_create_leave_types_table', 2),
	('2017_01_12_143509_create_departments_table', 2),
	('2017_01_12_143537_create_positions_table', 2),
	('2017_01_12_143604_create_staff_leaves_table', 3),
	('2017_01_12_144140_create_leave_reasons_table', 3),
	('2017_01_12_152156_add_role_to_users_table', 4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table gates-hrms.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table gates-hrms.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table gates-hrms.permission_role
CREATE TABLE IF NOT EXISTS `permission_role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table gates-hrms.permission_role: ~0 rows (approximately)
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;

-- Dumping structure for table gates-hrms.positions
CREATE TABLE IF NOT EXISTS `positions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table gates-hrms.positions: ~0 rows (approximately)
/*!40000 ALTER TABLE `positions` DISABLE KEYS */;
/*!40000 ALTER TABLE `positions` ENABLE KEYS */;

-- Dumping structure for table gates-hrms.profile
CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `no_staf` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `race` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `department_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `total_leaves` int(11) NOT NULL,
  `remaining_leaves` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table gates-hrms.profile: ~0 rows (approximately)
/*!40000 ALTER TABLE `profile` DISABLE KEYS */;
/*!40000 ALTER TABLE `profile` ENABLE KEYS */;

-- Dumping structure for table gates-hrms.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `all` smallint(6) NOT NULL,
  `sort` smallint(6) NOT NULL,
  `is_deleted` smallint(6) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table gates-hrms.roles: ~0 rows (approximately)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `all`, `sort`, `is_deleted`, `created_at`, `updated_at`) VALUES
	(1, 'ADMINISTRATOR', 1, 0, 0, NULL, NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Dumping structure for table gates-hrms.staff_leaves
CREATE TABLE IF NOT EXISTS `staff_leaves` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `application_date` date DEFAULT NULL,
  `leave_from` date DEFAULT NULL,
  `leave_to` date DEFAULT NULL,
  `duration` int(11) NOT NULL,
  `is_approved` smallint(6) NOT NULL,
  `approval_date` date DEFAULT NULL,
  `leave_reason_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `leave_reason` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `leave_type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `approved_by` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table gates-hrms.staff_leaves: ~6 rows (approximately)
/*!40000 ALTER TABLE `staff_leaves` DISABLE KEYS */;
INSERT INTO `staff_leaves` (`id`, `user_id`, `application_date`, `leave_from`, `leave_to`, `duration`, `is_approved`, `approval_date`, `leave_reason_id`, `created_at`, `updated_at`, `leave_reason`, `leave_type`, `status`, `approved_by`) VALUES
	(12, 4, '2017-01-13', '2017-01-13', '2017-01-14', 1, 1, '2017-01-12', 0, '2017-01-12 23:19:08', '2017-01-12 23:34:45', 'ME TIME', 'Annual', NULL, 'Ruban Selvarajah'),
	(15, 4, '2017-01-13', '2017-01-14', '2017-01-14', 0, 2, '2017-01-12', 0, '2017-01-12 23:40:21', '2017-01-12 23:44:31', '12', 'Compensatory Off', 'Rejected', 'Ruban Selvarajah'),
	(16, 4, '2017-01-13', '2017-01-13', '2017-01-14', 1, 1, '2017-01-12', 0, '2017-01-12 23:42:38', '2017-01-12 23:44:10', 'as', 'Without Pay', 'Approved', 'Ruban Selvarajah'),
	(17, 4, '2017-01-13', '2017-01-13', '2017-01-14', 1, 1, '2017-01-13', 0, '2017-01-13 01:27:43', '2017-01-13 01:28:41', 'FAMILY OUTING', 'Annual', 'Approved', 'Ruban Selvarajah'),
	(18, 4, '2017-01-13', '2017-01-13', '2017-01-14', 1, 2, '2017-01-13', 0, '2017-01-13 01:37:53', '2017-01-13 01:41:22', 'Medical', 'Medical', 'Rejected', 'Ruban Selvarajah'),
	(19, 4, '2017-01-13', '2017-01-13', '2017-01-14', 2, 1, '2017-01-13', 0, '2017-01-13 01:56:53', '2017-01-13 01:57:59', 'MEDICAL LEAVE', 'Medical', 'Approved', 'Ruban Selvarajah'),
	(20, 4, '2017-10-25', '2017-10-25', '2017-10-30', 6, 1, '2017-10-24', 0, '2017-10-24 23:24:59', '2017-10-24 23:26:15', 'Sick', 'Annual', 'Approved', 'Ruban Selvarajah'),
	(21, 4, '2018-10-14', '2018-10-19', '2018-10-21', 3, 1, '2018-10-14', 0, '2018-10-14 13:42:59', '2018-10-14 13:43:49', 'sadasd', 'Casual', 'Approved', 'Ruban Selvarajah'),
	(22, 4, '2018-10-18', '2018-10-18', '2018-10-19', 2, 0, NULL, 0, '2018-10-17 18:30:58', '2018-10-17 18:30:58', 'ME TIME', 'Without Pay', NULL, NULL);
/*!40000 ALTER TABLE `staff_leaves` ENABLE KEYS */;

-- Dumping structure for table gates-hrms.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `active` smallint(6) NOT NULL DEFAULT '0',
  `is_deleted` smallint(6) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` smallint(6) NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ic` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `total_leaves` int(11) DEFAULT '14',
  `remaining_leaves` int(11) DEFAULT '14',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table gates-hrms.users: ~3 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `email`, `password`, `user_id`, `active`, `is_deleted`, `remember_token`, `created_at`, `updated_at`, `role`, `full_name`, `position`, `ic`, `department`, `total_leaves`, `remaining_leaves`) VALUES
	(1, 'RUBAN', 'hello@example.com', '$2y$10$AbDNqWvRKLjtch8oxCvo.uSubuoP6FLUq1VkG2WnUiRAgxgEWTcT2', 2, 1, 0, 's7Iwzm5r9CWYnWwZXAN87E1OUuPRTDZD2gSIShh17mNCW4gYxwxRowBIlyIC', NULL, '2018-12-12 00:16:53', 1, 'Ruban Selvarajah', 'System Analyst Programmer', '9980909129090', 'Development', 14, 14),
	(2, 'THARIQ', 'hello@example.com', '$2y$10$AbDNqWvRKLjtch8oxCvo.uSubuoP6FLUq1VkG2WnUiRAgxgEWTcT2', 1, 1, 0, '7bYsQZdkThVpRAOhgQX70y2Aud90UMQcOSALkUz2v3444jYtxR0TYI1kwQ8O', NULL, '2018-10-14 14:05:11', 2, 'Muhammad Thariq', 'Project Director', '9980909129090', 'Management', 14, 14),
	(4, 'CHUA', 'hello@example.com', '$2y$10$AbDNqWvRKLjtch8oxCvo.uSubuoP6FLUq1VkG2WnUiRAgxgEWTcT2', 3, 1, 0, '6vSQlEINmxk6mKvMi4RVAefdQheRewWHpDSPFf8kistAcYI7hFgjQeOADvAX', NULL, '2018-12-12 01:08:15', 3, 'Chua Teck Jian', 'System Analyst Programmer', '9980909129090', 'Development', 14, 6);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
