<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<?php
include_once("HeaderAndFooter/Header.php");
include_once("Conect/conect.php");
?>
    <main>    
        <div>           
            <h1><strong>Nuestros Productos</strong></h1>        
        </div>
        <div class="imagenes">
            <a href="Productos/yogures.php?categoria=1">
                <img class="img-1" src="img/Producto1.png" alt="Yogures"> 
            </a>
            <a href="Productos/quesos.php?categoria=2">
                <img class="img-2" src="img/Producto2.png" alt="Quesos"> 
            </a>
            <a href="Productos/chocolatada.php?categoria=3">
                <img class="img-3" src="img/Producto3.png" alt="Chocolatada"> 
            </a>
        </div>
    </main>
<?php
include_once("HeaderAndFooter/Footer.php");
?>