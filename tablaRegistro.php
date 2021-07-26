<?php
    include "servidor/conexion.php";
    $conexion = conexion();
    $sql = "SELECT id_registro,nombre,apellidos,fecha,sexo
            FROM t_registros";

    $respuesta = mysqli_query($conexion, $sql);
?>
<table class="table table-condensed table-hover">
    <thead>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Fecha de Nacimiento</th>
        <th>Sexo</th>
        <th>Edad</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </thead>
    <tbody>
        <?php 
            while($mostrar = mysqli_fetch_array($respuesta)) {  

                //fecha de nacimineto ingresada por el usuario
                $fecha_nacimiento = $mostrar['fecha'];
                //fecha actual de 2021  es Una representación numérica completa de un año, 4 dígitos
                $año_actual = date("Y");
                //DATEDIFF informa la diferencia entre la fecha de inicio y la fecha de finalización 
                $edad=date_diff(date_create($fecha_nacimiento),date_create($año_actual));      
        ?>
        <tr>
            <td><?php echo $mostrar['nombre'];?></td>
            <td><?php echo $mostrar['apellidos'];?></td>
            <td><?php echo $mostrar['fecha'];?></td>
            <td><?php echo $mostrar['sexo']; ?></td>
            <!--es el conciente su representación de dos dígitos de un año-->
            <th><?php echo $edad->format('%y') . " años" ?></th>
            <td>
                <form action="actualizar.php" method="POST">
                    <input type="text" hidden name="idRegistro" value="<?php echo $mostrar['id_registro']?>">
                    <button class="btn btn-warning">Editar</button>
                </form>
            </td>
            <td>
                <form action="servidor/eliminarRegistro.php" method="POST">
                    <input type="text" hidden name="idRegistro" value="<?php echo $mostrar['id_registro']?>">
                    <button class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        <?php
            }
        ?>
    </tbody>
</table>