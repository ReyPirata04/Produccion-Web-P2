CREATE TABLE `categorias` (
  `idCategoria` tinyint(2) UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `categoria` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `categorias` (`idCategoria`, `categoria`) VALUES
(1, 'Yogures'),
(2, 'Quesos'),
(3, 'Chocolatadas');

CREATE TABLE `productos` (  
  `codigoProducto` int(12) UNSIGNED NOT NULL,
  `nombreProducto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `precioProducto` float(9,2) UNSIGNED DEFAULT NULL,
  `fotoProducto` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcionProducto` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `categoriaProducto` tinyint(2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `productos` (`codigoProducto`, `nombreProducto`, `precioProducto`,
`fotoProducto`,`descripcionProducto`,`categoriaProducto`) VALUES
(1, 'Frutilla', 1500.00, NULL, 'Facil de digerir', 1),
(2, 'Banana', 1500.00, NULL, 'Facil de digerir', 1),
(3, 'Original', 2300.00, NULL,'Vitamina A y D', 2),
(4, 'Light', 2500.00, NULL, 'Vitamina A y D', 2),
(5, 'Chocolatada 1l', 3000.00, NULL, 'Fibra alimentaria	0g', 3),
(6, 'Chocolatada 200ml', 1000.00, NULL, 'Fibra alimentaria 	0 g', 3);

ALTER TABLE `productos`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`categoriaProducto`) REFERENCES
  `categorias` (`idCategoria`) ON UPDATE CASCADE;
COMMIT;

CREATE TABLE `usuarios` (
  `ID` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(100) DEFAULT NULL,
  `APELLIDO` varchar(100) DEFAULT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `CLAVE` varchar(100) DEFAULT NULL,
  `NIVEL` varchar(100) DEFAULT NULL,
  `FECHA_ALTA` datetime DEFAULT NULL,
  `ESTADO` enum('activo','banneado') NOT NULL DEFAULT 'activo',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `sdfsdfsdfdsfdsf` (`EMAIL`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO `usuarios` VALUES ('1', 'lucas', 'flores', 'gian@ft.com',
'81dc9bdb52d04dc20036dbd8313ed055','Admin', '2014-11-06 21:35:46','activo');
INSERT INTO `usuarios` VALUES ('4', null, null, 'asdadasd@asdasd', 
'81dc9bdb52d04dc20036dbd8313ed055', 'usuario', '2014-11-06 21:50:21', 'banneado');
INSERT INTO `usuarios` VALUES ('6', null, null, 'a@email.com', 
'81dc9bdb52d04dc20036dbd8313ed055', 'usuario', '2014-11-06 22:03:47', 'activo');

