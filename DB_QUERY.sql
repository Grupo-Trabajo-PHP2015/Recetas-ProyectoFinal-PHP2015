// querys para crear la base de datos

// se crea la base datos

CREATE DATABASE proyecto_restaurante


// se crea la tabla para ingredientes

CREATE TABLE ingredientes(
 
    id int NOT NULL  AUTO_INCREMENT,
    nombre varchar(45) NOT NULL,
    url varchar(100) NOT NULL ,
    descripcion varchar(100) NOT NULL ,
    PRIMARY KEY (id)
    
 )

