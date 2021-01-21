DROP USER @alumno@localhost;
CREATE USER alumno@localhost IDENTIFIED BY '1234';

#GRANT <PRIVILEGIO> ON <SERVIDOR/BD/TABLA/CAMPOS> TO <USUARIO>
GRANT SELECT(login) ON dwes.usuarios TO alumno@localhost;

REVOKE SELECT(login) ON dwes.usuarios FROM alumno@localhost;

select * from mysql.columns_priv; #consultar privilegios a nivel de campo


GRANT SELECT,UPDATE ON dwes.usuarios TO alumno@localhost;
REVOKE SELECT,UPDATE ON dwes.usuarios FROM alumno@localhost;


select * from mysql.tables_priv; #consultar privilegios a nivel de tablas
GRANT INSERT ON dwes.* TO alumno@localhost;
REVOKE INSERT ON dwes.* from alumno@localhost;
select * from mysql.db;


#PERMISOS a nivel de servidor
GRANT ALL PRIVILEGES ON *.* TO alumno@localhost;
REVOKE ALL PRIVILEGES ON *.* FROM alumno@localhost;
#Todos los privilegios menos el de dar permisos con GRANT

GRANT ALL PRIVILEGES ON *.* TO alumno@localhost WITH GRANT OPTION;
#Todos los privilegios además también puedo dar permisos a otros usuarios

select * from mysql.user \G;