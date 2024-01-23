/* Creando la base de datos compuwork*/
CREATE DATABASE compuwork;

/* Ubicarme dentro de la base de datos compuwork*/
USE compuwork;

/* Creando la tabla usuario*/
CREATE TABLE usuario (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombres VARCHAR(225) NOT NULL,
  apellidos VARCHAR(255) NOT NULL,
  correo VARCHAR(255) UNIQUE NOT NULL,
  pais VARCHAR(100) NOT NULL,
  celular INT(20) NOT NULL,
  usuario VARCHAR(50) UNIQUE NOT NULL,
  clave VARCHAR(255) NOT NULL
);

DROP TABLE usuario;