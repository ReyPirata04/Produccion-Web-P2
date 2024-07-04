<?php
session_start();
include_once("../Conect/conect.php");

if ($connect) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $query="SELECT * FROM usuarios WHERE EMAIL='$user' AND CLAVE=MD5('$pass')";

    $resultado=mysqli_query($connect,$query);
    $fila= mysqli_fetch_assoc($resultado);

    if ($fila == NULL) {
        header("Location: index.php?error=no");
    }else{
        $_SESSION=$fila;
        header("Location: ../Panel/index.php");
    }

}

?>