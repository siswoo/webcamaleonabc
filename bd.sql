DROP DATABASE IF EXISTS webcamaleonabc;
CREATE DATABASE webcamaleonabc;
USE webcamaleonabc;

DROP TABLE IF EXISTS usuarios;
CREATE TABLE usuarios (
	id INT AUTO_INCREMENT,
	nombre VARCHAR(250) NOT NULL,
	estatus INT NOT NULL,
	inicio INT NOT NULL,
	responsable INT NOT NULL,
	fecha_creacion date NOT NULL,
	PRIMARY KEY (id)
); ALTER TABLE usuarios CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;


DROP TABLE IF EXISTS formulario_contacto1;
CREATE TABLE formulario_contacto1 (
	id INT AUTO_INCREMENT,
	nombre VARCHAR(250) NOT NULL,
	correo VARCHAR(250) NOT NULL,
	telefono VARCHAR(250) NOT NULL,
	edad VARCHAR(250) NOT NULL,
	mensaje VARCHAR(250) NOT NULL,
	fecha_creacion date NOT NULL,
	PRIMARY KEY (id)
); ALTER TABLE formulario_contacto1 CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;