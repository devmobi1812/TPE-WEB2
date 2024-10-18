# TPE2-WEB2

## Descripción del Proyecto
Se ha desarrollado un sitio web para una librería, que maneja libros (como ítems) y autores (como categorías). Para la creación de este sitio web, usamos diversas tecnologías y metodologías, entre ellas las siguientes:
-   HTML.
-   CSS.
-   Bootstrap.
-   Smarty.
-   PHP.
-   MySQL.
-   Patrón de diseño MVC.

En el sitio web, se pueden realizar diferentes tareas que incluyen un ABM (Alta, Baja y Modificación) para los ítems (libros) y categorías (autores), permitiendo una gestión completa de los contenidos.

El diseño de la base de datos de la librería se basa en una relación de dependencia entre los registros de libros y autores. Esta relación se define como 1-N, donde cada registro de libro está asociado a un único autor, mientras que un autor puede estar relacionado con múltiples registros de libros.
Ademas de las ya mencionada, se agrego una tabla de usuarios y de roles para controlar eficientemente las tareas a realizar en el sitio.

## Despliegue
Este documento proporciona instrucciones detalladas para desplegar el sitio web del repositorio en un servidor con Apache y MySQL.

### Obtener el Repositorio

#### Forma 1: Descarga del Archivo ZIP
1. Accede a la página del repositorio en GitHub.
2. Haz clic en el botón "Code" y selecciona "Download ZIP".
3. Una vez completada la descarga, descomprime el archivo ZIP en la ruta de tu servidor Apache. Generalmente, esta ruta es htdocs.

#### Forma 2:
1. Abre una terminal o consola de comandos en tu sistema.
2. Navega hasta la ruta de tu servidor Apache. Generalmente, esta ruta es htdocs.
3. Clonar el repositorio en dicha ruta.

### Configuración de la Base de Datos
1. Abre tu cliente de administración de MySQL preferido (como phpMyAdmin).
2. Crea una nueva base de datos vacía con el nombre libreria.
3. Asegúrate de que los detalles de conexión a la base de datos en tu aplicación coincidan con los de tu configuración local.

### Acceso al Sitio
1. Abre tu navegador web preferido.
2. Navega a la URL local donde se encuentra el proyecto ( por ejemplo http://localhost/nombre_proyecto). NOTA: Reemplazar "nombre_proyecto" con el nombre de la carpeta donde esta el repositorio.
3. Para acceder al sistema, utiliza los siguientes datos de usuario:
    -   *Usuario:* webadmin
    -   *Contraseña:* admin

## Integrantes
- Dario José Carsaniga (piexa.vu4r7@aleeas.com)
- Ayrton Lopez Mobilio (ayrtonmobilio2020@gmail.com)

## Archivo SQL (Base de Datos)
[Ir a SQL](.sql/libreria.sql)
