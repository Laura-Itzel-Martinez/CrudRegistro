<?php

    $idRegistro = $_POST['idRegistro'];

    include "conexion.php";
    $conexion = conexion();

    $sql = "DELETE FROM t_registros WHERE id_registro = '$idRegistro'";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        header("location:../index.php");
    } else {
        echo "No se pudo eliminar, revisa tu query :(";
    }
?>