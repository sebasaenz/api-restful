# api-restful
Proyecto de Laravel para crear una sencilla API RESTful

# Instrucciones


Crear una base de datos en localhost que se llame `prueba`
Descargar composer https://getcomposer.org/download/
Clonar el proyecto
Renombrar el archivo .env.example por .env dentro de la carpeta raíz del proyecto y completar la información de la base de datos
Abrir la consola e ingresar a la carpeta del proyecto
Ejecutar `composer install` o `php composer.phar install`
Ejecutar `php artisan key:generate`
Ejecutar `php artisan migrate`
Ejecutar `php artisan db:seed --class=UsuariosSeeder`
Ejecutar `php artisan serve`, el servidor correrá en http://localhost:8000

`POST` /users (Crea un usuario)
`GET` /users (Obtiene la lista completa de usuarios)
`GET` /users/{user_id} (Obtiene el usuario de id {user_id})
`PUT` /users/{user_id} (Actualiza el usuario de id {user_id})
`DELETE` /users/{user_id} (Elimina el usuario de id {user_id})

