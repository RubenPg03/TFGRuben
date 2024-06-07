-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
USE `railway`;
-- Volcando datos para la tabla proyectofinal.calificaciones: ~5 rows (aproximadamente)
INSERT INTO `calificaciones` (`id`, `videojuego_id`, `usuario_id`, `calificacion`, `remember_token`, `created_at`, `updated_at`) VALUES
	(10, 2, 1, 2, NULL, '2024-05-21 16:53:01', '2024-05-21 16:53:29'),
	(11, 1, 1, 8, NULL, '2024-05-21 16:53:41', '2024-05-21 16:53:50'),
	(12, 1, 2, 2, NULL, '2024-05-21 16:54:12', '2024-05-21 16:54:25'),
	(13, 3, 1, 8, NULL, '2024-06-03 15:03:01', '2024-06-03 15:03:01'),
	(14, 4, 1, 4, NULL, '2024-06-03 15:06:28', '2024-06-03 15:06:28');

-- Volcando datos para la tabla proyectofinal.comentarios: ~4 rows (aproximadamente)
INSERT INTO `comentarios` (`id`, `videojuego_id`, `usuario_id`, `comentario`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 2, 1, 'Me gusta la fruta', NULL, '2024-05-20 15:54:11', '2024-05-20 15:54:11'),
	(3, 1, 1, 'dsdsdsd', NULL, '2024-05-21 15:17:38', '2024-05-21 15:17:38'),
	(4, 2, 1, 'efefw', NULL, '2024-05-21 16:33:24', '2024-05-21 16:33:24'),
	(5, 3, 1, 'Viva FALLOUT!!!!!!!!!!!!!!!!!!!!', NULL, '2024-06-03 15:02:56', '2024-06-03 15:02:56'),
	(6, 4, 1, 'No me gusta nada', NULL, '2024-06-03 15:06:36', '2024-06-03 15:06:36');

-- Volcando datos para la tabla proyectofinal.failed_jobs: ~0 rows (aproximadamente)

-- Volcando datos para la tabla proyectofinal.juegoplataforma: ~17 rows (aproximadamente)
INSERT INTO `juegoplataforma` (`videojuego_id`, `plataforma_id`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 4, NULL, '2024-05-20 15:44:59', '2024-05-20 15:44:59'),
	(2, 1, NULL, '2024-05-20 15:45:41', '2024-05-20 15:45:41'),
	(2, 2, NULL, '2024-05-20 15:45:41', '2024-05-20 15:45:41'),
	(2, 3, NULL, '2024-05-20 15:45:41', '2024-05-20 15:45:41'),
	(3, 1, NULL, '2024-06-03 15:01:08', '2024-06-03 15:01:08'),
	(3, 2, NULL, '2024-06-03 15:01:08', '2024-06-03 15:01:08'),
	(3, 3, NULL, '2024-06-03 15:01:08', '2024-06-03 15:01:08'),
	(4, 1, NULL, '2024-06-03 15:06:17', '2024-06-03 15:06:17'),
	(4, 2, NULL, '2024-06-03 15:06:17', '2024-06-03 15:06:17'),
	(4, 3, NULL, '2024-06-03 15:06:17', '2024-06-03 15:06:17'),
	(4, 4, NULL, '2024-06-03 15:06:17', '2024-06-03 15:06:17'),
	(5, 1, NULL, '2024-06-03 15:08:48', '2024-06-03 15:08:48'),
	(5, 2, NULL, '2024-06-03 15:08:48', '2024-06-03 15:08:48'),
	(5, 3, NULL, '2024-06-03 15:08:48', '2024-06-03 15:08:48'),
	(5, 4, NULL, '2024-06-03 15:08:48', '2024-06-03 15:08:48'),
	(6, 1, NULL, '2024-06-03 15:13:13', '2024-06-03 15:13:13'),
	(6, 2, NULL, '2024-06-03 15:13:13', '2024-06-03 15:13:13'),
	(6, 3, NULL, '2024-06-03 15:13:13', '2024-06-03 15:13:13'),
	(6, 4, NULL, '2024-06-03 15:13:13', '2024-06-03 15:13:13');

-- Volcando datos para la tabla proyectofinal.migrations: ~0 rows (aproximadamente)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2024_04_06_135114_videojuegos', 1),
	(6, '2024_04_06_140134_tienda', 1),
	(7, '2024_04_06_140656_comentarios', 1),
	(8, '2024_04_06_140941_calificaciones', 1),
	(9, '2024_05_04_094715_plataformas', 1),
	(10, '2024_05_04_095154_juegoplataforma', 1);

-- Volcando datos para la tabla proyectofinal.password_reset_tokens: ~0 rows (aproximadamente)

-- Volcando datos para la tabla proyectofinal.personal_access_tokens: ~0 rows (aproximadamente)

-- Volcando datos para la tabla proyectofinal.plataformas: ~4 rows (aproximadamente)
INSERT INTO `plataformas` (`id`, `plataforma`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'pc', NULL, '2024-05-20 15:37:06', '2024-05-20 15:37:06'),
	(2, 'xbox', NULL, '2024-05-20 15:37:11', '2024-05-20 15:37:11'),
	(3, 'playstation', NULL, '2024-05-20 15:37:21', '2024-05-20 15:37:21'),
	(4, 'switch', NULL, '2024-05-20 15:37:26', '2024-05-20 15:37:26');

-- Volcando datos para la tabla proyectofinal.tienda: ~16 rows (aproximadamente)
INSERT INTO `tienda` (`id`, `videojuego_id`, `nombre`, `url_juego_tienda`, `precio`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 2, 'Instant-Gaming', 'https://www.instant-gaming.com/es/186-comprar-grand-theft-auto-v-pc-juego-rockstar/', 10.49, NULL, '2024-05-20 15:53:24', '2024-05-20 15:53:24'),
	(3, 2, 'G2A', 'https://www.g2a.com/es/grand-theft-auto-v-rockstar-key-global-i10000000788017?suid=c5675058-45ef-45b9-95ce-b753bd6aefc6', 15.34, NULL, '2024-05-21 14:48:31', '2024-05-21 14:48:31'),
	(4, 2, 'Eneba', 'https://www.eneba.com/es/rockstar-social-club-grand-theft-auto-v-rockstar-games-launcher-key-united-states', 16.93, NULL, '2024-06-03 15:16:22', '2024-06-03 15:16:22'),
	(5, 3, 'Eneba', 'https://www.eneba.com/es/steam-fallout-76-atlantic-city-boardwalk-paradise-deluxe-edition-pc-steam-key-europe', 27.99, NULL, '2024-06-03 15:18:05', '2024-06-03 15:18:05'),
	(6, 3, 'Instant-Gaming', 'https://www.instant-gaming.com/es/2644-comprar-steam-fallout-76-pc-juego-steam/', 8.77, NULL, '2024-06-03 15:18:25', '2024-06-03 15:18:25'),
	(7, 3, 'G2A', 'https://www.g2a.com/es/fallout-76-pc-steam-key-global-i10000156540024', 16.81, NULL, '2024-06-03 15:19:00', '2024-06-03 15:19:00'),
	(8, 4, 'Instant-Gaming', 'https://www.instant-gaming.com/es/12738-comprar-hogwarts-legacy-deluxe-edition-deluxe-edition-pc-juego-steam-europe/', 28.86, NULL, '2024-06-03 15:20:36', '2024-06-03 15:20:36'),
	(9, 4, 'G2A', 'https://www.g2a.com/es/hogwarts-legacy-pc-steam-key-global-i10000218808005?suid=708215ea-ab32-428b-863c-48fc5bf269fc', 27.00, NULL, '2024-06-03 15:21:20', '2024-06-03 15:21:20'),
	(10, 6, 'Instant-Gaming', 'https://www.instant-gaming.com/es/7154-comprar-steam-it-takes-two-pc-juego-steam/', 22.21, NULL, '2024-06-03 15:25:46', '2024-06-03 15:25:46'),
	(11, 6, 'Eneba', 'https://www.eneba.com/es/origin-it-takes-two-origin-key-europe?enb_campaign=Main%20Search&enb_content=search%20dropdown%20-%20products&enb_medium=product%20card&enb_source=https%3A%2F%2Fwww.eneba.com%2Fsteam-hogwarts-legacy-pc-steam-key-global&enb_term=3', 23.60, NULL, '2024-06-03 15:26:05', '2024-06-03 15:26:05'),
	(12, 6, 'G2A', 'https://www.g2a.com/es/it-takes-two-pc-steam-key-global-i10000221966002?suid=03c40857-0496-49fb-a2f0-6cb5c35c870d', 24.95, NULL, '2024-06-03 15:26:24', '2024-06-03 15:26:24'),
	(13, 5, 'Instant-Gaming', 'https://www.instant-gaming.com/es/3339-comprar-steam-mortal-kombat-11-pc-juego-steam/', 1.79, NULL, '2024-06-03 15:27:36', '2024-06-03 15:27:36'),
	(14, 5, 'Eneba', 'https://www.eneba.com/es/steam-mortal-kombat-11-steam-key-global?enb_campaign=Main%20Search&enb_content=search%20dropdown%20-%20products&enb_medium=product%20card&enb_source=https%3A%2F%2Fwww.eneba.com%2Forigin-it-takes-two-origin-key-europe&enb_term=5', 19.99, NULL, '2024-06-03 15:28:10', '2024-06-03 15:28:10'),
	(15, 5, 'G2A', 'https://www.g2a.com/es/mortal-kombat-11-steam-key-global-i10000176931005', 2.54, NULL, '2024-06-03 15:28:30', '2024-06-03 15:28:30'),
	(16, 1, 'Instant-Gaming', 'https://www.instant-gaming.com/es/4860-comprar-nintendo-eshop-the-legend-of-zelda-tears-of-the-kingdom-switch-switch-juego-nintendo-eshop-europe/', 66.80, NULL, '2024-06-03 15:30:47', '2024-06-03 15:30:47'),
	(17, 1, 'G2A', 'https://www.g2a.com/es/the-legend-of-zelda-tears-of-the-kingdom-nintendo-switch-nintendo-eshop-account-global-i10000338965006?suid=a3aae242-1004-4954-9c04-33df2050940e', 39.99, NULL, '2024-06-03 15:31:21', '2024-06-03 15:31:21'),
	(18, 1, 'Eneba', 'https://www.eneba.com/es/nintendo-the-legend-of-zelda-tears-of-the-kingdom-nintendo-switch-eshop-key-united-states', 54.25, NULL, '2024-06-03 15:32:12', '2024-06-03 15:32:12'),
	(19, 4, 'Eneba', 'https://www.eneba.com/es/steam-hogwarts-legacy-and-onyx-hippogriff-mount-dlc-pc-steam-key-europe', 52.08, NULL, '2024-06-03 15:33:40', '2024-06-03 15:33:40');

-- Volcando datos para la tabla proyectofinal.users: ~2 rows (aproximadamente)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `rol`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'admin@gmail.com', NULL, '$2y$12$0tBye1DfcLiA8md/fzh6gemb/5267WTv68RdxWL0EXgh14hjsBm7O', 'Admin', NULL, '2024-05-20 15:35:51', '2024-05-20 15:35:51'),
	(2, 'Jaime', 'j@gmail.com', NULL, '$2y$12$IhX8MJ.f5fsK8T2BRHkwq.JGh0V.j.h6BE438AGeMbI.3oisqbDS2', 'User', NULL, '2024-05-20 15:36:07', '2024-05-20 15:36:07'),
	(3, 'Maria', 'm@gmail.com', NULL, '$2y$12$Y/v6Wcg3CcU4/p1/5/pPHOKizvZpfIlmBNh75iBGdJuDWCcByztiW', 'User', NULL, '2024-06-03 14:55:29', '2024-06-03 14:55:29');

-- Volcando datos para la tabla proyectofinal.videojuegos: ~6 rows (aproximadamente)
INSERT INTO `videojuegos` (`id`, `titulo`, `descripcion`, `genero`, `fecha_lanzamiento`, `imagen`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'The Legend of Zelda', 'The Legend of Zelda: Tears of the Kingdom es un videojuego de acción-aventura de 2023 de la serie The Legend of Zelda, desarrollado por la filial Nintendo EPD en colaboración con Monolith Soft y publicado por Nintendo para la consola Nintendo Switch.', 'Videojuego de acción y aventura', '2023-05-19', _binary 0x313731363232373039392e706e67, NULL, '2024-05-20 15:44:59', '2024-05-20 15:44:59'),
	(2, 'GTA V', 'Grand Theft Auto V es un videojuego de acción-aventura de mundo abierto desarrollado por el estudio escocés Rockstar North y distribuido por Rockstar Games. Este título revolucionario hizo su debut el 17 de septiembre de 2013 en las consolas Xbox 360 y PlayStation 3.', 'Videojuego de acción y aventura, Videojuego de disparos en tercera persona, Videojuego no lineal', '2013-09-08', _binary 0x313731363232373134312e6a7067, NULL, '2024-05-20 15:45:41', '2024-05-20 15:45:41'),
	(3, 'FALLOUT 76', 'Fallout 76 es un videojuego de rol de acción de mundo abierto desarrollado por Bethesda Game Studios y distribuido por Bethesda Softworks. Es una entrega de la serie Fallout y una precuela de las entradas anteriores.', 'Acción, Supervivencia, Multijugador', '2020-04-14', _binary 0x313731373433343036382e77656270, NULL, '2024-06-03 15:01:08', '2024-06-03 15:01:08'),
	(4, 'Hogwarts Legacy', 'Hogwarts Legacy es un videojuego de rol de acción de 2023 desarrollado por Avalanche Software y publicado por Warner Bros. Games bajo su sello Portkey Games. El juego está ambientado en el universo Wizarding World, basado en las novelas de Harry Potter.', 'Videojuego de lógica, Entretenimiento', '2023-02-10', _binary 0x313731373433343337372e6a7067, NULL, '2024-06-03 15:06:17', '2024-06-03 15:06:17'),
	(5, 'Mortal Kombat 11', 'Mortal Kombat 11 es un videojuego de lucha desarrollado por NetherRealm Studios y publicado por Warner Bros. Interactive Entertainment. Se ejecuta en una versión muy modificada de Unreal Engine 3, ​ es la undécima entrega principal de la serie Mortal Kombat y una secuela de 2015 Mortal Kombat X.', 'Videojuego de lucha, Videojuego de aventura', '2019-04-23', _binary 0x313731373433343532382e77656270, NULL, '2024-06-03 15:08:48', '2024-06-03 15:08:48'),
	(6, 'It Takes Two', 'It Takes Two es un videojuego de acción y aventura con elementos de plataformas desarrollado por Hazelight Studios y publicado por Electronic Arts. El juego fue lanzado para Microsoft Windows, PlayStation 4, PlayStation 5, Xbox One y Xbox Series X/S en marzo de 2021.', 'Videojuego de lógica, Videojuego de acción y aventura', '2021-03-25', _binary 0x313731373433343739332e77656270, NULL, '2024-06-03 15:13:13', '2024-06-03 15:13:13');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
