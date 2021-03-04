DROP USER IF EXISTS 'alumno@localhost';
CREATE USER 'alumno@localhost' IDENTIFIED BY '1234';

GRANT INSERT,DELETE ON dwes.usuarios TO alumno@localhost;
FLUSH PRIVILEGES;