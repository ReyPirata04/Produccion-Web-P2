<?php
session_start();
require_once("../Conect/conect.php");

if ($connect) {
    $nom = $_POST['nom'];
    $ape = $_POST['ape'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $consulta= "INSERT INTO usuarios SET NOMBRE='$nom', APELLIDO='$ape',EMAIL='$user',
    CLAVE=MD5('$pass'), FECHA_ALTA=NOW()";

    mysqli_query($connect,$consulta);

    header("Location: index.php?alta=ok");   
    
}

?>