DROP TABLE IF EXISTS tabla_usuarios;

CREATE TABLE tabla_usuarios(
	login VARCHAR(50),
	clave VARCHAR(200) NOT NULL,
	PRIMARY KEY (login)

);

INSERT INTO tabla_usuarios 
	VALUES ( 'alumno', '1234');