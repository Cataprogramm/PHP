<!---
Tabla sql 
---------
CREATE E INSERT DE LA TABLA CON DATOS

USUARIO SQL
-----------------------
CREATE USER 
PERMISOS

index.php tiene que estar en el raíz
CARPETAS
-------------
Un archivo por cada carpeta mínimo
MODELO (CONECTADB) Y OTRA CLASE QUE REALICE LAS CONSULTAS SOLAMENTE, mi función consulta();
 *PATRÓN SINGLETON
 *USAR USUARIO LIMITADO
 *PDO/mysqli
 *prepare,execute,comprobaciones con connect_errno() y devolver el error si lo hay
 *quote,real_escape_string
VISTA 
-------
 *(HTML)

CONTROLADOR
---------------
 *HTML VALIDADO
 *filtrado
 *sin errores sintácticos

Tres carpetas php,modelo,vista y controlador
En la primera tiene que haber un index
En el modelo crear la clase usando singleton, por una parte la conexión y luego la función consulta()-->