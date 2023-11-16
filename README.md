# Prueba técnica

Aplicación web en Laravel que posea un conjunto reducido
de características propias de un Blog de Internet.



## Herramientas usadas

- PHP 8.0.26
- Laravel 9.x
- [WAMP Server](https://www.wampserver.com/en/download-wampserver-64bits/)
- MySQL
- Bootstrap 5.x para el diseño y estilo del sitio web
- Vite
- Faker
- [Composer](https://getcomposer.org/download/)
- Git
- GitHub
- Visual Studio Code



## Proceso de instalación
- Descargar el repositorio en su entorno o servidor local.
- Instalar composer, npm y wamp server. 
>Cabe señalar que esta descargando la rama de producción, por lo cual ya no sera necesario instalar los modulos de node.
- Configurar la base de datos con los valores correspondientes a tu servidor (en este caso se utiliza mysql) **Revisar la configuracion de .env** necesarias.
> Sobre la base de datos:
>- Puede descargar la DB que se encuentra en el rar de este repositorio y hacer la importación en su servidor local.
>- o en su defecto correr la migracion, y el seed del proyecto, y sin embargo deberá revisar la configuracion de las variables de entorno.
- Se hace la observación de que se creo una base de datos, migraciones y factories para crear registros fake y así tener más data que mostrar.
- Abrir la aplicacion con la url `http://localhost/prueba_blog/public/`


## Configuraciones adicionales
### Variables de entorno archivo .env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=prueba_blog
    DB_USERNAME=root
    DB_PASSWORD=

**Solo si es necesario:**
Instalacion de paquetes de node 

    npm install

También se recomienda limpiar la cache de la aplicación
    
    php artisan cache:clear