set charset utf8;
CREATE TABLE IF NOT EXISTS `carreras` ( `id` int NOT NULL AUTO_INCREMENT,
				`nombre` varchar(255) DEFAULT NULL,
				`start_date` date DEFAULT NULL,
				`end_date` date DEFAULT NULL,
				PRIMARY KEY (id)
				);
/*
INSERT INTO `carreras` (`id`, `nombre`, `start_date`, `end_date`) VALUES
(1,'María', '2021-09-01', '2025-06-01'),
(2,'Pedro', '2021-09-01', '2025-06-01'),
(3,'Fernando', '2021-09-01', '2025-06-01'),
(4,'Richard', '2021-09-01', '2025-06-01'),
(5,'Mariano', '2021-09-01', '2025-06-01');
*/

INSERT INTO `carreras` (`id`, `nombre`, `start_date`, `end_date`) VALUES
(1,'María', '2021-09-01', '2025-06-01'),
(2,'Pedro', '2021-09-01', '2025-06-01'),
(3,'Fernando', '2021-09-01', '2025-06-01'),
(4,'Richard', '2021-09-01', '2025-06-01'),
(5,'Mariano', '2021-09-01', '2025-06-01');