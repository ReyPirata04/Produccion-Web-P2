<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resgistro</title>
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

    <main>
    <h1>Registrate</h1>
        <div class="registro">
            <div class="formularios">        
                <form action="alta.php" method="POST" >
                    <legend>Registrate</legend>
                    <fieldset>
                        <div>
                            <label for="nom">Nombre Completo</label><br>
                            <input type="tex" id="nom"
                            name="nom" placeholder="Nombre Completo">
                        </div>
                        <div>
                            <label for="user">Email</label><br>
                            <input type="email" id="user"
                            name="user" placeholder="Ingrese su Email">
                        </div>
                        <div>
                            <label for="user">Confirmar Email</label><br>
                            <input type="email" id="user"
                            name="user" placeholder="Confirmar Email">
                        </div>
                        <div>
                            <label for="pass">Contraseña</label><br>
                            <input type="password" id="pass"
                            name="pass" placeholder="Ingrese su Contraseña">
                        </div>
                        <div>
                            <label for="pass">Confirmar Contraseña</label><br>
                            <input type="password" id="pass"
                            name="pass" placeholder="Confirmar Contraseña">
                        </div>
                        <div class="sub">
                            <input type="submit" value="Registrarse">
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>

        <?php
                if (isset($_GET['alta'])) {
                    print "<strong style=color:green>Salio todo bien, podes loguear</strong>";
                }
        ?>
    </main>
</body>
</html>
<?php
include_once("../HeaderAndFooter/Footer.php")
?>