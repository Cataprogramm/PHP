DROP USER alumno@localhost;
CREATE USER alumno@localhost IDENTIFIED BY '1234';

#GRANT <PRIVILEGIO> ON <SERVIDOR/BD/TABLA/CAMPOS> TO <USUARIO>
GRANT SELECT,INSERT ON dwes.tasks TO alumno@localhost;

FLUSH PRIVILEGES;
