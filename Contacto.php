<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<?php
include_once("HeaderAndFooter/Header.php");
?>
    <main>
        <div>
            <h1><strong>Contacto</strong></h1>
        </div>    
        <div class="formularios">
            <legend><strong>Ingrese Sus Datos</strong></legend>
            <form action="Agradecimiento/Gracias.php" method="post" enctype="multipart-form-data" >
                <div >
                <div>
                    <label for="nom">Nombre:</label><br>
                    <input type="text" name="nom" id="nom"
                    placeholder="Ingrese su Nombre" required>
                </div>
                <div>
                    <label for="ape">Apellido:</label><br>
                    <input type="text" name="ape" id="ape"
                    placeholder="Ingrese su Apellido" required>
                </div>
                <div>
                    <label for="correo">Correo Electronico:</label><br>
                    <input type="email" name="correo" id="correo"
                    placeholder="Ingrese su Correo" required>
                </div>
                <div>
                    <label for="tel">Telefono:</label><br>
                    <input type="number" name="tel" id="tel"
                    placeholder="Ingrese su Telefono"required>
                </div>
                <div>
                    <label for="mensaje">Mensaje:</label><br>
                    <textarea name="mensaje" id="mensaje" cols="30" rows="5"
                    placeholder="Mensaje" required></textarea>
                </div>
                <hr>
                <div>
                    <button type="submit">Enviar Datos</button>
                </div>
                </div>
            </form>
        </div>
    </main>
<?php
include_once("HeaderAndFooter/Footer.php");
?>