<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto Eliminado</title>
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
<?php
require_once("../Registros/admin.php");
include_once("../Conect/conect.php");
include_once("../HeaderAndFooter/Footer.php");

if ($connect) {
    if (isset($_POST["codigoProducto"]) and isset($_POST["nombreProducto"]) and isset($_POST["precioProducto"])
    and isset($_POST["descripcionProducto"]) and isset($_POST["categoriaProducto"])) {

     $codigoProducto = $_POST["codigoProducto"]; 
     $nombreProducto = $_POST["nombreProducto"];
     $precioProducto = $_POST["precioProducto"];
     $descripcionProducto = $_POST["descripcionProducto"];
     $categoriaProducto = $_POST["categoriaProducto"];
    
    }   
    
    $consulta = "UPDATE productos SET codigoProducto='$codigoProducto',nombreProducto='$nombreProducto',
    precioProducto='$precioProducto',descripcionProducto='$descripcionProducto',
    categoriaProducto='$categoriaProducto' WHERE codigoProducto='$codigoProducto' ";
    
    $resultado=mysqli_query($connect,$consulta);

    if ($resultado) {
        print "<div class=titulos>";
            echo "<h1>El producto $nombreProducto fue modificado</h1>";
        print "</div>";
    }
}

?>
</body>