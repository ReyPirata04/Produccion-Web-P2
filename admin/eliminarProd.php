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
    $id;
    if (isset($_GET["productos"])) {
        $id=$_GET["productos"];
    }
    
    $consulta = "DELETE FROM productos WHERE codigoProducto='$id' ";   
    
    $resultado=mysqli_query($connect,$consulta);

    if ($resultado) {
        print "<div class=titulos>";
        print "<h1>¡El Producto Fue Eliminado Exitosamente!</h1>";
        print "</div>";
    }
}
?>
</body>