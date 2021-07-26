<?php 

    $idRegistro = $_POST['idRegistro'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $fecha = $_POST['fechaNacimiento'];
    $sexo = $_POST['sexo'];
    

    include "conexion.php";
    $conexion = conexion();

    $sql = "UPDATE t_registros
            SET nombre = '$nombre', apellidos = '$apellidos' , fecha = '$fecha', sexo= '$sexo'
            WHERE id_registro = '$idRegistro";

    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        header("location:../index.php");
    } else {
        echo "No se pudo actualizar ";
    }