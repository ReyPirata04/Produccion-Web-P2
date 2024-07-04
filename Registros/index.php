<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
$_SESSION;
?>
    <main>
    <h1>Iniciar Sesion</h1>
    <p>¿Primera Vez?<a href="registrarme.php"> Registrarse</a></p>

    <div class="login">
        <div class="formularios">        
            <form action="login.php" method="POST" >
                <legend>Login</legend>
                    <fieldset> 
                        <div>
                            <label for="user">Email</label><br>
                            <input type="email" id="user"
                            name="user" placeholder="Ingrese su Email">
                        </div>
                        <div>
                            <label for="pass">Contraseña</label><br>
                            <input type="password" id="pass"
                            name="pass" placeholder="Ingrese su Contraseña">
                        </div>
                        <div class="sub">
                            <input type="submit" value="Iniciar Sesion">
                        </div>
                    </fieldset>
            </form>
        </div>
    </div>
        <?php
         if (isset($_GET['error'])) {
            echo "<strong style=color:red>Tu usuario o contraseña no coninciden</strong>";    
         }

        ?>

    </main>
</body>
</html>
<?php
include_once("../HeaderAndFooter/Footer.php")
/*
include_once
Si algo esta mal corta esa sola parte y te tira un error.

required_once
Si algo esta mal corta todo lo que este de bajo y te tira un error.
*/
?>

