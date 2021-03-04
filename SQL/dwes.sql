DROP DATABASE IF EXISTS dwes;

CREATE DATABASE dwes;

USE dwes;


CREATE TABLE usuarios(
	login VARCHAR(50),
	clave VARCHAR(200) NOT NULL,
	PRIMARY KEY (login)

);

INSERT INTO usuarios 
	VALUES ( 'laura', '1234');
	
# COMENTARIOS:
# show tables;
# desc usuarios;


SELECT * FROM USUARIOS;