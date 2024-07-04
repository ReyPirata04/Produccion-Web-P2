<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Categoria</title>
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
    if (isset($_GET["categoria"])) {
        $id=$_GET["categoria"];
    }
    $consulta = "SELECT * FROM categorias WHERE idCategoria='$id'";   
    $resultado=mysqli_query($connect,$consulta);
    if ($resultado) {
        $filas=mysqli_fetch_array($resultado);
        print "<div>
        <div class=titulos>
        <h1>Modificar Categoria</h1>
        </div>

        <form action=mod2.php method=get>
          <div class=cat>
            <label for=mod>Categoria</label>
            <input type=text id=mod name=mod value=$filas[categoria] >
          </div >

          <div>
            <input value=$filas[idCategoria] name=id type=hidden ></input>
          </div>

          <div class=boton>
          <input type=submit value=Modificar />
          </div>
          
        </form>";
        print "</div>";
    }
}
?>
</body>




