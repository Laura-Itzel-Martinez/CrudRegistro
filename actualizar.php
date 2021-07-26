<?php

$idRegistro = $_POST['idRegistro'];

    //traemos la conexion
    include "servidor/conexion.php";
    $conexion = conexion();
    //debemos obtener los datos asociados

    $sql = "SELECT id_registro,nombre,apellidos,fecha,sexo FROM t_registros
            WHERE id_registro = '$idRegistro'";

    $respuesta = mysqli_query($conexion, $sql);

    $datos = mysqli_fetch_array($respuesta);
?>
<?php include "header.php" ?>

<!-- Page Content -->
<div class="container">
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
            <h1 class="font-weight-light">Actualizar registros</h1>
            <p class="lead">
                <div class="row">
                    <div class="col">
                        <form action="servidor/agregarRegistros.php" method="post">
                            <label for="nombre">Nombres</label>
                            <input type="text"  name="nombre" required class="form-control" value="<?php echo $datos['nombre'] ?>">
                            <br>
                            <label for="apellidos">Apellidos</label>
                            <input type="text"  name="apellidos" required class="form-control"  value="<?php echo $datos['apellidos'] ?>">
                            <br>
                            <label for="fechaNacimiento">Fecha de nacimiento</label>
                            <input type="date" name="fechaNacimiento" required class="form-control"  value="<?php echo $datos['fechaNacimiento'] ?>">
                            <br>
                            <label for="sexo">Sexo</label>
                            <select name="sexo" id="sexo" class="form-control"  value="<?php echo $datos['sexo'] ?>">
                                <option values=>Selecciona tu sexo</option>
                                <option values="femenino">Femenino </option>
                                <option values="masculino">Masculino </option>
                            </select>
                            
                            <br>
                            <button class="btn btn-info">Actualizar</button>
                            <hr>
                        </form>
                    </div>
                </div>
            </p>
        </div>
    </div>
</div>

<?php include "footer.php" ?>