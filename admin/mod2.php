<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria Modificada</title>
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
    if (isset($_GET["id"])) {
        $id=$_GET["id"];
    }
    $mod;
    if (isset($_GET["mod"])) {
        $mod=$_GET["mod"];
    }

    $consulta = "UPDATE categorias SET categoria='$mod' WHERE idCategoria='$id' ";   
    $resultado=mysqli_query($connect,$consulta);

    if ($resultado) {
        print "<div>
        <div class=titulos>
        <h1>Modificaste la categoria $mod </h1>
        </div>";
        print "</div>";
    }
}
?>

</body>

