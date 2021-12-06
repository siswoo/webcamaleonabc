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
('gabriela1','71b3b26aaa319e0cdf6fdb8429c112b0','Cedula de ciudadania','123456','2021-05-22'),
('brenda1','e10adc3949ba59abbe56e057f20f883e','Cedula de ciudadania','123456789','2021-12-01');


DROP TABLE IF EXISTS formulario_contacto1;
CREATE TABLE formulario_contacto1 (
	id INT AUTO_INCREMENT,
	nombre VARCHAR(250) NOT NULL,
	documento_tipo VARCHAR(250) NOT NULL,
	documento_numero VARCHAR(250) NOT NULL,
	ciudad VARCHAR(250) NOT NULL,
	pais VARCHAR(250) NOT NULL,
	experiencia VARCHAR(250) NOT NULL,
	correo VARCHAR(250) NOT NULL,
	telefono VARCHAR(250) NOT NULL,
	edad VARCHAR(250) NOT NULL,
	mensaje VARCHAR(250) NOT NULL,
	hablame INT DEFAULT 1,
	autosend INT DEFAULT 1,
	estatus INT NOT NULL,
	fuente VARCHAR(250) DEFAULT 'webcamaleonabc',
	fecha_creacion date NOT NULL,
	PRIMARY KEY (id)
); ALTER TABLE formulario_contacto1 CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;

DROP TABLE IF EXISTS wix;
CREATE TABLE wix (
	id INT AUTO_INCREMENT,
	nombre VARCHAR(250) NOT NULL,
	correo VARCHAR(250) NOT NULL,
	telefono VARCHAR(250) NOT NULL,
	hablame INT DEFAULT 1,
	autosend INT DEFAULT 1,
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

DROP TABLE IF EXISTS rollback1;
CREATE TABLE rollback1 (
	id INT AUTO_INCREMENT,
	fuente VARCHAR(250) NOT NULL,
	desde VARCHAR(250) NOT NULL,
	hasta VARCHAR(250) NOT NULL,
	fecha_creacion date NOT NULL,
	PRIMARY KEY (id)
); ALTER TABLE rollback1 CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;

DROP TABLE IF EXISTS malos1;
CREATE TABLE malos1 (
	id INT AUTO_INCREMENT,
	fecha_creacion date NOT NULL,
	PRIMARY KEY (id)
); ALTER TABLE malos1 CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;