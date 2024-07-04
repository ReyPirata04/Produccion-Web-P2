<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha</title>
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
<main>
<?php
if (isset($_GET['producto'])) {
    $codigo=$_GET['producto'];

    $connect = mysqli_connect('localhost','root','','changuito','3306');
    
    $consulta= "SELECT nombreProducto, fotoProducto, descripcionProducto, precioProducto
    FROM productos WHERE codigoProducto=$codigo ";
    
    $resultado= mysqli_query($connect,$consulta);
    
    while ($fila=mysqli_fetch_array($resultado)) {
       print"<h1>$fila[nombreProducto]</h1>";
       print"<img src=../img/$fila[fotoProducto] alta=$fila[nombreProducto] >";
       print"<p>$fila[descripcionProducto]</p>";
       print"<p>Precio:$fila[precioProducto]</p>"; 
    }
   }
?>
</main>
</body>

<?php
include_once("../HeaderAndFooter/Footer.php");
?>