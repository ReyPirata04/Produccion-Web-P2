<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
<header>
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
session_start();
require_once("../HeaderAndFooter/Footer.php");
if (!isset($_SESSION['ID'])) {
    header("Location: ../Registros/index.php");
}else {
    var_dump($_SESSION);
}

?>

<a href="../Registros/logout.php">Salir</a>