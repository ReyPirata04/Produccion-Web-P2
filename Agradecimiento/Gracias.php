<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gracias</title>
    <link rel="stylesheet" href="../CSS/gracias.css">
</head>
<body>
    <header>
        <div>
        <nav>
            <a href="../Secciones/index.php"><img src="../img/La_serenisima.png" alt="La Serenisima Logo"></a>
            <ul>
                <li><a href="../Secciones/index.php">Inicio</a></li>
                <li><a href="../Secciones/Quienes_Somos.php">¿Quienes Somos?</a></li>
                <li><a href="../Secciones/Contacto.php">Trabaje Con Nosotros</a></li>
                <li><a href="../Secciones/Productos.php">Productos</a></li>
            </ul>
        </nav>
        </div>
        <h1>Gracias por ingresar sus datos</h1>
    <header>
    <main>
        <table border="1">
            <caption>Tus Datos</caption>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Mensaje</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    $nom;
                    $ape;
                    $correo;
                    $tel;
                    $cv;
                    $mensaje;      

                    if(isset($_POST["nom"])){
                        $nom = $_POST["nom"];
                        echo "<td>$nom</td>";
                    }
                    if(isset($_POST["ape"])){
                        $ape = $_POST["ape"];
                        echo "<td>$ape</td>";
                    }
                    if(isset($_POST["correo"])){
                        $correo = $_POST["correo"];
                        echo "<td>$correo</td>";
                    }
                    if(isset($_POST["tel"])){
                        $tel = $_POST["tel"];
                        echo "<td>$tel</td>";
                    }
                    if(isset($_POST["mensaje"])){
                        $mensaje =$_POST["mensaje"];
                        echo "<td>$mensaje</td>";
                    }
                    ?>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5">DATOS DEL FORMULARIO</td>
                </tr>
            </tfoot>
        </table>
        <?php


        var_dump($_FILES);

        ?>
        

    </main>
    <footer>
        <small>&copy;Todos Los Derechos Reservados</small>
    </footer>
</body>
</html>