<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administrativo</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
    <header >
        <div class="encabezado">
            <nav>
                <div>
                    <a href="../index.php"><img
                    src="../img/La_serenisima.png" alt="La SerenisimaLogo">
                    </a>
                </div>
            </nav>
        </div>
    </header>
    <main class="admin">
<?php
require_once("../Registros/admin.php");
include_once("../Conect/conect.php");
if ($connect) {
    print "<h1>Bienvenido al ABM</h1>";
    print "<p class=t-abm>Altas, Bajas y Modificaciones de la BD </p>";
    print "<a href=usuarios.php>Administrar Usuarios</a>";
    $consulta="SELECT * FROM categorias";
    $resultado=mysqli_query($connect,$consulta);
    if ($resultado) {
        print "
        <table border=5>
        <caption>Categorias</caption>
        <div class=t-tabla>
        <tr>
        <th>Categoria</th>
        <th>Modificar</th>
        <th>Eliminar</th>
        </tr>
        </div>
       ";        
        while ($filas=mysqli_fetch_array($resultado)) {
            print "<div";
            print "
            <tr>
            <td><a href=Productos.php?categoria=$filas[idCategoria] >$filas[categoria]</a></td>
            <td><a href=modificar.php?categoria=$filas[idCategoria] >UPDATE</a></td>
            <td><a href=eliminar.php?categoria=$filas[idCategoria] >DELETE</a></td>           
            </tr>
            ";
            print "</div>";
        }
        print "</table>";
    }
}
?>
<div class="alta">
<form action="alta.php" method="get">
    <div class="cat">
        <label for="alta">Crear Nueva Categoria</label>
        <input type="text" id="alta" name="alta">
    </div >
    <div class="boton">
        <input type="submit" value="Crear Categoria"></input>
    </div>
</form>
</div>

</main>
<?php
include_once("../HeaderAndFooter/Footer.php");
?>