-- CREO LA BASE DE DATOS --

SHOW DATABASES;
CREATE DATABASE Inmobiliaria;

/*Uso la base de datos e inserto la tabla 'Clientes' y su tabla
alterna 'Direccion_Cliente' con sus respectivas columnas y datos*/

USE Inmobiliaria;
SHOW TABLES;
CREATE TABLE `Clientes` (
    `Id_Cliente` INT(11) UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `DNI` INT(11) UNSIGNED NOT NULL,
    `Nombre` VARCHAR(19) COLLATE utf8_spanish_ci,
    `Apellido` VARCHAR(35) COLLATE utf8_spanish_ci,
    `Telefono` INT(11) UNSIGNED NOT NULL,
    `Correo` VARCHAR(90)COLLATE utf8_spanish_ci UNIQUE NOT NULL,
    `Nacimiento` DATE NOT NULL
    
);

CREATE TABLE `Direccion Del Cliente` (
    `Id_Direccion` INT(11)  UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `Id_Cliente` INT(11) UNSIGNED NOT NULL,
    FOREIGN KEY (`Id_Cliente`) REFERENCES `Clientes`(`Id_Cliente`),
    `Calle` VARCHAR(30) COLLATE utf8_spanish_ci NOT NULL,
    `Localidad` VARCHAR(30) COLLATE utf8_spanish_ci NOT NULL,
    `Provincia` VARCHAR(30) COLLATE utf8_spanish_ci NOT NULL,
    `Pais` VARCHAR(30) COLLATE utf8_spanish_ci NOT NULL
);

/*inserto la tabla 'Agentes Inmobiliarios' y su tabla alterna
'Direccion_Agente' con sus respectivas columnas y datos*/

CREATE TABLE `Agentes Inmobiliarios` (
    `Id_Agente` INT(11) UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `DNI` INT(11) UNSIGNED NOT NULL,
    `Nombre` VARCHAR(19) COLLATE utf8_spanish_ci,
    `Apellido` VARCHAR(35) COLLATE utf8_spanish_ci,
    `Telefono` INT(11) UNSIGNED NOT NULL,
    `Correo` VARCHAR(90) COLLATE utf8_spanish_ci UNIQUE NOT NULL,
    `Nacimiento` DATE NOT NULL
);

CREATE TABLE `Direccion Del Agente` (
    `Id_Direccion` INT(11) UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `Id_Agente` INT(11) UNSIGNED NOT NULL,
    FOREIGN KEY (`Id_Agente`) REFERENCES `Agentes Inmobiliarios`(`Id_Agente`),
    `Calle` VARCHAR(30) COLLATE utf8_spanish_ci NOT NULL,
    `Localidad` VARCHAR(30) COLLATE utf8_spanish_ci NOT NULL,
    `Provincia` VARCHAR(30) COLLATE utf8_spanish_ci NOT NULL,
    `Pais` VARCHAR(30) COLLATE utf8_spanish_ci NOT NULL
);

/*inserto la tabla 'Inmuebles' y sus tablas alterna
'Ambiente', 'Tipo de Inmueble', 'Moneda' y 'Estado'
con sus respectivas columnas y datos*/

CREATE TABLE `Inmuebles`(
    `Id_Inmuebles` INT(11) UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `Id_Tipos de Inmuebles` INT(11) UNSIGNED NOT NULL,
    `Id_Monedas` INT(11) UNSIGNED NOT NULL,  
    `Id_Estado` INT(11) UNSIGNED NOT NULL,
    `Locacion` VARCHAR(100) COLLATE utf8_spanish_ci NOT NULL,
    `Superficie Cubierta` VARCHAR(100) COLLATE utf8_spanish_ci,
    `Superficie Descubierta` VARCHAR(100) COLLATE utf8_spanish_ci,
    `Precio`FLOAT(10) UNSIGNED NOT NULL,
    `Antiguedad`VARCHAR(100) COLLATE utf8_spanish_ci NOT NULL,
    `Descripcion` VARCHAR(100) COLLATE utf8_spanish_ci NOT NULL
);

CREATE TABLE `Tipos de Inmuebles`(
    `Id_Tipos de Inmuebles` INT(11) UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `Tipo` VARCHAR(19) COLLATE utf8_spanish_ci
);

CREATE TABLE `Monedas`(
    `Id_Monedas` INT(11) UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `Moneda` VARCHAR(19) COLLATE utf8_spanish_ci
);

CREATE TABLE `Estado`(
    `Id_Estado` INT(11) UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `Estado` VARCHAR(19) COLLATE utf8_spanish_ci
);

CREATE TABLE `Ambiente` (
    `Id_Ambiente` INT(11) UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `Id_Inmuebles` INT(11) UNSIGNED NOT NULL,
    FOREIGN KEY (`Id_Inmuebles`) REFERENCES `Inmuebles`(`Id_Inmuebles`),
    `Baño` INT(11) UNSIGNED,
    `Dormitorios` INT(11) UNSIGNED,
    `Cocina` INT(11) UNSIGNED,
    `Lavadero` INT(11) UNSIGNED,
    `Patio` INT(11) UNSIGNED 
);

/*Creo la tabla 'Agente e Inmuebles' que contiene los
datos del agente inmobiliario y los Inmuebles*/

CREATE TABLE `Agente e Inmuebles` (
    `Id_Agente e Inmuebles` INT(11) UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `Id_Agente` INT(11) UNSIGNED NOT NULL,
    FOREIGN KEY (`Id_Agente`) REFERENCES `Agentes Inmobiliarios`(`Id_Agente`),
    `Id_Inmuebles` int(11) UNSIGNED NOT NULL,
    FOREIGN KEY (`Id_Inmuebles`) REFERENCES `Inmuebles`(`Id_Inmuebles`)    
);

-- Creo las tablas 'Ventas' y 'Alquiler' que contiene los datos de las ventas --
-- y los alquileres que va haciendo el Agente de Inmuebles con los clientes, --
-- tanbien con su tabla en comun que es 'Forma de Pago' que guarda los datos --
-- de las diferentes formas de pago que son 3 -- 

CREATE TABLE `Ventas` (
    `Id_Ventas` INT(11) UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `Id_Intervinientes`INT(11) UNSIGNED NOT NULL,
    `Id_Monedas` INT(11) UNSIGNED NOT NULL,
    `Id_Forma_de_Pago` INT(11) UNSIGNED NOT NULL,
    `Id_Inmuebles` int(11) UNSIGNED NOT NULL,
    `Monto Total` float(10) UNSIGNED NOT NULL,
    `Fecha` DATE
);

CREATE TABLE `Forma_de_Pago` (
    `Id_Forma_de_Pago` INT(11) UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `Forma` varchar(50) COLLATE utf8_spanish_ci UNIQUE
);

CREATE TABLE `Alquiler` (
    `Id_Alquiler` INT(11) UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `Id_Intervinientes` INT(11) UNSIGNED NOT NULL,
    `Id_Monedas` INT(11) UNSIGNED NOT NULL,
    `Id_Forma_de_Pago` INT(11) UNSIGNED NOT NULL,
    `Id_Inmuebles` INT(11) UNSIGNED NOT NULL,
    `Monto Total` float(10) UNSIGNED NOT NULL,
    `Fecha` DATE,
    `Tipo de Garantia` VARCHAR(50) COLLATE utf8_spanish_ci NOT NULL
);

/*Creo la tabla 'Tipos de intervinientes' que contiene los datos
de que tipo de intervinientes es en cada venta o alquiler*/

CREATE TABLE `Intervinientes` (
    `Id_Intervinientes` INT(11) UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `Tipo` VARCHAR (50) COLLATE utf8_spanish_ci NOT NULL
);  

-- Creo las distintas claves foranes --
-- aparte de algunas tablas --   

/*Creo las cf para 'Inmuebles'*/

ALTER TABLE `Inmuebles`
ADD CONSTRAINT `fk_inmuebles__tipos_de_inmuebles`
FOREIGN KEY (`Id_Tipos de Inmuebles`)
REFERENCES `Tipos de Inmuebles`(`Id_Tipos de Inmuebles`);

ALTER TABLE `Inmuebles`
ADD CONSTRAINT `fk_inmuebles_monedas`
FOREIGN KEY (`Id_Monedas`)
REFERENCES `Monedas`(`Id_Monedas`);

ALTER TABLE `Inmuebles`
ADD CONSTRAINT `fk_inmuebles_estado`
FOREIGN KEY (`Id_Estado`)
REFERENCES `Estado`(`Id_Estado`);

/*Creo las cf para 'Ventas' */

ALTER TABLE `Ventas`
ADD CONSTRAINT `fk_ventas_intervinientes`
FOREIGN KEY (`Id_Intervinientes`)
REFERENCES `Intervinientes`(`Id_Intervinientes`);

ALTER TABLE `Ventas`
ADD CONSTRAINT `fk_ventas_monedas`
FOREIGN KEY (`Id_Monedas`)
REFERENCES `Monedas`(`Id_Monedas`);

ALTER TABLE `Ventas`
ADD CONSTRAINT `fk_ventas__forma_de_pago`
FOREIGN KEY (`Id_Forma_de_Pago`)
REFERENCES `Forma_de_Pago`(`Id_Forma_de_Pago`);

ALTER TABLE `Ventas`
ADD CONSTRAINT `fk_ventas_inmuebles`
FOREIGN KEY (`Id_Inmuebles`)
REFERENCES `Inmuebles`(`Id_Inmuebles`);

/* Creo las cf para 'Alquiler' */

ALTER TABLE `Alquiler`
ADD CONSTRAINT `fk_alquiler_intervinientes`
FOREIGN KEY (`Id_Intervinientes`)
REFERENCES `Intervinientes`(`Id_Intervinientes`);

ALTER TABLE `Alquiler`
ADD CONSTRAINT `fk_alquiler_monedas`
FOREIGN KEY (`Id_Monedas`)
REFERENCES `Monedas`(`Id_Monedas`);

ALTER TABLE `Alquiler`
ADD CONSTRAINT `fk_alquiler__forma_de_pago`
FOREIGN KEY (`Id_Forma_de_Pago`)
REFERENCES `Forma_de_Pago`(`Id_Forma_de_Pago`);

ALTER TABLE `Alquiler`
ADD CONSTRAINT `fk_alquiler_inmuebles`
FOREIGN KEY (`Id_Inmuebles`)
REFERENCES `Inmuebles`(`Id_Inmuebles`);
