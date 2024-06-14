# Página para práctica de Laravel

Este proyecto se creó para desarrollar los temas del curso de Tópicos en Base de Datos. Fue creado con Laravel y personalizado con Bootstrap. La base de datos utilizada es HeidiSQL.

### Imagen de la base de datos en HeidiSQL

![image](https://github.com/manuel-gonzales/page-nav/assets/141975981/e4ea280f-3b28-4b9a-b83e-0d07e1588654)

## Instalación propia

PHP debe estar instalado en tu computadora previamente. Para este proyecto, se instaló por medio de XAMPP.

Descarga el instalador de Composer desde el siguiente link: [AQUÍ](https://getcomposer.org/download/).

Luego de instalar, abre la consola de comandos de tu dispositivo (para este caso se utiliza Windows), dirígete a la ruta donde deseas crear tu proyecto, e introduce el siguiente comando:

```
composer create-project laravel/laravel <nombre-de-tu-proyecto>
```

Se instalará Laravel y se creará un nuevo projecto en la ruta especificada.

Al finalizar, ingresa a la carpeta del proyecto y ejecuta el servidor con el siguiente comando en un terminal:

```
php artisan serve
```

Se inicia el servidor, y puedes acceder a él por localhost. Generalmente usará el link `localhost:8000`.

## Acerca de Laravel

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

Laravel es un framework de aplicaciones web con una sintaxis expresiva y elegante. Creemos que el desarrollo web debe ser una experiencia agradable y creativa para ser realmente satisfactoria. Laravel elimina el dolor del desarrollo de páginas web facilitando las tareas comunes utilizadas en muchos proyectos, tales como:

- [Motor de enrutamiento sencillo y rápido](https://laravel.com/docs/routing).
- [Potente contenedor de inyección de dependencias](https://laravel.com/docs/container).
- Múltiples back-ends para almacenamiento de [sesiones](https://laravel.com/docs/session) y [caché](https://laravel.com/docs/cache).
- [ORM](https://laravel.com/docs/eloquent) expresivo e intuitivo.
- [Migraciones de esquemas](https://laravel.com/docs/migrations) independientes de la base de datos.
- [Procesamiento robusto de tareas en segundo plano](https://laravel.com/docs/queues).
- [Difusión de eventos en tiempo real](https://laravel.com/docs/broadcasting).

Laravel es accesible, potente y proporciona las herramientas necesarias para aplicaciones grandes y robustas.