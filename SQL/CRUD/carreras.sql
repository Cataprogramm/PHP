set charset utf8;
CREATE TABLE IF NOT EXISTS `carreras` ( `id` int NOT NULL AUTO_INCREMENT,
				`nombre` varchar(255) DEFAULT NULL,
				`start_date` date DEFAULT NULL,
				`end_date` date DEFAULT NULL,
				`description` varchar(400) DEFAULT NULL,
				PRIMARY KEY (id)
				);

INSERT INTO `carreras` (`id`, `nombre`, `start_date`, `end_date`, `description`) VALUES
(1,'María', '2021-09-01', '2025-06-01', 'Ingeniería y Arquitectura'),
(2,'Pedro', '2021-09-01', '2025-06-01', 'Ciencias de la Salud'),
(3,'Fernando', '2021-09-01', '2025-06-01', 'Ciencias'),
(4,'Richard', '2021-09-01', '2025-06-01', 'Artes y humanidades'),
(5,'Mariano', '2021-09-01', '2025-06-01', 'Ciencias sociales y jurídicas');