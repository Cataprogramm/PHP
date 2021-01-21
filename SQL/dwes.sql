DROP DATABASE IF EXISTS dwes;

CREATE DATABASE dwes;

Use dwes;

CREATE TABLE usuarios(
	login VARCHAR(10),
	clave VARCHAR(10) not null,
	PRIMARY KEY (login)
);
INSERT INTO usuarios
	VALUES('Catalin','1234'),('Juan','1234'),('Pedro','1234');
	
#show tables;
#desc usuarios;

SELECT * FROM USUARIOS;

CREATE TABLE asignatura(
	nombre VARCHAR(15),
	descripcion VARCHAR(50) not null,
	PRIMARY KEY(nombre)
);
INSERT INTO asignatura VALUES
	('DWES','Desarrollo en entorno servidor'),
	('DWEC','Desarrollo en entorno cliente');
	
select * from ASIGNATURA;	