DROP TABLE IF EXISTS usuarios;


CREATE TABLE `usuarios`(
	`login` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
	`clave_hash` varchar(200) COLLATE utf8_spanish_ci  DEFAULT NULL
	);
	
	
insert into usuarios values('cata','$2y$10$12rP/A2TvymPKmIbjs4am.i7ve2EvWw763vygLRETSvavjH26IYSS'), ('pepe','$2y$10$12rP/A2TvymPKmIbjs4am.i7ve2EvWw763vygLRETSvavjH26IYSS'),('ana','$2y$10$12rP/A2TvymPKmIbjs4am.i7ve2EvWw763vygLRETSvavjH26IYSS');
select * from usuarios;
#cata 1234
#pepe 1234
#ana 1234