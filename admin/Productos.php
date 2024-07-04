<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
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
    if (isset($_GET['categoria'])) {
        $id=$_GET['categoria'];
    }
    print "<h1>Productos</h1>";
    print "<p class=t-abm>Altas, Bajas y Modificaciones de la BD </p>";

    $consulta="SELECT codigoProducto, nombreProducto FROM productos WHERE categoriaProducto=$id ";
    
    $resultado=mysqli_query($connect,$consulta);
    if ($resultado) {
        print "
        <table border=5>
        <caption>Productos</caption>
        <div class=t-tabla>
        <tr>
        <th>Productos</th>
        <th>Modificar</th>
        <th>Eliminar</th>
        </tr>
        </div>
       ";        
        while ($filas=mysqli_fetch_array($resultado)) {
            print "<div";
            print "
            <tr>
            <td>$filas[nombreProducto]</td>
            <td><a href=modProd.php?productos=$filas[codigoProducto] >UPDATE</a></td>
            <td><a href=eliminarProd.php?productos=$filas[codigoProducto] >DELETE</a></td>           
            </tr>
            ";
            print "</div>";
        }
        print "</table>";
    }
}
?>

<div class="alta">
<fieldset>
    <legend>Cargar de Productos</legend>
<form action="altaProd.php" method="post" enctype="multipart/form_data" >

    <div class="cat">
        <label for="codigoProducto"></label>
        <input type="number" id="codigoProducto" name="codigoProducto" require placeholder="Codigo Producto">
    </div >
    <div class="cat">
        <label for="nombreProducto">Nombre Producto</label>
        <input type="text" id="nombreProducto" name="nombreProducto" require >
    </div >
    <div class="cat">
        <label for="precioProducto">Precio Producto</label>
        <input type="number" id="precioProducto" name="precioProducto" require >
    </div >
    <div class="cat">
        <label for="descripcionProducto">Descripcion</label>
        <textarea id="descripcionProducto" name="descripcionProducto" ></textarea>
    </div >
    <div>
        <?php
            print "<input type=hidden name=categoriaProducto value=$id >";
        ?>
    </div>
    <div>
        <label for="archivo">Cargar Imagen</label>
        <input type="file" id="archivo" name="archivo">
    </div>
    </fieldset>
    <div class="boton">
        <input type="submit" value="Cargar Producto">
    </div>

</form>
</div>

</main>

<?php
include_once("../HeaderAndFooter/Footer.php");
?>