<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto En Alta</title>
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

    $codigo = $_POST["codigoProducto"]; 
    $nombre = $_POST["nombreProducto"];
    $precio = $_POST["precioProducto"]; 
    $descripcion = $_POST["descripcionProducto"];
    $categoria = $_POST["categoriaProducto"];

    //$_FILES llegan las imagenes
    $nombre_imagenes = $_FILES['archivo']['name'];
    $temporal = $_FILES['archivo']['tmp_name'];
    $carpeta ='../img';
    $foto=$carpeta.'/'.$nombre_imagenes;
    move_uploaded_file($temporal,$carpeta.'/'. $nombre_imagenes);
}

$consulta = "INSERT INTO productos (codigoProducto,nombreProducto,fotoProducto,precioProducto,descripcionProducto,
categoriaProducto ) VALUE ('$codigo','$nombre','$foto','$precio','$descripcion','$categoria')";

$resultado=mysqli_query($connect,$consulta);


if ($resultado) {
    print "<div class=titulos>";
        echo "<h1>El producto $nombre fue agregado</h1>";
    print "</div>";

}

}

?>
</body>