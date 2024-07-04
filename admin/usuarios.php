<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto Eliminado</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<?php
require_once("../Registros/admin.php");
include_once("../Conect/conect.php");
include_once("../HeaderAndFooter/Header.php");
include_once("../HeaderAndFooter/Footer.php");

$consulta = "SELECT ID,NIVEL, IFNULL(NOMBRE, '----') AS NOMBRE, ESTADO, IFNULL(APELLIDO, '----')
AS APELLIDO, EMAIL, DATE_FORMAT(FECHA_ALTA, '%d/%m/%Y') AS FECHA FROM usuarios";

$resultado = mysqli_query($connect,$consulta);
if ($resultado) {
    print "
    <table border=5>
    <caption>Usuario</caption>
    <div class=t-tabla>
    <tr>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Email</th>
    <th>Nivel</th>
    <th>Fecha</th>
    <th>Estado</th>
    <th>Botones</th>
    


    </tr>
    </div>
   ";        
    while ($filas=mysqli_fetch_array($resultado)) {
        print "<div";
        print "
        <tr>
        <td>$filas[NOMBRE]</td>
        <td>$filas[APELLIDO]</td>
        <td>$filas[EMAIL]</td>
        <td>$filas[NIVEL]</td>
        <td>$filas[FECHA]</td>
        <td>$filas[ESTADO]</td>
        ";
        print "</div>";

        print "<td>";
        if ($filas['ESTADO'] == 'activo') {
            print"<a href=banner.php?id=$filas[ID]>Bannear</a>";
        }else {
            print"<a href=activar.php?id=$filas[ID]>Activar</a>";
        }
        print "---";
        if ($filas['NIVEL'] == 'usuario') {
            print"<a href=admin.php?id=$filas[ID]>Hacer Admin</a>";
        }else {
            print"<a href=no_admin.php?id=$filas[ID]>Hacer Usuario</a>";
        }
        print "</td>";
        print "</tr>";

    }
    print "</table>";
}
    
?>
