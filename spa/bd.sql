DROP DATABASE IF EXISTS spa;
CREATE DATABASE spa;
USE spa;

DROP TABLE IF EXISTS usuarios;
CREATE TABLE usuarios (
	id INT AUTO_INCREMENT,
	nombre VARCHAR(250) NOT NULL,
	apellido VARCHAR(250) NOT NULL,
	documento_tipo VARCHAR(250) NOT NULL,
	documento_numero VARCHAR(250) NOT NULL,
	usuario VARCHAR(250) NOT NULL,
	clave VARCHAR(250) NOT NULL,
	fecha_creacion DATE NOT NULL,
	PRIMARY KEY (id)
); ALTER TABLE usuarios CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;

INSERT INTO usuarios (nombre,apellido,documento_tipo,documento_numero,usuario,clave,fecha_creacion) VALUES 
('Juan','Maldonado','PEP','955948708101993','admin','e1f2e2d4f6598c43c2a45d2bd3acb7be','2021-05-20');

DROP TABLE IF EXISTS servicios;
CREATE TABLE servicios (
	id INT AUTO_INCREMENT,
	nombre VARCHAR(250) NOT NULL,
	valor INT NOT NULL,
	PRIMARY KEY (id)
); ALTER TABLE servicios CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;

INSERT INTO servicios (nombre,valor) VALUES 
('Limpieza Facial',15000),
('Manicure Convencional (Normal)',15000),
('Manicure Convencional (Decorada)',15000),
('Manicure Semipermanente (Normal)',15000),
('Manicure Semipermanente (Decorada)',15000),
('Uñas en Acrílico',70000),
('Uñas en Acrílico Semipermanente (Corta)',30000),
('Uñas en Acrílico Semipermanente (Mediana)',70000),
('Uñas en Acrílico Semipermanente (Larga)',100000),
('Pedicure',16000),
('Pedicure con Semipermanente',40000),
('Masajes Relajantes',50000),
('Masaje Reductores x10 Sesiones',250000),
('Cepillado (Cabello Corto)',10000),
('Cepillado (Cabello Largo)',15000),
('Planchado (Cabello Corto)',10000),
('Planchado (Cabello Largo)',20000),
('Depilación Cejas',7000),
('Depilación Bozo',6000),
('Depilación Axilas',8000),
('Depilación Pierna Media',25000),
('Depilación Pierna Completa',50000),
('Depilación Bikini',30000),
('Pestañas Pelo a Pelo',80000),
('Retoque Pelo a Pelo',50000),
('Pestaña Punto a Punto',35000),
('Cejas en Henna',20000);

DROP TABLE IF EXISTS efectivos;
CREATE TABLE efectivos (
	id INT AUTO_INCREMENT,
	tipo VARCHAR(250) NOT NULL,
	concepto1 VARCHAR(250) NOT NULL,
	cantidad1 INT NOT NULL,
	valor1 INT NOT NULL,
	total1 INT NOT NULL,
	concepto2 VARCHAR(250) NOT NULL,
	cantidad2 INT NOT NULL,
	valor2 INT NOT NULL,
	total2 INT NOT NULL,
	concepto3 VARCHAR(250) NOT NULL,
	cantidad3 INT NOT NULL,
	valor3 INT NOT NULL,
	total3 INT NOT NULL,
	concepto4 VARCHAR(250) NOT NULL,
	cantidad4 INT NOT NULL,
	valor4 INT NOT NULL,
	total4 INT NOT NULL,
	concepto5 VARCHAR(250) NOT NULL,
	cantidad5 INT NOT NULL,
	valor5 INT NOT NULL,
	total5 INT NOT NULL,
	precio INT NOT NULL,
	total_todo INT NOT NULL,
	fecha_creacion DATE NOT NULL,
	PRIMARY KEY (id)
); ALTER TABLE efectivos CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;