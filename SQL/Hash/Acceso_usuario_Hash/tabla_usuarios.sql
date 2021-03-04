DROP TABLE IF EXISTS usuarios;


CREATE TABLE `usuarios`(
	`login` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
	`clave_hash` varchar(200) COLLATE utf8_spanish_ci  DEFAULT NULL
	PRIMARY KEY(login)
	);
	
	
insert into usuarios values('cata',sha1('1234')), ('pepe',sha1('epep')),('ana',sha1('Nohay2sin3'));
select * from usuarios;