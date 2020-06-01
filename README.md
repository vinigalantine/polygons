# Polygons

## First Steps

Create the database.
```
CREATE DATABASE polygons_db DEFAULT CHARACTER SET utf8;
``` 

First copy .env.example and save as .env then alter the "DB_" constants.

```
DB_DATABASE={database_name}
DB_USERNAME={user}
DB_PASSWORD={password}
```

Execute the following code

```sh
php artisan key:generate
php artisan migrate
```

You need to access the public path to see the project.

(Suggestions: Create a VirtualHost point directly to the public path and change de "APP_URL" const on .env)

### Polygons

GET
```
/api/polygons/sum_areas 
```
Return the areas sum of all Triangles and Rectangles on Database.

GET
```
/api/polygons/sum_perimeters 
```
Return the perimeter sum of all Triangles and Rectangles on Database.

### Triangles

GET 
```
/api/rectangles/{id} 
```
Return a Rectangle.

POST
```
/api/rectangles?sideA={integer}&sideB={integer} 
```
Store and return a Rectangle.

PUT
```
/api/rectangles/{id}?sideA={integer}&sideB={integer} 
```
Update a Rectangle.

DELETE
```
/api/rectangles/{id} 
```
Delete an Rectangle

### Triangles

GET 
```
/api/triangles/{id}
```
Return a Triangle.

POST
```
/api/triangles?sideA={integer}&sideB={integer}&sideC={integer} 
```
Store and return a Triangle

PUT
```
/api/triangles/{id}?sideA={integer}&sideB={integer}&sideC={integer} 
```
Update a Triangle

DELETE
```
/api/triangles/{id} 
```
Delete an Triangle

#### To test

For testing the API run the following comand

```sh
.\vendor\bin\phpunit
```