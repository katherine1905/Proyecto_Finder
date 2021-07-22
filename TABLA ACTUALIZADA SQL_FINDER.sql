-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla finder.bookings
CREATE TABLE IF NOT EXISTS `bookings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `events_id` bigint(20) unsigned NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qkids` int(11) NOT NULL,
  `qadults` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `bookings_events_id_foreign` (`events_id`),
  CONSTRAINT `bookings_events_id_foreign` FOREIGN KEY (`events_id`) REFERENCES `events` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla finder.bookings: ~19 rows (aproximadamente)
/*!40000 ALTER TABLE `bookings` DISABLE KEYS */;
INSERT INTO `bookings` (`id`, `events_id`, `fullname`, `email`, `qkids`, `qadults`, `total`, `created_at`, `updated_at`) VALUES
	(1, 4, 'katherine cruz', 'kathcruz0219@gmail.com', 1, 2, 25, '2021-07-21 05:42:03', '2021-07-21 05:42:03'),
	(2, 4, 'katherine cruz', 'kathcruz0219@gmail.com', 1, 2, 25, '2021-07-21 05:56:52', '2021-07-21 05:56:52'),
	(3, 4, 'carmen', 'carmen@gmail.com', 3, 2, 35, '2021-07-21 05:58:13', '2021-07-21 05:58:13'),
	(4, 4, 'carmen', 'carmen@gmail.com', 3, 2, 35, '2021-07-21 06:00:19', '2021-07-21 06:00:19'),
	(5, 4, 'copito', 'copito@gmail.clm', 2, 2, 30, '2021-07-21 06:01:06', '2021-07-21 06:01:06'),
	(6, 4, 'nelson', 'neson@gmail.com', 4, 6, 80, '2021-07-21 06:06:51', '2021-07-21 06:06:51'),
	(7, 4, 'maykel', 'maykel@gmail.com', 7, 2, 55, '2021-07-21 06:08:23', '2021-07-21 06:08:23'),
	(8, 3, 'jacinta', 'jacinta@gmail.com', 3, 2, 35, '2021-07-21 06:16:23', '2021-07-21 06:16:23'),
	(9, 4, 'katherine cruz', 'kathcruz0219@gmail.com', 11, 2, 75, '2021-07-21 06:24:58', '2021-07-21 06:24:58'),
	(10, 4, 'jaime', 'jaime@gmail.com', 3, 3, 45, '2021-07-21 06:49:43', '2021-07-21 06:49:43'),
	(11, 4, 'jaime', 'jaime@gmail.com', 3, 3, 45, '2021-07-21 06:52:57', '2021-07-21 06:52:57'),
	(12, 4, 'jaime', 'jaime@gmail.com', 3, 3, 45, '2021-07-21 06:53:30', '2021-07-21 06:53:30'),
	(13, 4, 'jaime', 'jaime@gmail.com', 3, 3, 45, '2021-07-21 06:55:04', '2021-07-21 06:55:04'),
	(14, 4, 'jaime', 'jaime@gmail.com', 3, 3, 45, '2021-07-21 06:55:46', '2021-07-21 06:55:46'),
	(15, 4, 'jaime', 'jaime@gmail.com', 3, 3, 45, '2021-07-21 06:57:17', '2021-07-21 06:57:17'),
	(16, 4, 'jaime', 'jaime@gmail.com', 3, 3, 45, '2021-07-21 06:58:51', '2021-07-21 06:58:51'),
	(17, 4, 'jaime', 'jaime@gmail.com', 3, 3, 45, '2021-07-21 07:00:03', '2021-07-21 07:00:03'),
	(18, 4, 'jaime', 'jaime@gmail.com', 3, 3, 45, '2021-07-21 07:01:53', '2021-07-21 07:01:53'),
	(19, 4, 'marta', 'marta@gmail.com', 3, 3, 45, '2021-07-21 17:38:07', '2021-07-21 17:38:07'),
	(20, 4, 'jerson', 'jerson', 4, 3, 50, '2021-07-21 18:30:40', '2021-07-21 18:30:40'),
	(21, 4, 'katherine cruz', 'kathcruz0219@gmail.com', 3, 5, 65, '2021-07-22 05:42:11', '2021-07-22 05:42:11'),
	(22, 15, 'marco', 'maro@gmail.com', 50, 34, 590, '2021-07-22 06:26:51', '2021-07-22 06:26:51'),
	(23, 4, 'mantra', 'mantra@gmail.com', 12, 15, 210, '2021-07-22 07:41:37', '2021-07-22 07:41:37');
/*!40000 ALTER TABLE `bookings` ENABLE KEYS */;

-- Volcando estructura para tabla finder.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla finder.categories: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`) VALUES
	(1, 'food'),
	(2, 'music'),
	(3, 'Theater'),
	(4, 'Sport');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Volcando estructura para tabla finder.events
CREATE TABLE IF NOT EXISTS `events` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `categories_id` bigint(20) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `when` date NOT NULL,
  `starts` time NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `store` int(11) NOT NULL,
  `pkids` int(11) NOT NULL,
  `padults` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `events_categories_id_foreign` (`categories_id`),
  CONSTRAINT `events_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla finder.events: ~13 rows (aproximadamente)
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` (`id`, `categories_id`, `title`, `description`, `image`, `type`, `location`, `when`, `starts`, `duration`, `status`, `store`, `pkids`, `padults`) VALUES
	(1, 1, 'Teatro event', 'Concert event description.\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.\r\n\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh', 'ev1Mod.jpg', 'Free', 'La Sabana, San José', '2021-07-15', '11:00:00', '2 hours', '1', 100, 5, 10),
	(2, 2, 'Concert event', 'Concert event description.\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.\r\n\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh', 'ev2Mod.jpg', 'Free', 'Santa Cruz, Guanacaste', '2021-07-15', '11:00:00', '2 hours', '1', 100, 5, 10),
	(3, 2, 'Sport event', 'Concert event description.\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.\r\n\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh', 'ev3Mod.jpg', 'Buy', 'Estadio Nacional, San José', '2021-07-15', '11:00:00', '3 hours', '1', 100, 5, 10),
	(4, 4, 'Food event', 'Concert event description.\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.\r\n\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh', 'ev4.jpg', 'Buy', 'Esparza, Puntarenas', '2021-07-15', '11:00:00', '1 hours', '1', 100, 5, 10),
	(5, 2, 'Food event', 'Concert event description.\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.\r\n\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh', 'ev4.jpg', 'Buy', 'Esparza, Puntarenas', '2021-07-15', '11:00:00', '1 hours', '1', 100, 5, 10),
	(6, 1, 'Food event', 'Concert event description.\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.\r\n\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh', 'ev4.jpg', 'Buy', 'Esparza, Puntarenas', '2021-07-15', '11:00:00', '1 hours', '1', 100, 5, 10),
	(7, 3, 'Sport event', 'Concert event description.\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.\r\n\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh', 'ev3Mod.jpg', 'Buy', 'Estadio Nacional, San José', '2021-07-15', '11:00:00', '3 hours', '1', 100, 5, 10),
	(9, 2, 'Teatro event', 'Concert event description.\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.\r\n\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh', 'ev1Mod.jpg', 'Free', 'La Sabana, San José', '2021-07-15', '11:00:00', '2 hours', '1', 100, 5, 10),
	(11, 3, 'Teatro event', 'Concert event description.\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.\r\n\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh', 'ev1Mod.jpg', 'Free', 'La Sabana, San José', '2021-07-15', '11:00:00', '2 hours', '1', 100, 5, 10),
	(12, 1, 'Sport event', 'Concert event description.\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.\r\n\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh', 'ev3Mod.jpg', 'Buy', 'Estadio Nacional, San José', '2021-07-15', '11:00:00', '3 hours', '1', 100, 5, 10),
	(15, 1, 'Concert event', 'Concert event description.\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.\r\n\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh', 'ev2Mod.jpg', 'Free', 'Santa Cruz, Guanacaste', '2021-07-15', '11:00:00', '2 hours', '1', 100, 5, 10),
	(16, 3, 'Concert event', 'Concert event description.\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.\r\n\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh', 'ev2Mod.jpg', 'Free', 'Santa Cruz, Guanacaste', '2021-07-15', '11:00:00', '2 hours', '1', 100, 5, 10),
	(17, 3, 'Concert event', 'Concert event description.\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.\r\n\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh', 'ev2Mod.jpg', 'Free', 'Santa Cruz, Guanacaste', '2021-07-15', '11:00:00', '2 hours', '1', 100, 5, 10);
/*!40000 ALTER TABLE `events` ENABLE KEYS */;

-- Volcando estructura para tabla finder.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla finder.failed_jobs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Volcando estructura para tabla finder.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla finder.migrations: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2021_07_12_152852_create_categories_table', 1),
	(5, '2021_07_12_152906_create_events_table', 1),
	(6, '2021_07_12_153049_create_bookings_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla finder.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla finder.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla finder.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla finder.users: ~17 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'katherine cruz', 'kathcruz0219@gmail.com', NULL, '$2y$10$fuia37vG1pOOJLbHMgN6TOEI/eGEELfjkACaESHmnpZ/ruTo.0HfO', NULL, '2021-07-19 23:22:18', '2021-07-19 23:22:18'),
	(2, 'jason cruz', 'jason0219@gmail.com', NULL, '$2y$10$50KwAO4fWF6tK6uBuKWtFuNWDnUSepJHczfPa/jfk.465xQLljDmC', NULL, '2021-07-19 23:24:14', '2021-07-19 23:24:14'),
	(3, 'Alessandro', 'ale29@gmail.com', NULL, '$2y$10$GbaQgtruF147ZqCfAgZGs.2GSKENpDLav5j4n7Pj.1jBXzSGNpi2u', NULL, '2021-07-19 23:29:13', '2021-07-19 23:29:13'),
	(4, 'katherine cru', 'kathcru0219@gmail.com', NULL, '$2y$10$rAkHfiuQ39XZMW1V.FLI8ez2dHukgaG4vRT2/C29IKWCcxNEdTufK', NULL, '2021-07-19 23:30:08', '2021-07-19 23:30:08'),
	(5, 'hola', 'hola@gmail.com', NULL, '$2y$10$ubBw8he2Jly8lHxoFYhNauoI22HiNr2UCOrA3UCSoHZ7BSBD8m2Bq', NULL, '2021-07-19 23:40:07', '2021-07-19 23:40:07'),
	(6, 'luis', 'luis@gmail.com', NULL, '$2y$10$4Xg7GvS74VjGAno8xks6eO7tnO7CAo2NwwmxhtsJZdzRj12pf9lEi', NULL, '2021-07-20 02:23:55', '2021-07-20 02:23:55'),
	(7, 'carlos', 'carlos@hhah.com', NULL, '$2y$10$/d7Ea9lpMh1AvTLitiPFeOtkhYh6eDl.2ZUkJ7y5uKnLhY6YeXIWS', NULL, '2021-07-20 02:36:33', '2021-07-20 02:36:33'),
	(8, 'carmen', 'carmen@gmail.com', NULL, '$2y$10$4Q20pKSK8OwyazduQ9mB0evATRZXnsj5IfybSJkrXi8NBJw./72XG', NULL, '2021-07-20 02:37:49', '2021-07-20 02:37:49'),
	(9, 'carmencita', 'carmencita@gmail.com', NULL, '$2y$10$YmlTDNVJAg1J1QIzt3ywAektN2AGN3fVHa/3/5YyBZ.RcJ8rOVMtu', NULL, '2021-07-20 02:40:21', '2021-07-20 02:40:21'),
	(10, 'juan', 'juan@gmail.com', NULL, '$2y$10$Krc1Ecbv2Lc/xdqWfrjJGOF6bezAidOUfrrb6pKUOnxb8MT2on08.', NULL, '2021-07-20 02:41:54', '2021-07-20 02:41:54'),
	(11, 'Macho', 'Macho@gmail.com', NULL, '$2y$10$35zluYQpaKxRTM3NsBw0zu.VcGRcpar.tANiWku2QIG7xTuGFVOYq', NULL, '2021-07-20 02:43:16', '2021-07-20 02:43:16'),
	(12, 'maria', 'maria@gmail.com', NULL, '$2y$10$tcN2bApJz3.z98nI0gkHH.1MZVuWOulW3v.YildZQn0kxRV/9qZFK', NULL, '2021-07-20 20:10:43', '2021-07-20 20:10:43'),
	(13, 'xinia', 'xinia@gmail.com', NULL, '$2y$10$7i9tpZOjDKm453hD6wENx.TYGNJtIj2YeR25kNAxQmccLLDYTKqL6', NULL, '2021-07-20 20:13:27', '2021-07-20 20:13:27'),
	(14, 'marcina', 'marcina@gmail.com', NULL, '$2y$10$UE50.BDTPMhjJiNqF.OA2.LgU9Ac4SVe93PHZnhALT8gljvg9T4Py', NULL, '2021-07-20 20:14:48', '2021-07-20 20:14:48'),
	(15, 'Jeison', 'Jeison@gmail.com', NULL, '$2y$10$l1mUTj8fpoDO83sXdD9xVOsWBmO43Bg1tzidUROQowtExt63XZvBu', NULL, '2021-07-20 20:18:00', '2021-07-20 20:18:00'),
	(16, 'ale', 'ale@hotmail.com', NULL, '$2y$10$wbdgaRxi9lVDkUtY6OWtIug22h9.5izz6G29Cipxl5OVlK64yh5w2', NULL, '2021-07-20 20:55:17', '2021-07-20 20:55:17'),
	(17, 'bonnie', 'bonnie12@hotmai.com', NULL, '$2y$10$cJM1VKAraQSPm7mQBlWRL.0uBY.ihEt6N8nQMDSCE9jg/08i8Mg4u', NULL, '2021-07-20 21:55:04', '2021-07-20 21:55:04'),
	(18, 'carmenn', 'carmenn@gmail.com', NULL, '$2y$10$6Nl0FLygRye3STtohDM/5.JVDhauaPfCvobb948uDW2VAsjmwDkvK', NULL, '2021-07-21 05:59:18', '2021-07-21 05:59:18'),
	(19, 'lara', 'lara@gmail.com', NULL, '$2y$10$FsW8Luuw3vD2stnqqJz9CemHU/UGiSJ1IaoaopgRJBrf/rbYNZcn2', NULL, '2021-07-21 06:01:51', '2021-07-21 06:01:51'),
	(20, 'jacinta', 'jacinta@gmail.com', NULL, '$2y$10$M65TGAa.BCYvPb81FQBNqO3Xk3QvfOEI/6DUZWgrEjmeStveGXoPG', NULL, '2021-07-21 06:17:26', '2021-07-21 06:17:26'),
	(21, 'elian', 'elian@gmail.com', NULL, '$2y$10$whmqWe3a0GuE6YPszeLPieYnUaHc7vuFMydgY5szL0lH1LwRLGD/K', NULL, '2021-07-21 17:48:08', '2021-07-21 17:48:08'),
	(22, 'jerson', 'jerson@gmail.com', NULL, '$2y$10$Xm8hiXBcdhCTdd.VVTQc7O6scttXbx0YESccQnydNL3/juJMfCpSC', NULL, '2021-07-21 18:31:56', '2021-07-21 18:31:56'),
	(23, 'sam', 'sam@gmail.com', NULL, '$2y$10$W/LwO5TLQJhuJRoyYhFg1u6Iq5trG3yFTsttN5e610DINdSvguMmG', NULL, '2021-07-21 19:42:41', '2021-07-21 19:42:41');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
