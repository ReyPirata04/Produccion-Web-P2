/*
Sentencias DML para consultar
Punto - e)
*/
SELECT * FROM alquiler 
SELECT Fecha FROM ventas
SELECT * FROM Clientes WHERE DNI LIKE = '46%'
UPDATE Clientes SET Telefono = '1123456746' WHERE Id_Cliente = 1
UPDATE alquiler SET Id_Forma_de_Pago='502' WHERE Id_Alquiler = 1
SELECT * FROM Inmuebles WHERE Id_Inmuebles = 3