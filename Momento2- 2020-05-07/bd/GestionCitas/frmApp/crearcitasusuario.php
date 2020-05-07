<?php include_once('AdminUsuario.php'); ?>

<br>
<br>
<section class="content-header">
    <h1 style="text-align: center">REGISTRO DE CITAS</h1>
</section>
<br>
<div class="container">

    <form method="post" action="../php/RegistrarCitaUsuario.php">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="idNombre">Nombres</label>
                <input type="text" class="form-control" name="idNombre" placeholder="Name" required>
            </div>
            <div class="form-group col-md-6">
                <label for="idApellido">Apellidos</label>
                <input type="text" class="form-control" name="idApellido" placeholder="Last Name" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="idDocumento">Documento</label>
                <input type="number" class="form-control" name="idDocumento" placeholder="Identity Document" required>
            </div>
            <div class="form-group col-md-6">
                <label for="idFechaNac">Fecha Nacimiento</label>
                <input type="date" class="form-control" name="idFechaNac" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="IdCiudad">Ciudad Residencia</label>
                <input type="text" class="form-control" name="IdCiudad" placeholder="City" required>
            </div>
            <div class="form-group col-md-3">
                <label for="idBarrio">Barrio Residencia</label>
                <input type="text" class="form-control" name="idBarrio" placeholder="Neighborhood" required>
            </div>
            <div class="form-group col-md-5">
                <label for="idDireccion">Direccion Residencia</label>
                <input type="text" class="form-control" name="idDireccion" placeholder="Direction" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="idTelefono">Numero Telefono Celular</label>
                <input type="number" class="form-control" name="idTelefono" placeholder="Cell phone Number" required>
            </div>
            <div class="form-group col-md-4">
                <label for="FechaHoraCira">Fecha y Hora Cita</label>
                <input type="datetime-local" class="form-control" name="FechaCita" required>
            </div>
            <div class="form-group col-md-4">
                <label for="idMedico">Medico</label>
                <select name="idMedico" class="form-control" required>
                    <option selected>Choose...</option>
                    <?php
                        require_once '../php/conexion.php';

                        $sql = 'SELECT Id,Nombres FROM Medico ';
                        $result = mysqli_query($conexion, $sql);
                        while ($datos = mysqli_fetch_array($result)) {
                           echo "<option value='" . $datos['Id'] . "'>" . $datos['Nombres'] . "</option>";
                    }
                    ?>
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>