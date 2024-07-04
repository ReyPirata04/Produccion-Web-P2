-- Inserto los datos de las columnas --

INSERT INTO `Agentes Inmobiliarios`
(`Id_Agente`,`DNI`,`Nombre`,`Apellido`,`Telefono`,`Correo`,`Nacimiento`)
VALUES
(1,23457685,'Juan','Rodriguez',1526382775,'juan@ro','1980-06-23'),
(2,26180549,'Roberto','Sanchez',1582075603,'rober@sanchez','1982-01-17');

INSERT INTO `Direccion Del Agente`
(`Id_Direccion`,`Id_Agente`,`Calle`,`Localidad`,`Provincia`,`Pais`)
VALUES
(1,1,'Newton','Lomas de zamora','Buenos Aires','Argentina'),
(2,2,'Lavalle','CABA','Buenos Aires','Argentina');

INSERT INTO `Tipos de Inmuebles`
(`Id_Tipos de Inmuebles`,`Tipo`)
VALUES
(1,'PH'),
(2,'Casa'),
(3,'Departamento'),
(4,'Local'),
(5,'Lote');

INSERT INTO `Monedas`
(`Id_Monedas`,`Moneda`)
VALUES
(2323,'Pesos'),
(2324,'Dolar');

INSERT INTO `Estado`
(`Id_Estado`,`Estado`)
VALUES
(101,'Exelente'),
(102,'Muy Bueno'),
(103,'Bueno'),
(104,'A refaccionar');

INSERT INTO `Inmuebles`
(`Id_Inmuebles`,`Id_Tipos de Inmuebles`,`Id_Monedas`,`Id_Estado`,`Locacion`,
`Superficie Cubierta`,`Superficie Descubierta`,`Precio`,`Antiguedad`,`Descripcion`)
VALUES
(1,3,2323,102,'Avenida Corrientes 123','100m2',null,300000,'15 Años','Buen departamento'),
(2,4,2323,101,'Calle Lavalle 123','60m2',null,180000,'5 años','Buen Ambiente'),
(3,5,2324,104,'Avenida Callao 789','60m2','10m2',10000,'20 años','Buena Superficie'),
(4,2,2324,104,'Calle Reconquista 1011',null,'20m2',4000,'Nuevo','Buen Terreno');

INSERT INTO `Ambiente`
(`Id_Ambiente`,`Id_Inmuebles`,`Baño`,`Dormitorios`,`Cocina`,`Lavadero`,`Patio`)
VALUES
(1,1,2,3,2,1,null),
(2,2,1,null,null,2,null),
(3,3,3,5,1,2,1);

INSERT INTO `Agente e Inmuebles`
(`Id_Agente e Inmuebles`,`Id_Agente`,`Id_Inmuebles`)
VALUES
(1,1,1),
(2,1,2),
(3,2,3),
(4,2,4);

INSERT INTO `Clientes`
(`Id_Cliente`,`DNI`,`Nombre`,`Apellido`,`Telefono`,`Correo`,`Nacimiento`)
VALUES
(1,46118370,'Carlos','Gomez',1562067622,'juan@123','2004-07-16'),
(2,33349120,'Maria','Gonzales',1582669065,'maria@gon','1990-12-15'),
(3,31565005,'Pedro','Muños',1522478891,'pedro@12345','1989-11-23'),
(4,20456786,'Sofia','Pucho',1566203893,'sofia@pucho','1999-01-17'),
(5,34633628,'Mario','Gonzales',1534772300,'mario@gonzalez','1991-06-30');

INSERT INTO `Direccion Del Cliente`
(`Id_Direccion`,`Id_Cliente`,`Calle`,`Localidad`,`Provincia`,`Pais`)
VALUES
(1,1,'Calle Florida','CABA','Buenos Aires','Argentina'),
(2,2,'Avenida de Mayo','CABA','Buenos Aires','Argentina'),
(3,3,'Calle Sarmiento','CABA','Buenos Aires','Argentina'),
(4,4,'Calle Talcahuano','CABA','Buenos Aires','Argentina'),
(5,5,'Avenida Rivadavia','CABA','Buenos Aires','Argentina');

INSERT INTO `Intervinientes`
(`Id_Intervinientes`,`Tipo`)
VALUES
(203,'Comprador o Vendedor'),
(204,'Inquilino o Propietario'),
(205,'Garante');

INSERT INTO `Forma_de_Pago`
(`Id_Forma_de_Pago`,`Forma`)
VALUES
(501,'Efectivo'),
(502,'Tarjeta'),
(503,'Transferencia');

INSERT INTO `Ventas`
(`Id_Ventas`,`Id_Intervinientes`,`Id_Monedas`,`Id_Forma_de_Pago`,
`Id_Inmuebles`,`Monto Total`,`Fecha`)
VALUES
(1,203,2324,501,3,10000,'2024-01-19'),
(2,203,2323,502,4,8000000,'2023-03-04');

INSERT INTO `Alquiler`
(`Id_Alquiler`,`Id_Intervinientes`,`Id_Monedas`,`Id_Forma_de_Pago`,
`Id_Inmuebles`,`Monto Total`,`Fecha`,`Tipo de Garantia`)
VALUES
(1,204,2323,503,1,300000,'2024-01-20','Carta de Garantía Laboral')