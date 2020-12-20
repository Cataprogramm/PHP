DROP DATABASE IF EXISTS dwes;

CREATE DATABASE dwes;

Use dwes;

CREATE TABLE usuarios(
	login VARCHAR(10),
	clave VARCHAR(10) not null,
	PRIMARY KEY (login)
);
INSERT INTO usuarios
	VALUES('Catalin','1234');
	
	
#show tables;
#desc usuarios;

SELECT * FROM USUARIOS;