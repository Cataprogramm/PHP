#DROP USER IF EXISTS alumno@localhost;
#CREATE USER alumno@localhost IDENTIFIED BY '1234';
#GRANT INSERT, DELETE ON dwes.usuarios TO alumno@localhost;
#REVOKE SELECT ON dwes.usuarios FROM alumno@localhost;


DROP USER IF EXISTS josemi@localhost;
CREATE USER josemi@localhost IDENTIFIED BY '1234';
GRANT INSERT, DELETE ON dwes.usuarios TO josemi@localhost;
REVOKE SELECT ON dwes.usuarios FROM josemi@localhost;
FLUSH PRIVILEGES;