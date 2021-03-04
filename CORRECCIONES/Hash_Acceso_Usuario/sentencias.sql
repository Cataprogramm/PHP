drop table if exists usuarios_hash; 

create table usuarios_hash (
    login varchar(20) not null,
    clave varchar(200),
    primary key(login)
);

drop user if exists 'alumno'@'localhost';

create user 'alumno'@'localhost' identified by '1234';

grant insert, select on dwes.usuarios_hash to 'alumno'@'localhost';


