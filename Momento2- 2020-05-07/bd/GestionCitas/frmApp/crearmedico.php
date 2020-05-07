<?php include_once('Admin.php'); ?>

<br>
<br>

<section class="content-header" >
    <h1 style="text-align: center; ">CREACION DE MEDICOS</h1>
</section>
<br>
<div class="container" >
    <form  method="post" action="../php/RegistrarMedico.php" >
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="idDocumento">Documento</label>
                <input type="text" class="form-control" name="idDocumento" placeholder="Identity Document" required>
            </div>
            <div class="form-group col-md-4">
                <label for="idNombre">Nombres</label>
                <input type="text" class="form-control" name="idNombre" placeholder="Name" required>
            </div>
            <div class="form-group col-md-4">
                <label for="idTipo">Tipo</label>
                <select name="idTipo" class="form-control" placeholder="type" required>
                    <option selected>Choose...</option>
                    <option value="General">Medico General</option>
                    <option value="Odontologo">Medico Odontologo</option>
                    <option value="Oftalmologico">Medico Oftalmologico</option>
                    <option value="Especialista">Medico Especialista</option>
                </select>
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>