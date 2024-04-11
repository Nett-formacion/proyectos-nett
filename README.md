## Proyecto de prueba
Para clonarlo
````bash
  git clone https://github.com/Nett-formacion/proyectos-nett.git
````

Esto creará en local una carpeta.
Ahora tengo que instalar las libreías de front y de back
````bash
  npm install
````
````bash
  composer update
````
Instalar y configurar la base de datos.

En el fichero **.env** tengo que establecer mis credenciales y datos de acceso
Una configuración posible es dejarlo como está
````json
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
````
Ahora hay que ir a la base de datos y crear la base de datos llamada **laravel**

Nos queda ejecutar las migraciones

````bash
php artisan migrate
````
### Levantar el proyecto

Ejectuamos vite muy importante, estar ubicado en la carpeta del proyecto
````bash
npm run dev
````
Levantamos el servidor de laravel
````bash
php artisan serve
````



