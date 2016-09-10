# Hangman

## Configuración
* Primero se debe crear una Base de datos llamada hangman
* copiar y renombrar el archivo .env.example a .env
* Posteriormente en el archivo .env cambiar el valor de la variable APP_URL por el de la url del servidor
* Despues cambiar el valor de las variables DB_USERNAME y DB_PASSWORD por usuario y contraseña de la base de datos
* Cambiar en el archivo /public/js/app.js la constante APIURLpor la url del servidor 

# Instalación
* Estando en la raiz del proyecto ejecutar php artisan migrate --seed
* Ejecutar composer install
* Dar permisos de escritura recursivamente al usuario de apache a las carpetas
* storage
* boostrap/cache