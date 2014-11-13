--
-- Base de datos: 'pqrs'
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla 'ciudadanos'
--

CREATE TABLE IF NOT EXISTS ciudadanos (
  id varchar(15) NOT NULL,
  tipoId int(11) NOT NULL,
  nombres varchar(30) NOT NULL,
  primerApelldio varchar(30) NOT NULL,
  segundoApellido varchar(30) DEFAULT NULL,
  direccion varchar(50) DEFAULT NULL,
  telefono varchar(12) DEFAULT NULL,
  correo varchar(25) NOT NULL,
  ciudad int(11) NOT NULL,
  PRIMARY KEY (id),
  KEY tipoId (tipoId),
  KEY ciudad (ciudad)
);

--
-- Volcado de datos para la tabla 'ciudadanos'
--

INSERT INTO ciudadanos (id, tipoId, nombres, primerApelldio, segundoApellido, direccion, telefono, correo, ciudad) VALUES
('1113304996', 3, 'William Alonso', 'Quiceno', 'Restrepo', 'Cll 23 No. 32-24', '3173295653', 'wi999iam@hotmail.com', 7),
('123456789', 3, 'Jaime Fernando', 'Amaya', 'Olarte', 'Ciudad Dorada', '3173300396', 'jamesfercho89@hotmail.com', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla 'ciudades'
--

CREATE TABLE IF NOT EXISTS ciudades (
  id int(11) NOT NULL AUTO_INCREMENT,
  departamento int(11) NOT NULL,
  nombre varchar(50) NOT NULL,
  PRIMARY KEY (id),
  KEY departamento (departamento)
);

--
-- Volcado de datos para la tabla 'ciudades'
--

INSERT INTO ciudades (id, departamento, nombre) VALUES
(7, 5, 'Armenia'),
(11, 10, 'Cualquiera'),
(12, 11, 'Cualquiera'),
(13, 11, 'Cualquiera'),
(14, 12, 'Cualquiera'),
(15, 13, 'Cualquiera'),
(16, 14, 'Cualquiera'),
(17, 15, 'Cualquiera'),
(18, 16, 'Cualquiera'),
(19, 17, 'Cualquiera'),
(20, 18, 'Cualquiera'),
(21, 19, 'Cualquiera'),
(22, 20, 'Cualquiera'),
(23, 21, 'Cualquiera'),
(24, 22, 'Cualquiera'),
(25, 23, 'Cualquiera'),
(26, 24, 'Cualquiera'),
(27, 25, 'Cualquiera'),
(28, 26, 'Cualquiera'),
(29, 27, 'Cualquiera'),
(30, 28, 'Cualquiera'),
(31, 29, 'Cualquiera'),
(32, 30, 'Cualquiera'),
(33, 31, 'Cualquiera'),
(34, 32, 'Cualquiera'),
(35, 33, 'Cualquiera'),
(36, 34, 'Cualquiera'),
(37, 35, 'Cualquiera'),
(38, 36, 'Cualquiera'),
(39, 37, 'Cualquiera'),
(40, 38, 'Cualquiera'),
(41, 39, 'Cualquiera'),
(42, 40, 'Cualquiera'),
(43, 41, 'Cualquiera'),
(44, 42, 'Cualquiera'),
(45, 43, 'Cualquiera'),
(46, 44, 'Cualquiera'),
(47, 45, 'Cualquiera'),
(48, 46, 'Cualquiera'),
(49, 47, 'Cualquiera'),
(50, 48, 'Cualquiera'),
(51, 49, 'Cualquiera'),
(52, 50, 'Cualquiera'),
(53, 51, 'Cualquiera'),
(54, 52, 'Cualquiera'),
(55, 53, 'Cualquiera'),
(56, 54, 'Cualquiera'),
(57, 55, 'Cualquiera'),
(58, 56, 'Cualquiera'),
(59, 57, 'Cualquiera'),
(60, 58, 'Cualquiera'),
(61, 59, 'Cualquiera'),
(62, 60, 'Cualquiera'),
(63, 61, 'Cualquiera'),
(64, 62, 'Cualquiera'),
(65, 63, 'Cualquiera'),
(66, 64, 'Cualquiera'),
(67, 65, 'Cualquiera'),
(68, 66, 'Cualquiera'),
(69, 67, 'Cualquiera'),
(70, 68, 'Cualquiera'),
(71, 69, 'Cualquiera'),
(72, 70, 'Cualquiera'),
(73, 71, 'Cualquiera'),
(74, 72, 'Cualquiera'),
(75, 73, 'Cualquiera'),
(76, 74, 'Cualquiera'),
(77, 75, 'Cualquiera'),
(78, 76, 'Cualquiera'),
(79, 77, 'Cualquiera'),
(80, 78, 'Cualquiera'),
(81, 79, 'Cualquiera'),
(82, 80, 'Cualquiera'),
(83, 81, 'Cualquiera'),
(84, 82, 'Cualquiera'),
(85, 83, 'Cualquiera'),
(86, 84, 'Cualquiera'),
(87, 85, 'Cualquiera'),
(88, 86, 'Cualquiera'),
(89, 87, 'Cualquiera'),
(90, 88, 'Cualquiera'),
(91, 89, 'Cualquiera'),
(92, 91, 'Cualquiera'),
(93, 92, 'Cualquiera'),
(94, 93, 'Cualquiera'),
(95, 94, 'Cualquiera'),
(96, 95, 'Cualquiera'),
(97, 96, 'Cualquiera'),
(98, 97, 'Cualquiera'),
(99, 98, 'Medellin'),
(100, 99, 'Manizales'),
(101, 100, 'Pereira'),
(102, 101, 'Barranquilla'),
(103, 102, 'Cartagena'),
(104, 103, 'Monteria'),
(105, 104, 'San Andres'),
(106, 105, 'Sincelejo'),
(107, 106, 'Arauca'),
(108, 107, 'Tunja'),
(109, 108, 'Yopal'),
(110, 109, 'Leticia'),
(111, 110, 'Florencia'),
(112, 111, 'Popayan'),
(113, 112, 'Quibdo'),
(114, 113, 'Puerto Inirida'),
(115, 114, 'San Jose del Guaviare'),
(116, 115, 'Pasto'),
(117, 116, 'Mocoa'),
(118, 117, 'Cali'),
(119, 118, 'Mitu'),
(120, 119, 'Bogota'),
(121, 120, 'Villavicencio'),
(122, 121, 'Puerto Carreno'),
(123, 122, 'Valledupar'),
(124, 123, 'Riohacha'),
(125, 124, 'Santa Marta'),
(126, 125, 'Cucuta'),
(127, 126, 'Bucaramanga'),
(128, 127, 'Neiva'),
(129, 128, 'Ibague'),
(130, 98, 'Otra'),
(131, 99, 'Otra'),
(132, 100, 'Otra'),
(133, 101, 'Otra'),
(134, 102, 'Otra'),
(135, 103, 'Otra'),
(136, 104, 'Otra'),
(137, 105, 'Otra'),
(138, 106, 'Otra'),
(139, 107, 'Otra'),
(140, 108, 'Otra'),
(141, 109, 'Otra'),
(142, 110, 'Otra'),
(143, 111, 'Otra'),
(144, 112, 'Otra'),
(145, 113, 'Otra'),
(146, 114, 'Otra'),
(147, 115, 'Otra'),
(148, 116, 'Otra'),
(149, 117, 'Otra'),
(150, 118, 'Otra'),
(151, 119, 'Otra'),
(152, 120, 'Otra'),
(153, 121, 'Otra'),
(154, 122, 'Otra'),
(155, 123, 'Otra'),
(156, 124, 'Otra'),
(157, 125, 'Otra'),
(158, 126, 'Otra'),
(159, 127, 'Otra'),
(160, 128, 'Otra'),
(161, 5, 'Otra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla 'contactos'
--

CREATE TABLE IF NOT EXISTS contactos (
  id varchar(15) NOT NULL,
  PRIMARY KEY (id)
);

--
-- Volcado de datos para la tabla 'contactos'
--

INSERT INTO contactos (id) VALUES
('1113304996'),
('123456789'),
('999'),
('888'),
('29819777');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla 'departamentos'
--

CREATE TABLE IF NOT EXISTS departamentos (
  id int(11) NOT NULL AUTO_INCREMENT,
  pais int(11) NOT NULL,
  nombre varchar(50) NOT NULL,
  PRIMARY KEY (id),
  KEY pais (pais)
);

--
-- Volcado de datos para la tabla 'departamentos'
--

INSERT INTO departamentos (id, pais, nombre) VALUES
(5, 10, 'Quindio'),
(10, 1, 'Cualquiera'),
(11, 2, 'Cualquiera'),
(12, 3, 'Cualquiera'),
(13, 4, 'Cualquiera'),
(14, 5, 'Cualquiera'),
(15, 6, 'Cualquiera'),
(16, 7, 'Cualquiera'),
(17, 8, 'Cualquiera'),
(18, 9, 'Cualquiera'),
(19, 11, 'Cualquiera'),
(20, 12, 'Cualquiera'),
(21, 13, 'Cualquiera'),
(22, 14, 'Cualquiera'),
(23, 15, 'Cualquiera'),
(24, 16, 'Cualquiera'),
(25, 17, 'Cualquiera'),
(26, 18, 'Cualquiera'),
(27, 19, 'Cualquiera'),
(28, 20, 'Cualquiera'),
(29, 21, 'Cualquiera'),
(30, 22, 'Cualquiera'),
(31, 23, 'Cualquiera'),
(32, 24, 'Cualquiera'),
(33, 25, 'Cualquiera'),
(34, 26, 'Cualquiera'),
(35, 27, 'Cualquiera'),
(36, 28, 'Cualquiera'),
(37, 29, 'Cualquiera'),
(38, 30, 'Cualquiera'),
(39, 31, 'Cualquiera'),
(40, 32, 'Cualquiera'),
(41, 33, 'Cualquiera'),
(42, 34, 'Cualquiera'),
(43, 35, 'Cualquiera'),
(44, 36, 'Cualquiera'),
(45, 37, 'Cualquiera'),
(46, 38, 'Cualquiera'),
(47, 39, 'Cualquiera'),
(48, 40, 'Cualquiera'),
(49, 41, 'Cualquiera'),
(50, 42, 'Cualquiera'),
(51, 43, 'Cualquiera'),
(52, 44, 'Cualquiera'),
(53, 45, 'Cualquiera'),
(54, 46, 'Cualquiera'),
(55, 47, 'Cualquiera'),
(56, 48, 'Cualquiera'),
(57, 49, 'Cualquiera'),
(58, 50, 'Cualquiera'),
(59, 51, 'Cualquiera'),
(60, 52, 'Cualquiera'),
(61, 53, 'Cualquiera'),
(62, 54, 'Cualquiera'),
(63, 55, 'Cualquiera'),
(64, 56, 'Cualquiera'),
(65, 57, 'Cualquiera'),
(66, 58, 'Cualquiera'),
(67, 59, 'Cualquiera'),
(68, 60, 'Cualquiera'),
(69, 61, 'Cualquiera'),
(70, 62, 'Cualquiera'),
(71, 63, 'Cualquiera'),
(72, 64, 'Cualquiera'),
(73, 65, 'Cualquiera'),
(74, 66, 'Cualquiera'),
(75, 67, 'Cualquiera'),
(76, 68, 'Cualquiera'),
(77, 69, 'Cualquiera'),
(78, 70, 'Cualquiera'),
(79, 71, 'Cualquiera'),
(80, 72, 'Cualquiera'),
(81, 73, 'Cualquiera'),
(82, 74, 'Cualquiera'),
(83, 75, 'Cualquiera'),
(84, 76, 'Cualquiera'),
(85, 77, 'Cualquiera'),
(86, 78, 'Cualquiera'),
(87, 79, 'Cualquiera'),
(88, 80, 'Cualquiera'),
(89, 81, 'Cualquiera'),
(91, 82, 'Cualquiera'),
(92, 83, 'Cualquiera'),
(93, 84, 'Cualquiera'),
(94, 85, 'Cualquiera'),
(95, 86, 'Cualquiera'),
(96, 87, 'Cualquiera'),
(97, 88, 'Cualquiera'),
(98, 10, 'Antioquia'),
(99, 10, 'Caldas'),
(100, 10, 'Risaralda'),
(101, 10, 'Atlantico'),
(102, 10, 'Bolivar'),
(103, 10, 'Cordoba'),
(104, 10, 'San Andres y Providencia'),
(105, 10, 'Sucre'),
(106, 10, 'Arauca'),
(107, 10, 'Boyaca'),
(108, 10, 'Casanare'),
(109, 10, 'Amazonas'),
(110, 10, 'Caqueta'),
(111, 10, 'Cauca'),
(112, 10, 'Choco'),
(113, 10, 'Guainia'),
(114, 10, 'Guaviare'),
(115, 10, 'Narino'),
(116, 10, 'Putumayo'),
(117, 10, 'Valle del Cauca'),
(118, 10, 'Vaupes'),
(119, 10, 'Cundinamarca'),
(120, 10, 'Meta'),
(121, 10, 'Vichada'),
(122, 10, 'Cesar'),
(123, 10, 'La Guajira'),
(124, 10, 'Magdalena'),
(125, 10, 'Norte de Santander'),
(126, 10, 'Santander'),
(127, 10, 'Huila'),
(128, 10, 'Tolima');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla 'empresas'
--

CREATE TABLE IF NOT EXISTS empresas (
  nit varchar(15) NOT NULL,
  nombre varchar(50) NOT NULL,
  direccion varchar(50) NOT NULL,
  telefono varchar(12) DEFAULT NULL,
  correo varchar(25) DEFAULT NULL,
  ciudad int(11) NOT NULL,
  nombreContacto varchar(30) NOT NULL,
  primerApellidoContacto varchar(30) NOT NULL,
  segundoApellidoContacto varchar(30) NOT NULL,
  telefonoContacto varchar(12) NOT NULL,
  PRIMARY KEY (nit),
  KEY ciudad (ciudad)
);

--
-- Volcado de datos para la tabla 'empresas'
--

INSERT INTO empresas (nit, nombre, direccion, telefono, correo, ciudad, nombreContacto, primerApellidoContacto, segundoApellidoContacto, telefonoContacto) VALUES
('29819777', 'Dream App', 'Centro Armenia', '3173300396', 'dreamapp@gmail.com', 7, 'Jaime Fernando', 'Amaya', 'Olarte', '3173300396');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla 'paises'
--

CREATE TABLE IF NOT EXISTS paises (
  id int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(50) NOT NULL,
  PRIMARY KEY (id)
);

--
-- Volcado de datos para la tabla 'paises'
--

INSERT INTO paises (id, nombre) VALUES
(1, 'Chile'),
(2, 'Argentina'),
(3, 'Uruguay'),
(4, 'Paraguay'),
(5, 'Brasil'),
(6, 'Bolivia'),
(7, 'Peru'),
(8, 'Ecuador'),
(9, 'Venezuela'),
(10, 'Colombia'),
(11, 'Panama'),
(12, 'Costa Rica'),
(13, 'Costa Rica'),
(14, 'Nicaragua'),
(15, 'Guatemala'),
(16, 'El salvador'),
(17, 'Mexico'),
(18, 'Estados Unidos'),
(19, 'Canada'),
(20, 'Cuba'),
(21, 'Puerto Rico'),
(22, 'Haiti'),
(23, 'Sudafrica'),
(24, 'Nigeria'),
(25, 'Marruecos'),
(26, 'Libia'),
(27, 'Egipto'),
(28, 'Tunez'),
(29, 'Costa de Marfil'),
(30, 'Somalia'),
(31, 'Uganda'),
(32, 'Republica de Congo'),
(33, 'Arabia Saudita'),
(34, 'Emiratos Arabes Unidos'),
(35, 'Oman'),
(36, 'Yemen'),
(37, 'Israel'),
(38, 'Letonia'),
(39, 'Lituania'),
(40, 'Libano'),
(41, 'Siria'),
(42, 'Iran'),
(43, 'Irak'),
(44, 'Turquia'),
(45, 'Pakistan'),
(46, 'Afganistan'),
(47, 'Brunei'),
(48, 'Sri Lanka'),
(49, 'China'),
(50, 'India'),
(51, 'Hong Kong'),
(52, 'Indonesia'),
(53, 'Nueva Zelanda'),
(54, 'Japon'),
(55, 'Australia'),
(56, 'Rusia'),
(57, 'Corea del Sur'),
(58, 'Corea del Norte'),
(59, 'Vietnam'),
(60, 'Suecia'),
(61, 'Suiza'),
(62, 'Finlandia'),
(63, 'Noruega'),
(64, 'Islandia'),
(65, 'Alemania'),
(66, 'Grecia'),
(67, 'Polonia'),
(68, 'Montenegro'),
(69, 'Bosnia '),
(70, 'Bulgaria'),
(71, 'Rumania'),
(72, 'Hungria'),
(73, 'Republica Checa'),
(74, 'Eslovenia'),
(75, 'Eslovaquia'),
(76, 'Austria'),
(77, 'Italia'),
(78, 'Francia'),
(79, 'Albania'),
(80, 'Espana'),
(81, 'Portugal'),
(82, 'Belgica'),
(83, 'Luxemburgo'),
(84, 'Holanda'),
(85, 'Dinamarca'),
(86, 'Irlanda'),
(87, 'Escocia'),
(88, 'Inglaterra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla 'tipos_documento'
--

CREATE TABLE IF NOT EXISTS tipos_documento (
  id int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(30) NOT NULL,
  PRIMARY KEY (id)
);

--
-- Volcado de datos para la tabla 'tipos_documento'
--

INSERT INTO tipos_documento (id, nombre) VALUES
(3, 'Cedula de Ciudadania'),
(4, 'Tarjeta de Identidad'),
(5, 'Cedula de Extranjeria');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla 'ciudadanos'
--
ALTER TABLE ciudadanos
  ADD CONSTRAINT ciudadanos_ibfk_1 FOREIGN KEY (id) REFERENCES contactos (id),
  ADD CONSTRAINT ciudadanos_ibfk_2 FOREIGN KEY (tipoId) REFERENCES tipos_documento (id),
  ADD CONSTRAINT ciudadanos_ibfk_3 FOREIGN KEY (ciudad) REFERENCES ciudades (id);

--
-- Filtros para la tabla 'ciudades'
--
ALTER TABLE ciudades
  ADD CONSTRAINT ciudades_ibfk_1 FOREIGN KEY (departamento) REFERENCES departamentos (id);

--
-- Filtros para la tabla 'departamentos'
--
ALTER TABLE departamentos
  ADD CONSTRAINT departamentos_ibfk_1 FOREIGN KEY (pais) REFERENCES paises (id);

--
-- Filtros para la tabla 'empresas'
--
ALTER TABLE empresas
  ADD CONSTRAINT empresas_ibfk_1 FOREIGN KEY (nit) REFERENCES contactos (id),
  ADD CONSTRAINT empresas_ibfk_2 FOREIGN KEY (ciudad) REFERENCES ciudades (id);

---------------------------------------------------------------------------------------------
-- Tablas PQRS (BUILD 2)

CREATE TABLE tipoUsuario (
	id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nombre VARCHAR(30) NOT NULL
);

INSERT INTO tipoUsuario (id, nombre) VALUES
(1, 'Grupo de Atencion al Ciudadano'),
(2, 'Ventanilla');

  
CREATE TABLE usuario (
	id VARCHAR(15) NOT NULL PRIMARY KEY,
	nombre VARCHAR(30) NOT NULL,
	apellidos VARCHAR(30),
	correo VARCHAR(30) NOT NULL,
	tipo INTEGER NOT NULL,
	FOREIGN KEY(tipo) REFERENCES tipoUsuario(id)
);

INSERT INTO usuario (id, nombre, apellidos, correo, tipo) VALUES
('1','Responsable','','william.quiceno.restrepo@gmail.com', 1);


CREATE TABLE tema (
	id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nombre VARCHAR(30) NOT NULL,
	responsable VARCHAR(15) NOT NULL,
	FOREIGN KEY(responsable) REFERENCES usuario(id)
);

INSERT INTO tema (id, nombre, responsable) VALUES
(1,'Reclamo', '1'),
(2,'Peticion de Interes Particular', '1'),
(3,'Peticion de Interes General', '1'),
(4,'Queja', '1'),
(5,'Solicitud de Informacion', '1'),
(6,'Sugerencia', '1'),
(7,'Felicitaciones', '1'),
(8,'Consulta', '1'),
(9,'Manifestaciones', '1'),
(10,'Solicitud de Copia', '1'),
(11,'Derecho de Peticion', '1');
  

CREATE TABLE subtema (
	id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nombre VARCHAR(50) NOT NULL,
	tema INTEGER NOT NULL,
	FOREIGN KEY(tema) REFERENCES tema(id)
);

INSERT INTO subtema (tema,nombre) VALUES
(1,'Reclamo de Investigador'),
(1,'Reclamo de Proveedor'),
(1,'Reclamo de Evento'),
(2,'Peticion de Investigador'),
(2,'Peticion de Proveedor'),
(3,'Peticion de Evento'),
(4,'Queja de Investigador'),
(4,'Queja de Proveedor'),
(4,'Queja de Evento'),
(5,'Solicitud de Investigador'),
(5,'Solicitud de Proveedor'),
(5,'Solicitud de Evento'),
(6,'Sugerencia de Investigador'),
(6,'Sugerencia de Proveedor'),
(6,'Sugerencia de Evento'),
(7,'Felicitaciones de Investigador'),
(7,'Felicitaciones de Proveedor'),
(7,'Felicitaciones de Evento'),
(8,'Consulta de Investigador'),
(8,'Consulta de Proveedor'),
(8,'Consulta de Evento'),
(9,'Manifestacion de Investigador'),
(9,'Manifestacion de Proveedor'),
(9,'Manifestacion de Evento'),
(10,'Solicitud de copia de Investigador'),
(10,'Solicitud de copia de Proveedor'),
(10,'Solicitud de copia de Evento'),
(11,'Derecho de Peticion de Investigador'),
(11,'Derecho de Peticion de Proveedor'),
(11,'Derecho de Peticion de Evento');


CREATE TABLE expediente (
	id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nombre VARCHAR(30) NOT NULL,
	responsable VARCHAR(15) NOT NULL,
	asunto VARCHAR(50),
	serie VARCHAR(30),
	subserie VARCHAR(30),
	FOREIGN KEY(responsable) REFERENCES usuario(id)
);

INSERT INTO expediente (id, nombre, responsable) VALUES
(1,'Juridico', '1','Asuntos Juridicos','serie juridica','subserie juridica'),
(2,'Organizacional', '1','Asuntos Organizacionales','serie organizacional','subserie organizacional'),
(3,'Procesos de Negocio', '1','Asuntos de Procesos de Negocio','serie procesos de negocio', 'subserie procesos de negocio'),
(4,'Investigacion', '1','Asuntos de Investigacion','serie investigacion','subserie investigacion'),
(5,'Financiacion', '1','Asuntos de Financiacion','serie financiacion','subserie financiacion'),
(6,'Administracion', '1','Asuntos de Administracion','serie administracion','subserie administracion');


CREATE TABLE dependencia (
	id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nombre VARCHAR(30) NOT NULL,
	expediente INTEGER NOT NULL,
	FOREIGN KEY(expediente) REFERENCES expediente(id)
);

INSERT INTO dependencia (nombre, expediente) VALUES
('Procesos Legales',1),
('Tutelas',1),
('Demandas',1),
('Mejoras',2),
('Estructura Organizacional',2),
('Gerencia',2),
('Investigacion',3),
('Eventos',3),
('Apoyo Economico',3),
('Electronica',4),
('Software',4),
('Biologia',4),
('Quimica',4),
('Lenguas Modernas',4),
('Medicina',4),
('Apps',5),
('Nueva Empresa',5),
('Contabilidad',6),
('Gestion Humana',6),
('Operaciones',6),
('Archivo',6),
('GAC',6);


CREATE TABLE respuesta (
	id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY
);


CREATE TABLE pqrs (
	id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
	contacto VARCHAR(15) NOT NULL,
	dependencia INTEGER NOT NULL,
	subtema INTEGER NOT NULL,
	folios INTEGER NOT NULL,
	anexos INTEGER NOT NULL,
	tipoAnexos VARCHAR(50) NOT NULL,
	asunto VARCHAR(150) NOT NULL,
	gac VARCHAR(15),
	respuesta INTEGER,
	FOREIGN KEY(contacto) REFERENCES contactos(id),
	FOREIGN KEY(dependencia) REFERENCES dependencia(id),
	FOREIGN KEY(subtema) REFERENCES subtema(id),
	FOREIGN KEY(gac) REFERENCES usuario(id),
	FOREIGN KEY(respuesta) REFERENCES respuesta(id)
);


CREATE TABLE operacion (
	id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nombre VARCHAR(20) NOT NULL
);

INSERT INTO operacion (id, nombre) VALUES
(1, 'Radicado'),
(2, 'Actualizado'),
(3, 'Digitalizado'),
(4, 'Incluido'),
(5, 'Asignado'),
(6, 'Revisado'),
(7, 'Reasignado'),
(8, 'Aprobado'),
(9, 'Rechazado'),
(10, 'Enviado');


CREATE TABLE historico (
	id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
	fecha DATE NOT NULL,
	operacion INTEGER NOT NULL,
	usuario VARCHAR(15) NOT NULL,
	observacion VARCHAR(50),
	pqrs INTEGER NOT NULL,
	FOREIGN KEY(operacion) REFERENCES operacion(id),
	FOREIGN KEY(usuario) REFERENCES usuario(id),
	FOREIGN KEY(pqrs) REFERENCES pqrs(id)
);