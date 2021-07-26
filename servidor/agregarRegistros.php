<?php

    include "conexion.php";

    $nombre = $_POST['nombre'];
    $apellidos=$_POST['apellidos'];
    $fecha=$_POST['fechaNacimiento'];
    $sexo=$_POST['sexo'];

    $conexion=conexion();

    $sql = "INSERT INTO t_registros (nombre, apellidos,fecha,sexo) VALUES ('$nombre', '$apellidos', '$fecha','$sexo')";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        header("location:../index.php");
    } else {
        echo "No se pudo agregar";
    }

?>


