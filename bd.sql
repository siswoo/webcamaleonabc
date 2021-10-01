DROP DATABASE IF EXISTS webcamaleonabc;
CREATE DATABASE webcamaleonabc;
USE webcamaleonabc;

DROP TABLE IF EXISTS usuarios;
CREATE TABLE usuarios (
	id INT AUTO_INCREMENT,
	usuario VARCHAR(250) NOT NULL,
	clave VARCHAR(250) NOT NULL,
	documento_tipo VARCHAR(250) NOT NULL,
	documento_numero VARCHAR(250) NOT NULL,
	fecha_creacion date NOT NULL,
	PRIMARY KEY (id)
); ALTER TABLE usuarios CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;

INSERT INTO usuarios (usuario,clave,documento_tipo,documento_numero,fecha_creacion) VALUES 
('gabriela1','81dc9bdb52d04dc20036dbd8313ed055','Cedula de ciudadania','123456','2021-05-22');


DROP TABLE IF EXISTS formulario_contacto1;
CREATE TABLE formulario_contacto1 (
	id INT AUTO_INCREMENT,
	nombre VARCHAR(250) NOT NULL,
	correo VARCHAR(250) NOT NULL,
	telefono VARCHAR(250) NOT NULL,
	edad VARCHAR(250) NOT NULL,
	mensaje VARCHAR(250) NOT NULL,
	hablame INT NOT NULL,
	estatus INT NOT NULL,
	fecha_creacion date NOT NULL,
	PRIMARY KEY (id)
); ALTER TABLE formulario_contacto1 CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;

DROP TABLE IF EXISTS wix;
CREATE TABLE wix (
	id INT AUTO_INCREMENT,
	nombre VARCHAR(250) NOT NULL,
	correo VARCHAR(250) NOT NULL,
	telefono VARCHAR(250) NOT NULL,
	hablame INT NOT NULL,
	estatus INT NOT NULL,
	fecha_creacion date NOT NULL,
	PRIMARY KEY (id)
); ALTER TABLE wix CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;

DROP TABLE IF EXISTS numeros_whatsapp;
CREATE TABLE numeros_whatsapp (
	id INT AUTO_INCREMENT,
	numero VARCHAR(250) NOT NULL,
	ambiente VARCHAR(250) NOT NULL,
	fecha_creacion date NOT NULL,
	PRIMARY KEY (id)
); ALTER TABLE numeros_whatsapp CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;