<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria En Alta</title>
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
    $alta;
    if (isset($_GET["alta"])) {
        $alta=$_GET["alta"]; 
    }

    $consulta = "INSERT INTO categorias (categoria) VALUE ('$alta')";   
    $resultado=mysqli_query($connect,$consulta);

    if ($resultado) {
        print "<div class=titulos>";
        print "<h1>¡La Categoria $alta Se Creo Exitosamente!</h1>";
        print "</div>";
    }
}
?>
</body>