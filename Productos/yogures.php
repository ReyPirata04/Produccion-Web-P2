<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yogures</title>
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
    include_once("../HeaderAndFooter/Footer.php");
    if (isset($_GET['categoria'])) {
        $codigo=$_GET['categoria'];

        $connect = mysqli_connect("localhost","root","","changuito","3306");

        $consulta= "SELECT codigoProducto, nombreProducto, descripcionProducto
        FROM productos WHERE categoriaProducto=$codigo";
        
        $resultado = mysqli_query($connect,$consulta);
        print "<div class=productos >";
        while ($fila=mysqli_fetch_array($resultado)) {
            print "<div>";
            print"<h1><a href=ficha.php?producto=$fila[codigoProducto] >$fila[nombreProducto]</a></h1>";
            print "</div>";
            print "<div >";
            print"<p>$fila[descripcionProducto]</p>";
            print "</div>";
        }
        print "</div>";
    }
?>
</main>
</body>
