<?php include "header.php" ?>

<!-- Page Content -->
<div class="container">
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
            <h1 class="font-weight-light">Registro de personas</h1>
            <p class="lead">
                <div class="row">
                    <div class="col">
                        <form action="servidor/agregarRegistros.php" method="post">
                            <label for="nombre">Nombres</label>
                            <input type="text"  name="nombre" required class="form-control">
                            <br>
                            <label for="apellidos">Apellidos</label>
                            <input type="text"  name="apellidos" required class="form-control">
                            <br>
                            <label for="fechaNacimiento">Fecha de nacimiento</label>
                            <input type="date" name="fechaNacimiento" required class="form-control">
                            <br>
                            <label for="sexo">Sexo</label>
                            <select name="sexo" id="sexo" class="form-control">
                                <option values=>Selecciona tu sexo</option>
                                <option values="femenino">Femenino </option>
                                <option values="masculino">Masculino </option>
                            </select>
                            
                            <br>
                            <button class="btn btn-info">Agregar</button>
                            <hr>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h3>Tabla de Registros</h3>
                        <?php include "tablaRegistro.php";?>
                    </div>
                </div>
            </p>
        </div>
    </div>
</div>

<?php include "footer.php" ?>