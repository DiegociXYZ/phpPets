CREATE DATABASE IF NOT EXISTS petstore
CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;
USE petstore;

CREATE TABLE IF NOT EXISTS mascotas (
mascota_id INT(10) PRIMARY KEY NOT NULL,
nombre_mascota VARCHAR(20) NOT NULL,
tipo VARCHAR(20) NOT NULL,
raza VARCHAR(100) NOT NULL,
sexo VARCHAR(2) NOT NULL,
nombre_cliente VARCHAR(30) NOT NULL,
nacimiento VARCHAR(20) NOT NULL
);