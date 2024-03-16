<a name="top"></a>
# Evaluación perfil 
## CHALLENGE: Validar Token
* [Introducción](#item1)
* [Pre-requisitos 📋](#item2)
* [Construido con 🛠️](#item3)
* [Instalación 🔧](#item4)

 
<a name="item1"></a>
## Introducción
 
### Arquitectura
Crear la siguiente arquitectura de carpetas
```
app/
    - docker/
        - dockerfile
    - challenge/ 
        - Aquí va CodeIgniter 4 
```

-	Configurar y correr Docker con PHP7.4 (o mayor).  Y CodeIgniter 4 como volumen.
-	Desarrollar una vista que permita que un usuario ingrese un token a través de un formulario.
-	Desarrollar un controlador que reciba el token ingresado, ejecute una función y devuelva el resultado en la misma vista.


1.	 El sistema deberá poder verificar que el token ingresado contenga entre 6 y 8 letras, con al menos una mayúscula, al menos una minúscula y al menos uno de los siguientes símbolos *-! 

2.	Si el token ingresado tiene el formato correcto, el controlador deberá ejecutar una función que revierta el orden solo de las letras del token ingresado, pero no así los símbolos. Luego retornar el resultado en la misma vista.

### Ej.
``` 
	input:    aa-BB!c
	output:   cB-Ba!a
 ```   
 En esta prueba se pretende entender el razonamiento detrás las decisiones tomadas para resolver un problema de configuración de un entorno local, así como conceptos básicos de mvc, tratamiento métodos, strings, arreglos y limpieza del código, así como la habilidad de defender lo realizado.

### Condiciones:
-	Se puede utilizar cualquier ayuda en internet para lograr el objetivo.
-	Es excluyente utilizar: Docker - Bootstrap - JQuery – PHP. El desarrollador tiene libertad de utilizar estas tecnologías como le parezca conveniente mientras demuestre como las implementa. 
-	El desarrollador deberá mostrar y defender lo desarrollado en una reunión en vivo previamente acordada.

 
[Subir](#top)
 
<a name="item2"></a>

### Pre-requisitos 📋
* [Git](https://git-scm.com/)
* [Docker y Docker Compose](https://www.docker.com/)


[Subir](#top)
 
<a name="item3"></a>

### Construido con 🛠️

* [PHP 7.4](https://symfony.com/) - a PHP frameworkt
* [CodeIgniter 4](https://www.codeigniter.com/) - CodeIgniter is a powerful PHP framework with a very small footprint
* [JQuery 3.7.1](https://jquery.com/) - jQuery is a fast, small, and feature-rich JavaScript library.
* [Bootstrap 5.3.3](https://getbootstrap.com/) - Bootstrap is a powerful, feature-packed frontend toolkit
* [Docker](https://www.docker.com/) - Docker is an operating system (or runtime) for containers.
 
 
[Subir](#top)
 
<a name="item4"></a>
### Instalación 🔧 


_Clonar el proyecto_
```
git clone git@github.com:csena72/validar-token.git
```
_Ingresar en la carpeta donde se clonó el proyecto y ejecutar_

```
cd challenge-validar-token

docker compose build
docker compose up -d
```
Para ver si esta corriendo nuestro contenedor ejecutamos:

```
docker ps -a
```

Ingrasamos al contenedor:
```
docker exec -it challenge-validar-token-web-1 bashc
```
Y ejecutamos el siguiente comando para instalar las librerias

```
composer install
```
Damos permiso al directorio de cache:
```
chmod -R 777 writable/cache
```

### 🚀 Para correr la aplicación:

```
ej.: http://localhost:8000/
```
 
[Subir](#top)# challenge-validar-token
