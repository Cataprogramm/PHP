DROP USER alumno@localhost;
CREATE USER alumno@localhost IDENTIFIED BY '1234';


#GRANT <PRIVILEGIO> ON <SERVIDOR/BD/TABLA/CAMPOS> TO <USUARIO>
GRANT SELECT,UPDATE ON dwes.usuarios TO alumno@localhost;

select * from mysql.tables_priv \G

FLUSH PRIVILEGES;


