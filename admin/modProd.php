<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Producto</title>
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
    $consulta = "SELECT * FROM productos WHERE codigoProducto=$id ";   

    $resultado=mysqli_query($connect, $consulta);

    if ($resultado) {
        $filas=mysqli_fetch_array($resultado);
        print "<div>
        <div class=titulos>
        <h1>Modificar Producto</h1>
        </div>

        <form action=modProd2.php method=post enctype=multipart/form_data>
        <div class=cat>
            <h2>Codigo del Producto: $filas[codigoProducto]</h2>
            <input type=hidden name=codigoProducto value=$filas[codigoProducto] >
        </div >
        <div class=cat>
            <label for=nombreProducto >Nombre Producto</label>
            <input type=text id=nombreProducto name=nombreProducto value=$filas[nombreProducto] require>
        </div >
        <div class=cat>
            <label for=precioProducto >Precio Producto</label>
            <input type=number id=precioProducto name=precioProducto value=$filas[precioProducto] require>
        </div >
        <div class=cat>
            <label for=descripcionProducto >Descripcion</label>
            <textarea id=descripcionProducto name=descripcionProducto >$filas[descripcionProducto]</textarea>
        </div >

        <?php
        print <input type=hidden name=categoriaProducto value=$id >;
        ?>
        
        <div class=boton>
            <input type=submit value=Cargar Producto>
        </div>

        </form>";
        print "</div>";
    }

}

?>
</body>