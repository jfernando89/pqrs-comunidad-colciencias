CREATE TABLE tipos_documento (
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nombre VARCHAR(20) NOT NULL
);

CREATE TABLE paises (
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nombre VARCHAR(50) NOT NULL
);

CREATE TABLE departamentos (
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	pais INTEGER NOT NULL,
	nombre VARCHAR(50) NOT NULL,
	FOREIGN KEY(pais) REFERENCES paises(id)
);

CREATE TABLE ciudades (
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	departamento INTEGER NOT NULL,
	nombre VARCHAR(50) NOT NULL,
	FOREIGN KEY(departamento) REFERENCES departamentos(id)
);

CREATE TABLE contactos (
	id VARCHAR(15) NOT NULL,
	FOREIGN KEY(id) REFERENCES ciudadanos(id),
);

CREATE TABLE ciudadanos (
    id VARCHAR(15) NOT NULL PRIMARY KEY,
    tipoId INTEGER NOT NULL,
    nombres VARCHAR(30) NOT NULL,
    primerApelldio VARCHAR(30) NOT NULL,
    segundoApellido VARCHAR(30),
    direccion VARCHAR(50),
    telefono VARCHAR(12),
    correo VARCHAR(25) NOT NULL,
    ciudad INTEGER NOT NULL,

    FOREIGN KEY(tipoId) REFERENCES tipos_documento(id),
    FOREIGN KEY(ciudad) REFERENCES ciudades(id)    
);
    
CREATE TABLE empresas (
	nit VARCHAR(15) NOT NULL PRIMARY KEY,
	nombre VARCHAR(50) NOT NULL,
	direccion VARCHAR(50) NOT NULL,
	telefono VARCHAR(12),
	correo VARCHAR(25),
	ciudad INTEGER NOT NULL,
	nombreContacto VARCHAR(30) NOT NULL,
	primerApellidoContacto VARCHAR(30) NOT NULL,
	segundoApellidoContacto VARCHAR(30) NOT NULL,
	telefonoContacto VARCHAR(12) NOT NULL,
	FOREIGN KEY(nit) REFERENCES contactos(id),
	FOREIGN KEY(ciudad) REFERENCES ciudades(id)
);

/* Se rellenan los tipos de documento */
INSERT INTO tipos_documento VALUES ('Cédula de Ciudadanía');
INSERT INTO tipos_documento VALUES ('Tarjeta de Identidad');
INSERT INTO tipos_documento VALUES ('Cédula de Extranjería');

/* Se rellenan los paises del mundo */
INSERT INTO paises VALUES ('Chile');
INSERT INTO paises VALUES ('Argentina');
INSERT INTO paises VALUES ('Uruguay');
INSERT INTO paises VALUES ('Paraguay');
INSERT INTO paises VALUES ('Brasil');
INSERT INTO paises VALUES ('Bolivia');
INSERT INTO paises VALUES ('Perú');
INSERT INTO paises VALUES ('Ecuador');
INSERT INTO paises VALUES ('Venezuela');
INSERT INTO paises VALUES ('Colombia');

/* Se rellenan los departamentos de cada pais */
INSERT INTO departamentos VALUES (10,'Nariño');
INSERT INTO departamentos VALUES (10,'Cauca');
INSERT INTO departamentos VALUES (10,'Putumayo');
INSERT INTO departamentos VALUES (10,'Valle del Cauca');
INSERT INTO departamentos VALUES (10,'Quindío');
INSERT INTO departamentos VALUES (10,'Risaralda');
INSERT INTO departamentos VALUES (10,'Caldas');
INSERT INTO departamentos VALUES (10,'Chocó');
INSERT INTO departamentos VALUES (10,'Antioquia');

/* Se rellenan las ciudades de cada departamento */
INSERT INTO ciudades VALUES (1,'Pasto');
INSERT INTO ciudades VALUES (2,'Popayán');
INSERT INTO ciudades VALUES (2,'Piendamó');
INSERT INTO ciudades VALUES (4,'Sevilla');
INSERT INTO ciudades VALUES (4,'Caicedonia');
INSERT INTO ciudades VALUES (4,'Cali');
INSERT INTO ciudades VALUES (5,'Armenia');
INSERT INTO ciudades VALUES (5,'Quimbaya');
INSERT INTO ciudades VALUES (6,'Pereira');
INSERT INTO ciudades VALUES (9,'Medellín');
