<?php include_once('Admin.php'); ?>

<br>
<br>
<section class="content-header">
	<h1 style="text-align: center">CAMBIO PASSWORD</h1>
</section>

<br>

<div class="container">

	<form method="post" action="../php/RegistrarCambioPassword.php">
	    <div class="form-row">
		    <div class="form-group col-md-4">
				<label>Usuario</label>
				<select name="usuario" class="form-control" required>
                    <option selected>Choose...</option>
                    <?php
                         require_once '../php/conexion.php';

                         $sql = 'SELECT Id,Nombres FROM usuarios ';
                         $result = mysqli_query($conexion, $sql);
                         while ($datos = mysqli_fetch_array($result)) {
                            echo "<option value='" . $datos['Id'] . "'>" . $datos['Nombres'] . "</option>";
                    }
                    ?>
                </select>
			</div>
			<div class="form-group col-md-4">
				<label>Nueva Contraseña</label>
				<input name="password1" id="password1" class="form-control" type="password" required>
			</div>

			

			<button type="submit" class="btn btn-primary">Cambiar</button>
			</button>
		</div>
	</form>

</div>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>