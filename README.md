# AO3.2 - Autenticación HTTP gestionada desde PHP

- Crea en tu servidor web la carpeta /autenticacion2. 
Dentro de dicha carpeta crea el fichero "validacion.php" que compruebe que el usuario que intenta acceder se ha validado mediante HTTP. Si no lo ha hecho, fuerza a que el navegador solicite nombre de usuario y contraseña.
- Comprueba que el nombre de usuario y la contraseña son los que tú has establecido en el código. Si no lo son, vuelve a solicitar la validación. En caso contrario, continúa la ejecución.
- Crea tres ficheros PHP (index.php, listado.php y perfil.php) en dicho directorio. Desde index.php se podrá acceder a listado.php y a perfil.php. En dichas páginas debes mostrar el contenido que tú desees, pero antes de mostrar dicho contenido debes incluir el fichero "validacion.php" para que solo accedan al php los usuarios autorizados.

# AO3.3 - Autenticación HTTP gestionada desde PHP contra una Base de Datos

- Modifica el script de la actividad anterior para que, en lugar de validar el usuario y la contraseña mediante código lo haga mediante una base de datos. Para ello utiliza la siguiente tabla:

## Importante

Modificar nombre y contraseña del usuario en el archivo "conexion.php" para enlazar la base de datos.

```php
$user = "nombre_de_usuario";
$password = "contraseña";
```

Creación de la tabla en la base de datos.

```mysql

create table usuarios(
usuario varchar(20) primary key,
pass varchar(64) not null
);
```

# AO3.5 - Inicio de sesión con PHP

- Modifica la actividad anterior para que el usuario se valide mediante una página de inicio de sesión creada por ti en PHP en lugar de que sea el navegador el que solicite el nombre de usuario y la contraseña.

# AO3.6 - Manejo de sesiones

- Modifica la aplicación AO3.5 para que, tras validarnos, podamos acceder a todos los PHP sin necesidad de validarnos nuevamente y sin tener que pasar por get ningún dato.
