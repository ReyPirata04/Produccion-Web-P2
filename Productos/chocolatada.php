<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chocolatada</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
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
<main>
    <?php
    $codigo;
    if (isset($_GET['categoria'])) {
        $codigo=$_GET['categoria'];

        $connect = mysqli_connect("localhost","root","","changuito","3306");

        $consulta= "SELECT codigoProducto, nombreProducto, descripcionProducto
        FROM productos WHERE categoriaProducto=$codigo";
        
        $resultado = mysqli_query($connect,$consulta);

        while ($fila=mysqli_fetch_array($resultado)) {
            print"<h1><a href=ficha.php?producto=$fila[codigoProducto] >$fila[nombreProducto]</a></h1>";
            print"<p>$fila[descripcionProducto]</p>";
        }
    }
?>
</main>
<?php
include_once("../HeaderAndFooter/Footer.php");
?>