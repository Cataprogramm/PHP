DROP USER josemi@localhost;	
CREATE USER josemi@localhost IDENTIFIED BY '1234';

#GRANT <PRIVILEGIO> ON <SERVIDOR/BD/TABLA/CAMPOS> TO <USUARIO>
GRANT SELECT(login) ON dwes.usuarios TO josemi@localhost;