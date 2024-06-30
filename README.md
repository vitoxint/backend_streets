## Consideraciones

## Autor: Victor Rivas Monsalves

# Backend Streets

## Requerimientos

- PHP 8.1+
- Versión Laravel 10+
- Composer 2.x+

## Instalacion

### 1. clonar el repositorio

```sh
git clone https://github.com/vitoxnt/backend_streets.git
cd backend_streets
```
### Instalar dependencias de php

```sh
composer install
```

### Instalar dependencias de node

```sh
npm install
```

## Variables de entorno

- Copiar .env.example file a .env y editar las variables de entorno necesarias:

```sh
cp .env.example .env
```


##  Configurar la base de datos

- Asegurate de que los parametros de conexión a la bbdd esten configurados en el archivo .env file.

## Ejecutar las migraciones:

```sh

php artisan migrate
```

## Cargar registros por defecto de la base de datos (seeder)

```sh

php artisan db:seed

```

## Ejecutar la aplicación

- Mediante el servidor local de artisan:

```sh

php artisan serve

```
- La aplicación se ejecutará en : http://localhost:8000

## Usuario por defecto (Admin)

- No tiene usuario ya que es solo un endpoint sin requisitos de autenticación




