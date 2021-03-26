# Instrucciones de uso:
Para que el proyecto funcione deberás realizar las siguientes acciones:
- Clonar el repositorio
- Ejecutar el comando "copy .env.example .env"
- Dentro de la carpeta del repositorio ejecutar el comando: "composer install"
- Ejecutar el comando "php artisan key:generate" para establecer una clave para el proyecto.
- Crear una base de datos en mysql (puede ser en PHPMyAdmin o HeidiSQL) y registrar ese mismo nombre de base de datos en el archivo .env
- Ejecutar el comando php artisan migrate --seed para ejecutar las migraciones y llenar la base de datos con registros falsos (utlizando faker).
