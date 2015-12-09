## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

#INSTALACIÓN FERRALAMEDA
##Requerimientos

PHP Version 5.5.9
Apache 2.4.7
MYSQL Version 14.4

##INSTALACIÓN
1-Instalar o actualizar php, mysql o apache segun lo especificado en requerimientos.
2-Crear una base de datos, preferiblemente con el nombre ferreteria.
	Abrir terminal:
	mysql -u root -p
	*ingresar contraseña del usuario root*
	create database ferreteria;

3-Clonar o descargar repositorio
4-En la carpeta Ferreteria, crear un archivo .env con los siguientes datos:

	APP_ENV=local
	APP_DEBUG=true
	APP_KEY=384mSIo2tfW7v0bckHXowYUIOlO43Ldu
	
	DB_HOST=localhost
	DB_DATABASE=DBNAME //Nombre asignado a la base de datos
	DB_USERNAME=USER //Usuario de la base de datos, para un mejor manejo, usar root
	DB_PASSWORD=PASS //Contraseña de la base de datos

	CACHE_DRIVER=file	
	SESSION_DRIVER=file
	QUEUE_DRIVER=sync

	MAIL_DRIVER=smtp
	MAIL_HOST=smtp.gmail.com
	MAIL_PORT=587
	MAIL_USERNAME=MAILPRUEBAFERRALAMEDA@GMAIL.COM
	MAIL_PASSWORD=zgtylrywmyanplqy
	MAIL_FROM=MAILPRUEBAFERRALAMEDA@GMAIL.COM
	MAIL_NAME= FERR
	MAIL_ENCRYPTION=tls

5-Abrir la terminal posicionado en la carpeta ferreteria, ejecutar lo siguiente:

	composer install (Esto instalará las dependencias necesarias para el proyecto)
	php artisan key:generate (Genera la KEY de la app)
	php artisan migrate (Crea las tablas necesarias en la db)

6-Programa listo para ser ejecutado, mediante: php artisan serve

NOTA*
ESTE METODO NO INSTALA LA APLICACIÓN EN EL SERVIDOR APACHE, POR LO QUE ES NECESARIO EJECUTAR php artisna serve CADA VEZ QUE SE QUIERA PROBAR.










